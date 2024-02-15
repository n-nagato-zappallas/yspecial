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
	$now_date = date('Ymd') >= 20190604 ?date('Ymd') :'20190604';
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
	$SmartyObj->assign( 'uri_path',			( $device_mode == "sp" && !$real_flag ?'/sp' :'' ) .'/zap/event/shimohanki_2019' );
	$SmartyObj->assign( 'special_title',	'令和元年の貴方の運勢/幸運日を人気占い師が鑑定◆2019年下半期特集' );
	$SmartyObj->assign( 'meta_keywords',	'島田秀平,水晶玉子,紫月香帆,波羅門,飯塚唯,2019年下半期運勢,無料占い' );
	$SmartyObj->assign( 'meta_description',	'【無料占いあり】令和元年の2019年下半期、あなたの運勢と幸運な日を一挙鑑定！　島田秀平、水晶玉子、紫月香帆、波羅門、飯塚唯の人気占い師5人が大集合！　あなたの下半期の運勢を徹底鑑定します。' );
	$SmartyObj->assign( 'sns_description',	'【無料占いあり】令和元年の2019年下半期、あなたの運勢と幸運な日を一挙鑑定！　島田秀平、水晶玉子、紫月香帆、波羅門、飯塚唯の人気占い師5人が大集合！　あなたの下半期の運勢を徹底鑑定します。' );
	$SmartyObj->assign( 'special_period',	'2019年6月4日(火)～2019年12月26日(木)' );
	$SmartyObj->assign( 'space_id', 		$device_mode == "sp" ?'2080518234' :'2080518233' );
	$SmartyObj->assign( 'space_id_tag',		$device_mode == "sp" ?'<SPACE_ID_MEM_S>2080518234<SPACE_ID_MEM_E>' :'<SPACE_ID_EMG_S>2080518233<SPACE_ID_EMG_E>' );

} else if( $self->get('isp') == 10 ) {
	//$SmartyObj->assign( 'uri_path',			( $device_mode == "sp" ?'/sp' :'' ) .'/rakuten/event/shimohanki_2019' );
	$up = ( $device_mode == "sp" ?'/sp' :'' ) .'/rakuten/event/shimohanki_2019';
	if( $real_flag ) $up = 'https://lovefortune.zappallas.com/rakuten/event/shimohanki_2019';
	$SmartyObj->assign( 'uri_path',			$up );
	$SmartyObj->assign( 'special_title',	'令和元年の貴方の運勢/幸運日を人気占い師が鑑定◆2019年下半期特集【楽天占い】' );
	$SmartyObj->assign( 'meta_keywords',	'島田秀平,水晶玉子,紫月香帆,波羅門,飯塚唯,2019年下半期運勢,無料占い' );
	$SmartyObj->assign( 'meta_description',	'【楽天占い】【無料占いあり】令和元年の2019年下半期、あなたの運勢と幸運な日を一挙鑑定！　島田秀平、水晶玉子、紫月香帆、波羅門、飯塚唯の人気占い師5人が大集合！　あなたの下半期の運勢を徹底鑑定します。' );
	$SmartyObj->assign( 'sns_description',	'【楽天占い】【無料占いあり】令和元年の2019年下半期、あなたの運勢と幸運な日を一挙鑑定！　島田秀平、水晶玉子、紫月香帆、波羅門、飯塚唯の人気占い師5人が大集合！　あなたの下半期の運勢を徹底鑑定します。' );
	$SmartyObj->assign( 'special_period',	'2019年6月26日(水)～2019年12月31日(火)' );

} else if( $self->get('isp') == 40 ) {
	//$SmartyObj->assign( 'uri_path',			( $device_mode == "sp" ?'/sp' :'' ) .'/nifty/event/shimohanki_2019' );
	$SmartyObj->assign( 'uri_path',			'https://contents.nifty.com/member/service/g-way/shimohanki_2019' .( $device_mode == "sp" ?'/sp' :'' ) .'/nifty/event/shimohanki_2019' );
	$SmartyObj->assign( 'special_title',	'占い@nifty◆令和元年の貴方の運勢/幸運日を人気占い師が鑑定◆2019年下半期特集' );
	$SmartyObj->assign( 'meta_keywords',	'島田秀平,水晶玉子,紫月香帆,波羅門,飯塚唯,2019年下半期運勢,無料占い' );
	$SmartyObj->assign( 'meta_description',	'占い@nifty◆【無料占いあり】令和元年の2019年下半期、あなたの運勢と幸運な日を一挙鑑定！　島田秀平、水晶玉子、紫月香帆、波羅門、飯塚唯の人気占い師5人が大集合！　あなたの下半期の運勢を徹底鑑定します。' );
	$SmartyObj->assign( 'sns_description',	'占い@nifty◆【無料占いあり】令和元年の2019年下半期、あなたの運勢と幸運な日を一挙鑑定！　島田秀平、水晶玉子、紫月香帆、波羅門、飯塚唯の人気占い師5人が大集合！　あなたの下半期の運勢を徹底鑑定します。' );
	$SmartyObj->assign( 'special_period',	'2019年6月27日(木)～2019年12月31日(火)' );

} else if( $self->get('isp') == 11 ) {
	//$SmartyObj->assign( 'uri_path',			( $device_mode == "sp" ?'/sp' :'' ) .'/cp_zap/event/shimohanki_2019' );
	$up = ( $device_mode == "sp" ?'/sp' :'' ) .'/cp_zap/event/shimohanki_2019';
	if( $real_flag ) $up = 'https://honkaku-uranai.jp/cp_zap/event/shimohanki_2019';
	$SmartyObj->assign( 'uri_path',			$up );
	$SmartyObj->assign( 'special_title',	'本格占い館◆令和元年の貴方の運勢/幸運日を人気占い師が鑑定◆2019年下半期特集' );
	$SmartyObj->assign( 'meta_keywords',	'島田秀平,水晶玉子,紫月香帆,波羅門,飯塚唯,2019年下半期運勢,無料占い' );
	$SmartyObj->assign( 'meta_description',	'本格占い館◆【無料占いあり】令和元年の2019年下半期、あなたの運勢と幸運な日を一挙鑑定！　島田秀平、水晶玉子、紫月香帆、波羅門、飯塚唯の人気占い師5人が大集合！　あなたの下半期の運勢を徹底鑑定します。' );
	$SmartyObj->assign( 'sns_description',	'本格占い館◆【無料占いあり】令和元年の2019年下半期、あなたの運勢と幸運な日を一挙鑑定！　島田秀平、水晶玉子、紫月香帆、波羅門、飯塚唯の人気占い師5人が大集合！　あなたの下半期の運勢を徹底鑑定します。' );
	$SmartyObj->assign( 'special_period',	'2019年6月18日(火)～2019年12月31日(火)' );

}
//// 画像ぱす
//$strPath1 = $device_mode == "sp" && !$real_flag ?'/sp' :'';
//$strPath2 = $device_mode == "sp"  ?'_sp' :'';
//$tmp_path = $cdn_flag ? 'https://ch-fortune.c.yimg.jp/zap/event/shimohanki_2019'
//					  : $strPath1 .'/zap/event/shimohanki_2019';
//$SmartyObj->assign( 'img_path', 		$tmp_path .'/img' .$strPath2 );
//$SmartyObj->assign( 'js_path',  		$tmp_path .'/js'  .$strPath2 );
//$SmartyObj->assign( 'css_path', 		$tmp_path .'/css' .$strPath2 );

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
	// 無料フラグ
	$free_flag = $menuData['contents'] == 'free' || $self->get('contents') == 'free';
	// 結果ページフラグ
	$result_flag = strpos( $self->get('t'), 'result' ) !== false;
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
		// 日付ロジック
		if( $result_flag ) {
			$logic_cd6 = get_logic_cd( 'destiny_date' );
			$arrF = array( 3 => 'life', 5 => 'love', 7 => 'meet' );
			for( $i = 3; $i <= 7; $i +=2 ) {
				$SmartyObj->assign( 'fortune_date_'.$arrF[$i].'_mm', substr( $logic_cd6['date' .$i], 0, 2 ) );
				$SmartyObj->assign( 'fortune_date_'.$arrF[$i].'_dd', substr( $logic_cd6['date' .$i], 2, 2 ) );
				$SmartyObj->assign( 'fortune_date_'.$arrF[$i].'_text', replace_name( $text[$i][ $logic_cd6['cd'.$i] ] ) );
			}
		}
		
		$packData = $menuData;
		$packInfo = array();
		$logic_cd = array();
		// 1:spshimada_zap
		// 2:suisho_zap
		// 3:shizuki_zap
		// 4:baramon2_zap
		// 5:gal_zap
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
				
				$base = get_base_info( $packData['child_contents_' .$j], $logic_cd[$j] );
				foreach( $target as $key => $val ) {
					$packInfo[ $packData['child_contents_' .$j] ][ 'base_id_' .$val ] = $base['base_id_' .$val];
					$packInfo[ $packData['child_contents_' .$j] ][ 'base_text_' .$val ] = $base['base_text_' .$val];
				}
				if( $logic_cd && count($logic_cd) ) {
					$result_menu = array();
					for( $i = 0; $i < count($text); $i++ ) {
						$result_menu[ $i +1 ] = replace_name( $text[$i][ $logic_cd[$j][ $logic ] ] );
					}
					$packInfo[ $packData['child_contents_' .$j] ][ 'result_menu' ] = $result_menu;
				}
			}
			$SmartyObj->assign( $packData['child_contents_' .$j], $packInfo[ $packData['child_contents_' .$j] ] );
		}
		
		// ヘッダーステータス
		$yahoo_charge_status = "0";
	}
	
	// 【完全無料メニュー】結果ページ
	else if( $free_flag ) {
		// リコメンド情報。
		if ( is_readable( $self->get('event') .'/index_data.php' ) ) {
			include( $self->get('event') .'/index_data.php' );
		}
		
		// 入力チェック
		checkInputParam();
		// ロジック結果を取得
		$logic_cd1 = get_logic_cd( 'spshimada_zap' );
		$logic_cd2 = get_logic_cd( 'suisho_zap' );
		$logic_cd3 = get_logic_cd( 'shizuki_zap' );
		$logic_cd4 = get_logic_cd( 'baramon2_zap' );
		$logic_cd5 = get_logic_cd( 'gal_zap' );
		$logic_cd6 = get_logic_cd( 'destiny_date' );
		
		// スコア採点
		$score = get_free_score( array( $logic_cd1, $logic_cd2, $logic_cd3, $logic_cd4, $logic_cd5 ) );
		$divide_flg = $logic_cd2['a1'] %2==1 ?'A' :'B';
		for( $i=1; $i<=4; $i++ ) {
			$SmartyObj->assign( 'crystal_'.$i, $text[2][$divide_flg][ $score[$i] ] );
		}
		$SmartyObj->assign( 'crystal_text', replace_name( $text[3][$divide_flg][ $score[1] ] ) );
		// 日付ロジック
		$SmartyObj->assign( 'fortune_date_mm', substr( $logic_cd6['date1'], 0, 2 ) );
		$SmartyObj->assign( 'fortune_date_dd', substr( $logic_cd6['date1'], 2, 2 ) );
		$SmartyObj->assign( 'fortune_date_text', replace_name( $text[1][ $logic_cd6['cd1'] ] ) );
		// 各占い師
		$tmp_type = array(1,2,3,4,5);
		shuffle( $tmp_type );
		$result_menu = array();
			$result_menu[ 1 ] = replace_name( $text[4][1][$tmp_type[0]][ $logic_cd1[ $logic[0] ] ] );
			$result_menu[ 2 ] = replace_name( $text[4][2][$tmp_type[1]][ $logic_cd2[ $logic[1] ] ] );
			$result_menu[ 3 ] = replace_name( $text[4][3][$tmp_type[2]][ $logic_cd3[ $logic[2] ] ] );
			$result_menu[ 4 ] = replace_name( $text[4][4][$tmp_type[3]][ $logic_cd4[ $logic[3] ] ] );
			$result_menu[ 5 ] = replace_name( $text[4][5][$tmp_type[4]][ $logic_cd5[ $logic[4] ] ] );
		$SmartyObj->assign( 'result_menu', $result_menu );
		

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
		$base = get_base_info( $menuData['contents'], $logic_cd );
		foreach( $target as $key => $val ) {
			$SmartyObj->assign( 'base_id_' .$val, $base['base_id_' .$val] );
			$SmartyObj->assign( 'base_text_' .$val, $base['base_text_' .$val] );
		}
		
		//  小メニュー 結果テキストを取得／HTML置換
		if( $logic_cd && count($logic_cd) ) {
			$result_menu = array();
			for( $i = 0; $i < count($text); $i++ ) {
				$result_menu[ $i +1 ] = replace_name( $text[$i][ $logic_cd[ $logic ] ] );
			}
			
			$SmartyObj->assign( 'result_menu', $result_menu );
		}
		// ヘッダーステータス
		$yahoo_charge_status = "0";
	}
	
	
	// Next枠
	if( ! $pack_flag && ( $free_flag || $result_flag ) ) {
	
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
					$result_menu2[1] =  replace_name( $next_free[ $next_logic_cd[ $next_data->get('logic') ] ] ) ;
					$data['result_menu'] = $result_menu2;
					
					$next_list[] = $data;
					
				}
				$SmartyObj->assign( 'next_list', $next_list );
				
			}
	}
}
?>
