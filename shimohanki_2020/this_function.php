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
		$data = array( 'menu_id' => getMenuId( $menu_id ) );
		$min_title = array();
		foreach( $row as $key => $val ) {
			if( $key == 'release_date' && date_diff_local( $release_date, $val ) <= 30 )
				$data['new'] = '1';
			if( strpos( $key, 'min_title' ) !== false  ) {
				$arr_mt = explode( "_", $key );
				$min_title[ $arr_mt[0] ] = $val;
			} else if( strpos( $key, 'price' ) !== false ) {
				if( $self->get('isp') == 10 || $self->get('isp') == 11 ) {
					$data[$key] = number_format( $val ) .'円（税別）';
				} else if( $self->get('isp') == 40 ) {
					$data[$key] = number_format( $val );
					$data['discount'] = number_format( $val *0.9 );
					$data['discount_flag'] = 1;
				} else
					$data[$key] = $val;
			} else if( $self->get('isp') == 11 && $key == 'menu_id' ) {
				$data[$key] = getMenuId( $val );
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
		$data = array( 'menu_id' => getMenuId( $menu_id ) );
		$min_title = array();
		foreach( $row as $key => $val ) {
			if( strpos( $key, 'min_title' ) !== false  ) {
				$arr_mt = explode( "_", $key );
				$min_title[ $arr_mt[0] ] = $val;
			} else if( strpos( $key, 'price' ) !== false ) {
				if( $self->get('isp') == 10 || $self->get('isp') == 11 ) {
					$data[$key] = number_format( $val ) .'円（税別）';
				} else if( $self->get('isp') == 40 ) {
					$data[$key] = number_format( $val );
					$data['discount'] = number_format( $val *0.9 );
					$data['discount_flag'] = 1;
				} else
					$data[$key] = $val;
			} else if( $self->get('isp') == 11 && $key == 'menu_id' ) {
				$data[$key] = getMenuId( $val );
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
 * その他メニュー一覧
 */
function getIndexData3( $arr = array() ) {
	global $self, $YearData1;
	$release_date = $self->get('release_date');
	$ret = array();
	foreach( $arr as $menu_id => $row ) {
		if( $menu_id == $self->get('menu_id') ) continue;
		// 特定ISPだけ公開日を変更する
		if( $self->get('isp') == 40 && $menu_id == '601' ) $row['release_date'] = '20200623';
		if( $row['release_date'] > $release_date ) continue;
		if( $self->get('isp') != 70 && strpos( $row['contents_id'], 'zap' ) === false ) continue;
		
		
		$data = array( 'menu_id' => getMenuId( $menu_id ) );
		$data = array( 'charano' => getMenuId( $menu_id ) );
		foreach( $row as $key => $val ) {
			if( $key == 'release_date' && date_diff_local( $release_date, $val ) <= 30 ) {
				$data['new'] = '1';
			}
			if( $self->get('isp') == 10 ) {
				if( strpos( $key, 'price' ) !== false ) {
					$data[$key] = number_format( $val ) .'円（税別）';
				} else if( $key == 'menu_url' ) {
					$data[$key] = str_replace( 'charge-fortune.yahoo.co.jp/zap/', 'lovefortune.zappallas.com/rakuten/', $val );
				 }else
					$data[$key] = $val;
			} else if( $self->get('isp') == 11 ) {
				if( strpos( $key, 'price' ) !== false ) {
					$data[$key] = number_format( $val ) .'円（税別）';
				} else if( $key == 'menu_url' ) {
					$data[$key] = str_replace( 'charge-fortune.yahoo.co.jp/zap/', 'honkaku-uranai.jp/cp_zap/', $val );
				 }else
					$data[$key] = $val;
			} else if( $self->get('isp') == 40 ) {
				if( strpos( $key, 'price' ) !== false ) {
					$data[$key] = number_format( $val );
					$data['menu_discount'] = number_format( $val *0.9 );
					$data['discount_flag'] = ($menu_id=='302' ||$menu_id=='101' ||$menu_id=='103')?1 :0;
				} else if( strpos( $key, 'discount' ) !== false ) {
					continue;
				} else if( $key == 'menu_url' ) {
					$data[$key] = str_replace( 'charge-fortune.yahoo.co.jp/zap/', 'contents.nifty.com/member/service/g-way/oto_zap/nifty/', $val );
				 }else
					$data[$key] = $val;
			} else if( $self->get('isp') == 11 && $key == 'menu_id' ) {
				$data[$key] = getMenuId( $val );
				
			} else {
				$data[$key] = $val;
			}
		}
		$ret[] = $data;
	}
	return $ret;
}





function setNextData() {
	global $self, $menuData, $YearData1, $YearData2;
	$arr = $menuData['person'] == 1 ?$YearData1 :$YearData2;
	$ret = array();
	foreach( $arr as $menu_id => $row ) {
		if( $menu_id == $self->get('menu_id') ) continue;
		$p = $self->get('isp') == 10 || $self->get('isp') == 11 ?number_format( $row['menu_price'] ) .'円（税別）' :$self->get('isp') == 40 ?number_format( $row['menu_price'] ) :$row['menu_price'];
		$d = $self->get('isp') == 10 || $self->get('isp') == 11 ?number_format( $row['menu_discount'] ) .'円（税別）' :$self->get('isp') == 40 ?number_format( $row['menu_price'] *0.9 ) :$row['menu_discount'];
		$ret[] = array( 'menu_id' => $menu_id, 'menu_price' => $p, 'menu_discount' => $d, 'menu_discount_flag' => 1 );
	}
	return $ret;
}


function getMenuId( $menu_id ) {
	global $self;
	$ret = $menu_id;
//	if( $self->get('isp') == 11 ) {
		$ret = str_replace( 'sh2019_00', 'lh19_', $menu_id );
//	}
	return $ret;
}
?>
