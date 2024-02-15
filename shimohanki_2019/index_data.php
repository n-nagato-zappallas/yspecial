<?php

$list_life = array( 'sh2019_0003', 'sh2019_0004', 'sh2019_0005', 'sh2019_0006', 'sh2019_0007' );
$list_mont = array( 'sh2019_0008', 'sh2019_0009', 'sh2019_0010', 'sh2019_0011', 'sh2019_0012',
					'sh2019_0013', 'sh2019_0014', 'sh2019_0015', 'sh2019_0016', 'sh2019_0017', 
					'sh2019_0018', 'sh2019_0019', 'sh2019_0020', 'sh2019_0021', 'sh2019_0022', 
					'sh2019_0023', 'sh2019_0024', 'sh2019_0025', 'sh2019_0026', 'sh2019_0027', 
					'sh2019_0028', 'sh2019_0029', 'sh2019_0030', 'sh2019_0031', 'sh2019_0032', );


$SmartyObj->assign( 'list_life', getIndexData( $list_life ) );

// 月運対応
$arrM = array( '201906', '20190604' );
if( $self->get('release_date') >= '20191024' ) {
	$arrM = array( '201911', '20191024' );
} else if( $self->get('release_date') >= '20190926' ) {
	$arrM = array( '201910', '20190926' );
} else if( $self->get('release_date') >= '20190829' ) {
	$arrM = array( '201909', '20190829' );
} else if( $self->get('release_date') >= '20190729' ) {
	$arrM = array( '201908', '20190729' );
} else if( $self->get('release_date') >= '20190627'
	|| $self->get('isp') == 10 ) {
	$arrM = array( '201907', '20190627' );
}

$SmartyObj->assign( 'release_month', $arrM[0] );
$month_list = array( 'single' => array(), 'double' => array() );
if( $arrM[0] > 201906 )
	$month_list['single'] = getIndexData2( $list_mont, $arrM[1] );
$SmartyObj->assign( 'month_list', $month_list );





// メニュー情報


$ExtraData = array(
	'101' => array( 'chara' => 'a', 
		'menu_title'	=> '安斎流スペシャル鑑定◆あなたの2019年下半期◆10大運命*幸福指南書',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/anzai_zap/input/az5007a.html',
        'contents_id'   => 'anzai_zap', 'img_name'   => 'zap_anzai', 'teller_name'   => '安斎勝洋',
        'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20190513',
	),
	'102' => array( 'chara' => 'a', 
		'menu_title'	=> '“占界の頭脳”が驚的中【2019年後半～2020年前半】恋/仕事/人生25章',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/rcm/todai_rcm/inp065.html',
        'contents_id'   => 'todai_rcm', 'img_name'   => 'rcm_todai', 'teller_name'   => '井上幸萃',
        'menu_price' => '2000',   'menu_discount' => '1650', 'release_date'  => '20190627',
	),
	'103' => array( 'chara' => 'a', 
		'menu_title'	=> '私には全てが見える！【上地一美が占う令和元年】2019年下半期の運勢',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/kiseki_zap/input/ki5025a.html',
        'contents_id'   => 'kiseki_zap', 'img_name'   => 'zap_kiseki', 'teller_name'   => '上地一美',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20190513',
	),
	'104' => array( 'chara' => 'a', 
		'menu_title'	=> 'よみ仮名だけで的中◆2019年あなたの下半期運【総合/恋/対人/仕事】',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/oto_zap/input/oo5003a.html',
        'contents_id'   => 'oto_zap', 'img_name'   => 'zap_oto', 'teller_name'   => '小野十傳',
        'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20190513',
	),
	
	'201' => array( 'chara' => 'k', 
		'menu_title'	=> '2019年下半期の光と影◆あなたの職、人間関係、恋・結婚、成功と幸せ',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/wkaori/html/inp/inp0020.html',
        'contents_id'   => 'wkaori_stw', 'img_name'   => 'stw_wkaori', 'teller_name'   => '香',
        'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20190513',
	),
	'202' => array( 'chara' => 'k', 
		'menu_title'	=> '令和元年◆鏡リュウジが贈る【2019年下半期のあなたの運勢】完全版',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/complete_zap/input/cm5025a.html',
        'contents_id'   => 'complete_zap', 'img_name'   => 'zap_complete', 'teller_name'   => '鏡リュウジ',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20190513',
	),
	'203' => array( 'chara' => 'k', 
		'menu_title'	=> '鏡リュウジ15の予言◆2019年下半期＜恋/仕事/人生＞いつ何が起こる？',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/tsukiyomi_rcm/inp071.html',
        'contents_id'   => 'tsukiyomi_rcm', 'img_name'   => 'rcm_tsukiyomi_rcm', 'teller_name'   => '鏡リュウジ',
        'menu_price' => '2000',   'menu_discount' => '1650', 'release_date'  => '20190513',
	),
	'204' => array( 'chara' => 'k', 
		'menu_title'	=> '鏡リュウジが占う、2019年下半期～来年3月【恋・仕事・人生】全運命',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/herbal/inp170.html',
        'contents_id'   => 'herbal_rcm', 'img_name'   => 'rcm_herbal', 'teller_name'   => '鏡リュウジ＋E.ブルーク',
        'menu_price' => '2000',   'menu_discount' => '1500', 'release_date'  => '20190513',
	),
	'205' => array( 'chara' => 'k', 
		'menu_title'	=> '何が待ってる？【あなたの2019年下半期】職/対人関係/溢れる愛と幸せ',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/wine/59.html',
        'contents_id'   => 'wine_stw', 'img_name'   => 'stw_wine', 'teller_name'   => '鏡リュウジ＋伊泉龍一＋桜野カレン',
        'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20190513',
	),
	'206' => array( 'chara' => 'k', 
		'menu_title'	=> '鏡リュウジが“魂のカード”で詳細に読み解く＜2019年後半の運命＞',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/bell/ksoul/free/inp/ks1263_inp.html',
        'contents_id'   => 'pokagami_bel', 'img_name'   => 'bel_pokagami', 'teller_name'   => '鏡リュウジ',
        'menu_price' => '1000',   'menu_discount' => '800', 'release_date'  => '20190627',
	),
	'207' => array( 'chara' => 'k', 
		'menu_title'	=> '※鏡リュウジの箴言※あなたの“2019年下半期”運命詳細◆細密鑑定録',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/bell/poseiza/free/inp/se1150_inp.html',
        'contents_id'   => 'pokagami_bel', 'img_name'   => 'bel_pokagami', 'teller_name'   => '鏡リュウジ',
        'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20190627',
	),
	'208' => array( 'chara' => 'k', 
		'menu_title'	=> '銀座の母が怖いほど当てる！　恋、仕事、人生。あなたの2019年下半期',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/ginzanohaha/html/inp/inp347.html',
        'contents_id'   => 'ginzanohaha_rcm', 'img_name'   => 'rcm_ginzanohaha', 'teller_name'   => '銀座の母',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20190513',
	),
	'209' => array( 'chara' => 'k', 
		'menu_title'	=> '銀座の母ズバッ【どうなる2019年下半期】あなたの愛・仕事・財・人生',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/ginsei/html/inp/inp174.html',
        'contents_id'   => 'ginsei_rcm', 'img_name'   => 'rcm_ginsei', 'teller_name'   => '銀座の母',
        'menu_price' => '1500',   'menu_discount' => '1100', 'release_date'  => '20190513',
	),
	'210' => array( 'chara' => 'k', 
		'menu_title'	=> '告白する⇔告白待つ◆2019年中にあの人とつきあえるのはどっち？',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/ginsei/html/inp/inp175.html',
        'contents_id'   => 'ginsei_rcm', 'img_name'   => 'rcm_ginsei', 'teller_name'   => '銀座の母',
        'menu_price' => '1000',   'menu_discount' => '800', 'release_date'  => '20190627',
	),
	'211' => array( 'chara' => 'k', 
		'menu_title'	=> '教えて銀座の母◆2019下期～2020上期どうなるあなたの恋/仕事/人生',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/ginza_rcm/inp124.html',
        'contents_id'   => 'ginza_rcm', 'img_name'   => 'rcm_ginza_rcm', 'teller_name'   => '銀座の母',
        'menu_price' => '2000',   'menu_discount' => '1800', 'release_date'  => '20190513',
	),
	'212' => array( 'chara' => 'k', 
		'menu_title'	=> 'ケントナカイが占う【金星が語る2019年下半期】恋/結婚/仕事/対人/財',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/vtona/inp0029.html',
        'contents_id'   => 'vtona_stw', 'img_name'   => 'stw_vtona', 'teller_name'   => 'ケントナカイ',
        'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20190513',
	),
	
	
	'301' => array( 'chara' => 's', 
		'menu_title'	=> 'ジーニーpresents★2019年下半期あなたの運勢【極詳細】恋/仕事/お金',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/genie3/html/inp/inp0026.html',
        'contents_id'   => 'genie3_stw', 'img_name'   => 'stw_genie3', 'teller_name'   => 'ジーニー',
        'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20190513',
	),
	'302' => array( 'chara' => 's', 
		'menu_title'	=> '『伝説の占い師』新宿の母が鑑定◆2019年下半期の運勢◆総合/恋/仕事',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/bell/polhaha/free/inp/ss1138_inp.html',
        'contents_id'   => 'poshaha_bel', 'img_name'   => 'bel_poshaha', 'teller_name'   => '新宿の母',
        'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20190627',
	),
	'303' => array( 'chara' => 's', 
		'menu_title'	=> '水晶玉子【2019年下半期◆令和元年あなたの全運命】恋／仕事／お金',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/kotobuki_zap/input/kb5003a.html',
        'contents_id'   => 'kotobuki_zap', 'img_name'   => 'zap_kotobuki', 'teller_name'   => '水晶玉子',
        'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20190513',
	),
	'304' => array( 'chara' => 's', 
		'menu_title'	=> '水晶玉子が当てる！【2019年下半期の幸せSP】恋/仕事/人間関係/成功',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/fruits/input/fr00089.html',
        'contents_id'   => 'fruits_stw', 'img_name'   => 'stw_fruits', 'teller_name'   => '水晶玉子',
        'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20190513',
	),
	'305' => array( 'chara' => 's', 
		'menu_title'	=> '2019年後半、あなたの恋はどう動く？　あの人と両想いになれる？',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/toriental_zap/input/ot4234a.html',
        'contents_id'   => 'toriental_zap', 'img_name'   => 'zap_toriental', 'teller_name'   => '水晶玉子',
        'menu_price' => '1200',   'menu_discount' => '1020', 'release_date'  => '20190627',
	),
	'306' => array( 'chara' => 's', 
		'menu_title'	=> '2019年下半期◆水晶玉子が令和の生き方提示！　あなたの総合運',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/bell/postamako/free/inp/ms1071_inp.html',
        'contents_id'   => 'postamako_bel', 'img_name'   => 'bel_postamako', 'teller_name'   => '水晶玉子',
        'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20190627',
	),
	'307' => array( 'chara' => 's', 
		'menu_title'	=> '千田歌秋が明言【あなたの下半期2019】恋/結婚/仕事/お金の絶対転機',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/sango/inp0025.html',
        'contents_id'   => 'sango_stw', 'img_name'   => 'stw_sango', 'teller_name'   => '千田歌秋',
        'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20190513',
	),

	
	'401' => array( 'chara' => 't', 
		'menu_title'	=> '鳥海流詳細鑑定【2019年下半期運】総合/恋愛/結婚/仕事/お金/転換期',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/toriumi/inp0031.html',
        'contents_id'   => 'toriumi_stw', 'img_name'   => 'stw_toriumi', 'teller_name'   => '鳥海伯萃',
        'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20190513',
	),

	
	'501' => array( 'chara' => 'n', 
		'menu_title'	=> '月＋四柱推命……禁断占術で暴く！　2019下半期あなたの恋・財・仕事',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/rcm/geppou/inp139.html',
        'contents_id'   => 'geppou_rcm', 'img_name'   => 'rcm_geppou', 'teller_name'   => '梨田真路',
        'menu_price' => '1500',   'menu_discount' => '1100', 'release_date'  => '20190627',
	),
		
	
	'601' => array( 'chara' => 'h', 
		'menu_title'	=> '2019年後半【あなたを待つ8つの運命！】恋/仕事/金/健康まで徹底予言',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/com/hya/4296.html',
        'contents_id'   => 'hayashielijah_com', 'img_name'   => 'com_hayashielijah', 'teller_name'   => '林エリヤ',
        'menu_price' => '1100',   'menu_discount' => '900', 'release_date'  => '20190627',
	),
	'602' => array( 'chara' => 'h', 
		'menu_title'	=> '幸せ報告殺到の黄月占星術で占う【2019年下半期運】恋模様/仕事/総合',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/gold/inp0028.html',
        'contents_id'   => 'gold_stw', 'img_name'   => 'stw_gold', 'teller_name'   => '黄月',
        'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20190513',
	),
	
	'603' => array( 'chara' => 'h', 
		'menu_title'	=> 'この恋望みありますか？◆あなたのランク/裏本音/2019年末の関係=XX',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/rcm/hoshihitomi/inp199.html',
        'contents_id'   => 'hoshihitomi_rcm', 'img_name'   => 'rcm_hoshihitomi', 'teller_name'   => '星ひとみ',
        'menu_price' => '1200',   'menu_discount' => '950', 'release_date'  => '20190627',
	),
	

	'701' => array( 'chara' => 'm', 
		'menu_title'	=> '星が告げる/運命が変わる◆2019年下半期◆あなたの恋/結婚/職/人/財',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/event/mita/html/inp/inp0060.html',
        'contents_id'   => 'mita_stw', 'img_name'   => 'stw_mita', 'teller_name'   => '三田モニカ',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20190513',
	),
	'702' => array( 'chara' => 'm', 
		'menu_title'	=> 'こんなにいいこと待っている！【2019年下半期運】恋/仕事/お金/結婚',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/minami/inp0019.html',
        'contents_id'   => 'minami_stw', 'img_name'   => 'stw_minami', 'teller_name'   => '三波ちぇこ',
        'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20190513',
	),
	
	
	'801' => array( 'chara' => 'y', 
		'menu_title'	=> '【●月●日激変】あなたに次訪れるチャンス/選択/幸運＋2019年下半期',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/mcpad/igyama/UkwTopIG000300.html',
        'contents_id'   => 'igyama_mcp', 'img_name'   => 'mcp_igyama', 'teller_name'   => '山口壹義',
        'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20190513',
	),
	'802' => array( 'chara' => 'y', 
		'menu_title'	=> '『1年後、私の隣に彼はいる？』現状/転機＋2人の2019年下半期恋模様',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/mcpad/igyama/UkwTopIG001400.html',
        'contents_id'   => 'igyama_mcp', 'img_name'   => 'mcp_igyama', 'teller_name'   => '山口壹義',
        'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20190513',
	),

	'901' => array( 'chara' => 'r', 
		'menu_title'	=> '魔術師のトートタロットが予言する【2019年後半◆あなたの全運命】',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/thoth_zap/input/tt5004a.html',
        'contents_id'   => 'thoth_zap', 'img_name'   => 'zap_thoth', 'teller_name'   => 'レオン・サリラ',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20190627',
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
