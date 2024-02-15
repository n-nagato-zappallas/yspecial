<?php
/**
 * 特集ごとのコントローラー
 * 
 *  [%event%]/controller.php			簡単なサイトの場合はBLはここに書いてしまおう
 *              └ logic.php			占断ロジック関連
 *              └ index_data.php		indexページの情報＆処理
 *              └ this_function.php		このコンテンツの関数
 *              └ data/[%menu_id%].php	メニュー単位の情報
 */
if ( is_readable( $self->get('event') .'/this_function.php' ) ) {
	require_once( $self->get('event') .'/this_function.php' );
}


// 公開日付
if( !$self->get('release_date') ) {
	$now_date = date('Ymd') >= 20210601 ?date('Ymd') :'20210601';
	$self->set('release_date', $now_date);
}
/*	if( $self->get('isp') == 10 || $self->get('isp') == 11 ) {
		if( $self->get('release_date') < 20190729 )
			$self->set('release_date', '20190627');
	}*/

// 変数セット
$SmartyObj->assign( 'preview',			$preview );
$SmartyObj->assign( 'charset',			$tmp_char );
$SmartyObj->assign( 'release_date',		$self->get('release_date') );

if( $self->get('isp') == 70 ) {
	$SmartyObj->assign( 'uri_path',			( $device_mode == "sp" && !$real_flag ?'/sp' :'' ) .'/zap/event/shimohanki_2021' );
	$SmartyObj->assign( 'img_path',			( $device_mode == "sp" && !$real_flag ?'/sp' :'' ) .'/zap/event/shimohanki_2021' );
	$SmartyObj->assign( 'special_title',	'あなたの毎日をHAPPYに！　人気占い師が総力鑑定◆2021年下半期特集' );
	$SmartyObj->assign( 'meta_keywords',	'星ひとみ,島田秀平,水晶玉子,シウマ,木村藤子,岡井浄幸,2021年下半期運勢,無料占い' );
	$SmartyObj->assign( 'meta_description',	'【無料で占えます】今、メディアで注目の人気占い師6人が2021年下半期のあなたの運勢を毎日鑑定！　2021年下半期をHAPPYに過ごすための開運アドバイスを贈ります。' );
	$SmartyObj->assign( 'sns_description',	'【無料で占えます】今、メディアで注目の人気占い師6人が2021年下半期のあなたの運勢を毎日鑑定！　2021年下半期をHAPPYに過ごすための開運アドバイスを贈ります。' );
	$SmartyObj->assign( 'special_period',	'2021年6月1日(火)～2021年12月24日(金)' );
	$SmartyObj->assign( 'space_id', 		$device_mode == "sp" ?'2080537301' :'2080537300' );
	$SmartyObj->assign( 'space_id_tag',		$device_mode == "sp" ?'<SPACE_ID_MEM_S>2080537301<SPACE_ID_MEM_E>' :'<SPACE_ID_EMG_S>2080537300<SPACE_ID_EMG_E>' );
	$SmartyObj->assign( 'link_tarot_1',		'https://charge-fortune.yahoo.co.jp/zap/shironeko_zap/input/nk3201a.html' );
	$SmartyObj->assign( 'link_tarot_2',		'https://charge-fortune.yahoo.co.jp/zap/shironeko_zap/input/nk9101a.html' );

} else if( $self->get('isp') == 10 ) {
	//$SmartyObj->assign( 'uri_path',			( $device_mode == "sp" ?'/sp' :'' ) .'/rakuten/event/shimohanki_2021' );
	$up = ( $device_mode == "sp" ?'/sp' :'' ) .'/rakuten/event/shimohanki_2021';
	if( $real_flag ) $up = 'https://lovefortune.zappallas.com/rakuten/event/shimohanki_2021';
	$SmartyObj->assign( 'uri_path',			$up );
	$SmartyObj->assign( 'img_path',			$up );
	$SmartyObj->assign( 'special_title',	'あなたの毎日をHAPPYに！　人気占い師が総力鑑定◆2021年下半期特集【楽天占い】' );
	$SmartyObj->assign( 'meta_keywords',	'星ひとみ,島田秀平,水晶玉子,シウマ,木村藤子,岡井浄幸,2021年下半期運勢,無料占い' );
	$SmartyObj->assign( 'meta_description',	'【楽天占い】【無料で占えます】今、メディアで注目の人気占い師6人が2021年下半期のあなたの運勢を毎日鑑定！　2021年下半期をHAPPYに過ごすための開運アドバイスを贈ります。' );
	$SmartyObj->assign( 'sns_description',	'【楽天占い】【無料で占えます】今、メディアで注目の人気占い師6人が2021年下半期のあなたの運勢を毎日鑑定！　2021年下半期をHAPPYに過ごすための開運アドバイスを贈ります。' );
	$SmartyObj->assign( 'special_period',	'2021年6月1日(火)～2021年12月31日(木)' );
	$SmartyObj->assign( 'link_tarot_1',		'https://lovefortune.zappallas.com/rakuten/shironeko_zap/input/nk3201a.html' );
	$SmartyObj->assign( 'link_tarot_2',		'https://lovefortune.zappallas.com/rakuten/shironeko_zap/input/nk9101a.html' );

} else if( $self->get('isp') == 40 ) {
	//$SmartyObj->assign( 'uri_path',			( $device_mode == "sp" ?'/sp' :'' ) .'/nifty/event/shimohanki_2021' );
	$SmartyObj->assign( 'uri_path',			'https://contents.nifty.com/member/service/g-way/shimohanki_2021' .( $device_mode == "sp" ?'/sp' :'' ) .'/nifty/event/shimohanki_2021' );
	$SmartyObj->assign( 'img_path',			'https://contents.nifty.com/member/service/g-way/shimohanki_2021' .( $device_mode == "sp" ?'/sp' :'' ) .'/nifty/event/shimohanki_2021' );
	$SmartyObj->assign( 'special_title',	'占い@nifty◆あなたの毎日をHAPPYに！　人気占い師が総力鑑定◆2021年下半期特集' );
	$SmartyObj->assign( 'meta_keywords',	'星ひとみ,島田秀平,水晶玉子,シウマ,木村藤子,岡井浄幸,2021年下半期運勢,無料占い' );
	$SmartyObj->assign( 'meta_description',	'占い@nifty◆【無料で占えます】今、メディアで注目の人気占い師6人が2021年下半期のあなたの運勢を毎日鑑定！　2021年下半期をHAPPYに過ごすための開運アドバイスを贈ります。' );
	$SmartyObj->assign( 'sns_description',	'占い@nifty◆【無料で占えます】今、メディアで注目の人気占い師6人が2021年下半期のあなたの運勢を毎日鑑定！　2021年下半期をHAPPYに過ごすための開運アドバイスを贈ります。' );
	$SmartyObj->assign( 'special_period',	'2021年6月1日(火)～2021年12月31日(木)' );
	$SmartyObj->assign( 'link_tarot_1',		'https://contents.nifty.com/member/service/g-way/shironeko_zap/nifty/shironeko_zap/input/nk3201a.html' );
	$SmartyObj->assign( 'link_tarot_2',		'https://contents.nifty.com/member/service/g-way/shironeko_zap/nifty/shironeko_zap/input/nk9101a.html' );

} else if( $self->get('isp') == 11 ) {
	//$SmartyObj->assign( 'uri_path',			( $device_mode == "sp" ?'/sp' :'' ) .'/cp_zap/event/shimohanki_2021' );
	$up = ( $device_mode == "sp" ?'/sp' :'' ) .'/cp_zap/event/shimohanki_2021';
	if( $real_flag ) $up = 'https://honkaku-uranai.jp/cp_zap/event/shimohanki_2021';
	$SmartyObj->assign( 'uri_path',			$up );
	$SmartyObj->assign( 'img_path',			$up );
	$SmartyObj->assign( 'special_title',	'あなたの毎日をHAPPYに！　人気占い師が総力鑑定◆2021年下半期特集' );
	$SmartyObj->assign( 'meta_keywords',	'星ひとみ,島田秀平,水晶玉子,シウマ,木村藤子,岡井浄幸,2021年下半期運勢,無料占い' );
	$SmartyObj->assign( 'meta_description',	'【無料で占えます】今、メディアで注目の人気占い師6人が2021年下半期のあなたの運勢を毎日鑑定！　2021年下半期をHAPPYに過ごすための開運アドバイスを贈ります。' );
	$SmartyObj->assign( 'sns_description',	'【無料で占えます】今、メディアで注目の人気占い師6人が2021年下半期のあなたの運勢を毎日鑑定！　2021年下半期をHAPPYに過ごすための開運アドバイスを贈ります。' );
	$SmartyObj->assign( 'special_period',	'2021年6月1日(火)～2021年12月31日(木)' );
	$SmartyObj->assign( 'link_tarot_1',		'https://honkaku-uranai.jp/cp_zap/shironeko_zap/input/nk3201a.html' );
	$SmartyObj->assign( 'link_tarot_2',		'https://honkaku-uranai.jp/cp_zap/shironeko_zap/input/nk9101a.html' );

}

//// 画像ぱす
// 'https://lovefortune.zappallas.com/rakuten/event/shimohanki_2021'
// 'https://honkaku-uranai.jp/cp_zap/event/shimohanki_2021'
//   ↓
// 'https://lw6nr4oyej.user-space.cdn.idcfcloud.net/event/shimohanki_2021'
// 'https://lw6nr4oyej.user-space.cdn.idcfcloud.net/event/shimohanki_2021'
/** CDN使う場合 **/

$cdn_flag = true;
if( $cdn_flag && ( $self->get('isp') == 10 || $self->get('isp') == 11 ) ) {
	$img_path = 'https://lw6nr4oyej.user-space.cdn.idcfcloud.net/event/shimohanki_2021';
	$SmartyObj->assign( 'img_path',			$img_path );
}

// テンプレートパス作成
$page = $self->get('t');
if( $device_mode == "sp" && ( $page == 'index' || $page == 'input' || $page == 'result' || $page == 'result_allfree' ) )
	$page .= '_sp';
else if( $device_mode != "sp" && ( $page == 'index_sp' || $page == 'input_sp' || $page == 'result_sp' || $page == 'result_allfree_sp' ) )
	$page = str_replace('_sp', '', $page);

$self->set( 'page', $page );


/**
 * 【index】
 */
if( strpos( $self->get('t'), 'index' ) !== false ) {
	// indexページフラグ
	$index_flag = strpos( $self->get('t'), 'index' ) !== false;
	$SmartyObj->assign( 'index_flag', $index_flag );
	
	if ( is_readable( $self->get('event') .'/index_data.php' ) ) {
		include( $self->get('event') .'/index_data.php' );
	}
}

/**
 * 【input / result】
 */
else if ( is_readable( $self->get('event') .'/data/' .$self->get('menu_id') .'.php' ) ) {
	// 入力値
	$user_keys	= array( 'name', 'sex', 'birth_year', 'birth_mon', 'birth_mday' );
	$self->init( $user_keys );

	// 名前対応
	if( $self->get('name_self') == '' ) {
		$self->set('name2_self', 'あなた' );
	} else {
		$ns = $self->get('name_self');
		$ns = str_replace( "&amp;",  "&", $ns );
		$self->set('name2_self', $ns .'さん' );
	}

	// 【メニュー情報設定】
	include( $self->get('event') .'/data/' .$self->get('menu_id') .'.php' );
	if( !$self->get('contents') && $menuData['contents'] )
		$self->set('contents', $menuData['contents']);
	if( $menuData['person'] == 1 )
		unset( $target[1] );
	
	// 月運とか用の日付
	$now = '';
	if ( array_key_exists( 'now', $_REQUEST ) ) $now = str_replace( "-", "", nvl($_REQUEST[ 'now' ]) );
	if( !$now || !is_numeric ( $now ) || strlen( $now ) != 8 ) $now = date("Ymd");
	if( $menuData['release_date'] ) $now = (intval( substr($menuData['release_date'],0,6) ) +1) .'01';
	$self->set( 'now', $now );
	$self->set( 'year_now', intval(substr($now, 0, 4)) );
	$self->set( 'month_now', intval(substr($now, 4, 2)) );
	$self->set( 'mday_now', intval(substr($now, 6, 2)) );
	// 現在日付
	$now2 = date('Ymd');
	$self->set( 'year', intval(substr($now2, 0, 4)) );
	$self->set( 'month', intval(substr($now2, 4, 2)) );
	$self->set( 'mday', intval(substr($now2, 6, 2)) );
	
	
	// パックフラグ
	$pack_flag = $menuData['contents'] == 'pack' || $self->get('contents') == 'pack';
	// 完全無料結果フラグ
	$allfree_flag = $menuData['contents'] == 'free' || $self->get('contents') == 'free';
	// 結果ページフラグ
	$result_flag = strpos( $self->get('t'), 'result' ) !== false;
	// 一部無料結果ページフラグ
	$free_flag = strpos( $self->get('t'), 'result_free' ) !== false;
	
	$SmartyObj->assign( 'pack_flag', $pack_flag );
	$SmartyObj->assign( 'free_flag', $free_flag );
	$SmartyObj->assign( 'result_flag', $result_flag );
	
	
	// メニュー情報をテンプレートにセット
	$min_title = array();
	foreach( $menuData as $key => $val ) {
		if( strpos( $key, 'min_title' ) !== false  ) {
			$arr_mt = explode( "_", $key );
			$min_title[ $arr_mt[0] ] = $val;
		} else if( $key == 'price' ) {
			if( $self->get('isp') == 10 || $self->get('isp') == 11 ) {
				$SmartyObj->assign( 'menu_' .$key, number_format( $val *1.1 ) .'円（税込）' );
			} else if( $self->get('isp') == 40 ) {
				$SmartyObj->assign( 'menu_' .$key, number_format( $val *1.1 ) );
				$SmartyObj->assign( 'menu_discount', number_format( $val *0.9 *1.1 ) );
				$SmartyObj->assign( 'menu_discount_flag', 1 );
			} else
				$SmartyObj->assign( 'menu_' .$key, $val );
		} else {
			if( $key == 'discount' && $self->get('isp') == 40 ) continue;
			
			$SmartyObj->assign( 'menu_' .$key, $val );
		}
	}
	$SmartyObj->assign( 'menu_min_title', $min_title );
	
	
	
	// ロジック情報
	if( $result_flag )
		require_once 'logic.php';
	
	// 【パックメニュー】
	if( $pack_flag ) {
		
		$packData = $menuData;
		$packInfo = array();
		$logic_cd = array();
		// 1:hoshihitomi_zap
		// 2:spshimada_zap
		// 3:suisho_zap
		// 4:shiuma2_zap
		// 5:fujiko_ccs
		// 6:okai_zap
		for( $j=1; $j <= 6; $j++ ) {
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
					} else if( $self->get('isp') == 40 ) {
						$packInfo[ $packData['child_contents_' .$j] ][ 'menu_' .$key ] = number_format( $val *1.1 );
						$packInfo[ $packData['child_contents_' .$j] ][ 'menu_discount' ] = number_format( $val *0.9 *1.1 );
						$packInfo[ $packData['child_contents_' .$j] ][ 'menu_discount_flag' ] = 1;
					} else
						$packInfo[ $packData['child_contents_' .$j] ][ 'menu_' .$key ] = $val;
				} else {
					if( $key == 'discount' && $self->get('isp') == 40 ) continue;
					
					$packInfo[ $packData['child_contents_' .$j] ][ 'menu_' .$key ] = $val;
				}
			}
			$packInfo[ $packData['child_contents_' .$j] ][ 'menu_min_title' ] = $min_title;
			
			// 結果ページ用
			if( $result_flag ) {
				// リコメンド情報。
				if ( is_readable( $self->get('event') .'/index_data.php' ) ) {
					include( $self->get('event') .'/index_data.php' );
				}
				
				// 入力チェック
				checkInputParam();
				
				$logic_cd[$j] = get_logic_cd( $packData['child_contents_' .$j] );
				
				if( $logic_cd && count($logic_cd) ) {
					$result_menu = array();
					$result_text = $free_flag ?$free :$text;
					for( $i = 0; $i < count($result_text); $i++ ) {
						$result_menu[ $i +1 ] = replace_name2( $result_text[$i][ $logic_cd[$j][ $logic ] ] );
					}
					$packInfo[ $packData['child_contents_' .$j] ][ 'result_menu' ] = $result_menu;
				}
			}
			$SmartyObj->assign( $packData['child_contents_' .$j], $packInfo[ $packData['child_contents_' .$j] ] );
		}
		
		// 星ひとみグラフ
		if( $result_flag ) {
			$gps = get_pack_score( $logic_cd[1]['t1'] );
			
			for( $i = 6; $i <= 12; $i++ ) {
				$SmartyObj->assign( 'point' .$i,  $gps[0][$i] );
			}
			for( $i = 1; $i <= 3; $i++) {
				$SmartyObj->assign( 'date' .$i, 		 $gps[4][$i -1] );
				$SmartyObj->assign( 'good_month' .$i,	 $gps[1][$i -1] );
				$SmartyObj->assign( 'good_month_pt' .$i, $gps[0][ $gps[1][$i -1] ] );
			}
			$SmartyObj->assign( 'date_position', $gps[2] );
			$SmartyObj->assign( 'point_text', replace_name2( $gps[3] ) );
			
			$gl = get_happy( $logic_cd[1]['b1'] );
			$SmartyObj->assign( 'happy_no', 		$gl[0] );
			$SmartyObj->assign( 'happy_message',	replace_name2( $gl[1] ) );
			$SmartyObj->assign( 'happy_action',		$gl[2] );
			$SmartyObj->assign( 'happy_color',		$gl[3] );
			$SmartyObj->assign( 'happy_line',		$gl[4] );
		}
		
		// ヘッダーステータス
		if( !$free_flag )
			$yahoo_charge_status = "0";
	}
	
	// 【完全無料メニュー】結果ページ
	else if( $allfree_flag ) {
		// リコメンド情報。
		if ( is_readable( $self->get('event') .'/index_data.php' ) ) {
			include( $self->get('event') .'/index_data.php' );
		}
		
		// 入力チェック
		checkInputParam();
		// ロジック結果を取得
		$arrLogicCd = array();
		$arrLogicCd[1] = get_logic_cd( 'hoshihitomi_zap' );
		$arrLogicCd[2] = get_logic_cd( 'spshimada_zap' );
		$arrLogicCd[3] = get_logic_cd( 'suisho_zap' );
		$arrLogicCd[4] = get_logic_cd( 'shiuma2_zap' );
		$arrLogicCd[5] = get_logic_cd( 'fujiko_ccs' );
		$arrLogicCd[6] = get_logic_cd( 'okai_zap' );
		
		// スコア採点
		// 採点
		$score = get_free_score( $arrLogicCd );
		
		// 各占い師
		$result_summary_0 = array();
		$result_summary_1 = array();
		$result_0 = array();
		$result_1 = array();
		$result_menu = array();
		
		for( $i = 1; $i <= 6; $i++){
			$result_summary_0[$i]	= replace_name2( $text[$i][1][ $arrLogicCd[$i][ $logic2[$i] ] ] );
			$result_summary_1[$i]	= replace_name2( $text[$i][2][ $arrLogicCd[$i][ $logic2[$i] ] ] );
			$result_0[$i]			= replace_name2( $text[$i][3][ $arrLogicCd[$i][ $logic2[$i] ] ] );
			$result_1[$i]			= replace_name2( $text[$i][4][ $arrLogicCd[$i][ $logic2[$i] ] ] );
			$result_menu[$i]		= replace_name2( $text[$i][5][ $arrLogicCd[$i][ $logic1[$i] ] ] );
		}
		$result_summary = $self->get('month')%2 == 0 ?$result_summary_0 :$result_summary_1;
		$result_gb      = $self->get('month')%2 == 0 ?$result_0         :$result_1;

		$SmartyObj->assign( 'result_good_id', $score[0] );
		$SmartyObj->assign( 'result_bad_id',  $score[1] );
		$SmartyObj->assign( 'result_good',    $result_gb[ $score[0] ] );
		$SmartyObj->assign( 'result_bad',     $result_gb[ $score[1] ] );
		$SmartyObj->assign( 'result_summary', $result_summary );
		$SmartyObj->assign( 'result_menu',    $result_menu );

	}
	
	// 【通常メニュー】結果ページ
	else if( $result_flag ) {
		// リコメンド情報。
		if ( is_readable( $self->get('event') .'/index_data.php' ) ) {
			include( $self->get('event') .'/index_data.php' );
		}
		
		// 入力チェック
		checkInputParam();
		// ロジック結果を取得
		$logic_cd = get_logic_cd( $menuData['contents'] );
		
		//  小メニュー 結果テキストを取得／HTML置換
		if( $logic_cd && count($logic_cd) ) {
			$result_menu = array();
			$result_text = $free_flag ?$free :$text;
			for( $i = 0; $i < count($result_text); $i++ ) {
				$result_menu[ $i +1 ] = replace_name2( $result_text[$i][ $logic_cd[ $logic ] ] );
			}
			
			$SmartyObj->assign( 'result_menu', $result_menu );
		}
		// ヘッダーステータス
		if( !$free_flag )
			$yahoo_charge_status = "0";
	}
	
	
	// Next枠
	if( ! $pack_flag && !$free_flag && ( $allfree_flag || $result_flag ) ) {
	
			if( isset( $next ) ) {
				
				$next_list = array();
				
				foreach( $next as $next_id ) {
					
					$next_data =  new menuInfo( $next_id, 'next' );
					$next_menuData = $next_data->get('menuData');
					// Next メニュー情報
					$data = array( 'menu_id' => $next_id );
					$min_title = array();
					foreach( $next_menuData as $key => $val ) {
						if( strpos( $key, 'min_title' ) !== false  ) {
							$arr_mt = explode( "_", $key );
							$min_title[ $arr_mt[0] ] = $val;
						} else if( $key == 'price' ) {
							if( $self->get('isp') == 10 || $self->get('isp') == 11 ) {
								$data[$key] = number_format( $val *1.1 ) .'円（税込）';
							} else if( $self->get('isp') == 40 ) {
								$data[$key] = number_format( $val *1.1 );
								$data['discount'] = number_format( $val *0.9 *1.1 );
								$data['discount_flag'] = 1;
							} else
								$data[$key] = $val;
						} else if( $self->get('isp') == 11 && $key == 'menu_id' ) {
							$data[$key] = getMenuId( $val );
						} else {
							if( $key == 'discount' && $self->get('isp') == 40 ) continue;
							$data[$key] = $val;
						}
					}
					$data['menu_min_title'] = $min_title;
					// Next 結果テキスト
					$next_free = $next_data->get('free');
					$next_logic_cd = 0;
					if( $next_menuData['contents'] != $menuData['contents'] ) {
						$next_logic_cd = get_logic_cd( $next_menuData['contents'] );
					}
					$result_menu2 = array();
					$result_menu2[1] =  replace_name2( $next_free[0][ $next_logic_cd[ $next_data->get('logic') ] ] ) ;
					$data['result_menu'] = $result_menu2;
					
					$next_list[] = $data;
					
				}
				$SmartyObj->assign( 'next_list', $next_list );
				
			}
	}
}
?>
