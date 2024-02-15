/*
 *------------------------------------------------------------------------------
 *
 *	Contents:	hanya
 *	Copyright:(C) Zappallas,INC. all rights reserved.
 *	Framework:	1.0
 *	Version:	1.0
 *	Japanese Code:	EUC-JP
 *	Return Code:	LF
 *
 *	Function reference:
 *	changeImage ( )
 *
 *------------------------------------------------------------------------------
 */

/*
 *------------------------------------------------------------------------------
 * checksubmit ( )
 *	------------------------------------------------------------------------
 *	Information:	フォームを送信する.
 *	Argument:	
 *	Return:		
 *------------------------------------------------------------------------------
 */

var submitFlg = 0;

function loadCookie(loadValue){
  if(loadValue){
    var c_data = document.cookie + ";";
    c_data = unescape(c_data);
    var n_point = c_data.indexOf(loadValue);
    var v_point = c_data.indexOf("=",n_point) + 1;
    var end_point = c_data.indexOf(";",n_point);
    if(n_point > -1){ c_data = c_data.substring(v_point,end_point); return c_data; }
  }
}
function getUid(){
    var utma = loadCookie('__utma');
    if ( utma ){ var array = utma.split('.'); var uid = array[1]; return uid; }
}
function setZapUid() {
  var uid = getUid();
  if( uid ) {
    var ell = document.createElement('input');
    ell.id = "zpu"; ell.name = "zpu"; ell.type = "hidden"; ell.value = uid;
    try{
       var  obj = document.forms[ 'frmMain' ]
      obj.appendChild(ell);
    }catch( e ){}
  }
}

function flgReset ( ){
	submitFlg = 0;
	return false;
}

function checksubmit ( ){

	if ( submitFlg != 1 ){
//	submitFlg = 1;
	try{setZapUid();}catch(e){}
    // --- for goo ---
    
    var ell = document.getElementById('isp');
    if(ell) {
      var isp = ell.value;
      if( isp != 30 ){try{setFortunedate();}catch(e){}}
    } else {
      try{setFortunedate();}catch(e){}
    }
    // -----
	document.forms[ 'frmMain' ].submit( );
	}
	else{
	return false;
	}
}

function checksubmit2 ( ){
	if ( submitFlg != 1 ){
//	submitFlg = 1;
	try{setZapUid();}catch(e){}
    // --- for goo ---
    
    var ell = document.getElementById('isp');
    if(ell) {
      var isp = ell.value;
      if( isp != 30 ){try{setFortunedate();}catch(e){}}
    } else {
      try{setFortunedate();}catch(e){}
    }
    // -----
	document.forms[ 'frmMain2' ].submit( );
	}
	else{
	return false;
	}
}
