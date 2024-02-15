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
	$now_date = date('Ymd') >= 20200616 ?date('Ymd') :'20200616';
	$self->set('release_date', $now_date);
}
if( $self->get('isp') == 10 || $self->get('isp') == 11 ) {
	if( $self->get('release_date') < 20190729 )
		$self->set('release_date', '20190627');
}

// 変数セット
$SmartyObj->assign( 'preview',			$preview );
$SmartyObj->assign( 'charset',			$tmp_char );
$SmartyObj->assign( 'release_date',		$self->get('release_date') );

if( $self->get('isp') == 70 ) {
	$SmartyObj->assign( 'uri_path',			( $device_mode == "sp" && !$real_flag ?'/sp' :'' ) .'/zap/event/shimohanki_2020' );
	$SmartyObj->assign( 'img_path',			( $device_mode == "sp" && !$real_flag ?'/sp' :'' ) .'/zap/event/shimohanki_2020' );
	$SmartyObj->assign( 'special_title',	'あなただけの年表付き◆話題の人気鑑定士が占う2020年下半期運勢特集' );
	$SmartyObj->assign( 'meta_keywords',	'島田秀平,水晶玉子,真木あかり,上地一美,木村藤子,濱口善幸,2020年下半期運勢,無料占い' );
	$SmartyObj->assign( 'meta_description',	'【無料で占えます】2020年下半期、あなたの運勢も恋も年表スタイルで全部わかる！　島田秀平、水晶玉子、木村藤子、上地一美、真木あかりなどの人気鑑定士が集結！　さらに、今SNSで話題沸騰の濱口善幸がタロットであなたを無料鑑定します！' );
	$SmartyObj->assign( 'sns_description',	'【無料で占えます】2020年下半期、あなたの運勢も恋も年表スタイルで全部わかる！　島田秀平、水晶玉子、木村藤子、上地一美、真木あかりなどの人気鑑定士が集結！　さらに、今SNSで話題沸騰の濱口善幸がタロットであなたを無料鑑定します！' );
	$SmartyObj->assign( 'special_period',	'2020年6月16日(火)～2020年12月24日(木)' );
	$SmartyObj->assign( 'space_id', 		$device_mode == "sp" ?'2080530657' :'2080530656' );
	$SmartyObj->assign( 'space_id_tag',		$device_mode == "sp" ?'<SPACE_ID_MEM_S>2080530657<SPACE_ID_MEM_E>' :'<SPACE_ID_EMG_S>2080530656<SPACE_ID_EMG_E>' );
	$SmartyObj->assign( 'link_tarot_1',		'https://charge-fortune.yahoo.co.jp/zap/shironeko_zap/input/nk3201a.html' );
	$SmartyObj->assign( 'link_tarot_2',		'https://charge-fortune.yahoo.co.jp/zap/shironeko_zap/input/nk9101a.html' );

} else if( $self->get('isp') == 10 ) {
	//$SmartyObj->assign( 'uri_path',			( $device_mode == "sp" ?'/sp' :'' ) .'/rakuten/event/shimohanki_2020' );
	$up = ( $device_mode == "sp" ?'/sp' :'' ) .'/rakuten/event/shimohanki_2020';
	if( $real_flag ) $up = 'https://lovefortune.zappallas.com/rakuten/event/shimohanki_2020';
	$SmartyObj->assign( 'uri_path',			$up );
	$SmartyObj->assign( 'img_path',			$up );
	$SmartyObj->assign( 'special_title',	'あなただけの年表付き◆話題の人気鑑定士が占う2020年下半期運勢特集【楽天占い】' );
	$SmartyObj->assign( 'meta_keywords',	'島田秀平,水晶玉子,真木あかり,上地一美,木村藤子,濱口善幸,2020年下半期運勢,無料占い' );
	$SmartyObj->assign( 'meta_description',	'【楽天占い】【無料で占えます】2020年下半期、あなたの運勢も恋も年表スタイルで全部わかる！　島田秀平、水晶玉子、木村藤子、上地一美、真木あかりなどの人気鑑定士が集結！　さらに、今SNSで話題沸騰の濱口善幸がタロットであなたを無料鑑定します！' );
	$SmartyObj->assign( 'sns_description',	'【楽天占い】【無料で占えます】2020年下半期、あなたの運勢も恋も年表スタイルで全部わかる！　島田秀平、水晶玉子、木村藤子、上地一美、真木あかりなどの人気鑑定士が集結！　さらに、今SNSで話題沸騰の濱口善幸がタロットであなたを無料鑑定します！' );
	$SmartyObj->assign( 'special_period',	'2020年6月2日(火)～2020年12月31日(木)' );
	$SmartyObj->assign( 'link_tarot_1',		'https://lovefortune.zappallas.com/rakuten/shironeko_zap/input/nk3201a.html' );
	$SmartyObj->assign( 'link_tarot_2',		'https://lovefortune.zappallas.com/rakuten/shironeko_zap/input/nk9101a.html' );

} else if( $self->get('isp') == 40 ) {
	//$SmartyObj->assign( 'uri_path',			( $device_mode == "sp" ?'/sp' :'' ) .'/nifty/event/shimohanki_2020' );
	$SmartyObj->assign( 'uri_path',			'https://contents.nifty.com/member/service/g-way/shimohanki_2020' .( $device_mode == "sp" ?'/sp' :'' ) .'/nifty/event/shimohanki_2020' );
	$SmartyObj->assign( 'img_path',			'https://contents.nifty.com/member/service/g-way/shimohanki_2020' .( $device_mode == "sp" ?'/sp' :'' ) .'/nifty/event/shimohanki_2020' );
	$SmartyObj->assign( 'special_title',	'占い@nifty◆あなただけの年表付き◆話題の人気鑑定士が占う2020年下半期運勢特集' );
	$SmartyObj->assign( 'meta_keywords',	'島田秀平,水晶玉子,真木あかり,上地一美,木村藤子,濱口善幸,2020年下半期運勢,無料占い' );
	$SmartyObj->assign( 'meta_description',	'占い@nifty◆【無料で占えます】2020年下半期、あなたの運勢も恋も年表スタイルで全部わかる！　島田秀平、水晶玉子、木村藤子、上地一美、真木あかりなどの人気鑑定士が集結！　さらに、今SNSで話題沸騰の濱口善幸がタロットであなたを無料鑑定します！' );
	$SmartyObj->assign( 'sns_description',	'占い@nifty◆【無料で占えます】2020年下半期、あなたの運勢も恋も年表スタイルで全部わかる！　島田秀平、水晶玉子、木村藤子、上地一美、真木あかりなどの人気鑑定士が集結！　さらに、今SNSで話題沸騰の濱口善幸がタロットであなたを無料鑑定します！' );
	$SmartyObj->assign( 'special_period',	'2020年6月2日(火)～2020年12月31日(木)' );
	$SmartyObj->assign( 'link_tarot_1',		'https://contents.nifty.com/member/service/g-way/shironeko_zap/nifty/shironeko_zap/input/nk3201a.html' );
	$SmartyObj->assign( 'link_tarot_2',		'https://contents.nifty.com/member/service/g-way/shironeko_zap/nifty/shironeko_zap/input/nk9101a.html' );

} else if( $self->get('isp') == 11 ) {
	//$SmartyObj->assign( 'uri_path',			( $device_mode == "sp" ?'/sp' :'' ) .'/cp_zap/event/shimohanki_2020' );
	$up = ( $device_mode == "sp" ?'/sp' :'' ) .'/cp_zap/event/shimohanki_2020';
	if( $real_flag ) $up = 'https://honkaku-uranai.jp/cp_zap/event/shimohanki_2020';
	$SmartyObj->assign( 'uri_path',			$up );
	$SmartyObj->assign( 'img_path',			$up );
	$SmartyObj->assign( 'special_title',	'あなただけの年表付き◆話題の人気鑑定士が占う2020年下半期運勢特集 | -cocoloni-本格占い館' );
	$SmartyObj->assign( 'meta_keywords',	'島田秀平,水晶玉子,真木あかり,上地一美,木村藤子,濱口善幸,2020年下半期運勢,無料占い' );
	$SmartyObj->assign( 'meta_description',	'【無料で占えます】2020年下半期、あなたの運勢も恋も年表スタイルで全部わかる！　島田秀平、水晶玉子、木村藤子、上地一美、真木あかりなどの人気鑑定士が集結！　さらに、今SNSで話題沸騰の濱口善幸がタロットであなたを無料鑑定します！' );
	$SmartyObj->assign( 'sns_description',	'【無料で占えます】2020年下半期、あなたの運勢も恋も年表スタイルで全部わかる！　島田秀平、水晶玉子、木村藤子、上地一美、真木あかりなどの人気鑑定士が集結！　さらに、今SNSで話題沸騰の濱口善幸がタロットであなたを無料鑑定します！' );
	$SmartyObj->assign( 'special_period',	'2020年6月2日(火)～2020年12月31日(木)' );
	$SmartyObj->assign( 'link_tarot_1',		'https://honkaku-uranai.jp/cp_zap/shironeko_zap/input/nk3201a.html' );
	$SmartyObj->assign( 'link_tarot_2',		'https://honkaku-uranai.jp/cp_zap/shironeko_zap/input/nk9101a.html' );

}

//// 画像ぱす
// 'https://lovefortune.zappallas.com/rakuten/event/shimohanki_2020'
// 'https://honkaku-uranai.jp/cp_zap/event/shimohanki_2020'
//   ↓
// 'https://lw6nr4oyej.user-space.cdn.idcfcloud.net/event/shimohanki_2020'
// 'https://lw6nr4oyej.user-space.cdn.idcfcloud.net/event/shimohanki_2020'
/** CDN使う場合 **/

if( $cdn_flag && $self->get('isp') == 10 && $self->get('isp') == 11 ) {
	$img_path = 'https://lw6nr4oyej.user-space.cdn.idcfcloud.net/event/shimohanki_2020';
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
	$user_keys	= array( 'name_last', 'name_first', 'kana_last', 'kana_first', 'sex', 'birth_year', 'birth_mon', 'birth_mday' );
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
	//$now = str_replace( "-", "", nvl($_REQUEST[ 'now' ]) );
	$now = '';
	if ( array_key_exists( 'now', $_REQUEST ) ) $now = str_replace( "-", "", nvl($_REQUEST[ 'now' ]) );
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
		// 3:fujiko_ccs
		// 4:akari_zap
		// 5:kiseki_zap
		for( $j=1; $j <= 5; $j++ ) {
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
				// リコメンド情報。
				if ( is_readable( $self->get('event') .'/index_data.php' ) ) {
					include( $self->get('event') .'/index_data.php' );
				}
				
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
		// 年表
		if( $result_flag ) {
			//get_pack_score( $logic_cd );
			
			$gps = get_pack_score(  );
			
			// 占断結果
			$arrL = array(
				'spshimada_zap' => $logic_cd[1][ 'd' ],
				'suisho_zap'    => $logic_cd[2][ 'a1' ],
				'fujiko_ccs'    => $logic_cd[3][ 'a1' ],
				'akari_zap'     => $logic_cd[4][ 'a1' ],
				'kiseki_zap'    => $logic_cd[5][ 'a1' ]
			);
			if( $menuData['person'] == '2' ) {
				$arrL = array(
					'spshimada_zap' => $logic_cd[1][ 'f' ],
					'suisho_zap'    => $logic_cd[2][ 'a2' ],
					'fujiko_ccs'    => $logic_cd[3][ '2A' ],
					'akari_zap'     => $logic_cd[4][ 'a2' ],
					'kiseki_zap'    => $logic_cd[5][ 'a2' ]
				);
			}
			
			$tmp = date('Ymd');
			if( $self->get('debug_date') ) $tmp = $self->get('debug_date');
			$m = (int) ( substr($tmp, 4, 2) );
			if( $m < 6 ) $m = 6;
			$SmartyObj->assign( 'month_free_now', $m );
			
			$pack_table = array();
			for( $i = 0; $i <= 6; $i++ ) {
				$data = array();
				$l = $gps[0][ $menuData['person'] ][ $i ][ 0 ];
				$SmartyObj->assign( 'pack_table_summary_' .($i +1), replace_name( $gps[0][ $menuData['person'] ][ $i ][ $arrL[ $l ] ] ) );
				//$SmartyObj->assign( 'pack_table_text_' .($i +1),    replace_name( $text2[ $menuData['person'] ][ $i ][ $arrL[ $l ] ] ) );
				
				$data['month']   = ( $i +6 );
				$data['summary'] = replace_name( $gps[0][ $menuData['person'] ][ $i ][ $arrL[ $l ] ] );
				$data['text']    = replace_name( $gps[1][ $menuData['person'] ][ $i ][ $arrL[ $l ] ] );
				$pack_table[] = $data;
			}
			$SmartyObj->assign( 'pack_table', $pack_table );
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
		$logic_cd1 = get_logic_cd( 'spshimada_zap' );
		$logic_cd2 = get_logic_cd( 'suisho_zap' );
		$logic_cd3 = get_logic_cd( 'fujiko_ccs' );
		$logic_cd4 = get_logic_cd( 'akari_zap' );
		$logic_cd5 = get_logic_cd( 'kiseki_zap' );
		
		// スコア採点
		// 採点
		$score = get_free_score( array( $logic_cd1, $logic_cd2, $logic_cd3, $logic_cd4, $logic_cd5 ) );
		
		// 各占い師
		/*$tmp_type = array(1,2,3,4,5);
		shuffle( $tmp_type );
		$result_menu = array();
			$result_menu[ 1 ] = replace_name( $text[4][1][$tmp_type[0]][ $logic_cd1[ $logic[0] ] ] );
			$result_menu[ 2 ] = replace_name( $text[4][2][$tmp_type[1]][ $logic_cd2[ $logic[1] ] ] );
			$result_menu[ 3 ] = replace_name( $text[4][3][$tmp_type[2]][ $logic_cd3[ $logic[2] ] ] );
			$result_menu[ 4 ] = replace_name( $text[4][4][$tmp_type[3]][ $logic_cd4[ $logic[3] ] ] );
			$result_menu[ 5 ] = replace_name( $text[4][5][$tmp_type[4]][ $logic_cd5[ $logic[4] ] ] );
		$SmartyObj->assign( 'result_menu', $result_menu );
		*/

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
					$result_menu2[1] =  replace_name( $next_free[0][ $next_logic_cd[ $next_data->get('logic') ] ] ) ;
					$data['result_menu'] = $result_menu2;
					
					$next_list[] = $data;
					
				}
				$SmartyObj->assign( 'next_list', $next_list );
				
			}
	}
}
?>
