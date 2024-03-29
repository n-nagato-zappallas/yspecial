<?php
/**
 * menu_id : nv21_027
 * 木村藤子：一人用 2月運
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'nv21_027',
			'contents'			 => 'fujiko_ccs',
			'img_name'			 => 'ccs_fujiko',
			'teller_name'		 => '木村藤子',
			'isp_mid'			 => '53j026',
			'nif_menukey'		 => 'unsei_2021_027',
			'price'				 => '600',
			'discount'			 => '540',
			'design_cd'			 => '5',
			'person'			 => '1',
			'category_name'		 => 'life',
			'release_date'		 => '20210123',
			'title'				 => '【2021年2月運】木村藤子が導くあなたの運命◆恋愛/仕事/お金/注意点',
			'caption'			 => '2021年の2月は、あなたの今年を決める大切な月となるでしょうが、この木村藤子にお任せください。今から今月のあなたがより幸せに過ごすための大事な事をお話しします。恋とお金、仕事の事……そして2月に注意すべき大事な出来事。',
            'base_1_title_self' => 'あなたの暦字',
            'base_2_title_self' => 'あなたの基本性格',
            'base_1_title_other' => 'あの人の暦字',
            'base_2_title_other' => 'あの人の基本性格',
            '1_min_title' => '2021年2月～あなたの恋愛運',
            '2_min_title' => '2021年2月～あなたの仕事運',
            '3_min_title' => '2021年2月～あなたの金運',
            '4_min_title' => '【木村藤子の言葉】2021年2月に注意すべき出来事',
		);

// 小メニューロジック
$logic = 'a1';

// Next枠
$next = array( "nv21_025", "nv21_026", "nv21_028", "nv21_029" );

// 一部見せテキスト
$free = array(
		array( "nv21_027_1", 
'　2021年2月、[%NAME_SELF%]さんは恋愛によって自分自身を大きく変容させる事を好むでしょう。相手から影響を受け、新たな思考をうまく取り入れたいようです。恋愛をするたび、魅力をどんどん……',
'　2021年2月、[%NAME_SELF%]さんは職場や趣味のサークルなど、身近にいる異性と恋に落ちやすいようです。ある程度信頼関係を築いた相手でないと、恋愛対象だとは思えないのでしょう。そのため……',
'　2021年2月の[%NAME_SELF%]さんは、意外な相手から好意を持たれる事が多くなるでしょう。気付かないところに、熱い想いを寄せる異性がたくさんいます。予想もつかない相手から声をかけられ……',
'　2021年2月は、意識して動き回り、自分の世界を広げていくと出会いの可能性も高まり、恋多き月になるでしょう。周囲の異性は[%NAME_SELF%]さんの姿を目で追い、いつしかあこがれを抱き……',
'　2021年2月、[%NAME_SELF%]さんは恋愛によって精神性を高め、成長したいと望むでしょう。そのため、恋愛対象となる異性には尊敬できる人を求めるようです。自分以上に純粋でまっすぐな……',
'　2021年2月、[%NAME_SELF%]さんは一目惚れから始まる恋に縁があり、好きになった相手には自ら積極的に声をかけられるでしょう。恋敵が現れても、負けずに自分の魅力を伝えます。その一方で……',
'　2021年2月の[%NAME_SELF%]さんは、共感や同情から恋愛感情が生まれる事が多くなるでしょう。周囲の異性はあなたの包容力に関心を寄せます。あなたに本音を聞いてもらいたい、慰めて……',
'　2021年2月、[%NAME_SELF%]さんは冒険したくなるような、運命的な恋を求めるでしょう。恋愛によって生命力を高めたいのかもしれません。異性とかかわる機会を多く持つほど、潜在的な魅力や……',
'　2021年2月、[%NAME_SELF%]さんは異性や恋愛に前向きになれます。ですが、周囲の視線を気にし過ぎるあまり、恋愛を発展させるのが難しいと感じるでしょう。そのような思考でいると、気付いたとき……',
		),
		array( "nv21_027_2", 
'　この時期の[%NAME_SELF%]さんは、業界や組織の変化に柔軟に対応できるようです。自己解決能力が高くなっているのもあり、どのような課題も器用にクリアし、自然に活動の幅を広げ……',
'　この月の[%NAME_SELF%]さんは、仲間と上手に交わりながら、自分の才能をうまく発揮できるでしょう。他の人では手に入れられない成功法へとたどり着ける事も多いようです。需要を……',
'　どのような事も理論立てて検討する時期を迎えた[%NAME_SELF%]さんは、最後まで思考や感情が揺らぐ事なく、目的を達成させられるでしょう。周囲の雰囲気に流されず、自分のペースを……',
'　2021年2月の[%NAME_SELF%]さんは、創造性が豊かになり、他の人ではできないような発想を形にできます。組織の中では、カリスマ的な存在となれるでしょう。斬新な思考で難なく課題を……',
'　2021年2月、[%NAME_SELF%]さんはスケールの大きな視点を得られるでしょう。どのような状況でも、前向きな未来を思い描けます。周囲には、あなたの考え方や生き方に影響を受ける人が多く……',
'　この月、[%NAME_SELF%]さんは仕事において人から頼られる事が多く、リーダーとして活躍していく場面が増えていきます。何もないところから始める仕事や新しい業務など、手探り状態から……',
'　この月、[%NAME_SELF%]さんはどのような環境にも適応できるので、人をサポートする役割を担う機会が多いでしょう。何かと頼りにされ、責任のある仕事を任される事も少なく……',
'　どのような環境でも冷静な判断ができるこの月の[%NAME_SELF%]さんは、職場の仲間から一目置かれる存在となるでしょう。仕事上の悩みを相談される機会が多く、実際にあなたの……',
'　この月の[%NAME_SELF%]さんは、周囲とのバランスに気をつかい、職場で安定した人間関係を築けるようです。周囲からは、できる人として扱われるでしょう。あなたがいるだけで働きやすく……',
		),
		);


// 結果テキスト
$text = array(
		array( "nv21_027_1", 
'　2021年2月、[%NAME_SELF%]さんは恋愛によって自分自身を大きく変容させる事を好むでしょう。相手から影響を受け、新たな思考をうまく取り入れたいようです。恋愛をするたび、魅力をどんどん更新していけるでしょう。<br><br>　この月のあなたは直観がさえ、前向きな行動を起こせそうです。仕事や趣味、人間関係など、一見恋愛とは関係ない事に夢中になっているうちに、特定の異性と親しくなる機会もあります。相手の条件に少々心配な要素があったとしても、よく似た価値観や感受性の持ち主なら、思い切って付き合ってみるのもよいでしょう。',
'　2021年2月、[%NAME_SELF%]さんは職場や趣味のサークルなど、身近にいる異性と恋に落ちやすいようです。ある程度信頼関係を築いた相手でないと、恋愛対象だとは思えないのでしょう。そのため、恋愛には慎重になってしまいます。<br><br>　この月は、あなたの家庭的な魅力に焦点が当たりやすい時期です。仕事や人間関係を通して、あなたの思いやりが周囲の人たちを和ませる機会があるでしょう。そのような展開から、新たな恋が生まれる可能性があります。相手はあなたの気持ちに寄り添い、さりげなく好意を伝えようとするでしょう。',
'　2021年2月の[%NAME_SELF%]さんは、意外な相手から好意を持たれる事が多くなるでしょう。気付かないところに、熱い想いを寄せる異性がたくさんいます。予想もつかない相手から声をかけられ、強烈に惹かれ合う事もあるでしょう。<br><br>　この月は、知的好奇心を満たす機会を持つ事で、新たな出会いが促されます。たとえば、新しい事を学ぼうとすれば、生徒や講師の中に縁がある異性が見つかるでしょう。また、最初はSNSを通じて親しくなった相手と、次第に直接話す機会を持つようになります。二人は違う環境にいるものの、それがかえって新鮮さを生み出すでしょう。',
'　2021年2月は、意識して動き回り、自分の世界を広げていくと出会いの可能性も高まり、恋多き月になるでしょう。周囲の異性は[%NAME_SELF%]さんの姿を目で追い、いつしかあこがれを抱きます。恋愛対象の異性として意識される機会が多いでしょう。<br><br>　この月は、仕事やプライベートを通して、リーダーシップを発揮するチャンスが与えられそうです。いつも以上に輝きを増し、異性の視線を集められるでしょう。意中の相手がいる場合は、積極的にかかわるようにすれば、理想的な関係性をはぐくめます。あなたにとって有利な展開が待っていると言っても過言ではないほどです。',
'　2021年2月、[%NAME_SELF%]さんは恋愛によって精神性を高め、成長したいと望むでしょう。そのため、恋愛対象となる異性には尊敬できる人を求めるようです。自分以上に純粋でまっすぐな恋愛嗜好を持った人を恋人にしたいと考えるのでしょう。<br><br>　この月は、その好みに合った異性と出会える可能性が高いようです。特定の仕事や役割を通して、魅力的な異性と密接にかかわるチャンスが与えられるでしょう。そのとき、あなたから素直な気持ちを伝えれば、恋は予想以上に加速していきます。とんとん拍子に二人の恋は展開していくでしょう。',
'　2021年2月、[%NAME_SELF%]さんは一目惚れから始まる恋に縁があり、好きになった相手には自ら積極的に声をかけられるでしょう。恋敵が現れても、負けずに自分の魅力を伝えます。その一方であきらめも早く、無理だと思ったらあっさりと身を引いてしまうでしょう。<br><br>　この月は、積極的に前に出ていく事で、異性からの注目を集められます。仕事や私生活において頑張る姿を見せていると、あなたの魅力に気付き好意を寄せる人が現れるはずです。いつもなら一歩引いて遠慮してしまうような場面でも、勇気を出してアピールしていきましょう。',
'　2021年2月の[%NAME_SELF%]さんは、共感や同情から恋愛感情が生まれる事が多くなるでしょう。周囲の異性はあなたの包容力に関心を寄せます。あなたに本音を聞いてもらいたい、慰めてもらいたいという欲求を抱き、積極的に近づいてくるかもしれません。<br><br>　今月は、いつも以上にあなたの優しさが注目されやすいようです。特別な感情を持つ人とそうでない人には、きちんと態度を変える方がよいでしょう。あなたの思いやりを勘違いしてしまう異性もいるようです。めりはりのある行動や態度で、理想的な相手だけを引き寄せるように心掛けましょう。',
'　2021年2月、[%NAME_SELF%]さんは冒険したくなるような、運命的な恋を求めるでしょう。恋愛によって生命力を高めたいのかもしれません。異性とかかわる機会を多く持つほど、潜在的な魅力や欲求に気付き、自分を高められると感じるのでしょう。<br><br>　この月にあなたと親しくなる異性は、さまざまな知恵を授けてくれます。仕事や趣味で成功を収めるヒントを与えてくれるでしょう。あなたはその人と過ごす時間を通して、精神的な豊かさを得られます。満たされた気分を味わい、新たな生き方や恋愛観を手に入れられるでしょう。華やかで活気のある一ヶ月が待っています。',
'　2021年2月、[%NAME_SELF%]さんは異性や恋愛に前向きになれます。ですが、周囲の視線を気にし過ぎるあまり、恋愛を発展させるのが難しいと感じるでしょう。そのような思考でいると、気付いたときには本命の異性を他の人に取られてしまっているかもしれません。<br><br>　しかし、今月は、几帳面で奥ゆかしい異性との出会いに期待ができます。仕事や特定のコミュニティーでかかわる異性から、熱烈なアプローチを受けるでしょう。最初は戸惑うものの、あなたは徐々に相手の純粋さに惹かれていきます。そして理想的な関係を築くようになるでしょう。',
		),
		array( "nv21_027_2", 
'　この時期の[%NAME_SELF%]さんは、業界や組織の変化に柔軟に対応できるようです。自己解決能力が高くなっているのもあり、どのような課題も器用にクリアし、自然に活動の幅を広げられるでしょう。困難な状況がやってきても、ゲーム感覚で楽しみながら優れた結果を出せるはずです。<br><br>　この月、あなたが向き合う事になるのは、新たな世界やツールを融合させ、未知の業務にチャレンジする事でしょう。新鮮な環境が与えられるようです。さまざまな思考を巡らせながら新たな挑戦をする機会を得て、より精度の高い仕事を遂行できるでしょう。',
'　この月の[%NAME_SELF%]さんは、仲間と上手に交わりながら、自分の才能をうまく発揮できるでしょう。他の人では手に入れられない成功法へとたどり着ける事も多いようです。需要をうまく見極めれば、時代に合ったサービスや物を提供できるでしょう。<br><br>　この月は、あなたが得意とする仕事に携わる機会が与えられるかもしれませんでしょう。その結果、多くの人からの称賛を得られるはず。本領を発揮できる環境に恵まれ、仕事に集中できるようになるでしょう。よりやりがいを感じ、昇進する可能性もあります。',
'　どのような事も理論立てて検討する時期を迎えた[%NAME_SELF%]さんは、最後まで思考や感情が揺らぐ事なく、目的を達成させられるでしょう。周囲の雰囲気に流されず、自分のペースを貫き通せる点がこの月の強みです。周囲はそのような能力に注目します。<br><br>　この月のあなたは、一見トラブルと思われるような出来事に遭遇するものの、そのおかげで新たな自分の才能を見出せるでしょう。これまで苦手と思っていた事を克服し、自分の可能性を広げられそうです。転機は、精神的強さを手に入れられるタイミングでもあるでしょう。',
'　2021年2月の[%NAME_SELF%]さんは、創造性が豊かになり、他の人ではできないような発想を形にできます。組織の中では、カリスマ的な存在となれるでしょう。斬新な思考で難なく課題をこなせる点が強みです。周囲は豊富なアイデアを持つあなたを尊敬するでしょう。<br><br>　この月は、隠れた才能を生かす機会が与えられます。なかなか解決法が見つからない問題に、最善の結果を導き出せるでしょう。あなたはこの経験を元に、さらなる目標を見据えるはず。そして、これまで以上に成功への意欲を抱くようになるでしょう。',
'　2021年2月、[%NAME_SELF%]さんはスケールの大きな視点を得られるでしょう。どのような状況でも、前向きな未来を思い描けます。周囲には、あなたの考え方や生き方に影響を受ける人が多く、たくさんの仲間に慕われるでしょう。<br><br>　この月、あなたは自分の限界を感じる課題に遭遇する可能性があります。ですが、素直に自分の弱みを認める事ができ、多くの協力者に恵まれるでしょう。あなたの人間性を上手にアピールすれば、思いのほか大きな成功を手に入れられるチャンスが巡ってくるかもしれません。',
'　この月、[%NAME_SELF%]さんは仕事において人から頼られる事が多く、リーダーとして活躍していく場面が増えていきます。何もないところから始める仕事や新しい業務など、手探り状態から始める仕事で手腕を発揮できるでしょう。<br><br>　行動力や意志の強さを問われる場面では、決断を下すのに苦労しそうです。周りの人たちと相談する事も許されず、あなたの意見や考えがそのまま決定事項となるものが多いので、意見や考えが統一された話をできるようにしておきましょう。ぶれない芯があれば、あなたの評価もあがっていきます。',
'　この月、[%NAME_SELF%]さんはどのような環境にも適応できるので、人をサポートする役割を担う機会が多いでしょう。何かと頼りにされ、責任のある仕事を任される事も少なくありません。<br><br>　特に、周囲の模範となるようなポジションを与えられやすく、やりがいのある仕事を任されます。頑張ってこなしているうちに、自分でも気付いていなかった潜在的な才能を発揮できるでしょう。そして、小さな成功体験を重ね、自信を増す瞬間が訪れます。その結果、日々のモチベーションがぐっとあがるでしょう。',
'　どのような環境でも冷静な判断ができるこの月の[%NAME_SELF%]さんは、職場の仲間から一目置かれる存在となるでしょう。仕事上の悩みを相談される機会が多く、実際にあなたのアドバイスによって励まされる人は多いはずです。助けられた人はあなたに深く感謝するでしょう。<br><br>　この月は、職場環境や人間関係の変化によって動揺する周囲の人たちの調整を行う事が増えます。周囲はあなたの案を取り入れ、最高の結果を得る事に集中しようとするでしょう。あなたから発せられるやる気や集中力は、周囲に影響します。仲間意識を持つと、よりよい結果を出せるでしょう。',
'　この月の[%NAME_SELF%]さんは、周囲とのバランスに気をつかい、職場で安定した人間関係を築けるようです。周囲からは、できる人として扱われるでしょう。あなたがいるだけで働きやすく、士気が高まるように感じる仲間も多いはず。あなたの配慮を尊敬するのです。<br><br>　この月のあなたは重大な仕事を任され、頑張ってクリアする事に専念するでしょう。協力者を求め、要領よく仕事を完成させる事にひたすら注力します。上司や同僚たちは、あなたの働きぶりや、仕事に真摯に取り組む姿勢を高く評価してくれるでしょう。',
		),
		array( "nv21_027_3", 
'　環境の変化により、思わぬ形でお金が大きく動く流れがやってきます。自身の引っ越し、周囲のお祝い事をはじめ、予想していなかったところでお金が必要となるでしょう。ですが、意外な人からのサポートによって、困難を免れる事は可能です。お金を通して人間関係の大切さを知る月でもあるでしょう。<br><br>　この月の[%NAME_SELF%]さんには、新たに銀行口座の開設、財布の購入など、お金にまつわる再スタートを切る機会が訪れそうです。そのとき、自分の納得できる形にこだわれば、うまく金運をあげられるかもしれません。',
'　この月は、人間関係を充実させるための出費が多くなりがちです。魅力的な誘いが次々と舞い込んできますので、誘われたらきちんと優先順位を決めましょう。そうしなければ、後悔する事になるかもしれません。<br><br>　自己投資につながる学びや体験には、惜しみなくお金をつかうとよさそうです。新たな体験をする事によって、可能性を広げられるでしょう。生きたお金のつかい方を心掛ければ、予想以上に充実した未来を創造できるはずです。めりはりをつけたつかい方をし、[%NAME_SELF%]さんなりのルールを設けるとよいでしょう。',
'　この月は出費を見直し、必要のないものを手放す機会が訪れるでしょう。不要なものにお金をつかっていた事に気付き、生活そのものを見直します。新たな環境を受け入れると出費はかさみますが、優先順位をきちんと決めるようにしてつかい方を検討すれば、思わぬ掘り出しものを見つけられるでしょう。<br><br>　さらに、収入アップを狙ったり、貯蓄を増やしたりするための情報が入りやすいときです。手に入れたい理想の未来を明確にすれば、よりよいお金の循環を生み出せるでしょう。恵まれた環境を手に入れられます。',
'　この月の[%NAME_SELF%]さんは、何でもお金で解決しようとしがちのようです。周囲の協力を得て、無駄な出費を防ぐ方法を検討してみましょう。お金をつかわずによりよい環境を整える方法が、無限にある事に気付けます。<br><br>　またこの月は、生活に必要だと思っていたお金が、思わぬ展開によって浮く機会が訪れるでしょう。その結果、ちょっとした贅沢を楽しめます。物を買うよりも体験する事に焦点を当てれば、有効なお金のつかい方ができるでしょう。副業や株などに取り組むチャンスも訪れやすく、うまくいけば大きな収入に結びつきます。',
'　お金に関する事で、これまで取り組んでいたものが一旦完了しそうです。ローンの支払いが終わる、貸していたお金が返ってくるなど、お金の流れが大きく変わるでしょう。その結果、将来設計を真剣に考える機会を得られます。お金との向き合い方を変える展開がやってくるでしょう。<br><br>　さらにこの月は、お金を通して人間関係を見直す時期でもあります。お金のトラブルに巻き込まれないためには、怪しい副業や儲け話には耳を貸さない姿勢が重要でしょう。収入をあげるためには、貯金をしたり、本業での昇進を狙ったりするのが得策です。',
'　この月は誘惑が多いでしょう。しかも衝動買いをすると後悔する事がほとんどとなるため、いかに自制心をはたらかせられるかが重要です。購入する前に本当に必要なものかあらためて考え、少し時間をつかう事で、出費はある程度抑えられます。<br><br>　この月は友人から遊びに誘われる機会が増え、出費もかさみますが、必要経費だと割り切りましょう。仲間と過ごした楽しい時間は、後に貴重なものとなって返ってきます。むしろ、日ごろお世話になっている人を、自分から誘うくらいの意識を持つべきかもしれません。',
'　この月は思わぬ出費を体験し、[%NAME_SELF%]さんは収支の見直しをするべきかと思うようです。お金の管理が得意な人、あるいは専門家からアドバイスをもらうチャンスもやってくるでしょう。そして、自分は何のために働くのか、それともただお金を貯めたいだけなのかを明らかにし、それが自分の生き方につながっていると考えるようになっていきます。<br><br>　人と会ったり、食事を楽しんだりするよりも、自分磨きのためにお金をつかうのがおすすめです。そのような選択をすれば、お金の循環がさらによくなるでしょう。いずれ、期待以上のリターンを手にできるかもしれません。',
'　この月は何かとお祝い事が多く、心を弾ませながらお金をつかえるでしょう。出費は増えるものの、新たな物や人に出会う機会も多く、お金をつかえばつかっただけの喜びを実感できます。いつも以上に財布のひもを緩めても、損する事はないと割り切って大丈夫でしょう。<br><br>　さらにこの月は、ちょっとした臨時収入があるかもしれません。趣味で取り組んでいる事、または得意な事を副業にできるといった展開が待っている可能性があります。お金の出入りは激しいと感じられるものの、お金を通して心の豊かさを得られるはずです。',
'　この月は、本業や副業の収入がアップしたり、懸賞に当たったりと、お金にまつわる幸運が巡ってきやすいでしょう。期待していなかった形で思わぬお金を手に入れる可能性があります。無駄づかいは嫌かもしれませんが、時には何も考えずお金をつかう機会を持てば、さらなる金運の好循環を引き寄せられるでしょう。<br><br>　また、将来的なお金のつかい方を検討する機会もありそうです。一生ものの大きな買い物を考えるには、よいタイミングかもしれません。必要な情報を集める事を心掛ければ、賢明なお金のつかい方ができます。',
		),
		array( "nv21_027_4", 
'　この月の[%NAME_SELF%]さんは自分の自由を主張し過ぎるあまり、わがままな人ととらえられがちです。新たなに出会う人に勘違いされると、後々やりづらくなってしまいます。自分の要求を伝えるときには、笑顔とやんわりとした口調を意識しましょう。<br><br>　また、時間や仕事の管理が難しくなる月のようです。スケジュールの見落としを防ぎ、優先順位をきちんと決める事に目を向けておきましょう。ちょっとしたミスが大きなトラブルにつながりかねない事を肝に銘じておくべきです。気の緩みが周囲への迷惑につながると把握しておいてください。',
'　この月に注意したいのは、大きな変化によって性急な決断に迫られ、冷静さを失ってしまう事です。周囲の雰囲気にのまれて、[%NAME_SELF%]さんらしくない決断をしてしまう可能性があります。判断しかねるときは、保留という選択肢もある事を心得ておきましょう。<br><br>　精神的な余裕を持ちたければ、旧友との会話が有効です。あなたの事をよく理解してくれている人の意見を聞くと、自分の軸に戻りやすくなります。心の隙間に邪念が入ってこないようにするには、ルーティンを面倒くさがったり怠ったりしない姿勢が大切です。',
'　この月に注意すべき事は、完璧志向が裏目に出てしまう事です。仕事や特定の役割に取り組む際、他人に自分と同じレベルの働きを求めてしまうと、煙たがられるでしょう。多くの人と協力して一つの事を達成させるときには、広い視野を持つ事が大切です。感謝の気持ちを忘れずに接する姿勢を心掛けてください。<br><br>　心に余裕がなく、時間管理に悪影響を及ぼしやすいときですので、約束の時間には遅れないようにしましょう。信用を失う事で生じる代償は、予想以上に大きいものだと把握しておく必要があります。',
'　この月、[%NAME_SELF%]さんが注意したい事は、人間関係において楽観的な見方をしてしまう事です。あなたの知らないところで妬まれたり、よくない印象を抱かれたりする可能性があります。周囲とまめにコミュニケーションを取り、あなたの人間性を上手にアピールしましょう。<br><br>　また、縁のない世界や分野からの誘いがあり、気後れするかもしれません。しかし、一緒に行ってほしいとお願いすれば、ついてきてくれる人はいるでしょう。人見知りでいると、望む未来をかなえにくくなってしまいます。積極性が大切なときのようです。',
'　この月、[%NAME_SELF%]さんが心掛けるべき事は、自分にとって必要かそうでないかの取捨選択を積極的に行う姿勢です。さもなければ、時間もお金も無駄になってしまう可能性があります。目的を明確にし、中途半端なものは思い切って手放す事も大切です。<br><br>　また、信頼できない人からの頼まれ事に困惑するかもしれません。あいまいな返事をすると引き受けたと勘違いされますから、やるかやらないかはっきり伝え、かかわりたくない人とは距離を置く事が重要です。厄介事を近づけない環境づくりを心掛けてください。',
'　この月に注意すべき事は、親しい人に不満を抱きやすいというものでしょう。たとえば、仕事でミスをして注意されたり、友人から予想外の発言をされたりするようです。既に分かっている事をわざわざ注意され、[%NAME_SELF%]さんは不満と怒りを引きずってしまいます。それからというもの、その人との関係がぎくしゃくするなど、人間関係が悪化していくようです。<br><br>　誰に何を言われても、自分のためを思って言ってくれているのだと前向きにとらえられれば、怒りを感じずに済むでしょう。心を落ち着け、深呼吸する余裕を持ってください。',
'　この月、[%NAME_SELF%]さんは必要以上に人に振り回される可能性があります。人との距離感をうまく取っていなければ、よかれと思った行動が余計なお節介と受け取られてしまうでしょう。求められるまでは行動や提案をなるべく控え、現状維持を心掛ける方が平和を保てます。<br><br>　何か問題が起こったときには、信頼できる人を頼りましょう。一人で問題を抱え込んでしまうと、厄介な事になりかねません。常に冷静な人に客観的視点なアドバイスを求めると、あなた自身も平常心を保ちやすくなるでしょう。',
'　この月に注意したいのは、特定の組織や人間関係における派閥争いに巻き込まれないようにする事です。誰の味方をするかによって、与えられる環境が大きく違ってくるでしょう。中立的な立場を貫き、余計な言葉を発しないようにするのが無難です。特に、口の軽い人との交流は避ける方がよいでしょう。<br><br>　変化の波に惑わされないようにするためには、仕事や目的に集中する姿勢を保つのがおすすめです。人と群れる事に時間を割くよりも、目の前の課題に一生懸命取り組んだ方が、厄介事に巻き込まれずに済むでしょう。',
'　この月の[%NAME_SELF%]さんは、何かと責任を取らされる事が多いでしょう。思わぬ展開によって、人から厳しい評価を受けそうです。しかし、そのとき大らかな対応ができれば、周囲はあなたの人間性に一目置くようになります。あなたの崇高なまでの精神性に注目するのでしょう。<br><br>　日常においては、偏った判断をしないようにする事が大切です。感情的になると、誤った判断をしてしまいかねません。内観する時間を設け、意識を外よりも内に向けるようにしてください。そうすれば、トラブルを回避できるでしょう。',
		),
		);
?>