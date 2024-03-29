<?php
/**
 * menu_id : nw22_016
 * 島田秀平：二人用 恋愛
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'nw22_016',
			'contents'			 => 'spshimada_zap',
			'img_name'			 => 'zap_spshimada',
			'teller_name'		 => '島田秀平',
			'isp_mid'			 => '53w015',
			'nif_menukey'		 => 'unsei_2022_016',
			'price'				 => '2000',
			'discount'			 => '1800',
			'design_cd'			 => '20',
			'person'			 => '2',
			'category_name'		 => 'love',
			'release_date'		 => '20211201',
			'title'				 => '年内中に成就もある？　島田秀平がズバリ占う二人の2022年の恋の行方',
			'caption'			 => '2022年、あなたとあの人の恋はどう進んでいくのでしょうか？　ライバルは現れる？　二人の関係が変わるきっかけや年末に結ばれる可能性は？◆人気女優の結婚を予言し的中させた実績を持つ島田秀平があの人の本音と恋の未来を、とことん鑑定。恋の成就へ導きます！',
            'base_1_title_self' => 'あなたの運命数',
            'base_2_title_self' => 'あなたの基本性格',
            'base_1_title_other' => 'あの人の運命数',
            'base_2_title_other' => 'あの人の基本性格',
            '1_min_title'  => '仕事？　遊び？　恋愛？　2022年、あの人が最優先することは何？',
            '2_min_title'  => '2022年、あなたの気持ちはあの人にどのくらい伝わる？',
            '3_min_title'  => '2022年、あの人とあなたがお互いに与える影響',
            '4_min_title'  => '2022年、二人の関係が変わるのはどんなとき？',
            '5_min_title'  => '関係変化のきっかけは……あの人から？　あなたから？',
            '6_min_title'  => 'その後、二人の関係はどうなっていく？',
            '7_min_title'  => 'ぶっちゃけ、2022年はあの人を忘れて他の人を見つけたほうがいい？',
            '8_min_title'  => '',
            '9_min_title'  => 'あの人を諦めた場合、新たな異性と出会える確率は？',
            '10_min_title' => '2022年、あの人を狙う恋のライバルが現れる？',
            '11_min_title' => 'もし恋のライバルが現れたら、あなたはどうすべき？',
            '12_min_title' => '2022年、二人の距離を縮めたいならやってはいけないこと',
            '13_min_title' => '2022年、年内中にあの人との恋に結論は出る？',
            '14_min_title' => '2022年、この恋を幸せなものにするために'
		);

// 小メニューロジック
$logic = 'f';

// Next枠
$next = array( "nw22_013", "nw22_014", "nw22_015" );

// 一部見せテキスト
$free = array(
		array( "nw22_016_1", 
'　2022年に[%NAME_OTHER%]が最優先することは、ズバリ仕事です！　この年のテーマは「スタート」。何か新しいことを始める年になります。まだ見ぬ世界に対する漠然とした不安を感じながら……',
'　2022年の[%NAME_OTHER%]が優先するのは、プライベートの「遊び」になるでしょう。この年のあの人は周囲に高く評価されていて信頼も厚く、特に頑張らなくても仕事はきっちりできます。逆に……',
'　2022年の[%NAME_OTHER%]は「楽しむこと」がテーマです。なので当然、最優先するのは遊び……と思うとそうではなくて、実は「恋愛」なんです。その理由は遊びに関しては、運命が自然に楽しいこと……',
'　2022年の[%NAME_OTHER%]が最も優先するのは「恋愛」です。この年のあの人は「安定」がテーマなので、将来の安定のためにも、ちゃんとした恋愛が必要だと考えるでしょう。まじめさが高まって……',
'　2022年に[%NAME_OTHER%]が優先するのは「仕事」です。チャレンジの年なので、恋愛や遊びなどあらゆる面で多くのチャレンジのチャンスがあります。中でも人生を支えることとなる仕事に全力を傾ける……',
'　2022年の[%NAME_OTHER%]が優先するのは「仕事」です。仕事面で父性や母性を発揮するでしょう。この年のあの人は、職場やグループ内で、周囲の人に愛を惜しみなく与えることは当たり前のことだと……',
'　2022年の[%NAME_OTHER%]が優先するのは「遊び」です。あの人は2021年までは仕事を優先して、バリバリ活躍していたと思います。自分を見つめ直すことになる2022年は、仕事面では……',
'　2022年の[%NAME_OTHER%]が優先するのは「恋愛」です。内省の2021年を経て、この年のあの人は現実社会に戻って、精一杯活躍することになりますよ。自分の技術と知識を磨いたあの人は……',
'　2022年の[%NAME_OTHER%]が優先するのは「遊び」になります。あの人にとっては魂の浄化がこの年のテーマ。魂に蓄積したいろいろなものを洗浄し、心のひだが新たな感動に対して鋭敏な状態に……',
		),
		array( "nw22_016_2", 
'　2022年の[%NAME_OTHER%]は、仕事や遊び、恋愛などいろいろな面で新しいことをスタートする年です。常にわくわくとした期待感を抱いているので、感受性が高まっています。まずはあの人の……',
'　2022年の[%NAME_SELF%]の気持ちは、[%NAME_OTHER%]に伝わりやすい状態ですよ。それも年の後半になればなるほど、伝わりやすくなります。この年のあの人は2021年に始めたことを……',
'　2022年の[%NAME_OTHER%]は、思い切り楽しむ一年を過ごすことになります。人が楽しむ場を盛り上げるものはたくさんの笑顔です。いつでも楽しいことをイメージして笑顔を忘れずにいることで……',
'　2022年の[%NAME_OTHER%]は、[%NAME_SELF%]の気持ちに気づきにくくなっていますよ。あの人が現実的になっているので、確かなものを求める傾向が強まっているからです。あなたの……',
'　2022年、[%NAME_SELF%]の気持ちは[%NAME_OTHER%]に伝わりやすくなっていますよ。この年のあの人は本能が刺激されていて、感受性が敏感になっています。恋をしやすい状態となって……',
'　2022年の[%NAME_SELF%]の気持ちは[%NAME_OTHER%]に伝わりやすいですよ。想像をはるかに超えて伝わると言ってもいいでしょう。この年のあの人には、他者に対する責任感と愛が満ちて……',
'　2022年の[%NAME_SELF%]の気持ちは、[%NAME_OTHER%]にはいまひとつ伝わりにくくなるかもしれません。あの人が思考面をフルに働かせるこの年は、その思考が自分の内面に向き……',
'　2022年の[%NAME_OTHER%]には、[%NAME_SELF%]の気持ちはあまり伝わらないでしょう。というのは、この年のあの人は、あまり社交的ではないからです。とにかく目標達成の欲求が……',
'　2022年の[%NAME_OTHER%]には、[%NAME_SELF%]の気持ちが伝わりやすくなりますよ。この年のあの人には多くの変化が起こることになります。今まで持っていたものを手放したり……',
		)
		);



// 結果テキスト
$text = array(
		array( "nw22_016_1", 
'　2022年に[%NAME_OTHER%]が最優先することは、ズバリ仕事です！　この年のテーマは「スタート」。何か新しいことを始める年になります。まだ見ぬ世界に対する漠然とした不安を感じながら、欲求と期待感がむくむくと湧き起こってくるはずです。着実な一歩を踏み出すことになります。<br><br>　[%NAME_OTHER%]は自分の足元を固めるために、生活の基盤となる仕事を最優先しますよ。この年は仕事面でも、新しい種をまくことで確実な成果が得られます。今まで温めていたアイデアを練り上げて企画を立てるなどして、本当にやりたかった仕事に一歩前進するでしょう。',
'　2022年の[%NAME_OTHER%]が優先するのは、プライベートの「遊び」になるでしょう。この年のあの人は周囲に高く評価されていて信頼も厚く、特に頑張らなくても仕事はきっちりできます。逆にこれ以上仕事に力を入れると、かえって心身のバランスを崩してしまう危険があるほどです。<br><br>　感受性の高まっている[%NAME_OTHER%]に必要なのは、遊びで自分を解放してあげること。[%NAME_SELF%]はあの人に新たな楽しさや美意識に触れることをアドバイスしてみてください。あの人の仕事で張り詰めた神経がリフレッシュされて、[%NAME_SELF%]との関係が恋愛に進展する可能性もありますよ。',
'　2022年の[%NAME_OTHER%]は「楽しむこと」がテーマです。なので当然、最優先するのは遊び……と思うとそうではなくて、実は「恋愛」なんです。その理由は遊びに関しては、運命が自然に楽しいことをあの人のために準備してくれるからなんです。<br><br>　その楽しいことの中で、この年は楽しいことを通じてあの人に多くの出会いがありそうですよ。その中であの人は、運命の相手を見つけるかもしれません。日常を忘れて楽しむ場で、あの人は意気投合できる相手を見つけて、できる限り楽しい時間を満喫するでしょう。それが[%NAME_SELF%]であれば、最高の展開になるかもしれません。',
'　2022年の[%NAME_OTHER%]が最も優先するのは「恋愛」です。この年のあの人は「安定」がテーマなので、将来の安定のためにも、ちゃんとした恋愛が必要だと考えるでしょう。まじめさが高まっているので、じっくりと運命の相手を見つけようとします。仕事も順調なこの年のあの人は、多くの出会いに恵まれるでしょう。実際に恋愛を意識するような出来事も舞い込みやすくなります。<br><br>　仕事ぶりを認めている人や、世話役をしているサークルの仲間などの紹介で、[%NAME_OTHER%]の恋人候補が現れるかもしれませんね。',
'　2022年に[%NAME_OTHER%]が優先するのは「仕事」です。チャレンジの年なので、恋愛や遊びなどあらゆる面で多くのチャレンジのチャンスがあります。中でも人生を支えることとなる仕事に全力を傾けることになります。あの人は2021年に経験した大きな変化を乗り越えて、この年は仕事面で大きな成功を収めるために自分の力を使う一年となるでしょう。<br><br>　チャレンジの波に乗った[%NAME_OTHER%]は、今の仕事をグレードアップさせたり、新しい仕事を形にしたりするために邁進します。自分が選んだチャンスの大きな波を見事に乗りこなすでしょう。',
'　2022年の[%NAME_OTHER%]が優先するのは「仕事」です。仕事面で父性や母性を発揮するでしょう。この年のあの人は、職場やグループ内で、周囲の人に愛を惜しみなく与えることは当たり前のことだと感じます。いつも他者の心配をしているあの人ですが、この年は特に、自分の仲間のことが気がかりになるでしょう。<br><br>　残業している同僚や頑張っている仲間を見ると放っておけず、協力を申し出るでしょう。結果、仕事がうまくいけば、自分が苦労を買って出てでも仲間を助けたいと思うのがこの年のあの人です。',
'　2022年の[%NAME_OTHER%]が優先するのは「遊び」です。あの人は2021年までは仕事を優先して、バリバリ活躍していたと思います。自分を見つめ直すことになる2022年は、仕事面では少し小休止となるでしょう。その上で新たな欲求を探し出し、自分の内面を追求して分析していくのが、この年の[%NAME_OTHER%]のミッションとなります。<br><br>　遊びといっても、レジャーなどというよりは、もっと知的なジャンルになります。歴史や哲学、文学などあらゆる文化を学ぶことで、[%NAME_OTHER%]の人格の奥行きが深まる年になるでしょう。高次の教養を身につけることで、仕事にも相乗効果が出てきますよ。',
'　2022年の[%NAME_OTHER%]が優先するのは「恋愛」です。内省の2021年を経て、この年のあの人は現実社会に戻って、精一杯活躍することになりますよ。自分の技術と知識を磨いたあの人は、体力的にも精神的にも限界まで酷使して働くでしょう。心身は消耗し、気づかないうちに追い詰められる可能性があります。そんなときに必要なのは、あの人のことを気遣い支えてくれる人です。<br><br>　なかなか連絡する時間が取れない場合でも、一本のSNSでSOSを伝えられる。そんな相手に、[%NAME_OTHER%]の心身の健康は救われます。そんな人を求める年になりますよ。',
'　2022年の[%NAME_OTHER%]が優先するのは「遊び」になります。あの人にとっては魂の浄化がこの年のテーマ。魂に蓄積したいろいろなものを洗浄し、心のひだが新たな感動に対して鋭敏な状態になることを目指します。そのためにあの人が追い求めるのは、人々を感動させ魂を清める文学や芸能などのアート。そういった上質な遊びを、この年のあの人は渇望しているのです。<br><br>　新しいことを学ぶことも遊びです。この年は学びでも「新しい」がキーワード。新たな視野を獲得するために、思いのままにあらゆるジャンルの本や映像などの作品に触れていくあの人の心は、豊かになっていくでしょう。',
		),
		array( "nw22_016_2", 
'　2022年の[%NAME_OTHER%]は、仕事や遊び、恋愛などいろいろな面で新しいことをスタートする年です。常にわくわくとした期待感を抱いているので、感受性が高まっています。まずはあの人の視界に、なるべくあなたが入ることを意識してください。そして機会を見てあの人の関心のあることを話題にすることで、[%NAME_SELF%]のことをより意識するようになりますよ。<br><br>　自分の好きな話題を話しているときは、誰でも楽しくなります。その中で「[%NAME_OTHER%]のことをわかっていますよ」というニュアンスをちょっとずつ加えていくことで、あなたの気持ちが少しずつあの人に伝わりやすくなるでしょう。',
'　2022年の[%NAME_SELF%]の気持ちは、[%NAME_OTHER%]に伝わりやすい状態ですよ。それも年の後半になればなるほど、伝わりやすくなります。この年のあの人は2021年に始めたことを、より深めていきたい欲求が高まります。そのために誰かと協力し、ゆっくり進めていきたいと考えるんです。<br><br>　あの人が力を入れたいものが固まってくるほど、あなたがあの人に気持ちを伝えるのに相応しい方法が明確になっていきます。あの人が深めたいと思っている分野を中心に、話題を提供したり、共に語り合ったりすることで、[%NAME_SELF%]の気持ちをうまく伝えられますよ。',
'　2022年の[%NAME_OTHER%]は、思い切り楽しむ一年を過ごすことになります。人が楽しむ場を盛り上げるものはたくさんの笑顔です。いつでも楽しいことをイメージして笑顔を忘れずにいることで、[%NAME_SELF%]の気持ちはあの人に伝わりやすくなりますよ。毎日起きたときに、鏡の前で笑顔のチェックを習慣にしましょう。<br><br>　例えばSNSに写真を投稿するときは、最高の笑顔を意識して画像をアップしてください。仕事やプライベートでオンライン通話をするときも、常に自分の笑顔チェックするように。もし画像修正する場合は、ほどほどにしましょう。笑顔のバランスが不自然になるのは印象が良くないですよ。',
'　2022年の[%NAME_OTHER%]は、[%NAME_SELF%]の気持ちに気づきにくくなっていますよ。あの人が現実的になっているので、確かなものを求める傾向が強まっているからです。あなたの気持ちが不確かだという意味ではなく、フワッとした恋心のようなやわらかい気持ちに、心が向かいにくくなっているのですね。<br><br>　あの人の気持ちは、より安定した現実的なものに向かいます。2021年に多少ハメを外した反動で、一歩ずつの積み重ねが大切だと思うような意識になっているのです。空想やイメージの世界よりも現実が重要なのですね。だから気持ちを伝えるときは、手紙やプレゼントなど、直接的であるほど有効ですよ。',
'　2022年、[%NAME_SELF%]の気持ちは[%NAME_OTHER%]に伝わりやすくなっていますよ。この年のあの人は本能が刺激されていて、感受性が敏感になっています。恋をしやすい状態となっているので、[%NAME_SELF%]の好意を敏感に感知することになります。<br><br>　だから、この年の[%NAME_SELF%]は、[%NAME_OTHER%]の前では油断ができませんよ。あなたの表情ひとつから、あの人はあなたの気持ちをすくいとってしまいます。自分の気持ちを隠そうとしても、テレパシーのように伝わってしまうでしょう。いっそ開き直って、自分の気持ちをオープンにしてみると、恋は新たな展開を見せますよ。',
'　2022年の[%NAME_SELF%]の気持ちは[%NAME_OTHER%]に伝わりやすいですよ。想像をはるかに超えて伝わると言ってもいいでしょう。この年のあの人には、他者に対する責任感と愛が満ちているからです。悩み事を相談すれば、親身になって応えてくれます。それだけでなく、自分にできる援助は何でもしてあげたいくらいに思ってくれるでしょう。<br><br>　[%NAME_OTHER%]は[%NAME_SELF%]が相談すれば、あなた自身が気づいていなかった自分の感情まで指摘してくれるでしょう。あなただけでなく、博愛的な精神で、誰の悩みでも聞きます。自分が特別でいたいあなたにとっては、そのことを悔しく感じることもあるでしょう。',
'　2022年の[%NAME_SELF%]の気持ちは、[%NAME_OTHER%]にはいまひとつ伝わりにくくなるかもしれません。あの人が思考面をフルに働かせるこの年は、その思考が自分の内面に向きがちになります。自分の知識を磨くことによって魂が向上する一方で、他者への関心が薄れる傾向にあるからです。<br><br>　[%NAME_OTHER%]は世間の雑事や雑音から距離を置き、自分の考えをまとめたい欲求に駆られやすくなっています。これまでのことを振り返ったり、これから先を考えたりする。そのために、ひとりの時間と空間を多く取りたいと願うようになります。[%NAME_SELF%]の気持ちを伝える時間や場所も限られてしまうでしょう。',
'　2022年の[%NAME_OTHER%]には、[%NAME_SELF%]の気持ちはあまり伝わらないでしょう。というのは、この年のあの人は、あまり社交的ではないからです。とにかく目標達成の欲求が高まっているので、仕事以外に自分の時間を使うことを望まないんです。あの人はプロとして昇り詰めるために、働くこと以外のことを犠牲にしても構わない覚悟でしょう。<br><br>　そしてこの年は、[%NAME_OTHER%]の影響力が高まっています。組織や団体の中で強い影響力を振るうことで、人々をコントロールすることになります。自分が発信するパワーが強すぎて、[%NAME_SELF%]の思いを感知することが難しい状態になっているのですね。',
'　2022年の[%NAME_OTHER%]には、[%NAME_SELF%]の気持ちが伝わりやすくなりますよ。この年のあの人には多くの変化が起こることになります。今まで持っていたものを手放したり、ずっと続けていたものをやめることになったり。それはあの人にとって、ある種の喪失感を伴うものでしょう。その過程で、あの人は人の心の痛みを学んでいきます。<br><br>　人の気持ちに敏感になった[%NAME_OTHER%]は、他者に対する理解力が高まるんです。[%NAME_SELF%]の気持ちにも繊細に反応してくれるようになりますよ。ただ、あの人の心はセンシティブな状態になっているので、傷つけないように穏やかに伝えることが大切です。',
		),
		array( "nw22_016_3", 
'　2022年の[%NAME_OTHER%]は、自分の興味のあることに常にアンテナを張っています。そして自分の関心がある新しいことを、毎日のようにキャッチします。あの人は[%NAME_SELF%]に、自分が見つけた新しい面白いことを教えてくれますよ。<br><br>　あなたはその情報を受け取り、それを体験したいと思うでしょう。おいしいお店があると聞けば食べに行き、面白い小説があると聞けば読んでみて、その感想をあの人に伝えます。情報のキャッチボールでお互いに良い影響を与え合うのです。あの人はあなたが自分の話を聞いて興味を持ってくれたことを喜んで「今度は一緒に行こうよ！」と誘ってきますよ。',
'　2022年の[%NAME_OTHER%]が[%NAME_SELF%]に与える影響は、人と向かい合い協力することを学ばせてくれることです。この年のあの人はパートナーシップがテーマとなっています。あなたとパートナーを組むことによって、成功をつかむことができるのです。あなたは、あの人といることで安心感と最上の癒やしを得られることを、教えてもらうでしょう。<br><br>　あなたはあの人に対して、美意識を高めることで影響を与えることができますよ。この年の[%NAME_OTHER%]は美しいものに感受性が高まっています。あなたが着ているものや髪形など自分のセンスを活かすことで、あなたへの敬意と好意が高まりますよ。',
'　2022年の[%NAME_OTHER%]が[%NAME_SELF%]に与える影響は、楽しいことを教えてくれることです。この年のあの人は楽観的な気分で過ごします。先のことを案じたり不必要に計画的になりすぎたりすることもなく、今の時間を楽しむでしょう。その楽しさをあなたも享受することになります。<br><br>　[%NAME_SELF%]が[%NAME_OTHER%]に与える影響は、一緒に遊ぶ人の笑顔が楽しさを倍増させるという気づきです。あなたの屈託のない心からの笑顔が、あの人の楽しみをいっそう盛り上げることになるのです。「二人でいると何倍も楽しい」ということに気づくことが、お互いが与える影響ですよ。',
'　2022年の[%NAME_OTHER%]は、[%NAME_SELF%]に対してまじめで誠実に接してくれます。あなたがあの人に相談をすれば、責任感を持って応えてくれるでしょう。この年のあの人は、確かな人格を身につけた大人として、あなたを導いてくれる存在になります。<br><br>　[%NAME_SELF%]は[%NAME_OTHER%]に対して、安らぎを与えることができるでしょう。仕事でも精一杯働くあの人は、自分の理想を次々と形にしていきますが、その過程で少し頑固になりやすい傾向も出てきます。まじめさが高じて、人に必要以上に厳しくあたる場面もあるかもしれません。そんなときにあなたの存在が、あの人を和ませることになるのです。',
'　2022年の[%NAME_SELF%]は、[%NAME_OTHER%]の人生のチャレンジを目の当たりにすることがありますよ。あの人に次々に舞い込むアクシデントを知るたびに、あなたの心が揺さぶられます。ハラハラドキドキしながら自分のことのように見守る自分に、あの人に対する強い恋心を自覚するでしょう。それがあの人があなたに与える影響です。<br><br>　[%NAME_OTHER%]はチャレンジの渦中でも、[%NAME_SELF%]が自分のことを見ていてくれることを知っています。まるでスポーツ選手が観客からパワーをもらうように、あの人はあなたから勇気をもらえるんです。それが、あなたがあの人に与える影響ですよ。',
'　2022年の[%NAME_OTHER%]が[%NAME_SELF%]に与える影響は、人に優しくし、人のために行動することの素晴らしさを教えてくれることです。この年、あの人は他者に奉仕する精神から、責任感を持って周囲の人に接します。自分自身の枠を広げる段階を経て、周囲全体のレベルアップを望むという意識が強くなっているのですね。<br><br>　[%NAME_SELF%]もまた[%NAME_OTHER%]に影響を与えますよ。それはあなたが変わることによって、あの人が喜びを感じるからです。悩み事や相談などで、あの人があなたの要望に応えます。そのことであなたが少しでも向上することが、巡り巡ってあの人に喜びとなるのですよ。',
'　2022年の[%NAME_OTHER%]が[%NAME_SELF%]に与える影響は、神秘的な事象や哲学的な思考といった事柄への関心を高めてくれることです。あの人の追求する世界を知りたいと願うあなたは瞑想にも興味を持ち、あなた自身も自分の内面を追求する欲求が高まります。<br><br>　また、[%NAME_SELF%]は[%NAME_OTHER%]にとって、世間への窓口といった存在になりそうです。可能な限り、自分の時間を真理の追究や研究に使いたいあの人に、あなたがふと声をかけることで、現実の世界に引き戻す役割を果たします。あの人が煮詰まらないための良い影響を与えますよ。',
'　2022年の[%NAME_OTHER%]は、影響力が半端なく強くなっています。自分の周りのすべての人に、影響力を及ぶといってもいいでしょう。太陽が強い引力で惑星や衛星、小惑星に至るまで、広い範囲で影響を与えているようなものです。一度あの人のエリア内に[%NAME_SELF%]が足を踏み入れれば、あらゆる面であの人の影響を受けることになりますよ。<br><br>　ただ、[%NAME_OTHER%]にとって、[%NAME_SELF%]だけは少し違う存在かもしれません。この年のあなたは、他の人とは違った印象をあの人に与えるので、惑星の間を美しく移動するきらめく衛星のように、あの人の心に特別な印象を残すでしょう。',
'　2022年の[%NAME_OTHER%]が[%NAME_SELF%]に与える影響は、新しいことに挑戦する関心を高めてくれることです。この年のあの人は、運命に促されて多くの変化を経験します。その中には、アクシデントや不幸な出来事としか思えないようなこともあるでしょう。そこでポッカリ空いた人生の穴のようなものを、新たな価値観で埋めていこうとするのです。<br><br>　[%NAME_SELF%]は[%NAME_OTHER%]に対して、喪失感を癒やす安らぎを与えるのです。あなたがあの人に興味を惹くようなことを教えてあげることになります。そのことに感謝し、あの人はあなたに注目することになるでしょう。',
		),
		array( "nw22_016_4", 
'　2022年の[%NAME_OTHER%]と[%NAME_SELF%]の関係が変わるのは、お互いが同じことに関心を持っていることがわかったときです。あなたはあの人と情報交換をするうちに、徐々にスムーズに会話をする仲になっていきます。いろいろなジャンルの話をする中で、ピンポイントでお互いが好きなツボが同じことに気がつくのです。<br><br>　それはお笑い芸人の一発ギャグだったり、おすすめのカフェの限定スイーツだったり。「それそれ、わかるー！」という共感を共有した瞬間に、お互いが自分の持論を熱く語りはじめますよ。好きなことについて存分に語る二人は、一気に関係が変わりますよ。',
'　2022年の[%NAME_SELF%]と[%NAME_OTHER%]の関係が変わるきっかけは、例えば感動的な作品を共有できることでしょう。二人が別々に同じ絵を見て感動したり、あなたが思わず涙を流した映画やドラマをあの人も同じ思いで観ていたり……。そのことがふとした偶然でわかったときに、特別な感動と喜びが二人の間を駆け巡ります。<br><br>　いかにその作品が素晴らしかったか、[%NAME_SELF%]は[%NAME_OTHER%]に対して熱く語りはじめるでしょう。あの人も同じように自分の思いを嬉々として話します。お互いの意見を交換し、それぞれの感想を自分の中で反芻することで、心が通じ合ったように感じますよ。',
'　2022年の[%NAME_OTHER%]と[%NAME_SELF%]の関係が変わるのは、二人だけで連絡を取ることになったときでしょう。遊びの計画や仕事の相談、趣味のお誘いなど内容は様々でしょう。SNSなどでやりとりを重ねるうちに口調もやわらかくなって、ふと本音のようなことをあの人がこぼすのです。<br><br>　それは「あの人があなたとの時間を楽しんでいる」ということを伝えるもの。それまでグループの中のひとりだと思っていたあなたが、急に特定の相手としてあの人の中でクローズアップされてくるのでしょう。[%NAME_SELF%]も[%NAME_OTHER%]に対して本心をほのめかすような言葉を呟いて、二人は楽しい時間を過ごすでしょう。',
'　2022年の[%NAME_SELF%]と[%NAME_OTHER%]の関係が変わるのは、普段は誠実で温厚なあの人が、少し頑なになってしまうときです。この年のあの人は、人を気遣い、現実的な成功に導くのですが、頑固になりやすい傾向もあります。何気ない言葉に必要以上に反応して、反論してしまうこともあるでしょう。言った相手も驚いている、そんな場面にあなたが登場します。<br><br>　[%NAME_SELF%]は少し高ぶっている[%NAME_OTHER%]に対して、さりげなく諭す言葉をかけます。いかにみんなが感謝していて頼りにしているかも伝えるんです。それを聞いてあの人は冷静になることができ、あなたを見る目が変わっていくきっかけになりますよ。',
'　2022年の[%NAME_SELF%]と[%NAME_OTHER%]の関係が変わるのは、あの人が人生の大きな変化を経験し、何らかのチャレンジを始めるときでしょう。あの人の情報が知り合いを通じて入ってくるたびに、[%NAME_SELF%]の心は波立ちます。あの人のことを我がことのように思っている自分に少し戸惑いながら、あなたも一緒に[%NAME_OTHER%]の成り行きに思いを馳せます。<br><br>　そんなときに[%NAME_OTHER%]から[%NAME_SELF%]に連絡が入るのです。それは共通の知人についての近況など、何でもない内容かもしれません。でもそんな些細なことでも、あの人から連絡をくれたことにあなたは感動し、二人に接点があったことをうれしく思うのです。',
'　2022年の[%NAME_OTHER%]と[%NAME_SELF%]の関係が変わるのは、あの人に非常事態が起きたときです。この年、心穏やかに落ち着いているあの人ですが、どんな聖人君子でも常に平静でいられるはずはありません。心配事があれば食べ物が喉を通らなくなるし、不安があれば夜も寝られなくなることもあるでしょう。あの人の場合、家族に何かが起こったときなどに、そんな状態が起こりそうです。<br><br>　いつもとは違う[%NAME_OTHER%]の雰囲気に、あなたはドキッとします。あの人に何をしてあげられるのか、戸惑ってしまうこともあるでしょう。その瞬間が二人の関係が変わるときですよ。',
'　2022年の[%NAME_OTHER%]は自分の内面を見つめ直す過程において、[%NAME_SELF%]があの人の手伝いをすることになります。あの人が興味のある研究分野について、あなたも興味を持ちます。あなたはその道を手探りで模索するうちに、面白い資料やグッズなどを発見するのです。<br><br>　[%NAME_SELF%]は[%NAME_OTHER%]にそのことを伝えたくて、連絡を取るんです。初めはあまり興味を示さないあの人ですが、あなたの厚意を受け入れて、その情報を試してみます。そしてそれが有効なことだとわかったときに、二人の関係が変わりはじめますよ。',
'　2022年の[%NAME_SELF%]と[%NAME_OTHER%]の関係が変わるのは、あなたがあの人に対して何らかの忠告をしたときです。この年のあの人は成功を次々と手にしていきます。責任感も高まり、よりいっそう勤勉になり、自分だけでなく周囲にも多くの利益を上げることになるでしょう。そんな獅子奮迅のあの人に、あなたは「大丈夫ですか？」と声をかけます。<br><br>　周囲の人には疲れを知らない勇者に見える[%NAME_OTHER%]も、[%NAME_SELF%]の目には無理を重ねて今にも崩れ落ちそうなくらい、危うい姿に見えるのですね。その気遣いにあの人はハッとして、二人の関係が変わりはじめます。',
'　2022年の[%NAME_OTHER%]と[%NAME_SELF%]の関係が変わるのは、あの人の環境が大きく変化するときです。ずっと続くだろうと思っていたことが突然終わったり、場合によっては会社や組織を去るような事態になったり……。この年のあの人は運命に導かれて激変期を迎えます。<br><br>　自分を取り巻く状況が大きく変わり、[%NAME_OTHER%]は新しいことを模索するようになるんです。自分が興味を抱く情報を収集し試行錯誤を繰り返す中で、あなたにも相談の声がかかるでしょう。あなたは自分の知る限りの情報をあの人に伝えることで、これまで以上にあの人との接点が増えることになりますよ。',
		),
		array( "nw22_016_5", 
'　[%NAME_OTHER%]と[%NAME_SELF%]の関係が変わるきっかけは、新しい出会いに敏感になっているあの人からでしょう。でもそれは単純なものではありません。実はその仕掛け人はあなただからです。同じ場にいるときは、常にあなたがあの人を目で追っている、SNSであの人をフォローして、タイミングよくコメントをする……。あなたが自分を売り込むことが、あの人を動かします。<br><br>　常にあなたのことを意識させることによって、[%NAME_OTHER%]は自然にあなたのことが気になるようになりますよ。この年のあの人は「自分で動く」ことが成功のポイントになっているので、ふとしたきっかけでアプローチしてくるでしょう。',
'　2022年の[%NAME_SELF%]は、[%NAME_OTHER%]のサポートを受けることが多くなりますよ。最初は何でもないことをさらっと教えてくれたり、あいさつのときに近況を礼儀的に聞かれたりするだけかもしれません。それに対してあなたが丁寧に言葉や笑顔を返していくことで、あなたの印象があの人の中に強くなっていくでしょう。<br><br>　そしてあなたが何かのアドバイスや助けをあの人にお願いしたくて連絡をすると、[%NAME_OTHER%]のパートナーシップにエンジンがかかります。自分のできる限りの援助やアドバイスをしてくれて、お互いを特別な存在として見るようになりますよ。',
'　2022年の[%NAME_OTHER%]と[%NAME_SELF%]の関係変化のきっかけは、[%NAME_SELF%]からですよ。この年のあの人は社交的になっていて、多くの人に興味が湧きます。そんなあの人は、軽やかな気持ちで周りに連絡を取ったりアプローチをかけたりするでしょう。では、あなたは待っていればいいかというと、違います。<br><br>　あの人が自分から多くの人に声をかけているからこそ、あなたは自らあの人に声をかけてください。この年のあの人にとっては、先に相手からアプローチされることを予想していません。そこに意外性が生まれて、[%NAME_SELF%]が[%NAME_OTHER%]にとって特別な存在として意識されるようになりますよ。',
'　[%NAME_SELF%]と[%NAME_OTHER%]の関係変化のきっかけは[%NAME_SELF%]からのアプローチになります。この年のあの人は自分の理想に働きかけて現実的な目標を形にしていくことに、多くの時間と能力を割いています。あなたに自分の気持ちを伝えるには少々忙しすぎるのです。でも心の中では、恋の面でも安定と安らぎを求めています。あなたはその心の中に居場所を見つけましょう。<br><br>　あの人が疲れている様子のときに、さりげなく差し入れをすることで強い印象を残すことができます。「頑張るあなたを見ていますよ。少しは休んでくださいね」という気持ちを込めて、形あるものを送りましょう。',
'　関係変化のきっかけは[%NAME_SELF%]から起こりますよ。あの人が始めた新たなチャレンジを知り、あなたは自分を[%NAME_OTHER%]のパートナーのように考えるようになります。自分ならどうするかを考え、相談したほうがいい相手や役に立つ情報を見つけます。自分がそんなことをしてもいいものか迷いながらも、あなたはその情報をあの人に伝えようと決意します。<br><br>　そのことがきっかけとなって、[%NAME_SELF%]の好意に気がついた[%NAME_OTHER%]の態度が変わっていきますよ。あの人のチャレンジの後押しをするようなあなたの好意が、あの人との関係を変えるのです。',
'　[%NAME_OTHER%]と[%NAME_SELF%]の関係変化のきっかけは、原因はあの人に訪れるピンチです。そして行動を起こすのは、あなたからになります。あの人は他者に対しては常に心を配って、何でも手助けしてあげたいという精神の持ち主です。ところが自分のことに関しては人に迷惑をかけられないと、ひとりで耐えてしまう傾向があるのです。<br><br>　表面的には平静を保っているように見える[%NAME_OTHER%]ですが、あの人をいつも見ている[%NAME_SELF%]にはその変化がわかります。周囲に気づかれないようにそっと手を差しのべることで、あの人は救われ、二人の関係が少しずつ変化していくことになります。',
'　[%NAME_SELF%]と[%NAME_OTHER%]の関係変化のきっかけは、あなたからでしょう。この年のあの人の関心は常に自分の内面に向いています。あなたがあの人と向き合おうとしても、あの人はあなたのほうをすぐには向いてくれません。なので、あなたは考えを変えて、あの人と並んで同じ方向を見ることを選択します。<br><br>　[%NAME_SELF%]は[%NAME_OTHER%]と一緒に、二人の内面を同時に見つめるんです。同じ方向を向いて思考することで、二人は同じ光景を見ることができるようになります。それは、お互いに向き合うこと以上に共感を呼び、関係を深くする行為になるんです。その大事さを二人は徐々に実感していきますよ。',
'　[%NAME_SELF%]と[%NAME_OTHER%]の関係が変化するきっかけは、あなたからでしょう。この年のあなたは現実社会と向き合い、誰にも負けないパワーで大活躍をします。あなたもあの人の影響力の下で、あなたの理想を追いはじめます。そしてあの人のやり方に対して、自分なりの意見を伝えていくことになります。そのことに最初は驚くあの人ですが、あなたの意見が一理あることを認めるのです。<br><br>　[%NAME_SELF%]の意見が[%NAME_OTHER%]の心を動かすのは、この年は二人の間で信頼が築かれるからです。気遣いもできるあなたのことを、あの人は心から信用するようになるんですね。',
'　2022年の[%NAME_OTHER%]と[%NAME_SELF%]の関係変化のきっかけは、あの人からでしょう。自分に降りかかる出来事によって新しい一歩を踏み出すことを迫られたあの人は、自らの再生のために動くことになります。そのアンテナがとらえるのが、あなたの存在。あなたなら何か新しい道を見出すヒントを教えてくれるかもしれないと思うのですね。<br><br>　そうしてあるとき、[%NAME_SELF%]のSNSやスマホに[%NAME_OTHER%]からのメッセージが送られてきます。そこでのあの人は、困難な状況でも、なぜか生き生きしているように感じられます。うれしく思ったあなたは、あの人との前向きな交流を深めていきますよ。',
		),
		array( "nw22_016_6", 
'　その後の[%NAME_SELF%]と[%NAME_OTHER%]の関係は、初めのうちは仲のいい友達のようになりますよ。男女ということをあまり意識しないで、あの人は自分の見つけた好きなことを話すようになります。あなたはそれを楽しみ、あの人の話をもっと引き出そうと興味を示すんです。<br><br>　親友のようになった二人に変化が訪れるのは、[%NAME_OTHER%]が仕事の失敗などで元気がない様子のとき。このチャンスを見逃さないでください。普段とは違う様子が気になり「なんか元気ないね。どうしたの？」と連絡すると、堰を切ったように自分の状況を伝えてくれて、二人の関係が進展しますよ。',
'　関係が変化した後の[%NAME_SELF%]と[%NAME_OTHER%]は、同じ秘密を共有する二人のような関係になっていくでしょう。二人だけがわかるような言葉や合図で会話を進めることができて、心の距離が徐々に近くなっていきます。相手が喜ぶような話や、役に立つ情報を自然に伝えることもできるようにもなっていくでしょう。<br><br>　特別な理由がなくても、連絡を取り合うことが当たり前になって、性別を超えた親友のような感じを抱くくらいに打ち解けます。友達以上・恋人未満のような、ちょっとくすぐったいうれしさを感じるようになりますよ。',
'　その後の二人の関係は、表面上はあまり変わらないかもしれません。ただ[%NAME_OTHER%]の中で[%NAME_SELF%]に優先順位は確実に上昇していますよ。あなたの耳には届きませんが、あの人が仕事や遊びで楽しむ中で、あなたのことが頻繁に登場するようになるでしょう。<br><br>　[%NAME_SELF%]も[%NAME_OTHER%]のことを周囲の人に話す機会が多くなっていきます。そして不思議なことに、あの人もあなたも周囲に相手のことを話すことによって、自分の中の相手への思いを強くしていくことになるのです。なので定期的に　SNSなどであなたの情報が、あの人に伝わるようにしましょう。あの人の心にあなたの場所を作っちゃいましょう！',
'　[%NAME_SELF%]と[%NAME_OTHER%]の関係はその後、パートナーのような関係になっていきますよ。あの人が精力的に動くのをあなたがサポートするような、お互いを補完するような存在になっていくでしょう。あの人の中でまじめさが際立っているので、ロマンチックというよりは現実的な関係が育っていくことになります。<br><br>　この年の[%NAME_OTHER%]は、自分のことは自分ですることが信条になりますが、[%NAME_SELF%]に対してだけは、少し甘えることを許すようになるかもしれません。とはいえ、それも恋というよりは仕事のパートナーのような立ち位置でしょう。まずは実務の面でのつながりが強まっていきますよ。',
'　その後の二人の関係は前進し、[%NAME_OTHER%]は[%NAME_SELF%]のことを自分の味方であると認識します。あなたが見ていることを知っていて、現状の報告などをSNSなどでさりげなく上げてくれるようになるでしょう。それを見てあなたも、あの人のために役に立ちそうな情報を返信するようになります。<br><br>　[%NAME_OTHER%]がアップする記事の中には、あの人と関係が深そうな異性がいることもあり、[%NAME_SELF%]の心がざわつきそうです。バーチャルな世界で恋の鞘当てをやっているような気持ちになるかもしれません。でもそんなことが気にならないくらい、二人は絆を深めていくことになります。',
'　その後の[%NAME_OTHER%]と[%NAME_SELF%]の関係は、表面上は大きな変化はないように見えます。しかし内面的には、少しずつ変化していくでしょう。他者を許し、他者を愛し、他者を守ることで自分自身を成熟させていく。それがこの年のあの人の傾向です。自分のことよりも人の欲求に応えることが、あの人の喜びだからです。<br><br>　それが[%NAME_SELF%]に対してだけは、[%NAME_OTHER%]は本音に近いことを伝えるようになります。普段は聞けないような愚痴をこぼしたり、少し気恥ずかしいような自慢話を始めたり……。自分の欲求を、あなたには心を許して表すようになりますよ。',
'　その後の[%NAME_SELF%]と[%NAME_OTHER%]の関係は、二人だけで通じる言葉やボディーランゲージで会話をするような、特別なつながりができていくでしょう。長い時間無言でもまったく息苦しくない、「うん」とか「そう」といった短いフレーズでも、なぜか多くの情報が伝わってしまう。そんなソウルメイトのような関係になっていきますよ。<br><br>　[%NAME_OTHER%]は思う存分自分の内面と向き合い、自分の技術を磨きます。そしてそこから帰ってきたら、あなたとの交流でひと息をつくのです。まるで気心の知れた相棒のような安心感と信頼感が強まっていきますよ。',
'　その後の[%NAME_SELF%]と[%NAME_OTHER%]は、対等な関係になっていきます。それまではあの人があなたにお願いしたり、指示したりすることが多かったかもしれませんが、あなたに相談する関係に変わっていくでしょう。そして次第に仕事などを通じたオフィシャルな関係から、個人同士のプライベートな関係に変化していきますよ。<br><br>　[%NAME_SELF%]に対して影響力を振るう存在だった[%NAME_OTHER%]が、あなたからも影響を大きく受けるようになっていきます。あなたはあの人にとって、自分の影響力や立場にとらわれずに、対等のやりとりができる相手になりますよ。この年のあの人にとって、あなたは貴重な存在になるのです。',
'　その後の[%NAME_OTHER%]と[%NAME_SELF%]は、この先への期待と希望に満ちたやりとりを交わすような関係になるでしょう。何をしたいか、何をすることが楽しいか、前向きな話題で楽しく盛り上がることができます。実現不可能に思えるようなことも、二人で話しているうちに打開策が生まれてくるように感じるでしょう。<br><br>　変なこだわりや執着をやめることにした[%NAME_OTHER%]は、子どものように夢を語ります。その夢を彩る手助けができることに、[%NAME_SELF%]は新鮮な喜びを覚えるでしょう。あの人の人生を一緒に作り上げていくパートナーのような関係になっていきますよ。',
		),
		array( "nw22_016_7", 
'自分から行動に移すことで、あの人との恋の進展が見えてくるでしょう。新たな出会いの可能性も十分にありそうですよ。',
'あの人を諦めるなんていう選択肢はありません。あなたに最上の癒やしをもたらしてくれる貴重な人ですよ。',
'あの人を忘れるなんて、もったいない！　この年は、あなたはあの人が楽しむためにあると思ってくださいね。',
'あの人とは長い付き合いを想定して、今は恋を楽しむために他の人を見つけることもおすすめしますよ！',
'あなたは忘れてしまったつもりでも、気がつけばあの人のことを思い出している。そんな自分に驚くかもしれません。',
'あの人を忘れて他の人を探したほうがあなたは楽になるけど、あの人を救えるのはあなただけなんです。',
'この年のあなたとあの人は魂でつながれるソウルメイト。たとえ他の人と付き合うことになっても忘れられませんよ！',
'あの人を忘れて他の人を見つけたほうが楽に過ごせますよ。しかし、あの人にとってはあなたが大切な存在なのです。',
'あの人を忘れて他の人を見つけるなんて、もったいないですよ！　どんな素晴らしい変化を遂げるのかを見届けてください。',
		),
		array( "nw22_016_8", 
'　会わない状態が続くと、[%NAME_SELF%]は二人の関係に進展がないと不安に思うかもしれません。でも[%NAME_OTHER%]からすると、あなたの気持ちに自信が持てないと感じることがあるようですよ。不安なときに、あの人はふとあなたのことを思い出します。<br><br>　気持ちに素直になって「自分から動く」ことで、恋の行方が見えてくることもあるようです。ただこの年は9年に一度の、新たな恋を見つけるのに最適な「種まきの年」。今の恋が長い期間足踏みしていると感じたら、自分の気持ちに正直になって、周囲を見回してみるのもいいでしょう。[%NAME_SELF%]のことを気にかけている人が現れるかもしれませんよ。',
'　2022年の[%NAME_SELF%]は、[%NAME_OTHER%]を忘れるなんてことは考えられません。そんな選択肢はないでしょう。この年のあの人はパートナーシップが際立って高まっています。一緒に時間を過ごすことで、最上の癒やしをもたらしてくれる貴重な相手です。<br><br>　なかなか関係が発展しなかったとしても、そばにいてほしい存在ナンバーワンです。しかも[%NAME_OTHER%]は自分がサポートすることで、自分も成長できる人を求めています。あなたはその候補なんです。もし、他の人を見つけたくなっても、この年はあの人を諦めてはいけませんよ。',
'　2022年に[%NAME_OTHER%]を忘れるなんて、もったいないですよ。もちろん他の人を見つけても、[%NAME_SELF%]はいい関係を築けるでしょう。楽しい日々を過ごすこともできるかもしれませんが、この年のあの人といることの楽しさは格別なんです。万が一、恋が実らなかったとしても、その楽しさを捨ててしまうのは惜しすぎます！　<br><br>　この年の[%NAME_SELF%]は[%NAME_OTHER%]と楽しむために一年があると言ってもいいくらい、あなたとあの人の相性は抜群です。あの人と関わっているときに、あなたは本当に自分らしくいられると思うでしょう。',
'　この年は、[%NAME_OTHER%]のことを忘れてもいいかもしれません。それはあの人があなたに合わないということではありませんよ。ただ[%NAME_OTHER%]との関係を深めるのは、もっと長いスパンで考えたほうが現実的な可能性があります。<br><br>　なので、この年に限っていえば、いったん忘れるという選択肢はありです。それも完全に忘れるのではなく、恋愛はひとまずお休みするという意味です。人としてはお付き合いをしていき、いつか結ばれることも心の想定しておきましょう。その上で恋を楽しむために他の人を見つけることは、大いにおすすめしますよ！',
'　もし[%NAME_SELF%]が穏やかで安定した恋を求めるのであれば、正直[%NAME_OTHER%]のことを忘れて他の人を見つけたほうがいいですよ。この年のあの人は糸の切れた凧のように、どこに行くかわからない状態です。気がついたらしばらく遠くに行ってしまう……などということも考えられます。行動が予測不可能なのですね。<br><br>　[%NAME_SELF%]のことを大切にしてくれる他の人を見つけて、[%NAME_OTHER%]のことは心の中のヒーローのように思って見守るのも選択としてはありです。でも他の人と付き合ったら、あなたの言葉の端々に「こんな人がいてね」とあの人の話題が上ることになって、その人を戸惑わせるかもしれませんよ。',
'　正直なところ2022年の[%NAME_SELF%]のことだけを考えれば、あの人を忘れて他の人を見つけた方がいいですよ。この年のあの人は、多くの人に対する責任感を背負います。他者の悩みを自分のことのように受け取り、それに全力で応えることは重過ぎる使命です。殉教者のようなあの人についていくことは、あなたにとって大きなリスクになります。他の人を見つければ[%NAME_SELF%]は楽になりますよ。<br><br>　ただ、表面上、笑顔を浮かべる[%NAME_OTHER%]ですが、実は身も心もボロボロになっているんです。そんな、あの人を支えられるのは、あなたですよ。',
'　2022年の[%NAME_SELF%]は[%NAME_OTHER%]を忘れて他の人を見つけることは、やめたほうがいいですよ。人と人との関係をつなぐ要素は様々です。楽しいことを共有する、仕事で協力関係にある、優しくしてくれる……。いろいろありますが、あなたとあの人のように魂でつながれる関係の相手なんて、そうそう見つかりません。<br><br>　言ってみれば、[%NAME_OTHER%]はもうひとりの[%NAME_SELF%]なのです。別れることは、我が身を引き裂くような苦しさを感じることになります。もし割り切って他の人を見つけて付き合うことになっても、あの人のことだけは忘れられないでしょう。',
'　2022年は正直なところ、[%NAME_SELF%]は[%NAME_OTHER%]を忘れて他の人を見つけたほうがいいかもしれません。ただしそれは、あなたにとっての話です。あの人の大きな影響力は魅力ですが、そのパワーに[%NAME_SELF%]は手を焼くことになります。一度動き出せば、ターボエンジンのように加速していくあの人についていき、時には減速を促す役目は大変な労力を使います。<br><br>　いっそ忘れたほうが、[%NAME_SELF%]は楽に過ごせる年になりますよ。でも[%NAME_OTHER%]にとって、[%NAME_SELF%]の存在は貴重な安全弁であり冷却装置なのです。あなたがいることで、あの人はオーバーヒートしなくてすみますよ。',
'　2022年の[%NAME_SELF%]が[%NAME_OTHER%]を忘れて他の人を見つけることは、はっきり言って、もったいないですよ！　この年のあの人は、人生の中で大きく脱皮する年になります。今まで当たり前と思ってまとっていた衣を脱ぎ捨て、まったく新しい人生を歩みはじめることになります。どんな素晴らしい変化を遂げるのか、それを見届けてから判断しても遅くはありません。<br><br>　もちろん[%NAME_SELF%]がどうしても他の人を見つけたいと思うのならそれもありでしょう。ただ、[%NAME_OTHER%]のその後も見守っていてください。心の中でエールを送り続けることが、あの人にとっても大きな励みになりますよ。',
		),
		array( "nw22_016_9", 
'　[%NAME_SELF%]が[%NAME_OTHER%]を諦めた場合、新たな異性と出会える可能性はありますが、あの人への恋心はすぐには消えないでしょう。その理由は、2022年のあなたにとって、あの人が非常に魅力的に映るからです。この年のあの人は新しいことを始めようと期待に胸を膨らませ、キラキラとした輝きを放ちます。<br><br>　あなたはそんな[%NAME_OTHER%]に、自分が思っている以上に強く惹かれますよ。諦めざるを得なくなったときの喪失感は、想像以上に大きな衝撃になるでしょう。諦めること自体が難しいですし、諦めた後にすぐに他の人と恋を始めるような気分になるまでには、かなりの時間がかかりますよ。',
'　[%NAME_OTHER%]を諦めた場合、[%NAME_SELF%]が新たな異性と出会える可能性は高いですよ。あなた自身のサポート能力が高まっているので、あなたを必要とし、求める相手と多く出会えるでしょう。その人と仲良くなり、恋愛に発展することもあるでしょう。<br><br>　その人は相談をしたときに優しく聞いてくれたり、あなたの好きなプレゼントを贈ってくれたりして、それはそれで楽しいでしょう。でもそのときに、「とてもいい人だけど、[%NAME_OTHER%]ではないんだ……」とあなたは思いますよ。やはり2022年のあなたにとって、[%NAME_OTHER%]は他の人には代えられない存在なんです。',
'　[%NAME_OTHER%]を諦めた場合、新たな異性と出会える可能性は大いにありますよ。これまであの人に思いを寄せていたあなたは、楽しい気分も盛り上がっているでしょう。あなたのそばにいればその楽しさを共有できると、多くの人があなたに引き寄せられるかもしれませんね。<br><br>　時は金なりです。時間をムダにしないためにも、多くの出会いを経験することはいいことでしょう。ただ、あなたはそれで満足するでしょうか。そこが問題です。出会いは多いでしょうし、いい出会いもたくさん期待できます。でも、この年の[%NAME_OTHER%]を超える人は……。そこだけはわかっておいてください。',
'　[%NAME_OTHER%]を諦めた場合、[%NAME_SELF%]が新たな異性と出会える確率はかなり高いですよ。この年はあなたの恋愛偏差値が高まっています。出会った相手と付き合いを深め、関係を作り上げていくことは大いに可能でしょう。しかもこの年のあの人は自分の足元を固めることが最優先になるので、恋に力を入れるのは来年以降になる可能性が高いです。<br><br>　あなたはこの年の間は、別の人との恋を楽しんで、あの人のことは2023年にまた距離を縮めていけばいいと思いますよ。ただ、その間の恋人とはトラブルにならないように関係と気持ちの整理はちゃんとしてくださいね。',
'　[%NAME_OTHER%]を諦めた場合、[%NAME_SELF%]が他の人と出会える確率は十分にありますよ。この年のあなたは、他の人からの好意を感じたら、敏感に反応できる状態です。<br><br>　出会いの多い少ないは、相手の気持ちに気がつくか、気がつかないによって大きく左右されます。この年の[%NAME_SELF%]は相手の気持ちをすくいとることができるので、いい出会いを見つけて、恋愛に発展する可能性は大いにあるでしょう。あの人のことを忘れることができるなら、新たな恋を楽しむのもいいですよ。ただ、心の片隅に、[%NAME_OTHER%]の面影を残したままでは、うまくいかないと思います。',
'　[%NAME_OTHER%]を諦めた場合、[%NAME_SELF%]が新たな異性と出会える確率は十分に高いですよ。あなたの心には、気持ちを寄せていたあの人の利他の精神が宿っています。他者のために役に立つことの素晴らしさを知ったあなたは、その精神を発揮して多くの人と出会うことができるでしょう。<br><br>　ただ、その出会いの中から[%NAME_SELF%]が新しい恋を育てるのには、少し時間がかかるかもしれません。それはあなたの心の片隅に、まだ[%NAME_OTHER%]がいるからです。あの人の大きな愛が[%NAME_SELF%]の内面で息づいています。新しい恋の前にもう少しだけ、あの人のことを想う時間を作ってみてください。',
'　[%NAME_OTHER%]を諦めた場合、[%NAME_SELF%]が新たな異性と出会える確率は十分に高いですよ。あの人へ特別な気持ちを持ったことから、あなたは思考面をフルに活用するようになります。他者への関心が薄れる傾向があるこの年のあの人に対処することに比べたら、他の異性の気持ちを自分に向けさせることなんてたやすいことですよ。<br><br>　しかもこの年のあなたは自分の内面を見つめ、自身の欲求に素直になっています。あなたが感知する出会いの中から、本当に出会うべき人は誰なのか、直感的にわかる状態になっています。多くの出会いの中から誰を選ぶか、間違えることはないでしょう。',
'　[%NAME_OTHER%]を諦めた場合、[%NAME_SELF%]が新たな異性と出会える確率は十分に高いですよ。この年のあなたは相手に共感する能力が高まっていて、どんな相手でも思い通りにできるエネルギーに満ちています。「この人とはどう接すればいいのだろう」と多くの人が扱いかねるような癖のある人でも、あなたは見事な手綱捌きでコミュニケーションを取ることができるでしょう。<br><br>　この年の[%NAME_OTHER%]と比べれば、大概の人は[%NAME_SELF%]にとっては付き合いやすい相手に映りますよ。あの人以外の異性と過ごすほうが、心安らかに一年を過ごすことができるでしょう。',
'　[%NAME_OTHER%]を諦めた場合、2022年の[%NAME_SELF%]が新たな異性と出会える可能性は十分にありますよ。この年のあなたは芸術性が開花しています。美しいものに感応することで、あなた自身が魅力的に映るようになるのです。その輝きに惹かれる異性との出会いが多くなるでしょう。<br><br>　2022年は[%NAME_SELF%]にとっても変化の多い年になります。外交的になって周囲に目が向きやすいので、お眼鏡にかなう異性も多く現れるでしょう。特に芸術に関係するような場面で出会いが多くなります。アートに関するSNSなどをチェックすると、あなたと趣味が近い相手が見つかる可能性が高いですよ。',
		),
		array( "nw22_016_10", 
'　2022年、[%NAME_OTHER%]を狙う恋のライバルは現れますよ。しかも複数のライバルがひしめく可能性もあります。あの人にとってこの年は、種をまくスタートの年です。活動が活発になり、いろいろな場面で新たな芽吹きがあるでしょう。<br><br>　この年の[%NAME_OTHER%]は「やりたい」と感じることがあれば、あれこれ考えるよりも先に行動に移すでしょう。しかもそこで経験することがすべて新鮮で、喜びに満ちた表情で何事にも取り組みます。当然のように出会いも多くなり、あの人に恋心を持つ人も現れます。相手がどこまで本気かはそれぞれですが、[%NAME_SELF%]を落ち着かない気持ちにさせるでしょう。',
'　2022年、[%NAME_OTHER%]を狙う恋のライバルは現れそうです。あの人は悩んでいる人や困っている人を放っておくことはできません。相談されれば親身になって話を聞き、助けてもらいたいと言われれば、自分のできる限りの援助を惜しみません。あの人の周りには、常に誰かの影があると言っても過言ではないでしょう。<br><br>　[%NAME_SELF%]が[%NAME_OTHER%]に話を聞いてほしいと思っているのに、あの人は他の人の世話で近づけないように感じることもありそうです。あの人がスマホで誰かを話しているのを見ているだけで嫉妬心がメラメラ……なんてことになるかもしれませんよ。',
'　2022年、[%NAME_OTHER%]を狙う恋のライバルは山のように現れますよ。もっと正確に言うと、ライバルに見える人です。とにかく仕事も遊びも恋愛も楽しんでしまうのがこの年のあの人。周囲には多くの人が集まり、一度あの人がSNSで投稿すれば、いいねやコメントが大量に書き込まれる人気者でしょう。<br><br>　あの人と一緒に仕事をしたい人や、遊びや趣味の仲間になりたい人も次々と近寄ってくるでしょう。当然あの人に恋心を抱いている人も多くいますよ。それぞれの相手と楽しく接している[%NAME_OTHER%]を想像して、[%NAME_SELF%]がどんよりした気持ちになってしまうこともありそうです。',
'　2022年の[%NAME_OTHER%]を狙う恋のライバルが現れる可能性は決して高くはないでしょう。それはあの人が現実的な成功のために精一杯働いているので、異性からアプローチする余地があまりないからです。仕事以外に時間をあまり使いたくない気持ちが強いので、ロマンチックなムードに浸る余裕がないともいえそうです。<br><br>　ただ、現実的な男女のつながりを見据えたライバルは現れるかもしれません。それはズバリ、[%NAME_OTHER%]との結婚を前提としたライバルです。この年のあの人は安定を求めます。そのひとつとして結婚が視野に入ってくる可能性もありますよ。',
'　2022年に、[%NAME_OTHER%]を狙う恋のライバルが現れる可能性は高いですよ。この年のあの人は、大きな冒険に挑むヒーローやヒロインのような存在です。その周囲には多くの登場人物が活躍することになります。そして冒険に付き物なのは危険な恋となります。運命の波に翻弄されながら、その渦中に袖すり合う相手が、[%NAME_SELF%]のライバルになりますよ。<br><br>　その人はまだ、[%NAME_OTHER%]の味方かどうかもわからない状態です。もしかしたらあの人にとってもライバルのような立場に立つ人かもしれません。そんなミステリアスなライバルに[%NAME_SELF%]は戸惑うことになります。',
'　2022年に[%NAME_OTHER%]を狙う恋のライバルが現れる可能性は、あまり高くないでしょう。それはあの人の中で父性や母性が強くなっているからです。あの人の博愛的な精神に、確かに多くの人が引き寄せられるでしょう。その中にはあの人に恋心を抱く人も現れますが、あの人はその気持ちさえも大きな愛で包み込んでしまうのです。<br><br>　「父や母に恋はできない……」そんな気持ちをライバル候補に与えて、恋心を静めてしまうことになります。ただ、あなたはあの人にとって特別な存在であるのは変わりありません。',
'　2022年に[%NAME_OTHER%]を狙うライバルが現れる可能性は、比較的高いかもしれません。それはあの人が思考面をフルに働かせ、思慮深くなっているからです。その深みが外見にも滲み出て、独特の知的な雰囲気を持つことになります。知的でミステリアスな魅力を漂わせるあの人は、それだけでも多くの人を魅了するでしょう。<br><br>　[%NAME_OTHER%]自身は他者への関心が薄れる傾向にありますが、その素っ気なさも逆の魅力としてライバルは受け取るんです。自分のほうを向いてくれないからこそ、なんとか向けさせてみたいといっそう燃えあがってしまうのですね。',
'　2022年の[%NAME_OTHER%]に恋のライバルが現れる可能性は、大いにありますよ。昔から「英雄色を好む」という有名な言葉があります。周囲に影響力を振るうあの人には、そのエネルギーに惹かれて多くの人がアプローチしてくるでしょう。その中には、あの人を落とすことがステータスだと意気込むような、肉食系のライバルも登場しそうです。<br><br>　責任感が高まっている[%NAME_OTHER%]は、そんなライバルたちにも笑顔で応えるかもしれません。あの人に従いたいと寄ってくるライバルたちの多さに、[%NAME_SELF%]は唖然としてしまうでしょう。',
'　2022年の[%NAME_OTHER%]に恋のライバルが現れる可能性は、かなり高いですよ。この年のあの人は、大きな変化を余儀なくされます。それは精神的に成熟しているあの人にとっても、心を大きく揺さぶられるほどの出来事です。それも一回ではなく、何回か連続で起こる可能性があります。<br><br>　ダメージを受けたあの人を心配して、寄り添ってくる異性がライバルになることは大いに考えられますよ。精神的に弱っているあの人にとって、その人の優しさに救われる思いがするでしょう。最初は恋愛感情を意識していなくても、油断していると恋に発展するかもしれません。',
		),
		array( "nw22_016_11", 
'　恋のライバルが現れたら、まずは落ち着いて状況を見守りましょう。2022年の[%NAME_OTHER%]は新しいことを始めることを楽しんでいます。嫉妬心から相手のことを聞き出そうとしたり、あの人の楽しみを妨げたりするような行動をしては、逆効果になりますよ。<br><br>　[%NAME_SELF%]がライバルに負けないためには、誰よりも強い印象を[%NAME_OTHER%]に残すことが大切です。そのために必要なのは、二人の関係を作るためのインパクトと回数です。折に触れて連絡を取る回数を増やしましょう。そのたびごとに、あの人に対して印象深い話やインパクトのある表現をすることで、ライバルをリードできますよ。',
'　[%NAME_OTHER%]を狙うライバルが現れたら、[%NAME_SELF%]は心中穏やかではいられません。無理にでも[%NAME_OTHER%]を引き寄せたいと思うかもしれませんが、ここは考え方を変えるのが得策です。それは、例えばあなたがライバルと思われる人の味方になってみるのです。[%NAME_OTHER%]に対して[%NAME_SELF%]からライバルの話題を出し、自分もその人のために何かをできないか申し出てみましょう。<br><br>　その人が本当に相談だけで[%NAME_OTHER%]に近づいていたのなら、あの人はそのようにあなたに伝えてくれるので大丈夫です。そうではなく、あの人がその人への恋心を抱きかけていると感じたら、そのときこそ素直に自分の気持ちを告白しましょう。',
'　[%NAME_OTHER%]を狙う恋のライバルが現れたら、あなたが変に敵視するのは得策ではありません。同じ人に恋心を寄せる同士として、いっそのこと仲良くなっちゃいましょう。そんなことできないと思うかもしれませんが、同じ人を好きになったというこれ以上ない共通点がお互いを結びつけます。<br><br>　二人とも[%NAME_OTHER%]が好きなのですから、話題には困りません。連絡が取れる相手なら、割り切って本音を吐露し合い、あの人の情報収集だと思って話をしてみましょう。場合によってはあの人と三人でやりとりするグループSNSを作ってみるのも面白いですよ。そこから恋が急展開していくこともありえます。',
'　[%NAME_OTHER%]を狙う恋のライバルが現れたら、あなたはかなりの覚悟が必要になりそうです。そのライバルは結婚を前提としている可能性が高いでしょうから、争うにはかなりハードルが高くなります。ただ、あなたがいきなり結婚まで意識する必要はありません。まずはあの人の状況を見守りましょう。<br><br>　成り行きによっては[%NAME_OTHER%]は[%NAME_SELF%]に、ライバルとの関係を相談してくるかもしれません。話を聞いて、少しでもあの人に相応しくないと感じたら、正直に伝えましょう。言いにくいことをあえて伝えてくれるあなたに、あの人は改めて感謝の気持ちを抱くでしょう。',
'　[%NAME_OTHER%]を狙う恋のライバルが現れたら、[%NAME_SELF%]はあの人の味方であることを自分の中で改めて決意するべきです。そしてあの人のチャレンジを成功させるために、[%NAME_SELF%]が何ができるかを考えてください。それを実行することで、あなたがあの人にとっての救世主になるのです。<br><br>　[%NAME_OTHER%]に[%NAME_SELF%]が協力する理由を聞かれたら、あなたの気持ちを素直に伝えてください。「好きだから」という理由は、百万言を弄するよりも説得力を持つひと言になりますよ。あの人を支える相棒のひとりになって、共にチャレンジに立ち向かいましょう。',
'　博愛の精神でライバルを包み込んでしまう[%NAME_OTHER%]ですが、それでもあなたはヤキモキした気持ちになるでしょう。そのときは[%NAME_SELF%]にとってはかなり難しい対応を迫られるかもしれません。この年のあの人は他者に貢献する使命を帯びていますので、その人には自分の恋心を与えようとするかもしれません。<br><br>　そのときの[%NAME_SELF%]が取るべき行動は、あなたの気持ちを素直に伝えることです。あの人が重んじるのは公正さです。恋の舞台で[%NAME_SELF%]がその人とフェアに振る舞うことで、改めてあの人はあなたに心惹かれることになります。',
'　もし[%NAME_OTHER%]を狙うライバルが現れたら、[%NAME_SELF%]は心穏やかではないでしょう。あの人もライバルに対して素っ気ない態度は取るものの、決定的に拒否はしません。ライバルはそれをイエスのサインと勝手に解釈し、あの人にいろいろアプローチをするようになります。そのときにあなたはどうすればいいのか……。<br><br>　結論から言うと、[%NAME_SELF%]は動じる必要はまったくありません。目の前をチョロチョロと動くライバルに、[%NAME_OTHER%]は関心を持たないからです。この年のあの人が反応するのは、どっしりと安定して変わらない真理です。あなたはあの人の前で、堂々としていればいいのです。',
'　2022年の[%NAME_OTHER%]に恋のライバルが現れたら、あなたは心配のあまりに憂鬱な気分に襲われるかもしれません。いっそ忘れたほうがいいとまで思い詰めることもあるでしょう。でもその心配は杞憂に過ぎません。その理由は、この年のあの人は見かけと違って、あまり社交的ではないからです。<br><br>　ライバルへの笑顔は、その他大勢の人たちに向ける笑顔と一緒です。そこに特別な気持ちはありません。ライバルにとって[%NAME_OTHER%]は、アイドルではあるけれど恋人ではないのです。「あの人の素顔を知っているのは自分だけ」と、[%NAME_SELF%]は余裕を持って観察していればいいのです。',
'　2022年の[%NAME_OTHER%]に恋のライバルが現れたら、[%NAME_SELF%]はあわててはいけません。まずは成り行きを見守りましょう。あの人の様子を観察して、変化がないようでしたら特に行動する必要はないでしょう。しかし、もしあの人が動揺しているように感じたら、そのときは即行動です。<br><br>　「元気がないように感じたのですが、何かありましたか」などと定期的に連絡をしてください。とにかく[%NAME_SELF%]が[%NAME_OTHER%]の心配をしていることを、わかりやすく伝えることです。あの人は試練の渦中にいますが、いずれ立ち直ります。それまであなたがあの人を支えることで、いつの間にかライバルは消え去っていますよ。',
		),
		array( "nw22_016_12", 
'　この恋をダメにしてしまうのは[%NAME_SELF%]が[%NAME_OTHER%]を独占しようとして、束縛したり詮索したりするような言動です。この年のあの人は、多くの新しいことをスタートさせています。新たな楽しみのために、あなたと連絡を取る時間も間が空きがちになることもあるでしょう。<br><br>　そんなときに[%NAME_SELF%]はあの人が他の人に心を惹かれていないか、不安に襲われることもあるでしょう。何をしていたのかしつこく聞いたり、誰と会っていたのか執拗に聞き出そうとしたりするのはダメですよ。あの人は信頼されていないのだと誤解してしまい、心が離れてしまうでしょう。',
'　2022年、二人の距離を縮めたいなら、無闇に嫉妬心を表さないようにすることが大切です。[%NAME_OTHER%]はこの年、いろいろな人と関わりを持つことになります。そのとき、あなたが愛情の表現のつもりで、嫉妬心を伝えたら、[%NAME_OTHER%]は[%NAME_SELF%]に理解されていないと思ってしまうでしょう。<br><br>　焼き餅を焼くことが、可愛く見えることもありますが、この年のあの人に対しては逆効果です。あの人は、一緒にいる相手には、あくまでも対等の関係を前提としています。そこは大人として振る舞うことが、二人の距離を縮めるのですよ。',
'　2022年に二人の距離を縮めたいなら、ネガティブな言動は絶対してはいけません。この年の[%NAME_OTHER%]は楽しむのがテーマです。気楽な気分で楽しみたいときに、楽しくないような態度を示したり、相手を否定したりするような発言をすることは空気を悪くします。[%NAME_SELF%]がそういうことをしてしまいそうになったときは、思い切ってその場を立ち去るくらいの決断が必要です。<br><br>　場の空気を尊重しないでネガティブな言動をするということは、子どもじみたわがままになります。楽しむときには自分の感情よりも周囲を気遣う大人の余裕が必要です。そんな大人な[%NAME_SELF%]を、[%NAME_OTHER%]も好きになりますよ。',
'　[%NAME_SELF%]と[%NAME_OTHER%]の恋をダメにしてしまうのは、今の時点で話す必要のない過去の話をしてしまうことです。特に恋愛に関する話は、二人のときには控えるようにしましょう。もしかしたらあなたは、あの人には何でも知っていてほしいと思うかもしれません。しかしまじめさが際立っているこの年のあの人にとっては、心に針を突き刺されるように感じることもあるのです。<br><br>　それより悪いのは、あの人の過去の恋愛について無理に聞こうとすることです。あなたへの思いが強ければ強いほど、あの人は戸惑って自分の殻に閉じこもってしまうことになるでしょう。',
'　2022年に[%NAME_SELF%]が[%NAME_OTHER%]との距離を縮めたいなら、一番やってはいけないことは自分の気持ちを隠すことです。この年のあの人は本能が刺激を受けやすく、感受性が強くなっています。あなたが素直になれないでいることも、すぐに察します。それを可愛いと受け取ってくれればいいのですが、気がないと思われる可能性が高いですよ。<br><br>　一度そう思われたら潮が引くように、あの人の気持ちも冷めていくかもしれません。そうなってから取り繕おうとしても、後の祭りです。この年のあの人の前では、素直に自分の気持ちを表すことを忘れないようにしましょう。',
'　2022年に[%NAME_SELF%]が[%NAME_OTHER%]との距離を縮めたいなら、やってはいけないことはウソをつくことです。人間誰しも言いたくないことや知られたくないことはあります。最初は悪気がない小さなウソでも、それを取り繕ううちに大きなウソに変わっていきます。そのことが隠しきれなくなって、あの人に明らかになったときに、あの人は心を閉ざしてしまうでしょう。<br><br>　誰でもウソをつくことはあります。[%NAME_OTHER%]だってそんなことは百も承知です。でも[%NAME_SELF%]にはそうしてほしくないのです。それはあの人が、[%NAME_SELF%]にだけは甘えられると思っているからですよ。',
'　2022年に[%NAME_SELF%]が[%NAME_OTHER%]との距離を縮めたいなら、あの人の気持ちを無理に自分に向けさせるのはやめたほうがいいです。この年のあの人は自分の才能を育て、自分の技術を磨きたいと思います。ひとりの時間を持ちたがるのは、すべてを自分のペースで進めたいからです。<br><br>　もし[%NAME_SELF%]が[%NAME_OTHER%]のペースを崩して、気持ちを自分に向けさせようとしたら、あの人はあなたへの関心を急速にしぼませてしまうでしょう。あの人と対峙するときはどんなに時間がかかっても、相手のペースに合わせて待つことが大切ですよ。',
'　2022年の[%NAME_SELF%]が[%NAME_OTHER%]との距離を縮めたいなら、あの人を軽んじるようなことを伝えたり、それを感じさせるような態度を取ったりするのはやめたほうがいいですよ。軽んじることは、忠告することや意見することとは違います。あの人のやっていることに価値がないようなことを言って、それが伝わったら、とても傷つくことになります。<br><br>　自分の存在を否定されたかのように感じて、[%NAME_OTHER%]は[%NAME_SELF%]のことを思うたびに、その痛みを思い出すでしょう。それくらいあの人は責任感を持って物事に取り組んでいることを、あなただけは理解してあげてくださいね。',
'　2022年の[%NAME_SELF%]が[%NAME_OTHER%]との距離を縮めたいなら、あの人をほったらかしにしてはいけません。例えば[%NAME_SELF%]が忙しいとき、連絡をしない期間が長くなると良くないんです。不安を募らせたあの人は、あなたはもう自分のことなどどうでもいいのだと誤解することになります。<br><br>　[%NAME_OTHER%]からのSNSの連絡に、返信が遅くなることもNGですね。この年のあの人には、心が揺さぶられることが起こりがちになります。そのときに[%NAME_SELF%]の存在を近くに感じることで、気持ちが安定するのです。コミュニケーションを密にすることを忘れないでくださいね。',
		),
		array( "nw22_016_13", 
'　2022年は[%NAME_OTHER%]との恋の進展に、かなりの期待感を持っていいですよ。あの人の心は新たなスタートを求めて、刺激を受けやすい状態になっています。恋愛に関しても、恋の芽吹きを待っています。好きな人にアプローチをするのにはいいタイミングですので、[%NAME_SELF%]がそのターゲットになる可能性は高いでしょう。<br><br>　[%NAME_SELF%]があの人との恋を進展させるためには、常に新鮮な気持ちであの人の前に現れることです。新しいファッションを加えてみる、新しい話題を用意するなどをしてみると、恋が前に進みますよ。',
'　2022年、年内中にどれだけ連絡を取れたかで、[%NAME_OTHER%]と[%NAME_SELF%]の恋の進展は決まると言っていいでしょう。この年のあの人は「パートナーシップ」がテーマなので、どれだけ連絡を取れて一緒の時間を共有できたかが、関係が深まるかどうかのポイントとなります。<br><br>　共通の話題も増えて、思い立ったときにさりげない連絡をSNSで取り合うことのできる関係になるでしょう。周囲では「あの二人、なんか仲がいいよね」と噂になっていますよ。イベントが近くなったときに、お互いに何をしているか相談できるようになれば、結論も近いですよ。',
'　2022年は、楽しさを共有した分だけの二人の恋が進展しますよ。楽しさの鮮度を保つために、[%NAME_OTHER%]は仕事でも遊びでも常に新しいアプローチを提案してくれるでしょう。あの人の提案に[%NAME_SELF%]が応じて、よりその楽しさを大きくすることで、二人の関係はどんどん円滑になっていきます。<br><br>　花火やお花見など四季を通じたオンラインイベント、少人数の顔見知りだけの静かな会合などで、いろいろな角度から楽しむ一年になるでしょう。そうして年末を迎えた頃にはお互いの楽しむツボも知り尽くした関係ができています。恋への進展のクライマックスは近いですよ。',
'　[%NAME_SELF%]と[%NAME_OTHER%]の関係は、年内中には結論は出ないでしょう。それは相性が悪いということではなくて、二人の恋は進展するのに時間がかかるのです。この年のあの人は何事も、一歩一歩着実に進めていきたいと考えています。恋に関しても同じで、あなたとのことを大切に思えば思うほど、じっくり考えたいと思っているのです。<br><br>　年末になっても、まだまだ道半ばかもしれません。でも焦ることはありませんよ。恋を大きく育てるためには、2023年以降まで長いスパンで二人の関係を考えていけばいいのです。',
'　2022年内中に[%NAME_SELF%]と[%NAME_OTHER%]との恋は、紆余曲折を経ながらも進展していきますよ。あの人の変化が激しいので、時にはその波に飲まれて見えにくい状態になるかもしれません。引き潮に持っていかれて、瞬間的に距離が離れてしまうこともあるでしょう。しかし同じ渦の中に翻弄されているので、決定的に離れてしまうことはありません。<br><br>　気がつけば隣にいて、今まで来た道のりを一緒に眺めて心をひとつにするでしょう。そしてこの先の行く道を共に歩もうと、お互いに思うのです。二人はこの年、確実に距離を縮められますよ。',
'　2022年内中に[%NAME_SELF%]と[%NAME_OTHER%]との恋の結論は出ないでしょう。でも二人の関係は確実に深まります。あなたの存在がなければ、もしかしたら童話の「幸せの王子」のように疲れ、傷ついていたかもしれないあの人も、あなたの気遣いで元気さを取り戻します。<br><br>　この頃には[%NAME_OTHER%]も[%NAME_SELF%]の前で明るくわがままも言えるくらい、慣れ親しんだ関係に進展するでしょう。あなたと出会ったおかげで、あの人は次のテーマを見つけますよ。自分を見つめ直し、新たな価値観を見つけるための新しい年を迎えることになります。二人の恋の結論はそれからになるでしょう。',
'　2022年内中に[%NAME_SELF%]と[%NAME_OTHER%]の恋に結論が出る可能性は低いでしょう。それは二人の相性が悪いということではありません。逆に相性がいいからこそ、恋が進展するのに時間がかかるのです。炭に例えると、安い炭は早く燃えあがりますが、すぐに灰になってしまいます。でも備長炭のような極上の炭は火が起こるのに時間がかかりますが、起きてからは火力が強く長く燃え続けます。<br><br>　この年の[%NAME_SELF%]と[%NAME_OTHER%]の恋も同じようなものです。本当に魂の中まで恋心が届くには時間がかかりますが、一度届けば恋心は熱く長続きしますよ。',
'　2022年内中に[%NAME_SELF%]と[%NAME_OTHER%]の恋に結論が出る可能性は、あまり高くありません。もちろん二人の相性は悪くないし、着実に進展するでしょう。ただこの年は、あの人に時間がなさ過ぎるのです。関係を進展させるために必要なのはインパクトと回数です。どれだけ出会い、どれだけ印象を残せるか。それが大切です。<br><br>　この年の[%NAME_OTHER%]は、特に仕事の面で大活躍をします。時間がいくらあっても足りない状態になるはず。一方で年内中に[%NAME_SELF%]は何らかの分野で、あの人のパートナー的な立ち位置を獲得することになります。恋の結論が出るのは、もう少し先になりますよ。',
'　2022年内中に[%NAME_SELF%]と[%NAME_OTHER%]の恋に結論が出る可能性は、十分にありますよ。この年のあの人には、今までの人生において、最大級の変化が起こることになります。しかし、それは運命が用意した試練です。あの人はその変化をきっかけに解放され、より良い人生を生きることになります。それはまるで、生まれ変わるような体験でしょう。<br><br>　その後の[%NAME_OTHER%]は悪い夢から覚めたようにすっきりとした気持ちで、清々しささえ感じているでしょう。そして[%NAME_SELF%]がこれまで寄り添ってくれていたことに感謝し、恋が進展していきますよ。',
		),
		array( "nw22_016_14", 
'あの人との恋を叶えるためには、あなたが与えるインパクトがポイントですよ！',
'どれだけ連絡が取れて情報を共有できたかで、あの人とあなたの恋の進展は決まります。',
'2022年は、楽しさを共有した分だけ二人の恋がどんどん円滑に。クライマックスは近いですよ。',
'あの人はあなたとのことを大切に思えば思うほど、じっくり考えたいと思っていますよ。',
'あなたとあの人との恋は、多くの紆余曲折がありながらも着実に進展していきますよ。',
'あなたはあの人に救われているようで実は救っているんです。そんな関係で二人の恋は進展します！',
'あなたとあの人の恋が進展するのには時間がかかりますが、一度火がつけば長く燃え続けますよ！',
'あの人が忙しいこの年にどれだけ出会い、どれだけ印象を残せるかが恋の進展のポイントです。',
'あの人を見守り、寄り添うことを忘れなければ、あなたとの恋は幸せな方向に進展しますよ。',
		)
		);
?>