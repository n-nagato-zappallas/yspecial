<?php
/**
 * menu_id : nx23_026
 * 村野弘味：一人用 仕事お金
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'nx23_026',
			'contents'			 => 'murano_rsa',
			'img_name'			 => 'rsa_murano',
			'teller_name'		 => '村野弘味',
			'isp_mid'			 => '53w025',
			'nif_menukey'		 => 'unsei_2023_022',
			'price'				 => '1000',
			'discount'			 => '900',
			'design_cd'			 => '10',
			'person'			 => '1',
			'category_name'		 => 'work',
			'release_date'		 => '20221201',
			'title'				 => '村野弘味の仕事鑑定◆2023年版【待遇/転機/昇給チャンス/得る成果】',
			'caption'			 => '2023年の仕事運・待遇や昇給チャンスがわかる村野弘味の仕事鑑定。あなたらしく満足できる「仕事」と「お金」を手に入れるためのお手伝いをします。2023年を大きく飛躍が叶う年にするために、ぜひご確認ください。',
            'base_1_title_self' => 'あなたの通変星',
            'base_2_title_self' => 'あなたの基本性格',
            'base_1_title_other' => 'あの人の通変星',
            'base_2_title_other' => 'あの人の基本性格',
            '1_min_title'  => '2023年、飛躍は叶う？　あなたの仕事運勢',
            '2_min_title'  => '2023年、あなたの仕事待遇・人間関係は好転する？',
            '3_min_title'  => 'あなたの仕事状況が大きく変わる転機',
            '4_min_title'  => '2023年内に、仕事において準備したほうが良いものは？',
            '5_min_title'  => '',
            '6_min_title'  => '2023年内に、あなたに訪れる「昇給のチャンス」',
            '7_min_title'  => '2023年内にあなたが仕事で得る成果',
            '8_min_title'  => '村野弘味があなたに贈る「仕事で成功するためのメッセージ」',
		);

// 小メニューロジック
$logic = 'a1';

// Next枠
$next = array( "nx23_025", "nx23_027" );

// 一部見せテキスト
$free = array(
		array( "nx23_026_1", 
'　2023年の[%NAME_SELF%]は、仕事運にあまり恵まれていないでしょう。働いていて何だか気分がすっきりしない事があったら、それは流れに問題があるせいと考えて構いません。',
'　[%NAME_SELF%]の仕事運は、2023年は絶好調と言っていいでしょう。仕事をする上で致命的な問題を引き起こす恐れはなく、たいていの事があなたにとっていい方向に作用します。',
'　2023年の[%NAME_SELF%]は、仕事の流れに恵まれているでしょう。穏やかな運気にあるため実感は伴いづらく、ともすれば低迷しているように感じられるかもしれませんが、それは誤解です。',
'　2023年、[%NAME_SELF%]の仕事運はおおむね良好です。運だけで何もかも成功させられるほど恵まれてはいませんが、逆に運があなたを妨げる心配もありません。この年のあなたにとって運気は敵',
'　[%NAME_SELF%]の仕事運は2023年、特に問題ないでしょう。流れとしては良好で、働きやすい環境に身を置く事が多くなりそうです。もっとも、それは運のおかげではなく、あなた自身の努力',
'　[%NAME_SELF%]の仕事運は2023年、若干低迷しているでしょう。恵まれないと感じる事があったら、それは流れに問題があるせいなのです。思い通りにいかない事もあるもの',
'　2023年、[%NAME_SELF%]は仕事運に恵まれています。働いているとき、自分の思い通りに物事が進むのを実感できるでしょう。前向きになれる事が流れにいい影響を与え、運気がより高まっていく',
'　2023年の[%NAME_SELF%]の仕事運は、やや低迷しているでしょう。致命的なトラブルを引き起こしてしまう事はありませんが、思うようにいかずストレスを感じる事はしばしばありそうです。',
'　2023年、[%NAME_SELF%]の仕事運は良好です。働いているとき、自分は恵まれていると感じる事が多いでしょう。好調を実感する事が仕事にいい影響を及ぼし、やる気が高まると同時に挑戦する心を',
		),
		array( "nx23_026_2", 
'　2023年、[%NAME_SELF%]の仕事を取り巻く対人運は少し低迷しているでしょう。人とかかわる事にストレスを感じたり、ときには周りを遠ざけたりする事もあるかもしれません。自分は恵まれていないと……',
'　2023年、[%NAME_SELF%]の職場での対人運は極めて良好でしょう。人間関係に満足する事はあっても、大きな不満を覚える事はまずありません。この年のあなたの周りには多くの人が集まり、職場で目立……',
'　2023年、[%NAME_SELF%]の仕事での対人運は良好です。人間関係に恵まれ、そのおかげで得られる利益や切り抜けられる危機もあるでしょう。いい流れに身を置いている事を実感するたびにあなたの心は……',
'　2023年、[%NAME_SELF%]の仕事での対人運に、これといった問題はないでしょう。特別恵まれているとは言えませんが、仕事をこなす上で不自由しない人脈は築けますし、抜き差しならないほどの……',
'　職場における2023年の[%NAME_SELF%]の対人運は、安定感があり、大きな問題はなさそうです。おおむね望み通りの人間関係を築ける可能性が高く、これといった不満はないでしょう。あなたの味方に……',
'　[%NAME_SELF%]の仕事に関する対人運は2023年、あまり恵まれているとは言えないようです。そもそも人と接する頻度が減少する傾向にあり、それをネガティブにとらえる恐れがあります。人恋しさが……',
'　2023年、[%NAME_SELF%]は職場での対人運が良好でしょう。人間関係に恵まれ、人とのかかわりが成功の鍵となる事もたびたびあります。接する人は多くなりますが、そのせいでトラブルを余計に抱え込……',
'　職場における[%NAME_SELF%]の対人運は2023年、低調気味です。深刻な対人トラブルを引き起こす心配はありませんが、人間関係に悩みを抱える機会はあるでしょう。それは、流れがあなたにとって悪い……',
'　2023年、[%NAME_SELF%]の職場での対人運は良好です。仕事を通じて多くの人と接する事となりますが、だからといって人間関係で悩む可能性が高まる心配はないでしょう。人脈の広さとトラブルの頻度……',
		),
		);


// 結果テキスト
$text = array(
		array( "nx23_026_1", 
'　2023年の[%NAME_SELF%]は、仕事運にあまり恵まれていないでしょう。働いていて何だか気分がすっきりしない事があったら、それは流れに問題があるせいと考えて構いません。言い換えれば、あなた自身に問題があるわけではない事を意味しています。<br><br>　この年に才能を生かせるのは、同じ作業を延々と繰り返しているときです。その業務は根気が必要となりますが、この年のあなたは忍耐力が高まっているためまさしく適材適所でしょう。他の人なら途中で面倒になって投げ出してしまうかもしれませんが、この年のあなたはくじけず最後までやり抜きます。',
'　[%NAME_SELF%]の仕事運は、2023年は絶好調と言っていいでしょう。仕事をする上で致命的な問題を引き起こす恐れはなく、たいていの事があなたにとっていい方向に作用します。失敗さえも最終的に得をするためのきっかけとなるでしょう。<br><br>　どのような仕事でも才能を生かしやすいのですが、とりわけ実力を発揮できるのは、行動力を必要とする業務を任されているときです。じっくり考えて決断するのではなく、とっさの判断力を要求される業務は、この年のあなたには打ってつけでしょう。流れが極めて良好だからこそ直感に従って行動しやすく、仕事にも生かせるのです。',
'　2023年の[%NAME_SELF%]は、仕事の流れに恵まれているでしょう。穏やかな運気にあるため実感は伴いづらく、ともすれば低迷しているように感じられるかもしれませんが、それは誤解です。仕事をする上で安定感があるのは、さまざまな状況で有利にはたらきます。<br><br>　才能を生かせるのは、一人ではなく、周りと力を合わせているときでしょう。チームワークを発揮して一つの業務に取り組んでいるとき、あなたは力を出し切れる居場所を見つけられるはずです。その際は補佐役に回る事が多いため一見地味ですが、実は非常に重要な立場を任されます。',
'　2023年、[%NAME_SELF%]の仕事運はおおむね良好です。運だけで何もかも成功させられるほど恵まれてはいませんが、逆に運があなたを妨げる心配もありません。この年のあなたにとって運気は敵でも味方でもない、中立の立場を貫くものなのです。<br><br>　その流れの中で、あなたは自分の培った知識や経験を活用するときに才能を発揮できます。頭をつかう仕事で力を出せる、と言った方が分かりやすいでしょうか。体力的な負担が小さい一方で精神的に疲弊しやすく、楽な仕事ではありません。しかし、自分にしかできないと分かるからこそやる気が高まるはずです。',
'　[%NAME_SELF%]の仕事運は2023年、特に問題ないでしょう。流れとしては良好で、働きやすい環境に身を置く事が多くなりそうです。もっとも、それは運のおかげではなく、あなた自身の努力のたまものでしょう。<br><br>　あなたがこの年に才能を生かせるのは、責任を伴う仕事を任せられたときです。プレッシャーがあなたの力になると言ってもいいでしょう。失敗したら自分だけでなく職場全体にも迷惑をかけかねないといった重要な場面で、あなたは覚醒するのです。その際に発揮する力は周りはおろか、あなた自身も驚くほどでしょう。',
'　[%NAME_SELF%]の仕事運は2023年、若干低迷しているでしょう。恵まれないと感じる事があったら、それは流れに問題があるせいなのです。思い通りにいかない事もあるものの、挽回できないほど致命的な運気ではないので安心してください。<br><br>　この年に才能を発揮するためには、なるべく一人で業務を手掛けた方がいいでしょう。集団行動より個人行動で力を出せるのがこの年のあなたの特徴なのです。全責任を自分が負う事となるため重圧はそれなりにありますが、誰のせいにもできない事がいい方向に作用し、周囲を意識せず才能を出し切れるでしょう。',
'　2023年、[%NAME_SELF%]は仕事運に恵まれています。働いているとき、自分の思い通りに物事が進むのを実感できるでしょう。前向きになれる事が流れにいい影響を与え、運気がより高まっていくのもこの年のあなたの特徴です。<br><br>　特に才能を生かせるのは、それまでとは異なる業務を手掛けたときでしょう。未経験の事に携わるときに実力を最大限発揮できるのです。最初は慣れずに手間取ったり不安を覚えたりする事もあるでしょうが、この年のあなたはすぐに順応できます。そして新鮮さが働く意欲の高まりにつながり、才能を研ぎ澄ませてくれるのです。',
'　2023年の[%NAME_SELF%]の仕事運は、やや低迷しているでしょう。致命的なトラブルを引き起こしてしまう事はありませんが、思うようにいかずストレスを感じる事はしばしばありそうです。精神的に疲れやすく、能率にも影響するでしょう。<br><br>　才能を生かせるのは、サポート役に回ったときです。自分のために働いているときより、周りの助けをしているときの方が、この年のあなたは持ち味を発揮しやすいでしょう。立場としてはそれほど目立たないので自覚しづらいものの、あなたに助けてもらえたおかげで窮地を脱する人は少なくありません。',
'　2023年、[%NAME_SELF%]の仕事運は良好です。働いているとき、自分は恵まれていると感じる事が多いでしょう。好調を実感する事が仕事にいい影響を及ぼし、やる気が高まると同時に挑戦する心を強めるという効果をもたらします。<br><br>　あなたが才能をより発揮できるのは、やりたい仕事に取り組んでいるときです。好きこそものの上手なれを、地で行くでしょう。その仕事は必ずしも楽なものとは限らず、場合によっては難しい業務を手掛ける事もあります。しかし、やる気がある限り、あなたは力を最大限出して結果につなげるのです。',
		),
		array( "nx23_026_2", 
'　2023年、[%NAME_SELF%]の仕事を取り巻く対人運は少し低迷しているでしょう。人とかかわる事にストレスを感じたり、ときには周りを遠ざけたりする事もあるかもしれません。自分は恵まれていないと思い込み、相対的に周りをうらやましく思いがちなのです。<br><br>　対人トラブルとして注意すべきは、卑屈になり過ぎて周りに悪感情を与えてしまう事でしょう。ネガティブな言葉ばかり口にした結果、職場全体の空気が悪くなる恐れがあります。対処法としては、仕事の愚痴は職場を離れたところでこぼし、働いているときは極力前向きでいる事です。',
'　2023年、[%NAME_SELF%]の職場での対人運は極めて良好でしょう。人間関係に満足する事はあっても、大きな不満を覚える事はまずありません。この年のあなたの周りには多くの人が集まり、職場で目立つ存在となる事も夢ではないでしょう。<br><br>　ただ、あなたが人気を博するのを快く思わない人が現れる可能性もあります。目立つ以上、味方だけでなく敵をつくってしまうのはやむを得ませんが、トラブルを防ぐためには自分を助けてくれる人と行動をともにする事が肝心です。一人にならなければ、あなたが直接悪意にさらされる心配はないでしょう。',
'　2023年、[%NAME_SELF%]の仕事での対人運は良好です。人間関係に恵まれ、そのおかげで得られる利益や切り抜けられる危機もあるでしょう。いい流れに身を置いている事を実感するたびにあなたの心は満たされ、労働意欲にもつながっていきます。<br><br>　注意したいのは、この年のあなたが人の頼みを断れない傾向にある事。そのせいで、悪意ある人に利用されてしまう恐れがあります。頼み事をされたとき、自分を犠牲にしてまで引き受けると後で悔やむかもしれません。対処するには、無理なものは無理と素直に口にする勇気を持つ事が肝心です。',
'　2023年、[%NAME_SELF%]の仕事での対人運に、これといった問題はないでしょう。特別恵まれているとは言えませんが、仕事をこなす上で不自由しない人脈は築けますし、抜き差しならないほどのトラブルに見舞われる恐れはありません。<br><br>　対人面で起こりやすいのは、自分にできる事を他人もできて当然と思い込んでしまう事による問題です。あなたにとっては簡単な事でも、周りも同じとは限りません。その認識のずれによって周囲に過剰な負担を与え、ミスを誘発する恐れがあります。相手の能力をきちんと把握する事が、問題を避ける方法です。',
'　職場における2023年の[%NAME_SELF%]の対人運は、安定感があり、大きな問題はなさそうです。おおむね望み通りの人間関係を築ける可能性が高く、これといった不満はないでしょう。あなたの味方になってくれる人も少なからず現れます。<br><br>　注意したいのは、この年のあなたが少し自信過剰に陥りやすい点でしょうか。自分の功績をひけらかすようなそぶりを無意識に見せて、人知れず反感を買う事があるかもしれません。調子がいいからといって自慢そうな態度は取らず、むしろ波に乗っているからこそ周囲を気づかう余裕を持つ事が、トラブルの予防策となります。',
'　[%NAME_SELF%]の仕事に関する対人運は2023年、あまり恵まれているとは言えないようです。そもそも人と接する頻度が減少する傾向にあり、それをネガティブにとらえる恐れがあります。人恋しさが不安を募らせ、流れを悪化させてしまいやすいでしょう。<br><br>　人間関係においては、周りが自分を悪く思っているのではないかと思ってしまう事がトラブルにつながります。自分に関するよくないうわさが職場で飛び交っているのではないかと考え、心を閉ざしてしまいます。それは単なる思い過ごしなので、対処するには自分に自信を持つ事が大切です。',
'　2023年、[%NAME_SELF%]は職場での対人運が良好でしょう。人間関係に恵まれ、人とのかかわりが成功の鍵となる事もたびたびあります。接する人は多くなりますが、そのせいでトラブルを余計に抱え込むといった状況には陥りません。<br><br>　ただ、好調さが災いして独断専行な振る舞いをしてしまい、周囲の人との間に見えない溝ができる恐れはあります。なまじ自分一人で何でもできてしまうため、周りを顧みない行動を取りがちなのでしょう。対処法として有効なのは謙虚になる事で、ある程度周りと足並みをそろえた方が円滑な人間関係を築きやすくなります。',
'　職場における[%NAME_SELF%]の対人運は2023年、低調気味です。深刻な対人トラブルを引き起こす心配はありませんが、人間関係に悩みを抱える機会はあるでしょう。それは、流れがあなたにとって悪い方向に進んでいるせいなのです。<br><br>　特に問題が生じやすいのは、あなたが仲間の役に立とうと張り切ったときでしょう。よかれと思って差し伸べた手が、かえって相手の業務の妨げとなってしまうのです。そのような事態を避けるためには、いきなり深く介入しない事が肝心でしょう。相手から助けを求められるまで見守る事に徹すれば、行動が裏目に出る事はありません。',
'　2023年、[%NAME_SELF%]の職場での対人運は良好です。仕事を通じて多くの人と接する事となりますが、だからといって人間関係で悩む可能性が高まる心配はないでしょう。人脈の広さとトラブルの頻度は比例しないのが、この年のあなたの特徴です。<br><br>　ただ、好調だからこそ、無意識に鼻にかけるような振る舞いをして相手を傷つけてしまう事があるかもしれません。特に言葉づかいには細心の注意を払った方がいいでしょう。もし傷つけてしまったときはなあなあで済まさず、すぐ謝罪する事が肝心です。素直に謝ればきっと許してもらえます。',
		),
		array( "nx23_026_3", 
'　2023年に[%NAME_SELF%]が職場で認められるのは、業務で一定の成果を出したときでしょう。それは小さな成功の積み重ねでも問題なく、むしろこつこつ積みあげる事が評価を好転させる要因となります。一度だけいい結果を出しても、それが実力なのか単に運がよかっただけなのかを判断するのは難しいでしょう。<br><br>　しかし実績を重ねれば、それがあなたの力によるものと誰もが認めるはずです。継続は力なりを実践するあなたを見習いたいと考える人さえ現れます。そのときあなたは職場でお手本と呼べる存在となり、立場の上下にかかわらず高評価を受けるでしょう。',
'　2023年に[%NAME_SELF%]が周囲からの評価を上昇させるのは、環境の変化にすぐさま適応したときです。慣れていない状況下で力を発揮するのは難しいのですが、だからこそ対応力の高さを披露するチャンスでもあります。この年のあなたはどのような環境でも自分の持ち味を生かせるため、新たな業務に慣れるまでに時間を要しません。<br><br>　周囲が手間取っていればいるほど、あなたの評価は一層高まります。あなたのように仕事を円滑にこなしたいと思う人も現れますが、簡単に真似する事はできないはず。それが高評価を得る要因となるでしょう。',
'　2023年の[%NAME_SELF%]が職場での評価を好転させるのは、周りにいる人がしてしまった失敗をさりげなく補ったときでしょう。あなたには直接関係のない事なので見て見ぬふりをしても問題ないのですが、そのときのあなたは失敗した人が苦しんでいる姿を見るのがつらく、無意識に手助けする事となります。<br><br>　その自然なサポートが、職場での評価を上昇させるのです。あなた自身が仕事で悩んでいる事を、周りの人たちは何となく察しているでしょう。それにもかかわらず他人を気づかう余裕を持てている事が、高評価を得られる要因になるようです。',
'　2023年に、[%NAME_SELF%]は職場の人たちに効率よく仕事をする秘訣を指南する事で、評価を好転させるでしょう。自分が得たものを独占せず、職場全体の利益を考えた行動を取るのです。その心の広さに好印象を抱かない人はいません。普通ならば自らが有利な立場に身を置くため、あえて敵に塩を送るような真似はしないでしょう。<br><br>　しかしこの年、あなたは仕事仲間も含めた全員が幸せになる道を選びます。あなたの行動は功を奏し、業績は一気に向上するでしょう。それは当然ながらあなたのおかげで、周囲はそれを認めると同時に高く評価するようになります。',
'　2023年、[%NAME_SELF%]が周囲からの評価を上昇させるのは、職場の危機を乗り切る手助けを買って出たときでしょう。そのとき、あなたの職場は重要な局面を迎えており、ある業務を成功させられるかどうかが命運を分ける状態です。その業務は簡単に成し遂げられるものではありませんし、うまくいかなかったときの危険が大き過ぎて誰もやりたがらないでしょう。<br><br>　しかし、あなたは思い切って職場のため、その業務を手掛ける決断を下します。その勇気ある行動が周囲の感動を呼び、それまであなたを意識していなかった人も高く評価するようになるでしょう。',
'　2023年は、画期的なアイデアを提案する事が、職場での評価を好転させるきっかけとなります。誰も思いつかないような事を、[%NAME_SELF%]は口にするのです。その行動には勇気が必要で、言うべきか否か少なからず迷うでしょう。しかし、自分の提案が職場の役に立つと確信し、思い切って意見を述べるのです。<br><br>　その選択は正しく、あなたは職場で誰からも一目を置かれる存在となるでしょう。かねてより好印象を抱いていた人は一層あなたを信頼し、逆にそれほどよく思っていなかった人もその出来事を機にポジティブな評価を与えるようになるのです。',
'　2023年、[%NAME_SELF%]の職場における周囲からの信頼はとても厚いでしょう。同僚や自分より立場が下の人だけでなく、高い地位に就いている人もあなたを全面的に信用し、頼りにするのです。そしてその評価はあなたが難しい業務を手掛けたとき、さらに好転していきます。<br><br>　誰にもできない事を積極的に行えば、尊敬されたりあこがれられたりするのは当然でしょう。結果はもちろん大切ですが、何より困難に立ち向かう姿勢があなたの評判を一段階押しあげてくれるのです。それまであなたを軽く見ていた人も、その出来事を経て評価をあらためざるを得なくなります。',
'　2023年の[%NAME_SELF%]が職場での評価をあげるのは、周囲のため献身的に尽くしたときでしょう。誰かの役に立ったら好印象を抱かれるのは当然ですが、この年のあなたは特に思いやりの姿勢を高く評価されやすいのです。また、職場の同僚や目上の人を助ける機会に恵まれる事も、いい方向に作用するでしょう。<br><br>　何より、あなたは助けた当人に感謝されます。そしてその人は、あなたが自分のために精一杯頑張ってくれた事を周りに伝えるはず。うわさがさらにうわさを呼び、直接面識のない相手もあなたの職場での振る舞いに、あこがれや尊敬の念を抱くでしょう。',
'　2023年、[%NAME_SELF%]は職場の空気を明るくする事で、評価を上昇させる可能性が高そうです。直接業務で何らかの結果を出すより、働きやすい環境づくりに貢献する方が評価につながりやすいでしょう。その際、あなたとしては特によく思われたいという意識がないため、評価があがっている事に気付かないかもしれません。<br><br>　あなたが明るい雰囲気をつくるのは、あくまでも自身のため。自分が快適に働ける場を築きあげる事が、周囲の環境改善にも影響を与えるのです。そして仕事仲間はあなたに感謝するとともに、評価を高めるでしょう。',
		),
		array( "nx23_026_4", 
'職場でいわれない批判にさらされたときが転職期です。つらさで心が壊れる前に職を変えるといいでしょう。',
'転職期は、自分より目立つ人が職場に現れたときでしょう。その人物の登場が、転職の合図となるようです。',
'転職期は、親しい仕事仲間が現職を離れたときです。その人の行動を間近で見て、よりいい環境を求める事となります。',
'やりがいのない仕事を任されたときが転職期となります。やる気を失う前に選択を迫られるでしょう。',
'誰かに従う立場となったときが転職期です。望み通りの仕事人生を歩むためには転職するのが手っ取り早いでしょう。',
'転職期は、協調性を求められる業務を任されたときに訪れます。望まぬ仕事を強いられる事が決め手となるでしょう。',
'仕事を退屈と感じたときが転職期。労働意欲が下がって向上心を失う前に、力を発揮できる環境を得た方がいいでしょう。',
'職場外の人と親しくなったときが2023年の転職期となります。その人たちは新たな仕事仲間となるでしょう。',
'興味の幅が広がる事が転職期となります。現職に物足りなさを感じ、退屈な日常を打開するため転職を果たすでしょう。',
		),
		array( "nx23_026_5", 
'　2023年は、職場でいわれない批判にさらされたときが、[%NAME_SELF%]の転職期となります。注意を怠って失敗をしたり、周りに迷惑をかけたりしたときに批判されるのは当然ですし、真摯に受け止めてしかるべきでしょう。しかし、あなたは悪くないにもかかわらず責められたり、仕事とは無関係な人間性等を否定されたりする理不尽に耐え続けるのは好ましくありません。<br><br>　我慢すればするほど仕事がつらくなり、場合によっては心が壊れてしまう恐れがあります。そうなる前に何らかの対処をしなければならず、そのためには転職が望ましい道なのです。',
'　自分より目立つ人が職場に現れたときが、2023年の[%NAME_SELF%]にとっての転職期となります。その人と張り合う事もできますが、ライバル心を芽生えさせる事が必ずしもいい方向に作用するとは限りません。ともすれば肝心の業務がおろそかになり、思わぬミスをする恐れもあります。<br><br>　そもそも、その人があなたの前に現れたのは、転職した方がいいという合図なのです。何の問題もなく快適に仕事を続けていたら、現職を離れるきっかけを得るのは難しいでしょう。新たな世界に飛び出し、さらなる飛躍を遂げるためにあなたをおびやかす存在が現れるのです。',
'　2023年、[%NAME_SELF%]の転職期は、親しい仕事仲間が現職を離れたときでしょう。つまりその人が転職を果たしたのをきっかけに、あなたも新たな職に就く事を好ましいと考えるのです。転職先をその人と同じにする必要はありませんが、一緒なら余計な不安や心細さを感じる事なく働きやすいでしょう。<br><br>　いずれにせよ、転職するのはより条件のいい環境を求めるからこそ。たとえ現職に大きな不満を抱えていなくても、仕事で大成するために別の道を模索するのは悪い事ではありません。あなたは身近な人が行動を起こすのを間近で見て、それを認識するでしょう。',
'　2023年は、職場で新たな業務を任されたときが、[%NAME_SELF%]の転職期となるでしょう。その業務がやりがいのあるものであれば転職を意識する必要はありません。しかし、あなたにとって新たに任された業務は、やりがいをまったく感じられないものなのです。楽な仕事ではあるため周囲はうらやましいと思うかもしれませんが、あなたは不本意極まりないでしょう。<br><br>　このままその業務に携わっていたら自分はどんどん衰えていくと確信するまで、さほど時間はかかりません。やる気が完全に失われて取り返しがつかなくなる前に、行動を起こす必要性に迫られるでしょう。',
'　2023年、[%NAME_SELF%]の転職期は、同僚に従う立場となったときに訪れるでしょう。この年のあなたは自分が先頭に立った方がいい結果を残しやすく、逆に誰かについていく形では本領発揮が困難となります。自分の持ち味を出せていない事へのストレスは少しずつ蓄積されていき、限界に達して職場に嫌気が差すでしょう。<br><br>　望み通りの仕事人生を歩むためには、現職に留まるより転職を果たした方が手っ取り早いようです。永遠に誰かに従い続けるわけではないため転職しなくてもいずれは環境を改善できますが、時間を無駄にするのは避けられないでしょう。',
'　2023年は、協調性が求められる業務を任されたときが、[%NAME_SELF%]の転職期となりそうです。その業務はこの年のあなたに合っているとは言えず、居心地の悪さを感じやすいでしょう。特別難しい業務ではないものの、労力以上のストレスを強いられるはずです。何より、望まぬ仕事を任された事が転職を考える決め手となります。<br><br>　自分を理解してくれる職場に在籍したいと考えるのは当然です。現職の環境を改善するのは努力次第で不可能ではありませんが、どうしても時間を要します。職そのものを変えた方がはるかに容易で、将来性もありそうです。',
'　2023年の[%NAME_SELF%]の場合、仕事を退屈と感じたときが転職期となるでしょう。誰にでもできるような業務ばかり任されると労働意欲が下がり、向上心が少しずつ失われてしまうかもしれません。そのときのあなたに重圧はなく、それでいて収入は問題なく得られるため、周囲にはうらやましく映るでしょう。<br><br>　しかし、ぬるま湯に浸かり続けるのはこの年のあなたの本意ではないはずです。そして自分の力を出し切れる環境を手にするためには転職するのが一番でしょう。楽な仕事を手放すのは勇気がいりますが、転職するには打ってつけのタイミングなのです。',
'　[%NAME_SELF%]にとって2023年の転職期は、職場外での人間関係が充実してきたときでしょう。仕事から離れたところで新たな人脈を築き、心地よさを感じたときが、転職に打ってつけの時期と言えます。そのときあなたは職場での関係性に不満とまではいかないものの、やや物足りなさを感じているでしょう。<br><br>　それが転職期となるのは、職場外で親しくなった人たちが新たな仕事仲間となる可能性が高いためです。私生活以外でもつながりを持てそうな予感は何となくはたらくでしょうし、転職を果たしたときにその予感は見事的中する形となります。',
'　2023年は、興味の幅が広がる事が、[%NAME_SELF%]の転職期となるでしょう。それまで気にも留めなかった物事への好奇心が強くなり、現職では物足りなさを感じてしまうのです。もっとも、今の職場に大きな不満があるわけではなく、むしろ働きやすいと感じているでしょう。そのため、転職期を迎えている事には気付きにくいかもしれません。<br><br>　とはいえ、退屈な日常を打開するには何かを変えなければいけない事は理解するでしょう。その何かというのが、この年のあなたにとっては仕事なのです。現状維持に甘んじるほど、この年のあなたは保守的ではありません。',
		),
		array( "nx23_026_6", 
'　2023年、同僚が途中で投げ出した業務を[%NAME_SELF%]が引き継ぎ、そのときいい結果を残す事が、出世や収入上昇のまたとないチャンスとなります。同僚が放棄してしまったのは、その業務が労力の割に見返りの少ないものだからです。地味な仕事と言ってもいいでしょう。<br><br>　失敗が許されない割に成功したときの評価につながらないとあらばやめたくなるのも仕方ないかもしれませんが、あなたはそれでも職場のため全力で取り組みます。泣き言を漏らさず最後までやり遂げる事ができれば、その熱心さが目上の人の心を揺さぶり昇進の決め手となるでしょう。',
'　職場の人員増加が、2023年の[%NAME_SELF%]にとって出世や収入上昇の好機となりそうです。新たに入ってくる人がいれば、当然とりまとめる存在が必要となります。その際、白羽の矢が立つのが他でもないあなたなのです。この年のあなたは人に慕われる傾向にあるため、まとめ役として適任と判断されるのでしょう。<br><br>　新たな業務が増え、おのずと負担も大きくなりますが、それが地位を高めるチャンスである事は明白です。断った場合は負担こそないものの、出世の道は閉ざされてしまいます。将来のためにどちらを選ぶべきかは言うまでもないでしょう。',
'　2023年の[%NAME_SELF%]にとって出世や昇給の好機は、職場内で対立が起きたときに訪れます。意見の相違によって二つの派閥が対立し、職場は険悪な雰囲気に包まれるでしょう。そのときあなたはどちらの派閥にも属さず、中立の立場を取る事となります。そして争いを止めるために全力を尽くすのです。<br><br>　無事対立を収める事ができれば、あなたの功績は誰からも認められるでしょう。争っていた当事者のみならず、一連の顛末を眺めていた目上の人たちもあなたの行動を高く評価するとともに、そのはたらきに相応しい地位や報酬を与えるべきと考えます。',
'　2023年、[%NAME_SELF%]は仕事で生かすための資格を取得する機会を得ます。そのためにはある程度の努力と時間が必要ですが、幸いこの年のあなたにはその猶予が与えられるでしょう。そして資格を手にする事が、出世や収入上昇のチャンスとなるのです。簡単に獲得できるものではないからこそ、持っている事は仕事を続ける上で有利にはたらきます。<br><br>　また、その資格がないとできない業務も存在するため、あなたは職場で重宝されるでしょう。万が一あなたが退職したら業績にも悪影響を及ぼしかねず、そのような事態を避けるため、高い地位と収入が与えられるのです。',
'　2023年の[%NAME_SELF%]に出世や収入上昇の好機が訪れるのは、職場に有能な人材が入ってきたときでしょう。その人物はあなたにとって強力なライバルとなり、切磋琢磨して上を目指す関係を築きます。負けたくないという思いがいい方向に作用し、仕事の能率を高めてくれるでしょう。また、ときにはそのライバルと力を合わせて難しい業務を成功へ導く事もあります。<br><br>　結果を出せば職場で認められ、出世の道が開けるはずです。先にライバルが高い地位を手にする事もありますが、そのとき向上心を失わなければ、あなたも同等の対価を得られるでしょう。',
'　意外かもしれませんが、2023年の[%NAME_SELF%]に出世や収入上昇の好機が訪れるのは、仕事で失敗してしまったときのようです。特に、失敗したときの立ち回り方が、チャンスをものにできるか否かを左右するでしょう。失敗を隠したり、他人になすりつけようとしたりしたら、昇進も昇給も期待できません。<br><br>　素直に過ちを告白すれば、それが信頼につながります。うまくいかない事は誰にでもあり、失敗そのものをとがめられる事はありません。この場合、自分にとって不利な事を打ち明ける事が、いい意味で出世に響くのです。',
'　2023年、[%NAME_SELF%]が出世や昇給を果たすのは職場で教える立場に回ったときでしょう。それまで培った知識や経験を生かし、あなたは指導者として腕を振るう機会を得ます。その時点で地位に大きな変化はありませんが、職場に貢献すれば相応の見返りを手にするのは当然です。<br><br>　あなたを低い地位に留めておくのは職場にとっても損失なため、思いのほか早く出世を果たせるでしょう。重要な肩書きを得るとそれに応じた責任も伴いますが、収入も比例して増えるので問題ありません。あなたはそのとき自分が認められている事を認識し、やる気を一層高めます。',
'　[%NAME_SELF%]は2023年、目上の人の役に立つ事で、出世や昇給を果たすでしょう。具体的には、ある程度の実権を握り、職場の人事に介入できる立場の人をあなたは助ける事となるのです。その人に気に入られる事ができれば、何らかの利益がもたらされるのは当然と言えるでしょう。<br><br>　とはいえ、あなたは見返りを求めてその人に貢献するわけではありません。そもそも、その人に力がある事を知るのは助けた後でしょう。つまり、下心なく純粋な善意で手を差し伸べる事となるのですが、その無欲さが相手に好印象を与えて見事チャンスをものにするのです。',
'　2023年に、[%NAME_SELF%]は職場で新たな業務に携わる事となるでしょう。その際、仲間と力を合わせて業績をあげるべく懸命に頑張り、その努力が認められてあなたは出世のチャンスをつかみます。いい結果を出せればすぐにでも昇進を果たせますし、たとえ結果が伴わなくてもその業務の適任者はあなた以外いないため、周囲からの期待を裏切る事はありません。<br><br>　そしてその期待に応えようとする姿勢が、昇進につながるのです。地位はあがらなくても相応の成果を見せている時点で、ボーナスとして臨時収入を得たり、昇給したりする事は可能でしょう。',
		),
		array( "nx23_026_7", 
'　2023年の[%NAME_SELF%]は、慣れている仕事で成功を収めやすいようです。行動が結果と直結していて、確実にうまくいくと分かっている方が、不安や恐怖心といった雑念に惑わされず業務に集中できるでしょう。この年のあなたは根気があるため、同じ事の繰り返しでも苦痛を感じる事はないはずです。<br><br>　逆に失敗しがちなのは、経験した事のない仕事でしょう。本来の力を出し切れば問題なくこなせる事でも、思いのほか手間取る恐れがあります。適応するまで多少時間がかかるのは仕方ないと割り切り、落ち着いて業務に臨む事が失敗を避ける秘訣です。',
'　2023年の[%NAME_SELF%]は、明確な正解のない仕事でいい結果を収めやすいでしょう。特に人とかかわる業務では高い目標を達成しやすいようです。人を満足させる方法にはっきりとした答えはなく、最善の選択はそのときの状況や相手によります。この年のあなたは、常に何が正しいのかを判断し、行動に移す事ができるのです。<br><br>　逆に、正解の存在する、事務的な仕事はうまくいかないかもしれません。やりがいを感じられないため、つい心ここにあらずといった状況に陥ってミスを招いてしまいます。そのような仕事を任されたときは気を引き締めましょう。',
'　2023年、[%NAME_SELF%]は仕事仲間と和気あいあいとした雰囲気で臨む仕事で成功しやすいようです。職場が一丸となって一つの目標に向かって進んでいくときに、力を発揮できます。分かりやすく言えば、快適な職場環境が成功を収める秘訣となるのです。<br><br>　失敗の危険が生じるのは、仲間と競い合う仕事でしょう。業務を進める上で周りと切磋琢磨する事が必ずしも悪いわけではないのですが、この年のあなたには不向きなのです。周りを気づかってばかりだと成功する事への後ろめたさを感じやすく、失敗を避けるためには自分を優先した方がいいでしょう。',
'　2023年の[%NAME_SELF%]は、頭脳労働で成功を収める可能性が高いでしょう。知識が結果を左右する業務であれば、高い目標を定めても問題なさそうです。最初は無理かもしれないと思うでしょうが、慣れるに従って能率があがっていきます。気付いたら成功は目の前だった、といった状況も珍しくありません。<br><br>　失敗しがちなのは、体力を要する仕事です。肉体的負担が大きくなればなるほどミスを生む危険性が高まり、思わぬところでつまずく恐れがあります。そのような業務に従事する際はこまめに休息を取り、負荷を和らげる工夫を試みた方がいいでしょう。',
'　2023年、[%NAME_SELF%]が仕事で成功を収められるのは、目立つ業務に携わったときです。職場のイメージを左右する仕事を任されたら、成功は目の前でしょう。職場内外で注目を浴びる事となり、プレッシャーも大きくなるものの、だからこそ油断せず最後までやり遂げられるはずです。<br><br>　一方で、目立たない業務を任されているときは失敗しやすいでしょう。その他大勢といった立場にあるとき、この年のあなたは労働意欲が高まらないようです。やる気のなさがミスを生む要因なので、たとえ地味な仕事でも将来につながると自分を鼓舞するようにしましょう。',
'　2023年の[%NAME_SELF%]は、自分にしかできない仕事で成功を収めやすいようです。他の誰も代わりを務められない重要な役割を任されたとき、あなたは全力で仕事に打ち込むでしょう。才能や個性を生かす場を与えてもらえた事に感謝し、それに報いるため懸命に励むのです。<br><br>　失敗する恐れがあるのは、逆にあなたでなくともこなせる仕事でしょう。別に自分がやらなくてもいいのではないかという思いに駆られ、ミスを連発してしまいます。失敗して評価を下げたらやりたい仕事を任されづらくなるため、今後のための踏み台と割り切ってしっかり励んだ方がいいでしょう。',
'　2023年の[%NAME_SELF%]は、経験が乏しい仕事の方がかえって成功しやすいでしょう。慣れていないからこそ油断をせず、全力を出し切って理想的な結果をつかみ取るのです。絶対に失敗できないというプレッシャーがいい方向に作用して、あなたの成功を後押しする可能性も高いでしょう。<br><br>　逆に、慣れている仕事では思わぬ失敗をしてしまうかもしれません。実力不足が原因ではないため、なおさら悔しいはず。対処するには、簡単だからといって慢心せず、注意を払う事が肝心です。初心に返り、新鮮な気持ちで業務に臨む事で失敗する危険性を減らせるでしょう。',
'　2023年の[%NAME_SELF%]は、余裕のある仕事で成功する可能性が高いでしょう。時間的にも精神的にもゆとりがあり、無理なく達成できる業務で結果を残せます。重要なのは、単に成功するだけでなく、周りを驚かせるほどの成果をあげられる事です。期待以上のはたらきをするためにも、余裕は大切と言えます。<br><br>　逆に切羽詰まった状況だと力を出し切れず、失敗する危険性が跳ねあがるでしょう。周りを見わたす余地すらなくなると望まぬ結果につながりやすいのです。つまり、どのような業務であれ、心を落ち着けて万全の姿勢で臨む事が失敗を抑える秘訣となります。',
'　2023年、[%NAME_SELF%]は私生活が充実しているときに手掛けた仕事で成功を収めやすいでしょう。心が満たされ、労働意欲も高まっているときは、理想的な結果を残しやすいものです。たとえ難しい業務に携わる事となっても成功する予感しかせず、不安を覚える事はないでしょう。<br><br>　逆に失敗する危険性が高いのは、私生活に何らかの悩みを抱えているときです。人間関係や経済面といった解決すべき課題が重くのしかかっていると、仕事にも悪影響を及ぼしかねません。そういった状況では焦らず、一つずつ問題を片付けていく事が成功への近道となります。',
		),
		array( "nx23_026_8", 
'2023年は正念場です。試練を乗り越えた先に、成功が控えているでしょう。',
'2023年は、仕事と並行して、趣味や友人との交流にも力を入れるといいでしょう。',
'2023年は、仲間と交流を深める事が、成功への足掛かりとなるでしょう。',
'2023年、あなたが仕事で成功するには、向学心を持ち続ける事が重要です。',
'2023年は、チャンスが巡ってきやすく、成功のお膳立てはできていると言えます。',
'2023年のあなたにとって、自分を信じる事が成功への第一歩となるでしょう。',
'流れに恵まれている2023年は、やりたい事を行っていれば、おのずと理想にたどり着けます。',
'あなたが2023年に仕事で成功するためには、働きやすい環境に身を置く事が肝心です。',
'2023年は、成功するかどうかを意識せず、とにかくやりたい事に打ち込みましょう。',
		),
		);
?>