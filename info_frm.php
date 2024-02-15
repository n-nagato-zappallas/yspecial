<?php
/************************************************************
 * [PC] 特集お問い合わせフォーム
 * exec URL
 * http://web-dev.ura.pga.jp:8080/yspecial/info_frm.php
 * https://web-portal-api.zappallas.com/yspecial/info_frm.php
 ************************************************************/
header('Content-Type: text/html; charset=EUC-JP');

// ########## ここから定数/変数定義 ##########
define('VIEW',         '0');
define('MAIL',         '1');

$mode = is_null( $_REQUEST['mode'] ) ?VIEW :$_REQUEST['mode'];
$title = is_null( $_REQUEST['title'] ) ?'' :$_REQUEST['title'];
$isp = is_null( $_REQUEST['isp'] ) ?'' :$_REQUEST['isp'];


// ########## ここから入力画面 ##########
// HTMLの作成
if( $mode == VIEW ) { 

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta name="viewport" content="width=630px">
    <meta http-equiv="Content-Type" content="text/html; charset=EUC-JP" />
    <meta name="copyright" content="Copyright(C)cocoloni,Inc All Rights Reserverd." />
    <meta name="Content-Language" content="ja" />
    <meta name="Cache-Control" content="no-cache" />
    <meta name="Pragma" content="no-cache" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <title>■お問い合わせフォーム</title>
<style>
*{  margin: 0;  padding: 0; }
IMG{  border: 0; }
FORM{  margin: 0 auto;  padding: 0; }
TABLE{  border-collapse: collapse;  empty-cells: hide;  text-align: left;  font-size: 1em;  border: 0;  padding: 0; }
TR, TD, TH, THEAD, TBODY, TFOOT, COLGROUP, COL{}
UL{  margin: 0;  padding: 0;  list-style-type: disc;  text-align: left; }
LI{  margin: 0;  padding: 0;  line-height: 120%; }
EM{  font-weight: normal; }
SPAN{  color: #f00;  text-align: left; }
BODY{  margin: 0 auto;  padding: 0;  text-align: center;  font-size: 80%;  line-height: 130%;  color: #5e5e5e; }
H1,H2,H3,H4,H5{  margin: 0 auto;  text-align: left;  color: #fff;  background: #666;  border-bottom: 2px solid #ccc; }
#content{  margin: 20px auto;  width: 630px;  text-align: center;  padding:0 15px; }
#content H1{  margin: 0 auto 10px;  font-size: 1.3em;  padding: 3px 5px; }
#content H2{  margin: 0 auto 10px;  font-size: 1.0em;  padding: 2px 5px; }
#content UL{  margin: 10px 0 0 20px;  padding: 0; }
#content LI{  margin: 0;  padding: 0; }
#content .privacy{  margin: 10px auto 20px;  width: 446px;  border: solid 1px #000000;  text-align: left;  padding: 5px; }
TABLE{  margin: 10px auto 15px;  width: 630px;}
TH{  width: 260px;  padding: 0 0 5px 0;  text-align: right;  font-weight: normal; }
TD{  width: 370px;  padding: 0 0 5px 0; }
SPAN.attention{  color: #f00;  font-size: 0.9em; }
.link{  margin: 20px auto 30px; }
#footer{  margin: 30px auto;  border-top: 1px solid #000;  padding-top: 10px; }
</style>
    <script type="text/javascript">
    <!---
    var now_date	= new Date ( );
    var year_num	= 3;
    function selectCurrentDate ( ) {
    	document.frmMain.reset();
    	var year	= now_date.getFullYear ( );
    	var mon		= now_date.getMonth ( );
    	var day		= now_date.getDate ( );
    	var hour	= now_date.getHours ( );
    	var min		= now_date.getMinutes ( );
    	year	= year_num - 1;
    	day	-= 1 ;
    	// Listbox選択
    	with ( document.forms['frmMain'] ) {
    		selectListIdx ( sUseyear,  year );
    		selectListIdx ( sUsemonth, mon  );
    		selectListIdx ( sUseday,   day  );
    		selectListIdx ( sUsehour,  hour );
    		selectListIdx ( sUsemin,   min  );
    	}
    }
    function selectListIdx ( list, idx ) {
    	list.selectedIndex	= idx ;
    }
    function check_radio( order_check ) {
      document.getElementById('order_area').style.display = order_check;
    }
    
    function chk( frm ) {
    	var str = frm.tComment.value;
        if( ! str ) {
            alert("お問い合わせ内容を入力してください");
            return false;
        }
    	str = frm.tName.value;
        if( ! str ) {
            alert("お名前を入力してください");
            return false;
        }
        
        // メールアドレス
        str = frm.tAddress.value;
        if( ! str ) {
            alert("メールアドレスを入力してください");
            return false;
        } else if( ! str.match(/[!#-9A-~]+@+[a-z0-9]+.+[^.]$/i) ) {
                alert("メールアドレスの形式が不正です");
                return false;
        }
        
        frm.submit();
    }
    //--->
    </script>
  </head>
<body onLoad="selectCurrentDate( );">
<noscript><p style="color:red;font-weight:bold;font-size:1.3em;text-align:center;background-color:white;">当コンテンツをご利用になるにはJavaScriptをONにする必要があります。JavaScriptをONにして下さい。</p></noscript>
  <div id="content">
    <h1>■お問い合わせフォーム</h1>
    <ul>
    <li>このたびは「<?=$title ?>」をご利用いただき、誠にありがとうございます。</li>
    <li>当サイトのコンテンツ内容や動作についてのお問い合わせは、下記のお問い合わせフォームより送信願います。</li>
    <li>お手数ですが、<span style="color: #ff0000;">すべての項目にご記入</span>いただき、送信ボタンを押してください。</li>
    <li> お問い合わせ内容によっては、調査およびご返信に、お時間がかかる場合もございますので、何卒、ご了承いただけますよう、よろしくお願い致します。</li>
    </ul>
    <div class="privacy"><p>株式会社cocoloniは、ご入力された情報を、占いサービスを提供するためにのみ使用し、情報の蓄積を行ったり他の目的で使用することはありません。<br />当社<a href="https://cocoloni.com/privacypolicy/" target="_privacy" title="個人情報保護方針">個人情報保護方針</a>（外部サイト）をご確認の上、必要情報をご入力下さい。</p></div>

    <form name="frmMain" method="post" action="">
    <input type="hidden" name="mode" value="1">
    <input type="hidden" name="isp" value="<?=$isp ?>">
    <h2>●お問い合わせについて</h2>
    <table>
    <tr>
    <th>特集名：</th>
    <td><input type="text" name="tContents" size="60" value="<?=$title ?>" /></td>
    </tr>
    <tr>
<?php if( $isp == 10 ) { ?>
    <th style="vertical-align:top;padding-top:5px;">お問い合わせの種類：</th>
    <td>
      <input type="radio" name="order" id="order1" value="1" onclick="check_radio('none');" checked /><label for="order_1">操作方法に関する問合せ</label><br />
      <input type="radio" name="order" id="order2" value="2" onclick="check_radio('none');" /><label for="order_2">その他のご質問・ご要望</label><br />
      <input type="radio" name="order" id="order3" value="3" onclick="check_radio('');" /><label for="order_3">ご購入商品に関する問合せ</label>
    </td>
    </tr>
    <tr id="order_area" style="display:none;">
    <th style="vertical-align:top;padding-top:5px;">注文番号：</th>
    <td>
      <input type="text" name="order_number1" size="12" maxlength="10" value="" style="ime-mode:disabled" />&nbsp;-&nbsp;<input type="text" name="order_number2" maxlength="10" size="12" value="" style="ime-mode:disabled" />&nbsp;-&nbsp;<input type="text" name="order_number3" maxlength="10" size="12" value="" style="ime-mode:disabled" /><br />
      （楽天あんしん支払いサービス注文受付のメールに記載されている<br />注文番号を入力してください）<br />
      <span class="attention">※注文番号がご不明の場合、ご質問・ご要望にお答えできない場合がございますので予めご了承下さいませ。</span>
    </td>
    </tr>
<?php } ?>
    <tr>
    <th>メニュー名：</th>
    <td><input type="text" name="tMenu" size="60" value="" /></td>
    </tr>
    <tr>
    <th>ご利用日時：</th>
    <td>
      <script type="text/javascript">
      <!---
      // 年
      var now_year	= now_date.getFullYear ( );
      var year		= now_year - year_num;
      document.write ( '<select name="sUseyear">' );
      for ( var i = 0; i < year_num; i++ )
      {
      	year++;
      	document.write ( '<option value="' + year + '">' + year + '</option>' );
      }
      document.write ( '</select>年' );

      // 月
      document.write ( '<select name="sUsemonth">' );
      for ( var i = 1, n = i; i <= 12; i++, n = i )
      {
      	if ( n < 10 )
      		n	= '0' + n;
      	document.write ( '<option value="' + n + '">' + n + '</option>' );
      }
      document.write ( '</select>月' );

      // 日
      document.write ( '<select name="sUseday">' );
      for ( var i = 1, n = i; i <= 31; i++, n = i )
      {
      	if ( n < 10 )
      		n	= '0' + n;
      	document.write ( '<option value="' + n + '">' + n + '</option>' );
      }
      document.write ( '</select>日' );

      // 時
      document.write ( '<select name="sUsehour">' );
      for ( var i = 0, n = i; i < 24; i++, n = i )
      {
      	if ( n < 10 )
      		n	= '0' + n;
      	document.write ( '<option value="' + n + '">' + n + '</option>' );
      }
      document.write ( '</select>時' );

      // 分
      document.write ( '<select name="sUsemin">' );
      for ( var i = 0, n = i; i < 60; i++, n = i )
      {
      	if ( n < 10 )
      		n	= '0' + n;
      	document.write ( '<option value="' + n + '">' + n + '</option>' );
      }
      document.write ( '</select>分' );
      //--->
      </script>
    </td>
    </tr>
    <tr>
    <th>お問い合わせの内容：<br />（できるだけ詳細にご記入ください）</th>
    <td><textarea name="tComment" rows="5" cols="50"></textarea></td>
    </tr>
    </table>

    <h2>●ご利用環境について</h2>
    <table>
    <colgroup span="1"></colgroup>
    <colgroup span="1"></colgroup>
    <tr>
    <th>
    コンピュータのOS（バージョン情報を含む）：<br />（Windows 10、Mac OS 10.14など）</th>
    <td><input type="text" name="tOs" size="60" value="" /></td>
    </tr>
    <tr>
    <th>ご利用のブラウザ（バージョン情報を含む）：<br />（Edge 44.18 、　<br />Google Chrome 75.0など）</th>
    <td><input type="text" name="tBrowser" size="60" value="" /></td>
    </tr>
    </table>

    <h2>●あなたについてお聞かせください</h2>
    <table>
    <colgroup span="1"></colgroup>
    <colgroup span="1"></colgroup>
    <tr>
    <th>お名前：</th>
    <td><input type="text" name="tName" size="60" value="" /></td>
    </tr>
    <tr>
    <th>電子メールアドレス：</th>
    <td><input type="text" name="tAddress" size="60" value="" /></td>
    </tr>
    <tr>
    <th></th>
    <td><span class="attention">※正しいメールアドレスが入力されておりませんと、お客様にご返信できない場合がありますので、誤りがないかお確かめください。</span></td>
    </tr>
    </table>
    <div style="text-align:center;">
    <input type="button" value="　送　信　" onclick="chk(this.form)" />
    &nbsp;&nbsp;&nbsp;<input type="reset"  value="クリア" /></div>
    </form>
    <ul>
    <li>上記項目内容がすべて明記されていない場合は、調査および回答ができない場合がございます。<br />すべての項目にご記入いただけますよう、よろしくお願い致します。</li>
    </ul>
    <div id="footer"><a href="https://cocoloni.com">&copy;cocoloni,Inc</a></div>
  </div>
</body>
</html>
<?php
} else {
// ########## ここからメール送信＆結果画面 ##########

//$to = "web-tech@ml.zappallas.com";
$to = "web-customer@ml.zappallas.com";

//差出人
//$from = $_POST['tAddress'];
$from = "web-contents@zappallas.com";

//タイトル
$arrT = array( 10 => "楽天", 40 => "Nifty", 70 => "Yahoo" );
$ttl = $arrT[ $isp ];
//$ttl = $isp == 10 ?"楽天" : $isp == 40 ?"Nifty" :"Yahoo";
$subject = sprintf ( "[%s -%s - お問い合わせ]", $_POST['tContents'], $ttl );

//メール内容取得
$order = array( '', '操作方法に関する問合せ', 'その他のご質問・ご要望', 'ご購入商品に関する問合せ' );

	$mail_body	= '';
	$mail_body	.= sprintf ( "■コンテンツ ： %s\n", $_POST['tContents'] );
	$mail_body	.= sprintf ( "■メニュー名 ： %s\n", $_POST[ 'tMenu' ] );
	$mail_body	.= sprintf ( "■日時       ： %s/%s/%s %s時%s分頃\n",
		$_POST[ 'sUseyear' ],
		$_POST[ 'sUsemonth' ],
		$_POST[ 'sUseday' ],
		$_POST[ 'sUsehour' ],
		$_POST[ 'sUsemin' ]
	);
	$mail_body	.= sprintf ( "■OS         ： %s\n", $_POST[ 'tOs' ] );
	$mail_body	.= sprintf ( "■ブラウザ   ： %s\n", $_POST[ 'tBrowser' ] );
	$mail_body	.= sprintf ( "■名前       ： %s\n", $_POST[ 'tName' ] );
	$mail_body	.= sprintf ( "■E-Mail     ： %s\n", $_POST[ 'tAddress' ] );
if( $isp == 10 ) {
	$mail_body	.= sprintf ( "■問い合わせ種類： %s\n", $order[ $_POST[ 'order' ] ] ) ;
	if( $_POST[ 'order' ] == 3 )
	$mail_body	.= sprintf ( "■注文コード ： %s\n", sprintf ( "%s-%s-%s", $_POST['order_number1'],$_POST['order_number2'],$_POST['order_number3'] ) );
}
	$mail_body	.= sprintf ( "■問い合わせ内容：\n%s\n", $_POST[ 'tComment' ] );

//送信
mb_language("ja");
mb_internal_encoding("EUC-JP");
$send_mail = mb_send_mail( $to, $subject, $mail_body, "From:".$from );


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta name="viewport" content="width=630px">
    <meta http-equiv="Content-Type" content="text/html; charset=EUC-JP">
    <meta name="copyright" content="Copyright(C)cocoloni,Inc All Rights Reserverd." />
    <meta name="Content-Language" content="ja">
    <meta name="Cache-Control" content="no-cache">
    <meta name="Pragma" content="no-cache">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <title>■お問い合わせ受け付け完了</title>
<style>
*{  margin: 0;  padding: 0; }
IMG{  border: 0; }
FORM{  margin: 0 auto;  padding: 0; }
TABLE{  border-collapse: collapse;  empty-cells: hide;  text-align: left;  font-size: 1em;  border: 0;  padding: 0; }
TR, TD, TH, THEAD, TBODY, TFOOT, COLGROUP, COL{}
UL{  margin: 0;  padding: 0;  list-style-type: disc;  text-align: left; }
LI{  margin: 0;  padding: 0;  line-height: 120%; }
EM{  font-weight: normal; }
SPAN{  color: #f00;  text-align: left; }
BODY{  margin: 0 auto;  padding: 0;  text-align: center;  font-size: 80%;  line-height: 130%;  color: #5e5e5e; }
H1,H2,H3,H4,H5{  margin: 0 auto;  text-align: left;  color: #fff;  background: #666;  border-bottom: 2px solid #ccc; }
#content{  margin: 20px auto;  width: 630px;  text-align: center;  padding:0 15px; }
#content H1{  margin: 0 auto 10px;  font-size: 1.3em;  padding: 3px 5px; }
#content H2{  margin: 0 auto 10px;  font-size: 1.0em;  padding: 2px 5px; }
#content UL{  margin: 10px 0 0 20px;  padding: 0; }
#content LI{  margin: 0;  padding: 0; }
#content .privacy{  margin: 10px auto 20px;  width: 446px;  border: solid 1px #000000;  text-align: left;  padding: 5px; }
TABLE{  margin: 10px auto 15px;  width: 630px;}
TH{  width: 260px;  padding: 0 0 5px 0;  text-align: right;  font-weight: normal; }
TD{  width: 370px;  padding: 0 0 5px 0; }
SPAN.attention{  color: #f00;  font-size: 0.9em; }
.link{  margin: 20px auto 30px; }
#footer{  margin: 30px auto;  border-top: 1px solid #000;  padding-top: 10px; }
</style>
  </head>
<body>
<div class="body">
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td class="item">
        <div class="item_text" style="font-size: 16px;">■お問い合わせ受け付け完了</div>
      </td>
    </tr>
    <tr>
      <td style="padding-top: 24px;">
        お問い合わせを受け付けました。<br />
        お問い合わせ内容によっては、調査およびご返信に、お時間がかかる場合もございますので<br />
        何卒、ご了承いただけますよう、よろしくお願い致します。<br />
        
        <!-- div style="margin-top: 12px; text-align: center;">
          <a href="javascript:window.close( )">閉じる</a>
        </div -->
      </td>
    </tr>
  </table>
  <div id="footerCopy">
    <hr style="height: 1px;">
    <div id="footerCopy">
      <address id="zapCopy"><a href="https://cocoloni.com">&copy;cocoloni,Inc</a></address>
<?php if( $isp == 10 ) { ?>
      <div id="ispCopy"><a href="https://lovefortune.zappallas.com/rakuten/" title="占いポータルLoveFortune〜ラヴフォーチュン〜">占いポータルLoveFortune〜ラヴフォーチュン〜</a></div>
<?php } ?>
    </div>
  </div>
</div>
</body>
</html>
<?php } ?>