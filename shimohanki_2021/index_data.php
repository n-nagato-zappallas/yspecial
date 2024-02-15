<?php

$list_life = array( 'lj21_003', 'lj21_004', 'lj21_005', 'lj21_006', 'lj21_007', 'lj21_008' );
$list_love = array( 'lj21_003', 'lj21_004', 'lj21_005', 'lj21_006', 'lj21_007', 'lj21_008' );
$list_mon1 = array( 'lj21_009', 'lj21_010', 'lj21_011', 'lj21_012', 'lj21_013', 'lj21_014', 
					'lj21_015', 'lj21_016', 'lj21_017', 'lj21_018', 'lj21_019', 'lj21_020', 
					'lj21_021', 'lj21_022', 'lj21_023', 'lj21_024', 'lj21_025', 'lj21_026', 
					'lj21_027', 'lj21_028', 'lj21_029', 'lj21_030', 'lj21_031', 'lj21_032', 
					'lj21_033', 'lj21_034', 'lj21_035', 'lj21_036', 'lj21_037', 'lj21_038'   );
$list_mon2 = array( 'lj21_009', 'lj21_010', 'lj21_011', 'lj21_012', 'lj21_013', 'lj21_014', 
					'lj21_015', 'lj21_016', 'lj21_017', 'lj21_018', 'lj21_019', 'lj21_020', 
					'lj21_021', 'lj21_022', 'lj21_023', 'lj21_024', 'lj21_025', 'lj21_026', 
					'lj21_027', 'lj21_028', 'lj21_029', 'lj21_030', 'lj21_031', 'lj21_032', 
					'lj21_033', 'lj21_034', 'lj21_035', 'lj21_036', 'lj21_037', 'lj21_038'   );


$SmartyObj->assign( 'list_life', getIndexData( $list_life ) );
$SmartyObj->assign( 'list_love', getIndexData( $list_love ) );

// 月運対応
$arrM = array( '202106', '20210601' );


if( $self->get('isp') == 70 ) {
	// 11月運
	if( $self->get('release_date') >= '20211025' ) {
		$arrM = array( '202111', '20211025' );

	} 
	// 10月運
	else if( $self->get('release_date') >= '20210927' ) {
		$arrM = array( '202110', '20210927' );
		
	} 
	// 9月運
	else if( $self->get('release_date') >= '20210826' ) {
		$arrM = array( '202109', '20210826' );
	}
	// 8月運
	else if( $self->get('release_date') >= '20210726' ) {
		$arrM = array( '202108', '20210726' );
	} 
	// 7月運
	else if( $self->get('release_date') >= '20210624' ) {
		$arrM = array( '202107', '20210624' );
	}
} else if( $self->get('isp') == 10 || $self->get('isp') == 40 ) {
	// 11月運
	if( $self->get('release_date') >= '20211025' ) {
		$arrM = array( '202111', '20211025' );

	} 
	// 10月運
	else if( $self->get('release_date') >= '20210927' ) {
		$arrM = array( '202110', '20210927' );
		
	} 
	// 9月運
	else if( $self->get('release_date') >= '20210826' ) {
		$arrM = array( '202109', '20210826' );
	}
	// 8月運
	else if( $self->get('release_date') >= '20210726' ) {
		$arrM = array( '202108', '20210726' );
	} 
	// 7月運
	else if( $self->get('release_date') >= '20210628' ) {
		$arrM = array( '202107', '20210624' );
	}
} else if( $self->get('isp') == 11 ) {
	// 11月運
	if( $self->get('release_date') >= '20211028' ) {
		$arrM = array( '202111', '20211025' );

	} 
	// 10月運
	else if( $self->get('release_date') >= '20210927' ) {
		$arrM = array( '202110', '20210927' );
		
	} 
	// 9月運
	else if( $self->get('release_date') >= '20210826' ) {
		$arrM = array( '202109', '20210826' );
	}
	// 8月運
	else if( $self->get('release_date') >= '20210729' ) {
		$arrM = array( '202108', '20210726' );
	}
	// 7月運
	else if( $self->get('release_date') >= '20210629' ) {
		$arrM = array( '202107', '20210624' );
	}
}

$SmartyObj->assign( 'release_month', $arrM[0] );
$month_list = array( 'single' => array(), 'double' => array() );
if( $arrM[0] > 202106 ) {
	$month_list['single'] = getIndexData2( $list_mon1, $arrM[1] );
	$month_list['double'] = getIndexData2( $list_mon2, $arrM[1] );
}
$SmartyObj->assign( 'month_list', $month_list );





// メニュー情報
// 自社星さん

$HoshiData = array(
	'101' => array( 'category_no' => '22', 
		'menu_summary'	=> 'あなたはもっと輝けます！ 最適な働き方とは？', 
		'menu_title'	=> '天星術で判明！【あなたの仕事とお金】本当の才能/今後の転職と収入', 
		'menu_caption'	=> '【今の仕事や働き方に迷いや不安を抱えている方、必見！】今からでも遅くはありません。あなたの秘めた才能を生かす適職、仕事におけるターニングポイント、今どうすべきか……それらを知れば、あなたの仕事人生は今まで以上に輝きだすはずです。', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/hoshihitomi_zap/input/th5010a.html', 
		'contents_id'   => 'hoshihitomi_zap', 'teller_name'   => '星ひとみ', 
		'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20210601',
	),
	'102' => array( 'category_no' => '21', 
		'menu_summary'	=> 'これでもう逃さない！ あなた自身を変える転機', 
		'menu_title'	=> 'この鑑定で人生が180度激変!?　あなたの未来を変える【重要分岐点】', 
		'menu_caption'	=> 'あなたが今、歩んでいる人生……そこにはいくつもの転機があります。何気なく過ごしている日々の中で、その転機がその後の運命を変えてしまうことだってあるんです。あなたの未来がさらに輝かしいものになるよう、今後訪れる“重要な分岐点”をお伝えします！', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/hoshihitomi_zap/input/th5011a.html', 
		'contents_id'   => 'hoshihitomi_zap', 'teller_name'   => '星ひとみ', 
		'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20210601',
	),
	'103' => array( 'category_no' => '4', 
		'menu_summary'	=> '想い続けるあなたへ。本当に選ぶべき相手とは？', 
		'menu_title'	=> '私、幸せになれる？　今、選ぶべきなのは【あの人との愛or別の道？】', 
		'menu_caption'	=> '好きな相手のことを想っていたいけど、今この愛を貫き通すべきかどうか、迷っている方はご覧ください。この恋において、あなたがどうすれば“本当の幸せ”を掴むことができるのか、最善の選択を星ひとみがお教えします！', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/hoshihitomi_zap/input/th6014a.html', 
		'contents_id'   => 'hoshihitomi_zap', 'teller_name'   => '星ひとみ', 
		'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20210624',
	),
	'104' => array( 'category_no' => '27', 
		'menu_summary'	=> 'あなたが結婚へと進む、絶好のタイミングは？', 
		'menu_title'	=> '結婚の不安を解消！　3カ月後、あなたに訪れる出会い～1年後の幸せ', 
		'menu_caption'	=> '「本当に結婚できるのか不安……」そんな心境になるとどうしていいか分からなくなると思います。でもね、あなたの心が晴れるときは必ず来ます。だから、諦めないで。今日は、これからあなたに訪れる【3カ月後の出会い】と【1年後の結婚】の運命の流れを導きます！', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/hoshihitomi_zap/input/th5012a.html', 
		'contents_id'   => 'hoshihitomi_zap', 'teller_name'   => '星ひとみ', 
		'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20210726',
	),
	'105' => array( 'category_no' => '5', 
		'menu_summary'	=> '進まぬ恋に隠された、あの人の重要本音とは？', 
		'menu_title'	=> '狙いは一体、何？【あの人の中にあるあなたへの動かぬ本音】特別鑑定', 
		'menu_caption'	=> 'なかなか進展しないあの人との関係。「逢いたくなる？」「私のこと考えてる？」――今、あの人が動かなくても、あなたのことを欲してないとは限りませんよ。あの人が考えていること、あなたへの正直な本音を明らかにしていきましょう。', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/hoshihitomi_zap/input/th6015a.html', 
		'contents_id'   => 'hoshihitomi_zap', 'teller_name'   => '星ひとみ', 
		'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20210826',
	),
	'106' => array( 'category_no' => '16', 
		'menu_summary'	=> '恋人が欲しいor婚活中の方必見！', 
		'menu_title'	=> '確実に掴める！【あなたの恋人候補No.1はこの人】出会い/駆引き/交際', 
		'menu_caption'	=> 'なかなか出会いがない、出会うキッカケが掴めない……と悩んでいませんか？　困難な状況でも運命の相手を見つけるチャンスはあるんです！　すでに出会っているかもしれない、あなたの恋人候補の特徴や交際までの軌跡をズバリお伝えします！', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/hoshihitomi_zap/input/th5013a.html', 
		'contents_id'   => 'hoshihitomi_zap', 'teller_name'   => '星ひとみ', 
		'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20210927',
	),
	'107' => array( 'category_no' => '3', 
		'menu_summary'	=> 'あの人に愛される、特別な存在になりたい方へ', 
		'menu_title'	=> '解放されたい【苦しい片想い】あなたがあの人の唯一の存在になる方法', 
		'menu_caption'	=> 'あの人にとってずっと特別な存在でありたい。でも、もう想い続けるのに限界を感じてる……そんな想いを抱えているなら、その苦しみから解放しましょう。あの人の唯一の存在になるために、あなたに何が必要なのかを明らかにします！', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/zap/hoshihitomi_zap/input/th6016a.html', 
		'contents_id'   => 'hoshihitomi_zap', 'teller_name'   => '星ひとみ', 
		'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20211025',
	),

);

$SmartyObj->assign( 'hoshi1', getIndexData4( $HoshiData ) );

// 他社年運
$ExtraData = array(
	'101' => array( 'chara' => 'a', 
		'menu_title'	=> '“占界の頭脳”が驚的中【2021年後半～2022年前半】恋/仕事/人生25章', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/todai_rcm/inp089.html', 
		'contents_id'   => 'todai_rcm', 'img_name'   => 'rcm_todai', 'teller_name'   => '井上幸萃', 
		'menu_price' => '2000',   'menu_discount' => '1650', 'release_date'  => '20210531',
	),
	'102' => array( 'chara' => 'a', 
		'menu_title'	=> '童話占術で詳細究明【2021年あなたの下半期】恋/仕事/財/チャンス', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/stw/douwa_stw/menu/34.html', 
		'contents_id'   => 'douwa_stw', 'img_name'   => 'stw_douwa_stw', 'teller_name'   => '天野原みちる', 
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20210708',
	),
	
	
	'201' => array( 'chara' => 'k', 
		'menu_title'	=> '鏡リュウジ15の予言◆2021年下半期＜恋/仕事/人生＞いつ何が起こる？', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/tsukiyomi_rcm/inp122.html', 
		'contents_id'   => 'tsukiyomi_rcm', 'img_name'   => 'rcm_tsukiyomi', 'teller_name'   => '鏡リュウジ', 
		'menu_price' => '2000',   'menu_discount' => '1650', 'release_date'  => '20210524',
	),
	'202' => array( 'chara' => 'k', 
		'menu_title'	=> '鏡リュウジが占う、2021年下半期～来年3月【恋・仕事・人生】全運命', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/herbal/inp229.html', 
		'contents_id'   => 'herbal_rcm', 'img_name'   => 'rcm_herbal', 'teller_name'   => '鏡リュウジ＋E.ブルーク', 
		'menu_price' => '2000',   'menu_discount' => '1500', 'release_date'  => '20210524',
	),
	'203' => array( 'chara' => 'k', 
		'menu_title'	=> '鏡リュウジが占う2021年後半のあなた～恋、仕事、財、人生、運命日', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/ryuji/inp167.html', 
		'contents_id'   => 'ryuji_rcm', 'img_name'   => 'rcm_ryuji', 'teller_name'   => '鏡リュウジ', 
		'menu_price' => '2000',   'menu_discount' => '1800', 'release_date'  => '20210517',
	),
	'204' => array( 'chara' => 'k', 
		'menu_title'	=> '木下レオン◆帝王数【2021年あなたの下半期全網羅SP】恋愛/仕事/結婚', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/tel/rzreon/UkwTopRZ002200.html', 
		'contents_id'   => 'rzreon_tel', 'img_name'   => 'tel_rzreon', 'teller_name'   => '木下レオン', 
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20210510',
	),
	'205' => array( 'chara' => 'k', 
		'menu_title'	=> '教えて銀座の母◆2021下期～2022上期どうなるあなたの恋/仕事/人生', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/ginza_rcm/inp177.html', 
		'contents_id'   => 'ginza_rcm', 'img_name'   => 'rcm_ginza', 'teller_name'   => '銀座の母', 
		'menu_price' => '2000',   'menu_discount' => '1800', 'release_date'  => '20210527',
	),
	'206' => array( 'chara' => 'k', 
		'menu_title'	=> '銀座の母が怖いほど当てる！　恋、仕事、人生。あなたの2021年下半期', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/ginzanohaha/html/inp/inp447.html', 
		'contents_id'   => 'ginzanohaha_rcm', 'img_name'   => 'rcm_ginzanohaha', 'teller_name'   => '銀座の母', 
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20210520',
	),
	'207' => array( 'chara' => 'k', 
		'menu_title'	=> '銀座の母ズバッ【どうなる2021年下半期】あなたの愛・仕事・財・人生', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/ginsei/html/inp/inp227.html', 
		'contents_id'   => 'ginsei_rcm', 'img_name'   => 'rcm_ginsei', 'teller_name'   => '銀座の母', 
		'menu_price' => '1500',   'menu_discount' => '1100', 'release_date'  => '20210517',
	),
	'208' => array( 'chara' => 'k', 
		'menu_title'	=> '鏡リュウジ特別鑑定【あなたの2021年後半】詳細に紐解く運命◆全11項', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/zap/complete_zap/input/cm5031a.html', 
		'contents_id'   => 'complete_zap', 'img_name'   => 'complete_zap', 'teller_name'   => '鏡リュウジ', 
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20210708',
	),
	'209' => array( 'chara' => 'k', 
		'menu_title'	=> 'ソウルフルタロットで視る【2021年下半期運勢】あなたに何が起きる？', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/bell/ksoul/free/inp/ks1355_inp.html', 
		'contents_id'   => 'ksoul_bel', 'img_name'   => 'poc_ksoul', 'teller_name'   => '鏡リュウジ', 
		'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20210708',
	),
	'210' => array( 'chara' => 'k', 
		'menu_title'	=> 'あなただけに送る◆鏡リュウジが解き明かす【2021年下半期の運勢】', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/bell/poseiza/free/inp/se1199_inp.html', 
		'contents_id'   => 'poseiza_bel', 'img_name'   => 'poc_poseiza', 'teller_name'   => '鏡リュウジ', 
		'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20210708',
	),
	'211' => array( 'chara' => 'k', 
		'menu_title'	=> '【鏡リュウジが占う】2021年後半に起きる出来事◆全運命＆2022年以降', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/tel/fgryuji/UkwTopFG002400.html', 
		'contents_id'   => 'fgryuji_tel', 'img_name'   => 'tel_fgryuji', 'teller_name'   => '鏡リュウジ', 
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20210708',
	),
	'212' => array( 'chara' => 'k', 
		'menu_title'	=> '恋も仕事もこれからが本番！【あなたの2021年下半期】花凛の特別鑑定', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/mkb/karin/ks73/index.html', 
		'contents_id'   => 'karin_mkb', 'img_name'   => 'mkb_karin', 'teller_name'   => '花凛', 
		'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20210708',
	),
	'213' => array( 'chara' => 'k', 
		'menu_title'	=> '木下レオンが占う【2021年下半期】あなたに訪れる愛と運命/人生/お金', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/mcpad/oekino/UkwTopOE004400.html', 
		'contents_id'   => 'oekino_mcp', 'img_name'   => 'mcp_oekino', 'teller_name'   => '木下レオン', 
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20210708',
	),
	'214' => array( 'chara' => 'k', 
		'menu_title'	=> '木下レオンが占う【2021年下半期あなたとあの人の恋占】愛縁/転機/終', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/tel/rzreon/UkwTopRZ002500.html', 
		'contents_id'   => 'rzreon_tel', 'img_name'   => 'tel_rzreon', 'teller_name'   => '木下レオン', 
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20210708',
	),
	'215' => array( 'chara' => 'k', 
		'menu_title'	=> '小泉茉莉花詳細鑑定【2021年下半期運】総合/恋愛/仕事/金/結婚と生活', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/stw/marika_stw/inp0020.html', 
		'contents_id'   => 'marika_stw', 'img_name'   => 'stw_marika_stw', 'teller_name'   => '小泉茉莉花', 
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20210708',
	),
	
	
	'301' => array( 'chara' => 's', 
		'menu_title'	=> '【ジーニーからのメッセージ】2021年下半期運◆あなたの恋/仕事/対人', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/stw/genie3/html/inp/inp0051.html', 
		'contents_id'   => 'genie3_stw', 'img_name'   => 'stw_genie3', 'teller_name'   => 'ジーニー', 
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20210708',
	),
	'302' => array( 'chara' => 's', 
		'menu_title'	=> '2021後半あなたに起こる急展開◆今すぐ知っておくべき8の重大運命！', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/com/cat/0114.html', 
		'contents_id'   => 'cat_com', 'img_name'   => 'com_cat', 'teller_name'   => 'ジューン澁澤', 
		'menu_price' => '1100',   'menu_discount' => '900', 'release_date'  => '20210708',
	),
	'303' => array( 'chara' => 's', 
		'menu_title'	=> '守護天使が告げる奇跡【2021年下半期のあなた】運勢/恋/出会い/職/金', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/stw/sara_stw/menu/22.html', 
		'contents_id'   => 'sara_stw', 'img_name'   => 'stw_sara_stw', 'teller_name'   => 'ジュヌビエーヴ・沙羅', 
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20210708',
	),
	'304' => array( 'chara' => 's', 
		'menu_title'	=> '『伝説の占い師』新宿の母◆2021年下半期「丸わかり」総合運命鑑定', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/bell/polhaha/free/inp/ss1195_inp.html', 
		'contents_id'   => 'polhaha_bel', 'img_name'   => 'poc_polhaha', 'teller_name'   => '新宿の母', 
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20210708',
	),
	'305' => array( 'chara' => 's', 
		'menu_title'	=> '≪水晶玉子が占う≫2021年下半期◆あなたの運命⇒恋/お金/仕事/変化', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/zap/kotobuki_zap/input/kb5009a.html', 
		'contents_id'   => 'kotobuki_zap', 'img_name'   => 'kotobuki_zap', 'teller_name'   => '水晶玉子', 
		'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20210708',
	),
	'306' => array( 'chara' => 's', 
		'menu_title'	=> '水晶玉子がタロットで導く◆2021年後半あなたを待つ運命～手放す痛み', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/zap/toriental_zap/input/ot3216a.html', 
		'contents_id'   => 'toriental_zap', 'img_name'   => 'toriental_zap', 'teller_name'   => '水晶玉子', 
		'menu_price' => '1200',   'menu_discount' => '1020', 'release_date'  => '20210708',
	),
	'307' => array( 'chara' => 's', 
		'menu_title'	=> '2021年下半期（恋愛／結婚／仕事／財）あなたを取り巻く運気', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/bell/postamako/free/inp/ms1138_inp.html', 
		'contents_id'   => 'postamako_bel', 'img_name'   => 'poc_postamako', 'teller_name'   => '水晶玉子', 
		'menu_price' => '1000',   'menu_discount' => '900', 'release_date'  => '20210708',
	),
	'308' => array( 'chara' => 's', 
		'menu_title'	=> '【水晶玉子幸運引き寄せ占】2021年下半期「あなたの恋/結婚/仕事」', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/stw/fruits/input/fr00156.html', 
		'contents_id'   => 'fruits_stw', 'img_name'   => 'stw_fruits', 'teller_name'   => '水晶玉子', 
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20210708',
	),
	'309' => array( 'chara' => 's', 
		'menu_title'	=> '【2021年下半期を徹底解剖】あなたの運命に訪れる転機◆恋愛/仕事/金', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/tel/owskmiya/UkwTopOW002800.html', 
		'contents_id'   => 'owskmiya_tel', 'img_name'   => 'tel_owskmiya', 'teller_name'   => 'スカチャン・宮本和幸', 
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20210708',
	),

	
	'401' => array( 'chara' => 't', 
		'menu_title'	=> '驚愕的中◆式神が語る【2021年後半あなたの運命】訪れる終息と復活！',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/com/rik/5015.html',
        'contents_id'   => 'rik_com', 'img_name'   => 'com_rik', 'teller_name'   => '高橋圭也',
        'menu_price' => '1100',   'menu_discount' => '900', 'release_date'  => '20210520',
	),
	'402' => array( 'chara' => 't', 
		'menu_title'	=> '人生占い決定版30項【あなたの全運命＆重要転機X月X日】愛職財/年内', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/tel/event/fz2021sp/UkwTopFZ000100.html', 
		'contents_id'   => 'fz2021sp_tel', 'img_name'   => 'tel_fz2021sp', 'teller_name'   => '弦本將裕', 
		'menu_price' => '2200',   'menu_discount' => '1750', 'release_date'  => '20210708',
	),


	'501' => array( 'chara' => 'n', 
		'menu_title'	=> '月＋四柱推命……禁断占術で暴く！　2021下半期あなたの恋・財・仕事', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/geppou/inp163.html', 
		'contents_id'   => 'geppou_rcm', 'img_name'   => 'rcm_geppou', 'teller_name'   => '梨田真路', 
		'menu_price' => '1500',   'menu_discount' => '1100', 'release_date'  => '20210531',
	),
	
	
	'601' => array( 'chara' => 'h', 
		'menu_title'	=> '2021年下半期、あなたの人生何が起こる？◆恋/仕事/金運/人生/最高日',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/hoshi2_rcm/inp108.html',
        'contents_id'   => 'hoshi2_rcm', 'img_name'   => 'rcm_hoshi2', 'teller_name'   => '星ひとみ',
        'menu_price' => '1500',   'menu_discount' => '1350', 'release_date'  => '20210527',
	),
	'602' => array( 'chara' => 'h', 
		'menu_title'	=> '恋、結婚、仕事、運命事件……2021年下半期あなたの人生どう変わる？', 
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/rcm/hoshihitomi/inp264.html', 
		'contents_id'   => 'hoshihitomi_rcm', 'img_name'   => 'rcm_hoshihitomi', 'teller_name'   => '星ひとみ', 
		'menu_price' => '1000',   'menu_discount' => '800', 'release_date'  => '20210520',
	),
	'603' => array( 'chara' => 'h', 
		'menu_title'	=> '白猫タロットで占う◆2021年後半のあなたの運命～得る喜びと報酬', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/zap/shironeko_zap/input/nk3206a.html', 
		'contents_id'   => 'shironeko_zap', 'img_name'   => 'shironeko_zap', 'teller_name'   => '濱口善幸', 
		'menu_price' => '1200',   'menu_discount' => '1020', 'release_date'  => '20210708',
	),
	'604' => array( 'chara' => 'h', 
		'menu_title'	=> '2021年後半あなたに訪れる恋運命◆結婚への転機～パートナー候補まで', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/com/hya/4394.html', 
		'contents_id'   => 'hya_com', 'img_name'   => 'com_hya', 'teller_name'   => '林エリヤ', 
		'menu_price' => '1100',   'menu_discount' => '900', 'release_date'  => '20210708',
	),
	'605' => array( 'chara' => 'h', 
		'menu_title'	=> '【2021年下半期片想いSP占！】この恋、年末2人はどうなっている？', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/stw/bijou/html/inp/inp0026.html', 
		'contents_id'   => 'bijou_stw', 'img_name'   => 'stw_bijou', 'teller_name'   => 'Bijou', 
		'menu_price' => '1300',   'menu_discount' => '1100', 'release_date'  => '20210708',
	),
	'606' => array( 'chara' => 'h', 
		'menu_title'	=> '年内に絶対叶えたい恋【2021年下半期】あの人の本音/2人の転機/結末', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/mcpad/hrhirao/UkwTopHR003800.html', 
		'contents_id'   => 'hrhirao_mcp', 'img_name'   => 'mcp_hrhirao', 'teller_name'   => '平尾知子', 
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20210708',
	),
	'607' => array( 'chara' => 'h', 
		'menu_title'	=> '星ひとみ◆特別鑑定【2021年後半のあなたの恋・結婚】完全保存版', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/zap/hoshihitomi_zap/input/th5017a.html', 
		'contents_id'   => 'hoshihitomi_zap', 'img_name'   => 'hoshihitomi_zap', 'teller_name'   => '星ひとみ', 
		'menu_price' => '1500',   'menu_discount' => '1275', 'release_date'  => '20210708',
	),


	'701' => array( 'chara' => 'm', 
		'menu_title'	=> '真木あかりが読み解く◆2021年下半期⇒あなたに訪れる「幸せ人生」', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/stw/akr2/html/inp/inp0029.html', 
		'contents_id'   => 'akr2_stw', 'img_name'   => 'stw_akr2', 'teller_name'   => '真木あかり', 
		'menu_price' => '1200',   'menu_discount' => '1000', 'release_date'  => '20210708',
	),
	'702' => array( 'chara' => 'm', 
		'menu_title'	=> '2021年下半期【6ヶ月以内に出会い⇒交際成就占】相手の全特徴＆転機', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/tri/eymike/UkwTopEY002200.html', 
		'contents_id'   => 'eymike_tri', 'img_name'   => 'tri_eymike', 'teller_name'   => 'みけまゆみ', 
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20210708',
	),
	'703' => array( 'chara' => 'm', 
		'menu_title'	=> '星と血液型で占断◆2021年下半期運/恋/結婚/職/財/人/手にする恵み', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/stw/mita_stw/inp0025.html', 
		'contents_id'   => 'mita_stw', 'img_name'   => 'stw_mita_stw', 'teller_name'   => '三田モニカ', 
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20210708',
	),
	'704' => array( 'chara' => 'm', 
		'menu_title'	=> '2021年下半期◆村野弘味が占う【2人の宿縁と進展有無】彼の現状/結論', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/mcpad/murano/pre/life005.html', 
		'contents_id'   => 'murano_mcp', 'img_name'   => 'mcp_murano', 'teller_name'   => '村野弘味', 
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20210708',
	),


		/*'801' => array( 'chara' => 'y', 
			'menu_title'	=> '',
			'menu_url'	  => '',
	        'contents_id'   => '', 'img_name'   => '', 'teller_name'   => '',
	        'menu_price' => '',   'menu_discount' => '', 'release_date'  => '',
		),*/


	'901' => array( 'chara' => 'r', 
		'menu_title'	=> 'LoveMeDoが占う【2021年あなたの下半期運】恋愛/仕事/結婚◆全現実SP',
		'menu_url'	  => 'https://charge-fortune.yahoo.co.jp/tel/dmlove/UkwTopDM004700.html',
        'contents_id'   => 'dmlove_tel', 'img_name'   => 'tel_dmlove', 'teller_name'   => 'LoveMeDo',
        'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20210501',
	),
	'902' => array( 'chara' => 'r', 
		'menu_title'	=> 'LoveMeDoの恋占い【2021年後半⇒1年内】あの人との全現実×恋結末SP', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/tel/dmlove/UkwTopDM004900.html', 
		'contents_id'   => 'dmlove_tel', 'img_name'   => 'tel_dmlove', 'teller_name'   => 'LoveMeDo', 
		'menu_price' => '1500',   'menu_discount' => '1200', 'release_date'  => '20210708',
	),
	'903' => array( 'chara' => 'r', 
		'menu_title'	=> 'ルーンが告げる◆2021年下半期◆あなたの恋/結婚/職/対人/財のすべて', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/stw/lua3/html/inp/inp0031.html', 
		'contents_id'   => 'lua3_stw', 'img_name'   => 'stw_lua3', 'teller_name'   => 'LUA', 
		'menu_price' => '1500',   'menu_discount' => '1300', 'release_date'  => '20210708',
	),
	'904' => array( 'chara' => 'r', 
		'menu_title'	=> '魔術師のトートタロットが予言【2021年後半のあなたの運命】恋/財/職', 
		'menu_url'	=> 'https://charge-fortune.yahoo.co.jp/zap/thoth_zap/input/tt3221a.html', 
		'contents_id'   => 'thoth_zap', 'img_name'   => 'thoth_zap', 'teller_name'   => 'レオン・サリラ', 
		'menu_price' => '1200',   'menu_discount' => '960', 'release_date'  => '20210708',
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
