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
	$now_date = date('Ymd') >= 20191203 ?date('Ymd') :'20191203';
	$self->set('release_date', $now_date);
}


// 変数セット
$SmartyObj->assign( 'preview',			$preview );
$SmartyObj->assign( 'charset',			$tmp_char );
$SmartyObj->assign( 'release_date',		$self->get('release_date') );

if( $self->get('isp') == 70 ) {
	$SmartyObj->assign( 'uri_path',			( $device_mode == "sp" && !$real_flag ?'/sp' :'' ) .'/zap/event/unsei_2020' );
	$SmartyObj->assign( 'img_path',			( $device_mode == "sp" && !$real_flag ?'/sp' :'' ) .'/zap/event/unsei_2020' );
	$SmartyObj->assign( 'special_title',	'2020年運勢特集◇6人の人気占い師があなたの運勢も恋も1年全部占う！' );
	$SmartyObj->assign( 'meta_keywords',	'島田秀平,水晶玉子,木村藤子,イヴルルド遙華,波羅門,上地一美,2020年運勢,無料占い' );
	$SmartyObj->assign( 'meta_description',	'【無料で占えます】あなたの2020年の運勢と恋を1年分まるごと占います！　島田秀平、水晶玉子、木村藤子、イヴルルド遙華、波羅門、上地一美といった各種メディアで話題の人気占い師6人が2020年の運勢を徹底鑑定いたします' );
	$SmartyObj->assign( 'sns_description',	'【無料で占えます】あなたの2020年の運勢と恋を1年分まるごと占います！　島田秀平、水晶玉子、木村藤子、イヴルルド遙華、波羅門、上地一美といった各種メディアで話題の人気占い師6人が2020年の運勢を徹底鑑定いたします' );
	$SmartyObj->assign( 'special_period',	'2019年12月3日(火)～2020年12月24日(木)' );
	$SmartyObj->assign( 'space_id', 	$device_mode == "sp" ?'2080523303' :'2080523302' );
	$SmartyObj->assign( 'space_id_tag',	$device_mode == "sp" ?'<SPACE_ID_MEM_S>2080523303<SPACE_ID_MEM_E>' :'<SPACE_ID_EMG_S>2080523302<SPACE_ID_EMG_E>' );

} else if( $self->get('isp') == 10 ) {
	$up = ( $device_mode == "sp" ?'/sp' :'' ) .'/rakuten/event/unsei_2020';
	if( $real_flag ) $up = 'https://lovefortune.zappallas.com/rakuten/event/unsei_2020';
	$SmartyObj->assign( 'uri_path',			$up );
	$SmartyObj->assign( 'img_path',			$up );
	$SmartyObj->assign( 'special_title',	'2020年運勢特集◇6人の人気占い師があなたの運勢も恋も1年全部占う！【楽天占い】' );
	$SmartyObj->assign( 'meta_keywords',	'島田秀平,水晶玉子,木村藤子,イヴルルド遙華,波羅門,上地一美,2020年運勢,無料占い' );
	$SmartyObj->assign( 'meta_description',	'【楽天占い】【無料で占えます】あなたの2020年の運勢と恋を1年分まるごと占います！　島田秀平、水晶玉子、木村藤子、イヴルルド遙華、波羅門、上地一美といった各種メディアで話題の人気占い師6人が2020年の運勢を徹底鑑定いたします' );
	$SmartyObj->assign( 'sns_description',	'【楽天占い】【無料で占えます】あなたの2020年の運勢と恋を1年分まるごと占います！　島田秀平、水晶玉子、木村藤子、イヴルルド遙華、波羅門、上地一美といった各種メディアで話題の人気占い師6人が2020年の運勢を徹底鑑定いたします' );
	$SmartyObj->assign( 'special_period',	'2019年12月17日(火)～2020年12月24日(木)' );

} else if( $self->get('isp') == 40 ) {
	$SmartyObj->assign( 'uri_path',			'https://contents.nifty.com/member/service/g-way/unsei_2020' .( $device_mode == "sp" ?'/sp' :'' ) .'/nifty/event/unsei_2020' );
	$SmartyObj->assign( 'img_path',			'https://contents.nifty.com/member/service/g-way/unsei_2020' .( $device_mode == "sp" ?'/sp' :'' ) .'/nifty/event/unsei_2020' );
	$SmartyObj->assign( 'special_title',	'占い@nifty◆2020年運勢特集◇6人の人気占い師があなたの運勢も恋も1年全部占う！' );
	$SmartyObj->assign( 'meta_keywords',	'島田秀平,水晶玉子,木村藤子,イヴルルド遙華,波羅門,上地一美,2020年運勢,無料占い' );
	$SmartyObj->assign( 'meta_description',	'占い@nifty◆【無料で占えます】あなたの2020年の運勢と恋を1年分まるごと占います！　島田秀平、水晶玉子、木村藤子、イヴルルド遙華、波羅門、上地一美といった各種メディアで話題の人気占い師6人が2020年の運勢を徹底鑑定いたします' );
	$SmartyObj->assign( 'sns_description',	'占い@nifty◆【無料で占えます】あなたの2020年の運勢と恋を1年分まるごと占います！　島田秀平、水晶玉子、木村藤子、イヴルルド遙華、波羅門、上地一美といった各種メディアで話題の人気占い師6人が2020年の運勢を徹底鑑定いたします' );
	$SmartyObj->assign( 'special_period',	'2019年12月18日(水)～2020年12月24日(木)' );

} else if( $self->get('isp') == 11 ) {
	$up = ( $device_mode == "sp" ?'/sp' :'' ) .'/cp_zap/event/unsei_2020';
	if( $real_flag ) $up = 'https://honkaku-uranai.jp/cp_zap/event/unsei_2020';
	$SmartyObj->assign( 'uri_path',			$up );
	$SmartyObj->assign( 'img_path',			$up );
	$SmartyObj->assign( 'special_title',	'本格占い館◆2020年運勢特集◇6人の人気占い師があなたの運勢も恋も1年全部占う！' );
	$SmartyObj->assign( 'meta_keywords',	'島田秀平,水晶玉子,木村藤子,イヴルルド遙華,波羅門,上地一美,2020年運勢,無料占い' );
	$SmartyObj->assign( 'meta_description',	'本格占い館◆【無料で占えます】あなたの2020年の運勢と恋を1年分まるごと占います！　島田秀平、水晶玉子、木村藤子、イヴルルド遙華、波羅門、上地一美といった各種メディアで話題の人気占い師6人が2020年の運勢を徹底鑑定いたします' );
	$SmartyObj->assign( 'sns_description',	'本格占い館◆【無料で占えます】あなたの2020年の運勢と恋を1年分まるごと占います！　島田秀平、水晶玉子、木村藤子、イヴルルド遙華、波羅門、上地一美といった各種メディアで話題の人気占い師6人が2020年の運勢を徹底鑑定いたします' );
	$SmartyObj->assign( 'special_period',	'2019年12月17日(火)～2020年12月24日(木)' );

}

//// 画像ぱす
/** CDN使う場合
$img_path = $cdn_flag ? 'https://ch-fortune.c.yimg.jp/zap/event/unsei_2020'
					  : ( ( $device_mode == "sp" && !$real_flag ?'/sp' :'' ) .'/zap/event/unsei_2020' );
$SmartyObj->assign( 'img_path',			$img_path );
**/


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
	$user_keys	= array( 'name', 'name_first', 'name_last', 'kana_first', 'kana_last', 'sex', 'birth_year', 'birth_mon', 'birth_mday' );
	$self->init( $user_keys );

	// 名前対応
	if( $self->get('name_self') == '' && ( $self->get('name_last_self') != '' || $self->get('name_first_self') != '' ) ) {
		$self->set('name_self', $self->get('name_last_self') .$self->get('name_first_self') );
	}
	if( $self->get('name_other') == '' && ( $self->get('name_last_other') != '' || $self->get('name_first_other') != '' ) ) {
		$self->set('name_other', $self->get('name_last_other') .$self->get('name_first_other') );
	}

	// 【メニュー情報設定】
	include( $self->get('event') .'/data/' .$self->get('menu_id') .'.php' );
	if( !$self->get('contents') && $menuData['contents'] )
		$self->set('contents', $menuData['contents']);
	if( $menuData['person'] == 1 )
		unset( $target[1] );
	$now = str_replace( "-", "", nvl($_REQUEST[ 'now' ]) );
	if( !$now || !is_numeric ( $now ) || strlen( $now ) != 8 ) $now = date("Ymd");
	if( $menuData['release_date'] ) $now = (intval( substr($menuData['release_date'],0,6) ) +1) .'01';
	$self->set( 'now', $now );
	$self->set( 'year_now', substr($now, 0, 4) );
	$self->set( 'month_now', substr($now, 4, 2) );
	$self->set( 'mday_now', substr($now, 6, 2) );
	
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
	$tmp_type = array(1,2,3,4,5,6);
	shuffle($tmp_type);
	foreach( $menuData as $key => $val ) {
		if( strpos( $key, 'min_title' ) !== false  ) {
			$arr_mt = explode( "_", $key );
			$type[ $arr_mt[0] ] = $tmp_type[ $arr_mt[0] -1 ];
			$min_title[ $arr_mt[0] ] = $allfree_flag ?$val[ $type[ $arr_mt[0] ] ] :$val;
		} else if( $key == 'price' ) {
			if( $self->get('isp') == 10 || $self->get('isp') == 11 ) {
				$SmartyObj->assign( 'menu_' .$key, number_format( $val ) .'円（税別）' );
			} else if( $self->get('isp') == 40 ) {
				$SmartyObj->assign( 'menu_' .$key, number_format( $val ) );
				$SmartyObj->assign( 'menu_discount', number_format( $val *0.9 ) );
				$SmartyObj->assign( 'menu_discount_flag', 1 );
			} else
				$SmartyObj->assign( 'menu_' .$key, $val );
		} else {
			if( $key == 'discount' && $self->get('isp') == 40 ) continue;
			
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
		// 1:spshimada_zap
		// 2:suisho_zap
		// 3:zerogaku_zap
		// 4:complete_zap
		// 5:hosoki_ccs
		// 6:fujiko_ccs
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
						$packInfo[ $packData['child_contents_' .$j] ][ 'menu_' .$key ] = number_format( $val ) .'円（税別）';
					} else if( $self->get('isp') == 40 ) {
						$packInfo[ $packData['child_contents_' .$j] ][ 'menu_' .$key ] = number_format( $val );
						$packInfo[ $packData['child_contents_' .$j] ][ 'menu_discount' ] = number_format( $val *0.9 );
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
				// 入力チェック
				checkInputParam();
				
				$logic_cd[$j] = get_logic_cd( $packData['child_contents_' .$j] );
				
				$base = get_base_info( $packData['child_contents_' .$j], $logic_cd[$j], $free_flag );
				foreach( $target as $key => $val ) {
					$packInfo[ $packData['child_contents_' .$j] ][ 'base_id_' .$val ] = $base['base_id_' .$val];
					$packInfo[ $packData['child_contents_' .$j] ][ 'base_alt_' .$val ] = $base['base_alt_' .$val];
					$packInfo[ $packData['child_contents_' .$j] ][ 'base_text_' .$val ] = $base['base_text_' .$val];
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
		// 月運グラフ
		if( $result_flag ) {
			$retG = setGraph();
			$monG = array( 1,2,3,4,5,  6,7,8,9,10,11,12 );
			$graph = array( array(0,0,0,0,0,   0,0,0,0,0,0,0) );
				$graph[1] = $retG[0][1][$menuData['person']][$logic_cd[1]['d']];
				$graph[2] = $retG[0][2][$menuData['person']][$logic_cd[2]['a1']];
				$graph[3] = $retG[0][3][$menuData['person']][$logic_cd[3]['a1']];
				$graph[4] = $retG[0][4][$menuData['person']][$logic_cd[4]['a1']];
				$graph[5] = $retG[0][5][$menuData['person']][$logic_cd[5]['a1']];
				$graph[6] = $retG[0][6][$menuData['person']][$logic_cd[6]['a1']];
			
			for( $i = 0; $i <= 11; $i++ ) {
				for( $j = 1; $j <= 6; $j++ ) {
					$graph[0][$i] += $graph[$j][$i];
				}
			}
			$max = array( 0, 0 );
			$min = array( 0, 60 );
			for( $i = 0; $i <= 11; $i++ ) {
				if( $max[1] < $graph[0][$i] )
					$max = array( $i, $graph[0][$i] );
				if( $min[1] > $graph[0][$i] )
					$min = array( $i, $graph[0][$i] );
			}
			
			$SmartyObj->assign( 'graph', $graph );
			$SmartyObj->assign( 'graph_max_num', $monG[$max[0]] );
			$SmartyObj->assign( 'graph_min_num', $monG[$min[0]] );
			$SmartyObj->assign( 'graph_max_txt', replace_name( $retG[1][ $menuData['person'] ][0][$max[0]] ) );
			$SmartyObj->assign( 'graph_min_txt', replace_name( $retG[1][ $menuData['person'] ][1][$min[0]] ) );
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
		$logic_cd1 = get_logic_cd( 'spshimada_zap' );
		$logic_cd2 = get_logic_cd( 'suisho_zap' );
		$logic_cd3 = get_logic_cd( 'fujiko_ccs' );
		$logic_cd4 = get_logic_cd( 'evelourdes_zap' );
		$logic_cd5 = get_logic_cd( 'baramon2_zap' );
		$logic_cd6 = get_logic_cd( 'kiseki_zap' );
		// 小メニューとか
		$result_menu = array();
		if( $menuData['person'] == 1 ) {
			$result_menu[ 1 ] = replace_name( $text[0][ $type[1] ][ $logic_cd1[ $logic[0] ] ] );
			$result_menu[ 2 ] = replace_name( $text[1][ $type[2] ][ $logic_cd2[ $logic[1] ] ] );
			$result_menu[ 3 ] = replace_name( $text[2][ $type[3] ][ $logic_cd3[ $logic[2] ] ] );
			$result_menu[ 4 ] = replace_name( $text[3][ $type[4] ][ $logic_cd4[ $logic[3] ] ] );
			$result_menu[ 5 ] = replace_name( $text[4][ $type[5] ][ $logic_cd5[ $logic[4] ] ] );
			$result_menu[ 6 ] = replace_name( $text[5][ $type[6] ][ $logic_cd6[ $logic[5] ] ] );
		} else {
			$result_menu[ 1 ] = replace_name( $text[0][ $logic_cd1[ $logic[0] ] ] );
			$result_menu[ 2 ] = replace_name( $text[1][ $logic_cd2[ $logic[1] ] ] );
			$result_menu[ 3 ] = replace_name( $text[2][ $logic_cd3[ $logic[2] ] ] );
			$result_menu[ 4 ] = replace_name( $text[3][ $logic_cd4[ $logic[3] ] ] );
			$result_menu[ 5 ] = replace_name( $text[4][ $logic_cd5[ $logic[4] ] ] );
			$result_menu[ 6 ] = replace_name( $text[5][ $logic_cd6[ $logic[5] ] ] );
		}
		
		$SmartyObj->assign( 'result_menu', $result_menu );
		
		// 採点
		$score = get_free_score( array( $logic_cd1, $logic_cd2, $logic_cd3, $logic_cd4, $logic_cd5, $logic_cd6 ) );

	}
	
	// 【通常メニュー】結果ページ
	else if( $result_flag ) {
		// 入力チェック
		checkInputParam();
		// ロジック結果を取得
		$logic_cd = get_logic_cd( $menuData['contents'] );
		
		// 基本性格
		$base = get_base_info( $menuData['contents'], $logic_cd, $free_flag );
		foreach( $target as $key => $val ) {
			$SmartyObj->assign( 'base_id_' .$val, $base['base_id_' .$val] );
			$SmartyObj->assign( 'base_alt_' .$val, $base['base_alt_' .$val] );
			$SmartyObj->assign( 'base_text_' .$val, $base['base_text_' .$val] );
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
							$data[$key] = number_format( $val ) .'円（税別）';
						} else if( $self->get('isp') == 40 ) {
							$data[$key] = number_format( $val );
							$data['discount'] = number_format( $val *0.9 );
							$data['discount_flag'] = 1;
						} else
							$data[$key] = $val;
					} else {
						if( $key == 'discount' && $self->get('isp') == 40 ) continue;
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
				
			}
			$SmartyObj->assign( 'next_list', $next_list );
			
		}
	}
}
?>
