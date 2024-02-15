<?php
require_once './../function.php';
$self = new selfInfo;
// 入力値
//$user_keys	= array( 'name', 'sex', 'birth_year', 'birth_mon', 'birth_mday', 'kana_last', 'kana_first' );
$user_keys	= array( 'name', 'sex', 'birth_year', 'birth_mon', 'birth_mday' );
$self->init( $user_keys );


if( !$self->get('birth_year_self') ) {
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="copyright" content="Copyright(C)ZAPPALLAS,INC All Rights Reserverd." />
    <meta name="Content-Language" content="ja" />
    <meta name="Cache-Control" content="no-cache" />
    <meta name="Pragma" content="no-cache" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <title>[api test] getters_2022</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript">
    <!--
$(function() {

    // URL
    //     http://web-dev.ura.pga.jp:8080/yspecial/getters_2022/test.php

    // 二人用メニュー
    var arr2 = [ 'test2'
                ,'nv21_0002' ,'nv21_0004' ,'nv21_0006' ,'nv21_0010' ,'nv21_0014', 'nv21_0018' ,'nv21_0022' ,'nv21_0026' ];

    /**
     * request
     *   destination
     *     http : http://web-portal-api.pga.jp/yspecial/getters_2022/test
     *     ssl  : https://web-portal-api.zappallas.com/yspecial/getters_2022/test
     **/
    $.getJSONP = function( param, key, callback ) {
        var url = location.protocol == 'https:' 
                ? 'https://web-portal-api.zappallas.com' 
                : 'http://web-portal-api.pga.jp';
        url += '/yspecial/getters_2022/test.php';

        //  テスト用設定
        url = 'http://web-dev.ura.pga.jp:8080/yspecial/getters_2022/test.php';
//        url = 'http://web-portal-api.pga.jp/yspecial/getters_2022/test.php';
//        url = 'https://web-portal-api.zappallas.com/yspecial/getters_2022/test.php';


        return $.ajax({
            url:           url,
            data:          param,
            dataType:      'jsonp',
            jsonpCallback: key
        }).then( callback, function(){ alert("通信が途絶えました＞＜\nたぶんエラーです") } );

    }


    /**
     * event
     **/
    $('#btn_go').bind('click', function() {
        $('#res_').html("");

        if( ! checkInputData( 'self' ) ) {
            alert( 'self:NG Data' );
            return;
        }

        var param = {
            menu_id:          $('#menu_id').val(),
            name_self:        $('#name_self').val(),
            kana_last_self:   $('#kana_last_self').val(),
            kana_first_self:  $('#kana_first_self').val(),
            birth_year_self:  $('#birth_year_self').val(),
            birth_mon_self:   $('#birth_mon_self').val(),
            birth_mday_self:  $('#birth_mday_self').val(),
            sex_self:         $('input:radio[name="sex_self"]:checked').val()
        };

        if( arr2.indexOf( $('#menu_id').val() ) >= 0 ) {
            if( ! checkInputData( 'other' ) ) {
                alert( 'other:NG Data' );
                return;
            }
            param['name_other']       = $('#name_other').val();
            param['kana_last_other']  = $('#kana_last_other').val();
            param['kana_first_other'] = $('#kana_first_other').val();
            param['birth_year_other'] = $('#birth_year_other').val();
            param['birth_mon_other']  = $('#birth_mon_other').val();
            param['birth_mday_other'] = $('#birth_mday_other').val();
        }

        if( checkDebugDate() )
            param['now']       = $('#debug_date').val();
            
        $.getJSONP( param, $('#menu_id').val(), setData );
    });

    $('input[name="sex_self"]:radio').change( function() {
        $('#sex_other').val( $(this).val() == '1' ?'2' :'1' );
    });

    $('label[for="female_self"], label[for="male_self"]').click( function() {
        $('#sex_other').val( $(this).attr('for') == 'female_self' ?'1' :'2' );
    });

    $('#menu_id').change( function() {
        otherInfo();
    });
    function otherInfo() {
        if( arr2.indexOf( $('#menu_id').val() ) >= 0 )
            $('tr.other').show();
        else
            $('tr.other').hide();
    }
    
    // 初期表示
    otherInfo();
    var now_date = new Date();
    var yyyy = now_date.getFullYear();
    var mm = ( '00' +( now_date.getMonth() +1 ) ).slice(-2);
    var dd = ( '00' +now_date.getDate() ).slice(-2);
    $('#debug_date').val( yyyy +'-' +mm +'-' +dd );


    /**
     * change
     **/
    function setData( result ) {
        var str = "";
        if( result['status'] ) {
            items = result['result'][0]['items'];
            for ( var i in items )
                str += "<b>title : <span class='re'>" + items[i]['title'] + "</span></b><br><b>body  : </b>" + items[i]['body'] + "<br><br>";
        } else
            str += "<b>エラーが発生しました</b><br>" +result['error_msg'];
        $('#res_').html( str );
    }


    /**
     * check
     **/
    function checkInputData( target ) {
        y = $('#birth_year_' +target).val();
        m = $('#birth_mon_'  +target).val();
        d = $('#birth_mday_' +target).val();
        return ( y.length && m.length && d.length ) && checkDate( y, m, d );
    }

    function checkDebugDate() {
        ymd = $('#debug_date').val();
        return ymd.length == 10 && checkDate( ymd.substr( 0, 4 ), ymd.substr( 5, 2 ), ymd.substr( 8, 2 ) );
    }

    function checkDate( y, m, d ) {
        nw = new Date();
        dt = new Date( y, m -1, d );
        ret = /^\d*$/.test( y +m +d );
        ret &= dt.getFullYear() == y && dt.getMonth() == m -1 && dt.getDate() == d;
        ret &= y > 1930 && y <= 2022;
        return ret;
    }

});
    // -->
    </script>
<style type="text/css">
<!--
 BODY{  margin:auto;  background-color: #FCF3D6;  }
#base{  margin:auto;  background: #FCF3D6;  text-align: center;  width: 620px;  padding-bottom: 24px;  font-size: 12px;  }
#base H1{  text-align: center;  border: solid 1px #000;  color: #000;  margin-top: 16px;  }
#base H2{  text-align: center;  border: solid 1px #000;  color: #fff;  background: #785916;  width: 480px;  margin: 18px auto 3px auto;  padding: 0;  }
.inputField, TABLE{  text-align: center;  width: 480px;  margin: 12px auto 0;  color: #000;  font-size: 12px; }
.inputField TABLE{  width: 250px;  }
#res_ {  text-align: left;  }
.re { color: #f00 }
-->
</style>
</head>
<body>
  <div id="base">
    <h1>[api test] getters_2022</h1>
    
    <h1>
      <a href="http://web-portal-api.pga.jp/yspecial/getters_2022/test.php">本番通常通信版</a><br>
      <a href="https://web-portal-api.zappallas.com/yspecial/getters_2022/test.php">本番SSL通信版</a>
    </h1>
    <!--- INPUT FIELD --->
    <h2>input field</h2>
    <div id="form">
      <form name="frmMain" method="post" action="" onSubmit="return false">
        <div name="frmElements" id="frmElements" class="input_style">
          <div class="inputField">
            <table>
              <tr>
                <td>menu_id</td><td>
                <select id="menu_id"   name="menu_id">
                  <optgroup label="本との整合性">
                    <option>test1</option>
                  </optgroup>
                 
                </select>
                </td>
              </tr>
              <!-- tr>
                <td>name_self</td><td>
                <input type="text" id="name_self"   name="name_self"   size="20" maxlength="16" value="ひらおかひでお" />
              </tr>
              <tr>
                <td>kana_last_self</td><td>
                <input type="text" id="kana_last_self"  name="kana_last_self"  size="20" maxlength="8" value="ひらおか" />
              </tr>
              <tr>
                <td>kana_first_self</td><td>
                <input type="text" id="kana_first_self" name="kana_first_self"  size="20" maxlength="8" value="ひでお" />
              </tr -->
              <tr>
                <td>birthday_self</td><td>
                <input type="text" id="birth_year_self" name="birth_year_self" size="5" maxlength="4" value="1957" />
                <input type="text" id="birth_mon_self"  name="birth_mon_self"  size="3" maxlength="2" value="05" />
                <input type="text" id="birth_mday_self" name="birth_mday_self" size="3" maxlength="2" value="28" /></td>
              </tr>
              <tr>
                <td>sex_self</td><td>
                <input type="radio"  id="female_self" name="sex_self"  value="2" checked="checked" /><label for="female_self">female</label>
                <input type="radio"  id="male_self"   name="sex_self"  value="1" /><label for="male_self">male</label>
                <input type="hidden" id="sex_other"   name="sex_other" value="1"></td>
              </tr>
              <tr class="other">
                <td>name_other</td><td>
                <input type="text" id="name_other"   name="name_other"   size="20" maxlength="16" value="鰹節花子" />
              </tr>
              <tr class="other">
                <td>kana_last_other</td><td>
                <input type="text" id="kana_last_other"  name="kana_last_other"  size="20" maxlength="8" value="こみやま" />
              </tr>
              <tr class="other">
                <td>kana_first_other</td><td>
                <input type="text" id="kana_first_other" name="kana_first_other"  size="20" maxlength="8" value="ようこ" />
              </tr>
              <tr class="other">
                <td>birthday_other</td><td>
                <input type="text" id="birth_year_other" name="birth_year_other" size="5" maxlength="4" value="1942" />
                <input type="text" id="birth_mon_other"  name="birth_mon_other"  size="3" maxlength="2" value="01" />
                <input type="text" id="birth_mday_other" name="birth_mday_other" size="3" maxlength="2" value="24" /></td>
              </tr>
              <tr>
                <td>debug_date</td><td>
                <input type="text" id="debug_date" name="debug_date" size="20" maxlength="10" value="2011-11-10" /><br /></td>
              </tr>
            </table>
            <div><input type="button" id="btn_go" value="go" /></div>
          </div>
        </div>
      </form>
    </div>

    <!--- RESULT FIELD --->
    <h2>result field</h2>
    <p id="res_"></p>
    
  </div>
</body>
</html>
<?php } else {

/* 暫定対応 */
	$now = str_replace( "-", "", nvl($_REQUEST[ 'now' ]) );
//	if( !$now || !is_numeric ( $now ) || strlen( $now ) != 8 ) $now = date("Ymd");
//	if( $menuData['release_date'] ) $now = (intval( substr($menuData['release_date'],0,6) ) +1) .'01';
	$self->set( 'now', $now );
	$self->set( 'year_now', substr($now, 0, 4) );
	$self->set( 'month_now', substr($now, 4, 2) );
	$self->set( 'mday_now', substr($now, 6, 2) );

/*	*/
	$self->set( 'kana_last_self', $_REQUEST[ 'kana_last_self' ] );
	$self->set( 'kana_first_self', $_REQUEST[ 'kana_first_self' ] );
	$self->set( 'kana_last_other', $_REQUEST[ 'kana_last_other' ] );
	$self->set( 'kana_first_other', $_REQUEST[ 'kana_first_other' ] );



require_once './logic.php';


$result = makeResult();
echo $self->get('menu_id') .'({' ."\n";
echo '  "error_msg":"",' ."\n";
echo '  "status":1,' ."\n";
echo '  "result": ' .$result ."\n";
echo '})';





}

/**
 */
function makeResult() {
	global $self, $menuData;
	$ret = "";
	
	// 通常メニューテスト
	if( strpos( $self->get('menu_id'), 'test' ) === false ) {
		include( './data/' .$self->get('menu_id') .'.php' );
		// ロジックコード取得
		$arr_cd = get_logic_cd( $menuData['contents'] );
		$base = get_base_info( $menuData['contents'], $arr_cd );
		// 結果作成
		$ret .= "[\n    {\n      \"items\": [\n";
		// 基本性格
		$ret .= "{\n\"title\": \"基本性格：自分【画像】\",\n\"body\": \"" .replace_name( $base['base_id_self'] ) ."\"\n},\n";
		$ret .= "{\n\"title\": \"基本性格：自分【ALT】\",\n\"body\": \"" .replace_name( $base['base_alt_self'] ) ."\"\n},\n";
		$ret .= "{\n\"title\": \"基本性格：自分【テキスト】\",\n\"body\": \"" .replace_name( $base['base_text_self'] ) ."\"\n},\n";
		if( $menuData['person'] == 2 ) {
			$ret .= "{\n\"title\": \"基本性格：相手【画像】\",\n\"body\": \"" .replace_name( $base['base_id_other'] ) ."\"\n},\n";
			$ret .= "{\n\"title\": \"基本性格：相手【ALT】\",\n\"body\": \"" .replace_name( $base['base_alt_other'] ) ."\"\n},\n";
			$ret .= "{\n\"title\": \"基本性格：相手【テキスト】\",\n\"body\": \"" .replace_name( $base['base_text_other'] ) ."\"\n},\n";
		}
		// 小メニュー
		for( $i = 0; $i < count($text); $i++ ) {
			$c = count($text) - $i == 1 ?"" :",";
			$ret .= "         {\n"
				  . "           \"title\": \"" .$menuData[ ($i+1) .'_min_title' ] ."\",\n"
				  . "           \"body\": \"" .replace_name( $text[ $i ][ $arr_cd[ $logic ] ] ) ."\"\n"
				  . "         }" .$c ."\n";
		}
		$ret .= "      ]\n    }\n  ]";
	}
	// 本との整合性テスト
	else {
		$menuData['person'] = $self->get('menu_id') == 'test1' ?1 :2;
		
		// 結果作成
		$ret .= "[\n    {\n      \"items\": [\n";
		$item = "";
		//foreach( array( 'hoshihitomi_zap','shiuma2_zap', 'spshimada_zap', 'suisho_zap','fujiko_ccs' ) as $contents ) {
		foreach( array( 'getters1' ) as $contents ) {
			$arr_cd = get_logic_cd( $contents );
			foreach( $arr_cd as $key => $val ) {
				$item .= ",{\n"
					  . "\"title\": \"" .$contents.' [ '.$key.' ]' ."\",\n"
					  . "\"body\": \"" .$val ."\"\n"
					  . "}\n";
			}
		}
		$ret .= substr( $item, 1 ) ."      ]\n    }\n  ]";
	}
	return $ret;
}
 ?>