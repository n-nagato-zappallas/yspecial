<?php
/**
 * 共通基底関数とか
 */
require_once 'DB.php'; //Include Pear:DB
// ########## ここから定数/変数定義 ##########
date_default_timezone_set('Asia/Tokyo');
ini_set( 'display_errors', 0 );

define('USER',       'web_editor' );
define('PASS',       'rotide_bew' );
define('DBNAME',     'webadmin' );
define('SERVERDEV',  '172.24.240.188' );
define('SERVERREAL', '172.24.4.219' );

// 本番フラグ
$real_flag = strpos( $_SERVER["HTTP_HOST"] .$_SERVER['REQUEST_URI'], 'web-dev' ) === false || $_REQUEST[ 'make' ] == '1';

// FLS:ロジックサーバ接続先
if( $real_flag ) {
	// 本番
	define('FLS',    'http://10.0.7.130:8080/Uranai/Uranai' );
} else {
	// test
	define('FLS',    'http://172.24.4.9:8080/Uranai/Uranai' );
}

// エラー状況
$msg = '';

//// Yahoo応答ヘッダーステータス
// ok    => 'YAHOO-CHARGE: 0\n',      # Successed HTML header.
// ng    => 'YAHOO-CHARGE: -1\n',     # Failed HTML header.
// free  => 'YAHOO-CHARGE: 9\n'       # Free HTML header.
$yahoo_charge_status = "9";

// SP判定
$device_mode = "";
if( strpos( $_SERVER["REQUEST_URI"], 'index_sp' ) !== false 
	|| ( !$real_flag && ( $_REQUEST[ 'device_mode' ] == 'sp' || strpos( $_REQUEST[ 't' ], '_sp' ) !== false ) ) )
	$device_mode = "sp";

// 入力パラメータ自分・相手用
$target = array( 'self', 'other' );


// ########## Smarty関数 ##########
$tmp_char = $device_mode == "sp" ?'UTF-8' :'EUC-JP';
define('SMARTY_RESOURCE_CHAR_SET', $tmp_char);
define('SMARTY_DIR', 'Smarty/libs/');
require_once(SMARTY_DIR .'Smarty.class.php');
define('SMARTY_TEMPLATE_DIR', '/srv/www/php/templates/yspecial/');
define('SMARTY_TEMPLATE_TEMP_DIR', '/srv/www/php/templates_tmp/yspecial/');

/**
 * Smarty実行用クラス
 */
class SmartyCommon extends Smarty {
    public $project_path;
    
    function SmartyCommon( $project_path ) {
		global $device_mode;
        $this->Smarty();
        $this->template_dir = SMARTY_TEMPLATE_DIR.$project_path;
        $this->compile_dir = SMARTY_TEMPLATE_TEMP_DIR.$project_path;
        $this->plugins_dir = SMARTY_DIR.'plugins/';
        $this->caching = false;
        if (is_callable('mb_internal_encoding')) {
            mb_internal_encoding(SMARTY_RESOURCE_CHAR_SET);
        }
    }
    
    function assign( $key, $val ) {
		global $device_mode;
		$str = $device_mode == "sp" ?$val :toEucjp( $val );
    	parent::assign( $key, $str );
    }
}

// ########## Controller関数 ##########
class baseInfo {
	private $data = array();
	
	public function set( $key, $val ) {
		$this->data[ $key ] = $val;
	}
	public function get( $key ) {
		return $this->data[ $key ];
	}
	public function getData() {
		return $this->data;
	}
}
/**
 * 入力情報保持クラス
 */
class selfInfo extends baseInfo {
	function __construct() {
		foreach( array( 'event', 'contents', 'menu_id', 't', 'preview', 'release_date' ) as $key )
			if( $_REQUEST[ $key ] )
				$this->set( $key, $_REQUEST[ $key ] );
	}

	function init( $user_keys ) {
		global $target;
		if( !$user_keys || !is_array( $user_keys ) )
			return;
		foreach( $target as $param )
			foreach( $user_keys as $key )
				if( $_REQUEST[ $key .'_' .$param ] ) {
					$val = rawurldecode( $_REQUEST[ $key .'_' .$param ] );
					$str = $device_mode == "sp" ?$val :toUtf8( $val );
					$this->set( $key .'_' .$param, $str );
					if( $key == 'sex' ) $this->set( 'sex_name_' .$param, $_REQUEST[ $key .'_' .$param ] == '1' ?'男性' :'女性' );
				}
	}
}

/**
 * メニュー情報保持クラス
 */
class menuInfo extends baseInfo {
	function __construct() {
		global $self;
		if( $self && $self->get('menu_id') && $self->get('contents') )
			$this->init( $self->get('menu_id'), $self->get('contents') );
	}
	
	function init( $menu_id, $contents ) {
		global $msg, $target;
		$sql  = "SELECT m.menu_id, m.fortune_cd, m.design_cd, m.category_no, m.charge, m.price, ";
		$sql .= "m.person, m.title, m.caption, c.text AS category_text, c.group_text, c.group_no, i.isp_mid ";
		for( $i = 1; $i <= 20; $i++ )
			$sql .= ", max( if( s.disp_no =  " .$i .", s.min_title, '' ) ) " .$i ."_min_title ";
		$sql .= "FROM " .$contents .".menu_list_tbl m ";
		$sql .= "LEFT JOIN " .$contents .".menu_category_tbl c USING( category_no ) ";
		$sql .= "LEFT JOIN " .$contents .".menu_isp_mid_tbl  i ON m.menu_id = i.menu_id AND i.isp_no = 70 ";
		$sql .= "LEFT JOIN " .$contents .".menu_list_sub_tbl s ON m.menu_id = s.menu_id ";
		$sql .= "WHERE m.menu_id = ? GROUP BY m.menu_id";
		$result = select( $sql, array( $menu_id ) );
		if( $result && $result[0] ) {
			$key = array_keys( $result[0] );
			foreach( $key as $k )
				$this->set($k, toUtf8( $result[0][$k] ));
			if( $this->get('person') == 1 )
				unset( $target[1] );
		} else $msg .= "[警告] 指定menu_idの情報がありません。<br>\n";
	}
}


// ########## ロジックサーバ関数 ##########
/**
 * ロジックサーバに接続
 * Argument:	$pkg    パッケージ名（ webteam ）
 * 				$logic  クラス名（ UechiUnion001 ）
 * 				$param  入力パラメータ
 * 				$type   結果要素のタグ名（ explanation, object ）
 * Return:		$result 結果を格納した１次連想配列
 */
function logicserver( $pkg = null, $logic = null, $param = null, $type = null ) {
    global $msg;
	$result = array();
	
	try{
		// 入力チェック
		if( empty( $pkg ) ) throw new Exception('パラメータエラー ：$pkg');
		if( empty( $logic ) ) throw new Exception('パラメータエラー ：$logic');
		if( empty( $param ) ) throw new Exception('パラメータエラー ：$param');
		if( $type != 'explanation' && $type != 'object' ) throw new Exception('パラメータエラー ：$type');
		
		// ロジックサーバから結果取得
		$key = md5( 'webteam' .date( 'YmdHi' ) .'fortune' );
		$url = FLS ."?pkg=" .$pkg ."&logic=" .$logic .$param ."&user_name=webteam&key=" .$key;
		$xml = file_get_contents( $url );
		if( !$xml )
			throw new Exception('urlが存在しません');
		$obj = simplexml_load_string($xml);
		if ( !$obj )
			throw new Exception('xmlエラー ：XMLパース');
		// resultタグ 結果コード判定
		checkResultCode( $obj->result );
		if ( !isset( $obj->content ) )
			throw new Exception('xmlエラー ：contntタグがない');
		
		/** ここから先のタグ解析は結果XMLを見ながら要設定 **/
		// 'explanation'方式
		if ( $type == 'explanation' && isset( $obj->content->explanation ) ) {
			foreach( $obj->content->explanation as $explanation ) {
				$a = $explanation->attributes();
				$key = (string)$a["id"][0];
				$val = (string)$explanation;
				$result[$key] = $val;
			}
		}
		// 'object'方式
		else if ( $type == 'object' && isset( $obj->content->object ) ) {
			foreach( $obj->content->object as $object ) {
				$a = $object->attributes();
				$key = (string)$a["id"][0];
				$val = (string)$object;
				$result[$key] = $val;
			}
		} else {
			throw new Exception('xmlエラー ：戻り値なし');
		}
	} catch ( Exception $e ) {
		$msg .= "[警告] ロジックサーバ接続失敗。" .$e ."<br>\n";
		SendMail( $msg, $pkg, $logic );
	}
	
	return $result;
}

/**
 * メール送信
 */
function SendMail( $msg, $pkg, $logic ) {
	/*------メールの内容--------*/
	//宛先
//	$to = "web-unit@ml.zappallas.com, web-tech@ml.zappallas.com";
	$to = "web-tech@ml.zappallas.com";
	//差出人
	$from = "s_takahashi@zappallas.com";
	//タイトル
	$subject = '【yspecial】エラー発生しました！ ';
	//メール内容取得
	$body = "yspecialAPIにてエラーが発生しました。\r\n日時"
		 .date('Y-m-d H:i:s') ."\r\n pkg:".$pkg ."  logic:". $logic
		 ."\r\n-------------------\r\n" .$msg;

	//送信
	$send_mail = mb_send_mail( $to, $subject, $body, "From:".$from );

	if ($send_mail == FALSE){
//		echo '送信に失敗しました。';
	}
}

function checkResultCode( $result ) {
    global $msg;
    $txt = array( "不明", "不明" );
    
	switch( $result ){
		case "2000":
			$txt = array( "正常",			"正常終了。" );
			break;
		case "3001":
			$txt = array( "ロジック依存",	"ユーザーが存在しません。" );
			break;
		case "4000":
			$txt = array( "システム",		"パッケージ／ロジックが登録されていません。" );
			break;
		case "4100":
			$txt = array( "日付",			"暦上日ではありません。" );
			break;
		case "4101":
			$txt = array( "パラメータ",		"日付フォーマットが正しくありません。(例:19750318)" );
			break;
		case "4102":
			$txt = array( "パラメータ",		"血液型コードが指定されていません。" );
			break;
		case "4103":
			$txt = array( "パラメータ",		"血液型コードは数値でなければなりません。" );
			break;
		case "4104":
			$txt = array( "パラメータ",		"血液型コードが正しくありません。" );
			break;
		case "4105":
			$txt = array( "パラメータ",		"性別コードが指定されていません。" );
			break;
		case "4106":
			$txt = array( "パラメータ",		"性別コードは数値でなければなりません。" );
			break;
		case "4107":
			$txt = array( "パラメータ",		"性別コードが正しくありません。" );
			break;
		case "4108":
			$txt = array( "パラメータ",		"日付が指定されていません。" );
			break;
		case "4109":
			$txt = array( "パラメータ",		"星座コード(有効範囲:01～12)が正しくありません。" );
			break;
		case "4110":
			$txt = array( "パラメータ",		"生年月日が指定されていません。" );
			break;
		case "4111":
			$txt = array( "パラメータ",		"必須項目が指定されていません。" );
			break;
		case "4112":
			$txt = array( "パラメータ",		"数字以外の文字が含まれています。" );
			break;
		case "4113":
			$txt = array( "パラメータ",		"任意の数字が設定されていません。" );
			break;
		case "4114":
			$txt = array( "パラメータ",		"任意の数字が１文字ではありません。" );
			break;
		case "4115":
			$txt = array( "パラメータ",		"解答の結果が指定されていません。" );
			break;
	}
	if( $result != "2000" )
		$msg .= "<br>\n" .$result .":" .$txt[0] ."エラー<br>\n" .$txt[1] ."<br>\n";
}

// ########## DB関数 ##########
/**
 * [ Web-dev環境 ] select文発行
 */
function select( $query, $param = array() ) {
    return selectBase( dsn_info_dev(), $query, $param );
}

/**
 * [ Web-dev環境 ] update, insert, delete文発行
 */
function edit( $query, $param = array() ) {
    return editBase( dsn_info_dev(), $query, $param );
}

/**
 * [ 本番環境 ] select文発行
 */
function selectReal( $query, $param = array() ) {
    return selectBase( dsn_info_real(), $query, $param );
}

/**
 * [ 本番環境 ] update, insert, delete文発行
 */
function editReal( $query, $param = array() ) {
    return editBase( dsn_info_real(), $query, $param );
}

/**
 * DB接続情報
 */
function dsn_info_dev() {
    $host     = SERVERDEV;
    $dbname   = DBNAME;
    $user     = USER;
    $passwd   = PASS;
    return sprintf( "mysql://%s:%s@%s/%s", $user, $passwd, $host, $dbname );
}
function dsn_info_real() {
    $host     = SERVERREAL;
    $dbname   = DBNAME;
    $user     = USER;
    $passwd   = PASS;
    return sprintf( "mysql://%s:%s@%s/%s", $user, $passwd, $host, $dbname );
}

/**
 * select文発行
 */
function selectBase( $info, $query, $param = array() ) {
    global $msg;
    $ret = array();
    $dbh = DB::connect( $info );
    $dbh->query( "SET NAMES utf8;" );
    $sth = $dbh->prepare( $query );
    $sth = $dbh->execute( $sth, $param );
    if( PEAR::isError( $sth ) ) {
        $msg .= "[警告] SQL実行時エラーが発生しました。" .$query ."<br>\n";
        $ret = array( array() );
    } else
        while ( $data = $sth->fetchRow( DB_FETCHMODE_ASSOC ) )
            $ret[] = $data;
    $dbh->disconnect();
    return $ret;
}

/**
 * update, insert, delete文発行
 */
function editBase( $info, $query, $param = array() ) {
    global $msg;
    $dbh = DB::connect( $info );
    $dbh->query( "SET NAMES utf8;" );
    $sth = $dbh->prepare( $query );
    $sth = $dbh->execute( $sth, $param );
    if( PEAR::isError( $sth ) )
        $msg .= "[警告] SQL実行時エラーが発生しました。" .$query ."<br>\n";
    $dbh->disconnect();
}


// ########## 便利関数 ##########
function nvl( $val, $def = '' ) {
	return is_null( $val ) ?$def :$val;
}
function getCharacode( $str ) {
	foreach( array( 'UTF-8', 'EUC-JP', 'SJIS', 'ASCII', 'JIS' ) as $charcode )
		if( mb_convert_encoding( $str, $charcode, $charcode ) == $str )
			return $charcode;
	return null;
}
function ce( $str, $charcode, $from ) {
	if( !$from )
		$from = getCharacode( $str );
	if( gettype($str) == 'array' ) {
		$ret = array();
		foreach ( $str as $key => $val ) {
			$ret[$key] = ce( $val, $charcode, $from );
		}
		return $ret;
	} else {
		
		return mb_convert_encoding( $str, $charcode, $from );
	}
}
function toUtf8( $str ) {
	return ce( $str, 'UTF-8', 'EUC-JP' );
}
function toEucjp( $str ) {
	return ce( $str, 'EUC-JP', 'UTF-8' );
}

function date_diff_local( $a, $b ) {
	return abs( strtotime($a) -strtotime($b) ) / (60 * 60 * 24);
}


/**
 * 入力パラメータのチェックと形成
 */
function checkInputParam(){
	global $self, $msg, $target;
	
	// 未入力チェック
	$selfData = $self->getData();
	$err_cnt = 0;
	foreach ( $selfData as $key => $val ) {
		if( empty( $val ) ) {
			if( $key == 'sex_other' && $self->get('sex_self') )
				$self->set('sex_other', $self->get('sex_self') == '1' ?'2' :'1');
			else
				$msg .= ','.$key.'に値がセットされていません';
		}
	}
	
	// 個別チェックと形成
	foreach ( $target as $key => $val ){
		if( $self->get('name_last_' .$val) && $self->get('name_first_'.$val) )
			$self->set( 'name_'.$val, $self->get('name_last_'.$val) .$self->get('name_first_'.$val) );
		if( $self->get('birth_year_'.$val) && $self->get('birth_mon_'.$val) && $self->get('birth_mday_'.$val) ) {
			$y = sprintf( '%04d', $self->get('birth_year_'.$val) );
			$m = sprintf( '%02d', $self->get('birth_mon_'.$val) );
			$d = sprintf( '%02d', $self->get('birth_mday_'.$val) );
			if( !checkdate( $m, $d, $y ) ) {
				$msg .= ',birthday_'.$val.'が日付として正しくありません';
			} else if( $y.$m.$d < 19300101 || $y.$m.$d > 20181231 ) {
				$msg .= ',birthday_'.$val.'が占断範囲外の日付です';
			} else {
				$self->set('birthday_'.$val, sprintf( '%04d-%02d-%02d', $y, $m, $d ));
			}
		}
	}

	return;
}

/**
 * 置き換え文字列対応
 */
function replace_name( $str ) {
	global $self, $msg, $target;
	$ret = str_replace( "[%NAME_SELF%]",  $self->get('name_self'), $str );
	if( $self->get('name_other') )
		$ret = str_replace( "[%NAME_OTHER%]", $self->get('name_other'), $ret );
	return $ret;
}

?>