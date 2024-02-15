<?php
/**
 * menu_id : nv21_001
 *     無料：一人用
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'nv21_001',
			'contents'			 => 'free',
			'img_name'			 => 'zap_spshimada',
			'teller_name'		 => '島田秀平',
			'isp_mid'			 => '53j000',
			'price'				 => '0',
			'discount'			 => '0',
			'design_cd'			 => '99',
			'person'			 => '1',
			'release_date'		 => '20201201',
			'title'				 => '人気占い師5人が集結！ 2021年のあなたが丸分かり◆運だめしおみくじ',
			'caption'			 => '【メディアで大活躍中の人気占い師5人が集結！】2021年のあなたの運勢をバーチャルおみくじで占います！　あなたはどんな運に恵まれ、どのような一年を過ごすのでしょうか？　完全無料の運だめしおみくじを今すぐチェック！',
			'1_min_title' => array( "島田秀平", 
				'2021年の総合運を一言で言うと',
				'2021年の恋愛運を一言で言うと',
				'2021年の仕事運を一言で言うと',
				'2021年の金運を一言で言うと',
				'2021年の対人運を一言で言うと',
				'2021年の結婚運を一言で言うと',),
			'2_min_title' => array( "水晶玉子", 
				'2021年の総合運を一言で言うと',
				'2021年の恋愛運を一言で言うと',
				'2021年の仕事運を一言で言うと',
				'2021年の金運を一言で言うと',
				'2021年の対人運を一言で言うと',
				'2021年の結婚運を一言で言うと',),
			'3_min_title' => array( "星ひとみ", 
				'2021年の総合運を一言で言うと',
				'2021年の恋愛運を一言で言うと',
				'2021年の仕事運を一言で言うと',
				'2021年の金運を一言で言うと',
				'2021年の対人運を一言で言うと',
				'2021年の結婚運を一言で言うと',),
			'4_min_title' => array( "シウマ", 
				'2021年の総合運を一言で言うと',
				'2021年の恋愛運を一言で言うと',
				'2021年の仕事運を一言で言うと',
				'2021年の金運を一言で言うと',
				'2021年の対人運を一言で言うと',
				'2021年の結婚運を一言で言うと',),
			'5_min_title' => array( "木村藤子", 
				'2021年の総合運を一言で言うと',
				'2021年の恋愛運を一言で言うと',
				'2021年の仕事運を一言で言うと',
				'2021年の金運を一言で言うと',
				'2021年の対人運を一言で言うと',
				'2021年の結婚運を一言で言うと',),
		);

// 小メニューロジック
$logic = array(
			'd',
			'a1',
			'b1',
			'b1',
			'a1',
		);

// Next枠
$next = array( "nv21_005", "nv21_009", "nv21_017", "nv21_021", "nv21_013" );


// 結果テキスト
$text = array(
		array( "島田秀平", 
			array(  "カテゴリー1", 
'総合運は新しい始まり！　全てがすっかり変わってしまうかも。',
'総合運はゆっくり進め！　「協調性」を発揮するのが開運の秘訣。',
'総合運はとにかく楽しむ！　のびのび好きなこと中心の暮らしを。',
'総合運は基礎固め！　じっくりしっかり地に足をつけて歩いて。',
'総合運はチャレンジ！　いつもよりも大胆になって正解ですよ。',
'総合運は「愛と責任」！　大切な人と過ごす時間を作りましょう。',
'総合運は自分磨きの年！　あなたの強みをより輝かせましょう。',
'総合運は超パワフル！　「ワンランク上」を狙ってくださいね。',
'総合運は集大成！　これまでの成果を存分に発揮しましょう。',
			),
			array(  "カテゴリー2", 
'恋愛運は新しい出会いの宝庫！　どうぞ気軽に恋を始めましょう。',
'恋愛運は「モテ運」到来！　さまざまなタイプからアプローチが。',
'恋愛運は出会い運好調！　最初は友だちから始めるのが正解です。',
'恋愛運は安定路線！　身近な人との「縁」を大切にしてください。',
'恋愛運はドラマチック！　映画のような恋を楽しみましょう。',
'恋愛運は真実の愛を知るとき！　生涯のパートナーと出会います。',
'恋愛運は遠距離に縁あり！　離れていても心は通じるはず。',
'恋愛運は激しく燃え上がる運命の恋に！　仕事と両立するのが鍵。',
'恋愛運は成熟した大人の恋！　心と心が通じ合う幸せに浸れます。',
			),
			array(  "カテゴリー3", 
'仕事運は新しい種まきの年！　この先のキャリアを考えて準備を。',
'仕事運はチームワークで成功！　サポート役に徹すると高評価を。',
'仕事運はクリエイティブ能力発揮！　表現力で高パフォーマンス。',
'仕事運は「着実＆堅実」！　一歩ずつ前に進んで成果を出します。',
'仕事運は新しいプロジェクトに着手！　波に乗り成果を出せます。',
'仕事運はリーダーシップを発揮！　人と働くことを楽しめます。',
'仕事運は「専門分野」で力を発揮！　オリジナリティが高く評価。',
'仕事運は本領発揮！　昇進や昇給、独立の可能性が高まります。',
'仕事運は教える立場で才能開花！　後輩指導や講演で実力発揮。',
			),
			array(  "カテゴリー4", 
'金運は新たな収入源が！　才能をお金にできる可能性あり。',
'金運は人のために使うと、有形無形の報酬が返ってくるとき！',
'金運は使うほどに入ってくる！　お金を回すことを考えてみて。',
'金運は「貯蓄運」アップ！　コツコツ貯めて堅実に殖やしてみて。',
'金運は入るほうも多ければ出るほうも大きい！　趣味に使うと吉。',
'金運は潤沢！　ありとあらゆる方面からお金が流れ込みますよ。',
'金運は副業が順調！　趣味や特技を活かし収入源を確保すること。',
'金運は最強運！　何をしてもお金に結びつく流れを呼び込みます。',
'金運は家計の無駄を省いてスリム化を！　浮いた分は自己投資に。',
			),
			array(  "カテゴリー5", 
'対人運は活発！　新しく知り合う人とは友だちになるつもりで！',
'対人運は良好！　心の通い合う温かい付き合いができますよ。',
'対人運はぐんと広がります！　年齢差がある人と交流を楽しんで。',
'対人運は堅調！　身近な人たちと確かな信頼関係が築けますよ。',
'対人運は超拡大傾向！　動けば動くほど「人脈」が広がりますよ。',
'対人運は円満！　身近な人と家庭的な付き合いで癒やされます。',
'対人運は少数精鋭！　ごく親しい人たちとの関係がぐっと親密に。',
'対人運は向かうところ敵なし！　天下を取るつもりで指導力発揮。',
'対人運は来るもの拒まず、去る者追わずで丸くおさまりますよ！',
			),
			array(  "カテゴリー6", 
'結婚運は急進展の可能性あり！　新生活を始めるタイミングです。',
'結婚運は上々です！　最初から結婚を前提の真剣交際になりそう。',
'結婚運は夢や希望を広げるとき！　好きな人と未来を思い描いて。',
'結婚運は実現の可能性大！　周りの後押しでゴールインもあり。',
'結婚運は一目ぼれから電撃婚もアリ！　急進展に備えておくこと。',
'結婚運は祝福ムード！　幸せなゴールインを果たす可能性大。',
'結婚運はじっくり縁を深めるとき！　信頼関係が堅く結ばれます。',
'結婚運はスピード婚もアリ！　大事な決断の後に大きな幸せが。',
'結婚運は形式にこだわらない関係を構築。それぞれの幸せを模索！',
			),
		),
		array( "水晶玉子", 
			array(  "カテゴリー1", 
'総合運は、とても穏やかです。その中でも、自分の新しい部分を発見できます。',
'総合運は良い面が出やすいです。達成感がなくても焦らないことが大切。',
'総合運は行動力でアップします。積極的に挑戦してみてください。',
'総合運は今の役割を大切にするとアップします。日々の生活にツキがありそうです。',
'総合運はアップダウンが激しくなりそうです。感情を安定させることが大切です。',
'総合運は、何事も平常心で取り組むことでアップします。実力が認められる1年です。',
'総合運は、積極的に行動すると格段にアップします。自信を持ってください。',
'総合運は、自分の信念を大切にするとますます上昇します。実力が発揮できる年です。',
'総合運は、たくさんのチャンスがめぐってきそうです。自分の良さを発揮してください。',
'総合運は、比較的安定しています。穏やかに過ごすことが大切です。',
'総合運は、12年に一度の幸運がめぐってきそうです。夢を持ってください。',
'総合運は穏やかな運気です。自分からチャンスを見つけていくといいでしょう。',
			),
			array(  "カテゴリー2", 
'恋愛運はチャンス到来です。スポーツを楽しんでみるといいでしょう。',
'恋愛運は、いいなと思う人とすんなり親しくなれそうな勢いがあります。',
'恋愛運は上昇中です。誘いには快く応じるといいでしょう。',
'恋愛運はひとつひとつの出会いを大切にすると、チャンスが到来します。',
'恋愛運はフランクに付き合える人とのつながりを大切にするといいでしょう。',
'恋愛運は、一人一人の出会いを楽しんでみることでアップします。',
'恋愛運は、大チャンスに恵まれそうです。あなたの長所が生かされます。',
'恋愛運は、感情のコントロールが肝心です。冷静な気持ちを大切にしてください。',
'恋愛運は、異性の注目が高まる1年です。自信を持ってください。',
'恋愛運は、素早い判断力が試されそうです。相手の出方を冷静に見つめてください。',
'恋愛運は、たくさんのチャンスに恵まれそうです。勘を信じてみてください。',
'恋愛運は、誠実な人との出会いが期待できそう。自然体で近づいてください。',
			),
			array(  "カテゴリー3", 
'仕事運は周囲の人たちとの関係を良好にするとアップします。',
'仕事運は地道な姿勢でいることで、運気が上昇していくでしょう。',
'仕事運は自分らしさを大切にしてください。あなたの意見が注目を集めますよ。',
'仕事運は地位の高い人や上司からチャンスをもらえそうです。',
'仕事運は、自分の実力がいよいよ注目されそうな兆しがあります。',
'仕事運は、はっきりした態度でいるとアップします。あれこれ迷わないことです。',
'仕事運は、自分の正義感がいよいよ試されそうな運気です。自信を持ってください。',
'仕事運は、焦るとダウンしそう。つらいときは周囲に頼るといいでしょう。',
'仕事運は、協調することでアップします。周囲との会話を大切にしてください。',
'仕事運は、周りと和気あいあいと過ごすとアップします。相手の話にヒントありです。',
'仕事運は、長年の夢が叶いそうな運気です。目標を高く掲げてください。',
'仕事運は、周囲の人と協調すると良くなります。肩の力を抜くといいですよ。',
			),
			array(  "カテゴリー4", 
'金運はアイデアを駆使すると、アップしそうです。今までの経験が生かされます。',
'金運は劣等感を持つのは禁物。良いイメージを常に抱いてください。',
'金運は節約や投資に縁がありそうな運気です。意外な発見をすることでしょう。',
'金運は安定しています。日々の生活を大切にすることで無駄が省けます。',
'金運はいつもより慎重でいると運気が安定します。衝動買いに気を付けてください。',
'金運は、平常心でいると安定します。勝負することよりも貯金することです。',
'金運は、努力が実りそうな運気です。ちょっとした贅沢を楽しむといいでしょう。',
'金運は、少々不安定になりそうです。感情のコントロールを大切にしてください。',
'金運は、良い運気です。あなたらしさを大切にして、どんどん稼ぐといいでしょう。',
'金運は、とても穏やかです。今持っているものを大切にしてください。',
'金運は、チャンスが舞い込みそうです。夢が実現する勢いがあります。',
'金運は、散財しなければ安定します。貯金が向いているでしょう。',
			),
			array(  "カテゴリー5", 
'対人運は自分の意見をしっかり伝え、周りとのバランスを保つことが大切です。',
'対人運は少々誤解されやすい運気です。発言する前に熟考すること。',
'対人運は自分らしさを大切にすればするほど、アップしそうな運気です。',
'対人運は情報量を増やすことでアップします。会話を楽しむことです。',
'対人運はソフトな話し方が運気を呼びます。感情を安定させることです。',
'対人運は、自分らしさを大切にすれば安定します。周りに振り回されないことです。',
'対人運は、何かと注目される運気です。ファッションに工夫をしてみてください。',
'対人運は、会話が楽しめそうな運気です。聞き上手になることです。',
'対人運は、自信を持つほど上昇していきます。積極的に行動してください。',
'対人運は、会話することにツキがあります。話題性のある話がいいでしょう。',
'対人運は、人気が高まる運気。リーダーになりそうですね。',
'対人運は、話をよく聞くとアップします。思いやりが大切。',
			),
			array(  "カテゴリー6", 
'結婚運は恋愛が順調にいけば叶いそうです。まずは恋愛を充実させてください。',
'結婚運は、期待を手放すほど、すんなり叶いそうな予感です。',
'結婚運は、恋人との充実した時間を持つことで叶いやすい予感です。',
'結婚運は相手から熱烈にプロポーズされる兆しがありそうです。',
'結婚運はまずやり残したことを整理すれば叶いそうな兆しです。',
'結婚運は、自分の本心を相手に見せることで、叶いそうな兆しです。',
'結婚運は、もう少し自分の魅力を追究してから、チャンスがめぐってきます。',
'結婚運は、恋愛を思う存分楽しむことで巡ってきそうです。',
'結婚運は、少し足踏み状態が続きます。冷静な気持ちでいることです。',
'結婚運は、冷静な判断が必要です。そうすれば幸せな結婚が叶いますよ。',
'結婚運は、大チャンスの兆しです。「ずっと一緒にいたい」と思える人が現れます。',
'結婚運は相手の好みに合わせるようにすると、すんなり叶いそうです。',
			),
		),
		
		array( "星ひとみ", 
			array(  "カテゴリー1", 
'総合運は、自分に力をつけていくことで運気にも力がつきます。',
'総合運は、自己投資をテーマに過ごしていくことで吉となります。',
'総合運は、未来を見据えて準備を始めることで吉となります。',
'総合運は、運気が上昇するとき。何事にも恐れずチャレンジを。',
'総合運は、運気の勢いが出てくるときです。活動的になって吉。',
'総合運は、ものすごいパワーを持つとき。思い切った決断も吉。',
'総合運は、落ち着いた状態になります。身辺の見直しと整理を。',
'総合運は、最高の運気を迎えます。思うままに行動しましょう。',
'総合運は、緩やかな流れになります。油断せず慎重に動くのが吉。',
'総合運は、上昇の流れです。後悔していることに再チャレンジを。',
'総合運は、さらなる上昇の勢いがあります。レベルアップのとき。',
'総合運は、いい状態で安定し、すべてにおいて満たされます。',
			),
			array(  "カテゴリー2", 
'恋愛運は、自分から動くよりも待つことでいい出会いがありそう。',
'恋愛運は、緩やかな動きになります。その流れに任せるのが吉。',
'恋愛運は、ゆっくりと動き始めるとき。恋の準備が整い始めます。',
'恋愛運は、出会いが活発になるとき。いろんな人を見ましょう。',
'恋愛運は、出会いが多くなります。理想の人も現れそうですよ。',
'恋愛運は、とてもいいです。運命と呼べる人と出会えそうよ。',
'恋愛運は、緩やかな流れになります。焦らずゆったりと構えて。',
'恋愛運は、モテ期の到来で華やかに。人となりを見ましょう。',
'恋愛運は、迷いが出てきそう。焦らず冷静に動くのが吉ですよ。',
'恋愛運は、再会や復活愛の兆しが……。そこに幸せがあります。',
'恋愛運は、流れに勢いがあります。そのまま結婚の可能性も。',
'恋愛運は、満たされる状態を得ます。温かい愛を見つけそうですよ。',
			),
			array(  "カテゴリー3", 
'仕事運は、スキルアップに適した時期。資格取得や技術向上を。',
'仕事運は、準備期間。アイデアはストックして、知識も吸収を。',
'仕事運は、地道な動きが吉。情報収集をしながら計画を立てて。',
'仕事運は、徐々に活気づいてきます。失敗もいい経験になりますよ。',
'仕事運は、良好です。具体的な目標を持つとさらに上昇します。',
'仕事運は、進むべき道が見える時期。転職にも適しています。',
'仕事運は、ひとつひとつ見直しながらゆっくり前進するのが吉。',
'仕事運は、最高の運気。思うままパワフルに動いていけますよ。',
'仕事運は、良好です。足元をしっかり固めて地道な動きが吉。',
'仕事運は、経験が活かされる時期。再チャレンジも吉ですよ。',
'仕事運は、レベルやランクが上がる時期。評価も高まります。',
'仕事運は、これまでの努力が報われて、成果を手にしていきます。',
			),
			array(  "カテゴリー4", 
'金運は、自分のためにお金を使うのが吉。貸し借りは厳禁です。',
'金運は、自己投資にお金を使うのが吉。外部の流れに合わせないで。',
'金運は、自身のリフレッシュに費やすと、回りが良くなります。',
'金運は、浪費に注意して。習い事などに使うと運気も上がります。',
'金運は、自分に必要な投資に使うと、後で大きく戻ってきます。',
'金運は、悪くないです。大きな決断による大きな出費は吉ですよ。',
'金運は、自身や身の回りのメンテナンスに使うことで上がります。',
'金運は、ハッピーな状態に。仕事での昇進、昇格がありそうです。',
'金運は、慎重になるのが吉。うまい話はないと思って断ること。',
'金運は、上昇します。意外なことからお金が入ってきそうですよ。',
'金運は、いい時期。収入が増えそうですよ。自己投資をすると吉。',
'金運は、いい状態で安定します。人のために使うとさらにアップ。',
			),
			array(  "カテゴリー5", 
'対人運は、不要な人との縁が切れて、必要な人が残っていきます。',
'対人運は、周りの流れに任せて動くことで平穏な状態を保てます。',
'対人運は、役割を終えた人との別れと必要な人との出会いの年。',
'対人運は、活発になります。素敵な出会いの鍵は行動すること。',
'対人運は、積極的に動くと、プラスになる人との交流が増えます。',
'対人運は、良好です。行動することで宝となる人脈を得ます。',
'対人運は、見直しをする年。整理をするといい出会いがあります。',
'対人運は、非常に良好。積極的に動くことでいい出会いがあります。',
'対人運は、身近な人を大切にすることで味方を増やしていきます。',
'対人運は、疎遠になった人との関わりが大きなプラスになります。',
'対人運は、とても良好。力になってくれる人が集まります。',
'対人運は、感謝を思いやりの姿勢を示すことでより良くなります。',
			),
			array(  "カテゴリー6", 
'結婚運は、焦らないこと。幸せな結婚をするための準備期間です。',
'結婚運は、自身の心の流れに任せて焦らないのが吉です。',
'結婚運は、将来に向けてしっかりと計画を立てることが大切です。',
'結婚運は、少し動きが出ます。焦らずに見極めていくのが吉。',
'結婚運は、悪くありません。ゴールを焦らず慎重に動くのが吉。',
'結婚運は、とても良好ですね。この時期の決断には自信を持っていいですよ。',
'結婚運は、慎重になるのが吉。冷静に自分の気持ちと向き合って。',
'結婚運は、とても良好です。自分で幸せを掴む気持ちで動いて。',
'結婚運は、悪くありません。ただし冷静に動くほうが吉です。',
'結婚運は、上昇します。特に復活と復縁の関係は幸運の流れに。',
'結婚運は、最高の運気です。ここで決める人は運命の相手ですよ。',
'結婚運は、とてもいいです。「この人」と思う人に間違いなし。',
			),
		),
		array( "シウマ", 
			array(  "カテゴリー1", 
'総合運は「知識」を充実させるとき。資格試験の合格を目指しても。',
'総合運は人との関わりが増えるとき。奉仕精神が旺盛になります。',
'総合運は新しいことにどんどんチャレンジするのにいいタイミング。',
'総合運は人脈が豊かに広がり、良いことは人伝てでやってきます。',
'総合運は白黒ハッキリ、「やる」か「やらない」か決めるとき。',
'総合運は目に見えない力に守られる年。先祖に感謝の気持ちを。',
'総合運は楽しさが楽しさを呼び込むとき。笑顔が幸運のカギに。',
'総合運は変化のとき。どう変えたいのか自分の意志で決めるべき。',
'総合運はやる気満々。今までやってきたことの結果が出るとき。',
			),
			array(  "カテゴリー2", 
'恋愛運は、「傾向と対策」をしっかりするにはとても良い年。',
'恋愛運は「優しさ」があなたのチャームポイントになりモテモテに。',
'恋愛運は人脈を広げると、知り合いを通じて恋人候補が現れます。',
'恋愛運は出会いのチャンス急増。積極的なアピールが効果あり。',
'恋愛運は「遊び心」を大事にすると異性の心をギュッと掴みます。',
'恋愛運は「運命の人」との出会いが訪れる可能性が高まりますよ。',
'恋愛運はワクワクするようなたくさんのチャンスが巡ってきます。',
'恋愛運は積極性で、現状維持からステップアップするタイミング。',
'恋愛運は最高のモテ期到来。ひとめぼれや突然の告白もあり。',
			),
			array(  "カテゴリー3", 
'仕事運は充電期間。地道にコツコツ粘り強く頑張るのが正解です。',
'仕事運は次に向かう準備のとき。サポート運もアップしますよ。',
'仕事運は周囲からの評価アップ。人と関わる仕事で成功運あり。',
'仕事運は企画力やアイデアがさえて、楽しく仕事ができるとき。',
'仕事運は信じた道を進むとキャリアアップの可能性が高まります。',
'仕事運は、これまでの努力がカタチになり開花するタイミング。',
'仕事運は楽しみながらどんどん素晴らしい成果を上げられるとき。',
'仕事運は今までのやり方を変えると大きくチャンスが広がります。',
'仕事運は勢いに乗って成功への階段を一気に駆け上っていきます。',
			),
			array(  "カテゴリー4", 
'金運は家計にゆとりが生まれるとき。余剰分は貯蓄に回して正解。',
'金運は節約モードが吉。楽しみながらゲーム感覚で貯蓄してみて。',
'金運は交際費多し。楽しみのために使うと運気がグッと好転します。',
'金運は上々。広く情報を集め将来を見越して貯蓄をしてみること。',
'金運は仕事運と直結。能力を活かして働ける立場を確保すること。',
'金運はお金の流れを細かく確認。ケチケチしないで財運アップ。',
'金運は抜群です。棚ぼた的な財運アリ。自己投資をするのが吉。',
'金運はショッピングにツキあり。自己投資でさらに財運アップ。',
'金運はひらめきがアップして、勝負運あり。クジで運試しは吉。',
			),
			array(  "カテゴリー5", 
'対人運は、冒険を避けてクールに判断を。情に流されないこと。',
'対人運は聞き役に徹してみて。人当たりの良さが好感を与えます。',
'対人運はコミュニケーション能力アップ。空気を読むのが正解。',
'対人運は全ての出会いを大切に。才能を引き出してもらえそう。',
'対人運は一流の場所に足を運ぶと、一流の出会いがありますよ。',
'対人運は目上の人から引き立て運あり。礼儀やマナーを大切にして。',
'対人運は人気運アップ。いろいろな場所に気軽に出かけてみて。',
'対人運は固定概念や先入観を持たないと大きく広がりを見せます。',
'対人運は抜群。周りの人たちに合わせるほうがうまくいきます。',
			),
			array(  "カテゴリー6", 
'結婚運は温かい家庭を持ちたい素敵な異性との関係が深まります。',
'結婚運は、お互いに支え合える人との関係が一歩前進するとき。',
'結婚運は会話が弾む人と真剣交際に進展する可能性がありますよ。',
'結婚運は玉の輿、逆玉の輿の可能性あり。良縁が数多くあります。',
'結婚運は、一途な愛を捧げることで結婚への道が開けます。',
'結婚運は、理想の恋人と結婚に向けて大きく舵を切るときです。',
'結婚運は恋に落ちても冷静にいることで婚約まで進む可能性あり。',
'結婚運は長い付き合いは結婚に。最初から結婚前提の交際もある。',
'結婚運は過去にケジメをつけることで、一気に弾みがつきますよ。',
			),
		),
		array( "木村藤子", 
			array(  "カテゴリー1", 
'総合運は好調が続きます。安定して結果を出せるでしょう。',
'総合運は力量が求められます。集大成を迎える年となりそうです。',
'総合運は安定した流れが続きますが、一度の失敗が尾を引きます。',
'総合運は不安定な流れが続き、結果を出すには苦労するでしょう。',
'総合運は、あなたを取り巻く流れがよくなっていくでしょう。',
'総合運は、流れが停滞し微妙な状況が続きます。状況を見極めて動くと吉。',
'総合運はよい流れをつかむチャンスが訪れ、勢いよく突き進んでいけます。',
'総合運はよい流れがやってきて、思う通りに物事を進めていけます。',
'総合運は、頑張りが報われ緩やかによくなっていくでしょう。',
			),
			array(  "カテゴリー2", 
'恋愛運はよいでしょう。新たな出会いに恵まれそうです。',
'恋愛運は悪くはありませんが、恋の進展には時間がかかってしまいます。',
'恋愛運はよく、運命的な恋と巡り合う可能性があります。',
'恋愛運は悪いわけではありません。自分の気持ちに素直になる事が重要。',
'恋愛運は抜群で、新鮮な気持ちで恋を楽しめる一年となりそうです。',
'恋愛運は、不安など抱かず、むしろ期待を持って恋に臨めます。',
'恋愛運は波があります。気持ちの整理に時間がかかるかもしれません。',
'恋愛運は安定しています。身近な人物との恋愛につながる可能性も。',
'恋愛運は不安定になりがち。時には思うように進展せず少し苦労します。',
			),
			array(  "カテゴリー3", 
'仕事運はよく、新たな挑戦をしようというときに輝けるでしょう。',
'仕事運はよいと言えます。あなたへの注目度もあがっていくはずです。',
'仕事運は安定感に磨きがかかります。仕事での手応えを感じる一年です。',
'仕事運は、停滞した空気が流れたときに本領を発揮できそうです。',
'仕事運は創造力に磨きがかかり、持っている力を発揮する年でしょう。',
'仕事運は大きなチャンスを与えられるほど、力を発揮できるでしょう。',
'仕事運は築いた人脈を生かす事で、成果を収め評価されそうです。',
'仕事運は判断力や決断力が磨かれ、進むべき道を切り拓いていけます。',
'仕事運は悪くありません。いい意味で期待を裏切る結果を手にできます。',
			),
			array(  "カテゴリー4", 
'金運は、臨時収入など予想外の展開に驚く年になるでしょう。',
'金運はよくはありませんが、悪くもありません。チャンス到来を待つが吉。',
'金運はよいですが、実際に財を手にするまでに時間がかかります。',
'金運は不安定です。しかし、かけがえのない宝物を手にできるチャンス。',
'金運は非常によく、高い収入を得られるチャンスがもたらされそうです。',
'金運はよく、収入に困りません。この年は生活にゆとりが出てきます。',
'金運は安定的。しかし、実際に手にする額は少ないかもしれません。',
'金運は安定しています。大きな成功を手にするための基盤づくりの年です。',
'金運は波が激しいですが、取り組んできたものが実利に結びつきます。',
			),
			array(  "カテゴリー5", 
'対人運はよい波が来ています。疎遠だった人と急接近できるかもしれません。',
'対人運は難ありですが、存在感を発揮するよいきっかけとなりそうです。',
'対人運はよい反面、必要以上に重圧がかかる場面が多くなりそうです。',
'対人運は波が激しく、ささいな言動が周囲の反感を買ってしまう事も。',
'対人運は好調ですが、取り巻く環境ががらりと変わる事もあり得ます。',
'対人運は穏やかです。友人や同僚たちから認められる年となりそうです。',
'対人運は安定的。存在を周りにアピールするにはいい一年となります。',
'対人運は安定しています。評価はおおむねあがっていくようです。',
'対人運は変化の激しい一年。自己中心的な振る舞いに注意が必要です。',
			),
			array(  "カテゴリー6", 
'結婚運はよく、運命的な出会いや、強い絆が結ばれる縁に恵まれます。',
'結婚運は悪いわけではありません。身近な人との縁に期待しましょう。',
'結婚運は恵まれますが、自分の気持ちに素直になるには時間が必要です。',
'結婚運は波があり、一歩踏み出せば、あっという間に進展していくでしょう。',
'結婚運は非常によく、勢いよく進展していくでしょう。',
'結婚運はよい年です。不安もなく進展していくでしょう。',
'結婚運は穏やかです。気持ちの整理に時間がかかるかもしれません。',
'結婚運は安定しています。落ち着いて相手と向き合えるはず。',
'結婚運は不安定になりがち。我慢が必要となる場面が多くなります。',
			),
		),
		);
?>