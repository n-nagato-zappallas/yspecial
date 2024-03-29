<?php
/**
 * menu_id : nu20_007
 * 島田秀平：一人用 仕事お金
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'nu20_007',
			'contents'			 => 'spshimada_zap',
			'img_name'			 => 'zap_spshimada',
			'teller_name'		 => '島田秀平',
			'isp_mid'			 => '52v006',
			'nif_menukey'		 => 'unsei_2020_006',
			'price'				 => '1000',
			'discount'			 => '900',
			'design_cd'			 => '10',
			'person'			 => '1',
			'category_name'		 => 'meet',
			'release_date'		 => '20191203',
			'title'				 => '仕事に変化はある？　転職は？◆島田秀平【あなたの2020年仕事運】',
			'caption'			 => '「今年は収入アップする？　転職を考えてもいいタイミング？」2020年のあなたの仕事の運勢を島田秀平が鑑定します。2020年に活かせる才能や、転職する際の注意点、生活レベルの変化まで、仕事の運勢を知って上手に成功を掴みましょう。',
            'base_1_title_self' => 'あなたの運命数',
            'base_2_title_self' => 'あなたの基本性格',
            'base_1_title_other' => 'あの人の運命数',
            'base_2_title_other' => 'あの人の基本性格',
            '1_min_title' => 	'2020年――最も仕事で活かせるあなたの才能',
            '2_min_title' => 	'2020年――あなたの仕事の強い味方となる仲間',
            '3_min_title' => 	'2020年――あなたが仕事でハマりやすい失敗',
            '4_min_title' => 	'2020年――転職を考えるには良い年？ 悪い年？',
            '5_min_title' => 	'2020年――転職をするなら一番気をつけるポイント',
            '6_min_title' => 	'2020年――あなたが才能を活かして掴む成功',
            '7_min_title' => 	'2020年――仕事によってあなたの生活レベルに変化は起こる？',

		);

// 小メニューロジック
$logic = 'd';

// Next枠
$next = array( "nu20_005", "nu20_008" );

// 一部見せテキスト
$free = array(
		array( "nu20_007_1", 
'　躍動感のある仕事運にあるのが、2020年の[%NAME_SELF%]さんです！　才能がどんどん開花する兆しがありますよ。こんなときには、[%NAME_SELF%]さんの「やりたい」を前面に押し出すの……',
'　2020年の[%NAME_SELF%]さんは、素晴らしい協調性を発揮しますよ！　人の話に耳を傾け、妥協もできるんですね。頑固でかたくなにならないから、周囲とうまくやっていけるでしょう。<br><br>　それに、……',
'　素晴らしい創造力が宿るのが、2020年の[%NAME_SELF%]さんです！　リラックスした運気の影響で、クリエーティブな才能が目覚めることになるでしょう。何もないところから何かを生み出す……そんな力が……',
'　今まで[%NAME_SELF%]さんがコツコツ努力してきたことが、2020年に実を結ぶ気配がありますよ！　会社で評価されて、昇進昇給の話が出るかもしれません。<br><br>　ですので、この1年は……',
'　2020年の[%NAME_SELF%]さんの仕事運ですが、冒険心旺盛な運気の影響で新しいことにチャレンジしたくなりますよ！　リスクがあるとか、経験がないとか。そういう仕事のほうがワクワクして……',
'　人の気持ちに寄り添えるのが、2020年の[%NAME_SELF%]さんです。人々の悩みの相談に乗るのが抜群にうまくもあるでしょう。悩める相手の気持ちを癒やしたり、問題を解決してあげたりできるんですね……',
'　[%NAME_SELF%]さんが心底興味がある分野で、才能が活かせることになりますよ！　例えば、以前から興味があって、勉強したり研究したりしていることですね。あるいは、趣味として長年続けていることが……',
'　素晴らしいカリスマ性やリーダーシップが宿るのが、この時期の[%NAME_SELF%]さんです！　人々に与える影響力がすごいんですね。[%NAME_SELF%]さんが言葉を発するとみんなが耳を傾け……',
'　人々に共感できるようになるのが、この年の[%NAME_SELF%]さんです！　まったく違う価値観や思考回路の持ち主に対しても、「そういうこともあるかもね」と理解を示せるんですね。そのおかげで、円満な……',
		),
		array( "nu20_007_2", 
'　仕事で強い味方となってくれるのは、[%NAME_SELF%]さんに自信を持たせてくれる人ですよ！　2020年は……',
'　[%NAME_SELF%]さんの一番の味方となってくれるのは、真逆のタイプの人ですよ！　[%NAME_SELF%]さんとは……',
'　[%NAME_SELF%]さんの仕事の強い味方となってくれるのは仲良しの友達ですよ！　幼なじみや……',
'　同じ職場の仲間が、[%NAME_SELF%]さんの味方になってくれますよ！　同僚のほか、上司や先輩……',
'　自由気ままで何にも縛られない！　そんな人が、[%NAME_SELF%]さんの仕事の強い味方になって……',
'　2020年の[%NAME_SELF%]さんの強い味方となってくれるのは、ズバリ家族です！　家族に……',
'　他人を干渉しないタイプの人が、[%NAME_SELF%]さんの強い味方になってくれますよ。社内には……',
'　普段[%NAME_SELF%]さんが面倒を見ている部下や後輩などが、仕事で強い味方となってくれます……',
'　まったく違う仕事や生きかたをしている人が、[%NAME_SELF%]さんの強い味方となってくれそう……',
		),
		);


// 結果テキスト
$text = array(
		array( "nu20_007_1", 
'　躍動感のある仕事運にあるのが、2020年の[%NAME_SELF%]さんです！　才能がどんどん開花する兆しがありますよ。こんなときには、[%NAME_SELF%]さんの「やりたい」を前面に押し出すのがおすすめです。未経験のことでも、興味があるならトライしてみてください。<br><br>　どんなに雇用条件がよくても、やりがいが感じられない仕事では能力は発揮できないんですね。ダラダラ働いていれば、評価もさがってしまいます。<br><br>　しかし、好奇心がくすぐられることなら、時間を忘れて取り組めるんですよ。才能が伸びていくことにもなるでしょう。だから、職場の知名度や収入、社会保障といった条件の部分ではなく、本当にやってみたい仕事にチャレンジしてみてくださいね！',
'　2020年の[%NAME_SELF%]さんは、素晴らしい協調性を発揮しますよ！　人の話に耳を傾け、妥協もできるんですね。頑固でかたくなにならないから、周囲とうまくやっていけるでしょう。<br><br>　それに、柔軟性が高いと、あちこちで引っ張りだこにもなりますよ。意地っ張りで融通が利かない人よりも、はるかに仕事がしやすいと思われますからね。その結果、大きなチャンスが巡ってくるかもしれません。<br><br>　そんなこの年は、単独で働くのではなく、会社や組織に属しているほうがいいですよ。もし事業を始めたいという場合は、パートナーをみつけて共同でスタートするようにしてください。誰かと一緒に働くほうが、より完成度の高い仕事ができるでしょう。',
'　素晴らしい創造力が宿るのが、2020年の[%NAME_SELF%]さんです！　リラックスした運気の影響で、クリエーティブな才能が目覚めることになるでしょう。何もないところから何かを生み出す……そんな力が育つんですね。<br><br>　だから、企画やアイデアを求められる仕事で活躍できそうですよ。あるいは、美術や音楽、文学や演劇など芸術的な方面で、一躍脚光を浴びることもあるかもしれません。<br><br>　いずれにしても、[%NAME_SELF%]さんの個性が仕事で活かされる年です。逆にいうと、独創性は必要なく、ひたすら型通りの仕事をするという感じでは評価されにくいんですね。ですので、その場合は、転職も視野に入れるのがいいかもしれませんよ！',
'　今まで[%NAME_SELF%]さんがコツコツ努力してきたことが、2020年に実を結ぶ気配がありますよ！　会社で評価されて、昇進昇給の話が出るかもしれません。<br><br>　ですので、この1年は「未経験のことに挑戦してみようかな」などとは考えず、やり慣れている仕事を継続するようにしてください。そのほうが、成功する可能性が高いですからね。<br><br>　それから、ひたすら先を急ぐのではなく、中途半端になっている仕事を片付けることも重要です。「あれもこれもしなければ……」と頭の中がゴチャゴチャでは、物事に集中できないですからね。そうならないためにも、後回しにしている作業を優先してください。着実に足元を固めていくことですよ！',
'　2020年の[%NAME_SELF%]さんの仕事運ですが、冒険心旺盛な運気の影響で新しいことにチャレンジしたくなりますよ！　リスクがあるとか、経験がないとか。そういう仕事のほうがワクワクして、モチベーションがアップするんですね。<br><br>　多くの人が不安を感じて挑戦できない中、[%NAME_SELF%]さんが率先して行動を起こし成功することもあるかもしれません。その度胸や勇気が、この年仕事に活かせる[%NAME_SELF%]さんの才能ですよ。<br><br>　ですので、安全なことばかりするのではなく、あえて危険を伴う賭けにトライしてみてください。思いがけないことに能力を見いだし、新たなキャリアの可能性が出てくるかもしれませんからね。思い切って行動するのがいいですよ！',
'　人の気持ちに寄り添えるのが、2020年の[%NAME_SELF%]さんです。人々の悩みの相談に乗るのが抜群にうまくもあるでしょう。悩める相手の気持ちを癒やしたり、問題を解決してあげたりできるんですね。<br><br>　それが、仕事で活かせる才能ですよ。[%NAME_SELF%]さんに話すと心が楽になる……と感じられ、同僚や後輩などから慕われることになるでしょう。そういうところが上司に評価され、出世や昇進の道が開けるかもしれません！　<br><br>　また、アドバイスの能力を活かして、カウンセリングなどに関する仕事を始めるのもよさそうです。いずれにしても、人と密接に関わるのが仕事運をアップさせる鍵なんですね。ですので、孤立せず、常に人の輪の中にいるようにしましょう。',
'　[%NAME_SELF%]さんが心底興味がある分野で、才能が活かせることになりますよ！　例えば、以前から興味があって、勉強したり研究したりしていることですね。あるいは、趣味として長年続けていることが、この年[%NAME_SELF%]さんに仕事のチャンスをもたらすことがあるかもしれません。<br><br>　ですので、[%NAME_SELF%]さんの好奇心を強く刺激するものは何かを考えてみてください。今現在「収入につながるはずがない」と思い込んでいることが、とことん追求するとキャリアの道が開けるかもしれないですからね。<br><br>　それから、才能を最大限に活かすには、ひとりで作業に打ち込める環境が必要なんですよ。だから、職場の人間関係などに煩わされないことも、この年の大きな課題であるでしょう。',
'　素晴らしいカリスマ性やリーダーシップが宿るのが、この時期の[%NAME_SELF%]さんです！　人々に与える影響力がすごいんですね。[%NAME_SELF%]さんが言葉を発するとみんなが耳を傾け、いつの間にか話がまとまっていることもあるでしょう。それが、この年、仕事で活かせる才能ですよ！　<br><br>　その才能を活用するには、引っ込み思案なのはダメなんですね。前へ前へと出るようにしてください。そうすれば、周囲に[%NAME_SELF%]さんという存在が広く知れ渡るようになりますから。その結果、さらなるチャンスが巡ってくるようになるでしょう。<br><br>　責任重大でプレッシャーを感じるかもしれませんが、2020年の[%NAME_SELF%]さんならどんなことでも乗り越えられるんですね。ですので、意識して目立つことですよ！',
'　人々に共感できるようになるのが、この年の[%NAME_SELF%]さんです！　まったく違う価値観や思考回路の持ち主に対しても、「そういうこともあるかもね」と理解を示せるんですね。そのおかげで、円満な人間関係を築けるでしょう。<br><br>　対人関係がスムーズになれば、交渉がうまくいったり、人脈が広がったりするんですよ。そうなると、仕事のチャンスが巡ってくることもあるはずです。<br><br>　そのためにも、この1年は、視野を広げるように行動するのがいいでしょう。聞き上手になり、いろいろな人々の言葉に黙って耳を傾けるようにしてくださいね。そうすれば、想像もしなかったキャリアの可能性が見えてくることもあるかもしれませんよ！',
		),
		array( "nu20_007_2", 
'　仕事で強い味方となってくれるのは、[%NAME_SELF%]さんに自信を持たせてくれる人ですよ！　2020年は新しいことに挑戦したくなる年なんですね。やり慣れた仕事ではなく、未経験のことをしたい！　そんな衝動が湧いてくる兆しがあります。職場で新しい企画を発表したり、転職を考えたりということもあるかもしれません。<br><br>　そういうときに、「やってみれば？」なんて前向きな発言をしてくれる人が、最強のパートナーになってくれますよ。[%NAME_SELF%]さんの不安を消し去ってくれもするでしょう。<br><br>　その人物は、会社の同僚や上司、後輩ということもあれば、家族や友達ということもあるかもしれません。いずれにしても、ポジティブになれる人がいたら、マメに連絡を取るようにしてみてくださいね！',
'　[%NAME_SELF%]さんの一番の味方となってくれるのは、真逆のタイプの人ですよ！　[%NAME_SELF%]さんとは異なる性格や特技を持っているんですね。そういう人なら、役割がかぶらないですから。仕事をするときにも、お互いの能力を存分に発揮できるでしょう。<br><br>　性格が違うと、最初は「苦手かな……」と思ってしまうかもしれません。けれど、そういう人こそが、[%NAME_SELF%]さんの欠点を補ってくれることがあるんですよ。ですので、少し様子をみるようにしてください。<br><br>　しばらく一緒に働いてみると、バランスよく仕事ができると実感することがあるでしょう。似た者同士では解決しない問題も、異なるタイプだから乗り越えられることもあるかもしれませんよ！',
'　[%NAME_SELF%]さんの仕事の強い味方となってくれるのは仲良しの友達ですよ！　幼なじみや同級生、共通の趣味を持つ人などですね。そういう人たちと楽しく遊べば、仕事のストレスが癒やされるでしょう。<br><br>　それに、職場の愚痴も聞いてくれるはずです。誰かに話すだけでも、気持ちが楽になることがありますからね。その結果、気分が切り替わって「明日からまた頑張ろう！」と思えることでしょう。<br><br>　その人物が直接何かしてくれるというわけではなく、始めは、仕事そのものは相変わらずということもあります。しかし、私生活のほうが充実していれば、仕事もうまくいくようになります。だから、どんなに忙しくても、友達とのつながりは大切にしておいてくださいね。',
'　同じ職場の仲間が、[%NAME_SELF%]さんの味方になってくれますよ！　同僚のほか、上司や先輩、部下や後輩ということもあるかもしれません。毎日一緒に仕事をしている人は、[%NAME_SELF%]さんのまじめで誠実な働きぶりを理解しているんですね。それだけに、何かあれば味方になってくれるはずですよ。<br><br>　もし、普段仕事仲間と交流がない場合も、今からでも遅くはありません。意識して関わりを持つようにしてみてください。少しでも話をすると、すごく理解してくれるとわかるかもしれませんよ。<br><br>　いずれにしても、身近に敵がいる状態というのはストレスになりますからね。安心して働くためにも、身近な人との関係は円満にしておきましょう。',
'　自由気ままで何にも縛られない！　そんな人が、[%NAME_SELF%]さんの仕事の強い味方になってくれますよ。ポジティブで型にはまらないタイプともいえますね。そういう人なら、[%NAME_SELF%]さんがやりたいことにも反対しないはずです。<br><br>　2020年の[%NAME_SELF%]さんは、新しいことがしたくてウズウズする気配があります。しかし、保守的な人に話すと「危ないよ」と止められることがあるでしょう。でも、そのせいで、飛躍のチャンスを逃すこともあるかもしれません。<br><br>　それよりも、破天荒で周囲から浮き気味なタイプが、[%NAME_SELF%]さんには必要なんですよ。周囲から孤立することを恐れず、本能に素直に挑戦する。そういう人に刺激されて、[%NAME_SELF%]さんも行動を起こす勇気が湧いてくることになるはずです！',
'　2020年の[%NAME_SELF%]さんの強い味方となってくれるのは、ズバリ家族です！　家族にサポートされて、仕事がはかどるようになりますよ。<br><br>　例えば、すごく忙しいと、[%NAME_SELF%]さんに代わって雑用を引き受けてくれるなどですね。それに、転職や勉強などで資金的な問題を抱えていれば、金銭面をサポートしてもらえるかもしれません。それに、精神的に疲れていると、やさしく癒やしてもくれそうです。<br><br>　普段、家族と距離があると、なかなか仕事の話はしないこともあるでしょう。しかし、この1年は、意識して交流を持ってみることですよ。その結果、不安や孤独が解消されて、肩の力を抜いて仕事に打ち込めるようになることもあるはずです！',
'　他人を干渉しないタイプの人が、[%NAME_SELF%]さんの強い味方になってくれますよ。社内には、何かとおせっかいな人もいるかもしれません。頼んでもいないのに、いろいろしてくれるなどですね。けれど、そういうタイプは、この時期の[%NAME_SELF%]さんにストレスを与えるだけでしょう。<br><br>　そうではなく、たとえ[%NAME_SELF%]さんが失敗しそうでも、黙って見守ってくれる人がいいんですよ。その結果、[%NAME_SELF%]さんは自分の頭で考えられるようになりますから。苦労しながらも問題を乗り越え、能力が身につくこともあるでしょう。<br><br>　ですので、世話好きでおせっかいな人ではなく、サバサバとしてそっけない人のほうがいいんですね。そういう人なら、[%NAME_SELF%]さんの最高のパートナーになってくれるはずですよ。',
'　普段[%NAME_SELF%]さんが面倒を見ている部下や後輩などが、仕事で強い味方となってくれますよ！　そういう人たちは、[%NAME_SELF%]さんのことを心底信頼し、尊敬もしているんですね。おかげで、何かあれば絶対的な味方になってくれるでしょう。<br><br>　ですので、慕ってくれる人たちのことは、大切にしてください。より高いところを目指そうとする場合、味方は多ければ多いほどいいですからね。周囲の評判がよければ、チャンスも巡ってくるようになるはずです。<br><br>　そのためにも、たとえ面倒だと感じても、親身になって相談にのり、マメにお世話することですよ。この1年の間に強い絆を築くようにしておけば、[%NAME_SELF%]さんの窮地に多くの仲間が力を貸してくれることでしょう。',
'　まったく違う仕事や生きかたをしている人が、[%NAME_SELF%]さんの強い味方となってくれそうですよ！　もしかすると、奉仕活動に熱心に打ち込んでいるとか、外国育ちや外国人ということもあるかもしれません。<br><br>　[%NAME_SELF%]さんの普段の日常にいないタイプの人が、[%NAME_SELF%]さんを理解し、味方してくれることがあるでしょう。ですので、そういう人がいれば大切にしてくださいね。<br><br>　その人とは、旅先などで偶然出会う可能性があります。初対面では共通点が少なく、苦手意識を感じることもあるかもしれません。けれど、そういう人が、[%NAME_SELF%]さんの最高のパートナーになることがあるんですよ。ですので、食わず嫌いをせず、交流を深めるようにしてみてくださいね！',
		),
		array( "nu20_007_3", 
'　思い立ったが吉日なのが、2020年の[%NAME_SELF%]さんです！　決断力と行動力に優れていて、チャンスだと思ったらすぐに動けるんですね。初めての場所や人でも気にせず、どんどん自分を売り込めもするでしょう。<br><br>　ただ、焦って失敗することもあるんですよ。細かい部分を見過ごして、「しまった」と後悔することもあるかもしれません。だから、ほんの少し慎重になるといいですね。<br><br>　絶好のチャンスだと感じると、「今決めないと……」と思ってしまうでしょう。けれど、そこで、あえてひと呼吸おくようにしてください。じっくりと詳細まで目を通すようにすることです。そうすれば、失敗を未然に防げるようになりますよ！',
'　この年の[%NAME_SELF%]さんがハマりやすい失敗ですが、仕事で他人のトラブルに巻き込まれてしまうことですね。親切な[%NAME_SELF%]さんは、職場でも周囲から頼りにされる存在になるでしょう。「助けて！」と泣きつかれることも少なくないかもしれません。<br><br>　そういう人たちをサポートするのはいいのですが、そのせいで余計な問題に関わってしまう可能性があるんですよ。下手すると、[%NAME_SELF%]さん自身の仕事ができなくなることもありそうです。<br><br>　ですので、人の相談に乗るのはいいですが、きちんと優先順位を意識するようにしてくださいね。相手に押し切られず、[%NAME_SELF%]さんが今一番何をすべきかをよく考えましょう。そうすれば、失敗を防げることになるはずですよ！',
'　遊びの誘惑に負けやすいのがこの年です！　楽しくて、つい夜更かししたり、飲み過ぎたりする気配があるんですね。そのせいで、寝坊するなど、翌日の仕事に支障をきたすことがあるかもしれません。<br><br>　それに、疲れていると集中力も途切れやすくなりますから。普段は絶対にしないようなうっかりミスをしてしまうこともあるでしょう。<br><br>　それを避けるためには、楽しみながらも、ちゃんとけじめはつけることですよ。遊びに行くのは休日の前だけ……などと、自分の中でルールを決めるようにしてください。そうすれば、失敗を回避できるようになるはずです。仕事と私生活のバランスがよくなり、うまくやっていけるようになるでしょう。',
'　まじめなのはいいのですが、少々融通が利きにくい面が[%NAME_SELF%]さんにはあるようですね。「こうしなければ……」というルールに縛られて、状況が変わってもうまく対応できないことがありそうです。そのために、失敗してしまうことがあるでしょう。<br><br>　それを避けるためには、柔軟性が高い人と一緒に組んで仕事をするのがいいですよ。[%NAME_SELF%]さんが想像もしないような、画期的なアイデアを提案してもらえるかもしれないですから。<br><br>　それから、早め早めに行動するようにもしてくださいね。そうすれば、予期せぬ出来事が起きても、対処する時間的な余裕があります。その結果、失敗を回避できることもあるでしょう。何事もゆとりを持って取り組むようにしてくださいね。',
'　2020年の[%NAME_SELF%]さんですが、失敗続きになりそうですよ！　でも、それはチャレンジするからなんです。無難なことだけしていれば、失敗することもないですよね？　しかし、この年の[%NAME_SELF%]さんは危険な賭けに出たくなるんですよ。そのために、ミスが起きるのも仕方がありません。<br><br>　それに、失敗からヒントを得ることもあります。「どうしてうまくいかなかったんだろう……」と考えるうちに、新たなアイデアがひらめくことがあるでしょう。<br><br>　ですので、この1年は、失敗を恐れずに、どんどん挑戦してくださいね。大胆になれば、想像以上のチャンスをつかめることになりますので。安全な枠から抜け出して、思い切って冒険するのがいいでしょう。',
'　この年の[%NAME_SELF%]さんは、とにかく人がいいんですね。困っている人がいると放っておけないでしょう。ただ、そのために安請け合いしてしまう傾向があるようです。自分の仕事だけでも大変なのに、つい「いいよ、いいよ」と引き受けてしまうんですね。しかし、結局時間や体力が足らずに、失敗してしまうんですよ。<br><br>　ですので、この時期は人に親切にするのはいいですが、よく考えてから返事をするようにしてください。[%NAME_SELF%]さんの能力以上のことは断ることも必要。そうすれば、失敗を防げますからね。<br><br>　それから、ひとりで抱え込まず、[%NAME_SELF%]さんも周りに助けて求めることですよ。そうすれば、精神的にも時間的にも余裕ができるはずです。',
'　スキルアップを望むのが、この年の[%NAME_SELF%]さんです！　そのために、一生懸命に努力するでしょう。時間を惜しんで働いたり、知識や技術を身につけるために勉強したりするかもしれません。<br><br>　ただ、そうなると、努力しない人にモヤモヤしてしまう可能性があります。その結果、無意識に相手を傷つけるセリフを発してしまうことがあるようです。そのせいで、職場の人間関係が悪くなり、仕事で失敗してしまうことがあるんですね。<br><br>　ですので、この1年は、うっかり発言にはくれぐれも注意してください。それから、人は人自分は自分と完全にわけて考えることも大切です。そうすれば、周囲に惑わされずマイペースで働け、ミスをすることもないでしょう。',
'　正義感が強くなるのが、この年の[%NAME_SELF%]さんです！　自信に満ち溢れ、堂々と自己主張できるでしょう。そんな[%NAME_SELF%]さんをみんなは頼りにするようにもなりますよ。<br><br>　その一方で、強気な発言をしがちでもあるようです。そのせいで、不要な敵を作ってしまうことがあるんですね。それが、[%NAME_SELF%]さんがハマりやすい失敗です。<br><br>　それを避けるためには、言葉選びが重要です。ほんの少し言葉をやさしくするだけで、相手に与える印象が違ってきますから。それができれば、無駄なトラブルを避けることができるんですね。この1年は注目度がアップし、噂も広まりやすいのですよ。そのためにも、人との関係は円満にするように心がけてください！',
'　2020年の[%NAME_SELF%]さんですが、周囲に影響されやすいところがあります。他人に共感できるのは素晴らしいのですが、そのために立ち位置がコロコロ変わってしまうことがあるんですね。その結果、信用してもらえないことがあるでしょう。<br><br>　みんなに対して理解を示すのはいいですが、その一方でブレない信念も必要です。[%NAME_SELF%]さんの意見をきちんと持つようにしてください。妥協できるところとできないところを、しっかり区別することですよ。そうすれば、周りにも信用されるようになりますから。<br><br>　場合によっては、誰かともめることもあるかもしれませんが、それは仕方がありません。すべてを手に入れようとするのではなく、諦める部分も持つことで、仕事運が上昇するでしょう。',
		),
		array( "nu20_007_4", 
'　転職に最適な年にありますよ！　2020年はスタートの運気にあるんですね。マンネリの日々を抜け出し人生を変える、絶好のタイミングだといえるでしょう。<br><br>　だから、もし職を変えたいと考えているなら、ぜひこの1年の間に実行に移してください。その際には、ありとあらゆる可能性に目を向けてみるといいですよ。過去に経験のない職種でも、この年なら転職が成功する可能性がありますからね。<br><br>　変化することに恐怖や不安を感じるかもしれませんが、一歩踏み出してみれば運気が背中を押してくれるのですよ。「今のままでいいのかな……」などと現状にモヤモヤしているならなおさら、行動を起こすようにしてみましょう。',
'　2020年は、仕事のやりがいよりも職場の人間関係が重要なんですね。気の合う仲間に囲まれていると、[%NAME_SELF%]さんの能力は最大限に発揮されます。やさしく温かい環境にいれば、眠れる才能が目覚めることもあるでしょう。<br><br>　逆に、みんなが対抗意識を燃やし、敵対し合う職場ではダメなんです。精神面が不安定になり、仕事に身が入らなくなるはずです。<br><br>　ですので、対人で悩んでいるなら、転職を考えるのがいいですよ。しかし、人間関係がいいなら、もう少し様子をみるようにしてください。仕事内容や雇用条件など不満があるなら、上司に掛け合ってみましょう。もしかすると、転職せずに問題が解決することもあるかもしれませんよ。',
'　ストレスなく働くのが、仕事運を上昇させる秘訣です！　ですので、もし今の職場で不満があるなら、転職を考えるのもいいですよ。やりがいが感じられないとか、職場の人間関係が悪いとか。[%NAME_SELF%]さんを憂鬱にさせる原因があるなら、思い切って仕事を変えてみてくださいね。<br><br>　逆に、転職活動がストレスになるなら、何もしないほうがいいです。不安が押し寄せてくるようだと、思考がマイナスになりますからね。正しい選択ができなくなるでしょう。<br><br>　ですので、もし[%NAME_SELF%]さんが転職にワクワクするなら、思い切って実行してください。ポジティブな気持ちで行動を起こせば、仕事運も上昇しますからね。充実した1年を過ごせることにもなるはずです！',
'　転職には向かない年ですね。2020年の[%NAME_SELF%]さんは、それまで地道に取り組んできたことの成果が表れる運気にあります。職場でようやく昇進話が出たり、やりたかった仕事ができるチャンスが巡ってきたりする可能性があるでしょう。長年の苦労が報われる運気ともいえますね。<br><br>　そのタイミングで転職するのはもったいないですよ！　状況が改善される兆しがあるので、もう少し今の職場で粘ってみてください。<br><br>　その一方で、転職に向けてじっくりと準備をしてきたというなら、年内中に実行に移すといいでしょう。真新しいことではなく、[%NAME_SELF%]さんが長年培ってきた知識や技術、経験が活かせる職場であれば、転職も成功するに違いありません！',
'　転職を考えているなら、2020年が実行に移す最高のタイミングですよ！　冒険心が旺盛になる影響で、過去にはチャレンジできなかったキャリアの可能性に目を向けることができるでしょう。<br><br>　今現在の仕事に不満や不安があるなら、思い切って行動するのがいいですよ。そうしないと、この先、転職できない事情が出てくる気配がありますから。その結果、「ああ、あのとき転職しておけばよかった……」と後悔しかねないんですね。<br><br>　そんな残念な展開を避けるためにも、イチかバチか転職してみてください。この1年であれば、予期せぬ展開になっても対処するパワーがあるんですよ。トラブルや問題が刺激となって、やる気が高まりもするでしょう。',
'　周囲に賛成してもらえるなら、転職を考えてもいいですよ！　現状が[%NAME_SELF%]さんにとってよくないとか、周囲に負担を強いているなどがあるなら、仕事を変えることも必要でしょう。その結果、状況が改善されることになるはずです。<br><br>　その一方で、周りの反対を押し切って転職するのはよくありません。2020年は、身近な人のサポートがあってこそ、仕事運がよくなるのですね。その部分がなくなると、たちまち運気はさがってしまいます。そうならないためにも、周りに相談してみてください。<br><br>　とはいっても、耐えられない状態もありますよね？　その場合は、早く転職すべきです。[%NAME_SELF%]さんを本当に愛している人なら、きっと気持ちを理解してくれますよ！',
'　転職する前にやるべきことが、[%NAME_SELF%]さんにはあるようですね。高度な知識や技術を身につけたり、資格を取得したりということです。その上で、転職を考えるほうが、よりステップアップできることになりますよ。ですので、まずは転職ではなく、スキルアップのほうが考えてみてください。<br><br>　それに、能力が上がれば、今の職場でも活躍できるようになるかもしれません。やりたい仕事ができたり、昇給したりすれば、転職の必要がなくなることもあるでしょう。<br><br>　ですので、まずは能力を高めることを考えることですよ。この1年、じっくりと取り組んでみれば、今とはまったく違うキャリアの道が開けることもあるかもしれませんからね！',
'　転職に最高の運気にありますよ！　この年の[%NAME_SELF%]さんなら、希望よりも条件のよい職場に就職が決まるかもしれません。もしかすると、転職することで、地位や名誉を得られたり、大幅な収入アップが実現したりすることもありそうです。<br><br>　ですので、転職が頭によぎったら、積極的に行動してください。その際には人脈も重要です。力のある人のコネで、理想の職場に転職できるかもしれませんから。そのためにも、秘密裏に行動するのではなく、周囲に広く相談するようにしましょう。<br><br>　それに、2020年は一生懸命に働いていると、転職先のほうから[%NAME_SELF%]さんにアプローチしてくることもあるかもしれません。そのためにも、手を抜かず完ぺきな仕事をするようにしていてくださいね！',
'　転職を考えるのによい年ですよ。以前から不満や不安を抱えているなら、年内中に結論を出すといいでしょう。転職してやっていけるのか……と心配になるかもしれませんが、不安定な状況を引きずるほうがよくないんですね。何もしなければ、[%NAME_SELF%]さんが望まない方向へと向かってしまうこともありますので。<br><br>　それを避けるためにも、自らの意思で転職を決めてください。そうすれば、よりよい条件で新しい仕事が決まるはずです。<br><br>　それから、すぐに転職するのではなく、少し休息を取るのもおすすめです。旅行に出たり、学校に通ったりですね。新鮮な空気を吸うことで、新たな思考が宿ります。気持ちが切り替われば、転職もきっとうまくいくでしょう。',
		),
		array( "nu20_007_5", 
'　一番重視すべきなのは、[%NAME_SELF%]さんの好奇心ですよ！　「おもしろそう」「この仕事をしてみたい！」などと感じられることが、何よりも重要なんですね。興味がそそられる職業であれば、意欲的に取り組めもするでしょう。<br><br>　逆に、雇用条件や安定を意識して転職先を選ぶと後悔する可能性があるのですね。転職したはいいけれど、「これが自分が本当にやりたいことなのかな……」と感じかねないですから。<br><br>　ですので、せっかく転職するのであれば、[%NAME_SELF%]さんの心の声に耳を傾けて、本当にやりたい仕事を探すことですよ。それまで経験がなく完全にゼロからの出発でも、この年に始めたことは将来的に実を結ぶ可能性があります。キャリアを好転させるチャンスの年でもあるでしょう。',
'　何よりも大切なのは職場環境ですよ！　2020年の[%NAME_SELF%]さんは、個人ではなくチームで働くほうが能力を発揮できます。そのためには、チームワークを求められる職場であることが大事なんですね。<br><br>　ですので、転職するなら、みんなが協力し合って働いているような職場を探すようにしてください。個人的なノルマではなく、会社全体の目標などを掲げているところがおすすめです。<br><br>　それから、転職する前には、必ず念入りに情報を集めるようにしてください。インターネットで独自に調べるほか、友人知人などに話をして、アドバイスをもらうようにもしましょう。そうすれば、きっと[%NAME_SELF%]さんによりふさわしい転職先がみつかりますよ。',
'　転職で一番大切にすべきなのは、好きか嫌いかです！　転職するとなると、給料や休暇などの雇用条件が気になることもあるでしょう。しかし、2020年の[%NAME_SELF%]さんの仕事運を左右するのは、好きという感情なんですよ。夢中になれる仕事なら、どんどん能力を発揮できることになりますからね。<br><br>　だから、仕事を探す際には、誰に何といわれようとも[%NAME_SELF%]さんの気持ちを最優先してください。苦手な作業を克服するのではなく、好きを伸ばすのがいいんですよ。<br><br>　もし好きなことがわからないなら、好奇心がくすぐられるものをいろいろ試してみてください。いきなり転職ではなく、奉仕活動や副業などで少し経験してみれば、向き不向きがわかることになるでしょう。',
'　条件にこだわり過ぎないのが、転職する際に気をつけるポイントです！　せっかく転職するなら完ぺきに……と思うかもしれません。しかし、完ぺきな職場というのはそうはないものです。細部にこだわるあまり、[%NAME_SELF%]さんにとっての天職を逃してしまうこともあるでしょう。<br><br>　そうならないためにも、妥協することも必要です。事前に、「これは絶対に必要。それはなくてもいいかな」というのを決めておくといいですよ。そうすれば、多少のズレ程度なら受け入れられるでしょう。<br><br>　それから、ズルズルと転職活動を続けるのはよくありません。最初に期間を決めて、その間に決めるようにすることです。新しい職場がみつからなければ、「現状がいいんだ」と納得でき、仕事に身が入るようにもなるはずです！',
'　興奮しやすいのが、この年の[%NAME_SELF%]さんです！　転職も「これだ！」と思うと、深く考えずに決めてしまいそうですよ。ただ、実際に勤めてみると、全然違った……というパターンもあるんですね。そうなると、すぐに辞めたくなることもあるでしょう。<br><br>　そんな展開を避けるためにも、仕事内容と雇用条件はしっかりと確認してください。せっかく自由を求めて転職しても、同じように縛られるようでは意味がないですからね。冷静になれば「ちょっと違うかも……」とわかることもあるでしょう。<br><br>　失敗も経験のひとつですから慎重になり過ぎる必要はないですが、ほんの少し注意すれば防げることもありますので、深呼吸してから決断するようにしてください！',
'　[%NAME_SELF%]さんの場合は、職場環境を重視することですよ！　お互いを敵対し合うような環境では、ストレスを感じるでしょう。仕事が楽しくないと思う原因にもなりかねません。<br><br>　そうではなく、みんなが助け合い、和気あいあいとしたムードなら生き生きと働けるんですよ。[%NAME_SELF%]さんの面倒見のよさも評価してもらえるはずですよ。<br><br>　そのためにも、職場環境はとても大切なんですね。ですので、転職を決める前には、必ずその職場に足を運び様子をみることです。口コミや噂なども、じっくりと調べるようにしてください。慌てず慎重に調査してから決断すれば、入社してから「こんなはずじゃなかった……」と後悔することを防げるでしょう。',
'　やりがいが、転職を決める際に一番気をつけるポイントですよ。どんなに雇用条件がよくても、[%NAME_SELF%]さんの能力を活かせない職場では、モチベーションが続かないですからね。やる気がない態度だと、評価されることはないですから。<br><br>　ですので、仕事内容はしっかりと確認するようにしてください。面接の際にも、[%NAME_SELF%]さんの才能を活かしたいということをアピールしましょう。<br><br>　それから、もしよい転職先がみつからなくとも、妥協して決断するのはよくありません。焦らずに、もう少し探すようにしてみてください。その間も、スキルアップを怠らずに。優秀な仲間と情報交換をマメにしていれば、理想の転職先がみつかることもあるかもしれませんよ！',
'　たとえやりがいがあっても、収入が満足できなければ、[%NAME_SELF%]さんは不満を感じるでしょう。給料は[%NAME_SELF%]さんの働きに対する対価ですからね。働きに見合った金額でないと、ストレスになるはずです。<br><br>　ですので、転職する際も、金銭面はシビアになることです。憧れの職業でも、職場環境が素晴らしくても、そこで妥協しないでください。何よりも大切なのはお金ですからね。金銭の部分で満足できれば、多少の問題は目をつぶることができるはずです。<br><br>　それに、パワフルな[%NAME_SELF%]さんは、転職後に自分をガンガン売り込んで、理想の地位や仕事を手に入れることもあるでしょう。そのモチベーションを維持するためにも、給料は重要なポイントですよ！',
'　[%NAME_SELF%]さんの場合、将来性が一番重要なポイントです。せっかく転職しても、すぐに働けなくなるようじゃ意味がないですからね。この先、年を重ねても、身の回りの環境が変わってもやっていけるのか……というところを考えるようにしてみてください！　<br><br>　そのためには、外の世界に目を向けることも必要なんですよ。ずっと働きづめだと、視野が狭くなっているものです。そうなると、別の可能性などひらめかなくなりますから。遠い未来を意識するためにも、世界を広げるのがよいでしょう。<br><br>　そのためには、年の離れた人と友達になるのがおすすめです。それから、海外など、文化や生活習慣が違う土地を旅するのもおすすめです。そうすれば、仕事に関する新たな価値観が浮かぶこともあるかもしれませんよ！',
		),
		array( "nu20_007_6", 
'　自立したり、先頭に立ったりすることで、想像以上の成功を手にできる可能性がありますよ。[%NAME_SELF%]さんは自覚している以上に高い能力を秘めているのですね。しかし、誰かの命令に従っている状況では、その能力が発揮されることはないんです。<br><br>　けれど、そういう環境から抜け出し自分の考えを堂々と主張できるようになれば、状態に変化が起きるのですね。[%NAME_SELF%]さんの才能が認められて、一躍脚光を浴びることもあるかもしれません！　<br><br>　そのためにも、この1年は自ら前へ前へと出るようにしてください。もし今の職場で[%NAME_SELF%]さんの才能が評価されないなら、独立することも考えるといいですよ。責任は増えますが、能力を最大限に発揮でき驚くべき成功を収めることもあるでしょう！',
'　誰かとの共同作業によって、大きな成功をつかめることになりますよ！　世の中には、協調性がまるでない人もいるんですね。自己主張が激しく、人とぶつかってばかりという人もいるでしょう。<br><br>　しかし、[%NAME_SELF%]さんは違うはずです。たとえ、[%NAME_SELF%]さんのやりかたや考えと違っていても、黙って相手の言葉に耳を傾け、理解を示そうとするんですね。そのおかげで、大きな成功をつかめることになりますよ。<br><br>　また、この年の[%NAME_SELF%]さんは、縁の下の力持ちとして活躍する兆しがあります。例えば、とても優秀な人のアシスタントや助手的な役割を果たすなどですね。ですので、[%NAME_SELF%]さんが先頭に立つのではなく、陰ながら支える仕事を積極的に選ぶのがいいでしょう。',
'　この年は、個性が[%NAME_SELF%]さんの最大の武器ですよ！　[%NAME_SELF%]さんにしかできない、そんな仕事で成功をつかめるでしょう。<br><br>　ですので、周りと同じことではなく、独創的なひらめきやアイデアを大切にしてください。何か思いついたら、忘れないうちにメモするようにもしてくださいね。そんな小さなひらめきの数々が、画期的なアイデアを生み出すことがあるんですよ。それから、思いついたことを発表することも必要です。内に秘めているだけではチャンスは得られないですからね。<br><br>　それに、[%NAME_SELF%]さんの捜索を、コンテストやコンクールに応募するのもおすすめです。そこから、仕事の成功につながるヒントが得られることもあるかもしれませんよ！',
'　長年の目標が達成できるのが、この年の[%NAME_SELF%]さんですよ！　忍耐強く積み重ねきたことが認められるんですね。職場で地位がアップしたり、昇給したりということがありそうです。<br><br>　それに、その成功は突然舞い降りたの幸運ではなく、[%NAME_SELF%]さんが努力してきた結果だというのを、周囲はよくわかっています。ですので、嫉妬されたり、やっかまれたりすることはないはずです。素直に[%NAME_SELF%]さんの成功を祝福してくれるでしょう。それだけに、快適に仕事ができますよ。<br><br>　そんな1年ですので、新しい仕事に挑戦せず、今まで経験していることを続けてください。それが、[%NAME_SELF%]さんに充実や満足をもたらしてくれるに違いありません！',
'　可能性は無限大！　それが、2020年の[%NAME_SELF%]さんですよ。旺盛な好奇心に従って、ありとあらゆることに挑戦する兆しがあるんですね。それだけに、どんな成功を収めるか想像もつきません！　<br><br>　もしかすると、年始にしていた仕事とは異なる職業で大成していることもあれば、まったく違う土地で仕事をしていることもありそうですよ。いずれにしても、生き生きと仕事しているに違いありません。<br><br>　それに、リスクを恐れずに行動するせいで、失敗も経験します。しかし、そのおかげで多少のことでは動揺しない度胸が宿るんですよ。そのおかげで、さらなる大きな目標を目指すようになるでしょう。周囲が「到底無理だ」と感じる野望を、見事かなえてしまうこともあるかもしれません！',
'　2020年は、[%NAME_SELF%]さんの内に秘められた能力が目覚めるんですね。それまでも、何となく「得意なんじゃないかな……」と思っていたけれど、この1年ではっきり自覚できそうですよ。その能力を、さらに磨き上げたいと感じることもあるかもしれません。<br><br>　例えば、学校や通信教育で学んだり、資格を取得したりですね。その結果、現職場や転職先でその能力を活かせる仕事を与えられることもあれば、副業などで成功することもあるもしれませんよ！　<br><br>　ですので、[%NAME_SELF%]さんの能力に気づいたなら自信を持つことです。謙遜せずに、どんどん能力をアピールするようにしましょう。そうすれば、驚くべき成功をつかめることもありますよ。',
'　責任感が強くなるこの年は、任せられた仕事をきちんとこなすでしょう。その仕事ぶりが評価されることになりますよ。後輩や部下からも尊敬されて、アドバイスを求められるかもしれません。それが、[%NAME_SELF%]さんの自尊心を満たし存在意義を感じさせることになるんですね。職場で必要とされもするでしょう。<br><br>　いわゆる、出世や昇進といった、わかりやすい成功ではないかもしれません。しかし、信頼され頼られることが、[%NAME_SELF%]さんに喜びをもたらすのです。そうなれば、きっと仕事が楽しくなりますよ。<br><br>　今まで会社に行くのが億劫だった人も、この1年で「ずっと会社にいたい！」と願うほど、会社が好きになることもあるかもしれません！',
'　[%NAME_SELF%]さんはこの1年で、大きな成長を遂げそうです！　勤勉に働き、着々と地位を高めていくでしょう。次々とノルマを達成して、成功を収めもしそうですよ。<br><br>　それに、金銭面での成功の気配もあります。単に評価されるだけでなく、収入面も大幅に改善されそうですよ。給料がアップしたり、臨時ボーナスを得たりするかもしれません。<br><br>　それに、この年は独立して事業を始める可能性もあります。その結果、それまでよりもはるかに大きな収入を得るようになることがあるでしょう。ですので、この1年、[%NAME_SELF%]さんの才能を活かさない手はありません。もし今現在仕事をしていないというなら、早めに就職なり、事業を始めるなりするのがいいですよ！',
'　不安が解消されるのが、この年に[%NAME_SELF%]さんがつかむ成功ですよ！　柔軟性が宿るこの年は、いろいろなことを受け入れられるようになるんですね。無駄なことへの執着を捨て、前に進めもするはずです。<br><br>　そのおかげで、それまでの状態から解放され、新たなキャリアの道を歩めるようになるんですね。それが、この時期の最大の成功だといえるでしょう。<br><br>　変化の真っ最中では「この先どうなるのだろう……」と感じるかもしれませんが、この時期の出来事は[%NAME_SELF%]さんに幸せと成功をもたらすのですよ。ですので、何も心配いりません。すぐにはわからないかもしれませんが、しばらく時間が経過すると、「この年の選択は間違いなかった」と実感しているはずですよ！',
		),
		array( "nu20_007_7", 
'　仕事が変われば[%NAME_SELF%]さんの生活も一変しますよ！　新しい仕事や環境にワクワクして、気持ちが高揚するんですね。退屈な日々を過ごしていた場合、日々刺激を感じられるようになるでしょう。<br><br>　すぐに報酬がアップすることもあれば、そうでない場合もあるんですよ。しかし、どちらのケースも、未来に希望を抱けるのですね。そうなると、[%NAME_SELF%]さんの気持ちがシャキッとするはずです。生活にハリが出て、規則正しく過ごすようになるでしょう。<br><br>　2020年ですが、キャリアが[%NAME_SELF%]さんの人生全般に大きな影響を及ぼすのですよ。ですので、今だけのことではなく、将来を見据えて行動を起こすようにしてみてくださいね！',
'　昇進昇給などよりも、仕事仲間との人間関係が、[%NAME_SELF%]さんの生活に大きな影響を及ぼすことになりますよ。職場は1日の中でも、多くの時間を過ごすことになりますよね。そこで、人間関係が悪ければ、ドッと疲れてしまうでしょう。<br><br>　しかし、2020年は、その部分が劇的に改善される兆しがあります。しかも、[%NAME_SELF%]さんをサポートしてくれる最高のパートナーを得る可能性があるんですね。その結果、ストレスや不安が解消されることになりますよ。<br><br>　そうなると、健康状態もよくなります。それまで仕事で疲れて何もできなかったのが、帰宅してから掃除をしたり、趣味を楽しんだりと、生き生きと過ごせるようになるはずです！',
'　勤務時間が長ければ長いほど、[%NAME_SELF%]さんの生活に大きな影響を及ぼします！　すごく楽しく働ける状態なら、どんなにつらい仕事でも乗り越えられるんですね。逆に楽しみがまったく感じられないようでは、気持ちが沈んでしまうんですよ。働くのが苦痛でたまらず、日に日にやる気がなくなってしまうでしょう。ですので、「仕事が楽しい」ということはとても重要なポイントなんですよ。<br><br>　とはいっても、いきなり仕事が劇的に好転するのは難しいですよね？　その場合は、趣味や友達づき合いを充実させましょう。そうすれば、仕事とのバランスがうまく取れるようになって、働くストレスが和らぐはずです。生活レベルも向上しますよ！',
'　この年の[%NAME_SELF%]さんにとって、仕事はすごく重要な意味を持っているんですね。仕事面が安定すれば、金銭面も安定します。そうなれば、心穏やかに安心して暮らせるようになるでしょう。<br><br>　それに、計画通りに家計を管理できると、将来設計なども考えられるようになりますよ。生活レベルを向上させることも容易になるでしょう。<br><br>　ですので、2020年は、何よりも仕事優先で考えるといいでしょう。就職や転職をする際にも、夢見がちではなく現実的な思考を持って挑むようにしてくださいね。そうすれば、この1年で貯金もでき、余裕のある生活を手に入れられることになりますよ。そのためにも、この1年は仕事ときちんと向き合うようにしましょう！',
'　刺激的な仕事をしていると、[%NAME_SELF%]さんの生活レベルは大きく改善されますよ！　マンネリの日々では、どんどんやる気がなくなってしまうんですね。何もかもが面倒でダラダラと過ごすようになってしまいます。<br><br>　しかし、緊張やスリルに満ちた仕事をしていれば、生活にハリができるんですよ。エネルギッシュに活動するようにもなるでしょう。収入アップや将来に対する夢や希望をもたらしてくれることにもなります。ですので、最優先して考えるようにしてください。<br><br>　いろいろ挑戦していると、調子がよいときばかりではなく悪いときも巡ってきます。けれど、さまざまな経験を経て、力が養われますから。最終的には生活レベルがアップしているはずですよ！',
'　職場の人間関係がよくなったり、[%NAME_SELF%]さんの仕事を身近な人が応援してくれたりすると、生活レベルが劇的に変化しますよ！　周囲がみんな敵ばかりで孤立した状態にあると、ネガティブになってしまうんですね。ストレスだらけでは、何もかも嫌になってしまうこともあるでしょう。<br><br>　しかし、仕事が楽しくて機嫌よく働ければ、全然違ってくるんです。人生に希望を感じられるようになり、前向きな思考が宿るようになりますよ。健康を気遣い、よりよい住居環境を手に入れようと努力するようにもなるはずです。<br><br>　それに、仕事が安定し、きちんと収入が得られていれば、精神面も穏やかになります。幸せに過ごせるようになるでしょう！',
'　仕事がきっかけとなって、[%NAME_SELF%]さんは達成したい目標ができそうですよ！　そのおかげで、活気に満ちた毎日を過ごせるようになるでしょう。そうなると、[%NAME_SELF%]さんの生活全般が改善されるんですね。<br><br>　時間やお金を無駄にしたくないと感じ、有効活用するようになるはずです。貯金が増えて、住居のレベルアップもできるかもしれません。さらに。規則正しい生活をするようになり、健康面も改善されるでしょう。<br><br>　ですので、この1年は、意識して仕事に力を注ぐようにしてみてください。知的好奇心を満たすようにしていれば、[%NAME_SELF%]さんの生きがいやライフワークとなるものをみつけられるはずです。その結果、一時的ではなく、この先長く素晴らしい生活をもたらされることもありますよ！',
'　生活レベルが大幅に改善される兆しがあるのが、2020年の[%NAME_SELF%]さんです！　仕事で大成功を収めて収入がアップしたり、より大きなチャンスが巡ってきたりする兆しがあるんですね。<br><br>　その結果、それまでとは全然違う生活をするようになることがあるでしょう。快適な住居に引っ越したり、家計に余裕ができたりするかもしれませんよ。<br><br>　それに、すごく多忙で、考えるべきことがたくさんあるんですね。おかげで、退屈と無縁の日々にもなるはずです。些細なことに悩む暇などなくなりますから。それまで心配していたことが、「何とかなるか」と気楽に構えられるようにもなりそうです。慌ただしく毎日を過ごし、あっという間に1年が終わっていることもあるかもしれませんよ！',
'　仕事で変化が起きると、心機一転するでしょう。新たな価値観が宿り、それまでとは違うことに魅力を感じるようになりますよ。それまで「これだけは外せない」と思っていたことが、「どうでもいいかな……」になることがあるんですね。<br><br>　それに、職場や職種が変われば、生活習慣や生活リズムが改善されることもあります。その結果、それまでよりも健康的に暮らせるようになることもあるでしょう。<br><br>　場合によっては、[%NAME_SELF%]さんが望まない変化ということもあるんですよ。しかし、この1年は、あえて流れに身を任せるようにしてみてください。そうすれば、理想的な生活レベルを手に入れられることになるでしょう。',
		),
		);
?>