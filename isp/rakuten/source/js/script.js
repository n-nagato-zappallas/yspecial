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
 *  接続クライアントブラウザ情報.
 */
var osName	= navigator.platform;		// OS名取得.
var appCode	= navigator.appCodeName;	// ブラウザタイプ取得.
var appName	= navigator.appName;		// ブラウザ名取得.
var appVer	= navigator.appVersion;		// ブラウザバージョン取得.
var appAgent	= navigator.userAgent;		// ブラウザエージェント情報.
var appVersion	= null;				// ブラウザバージョン番号.

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
 *	Information:	ブラウザ対応チェック.
 *			* Win32 IE 6.0 以上 FireFox 2.0 以上 Safari 3以上 対応.
 *			* MacOS FireFox 2.0 以上 Safari 2以上 対応.
 *	Argument:	void
 *	Return:		対応可: true, 対応不可: false
 *------------------------------------------------------------------------------
 */

function checkNavigator ( )
{
	// facebook対応
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
	var appVer;				//ブラウザバージョン取得
	var browserName;		//ブラウザ名の取得
	var s, e ,end_count;	//検索位置取得

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
		appVer	= appAgent.substring ( s, e ) ;		//ブラウザバージョン情報の取得
		appVer = eval ( appVer.replace(/^([0-9]+)(\.[0-9]+)?.*/g, "$1$2") );
	}

	//2016/08/17 iPhone WebView対応
	if ( os == "iPhone" && browserName == "Other" && !appVer) {
		//UAからAppleWebKitのバージョンを取得する
		s	= appAgent.toUpperCase( ).indexOf ( 'APPLEWEBKIT', 0 ) + 12 ;
		e	= appAgent.indexOf ( " ", s );
		appVer	= appAgent.substring ( s, e ) ;		//ブラウザバージョン情報の取得
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
 *	Information:	画像差し替えオブジェクトの初期読み込み.
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
			// onEvent差し替え画像パス設定.
			var fileName	= obj[i].src.replace ( /^.*\//, '' );
			var fileDir	= obj[i].src.replace ( fileName, '' );
			var fileType	= fileName.replace ( /^.*\./, '.' );
			var fileProp	= fileName.replace ( /\..*$/, '' );
			var fileSrc	= fileDir + fileProp + '_over' + fileType;
			// 画像読み込み.
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
 *	Information:	画像差し替え関数.
 *	Argument:	obj : タグオブジェクト.
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
	// ファイル名を取得.
	var fileName	= src.replace ( /^.*\//, ''  );
	// ディレクトリパスを取得.
	var fileDir	= src.replace ( fileName, '' );
	// 拡張子を取得.
	var fileType	= fileName.replace ( /^.*\./, '.' );

	obj.src	= fileDir + id + '_over' + fileType;

	return true;
}

/*
 *------------------------------------------------------------------------------
 * swapImageRestore ( obj )
 *	------------------------------------------------------------------------
 *	Information:	画像差し替え関数 (Restore)
 *	Argument:	obj : タグオブジェクト.
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

	// ファイル名を取得.
	var fileName;
	if ( src.match ( /\// ) )
		fileName	= src.replace ( /^.*\//, '' );
	if ( src.match ( /\\/ ) )
		fileName	= src.replace ( /^.*\\/, '' );
	// ディレクトリパスを取得.
	var fileDir	= src.replace ( fileName, '' );
	// 拡張子を取得.
	var fileType	= fileName.replace ( /^.*\./, '.' );

	obj.src	= fileDir + id + fileType;

	return true;
}

/*
 *------------------------------------------------------------------------------
 * getMenuNameByFile ( void )
 *	------------------------------------------------------------------------
 *	Information:	ファイル名からメニュー名を取得する.
 *	Argument:	void
 *	Return:		Success: メニュー名, Failure: null
 *------------------------------------------------------------------------------
 */
function getMenuNameByFile (  )
{
	var path	= document.URL;
	if ( ! path )
		return null;
	// クエリー文字列削除.
	path	= path.replace ( /\?.*$/, '' );
	// ドメイン/ディレクトリを削除し, ファイル名取得.
	if ( path.match ( /\// ) )
		path	= path.replace ( /^.*\//, '' );
	if ( path.match ( /\\/ ) )
		path	= path.replace ( /^.*\\/, '' );
	// ファイル拡張子削除.
	path	= path.replace ( /\.html/, '' );
	path	= path.replace ( /\.htm/, '' );

	return ( path );
}

/*
 *------------------------------------------------------------------------------
 * getMenuNameByQuery ( name )
 *	------------------------------------------------------------------------
 *	Information:	GETクエリー文字列からメニュー名を取得する.
 *	Argument:	name : メニュー識別名.
 *	Return:		Success: メニュー名, Failure: null
 *------------------------------------------------------------------------------
 */
function getMenuNameByQuery ( name )
{
	if ( ! name )
		return null;
	// GETクエリー文字列取得.
	var Params	= location.search;
	Params		= Params.replace ( /\?/, '' );
	// GETクエリー文字列チェック.
	if ( ! Params
	  || ! Params.match ( /=/ )
	)
		return null;
	// GETクエリー文字列を`&'で分割.
	Params		= Params.replace ( /%26/g, '&' );
	var splitPrms	= Params.split ( '&' );
	var pathPrm	= null;
	for ( var i = 0, Prm = null; i < splitPrms.length; i++ )
	{
		// 各パラメータを`='で分割.
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
 *	Information:	ブラウザ対応お気に入り登録.
 *	Argument:	url   : お気に入り先URL (未指定の場合トップページを使用)
 *			title : お気に入りに使用するテキスト.
 *			        (未指定の場合トップのタイトルを使用)
 *	Return:		Success: true, Failure: false
 *------------------------------------------------------------------------------
 */
function addFavorite ( url, title )
{
	// 引数チェック.
	if ( ! url )
	{
		// 省略の場合, トップページを設定.
		if ( ! urlRoot )
			return false;
		url	= urlRoot + '/index.html';
	}
	if ( ! title )
	{
		// 省略の場合, ドキュメント名を設定.
		title	= document.title;
		// ` - '以降の文字列を削除.
		title	= title.replace ( / - .*/, '' );
		if ( ! title )
			return false;
	}

	alert( 'Windows版 Internet Explorerをご利用の方はお気に入りに登録いたします。\nそれ以外の方はお手数ですがブラウザの機能をご利用ください。' );
	// Windows, Microsoft Internet Explorer 対応.
	if ( navigator.platform.match ( /^Win/i )
	  && navigator.appName.match ( /Internet Explorer/i )
	)
	{
		// お気に入り登録.
		window.external.AddFavorite ( url, title );
		return true;
	}

	return false;
}

/*
 *------------------------------------------------------------------------------
 * targetPage ( href, target)
 *	------------------------------------------------------------------------
 *	Information:	開いた別ウィンドウを最前面に表示する.
 *	Argument:	href		: 別ウィンドウ表示先URL.
 *				target	: 別ウィンドウターゲット先.
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
 *	Information:     Flashの有無を判定する.（add 2010/11/17 Kuwa）
 *	Argument:        flg_flash：Flash有無フラグ
 *	Return:          Flash有：1  Flash無：0
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
