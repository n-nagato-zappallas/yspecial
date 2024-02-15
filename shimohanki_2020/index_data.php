<?php

$list_life = array( 'li20_007', 'li20_009', 'li20_011', 'li20_013', 'li20_015' );
$list_love = array( 'li20_008', 'li20_010', 'li20_012', 'li20_014', 'li20_016' );
$list_mon1 = array( 'li20_017', 'li20_018', 'li20_019', 'li20_020', 'li20_021', 
					'li20_027', 'li20_028', 'li20_029', 'li20_030', 'li20_031', 
					'li20_037', 'li20_038', 'li20_039', 'li20_040', 'li20_041', 
					'li20_047', 'li20_048', 'li20_049', 'li20_050', 'li20_051', 
					'li20_057', 'li20_058', 'li20_059', 'li20_060', 'li20_061'  );
$list_mon2 = array( 'li20_022', 'li20_023', 'li20_024', 'li20_025', 'li20_026', 
					'li20_032', 'li20_033', 'li20_034', 'li20_035', 'li20_036', 
					'li20_042', 'li20_043', 'li20_044', 'li20_045', 'li20_046', 
					'li20_052', 'li20_053', 'li20_054', 'li20_055', 'li20_056', 
					'li20_062', 'li20_063', 'li20_064', 'li20_065', 'li20_066'  );


$SmartyObj->assign( 'list_life', getIndexData( $list_life ) );
$SmartyObj->assign( 'list_love', getIndexData( $list_love ) );

// 月運対応
$arrM = array( '202006', '20200616' );
if( $self->get('release_date') >= '20201026' ) {
	$arrM = array( '202011', '20201026' );
} else if( $self->get('release_date') >= '20200924' ) {
	$arrM = array( '202010', '20200924' );
} else if( $self->get('release_date') >= '20200827' ) {
	$arrM = array( '202009', '20200827' );
} else if( $self->get('release_date') >= '20200728' ) {
	$arrM = array( '202008', '20200730' );
} else if( $self->get('release_date') >= '20200625'
	|| $self->get('isp') == 40
	|| $self->get('isp') == 11 ) {
	$arrM = array( '202007', '20200625' );
}

$SmartyObj->assign( 'release_month', $arrM[0] );
$month_list = array( 'single' => array(), 'double' => array() );
if( $arrM[0] > 202006 ) {
	$month_list['single'] = getIndexData2( $list_mon1, $arrM[1] );
	$month_list['double'] = getIndexData2( $list_mon2, $arrM[1] );
}
$SmartyObj->assign( 'month_list', $month_list );





// メニュー情報


$ExtraData = array(
	'101' => array( 'chara' => 'a', 
		'menu_title'	=> '花鳥推命で紐解く【2020年下半期】恋・結婚/仕事/ターニングポイント', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/ray_stw/inp0030.html', 
		'contents_id'   => 'ray_stw', 'img_name'   => 'stw_ray', 'teller_name'   => '雨宮零', 
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20200501',
	),
	'102' => array( 'chara' => 'a', 
		'menu_title'	=> '“占界の頭脳”が驚的中【2020年後半～2021年前半】恋/仕事/人生25章', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/todai_rcm/inp079.html', 
		'contents_id'   => 'todai_rcm', 'img_name'   => 'rcm_todai', 'teller_name'   => '井上幸萃', 
		'menu_price' => '2000',   'menu_discount' => '1650', 'release_date'  => '20200501',
	),
	
	
	'201' => array( 'chara' => 'k', 
		'menu_title'	=> '鏡リュウジがお届け【2020年下半期の幸せ】恋愛/対人/財/試練/成功', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/complete_zap/input/cm5028a.html', 
		'contents_id'   => 'complete_zap', 'img_name'   => 'zap_complete', 'teller_name'   => '鏡リュウジ', 
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20200501',
	),
	'202' => array( 'chara' => 'k', 
		'menu_title'	=> '鏡リュウジがカードで紐解く《あなたの2020年後半の運命全貌》', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/bell/ksoul/free/inp/ks1312_inp.html', 
		'contents_id'   => 'ksoul_bel', 'img_name'   => 'bel_ksoul', 'teller_name'   => '鏡リュウジ', 
		'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20200501',
	),
	'203' => array( 'chara' => 'k', 
		'menu_title'	=> '鏡リュウジが星座に問う！　あなたの“2020年下半期の全運命”', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/bell/poseiza/free/inp/se1175_inp.html', 
		'contents_id'   => 'poseiza_bel', 'img_name'   => 'bel_poseiza', 'teller_name'   => '鏡リュウジ', 
		'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20200501',
	),
	'204' => array( 'chara' => 'k', 
		'menu_title'	=> '鏡リュウジが占う2020年後半のあなた～恋、仕事、財、人生、運命日', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/ryuji/inp147.html', 
		'contents_id'   => 'ryuji_rcm', 'img_name'   => 'rcm_ryuji', 'teller_name'   => '鏡リュウジ', 
		'menu_price' => '2000',   'menu_discount' => '1800', 'release_date'  => '20200501',
	),
	'205' => array( 'chara' => 'k', 
		'menu_title'	=> 'オガムカードが告げる【2020年あなたの下半期運】総合/恋/仕事/金運', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/ogham/html/inp/inp0018.html', 
		'contents_id'   => 'ogham_stw', 'img_name'   => 'stw_ogham', 'teller_name'   => '鏡リュウジ', 
		'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20200501',
	),
	'206' => array( 'chara' => 'k', 
		'menu_title'	=> '銀座の母が怖いほど当てる！　恋、仕事、人生。あなたの2020年下半期', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/ginzanohaha/html/inp/inp437.html', 
		'contents_id'   => 'ginzanohaha_rcm', 'img_name'   => 'rcm_ginzanohaha', 'teller_name'   => '銀座の母', 
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20200501',
	),
	'207' => array( 'chara' => 'k', 
		'menu_title'	=> '教えて銀座の母◆2020下期～2021上期どうなるあなたの恋/仕事/人生', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/ginza_rcm/inp151.html', 
		'contents_id'   => 'ginza_rcm', 'img_name'   => 'rcm_ginza', 'teller_name'   => '銀座の母', 
		'menu_price' => '2000',   'menu_discount' => '1800', 'release_date'  => '20200501',
	),
	'208' => array( 'chara' => 'k', 
		'menu_title'	=> '惑星集中【今一番頼りたい占術家・賢龍】2020年下半期の好機/恋/結婚', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/kenryuu/html/inp/inp0026.html', 
		'contents_id'   => 'kenryuu_stw', 'img_name'   => 'stw_kenryuu', 'teller_name'   => '賢龍', 
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20200501',
	),
	'209' => array( 'chara' => 'k', 
		'menu_title'	=> '鏡リュウジ15の予言◆2020年下半期＜恋/仕事/人生＞いつ何が起こる？', 
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/rcm/tsukiyomi_rcm/inp099.html', 
		'contents_id'   => 'tsukiyomi_rcm', 'img_name'   => 'rcm_tsukiyomi', 'teller_name'   => '鏡リュウジ', 
		'menu_price' => '2000',   'menu_discount' => '1650', 'release_date'  => '20200709',
	),
	'210' => array( 'chara' => 'k', 
		'menu_title'	=> '木村藤子が宣告≪2020年下半期◆あなたを待つ大転機≫予兆/恩恵/変化', 
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/ccs/cc_fujiko3/ak00074.html', 
		'contents_id'   => 'cc_fujiko3_ccs', 'img_name'   => 'ccs_cc_fujiko3', 'teller_name'   => '木村藤子', 
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20200709',
	),
	
	
	'301' => array( 'chara' => 's', 
		'menu_title'	=> '『伝説の占い師』新宿の母◆2020年下半期「全部丸わかり」総合鑑定', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/bell/polhaha/free/inp/ss1164_inp.html', 
		'contents_id'   => 'polhaha_bel', 'img_name'   => 'bel_polhaha', 'teller_name'   => '新宿の母', 
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20200501',
	),
	'302' => array( 'chara' => 's', 
		'menu_title'	=> '【2020年下半期を徹底的に占う】あなたに訪れる恋と結婚/仕事/好転機', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/ayano_stw/inp0024.html', 
		'contents_id'   => 'ayano_stw', 'img_name'   => 'stw_ayano', 'teller_name'   => '章月綾乃', 
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20200501',
	),
	'303' => array( 'chara' => 's', 
		'menu_title'	=> '水晶玉子◆渾身の総鑑定！【2020年後半、あなたを待つ運命】恋/縁/職', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/kotobuki_zap/input/kb5006a.html', 
		'contents_id'   => 'kotobuki_zap', 'img_name'   => 'zap_kotobuki', 'teller_name'   => '水晶玉子', 
		'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20200501',
	),
	'304' => array( 'chara' => 's', 
		'menu_title'	=> '水晶玉子が神業タロットで占う◆2020年後半あなたの運命～歓びと報酬', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/toriental_zap/input/ot3210a.html', 
		'contents_id'   => 'toriental_zap', 'img_name'   => 'zap_toriental', 'teller_name'   => '水晶玉子', 
		'menu_price' => '1200',   'menu_discount' => '1020', 'release_date'  => '20200501',
	),
	'305' => array( 'chara' => 's', 
		'menu_title'	=> '【水晶玉子幸運的中占】2020年あなたの下半期のすべて◆恋/仕事/結婚', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/fruits/input/fr00132.html', 
		'contents_id'   => 'fruits_stw', 'img_name'   => 'stw_fruits', 'teller_name'   => '水晶玉子', 
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20200501',
	),
	'306' => array( 'chara' => 's', 
		'menu_title'	=> 'ジーニーが贈る★2020年あなたの下半期運勢【超細密】恋/職/金/対人', 
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/stw/genie3/html/inp/inp0040.html', 
		'contents_id'   => 'genie3_stw', 'img_name'   => 'stw_genie3', 'teller_name'   => 'ジーニー', 
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20200709',
	),
	'307' => array( 'chara' => 's', 
		'menu_title'	=> '話題沸騰中の占い師・シウマが徹底鑑定◆2020年下半期あなたの運勢', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/shiuma_zap/input/um5003a.html', 
		'contents_id'   => 'shiuma_zap', 'img_name'   => 'zap_shiuma', 'teller_name'   => 'シウマ', 
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20200709',
	),
	'308' => array( 'chara' => 's', 
		'menu_title'	=> '2020下半期あなたに訪れるビッグイベント◆出会い/幸運/初体験を予言', 
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/com/cat/0074.html', 
		'contents_id'   => 'cat_com', 'img_name'   => 'com_cat', 'teller_name'   => 'ジューン澁澤', 
		'menu_price' => '1100',   'menu_discount' => '900', 'release_date'  => '20200709',
	),
	'309' => array( 'chara' => 's', 
		'menu_title'	=> '【2020年下半期】あなたを取り巻く運気の流れと注意すべき点', 
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/bell/postamako/free/inp/ms1107_inp.html', 
		'contents_id'   => 'postamako_bel', 'img_name'   => 'bel_postamako', 'teller_name'   => '水晶玉子', 
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20200709',
	),
	'310' => array( 'chara' => 's', 
		'menu_title'	=> '千田歌秋が明言【あなたの下半期2020】恋/結婚/仕事/お金の絶対転機', 
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/stw/sango/inp0051.html', 
		'contents_id'   => 'sango_stw', 'img_name'   => 'stw_sango', 'teller_name'   => '千田歌秋', 
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20200709',
	),

	
		/*'401' => array( 'chara' => 't', 
			'menu_title'	=> '鳥海流詳細鑑定【2019年下半期運】総合/恋愛/結婚/仕事/お金/転換期',
			'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/toriumi/inp0031.html',
	        'contents_id'   => 'toriumi_stw', 'img_name'   => 'stw_toriumi', 'teller_name'   => '鳥海伯萃',
	        'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20200513',
		),*/


	'501' => array( 'chara' => 'n', 
		'menu_title'	=> '月＋四柱推命……禁断占術で暴く！　2020下半期あなたの恋・財・仕事', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/geppou/inp151.html', 
		'contents_id'   => 'geppou_rcm', 'img_name'   => 'rcm_geppou', 'teller_name'   => '梨田真路', 
		'menu_price' => '1500',   'menu_discount' => '1100', 'release_date'  => '20200501',
	),
	
	
	'601' => array( 'chara' => 'h', 
		'menu_title'	=> '白猫タロットで占う2020年下半期◆あなたに訪れる幸運/解消する問題',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/shironeko_zap/input/nk3202a.html',
        'contents_id'   => 'shironeko_zap', 'img_name'   => 'zap_shironeko', 'teller_name'   => '濱口善幸',
        'menu_price' => '1200',   'menu_discount' => '1020', 'release_date'  => '20200501',
	),
	'602' => array( 'chara' => 'h', 
		'menu_title'	=> '藤森緑詳細鑑定【2020年下半期の運勢】総合/恋愛/仕事/金/結婚と生活', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/fjm_stw/inp0019.html', 
		'contents_id'   => 'fjm_stw', 'img_name'   => 'stw_fjm', 'teller_name'   => '藤森緑', 
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20200501',
	),
	'603' => array( 'chara' => 'h', 
		'menu_title'	=> 'この恋望みありますか？◆あなたのランク/裏本音/2020年末の関係=XX', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/hoshihitomi/inp214.html', 
		'contents_id'   => 'hoshihitomi_rcm', 'img_name'   => 'rcm_hoshihitomi', 'teller_name'   => '星ひとみ', 
		'menu_price' => '1200',   'menu_discount' => '950', 'release_date'  => '20200501',
	),
	'604' => array( 'chara' => 'h', 
		'menu_title'	=> '2020年下半期、あなたの人生何が起こる？◆恋/仕事/金運/人生/最高日', 
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/rcm/hoshi2_rcm/inp088.html', 
		'contents_id'   => 'hoshi2_rcm', 'img_name'   => 'rcm_hoshi2', 'teller_name'   => '星ひとみ', 
		'menu_price' => '1500',   'menu_discount' => '1350', 'release_date'  => '20200709',
	),
	'605' => array( 'chara' => 'h', 
		'menu_title'	=> '恋、結婚、仕事、運命事件……2020年下半期あなたの人生どう変わる？', 
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/rcm/hoshihitomi/inp215.html', 
		'contents_id'   => 'hoshihitomi_rcm', 'img_name'   => 'rcm_hoshihitomi', 'teller_name'   => '星ひとみ', 
		'menu_price' => '1000',   'menu_discount' => '800', 'release_date'  => '20200709',
	),


	'701' => array( 'chara' => 'm', 
		'menu_title'	=> '真木あかりが届ける【2020年下半期の幸せ】職/対人/財/恋/結婚/成功', 
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/stw/akr/html/inp/inp0035.html', 
		'contents_id'   => 'akr_stw', 'img_name'   => 'stw_akr', 'teller_name'   => '真木あかり', 
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20200709',
	),
	'702' => array( 'chara' => 'm', 
		'menu_title'	=> 'すべての恵みを手に入れて◆2020年下半期◆あなたの恋/結婚/職/人/財', 
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/stw/event/mita/html/inp/inp0084.html', 
		'contents_id'   => 'mita_stw', 'img_name'   => 'stw_mita', 'teller_name'   => '三田モニカ', 
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20200709',
	),
	'703' => array( 'chara' => 'm', 
		'menu_title'	=> 'もう迷わない【2020後半あなたの魂が求める生き方】目指す場所と使命', 
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/com/miw/4033.html', 
		'contents_id'   => 'miw_com', 'img_name'   => 'com_miw', 'teller_name'   => 'MIWA', 
		'menu_price' => '1100',   'menu_discount' => '900', 'release_date'  => '20200709',
	),
		/*
		'801' => array( 'chara' => 'y', 
			'menu_title'	=> '【●月●日激変】あなたに次訪れるチャンス/選択/幸運＋2019年下半期',
			'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/mcpad/igyama/UkwTopIG000300.html',
	        'contents_id'   => 'igyama_mcp', 'img_name'   => 'mcp_igyama', 'teller_name'   => '山口壹義',
	        'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20200513',
		),*/


	'901' => array( 'chara' => 'r', 
		'menu_title'	=> '魔術師のタロットで暴く！【2020年下半期あなたの運命】手にする幸福',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/thoth_zap/input/tt3211a.html',
        'contents_id'   => 'thoth_zap', 'img_name'   => 'zap_thoth', 'teller_name'   => 'レオン・サリラ',
        'menu_price' => '1200',   'menu_discount' => '960', 'release_date'  => '20200501',
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
