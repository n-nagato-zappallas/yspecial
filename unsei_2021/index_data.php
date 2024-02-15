<?php
// 月運対応 /////////////////////////////////////////////////////////////////////////////////////
$list_mont = array( 'nv21_025', 'nv21_026', 'nv21_028', 'nv21_029', 'nv21_027', 
					'nv21_030', 'nv21_031', 'nv21_033', 'nv21_034', 'nv21_032', 
					'nv21_035', 'nv21_036', 'nv21_038', 'nv21_039', 'nv21_037', 
					'nv21_040', 'nv21_041', 'nv21_043', 'nv21_044', 'nv21_042',  );

$arrM = array( '202101', '20201201' );
$m = $self->get('menu_id');
if( $self->get('release_date') >= '20210426' && $self->get('isp') != 11 ) {
	$arrM = array( '202105', '20210426' );
} else if( $self->get('isp') == 11 && ( $self->get('release_date') >= '20210428' || 
	( $m=='nv21_040' || $m=='nv21_041' || $m=='nv21_042' || $m=='nv21_043' || $m=='nv21_044' )  )) {
	$arrM = array( '202105', '20210428' );

} else if( $self->get('release_date') >= '20210329' ) {
	$arrM = array( '202104', '20210329' );
} else if( $self->get('release_date') >= '20210222' ) {
	$arrM = array( '202103', '20210222' );
} else if( $self->get('release_date') >= '20210123' ) {
	$arrM = array( '202102', '20210123' );
}

$SmartyObj->assign( 'release_month', $arrM[0] );
$month_list = array( 'single' => array(), 'double' => array() );

if( $arrM[0] > 202101 )
	$month_list['single'] = getIndexData2( $list_mont, $arrM[1] );
$SmartyObj->assign( 'month_list', $month_list );


// 年運対応 /////////////////////////////////////////////////////////////////////////////////////

		$list_life = array( 'nv21_005', 'nv21_009', 'nv21_017', 'nv21_021', 'nv21_013' );
		$list_work = array( 'nv21_006', 'nv21_010', 'nv21_018', 'nv21_022', 'nv21_014' );
		$list_meet = array( 'nv21_007', 'nv21_011', 'nv21_019', 'nv21_023', 'nv21_015' );
		$list_love = array( 'nv21_008', 'nv21_012', 'nv21_020', 'nv21_024', 'nv21_016' );

		$SmartyObj->assign( 'list_life', getIndexData( $list_life ) );
		$SmartyObj->assign( 'list_meet', getIndexData( $list_meet ) );
		$SmartyObj->assign( 'list_work', getIndexData( $list_work ) );
		$SmartyObj->assign( 'list_love', getIndexData( $list_love ) );


// 他社年運対応 /////////////////////////////////////////////////////////////////////////////////////

// メニュー情報
$ExtraData = array(
	'101' => array( 'chara' => 'a', 
		'menu_title' => '東大式四柱推命5000字鑑定◆2021年あなたの恋/仕事/財/人生21の運命',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/rcm/todai_rcm/inp084.html',
		'contents_id'   => 'todai_rcm', 'img_name'   => 'rcm_todai', 'teller_name'   => '井上幸萃',
		'menu_price' => '2300',   'menu_discount' => '1850', 'release_date'  => '20200901',

	),
	'102' => array( 'chara' => 'a', 
		'menu_title' => '上地一美が完全透視！【2021年あなたの全運勢】豪華12大予言◆保存版',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/zap/uechi_zap/input/ue5002a.html',
		'contents_id'   => 'uechi_zap', 'img_name'   => 'zap_uechi', 'teller_name'   => '上地一美',
		'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20200901',
	),
	'103' => array( 'chara' => 'a', 
		'menu_title' => '驚愕！ 次々現実になる神業予言◆2021年あなたの運命～恋/仕事/幸せ',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/zap/iriya2_zap/input/iy5003a.html',
		'contents_id'   => 'iriya2_zap', 'img_name'   => 'zap_iriya2', 'teller_name'   => 'イリヤ',
		'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20201221',
	),
	
	'201' => array( 'chara' => 'k', 
		'menu_title' => '鏡リュウジの超細密鑑定◆2021年、あなたの職/対人/お金/恋愛/成功',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/zap/complete_zap/input/cm5029a.html',
		'contents_id'   => 'complete_zap', 'img_name'   => 'zap_complete', 'teller_name'   => '鏡リュウジ',
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20200901',
	),
	'202' => array( 'chara' => 'k', 
		'menu_title' => '【これが知りたかった！】2021年の出来事がわかる“秘密のカード”',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/bell/ksoul/free/inp/ks1334_inp.html',
		'contents_id'   => 'ksoul_bel', 'img_name'   => 'bel_ksoul', 'teller_name'   => '鏡リュウジ',
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20200901',
	),
	'203' => array( 'chara' => 'k', 
		'menu_title' => 'オガムカードが大占断【2021年あなたの年運】総合/恋/結婚/仕事/金運',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/stw/ogham/html/inp/inp0025.html',
		'contents_id'   => 'ogham_stw', 'img_name'   => 'stw_ogham', 'teller_name'   => '鏡リュウジ',
		'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20200901',
	),
	'204' => array( 'chara' => 'k', 
		'menu_title' => '12ハウス全占断◆運命の「月」が告げる2021年～人生何がどう変わる？',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/rcm/tsukiyomi_rcm/inp108.html',
		'contents_id'   => 'tsukiyomi_rcm', 'img_name'   => 'rcm_tsukiyomi', 'teller_name'   => '鏡リュウジ',
		'menu_price' => '2000',   'menu_discount' => '1650', 'release_date'  => '20200901',
	),
	'205' => array( 'chara' => 'k', 
		'menu_title' => '2020年残り＋2022年前半も【鏡リュウジ責任編集】2021年あなたの運命',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/rcm/ryuji/inp153.html',
		'contents_id'   => 'ryuji_rcm', 'img_name'   => 'rcm_ryuji', 'teller_name'   => '鏡リュウジ',
		'menu_price' => '2000',   'menu_discount' => '1800', 'release_date'  => '20200901',
	),
	'206' => array( 'chara' => 'k', 
		'menu_title' => '日英超一流占術家が占う！【恋・結婚・仕事・お金】2021年運命の全貌',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/rcm/herbal/inp207.html',
		'contents_id'   => 'herbal_rcm', 'img_name'   => 'rcm_herbal', 'teller_name'   => '鏡リュウジ＋E.ブルーク',
		'menu_price' => '1500',   'menu_discount' => '1100', 'release_date'  => '20200901',
	),
	'207' => array( 'chara' => 'k', 
		'menu_title' => 'カードが示す輝く未来【2021年◆あなたの運勢】恋愛/人間関係/仕事',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/mkb/karinst/kt108/index.html',
		'contents_id'   => 'karinst_mkb', 'img_name'   => 'mkb_karinst', 'teller_name'   => '花凛',
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20200901',
	),
	'208' => array( 'chara' => 'k', 
		'menu_title' => 'これぞ「銀座の母」の的中鑑定！　全30項目・2021年あなたの運命',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/rcm/ginzanohaha/html/inp/inp439.html',
		'contents_id'   => 'ginzanohaha_rcm', 'img_name'   => 'rcm_ginzanohaha', 'teller_name'   => '銀座の母',
		'menu_price' => '2000',   'menu_discount' => '1600', 'release_date'  => '20200901',
	),
	'209' => array( 'chara' => 'k', 
		'menu_title' => '銀座の母がズバリ！　2021～2022前半あなたの全出来事・運命・18項目',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/rcm/ginsei/html/inp/inp214.html',
		'contents_id'   => 'ginsei_rcm', 'img_name'   => 'rcm_ginsei', 'teller_name'   => '銀座の母',
		'menu_price' => '1500',   'menu_discount' => '1100', 'release_date'  => '20200901',
	),
	'210' => array( 'chara' => 'k', 
		'menu_title' => '2021年～2022年前半【恋、仕事、財、人生】銀座の母・22の運命予言',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/rcm/ginza_rcm/inp162.html',
		'contents_id'   => 'ginza_rcm', 'img_name'   => 'rcm_ginza', 'teller_name'   => '銀座の母',
		'menu_price' => '2200',   'menu_discount' => '1980', 'release_date'  => '20200901',
	),
	'211' => array( 'chara' => 'k', 
		'menu_title' => '【願望成就】今を見極める占術家・賢龍が導く2021年◆好機/恋/結婚',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/stw/kenryuu/html/inp/inp0031.html',
		'contents_id'   => 'kenryuu_stw', 'img_name'   => 'stw_kenryuu', 'teller_name'   => '賢龍',
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20200901',
	),
	'212' => array( 'chara' => 'k', 
		'menu_title' => '【厳選】本当に知りたいことだけ教えてくれる～2021年～あなたの運勢',
		'menu_url'   => 'http://charge.fortune.yahoo.co.jp/bell/poseiza/free/inp/se1186_inp.html',
		'contents_id'   => 'poseiza_bel', 'img_name'   => 'bel_poseiza', 'teller_name'   => '鏡リュウジ',
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20201221',
	),
	'213' => array( 'chara' => 'k', 
		'menu_title' => '2021この恋どうなる？～あの人の本音と変化/決定的進展/年末のふたり',
		'menu_url'   => 'http://charge.fortune.yahoo.co.jp/rcm/ryuji/inp158.html',
		'contents_id'   => 'ryuji_rcm', 'img_name'   => 'rcm_ryuji', 'teller_name'   => '鏡リュウジ',
		'menu_price' => '1500',   'menu_discount' => '1350', 'release_date'  => '20201221',
	),
	'214' => array( 'chara' => 'k', 
		'menu_title' => '【運命解読書2021年版】藤子SP鑑定……人生/恋愛/仕事/金運/転機',
		'menu_url'   => 'http://charge.fortune.yahoo.co.jp/ccs/cc_fujiko/input/fk02308.html',
		'contents_id'   => 'cc_fujiko_ccs', 'img_name'   => 'ccs_cc_fujiko', 'teller_name'   => '木村藤子',
		'menu_price' => '2000',   'menu_discount' => '1600', 'release_date'  => '20201221',
	),
	
	
	'301' => array( 'chara' => 's', 
		'menu_title' => 'ジーニーが贈る★2021年あなたの運勢【極細密】恋/職/お金/対人関係',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/stw/genie3/html/inp/inp0043.html',
		'contents_id'   => 'genie3_stw', 'img_name'   => 'stw_genie3', 'teller_name'   => 'ジーニー',
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20200901',
	),
	'302' => array( 'chara' => 's', 
		'menu_title' => '2021年も“話題の占い師シウマ”に聞け！◆大ヒット御礼・幸福指南占',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/zap/shiuma_zap/input/um5006a.html',
		'contents_id'   => 'shiuma_zap', 'img_name'   => 'zap_shiuma', 'teller_name'   => 'シウマ',
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20200901',
	),
	'303' => array( 'chara' => 's', 
		'menu_title' => '【あなたの2021年を徹底的に占う】訪れる幸運/恋と結婚/仕事/好転機',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/stw/ayano_stw/inp0028.html',
		'contents_id'   => 'ayano_stw', 'img_name'   => 'stw_ayano', 'teller_name'   => '章月綾乃',
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20200901',
	),
	'304' => array( 'chara' => 's', 
		'menu_title' => '1年グラフ付◆新宿の母【超詳細鑑定】2021年、あなたに起こること',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/bell/polhaha/free/inp/ss1175_inp.html',
		'contents_id'   => 'polhaha_bel', 'img_name'   => 'bel_polhaha', 'teller_name'   => '新宿の母',
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20200901',
	),
	'305' => array( 'chara' => 's', 
		'menu_title' => '水晶玉子の寿ゾーン占【2021年あなたの幸福】恋愛/結婚/仕事/対人/財',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/zap/kotobuki_zap/input/kb5007a.html',
		'contents_id'   => 'kotobuki_zap', 'img_name'   => 'zap_kotobuki', 'teller_name'   => '水晶玉子',
		'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20200901',
	),
	'306' => array( 'chara' => 's', 
		'menu_title' => '水晶玉子がタロットで導く◆2021年あなたの運命～後悔しない歩み方',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/zap/toriental_zap/input/ot3213a.html',
		'contents_id'   => 'toriental_zap', 'img_name'   => 'zap_toriental', 'teller_name'   => '水晶玉子',
		'menu_price' => '1200',   'menu_discount' => '1020', 'release_date'  => '20200901',
	),
	'307' => array( 'chara' => 's', 
		'menu_title' => '【2021年のあなた】水晶玉子が完読！⇒恋/結婚/仕事/対人/財/幸せ',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/stw/fruits/input/fr00140.html',
		'contents_id'   => 'fruits_stw', 'img_name'   => 'stw_fruits', 'teller_name'   => '水晶玉子',
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20200901',
	),
	'308' => array( 'chara' => 's', 
		'menu_title' => '魂の雫から視える未来◆2021年あなたに起こる出来事/恋/仕事/転機/財',
		'menu_url'   => 'http://charge.fortune.yahoo.co.jp/bell/potadasuke/free/inp/td1007_inp.html',
		'contents_id'   => 'potadasuke_bel', 'img_name'   => 'bel_potadasuke', 'teller_name'   => '佐藤ただすけ',
		'menu_price' => '1600',   'menu_discount' => '1500', 'release_date'  => '20201221',
	),
	'309' => array( 'chara' => 's', 
		'menu_title' => 'あなたが主役の1年よ【恋/結婚/仕事……】2021年運勢×起こる出来事',
		'menu_url'   => 'http://charge.fortune.yahoo.co.jp/mkb/tenko/tk33/index.html',
		'contents_id'   => 'tenko_mkb', 'img_name'   => 'mkb_tenko', 'teller_name'   => '里村天胡',
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20201221',
	),
	
	
	/*'401' => array( 'chara' => 't', 
		'menu_title' => '',
		'menu_url'   => '',
		'contents_id'   => '', 'img_name'   => '', 'teller_name'   => '',
		'menu_price' => '',   'menu_discount' => '', 'release_date'  => '20200901',
	),
	'402' => array( 'chara' => 't', 
		'menu_title' => '',
		'menu_url'   => '',
		'contents_id'   => '', 'img_name'   => '', 'teller_name'   => '',
		'menu_price' => '',   'menu_discount' => '', 'release_date'  => '20200901',
	),
	
	'501' => array( 'chara' => 'n', 
		'menu_title' => '',
		'menu_url'   => '',
		'contents_id'   => '', 'img_name'   => '', 'teller_name'   => '',
		'menu_price' => '',   'menu_discount' => '', 'release_date'  => '20200901',
	),*/
	
	
	'601' => array( 'chara' => 'h', 
		'menu_title' => '白猫が占う2021年◆あなたに届く幸せ/転機となる出来事/さらなる飛躍',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/zap/shironeko_zap/input/nk3204a.html',
		'contents_id'   => 'shironeko_zap', 'img_name'   => 'zap_shironeko', 'teller_name'   => '濱口善幸',
		'menu_price' => '1200',   'menu_discount' => '1020', 'release_date'  => '20200901',
	),
	'602' => array( 'chara' => 'h', 
		'menu_title' => '藤森緑詳細鑑定【2021年あなたの運勢】総合/恋愛/仕事/金/結婚と生活',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/stw/fjm_stw/inp0027.html',
		'contents_id'   => 'fjm_stw', 'img_name'   => 'stw_fjm', 'teller_name'   => '藤森緑',
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20200901',
	),
	'603' => array( 'chara' => 'h', 
		'menu_title' => '星ひとみ渾身占◆あなたの2021年全運命/全出来事～恋/出逢い/仕事/財',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/rcm/hoshihitomi/inp229.html',
		'contents_id'   => 'hoshihitomi_rcm', 'img_name'   => 'rcm_hoshihitomi', 'teller_name'   => '星ひとみ',
		'menu_price' => '1500',   'menu_discount' => '1100', 'release_date'  => '20200901',
	),
	'604' => array( 'chara' => 'h', 
		'menu_title' => '2021あなたの運命【用意されたシナリオ～感動結末】林エリヤ渾身鑑定',
		'menu_url'   => 'http://charge.fortune.yahoo.co.jp/com/hya/4370.html',
		'contents_id'   => 'hya_com', 'img_name'   => 'com_hya', 'teller_name'   => '林エリヤ',
		'menu_price' => '1000',   'menu_discount' => '800', 'release_date'  => '20201221',
	),
	'605' => array( 'chara' => 'h', 
		'menu_title' => 'あの人の心の変化、急接近、1年後の関係……2021年この恋どうなる？',
		'menu_url'   => 'http://charge.fortune.yahoo.co.jp/rcm/hoshihitomi/inp231.html',
		'contents_id'   => 'hoshihitomi_rcm', 'img_name'   => 'rcm_hoshihitomi', 'teller_name'   => '星ひとみ',
		'menu_price' => '1200',   'menu_discount' => '950', 'release_date'  => '20201221',
	),
	'606' => array( 'chara' => 'h', 
		'menu_title' => '2021～2022年前半、あなたの運勢豪華16項目～恋/仕事/財/出逢い/人生',
		'menu_url'   => 'http://charge.fortune.yahoo.co.jp/rcm/hoshi2_rcm/inp093.html',
		'contents_id'   => 'hoshi2_rcm', 'img_name'   => 'rcm_hoshi2', 'teller_name'   => '星ひとみ',
		'menu_price' => '2200',   'menu_discount' => '1980', 'release_date'  => '20201221',
	),
	
	
	'701' => array( 'chara' => 'm', 
		'menu_title' => 'マーク・矢崎が的中【あなたの2021年◆運勢】恋/結婚/仕事/対人/お金',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/stw/mark_stw/inp0017.html',
		'contents_id'   => 'mark_stw', 'img_name'   => 'stw_mark', 'teller_name'   => 'マーク・矢崎',
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20200901',
	),
	'702' => array( 'chara' => 'm', 
		'menu_title' => '真木あかり【Heartfelt Tarot】で読み解く「2021年のあなた」全運命',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/stw/akr2/html/inp/inp0019.html',
		'contents_id'   => 'akr2_stw', 'img_name'   => 'stw_akr2', 'teller_name'   => '真木あかり',
		'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20200901',
	),
	'703' => array( 'chara' => 'm', 
		'menu_title' => '本物の占術家が読み解く【2021年全運勢】総合/恋愛/結婚/仕事/豊かさ',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/stw/marie_stw/inp0021.html',
		'contents_id'   => 'marie_stw', 'img_name'   => 'stw_marie', 'teller_name'   => 'マリィ・プリマヴェラ',
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20200901',
	),
	'704' => array( 'chara' => 'm', 
		'menu_title' => '【2021年◆幸運辞典】人生鑑定SP決定版……恋と結婚/お金/対人/幸運',
		'menu_url'   => 'http://charge.fortune.yahoo.co.jp/ccs/cc_main2/mn00034.html',
		'contents_id'   => 'cc_main2_ccs', 'img_name'   => 'ccs_cc_main2', 'teller_name'   => '真印',
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20201221',
	),
	'705' => array( 'chara' => 'm', 
		'menu_title' => '【恋と運命2021年版】アイリスSP鑑定◆あなたの運命の恋とお金',
		'menu_url'   => 'http://charge.fortune.yahoo.co.jp/ccs/cc_airies3/ma00068.html',
		'contents_id'   => 'cc_airies3_ccs', 'img_name'   => 'ccs_cc_airies3', 'teller_name'   => 'マダムアイリス',
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20201221',
	),
	'706' => array( 'chara' => 'm', 
		'menu_title' => '【2021年◆片想い成就占】最後彼と恋人になれる？◆恋現状/転機/結論',
		'menu_url'   => 'http://charge.fortune.yahoo.co.jp/tri/rwmatuda/UkwTopRW001000.html',
		'contents_id'   => 'rwmatuda_tri', 'img_name'   => 'tri_rwmatuda', 'teller_name'   => 'マツダミヒロ',
		'menu_price' => '1800',   'menu_discount' => '1400', 'release_date'  => '20201221',
	),
	'707' => array( 'chara' => 'm', 
		'menu_title' => '※ココ※でしか占えない【2021年最新◆人生/愛/仕事】あなたの全運勢',
		'menu_url'   => 'http://charge.fortune.yahoo.co.jp/tri/rwmatuda/UkwTopRW001500.html',
		'contents_id'   => 'rwmatuda_tri', 'img_name'   => 'tri_rwmatuda', 'teller_name'   => 'マツダミヒロ',
		'menu_price' => '2000',   'menu_discount' => '1600', 'release_date'  => '20201221',
	),
	
	/*'801' => array( 'chara' => 'y', 
		'menu_title' => '',
		'menu_url'   => '',
		'contents_id'   => '', 'img_name'   => '', 'teller_name'   => '',
		'menu_price' => '',   'menu_discount' => '', 'release_date'  => '20200901',
	),*/
	
	'901' => array( 'chara' => 'r', 
		'menu_title' => '見抜く/告げる◆2021年あなたの全運命/恋/結婚/職/対人/財はどうなる',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/stw/lua3/html/inp/inp0023.html',
		'contents_id'   => 'lua3_stw', 'img_name'   => 'stw_lua3', 'teller_name'   => 'LUA',
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20200901',
	),
	'902' => array( 'chara' => 'r', 
		'menu_title' => '2021年あなたに訪れる◆新しい幸せ/不思議な出会い/苦悩からの解放',
		'menu_url'   => 'https://charge-fortune.yahoo.co.jp/zap/thoth_zap/input/tt3216a.html',
		'contents_id'   => 'thoth_zap', 'img_name'   => 'zap_thoth', 'teller_name'   => 'レオン・サリラ',
		'menu_price' => '1200',   'menu_discount' => '960', 'release_date'  => '20200901',
	),
	'903' => array( 'chara' => 'r', 
		'menu_title' => 'この1年で激変【2021年運命決定版】あなたの愛/仕事/転機/財◆全現実',
		'menu_url'   => 'http://charge.fortune.yahoo.co.jp/tel/dmlove/UkwTopDM003900.html',
		'contents_id'   => 'dmlove_tel', 'img_name'   => 'tel_dmlove', 'teller_name'   => 'LoveMeDo',
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20201221',
	),
	'904' => array( 'chara' => 'r', 
		'menu_title' => '【年運】2021年～運命の恋と結婚相手◆顔/性格/価値観',
		'menu_url'   => 'http://charge.fortune.yahoo.co.jp/ccs/cc_love/input/ld00187.html',
		'contents_id'   => 'cc_love_ccs', 'img_name'   => 'ccs_cc_love', 'teller_name'   => 'LoveMeDo',
		'menu_price' => '1000',   'menu_discount' => '800', 'release_date'  => '20201221',
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
