//ZAP GOOGLE
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-13230705-29']);
  _gaq.push(['_addOrganic', 'images.google','q']);
  _gaq.push(['_addOrganic', 'biglobe','q',true]);
  _gaq.push(['_addOrganic', 'azby.search.nifty','q',true]);
  _gaq.push(['_addOrganic', 'nifty','q',true]);
  _gaq.push(['_addOrganic', 'infoseek','qt']);
  _gaq.push(['_addOrganic', 'rakuten','qt']);
  _gaq.push(['_addOrganic', 'livedoor-search','q',true]);
  _gaq.push(['_addOrganic', 'naver.jp','q',true]);
  _gaq.push(['_addOrganic', 'so-net','query']);
  _gaq.push(['_addOrganic', 'fresheye','kw']);
  _gaq.push(['_addOrganic', 'auone','q',true]);
  _gaq.push(['_addOrganic', 'ocnsearch', 'MT']);
  _gaq.push(['_addOrganic', 'hi-ho', 'search']);
  _gaq.push(['_addOrganic', 'odn','search']);
  _gaq.push(['_addOrganic', 'eonet','search']);
  _gaq.push(['_addOrganic', 'toppa','search']);
  _gaq.push(['_addOrganic', 'partners.search.goo', 'MT']);
  _gaq.push(['_addOrganic', 'goo', 'MT']);
  _gaq.push(['_addOrganic', 'bsearch.goo', 'MT']);
  _gaq.push(['_addOrganic', 'excite','search']);
  _gaq.push(['_addOrganic', 'asahi','Keywords']);
  _gaq.push(['_addOrganic', 's.luna.tv', 'q']);
  _gaq.push(['_addOrganic', 'lunascape', 'p']);
  _gaq.push(['_addOrganic', 'hatena', 'word']);
  _gaq.push(['_addOrganic', 'ecnavi', 'Keywords']);
  _gaq.push(['_addOrganic', 'cybozu', 'Keywords']);
  _gaq.push(['_addOrganic', 'cocacola', 'Keywords']);
  _gaq.push(['_addOrganic', 'picmy.jp', 'Keywords']);
  _gaq.push(['_addOrganic', 'adingo.jp', 'Keywords']);
  _gaq.push(['_addOrganic', 'adingosearch', 'Keywords']);
  _gaq.push(['_addOrganic', 'pex.jp', 'Keywords']);
  _gaq.push(['_addOrganic', 'went.jp', 'Keywords']);
  _gaq.push(['_addOrganic', 'unisearch.jp', 'keyword']);
  _gaq.push(['_addOrganic', 'tnc.jword.jp', 'q']);
  _gaq.push(['_addOrganic', 't-com.jword.jp', 'q']);
  _gaq.push(['_addOrganic', 'search.jword.jp', 'name']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    //ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    ga.src = ( 'https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
function recordOutboundLink(link, category, action, label) {
  try {
    _gaq.push(['_trackEvent', category, action, label]);
    setTimeout('document.location = "' + link.href + '"', 100)
  }catch(err){}
}

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

