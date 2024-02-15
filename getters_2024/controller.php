<?php
/**
 * 特集ごとのコントローラー
 * 
 *  [%event%]/controller.php			簡単なサイトの場合はBLはここに書いてしまおう
 *              └ logic.php			占断ロジック関連
 *              └ index_data.php		indexページの情報＆処理
 *              └ data/[%menu_id%].php	メニュー単位の情報
 */
if ( is_readable( $self->get('event') .'/this_function.php' ) ) {
	require_once( $self->get('event') .'/this_function.php' );
}

// 公開日付
if( !$self->get('release_date') ) {
	$now_date = date('Ymd') >= 20231209 ?date('Ymd') :'20231209';
	$self->set('release_date', $now_date);
}


// 変数セット
$SmartyObj->assign( 'preview',			$preview );
$SmartyObj->assign( 'charset',			$tmp_char );
$SmartyObj->assign( 'release_date',		$self->get('release_date') );

if( $self->get('isp') == 10 ) {
	$up = ( $device_mode == "sp" ?'/sp' :'' ) .'/rakuten/event/getters_2024';
	if( $real_flag ) $up = 'https://lovefortune.zappallas.com/rakuten/event/getters_2024';
	$SmartyObj->assign( 'uri_path',			$up );
	$SmartyObj->assign( 'img_path',			$up );
	$SmartyObj->assign( 'special_title',	'ゲッターズ飯田の五星三心占い◆2024年運勢特集【楽天占い】' );
	$SmartyObj->assign( 'meta_keywords',	'2024年,運勢,ゲッターズ飯田,五星三心占い,無料,突然ですが占ってもいいですか' );
	$SmartyObj->assign( 'meta_description',	'あなたの2024年の運勢をゲッターズ飯田が占います！　総合運、仕事運、金運、恋愛運や結婚運まで、7万人以上を占ったデータをもとに編み出した『五星三心占い』で総力鑑定！　2024年をあなたらしく最高な年にするために、まずは無料でお試しください。' );
	$SmartyObj->assign( 'sns_description',	'あなたの2024年の運勢をゲッターズ飯田が占います！　総合運、仕事運、金運、恋愛運や結婚運まで、7万人以上を占ったデータをもとに編み出した『五星三心占い』で総力鑑定！　2024年をあなたらしく最高な年にするために、まずは無料でお試しください。' );
	$SmartyObj->assign( 'special_period',	'2024年12月9日(金)～2024年12月7日(木)' );

} else if( $self->get('isp') == 11 ) {
	$up = ( $device_mode == "sp" ?'/sp' :'' ) .'/cp_zap/getters_2024';
	//if( $real_flag ) $up = 'http://web-dev.ura.pga.jp/cp_zap/getters_2024';
	if( $real_flag ) $up = 'https://honkaku-uranai.jp/cp_zap/getters_2024';
	$SmartyObj->assign( 'uri_path',			$up );
	$SmartyObj->assign( 'img_path',			$up );
	$SmartyObj->assign( 'special_title',	'ゲッターズ飯田の五星三心占い◆2024年運勢特集' );
	$SmartyObj->assign( 'meta_keywords',	'2024年,運勢,ゲッターズ飯田,五星三心占い,無料,突然ですが占ってもいいですか' );
	$SmartyObj->assign( 'meta_description',	'あなたの2024年の運勢をゲッターズ飯田が占います！　総合運、仕事運、金運、恋愛運や結婚運まで、7万人以上を占ったデータをもとに編み出した『五星三心占い』で総力鑑定！　2024年をあなたらしく最高な年にするために、まずは無料でお試しください。' );
	$SmartyObj->assign( 'sns_description',	'あなたの2024年の運勢をゲッターズ飯田が占います！　総合運、仕事運、金運、恋愛運や結婚運まで、7万人以上を占ったデータをもとに編み出した『五星三心占い』で総力鑑定！　2024年をあなたらしく最高な年にするために、まずは無料でお試しください。' );
	$SmartyObj->assign( 'special_period',	'2024年12月9日(金)～2024年12月7日(木)' );

}

//// 画像ぱす
// 'https://honkaku-uranai.jp/cp_zap/event/getters_2024'
//   ↓
// 'https://lw6nr4oyej.user-space.cdn.idcfcloud.net/event/getters_2024'
/** CDN使う場合 **/

$cdn_flag = true;
//$cdn_flag = false;

if( $cdn_flag && ( $self->get('isp') == 10 || $self->get('isp') == 11 ) ) {
	$img_path = 'https://lw6nr4oyej.user-space.cdn.idcfcloud.net/event/getters_2024';
	$SmartyObj->assign( 'img_path',			$img_path );
}


// テンプレートパス作成
$page = $self->get('t');
if( $device_mode == "sp" && ( $page == 'index' || $page == 'input' || $page == 'result' || $page == 'result_allfree' || $page == 'result_free' ) )
	$page .= '_sp';
else if( $device_mode != "sp" && ( $page == 'index_sp' || $page == 'input_sp' || $page == 'result_sp' || $page == 'result_allfree_sp' || $page == 'result_free_sp' ) )
	$page = str_replace('_sp', '', $page);

$self->set( 'page', $page );


// リコメンド情報。
if ( is_readable( $self->get('event') .'/index_data.php' ) ) {
	include( $self->get('event') .'/index_data.php' );
}


/**
 * 【index】
 */
if( strpos( $self->get('t'), 'index' ) !== false ) {
	
	// indexページフラグ
	$index_flag = strpos( $self->get('t'), 'index' ) !== false;
	$SmartyObj->assign( 'index_flag', $index_flag );
	
}

/**
 * 【input / result】
 */
else if ( is_readable( $self->get('event') .'/data/' .$self->get('menu_id') .'.php' ) ) {
	// 入力値
	$user_keys	= array( 'birth_year', 'birth_mon', 'birth_mday' );
	$self->init( $user_keys );

	// 【メニュー情報設定】
	include( $self->get('event') .'/data/' .$self->get('menu_id') .'.php' );
	if( !$self->get('contents') && $menuData['contents'] )
		$self->set('contents', $menuData['contents']);
	if( $menuData['person'] == 1 )
		unset( $target[1] );
	$now = str_replace( "-", "", nvl($_REQUEST[ 'now' ]) );
	if( !$now || !is_numeric ( $now ) || strlen( $now ) != 8 ) $now = date("Ymd");
	
	$self->set( 'now',       $now );
	$self->set( 'year_now',  substr($now, 0, 4) );
	$self->set( 'month_now', substr($now, 4, 2) );
	$self->set( 'mday_now',  substr($now, 6, 2) );
	$SmartyObj->assign( 'now',       $now );
	$SmartyObj->assign( 'year_now',  substr($now, 0, 4) );
	$SmartyObj->assign( 'month_now', substr($now, 4, 2) );
	$SmartyObj->assign( 'mday_now',  substr($now, 6, 2) );
	
	// パックフラグ
	$pack_flag = $menuData['contents'] == 'pack' || $self->get('contents') == 'pack';
	// 完全無料結果フラグ
	$allfree_flag = $menuData['contents'] == 'free' || $self->get('contents') == 'free';
	// 結果ページフラグ
	$result_flag = strpos( $self->get('t'), 'result' ) !== false;
	// 一部無料結果ページフラグ
	$free_flag = strpos( $self->get('t'), 'result_free' ) !== false;
	
	$SmartyObj->assign( 'pack_flag', $pack_flag );
	$SmartyObj->assign( 'free_flag', $allfree_flag );
	$SmartyObj->assign( 'result_flag', $result_flag );
	
	
	// メニュー情報をテンプレートにセット
	$min_title = array();
	$type = array();
	$tmp_type = array(1,2,3,4,5);
	shuffle($tmp_type);
	foreach( $menuData as $key => $val ) {
		if( strpos( $key, 'min_title' ) !== false  ) {
			$arr_mt = explode( "_", $key );
			$type[ $arr_mt[0] ] = $tmp_type[ $arr_mt[0] -1 ];
			//$min_title[ $arr_mt[0] ] = $allfree_flag ?$val[ $type[ $arr_mt[0] ] ] :$val;
			$min_title[ $arr_mt[0] ] = $val;
		} else if( $key == 'price' ) {
			if( $self->get('isp') == 10 || $self->get('isp') == 11 ) {
				$SmartyObj->assign( 'menu_' .$key, number_format( $val *1.1 ) .'円（税込）' );
			} else
				$SmartyObj->assign( 'menu_' .$key, $val );
		} else {
			$SmartyObj->assign( 'menu_' .$key, $val );
		}
	}
	$SmartyObj->assign( 'menu_min_title', $min_title );
	$SmartyObj->assign( 'menu_min_title_type', $type );
	
	
	
	// ロジック情報
	if( $result_flag )
		require_once 'logic.php';
	
	// 【パックメニュー】
	if( $pack_flag ) {
		$packData = $menuData;
		$packInfo = array();
		$logic_cd = array();
		// 1:getters1
		// 2:getters2
		// 3:getters3
		// 4:getters4
		for( $j=1; $j <= 4; $j++ ) {
			$packInfo[ $packData['child_contents_' .$j] ] = array();
			// メニュー基本情報
			if ( is_readable( $self->get('event') .'/data/' .$packData['child_menu_id_' .$j] .'.php' ) ) {
				include( $self->get('event') .'/data/' .$packData['child_menu_id_' .$j] .'.php' );
			}
			$min_title = array();
			foreach( $menuData as $key => $val ) {
				if( strpos( $key, 'min_title' ) !== false  ) {
					$arr_mt = explode( "_", $key );
					$min_title[ $arr_mt[0] ] = $val;
				} else if( $key == 'price' ) {
					if( $self->get('isp') == 10 || $self->get('isp') == 11 ) {
						$packInfo[ $packData['child_contents_' .$j] ][ 'menu_' .$key ] = number_format( $val *1.1 ) .'円（税込）';
					} else
						$packInfo[ $packData['child_contents_' .$j] ][ 'menu_' .$key ] = $val;
				} else {
					$packInfo[ $packData['child_contents_' .$j] ][ 'menu_' .$key ] = $val;
				}
			}
			$packInfo[ $packData['child_contents_' .$j] ][ 'menu_min_title' ] = $min_title;
			
			// 結果ページ用
			if( $result_flag ) {
				// 入力チェック
				checkInputParam();
				
				$logic_cd[$j] = get_logic_cd( $packData['child_contents_' .$j] );
				
				// 基本性格
				if( $j == 1 ) {
					$base = get_base_info( $logic_cd[1], $free_flag );
					foreach( $target as $key => $val ) {
						$SmartyObj->assign( 'base_id_' .$val, $base['base_id_' .$val] );
						$SmartyObj->assign( 'base_alt_' .$val, $base['base_alt_' .$val] );
						$SmartyObj->assign( 'base_text_' .$val, $base['base_text_' .$val] );
						$SmartyObj->assign( 'base_summary_' .$val, $base['base_summary_' .$val] );
					}
					$base2 = get_base_info_pack( $logic_cd[1] );
					$SmartyObj->assign( 'base_articles_1', $base2['base_articles_1'] );
					$SmartyObj->assign( 'base_articles_2', $base2['base_articles_2'] );
					$SmartyObj->assign( 'base_articles_3', $base2['base_articles_3'] );
					$SmartyObj->assign( 'lucky_date', $base2['lucky_date'] );
					$SmartyObj->assign( 'base_advice', $base2['base_advice'] );
					$base3 = get_base_info_month( $logic_cd[1] );
					for( $i = 1; $i <= 12; $i++ ){
						foreach( array('a','b','c','d') as $c ) {
							$SmartyObj->assign( 'base_year_' .$i .'_' .$c, $base3['base_year_' .$i .'_' .$c] );
							$SmartyObj->assign( 'base_month_' .$i .'_' .$c, $base3['base_month_' .$i .'_' .$c] );
						}
					}
				}
				
				if( $logic_cd && count($logic_cd) ) {
					$result_menu = array();
					$result_text = $free_flag ?$free :$text;
					for( $i = 0; $i < count($result_text); $i++ ) {
						$result_menu[ $i +1 ] = replace_name( $result_text[$i][ $logic_cd[$j][ $logic ] ] );
					}
					$packInfo[ $packData['child_contents_' .$j] ][ 'result_menu' ] = $result_menu;
				}
			}
			$SmartyObj->assign( $packData['child_contents_' .$j], $packInfo[ $packData['child_contents_' .$j] ] );
		}

		// ヘッダーステータス
		if( !$free_flag )
			$yahoo_charge_status = "0";
	}
	
	// 【完全無料メニュー】結果ページ
	else if( $allfree_flag ) {
		// 入力チェック
		checkInputParam();
		// ロジック結果を取得
		$logic_cd = get_logic_cd( $menuData['contents'] );
		
		// 基本性格
		$base = get_base_info_allfree( $logic_cd );
		foreach( $target as $key => $val ) {
			$SmartyObj->assign( 'base_id_' .$val, $base['base_id_' .$val] );
			$SmartyObj->assign( 'base_alt_' .$val, $base['base_alt_' .$val] );
			$SmartyObj->assign( 'base_text_' .$val, $base['base_text_' .$val] );
			$SmartyObj->assign( 'base_summary_' .$val, $base['base_summary_' .$val] );
		}
		
		$base3 = get_base_info_month( $logic_cd );
		for( $i = 1; $i <= 12; $i++ ){
			foreach( array('a','b','c','d') as $c ) {
				$SmartyObj->assign( 'base_year_' .$i .'_' .$c, $base3['base_year_' .$i .'_' .$c] );
				$SmartyObj->assign( 'base_month_' .$i .'_' .$c, $base3['base_month_' .$i .'_' .$c] );
			}
		}
		
		$base2 = get_base_info_pack( $logic_cd );
		$SmartyObj->assign( 'base_articles_1', $base2['base_articles_1'] );
		$SmartyObj->assign( 'base_articles_2', $base2['base_articles_2'] );
		$SmartyObj->assign( 'base_articles_3', $base2['base_articles_3'] );
		$SmartyObj->assign( 'lucky_date', $base2['lucky_date'] );
		
		$SmartyObj->assign( 'base_term', $base['base_term'] );
		for( $i = 1; $i <= 7; $i++ ){
			foreach( array('a','b','c','d') as $c ) {
				$SmartyObj->assign( 'base_day_' .$i .'_' .$c, $base['base_day_' .$i .'_' .$c] );
			}
		}
		
		//  小メニュー 結果テキストを取得／HTML置換
		if( $logic_cd && count($logic_cd) ) {
			$result_menu = array();
			$result_text = $text;
			for( $i = 0; $i < count($result_text); $i++ ) {
				$result_menu[ $i +1 ] = replace_name( $result_text[$i][ $logic_cd[ $logic ] ] );
			}
			
			$SmartyObj->assign( 'result_menu', $result_menu );
		}
		

	}
	
	// 【通常メニュー】結果ページ
	else if( $result_flag ) {
		// 入力チェック
		checkInputParam();
		// ロジック結果を取得
		$logic_cd = get_logic_cd( $menuData['contents'] );
		
		// 基本性格
		$base = get_base_info( $logic_cd, $free_flag );
		foreach( $target as $key => $val ) {
			$SmartyObj->assign( 'base_id_' .$val, $base['base_id_' .$val] );
			$SmartyObj->assign( 'base_alt_' .$val, $base['base_alt_' .$val] );
			$SmartyObj->assign( 'base_text_' .$val, $base['base_text_' .$val] );
			$SmartyObj->assign( 'base_summary_' .$val, $base['base_summary_' .$val] );
		}
		$base3 = get_base_info_month( $logic_cd );
		for( $i = 1; $i <= 12; $i++ ){
			foreach( array('a','b','c','d') as $c ) {
				$SmartyObj->assign( 'base_year_' .$i .'_' .$c, $base3['base_year_' .$i .'_' .$c] );
				$SmartyObj->assign( 'base_month_' .$i .'_' .$c, $base3['base_month_' .$i .'_' .$c] );
			}
		}
		
		//  小メニュー 結果テキストを取得／HTML置換
		if( $logic_cd && count($logic_cd) ) {
			$result_menu = array();
			$result_text = $free_flag ?$free :$text;
			for( $i = 0; $i < count($result_text); $i++ ) {
				$result_menu[ $i +1 ] = replace_name( $result_text[$i][ $logic_cd[ $logic ] ] );
			}
			
			$SmartyObj->assign( 'result_menu', $result_menu );
		}
		// ヘッダーステータス
		if( !$free_flag )
			$yahoo_charge_status = "0";
	}
	
	
	// Next枠 ( パックと一部無料見せでは非表示 )
	if( ! $pack_flag && !$free_flag && ( $allfree_flag || $result_flag ) ) {
	
		if( isset( $next ) ) {
			
			$next_list = array();
			
			foreach( $next as $next_id ) {
				
				$next_data =  new menuInfo( $next_id, 'next' );
				$next_menuData = $next_data->get('menuData');
				// Next メニュー情報
				$data = array( 'menu_id' => $menu_id );
				$min_title = array();
				foreach( $next_menuData as $key => $val ) {
					if( strpos( $key, 'min_title' ) !== false  ) {
						$arr_mt = explode( "_", $key );
						$min_title[ $arr_mt[0] ] = $val;
					} else if( $key == 'price' ) {
						if( $self->get('isp') == 10 || $self->get('isp') == 11 ) {
							$data[$key] = number_format( $val *1.1 ) .'円（税込）';
						} else
							$data[$key] = $val;
					} else {
						$data[$key] = $val;
					}
				}
				$data['menu_min_title'] = $min_title;
				// Next 結果テキスト
				$next_free = $next_data->get('free');
				$next_logic_cd = $logic_cd;
				if( $next_menuData['contents'] != $menuData['contents'] ) {
					$next_logic_cd = get_logic_cd( $next_menuData['contents'] );
				}
				$result_menu2 = array();
				$result_menu2[1] =  replace_name( $next_free[0][ $next_logic_cd[ $next_data->get('logic') ] ] ) ;
				$data['result_menu'] = $result_menu2;
				
				$next_list[] = $data;
				
				if( $self->get('menu_id') == 'gq24_001' && $data['menu_id'] == 'gq24_004' ) {
					$SmartyObj->assign( 'getters1', $data );
				}
				
			}
			$SmartyObj->assign( 'next_list', $next_list );
			
		}
	}
}
?>
