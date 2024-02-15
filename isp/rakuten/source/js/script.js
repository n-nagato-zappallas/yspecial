<!---

/*
 *------------------------------------------------------------------------------
 *
 * ident "@(#)script.js 24/May/06 /common/common/source/js
 * + Script common javascript library file.
 *	Copyright:(C) Zappallas,INC. all rights reserved.
 *	Framework:	3.0
 *	Version:	2.01 (Release)
 *	Release date:	2009/03/03
 *	Japanese Code:	EUC-JP
 *	Return Code:	LF
 *	Contents:	global
 *
 *	Function reference:
 *	checkNavigator		( void )
 *	styleNavigator		( srcRootDir )
 *	swapImageLoader		( void )
 *	swapImageOver		( obj )
 *	swapImageRestore	( obj )
 *	getMenuNameByFile	( void )
 *	getMenuNameByQuery	( name )
 *	addFavorite		( url, title )
 *	targetPage		( href, target)
 *	checkFlash ( )
 *
 *------------------------------------------------------------------------------
 */


// Global variables.
/*
 *  ��³���饤����ȥ֥饦������.
 */
var osName	= navigator.platform;		// OS̾����.
var appCode	= navigator.appCodeName;	// �֥饦�������׼���.
var appName	= navigator.appName;		// �֥饦��̾����.
var appVer	= navigator.appVersion;		// �֥饦���С���������.
var appAgent	= navigator.userAgent;		// �֥饦������������Ⱦ���.
var appVersion	= null;				// �֥饦���С�������ֹ�.

/* class="swapImage"  */
$(function(){
	$('.swapImage').each(function(i) {
		var src = $(this).attr('src').replace("\.gif", "_over\.gif").replace("\.png", "_over\.png").replace("\.jpg", "_over\.jpg");
		$(this).wrap('<p style="background-image: url(' +src +'); display: inline-block;"></p>');
	});
    $(document).on('mouseenter','.swapImage',function(){
    	$(this).animate({'opacity':'0'}, 300);
    });
    $(document).on('mouseleave','.swapImage',function(){
    	$(this).animate({'opacity':'1'}, 100);
    });
});

/*
 *------------------------------------------------------------------------------
 * checkNavigator ( void )
 *	------------------------------------------------------------------------
 *	Information:	�֥饦���б������å�.
 *			* Win32 IE 6.0 �ʾ� FireFox 2.0 �ʾ� Safari 3�ʾ� �б�.
 *			* MacOS FireFox 2.0 �ʾ� Safari 2�ʾ� �б�.
 *	Argument:	void
 *	Return:		�б���: true, �б��Բ�: false
 *------------------------------------------------------------------------------
 */

function checkNavigator ( )
{
	// facebook�б�
	if( appAgent.indexOf( "FBAN" ) != -1 ) {
		return true;
	}

	var os	= null;
	// osName
	if ( osName.toUpperCase( ).indexOf ( "WIN" ) >= 0 && osName.indexOf ( "3.1" ) <= 0 ){
		os	= "Win";
	}else if ( osName.toUpperCase( ).indexOf ( "MAC" ) >= 0 ){
		if ( osName.toUpperCase( ).indexOf ( "PC" ) >= 0 || osName.toUpperCase( ).indexOf ( "INTEL" ) >= 0 ){
		os	= "Mac";
		}
	}else if ( osName.indexOf( "iPhone" ) >= 0 || osName.indexOf( "iPad" ) >= 0){
        os = "iPhone";
    }else{
		os	= "Other";
	}

	// BrowserName
	var appVer;				//�֥饦���С���������
	var browserName;		//�֥饦��̾�μ���
	var s, e ,end_count;	//�������ּ���

	if ( appAgent.toUpperCase( ).indexOf ( "OPERA" ) >= 0 ){
		browserName	= 'Other';
	}else if ( appAgent.toUpperCase( ).indexOf ( "SAFARI" ) >= 0 ){
		browserName	= 'APPLEWEBKIT';
		s	= appAgent.toUpperCase( ).indexOf ( browserName, 0 ) + browserName.length +1 ;
		e	= appAgent.indexOf ( " ", s );
		browserName	= 'SAFARI';
	}else if ( appAgent.toUpperCase( ).indexOf ( "FIREFOX" ) >= 0 ){
		browserName	= 'FIREFOX';
		s	= appAgent.toUpperCase( ).indexOf ( browserName, 0 ) + browserName.length +1 ;
		e	= appAgent.length ;
	}else if ( appAgent.toUpperCase( ).indexOf ( "MSIE" ) >= 0 ){
		browserName	= 'MSIE';
		s	= appAgent.toUpperCase( ).indexOf ( browserName, 0 ) + browserName.length +1 ;
		e	= appAgent.indexOf ( ";", s );
	}else if ( appAgent.toUpperCase( ).indexOf ( "TRIDENT" ) >= 0 ){
		browserName	= 'RV';
		s	= appAgent.indexOf ( browserName.toLowerCase() , 0 ) + browserName.length +1 ;
        e	= appAgent.indexOf ( ")", s );
	}else{
		browserName	= 'Other';
	}

	//BrowserVer
	if ( browserName != "Other" ){
		appVer	= appAgent.substring ( s, e ) ;		//�֥饦���С���������μ���
		appVer = eval ( appVer.replace(/^([0-9]+)(\.[0-9]+)?.*/g, "$1$2") );
	}

	//2016/08/17 iPhone WebView�б�
	if ( os == "iPhone" && browserName == "Other" && !appVer) {
		//UA����AppleWebKit�ΥС��������������
		s	= appAgent.toUpperCase( ).indexOf ( 'APPLEWEBKIT', 0 ) + 12 ;
		e	= appAgent.indexOf ( " ", s );
		appVer	= appAgent.substring ( s, e ) ;		//�֥饦���С���������μ���
		appVer = eval ( appVer.replace(/^([0-9]+)(\.[0-9]+)?.*/g, "$1$2") );
		if ( appVer >= 522.0 ){
			return true;
		}
	}

	//check OS Browser
	if ( os == "Win" && (browserName == "MSIE" || browserName == "RV"  ) && appVer >= 6.0 ){
		return true;
    }else if ( browserName == "FIREFOX" && appVer >= 2.0 ){
		return true;
	}else if ( browserName == "SAFARI" && appVer >= 522.0 ){
		return true;
	}else{
		return false;
	}
	
	return false;
}

/*
 *------------------------------------------------------------------------------
 * swapImageLoader ( void )
 *	------------------------------------------------------------------------
 *	Information:	���������ؤ����֥������Ȥν���ɤ߹���.
 *	Argument:	void
 *	Return:		Success: true, Failure: false
 *------------------------------------------------------------------------------
 */
function swapImageLoader ( )
{
	var obj = document.getElementsByTagName ( "IMG" );
	for ( var i = 0; i < obj.length; i++ )
	{
		if ( ! obj[i].id )
			continue;
		if ( obj[i].getAttribute ( "onMouseOver" )
		  || obj[i].getAttribute ( "onFocus" )
		  || obj[i].getAttribute ( "onFocusIn" )
		)
		{
			// onEvent�����ؤ������ѥ�����.
			var fileName	= obj[i].src.replace ( /^.*\//, '' );
			var fileDir	= obj[i].src.replace ( fileName, '' );
			var fileType	= fileName.replace ( /^.*\./, '.' );
			var fileProp	= fileName.replace ( /\..*$/, '' );
			var fileSrc	= fileDir + fileProp + '_over' + fileType;
			// �����ɤ߹���.
			var fileImage	= new Image ( );
			fileImage.src	= fileSrc;
		}
	}

	return true;
}

/*
 *------------------------------------------------------------------------------
 * swapImageOver ( obj )
 *	------------------------------------------------------------------------
 *	Information:	���������ؤ��ؿ�.
 *	Argument:	obj : �������֥�������.
 *	Return:		Success: true, Failure: false
 *------------------------------------------------------------------------------
 */
function swapImageOver ( obj )
{
	if ( ! obj )
		return false;

	var id	= obj.id;
	if ( ! id )
		id	= obj.name;
	if ( ! id )
		return false;
	var src		= obj.src;
	if ( ! src )
		return false;
	// �ե�����̾�����.
	var fileName	= src.replace ( /^.*\//, ''  );
	// �ǥ��쥯�ȥ�ѥ������.
	var fileDir	= src.replace ( fileName, '' );
	// ��ĥ�Ҥ����.
	var fileType	= fileName.replace ( /^.*\./, '.' );

	obj.src	= fileDir + id + '_over' + fileType;

	return true;
}

/*
 *------------------------------------------------------------------------------
 * swapImageRestore ( obj )
 *	------------------------------------------------------------------------
 *	Information:	���������ؤ��ؿ� (Restore)
 *	Argument:	obj : �������֥�������.
 *	Return:		Success: true, Failure: false
 *------------------------------------------------------------------------------
 */
function swapImageRestore ( obj )
{
	if ( ! obj )
		return false;

	var id	= obj.id;
	if ( ! id )
		id	= obj.name;
	if ( ! id )
		return false;
	var src		= obj.src;
	if ( ! src )
		return false;

	// �ե�����̾�����.
	var fileName;
	if ( src.match ( /\// ) )
		fileName	= src.replace ( /^.*\//, '' );
	if ( src.match ( /\\/ ) )
		fileName	= src.replace ( /^.*\\/, '' );
	// �ǥ��쥯�ȥ�ѥ������.
	var fileDir	= src.replace ( fileName, '' );
	// ��ĥ�Ҥ����.
	var fileType	= fileName.replace ( /^.*\./, '.' );

	obj.src	= fileDir + id + fileType;

	return true;
}

/*
 *------------------------------------------------------------------------------
 * getMenuNameByFile ( void )
 *	------------------------------------------------------------------------
 *	Information:	�ե�����̾�����˥塼̾���������.
 *	Argument:	void
 *	Return:		Success: ��˥塼̾, Failure: null
 *------------------------------------------------------------------------------
 */
function getMenuNameByFile (  )
{
	var path	= document.URL;
	if ( ! path )
		return null;
	// �����꡼ʸ������.
	path	= path.replace ( /\?.*$/, '' );
	// �ɥᥤ��/�ǥ��쥯�ȥ������, �ե�����̾����.
	if ( path.match ( /\// ) )
		path	= path.replace ( /^.*\//, '' );
	if ( path.match ( /\\/ ) )
		path	= path.replace ( /^.*\\/, '' );
	// �ե������ĥ�Һ��.
	path	= path.replace ( /\.html/, '' );
	path	= path.replace ( /\.htm/, '' );

	return ( path );
}

/*
 *------------------------------------------------------------------------------
 * getMenuNameByQuery ( name )
 *	------------------------------------------------------------------------
 *	Information:	GET�����꡼ʸ���󤫤��˥塼̾���������.
 *	Argument:	name : ��˥塼����̾.
 *	Return:		Success: ��˥塼̾, Failure: null
 *------------------------------------------------------------------------------
 */
function getMenuNameByQuery ( name )
{
	if ( ! name )
		return null;
	// GET�����꡼ʸ�������.
	var Params	= location.search;
	Params		= Params.replace ( /\?/, '' );
	// GET�����꡼ʸ��������å�.
	if ( ! Params
	  || ! Params.match ( /=/ )
	)
		return null;
	// GET�����꡼ʸ�����`&'��ʬ��.
	Params		= Params.replace ( /%26/g, '&' );
	var splitPrms	= Params.split ( '&' );
	var pathPrm	= null;
	for ( var i = 0, Prm = null; i < splitPrms.length; i++ )
	{
		// �ƥѥ�᡼����`='��ʬ��.
		Prm	= splitPrms[i].split ( '=' );
		if ( ! Prm[1] || Prm[1] == '' )
			continue;
		if ( Prm[0] == name )
		{
			if ( Prm[1].match ( /\// ) )
			{
				pathPrm	= Prm[1].split ( /\// );
				break;
			}
			else
				return Prm[1];
		}
	}
	if ( pathPrm )
		return pathPrm[( pathPrm.length - 1 )];

	return null;
}

/*
 *------------------------------------------------------------------------------
 * addFavorite ( url, title )
 *	------------------------------------------------------------------------
 *	Information:	�֥饦���б�������������Ͽ.
 *	Argument:	url   : ������������URL (̤����ξ��ȥåץڡ��������)
 *			title : ����������˻��Ѥ���ƥ�����.
 *			        (̤����ξ��ȥåפΥ����ȥ�����)
 *	Return:		Success: true, Failure: false
 *------------------------------------------------------------------------------
 */
function addFavorite ( url, title )
{
	// ���������å�.
	if ( ! url )
	{
		// ��ά�ξ��, �ȥåץڡ���������.
		if ( ! urlRoot )
			return false;
		url	= urlRoot + '/index.html';
	}
	if ( ! title )
	{
		// ��ά�ξ��, �ɥ������̾������.
		title	= document.title;
		// ` - '�ʹߤ�ʸ�������.
		title	= title.replace ( / - .*/, '' );
		if ( ! title )
			return false;
	}

	alert( 'Windows�� Internet Explorer�����Ѥ����Ϥ������������Ͽ�������ޤ���\n����ʳ������Ϥ�����Ǥ����֥饦���ε�ǽ�����Ѥ���������' );
	// Windows, Microsoft Internet Explorer �б�.
	if ( navigator.platform.match ( /^Win/i )
	  && navigator.appName.match ( /Internet Explorer/i )
	)
	{
		// ������������Ͽ.
		window.external.AddFavorite ( url, title );
		return true;
	}

	return false;
}

/*
 *------------------------------------------------------------------------------
 * targetPage ( href, target)
 *	------------------------------------------------------------------------
 *	Information:	�������̥�����ɥ�������̤�ɽ������.
 *	Argument:	href		: �̥�����ɥ�ɽ����URL.
 *				target	: �̥�����ɥ��������å���.
 *	Return:		Success: true, Failure: false
 *------------------------------------------------------------------------------
 */
function targetPage( obj ) 
{
	var href		= obj.href;
	var target		= obj.target;

	window.open( href, target ).focus();
	return false;
}

/*
 *------------------------------------------------------------------------------
 * checkFlash ( )
 *	------------------------------------------------------------------------
 *	Information:     Flash��̵ͭ��Ƚ�ꤹ��.��add 2010/11/17 Kuwa��
 *	Argument:        flg_flash��Flash̵ͭ�ե饰
 *	Return:          Flashͭ��1  Flash̵��0
 *------------------------------------------------------------------------------
 */
function checkFlash()
{
	if(navigator.mimeTypes &&
	   navigator.mimeTypes["application/x-shockwave-flash"] &&
	   navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin){
		if(navigator.plugins && navigator.plugins["Shockwave Flash"]){
			plugin = 1;
		}
	}
	else if(navigator.userAgent && (navigator.userAgent.indexOf("MSIE") >= 0) &&
		(navigator.userAgent.indexOf("Win") >= 0)){
		document.write('<SCRIPT LANGUAGE="VBScript"\> \n');
		document.write('Dim playerversion \n');
		document.write('playerversion = 15 \n');
		document.write('Do While playerversion > 0 \n');
		document.write('on error resume next \n');
		document.write('plugin = ( IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash." & playerversion)))\n');
		document.write('If plugin = true Then Exit Do \n');
		document.write('playerversion = playerversion - 1 \n');
		document.write('Loop \n');
		document.write('</SCRIPT\> \n');
	}

	return plugin;

}

//--->
