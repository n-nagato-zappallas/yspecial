<?php
/**
 * menu_id : nu20_015
 * 木村藤子：一人用 仕事お金
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'nu20_015',
			'contents'			 => 'fujiko_ccs',
			'img_name'			 => 'ccs_fujiko',
			'teller_name'		 => '木村藤子',
			'isp_mid'			 => '52v014',
			'nif_menukey'		 => 'unsei_2020_014',
			'price'				 => '1000',
			'discount'			 => '900',
			'design_cd'			 => '10',
			'person'			 => '1',
			'category_name'		 => 'meet',
			'release_date'		 => '20191203',
			'title'				 => '2020年は大躍進!?⇒木村藤子が示す≪あなたの仕事運≫才能/評価/成功',
			'caption'			 => '2020年を飛躍の年にしたいと願うあなたへ、木村藤子が珠玉の『仕事運鑑定』を贈ります。流れは好転するか、出世のチャンスは訪れるか、一年で最も大きな成功は何か――あなたが知りたいと望む未来の光景が、きっとここで見えるはずです。',
            'base_1_title_self' => 'あなたの暦字',
            'base_2_title_self' => 'あなたの基本性格',
            'base_1_title_other' => 'あの人の暦字',
            'base_2_title_other' => 'あの人の基本性格',
            '1_min_title' => 	'あなたの仕事運命……2020年は好転する？　退転する？',
            '2_min_title' => 	'2020年、あなたが仕事で重視すべき点',
            '3_min_title' => 	'2020年、あなたが仕事で生かせる隠れた才能',
            '4_min_title' => 	'2020年、あなたの仕事が評価される機会',
            '5_min_title' => 	'2020年、あなたを出世へと導いてくれるのは○○',
            '6_min_title' => 	'あなたが仕事で収める2020年で一番の成功',
            '7_min_title' => 	'「今年こそは」と大志を胸に抱いているなら',
		);

// 小メニューロジック
$logic = 'a1';

// Next枠
$next = array( "nu20_013", "nu20_016" );

// 一部見せテキスト
$free = array(
		array( "nu20_015_1", 
'　2020年に[%NAME_SELF%]さんの仕事運命は好転していく見込みが強いでしょう。周りを気づかって仕事をする機会が増えそうですが、それは自分自身に余裕が生まれる証と言えます。自らが満たされてい……',
'　[%NAME_SELF%]さんの仕事運命は2020年に好転する見込みが強そうです。運気としては特別恵まれているわけではないものの、逆に運に見放されるような一年でもありません。よくも悪くもあなたの行動……',
'　2020年に[%NAME_SELF%]さんの仕事運命は好転していくでしょう。この一年は運気が全般的に安定していますが、仕事運に関しては恵まれていて成功のきっかけをつかみやすいのです。また、精神的にも……',
'　[%NAME_SELF%]さんの仕事運命が2020年に退転する事は考えられません。運気としては特別恵まれているとは言えないものの、だからといって状況が悪化するようなトラブルに見舞われる事はありえない……',
'　2020年、[%NAME_SELF%]さんの仕事運は好転する見込みです。なぜならこの年はあなたにとって何かを始めるには打ってつけだから。言い換えれば大きな転機を迎える年でしょう。そして転機を迎えて……',
'　[%NAME_SELF%]さんの仕事運は2020年、好転する可能性が高そうです。やや浮き沈みの激しい側面があり、一時的に少し苦しい状況になる事も考えられますが、すぐに挽回できるので問題はないでしょう……',
'　[%NAME_SELF%]さんの仕事運命は2020年、好転するでしょう。大きなトラブルに見舞われる心配はなく、逆にあなたにとって喜ばしい出来事が次々起こる可能性が高いのです。仕事への悩みは日に日に……',
'　2020年、[%NAME_SELF%]さんの仕事運命は好転するでしょう。ただ、一時的に低迷する可能性も否定できず、少し苦しい時期が訪れるかもしれません。もっとも、低迷したままという事は考えにくいので……',
'　[%NAME_SELF%]さんの仕事運は2020年、一気に好転していきます。それはあなたにとって2020年という年が非常に恵まれた一年となるからです。これまで味わった事のない幸せを実感する事ができ、……',
		),
		array( "nu20_015_2", 
'　自分のペースを崩さずに仕事を続ける事が2020年の[%NAME_SELF%]さんにとって最も大切な……',
'　2020年に[%NAME_SELF%]さんが最も仕事で重視すべきなのは、知識をたくわえる事です……',
'　2020年、[%NAME_SELF%]さんが仕事を進める上で何より重視すべきなのは周囲の評価を高め……',
'　自信を持って仕事を進める事を2020年の[%NAME_SELF%]さんは最も重視すべきでしょう……',
'　[%NAME_SELF%]さんが2020年に仕事を進める上で重視すべきなのは、できるだけ多くの物事……',
'　2020年に[%NAME_SELF%]さんが仕事で最も重視すべきなのは人間関係です。職場の人たちと……',
'　[%NAME_SELF%]さんが2020年に仕事を進めていく上で重視すべきなのは、とにかく楽しむ事……',
'　2020年、[%NAME_SELF%]さんが仕事で最も力を入れるべきなのは地道な努力です。すぐに……',
'　2020年、[%NAME_SELF%]さんが仕事で一番力を入れるべきなのは助け合いです。自分の成功……',
		),
		);



// 結果テキスト
$text = array(
		array( "nu20_015_1", 
'　2020年に[%NAME_SELF%]さんの仕事運命は好転していく見込みが強いでしょう。周りを気づかって仕事をする機会が増えそうですが、それは自分自身に余裕が生まれる証と言えます。自らが満たされているからこそ、他人を思いやるゆとりができるのです。また、誰かを助ければその分自分も助けてもらえる可能性が高まり、それが仕事運にもいい影響を与えてくれるでしょう。<br><br>　一年を通じて運気は安定しており、一時的にでも退転する事はなさそうです。安定を停滞と受け取る事もあるかもしれませんが、だからといって大きな不安を感じる恐れはないでしょう。それもひとえに2020年のあなたが人間関係に恵まれていて、周りに支えてくれる人がいるおかげと考えられます。',
'　[%NAME_SELF%]さんの仕事運命は2020年に好転する見込みが強そうです。運気としては特別恵まれているわけではないものの、逆に運に見放されるような一年でもありません。よくも悪くもあなたの行動がそのまま結果につながりやすい年であり、だからこそやる気を失わずに努力を続ければ運命はどんどん好転していくのです。<br><br>　逆にすべてをあきらめてしまったら運命は退転する事となりますが、大きなトラブルに見舞われる事がないので悲観的になる心配はないでしょう。むしろ自分の思ったとおりの結果が得られる事に喜びを感じられ、それがやる気につながるはずです。また、日常生活にも楽しさを見出しやすいので、仕事を頑張ろうという意欲もおのずと高まるでしょう。',
'　2020年に[%NAME_SELF%]さんの仕事運命は好転していくでしょう。この一年は運気が全般的に安定していますが、仕事運に関しては恵まれていて成功のきっかけをつかみやすいのです。また、精神的にも余裕が生まれる事が多く、仕事に対する意欲が次第に高まっていくでしょう。やる気と成功の確率は連動していて、仕事への情熱がいい結果を生んでくれるのです。<br><br>　また、仕事で成功するためのチャンスにも恵まれやすい一年と言えるでしょう。周りから頼られる機会がしばしばあり、うまく期待に応える事ができればそれが成功の第一歩となります。ときには難しい業務を頼まれる事もあるかもしれませんが、実力以上のものを要求される事はないので大丈夫でしょう。',
'　[%NAME_SELF%]さんの仕事運命が2020年に退転する事は考えられません。運気としては特別恵まれているとは言えないものの、だからといって状況が悪化するようなトラブルに見舞われる事はありえないのです。少しずつではあるものの仕事運命は好転していく見込みが強く、それに伴って悩みは解消されていくでしょう。<br><br>　もっとも、好転の度合いはゆるやかなので実感は得にくいかもしれません。場合によっては退転していると感じられる事もあるでしょうが、そういうわけではないのです。2020年のあなたは精神的にやや不安定で、悲観的になりやすい点には注意が必要。心を落ち着けて冷静に現状を把握すれば、仕事運命が徐々に改善されている事にも気付けるはずです。',
'　2020年、[%NAME_SELF%]さんの仕事運は好転する見込みです。なぜならこの年はあなたにとって何かを始めるには打ってつけだから。言い換えれば大きな転機を迎える年でしょう。そして転機を迎えて運気が悪化する事は考えにくいので、おのずと仕事運は好転していく可能性が高いのです。<br><br>　とはいえ、結果が出るまでには多少時間が掛かるので運気がよくなっていると実感しづらい部分はあるかもしれません。ただ状況が悪くなっていない事は確信できるはず。また仕事に対する意欲が高まりやすい年でもあるため、気持ちがポジティブになる事も多いでしょう。悲観的な事を考える機会が減少するのは運気が上昇しつつある兆しで、それを感じ取れば悩みも解消されていくはずです。',
'　[%NAME_SELF%]さんの仕事運は2020年、好転する可能性が高そうです。やや浮き沈みの激しい側面があり、一時的に少し苦しい状況になる事も考えられますが、すぐに挽回できるので問題はないでしょう。また、試練を乗り越えた先に大きな成功が待ち受けており、あなた自身それを実感できるはずです。<br><br>　運気が好転しやすいのは、2020年のあなたが人間関係に恵まれているおかげ。一人ではどうにもならない場合でも、周りが手を差し伸べてくれるおかげで深刻なトラブルに発展せずに済むのです。人とのつながりを重視する事で孤独にさいなまれる心配もなく、いつも周りに誰かいる事はあなたにとって非常に心強く、やる気を維持しやすいのではないでしょうか。',
'　[%NAME_SELF%]さんの仕事運命は2020年、好転するでしょう。大きなトラブルに見舞われる心配はなく、逆にあなたにとって喜ばしい出来事が次々起こる可能性が高いのです。仕事への悩みは日に日に薄れていき、精神的にも安定した日々を送る事ができるでしょう。基本的に2020年は安定の年であり、仕事面でも順調に成功を積み重ねやすいと言えます。思い通りに物事が進まない事がほとんどないので、ストレスもあまりため込む恐れがないでしょう。<br><br>　また、私生活の充実が仕事にもいい影響を与えてくれそうです。仕事一辺倒になる事はなく、日々の生活を楽しみながら仕事をこなしていくでしょう。遊びや趣味を通じて、仕事に役立つ技術を手にする事もあるはずです。',
'　2020年、[%NAME_SELF%]さんの仕事運命は好転するでしょう。ただ、一時的に低迷する可能性も否定できず、少し苦しい時期が訪れるかもしれません。もっとも、低迷したままという事は考えにくいので安心してください。どんなときも一筋の光が見えているので、やる気を完全に失う事もないでしょう。常に希望を持ち続けられるおかげで苦しい状況を成功への足掛かりと前向きにとらえる事もできそうです。<br><br>　どんなときも焦ったりあきらめたりせずこつこつと努力を積み重ねていけば、状況は少しずつ改善されていきます。2020年に行う努力が無駄になる事は決してありません。頑張れば頑張っただけの成果は得られますし、あなたの努力を誰かが見ていてくれるでしょう。',
'　[%NAME_SELF%]さんの仕事運は2020年、一気に好転していきます。それはあなたにとって2020年という年が非常に恵まれた一年となるからです。これまで味わった事のない幸せを実感する事ができ、あまりに順風満帆な一年で逆に不安を覚えるかもしれません。こんなに調子がいいのは何か悪い事が起こる前触れではないかと思う事もあるでしょうが、それは杞憂です。ひとたび好転した運命が悪化する事はありません。<br><br>　何をしてもうまくいく一年なので、思い切った行動を取ればより大きな成功をつかみ取りやすいでしょう。もっとも、2020年は何をすれば自分にとって一番いいのか無意識に理解できるため、心の声に従って行動するだけで問題ありません。',
		),
		array( "nu20_015_2", 
'　自分のペースを崩さずに仕事を続ける事が2020年の[%NAME_SELF%]さんにとって最も大切な心掛けです。必死に努力するのは悪い事ではありませんが、無理をし過ぎるのはかえって仕事に悪影響を及ぼす危険性が高いでしょう。肉体的にも精神的にも疲れ果ててしまうと自分の本領を発揮できず、思わぬ失敗をしてしまう恐れがあります。<br><br>　だからこそ、無理のない範囲でやるべき事をやるのが重要なのです。疲れたと感じたらゆっくり静養するといいでしょう。気分転換にどこかへ出掛けたり、友人と遊んだりするのも悪くありません。休む事をネガティブにとらえず、それも仕事の一環と考えるようにしてください。2020年のあなたには立ち止まる時間も必要なのです。',
'　2020年に[%NAME_SELF%]さんが最も仕事で重視すべきなのは、知識をたくわえる事です。そのためにさまざまな業務に率先してかかわっていく必要があるでしょう。自分の得意分野だけでなく、苦手分野にもあえて携わってみてください。最初はうまくいかないかもしれませんが、あなたならすぐに順応できるでしょう。苦手を克服して自己を成長させるのは、仕事でいい結果を得るためには非常に大切なのです。<br><br>　自分一人で頑張る必要はなく、難しいと感じたら周りを頼っても問題ありません。助けてほしいと素直に言えば、周囲の人たちは喜んで力を貸してくれます。そして助けてもらったらその分、逆にいざというとき誰かを助けてあげるよう心掛けるといいでしょう。',
'　2020年、[%NAME_SELF%]さんが仕事を進める上で何より重視すべきなのは周囲の評価を高める事でしょう。何もせずに高評価を得るのは難しいため、結果を出すのが大切と言い換えてもいいかもしれません。どんなささいな事でもこつこつと実績を重ねていけば、おのずと周りの人たちはあなたを認めるようになります。<br><br>　評価が高まれば賞賛される機会も増えるでしょうが、そのときは素直に喜んでください。お世辞を言われている、本心ではないといったネガティブな考え方を持つと周囲との間に不要な壁をつくってしまいます。いい人間関係を築く事も2020年のあなたには重要なので、相手の言葉を曲解する事なく額面通り受け取る素直さを持つようにしましょう。',
'　自信を持って仕事を進める事を2020年の[%NAME_SELF%]さんは最も重視すべきでしょう。迷いが生じるとどうしても仕事に身が入らなくなり、備わった実力を最大限発揮するのが難しくなってしまいます。仕事へのやる気を失い、やめたいと思うようになってしまう恐れもあるでしょう。嫌々仕事をしていたらチャンスは訪れませんし、仮に訪れてもつかむのは困難なので自信を持つ事は非常に大切なのです。<br><br>　ややこしく考えなくても、楽しんで前向きに仕事ができるよう心掛けるだけで大丈夫。楽しむための方法はいくつもありますが、とにかく働きやすい環境を築くのが最も手っ取り早いでしょう。職場の同僚と私生活でも接し、親しい間柄となるのも一つの手と言えます。',
'　[%NAME_SELF%]さんが2020年に仕事を進める上で重視すべきなのは、できるだけ多くの物事に興味を持つ事です。興味の対象が増えれば増える程、成功を収める可能性が高まると考えて構いません。あれこれ手広く行うのはよくないと思うかもしれませんが、2020年に関しては一つの事に集中するより幅広く仕事に携わった方がいいのです。<br><br>　一つの仕事しかしなければ、成功を収められるのは当然その一つだけでしょう。しかし仕事の数を増やせばその分成功の数も増えていき、結果を残しやすくなるのです。もちろんすべてがうまくいくとは限りませんが、たとえ失敗しても他の成功で挽回すれば問題ありません。また、経験を多く積む事はあなた自身の糧となるでしょう。',
'　2020年に[%NAME_SELF%]さんが仕事で最も重視すべきなのは人間関係です。職場の人たちとの絆が強まれば強まる程、仕事で成功を収めて幸せをつかむ可能性が高まります。一人でこなす業務よりチームワークを発揮して行う業務を重視した方が周囲といい関係性を築きやすいでしょう。また、困ったときは遠慮せず周りを頼る事も大切です。<br><br>　何より肝心なのは、利益を独り占めしようと思わない事。個人で手掛ける仕事は成功したとき、自分だけが見返りを得られます。逆に集団での仕事は見返りが分散されてしまいますが、だからといって個人で得る利益の方が大きいとは限らないでしょう。その後の仕事人生につなげていくためにも、みんなで利益を分かち合った方がいいのです。',
'　[%NAME_SELF%]さんが2020年に仕事を進めていく上で重視すべきなのは、とにかく楽しむ事。楽しんで仕事をする事が成功につながると覚えておきましょう。やりたくない仕事を無理にやっても思った程の結果は得られず、ストレスだけがたまってしまいます。逆にやりたい仕事をやっていれば、それがたとえ難しい業務であってもくじけずに最後までやり遂げられるでしょう。<br><br>　好きこそものの上手なれという言葉が2020年のあなたには打ってつけと言えます。ただ、えり好みばかりしていると周囲の反感を買う恐れがあるため、やりたくない仕事を楽しめるよう努力するのも大切です。どんな事にも楽しみを見出せるようになれば、その分チャンスを得る機会も多くなるでしょう。',
'　2020年、[%NAME_SELF%]さんが仕事で最も力を入れるべきなのは地道な努力です。すぐに結果を求めず、こつこつと与えられた仕事をこなしていく事が何より大切でしょう。ひたむきな努力は周囲からの高評価につながりやすいですが、評価を得るために頑張るといった考え方は持たない方がよさそうです。見返りを求めるとあなたの場合は精神的に追い込まれる危険性が高く、自分らしさを見失う恐れがあります。<br><br>　努力をひけらかすのは好ましくないものの、隠す必要もないでしょう。頑張っている事を見られたくないと思ってしまうと、ともすれば努力していないと誤解される危険性があります。仕事に対して一生懸命取り組むのは恥ずかしい事ではなく、むしろ誇るべきなのです。',
'　2020年、[%NAME_SELF%]さんが仕事で一番力を入れるべきなのは助け合いです。自分の成功のみならず、職場全体の利益を考えて行動する事が何より求められるでしょう。職場の業績があがれば、それがあなた自身の利益に直結すると覚えておいてください。そして周囲を助ける事もまた、めぐりめぐって自身の成功につながるのです。<br><br>　積極的に職場の人たちとかかわり、困っている同僚を見かけたら迷わず手を差し伸べましょう。相手があなたの助けを拒んだり、わずらわしいと感じたりする事はないので大丈夫です。2020年は運気が高まっているおかげで行動が裏目に出る事はありません。一人でも多くの人を助ける事で、最終的に手にする成功もより大きくなります。',
		),
		array( "nu20_015_3", 
'　[%NAME_SELF%]さんは人の心を穏やかにする不思議な魅力が備わっていて、それは才能と呼べるでしょう。いら立ったり落ち込んだりしているとき、あなたの顔を見るだけで気持ちを落ち着けられる人は少なくありません。自分では何もしていないように思えるでしょうが、意識せず誰かを癒やせるのはすごい事です。その才能をうまく開花させれば仕事にも大いに生かせるでしょう。<br><br>　2020年は職場の人たちの積極的に交流して、距離を縮めてみてください。ある程度親しい間柄になれば、あなたに癒やされた相手は恩返しをしたいと考えるようになります。具体的にはあなたが困ったり悩んだりしているとき、その人たちが心強い味方となって支えてくれるでしょう。',
'　[%NAME_SELF%]さんはとても賢い人で、なおかつ飲み込みが早いでしょう。一度教わっただけでどんな事も要領よくこなせるのはそれだけあなたが才能を秘めているためです。豊富な知識も備わっていますが、あなたの場合、その知識を効果的に生かす技術を持っているのが何よりの魅力と言えるでしょう。どれだけ高い知性を持っていても、実生活で役立てられなければ意味がありません。<br><br>　才能を仕事でも有効に活用するためには、難しい仕事をあえて引き受ける事が大切です。あなたにしかできない仕事はきっとあるもので、その仕事を見つける事が2020年に飛躍するための秘訣でしょう。受け身に終始するのではなく、自分から新たな業務を開拓して視野を広げていってください。',
'　[%NAME_SELF%]さんには抜群の統率力が備わっています。信じがたいかもしれませんが、人の上に立つ使命を帯びて生まれたと言っても大げさではないでしょう。自覚していないのは、リーダーとしての立場に身を置く機会があまりないのが原因と考えられます。どれだけ人を引っ張る力を秘めていても、誰かに従うばかりでは才能は埋もれたままとなってしまうのです。<br><br>　2020年は才能を開花させるべく、職場での発言力を高めていきましょう。いきなりリーダーシップを発揮するのは難しいかもしれませんが、自分の意見を述べるのはそれ程困難ではないはず。周りにどう思われるかを必要以上に気にして萎縮するのは、せっかくの素質を自ら封じるようなものと覚えておきましょう。',
'　[%NAME_SELF%]さんは感受性が豊かで、他の誰も思いつかないような奇抜なアイデアを次々と繰り出す事ができます。もっとも、あなた自身は自分が個性的な発想力を備えていると気付いていないでしょう。そのため残念ながら才能はまだ埋もれている状態ですが、2020年はその才能を引き出すための努力に力を入れてみてください。<br><br>　仕事で自らの才能を発揮するためには、何より考えを口にしていく事が大切です。どれだけ画期的なアイデアを思いついても、実際に意見として述べなければ何も思いついていないのと変わりません。あなたは目立つ事をあまり好まないタイプのようですが、仕事で成功を収めたいなら恐れずに自分の思った事を表現していくようにしましょう。',
'　自覚していないかもしれませんが、[%NAME_SELF%]さんは人を引っ張っていく才能を秘めています。リーダーとしての資質を備えていると言った方が分かりやすいかもしれません。本質的に前向きで、何事にも積極的に挑んでいくあなたにあこがれの感情を抱く者は少なくないでしょう。そしてそういった人たちはあなたの下で働きたいとひそかに思うのです。<br><br>　才能を開花させるためにはとにかく場数を踏む事が重要。周囲をまとめる役割は受け身に終始していたらなかなか果たせないので、自分から率先してリーダーの地位を狙っていくといいでしょう。そういった立場は相応の責任を伴うためやりがたらない人が多く、あなたが手をあげても難色を示す者はまずいないはずです。',
'　[%NAME_SELF%]さんはあまり目立つタイプではありませんが、だからといって職場での存在感が薄いわけではないでしょう。むしろあなたは職場にとって必要不可欠な存在となる才能を秘めているのです。具体的に言うとあなたは人を支える才能に秀でています。自分が目立たない代わりに他人を目立たせる力を持っているのです。陰の実力者という呼び方があなたには打ってつけでしょう。<br><br>　その才能を存分に生かすためには、困っている人を見かけたら迷わず助けてあげる事が肝心です。助けを求められていないのに手を差し伸べるのは恥ずかしいかもしれませんが、そこで一歩踏み出すのが才能を埋もれさせないための秘訣。人助けを繰り返す事で才能はより研ぎ澄まされていきます。',
'　[%NAME_SELF%]さんはいつも明るく、物事をポジティブにとらえる事ができます。一言で表すと太陽のような人で、周りを明るく照らし続けているでしょう。気付いていないかもしれませんが、あなたに元気をもらっている人は周りに少なからずいるようです。そしてその太陽のような明るさは才能と呼んで差し支えありません。あなたがいなくなったら職場は暗く、重苦しい空気が流れるでしょう。<br><br>　その才能を仕事で生かすために、2020年は常に笑顔を心掛けてください。あなたの笑顔に多くの人が心を癒やされますし、幸せを呼び込む効果ももたらされるのです。ときにはつらい気分に陥るときもあるでしょうが、そんなときだからこそ笑って乗り切る事が大切と言えます。',
'　[%NAME_SELF%]さんは忍耐力が強く、他の人が途中で投げ出してしまうような事も最後までやり遂げるでしょう。たとえ同じ事の繰り返しでもそこにやりがいを見出し、心が折れる事がないのです。その精神的な強さは才能と言えますが、あなた自身は特別なものとはとらえていないかもしれません。しかし、それはあなたが生まれ持って才能を秘めているからなのです。努力して身につけたわけではないからこそ、当たり前と感じてしまうのでしょう。<br><br>　その才能をさらに開花させて仕事で生かすには、人が嫌がる仕事を意識的に引き受けていく事が肝心です。誰もやりたがらないからこそ、見事やり遂げられたときに得られるものは大きくなりますし、周囲もあなたに感謝するでしょう。',
'　[%NAME_SELF%]さんには物事を臨機応変に対処する柔軟性が備わっています。とりわけ人間関係のように明確な答えのない方面でその才能を発揮しやすいのですが、仕事においても生かす事は十分可能でしょう。ただ、漠然と与えられた業務をこなしているだけではなかなか秘められた才能を発揮する機会は得られないかもしれません。<br><br>　2020年は職場全体を広く見わたし、何かトラブルが起きたときにいち早く解決する役割を担うといいでしょう。問題を未然に防ぐ事は職場のみならず、あなた自身にも利益をもたらしてくれます。特にあなたの場合、人間関係のトラブルは円滑に解決しやすいでしょう。自分に関係ないからと無視を決め込まず、率先してかかわるようにしてください。',
		),
		array( "nu20_015_4", 
'　[%NAME_SELF%]さんは2020年、職場で人間関係に起因するトラブルを目撃する事となります。揉めている同僚とあなたはそれなりに親しく、少なからず心を痛めるでしょう。このままでは職場の雰囲気が悪くなると思ったあなたは、思い切ってそのトラブルに介入します。その行動が功を奏し、深刻な事態に陥る前に揉め事は解消されるのです。<br><br>　そして一連の出来事があなたの評価を高めるきっかけとなります。人間関係のいざこざにかかわるのは勇気のいる事で、ともすれば自分には無関係だからと見て見ぬふりをしてしまいがちでしょう。だからこそ、あなたの行動を職場の人たちは高く評価するのです。その出来事を通じ、あなたはいざというとき頼れる存在と認識されます。',
'　[%NAME_SELF%]さんは2020年に新しい仕事を任される事となりそうです。その仕事は今までやっていたものとはまったく性質の異なる内容で、最初は戸惑うでしょう。自分にできるだろうかと不安を覚え、くじけそうになるかもしれません。しかし同時に新たな世界に足を踏み入れる事への期待感も湧きあがってくるはずです。その前向きな気持ちが仕事にいい影響を与え、周囲を驚かせる程の結果を残すでしょう。<br><br>　そしてそれが職場での評価を高める要因となります。あなたが難しい仕事に携わっている事は周囲も認識しているため、なおさら高評価につながるのです。同僚はあなたに対してひそかにあこがれの感情を抱き、上司もその仕事を任せて本当によかったと思うでしょう。',
'　2020年に[%NAME_SELF%]さんは職場で周りを引っ張っていく立場に身を置く事となるでしょう。きっかけはある人物が一身上の都合で休職を余儀なくされる事。その人は職場に欠かせない有能な人材で、代わりを務められる者はそう多くありません。そして数少ない代役を担う資格を持っているのがあなたなのです。<br><br>　突然責任ある立場を任されて焦るでしょうが、それを飛躍するチャンスと考えたあなたは期待に応えるべく全力で仕事に取り組みます。持ち前の才能を発揮して見事代役を務めあげ、周囲をあっと驚かせるでしょう。とりわけ上司はあなたの仕事ぶりに感心し、今度は代役ではなくちゃんとした形でリーダーとしての役割を任せたいと考えるようになります。',
'　[%NAME_SELF%]さんは2020年、職場で同僚のミスを発見するでしょう。わざと失敗したわけではないものの、油断や慢心が原因である事は疑いようがありません。あなたはそのとき、自分がどうすべきか少し迷います。具体的にはそのミスを職場に報告するか、それとも黙って見て見ぬふりをするかという選択です。悩んだ結果、あなたは職場には報告せず、その失敗を挽回するため同僚に力を貸す道を選びます。<br><br>　その選択があなたの評価を一気に高める事となるのです。同僚はあなたが自分を気づかってくれている事を実感し、涙が出る程感謝するでしょう。そして恩返しをしなければ気が済まないと考えたその同僚は、あなたに関するいいうわさを職場に流してくれます。',
'　[%NAME_SELF%]さんは2020年、目上の人から難しい業務を任されるでしょう。その業務は誰にでもできるものではなく、だからこそあなたに白羽の矢が立ったと言えます。うまくいかなければ期待を裏切る事となるため引き受けるか否か少し悩みますが、最終的にこれはチャンスと考え思い切って引き受けるでしょう。その選択が功を奏し、あなたは自分でも驚く程の成果をあげます。<br><br>　それによって周囲のあなたに対する評価は一気に高まるでしょう。仕事を任せた人はもちろん、それ以外の人もあなたを職場に欠かせない存在と認識するようになります。直接賞賛される機会もしばしばあるかもしれません。そのときあなたは恥ずかしさと誇らしさが同時に押し寄せてくるでしょう。',
'　[%NAME_SELF%]さんは2020年に職場で一目を置かれる存在となるでしょう。一気に注目の的となり、少し恥ずかしいと感じる事もあるかもしれません。しかし尊敬や賞賛のまなざしを送られている事が明白なので、嫌な気はしないはず。何より高い評価を得られたのは自分が思い切って行動をした結果なので、正しい選択をした安心感があなたを包み込みます。<br><br>　あなたが取ったその行動とは、困っている上司を助けた事です。非常に厳しい立場に置かれた上司をあなたはさりげなくサポートしてあげます。そのとき見返りを求めなかった事が一層の高評価につながるでしょう。助けられた上司は大いに感謝するとともに、あなたがいかに有能であるかを周囲に知らしめるのです。',
'　2020年、[%NAME_SELF%]さんの職場はちょっとした悲しみに包まれる事となるでしょう。深刻な状況というわけではありませんが、多くの人が意気消沈して仕事への熱意を少なからず失ってしまいます。頑張ろうと思っても身が入らず、それが業績に悪影響を及ぼすのは想像に難くありません。そんなとき、あなたは職場で高評価を得る事となるでしょう。<br><br>　その評価を得られるのは、落ち込む職場を盛りあげようと必死で奔走するためです。あなた自身も悲しんでいないわけではないものの、そんなときだからこそ自分が何とかしなければと考えるでしょう。そんなあなたを見て周りの人たちは元気をもらい、落ち込んでいるばかりではダメと一念発起して職場は活気を取り戻すのです。',
'　[%NAME_SELF%]さんは2020年、仕事で軽くしくじってしまいます。しかし悲観する必要はありません。確かに失敗は失敗ですが、それがあなたの評価を高める要因となるのです。あなたは失敗をそのままにしたり、ましてや隠したりするような人ではないでしょう。むしろ現実を真摯に受け止め、反省して次に生かそうとするはず。実際そのときのあなたは失敗をうやむやにせず挽回するため精一杯努力するのです。<br><br>　その努力を職場の人たちはしっかり見ていて、あなたに高い評価を与えるでしょう。自分も見習わなければいけないという人も現れるはず。そもそも失敗したのはわざとではなく、なおかつそれ程重大な問題ではないためそれ自体が評価に悪影響を及ぼす事はありません。',
'　2020年、[%NAME_SELF%]さんの職場環境が大きく様変わりする事となりそうです。職場が新たな事業を手掛ける事となり、それによって人事異動が行われます。あなたも働く場所が変わり、新たに覚えなければならない事がいくつかあるでしょう。しかし適応力に秀でたあなたはすぐ仕事に慣れ、戸惑う周囲をよそに成果をあげていきます。そしてそれによってあなたの評価は一気に高まるのです。<br><br>　仕事のこつを教わりたいと思う者も現れ、先輩や上司もあなたを頼るようになるでしょう。あなたの周りにはいつの間にか人だかりができ、職場の中心人物と呼んでも差し支えない状況に至ります。脚光を浴びている事にあなたは喜びを感じ、仕事へのやる気がますます高まるはずです。',
		),
		array( "nu20_015_5", 
'　同僚との交流が2020年、[%NAME_SELF%]さんを出世へと導いてくれるでしょう。円滑に仕事を進めるためには周りの人たちと力を合わせるのが一番で、積極的に協力し合えばその分成功を収めやすくなります。一人で黙々と仕事をするより同僚と一緒に仕事をした方がより難しい業務をこなしやすく、一つの成功が出世への第一歩となるでしょう。<br><br>　昇進を果たすのはあなただけではなさそうです。一緒に仕事をした同僚も出世をする事となり、それによって同じ喜びを分かち合う事ができるでしょう。昇進の度合いには多少の差がありますが、あなたは他の同僚よりもいい役職に就く可能性が高いのです。それはひとえにあなたに才能があり、それを職場が認めてくれるおかげでしょう。',
'　[%NAME_SELF%]さんを尊敬する後輩が2020年、出世へと導く存在となるでしょう。あるときあなたは上司から、その後輩の教育係のような役目を任されます。あなたの持つ知識や経験を後輩にたたき込んでほしいと頼まれるのです。他人を指導するのは楽ではありませんが、あなたはそれ程不安は覚えないはず。むしろ自分が培ったものが役立つ瞬間が訪れた事に喜びとやりがいを感じるのではないでしょうか。<br><br>　そして熱心な指導によって後輩はみるみる成長を遂げていきます。あなたにあこがれるからこそ飲み込みが早いのでしょう。その後輩はそれから仕事で次々と成功を収めますが、ひとえにあなたの教育のおかげであり、それによって出世にもいい影響を与える事となるのです。',
'　[%NAME_SELF%]さんは2020年に職場での存在感を強め、それが出世を果たす要因となるでしょう。有能で職場に貢献する者が高く評価されるのは当然で、昇進しない方が逆に不自然と言えます。同僚もあなたは一刻も早く出世すべきと考え、中にはそれを口にする者も現れるでしょう。人望が厚い事も出世するための必須条件であり、その条件を満たしたあなたは順調に地位を向上させていくのです。<br><br>　出世の話が現実味を帯びてくるとより注目される機会が増えていきますが、そのおかげであなたは襟を正して仕事に全力で取り組む事ができるでしょう。出世のためではなく純粋に職場の役に立ちたいと考えられるようになり、その無欲さも出世にいい影響を与える事となります。',
'　職場で才能を認めてもらえる事が2020年に[%NAME_SELF%]さんを出世へと導いてくれるでしょう。あるとき、あなたは上司の誘いで企画会議のような場に参加する事となります。そしてそこで思い切って以前から温めていた画期的な企画を提案し、見事採用されるのです。その後企画は予想以上の成果をあげ、発案者であるあなたは上司を初めとした多くの者から賞賛されるでしょう。<br><br>　それまであなたを低く評価していた人たちも考えをあらためます。その中には職場の重役も含まれており、あなたをあなどっていた負い目も相まって昇進させるべきと声をあげるでしょう。その意見に反対する者はおらず、ほとんど満場一致のような形であなたの出世はほぼ確定するのです。',
'　周囲の期待とそれに応える熱意が2020年の[%NAME_SELF%]さんを出世へと導く大きな要因となるでしょう。あなたは大きな仕事をやり遂げた事で周りの人たちが自分に好意的なまなざしを向けてくれているのをひしひしと感じます。それと同時に頼りにされている事も実感するでしょう。あなたは頼られるとそれに応えようと全力を尽くすタイプなので、その状況が出世を果たすきっかけとなるのです。<br><br>　職場で難しい業務や面倒な業務をどんどん手掛けていけば、上司はあなたをより一層高く評価するようになるでしょう。そして低い立場に置いておくのは職場にとっても損失と考えるのです。職場の利益のためにもあなたを出世させるべきという声は日に日に大きくなるでしょう。',
'　2020年に[%NAME_SELF%]さんを出世へと導くのは先輩、もしくは上司の可能性が高いでしょう。その人物は職場で相応の地位を確立しており、周りが一目を置く存在です。その人に気に入られたら出世は間違いなしとまで陰ながら言われているかもしれません。取り入ろうとする者も大勢いますが、あなたはそういった行動があまり得意ではないはず。逆にその人を前にすると萎縮してしまうのではないでしょうか。<br><br>　そんな態度がかえって新鮮に映ったようです。自分にお世辞を言ったりおべっかをつかったりしないあなたに好感を抱き、その上で才能を認めて自分の右腕として働いてほしいと考えます。そしてあなたを昇進させるため、ひそかに力添えをしてくれるのです。',
'　2020年、[%NAME_SELF%]さんを出世に導いてくれるのは仲のいい同僚でしょう。もっとも、出世するのはあくまでもあなたの実力であり、その同僚が直接昇進のために何らかの行動を起こしてくれるわけではありません。そもそも自分があなたを出世に導くという自覚すらその同僚にはないでしょう。<br><br>　出世へと導かれるのは、あなたがその同僚のおかげで楽しく仕事を進められるからです。何事も楽しんで前向きに行う事はいい結果につながりやすく、仕事においても例外ではないでしょう。あなたは職場に足を運ぶのが楽しくなって、自分から積極的に難しい業務も引き受けていきます。そういった日々の積み重ねが認められ、あなたは最終的に出世を果たす事となるのです。',
'　[%NAME_SELF%]さんの事をよく知る上司が2020年、出世へと導く存在となるでしょう。かねてよりその上司はあなたに目を掛けていて、仕事で成功を収める度に感心していました。また、あなたがひそかに努力をして自分を磨いている事も把握しており、その努力を必要以上にひけらかさない事も好印象につながっていたのでしょう。<br><br>　ひたむきに職場のため頑張るあなたを低い地位に甘んじさせておくのはもったいないと考えたその上司は、昇進させるべくさまざまな方面から援護するのです。直接人事に介入する立場ではないのですぐに昇進が果たされるわけではありませんが、ゆくゆくはその上司の助けが実を結ぶでしょう。そのときあなたは上司に感謝する事となります。',
'　2020年に[%NAME_SELF%]さんを出世に導くのは同じ職場の異性である可能性が高そうです。気付いていないでしょうが、その異性はあなたに少なからず好意を抱いています。さりげなく視界に入ったり、用もないのに話し掛けたりしているでしょう。立場としてはその異性の方が上で、直接の上司ではないものの目上の人物である事は確かなはずです。<br><br>　その異性はあなたに好かれるためではなく、好きなあなたに仕事で成功を収めてほしいと強く願って出世への道を開くでしょう。あまり露骨にひいきするとかえってあなたの職場での立場が悪くなる恐れがあるので、さりげなく助けてくれます。他の人からその異性があなたの力になっている事を聞かされる事があるかもしれません。',
		),
		array( "nu20_015_6", 
'　[%NAME_SELF%]さんは2020年に上司から助けを求められるでしょう。その上司はあなたの才能を見込み、立場の差を越えて頼る決意を固めたのです。幸いそのときのあなたは時間的にも精神的にも余裕があるため、迷わず力を貸すでしょう。そしてあなたの手助けのおかげで上司は窮地を脱します。無事期待に応える事ができてあなたはほっと一安心するのではないでしょうか。<br><br>　上司はあなたにとても感謝しますが、単にありがとうと言われるだけではありません。感謝の証としてボーナスが支給され、あなたはまとまったお金を手にする事ができます。また、上司とのつながりができた事はその後の仕事人生にいい影響を与え、昇進や昇給を果たすまでの道のりが短くなるでしょう。',
'　2020年の[%NAME_SELF%]さんは仕事で大きな成功を収めたいという熱意が態度にも表れるでしょう。そのおかげで職場の人たち、特に上司はあなたのやる気に好印象を抱き、大きな仕事を任せる事が多くなります。ときには職場の命運を左右するような業務を引き受けてほしいと頼まれる事もありますが、あなたはそれを快く引き受けるでしょう。<br><br>　熱心に仕事を進めるあなたに周りは感嘆すると同時に、支えてあげたいと考えるようになるはず。あなたが助けを求める前に何人かの同僚が手を差し伸べてくれて、仕事の効率が大幅に向上します。最終的に引き受けた業務は見事成功を収め、それによってあなたは多額の成功報酬と周囲からの高い評価や信頼を得る事となるでしょう。',
'　[%NAME_SELF%]さんは2020年に職場で同僚と力を合わせて大きな業務を成功させるでしょう。一人では成し遂げられないような業務で、成功によって得られる利益もその分多くなります。何より仲間と協力して成功させたという達成感があなたに大きな喜びを与えてくれるでしょう。その出来事によって同僚との結束は一気に強まり、仕事を離れても接する機会が増えるでしょう。<br><br>　あなたにとって人間関係は一番の財産で、それを得られた事が最も価値があると言えます。とはいえ、あなたが手にするものは友情や絆といった目に見えないものだけではありません。成功報酬として相応の収入も手に入れられます。そのおかげで2020年にあなたが金銭的に困窮する事はないでしょう。',
'　[%NAME_SELF%]さんは2020年、それまで経験した事のない大きな業務を任されるでしょう。その業務は職場の外の人間と協力して行うものですが、あなたに白羽の矢が立ったのはその外部の人間と知り合いだったためです。断りたくても理由がないため、あなたはしぶしぶ引き受ける事となります。しかし、その選択があなたに2020年で一番の成功をもたらしてくれるでしょう。<br><br>　一緒に仕事をするのが知り合いであるおかげで必要以上に遠慮したり気をつかったりする事がなく、自分の実力を最大限発揮できるのです。この成功によってあなたにはボーナスが支給されますが、難しい仕事を見事達成して自信を持てるようになる事がお金を得る事以上の収穫と言えるでしょう。',
'　2020年内に[%NAME_SELF%]さんが仕事で収める最も大きな成功は、職場に多大な利益をもたらす事でしょう。あなたが口にした何気ない一言が、職場の業績を一気に高める起爆剤となるのです。ある意味偶然の産物ですが、単なるまぐれではなくそれまで培った経験が生かされたと考えられます。<br><br>　職場に貢献すれば当然、相応の対価を得られるでしょう。臨時ボーナスとしてまとまったお金が支給され、経済的にゆとりが生まれます。お金に不自由しなくなれば心にも余裕ができ、その後しばらくは落ち着いて周りを見わたせるようになるはず。それまで見えなかったものが見えてきて、新たに見つかるものの中にはさらなる成功への足掛かりも存在しているでしょう。',
'　上司の手伝いをして期待以上のはたらきをする事が2020年内で収める一番の成功でしょう。2020年の[%NAME_SELF%]さんは人のサポートに回る機会が何かと増えるのですが、回数を重ねるにつれてどうすれば効率的に相手を支える事ができるのか学んでいきます。無駄な行動が減って相手が望む事を的確に行えば、当然理想的な結果を出しやすくなるでしょう。<br><br>　あなたが手伝う上司では一人ではありません。評判が評判を呼んで何人もの上司があなたに頼ってくるのです。ときには大きい仕事の補佐を任される事もあり、そこでうまく立ち回れば単に感謝されるだけでなく、金銭的な利益を得る事も可能。ボーナスとして破格のお金が舞い込んできて、あなたはきっと驚くでしょう。',
'　[%NAME_SELF%]さんが仕事で収める2020年最大の成功は、目上の人と親しい関係を築く事でしょう。相手の方から近づいてきて、私生活でも接する事となるのです。立場が違うのであなたは最初のうちは少し遠慮をしてしまうかもしれません。しかし、接する頻度が高まるにつれてその人と自分は思いのほか馬が合うと分かり、なおかつ共通の趣味を持っている事が判明します。趣味を通じて交流を深め、打ち解け合うまでに時間は掛からないでしょう。<br><br>　目上の人と懇意な間柄となれば、おのずと仕事面でも利益を得やすくなります。割のいい業務を振ってもらったり、職場環境をあなたの望むままに変えてもらえたりするでしょう。収入面でも給料やボーナスの増加が期待できます。',
'　2020年、[%NAME_SELF%]さんは他の人が途中で投げ出した業務を引き継いで大きな成功を収めるでしょう。途中でくじける人がいるぐらいなので、その業務は簡単なものではありません。あなたも一時的に自分には無理かもしれないと考えるでしょう。しかし実力を最大限発揮すればやり遂げる事は可能で、実際あなたは全力でその業務に挑んでいい結果を出すのです。<br><br>　難しい業務を成功へと導いたあなたを周囲はほめたたえるでしょう。上司もあなたの頑張りを認め、評価を高めるはず。また、成功報酬として臨時ボーナスが支給される可能性が高く、その額はかなりのものとなりそうです。しかしあなたはお金を得られた事以上に、努力が認められた事に喜びを感じるでしょう。',
'　2020年の[%NAME_SELF%]さんは地道に与えられた仕事をこなし、順調に成功を積み重ねていきます。実績を積む事で職場での信頼感は高まっていき、やがて大きな業務を任される事となるでしょう。その業務でいい結果を残す事が、2020年に収める一番の成功です。周りの人たちはあなたに大きな期待を寄せますが、その期待に応えるはたらきを見せるでしょう。<br><br>　その成功によって得られるものはいくつもありますが、あなたにとって最も価値があるのは自分の歩んできた道が間違っていなかったと確信できる事です。それまでは努力に見合った評価が得られていないと感じて少なからず不安を覚えているかもしれませんが、その大きな成功のおかげで悩みは一気に解消されます。',
		),
		array( "nu20_015_7", 
'　[%NAME_SELF%]さんが2020年こそは仕事で大きな結果を出したいと大志を抱くなら、心に余裕を持って自分のペースを崩さない事が最も大切です。自分らしさを失わず、持ち味を最大限に生かす事が成功を収める秘訣と言い換えてもいいでしょう。そのためには無理をしないで自然体で仕事に臨むのが一番です。早く結果を出したいからと焦ると先走った行動を取ってしまい、思わぬ失敗をしたりチャンスをみすみす逃したりする危険があるでしょう。<br><br>　基本的に2020年のあなたは受け身の姿勢を貫いても問題ありません。仕事運命が低迷していれば手を伸ばさなければチャンスをつかめませんが、一年を通じて運命に恵まれているので待っているだけで好機はおのずと訪れるのです。',
'　[%NAME_SELF%]さんが2020年に仕事で大きな結果を出すためには、職場で心を開いて人と接する事が大切です。仕事を円滑に進めるためには良好な人間関係を築く事が必要不可欠ですが、相手の信頼を勝ち取るためにはまず自分が心を開く必要があるでしょう。ありのままの自分をさらけ出せば好印象を抱かれやすく周囲との絆はどんどん強まっていきます。逆に心を閉ざしたり建前だけで接したりすると信頼を得るのは難しくなってしまうのです。<br><br>　同僚といい関係性を築ければ成功は約束されたようなものと考えていいでしょう。そもそもあなたは仕事で大成する才能を持っているので、ちょっとしたきっかけさえあれば十分。そしてそのきっかけとなるのが、周りとのつながりです。',
'　2020年に[%NAME_SELF%]さんが仕事で大成功を収めるためには目立つのを恐れない事が肝心です。結果を出すと職場で注目されやすくなりますが、それを恥ずかしいとは思わないようにしましょう。羞恥心が前面に出ると行動が消極的になり、成功への道を歩みにくくなります。場合によってはチャンスを逃してしまう事もあるでしょう。<br><br>　むしろ周囲の視線を一身に集められる事を誇らしいととらえてください。あなたに向けられるまなざしは尊敬や羨望といったポジティブなもので、ねたみやうらみを買う事はありません。どうしても周りの目が気になる場合はその事について考えないようにするのも効果的。あなたの人生はあなたのものなので、周りがどう思っても関係ないのです。',
'　2020年に[%NAME_SELF%]さんが出世や昇給につながる成功を手にするためには、他人と違う自分自身を心から好きになる事が大切です。あなたはとても個性的な人で、他の人にはない魅力を秘めています。そしてあなたの代わりを務められる者は存在しないのです。代役がいないという事は職場で必要不可欠である事を意味しており、それはすなわち個性を生かす事が大きな結果を出す鍵と言えます。<br><br>　周りと足並みを揃える事をよしとする者があなたの個性に難色を示す事もあるかもしれませんが、批判的な意見に耳を貸す必要はありません。逆にあなたの才能をきちんと理解してくれる人もいるので、自分を認めて積極的にそういった人たちと距離を縮めるようにしましょう。',
'　2020年こそ仕事で大きな結果を出したいと願うなら、恐れずに前に進んでいく事が大切です。悩んでいる時間があれば行動した方がいい結果につながりやすいと覚えておいてください。[%NAME_SELF%]さんの場合、考える前に動いても失敗する危険性はほとんどありません。行動しつつ少し道をそれたと感じたらその都度修正すれば、いずれは成功へとたどり着けるのです。<br><br>　また、何かと目立つ機会が多くなりそうですが、恥ずかしがったり遠慮したりはしないよう心掛けましょう。くじけそうなときは自分は間違っていないと言い聞かす事が肝心。心の中で思うだけでなく実際に間違っていないと口にした方が心に響きやすいはず。強い心を持って、成功の道を突き進んでください。',
'　2020年に[%NAME_SELF%]さんが仕事で大きな結果を出すためには、自分の利益だけを求め過ぎない事が大切です。悩みを抱えているときはどうしても視野が狭くなってしまいがちですが、あなたの持ち味は人を思いやる優しさ。その優しさを失ってしまう事は仕事で成功を収めるために好ましくないと覚えておきましょう。<br><br>　心にゆとりを持ち、常に周りを気づかっていればチャンスはおのずと訪れます。情けは人のためならずとは2020年のあなたのためにあるような言葉です。同僚や上司といった周りの人たちが成功を手にする事は、めぐりめぐってあなた自身の成功にもつながります。誰かを助けるときは見返りを求めず、純粋な善意で手を差し伸べる事も忘れないでください。',
'　常に前向きに仕事を楽しむ事が2020年の[%NAME_SELF%]さんが大きな結果を出す秘訣です。なかなか結果が伴わないときはさしものあなたもネガティブな気持ちが湧きあがってしまいやすいでしょうが、そんなときだからこそ意識的にポジティブでいられるよう心掛けましょう。悪い事ばかり考えると運命もよくない方向に引っ張られてしまい、成功から遠ざかってしまうのです。<br><br>　逆に楽しい事や幸せな事を考えていれば運命は好転し、いくつものチャンスがめぐってくるでしょう。2020年は少しぐらい楽観的でも問題ありません。心が折れそうになったら成功を収めたときの事を夢想し、自分をなぐさめてください。思い描いた夢はそう遠くない未来に現実のものとなるでしょう。',
'　[%NAME_SELF%]さんが2020年こそ仕事で大きな結果を出したいと願うなら、何より焦らない事が肝心です。既に成功を収めている人も最初からとてつもない結果を残したわけではありません。小さな成功を積み重ね、地道に努力を続けた先に大きなチャンスが待ち受けているのです。中には一発逆転のような形で人生を変える人もいますが、あなたはそういう運任せで世の中をわたっていくタイプではないでしょう。<br><br>　心配しなくてもやるべき事をやっていれば、2020年内に好機は訪れます。そしてそれをものにするためには、普段から一生懸命自分を磨く必要があるのです。ささいな仕事だからと軽く見るのではなく、何事も大成功への布石と考えてこつこつ精進していきましょう。',
'　2020年こそはと大志を抱くなら、感謝の気持ちを忘れない事が最も大切です。[%NAME_SELF%]さんにとって2020年は与えるよりも与えられる事が多い一年で、職場でも周りに助けられる機会が増えるでしょう。重要なのはそういった相手の善意を当たり前と受け取らない事。助けてもらって当然と考えると、その気持ちが立ち振る舞いに表れて傲慢な態度を取ってしまいがちです。<br><br>　大きな結果を出すために常に謙虚な姿勢を心掛けましょう。心の中で感謝するだけでなく、ときにはありがとうと口に出すのも効果的です。たとえ相手がそういった言葉を期待していなくても感謝されて嫌な気分になる人はおらず、逆にもっとあなたのために何かしてあげたいと考えるようになります。',
		),
		);
?>