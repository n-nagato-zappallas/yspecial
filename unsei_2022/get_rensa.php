<?php
/**
 * test URL
 * http://web-dev.ura.pga.jp/yahoo/event/unsei_2022/get_rensa.php
 * 
 * real URL
 * http://web-portal-api.pga.jp/yspecial/unsei_2022/get_rensa.php
 */

// ########## ここから定数/変数定義 ##########
$msg = "";
$flg = 0;


// ########## メイン処理 ##########

//$url = 'https://api-y2022.telsys.jp/api';
$url = 'https://dev.api-y2022.telsys.jp/api';

$param = '?menu_id=' .$_REQUEST[ 'menu_id' ]
		.'&name_self=' .$_REQUEST[ 'name_self' ]
		.'&birthday_self=' .$_REQUEST[ 'birthday_self' ]
		.'&sex_self=' .$_REQUEST[ 'sex_self' ];

if( $_REQUEST[ 'name_other' ] ){
	$param .= '&name_other=' .$_REQUEST[ 'name_other' ]
			. '&birthday_other=' .$_REQUEST[ 'birthday_other' ]
			. '&sex_other=' .$_REQUEST[ 'sex_other' ];
}

$param .= '&now=' .$_REQUEST[ 'now' ];

if( $_REQUEST[ 'free_flag' ] ) {
	$param .= '&free_flag=1';
}


$response = file_get_contents( $url .$param );

echo $response;


?>