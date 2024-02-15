<?php
/**
 * 年運用。リリース日を迎えたもの全て表示
 */
function getIndexData( $arr = array() ) {
	global $self;
	$release_date = $self->get('release_date');
	$ret = array();
	foreach( $arr as $menu_id ) {
		$tmp =  new menuInfo( $menu_id, '' );
		$row = $tmp->get('menuData');
		if( $row['release_date'] > $release_date ) continue;
		$data = array( 'menu_id' => $menu_id );
		$min_title = array();
		foreach( $row as $key => $val ) {
			if( $key == 'release_date' && date_diff_local( $release_date, $val ) <= 30 )
				$data['new'] = '1';
			if( strpos( $key, 'min_title' ) !== false  ) {
				$arr_mt = explode( "_", $key );
				$min_title[ $arr_mt[0] ] = $val;
			} else if( strpos( $key, 'price' ) !== false ) {
				if( $self->get('isp') == 10 || $self->get('isp') == 11 ) {
					$data[$key] = number_format( $val *1.1 ) .'円（税込）';
				} else
					$data[$key] = $val;
			} else {
				if( strpos( $key, 'discount' ) !== false && $self->get('isp') == 40 ) continue;
				$data[$key] = $val;
			}
		}
		$data['menu_min_title'] = $min_title;
		$ret[] = $data;
	}
	
	return $ret;
}

/**
 * 月運用。指定リリース日以外のメニューは表示しない
 */
function getIndexData2( $arr = array(), $release_date ) {
	global $self;
	$ret = array();
	foreach( $arr as $menu_id ) {
		$tmp =  new menuInfo( $menu_id, '' );
		$row = $tmp->get('menuData');
		if( $row['release_date'] != $release_date ) continue;
		$data = array( 'menu_id' => $menu_id );
		$min_title = array();
		foreach( $row as $key => $val ) {
			if( strpos( $key, 'min_title' ) !== false  ) {
				$arr_mt = explode( "_", $key );
				$min_title[ $arr_mt[0] ] = $val;
			} else if( strpos( $key, 'price' ) !== false ) {
				if( $self->get('isp') == 10 || $self->get('isp') == 11 ) {
					$data[$key] = number_format( $val *1.1 ) .'円（税込）';
				} else
					$data[$key] = $val;
			} else {
				if( strpos( $key, 'discount' ) !== false && $self->get('isp') == 40 ) continue;
				
				$data[$key] = $val;
			}
		}
		$data['menu_min_title'] = $min_title;
		$ret[] = $data;
	}
	return $ret;
}

/**
 * その他の年運。
 */
function getIndexData3( $arr = array() ) {
	global $self, $YearData1;
	$release_date = $self->get('release_date');
	$ret = array();
	foreach( $arr as $menu_id => $row ) {
		if( $menu_id == $self->get('menu_id') ) continue;
		if( $row['release_date'] > $release_date ) continue;
		// 他社年運はYahoo以外では非表示
		if( $self->get('isp') != 11 && strpos( $row['contents_id'], 'zap' ) === false ) continue;
		
		
		$data = array( 'menu_id' => $menu_id );
		$data = array( 'charano' => $menu_id );
		foreach( $row as $key => $val ) {
			
			if( $key == 'release_date' && date_diff_local( $release_date, $val ) <= 30 ) {
				$data['new'] = '1';
			}
			if( $self->get('isp') == 10 ) {
				if( strpos( $key, 'price' ) !== false ) {
					$data[$key] = number_format( $val *1.1 ) .'円（税込）';
				} else if( $key == 'menu_url' ) {
					$data[$key] = str_replace( 'honkaku-uranai.jp/cp_zap/', 'lovefortune.zappallas.com/rakuten/', $val );
				 }else
					$data[$key] = $val;
			} else if( $self->get('isp') == 11 ) {
				if( strpos( $key, 'price' ) !== false ) {
					$data[$key] = number_format( $val *1.1 ) .'円（税込）';
//				} else if( $key == 'menu_url' ) {
//					$data[$key] = str_replace( 'charge-fortune.yahoo.co.jp/zap/', 'honkaku-uranai.jp/cp_zap/', $val );
				 }else
					$data[$key] = $val;
				
			} else {
				$data[$key] = $val;
			}
		}
		$ret[] = $data;
	}
	return $ret;
}



/**
 * 置き換え文字列対応
 */
function replace_name2( $str ) {
	global $self, $msg, $target;
	$ns = $self->get('name2_self');
	$ret = str_replace( "[%NAME_SELF%]",  $ns, $str );
	if( $self->get('name2_other') ) {
		$no = $self->get('name2_other');
		$ret = str_replace( "[%NAME_OTHER%]", $no, $ret );
	}
	return $ret;
}


/**
 * レンサ対応
 */
function setRensa( $contents, $menu_id, $free_flag ) {
	global $self, $msg;
	
	// web-devのテスト用
	//$url = "http://web-dev.ura.pga.jp:8080/yspecial/unsei_2023/test_rensa.php";
	$url = "http://web-portal-api.pga.jp/yspecial/unsei_2023/get_rensa.php";
	
	
	// 完了予定。
	// 木下レオン　10月28日
	// 村野弘味　　11月4日
	//if( $contents == 'leon_rsa' ) {
	//	$url = "http://web-portal-api.pga.jp/yspecial/unsei_2023/get_rensa.php";
	//}
	
	
	// 本番用
	$real_flag = strpos( $_SERVER["HTTP_HOST"] .$_SERVER['REQUEST_URI'], 'web-dev' ) === false || $_REQUEST[ 'make' ] == '1';
	
	if( $real_flag ) {
		//$url = "http://web-portal-api.pga.jp/yspecial/unsei_2023/test_rensa.php";
		$url = "https://api-y2023.telsys.jp/api";
	}
	
	
	$param = '?menu_id=' .$menu_id
			.'&name_self=' .$self->get('name2_self')
			.'&birthday_self=' .sprintf( '%04d-%02d-%02d', $self->get('birth_year_self'), $self->get('birth_mon_self'), $self->get('birth_mday_self') )
			.'&birth_hour_self=' .$self->get('birth_hour_self')
			.'&birth_min_self=' .$self->get('birth_min_self')
			.'&sex_self=' .$self->get('sex_self')
			.'&birth_place_self=' .$self->get('birth_place_self');
	if( $self->get('birth_year_other') && $self->get('birth_mon_other') && $self->get('birth_mday_other') ){
		$param .= '&name_other=' .$self->get('name2_other')
				. '&birthday_other=' .sprintf( '%04d-%02d-%02d', $self->get('birth_year_other'), $self->get('birth_mon_other'), $self->get('birth_mday_other') )
				. '&birth_hour_other=' .$self->get('birth_hour_other')
				. '&birth_min_other=' .$self->get('birth_min_other')
				. '&sex_other=' .$self->get('sex_other')
				. '&birth_place_other=' .$self->get('birth_place_other');
	}
	
	$now = sprintf( '%04d-%02d-%02d', $self->get('year_now'), $self->get('month_now'), $self->get('mday_now') );
	$param .= '&now=' .$now;
	
	if( preg_match( "/001|002|003|004/", $menu_id ) ) {
		$param .= '&contents=' .$contents;
	}
	
	// 一部無料結果ページフラグ
	if( $free_flag ) {
		$param .= '&free_flag=1';
	}
	
	
	$json = file_get_contents( $url .$param );
	if( ! $json ){
		$msg .= 'E01:レンサとの通信に失敗しました。';
	}
	$res  = json_decode( $json,true );
	
	if( $contents == 'murano_rsa' ){
	//if( $contents == 'leon_rsa' ){
	//	var_dump($res);exit();
	}
	
	if( ! $res['status'] || $res['status'] != '1' || $res['error_msg'] || ! $res['result'] ) {
		$msg .= 'E02:レンサ占断エラー。 ' .$res['error_msg'];
		$msg .= '<br>'.$url.$param;
	}
	
	// set
	$self->set( 'api_' .$contents, $res );
	
	
	if( strlen( $msg ) > 0 ) {
	//	echo $msg;
	}
}

/**
 * レンサ基本性格モチーフ画像ALT
 */
function get_rensa_base_alt( $alt_id, $str ) {
	global $self, $msg;
	$arr = array( '', 
		array( '', 'おじぞうさん', '竜神さん', '風神さん', 'おしゃかさん', 'おふどうさん', 'あまてらすさん', 'えびすさん', '弁天さん', '雷神さん', '大黒さん', 'ガネーシャさん', '大仏さん' ),
		array( '', '比肩','劫財','食神','傷官','偏財','正財','偏官','正官','偏印','印綬', )
	);
	$ret = $arr[ $alt_id ][ $str ];
	
	return $ret;
}
?>
