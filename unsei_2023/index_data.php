<?php
// 月運対応 /////////////////////////////////////////////////////////////////////////////////////
$list_mont = array( 'nx23_029', 'nx23_030', 'nx23_031', 'nx23_032', 'nx23_033', 'nx23_034', 
					'nx23_035', 'nx23_036', 'nx23_037', 'nx23_038', 'nx23_039', 'nx23_040', 
					'nx23_041', 'nx23_042', 'nx23_043', 'nx23_044', 'nx23_045', 'nx23_046', 
					'nx23_047', 'nx23_048', 'nx23_049', 'nx23_050', 'nx23_051', 'nx23_052', 
					'nx23_053', 'nx23_054', 'nx23_055', 'nx23_056', 'nx23_057', 'nx23_058', 
					'nx23_059', 'nx23_060', 'nx23_061', 'nx23_062', 'nx23_063', 'nx23_064',
					'nx23_065', 'nx23_066', 'nx23_067', 'nx23_068', 'nx23_069', 'nx23_070',
					'nx23_071', 'nx23_072', 'nx23_073', 'nx23_074', 'nx23_075', 'nx23_076'  );

$arrM = array( '202301', '20221202' );
$m = $self->get('menu_id');

if( $self->get('release_date') >= '20231027' ) {
	$arrM = array( '202311', '20231027' );

} else if( $self->get('isp') == 11 && $self->get('release_date') >= '20230927' ) {
	$arrM = array( '202310', '20230926' );
} else if( $self->get('isp') != 11 && $self->get('release_date') >= '20230926' ) {
	$arrM = array( '202310', '20230926' );
	
} else if( $self->get('release_date') >= '20230825' ) {
	$arrM = array( '202309', '20230825' );

} else if( $self->get('isp') == 11 && $self->get('release_date') >= '20230727' ) {
	$arrM = array( '202308', '20230725' );
} else if( $self->get('isp') != 11 && $self->get('release_date') >= '20230725' ) {
	$arrM = array( '202308', '20230725' );

} else if( $self->get('release_date') >= '20230627' ) {
	$arrM = array( '202307', '20230627' );
} else if( $self->get('release_date') >= '20230526' ) {
	$arrM = array( '202306', '20230526' );

} else if( $self->get('isp') == 11 && $self->get('release_date') >= '20230427' ) {
	$arrM = array( '202305', '20230427' );
} else if( $self->get('isp') != 11 && $self->get('release_date') >= '20230427' ) {
	$arrM = array( '202305', '20230427' );

} else if( $self->get('release_date') >= '20230328' ) {
	$arrM = array( '202304', '20230328' );

} else if( $self->get('isp') == 11 && $self->get('release_date') >= '20230228' ) {
	$arrM = array( '202303', '20230224' );
} else if( $self->get('isp') != 11 && $self->get('release_date') >= '20230224' ) {
	$arrM = array( '202303', '20230224' );

} else if( $self->get('release_date') >= '20230126' ) {
	$arrM = array( '202302', '20230126' );
}

$SmartyObj->assign( 'release_month', $arrM[0] );
$month_list = array( 'single' => array(), 'double' => array() );

if( $arrM[0] > 202101 )
	$month_list['single'] = getIndexData2( $list_mont, $arrM[1] );
$SmartyObj->assign( 'month_list', $month_list );


// 年運対応 /////////////////////////////////////////////////////////////////////////////////////

		$list_life = array( 'nx23_005', 'nx23_009', 'nx23_013', 'nx23_017', 'nx23_021', 'nx23_025' );
		$list_work = array( 'nx23_006', 'nx23_010', 'nx23_014', 'nx23_018', 'nx23_022', 'nx23_026' );
		$list_meet = array( 'nx23_007', 'nx23_011', 'nx23_015', 'nx23_019', 'nx23_023', 'nx23_027' );
		$list_love = array( 'nx23_008', 'nx23_012', 'nx23_016', 'nx23_020', 'nx23_024', 'nx23_028' );

		$SmartyObj->assign( 'list_life', getIndexData( $list_life ) );
		$SmartyObj->assign( 'list_meet', getIndexData( $list_meet ) );
		$SmartyObj->assign( 'list_work', getIndexData( $list_work ) );
		$SmartyObj->assign( 'list_love', getIndexData( $list_love ) );


// 他社年運対応 /////////////////////////////////////////////////////////////////////////////////////

// メニュー情報
$ExtraData = array(
	'101' => array( 'chara' => 'a', 
        'menu_title' => '大串ノリコ運勢占【あなたの2023年の絶対運命】恋/仕事/人生※完全版',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_zap/ogushi_zap/input/os5000a.html',
        'contents_id'   => 'ogushi_zap', 'img_name'   => 'zap_ogushi', 'teller_name'   => '大串ノリコ',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),


	'201' => array( 'chara' => 'k', 
        'menu_title' => '鏡リュウジが占う【2023年あなたの運勢】出会い/仕事/重要なテーマ',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_zap/complete_zap/input/cm5034a.html',
        'contents_id'   => 'complete_zap', 'img_name'   => 'zap_complete', 'teller_name'   => '鏡リュウジ',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'202' => array( 'chara' => 'k', 
        'menu_title' => 'この1年で付き合える？【2023年◆2人の恋現実SP】彼との全進展～結末',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_zap/complete_zap/input/cm6099a.html',
        'contents_id'   => 'complete_zap', 'img_name'   => 'zap_complete', 'teller_name'   => '鏡リュウジ',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'203' => array( 'chara' => 'k', 
        'menu_title' => '大いなる力で暴露≪2023年、変貌するあの人の本心≫欲/嫉妬/恋の対象',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_ccs/cc_coco/cc00094.html',
        'contents_id'   => 'cc_coco', 'img_name'   => 'cc_coco', 'teller_name'   => '叶ここ',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'204' => array( 'chara' => 'k', 
        'menu_title' => '木下レオン最新占【あなたに迫る2023◆全運命】愛結婚/職/財/転機DX',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_tel/tls_rzreon_tel/UkwTopRZ010200.html',
        'contents_id'   => 'tls_rzreon_tel', 'img_name'   => 'tel_rzreon', 'teller_name'   => '木下レオン',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'205' => array( 'chara' => 'k', 
        'menu_title' => '木下レオンが占う『2023年あなたの運勢』訪れる愛縁/金運/1年後の姿',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_tel/oekino_tel/UkwTopOE007100.html',
        'contents_id'   => 'oekino_tel', 'img_name'   => 'tel_rzreon', 'teller_name'   => '木下レオン',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'206' => array( 'chara' => 'k', 
        'menu_title' => '「レオン先生は当たる」著名人も太鼓判【あなたの2023年運】総合鑑定',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_tel/tls_rzreon_tel/UkwTopRZ011600.html',
        'contents_id'   => 'tls_rzreon_tel', 'img_name'   => 'tel_rzreon', 'teller_name'   => '木下レオン',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'207' => array( 'chara' => 'k', 
        'menu_title' => '2023年に実現!?≪あなたの仕事◆破格の大成功≫転換点/評価/地位/富',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_ccs/cc_fujiko3/ak00136.html',
        'contents_id'   => 'cc_fujiko3', 'img_name'   => 'cc_fujiko3', 'teller_name'   => '木村藤子',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'208' => array( 'chara' => 'k', 
        'menu_title' => '運命の出会い◆先取り透視≪2023年あなたを好きになる人≫姿/心/告白',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_ccs2/cc_fujiko2/input/kf01301.html',
        'contents_id'   => 'cc_fujiko3', 'img_name'   => 'cc_fujiko3', 'teller_name'   => '木村藤子',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'209' => array( 'chara' => 'k', 
        'menu_title' => '木村藤子が記す≪あなたの2023年◆運命透視録≫恋愛/仕事/お金/対人',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_ccs/cc_fujiko/fk02443.html',
        'contents_id'   => 'cc_fujiko3', 'img_name'   => 'cc_fujiko3', 'teller_name'   => '木村藤子',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'210' => array( 'chara' => 'k', 
        'menu_title' => '恋/職/財/対人⇒運命、軒並み大変革◆2023年、あなたに訪れる好機群',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_ccs/cc_kurenotori/kt00108.html',
        'contents_id'   => 'cc_kurenotori', 'img_name'   => 'cc_kurenotori', 'teller_name'   => '暮れの酉',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'211' => array( 'chara' => 'k', 
        'menu_title' => '木下レオン結婚占【2023年あなたを待つ出会い】相手の特徴/年内進展',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_tel/oekino_tel/UkwTopOE007400.html',
        'contents_id'   => 'oekino_tel', 'img_name'   => 'tel_rzreon', 'teller_name'   => '木下レオン',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221201',
	),
	'212' => array( 'chara' => 'k', 
        'menu_title' => '「2023年…私とあの人、付き合えますか？」2人の現状＆転機⇒恋行方',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_tel/tls_rzreon_tel/UkwTopRZ012900.html',
        'contents_id'   => 'tls_rzreon_tel', 'img_name'   => 'tel_rzreon', 'teller_name'   => '木下レオン',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221201',
	),
	'213' => array( 'chara' => 'k', 
        'menu_title' => '2023年版◆木下レオンが導く“運勢好転”鑑定【あなたの愛/人生/職】',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_rsa/leon_rsa/pre/life009',
        'contents_id'   => 'leon_rsa', 'img_name'   => 'tel_rzreon', 'teller_name'   => '木下レオン',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221201',
	),
	'214' => array( 'chara' => 'k', 
        'menu_title' => 'スピード婚/玉の輿も可【あなたの結婚◆2023】年内の出会い＆恋行方',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_tel/tls_rzreon_tel/UkwTopRZ012100.html',
        'contents_id'   => 'tls_rzreon_tel', 'img_name'   => 'tel_rzreon', 'teller_name'   => '木下レオン',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20991231',
	),


	'301' => array( 'chara' => 's', 
        'menu_title' => '【シウマ運勢占】2023年あなたの恋愛/仕事/結婚/転機◆大予言的中SP',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_zap/shiuma2_zap/input/iu5009a.html',
        'contents_id'   => 'shiuma2_zap', 'img_name'   => 'zap_shiuma2', 'teller_name'   => 'シウマ',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'302' => array( 'chara' => 's', 
        'menu_title' => '島田秀平が【あなたの2023年】をズバッと鑑定◆恋/結婚/仕事/対人/財',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_zap/shimada2_zap/input/gn5004a.html',
        'contents_id'   => 'shimada2_zap', 'img_name'   => 'zap_shimada2', 'teller_name'   => '島田秀平',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'303' => array( 'chara' => 's', 
        'menu_title' => '水晶玉子スペシャル鑑定【あなたの2023年◆全運命】恋/縁/仕事/好機',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_zap/suisho_zap/input/st5012a.html',
        'contents_id'   => 'suisho_zap', 'img_name'   => 'zap_suisho', 'teller_name'   => '水晶玉子',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'304' => array( 'chara' => 's', 
        'menu_title' => '水晶玉子Presents2023年あなたの全運命◆寿ゾーンで占う恋/仕事/財',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_zap/kotobuki_zap/input/kb5011a.html',
        'contents_id'   => 'kotobuki_zap', 'img_name'   => 'zap_kotobuki', 'teller_name'   => '水晶玉子',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'305' => array( 'chara' => 's', 
        'menu_title' => '【2023年の運勢】魚ちゃん超辛人生鑑定……出会/恋愛/金運/仕事/転機',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_ccs/cc_sakana/sk00011.html',
        'contents_id'   => 'cc_sakana', 'img_name'   => 'cc_sakana', 'teller_name'   => '魚ちゃん',
        'menu_price' => '2000',   'menu_discount' => '1500', 'release_date'  => '20221201',
	),



	'401' => array( 'chara' => 't', 
        'menu_title' => '斗弥が占うあの人との恋【2023年の二人の運命】気持ちの変化・1年後',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_zap/touwa_zap/input/tw6009a.html',
        'contents_id'   => 'touwa_zap', 'img_name'   => 'zap_touwa', 'teller_name'   => '斗弥',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),


/*	'501' => array( 'chara' => 'n', 
        'menu_title' => '',
        'menu_url'   => '',
        'contents_id'   => '', 'img_name'   => '', 'teller_name'   => '',
        'menu_price' => '',   'menu_discount' => '', 'release_date'  => '',
	),*/

	'601' => array( 'chara' => 'h', 
        'menu_title' => '停滞人生≪リセット⇒再生⇒急上昇≫2023年、あなたを変える三大転機',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_ccs/cc_hayatomo/hy00208.html',
        'contents_id'   => 'cc_hayatomo', 'img_name'   => 'cc_hayatomo', 'teller_name'   => 'はやとも',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'602' => array( 'chara' => 'h', 
        'menu_title' => '2023年◆この恋どうなる？～あの人の本音/決定的な進展/年末の二人',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_zap/purireina_zap/input/pu6003a.html',
        'contents_id'   => 'purireina_zap', 'img_name'   => 'zap_purireina', 'teller_name'   => 'ぷりあでぃす玲奈',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'603' => array( 'chara' => 'h', 
        'menu_title' => '上昇or低迷≪分岐は2023年≫あなたの運命を左右する⇒恋/職/財の転機',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_ccs/cc_houen/he00106.html',
        'contents_id'   => 'cc_houen', 'img_name'   => 'cc_houen', 'teller_name'   => '法演',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'604' => array( 'chara' => 'h', 
        'menu_title' => '星ひとみがあなたの【2023年の全運勢・出来事】を天星術でLOCK-ON！',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_zap/hoshihitomi_zap/input/th5037a.html',
        'contents_id'   => 'hoshihitomi_zap', 'img_name'   => 'zap_hoshihitomi', 'teller_name'   => '星ひとみ',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'605' => array( 'chara' => 'h', 
        'menu_title' => '星ひとみの片想い占≪二人の恋運命◆2023年決定版≫距離・変化・後半',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_zap/hoshihitomi_zap/input/th6061a.html',
        'contents_id'   => 'hoshihitomi_zap', 'img_name'   => 'zap_hoshihitomi', 'teller_name'   => '星ひとみ',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'606' => array( 'chara' => 'h', 
        'menu_title' => '星ひとみ【2023年◆あなたの光と影の総合運】人生/仕事/お金/恋/結婚',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_zap/tenseijutsu_zap/input/tj5012a.html',
        'contents_id'   => 'tenseijutsu_zap', 'img_name'   => 'zap_tenseijutsu', 'teller_name'   => '星ひとみ',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),


	'701' => array( 'chara' => 'm', 
        'menu_title' => '【予約超困難◆村野弘味の激レア鑑定】あなたに訪れる2023年/全現実',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_tel/tls_muranoh_tel/UkwTopMURA0005300.html',
        'contents_id'   => 'tls_muranoh_tel', 'img_name'   => 'tel_muranoh', 'teller_name'   => '村野弘味',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'702' => array( 'chara' => 'm', 
        'menu_title' => '【そろそろ婚活終わらせたい】2023年、私の前にイイ結婚相手現れる？',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_tel/tls_muranoh_tel/UkwTopMURA0006200.html',
        'contents_id'   => 'tls_muranoh_tel', 'img_name'   => 'tel_muranoh', 'teller_name'   => '村野弘味',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221201',
	),
	'703' => array( 'chara' => 'm', 
        'menu_title' => '2023年の私とあの人≪交際中⇔現状維持⇔疎遠≫本音/期待/今後の展開',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_tel/tls_muranoh_tel/UkwTopMURA0006600.html',
        'contents_id'   => 'tls_muranoh_tel', 'img_name'   => 'tel_muranoh', 'teller_name'   => '村野弘味',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20991111',
	),


	'801' => array( 'chara' => 'y', 
		'menu_title' => '生き霊は告げる【2023年、あなたの運命は●●】交遊/仕事/恋愛/お金',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_ccs/cc_yasu/ys00025.html',
		'contents_id'   => 'cc_yasu', 'img_name'   => 'cc_yasu', 'teller_name'   => 'ヤースー',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),


	'901' => array( 'chara' => 'r', 
        'menu_title' => '【LoveMeDoが占う◆あなたの2023】訪れる全運命と出来事、得る幸福SP',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_tel/tls_dmlove_tel/UkwTopDM010600.html',
        'contents_id'   => 'tls_dmlove_tel', 'img_name'   => 'tel_dmlove', 'teller_name'   => 'Lovemedo',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'902' => array( 'chara' => 'r', 
        'menu_title' => 'トートタロットが告げる[2023年あなたの運勢]訪れる宿命/幸せへの道',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_zap/thoth_zap/input/tt5008a.html',
        'contents_id'   => 'thoth_zap', 'img_name'   => 'zap_thoth', 'teller_name'   => 'レオン・サリラ',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221011',
	),
	'903' => array( 'chara' => 'r', 
        'menu_title' => 'いい人がいれば結婚したい【2023年内◆あなたが出会う異性】全プロフ',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_tel/tls_dmlove_tel/UkwTopDM010200.html',
        'contents_id'   => 'tls_dmlove_tel', 'img_name'   => 'tel_dmlove', 'teller_name'   => 'Lovemedo',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221201',
	),
	'904' => array( 'chara' => 'r', 
        'menu_title' => '2023年中にこの恋叶う？【2人に今後起こる運命】絆/彼の恋心/恋結末',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_rsa/lovemedo_rsa/pre/love046',
        'contents_id'   => 'lovemedo_rsa', 'img_name'   => 'tel_dmlove', 'teller_name'   => 'Lovemedo',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20221201',
	),
	'905' => array( 'chara' => 'r', 
        'menu_title' => '2023年【2人の恋運命】LoveMeDoがスバリ回答◇相手の想い/本命/交際',
        'menu_url'   => 'https://honkaku-uranai.jp/cp_tel/tls_dmlove_tel/UkwTopDM011100.html',
        'contents_id'   => 'tls_dmlove_tel', 'img_name'   => 'tel_dmlove', 'teller_name'   => 'Lovemedo',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20991111',
	),
);

$SmartyObj->assign( 'list_extra', getIndexData3( $ExtraData ) );
$list_extra2 = array( 'a' => 0, 'k' => 0, 's' => 0, 't' => 0, 'n' => 0, 'h' => 0, 'm' => 0, 'y' => 0, 'r' => 0, 'w' => 0 );
foreach( $ExtraData as $row ) {
	if( $row['release_date'] > $self->get('release_date') ) continue;
	$list_extra2[ $row['chara'] ] = 1;
}
$SmartyObj->assign( 'list_extra2', $list_extra2 );


?>
