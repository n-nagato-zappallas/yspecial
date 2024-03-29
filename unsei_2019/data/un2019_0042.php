<?php
/**
 * menu_id : un2019_0042
 * 水晶玉子 4月運：一人用
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'un2019_0042',
			'contents'			 => 'suisho_zap',
			'img_name'			 => 'zap_suisho',
			'teller_name'		 => '水晶玉子',
			'isp_mid'			 => '52h041',
			'price'				 => '556',
			'discount'			 => '463',
			'design_cd'			 => '5',
			'person'			 => '1',
			'release_date'		 => '20190325',
			'title'				 => '水晶玉子が占う【2019年4月の運命】あなたの仕事/恋/人脈とチャンス',
			'caption'			 => '2019年4月、あなたにとって一体どんな月になるのでしょうか？　仕事運、恋愛運、対人運から訪れるチャンスまで、オリエンタル占星術の水晶玉子が鑑定します！',
            'base_1_title_self'	 => 'あなたの本命宿',
            'base_2_title_self'	 => 'あなたの基本性格',
            'base_1_title_other' => 'あの人の本命宿',
            'base_2_title_other' => 'あの人の基本性格',
            '1_min_title'		 => '2019年4月、あなたに訪れる仕事運、環境について',
            '2_min_title'		 => '2019年4月、あなたに訪れる恋運命について',
            '3_min_title'		 => '2019年4月、あなたに訪れる対人運、人脈について',
            '4_min_title'		 => '2019年4月、あなたに訪れるチャンス、転機について',
		);

// 小メニューロジック
$logic = 'a1';

// Next枠
$next = array( "un2019_0041", "un2019_0043", "un2019_0044", "un2019_0045", "un2019_0046" );

// 一部見せテキスト
$free = array( "un2019_0042_1", 
'　いつもの行動範囲が広がるような展開へと、物事が動いていくでしょう。<br><br>　交流する人々にも新鮮さが出てきて[%NAME_SELF%]さんへの注目度も高まっていきます。健康的で前向きな印象を……',
'　過去の問題を、引き継ぐような出来事が起こります。以前の担当者の問題を「自分には関係ない」と一線を引くことも間違いではないのですが、この月に起こる負債のように見える物事の裏にはチャンスが潜んでいます。……',
'　協力関係が盛んになりそうなこの4月は、とても楽しげな雰囲気となるでしょう。和気あいあいとした和やかな関わりが、自分の得意分野での助け合いを生み出します。<br><br>　不得意な分野では他者の助けを……',
'　家に仕事を持って帰っているのなら、それは辞めましょう。仕事で生まれる悩みなども同じです。職場とプライベートの境界線を、しっかりと作るようにしてください。そうすることで、本来の生産性の高い動きと感覚が……',
'　一発勝負にかけてみたくなるような衝動と勢いが、あなたの中に生まれるでしょう。持って生まれた勝負運は強いので、周囲を上手に率いていくことができれば、勝負に出ても良いようです。人をまとめる天性のセンスと……',
'　普段は他人に壁を作りがちですが、この月は、とても暖かい理解者たちに支えられるというような体験をするでしょう。<br><br>　役割に非常に忠実なため、普段は自分の感情を犠牲にしながら任務をこなすこと……',
'　あなたと同じ反骨精神を持った、非常に気の合う仲間が生まれるでしょう。間違っていることには絶対に屈しない！　という妥協しない姿勢が、友人を作ります。<br><br>　会話がとても盛り上がりそうですが……',
'　地位、信用、経歴などに心がとらわれそうになったら、深呼吸してネガティブな気持ちを全て吐き出してしまいましょう。<br><br>　他人の環境や待遇が羨ましく思えてしまうのは……',
'　新しい仕事や役割への興味が生まれます。転職をして新しいスタートを切るのかもしれません。これからしばらくの、あなたにとって基本的な運命が生まれるこの4月。長期的な目標に向けて動き出すのに適しています。……',
'　今まで気がつかなかった隠れた敵意や、妨害を感じることが起こります。これに対して、逆心を持って表立った行動をすると墓穴を掘ります。こういう時こそ、見えない場所での努力と力が物をいいます。表舞台ではなく……',
'　4月は、所属している組織や団体としての意識が強くなります。同じ目標や目線を持っている人と行動を共にすることで、非常に有意義な経験と人脈を得られるでしょう。<br><br>　あなたらしい独特の感性が……',
'　あなたの仕事に対する評判が、ダイレクトに入って来ます。サービス精神でやっていたような仕事が、評価へと結びついているようです。<br><br>　あまり個人の名誉にはこだわらないので普段はサポート側を……',
		);


// 結果テキスト
$text = array(
		array( "un2019_0042_1", 
'　いつもの行動範囲が広がるような展開へと、物事が動いていくでしょう。<br><br>　交流する人々にも新鮮さが出てきて[%NAME_SELF%]さんへの注目度も高まっていきます。健康的で前向きな印象を意識することで、リーダーとしての素質が輝き始めます。気がつけば、あなたの意見が最重要視されるようになっていた……ということもあるようです。<br><br>　まとまりのなかったみんなの目標を、一つの同じ方向へと向けることができれば、あなたのリーダーシップ力を認めさせる展開へと繋がるでしょう。情熱の着火点は人によって違います。まずは相手の個性を見つけることから始めてみてください。周囲の人たちに自主的に意欲を持たせるためには、それぞれの個性を活かす必要があるのです。',
'　過去の問題を、引き継ぐような出来事が起こります。以前の担当者の問題を「自分には関係ない」と一線を引くことも間違いではないのですが、この月に起こる負債のように見える物事の裏にはチャンスが潜んでいます。<br><br>　確かに、この問題は簡単には解決できません。「ここで、しっかり解決させる！」という頑固な意志が大切です。[%NAME_SELF%]さんなら、誰もが避けて通ろうとした問題を根気によって解決させることができるでしょう。<br><br>　その結果として、あなたは非常に大きな信頼を得ることになります。信頼というのは、なかなか表面上に現れてこない評価かもしれませんが、この力は莫大です。マイペースで構いませんから、大きな器を持って対処していきましょう。',
'　協力関係が盛んになりそうなこの4月は、とても楽しげな雰囲気となるでしょう。和気あいあいとした和やかな関わりが、自分の得意分野での助け合いを生み出します。<br><br>　不得意な分野では他者の助けを借り、また、出来ることは手を差し伸べる。そういった他者との能力的な交換が、難しいと思われていた取引や交渉事を、意外なほどにスムーズに運ぶでしょう。<br><br>　もともと人間関係は器用ですから、苦にはなりません。普段は関わらない人であっても、積極的に力を借りに行ってください。お礼として、あなたの能力でのお返しをしましょう。上手く周りの人たちと交流できない同僚がいたら助けの手を差し伸べること、これも得意分野での力の交流となります。',
'　家に仕事を持って帰っているのなら、それは辞めましょう。仕事で生まれる悩みなども同じです。職場とプライベートの境界線を、しっかりと作るようにしてください。そうすることで、本来の生産性の高い動きと感覚が蘇るでしょう。<br><br>　体調不良が出ているのなら、職場での過ごし方よりも家の中での過ごし方を変える方が、効果があります。[%NAME_SELF%]さんの聡明さと想像力は、疲れがたまり始めると曇ってきてしまうのです。オンとオフの切り替えを上手にするためには、直接職場から家に帰るのではなく、一度リフレッシュできる場所に寄って帰宅するようにすると良いでしょう。<br><br>　職場での自分の評価が気になってしまうでしょうが、気にしないのが一番です。',
'　一発勝負にかけてみたくなるような衝動と勢いが、あなたの中に生まれるでしょう。持って生まれた勝負運は強いので、周囲を上手に率いていくことができれば、勝負に出ても良いようです。人をまとめる天性のセンスとオーラを遺憾無く発揮するためには、どんなことでも有言実行である姿が大切。<br><br>　自己中心的な「イチかバチか……」というような賭けは、思わぬトラブルを招きかねません。たとえ成功したとしても評価を得ることはできないので、自分の感情を律することも大事です。<br><br>　何のためにやるのかという部分に至極まっとうな理由と正義があれば、強引な方法を取らなくても支持者は集まります。それは、今後あなたを中心とした勢力となっていくでしょう。',
'　普段は他人に壁を作りがちですが、この月は、とても暖かい理解者たちに支えられるというような体験をするでしょう。<br><br>　役割に非常に忠実なため、普段は自分の感情を犠牲にしながら任務をこなすことも多いのではないでしょうか。嫌われ役でもみんなのために必要であれば頑張る……。[%NAME_SELF%]さんは、そんな本当の愛を持った人なのです。心からの感情のこもった繋がりは、むしろ自分の理性を狂わせ、苦しくなってしまうと思っているでしょう。<br><br>　でも、きちんと理解してくれている仲間がいるのだということが、分かる出来事が起こります。あなたを必死に守ってくれようとする人たちが、出てきます。「自分の居場所は、ここなんだ」という安堵を得るようです。',
'　あなたと同じ反骨精神を持った、非常に気の合う仲間が生まれるでしょう。間違っていることには絶対に屈しない！　という妥協しない姿勢が、友人を作ります。<br><br>　会話がとても盛り上がりそうですが、[%NAME_SELF%]さんの目は、相手を見抜こうとする鋭い視線を持っているようです。ですがこの月の交流には、そういったものは、取っ払ってしまった方が良いでしょう。活躍度や社会的なポジションにこだわらず、精神的な傾向が同じ人たちとの交流を楽しんでみてください。<br><br>　短期的に活動を共にする計画が持ち上がります。その中には、話だけで流れてしまうようなものもあるようですが、本当に必要なものだけ計画が進んでいきます。やってみる価値はあるのではないでしょうか。',
'　地位、信用、経歴などに心がとらわれそうになったら、深呼吸してネガティブな気持ちを全て吐き出してしまいましょう。<br><br>　他人の環境や待遇が羨ましく思えてしまうのは、[%NAME_SELF%]さんが持っている素晴らしいものに気がついていないだけです。あなたには誰よりも評価されている分野があります。「これだけは、負けない！」と密かに自信があるもの。もっと有効に打ち出していきましょう。ニーズに合わせることが大切です。そのためにも、求められていることを正確に把握してください。全てを合わせる必要はなく、一番大事な部分を見抜き、それに応えるようにすれば良いのです。<br><br>　執念のようなこだわりがニーズとマッチしたときに、あなたは最高の評価を得るでしょう。',
'　新しい仕事や役割への興味が生まれます。転職をして新しいスタートを切るのかもしれません。これからしばらくの、あなたにとって基本的な運命が生まれるこの4月。長期的な目標に向けて動き出すのに適しています。綿密な計画である必要はなく、楽天的な「こういう事をやってみたい」という目標で構いません。<br><br>　あなたが抱く目標は、今までとは一味違うものとなります。この月は新たな目標のための様々な条件が、揃い始める最初のステップとなるでしょう。<br><br>　周囲の変化とともに、今までの自分では乗り越えられない人間関係の問題も出てきますが、他者ではなく自分自身を変える必要がある学びです。この試練を活かして、取り入れることが大切です。',
'　今まで気がつかなかった隠れた敵意や、妨害を感じることが起こります。これに対して、逆心を持って表立った行動をすると墓穴を掘ります。こういう時こそ、見えない場所での努力と力が物をいいます。表舞台ではなく、裏舞台からの攻略を考えましょう。<br><br>　誰かの、ずっと隠していた表に出せない秘密を打ち明けられるようなことになるでしょう。それに対して、自分自身がどう動くべきか悩むことになります。罰するべきなのか、秘密を守るべきか。一人で抱え込む必要はありませんが、あなたの確かな方針が決まるまでは、口外は控えましょう。<br><br>　どうしても答えが出ないのなら、[%NAME_SELF%]さんが精神的に指針としている関連性のない人物に相談するようにしてください。',
'　4月は、所属している組織や団体としての意識が強くなります。同じ目標や目線を持っている人と行動を共にすることで、非常に有意義な経験と人脈を得られるでしょう。<br><br>　あなたらしい独特の感性が物事の動きと調和して、強運にも恵まれます。小さな概念にとらわれることなく、持ち前の広い視野が吉となります。自分たちとは関係ないと思っているような組織とのコラボレーションや、既成のルールを突破したような斬新な考え方が、組織全体に全く新しい目標を抱かせることになるようです。<br><br>　反面、それを理解してもらえない人たちへの葛藤も生まれそうですが、いくら言葉で説明をしても相手には響きません。まずは、同じ志を持つ仲間と共に動き出しましょう。',
'　あなたの仕事に対する評判が、ダイレクトに入って来ます。サービス精神でやっていたような仕事が、評価へと結びついているようです。<br><br>　あまり個人の名誉にはこだわらないので普段はサポート側を好むのですが、4月はリーダーシップ力が必要となる場面が出て来ます。力強さとは違う側面での、センスが求められています。あなたでなければ出来ないからこそ、やって来たチャンス。それもステップと考え、来た役割を受けましょう。<br><br>　ですが、意見がコロコロと気分で変わってしまっては、周囲を混乱させ信用を失いかねません。一つの物事に対して、やり遂げるという意志を鍛えられる経験となるでしょう。大事な部分さえ見失わなければ、迷いはなくなります。',
		),
		array( "un2019_0042_2", 
'　とても遠くの、すぐには手が届かないような人に惹かれるような出来事が起こります。また、具体的な共通点や交流する機会が生まれるでしょう。<br><br>　相手の肩書やルックスだけで決めてしまうと、本当に大切な人を失う可能性があります。パートナーが既にいる人は、恋と憧れを混ぜないことが大切です。<br><br>　出会いを求めているのなら、その惹かれる気持ちを大事に、自分をその人へ近づける努力をしてみてください。決して不可能な恋ではなく、[%NAME_SELF%]さんが本気で努力をすれば、手が届く人なのです。やりたいことをやって生きている人間は、自分の人生に責任を持っています。そういう高い精神性を持つ人のようですから、あなたとはとても気が合うのです。',
'　愛に関する関わりが、もっと密になって来ます。そのため相手に対して、表面的なものだけでない精神的な深い繋がりを求めてしまうでしょう。<br><br>　あまりにも求めるものが強過ぎると、現実とのギャップに落ち込んでしまいます。また、相手にも心理的な負担を与える結果となってしまうでしょう。「わかってくれているはず」という思い込みを、まずは無くすことが大切です。分かって欲しいのなら、伝わるような明確な行動を取ってください。<br><br>　コンプレックスが原因で恋愛を楽しめなくなってしまったら、一人で抱え込まず同じ経験を持つ人に相談すると良いでしょう。心が晴れると、違ったものの見方が出来るようになり、悩みに負けない自分を作れます。',
'　意中の人の現在の結婚に対する考えを知ることになるでしょう。軽い話題としてスルーしてしまうと「話を聞いてない人だ」という印象を持たれることに。真剣に聞いておくことが大切なようです。<br><br>　あなたに対して、愛の情熱をぶつけてくるような異性が出て来ます。それは、意外と近場から出てくるのではないでしょうか。最初の印象で興味が湧いたのなら、お付き合いをしてみても良いでしょう。<br><br>　人との関わりによって恋愛運が高まっていきます。いつもとあまり変わらないお友達同士でのランチであっても、恋のきっかけは眠っているようです。この月は社交性が大事。いつチャンスが訪れても良いように、服装や髪型には手を抜かないようにしましょう。',
'　相手の体調を気遣う優しさが、恋愛に素敵な変化を呼び起こします。<br><br>　自分がいっぱいいっぱいになると、他者への気遣いができなくなってしまいがち。そんな中でも相手を思いやることができれば、[%NAME_SELF%]さんの愛はしっかり意中の人へ届きます。相手の見えない苦労を理解しようとする気持ちを持てれば、あなたにしか分からないものが見えてきて、今かけるべき言葉を自然と思いつかせるでしょう。思いも寄らなかった、嬉しいリアクションを得られるようです。<br><br>　パートナーを探している人は、職場などの身近な場所から縁が繋がっていきます。恋愛とは関係ないようなものであったとしても、仕事上での評価や人気が、そのまま恋愛運を底上げするでしょう。',
'　恋愛では、二人の世界を大事にすることが大切です。誰かの存在を気にするよりも、あなたらしく素直な自分になることが吉と出るでしょう。嫉妬心や怒りは、相手の気持ちを遠ざけるだけです。<br><br>　この月はポジティブな思考が何よりも大事。悩みは外に出て思いっきりスポーツをするなどして発散させましょう。次の日に、ネガティブな気持ちを持ち越さないことが大切です。<br><br>　愛する人と一緒に楽しめるスポーツや日常を忘れさせるようなテーマパークが、デートにはオススメです。[%NAME_SELF%]さんの無邪気な笑顔は、異性の保護欲をくすぐります。相手に「側にいてあげなくちゃ」と思わせたらこっちのもの、完全に[%NAME_SELF%]さんのペースに巻き込んでしまえるでしょう。',
'　秘めていた思いが、心の中でどんどんと大きくなっていくようなことが起こります。普段は冷静でいられる[%NAME_SELF%]さんも、この月は感情がコントロールしにくくなります。寂しさや切なさを感じてしまうときは、遠慮せず相手の声を聞くために電話しましょう。メールではなく、声を聞くことで安心できます。<br><br>　相手との関係に自信がなくなってきたら、実家に顔を出したり連絡をしてみると良いでしょう。家族との触れ合いが、暖かな愛を思い出させてくれるようです。<br><br>　無理をせず、ゆっくり心を癒やすことが大切です。積極的に動くよりも、自然と動き出すのを待つこと。その間に、ヒーリング効果の高い香りやハーブティーで、心のデトックスをしてみてください。',
'　異性同性関係なく友達付き合いに花が咲いてきます。新しい友人などもでき、SNSなどでの交流も活発になるでしょう。ですが、あまり異性と親しくし過ぎてしまうと、意中の人に浮気を疑われるようなことになるようです。<br><br>　一度誤解をされると、なかなかその誤解を解くのは難しいものです。[%NAME_SELF%]さんが想っている人は、意外とあなたの発信する情報を見ています。ブログやSNSなどで、情報をアップするときは勘違いされないように気をつけましょう。<br><br>　新しい恋を探しているのなら、まずは引っ越しを視野に入れると良いでしょう。引っ越しは、最も簡単な運気を変える方法の一つ。今のあなたが直感で「住みたい！」と思う街に、新たな出会いが待っています。',
'　相手の金銭的な部分や地位的な面が気になってしまうでしょう。「そんなものより愛が大事」と思いたくても、やはり目がいってしまうのは収入面や財産。確かに現実は、お金と安定した生活を切り離すことはできません。この月は、そんなあなたの相手を見ている目が、上手に隠しているつもりでも伝わりやすくなってしまい、引かれてしまうようです。<br><br>　[%NAME_SELF%]さん自身が理想の自分に向かっていくことで、周囲に集まる異性もだんだんと色を変えてきます。相応しくない縁は寄ってこれなくなるのです。<br><br>　現状の不満や不安に対して、条件や理想を相手に求めるのではなく、自分を変えていこうという意識が持てるかどうか……それが大事なのではないでしょうか。',
'　この月のあなたは恋愛や結婚への願望よりも、自分の生き方や今後の人生をもっと輝かせたいという思いが強くなってしまうでしょう。「もっと素敵な自分になりたい！」と思ったら、その素敵な自分になるための一歩を踏み出しましょう。<br><br>　新しい趣味や習い事を始めてみてはいかがでしょう。服装や髪型を一気に変えてしまうのもオススメです。新しい[%NAME_SELF%]さんが出来上がり始めます。そして、そんなあなたに、想いを寄せる異性が出てきそう。その異性は、この月に新しく始める物事に関係しているでしょう。<br><br>　恋に執着しない姿勢が、かえって素敵な恋愛を呼び起こします。恋愛や婚活からは一歩離れて、オシャレや習い事などに、ぜひ没頭してみてください。',
'　秘密の恋に、縁ができやすいです。<br><br>　[%NAME_SELF%]さん自身もしくはあなたの友人が、パートナーが既にいる人との恋愛をしてしまいそう。その恋には、思いがけないアンラッキーが潜んでいます。結果として、辛い経験となってしまうでしょう。その人がいなくてもあなたは大丈夫です。もっと素敵な人がもうすぐ現れますから、自分をしっかりと持ち、深みにはまらないように気をつけてください。<br><br>　もし、お友達がそういう恋に落ちてしまっているのなら、離れるよう促してあげると良いでしょう。もう既に恋に落ち、深い関係になっているのなら、言っても無駄かもしれません。ですが、あなたの率直な意見を伝えておくことで、ふとした時の友人の指針となるのです。',
'　パートナーから、「もっと自分との時間を作って欲しい」と言われてしまいそうです。自分のことばかりを優先していなかったか、振り返ってみましょう。<br><br>　相手の寂しさや甘えたいという気持ちを、理解していたでしょうか。やりたい事や、やるべき事を自分中心に考え過ぎてしまうと、気が付いた時には相手の心は離れてしまっているかもしれません。「理解してくれている」と思い込んでいる部分がなかったかどうか、改めて考えさせられるような出来事が起こるでしょう。<br><br>　この月に生まれる新たなコネクションには、非常に新鮮さがあります。新しい恋のお相手ともつながっていくようですから、出会いを探したいのなら人付き合いを大事にしましょう。',
'　恋愛には、安定と落ち着きが出てきます。今まで自分のことを後回しにしてきたのなら、やっと安心して取り組めるようになるでしょう。この月は、愛する人との関係に色々と変化を作るよりも、まずはあなたの足場を固めることが大事。<br><br>　成り行きでパートナーの両親に会ったり、接点を持つようなことが起きます。この出来事をそのまま流さずに、後日お礼を送るなどの一手間が、二人の良い転機へのバックアップになるようです。<br><br>　社会的な自分の名声や地位を高めていくことが、恋愛に良い影響を及ぼします。公的な書類や、やらなければならない仕事はさっさと片付けておきましょう。「まぁいいや」と後回しにしておこくと、後々困ることになりそうです。',
		),
		array( "un2019_0042_3", 
'　普段はあまり関わることのない人たちとの交流や、人脈が生まれます。その中には、故郷を離れ海外で活動している人も含まれています。そういう人たちとのご縁は、今までなかなか理解してもらえなかったあなたの核となる部分を、強く輝かせることになります。<br><br>　他の人たちから見れば短所と言われるような個性が、この人たちの目には最大の長所として映ります。世界を知っている人たちから、素敵な助言のようなものをもらえるでしょう。それは、あなたには可能性が無限にあるという事実を教えてくれ、困難へ挑戦したくなるような情熱を呼び覚まします。<br><br>　このご縁は今後、あなたが本当に迷ったときに、導いてくれるような存在となるようです。',
'　過去からの、非常に縁のある人物との交流が起こります。その人は、あなたが困っているとき必ずグッドタイミングで助けてくれるような人だったり、不思議な縁のつながりを感じさせる人であるようです。<br><br>　この月のトラブルや悩みは、遠い過去が関係しています。ですが不思議な他者からの助けやサポートが、どんな困難でも乗り越えさせるでしょう。目立たなくても、ずっと守ってくれているような存在がいるはずです。気が付いたのなら、「ありがとう」とぜひ伝えてください。過去からの課題を、クリアすることにつながります。<br><br>　特定の人になぜだか無性に惹かれてしまうのは、縁が関係しているのです。勇気を出して、実際に会いに行きましょう。',
'　真のパートナーによって、助けられるというような出来事が起こります。本当の自分の支持者、理解者とは誰なのかがわかるでしょう。<br><br>　言葉ではなく、実際の行動によってその真意が現れるのです。今まで信じていたものが変わってくるかもしれませんが、自分にとって心地の良い人だけが良きパートナーシップの相手とは限りません。改めるべき部分は素直に改めて本当の友人と手を取り直すことができれば、最高の理解者と同志を得ることになります。<br><br>　表面的な人間関係の変化とまではならなかったとしても、[%NAME_SELF%]さんの心が理解していれば良いのです。一見対立しているように見えても、深い部分ではつながっている……、それに気がつけるかどうかが大事。',
'　年下の人物が、今の[%NAME_SELF%]さんに良い変化や影響を及ぼすようです。パッと見は頼りなげな印象を持っているのですが、その人物はあなたの社会的な評価を上げてくれます。<br><br>　社内や友人たちとの会話の中で、普段は人から気がつかれないようなあなたの良い部分を話題に出して、素晴らしいと絶賛するでしょう。それがきっかけとなり、あなたを見る周囲の目が変わります。<br><br>　4月は後輩や年下の人たちには、いつも以上に良い印象であるよう心がけておくと良さそうです特に相談事を持ちかけられたときは、持ち前の人を喜ばすことのできる言葉のセンスで、長所を見つけ元気づけてあげてください。プライドの高さを出すと逆効果となります。気をつけましょう。',
'　羽目を外せるような友人との関係が、普段のストレスを発散させ、あなたのカリスマ性を蘇らせるでしょう。一般的な場所に自分を押し込んでしまうのは、もったいありません。華やかでみんなから注目されるような場所が、[%NAME_SELF%]さんには相応しいのです。それを思い出させてくれる人となるようです。<br><br>　あなたと同じようなカリスマ性を持った友人は、長い間一緒にいると二人とも我が強いので対立しそうですが、時々会って思いっきり遊ぶには最高のパートナーです。普段、みんなの上に立っているからこそ抱いてしまう苦労や孤独感も、この人の前ならあなたはさらけ出せそう。<br><br>　個性の強い二人が一緒になるとトラブルも起こりやすいので、ほどほどにが大事。',
'　あなたにとって家族と呼べるような人たちとの交流が盛んになります。<br><br>　血の繋がりはなかったとしても、家族のようにあなたを想ってくれている人である場合もあるようです。「人に迷惑をかけてはいけない……」と、普段は一人で解決しようとしてしまう[%NAME_SELF%]さん。ですがこの月は、そんな支えてくれている人のありがたみを感じ、愛によって心が癒やされていくでしょう。<br><br>　[%NAME_SELF%]さんを大切に思ってくれている人から連絡が来たり、プレゼントが届いたりします。もしかしたらそれは、とても意外な人だったりするのではないでしょうか。その愛に対して、お返しを考える必要はありません。ただ、「ありがとう」と言うだけで良いのです。それで相手は、満足なのです。',
'　あまり難しく考えずに付き合える等身大の友人たちとの交流が、公私ともに増えていきます。この月は、縦よりも横のつながりが広がりを見せるでしょうし、その繋がりを心から楽しめそうです。<br><br>　それに伴って他人からの誘いも多くなり、そこから新しい趣味や興味の方向性が生まれるようです。[%NAME_SELF%]さんが書いているブログやSNSに興味を持つ人も増えてきますので、更新の頻度は高めておくと良いでしょう。<br><br>　ネットを通して出来た人脈は、普段は絶対に関わることができないような人へと行き着きます。「まさか……」と思うような人が、あなたの隠れたファンだったりするようです。思いついたことや感動したこと、綺麗な写真は、どんどんシェアしましょう。',
'　財テクに詳しい友人が、あなたにとても興味のある話を持ってくるでしょう。それはギャンブル的なものではなく、自然と興味がわくような、以前からあなた自身も少し気になっていたことではないでしょうか。<br><br>　凝り性の[%NAME_SELF%]さんは興味や疑問を持つと、睡眠を削ってまで情報を集めたりするところがあります。睡眠不足にならない程度にしてください。ですが、得た情報や財に関する方針は、的を射ているようです。その友人は、実は金運面でのラッキーパーソン。ギャンブル的なものは向いていませんが、マイペースに続けられる割と安定したものなら合っています。内緒でこっそりと始めてみてはいかがでしょうか。<br><br>　信用という言葉を基準に考えると良いようです。',
'　全く新しい、今までにない人脈が生まれ始めるスタートの中にいます。ここで生まれる新たな友人や仲間は、これから[%NAME_SELF%]さんが始めようとしている、もしくは既に始まっている試みを応援してくれるような存在となるでしょう。<br><br>　関わる人たちがだんだんと色を変えていきますが、それは周囲が変わっているのではなく、[%NAME_SELF%]さん自身が変化しているということなのです。これからのあなたに相応しい人間関係が生まれていきます。公私ともに、人との交流においては新たな課題も生まれてきそうですが、持ち前の判断力で乗り越えていけるでしょう。<br><br>　縁を繋いでいくことが大切です。それっきりにならないように、連絡先の交換などは積極的に自分から動きましょう。',
'　人間関係では誰かの醜い部分を見てしまったり、苦手だった意外な人物のとても尊く美しい心に触れたりと、今までの考えを見直すようなことが起こります。<br><br>　「誰を信じて良いのかわからない……」という思考の迷路に迷い込んでしまったら、一旦考えを止め、それ以上深く考えないようにしましょう。深く考えてしまうと、どんどんネガティブな思考が生まれてきてしまいますが、それは事実ではなく悲観的な妄想にすぎません。囚われてしまうと、迷路から抜け出せなくなります。<br><br>　結局は、自分の心が答えを知っているようです。打算的になってしまうと、判断を間違ってしまいがちです。決断できないときは、無理して相手に合わせるよりも、一人になる選択を。',
'　あなたがやりたいことに対して、同じ方向を見ている者同士との交流が活発になります。思想的な部分で共通している集団や、仲間と呼べるような人たちの集まりには、将来有望となるコネクションが生まれるでしょう。<br><br>　個人の意志は一旦置いておいて、組織や団体としての行動に誘われたり惹かれたりするでしょう。やって損はないので、余裕があるのなら参加してみてください。目指す分野での経験と実績という、お金では買えないものを得られます。<br><br>　一人では到底到達できなかったような大きな役割も、団体での行動によってチャンスが巡ってくるでしょう。実力主義の世界となりますが、そういう環境では[%NAME_SELF%]さんには強運が。引き受けてみてください。',
'　普段とは違うワンランク上のステータスの人たちと、関わることが多くなるようです。<br><br>　相手の地位や肩書が重苦るしく思えるかもしれませんが、あなたは十分その人たちと対等に交流できるスキルを持っています。声をかけられたら、堂々と受け答えしましょう。今までの馴れ親しんだ人間関係から目線を上に上げる必要があるでしょうが、大切な変化なのです。<br><br>　歴史に関する話題で、非常に年上の男性に興味を持たれるようです。その男性は、社会的にかなりの地位を持っている人。権力者ではありますが、父親のような厳しい側面も持っています。その人と上手に交流できれば、[%NAME_SELF%]さんに思いもよらなかった仕事の話やチャンスをもたらしてくれるでしょう。',
		),
		array( "un2019_0042_4", 
'　晴れ晴れとした心が、今よりも高い目標を抱かせます。負けず嫌いな一面が、あなたが発展して行くためには何が必要なのかを明確にするでしょう。<br><br>　力強さや勢いだけでは乗り越えられない壁が現れたとき、それは知識や見聞を広めるチャンスです。自分に足りないものを潔く認めることで、爽やかな気持ちで前を向けます。潔さを拒む悔しさは、原動力に変えられるはず。<br><br>　無計画の行動が、今の自分には「これが必要だ！」という新鮮な閃きと、新しい方向性を生み出します。目の前の競争からは一旦距離を置き、その必要なものに向かって走り出してください。一度情熱に火がついてしまえば、あなたは無敵。自分らしい、新たな目標と勝算が生まれるでしょう。',
'　良くも悪くも人との関わりにおいて、深く関わるということが課題になってくるでしょう。<br><br>　相手の中にある普段は見えない一面を知ることで、あなたの軸がブレてしまうようなことが起こります。何事も重く受け止めやすいのですが、それは、[%NAME_SELF%]さんの長所。人の苦しみがわかるからこそ……なのです。<br><br>　天は今あなたに、人付き合いの中の、トラウマによって生まれた壁を壊せるきっかけを与えています。今のままで良いと保守的に考えてしまうかもしれません。ですが、今後必ず、このタイミングで深く関わった経験が役に立つ時がきます。「この時のためだったんだ！」と思える日がやって来るでしょう。逃げずにとことん、向き合ってみてください。',
'　この月、あなたと誰かとの間に、確かな絆が出来上がるようです。やってもらってばかりいた、やってあげてばかりいた……というアンバランスな関係ではなく、本当の意味で支え合うことが大事。<br><br>　良い意味で「こんな人だとは、思っていなかった！」と思うような場面が訪れますが、その意外な一面によって、[%NAME_SELF%]さんは救われることになるでしょう。もともと多くの友人や協力者に恵まれるので、一対一のパートナーシップは薄くなりやすいのですが、とても強い信頼関係が生まれます。<br><br>　もし、今までの人ではない別の誰かとの縁が強くなってきているのなら、それを寂しく思う必要はありません。成長に伴って、必要な縁が変わってきているということなのです。',
'　身体の不調が出てきたら、まずは病院へ行きましょう。症状を軽く見ず、きちんと早めの対処をしておくことが大切です。<br><br>　疲れがなかなか抜けないのは、精神の疲れが原因ではないでしょうか。どんなに寝ても身体のダルさが抜けなかったり、寝起きが悪いなら、一度心のケアを集中してやってみてください。アロマの香りで癒やされるのも良いですが、ハーブティーや漢方など体に取り入れられるものがオススメです。<br><br>　心にも疲れが溜まります。普段職場でみんなが動きやすいように……と気を使っている[%NAME_SELF%]さんは、思っている以上に心理的な負担は大きいはず。このタイミングでの不調には、自分を労わるようにという優しいメッセージが込められているのです。',
'　思いっきり自分らしく動くことが幸運を呼びます。「ここぞ！」という時には、[%NAME_SELF%]さんの味方が一気に加勢するような展開へとなっていくでしょう。<br><br>　持って生まれた天性の人徳に甘んずることなく、普段から大事に育てておくことが大切です。そこに気をつけることが出来ていれば、大きな勢力となって、物事をあなたの望む方向へ一気に動かせます。思い切ってかじを取ってみると良いでしょう。強運だからと油断していては、トラブルになった時に苦労しますので気をつけて。<br><br>　あなたに憧れを持つ後輩や仲間が、たくさん出て来きます。見られているという意識を持ち、立ち居振る舞いや発言には正当性を持たせることが、不動の地位を築き上げます。',
'　両親からの頼まれごとは、引き受けて吉。ここでしっかり自分の役目を果たせておけば、予想外のラッキーがありそうです。<br><br>　寂しくなったら、身内と呼ぶことができる人たちとの繋がりを、もっと大事にするようにしてください。いつも「人に迷惑をかけないように」と自分を律することの多い[%NAME_SELF%]さんには、その居場所での安らぎが必要です。しっかりする必要のない場所が、休息と安らぎを与え神経の疲れを癒やしてくれるでしょう。<br><br>　人に甘えるということも大事です。あなたを心配している人から、愛のこもった手を差し伸べられるでしょう。それを受け取ってください。善意に対して、申し訳ないからと断る方が、相手は悲しいのではないでしょうか。',
'　「とりあえず、やってみるか」という、興味に対するフットワークの軽い行動が、必要な仲間を次々と呼び寄せます。<br><br>　知性を刺激されるような人たちとの交流が増え、コミュニケーション力が問われるような場面も多く出てきます。持ち前の協調性と公平な視点を忘れなければ、個性やキャラクターの違う者同士との時間も、楽しく過ごすことができるでしょう。<br><br>　その仲間の一人から、非常に興味深い話を聞くことになります。行ってみたいと思うような国内の場所であったり、会ってみたくなる人物の情報です。[%NAME_SELF%]さんが最近興味を持っていたことに、関係するものでしょう。百聞は一見にしかず。実際に行ってみると、素敵な学びを得ることになるようです。',
'　悔しさや劣等感が、あなたを強くします。自分の収入や待遇面で葛藤が生まれたら、それはステージを上がることができる可能性が生まれたということ。現状を変える力を、[%NAME_SELF%]さんは持っているのです。<br><br>　地位や金銭面での欲望が「絶対負けない」という、静かな炎をあなたの中に呼び寄せるでしょう。徹底的な不屈の精神は、驚くほどの結果を作り上げます。[%NAME_SELF%]さんの本当の底力が発揮され、自分自身が一番びっくりするかもしれません。<br><br>　悔しさを、他者への攻撃ではなく集中力と粘り強さに変えて仕事に向けることができれば、ここでの執念には幸運が付いてきます。すぐには結果は出なくても、あなたの社会的な地位を確かに押し上げるものとなるようです。',
'　天性の能力がよみがえるようなことが起こります。また、今までの経験によって作り出された才能も表面化するでしょう。その二つをどう使っていくかを考えると、今まで気づけなかった全く新しい夢と、挑戦心を抱かせる方向性が生まれます。<br><br>　才能がわからなければ、他者の自分に対する印象の中に答えを見つけることができます。「ここが凄いよ！」と言われても、[%NAME_SELF%]さん自身はピンと来ないかもしれません。決して得意なのではなく、努力をして必死にやっているだけだ……と思うでしょう。ですが、必死にやって最終的に出来てしまうところが、すごいのです。他者には真似できません。<br><br>　天性の才は苦労することで磨かれ、一流になるということを忘れないでください。',
'　次々と生まれる懐疑心が、あなたを一人になりたいと強く思わせるようです。<br><br>　孤独を選びやすい傾向になりますが、まるで[%NAME_SELF%]さんを保護しているかのような、人間の力を超えた不思議なサポートを所々で感じることが多くなるでしょう。それは今あなたが、乗り越えるべき課題に直面しているからなのです。<br><br>　この月は秘密に縁ができやすいのですが、そのせいで自分が自由に振る舞えなくなったり障害が生まれたりと、アンラッキーな影響が目立ってしまうでしょう。そのため「関わりたくない」とドライな対応になりがちですが、この秘密の扱い方には[%NAME_SELF%]さんの手腕が問われています。問題の原因を追究することで、誰かの心を助けることになるようです。',
'　他人から見れば、ちょっと変わった分野のコネクションが生まれます。ですが、今の[%NAME_SELF%]さんにとっては、とても興味深く真剣な気持ちを持てるものなのではないでしょうか。<br><br>　同じ思想や主義を持つ友人たちとの関係から、新しいチャンスが生まれます。同じ思想を持っているというポイントが大事。<br><br>　そんな仲間たちと一緒に会話している時に、突発的なアイデアが浮かんだら、遠慮せず発言してみてください。思ってもいなかった好反応を得られ、どんどん話が進んでいくでしょう。それがきっかけとなり個性的な人物が集まり始め、ちょっと変わった目的を見る、風変わりなグループが出来上がります。今後、あなたの世界を広げてくれることになるようです。',
'　自分の理想ではなく、地位や権力を意識しなければならない環境に、心の葛藤が生まれます。ですがその葛藤は、夢や理想を叶えるためには、もっと上のポジションに立つ必要があるのだと教えてくれるでしょう。そのためにも、今は社会的な基盤を作る必要があるのです。<br><br>　より大きな目標と思想を持って、「そのために今は頑張るんだ！」と喝を入れましょう。優しすぎる一面には蓋をする必要が出てくるかもしれませんが、一時の犠牲ではなく大きな未来のために……そう考えることが、あなたのモチベーションを維持するでしょう。<br><br>　ですが、天は[%NAME_SELF%]さんを苦しませるばかりではありません。とても大きな助け舟として、一人の権力者を向かわせます。',
		),
		);
?>