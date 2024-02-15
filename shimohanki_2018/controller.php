<?php
/**
 * 特集ごとのコントローラー
 * 
 *  [%event%]/controller.php			簡単なサイトの場合はBLはここに書いてしまおう
 *              └ logic.php			占断ロジック関連
 *              └ index_data.php		indexページの情報＆処理
 *              └ data/[%menu_id%].php	メニュー単位の情報
 */
// 公開日付
if( !$self->get('release_date') ) {
	$now_date = date('Ymd') >= 20180601 ?date('Ymd') :'20180601';
	$self->set('release_date', $now_date);
}


// 変数セット
$SmartyObj->assign( 'preview',			$preview );
$SmartyObj->assign( 'charset',			$tmp_char );
$SmartyObj->assign( 'uri_path',			( $device_mode == "sp" && !$real_flag ?'/sp' :'' ) .'/zap/event/shimohanki_2018' );
$SmartyObj->assign( 'release_date',		$self->get('release_date') );

$SmartyObj->assign( 'special_title',	'あなたの運勢＆恋も一目瞭然！人気鑑定士5人集結◇2018年下半期特集' );
$SmartyObj->assign( 'meta_keywords',	'無料占い,2018年下半期運勢,島田秀平,水晶玉子,鏡リュウジ,細木数子,木村藤子,Yahoo!占い' );
$SmartyObj->assign( 'meta_description',	'【無料で占えます】2018年下半期、あなたの運勢も恋も……これを見れば一目瞭然！　島田秀平、水晶玉子、細木数子、鏡リュウジ、木村藤子といったTVやメディアで話題の人気鑑定士があなたの運勢を徹底鑑定　 Yahoo!占い' );
$SmartyObj->assign( 'sns_description',	'【無料占いあり】2018年下半期の運勢が一目瞭然！メディアで話題の人気鑑定士、島田秀平、水晶玉子、細木数子、鏡リュウジ、木村藤子があなたの運勢も恋も徹底鑑定　 Yahoo!占い' );
$SmartyObj->assign( 'special_period',	'2018年6月1日(金)～2018年11月30日(金)' );

$SmartyObj->assign( 'space_id', 	$device_mode == "sp" ?'2080501934' :'2080501933' );
$SmartyObj->assign( 'space_id_tag',	$device_mode == "sp" ?'<SPACE_ID_MEM_S>2080501934<SPACE_ID_MEM_E>' :'<SPACE_ID_EMG_S>2080501933<SPACE_ID_EMG_E>' );


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
// indexページフラグ
$index_flag = strpos( $self->get('t'), 'index' ) !== false;
$SmartyObj->assign( 'index_flag', $index_flag );
if( $index_flag ) {
	if ( is_readable( $self->get('event') .'/index_data.php' ) ) {
		include_once( $self->get('event') .'/index_data.php' );
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
	$now = str_replace( "-", "", nvl($_REQUEST[ 'now' ]) );
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
	$type = array();
	$tmp_type = array(1,2,3,4,5);
	shuffle($tmp_type);
	foreach( $menuData as $key => $val ) {
		if( strpos( $key, 'min_title' ) !== false  ) {
			$arr_mt = explode( "_", $key );
			$type[ $arr_mt[0] ] = $tmp_type[ $arr_mt[0] -1 ];
			$min_title[ $arr_mt[0] ] = $free_flag ?$val[ $type[ $arr_mt[0] ] ] :$val;
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
		// 1:spshimada_zap
		// 2:suisho_zap
		// 3:complete_zap
		// 4:hosoki_ccs
		// 5:fujiko_ccs
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
				} else {
					$packInfo[ $packData['child_contents_' .$j] ][ 'menu_' .$key ] = $val;
				}
			}
			$packInfo[ $packData['child_contents_' .$j] ][ 'menu_min_title' ] = $min_title;
			
			// 結果ページ用
			if( $result_flag ) {
				// リコメンド情報。
				if ( is_readable( $self->get('event') .'/index_data.php' ) ) {
					include_once( $self->get('event') .'/index_data.php' );
				}
				// 入力チェック
				checkInputParam();
				
				$logic_cd[$j] = get_logic_cd( $packData['child_contents_' .$j] );
				
				$base = get_base_info( $packData['child_contents_' .$j], $logic_cd[$j] );
				foreach( $target as $key => $val ) {
					$packInfo[ $packData['child_contents_' .$j] ][ 'base_id_' .$val ] = $base['base_id_' .$val];
					$packInfo[ $packData['child_contents_' .$j] ][ 'base_alt_' .$val ] = $base['base_alt_' .$val];
					$packInfo[ $packData['child_contents_' .$j] ][ 'base_text_' .$val ] = $base['base_text_' .$val];
				}
				if( $logic && $logic[0] ) {
					$result_menu = array();
					for( $i = 0; $i < count($logic); $i++ ) {
						$result_menu[ $i +1 ] = replace_name( $text[$i][ $logic_cd[$j][ $logic[$i] ] ] );
					}
					$packInfo[ $packData['child_contents_' .$j] ][ 'result_menu' ] = $result_menu;
				}
			}
			$SmartyObj->assign( $packData['child_contents_' .$j], $packInfo[ $packData['child_contents_' .$j] ] );
		}
		// 月運グラフ
		if( $result_flag ) {
			setGraph();
		}
		// ヘッダーステータス
		$yahoo_charge_status = "0";
	}
	
	// 【完全無料メニュー】結果ページ
	else if( $free_flag ) {
		// リコメンド情報。
		if ( is_readable( $self->get('event') .'/index_data.php' ) ) {
			include_once( $self->get('event') .'/index_data.php' );
		}
		// 入力チェック
		checkInputParam();
		// ロジック結果を取得
		$logic_cd1 = get_logic_cd( 'spshimada_zap' );
		$logic_cd2 = get_logic_cd( 'suisho_zap' );
		$logic_cd3 = get_logic_cd( 'complete_zap' );
		$logic_cd4 = get_logic_cd( 'hosoki_ccs' );
		$logic_cd5 = get_logic_cd( 'fujiko_ccs' );
		// 小メニューとか
		$result_menu = array();
		$result_menu[ 1 ] = replace_name( $text[0][ $type[1] ][ $logic_cd1[ $logic[0] ] ] );
		$result_menu[ 2 ] = replace_name( $text[1][ $type[2] ][ $logic_cd2[ $logic[1] ] ] );
		$result_menu[ 3 ] = replace_name( $text[2][ $type[3] ][ $logic_cd3[ $logic[2] ] ] );
		$result_menu[ 4 ] = replace_name( $text[3][ $type[4] ][ $logic_cd4[ $logic[3] ] ] );
		$result_menu[ 5 ] = replace_name( $text[4][ $type[5] ][ $logic_cd5[ $logic[4] ] ] );
		$result_menu[ 6 ] = replace_name( $text[5][ $logic_cd1[ $logic[5] ] ] );
		$result_menu[ 7 ] = replace_name( $text[6][ $logic_cd2[ $logic[6] ] ] );
		$result_menu[ 8 ] = replace_name( $text[7][ $logic_cd3[ $logic[7] ] ] );
		$result_menu[ 9 ] = replace_name( $text[8][ $logic_cd4[ $logic[8] ] ] );
		$result_menu[10 ] = replace_name( $text[9][ $logic_cd5[ $logic[9] ] ] );
		$SmartyObj->assign( 'result_menu', $result_menu );
		// 採点
		$score = get_free_score( array( $logic_cd1, $logic_cd2, $logic_cd3, $logic_cd4, $logic_cd5 ) );
		$SmartyObj->assign( 'icon_best', $score[9] );
		for( $i=1; $i<=4; $i++ )
			$SmartyObj->assign( 'icon_good_'.$i, $score[9 -$i] );
		$SmartyObj->assign( 'icon_average', $score[1] );
		
		$SmartyObj->assign( 'result_menu_free', replace_name( get_free_score_text( $score[9], $score[1] ) ) );
	}
	
	// 【通常メニュー】結果ページ
	else if( $result_flag ) {
		// リコメンド情報。
		if ( is_readable( $self->get('event') .'/index_data.php' ) ) {
			include_once( $self->get('event') .'/index_data.php' );
		}
		// 入力チェック
		checkInputParam();
		// ロジック結果を取得
		$logic_cd = get_logic_cd( $menuData['contents'] );
		
		// 基本性格
		$base = get_base_info( $menuData['contents'], $logic_cd );
		foreach( $target as $key => $val ) {
			$SmartyObj->assign( 'base_id_' .$val, $base['base_id_' .$val] );
			$SmartyObj->assign( 'base_alt_' .$val, $base['base_alt_' .$val] );
			$SmartyObj->assign( 'base_text_' .$val, $base['base_text_' .$val] );
		}
		
		//  小メニュー 結果テキストを取得／HTML置換
		if( $logic && $logic[0] ) {
			$result_menu = array();
			for( $i = 0; $i < count($logic); $i++ ) {
				$result_menu[ $i +1 ] = replace_name( $text[$i][ $logic_cd[ $logic[$i] ] ] );
			}
			// 月運Next枠処理
			if( count($logic) == 9 ) {
				// ロジック結果を取得
				$logic_cd1 = get_logic_cd( 'spshimada_zap' );
				$logic_cd2 = get_logic_cd( 'suisho_zap' );
				$logic_cd3 = get_logic_cd( 'complete_zap' );
				$logic_cd4 = get_logic_cd( 'hosoki_ccs' );
				$logic_cd5 = get_logic_cd( 'fujiko_ccs' );
				$result_menu[5] = replace_name( $text[4][ $logic_cd1[ $logic[4] ] ] );
				$result_menu[6] = replace_name( $text[5][ $logic_cd2[ $logic[5] ] ] );
				$result_menu[7] = replace_name( $text[6][ $logic_cd3[ $logic[6] ] ] );
				$result_menu[8] = replace_name( $text[7][ $logic_cd4[ $logic[7] ] ] );
				$result_menu[9] = replace_name( $text[8][ $logic_cd5[ $logic[8] ] ] );
			}
			
			$SmartyObj->assign( 'result_menu', $result_menu );
		}
		// ヘッダーステータス
		$yahoo_charge_status = "0";
	}
}
?>
