<?php
/************************************************************
 * [PC] �ý����䤤��碌�ե�����
 * exec URL
 * http://web-dev.ura.pga.jp:8080/yspecial/info_frm.php
 * https://web-portal-api.zappallas.com/yspecial/info_frm.php
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
    <title>�����䤤��碌�ե�����</title>
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
<noscript><p style="color:red;font-weight:bold;font-size:1.3em;text-align:center;background-color:white;">������ƥ�Ĥ����Ѥˤʤ�ˤ�JavaScript��ON�ˤ���ɬ�פ�����ޤ���JavaScript��ON�ˤ��Ʋ�������</p></noscript>
  <div id="content">
    <h1>�����䤤��碌�ե�����</h1>
    <ul>
    <li>���Τ��Ӥϡ�<?=$title ?>�פ����Ѥ������������ˤ��꤬�Ȥ��������ޤ���</li>
    <li>�������ȤΥ���ƥ�����Ƥ�ư��ˤĤ��ƤΤ��䤤��碌�ϡ������Τ��䤤��碌�ե������������ꤤ�ޤ���</li>
    <li>������Ǥ�����<span style="color: #ff0000;">���٤Ƥι��ܤˤ�����</span>���������������ܥ���򲡤��Ƥ���������</li>
    <li> ���䤤��碌���Ƥˤ�äƤϡ�Ĵ������Ӥ��ֿ��ˡ������֤���������⤴�����ޤ��Τǡ���´����λ�����������ޤ��褦����������ꤤ�פ��ޤ���</li>
    </ul>
    <div class="privacy"><p>�������cocoloni�ϡ������Ϥ��줿������ꤤ�����ӥ����󶡤��뤿��ˤΤ߻��Ѥ�����������Ѥ�Ԥä���¾����Ū�ǻ��Ѥ��뤳�ȤϤ���ޤ���<br />����<a href="https://cocoloni.com/privacypolicy/" target="_privacy" title="�Ŀ;����ݸ�����">�Ŀ;����ݸ�����</a>�ʳ��������ȡˤ򤴳�ǧ�ξ塢ɬ�׾�������ϲ�������</p></div>

    <form name="frmMain" method="post" action="">
    <input type="hidden" name="mode" value="1">
    <input type="hidden" name="isp" value="<?=$isp ?>">
    <h2>�����䤤��碌�ˤĤ���</h2>
    <table>
    <tr>
    <th>�ý�̾��</th>
    <td><input type="text" name="tContents" size="60" value="<?=$title ?>" /></td>
    </tr>
    <tr>
<?php if( $isp == 10 ) { ?>
    <th style="vertical-align:top;padding-top:5px;">���䤤��碌�μ��ࡧ</th>
    <td>
      <input type="radio" name="order" id="order1" value="1" onclick="check_radio('none');" checked /><label for="order_1">�����ˡ�˴ؤ�����礻</label><br />
      <input type="radio" name="order" id="order2" value="2" onclick="check_radio('none');" /><label for="order_2">����¾�Τ����䡦����˾</label><br />
      <input type="radio" name="order" id="order3" value="3" onclick="check_radio('');" /><label for="order_3">���������ʤ˴ؤ�����礻</label>
    </td>
    </tr>
    <tr id="order_area" style="display:none;">
    <th style="vertical-align:top;padding-top:5px;">��ʸ�ֹ桧</th>
    <td>
      <input type="text" name="order_number1" size="12" maxlength="10" value="" style="ime-mode:disabled" />&nbsp;-&nbsp;<input type="text" name="order_number2" maxlength="10" size="12" value="" style="ime-mode:disabled" />&nbsp;-&nbsp;<input type="text" name="order_number3" maxlength="10" size="12" value="" style="ime-mode:disabled" /><br />
      �ʳ�ŷ���󤷤��ʧ�������ӥ���ʸ���դΥ᡼��˵��ܤ���Ƥ���<br />��ʸ�ֹ�����Ϥ��Ƥ���������<br />
      <span class="attention">����ʸ�ֹ椬�������ξ�硢�����䡦����˾�ˤ������Ǥ��ʤ���礬�������ޤ��Τ�ͽ�ᤴλ���������ޤ���</span>
    </td>
    </tr>
<?php } ?>
    <tr>
    <th>��˥塼̾��</th>
    <td><input type="text" name="tMenu" size="60" value="" /></td>
    </tr>
    <tr>
    <th>������������</th>
    <td>
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
      document.write ( '</select>��' );

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
    </td>
    </tr>
    <tr>
    <th>���䤤��碌�����ơ�<br />�ʤǤ�������ܺ٤ˤ���������������</th>
    <td><textarea name="tComment" rows="5" cols="50"></textarea></td>
    </tr>
    </table>

    <h2>�������ѴĶ��ˤĤ���</h2>
    <table>
    <colgroup span="1"></colgroup>
    <colgroup span="1"></colgroup>
    <tr>
    <th>
    ����ԥ塼����OS�ʥС����������ޤ�ˡ�<br />��Windows 10��Mac OS 10.14�ʤɡ�</th>
    <td><input type="text" name="tOs" size="60" value="" /></td>
    </tr>
    <tr>
    <th>�����ѤΥ֥饦���ʥС����������ޤ�ˡ�<br />��Edge 44.18 ����<br />Google Chrome 75.0�ʤɡ�</th>
    <td><input type="text" name="tBrowser" size="60" value="" /></td>
    </tr>
    </table>

    <h2>�����ʤ��ˤĤ��Ƥ�ʹ������������</h2>
    <table>
    <colgroup span="1"></colgroup>
    <colgroup span="1"></colgroup>
    <tr>
    <th>��̾����</th>
    <td><input type="text" name="tName" size="60" value="" /></td>
    </tr>
    <tr>
    <th>�Żҥ᡼�륢�ɥ쥹��</th>
    <td><input type="text" name="tAddress" size="60" value="" /></td>
    </tr>
    <tr>
    <th></th>
    <td><span class="attention">���������᡼�륢�ɥ쥹�����Ϥ���Ƥ���ޤ���ȡ������ͤˤ��ֿ��Ǥ��ʤ���礬����ޤ��Τǡ���꤬�ʤ������Τ��᤯��������</span></td>
    </tr>
    </table>
    <div style="text-align:center;">
    <input type="button" value="����������" onclick="chk(this.form)" />
    &nbsp;&nbsp;&nbsp;<input type="reset"  value="���ꥢ" /></div>
    </form>
    <ul>
    <li>�嵭�������Ƥ����٤���������Ƥ��ʤ����ϡ�Ĵ������Ӳ������Ǥ��ʤ���礬�������ޤ���<br />���٤Ƥι��ܤˤ��������������ޤ��褦����������ꤤ�פ��ޤ���</li>
    </ul>
    <div id="footer"><a href="https://cocoloni.com">&copy;cocoloni,Inc</a></div>
  </div>
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