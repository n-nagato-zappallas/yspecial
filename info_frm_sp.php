<?php
/************************************************************
 * [SP] �ý����䤤��碌�ե�����
 * exec URL
 * http://web-dev.ura.pga.jp:8080/yspecial/info_frm_sp.php
 * https://web-portal-api.zappallas.com/yspecial/info_frm_sp.php
 ************************************************************/
header('Content-Type: text/html; charset=EUC-JP');

// ########## �����������/�ѿ���� ##########
define('VIEW',         '0');
define('MAIL',         '1');

$mode = is_null( $_REQUEST['mode'] ) ?VIEW :$_REQUEST['mode'];
$title = is_null( $_REQUEST['title'] ) ?'' :$_REQUEST['title'];
$isp = is_null( $_REQUEST['isp'] ) ?'' :$_REQUEST['isp'];


// ########## �����������ϲ��� ##########
// HTML�κ���
if( $mode == VIEW ) { 

?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="copyright" content="Copyright(C)cocoloni,Inc All Rights Reserverd." />
    <meta http-equiv="Content-Type" content="text/html; charset=EUC-JP" />
    <meta name = "format-detection" content = "telephone=no">
    <title>�����䤤��碌�ե�����</title>
<style>
@charset "EUC-JP";

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	vertical-align: baseline;
	word-wrap: break-word;
}
body {
	line-height: 1;
	font-size: 0.87em;
	font-weight: normal;
}
ol,ul {
	list-style: none;
}
blockquote,q {
	quotes: none;
}
blockquote:before,blockquote:after,q:before,q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
caption,th,td {
	font-weight: normal;
	text-align: left;
}
h1,h2,h3,h4,h5,h6 {
	clear: both;
	font-weight: normal;
}
html {
	overflow-y: scroll;
	font-size: 100%;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
}
a:focus {
	outline: thin dotted;
	font-weight: normal;
}
a, a:hover, a:visited {
	text-decoration: none;
	text-shadow: none;
	font-weight: normal;
}
article,aside,details,figcaption,figure,footer,header,hgroup,nav,section {
	display: block;
}
audio,canvas,video {
	display: inline-block;
}
audio:not([controls]) {
	display: none;
}
del {
	color: #333;
}
ins {
	background: #fff9c0;
	text-decoration: none;
}
hr {
	background-color: #ccc;
	border: 0;
	height: 1px;
	margin: 24px;
	margin-bottom: 1.714285714rem;
}

sub,
sup {
	font-size: 75%;
	line-height: 0;
	position: relative;
	vertical-align: baseline;
}
sup {
	top: -0.5em;
}
sub {
	bottom: -0.25em;
  padding:0 15px;
}
small {
	font-size: smaller;
}
img {
	border: 0;
	-ms-interpolation-mode: bicubic;
	background: transparent;
	vertical-align: bottom;
}

/********************************
 =general
********************************/

body {
  font-family: "Hiragino Kaku Gothic Pro", "�ҥ饮�γѥ� Pro W3", "Meiryo", "�ᥤ�ꥪ", "Osaka", "MS PGothic", arial, helvetica, sans-serif;
  line-height: 1.2em;
  background-color: #eee;
}
[data-role="content"] {
  padding: 20px 0;
}
h1 {
  color: #333;
  font-size: 1.5em;
  font-weight: bold;
  line-height: 1.2em;
  padding: 0 10px;
}
h2 {
  color: #333;
  font-size: 1.2em;
  font-weight: bold;
  position: relative;
  margin: 20px 0 10px;
  padding-left: 2.2em;
  line-height: 1.5em;
}
h2:before {
  content: "";
  display: block;
  position: absolute;
  left: 0.5em;
  width: 1.5em;
  height: 1.5em;
  background-color: #333;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
h2:after {
  content: "";
  display: block;
  position: absolute;
  top: 0.375em;
  left: 0.85em;
  width: 0.75em;
  height: 0.75em;
  background-color: #eee;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
input[type="text"],input[type="email"],input[type="password"],textarea {
  font-size: 100%;
  width: 95%;
  padding: 10px 5px;
  background: #FFFFFF;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  margin-bottom: 8px;
  border: 1px solid #AAAAAA;
  -moz-box-shadow: 1px 1px 2px #D4D4D4;
  -webkit-box-shadow: 1px 1px 2px #D4D4D4;
  box-shadow: 1px 1px 2px #D4D4D4;
}
p.caption {
  padding: 10px;
}
p.attention {
  color: red;
  padding: 0 10px 10px;
  text-align: left;
}
.center {
  text-align: center;
}
.red {
  color: red;
}
input[type="submit"],input[type="reset"],.cssButton {
  color: #030303;
  font-size: 1.2em;
  display: inline-block;
  text-align: center;
  vertical-align: middle;
  padding: 10px 0;
  margin: 10px;
  width: 70%;
  position: relative;
  background: -moz-linear-gradient( top, #ffffff 0%, #ebebeb 50%, #dbdbdb 50%, #b5b5b5);
  background: -webkit-gradient( linear, left top, left bottom, from(#ffffff), color-stop(0.50, #ebebeb), color-stop(0.50, #dbdbdb), to(#b5b5b5));
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  border: 1px solid #949494;
  -moz-box-shadow: 0px 1px 3px rgba(000,000,000,0.5), inset 0px 0px 2px rgba(255,255,255,1);
  -webkit-box-shadow: 0px 1px 3px rgba(000,000,000,0.5), inset 0px 0px 2px rgba(255,255,255,1);
  box-shadow: 0px 1px 3px rgba(000,000,000,0.5), inset 0px 0px 2px rgba(255,255,255,1);
  text-shadow: 0px -1px 0px rgba(000,000,000,0.2), 0px 1px 0px rgba(255,255,255,1);
}
input[type="reset"] {
  font-size: 0.8em;
  width: 30%;
}
div.privacy {
  margin: 5px;
  padding: 8px;
  border: solid 2px #666;
}
fieldset {
  text-align: center;
  border-bottom: solid 1px #666;
}
fieldset legend {
  width: 100%;
  padding: 10px 0 5px;
  margin-bottom: 8px;
  text-indent: 10px;
  text-align: left;
  border-top: solid 1px #fff;
  border-bottom: solid 1px #999;
  background-color: #bbb;
}
fieldset legend small {
  color: #666;
  font-size: 0.8em;
  margin-left: 10px;
}
section fieldset:last-of-type {
  border-bottom: none;
}
select[name^="sUse"] {
  padding: 0.2em;
  margin: 0 0 0.8em 0.8em;
}
#submit_area li{
  text-align: center;
}
#footer {
  text-align: center;
  margin-top: 20px;
}
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
    	// Listbox����
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
            alert("���䤤��碌���Ƥ����Ϥ��Ƥ�������");
            return false;
        }
    	str = frm.tName.value;
        if( ! str ) {
            alert("��̾�������Ϥ��Ƥ�������");
            return false;
        }
        
        // �᡼�륢�ɥ쥹
        str = frm.tAddress.value;
        if( ! str ) {
            alert("�᡼�륢�ɥ쥹�����Ϥ��Ƥ�������");
            return false;
        } else if( ! str.match(/[!#-9A-~]+@+[a-z0-9]+.+[^.]$/i) ) {
                alert("�᡼�륢�ɥ쥹�η����������Ǥ�");
                return false;
        }
        
        frm.submit();
    }
    //--->
    </script>
  </head>
<body onLoad="selectCurrentDate( );">
  <noscript>
    <p><span class="red">������ƥ�Ĥ����Ѥˤʤ�ˤ�JavaScript��ON�ˤ���ɬ�פ�����ޤ���JavaScript��ON�ˤ��Ʋ�������</span></p>
    <br>
  </noscript>
  <div id="content">
    <h1>�����䤤��碌�ե�����</h1>
    <p class="caption">
      ���Τ��Ӥϡ�<?=$title ?>�פ����Ѥ������������ˤ��꤬�Ȥ��������ޤ���
      <br>�������ȤΥ���ƥ�����Ƥ�ư��ˤĤ��ƤΤ��䤤��碌�ϡ������Τ��䤤��碌�ե������������ꤤ�ޤ���
      <br><br>
      ������Ǥ�����<span class="red">���٤Ƥι��ܤˤ�����</span>���������������ܥ���򲡤��Ƥ���������
      <br><br>
      ���䤤��碌���Ƥˤ�äƤϡ�Ĵ������Ӥ��ֿ��ˡ������֤���������⤴�����ޤ��Τǡ���´����λ�����������ޤ��褦����������ꤤ�פ��ޤ���
    </p>
    
    <div class="privacy">
      <p>�������cocoloni�ϡ������Ϥ��줿������ꤤ�����ӥ����󶡤��뤿��ˤΤ߻��Ѥ�����������Ѥ�Ԥä���¾����Ū�ǻ��Ѥ��뤳�ȤϤ���ޤ���<br />����<a href="https://cocoloni.com/privacypolicy/" target="_privacy" title="�Ŀ;����ݸ�����">�Ŀ;����ݸ�����</a>�ʳ��������ȡˤ򤴳�ǧ�ξ塢ɬ�׾�������ϲ�������</p>
    </div>

    <form name="frmMain" method="post" action="">
      <input type="hidden" name="mode" value="1">
      <input type="hidden" name="isp" value="<?=$isp ?>">
      <input type="hidden" name="device_mode" value="sp">
      <section>
        <h2>���䤤��碌�ˤĤ���</h2>
        <fieldset>
          <legend><label for="tContents">�ý�̾<small>��ɬ��</small></label></legend>
          <input type="text" name="tContents" id="tContents" value="<?=$title ?>">
        </fieldset>
        <fieldset>
          <legend><label for="tMenu">��˥塼̾<small>��ɬ��</small></label></legend>
          <input type="text" name="tMenu" id="tMenu" value="">
        </fieldset>
<?php if( $isp == 10 ) { ?>
        <fieldset>
          <legend>���䤤��碌�μ��ࡧ</legend>
          <input type="radio" name="order" id="order1" value="1" onclick="check_radio('none');" checked /><label for="order1">�����ˡ�˴ؤ�����礻</label><br />
          <input type="radio" name="order" id="order2" value="2" onclick="check_radio('none');" /><label for="order2">����¾�Τ����䡦����˾</label><br />
          <input type="radio" name="order" id="order3" value="3" onclick="check_radio('');" /><label for="order3">���������ʤ˴ؤ�����礻</label>
        </fieldset>
        <fieldset>
          <legend>��ʸ�ֹ�</legend>
          <input type="text" name="order_number1" size="12" maxlength="10" value="" style="ime-mode:disabled" />&nbsp;-&nbsp;<input type="text" name="order_number2" maxlength="10" size="12" value="" style="ime-mode:disabled" />&nbsp;-&nbsp;<input type="text" name="order_number3" maxlength="10" size="12" value="" style="ime-mode:disabled" /><br />
         �ʳ�ŷ���󤷤��ʧ�������ӥ���ʸ���դΥ᡼��˵��ܤ���Ƥ�����ʸ�ֹ�����Ϥ��Ƥ���������<br />
          <span class="attention">����ʸ�ֹ椬�������ξ�硢�����䡦����˾�ˤ������Ǥ��ʤ���礬�������ޤ��Τ�ͽ�ᤴλ���������ޤ���</span>
        </fieldset>
<?php } ?>
        
        <fieldset>
          <legend>����������</legend>
          <script type="text/javascript">
          <!---
          // ǯ
          var now_year	= now_date.getFullYear ( );
          var year		= now_year - year_num;
          document.write ( '<select name="sUseyear">' );
          for ( var i = 0; i < year_num; i++ )
          {
          	year++;
          	document.write ( '<option value="' + year + '">' + year + '</option>' );
          }
          document.write ( '</select>ǯ' );

          // ��
          document.write ( '<select name="sUsemonth">' );
          for ( var i = 1, n = i; i <= 12; i++, n = i )
          {
          	if ( n < 10 )
          		n	= '0' + n;
          	document.write ( '<option value="' + n + '">' + n + '</option>' );
          }
          document.write ( '</select>��' );

          // ��
          document.write ( '<select name="sUseday">' );
          for ( var i = 1, n = i; i <= 31; i++, n = i )
          {
          	if ( n < 10 )
          		n	= '0' + n;
          	document.write ( '<option value="' + n + '">' + n + '</option>' );
          }
          document.write ( '</select>��<br>' );

          // ��
          document.write ( '<select name="sUsehour">' );
          for ( var i = 0, n = i; i < 24; i++, n = i )
          {
          	if ( n < 10 )
          		n	= '0' + n;
          	document.write ( '<option value="' + n + '">' + n + '</option>' );
          }
          document.write ( '</select>��' );

          // ʬ
          document.write ( '<select name="sUsemin">' );
          for ( var i = 0, n = i; i < 60; i++, n = i )
          {
          	if ( n < 10 )
          		n	= '0' + n;
          	document.write ( '<option value="' + n + '">' + n + '</option>' );
          }
          document.write ( '</select>ʬ' );
          //--->
          </script>
        </fieldset>
        <fieldset>
          <legend><label for="tComment">���䤤��碌������<small>��ɬ��</small><br><span class="small">�ʤǤ�������ܺ٤ˤ���������������</span></label></legend>
          <textarea name="tComment" id="tComment" rows="5"></textarea>
        </fieldset>
      </section>
      
      <section>
        <h2>�����ѴĶ��ˤĤ���</h2>
        <fieldset>
          <legend><label for="tBrowser">�����Ѥε���̾<small>��ɬ��</small><br>��AU iPhone5s��docomo GALAXY S4 SC-04E�ʤɡ�</label></legend>
          <input type="text" name="tBrowser" id="tBrowser" value="">
        </fieldset>
        <fieldset>
          <legend><label for="tOs">����ԥ塼����OS<small>��ɬ��</small><br>��iOS7, Android4.4, Windows Phone8�ʤɡ�</label></legend>
          <input type="text" name="tOs" id="tOs" value="">
        </fieldset>
      </section>
      <section>
        <h2>���ʤ��ˤĤ��Ƥ�ʹ������������</h2>
        <fieldset>
          <legend><label for="tName">��̾��<small>��ɬ��</small></label></legend>
          <input type="text" name="tName" id="tName" value="">
        </fieldset>
        <fieldset>
          <legend><label for="tAddress">�Żҥ᡼�륢�ɥ쥹<small>��ɬ��</small></label></legend>
          <input type="email" name="tAddress" value="">
          <p class="attention">���������᡼�륢�ɥ쥹�����Ϥ���Ƥ���ޤ���ȡ������ͤˤ��ֿ��Ǥ��ʤ���礬����ޤ��Τǡ���꤬�ʤ������Τ��᤯��������</p>
        </fieldset>
        <ul id="submit_area">
          <li><input type="button" value="����������" onclick="chk(this.form)" /></li>
          <li><input type="reset"  onclick="if(confirm('���Ͼ���������Ƥ������Ǥ���?'))return true;else return false;" value="���ꥢ"></li>
        </ul>
      </section>
    </form>
    <p class="caption">
      �嵭�������Ƥ����٤���������Ƥ��ʤ����ϡ�Ĵ������Ӳ������Ǥ��ʤ���礬�������ޤ���<br>���٤Ƥι��ܤˤ��������������ޤ��褦����������ꤤ�פ��ޤ���
    </p>
    
    <div id="footer">
      <small><a href="https://cocoloni.com">&copy;cocoloni,Inc</a></small>
    </div>
  </div>
<!---%if name="isp_no" value="10"--->
<!---%end--->
</body>
</html>
<?php
} else {
// ########## ��������᡼����������̲��� ##########

//$to = "web-tech@ml.zappallas.com";
$to = "web-customer@ml.zappallas.com";

//���п�
//$from = $_POST['tAddress'];
$from = "web-contents@zappallas.com";

//�����ȥ�
$arrT = array( 10 => "��ŷ", 40 => "Nifty", 70 => "Yahoo" );
$ttl = $arrT[ $isp ];
//$ttl = $isp == 10 ?"��ŷ" : $isp == 40 ?"Nifty" :"Yahoo";
$subject = sprintf ( "[%s -%s - ���䤤��碌]", $_POST['tContents'], $ttl );

//�᡼�����Ƽ���
$order = array( '', '�����ˡ�˴ؤ�����礻', '����¾�Τ����䡦����˾', '���������ʤ˴ؤ�����礻' );

	$mail_body	= '';
	$mail_body	.= sprintf ( "������ƥ�� �� %s\n", $_POST['tContents'] );
	$mail_body	.= sprintf ( "����˥塼̾ �� %s\n", $_POST[ 'tMenu' ] );
	$mail_body	.= sprintf ( "������       �� %s/%s/%s %s��%sʬ��\n",
		$_POST[ 'sUseyear' ],
		$_POST[ 'sUsemonth' ],
		$_POST[ 'sUseday' ],
		$_POST[ 'sUsehour' ],
		$_POST[ 'sUsemin' ]
	);
	$mail_body	.= sprintf ( "��OS         �� %s\n", $_POST[ 'tOs' ] );
	$mail_body	.= sprintf ( "���֥饦��   �� %s\n", $_POST[ 'tBrowser' ] );
	$mail_body	.= sprintf ( "��̾��       �� %s\n", $_POST[ 'tName' ] );
	$mail_body	.= sprintf ( "��E-Mail     �� %s\n", $_POST[ 'tAddress' ] );
if( $isp == 10 ) {
	$mail_body	.= sprintf ( "���䤤��碌���ࡧ %s\n", $order[ $_POST[ 'order' ] ] ) ;
	if( $_POST[ 'order' ] == 3 )
	$mail_body	.= sprintf ( "����ʸ������ �� %s\n", sprintf ( "%s-%s-%s", $_POST['order_number1'],$_POST['order_number2'],$_POST['order_number3'] ) );
}
	$mail_body	.= sprintf ( "���䤤��碌���ơ�\n%s\n", $_POST[ 'tComment' ] );

//����
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
    <title>�����䤤��碌�����դ���λ</title>
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
        <div class="item_text" style="font-size: 16px;">�����䤤��碌�����դ���λ</div>
      </td>
    </tr>
    <tr>
      <td style="padding-top: 24px;">
        ���䤤��碌������դ��ޤ�����<br />
        ���䤤��碌���Ƥˤ�äƤϡ�Ĵ������Ӥ��ֿ��ˡ������֤���������⤴�����ޤ��Τ�<br />
        ��´����λ�����������ޤ��褦����������ꤤ�פ��ޤ���<br />
        
        <!-- div style="margin-top: 12px; text-align: center;">
          <a href="javascript:window.close( )">�Ĥ���</a>
        </div -->
      </td>
    </tr>
  </table>
  <div id="footerCopy">
    <hr style="height: 1px;">
    <div id="footerCopy">
      <address id="zapCopy"><a href="https://cocoloni.com">&copy;cocoloni,Inc</a></address>
<?php if( $isp == 10 ) { ?>
      <div id="ispCopy"><a href="https://lovefortune.zappallas.com/rakuten/" title="�ꤤ�ݡ�����LoveFortune������ե���������">�ꤤ�ݡ�����LoveFortune������ե���������</a></div>
<?php } ?>
    </div>
  </div>
</div>
</body>
</html>
<?php } ?>