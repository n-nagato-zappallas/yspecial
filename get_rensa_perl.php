<?php
/**
 * test URL
 * http://web-dev.ura.pga.jp/yahoo/event/get_rensa_perl.php
 * 
 * real URL
 * http://web-portal-api.pga.jp/yspecial/get_rensa_perl.php
 */

// ########## ここから定数/変数定義 ##########
$msg = "";
$flg = 0;


// ########## メイン処理 ##########

//$url = 'https://cocoloni-yfortune.telsys.jp/api';
$url = 'https://st.cocoloni-yfortune.telsys.jp/api';

$param = '?menu_id=' .$_REQUEST[ 'menu_id' ]
		.'&name_self=' .$_REQUEST[ 'name_self' ]
		.'&birthday_self=' .$_REQUEST[ 'birthday_self' ]
		.'&birth_hour_self=' .$_REQUEST[ 'birth_hour_self' ]
		.'&birth_min_self=' .$_REQUEST[ 'birth_min_self' ]
		.'&birth_place_self=' .$_REQUEST[ 'birth_place_self' ]
		.'&sex_self=' .$_REQUEST[ 'sex_self' ];

if( $_REQUEST[ 'name_other' ] ){
	$param .= '&name_other=' .$_REQUEST[ 'name_other' ]
			. '&birthday_other=' .$_REQUEST[ 'birthday_other' ]
			. '&birth_hour_other=' .$_REQUEST[ 'birth_hour_other' ]
			. '&birth_min_other=' .$_REQUEST[ 'birth_min_other' ]
			. '&birth_place_other=' .$_REQUEST[ 'birth_place_other' ]
			. '&sex_other=' .$_REQUEST[ 'sex_other' ];
}

$param .= '&now=' .$_REQUEST[ 'now' ];
if( $_REQUEST[ 'contents' ] ) {
	$param .= '&contents=' .$_REQUEST[ 'contents' ];
}
if( $_REQUEST[ 'free_flag' ] ) {
	$param .= '&free_flag=1';
}


$response = file_get_contents( $url .$param );

echo $response;


?>