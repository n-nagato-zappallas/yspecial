<?php
/**
 * 完全無料スコア取得
 *    
 */
function get_free_score( $arrLogicCd ) {
	global $self, $menuData, $SmartyObj;
	
	// 日運スコア
	$data = array(
		'hoshihitomi_zap'	=> array( 'd1',  2, 1, 0, 4, 5, 7, 3, 8, 4, 6, 8, 5 ),
		'spshimada_zap'		=> array( 'e1',  2, 5, 6, 0, 1, 4, 7, 8, 3 ),
		'suisho_zap'		=> array( 'd1',  3, 2, 5, 4, 7, 7, 8, 6, 5, 0, 1, 4 ),
		'shiuma2_zap'		=> array( 'd1',  2, 4, 3, 5, 6, 7, 8, 0, 1 ),
		'fujiko_ccs'		=> array( 'e1',  7, 2, 6, 1, 8, 5, 4, 3, 0 ),
		'okai_zap'			=> array( 'd1',  6, 2, 0, 1, 8, 4, 7, 3, 5 ),
	);
	
	// 占断結果
	//   優先順位
	//   奇数日 spshimada_zap < hoshihitomi_zap < shiuma2_zap < suisho_zap < fujiko_ccs < okai_zap
	//   偶数日 spshimada_zap > hoshihitomi_zap > shiuma2_zap > suisho_zap > fujiko_ccs > okai_zap
	$arrL = array(
		$data['spshimada_zap'][		$arrLogicCd[2][ $data['spshimada_zap'][0] ] ],
		$data['hoshihitomi_zap'][	$arrLogicCd[1][ $data['hoshihitomi_zap'][0] ] ],
		$data['shiuma2_zap'][		$arrLogicCd[4][ $data['shiuma2_zap'][0] ] ],
		$data['suisho_zap'][		$arrLogicCd[3][ $data['suisho_zap'][0] ] ],
		$data['fujiko_ccs'][		$arrLogicCd[5][ $data['fujiko_ccs'][0] ] ],
		$data['okai_zap'][			$arrLogicCd[6][ $data['okai_zap'][0] ] ],
	);
	// 占い師IDを同じ順番で記憶しておく
	$arrO = array( 2, 1, 4, 3, 5, 6 );
	
	//奇数日
	if( $self->get('mday_now') %2 == 1 ) {
		$arrL = array_reverse( $arrL );
		$arrO = array_reverse( $arrO );
	}
	
	// 順位付け
	$good_id = 0;
	$bad_id  = 99;
	$good_pt = 0;
	$bad_pt  = 99;
	for( $i=0; $i<=5; $i++ ) {
		if( $good_pt < $arrL[$i] ) {
			$good_pt = $arrL[$i];
			$good_id = $i;
		}
		if( $bad_pt >= $arrL[$i] ) {
			$bad_pt = $arrL[$i];
			$bad_id = $i;
		}
	}
	
	return array( $arrO[ $good_id ], $arrO[ $bad_id ] );
}



/**
 * パック 星ひとみグラフ
 */
function get_pack_score( $t ) {
	global $self;
	
	// 年運月運用のスタート地点
	$start = getStart( $t, $self->get('birth_year_self') );
	
	// 月運 6～12月
	$logic_cd = array();
	for( $i = 6; $i <= 12; $i++ ){
		$now_month_cd = $i%12  +1;
		$getsuunn = $now_month_cd -$start +1;
		if( $getsuunn < 1 ) $getsuunn +=12;
		$logic_cd[$i] = $getsuunn;
	}
	
	// ポイント
	$a = array(  '', 2, 1, 0, 5, 6, 9, 3, 11, 4, 8, 10, 7 );
	$point = array();
	for( $j = 6; $j <= 12; $j++ ) {
		$point[$j] = $a[ $logic_cd[$j] ];
	}
	
	// ランク
	$month = array( 0, 0, 0);
	$val  = array( 0, 0, 0);
	for( $j = 6; $j <= 12; $j++ ) {
		if( $val[0] < $point[$j] ) {
			$val[2] = $val[1];
			$val[1] = $val[0];
			$val[0] = $point[$j];
			$month[2] = $month[1];
			$month[1] = $month[0];
			$month[0] = $j;
		}
		else if( $val[1] < $point[$j] ) {
			$val[2] = $val[1];
			$val[1] = $point[$j];
			$month[2] = $month[1];
			$month[1] = $j;
		}
		else if( $val[2] < $point[$j] ) {
			$val[2] = $point[$j];
			$month[2] = $j;
		}
	}
	$position = 1;
	for( $i = 1; $i <= 2; $i++ ) {
		if( $month[$i] < $month[0] ) $position++;
	}
	
	// テキスト
	$b = array(  '', 
'　この時期は、何をやってもしっくりこない、と感じるような出来事が多いかもしれませんね。何かをやろうとしても状況がそれを許さなかったり、ことごとく邪魔が入ったりと、気持ちだけが空回りして、じりじりと不安が募りやすくなります。そんな時は焦って無理に動くと大きなトラブルを呼び込んでしまいますから、言動は控えめに、慎重さを心がけてください。<br><br>　新しいことを始めるなら、ご自身のスキルアップや内面の充実につながるようなことを。',
'　試練のとき。それゆえ、物事が思うように進まず「自分はダメなんだ」と自信を失いかけてしまうかもしれませんが、気にしすぎないことです。不調はあくまでも一時的なもので、実は[%NAME_SELF%]が思うほど状況は悪くはないのです。<br><br>　この時期は力を蓄える時、と割り切って心静かに過ごしましょう。自己改善も良いのですが、「何もしない時間」をつくることも忘れずに。周囲との調和を乱さないよう控えめに行動することを心がけると、その後の運気に良い影響を与えてくれますよ。',
'　周辺がバタバタと慌ただしくなって、[%NAME_SELF%]も何かしなくてはとウズウズするかもしれませんが、何かを始めるのなら十分すぎるほどの計画と準備を。この時期はそのことだけに注力するくらいの気持ちで、表立った言動は控えましょう。<br><br>　また、[%NAME_SELF%]の意に反してトラブルに巻き込まれたり、面倒なことを押し付けられる可能性もあります。もしも問題に直面したら、うやむやにせず正面から向き合い、きっちり解決を。中途半端に関わると、後々トラブルの元を残すことになります。',
'　この時期は新しい流れに向かって進むのに最適な時期。[%NAME_SELF%]がやりたいと思っていることや、計画をしていることがあるなら、この期間にスタートさせましょう。うまく軌道に乗せることができるので、素晴らしい展開の幕が開きますよ。何事も恐れずにどんどんチャレンジしてください。<br><br>　人との出会いも増えて、あなたの人生を豊かで幸せにしてくれる人と親しくなるときです。誘いの声がかかったら、とにかく参加してみること。迷うならやってみることを選んでください。とにかく前に進むことが幸運に繋がります。',
'　この時期は、これまで取り組んできたことをしっかり軌道に乗せるときです。新しいチャンスを見つけていくのではなく、すでに[%NAME_SELF%]が手にしている物事を育てていく時期。未来にむけて計画を立て、それを実行していくといいでしょう。時間を有効に使うために、不要な物事をなくしていくといいですね。<br><br>　自分にプラスとならないと感じたら、そのことを早めに終わらせるようにしてください。一方、多くの情報が入手できるときでもあります。こちらも、要不要をチェックして、必要な情報や知識だけを活用するように。取捨選択の技術を身に着けて。',
'　好調な運気が訪れる、この時期。[%NAME_SELF%]の才能や能力がめきめきと伸びていき、いろいろな場面で活躍するでしょう。ただし、多くの物事に取り組むときではありません。目標を明確にして、理想の方向に向かって進んでいくべき時期。ここで迷っていると、方向性が定まらなくなるのでしっかり決断してくださいね。<br><br>　ただし、この時期は勢いがあるぶん、自分中心で物事を考えがちになる傾向が。突っ走ってしまわないように、周りにいる人たちの気持ちを察するように心掛けて。話し上手より聞き上手になることを意識するといいですよ。',
'　全体的に運気は上昇していますが、一時的に流れが停滞するのがこの時期。これは急がず、休息をとるようにしなさいということ。これまでのやり方を見直して、改善すべきところがあったら、この下半期のうちに修正しておきましょう。立ち止まって考えることで、見えなかった部分が見えてくるでしょう。<br><br>　この期間に軌道修正をしておくことで、さらに勢いを増して進んで行くことができます。突っ走るだけではなく、ペースダウンすることも大事だとわかるでしょう。また、心身のメンテナンスもこの期間にするのがおすすめ。リフレッシュがテーマです。',
'　この時期は、とてもいい運気が巡ってきます。願っていたことが現実となったり、周囲の人たちの信頼と信用を得ることができたり、すべてが順調に進んでいくでしょう。頭を悩ませていることや障害となっていたものが消えていくので、[%NAME_SELF%]の思い通りの展開が訪れるでしょう。<br><br>　とはいえ、調子に乗ってしまうと、状況が急変するのもこの下半期の運気の特徴。人から支えてもらっていることや、環境が整っているからだということを忘れずにいてください。努力をおこたらず、自分のためだけではなく、人のためにも動くことが大切でしょう。',
'　ついつい気持ちが弛んでしまうのが、この時期。好調に進んでいるときだからこそ、油断をしてしまうでしょう。何とかなるだろうと思って見過ごしていると、後に大きな問題に発展する可能性があります。小さな芽のうちに、問題はつんでおいたほうがいいでしょう。<br><br>　楽しい時間が過ごせるときですが、遊びに夢中になっていると足元をすくわれるので気をつけて。この期間にしっかりと自分を保ち、目標に向かって努力を続けて行けるかどうかが、これから先の流れに影響します。楽しみながらも、自分を律して冷静でいることが大切でしょう。',
'　以前ダメになったことがオッケーになるなど、やり直しの流れがやってくるときです。上手くいかなかったけれど、ずっと胸に引っかかっているような物事があるとしたら、再チャレンジするといいでしょう。人とのご縁も、疎遠になっていた人との交流がまた始まるかもしれません。<br><br>　行き詰まっていた物事の解決方法も、この時期に見つかるでしょう。いろいろな面で、気持ちがスッキリする出来事が起ります。ネガティブな感情や記憶を手放して、運気の波に乗って先に進んでくださいね。ここで留まっていると、自分の殻から抜け出すチャンスを逃してしまうでしょう。',
'　これまでの努力が実を結び、多くのものを手に入れるときです。特にお金や仕事に関わる出来事が好調で、嬉し出来事が起ります。この時期は、プライベートより仕事を優先して、できる限りのことをするといいでしょう。<br><br>　ただし、物事が結実するタイミングなので、新しいことに挑戦するのには向いていません。これまでの経験や持っている知識をいかせることならいいのですが、新規の流れには乗らない方が正解。手元にあるものをチェックして、その使い道を考えてみてくださいね。将来、どんなものをどれくらい収穫できるかの計画を立てていきましょう。',
'　この時期は、[%NAME_SELF%]の努力が報われて、幸せを実感できるときです。仕事でもプライベートでも、頑張ってきた成果があらわれて、多くのものを手にできますよ。お金や名誉、人脈を得て嬉しいということもありますし、自分自身の心が満たされていることに最も喜びを感じられるでしょう。<br><br>　それにより、周りの人に感謝する気持ちが強くなり、世の中のためや人のために役立ちたいという気持ちが生まれます。そこで得た幸福や満足感を、多くの人にわけあたえることができるといいですね。感謝の気持ちが、良運をさらに引き寄せてくれますよ。',
	 );
	 
	
	// 日付
	// 各月の1日の日干
	//   6/1	 5:辰
	//   7/1	11:戌
	//   8/1	 6:巳
	//   9/1	 1:子
	//  10/1	 7:午
	//  11/1	 2:丑
	//  12/1	 8:未
	$c = array( '', '','','','','',  5,11, 6, 1, 7, 2, 8 );
	$d = array( '', '','','','','', 30,31,31,30,31,30,31 );
	// 1つ目の該当月（C）	その月の1回目の 6:決星に当たる日
	// 2つ目の該当月（D）	その月の1回目の11:金星に当たる日
	// 3つ目の該当月（E）	その月の2回目の 8:天星に当たる日
	$e = array( 6, 11, 20 );
	$date = array();
	for( $i = 0; $i <= 2; $i++ ) {
		$f = 1 +$start -$c[ $month[$i] ];
		if( $f <= 0 ) $f +=12;
		$f += $e[ $i ];
		if( $f > $d[ $month[$i] ] ) $f -=12;
		$date[$i] = sprintf( "%d月%d日", $month[$i], $f );
	}
	$date2 = array();
	$date2 = $date;
	if( $month[1] < $month[0] ) {
		$date2[1] = $date2[0];
		$date2[0] = $date[1];
	}
	if( $month[2] < $month[0] ) {
		$date2[2] = $date2[1];
		$date2[1] = $date2[0];
		$date2[0] = $date[2];
	} else if( $month[2] < $month[1] ) {
		$date2[2] = $date2[1];
		$date2[1] = $date[2];
	}
	
	return array( $point, $month, $position, $b[ $val[0] ], $date2 );
}

function get_happy( $logic_cd ) {
	global $self;
		
	// 冒頭メッセージ
	$a = array(  '', 
'2021年下半期の[%NAME_SELF%]には、まずは休息が必要です。運動をするよりも、デトックスを意識した生活を。質の良い睡眠をとり、食事は控えめにして、内臓を休めるように心がけてくださいね。',
'2021年下半期は体調を崩しやすい時なので、無理は禁物。ダイエットや美肌づくりは、結果が出るのはもう少し先です。ここで諦めるとこれまでの努力が台無しになってしまいますので、少しペースをゆるめてでも継続を。',
'2021年下半期は生活改善をメインに、今後取り入れる美容法の効果を高める準備の時。暴飲暴食や喫煙など、悪習慣を断ち切るのなら今がチャンス！　また、冷えや便秘などの慢性的な不調を解消することに注力を。',
'2021年下半期は心身の調子が上がってくる時ですが、無理は禁物。栄養バランスを考えた食事や、質の良い睡眠で調子をキープしましょう。新しい美容法の情報を集めると、モチベーションが上がりますよ。',
'2021年下半期は人付き合いの中に、美しくなるヒントがたくさん隠れていますので、アンテナを張り巡らせて。素敵な人の生き方や食事法、美容法を聞き出して、参考にするのも良さそうです。',
'これまで実践してきた美容や健康法が合わないと感じたなら、潔く方針を変える時です。また2021年下半期は、体力が充実している時なので、少々ハードな運動にチャレンジすると良い刺激になりますよ。',
'2021年下半期は心身の疲れが出やすく、モチベーションも下がりがちな時。不意の怪我や病気を招かないよう、体調管理に重点を置いて生活を。積極的に休息を取り、癒やしを求めてくださいね。',
'2021年下半期は心身ともに絶好調！　多少の無理もききますから、体力づくりは今のうちに。また、プライベートの充実が、そのまま表情の美しさにつながります。楽しく過ごすことが、一番の美容健康法ですよ。',
'2021年下半期は誘惑が多く、迷いがちな時。油断が最大の敵になりますから、気持ちを引き締めて少々ストイックな生活を。結果を追い求めるよりも、現状維持を心がけると良いでしょう。',
'2021年下半期は以前挫折した美容健康法に再チャレンジすると、良い発見がありそうです。ただ、古傷が疼いたり虫歯が悪化するなど、悪いものが出やすい時。痛い思いをする前に、全身のメンテナンスを。',
'2021年下半期は[%NAME_SELF%]の魅力が全開になる時！　ダイエットや美容法は、想定以上の効果を実感できそうです。いつもより少し露出を増やすなど、自信を持って外出を。周りの評価も上々で、豊かな気持ちになれますよ。',
'2021年下半期は[%NAME_SELF%]の魅力が満開に！　いつもより少し大胆なファッションで出かけて、思い切り楽しく過ごしましょう。ただし、体のメンテナンスは十分に。冷えやむくみに注意し、睡眠をしっかり取って。',
	);
	
	// ハッピーアクション
	$b = array( '', 
'<p>ベッド廻りを改善</p><p>ホットミルクを飲む</p>',
'<p>原点に戻る</p><p>勉強する</p><p>映画を見る</p>',
'<p>バスソルトを使う</p><p>基礎化粧を変える</p><p>リセット</p>',
'<p>友達とおしゃべり</p><p>新しくスタート</p><p>人を誘う</p>',
'<p>好き嫌いなく食べる</p><p>発見する</p><p>情報収集</p>',
'<p>スポーツ</p><p>とにかく動く</p><p>特技を極める</p>',
'<p>癒し</p><p>アロマ</p><p>マッサージ</p>',
'<p>ショッピング</p><p>髪型を変える</p><p>好きを表に出す</p>',
'<p>美術館</p><p>図書館</p><p>静かな場所</p>',
'<p>実家地元</p><p>普段行かない場所</p><p>再チャレンジ</p>',
'<p>投資</p><p>レベルアップ</p><p>セレブ感</p>',
'<p>発散</p><p>カラオケ</p><p>シェアする</p>',
	);
	// ハッピーカラー
	$c = array( '', 
'<p>ベージュ</p><p>茶色</p>',
'<p>青</p><p>水色</p>',
'<p>シルバー</p>',
'<p>薄い黄色</p><p>クリーム色</p>',
'<p>パステル色</p>',
'<p>赤</p><p>オレンジ</p>',
'<p>黄緑</p><p>エメラルドグリーン</p>',
'<p>ピンク</p>',
'<p>うす紫</p><p>紫</p>',
'<p>白</p><p>パール</p><p>グラデーション</p>',
'<p>ゴールド</p>',
'<p>ドット</p><p>ポップ</p>',
	);
	// ハッピーライン
	$d = array( '', 
'金色のペンでプレッシャーに<br>打ち勝てるラインを描く',
'ローズマリーのアロマオイル<br>で運命線を上向きマッサージ',
'赤色のペンで<br>ポジティブラインを描く',
'金色のペンで向上線を描く',
'金色のペンで太陽丘に格子を描く',
'金色のペンで<br>チャンスを掴むラインを描く',
'赤色のペンで<br>健康運UPラインを描く',
'ピンク色のペンで<br>愛されラインを描く',
'金色のペンで中指まで伸びる<br>運命線と直感線を描く',
'ピンクのペンで太陽線を3本描く',
'金色のペンで中指まで伸びる<br>運命線と太陽線、財運線を描く',
'金色のペンで実力UPラインを描く',
	);
	
	return array( $logic_cd, $a[$logic_cd], $b[$logic_cd], $c[$logic_cd], $d[$logic_cd] );
}



/**
 * logic_cd 取得関数たち。
 */
function get_logic_cd( $contents ) {
	switch( $contents ) {
		case 'hoshihitomi_zap':
			return get_hoshihitomi_zap();
			break;
		case 'spshimada_zap':
			return get_spshimada_zap();
			break;
		case 'suisho_zap':
			return get_suisho_zap();
			break;
		case 'shiuma2_zap':
			return get_shiuma2_zap();
			break;
		case 'fujiko_ccs':
			return get_fujiko_ccs();
			break;
		case 'okai_zap':
			return get_okai_zap();
			break;
		default:
			return array();
	}
}


// ***************************/
// 星ひとみ：四柱推命
//     a1 : 12天星・自分	[ 1- 12 ]	logic_base_self
//     a2 : 12天星・相手	[ 1- 12 ]	logic_base_other
//     b1 : 年運・自分		[ 1- 12 ]	logic_year_self
//     b2 : 年運・相手		[ 1- 12 ]	logic_year_other
//     c1 : 月運・自分  	[ 1- 12 ]	logic_month_self
//     c2 : 月運・相手  	[ 1- 12 ]	logic_month_other
//     d1 : 日運・自分  	[ 1- 12 ]	
//     d2 : 日運・相手  	[ 1- 12 ]	
//     t1 : 運命数・自分	[ 1- 61 ]
// ***************************/
function get_hoshihitomi_zap() {
	global $self;
	$logic_cd = array();
	
	// a1 : 12天星・自分
	$arr = get_fortune_no( $self->get('birth_year_self'), $self->get('birth_mon_self') );
	$t = $arr[1] -1 +$self->get('birth_mday_self');
	if( $t > 60 ) $t -= 60;
	$logic_cd['t1'] = $t;
	
	$logic_cd['a1'] = get12tensei( $t );
	
	// 年運月運用のスタート地点
	// 本人の日柱干支から空亡を導き出し、生まれ年によって、さらに空亡（地支）を分ける。
	$start = getStart( $t, $self->get('birth_year_self') );
	
	// b1 : 年運・自分
	// 2020年が 1:子
	$year_now = $self->get('year_now');
	if( $self->get('month_now') >= 11 ) $year_now += 1;
	$now_year_cd = ( $year_now -2020 ) %12 +1;
	$nennunn = $now_year_cd -$start +1;
	if( $nennunn < 1 ) $nennunn +=12;
	$logic_cd['b1'] = $nennunn;
	
	// c1 : 月運・自分
	// 1月が 2:丑
	$month_now = $self->get('month_now');
	$now_month_cd = $month_now%12  +1;
	$getsuunn = $now_month_cd -$start +1;
	if( $getsuunn < 1 ) $getsuunn +=12;
	$logic_cd['c1'] = $getsuunn;
	
	// d1 : 日運・自分
	// 2021/03/05が 1:子
	$day1 = strtotime('2021-03-05');
	$day2 = strtotime($self->get('year') .'-' .$self->get('month') .'-' .$self->get('mday'));
	$g = ( $day2 - $day1 ) / (60 * 60 * 24);
	$now_day_cd = $g%12  +1;
	$nichiunn = $now_day_cd -$start +1;
	if( $nichiunn < 1 ) $nichiunn +=12;
	$logic_cd['d1'] = $nichiunn;
	
	
	if( $self->get('birth_year_other') ) {
		// a2 : 12天星・相手
		$arr = get_fortune_no( $self->get('birth_year_other'), $self->get('birth_mon_other') );
		$t = $arr[1] -1 +$self->get('birth_mday_other');
		if( $t > 60 ) $t -= 60;
		$logic_cd['a2'] = get12tensei( $t );
		
		// 年運月運用のスタート地点
		$start = getStart( $t, $self->get('birth_year_other') );
		
		// b2 : 年運・相手
		$nennunn = $now_year_cd -$start +1;
		if( $nennunn < 1 ) $nennunn +=12;
		$logic_cd['b2'] = $nennunn;
		
		// c2 : 月運・相手
		$getsuunn = $now_month_cd -$start +1;
		if( $getsuunn < 1 ) $getsuunn +=12;
		$logic_cd['c2'] = $getsuunn;
		
		// d2 : 日運・相手
		$nichiunn = $now_day_cd -$start +1;
		if( $nichiunn < 1 ) $nichiunn +=12;
		$logic_cd['d1'] = $nichiunn;
	}
	
	return $logic_cd;
}

function get12tensei( $t ) {
	$ret = 0;
		 if( $t ==  4 || $t == 10 || $t == 33 || $t == 39 || $t == 45				) $ret = 1;
	else if( $t == 11 || $t == 17 || $t == 32 || $t == 38							) $ret = 2;
	else if( $t ==  2 || $t ==  3 || $t ==  8 || $t == 41 || $t == 47				) $ret = 3;
	else if( $t == 14 || $t == 20 || $t == 23 || $t == 26 || $t == 29 || $t == 36	) $ret = 4;
	else if( $t ==  6 || $t == 43 || $t == 49 || $t == 54 || $t == 55 || $t == 60	) $ret = 5;
	else if( $t ==  9 || $t == 15 || $t == 16 || $t == 34 || $t == 40 || $t == 46	) $ret = 6;
	else if( $t ==  1 || $t ==  5 || $t == 50 || $t == 53 || $t == 56 || $t == 59	) $ret = 7;
	else if( $t == 51 || $t == 52 || $t == 57 || $t == 58							) $ret = 8;
	else if( $t == 21 || $t == 22 || $t == 27 || $t == 28							) $ret = 9;
	else if( $t ==  7 || $t == 42 || $t == 44 || $t == 48							) $ret = 10;
	else if( $t == 12 || $t == 18 || $t == 31 || $t == 37							) $ret = 11;
	else if( $t == 13 || $t == 19 || $t == 24 || $t == 25 || $t == 30 || $t == 35	) $ret = 12;
	return $ret;
}

function getStart( $t, $y ) {
	$ret = 0;
		 if( $t <= 10 && $y%2 == 1 ) $ret = 11;
	else if( $t <= 10 && $y%2 == 0 ) $ret = 10;
	else if( $t <= 20 && $y%2 == 1 ) $ret =  9;
	else if( $t <= 20 && $y%2 == 0 ) $ret =  8;
	else if( $t <= 30 && $y%2 == 1 ) $ret =  7;
	else if( $t <= 30 && $y%2 == 0 ) $ret =  6;
	else if( $t <= 40 && $y%2 == 1 ) $ret =  5;
	else if( $t <= 40 && $y%2 == 0 ) $ret =  4;
	else if( $t <= 50 && $y%2 == 1 ) $ret =  3;
	else if( $t <= 50 && $y%2 == 0 ) $ret =  2;
	else if( $t <= 60 && $y%2 == 1 ) $ret =  1;
	else if( $t <= 60 && $y%2 == 0 ) $ret = 12;
	return $ret;
}



// ***************************/
// 島田秀平
//     a1 : 基本性格・自分	[ 1- 22 ] 男女書き分け
//     a2 : 基本性格・相手	[ 1- 22 ] 男女書き分け
//   img1 : 画像    ・自分	[ 1- 11 ] 
//   img2 : 画像    ・相手	[ 1- 11 ] 
//     b  : 関係数  ・相性	[ 1- 9 ]
//     c  : 月運    ・自分	[ 1- 9 ]
//     c2 : 月運    ・相手	[ 1- 9 ]
//     d  : 年運    ・自分	[ 1- 9 ]
//     e1 : 日運    ・自分	[ 1- 9 ]
//     e2 : 日運    ・相手	[ 1- 9 ]
//     f  : 年運    ・相性	[ 1- 9 ]
//     h  : 月運    ・相性	[ 1- 9 ]
// ***************************/
function get_spshimada_zap() {
	global $self, $menuData;
	$logic_cd = array();
	
	// 性別
	$logic_cd['gender'] = $self->get('sex_self');
	
	// 年運は10/1切り替えで来年のデータを表示する
	$kirikae_flg = $self->get('month_now') >= 10 ?1 :0;
	
	// ロジックA	カバラ基本数:自分
	$y1 = get_singular( 0, $self->get('birth_year_self') );
	$m1 = get_singular( 0, $self->get('birth_mon_self') );
	$d1 = get_singular( 0, $self->get('birth_mday_self') );
	$logica1 = get_singular( 1, $y1 .$m1 .$d1 );
	$logic_cd['img1'] = $logica1;
	if( $logic_cd['gender'] == 2 ) $logica1 += 11;
	$logic_cd['a1'] = $logica1;
	
	// ロジックC	月運:自分
	$logic_cd['c'] = get_singular( 0, get_singular( 0, $d1 +$self->get('year_now') ) +$self->get('month_now') );
	
	// ロジックD	年運:自分
	$selfage = (int)( intval($self->get('year_now')) -intval($self->get('birth_year_self')) );
	$age_flg = $selfage <= 0;
	if( $age_flg ) $selfage = 1;
	$age1 = get_singular( 0, $selfage +$kirikae_flg );
	$logicd1;
	for( $logicd1 = 1; $logicd1 <= 9; $logicd1++ ) {
		$tmp = $d1 + $logicd1 - 1;
		if( $age_flg )
			$tmp++;
		if( $tmp > 9 )
			$tmp -= 9;
		if( $age1 == $tmp )
			break;
	}
	$logic_cd['d'] = $logicd1;
	
	// ロジックE	日運:自分
	$logic_cd['e1'] = get_singular( 0, $logic_cd['c'] +$self->get('mday') );
	
	if( $self->get('birth_year_other') ) {
		// 性別
		$logic_cd['gender2'] = $logic_cd['gender'] == 2 ?1 :2;

		// ロジックA	カバラ基本数:相手
		$y2 = get_singular( 0, $self->get('birth_year_other') );
		$m2 = get_singular( 0, $self->get('birth_mon_other') );
		$d2 = get_singular( 0, $self->get('birth_mday_other') );
		$logica2 = get_singular( 1, $y2 .$m2 .$d2 );
		$logic_cd['img2'] = $logica2;
		if( $logic_cd['gender2'] == 2 ) $logica2 += 11;
		$logic_cd['a2'] = $logica2;
		
		// ロジックB	関係数
		$logicb = get_singular( 0, $logic_cd['img1'] + $logic_cd['img2'] );
		$logic_cd['b'] = $logicb;
	
		// ロジックF	年運:相性
		$logic_cd['f'] = get_singular( 0, $logic_cd['b'] +get_singular( 0, $self->get('year_now') +$m1.$d1 +$kirikae_flg ) );
		
		// ロジックH	月運:自分
		$logic_cd['c2'] = get_singular( 0, get_singular( 0, $d2 +$self->get('year_now') ) +$self->get('month_now') );
		$logic_cd['h'] = get_singular( 0, $logic_cd['c'] +$logic_cd['c2'] );
		
		// ロジックE	日運:相手
		$logic_cd['e2'] = get_singular( 0, $logic_cd['c2'] +$self->get('mday') );
	}
	return $logic_cd;
}


// ***************************/
// 水晶玉子・オリエンタル占星術
//     a1 : 12星座・自分	[ 1- 12 ]
//     a2 : 12星座・相手	[ 1- 12 ]
//     b1 : 本命宿・自分	[ 1- 27 ]
//     b2 : 本命宿・相手	[ 1- 27 ]
//     d1 : 日運・自分  	[ 1-  9 ]	
//     d2 : 日運・相手  	[ 1-  9 ]	
// ***************************/
function get_suisho_zap() {
	global $self, $menuData;
	$logic_cd = array();
	
	// a1 : 12星座・自分
	$logic_cd['a1'] = get_seiza( $self->get('birth_mon_self'), $self->get('birth_mday_self') );
	// b1 : 本命宿・自分
	$logic_cd['b1'] = getShukuID( $self->get('birth_year_self'), $self->get('birth_mon_self'), $self->get('birth_mday_self') );
	
	
	//    : 12天星・自分
	$arr = get_fortune_no( $self->get('birth_year_self'), $self->get('birth_mon_self') );
	$t = $arr[1] -1 +$self->get('birth_mday_self');
	if( $t > 60 ) $t -= 60;
	// 年運月運用のスタート地点
	// 本人の日柱干支から空亡を導き出し、生まれ年によって、さらに空亡（地支）を分ける。
	$start = getStart( $t, $self->get('birth_year_self') );
	// d1 : 日運・自分
	// 2021/03/05が 1:子
	$day1 = strtotime('2021-03-05');
	$day2 = strtotime($self->get('year') .'-' .$self->get('month') .'-' .$self->get('mday'));
	$g = ( $day2 - $day1 ) / (60 * 60 * 24);
	$now_day_cd = $g%12  +1;
	$nichiunn = $now_day_cd -$start +1;
	if( $nichiunn < 1 ) $nichiunn +=12;
	$logic_cd['d1'] = $nichiunn;
	
	
	if( $self->get('birth_year_other') ) {
		// a2 : 12星座・相手
		$logic_cd['a2'] = get_seiza( $self->get('birth_mon_other'), $self->get('birth_mday_other') );
		// b2 : 本命宿・相手
		$logic_cd['b2'] = getShukuID( $self->get('birth_year_other'), $self->get('birth_mon_other'), $self->get('birth_mday_other') );
		
		
		//    : 12天星・相手
		$arr = get_fortune_no( $self->get('birth_year_other'), $self->get('birth_mon_other') );
		$t = $arr[1] -1 +$self->get('birth_mday_other');
		if( $t > 60 ) $t -= 60;
		// 年運月運用のスタート地点
		$start = getStart( $t, $self->get('birth_year_other') );
		// d2 : 日運・相手
		$nichiunn = $now_day_cd -$start +1;
		if( $nichiunn < 1 ) $nichiunn +=12;
		$logic_cd['d1'] = $nichiunn;
	}
	
	return $logic_cd;
}

// ***************************/
// シウマ：誕生日数意・九星気学
//     a1 : 誕生日占い・自分	[ 1- 31 ]
//     a2 : 誕生日占い・相手	[ 1- 31 ]
//     b1 : 年運・自分	[ 1-  9 ]
//     b2 : 年運・相手	[ 1-  9 ]
//     c1 : 月運・自分	[ 1-  9 ]
//     c2 : 月運・相手	[ 1-  9 ]
//     d1 : 日運・自分	[ 1-  9 ]
//     d2 : 日運・相手	[ 1-  9 ]
// ***************************/
function get_shiuma2_zap() {
	global $self;
	$logic_cd = array();
	
	// a1 : 誕生日占い・自分
	$logic_cd['a1'] = $self->get('birth_mday_self');
	
	/*
	2021年 の年盤(2021/2/4～2022/2/3)
		　　南　　
		　五一三　
		東四六八西
		　九二七　
		　　北　　
	
	定位盤方位ID
		1 北  , 2 南西, 3 東  , 4 東南, 5 中央, 6 北西, 7 西  , 8 北東, 9 南
	*/
	// key : 本命星ID
	// val : 定位盤ID
	$d = array( '', 9, 1, 2, 3, 4, 5, 6, 7, 8 );
	
	// b1 : 年運・自分
	$by = $self->get('birth_year_self');
	// 節日きりかえ
	if( ( $self->get('birth_mon_self') == 2 && $self->get('birth_mday_self') < 4 ) || $self->get('birth_mon_self') == 1 ) $by -=1;
	$h = get_singular( 0, 11 -get_singular( 0, $by ) );
	if( $h == 10 ) $h = 1;
	
	$res = $d[ $h ];
	if( $self->get('month_now') >= 11 ) $res += 1;
	if( $res == 10 ) $res = 1;
	$logic_cd['b1'] = $res;
	
	// c1 : 月運・自分
	// 月盤計算用 （202101と現在月の差分）
	$f = ($self->get('year_now') -2021) *12 +($self->get('month_now') -1);
	$logic_cd['c1'] = get_kyusei( $res +$f );
	
	// d1 : 日運・自分
	// 日盤計算用 （20210307と今日の差分）
	$day1 = strtotime('2021-03-07');
	$day2 = strtotime($self->get('year') .'-' .$self->get('month') .'-' .$self->get('mday'));
	$g = ( $day2 - $day1 ) / (60 * 60 * 24);
	$logic_cd['d1'] = get_kyusei( $res +$g );
	
	if( $self->get('birth_year_other') ) {
		// a1 : 姓名鑑定・自分・基数
		$logic_cd['a2'] = $self->get('birth_mday_other');
		
		// b2 : 年運・相手
		$by = $self->get('birth_year_other');
		if( ( $self->get('birth_mon_other') == 2 && $self->get('birth_mday_other') < 4 ) || $self->get('birth_mon_other') == 1 ) $by -=1;
		$h = get_singular( 0, 11 -get_singular( 0, $by ) );
		if( $h == 10 ) $h = 1;
		$res = $d[ $h ];
		if( $self->get('month_now') >= 11 ) $res += 1;
		if( $res == 10 ) $res = 1;
		$logic_cd['b2'] = $res;
		
		// c2 : 日運・相手
		$logic_cd['c2'] = get_kyusei( $res -$f );
		
		// d2 : 月運・相手
		$logic_cd['d2'] = get_kyusei( $res -$g );
	}
	
	return $logic_cd;
}


// ***************************/
// 岡井浄幸：九星気学
//     b1 : 年運・自分	[ 1-  9 ]
//     b2 : 年運・相手	[ 1-  9 ]
//     c1 : 月運・自分	[ 1-  9 ]
//     c2 : 月運・相手	[ 1-  9 ]
// ***************************/
function get_okai_zap() {
	return get_shiuma2_zap();
}


// ***************************/
// 木村藤子
//     a1 : 基本性格・自分	[ 1- 9 ] 
//     a2 : 基本性格・相手	[ 1- 9 ] 
//     1A : 誕生数秘・自分	[ 1- 9 ]
//     2A : 誕生数秘・相性	[ 1- 9 ]
//     e1 : 日運    ・自分	[ 1- 9 ]
//     e2 : 日運    ・相手	[ 1- 9 ]
// ***************************/
function get_fujiko_ccs() {
	global $self;
	$logic_cd = array();
	
	// 1A : 誕生数秘・自分
	$y1 = get_singular( 0, $self->get('birth_year_self') );
	$m1 = get_singular( 0, $self->get('birth_mon_self') );
	$d1 = get_singular( 0, $self->get('birth_mday_self') );
	$logic_cd['1A'] = get_singular( 0, $y1 .$m1 .$d1 );
	$logic_cd['a1'] = get_singular( 0, $y1 .$m1 .$d1 );
	
	// ロジックE	日運:自分
	$c = get_singular( 0, get_singular( 0, $d1 +$self->get('year') ) +$self->get('month') );
	$logic_cd['e1'] = get_singular( 0, $c +$self->get('mday') );
	
	if( $self->get('birth_year_other') ) {
		$y1 = get_singular( 0, $self->get('birth_year_other') );
		$m1 = get_singular( 0, $self->get('birth_mon_other') );
		$d1 = get_singular( 0, $self->get('birth_mday_other') );
		$logic_cd['a2'] = get_singular( 0, $y1 .$m1 .$d1 );
		$logic_cd['2A'] = get_singular( 0, $logic_cd['a1'] .$logic_cd['a2'] );
		
		// ロジックE	日運:相手
		$c = get_singular( 0, get_singular( 0, $d1 +$self->get('year') ) +$self->get('month') );
		$logic_cd['e2'] = get_singular( 0, $c +$self->get('mday') );
	}
	
	return $logic_cd;
}


////////////////////////////////////// ここからサブ関数 ////////////////////////////////////// 

/**
 * 【数秘術】単数変換
 * 0:通常          [9パターン]
 * 1:カバラ基本数 [11パターン]（1～9,11,22）
 */
function get_singular( $type, $num ) {
	$ret = $num;
	while( true ) {
		$tmp = 0;
		for( $i = 0; $i < strlen( $ret ); $i++ )
			$tmp += substr( $ret, $i, 1 );
		$ret = $tmp;
		if( strlen( $ret ) == 1 )
			break;
		else if( $type && ( $ret == 11 || $ret == 22 ) ) {
			$ret = $ret == 11 ?10 :11;
			break;
		}
	}
	return $ret;
}

/**
 * 【九星気学】値の正常化
 */
function get_kyusei( $num ) {
	$ret = $num;
	if( $ret > 9 ) $ret -=9;
	else if( $ret < 1 ) $ret +=9;
	if( $ret > 9 || $ret < 1 ) $ret = get_kyusei( $ret );
	return $ret;
}

/**
 * 【西洋占星術】星座取得
 */
function get_seiza( $m, $d) {
	$ret = 0;
	$mmdd = sprintf( "%02d%02d", $m, $d );
	//  1 :おひつじ
	if( $mmdd >= 321 && $mmdd <= 419 )			$ret = 1;
	//  2 :おうし
	else if( $mmdd >= 420 && $mmdd <= 520 ) 	$ret = 2;
	//  3 :ふたご
	else if( $mmdd >= 521 && $mmdd <= 621 ) 	$ret = 3;
	//  4 :かに
	else if( $mmdd >= 622 && $mmdd <= 722 ) 	$ret = 4;
	//  5 :しし
	else if( $mmdd >= 723 && $mmdd <= 822 ) 	$ret = 5;
	//  6 :おとめ
	else if( $mmdd >= 823 && $mmdd <= 922 ) 	$ret = 6;
	//  7 :てんびん
	else if( $mmdd >= 923 && $mmdd <= 1023 ) 	$ret = 7;
	//  8 :さそり
	else if( $mmdd >= 1024 && $mmdd <= 1122 ) 	$ret = 8;
	//  9 :いて
	else if( $mmdd >= 1123 && $mmdd <= 1221 ) 	$ret = 9;
	// 10 :やぎ
	else if( $mmdd >= 1222 || $mmdd <= 119 ) 	$ret = 10;
	// 11 :みずがめ
	else if( $mmdd >= 120 && $mmdd <= 218 ) 	$ret = 11;
	// 12 :うお
	else if( $mmdd >= 219 && $mmdd <= 320 ) 	$ret = 12;
	
	return $ret;
}

/**
 * 【六星占術】運命数, 【四柱推命】運命数, 【0学】生年・月数表
 *                      ※ 四柱推命, 0学では -1 して使用
 *     input : 誕生年, 誕生月
 *     output: 干支,   誕生数
 */
function get_fortune_no( $y, $m ) {
	$fortune_no_tbl = array(
		1921 => array(10,61,32,60,31,61,32,2,33,4,34,5,35),
		1922 => array(11,6,37,5,36,6,37,7,38,9,39,10,40),
		1923 => array(12,11,42,10,41,11,42,12,43,14,44,15,45),
		1924 => array(1,16,47,16,47,17,48,18,49,20,50,21,51),
		1925 => array(2,22,53,21,52,22,53,23,54,25,55,26,56),
		1926 => array(3,27,58,26,57,27,58,28,59,30,60,31,61),
		1927 => array(4,32,3,31,2,32,3,33,4,35,5,36,6),
		1928 => array(5,37,8,37,8,38,9,39,10,41,11,42,12),
		1929 => array(6,43,14,42,13,43,14,44,15,46,16,47,17),
		1930 => array(7,48,19,47,18,48,19,49,20,51,21,52,22),
		1931 => array(8,53,24,52,23,53,24,54,25,56,26,57,27),
		1932 => array(9,58,29,58,29,59,30,60,31,2,32,3,33),
		1933 => array(10,4,35,3,34,4,35,5,36,7,37,8,38),
		1934 => array(11,9,40,8,39,9,40,10,41,12,42,13,43),
		1935 => array(12,14,45,13,44,14,45,15,46,17,47,18,48),
		1936 => array(1,19,50,19,50,20,51,21,52,23,53,24,54),
		1937 => array(2,25,56,24,55,25,56,26,57,28,58,29,59),
		1938 => array(3,30,61,29,60,30,61,31,2,33,3,34,4),
		1939 => array(4,35,6,34,5,35,6,36,7,38,8,39,9),
		1940 => array(5,40,11,40,11,41,12,42,13,44,14,45,15),
		1941 => array(6,46,17,45,16,46,17,47,18,49,19,50,20),
		1942 => array(7,51,22,50,21,51,22,52,23,54,24,55,25),
		1943 => array(8,56,27,55,26,56,27,57,28,59,29,60,30),
		1944 => array(9,61,32,61,32,2,33,3,34,5,35,6,36),
		1945 => array(10,7,38,6,37,7,38,8,39,10,40,11,41),
		1946 => array(11,12,43,11,42,12,43,13,44,15,45,16,46),
		1947 => array(12,17,48,16,47,17,48,18,49,20,50,21,51),
		1948 => array(1,22,53,22,53,23,54,24,55,26,56,27,57),
		1949 => array(2,28,59,27,58,28,59,29,60,31,61,32,2),
		1950 => array(3,33,4,32,3,33,4,34,5,36,6,37,7),
		1951 => array(4,38,9,37,8,38,9,39,10,41,11,42,12),
		1952 => array(5,43,14,43,14,44,15,45,16,47,17,48,18),
		1953 => array(6,49,20,48,19,49,20,50,21,52,22,53,23),
		1954 => array(7,54,25,53,24,54,25,55,26,57,27,58,28),
		1955 => array(8,59,30,58,29,59,30,60,31,2,32,3,33),
		1956 => array(9,4,35,4,35,5,36,6,37,8,38,9,39),
		1957 => array(10,10,41,9,40,10,41,11,42,13,43,14,44),
		1958 => array(11,15,46,14,45,15,46,16,47,18,48,19,49),
		1959 => array(12,20,51,19,50,20,51,21,52,23,53,24,54),
		1960 => array(1,25,56,25,56,26,57,27,58,29,59,30,60),
		1961 => array(2,31,2,30,61,31,2,32,3,34,4,35,5),
		1962 => array(3,36,7,35,6,36,7,37,8,39,9,40,10),
		1963 => array(4,41,12,40,11,41,12,42,13,44,14,45,15),
		1964 => array(5,46,17,46,17,47,18,48,19,50,20,51,21),
		1965 => array(6,52,23,51,22,52,23,53,24,55,25,56,26),
		1966 => array(7,57,28,56,27,57,28,58,29,60,30,61,31),
		1967 => array(8,2,33,61,32,2,33,3,34,5,35,6,36),
		1968 => array(9,7,38,7,38,8,39,9,40,11,41,12,42),
		1969 => array(10,13,44,12,43,13,44,14,45,16,46,17,47),
		1970 => array(11,18,49,17,48,18,49,19,50,21,51,22,52),
		1971 => array(12,23,54,22,53,23,54,24,55,26,56,27,57),
		1972 => array(1,28,59,28,59,29,60,30,61,32,2,33,3),
		1973 => array(2,34,5,33,4,34,5,35,6,37,7,38,8),
		1974 => array(3,39,10,38,9,39,10,40,11,42,12,43,13),
		1975 => array(4,44,15,43,14,44,15,45,16,47,17,48,18),
		1976 => array(5,49,20,49,20,50,21,51,22,53,23,54,24),
		1977 => array(6,55,26,54,25,55,26,56,27,58,28,59,29),
		1978 => array(7,60,31,59,30,60,31,1,32,3,33,4,34),
		1979 => array(8,5,36,4,35,5,36,6,37,8,38,9,39),
		1980 => array(9,10,41,10,41,11,42,12,43,14,44,15,45),
		1981 => array(10,16,47,15,46,16,47,17,48,19,49,20,50),
		1982 => array(11,21,52,20,51,21,52,22,53,24,54,25,55),
		1983 => array(12,26,57,25,56,26,57,27,58,29,59,30,60),
		1984 => array(1,31,2,31,2,32,3,33,4,35,5,36,6),
		1985 => array(2,37,8,36,7,37,8,38,9,40,10,41,11),
		1986 => array(3,42,13,41,12,42,13,43,14,45,15,46,16),
		1987 => array(4,47,18,46,17,47,18,48,19,50,20,51,21),
		1988 => array(5,52,23,52,23,53,24,54,25,56,26,57,27),
		1989 => array(6,58,29,57,28,58,29,59,30,1,31,2,32),
		1990 => array(7,3,34,2,33,3,34,4,35,6,36,7,37),
		1991 => array(8,8,39,7,38,8,39,9,40,11,41,12,42),
		1992 => array(9,13,44,13,44,14,45,15,46,17,47,18,48),
		1993 => array(10,19,50,18,49,19,50,20,51,22,52,23,53),
		1994 => array(11,24,55,23,54,24,55,25,56,27,57,28,58),
		1995 => array(12,29,60,28,59,29,60,30,1,32,2,33,3),
		1996 => array(1,34,5,34,5,35,6,37,7,38,8,39,9),
		1997 => array(2,40,11,39,10,40,11,41,12,43,13,44,14),
		1998 => array(3,45,16,44,15,45,16,46,17,48,18,49,19),
		1999 => array(4,50,21,49,20,50,21,51,22,53,23,54,24),
		2000 => array(5,55,26,55,26,56,27,57,28,59,29,60,30),
		2001 => array(6,61,32,60,31,61,32,2,33,4,34,5,35),
		2002 => array(7,6,37,5,36,6,37,7,38,9,39,10,40),
		2003 => array(8,11,42,10,41,11,42,12,43,14,44,15,45),
		2004 => array(9,16,47,16,47,17,48,18,49,20,50,21,51),
		2005 => array(10,22,53,21,52,22,53,23,54,25,55,26,56),
		2006 => array(11,27,58,26,57,27,58,28,59,30,60,31,61),
		2007 => array(12,32,3,31,2,32,3,33,4,35,5,36,6),
		2008 => array(1,37,8,37,8,38,9,39,10,41,11,42,12),
		2009 => array(2,43,14,42,13,43,14,44,15,46,16,47,17),
		2010 => array(3,48,19,47,18,48,19,49,20,51,21,52,22),
		2011 => array(4,53,24,52,23,53,24,54,25,56,26,57,27),
		2012 => array(5,58,29,58,29,59,30,60,31,2,32,3,33),
		2013 => array(6,4,35,3,34,4,35,5,36,7,37,8,38),
		2014 => array(7,9,40,8,39,9,40,10,41,12,42,13,43),
		2015 => array(8,14,45,13,44,14,45,15,46,17,47,18,48),
		2016 => array(9,19,50,19,50,20,51,21,52,23,53,24,54),
		2017 => array(10,25,56,24,55,25,56,26,57,28,58,29,59),
		2018 => array(11,30,61,29,60,30,61,31,2,33,3,34,4),
		
		2019 => array(12,35,6,34,5,35,6,36,7,38,8,39,9),
		2021 => array(1,40,11,40,11,41,12,42,13,44,14,45,15),
		2021 => array(2,46,17,45,16,46,17,47,18,49,19,50,20),
		2022 => array(3,51,22,50,21,51,22,52,23,54,24,55,25)
	);
	
	return array( $fortune_no_tbl[intval($y)][0], $fortune_no_tbl[intval($y)][intval($m)] );
}


/**
 * 【宿曜】本命宿取得
 */
function getShukuID( $year,$mon,$day ) {
	// 旧暦を求める
	$qreki = calc_kyureki( $year, $mon, $day );
	$strQreki = sprintf("%04d%02d%02d", $qreki[0], $qreki[2], $qreki[3]);
	// 2016/05/12 データ補正修正
	if( 19661002 <= $strQreki && $strQreki <= 19661030 ) {
		$qreki[0] += 0;
		$qreki[2] += 0;
		$qreki[3] += -1;
	}

	$month = $qreki[2];
	$id = 10;
	if ( $month == 1 )       $id = 12; 
	else if ( $month ==  2 ) $id = 14;
	else if ( $month ==  3 ) $id = 16;
	else if ( $month ==  4 ) $id = 18;
	else if ( $month ==  5 ) $id = 20;
	else if ( $month ==  6 ) $id = 22;
	else if ( $month ==  7 ) $id = 25;
	else if ( $month ==  8 ) $id =  1;
	else if ( $month ==  9 ) $id =  3;
	else if ( $month == 10 ) $id =  5;
	else if ( $month == 11 ) $id =  8;
	else                     $id = 10;

	$id += $qreki[3] -1;
	$id = ( $id -1 ) %27 +1;

	return $id;
}

/**
 // 新暦に対応する、旧暦を求める。
 //
 // 呼び出し時にセットする変数
 // 引数  year : 計算する日付
 //       mon
 //       day
 //
 // 戻り値 kyureki : 答えの格納先（配列に答えをかえす）
 //           kyureki[0] : 旧暦年
 //           kyureki[1] : 平月／閏月 flag .... 平月:0 閏月:1
 //           kyureki[2] : 旧暦月
 //           kyureki[3] : 旧暦日
 //
**/
function calc_kyureki( $year, $mon, $day ) {
	$date = sprintf("%04d%02d%02d", $year, $mon, $day);
	$kyureki = array();
	$tm;
	$saku = array();
	$lap;
	$m = array();
	
	$tm0 = YMDT2JD( $year, $mon, $day );
	$chu = array();
	$chu[0] = before_nibun( $tm0 );
	for( $i = 1; $i < 4; $i++ )
		$chu[$i] = calc_chu( $chu[$i-1][0] +32.0 );
	$saku[0] = calc_saku( $chu[0][0] );
	for( $i=1; $i <5; $i++ ) {
		$tm = $saku[$i-1];
		$tm += 30.0;
		$saku[$i] = calc_saku( $tm );
		if( abs( (int)( $saku[$i-1] ) -(int)( $saku[$i] ) ) <= 26.0 )
			$saku[$i] = calc_saku( $saku[$i-1] +35.0 );
	}
	if( (int)($saku[1]) <= (int)($chu[0][0]) ) {
		for( $i = 0; $i < 5; $i++ )
			$saku[$i] = $saku[$i+1];
		$saku[4] = calc_saku( $saku[3] +35.0 );
	} else if( (int)($saku[0]) > (int)($chu[0][0]) ) {
		for( $i = 4; $i > 0; $i-- )
			$saku[$i] = $saku[$i-1];
		$saku[0] = calc_saku( $saku[0] -27.0 );
	}
	$lap = ((int)($saku[4]) <= (int)($chu[3][0]) ) ?1 :0;

	$m[0][0] = (int)( $chu[0][1] /30.0 ) +2;
	if( $m[0][0] > 12 )
		$m[0][0] -= 12;
	$m[0][2] = (int)($saku[0]);
	$m[0][1] = 0;

	for( $i = 1; $i < 5; $i++ ) {
		if( $lap == 1 && $i !=1 ) {
			if( (int)($chu[$i-1][0]) <= (int)($saku[$i-1]) || (int)($chu[$i-1][0]) >= (int)($saku[$i]) ) {
				$m[$i-1][0] = $m[$i-2][0];
				$m[$i-1][1] = 1;
				$m[$i-1][2] = (int)($saku[$i-1]);
				$lap = 0;
			}
		}
		$m[$i][0] = $m[$i-1][0] +1;
		if( $m[$i][0] > 12 )
			$m[$i][0] -= 12;
		$m[$i][2] = (int)($saku[$i]);
		$m[$i][1] = 0;
	}

	$state = 0;
	for( $i = 0; $i < 5; $i++ ) {
		if( (int)($tm0) < (int)($m[$i][2]) ) {
			$state = 1;
			break;
		} else if((int)($tm0) == (int)($m[$i][2])) {
			$state = 2;
			break;
		}
	}
	if( $state==0 || $state == 1)
		$i--;

	$kyureki[1] = $m[$i][1];
	$kyureki[2] = $m[$i][0];
	$kyureki[3] = (int)($tm0) -(int)($m[$i][2]) +1;

	$a = JD2YMDT($tm0);
	$kyureki[0] = $a[0];
	if($kyureki[2] > 9 && $kyureki[2] > $a[1])
		$kyureki[0]--;
	$qreki = array( $kyureki[0], $kyureki[1], $kyureki[2], $kyureki[3] );

	return $qreki;
}

//=========================================================================
// 中気の時刻を求める
// 
// 呼び出し時にセットする変数
// tm ........ 計算対象となる時刻（ユリウス日）
// chu ....... 戻り値を格納する配列のポインター
// i ......... 戻り値を格納する配列の要素番号
// 戻り値 .... 中気の時刻、その時の黄経を配列で渡す
//
//=========================================================================
function calc_chu( $tm ) {
	$delta_t1 = 0;
	$delta_t2 = 0;
	$temp = array();
	$tm1 = (int)( $tm );
	$tm2 = $tm -$tm1;
	$tm2 -= 9.0 /24.0;
	$t = ($tm2 +0.5) /36525.0;
	$t = $t +($tm1 -2451545.0) /36525.0;
	$rm_sun = LONGITUDE_SUN( $t );
	$rm_sun0 = 30.0 *(int)($rm_sun /30.0);
	for( $delta_t2 = 1.0; abs( $delta_t1 +$delta_t2 ) > ( 1.0 /86400.0 ); ) {
		$t = ($tm2 +0.5) /36525.0;
		$t = $t +( $tm1 -2451545.0 ) /36525.0;
		$rm_sun = LONGITUDE_SUN( $t );
		$delta_rm = $rm_sun -$rm_sun0 ;
		if( $delta_rm > 180.0 )
			$delta_rm -= 360.0;
		else if( $delta_rm < -180.0 )
			$delta_rm += 360.0;
		$delta_t1 = (int)( $delta_rm *365.2 /360.0);
		$delta_t2 = $delta_rm *365.2 /360.0;
		$delta_t2 -= $delta_t1;
		$tm1 = $tm1 -$delta_t1;
		$tm2 = $tm2 -$delta_t2;
		if( $tm2 < 0 ) {
			$tm2 += 1.0;
			$tm1 -= 1.0;
		}
	}
	$temp[0] = $tm2 +9.0 /24.0;
	$temp[0] += $tm1;
	$temp[1] = $rm_sun0;

	return $temp;
}

//=========================================================================
// 直前の二分二至の時刻を求める
//
// 呼び出し時にセットする変数
// tm ........ 計算対象となる時刻（ユリウス日）
// nibun ..... 戻り値を格納する配列のポインター
// 戻り値 .... 二分二至の時刻、その時の黄経を配列で渡す
//=========================================================================
function before_nibun( $tm ) {
	$nibun = array();
	$delta_t1 = 0;
	$delta_t2 = 0;
	$tm1 = (int)( $tm );
	$tm2 = $tm -$tm1;
	$tm2 -= 9.0 /24.0;
	$t = ($tm2 +0.5) /36525.0;
	$t = $t +($tm1 -2451545.0) /36525.0;
	$rm_sun = LONGITUDE_SUN( $t );
	$rm_sun0 = 90 *(int)($rm_sun /90.0);
	for ( $delta_t2 = 1.0; abs( $delta_t1 +$delta_t2 ) > ( 1.0 /86400.0 ); ) {
		$t = ($tm2 +0.5) /36525.0;
		$t = $t +($tm1 -2451545.0) /36525.0;
		$rm_sun = LONGITUDE_SUN( $t );
		$delta_rm = $rm_sun -$rm_sun0;
		if( $delta_rm > 180.0 )
			$delta_rm -= 360.0;
		else if( $delta_rm < -180.0 )
			$delta_rm += 360.0;
		$delta_t1 = (int)($delta_rm *365.2 /360.0);
		$delta_t2 = $delta_rm *365.2 /360.0;
		$delta_t2 -= $delta_t1;
		$tm1 = $tm1 -$delta_t1;
		$tm2 = $tm2 -$delta_t2;
		if($tm2 < 0) {
			$tm2 +=1.0;
			$tm1 -=1.0;
		}
	}
	$nibun[0] = $tm2+9.0/24.0;
	$nibun[0] += $tm1;
	$nibun[1] = $rm_sun0;

	return $nibun;
}

//=========================================================================
// 朔の計算
// 与えられた時刻の直近の朔の時刻（JST）を求める
//
// 呼び出し時にセットする変数
// tm ........ 計算対象となる時刻（ユリウス日）
// 戻り値 .... 朔の時刻
//
// ※ 引数、戻り値ともユリウス日で表し、時分秒は日の小数で表す。
//
//=========================================================================
function calc_saku( $tm ){
	$delta_t1 = 0;
	$delta_t2 = 0;
	$lc=1;
	$tm1 = (int)( $tm );
	$tm2 = $tm - $tm1;
	$tm2 -= 9.0 /24.0;
	for( $delta_t2 = 1.0; abs( $delta_t1 +$delta_t2 ) > ( 1.0 /86400.0 ); $lc++ ) {
		$t = ($tm2 +0.5) /36525.0;
		$t = $t +($tm1 -2451545.0) /36525.0;
		$rm_sun = LONGITUDE_SUN( $t );
		$rm_moon = LONGITUDE_MOON( $t );
		$delta_rm = $rm_moon -$rm_sun ;
		if( $lc == 1 && $delta_rm < 0.0 ) {
			$delta_rm = NORMALIZATION_ANGLE( $delta_rm );
		} else if( $rm_sun >= 0 && $rm_sun <= 20 && $rm_moon >= 300 ) {
			$delta_rm = NORMALIZATION_ANGLE( $delta_rm );
			$delta_rm = 360.0 -$delta_rm;
		} else if( abs( $delta_rm ) > 40.0 ) {
			$delta_rm = NORMALIZATION_ANGLE( $delta_rm );
		}
		$delta_t1 = (int)( $delta_rm *29.530589 /360.0);
		$delta_t2 = $delta_rm *29.530589 /360.0;
		$delta_t2 -= $delta_t1;
		$tm1 = $tm1 -$delta_t1;
		$tm2 = $tm2 -$delta_t2;
		if($tm2 < 0.0) {
			$tm2 += 1.0;
			$tm1 -= 1.0;
		}
		if( $lc == 15 && abs( $delta_t1 +$delta_t2 ) > ( 1.0 / 86400.0 ) ) {
			$tm1 = (int)( $tm -26 );
			$tm2 = 0;
		} else if( $lc > 30 && abs( $delta_t1 +$delta_t2 ) > ( 1.0 /86400.0 ) ) {
			$tm1 = $tm;
			$tm2 = 0;
			break;
		}
	}

	return ($tm2 +$tm1 +9.0 /24.0);
}

//=========================================================================
//  角度の正規化を行う。すなわち引数の範囲を ０≦θ＜３６０ にする。
//=========================================================================
function NORMALIZATION_ANGLE( $angle ) {
	$angle1;
	$angle2;
	if( $angle < 0.0 ) {
		$angle1 = -$angle;
		$angle2 = (int)( $angle1 /360.0 );
		$angle1 -= 360.0 *$angle2;
		$angle1 = 360.0 -$angle1;
	} else {
		$angle1 = (int)( $angle /360.0 );
		$angle1 = $angle - 360.0 *$angle1;
	}
	return $angle1;
}

//=========================================================================
// 太陽の黄経 λsun を計算する
//=========================================================================
function LONGITUDE_SUN( $t ) {
	$th;$ang;
	$PI = 3.141592653589793238462;
	$PI_helf = $PI /180.0 ;
	$ang = NORMALIZATION_ANGLE(  31557.0 * $t + 161.0 );
	$th =       .0004 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  29930.0 * $t +  48.0 );
	$th = $th +  .0004 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(   2281.0 * $t + 221.0 );
	$th = $th +  .0005 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(    155.0 * $t + 118.0 );
	$th = $th +  .0005 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  33718.0 * $t + 316.0 );
	$th = $th +  .0006 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(   9038.0 * $t +  64.0 );
	$th = $th +  .0007 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(   3035.0 * $t + 110.0 );
	$th = $th +  .0007 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  65929.0 * $t +  45.0 );
	$th = $th +  .0007 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  22519.0 * $t + 352.0 );
	$th = $th +  .0013 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  45038.0 * $t + 254.0 );
	$th = $th +  .0015 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE( 445267.0 * $t + 208.0 );
	$th = $th +  .0018 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(     19.0 * $t + 159.0 );
	$th = $th +  .0018 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  32964.0 * $t + 158.0 );
	$th = $th +  .0020 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  71998.1 * $t + 265.1 );
	$th = $th +  .0200 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  35999.05 * $t + 267.52 );
	$th = $th - 0.0048 * $t * cos( $PI_helf*$ang ) ;
	$th = $th + 1.9147     * cos( $PI_helf*$ang ) ;

	$ang = NORMALIZATION_ANGLE( 36000.7695 * $t );
	$ang = NORMALIZATION_ANGLE( $ang + 280.4659 );
	$th  = NORMALIZATION_ANGLE( $th + $ang );

	return($th);
}

//=========================================================================
// 月の黄経 λmoon を計算する
//=========================================================================
function LONGITUDE_MOON( $t ) {
	$th;
	$ang;
	$PI = 3.141592653589793238462;
	$PI_helf = $PI /180.0 ;
	$ang = NORMALIZATION_ANGLE( 2322131.0  * $t + 191.0  );
	$th =      .0003 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(    4067.0  * $t +  70.0  );
	$th = $th + .0003 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  549197.0  * $t + 220.0  );
	$th = $th + .0003 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE( 1808933.0  * $t +  58.0  );
	$th = $th + .0003 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  349472.0  * $t + 337.0  );
	$th = $th + .0003 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  381404.0  * $t + 354.0  );
	$th = $th + .0003 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  958465.0  * $t + 340.0  );
	$th = $th + .0003 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(   12006.0  * $t + 187.0  );
	$th = $th + .0004 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(   39871.0  * $t + 223.0  );
	$th = $th + .0004 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  509131.0  * $t + 242.0  );
	$th = $th + .0005 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE( 1745069.0  * $t +  24.0  );
	$th = $th + .0005 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE( 1908795.0  * $t +  90.0  );
	$th = $th + .0005 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE( 2258267.0  * $t + 156.0  );
	$th = $th + .0006 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  111869.0  * $t +  38.0  );
	$th = $th + .0006 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(   27864.0  * $t + 127.0  );
	$th = $th + .0007 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  485333.0  * $t + 186.0  );
	$th = $th + .0007 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  405201.0  * $t +  50.0  );
	$th = $th + .0007 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  790672.0  * $t + 114.0  );
	$th = $th + .0007 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE( 1403732.0  * $t +  98.0  );
	$th = $th + .0008 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  858602.0  * $t + 129.0  );
	$th = $th + .0009 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE( 1920802.0  * $t + 186.0  );
	$th = $th + .0011 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE( 1267871.0  * $t + 249.0  );
	$th = $th + .0012 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE( 1856938.0  * $t + 152.0  );
	$th = $th + .0016 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  401329.0  * $t + 274.0  );
	$th = $th + .0018 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  341337.0  * $t +  16.0  );
	$th = $th + .0021 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(   71998.0  * $t +  85.0  );
	$th = $th + .0021 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  990397.0  * $t + 357.0  );
	$th = $th + .0021 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  818536.0  * $t + 151.0  );
	$th = $th + .0022 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  922466.0  * $t + 163.0  );
	$th = $th + .0023 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(   99863.0  * $t + 122.0  );
	$th = $th + .0024 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE( 1379739.0  * $t +  17.0  );
	$th = $th + .0026 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  918399.0  * $t + 182.0  );
	$th = $th + .0027 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(    1934.0  * $t + 145.0  );
	$th = $th + .0028 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  541062.0  * $t + 259.0  );
	$th = $th + .0037 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE( 1781068.0  * $t +  21.0  );
	$th = $th + .0038 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(     133.0  * $t +  29.0  );
	$th = $th + .0040 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE( 1844932.0  * $t +  56.0  );
	$th = $th + .0040 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE( 1331734.0  * $t + 283.0  );
	$th = $th + .0040 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  481266.0  * $t + 205.0  );
	$th = $th + .0050 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(   31932.0  * $t + 107.0  );
	$th = $th + .0052 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  926533.0  * $t + 323.0  );
	$th = $th + .0068 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  449334.0  * $t + 188.0  );
	$th = $th + .0079 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  826671.0  * $t + 111.0  );
	$th = $th + .0085 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE( 1431597.0  * $t + 315.0  );
	$th = $th + .0100 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE( 1303870.0  * $t + 246.0  );
	$th = $th + .0107 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  489205.0  * $t + 142.0  );
	$th = $th + .0110 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE( 1443603.0  * $t +  52.0  );
	$th = $th + .0125 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(   75870.0  * $t +  41.0  );
	$th = $th + .0154 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  513197.9  * $t + 222.5  );
	$th = $th + .0304 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  445267.1  * $t +  27.9  );
	$th = $th + .0347 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  441199.8  * $t +  47.4  );
	$th = $th + .0409 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  854535.2  * $t + 148.2  );
	$th = $th + .0458 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE( 1367733.1  * $t + 280.7  );
	$th = $th + .0533 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  377336.3  * $t +  13.2  );
	$th = $th + .0571 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(   63863.5  * $t + 124.2  );
	$th = $th + .0588 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  966404.0  * $t + 276.5  );
	$th = $th + .1144 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(   35999.05 * $t +  87.53 );
	$th = $th + .1851 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  954397.74 * $t + 179.93 );
	$th = $th + .2136 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  890534.22 * $t + 145.7  );
	$th = $th + .6583 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE(  413335.35 * $t +  10.74 );
	$th = $th + 1.2740 * cos( $PI_helf*$ang );
	$ang = NORMALIZATION_ANGLE( 477198.868 * $t + 44.963 ); 
	$th = $th + 6.2888 * cos( $PI_helf*$ang );

	$ang = NORMALIZATION_ANGLE(  481267.8809 * $t );
	$ang = NORMALIZATION_ANGLE(	$ang + 218.3162 );
	$th  = NORMALIZATION_ANGLE(  $th  +	$ang );
	
	return($th);
}

//=========================================================================
// 年月日、時分秒（世界時）からユリウス日（JD）を計算する
//
// ※ この関数では、グレゴリオ暦法による年月日から求めるものである。
//    （ユリウス暦法による年月日から求める場合には使用できない。）
//=========================================================================
function YMDT2JD ( $year = 1900, $month = 1,$day = 1 ) {
	if( $month < 3.0 ) {
		$year -= 1.0;
		$month += 12.0;
	}
	$jd  = (int)( 365.25 *$year );
	$jd += (int)( $year /400.0 );
	$jd -= (int)( $year /100.0 );
	$jd += (int)( 30.59 *( $month -2.0 ) );
	$jd += 1721088;
	$jd += $day;

	return( $jd );
}

//=========================================================================
// ユリウス日（JD）から年月日、時分秒（世界時）を計算する
//
// 戻り値の配列TIME[]の内訳
// TIME[0] ... 年  TIME[1] ... 月  TIME[2] ... 日
// TIME[3] ... 時  TIME[4] ... 分  TIME[5] ... 秒
//
// ※ この関数で求めた年月日は、グレゴリオ暦法によって表されている。
//
//=========================================================================
function JD2YMDT( $JD ) {
	$x0 = (int)( $JD +68570.0 );
	$x1 = (int)( $x0 /36524.25 );
	$x2 = $x0 - (int)( 36524.25 *$x1 +0.75 );
	$x3 = (int)( ( $x2 +1 ) /365.2425 );
	$x4 = $x2 - (int)( 365.25 *$x3 ) +31.0;
	$x5 = (int)( (int)($x4) /30.59 );
	$x6 = (int)( (int)($x5) /11.0 );

	$TIME = array();
	$TIME[2] = $x4 -(int)( 30.59 *$x5 );
	$TIME[1] = $x5 -12 *$x6 +2;
	$TIME[0] = 100* ( $x1 -49 ) +$x3 +$x6;

	// 2月30日の補正
	if( $TIME[1] == 2 && $TIME[2] > 28 ) {
		if($TIME[0] %100 == 0 && $TIME[0] %400 == 0){
			$TIME[2] = 29;
		} else if($TIME[0] %4 == 0){
			$TIME[2] = 29;
		} else {
			$TIME[2] = 28;
		}
	}

	$tm=86400.0 *( $JD - (int)( $JD ) );
	$TIME[3] = (int)( $tm /3600.0 );
	$TIME[4] = (int)( ($tm -3600.0 *$TIME[3]) /60.0 );
	$TIME[5] = (int)( $tm -3600.0 *$TIME[3] -60 *$TIME[4] );

	return $TIME;
}
?>
