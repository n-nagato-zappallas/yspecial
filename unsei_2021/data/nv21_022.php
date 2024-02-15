<?php
/**
 * menu_id : nv21_022
 * シウマ：一人用 仕事お金
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'nv21_022',
			'contents'			 => 'shiuma2_zap',
			'img_name'			 => 'zap_shiuma2',
			'teller_name'		 => 'シウマ',
			'isp_mid'			 => '53j022',
			'nif_menukey'		 => 'unsei_2021_022',
			'price'				 => '1000',
			'discount'			 => '900',
			'design_cd'			 => '10',
			'person'			 => '1',
			'category_name'		 => 'work',
			'release_date'		 => '20201201',
			'title'				 => 'シウマが占う【あなたの2021年仕事運】伸びる能力/失敗/仲間/転職',
			'caption'			 => '訪れる2021年、この年はあなたの仕事環境や状況はどのように変化していくのでしょうか？　今話題沸騰中のシウマが、あなたの伸びる能力、失敗しやすいこと、転職や独立についてお伝えします。2021年も良い年を送りたいのであれば、見ておくことをおススメします！',
            'base_1_title_self' => 'あなたの数字',
            'base_2_title_self' => 'あなたの基本性格',
            'base_1_title_other' => 'あの人の数字',
            'base_2_title_other' => 'あの人の基本性格',
            '1_min_title'  => '【2021年】あなたの能力で格段にのびていくもの',
            '2_min_title'  => '【2021年】大切にしてください。あなたの背中を押してくれる強い仲間',
            '3_min_title'  => '【2021年】気を付けて！　あなたが仕事上で失敗しやすいこと',
            '4_min_title'  => '【2021年】思い切って転職や独立するのはアリ？　ナシ？',
            '5_min_title'  => '',
            '6_min_title'  => '【2021年】転職や独立をする上で、あなたが気を付けたほうがいいこと',
            '7_min_title'  => '【2021年】職場の人間関係が上手くいかないときの対処法',
            '8_min_title'  => '【2021年】あなたが仕事を頑張る上で心掛けておくべき生活習慣',
		);

// 小メニューロジック
$logic = 'b1';

// Next枠
$next = array( "nv21_021", "nv21_023" );

// 一部見せテキスト
$free = array(
		array( "nv21_022_1", 
'　2021年は、交渉能力が伸びていくでしょう。幸運にもさまざまな人との出会いに恵まれるようです。[%NAME_SELF%]さん自身、相手に強く興味を抱くため、「親しくなりたい」という気持ちで近づいていけます。<br><br>　なかなか個性的な人が多く、そうした人たちとどうすれば有意義な時間を過ごせる……',
'　2021年、[%NAME_SELF%]さんはサポート能力が各段に伸びていくでしょう。実際、自分のことよりも、他人のことに取り組む機会も増えそうです。自然と相手が今、何を望んでいるのか、求めているのかがわかり、きちんと応えられるようになります。人や状況の観察力や洞察力が高まるということ。そうした動きは……',
'　2021年、[%NAME_SELF%]さんはアピール力が各段に伸びていくでしょう。面白いことや、楽しいことが次々と浮かんでくるようです。それを「実現したい」という気持ちが高まるため、自然と周りにも積極的に働きかけるようになるでしょう。<br><br>　そんなあなたの熱意は、どんどん周りの人たちの……',
'　2021年は、芸術的感性が各段に伸びるでしょう。いい意味で人が思いつかないアイデアや発想が湧いてくるようになります。面白い企画もどんどん生まれてくるはず。またそれをアピールする能力も出てくるので、企画や発想が採用され、実現が可能になっていくでしょう。それは、あなたのアピールが周りの人を巻き込み……',
'　2021年、あなたは実行力が高まり、取り組む仕事では必ず周囲が期待する以上の結果を出せるようになります。それは、これまで[%NAME_SELF%]さんが努力してきたことや失敗も含めて経験してきたことがすべて実になるから。<br><br>　自身が「こうだ」と思ったことを信じて躊躇せずに進んでいくと……',
'　2021年、[%NAME_SELF%]さんは成長する能力が各段に伸びていきます。例えば、目標設定をあえて高くします。そうすると、その目標を達成するために、自分が何をどうしていけばいいのか、どこに重点を置いたらいいのかということまで考えて、それを実行していけるのです。<br><br>　そうすることで……',
'　2021年の[%NAME_SELF%]さんは、実現力が各段に伸びていきます。「やりたい」と思っていたことにチャレンジすると、予想以上の結果を出していくことができるでしょう。<br><br>　それは、これまであなたが努力してきたことや、経験から学んだことがしっかりと発揮することができるから。それこそ……',
'　2021年、あなたは新たな道を切り開く能力が伸びるでしょう。「もっと、こういうところを変えたら良くなるはず」と思っていることがあるなら、思い切って変えるといいですよ。実は、そう考えているのは[%NAME_SELF%]さんだけではなくて、他にもいる可能性は高いようです。<br><br>　あなたが……',
'　2021年、[%NAME_SELF%]さんは先を見て動く能力が各段に伸びていきます。人や周りの状況を見て、自分がとるべき行動がわかるのです。直感力が鋭くなるのでしょう。素晴らしいのは、何をするべきかわかると、実際にそれを行動として出していけること。そして、行動することでどんどん状況が良くなっていく……',
		),
		array( "nv21_022_2", 
'　「なぜあの人はいつもうまくいくのだろう？」と思いながら見ている人が近くにいると思います。あるいは「あの人のようになりたい」と思っている人。<br><br>　2021年の[%NAME_SELF%]さんは、なかなか自分の思い通りにいかない、できない、という状況に陥る可能性があるでしょう。そういうときは……',
'　[%NAME_SELF%]さん自身が「この人を支えたい」と心から思えるリーダーに恵まれるはずです。仕事ができるのはもちろんですが、その人はあなたの働きぶりもちゃんと評価してくれますし、いずれはあなたが表に出て活躍できるようにも取り計らってくれます。<br><br>　そういう意味では、あなたに対して……',
'　どんどん溢れ出てくるアイデアも、周りからの承認がなければ具体的な動きをとれません。おそらく、[%NAME_SELF%]さんのアイデアをすぐには受け取らず、ダメ出しをしてくる上司や先輩がいるでしょう。それこそ、「この人がいなかったらスムーズに進むのに」と思うかもしれません。<br><br>　でも……',
'　多くの素晴らしいアイデアが生まれてくる[%NAME_SELF%]さんは、自分の発想をそのまま形にしていきたいと思うはず。<br><br>　ただ、そのアイデアに対してプラスアルファの意見を口にしてくる人が現れます。基本的にあなたの意見は尊重するのですが、「そうするなら、もっとこうしたほうがいい」と……',
'　[%NAME_SELF%]さんが仕事上で尊敬し憧れている人がいたら、その人との交流を積極的に求めていくといいでしょう。また、職場以外でも、何かの分野で成功している人との交流は大事にするといいですよ。<br><br>　そうした人から聞く話は、あなたにプラスの刺激を与えるはず。そして、あなたが成功し……',
'　向上心も高まる年になります。仕事上で[%NAME_SELF%]さんのプラスになる仲間は、好奇心が旺盛で多くの人との交流を持ち、さまざまな経験をしている人。その人との交流は、すべてにおいてプラスの刺激になります。<br><br>　また、その人は[%NAME_SELF%]さんがやろうとすることを……',
'　自身とは考え方や感性の異なる年下の人が[%NAME_SELF%]さんに良い影響を与えることになります。あなたにはない発想で、いろいろな意見を述べてくるはず。<br><br>　また相手も、自分と異なる感性を持つあなたの考え方が面白くて、いろいろ吸収したいという気持ちで協力的な態度をとって……',
'　[%NAME_SELF%]さんとは異なるやり方で、仕事をしている人がいると思います。ときには、意見や考えがぶつかることもあるかもしれません。でもそれは、気に入らないからではなく、お互いに相手を認めているところがあるからなんです。<br><br>　2021年は、あなたにとって変化のとき。仕事において……',
'　この年、[%NAME_SELF%]さんの勢いは止まらなくなるでしょう。でも、そういうあなたに何かしら注意をしてくる人がいます。その人から向けられる言葉は、あなたにとって煩わしいものになるかもしれません。それは、せっかくの勢いを止めて立ち止まってしまうことになるから。<br><br>　だけど……',
		),
		array( "nv21_022_3", 
'　気持ちの上ではやる気があるので、つい無理をしてしまうようです。例えば、経験的にも時間的にもできるかどうかわからない……ということも引き受けてしまってうまくいかないという状況。結果として周囲に迷惑を……',
'　頼まれたら断れない、困っている人を見ると放っておけなくなる。それが2021年の[%NAME_SELF%]さんです。こうした姿勢が今後のあなたにプラスになっていく部分は大きいのですが、いろいろなことを……',
'　面白いアイデアが浮かぶと、つい嬉しくて話したくなるでしょう。特にこの年は、人とのコミュニケーションも活発になるので、会話にも花が咲いて、おしゃべりが過ぎてしまうようです。そして、つい口にした……',
'　アイデアを出したのは自分、という気持ちがあるため、自分ひとりであらゆることを進めていこうとするでしょう。そのほうが早いとか、確実だと考えるからです。でもそれが失敗を招く行動になるようです。ひとりで……',
'　この年、仕事において[%NAME_SELF%]さんには良くも悪くもいろいろなところから多くの情報が入ってきます。それがあなたを迷わせてしまうようです。迷いながら動くことで、思うような結果を……',
'　2021年、[%NAME_SELF%]さんは本当にあらゆることに恵まれていきます。中でも協力者に恵まれるでしょう。そのため、「してもらって当たり前」という感覚が生まれてくるのです。周囲への感謝を忘れ……',
'　これまでの努力の結果、大きなチャンスを得られるでしょう。そこで「絶対に失敗したくない」と[%NAME_SELF%]さんはカチカチに力が入るのです。慎重になり過ぎて、頭では「こうしたほうがいい」と……',
'　今までの自分のやり方や、職場の風潮といったものにこだわり過ぎて、チャンスを逃したり、結果を出せなかったりするという失敗をするかもしれません。そうなると[%NAME_SELF%]さんに対する周囲の評判も……',
'　凄まじい勢いに乗っていくので、疲れ知らずになります。仕事も楽しくて夢中になりますよ。悪いことではないのですが、自身が思うよりもずっと、体は疲れていくようです。無理がたたって、体調を崩し、大事な仕事に……',
		),
		);


// 結果テキスト
$text = array(
		array( "nv21_022_1", 
'　2021年は、交渉能力が伸びていくでしょう。幸運にもさまざまな人との出会いに恵まれるようです。[%NAME_SELF%]さん自身、相手に強く興味を抱くため、「親しくなりたい」という気持ちで近づいていけます。<br><br>　なかなか個性的な人が多く、そうした人たちとどうすれば有意義な時間を過ごせるのか、考えながら接していけます。何かと気を使うことも多くなるかもしれません。でもそれが、交渉能力を高めることに繋がっていきます。職場での人間関係はもちろん、取引先など仕事で関わる外部の人とも円滑な関係を築けるようになり、仕事にもプラスに働いていきますよ。',
'　2021年、[%NAME_SELF%]さんはサポート能力が各段に伸びていくでしょう。実際、自分のことよりも、他人のことに取り組む機会も増えそうです。自然と相手が今、何を望んでいるのか、求めているのかがわかり、きちんと応えられるようになります。人や状況の観察力や洞察力が高まるということ。そうした動きは上の人からも高く評価され、特にリーダー的立場で仕事をこなしている人からは重宝されます。<br><br>　表向きはその人がリーダーですが、そのリーダーの成功の支えとなるのは、間違いなくあなたです。一目置かれる存在になるでしょう。',
'　2021年、[%NAME_SELF%]さんはアピール力が各段に伸びていくでしょう。面白いことや、楽しいことが次々と浮かんでくるようです。それを「実現したい」という気持ちが高まるため、自然と周りにも積極的に働きかけるようになるでしょう。<br><br>　そんなあなたの熱意は、どんどん周りの人たちの心を掴んで巻き込んでいくことになります。たくさんの協力が得られるということ。そのため、最初は「そんなのは無理だ」と思われるような大きなことも、実現することができるでしょう。企画力やプレゼン能力も高まるので、やりたいことができる状態になります。',
'　2021年は、芸術的感性が各段に伸びるでしょう。いい意味で人が思いつかないアイデアや発想が湧いてくるようになります。面白い企画もどんどん生まれてくるはず。またそれをアピールする能力も出てくるので、企画や発想が採用され、実現が可能になっていくでしょう。それは、あなたのアピールが周りの人を巻き込み、みんなが協力をするようになります。<br><br>　仕事は楽しくなる一方で、やりがいも強く感じられるようになりますよ。そのことがまた原動力となって、さらに良きアイデアが生まれるという素晴らしい循環が生まれて活躍することができるでしょう。',
'　2021年、あなたは実行力が高まり、取り組む仕事では必ず周囲が期待する以上の結果を出せるようになります。それは、これまで[%NAME_SELF%]さんが努力してきたことや失敗も含めて経験してきたことがすべて実になるから。<br><br>　自身が「こうだ」と思ったことを信じて躊躇せずに進んでいくといいでしょう。そして、周りが良しとするよりも、ワンランク上の状態を目指していくことを心がけると、それに沿った情報が入ってきたり、協力を得られたりして、自然とレベルアップしていきます。自分が思うように事が運んでいくので、仕事もどんどん楽しくなっていくはずです。',
'　2021年、[%NAME_SELF%]さんは成長する能力が各段に伸びていきます。例えば、目標設定をあえて高くします。そうすると、その目標を達成するために、自分が何をどうしていけばいいのか、どこに重点を置いたらいいのかということまで考えて、それを実行していけるのです。<br><br>　そうすることで、「ちょっと難しいかな」と思っていたことも、できるようになります。そうやってどんどん成長していくので、着々と「なりたい自分」にも近づいていくでしょう。そして、気付いたら自分には無理だと思っていたことも、スマートにこなせるようになっています。',
'　2021年の[%NAME_SELF%]さんは、実現力が各段に伸びていきます。「やりたい」と思っていたことにチャレンジすると、予想以上の結果を出していくことができるでしょう。<br><br>　それは、これまであなたが努力してきたことや、経験から学んだことがしっかりと発揮することができるから。それこそ、これまでの努力が評価されて、大きな仕事を任される可能性もあります。プレッシャーを感じるかもしれませんが、そこで縮こまったり、肩に力を入れ過ぎたりせず、やりたいことができるという喜びのもと、楽しみながら仕事と向き合うと、どんどん良い方向に進んでいくでしょう。',
'　2021年、あなたは新たな道を切り開く能力が伸びるでしょう。「もっと、こういうところを変えたら良くなるはず」と思っていることがあるなら、思い切って変えるといいですよ。実は、そう考えているのは[%NAME_SELF%]さんだけではなくて、他にもいる可能性は高いようです。<br><br>　あなたが勇気を出して提案することで、賛同し協力する人も数多く出てきて、状況を動かすことができるでしょう。そしてあなたが先頭に立って動くことで、やりたいが実現していきます。それによってあなたを始め、周りのみんなも働きやすい環境になっていくのです。',
'　2021年、[%NAME_SELF%]さんは先を見て動く能力が各段に伸びていきます。人や周りの状況を見て、自分がとるべき行動がわかるのです。直感力が鋭くなるのでしょう。素晴らしいのは、何をするべきかわかると、実際にそれを行動として出していけること。そして、行動することでどんどん状況が良くなっていくので、あなたも自分に自信を持つようになります。<br><br>　それこそ「こうだ」と思ったら、即行動しましょう。その勢いは増していく一方で、周囲からも高く評価されるようになります。大きな仕事を任されるようにもなり、期待以上の結果を出していくでしょう。',
		),
		array( "nv21_022_2", 
'　「なぜあの人はいつもうまくいくのだろう？」と思いながら見ている人が近くにいると思います。あるいは「あの人のようになりたい」と思っている人。<br><br>　2021年の[%NAME_SELF%]さんは、なかなか自分の思い通りにいかない、できない、という状況に陥る可能性があるでしょう。そういうときは、うまくいかない自分を恥じたり、卑下したりせず、あなたから見て「あんなふうになりたい」と思う人に相談したり、その人の言動をよく観察したりするといいですよ。上昇するためのいいヒントやアドバイスが得られますし、順調な人を見ることで、力も湧いてくるでしょう。',
'　[%NAME_SELF%]さん自身が「この人を支えたい」と心から思えるリーダーに恵まれるはずです。仕事ができるのはもちろんですが、その人はあなたの働きぶりもちゃんと評価してくれますし、いずれはあなたが表に出て活躍できるようにも取り計らってくれます。<br><br>　そういう意味では、あなたに対して、いろんなアドバイスや要望をしてくるはず。少し面倒で無理な要望をしてくることもあるでしょう。しかしそれは、あなたが力をつけて飛躍するために必要なことと繋がっているのです。「この人のためなら」と思う人にしっかりと尽くすことで、大きな恩恵を得られるでしょう。',
'　どんどん溢れ出てくるアイデアも、周りからの承認がなければ具体的な動きをとれません。おそらく、[%NAME_SELF%]さんのアイデアをすぐには受け取らず、ダメ出しをしてくる上司や先輩がいるでしょう。それこそ、「この人がいなかったらスムーズに進むのに」と思うかもしれません。<br><br>　でも、その人のダメ出しがあることで、あなたの企画やアイデアもさらなる磨きがかかっていくのです。その人も「あなたならもっといいアイデアを出せるはず」だとわかっているからこそ、一度では受け取らないのです。あなたにとっては面白くない存在かもしれませんが、厳しさの中に愛情を持っている素晴らしい人だといえるでしょう。',
'　多くの素晴らしいアイデアが生まれてくる[%NAME_SELF%]さんは、自分の発想をそのまま形にしていきたいと思うはず。<br><br>　ただ、そのアイデアに対してプラスアルファの意見を口にしてくる人が現れます。基本的にあなたの意見は尊重するのですが、「そうするなら、もっとこうしたほうがいい」と提案をしてくるのです。あなたとしてはあまりいい気分ではないかもしれません。でもその人が言っていることは、あなたが見落としている部分をしっかりと補う意見になるのです。その人の話を聞き入れることで、あなたは完璧な結果を出すことができるでしょう。',
'　[%NAME_SELF%]さんが仕事上で尊敬し憧れている人がいたら、その人との交流を積極的に求めていくといいでしょう。また、職場以外でも、何かの分野で成功している人との交流は大事にするといいですよ。<br><br>　そうした人から聞く話は、あなたにプラスの刺激を与えるはず。そして、あなたが成功していくために必要なヒントもたくさん得られるでしょう。それらをしっかりと受け止めて、取り入れることができたら、あなたが仕事において「こうなりたい」と思っていた状況がどんどん現実化していきますよ。成功している人の存在は、あなたにとって良き原動力になります。',
'　向上心も高まる年になります。仕事上で[%NAME_SELF%]さんのプラスになる仲間は、好奇心が旺盛で多くの人との交流を持ち、さまざまな経験をしている人。その人との交流は、すべてにおいてプラスの刺激になります。<br><br>　また、その人は[%NAME_SELF%]さんがやろうとすることを、誰よりも面白がり、快く協力してくれますし、自身の人脈などを駆使して、いい情報を教えてくれたり、良き人脈と繋げてくれたりします。あなたの考えに対して反対する人がいても「気にする必要はない」とその人がハッキリ言い切ってくれるおかげで、あなたも自分を信じた道を突き進むことができるでしょう。',
'　自身とは考え方や感性の異なる年下の人が[%NAME_SELF%]さんに良い影響を与えることになります。あなたにはない発想で、いろいろな意見を述べてくるはず。<br><br>　また相手も、自分と異なる感性を持つあなたの考え方が面白くて、いろいろ吸収したいという気持ちで協力的な態度をとってくれるでしょう。それこそあなたが、大きな仕事を任されてプレッシャーに押しつぶされそうなとき、その人の言葉があなたの気持ちを楽にして、背中を押すものになっていきます。考え方が違うからといって苦手意識を持たず、積極的にその人物との交流を楽しむといいでしょう。',
'　[%NAME_SELF%]さんとは異なるやり方で、仕事をしている人がいると思います。ときには、意見や考えがぶつかることもあるかもしれません。でもそれは、気に入らないからではなく、お互いに相手を認めているところがあるからなんです。<br><br>　2021年は、あなたにとって変化のとき。仕事において、あなたが変わりたい、変わろう、とすることはプラスに繋がっていきます。変わることは、思った以上にエネルギーが必要ですが、この人物はあなたに力を与えてくれますよ。それは、あなたが変わろうとするスタイルがこの人が目指すものと近いからです。',
'　この年、[%NAME_SELF%]さんの勢いは止まらなくなるでしょう。でも、そういうあなたに何かしら注意をしてくる人がいます。その人から向けられる言葉は、あなたにとって煩わしいものになるかもしれません。それは、せっかくの勢いを止めて立ち止まってしまうことになるから。<br><br>　だけど、ほんの一瞬でも立ち止まって考えてみることで、あなたは注意深くなり、起こりそうなトラブルを無事に避けることができるのです。その人は、あなたが前進するのを抑えるのではなく、よりスムーズに前へと進めるように背中を押してくれるのですよ。',
		),
		array( "nv21_022_3", 
'　気持ちの上ではやる気があるので、つい無理をしてしまうようです。例えば、経験的にも時間的にもできるかどうかわからない……ということも引き受けてしまってうまくいかないという状況。結果として周囲に迷惑をかけてしまうでしょう。[%NAME_SELF%]さんへの信頼も危うくなります。こうした失敗の主な原因になるのは、知識やスキルが足りないところにあるようです。<br><br>　やる気はあるので、失敗すると余計に結果を出したくなる気持ちもわかりますが、2021年はスキルアップのための勉強や資格取得に力を入れると、今後の飛躍に繋げることができるでしょう。',
'　頼まれたら断れない、困っている人を見ると放っておけなくなる。それが2021年の[%NAME_SELF%]さんです。こうした姿勢が今後のあなたにプラスになっていく部分は大きいのですが、いろいろなことを請け負い過ぎて、本来やるべきことが疎かになってしまうという状況に陥る恐れも出てきます。常に、今自分は何をするべきなのかを考えて、それを優先して動くようにしましょう。<br><br>　人助けについては、余裕があれば請け負うようにするのが賢明です。アドバイスをする程度で実際には本人に動いてもらうくらいが丁度いいですし、相手のためにもなります。',
'　面白いアイデアが浮かぶと、つい嬉しくて話したくなるでしょう。特にこの年は、人とのコミュニケーションも活発になるので、会話にも花が咲いて、おしゃべりが過ぎてしまうようです。そして、つい口にしたアイデアが、他人に盗まれてしまう……という恐れが出てくるでしょう。あるいは、まだ内々で進めていることを、うっかり話して情報が洩れてしまうということもあるかもしれません。それが取り返しのつかない失敗となる可能性もあります。<br><br>　ですからこの年の会話には十分に注意をしましょう。「この仕事の話は外ではしない」と決めておくのもいいですよ。',
'　アイデアを出したのは自分、という気持ちがあるため、自分ひとりであらゆることを進めていこうとするでしょう。そのほうが早いとか、確実だと考えるからです。でもそれが失敗を招く行動になるようです。ひとりで何もかもをこなすには、時間が足りないからです。せっかくいい考えでも、思い通りの結果にはならず、周りの期待にも応えられないということになるでしょう。<br><br>　周囲の協力を得て、自分がやるには難しい部分は人に任せるという姿勢をとったほうが、いい結果を残し、期待にも応えることができて評価されますよ。',
'　この年、仕事において[%NAME_SELF%]さんには良くも悪くもいろいろなところから多くの情報が入ってきます。それがあなたを迷わせてしまうようです。迷いながら動くことで、思うような結果を出せなかったり、普段は決してしないようなミスをしたりする可能性が出てくるでしょう。<br><br>　今あなたがやろうとすることに対して、本当に必要なものは何なのか……あなたにとってプラスの情報とそうではない情報をしっかりと見極めることが大切になります。その中で「こうする」とあなた自身が決断して動いたことに、満足する結果がついてくるでしょう。',
'　2021年、[%NAME_SELF%]さんは本当にあらゆることに恵まれていきます。中でも協力者に恵まれるでしょう。そのため、「してもらって当たり前」という感覚が生まれてくるのです。周囲への感謝を忘れてしまう可能性があるということ。それは味方だった人を敵にすることに繋がっていきます。順調に進んでいたことも、あっという間に崩れてしまうでしょう。<br><br>　謙虚であること、そして常に感謝の気持ちを忘れないこと。それは決して難しいことではなく、あなたにとっては当たり前のことですが、忘れやすいときなので、しっかりと肝に銘じて過ごしていきましょう。それが失敗を回避する大事な鍵になります。',
'　これまでの努力の結果、大きなチャンスを得られるでしょう。そこで「絶対に失敗したくない」と[%NAME_SELF%]さんはカチカチに力が入るのです。慎重になり過ぎて、頭では「こうしたほうがいい」とわかっているのに、失敗するのが恐くて動けなくなる可能性があるようです。動かないことでチャンスを逃し、成功をふいにすることにもなりかねません。<br><br>　これまで、あなたが努力してきたことは、力として発揮できる状態です。今のあなたが「こうだ」と思うことは、間違いありません。自分の考えに従って力強く動いていくこと。それが成功を手にするポイントになるので、自信を持ってください。',
'　今までの自分のやり方や、職場の風潮といったものにこだわり過ぎて、チャンスを逃したり、結果を出せなかったりするという失敗をするかもしれません。そうなると[%NAME_SELF%]さんに対する周囲の評判も落ちてしまいそうです。あなた自身、本当は自分がどこで何をすれば良かったのかわかるはずです。でもそれは、これまで自分がやってきた方法とは異なることなので、失敗のリスクを考えてできないのでしょう。<br><br>　やり方を変えるというのは勇気のいることですが、柔軟に対応することは大切です。こだわりを捨てて変化を取り入れることで失敗は回避できますよ。',
'　凄まじい勢いに乗っていくので、疲れ知らずになります。仕事も楽しくて夢中になりますよ。悪いことではないのですが、自身が思うよりもずっと、体は疲れていくようです。無理がたたって、体調を崩し、大事な仕事に穴をあけてしまうということになるかもしれません。<br><br>　この年、仕事はもちろんですが、あらゆる事柄において、あなたが注意すべきは体調管理です。当たり前のことですが、どんなに才能があっても、健康でなければ発揮することはできません。しっかりと休息もとること。体力を過信しないようにしましょう。食生活にも気をつけてくださいね。',
		),
		array( "nv21_022_4", 
'転職や独立をするには、足りないものや準備不足のものがあります。必要な知識や技術を吸収して地固めをしましょう。',
'転職や独立をするには、まだ準備不足なところがあります。そこを万全にしていけるのが2021年になるでしょう。',
'新しいことにチャレンジするのに適している年。独立や転職をすることで、やりたいことが存分にできるでしょう。',
'転職や独立の成功には、周りの人の意見やアドバイスが鍵になります。動く前に、まずは相談するといいでしょう。',
'ハッキリとした目標と目的意識を持って自信があれば、転職も独立も[%NAME_SELF%]さんのステップアップと成功に繋がっていきます。',
'目標設定を高くするなど、あえて自身にプレッシャーをかけた転職と独立にすることが大成する鍵になります。',
'転職や独立は、やりたいことができる未来に向かうきっかけになります。楽しむことでそれが叶っていきます。',
'今まで表に出てこなかった才能が開花していくきっかけになります。変わることは[%NAME_SELF%]さんにとってプラスだと信じてください。',
'「これだ」と思って動く転職や独立は、成功への扉を開けたということ。あとは迷わず真っ直ぐ進んでいくだけです。',
		),
		array( "nv21_022_5", 
'　新しい動きに出たい、という気持ちが出てくるかもしれません。でも2021年は、なかなか思い通りに事が運びにくいときで、体を使うよりも頭を使うのに適しています。<br><br>　転職や独立をするにしても、それで成功するためには、「自分がもっとこうならなければいけない」というものがあるはずです。例えばもっと太い人脈があったほうがいいとか、こういう資格があったほうが独立には有利だ、というもの。それらをしっかり自分のものにしていくことが賢明です。転職や独立をするよりも、そのための準備をして地盤を固めていくのにいい年になります。',
'　転職や独立は、あなたにとって次に進むために必要なことだと考えるのかもしれません。ですが2021年は、次に進むための準備をしたほうが良いときになります。<br><br>　特に人当たりの良い印象を与える年になるので、積極的に人とコミュニケーションをとっていくことがおすすめです。良き人脈を得られますよ。それこそ2021年に働く環境においては、素晴らしい人脈との繋がりを得られるはずです。そうした人たちから、成功を手にしていくためのヒントやノウハウも多く学べるでしょう。この年に得る人脈は今後の仕事において宝になっていきます。',
'　2021年、新しいことにチャレンジするのには適しています。転職や独立にも向いているということ。さまざまなアイデアが出てくるので、今身を置いている環境では、活かしきれなくなるかもしれませんね。<br><br>　交友関係も広がるときで、素晴らしい人脈も得ていきます。その中で、独立や転職への意識も高まるようです。また、その人たちから良きアドバイスやノウハウも授けられるでしょう。それらをしっかりと活かして行動に出ても大丈夫です。それこそ、あなたの発想力が買われて、スカウトされる可能性も高いです。条件に魅力を感じたら話を受けるといいでしょう。',
'　いいアイデアや発想が次々と生まれてくる。ということに加えて、人との縁もできやすいときなので、素晴らしい人脈も得られるでしょう。[%NAME_SELF%]さんが転職や独立を望むのであれば、その人脈によって、道を切り開いていくことができるはずですよ。[%NAME_SELF%]さんの能力が活かされ、周囲から高く評価されるだけの結果を出していけるのです。この年、新しい動きに出ていくことは、あなたにとって仕事の可能性を広げていくことに繋がっていきます。<br><br>　しっかりと目的を持った上での転職や独立をするのであれば、成功は約束されるといってもいいでしょう。',
'　転職後、独立後に[%NAME_SELF%]さん自身がどういうふうに進んでいきたいのかというハッキリとした目的や目標を持っていて、自信のある状態で転職や独立をするのであれば、それは大きなステップアップに繋がっていきます。<br><br>　しかし、「大丈夫だろうか？」、「自分にできるだろうか？」といった迷いや不安があるなら、行動しないのが賢明です。この年は迷うことが一番の敵になると思っていいでしょう。つまり、何の迷いもなく、真っ直ぐに前だけを見据えられる状態からの転職と独立ならば、成功に繋がっていくということです。',
'　大きな成長を遂げるチャンスです。思い切って転職や独立をするのにはいいとき。迷わずに挑戦しましょう。ただし、抱えている仕事を中途半端にせず、やるべきことはきちんとこなして、結果を出すことが大切です。<br><br>　また、転職や独立をするなら、レベルの高いところへの転職、難易度の高い結果を出すことを公言した独立にするといいです。ハードルを上げるのは恐いかもしれませんが、この年のあなたは自らハードルを上げることで、それを乗り越える力をつけられるのです。自分の力を信じて、より大きな成功を手にするための転職や独立にしましょう。',
'　仕事においてあなたが本当にやりたかったことができる状況になるので、転職や独立に向けて動くのにとても良い年になります。すぐに、思い通りにはいかないかもしれませんが、そんなときは「失敗は許されない」と変に力を入れ過ぎず、思いっ切り楽しもうという気持ちで仕事と向き合うことが大切。<br><br>　楽しい気持ちが楽しい仕事を呼び込むでしょう。転職や独立をして成功する自分をいつもイメージするのも効果的です。楽しみながらひとつひとつ仕事をこなすことは、なりたい自分に一歩一歩近づくことです。',
'　変化のときとなる2021年に、転職や独立をするのは、大きく飛躍することに繋がっていきます。<br><br>　この年、[%NAME_SELF%]さんが考える転職や独立は、今まで自身が取り組んできた仕事や、仕事のやり方とは大きく異なるものへと意識が傾くでしょう。だからこそ、「できるだろうか……」という不安も出てくると思います。でも、そうしたことに意識が傾くのは、その変化の中に可能性を感じるからです。転職や独立は、新たな才能を開花させて、大きく飛躍するきっかけになるはず。恐れず、自分に自信を持って行動するといいでしょう。',
'　エネルギッシュに前進できるときなので、転職や独立はさらなる発展と飛躍に繋がるでしょう。おそらく、「これをやったらうまくいく」というのが、わかるはずです。そういう考えが出てきたら、迷わず動きましょう。<br><br>　ただ、周りからは反対されるかもしれません。「うまくいはずがない」という声も向けられると思います。ですが、この年、あなたが思いつくことに間違いはありません。周りも悪気があるわけではなく、あなたの先読みが鋭いので、それについていけないだけなんです。あなたが「いい」と思う道は、成功へと繋がっていますよ。',
		),
		array( "nv21_022_6", 
'　もし、転職や独立をするなら、何でも自分ひとりで背負い込まないようにしましょう。すでに転職、独立をしている友人や知人の助けを借りること。いろいろと貴重なアドバイスや意見を授けてくれるはずです。また話を聞くことで、ピンポイントで自分が今すべきこともわかるはずです。つまり無駄な動きがなくなり、最短で最適な転職と独立を果たせるということ。<br><br>　また、事を急いでプロセスを面倒がらないことも大切です。今できること、やるべきことを地道に取り組んでいくことは決して遠回りではなく、一番の堅実な道であることを忘れないようにしましょう。',
'　もし、転職や独立をするなら、自身の利益や有益ばかりを考えて動かないほうがいいです。もちろん、転職も独立も自身のさらなる活躍と飛躍のために起こす行動なのはわかりますが、そのことを前面に出してしまうと、かえって周りから足を引っ張られるなどして後悔する恐れがあります。<br><br>　転職や独立のときも、「誰かのために役立ちたい」、「今よりも人のために働きたい」ということを軸に置いて動き、決断するといいですね。そういう気持ちで動いていくことによって、あなたにとってプラスの情報や素晴らしい人脈を引き寄せることができるでしょう。',
'　転職や独立にいい年なのは確かですが、後先を考えず勢い任せになってしまうのは気をつけたほうがいいでしょう。大きな決断になるので、ある程度勢いは大切ですが、計画を立てて進めていくことも大事です。独立や転職をして、自分は何をしたいのか、その後どんなふうにしていきたいのか。それを実現するために、何が足りなくて、今何をすべきなのか……といったことをしっかりと考えましょう。<br><br>　面倒かもしれませんが、しっかりと土台を築くことは大切です。何よりもそれが、独立と転職によって成功を手にするための鍵になります。',
'　実際に転職や独立をするのは[%NAME_SELF%]さん自身です。だからこそ、自分の考えで動こうとする気持ちになるのもわかります。ただそれは、失敗を招く恐れがあるのです。何よりも、この年、あなたの周りには、いろんな意味で実力者たちがいるはずです。自分の思うように動きたいかもしれませんが、その人たちの話を聞いて意見やアドバイスを素直に取り入れていくことが成功には必要なこととなります。<br><br>　今の自分を過信しないよう注意しましょう。挑戦者として、成功者の教えを乞う謙虚な姿勢が大事です。この年に恵まれる人脈を大いに活用するといいでしょう。',
'　何よりも一番に気をつけるべきは、迷うことです。転職や独立を真剣に考えるようになると、それに関係する情報がたくさん入ってくるでしょう。その情報量に迷いが出てしまう恐れがあります。情報を得る前に、何のために転職や独立をしたいのか、自分はどうなっていきたいのかということを知るべきです。しっかりとした目的意識があれば、自分にとって本当に必要な情報も見極められるはずです。<br><br>　そして、「これだ」というものがわかったら、あとは迷わず一直線に突き進むこと。それが転職と独立を成功に導くポイントになります。',
'　新しいことに向けて動くとき、どうしても気持ちがあせってしまうのはわかります。ですが、大きな動きをとるときこそ、しっかりと段階を踏んで準備をすることが重要になるのです。<br><br>　転職や独立をするとき、それまでに抱えている仕事を適当にこなしたり、中途半端に終わらせたりすると、悪評が立ち、転職後、独立後に悪影響が及びます。この年に転職、独立をする上で気をつけるべきことは、たとえ面倒でも、しっかりと社会的なルールを守ること。そして義理を欠かないことです。そうすることで、新しい場所でも好スタートを切ることができるでしょう。',
'　転職や独立は、とても大きな決断になります。だからこそ、何としてでも成功させたいという気持ちになるのはわかりますが、失敗したらあとがないと自分を追い詰めないようにしましょう。そんなふうに力んでしまうと、かえって何もできなくなってしまいます。<br><br>　これから先の自分には、明るい未来が開かれていく。そういうイメージを持ちながら、やりたいと思っていたことにどんどんチャレンジしていきましょう。そうすることで、やりたかったことを実現し、イメージしている未来を手にしていくことができますよ。',
'　今までの自分のやり方や考え方にこだわらないことが大切です。変化することは、決して今までの[%NAME_SELF%]さんを否定するものではありません。むしろ、今までのあなたがいたからこそ、変化することの重要性に気付けたり、「こんなふうになりたい」という新たな目標が生まれたりしたのです。<br><br>　そして転職や独立をするときは、柔軟に対応していくこと。今までの自分にこだわって頑固になっていると、うまくいくはずのものも、いかなくなってしまいます。ここからまた新たに生まれ変わるという新鮮な気持ちで、踏み出していきましょう。',
'　直感力に従って動いて良いときです。ただここで働く直感は、今までの[%NAME_SELF%]さんとは大きく異なる動きに出ることになるでしょう。今までの自分へのこだわりは捨てること。それが転職や独立をするときに気をつけることです。<br><br>　実はこの年、「離」の作用も働きます。つまり、過去の自分が大事にしていたこだわりは、手放すべきなのです。手放すべきものは惜しみなく手元から離していくこと。それが、転職と独立を成功に導いていきます。また、決めたら時間を置かないことも大切。すぐに動くことで、勢いを活かせることを覚えておきましょう。',
		),
		array( "nv21_022_7", 
'　基本的に2021年、[%NAME_SELF%]さんの対人運は良好です。ただそれでも、うまくいかない……というときは、あなたが余計な感情に流されてしまうからかもしれません。そういうときは、少し距離をとるといいでしょう。そうすると客観的に見ることができるので、自身がどう対応すればいいのかも自然とわかってくるはずです。<br><br>　また、素直に人の力を借りたり、助けてもらったりすることも大切。敵対するライバルではなく、同じ目的を持って頑張る仲間だという気持ちで向き合っていくといいでしょう。人の長所は素直に認めて尊重し、短所は補ってお互いに助け合う。そういう姿勢を持つといいですね。',
'　基本的に2021年の[%NAME_SELF%]さんは、人当たりの良い印象を与えるので、人間関係は良好です。それでもうまくいかないときは、あなたが、相手のためを思って示す言動が、お節介で押し付けがましくなっている可能性があるでしょう。困っている人や悩んでいる人を見ると、つい何でもしてあげたくなるのです。助けることは悪いことではありません。でも、実際にその状況を乗り越えるのは、本人であるということも意識しておくといいでしょう。<br><br>　人が困難を乗り越えるのを手伝うのではなく見守る、という姿勢を心がけるといいですよ。',
'　楽しい会話を提供できるときなので、基本的に対人関係は良好です。それでも人間関係がうまくいかないという場合、少し余計なことを口にしている可能性が高いでしょう。<br><br>　会話や交流を楽しみたいという気持ちで人と関わるのは非常に良いことですが、時には聞き役に徹して相手を尊重するということを心がけるといいでしょう。そうすることで、良き関係を築くことができるのはもちろんですし、[%NAME_SELF%]さんにとっていい情報やプラスになる話もたくさん入ってきたり、協力を得たりできて、上昇する力も高まっていきますよ。',
'　2021年は協調性が出てくるので、人間関係は基本的に良好な状態です。それでも、うまくいかないときは、おそらく[%NAME_SELF%]さんの自己主張が強くなり過ぎている可能性があるでしょう。人の話を聞かないで、「自分が正しい」と、自身の意見を押し付けてしまうのです。もちろん、悪気はないのかもしれません。<br><br>　ただ、人の意見も大切にして、その流れに合わせて行動していくことも大切です。そういう意識でコミュニケーションをとっていくと、人間関係もスムーズになっていきますし、あなたの才能を引き上げるような素晴らしい人とも出会えます。',
'　2021年に人間関係がうまくいかなくなるとしたら、それはあなたの言動が曖昧でどっちつかずになっている可能性があります。例えば、意見を求められているのに、自分の意見は口にせず、周りに合わせる……というような返事をしてしまっているのでしょう。その姿勢は、やる気のない印象を与えます。<br><br>　逃げ道を作るのはやめましょう。ハッキリと自分の意見を伝えて、自分が「いい」と思うことを行動にも示していくことが大切です。そうすることで、周囲からの信頼を得るのはもちろん、あなたのやろうとすることに協力する人も集まってくるようになりますよ。',
'　人間関係において2021年は、目上の人との付き合いが[%NAME_SELF%]さんに良き成長をもたらします。そうした中で職場の人間関係がうまくいかないという場合、おそらく謙虚さや感謝の姿勢が欠けている可能性があるでしょう。どんなに親しい関係であっても、礼儀を欠いてはいけません。この年は、基本的に成長を得られるときですが、礼儀を欠いていると、妬みを買って周りから足を引っ張られる恐れも出てきます。<br><br>　たとえ年下の相手であっても、謙虚で誠実な対応や、感謝の姿勢をしっかりと心がけて向き合うことで、素晴らしい関係を築くことができますよ。',
'　基本的に対人運は良好です。それでも人間関係がうまくいかないときは、「こんなことを口にしたら嫌われるかもしれない」というようなことを気にしすぎて殻に閉じこもっている可能性があるでしょう。人と向き合うときは、肩の力を抜いて、その場の空間をそこにいる人たちと一緒に楽しもうという気持ちで自分らしく振る舞うといいですよ。そして笑顔でいること、前向きでポジティブな発言を心がけることです。<br><br>　そうすると、楽しい空間が作れるようになって、良好な人間関係を築けるようになるでしょう。交友関係も広げることができますよ。',
'　対人関係においては、少し頑固になりやすい年です。人間関係がうまくいかないとき、[%NAME_SELF%]さんが正しいことと我を通すことを混同して人と接している可能性が高いでしょう。<br><br>　人の意見や考えに対しては「そういう考え方もあるんだな」という柔軟な受け止め方をするといいでしょう。そうすると、周りの人の話も素直に聞けるようになりますし、またあなたにとっていい刺激にもなってプラスの影響を受けられるようにもなります。そしてもちろん、刺激し合える良好な人間関係を築けるようになるでしょう。',
'　基本的に積極的なコミュニケーションをとることができる年になります。そうした中でも人間関係がうまくいかないという場合、何かと前のめりになっている可能性があります。<br><br>　会話をするときも自分ばかりが話したり、自分が「いい」と思うことは相手もそう思っていると強引に物事を進めたりする姿勢になっているということ。その姿勢に周りが引いてしまうのでしょう。周囲も[%NAME_SELF%]さんと同じ感覚や行動力を持っていると思うのは危険です。相手の反応をよく見ながら、コミュニケーションをとるようにすると、良好な関係を築けるようになりますよ。',
		),
		array( "nv21_022_8", 
'知識を学んで吸収するほど、飛躍する力が高まっていくことを覚えておきましょう。',
'人との話では聞き役に回り、行動も人が喜ぶことを心がけて支える存在になりましょう。',
'余計なことは口にせず、控え目な姿勢を心がけることで、[%NAME_SELF%]さんにとってプラスの状況になっていきます。',
'人との出会いや交流を大切にしていくと、あなたのことを引き上げてくれる人が現れます。',
'自身が「こうする」と決めて動いたことは、「必ずできる」と思うことで、成功を手にしていきます。',
'今の自分には難しいと思うことでも、高い目標を掲げるほど成長し、力をつけて実現することができるでしょう。',
'根を詰めて仕事をするよりも、気楽に楽しむ姿勢でいると、成功する可能性が高まります。',
'変化は[%NAME_SELF%]さんの中にある新たな才能を開花させて飛躍に繋がっていきます。変わることが幸せへの一歩。',
'直感力に従って動いていくことで、上昇や前進する勢いがつき、成功を手にしていきます。',
		),
		);
?>