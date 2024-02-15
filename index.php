<?php
/**
 * 開発環境
 * http://web-dev.ura.pga.jp:8080/yspecial/index.php
 * 本番環境
 * PC
 *     https://web-portal-api.zappallas.com/yspecial/index.php
 * SP
 *     https://web-portal-api.zappallas.com/yspecial/index_sp.php
 */
require_once 'function.php';

// 入力情報保持クラス
$self = new selfInfo;

// プレビューモード
$preview = $self->get('preview') == 'on';
if( strpos( $_SERVER["HTTP_HOST"], 'web-dev' ) !== false && strpos( $self->get('t'), 'result' ) !== false )
	$preview = true;

// Template初期化
$SmartyObj =  new SmartyCommon( $self->get('event') ."/" );

// コントローラ起動
if ( is_readable( $self->get('event') .'/' .'controller.php' ) )
	include( $self->get('event') .'/' .'controller.php' );



// 入力情報を画面セット
$selfData = $self->getData();
foreach( $selfData as $key => $val )
	$SmartyObj->assign( $key, $val );

if( strlen( $msg ) > 0 ) {
	$SmartyObj->assign( 'msg', $msg );
	$yahoo_charge_status = '-1';
	
	if( $device_mode == "sp" ) {
		$self->set('page', 'error_sp');
	} else {
		$self->set('page', 'error');
	}
	$SmartyObj->assign( 'error_msg', 'エラーが発生しました。<br>しばらく時間をおいて再度お試しください。' );
}

//結果を出力
if( $self->get('isp') == 70 ) {
	header( 'YAHOO-CHARGE: ' .$yahoo_charge_status .'\n' );
} else if( $self->get('isp') == 40 ) {
	header( 'X-NIFTY-Billing: OK\n' );
} else {
	header( 'YAHOO-CHARGE: ' .$yahoo_charge_status .'\n' );
}


$SmartyObj->display( $self->get('page') .'.tpl' );

?>
