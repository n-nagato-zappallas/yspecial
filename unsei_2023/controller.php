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
	$now_date = date('Ymd') >= 20221202 ?date('Ymd') :'20221202';
	$self->set('release_date', $now_date);
}


// 変数セット
$SmartyObj->assign( 'preview',			$preview );
$SmartyObj->assign( 'charset',			$tmp_char );
$SmartyObj->assign( 'release_date',		$self->get('release_date') );

if( $self->get('isp') == 10 ) {
	$up = ( $device_mode == "sp" ?'/sp' :'' ) .'/rakuten/event/unsei_2023';
	if( $real_flag ) $up = 'https://lovefortune.zappallas.com/rakuten/event/unsei_2023';
	$SmartyObj->assign( 'uri_path',			$up );
	$SmartyObj->assign( 'img_path',			$up );
	$SmartyObj->assign( 'special_title',	'2023年運勢特集◆最強占い師集結 あなたの1年を占ってもいいですか？【楽天占い】' );
	$SmartyObj->assign( 'meta_keywords',	'星ひとみ,木下レオン,シウマ,大串ノリコ,ぷりあでぃす玲奈,村野弘味,2023年運勢,無料占い' );
	$SmartyObj->assign( 'meta_description',	'【無料で占えます】2023年はどんな年になる？　あの番組で大活躍中の星ひとみ、木下レオン、シウマ、大串ノリコ、ぷりあでぃす玲奈、村野弘味の人気占い師6人があなたの1年を豪華に占います！' );
	$SmartyObj->assign( 'sns_description',	'【無料で占えます】2023年はどんな年になる？　あの番組で大活躍中の星ひとみ、木下レオン、シウマ、大串ノリコ、ぷりあでぃす玲奈、村野弘味の人気占い師6人があなたの1年を豪華に占います！' );
	$SmartyObj->assign( 'special_period',	'2021年12月1日(水)～2023年12月23日(金)' );


} else if( $self->get('isp') == 11 ) {
	$up = ( $device_mode == "sp" ?'/sp' :'' ) .'/cp_zap/unsei_2023';
	if( $real_flag ) $up = 'https://honkaku-uranai.jp/cp_zap/unsei_2023';
	$SmartyObj->assign( 'uri_path',			$up );
	$SmartyObj->assign( 'img_path',			$up );
	$SmartyObj->assign( 'special_title',	'2023年運勢特集◆最強占い師集結 あなたの1年を占ってもいいですか？' );
	$SmartyObj->assign( 'meta_keywords',	'星ひとみ,木下レオン,シウマ,大串ノリコ,ぷりあでぃす玲奈,村野弘味,2023年運勢,無料占い' );
	$SmartyObj->assign( 'meta_description',	'【無料で占えます】2023年はどんな年になる？　あの番組で大活躍中の星ひとみ、木下レオン、シウマ、大串ノリコ、ぷりあでぃす玲奈、村野弘味の人気占い師6人があなたの1年を豪華に占います！' );
	$SmartyObj->assign( 'sns_description',	'【無料で占えます】2023年はどんな年になる？　あの番組で大活躍中の星ひとみ、木下レオン、シウマ、大串ノリコ、ぷりあでぃす玲奈、村野弘味の人気占い師6人があなたの1年を豪華に占います！' );
	$SmartyObj->assign( 'special_period',	'2021年12月24日(木)～2023年12月23日(金)' );

}

//// 画像ぱす
/** CDN使う場合
$img_path = $cdn_flag ? 'https://ch-fortune.c.yimg.jp/zap/event/unsei_2023'
					  : ( ( $device_mode == "sp" && !$real_flag ?'/sp' :'' ) .'/zap/event/unsei_2023' );
$SmartyObj->assign( 'img_path',			$img_path );
**/

$cdn_flag = true;
//$cdn_flag = false;

if( $cdn_flag && ( $self->get('isp') == 10 || $self->get('isp') == 11 ) ) {
	$img_path = 'https://lw6nr4oyej.user-space.cdn.idcfcloud.net/event/unsei_2023';
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
	$user_keys	= array( 'name', 'sex', 'birth_year', 'birth_mon', 'birth_mday', 'birth_hour', 'birth_min', 'birth_place' );
	$self->init( $user_keys );

	// 名前対応
	if( $self->get('name_self') == '' ) {
		$self->set('name2_self', 'あなた' );
	} else {
		$ns = $self->get('name_self');
		$ns = str_replace( "&amp;",  "&", $ns );
		$self->set('name2_self', $ns .'さん' );
	}
	if( $self->get('name_other') == '' ) {
		$self->set('name2_other', 'あの人' );
	} else {
		$no = $self->get('name_other');
		$no = str_replace( "&amp;",  "&", $no );
		$self->set('name2_other', $no .'さん' );
	}
	
	// 出生時刻、出生地
	$birth_time_txt_self = sprintf( "%d時%d分", $self->get('birth_hour_self'), $self->get('birth_min_self') ) ;
	if ( $self->get('birth_hour_self') == 24 ) {
		$birth_time_txt_self = '不明';
	} else if ( $self->get('birth_min_self') == 60 ) {
		$birth_time_txt_self = sprintf( "%d時　不明　分", $self->get('birth_hour_self') ) ;
	}
	$SmartyObj->assign( 'birth_time_txt_self', $birth_time_txt_self );
	$SmartyObj->assign( 'hometown_self', get_place_param( $self->get('birth_place_self') ) );
	if( $self->get('birth_year_other') ) {
		$birth_time_txt_other = sprintf( "%d時%d分", $self->get('birth_hour_other'), $self->get('birth_min_other') ) ;
		if ( $self->get('birth_hour_other') == 24 ) {
			$birth_time_txt_other = '不明';
		} else if ( $self->get('birth_min_other') == 60 ) {
			$birth_time_txt_other = sprintf( "%d時　不明　分", $self->get('birth_hour_other') ) ;
		}
		$SmartyObj->assign( 'birth_time_txt_other', $birth_time_txt_other );
		$SmartyObj->assign( 'hometown_other', get_place_param( $self->get('birth_place_other') ) );
	}

	// 【メニュー情報設定】
	include( $self->get('event') .'/data/' .$self->get('menu_id') .'.php' );
	if( !$self->get('contents') && $menuData['contents'] )
		$self->set('contents', $menuData['contents']);
	if( $menuData['person'] == 1 )
		unset( $target[1] );
	$now = str_replace( "-", "", nvl($_REQUEST[ 'now' ]) );
	if( !$now || !is_numeric ( $now ) || strlen( $now ) != 8 ) $now = date("Ymd");
	$tnow = $now;
	$SmartyObj->assign( 'graph_now',       $tnow );
	$SmartyObj->assign( 'graph_year_now',  substr($tnow, 0, 4) );
	$SmartyObj->assign( 'graph_month_now', substr($tnow, 4, 2) );
	$SmartyObj->assign( 'graph_mday_now',  substr($tnow, 6, 2) );
	
	/* ぷりあでぃすさんのため暫定対応*/
	if( $menuData['release_date'] ) {
		if( substr($menuData['release_date'],0,4) == '2022' )
			$now = '20230101';
		else
			$now = (intval( substr($menuData['release_date'],0,6) ) +1) .'01';
	}
	$self->set( 'now',       $now );
	$self->set( 'year_now',  substr($now, 0, 4) );
	$self->set( 'month_now', substr($now, 4, 2) );
	$self->set( 'mday_now',  substr($now, 6, 2) );
	
	// パックフラグ
	$pack_flag = $menuData['contents'] == 'pack' || $self->get('contents') == 'pack';
	// 完全無料結果フラグ
	$allfree_flag = $menuData['contents'] == 'free' || $self->get('contents') == 'free';
	// 結果ページフラグ
	$result_flag = strpos( $self->get('t'), 'result' ) !== false;
	// 一部無料結果ページフラグ
	$free_flag = strpos( $self->get('t'), 'result_free' ) !== false;
	// レンサフラグ(レオンさん)
	$rensa_flag  = preg_match( "/001|002|003|004|009|010|011|012|030|036|042|048/", $self->get('menu_id') );
	// レンサフラグ(村野さん)
	$rensa2_flag = preg_match( "/001|002|003|004|025|026|027|028|034|040|046|052/", $self->get('menu_id') );
	
	$SmartyObj->assign( 'pack_flag', $pack_flag );
	$SmartyObj->assign( 'free_flag', $allfree_flag );
	$SmartyObj->assign( 'result_flag', $result_flag );
	$SmartyObj->assign( 'rensa_flag', $rensa_flag );
	
	
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
				$SmartyObj->assign( 'menu_' .$key, number_format( $val *1.1 ) .'円（税込）' );
			} else if( $self->get('isp') == 40 ) {
				$SmartyObj->assign( 'menu_' .$key, number_format( $val *1.1 ) );
				$SmartyObj->assign( 'menu_discount', number_format( $val *1.1 *0.9 ) );
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
	if( $result_flag ) {
		require_once 'logic.php';
		
		// レンサ連携
		if( $rensa_flag ) {
			setRensa( 'leon_rsa', $self->get('menu_id'), $free_flag );
		}
		if( $rensa2_flag ) {
			setRensa( 'murano_rsa', $self->get('menu_id'), $free_flag );
		}
	}
	// 【パックメニュー】
	if( $pack_flag ) {
		$packData = $menuData;
		$packInfo = array();
		$logic_cd = array();
		// 1. 星ひとみ           hoshihitomi_zap
		// 2. 木下レオン         leon_rsa
		// 3. シウマ             shiuma2_zap
		// 4. 大串ノリコ         ogushi_zap
		// 5. ぷりあでぃす玲奈   purireina_zap
		// 6. 村野弘味           murano_rsa
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
				
				// 通常
				if( $j != 2 && $j != 6 ) {
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
							$result_menu[ $i +1 ] = replace_name2( $result_text[$i][ $logic_cd[$j][ $logic ] ] );
						}
						$packInfo[ $packData['child_contents_' .$j] ][ 'result_menu' ] = $result_menu;
					}
				}
				// レンサ
				else {
					$con = $j == 2 ?'leon_rsa' :'murano_rsa';
					$rensa = $self->get( 'api_' .$con );
					$base = $rensa['result'][0]['base'];
					$alt_id = $j == 2 ?1 :2;
					foreach( $target as $key => $val ) {
						$packInfo[ $packData['child_contents_' .$j] ][ 'base_id_' .$val ] = $base['base_id_' .$val];
						$packInfo[ $packData['child_contents_' .$j] ][ 'base_alt_' .$val ] = get_rensa_base_alt( $alt_id, $base['base_id_' .$val] );
						$packInfo[ $packData['child_contents_' .$j] ][ 'base_text_' .$val ] = $base['base_text_' .$val];
					}
					
					$result_menu = array();
					$result_text = $rensa['result'][0]['body'];
					for( $i = 0; $i < count($result_text); $i++ ) {
						$result_menu[ $i +1 ] = replace_name2( $result_text[$i]['text'] );
					}
					$packInfo[ $packData['child_contents_' .$j] ][ 'result_menu' ] = $result_menu;
					
					
				}
			}
			$SmartyObj->assign( $packData['child_contents_' .$j], $packInfo[ $packData['child_contents_' .$j] ] );
		}
		// 月運グラフ
		if( $result_flag ) {
			$retG = setGraph();
			// レンサ
				$rensa = $self->get('api_leon_rsa');
				$base = $rensa['result'][0]['base'];
				$base = str_replace(array( '[', ']' ), '', $base);
				$rensa2 = $self->get('api_murano_rsa');
				$base2 = $rensa2['result'][0]['base'];
				$base2 = str_replace(array( '[', ']' ), '', $base2);
			
			
			$monG = array( 1,2,3,4,5,  6,7,8,9,10,11,12 );
			$graph = array( array(0,0,0,0,0,   0,0,0,0,0,0,0) );
				// 一人用
				if( $menuData['person'] == 1 ) {
					$graph[1] = $retG[0][1][$menuData['person']][$logic_cd[1]['a1']];
					//$graph[2] = $retG[0][2][$menuData['person']][$logic_cd[2]['x']];
					$graph[3] = $retG[0][3][$menuData['person']][$logic_cd[3]['b1']];
					$graph[4] = $retG[0][4][$menuData['person']][$logic_cd[4]['a1']];
					$graph[5] = $retG[0][5][$menuData['person']][$logic_cd[5]['a1']];
					//$graph[6] = $retG[0][6][$menuData['person']][$logic_cd[6]['a1']];
					
					$graph[2] = explode(",", $base['score_self']);
					$graph[6] = explode(",", $base2['score_self']);
				} 
				// 二人用
				else {
					$graph[1] = $retG[0][1][$menuData['person']][$logic_cd[1]['a2']];
					//$graph[2] = $retG[0][2][$menuData['person']][$logic_cd[2]['x']];
					$graph[3] = $retG[0][3][$menuData['person']][$logic_cd[3]['b2']];
					$graph[4] = $retG[0][4][$menuData['person']][$logic_cd[4]['a2']];
					$graph[5] = $retG[0][5][$menuData['person']][$logic_cd[5]['a2']];
					//$graph[6] = $retG[0][6][$menuData['person']][$logic_cd[6]['a2']];
					
					$graph[2] = explode(",", $base['score_other']);
					$graph[6] = explode(",", $base2['score_other']);
				}
			
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
			$SmartyObj->assign( 'graph_max_txt', replace_name2( $retG[1][ $menuData['person'] ][0][$max[0]] ) );
			$SmartyObj->assign( 'graph_min_txt', replace_name2( $retG[1][ $menuData['person'] ][1][$min[0]] ) );
		}
		// ヘッダーステータス
		if( !$free_flag )
			$yahoo_charge_status = "0";
		
		//var_dump( $SmartyObj->get_template_vars() );exit();
		//var_dump( $packInfo );exit();
	}
	
	// 【完全無料メニュー】結果ページ
	else if( $allfree_flag ) {
		// 入力チェック
		checkInputParam();
		// ロジック結果を取得
		$logic_cd1 = get_logic_cd( 'hoshihitomi_zap' );
		//$logic_cd2 = get_logic_cd( 'leon_rsa' );
		$logic_cd3 = get_logic_cd( 'shiuma2_zap' );
		$logic_cd4 = get_logic_cd( 'ogushi_zap' );
		$logic_cd5 = get_logic_cd( 'purireina_zap' );
		//$logic_cd6 = get_logic_cd( 'murano_rsa' );
		// レンサ
		$rensa = $self->get('api_leon_rsa');
		$body = $rensa['result'][0]['body'];
		$base = $rensa['result'][0]['base'];
		$rensa = $self->get('api_murano_rsa');
		$body2 = $rensa['result'][0]['body'];
		$base2 = $rensa['result'][0]['base'];
		
		// 小メニューとか
		$result_menu = array();
		if( $menuData['person'] == 1 ) {
			$result_menu[ 1 ] = replace_name2( $text[0][ $type[1] ][ $logic_cd1[ $logic[1] ] ] );
			//$result_menu[ 2 ] = replace_name2( $text[1][ $type[2] ][ $logic_cd2[ $logic[2] ] ] );
			$result_menu[ 3 ] = replace_name2( $text[2][ $type[3] ][ $logic_cd3[ $logic[3] ] ] );
			$result_menu[ 4 ] = replace_name2( $text[3][ $type[4] ][ $logic_cd4[ $logic[4] ] ] );
			$result_menu[ 5 ] = replace_name2( $text[4][ $type[5] ][ $logic_cd5[ $logic[5] ] ] );
			//$result_menu[ 6 ] = replace_name2( $text[5][ $type[6] ][ $logic_cd6[ $logic[6] ] ] );
			
			$result_menu[ 2 ] = $body[ $type[2] -1 ]['text'];
			$result_menu[ 6 ] = $body2[ $type[6] -1 ]['text'];
		} else {
			$result_menu[ 1 ] = replace_name2( $text[0][ $logic_cd1[ $logic[1] ] ] );
			//$result_menu[ 2 ] = replace_name2( $text[1][ $logic_cd2[ $logic[2] ] ] );
			$result_menu[ 3 ] = replace_name2( $text[2][ $logic_cd3[ $logic[3] ] ] );
			$result_menu[ 4 ] = replace_name2( $text[3][ $logic_cd4[ $logic[4] ] ] );
			$result_menu[ 5 ] = replace_name2( $text[4][ $logic_cd5[ $logic[5] ] ] );
			//$result_menu[ 6 ] = replace_name2( $text[5][ $logic_cd6[ $logic[6] ] ] );
			
			$result_menu[ 2 ] = $body[0]['text'];
			$result_menu[ 6 ] = $body2[0]['text'];
		}
		
		//var_dump($result_menu);
		//exit();
		
		$SmartyObj->assign( 'result_menu', $result_menu );
		
		// 採点
		$tg = $menuData['person'] == 1 ?'score_self' :'score_other';
		$tt = $menuData['person'] == 1 ?'base_text_self' :'base_text_other';
		$arr_c = array( 0, $logic_cd1[ $logic[1] ], $base[$tg], $logic_cd3[ $logic[3] ], $logic_cd4[ $logic[4] ], $logic_cd5[ $logic[5] ], $base2[$tg] );
		
		$score = get_free_score( $arr_c );
		// レンサ対応
		$SmartyObj->assign( 'free_kuji_pos2'  , $base[$tg] );
		$SmartyObj->assign( 'free_kuji_unsei2', $base[$tt] );
		$SmartyObj->assign( 'free_kuji_pos6'  , $base2[$tg] );
		$SmartyObj->assign( 'free_kuji_unsei6', $base2[$tt] );

	}
	
	// 【通常メニュー】結果ページ
	else if( $result_flag ) {
		// 入力チェック
		checkInputParam();
		
		// レンサ連携
		if( $rensa_flag || $rensa2_flag ) {
			// 基本性格
			$rensa = $self->get( $rensa_flag ?'api_leon_rsa' :'api_murano_rsa' );
			$base = $rensa['result'][0]['base'];
			$alt_id = $rensa_flag ?1 :2;
			foreach( $target as $key => $val ) {
				$SmartyObj->assign( 'base_id_' .$val, $base['base_id_' .$val] );
				$SmartyObj->assign( 'base_alt_' .$val, get_rensa_base_alt( $alt_id, $base['base_id_' .$val] ) );
				$SmartyObj->assign( 'base_text_' .$val, $base['base_text_' .$val] );
			}
			
			//  小メニュー 結果テキストを取得／HTML置換
			$result_menu = array();
			$result_text = $rensa['result'][0]['body'];
			for( $i = 0; $i < count($result_text); $i++ ) {
				$result_menu[ $i +1 ] = $result_text[$i]['text'];
			}
			
			$SmartyObj->assign( 'result_menu', $result_menu );
			
		}
		// 通常
		else {
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
					$result_menu[ $i +1 ] = replace_name2( $result_text[$i][ $logic_cd[ $logic ] ] );
				}
				
				$SmartyObj->assign( 'result_menu', $result_menu );
			}
			
		}
		// ヘッダーステータス
		if( !$free_flag )
			$yahoo_charge_status = "0";
	}
	
	
	// Next枠 ( パックと一部無料見せでは非表示 )
	if( ! $pack_flag && !$free_flag && ( $allfree_flag || $result_flag ) ) {
	
		if( isset( $next ) ) {
			
			// レンサ連携
			$rensa_result = array( '', '' );
			if( $rensa_flag ) {
				$rensa = $self->get('api_leon_rsa');
				for( $i = 1; $i <= 2; $i++ ) {
					$rensa_result[ $rensa['result'][$i]['info']['menu_id'] ] = $rensa['result'][$i]['body'][0]['text'];
				}
			}
			$rensa_result2 = array( '', '' );
			if( $rensa2_flag ) {
				$rensa = $self->get('api_murano_rsa');
				for( $i = 1; $i <= 2; $i++ ) {
					$rensa_result2[ $rensa['result'][$i]['info']['menu_id'] ] = $rensa['result'][$i]['body'][0]['text'];
				}
			}
			
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
						} else if( $self->get('isp') == 40 ) {
							$data[$key] = number_format( $val *1.1 );
							$data['discount'] = number_format( $val *1.1 *0.9 );
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
				// レンサ連携
				if( preg_match( "/001|002|003|004|009|010|011|012/", $next_id ) ) {
					$result_menu2 = array();
					$result_menu2[1] =  $rensa_result[ $next_id ];
					$data['result_menu'] = $result_menu2;
				}
				else if( preg_match( "/025|026|027|028/", $next_id ) ) {
					$result_menu2 = array();
					$result_menu2[1] =  $rensa_result2[ $next_id ];
					$data['result_menu'] = $result_menu2;
				}
				
				// next枠が月運の場合は、一部無料フラグを立てて別途レンサ連携が必要。
				else if( preg_match( "/030|036|042|048/", $next_id ) ) {
					setRensa( 'leon_rsa', $next_id, true );
					$rensa = $self->get('api_leon_rsa');
					$result_text = $rensa['result'][0]['body'];
					
					$result_menu2 = array();
					$result_menu2[1] =  $result_text[0]['text'];
					$data['result_menu'] = $result_menu2;
				}
				else if( preg_match( "/034|040|046|052/", $next_id ) ) {
					setRensa( 'murano_rsa', $next_id, true );
					$rensa = $self->get('api_murano_rsa');
					$result_text = $rensa['result'][0]['body'];
					
					$result_menu2 = array();
					$result_menu2[1] =  $result_text[0]['text'];
					$data['result_menu'] = $result_menu2;
				}
				// 通常
				else {
					$next_free = $next_data->get('free');
					$next_logic_cd = $logic_cd;
					if( $next_menuData['contents'] != $menuData['contents'] ) {
						$next_logic_cd = get_logic_cd( $next_menuData['contents'] );
					}
					$result_menu2 = array();
					$result_menu2[1] =  replace_name2( $next_free[0][ $next_logic_cd[ $next_data->get('logic') ] ] ) ;
					$data['result_menu'] = $result_menu2;
				}
				
				
				
				$next_list[] = $data;
				
			}
			$SmartyObj->assign( 'next_list', $next_list );
			
		}
	}
}
?>
