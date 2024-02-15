<?php

$list_life = array( 'un2019_0005', 'un2019_0009', 'un2019_0013', 'un2019_0017', 'un2019_0021', 'un2019_0025' );
$list_love = array( 'un2019_0006', 'un2019_0010', 'un2019_0014', 'un2019_0018', 'un2019_0022', 'un2019_0026' );
$list_meet = array( 'un2019_0007', 'un2019_0011', 'un2019_0015', 'un2019_0019', 'un2019_0023', 'un2019_0027' );
$list_work = array( 'un2019_0008', 'un2019_0012', 'un2019_0016', 'un2019_0020', 'un2019_0024', 'un2019_0028' );
$list_mont = array( 'un2019_0029', 'un2019_0030', 'un2019_0031', 'un2019_0032', 'un2019_0033', 'un2019_0034',
					'un2019_0035', 'un2019_0036', 'un2019_0037', 'un2019_0038', 'un2019_0039', 'un2019_0040',
					'un2019_0041', 'un2019_0042', 'un2019_0043', 'un2019_0044', 'un2019_0045', 'un2019_0046',
					'un2019_0047', 'un2019_0048', 'un2019_0049', 'un2019_0050', 'un2019_0051', 'un2019_0052' );



$SmartyObj->assign( 'list_life', getIndexData( $list_life ) );
$SmartyObj->assign( 'list_love', getIndexData( $list_love ) );
$SmartyObj->assign( 'list_meet', getIndexData( $list_meet ) );
$SmartyObj->assign( 'list_work', getIndexData( $list_work ) );

// 月運対応
$arrM = array( '201901', '20181130' );
if( $self->get('release_date') >= '20190425' ) {
	$arrM = array( '201905', '20190425' );
} else if( $self->get('release_date') >= '20190325' ) {
	$arrM = array( '201904', '20190325' );
} else if( $self->get('release_date') >= '20190225' ) {
	$arrM = array( '201903', '20190225' );
} else if( $self->get('release_date') >= '20190128' ) {
	$arrM = array( '201902', '20190128' );
}

$SmartyObj->assign( 'release_month', $arrM[0] );
$month_list = array( 'single' => array(), 'double' => array() );
if( $arrM[0] > 201901 )
	$month_list['single'] = getIndexData2( $list_mont, $arrM[1] );
$SmartyObj->assign( 'month_list', $month_list );


/**
 * 年運用。リリース日を迎えたもの全て表示
 */
function getIndexData( $arr = array() ) {
	global $self;
	$release_date = $self->get('release_date');
	$ret = array();
	foreach( $arr as $menu_id ) {
		$tmp =  new menuInfo( $menu_id, '' );
		$row = $tmp->get('menuData');
		if( $row['release_date'] > $release_date ) continue;
		$data = array( 'menu_id' => $menu_id );
		$min_title = array();
		foreach( $row as $key => $val ) {
			if( $key == 'release_date' && date_diff_local( $release_date, $val ) <= 30 )
				$data['new'] = '1';
			if( strpos( $key, 'min_title' ) !== false  ) {
				$arr_mt = explode( "_", $key );
				$min_title[ $arr_mt[0] ] = $val;
			} else {
				$data[$key] = $val;
			}
		}
		$data['menu_min_title'] = $min_title;
		$ret[] = $data;
	}
	
	return $ret;
}
/**
 * 月運用。指定リリース日以外のメニューは表示しない
 */
function getIndexData2( $arr = array(), $release_date ) {
	global $self;
	$ret = array();
	foreach( $arr as $menu_id ) {
		$tmp =  new menuInfo( $menu_id, '' );
		$row = $tmp->get('menuData');
		if( $row['release_date'] != $release_date ) continue;
		$data = array( 'menu_id' => $menu_id );
		$min_title = array();
		foreach( $row as $key => $val ) {
			if( strpos( $key, 'min_title' ) !== false  ) {
				$arr_mt = explode( "_", $key );
				$min_title[ $arr_mt[0] ] = $val;
			} else {
				$data[$key] = $val;
			}
		}
		$data['menu_min_title'] = $min_title;
		$ret[] = $data;
	}
	return $ret;
}





// メニュー情報


$ExtraData = array(
	'101' => array( 'chara' => 'a', 
		'menu_title'	=> '独身最後の大恋愛よ！【2019年に出逢うあなたの結婚相手】この人です',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/mkb/alysha/al21/index.html',
        'contents_id'   => 'alysha_mkb', 'img_name'   => 'mkb_alysha', 'teller_name'   => 'アリーシャ',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20181001',
	),
	'102' => array( 'chara' => 'a', 
		'menu_title'	=> '安斎流スペシャル鑑定【あなたの2019年/完全版】10大運命*幸福指南書',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/zap/anzai_zap/input/az5006a.html',
        'contents_id'   => 'anzai_zap', 'img_name'   => 'zap_anzai', 'teller_name'   => '安斎勝洋',
        'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20181227',
	),
	'103' => array( 'chara' => 'a', 
		'menu_title'	=> '大ヒット御礼◆予約争奪の禁断鑑定【2019年あなたの運命】特別祈祷占',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/zap/gal_zap/input/gl5002a.html',
        'contents_id'   => 'gal_zap', 'img_name'   => 'zap_gal', 'teller_name'   => '飯塚唯',
        'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20181227',
	),
	'104' => array( 'chara' => 'a', 
		'menu_title'	=> '恋、仕事、人生。2019年あなたの運命～2018年末＆2020年前半運付～',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/eve/inp075.html',
        'contents_id'   => 'eve_rcm', 'img_name'   => 'rcm_eve', 'teller_name'   => 'イヴルルド遙華',
        'menu_price' => '2500',   'menu_discount' => '1870', 'release_date'  => '20181001',
	),
	'105' => array( 'chara' => 'a', 
		'menu_title'	=> '私には全てがわかる！　上地一美が占う【2019年あなたの運勢】特別版',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/kiseki_zap/input/ki5024a.html',
        'contents_id'   => 'kiseki_zap', 'img_name'   => 'zap_kiseki', 'teller_name'   => '上地一美',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20181001',
	),
	'106' => array( 'chara' => 'a', 
		'menu_title'	=> '超開運！◇あなたの2019年【仕事/人間関係/訪れる新しい出逢いと恋】',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/mkb/kouzan/kz09/index.html',
        'contents_id'   => 'kouzan_mkb', 'img_name'   => 'mkb_kouzan', 'teller_name'   => '大清水高山',
        'menu_price' => '1800',   'menu_discount' => '1500', 'release_date'  => '20181227',
	),
	'107' => array( 'chara' => 'a', 
		'menu_title'	=> '相談者絶賛の的中霊占！【2019年あなたの運命】総合鑑定スペシャル版',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/zap/rehouryu_zap/input/oh5001a.html',
        'contents_id'   => 'rehouryu_zap', 'img_name'   => 'zap_rehouryu', 'teller_name'   => '沖田法瀧',
        'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20181227',
	),
	'108' => array( 'chara' => 'a', 
		'menu_title'	=> 'よみ仮名だけで暴く！あなたの2019年【恋/仕事/お金】特別総合版',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/oto_zap/input/oo5002a.html',
        'contents_id'   => 'oto_zap', 'img_name'   => 'zap_oto', 'teller_name'   => '小野十傳',
        'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20181001',
	),
	
	
	'201' => array( 'chara' => 'k', 
		'menu_title'	=> '鏡リュウジ“魂のカード”で全掌握！【2019年あなたが辿る運命詳細】',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/bell/ksoul/free/inp/ks1236_inp.html',
        'contents_id'   => 'ksoul_bel', 'img_name'   => 'bel_ksoul', 'teller_name'   => '鏡リュウジ',
        'menu_price' => '1000',   'menu_discount' => '800', 'release_date'  => '20181001',
	),
	'202' => array( 'chara' => 'k', 
		'menu_title'	=> '【2019年前半の全運命】あなたに何が起こる？　訪れる幸せと転機',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/bell/pokrune/free/inp/kr1132_inp.html',
        'contents_id'   => 'pokrune_bel', 'img_name'   => 'bel_pokrune', 'teller_name'   => '鏡リュウジ',
        'menu_price' => '1000',   'menu_discount' => '800', 'release_date'  => '20181001',
	),
	'203' => array( 'chara' => 'k', 
		'menu_title'	=> '日英超一流占術家が占う！【恋・結婚・仕事・お金】2019年運命の全貌',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/herbal/inp157.html',
        'contents_id'   => 'herbal_rcm', 'img_name'   => 'rcm_herbal', 'teller_name'   => '鏡リュウジ＋E.ブルーク',
        'menu_price' => '1500',   'menu_discount' => '1100', 'release_date'  => '20181001',
	),
	'204' => array( 'chara' => 'k', 
		'menu_title'	=> 'ルノルマンで的中【2019年に起こること】職/人間関係/心潤う愛と祝福',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/wine/47.html',
        'contents_id'   => 'wine_stw', 'img_name'   => 'stw_wine', 'teller_name'   => '鏡リュウジ＋伊泉龍一＋桜野カレン',
        'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20181001',
	),
	'205' => array( 'chara' => 'k', 
		'menu_title'	=> '2019年寿占【太陽が導くあなたの結婚】出会い/運命の相手の特徴/幸福',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/soleil/html/inp/inp0048.html',
        'contents_id'   => 'soleil_stw', 'img_name'   => 'stw_soleil', 'teller_name'   => '加賀宮萌',
        'menu_price' => '1800',   'menu_discount' => '1400', 'release_date'  => '20181001',
	),
	'206' => array( 'chara' => 'k', 
		'menu_title'	=> '◆恋成就祈願◆【恋人or現状維持？】2019年、二人の恋はこうなります',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/mkb/karin/ks60/index.html',
        'contents_id'   => 'karin_mkb', 'img_name'   => 'mkb_karin', 'teller_name'   => '花凛',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20181227',
	),
	'207' => array( 'chara' => 'k', 
		'menu_title'	=> 'これぞ「銀座の母」の的中鑑定！　全30項目・2019年あなたの運命',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/ginzanohaha/html/inp/inp319.html',
        'contents_id'   => 'ginzanohaha_rcm', 'img_name'   => 'rcm_ginzanohaha', 'teller_name'   => '銀座の母',
        'menu_price' => '2000',   'menu_discount' => '1600', 'release_date'  => '20181001',
	),
	'208' => array( 'chara' => 'k', 
		'menu_title'	=> '銀座の母がズバリ！　2019～2020前半あなたの全出来事・運命・18項目',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/ginsei/html/inp/inp164.html',
        'contents_id'   => 'ginsei_rcm', 'img_name'   => 'rcm_ginsei', 'teller_name'   => '銀座の母',
        'menu_price' => '1500',   'menu_discount' => '1100', 'release_date'  => '20181001',
	),
	'209' => array( 'chara' => 'k', 
		'menu_title'	=> '2019年～2020年前半【恋、仕事、財、人生】銀座の母・22の運命予言',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/rcm/ginza_rcm/inp108.html',
        'contents_id'   => 'ginza_rcm', 'img_name'   => 'rcm_ginza', 'teller_name'   => '銀座の母',
        'menu_price' => '2200',   'menu_discount' => '1980', 'release_date'  => '20181227',
	),
	'210' => array( 'chara' => 'k', 
		'menu_title'	=> '寿◆2019年結婚！　出逢って急速に惹かれ合う【あなたの運命の相手】',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/mkb/kunihisa2/kh20/index.html',
        'contents_id'   => 'kunihisa2_mkb', 'img_name'   => 'mkb_kunihisa2', 'teller_name'   => '訓久',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20181227',
	),
	'211' => array( 'chara' => 'k', 
		'menu_title'	=> 'ケントナカイ愛情占【金星で読む2019年全運命】恋/結婚/仕事/対人/財',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/vtona/inp0016.html',
        'contents_id'   => 'vtona_stw', 'img_name'   => 'stw_vtona', 'teller_name'   => 'ケントナカイ',
        'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20181001',
	),
	
	
	'301' => array( 'chara' => 's', 
		'menu_title'	=> '2019年運は“津田沼の坂井さん”に聞け！◆大ヒット御礼・招福運命占',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/mkb/sakai/sk32/index.html',
        'contents_id'   => 'sakai_mkb', 'img_name'   => 'mkb_sakai2', 'teller_name'   => '坂井さん',
        'menu_price' => '1800',   'menu_discount' => '1500', 'release_date'  => '20181227',
	),
	'302' => array( 'chara' => 's', 
		'menu_title'	=> '2019年はあなたにとってどんな年？　恋/仕事/財/対人/テーマ',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/sion/sr_sion/input/sr0034a.html',
        'contents_id'   => 'sr_sion', 'img_name'   => 'sion_sr', 'teller_name'   => '咲良',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20181001',
	),
	'303' => array( 'chara' => 's', 
		'menu_title'	=> 'ジーニーpresents★2019年あなたの運勢【極詳細】◆恋愛/仕事/金運',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/genie2/html/inp/inp086.html',
        'contents_id'   => 'genie2_stw', 'img_name'   => 'stw_genie2', 'teller_name'   => 'ジーニー',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20181001',
	),
	'304' => array( 'chara' => 's', 
		'menu_title'	=> 'あなたの2019年【感動予言】ついに訪れる幸せ/消える苦痛/手にする愛',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/com/aut/3234.html',
        'contents_id'   => 'aut_com', 'img_name'   => 'com_aut', 'teller_name'   => 'ジューン澁澤',
        'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20181001',
	),
	'305' => array( 'chara' => 's', 
		'menu_title'	=> '“英国式”的中鑑定【2019年、あなたの絶対運命】仕事/お金/ご縁/幸',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/rehayes_zap/input/rh5001a.html',
        'contents_id'   => 'rehayes_zap', 'img_name'   => 'zap_rehayes', 'teller_name'   => 'ジョン・ヘイズ',
        'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20181001',
	),
	'306' => array( 'chara' => 's', 
		'menu_title'	=> '【あなたの2019年運/恋愛・仕事・金運】新宿の母が徹底鑑定',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/bell/polhaha/free/inp/ss1123_inp.html',
        'contents_id'   => 'polhaha_bel', 'img_name'   => 'bel_polhaha', 'teller_name'   => '新宿の母',
        'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20181001',
	),
	'307' => array( 'chara' => 's', 
		'menu_title'	=> '2019年のすべてが判明◆水晶玉子の細密鑑定！【恋愛／結婚／仕事】',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/bell/postamako/free/inp/ms1061_inp.html',
        'contents_id'   => 'postamako_bel', 'img_name'   => 'bel_postamako', 'teller_name'   => '水晶玉子',
        'menu_price' => '1800',   'menu_discount' => '1500', 'release_date'  => '20181001',
	),
	'308' => array( 'chara' => 's', 
		'menu_title'	=> '水晶玉子が大占断◆2019年あなたの恋/結婚/職/対人/財/幸せのすべて',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/fruits/input/fr00070.html',
        'contents_id'   => 'fruits_stw', 'img_name'   => 'stw_fruits', 'teller_name'   => '水晶玉子',
        'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20181001',
	),
	'309' => array( 'chara' => 's', 
		'menu_title'	=> 'ステラタロットで占い尽くす！　2019年あなたが辿る運命全書',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/bell/postarot/free/inp/sk1344_inp.html',
        'contents_id'   => 'postarot_bel', 'img_name'   => 'bel_postarot', 'teller_name'   => 'ステラ薫子',
        'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20181001',
	),
	'310' => array( 'chara' => 's', 
		'menu_title'	=> '航海士ステラが導く《2019年の恋運命》関係/進展/愛の実り⇒結婚は？',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/elmo/html/inp/inp0023.html',
        'contents_id'   => 'elmo_stw', 'img_name'   => 'stw_elmo', 'teller_name'   => 'ステラ・ボンボヤージュ',
        'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20181001',
	),
	'311' => array( 'chara' => 's', 
		'menu_title'	=> '希望の灯が照らす【あなたの2019年】仕事とお金/対人/恋と結婚/幸福',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/elmo/html/inp/inp0024.html',
        'contents_id'   => 'elmo_stw', 'img_name'   => 'stw_elmo', 'teller_name'   => 'ステラ・ボンボヤージュ',
        'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20181001',
	),
	
	
	'401' => array( 'chara' => 't', 
		'menu_title'	=> '【あなたの2019年全運勢】神秘のカードが綴る◆愛/仕事/金運',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/bell/pokiriya/free/inp/ki1031_inp.html',
        'contents_id'   => 'pokiriya_bel', 'img_name'   => 'bel_pokiriya', 'teller_name'   => '高橋桐矢',
        'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20181001',
	),
	'402' => array( 'chara' => 't', 
		'menu_title'	=> '五縁で導く2019年の運勢【総合/チャンス/恋/仕事/財/開運】',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/sion/th_sion/input/th0025a.html',
        'contents_id'   => 'th_sion', 'img_name'   => 'sion_th', 'teller_name'   => '魂姫',
        'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20181001',
	),
	'403' => array( 'chara' => 't', 
		'menu_title'	=> '【2019年運命＋全生涯を知る60項】あなたの人生/結婚/仕事＋最晩年SP',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/tel/czchizu/UkwTopCZ009900.html',
        'contents_id'   => 'czchizu_tel', 'img_name'   => 'tel_czchizu', 'teller_name'   => '千珠',
        'menu_price' => '5800',   'menu_discount' => '5300', 'release_date'  => '20181227',
	),
	'404' => array( 'chara' => 't', 
		'menu_title'	=> '浅草橋の母がズバリ断言！◆2019年、あなたの全運命＆出来事◆10項目',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/tsuchiya_zap/input/tc5004a.html',
        'contents_id'   => 'tsuchiya_zap', 'img_name'   => 'zap_tsuchiya', 'teller_name'   => '土屋慶真',
        'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20181001',
	),
	'405' => array( 'chara' => 't', 
		'menu_title'	=> '鳥海流幸福占【2019年のあなた】総合/出会い/恋結婚/仕事/財/転換期',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/toriumi/inp0024.html',
        'contents_id'   => 'toriumi_stw', 'img_name'   => 'stw_toriumi', 'teller_name'   => '鳥海伯萃',
        'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20181001',
	),
	
	
	'501' => array( 'chara' => 'n', 
		'menu_title'	=> '生田目流姓名判断で占う◆あなたの2019年【恋/仕事/お金/強い味方】',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/zap/namatame_zap/input/nt5000a.html',
        'contents_id'   => 'namatame_zap', 'img_name'   => 'zap_namatame', 'teller_name'   => '生田目浩美．',
        'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20181227',
	),
	
	
	'601' => array( 'chara' => 'h', 
		'menu_title'	=> '2019年この恋15の運命～あの人の想い/変化/接近……訪れる結末は？',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/shikigami_rcm/inp046.html',
        'contents_id'   => 'shikigami_rcm', 'img_name'   => 'rcm_shikigami', 'teller_name'   => '橋本京明',
        'menu_price' => '1600',   'menu_discount' => '1440', 'release_date'  => '20181001',
	),
	'602' => array( 'chara' => 'h', 
		'menu_title'	=> '究極生まれ日運命学で見る◆あなたの2019年　恋/仕事/金/幸',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/sion/nh_sion/input/nh0070a.html',
        'contents_id'   => 'nh_sion', 'img_name'   => 'sion_nh', 'teller_name'   => 'はづき虹映',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20181001',
	),
	'603' => array( 'chara' => 'h', 
		'menu_title'	=> '2019年の二人の恋の行方は？　気持ちの変化⇒最終結末',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/sion/nh_sion/input/nh0071a.html',
        'contents_id'   => 'nh_sion', 'img_name'   => 'sion_nh', 'teller_name'   => 'はづき虹映',
        'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20181227',
	),
	'604' => array( 'chara' => 'h', 
		'menu_title'	=> '黄月占星術で大逆転【2019年あなたの黄金期】運命転機/恋事件/職/金',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/gold/inp0016.html',
        'contents_id'   => 'gold_stw', 'img_name'   => 'stw_gold', 'teller_name'   => '黄月',
        'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20181001',
	),
	'605' => array( 'chara' => 'h', 
		'menu_title'	=> '2019あなたが出会う【7の運命＋新展開】掴む愛/財/好機/夢/使命まで',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/com/hya/4267.html',
        'contents_id'   => 'hya_com', 'img_name'   => 'com_hya', 'teller_name'   => '林エリヤ',
        'menu_price' => '1300',   'menu_discount' => '1100', 'release_date'  => '20181227',
	),
	'606' => array( 'chara' => 'h', 
		'menu_title'	=> 'タロットが示す2019年、あなたの運勢　全般/仕事/恋愛/金運/対人',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/sion/fc_sion/input/fc0025a.html',
        'contents_id'   => 'fc_sion', 'img_name'   => 'sion_fc', 'teller_name'   => '藤森緑',
        'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20181001',
	),
	'607' => array( 'chara' => 'h', 
		'menu_title'	=> '法演が断言【あなたの2019年◆絶対運命】現状/恋/仕事/人生※完全版',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/houen_zap/input/hp5002a.html',
        'contents_id'   => 'houen_zap', 'img_name'   => 'zap_houen', 'teller_name'   => '法演',
        'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20181001',
	),
	'608' => array( 'chara' => 'h', 
		'menu_title'	=> '芸能人も自腹で並ぶ！【究極の2019年運】あなたの全運命と全出来事',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/hoshihitomi/inp192.html',
        'contents_id'   => 'hoshihitomi_rcm', 'img_name'   => 'rcm_hoshihitomi', 'teller_name'   => '星ひとみ',
        'menu_price' => '1500',   'menu_discount' => '1100', 'release_date'  => '20181001',
	),
	'609' => array( 'chara' => 'h', 
		'menu_title'	=> 'あの人の心の変化、急接近、1年後の関係……2019年この恋どうなる？',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/rcm/hoshihitomi/inp191.html',
        'contents_id'   => 'hoshihitomi_rcm', 'img_name'   => 'rcm_hoshihitomi', 'teller_name'   => '星ひとみ',
        'menu_price' => '1200',   'menu_discount' => '950', 'release_date'  => '20181227',
	),
	'610' => array( 'chara' => 'h', 
		'menu_title'	=> '2019年にあなたが手にするのは？　人生の意味から恋や仕事まで',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/sion/hk_sion/input/hk0031a.html',
        'contents_id'   => 'hk_sion', 'img_name'   => 'sion_hk', 'teller_name'   => '星乃叶',
        'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20181227',
	),
	
	
	'701' => array( 'chara' => 'm', 
		'menu_title'	=> '2019年のあなたの運勢【総合/恋愛/仕事/金運】聖杯が映す真実',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/sion/mg_sion/input/mg0027a.html',
        'contents_id'   => 'mg_sion', 'img_name'   => 'sion_mg', 'teller_name'   => 'マギーレオナ',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20181001',
	),
	'702' => array( 'chara' => 'm', 
		'menu_title'	=> 'マドモアゼル・愛【煌めく恒星が示す2019年の運勢】愛/職/金運/幸せ',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/aifix/html/inp/inp0025.html',
        'contents_id'   => 'aifix_stw', 'img_name'   => 'stw_aifix', 'teller_name'   => 'マドモアゼル・愛',
        'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20181001',
	),
	'703' => array( 'chara' => 'm', 
		'menu_title'	=> 'TV出演⇒指名過剰！【あなたの2019年◆運命鑑定書】恋愛/仕事/出逢い',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/mkb/miko/mk01/index.html',
        'contents_id'   => 'miko_mkb', 'img_name'   => 'mkb_miko', 'teller_name'   => '美胡',
        'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20181001',
	),
	'704' => array( 'chara' => 'm', 
		'menu_title'	=> '星座×血液型で大占断◆2019年あなたの恋/結婚/仕事/対人/財/幸せ',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/event/mita/html/inp/inp0047.html',
        'contents_id'   => 'mita_stw', 'img_name'   => 'stw_mita', 'teller_name'   => '三田モニカ',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20181001',
	),
	'705' => array( 'chara' => 'm', 
		'menu_title'	=> '2019年の運勢【恋/仕事/財/対人/転機/人生に与える影響】総合占',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/sion/mh_sion/input/mh0028a.html',
        'contents_id'   => 'mh_sion', 'img_name'   => 'sion_mh', 'teller_name'   => '宮崎ひろみ',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20181001',
	),
	'706' => array( 'chara' => 'm', 
		'menu_title'	=> '赤羽の母ならお見通し◆2019年あなたの運勢◆恋愛/仕事/金運',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/sion/ak_sion/input/ak0144a.html',
        'contents_id'   => 'ak_sion', 'img_name'   => 'sion_ak', 'teller_name'   => '村山佳寿巳',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20181001',
	),
	'707' => array( 'chara' => 'm', 
		'menu_title'	=> '2019年【才能開花/成功/築く財/対人/トラブル】仕事・金運細密鑑定',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/mona/html/inp/inp0042.html',
        'contents_id'   => 'mona_stw', 'img_name'   => 'stw_mona', 'teller_name'   => 'モナ・カサンドラ',
        'menu_price' => '1700',   'menu_discount' => '1400', 'release_date'  => '20181001',
	),
	'708' => array( 'chara' => 'm', 
		'menu_title'	=> '報われぬ恋、まだ想い続けるor諦めるべき？ 2019年は幸せになれる？',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/com/mor/8080.html',
        'contents_id'   => 'mor_com', 'img_name'   => 'com_mor', 'teller_name'   => '守田のり子',
        'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20181227',
	),
	
	
	'801' => array( 'chara' => 'y', 
		'menu_title'	=> '2019年◆完全録≪贅沢総合鑑定≫あなたが1年で得る/恋/婚期/仕事/金',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/bell/polovejuno/free/inp/jn1102_inp.html',
        'contents_id'   => 'polovejuno_bel', 'img_name'   => 'bel_polovejuno', 'teller_name'   => 'JUNO',
        'menu_price' => '1800',   'menu_discount' => '1600', 'release_date'  => '20181227',
	),
	
	
	'901' => array( 'chara' => 'r', 
		'menu_title'	=> '星が照らす【あなたの2019年総合運】出会い/恋/職/財/幸福◆超網羅',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/stw/uranus/input/ur00064.html',
        'contents_id'   => 'uranus_stw', 'img_name'   => 'stw_uranus', 'teller_name'   => 'ルネ・ヴァン・ダール・ワタナベ',
        'menu_price' => '2000',   'menu_discount' => '1600', 'release_date'  => '20181001',
	),
	'902' => array( 'chara' => 'r', 
		'menu_title'	=> '魔術師のカードが告げる【2019年あなたを待つ8の運命】恋/仕事/環境',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/thoth_zap/input/tt5003a.html',
        'contents_id'   => 'thoth_zap', 'img_name'   => 'zap_thoth', 'teller_name'   => 'レオン・サリラ',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20181001',
	),
	'903' => array( 'chara' => 'r', 
		'menu_title'	=> '必読◆超豪華10大的中予言【あなたの2019年◆恋愛/仕事/運命/危機】',
		'menu_url'	  => 'http://charge.fortune.yahoo.co.jp/zap/leon_zap/input/le5001a.html',
        'contents_id'   => 'leon_zap', 'img_name'   => 'zap_leon', 'teller_name'   => 'レオン・サリラ',
        'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20181227',
	),
	
);

function getIndexData3( $arr = array() ) {
	global $self, $YearData1;
	$release_date = $self->get('release_date');
	$ret = array();
	foreach( $arr as $menu_id => $row ) {
		if( $menu_id == $self->get('menu_id') ) continue;
		if( $row['release_date'] > $release_date ) continue;
		$data = array( 'menu_id' => $menu_id );
		$data = array( 'charano' => $menu_id );
		foreach( $row as $key => $val ) {
			if( $key == 'release_date' && date_diff_local( $release_date, $val ) <= 30 )
				$data['new'] = '1';
			$data[$key] = $val;
		}
		$ret[] = $data;
	}
	return $ret;
}
$SmartyObj->assign( 'list_extra', getIndexData3( $ExtraData ) );
$list_extra2 = array( 'a' => 0, 'k' => 0, 's' => 0, 't' => 0, 'n' => 0, 'h' => 0, 'm' => 0, 'y' => 0, 'r' => 0, 'w' => 0 );
foreach( $ExtraData as $row ) {
	if( $row['release_date'] > $self->get('release_date') ) continue;
	$list_extra2[ $row['chara'] ] = 1;
}
$SmartyObj->assign( 'list_extra2', $list_extra2 );















function setNextData() {
	global $self, $menuData, $YearData1, $YearData2;
	$arr = $menuData['person'] == 1 ?$YearData1 :$YearData2;
	$ret = array();
	foreach( $arr as $menu_id => $row ) {
		if( $menu_id == $self->get('menu_id') ) continue;
		$ret[] = array( 'menu_id' => $menu_id, 'menu_price' => $row['menu_price'], 'menu_discount' => $row['menu_discount'] );
	}
	return $ret;
}
// 年運ばら売り時に結果画面にて同一占い師のメニューを出したい
function setNextData2() {
	global $self, $menuData, $YearData1, $YearData2;
	$an = array( 'sh2018_0001' => 'sh2018_0002', 'sh2018_0002' => 'sh2018_0001', 
				 'sh2018_0003' => 'sh2018_0004', 'sh2018_0004' => 'sh2018_0003', 
				 'sh2018_0005' => 'sh2018_0006', 'sh2018_0006' => 'sh2018_0005', 
				 'sh2018_0007' => 'sh2018_0008', 'sh2018_0008' => 'sh2018_0007', 
				 'sh2018_0009' => 'sh2018_0010', 'sh2018_0010' => 'sh2018_0009',  );
	$arr = $menuData['person'] == 1 ?$YearData2 :$YearData1;
	$next_id = $an [ $self->get('menu_id') ];
	$ret = $arr[ $next_id ];
	$ret['menu_id'] = $next_id;
	return $ret;
}

?>
