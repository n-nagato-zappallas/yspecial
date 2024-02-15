<?php
/**
 * menu_id : nv21_007
 * 島田秀平：一人用 出会い結婚
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'nv21_007',
			'contents'			 => 'spshimada_zap',
			'img_name'			 => 'zap_spshimada',
			'teller_name'		 => '島田秀平',
			'isp_mid'			 => '53j007',
			'nif_menukey'		 => 'unsei_2021_007',
			'price'				 => '1000',
			'discount'			 => '900',
			'design_cd'			 => '10',
			'person'			 => '1',
			'category_name'		 => 'meet',
			'release_date'		 => '20201201',
			'title'				 => '2021年恋占◆島田秀平がズバリ教えるあなたの恋模様【出会い＆結婚】',
			'caption'			 => '2021年の恋模様。あなたはいったいどんな年を過ごしてくのでしょうか？　人気占い師島田秀平があなたにとって良い一年だったと思っていただけるように、訪れる出会いや結婚、魅力についてズバリお伝えしていきましょう。',
            'base_1_title_self' => 'あなたの運命数',
            'base_2_title_self' => 'あなたの基本性格',
            'base_1_title_other' => 'あの人の運命数',
            'base_2_title_other' => 'あの人の基本性格',
            '1_min_title'  => '2021年◆あなたの恋愛運はこの一年でどう変化していく？',
            '2_min_title'  => '2021年◆あなたにどんな出会いが訪れる？',
            '3_min_title'  => '2021年◆あなたの中で最も高まる魅力',
            '4_min_title'  => '2021年◆あなたが絶対に手放してはいけない異性',
            '5_min_title'  => '',
            '6_min_title'  => '2021年◆その異性の容姿や内面の特徴は？',
            '7_min_title'  => '2021年◆ズバリ！　あなたに結婚のご縁はありそう？',
            '8_min_title'  => '2021年◆あなたの恋愛力を高め、維持するために大切にするべきこと',
		);

// 小メニューロジック
$logic = 'd';

// Next枠
$next = array( "nv21_005", "nv21_006" );

// 一部見せテキスト
$free = array(
		array( "nv21_007_1", 
'　2021年の[%NAME_SELF%]さんには、これまでとは全く違う新しい恋愛の流れがやってきますよ！　そもそも好きになるタイプが、がらっと変わってくるかもしれませんね。むしろ、今まで「ちょっと苦手だな」と感じていた異性のことが、「なんだか気になる」と思う場合もあるでしょう。<br><br>　それに……',
'　さあ、空前のモテ運到来ですよ！　[%NAME_SELF%]さん史上、こんなにモテモテは記録的になるかもしれませんね。内側から本来の魅力がにじみ出て、異性の目には「恋人にしたい人」、「いつも側にいてほしい相手」として映るので、次から次へとアプローチをされるでしょう。中にはあなたの恋人にふさわしくない……',
'　2021年、[%NAME_SELF%]さんの恋愛は華やいだムードに包まれます！　いつも以上に活動的になるときなので、恋にも前向きな姿勢になれるでしょう。「楽しい恋をしたい！」という気分が高まるため、その想いに引き寄せられるように軽やかな恋のチャンスが訪れます。<br><br>　この年のあなたは……',
'　2021年、[%NAME_SELF%]さんの恋には、少なからず責任を伴います。といっても、自分の「好き」という気持ちとちゃんと向かい合うという意味で、変に構える必要はありません。軽い気持ちで恋を始めるというのはやめておきましょう。先々のことをよく考えて、大人同士の成熟した愛情をじっくりと時間をかけて……',
'　この一年の[%NAME_SELF%]さんにとって恋は、生きる喜びを感じるものでしょう！　人を好きになることは生きること、そんなふうに感じられると思います。まるで息をするように自然に恋をして、それが生活の一部になるような流れになるかもしれません。<br><br>　2021年は、いつもと違うパターンの……',
'　これから始まる新しい一年、[%NAME_SELF%]さんの恋愛はとても家庭的なムードに包まれます。心から信頼できる人から、「大切にされている」と実感できる関係を築けるので、恋愛以外にもいろいろと運気が好転していくのが特徴なのです。恋がうまくいくから、仕事も対人関係も良好になりますよ。<br><br>　この年の……',
'　2021年の[%NAME_SELF%]さんの恋愛は、一対一の関係を深く掘り下げていくことになりますよ。もともと全く違う人生を歩んできた人と、お互いを理解するためにコミュニケーションを重視したお付き合いをするでしょう。「もっと知りたい！」という想いが言動力になって、恋が進んでいきますよ。<br><br>　この年は……',
'　[%NAME_SELF%]さんは2021年には、「こんな自分になりたい！」という目標がハッキリと見えてくるでしょう。それに向けて具体的な努力を、地道にわき目もふらずに積み重ねていけます。恋愛の優先順位が下がってしまうと、仕事や勉強中心の毎日になるかもしれませんね。<br><br>　そうではなくて……',
'　この2021年の[%NAME_SELF%]さんの恋愛は、ひとつの「区切り」を迎えますよ。なかなか恋に踏み出せないのなら、いよいよ背中を押されて行動を起こす機会がやってくるでしょう。意外な人から告白をされる、そんな展開もありえますよ。もしくは、これまで付き合ったことないようなタイプの人と恋人になると……',
		),
		array( "nv21_007_2", 
'　この年の[%NAME_SELF%]さんに訪れる出会いは、いつもと違うパターンですよ！　「こんな場所で？」と感じるような巡り会いもありえるので、どうぞ心の準備をしていてくださいね。いざという場面で気後れしないように、オシャレに手抜きをしないことですよ。<br><br>　好きになる異性もこれまでとは……',
'　この2021年の[%NAME_SELF%]さんには、身近な場所での出会いが期待されます！　長時間を過ごす職場が、恋の舞台になることもあるでしょう。仕事を通じて知り合った異性が、新しい恋人候補ということも十分ありえます。それから、地元の頻繁に足を運ぶ場所での出会いも期待できるでしょう。<br><br>　初対面の……',
'　これから始まる一年、[%NAME_SELF%]さんの元に訪れる恋愛につながる出会いは、さまざまなパターンがありそう！　職場では異性の同期や後輩から、アプローチされることも十分にありえます。あなたと一緒に働くのが楽しかったので、「付き合ったら楽しそうだな」と思うのです。<br><br>　仕事を通じて……',
'　この年の出会いは、表面的には地味なムードかもしれませんね。出会った途端に運命を感じるような激しさはないものの、その分とても穏やかで平和な雰囲気が漂うのが特徴です。もともと知っていた異性と、久しぶりに再開をして、それを機会に真剣な恋が始まることもあるでしょう。<br><br>　それと、2021年は……',
'　2021年は、日常生活のありとあらゆるシーンで恋につながる出会いが訪れるでしょう。初対面の人から一目ぼれをされたり、[%NAME_SELF%]さんが一目ぼれをしたりすることも十分ありえます。それから、単なる顔見知りの異性との関係が急展開したり、仕事や趣味を通じて知り合った異性との仲が……',
'　この年は、[%NAME_SELF%]さんの人生を豊かにしてくれるような理想的な異性と出会えますよ！　灯台下暗し、意外に身近な場所で、すでに知り合っている異性との間柄が、ゆるやかに進展することも十分にありえます。その人とは価値観が似ているので、一緒に過ごす時間がとても居心地がいいのです。<br><br>　久しぶりに……',
'　この一年の[%NAME_SELF%]さんは、出会いそのものは多くないかもしれませんね。ですが、趣味や大好きなことを通じで知り合う異性とは、会話を楽しみながら親しくなれるでしょう。共通の話題があるだけに、会話が弾むので、あっと言う間に心の距離が縮みますよ。<br><br>　インターネットの……',
'　2021年、[%NAME_SELF%]さんは自分が一番輝ける場所で、運命を感じる出会いが訪れるでしょう！　たとえば、長時間を過ごす職場。仕事に一心不乱に打ち込んでいると、内側から異性としての魅力がにじみ出るのです。そのエネルギーに引き寄せられて、同じように仕事熱心な異性が有力な恋人候補として現れ……',
'　2021年の[%NAME_SELF%]さんには、これまで全く縁がなかったような異性との出会いが訪れるでしょう！　二人の生まれ育った環境がかなり違い、そもそも価値観や考え方に共通点が少ない相手かもしれません。年齢がかなり上だったり、職業の分野が異なったりするでしょう。<br><br>　出会ってすぐに……',
		),
		array( "nv21_007_3", 
'　2021年、[%NAME_SELF%]さんの中では、いつも以上に素直で自然体でいられるでしょう。自分の心の動きに敏感になれるので、とても率直な感情表現ができますよ。思ったことをそのまま言葉にしても……',
'　2021年の[%NAME_SELF%]さんは自然体の魅力が高まるのですが、とりわけ「癒やし系」の素敵な雰囲気が最も強まりますよ。身近な場所では、「笑顔に癒やされる人」が続出！　年下や同年代の異性は……',
'　この年、[%NAME_SELF%]さんの中で最も高まる魅力は、人の心を惹きつけるチャーミングな笑顔やしぐさですよ。自分で特別に意識していなくても、ごく自然体で振る舞うだけでも、異性のハートをぎゅっと……',
'　これから始まる新しい年には、[%NAME_SELF%]さんの中のまじめで頑張り屋さんのところが、異性を惹きつける魅力になるでしょう。いつも以上に物事に丁寧に取り組むようになるので、どんなに小さなことでも……',
'　[%NAME_SELF%]さんの中の自由で奔放、型にはまらないといった魅力が高まるとしたら2021年です。自分はそんなキャラクターじゃないと思っていても、子供の頃を思い出してください。あなたは心の……',
'　[%NAME_SELF%]さんの包容力が豊かなところが、異性から注目される魅力としてグッと高まりますよ。もともと世話好きで面倒見がいいなら、さらにその傾向が強まるのです。そうでなくても、いつもより……',
'　この年の[%NAME_SELF%]さんは、自分だけの特別な個性に磨きがかかりますよ！　他の人とは違うところが、「誰にも似ていなくて素敵」と思われるのです。もしかしたら、あなたが欠点だと感じていたところが……',
'　この年、[%NAME_SELF%]さんの中で最も高まる魅力は、人目を惹く圧倒的な存在感です。ごく自然体でいても、なんとなく「大物」といった雰囲気が漂うでしょう。発言にも重みがあって、成功者としての……',
'　これから始まる一年は、[%NAME_SELF%]さんの中の他人への「理解力」が高まっていくでしょう。世の中にはさまざまな人がいて共感できないタイプの人もいるかもしれませんが、2021年には……',
		),
		);


// 結果テキスト
$text = array(
		array( "nv21_007_1", 
'　2021年の[%NAME_SELF%]さんには、これまでとは全く違う新しい恋愛の流れがやってきますよ！　そもそも好きになるタイプが、がらっと変わってくるかもしれませんね。むしろ、今まで「ちょっと苦手だな」と感じていた異性のことが、「なんだか気になる」と思う場合もあるでしょう。<br><br>　それに、恋の始まりのパターンも、あなたが経験したことがないような展開も！　この年は、いつどこで恋が始まってもおかしくありません。どうか、常に心の準備をしていてくださいね。「こんなハズじゃなかった」と思わないで、いつも勝負服に身を包んでおくべき。そして時間にはゆとりを持ちましょう！',
'　さあ、空前のモテ運到来ですよ！　[%NAME_SELF%]さん史上、こんなにモテモテは記録的になるかもしれませんね。内側から本来の魅力がにじみ出て、異性の目には「恋人にしたい人」、「いつも側にいてほしい相手」として映るので、次から次へとアプローチをされるでしょう。中にはあなたの恋人にふさわしくないタイプもいますのでご注意を。<br><br>　気をつけたいのは、押しの強い異性の誘いを断り切れないことですよ。相手があまりも熱心だと、情にほだされて好きでもない人と付き合うことになりかねません。一度に複数の異性からアタックされたときに、誰に対してもいい顔をしないように。感情に流されず理性も働かせてくださいね。',
'　2021年、[%NAME_SELF%]さんの恋愛は華やいだムードに包まれます！　いつも以上に活動的になるときなので、恋にも前向きな姿勢になれるでしょう。「楽しい恋をしたい！」という気分が高まるため、その想いに引き寄せられるように軽やかな恋のチャンスが訪れます。<br><br>　この年のあなたは、あまり先々のことを考えないで、気楽に恋愛を始められるでしょう。最初は友だちとして仲良くしながら、だんだん友情を愛情に変えていきます。一度に複数の異性の間で、「どの人がいいのだろう」と思うこともありそう。迷ったら、あなたの直感に従って難しく考えないことが、幸せに続く道に続きますよ！',
'　2021年、[%NAME_SELF%]さんの恋には、少なからず責任を伴います。といっても、自分の「好き」という気持ちとちゃんと向かい合うという意味で、変に構える必要はありません。軽い気持ちで恋を始めるというのはやめておきましょう。先々のことをよく考えて、大人同士の成熟した愛情をじっくりと時間をかけて育んでいくべきです。<br><br>　以前は「楽しい関係」を好ましく感じたかもしれませんが、この年は「安心できる関係」が居心地がいいと思うでしょう。あなたが恋に求めるのは、精神的に安定することなので、スリルや刺激は後回し。危険な恋や不毛な恋とは、縁が薄くなっていきますよ！',
'　この一年の[%NAME_SELF%]さんにとって恋は、生きる喜びを感じるものでしょう！　人を好きになることは生きること、そんなふうに感じられると思います。まるで息をするように自然に恋をして、それが生活の一部になるような流れになるかもしれません。<br><br>　2021年は、いつもと違うパターンの恋を経験するでしょう。これまでは、「ありえない」と考えていた状況で、「好きになったことがない」というタイプの異性と付き合うこともあるのです。恋が始まる前には、あまり先々のことまで心配しないで、とにかく楽しむようにしてくださいね！',
'　これから始まる新しい一年、[%NAME_SELF%]さんの恋愛はとても家庭的なムードに包まれます。心から信頼できる人から、「大切にされている」と実感できる関係を築けるので、恋愛以外にもいろいろと運気が好転していくのが特徴なのです。恋がうまくいくから、仕事も対人関係も良好になりますよ。<br><br>　この年のあなたは、人を愛する力が増すような気がするでしょう。「こんなに愛したことはない」と思える人が現れるからです。まるで身内のように惜しみない愛を捧げ、そしてまた自分も強く愛される。あなたの人間性を高めてくれるような恋ができますよ！',
'　2021年の[%NAME_SELF%]さんの恋愛は、一対一の関係を深く掘り下げていくことになりますよ。もともと全く違う人生を歩んできた人と、お互いを理解するためにコミュニケーションを重視したお付き合いをするでしょう。「もっと知りたい！」という想いが言動力になって、恋が進んでいきますよ。<br><br>　この年は、そのように普段あまり会えない人と恋に落ちるかもしれません。お互いの休みが合わないので、めったにデートができない相手。もしくは、かなり離れた場所に住んでいるので、遠距離恋愛をする場合もあるでしょう。ですが、なかなか会えないからこそ、二人は愛を大切に育んでいくのです。',
'　[%NAME_SELF%]さんは2021年には、「こんな自分になりたい！」という目標がハッキリと見えてくるでしょう。それに向けて具体的な努力を、地道にわき目もふらずに積み重ねていけます。恋愛の優先順位が下がってしまうと、仕事や勉強中心の毎日になるかもしれませんね。<br><br>　そうではなくて、「今年は絶対に素敵な恋人と付き合う！」とか、「年内に結婚して幸せになる！」と心に決めた場合には無敵ですよ！　あなたの恋愛運や結婚運は急上昇。その代わり、仕事運が急降下する可能性もありますので、うまくいくようにバランスをとることが成功のカギですね。',
'　この2021年の[%NAME_SELF%]さんの恋愛は、ひとつの「区切り」を迎えますよ。なかなか恋に踏み出せないのなら、いよいよ背中を押されて行動を起こす機会がやってくるでしょう。意外な人から告白をされる、そんな展開もありえますよ。もしくは、これまで付き合ったことないようなタイプの人と恋人になるということもあるかもしれません。<br><br>　それから将来的に実る見込みがない憧れの恋や過去の恋への未練は、ケジメをつけるのによい時期です。このタイミングなら、すんなり気持ちを切り替えられるので、また新たな恋に前向きになれるでしょう。',
		),
		array( "nv21_007_2", 
'　この年の[%NAME_SELF%]さんに訪れる出会いは、いつもと違うパターンですよ！　「こんな場所で？」と感じるような巡り会いもありえるので、どうぞ心の準備をしていてくださいね。いざという場面で気後れしないように、オシャレに手抜きをしないことですよ。<br><br>　好きになる異性もこれまでとは異なるタイプ。年が離れた異性や異業種の異性といった人たちとの縁がグッと深まるかも。共通するのは、とてもアクティブで活動的な性格、出会った途端に仲良くなれるということですよ。初対面でも明るく軽いノリですぐに親しくなって、プライベートで連絡をするようになるでしょう。',
'　この2021年の[%NAME_SELF%]さんには、身近な場所での出会いが期待されます！　長時間を過ごす職場が、恋の舞台になることもあるでしょう。仕事を通じて知り合った異性が、新しい恋人候補ということも十分ありえます。それから、地元の頻繁に足を運ぶ場所での出会いも期待できるでしょう。<br><br>　初対面のはずなのに、「懐かしい」、「どこかで会った気がする」という印象を受けるのが特徴です。雷に打たれたような劇的な感じがしないからといって、運命で結ばれていないというわけではありませんよ。それから、何度も顔を合わせていても名前を知ない人が、恋人候補になる場合もあるでしょう。',
'　これから始まる一年、[%NAME_SELF%]さんの元に訪れる恋愛につながる出会いは、さまざまなパターンがありそう！　職場では異性の同期や後輩から、アプローチされることも十分にありえます。あなたと一緒に働くのが楽しかったので、「付き合ったら楽しそうだな」と思うのです。<br><br>　仕事を通じて知り合った異性や、趣味の仲間といった異性たちとの関係が、ちょっとしたきっかけで恋愛に進展することもありますよ。気になる相手がいたら、あなたのほうからプライベートの連絡先を教えるといいですね。そこからメッセージの交換が始まり、あっと言う間に恋が始まります！',
'　この年の出会いは、表面的には地味なムードかもしれませんね。出会った途端に運命を感じるような激しさはないものの、その分とても穏やかで平和な雰囲気が漂うのが特徴です。もともと知っていた異性と、久しぶりに再開をして、それを機会に真剣な恋が始まることもあるでしょう。<br><br>　それと、2021年は紹介という出会い方が有力です！　身近な人たちが、[%NAME_SELF%]さんの幸せを願って、素敵な異性と引き合わせてくれるかもしれません。だから日頃から「仕事が恋人です」という態度や言動は控えること。素直に「恋人募集中です」と宣言しておいたほうが、出会いが増えるでしょう。',
'　2021年は、日常生活のありとあらゆるシーンで恋につながる出会いが訪れるでしょう。初対面の人から一目ぼれをされたり、[%NAME_SELF%]さんが一目ぼれをしたりすることも十分ありえます。それから、単なる顔見知りの異性との関係が急展開したり、仕事や趣味を通じて知り合った異性との仲が急進展したりするでしょう。<br><br>　相手から強引にアタックされた場合には、ひとまず友だちとして付き合うといいですね。恋愛感情を抜きにして、人間性を見るようにすることですよ。「この人は信頼できる」と思えるなら、次のステップに進みましょう。慌てず焦らず、余裕を持って恋を楽しみましょう！',
'　この年は、[%NAME_SELF%]さんの人生を豊かにしてくれるような理想的な異性と出会えますよ！　灯台下暗し、意外に身近な場所で、すでに知り合っている異性との間柄が、ゆるやかに進展することも十分にありえます。その人とは価値観が似ているので、一緒に過ごす時間がとても居心地がいいのです。<br><br>　久しぶりに再会した学生時代の友人の異性や幼馴染の異性と、交際が始まることもあるでしょう。長い時間をともにしている仕事仲間も有力な恋人候補として挙げられますよ。そのように身近なところでの出会いがこの年のあなたには訪れるでしょう。',
'　この一年の[%NAME_SELF%]さんは、出会いそのものは多くないかもしれませんね。ですが、趣味や大好きなことを通じで知り合う異性とは、会話を楽しみながら親しくなれるでしょう。共通の話題があるだけに、会話が弾むので、あっと言う間に心の距離が縮みますよ。<br><br>　インターネットのコミュニティーやSNSでも、恋愛につながる出会いがあるかもしれません。本名や年齢、職業を知らない人だけれど、匿名でメッセージを交換するうちに恋心が芽生えることもあるでしょう。とはいえ、相手の素性がわからない場合には、くれぐれも慎重になってくださいね。',
'　2021年、[%NAME_SELF%]さんは自分が一番輝ける場所で、運命を感じる出会いが訪れるでしょう！　たとえば、長時間を過ごす職場。仕事に一心不乱に打ち込んでいると、内側から異性としての魅力がにじみ出るのです。そのエネルギーに引き寄せられて、同じように仕事熱心な異性が有力な恋人候補として現れるでしょう。<br><br>　趣味や勉強、ボランティアやなどのコミュニティーでの活動に打ち込んでいたら、そこで恋愛につながる出会いがもたらされますよ。新しい出会いを増やすためには、あなたが時間を忘れて夢中になれるものを探すのが近道になるでしょう。',
'　2021年の[%NAME_SELF%]さんには、これまで全く縁がなかったような異性との出会いが訪れるでしょう！　二人の生まれ育った環境がかなり違い、そもそも価値観や考え方に共通点が少ない相手かもしれません。年齢がかなり上だったり、職業の分野が異なったりするでしょう。<br><br>　出会ってすぐに恋に落ちるというよりも、相手の人間性にまずは惹かれます。お互いに「もっと知りたい」という気持ちが強まり、友だちから始まることもありそうですね。あなたがこの年に出会った異性とは、ひとまず連絡先を交換してゆるく縁をつないでいくと、機が熟したときに恋愛関係になれるでしょう。',
		),
		array( "nv21_007_3", 
'　2021年、[%NAME_SELF%]さんの中では、いつも以上に素直で自然体でいられるでしょう。自分の心の動きに敏感になれるので、とても率直な感情表現ができますよ。思ったことをそのまま言葉にしても、ちっとも嫌味にならない。そんなあなたのことを、「素直でかわいい人だな」と思う異性が続出しますよ！　<br><br>　どうか、その場の雰囲気を読み過ぎて、言いたいことを我慢しないでくださいね。あなたが感じたことや思ったことを、できるだけストレートに口にしましょう。もちろん、悪口や愚痴は控えるべきですが、心のままに自由に発言すると恋のチャンスを引き寄せられます。',
'　2021年の[%NAME_SELF%]さんは自然体の魅力が高まるのですが、とりわけ「癒やし系」の素敵な雰囲気が最も強まりますよ。身近な場所では、「笑顔に癒やされる人」が続出！　年下や同年代の異性はもちろん、年上であっても、「[%NAME_SELF%]さんに甘えさせてほしい」と思うかもしれませんね。<br><br>　そのせいか、いろいろな人から相談をされることが多くなるでしょう。仕事の悩みから、対人関係で困っていること、ちょっとした愚痴を聞いているうちに、恋が芽生えることもありそう。ですが、同情から愛情に変わるパターンはおすすめできません。自分にふさわしい相手をちゃんと見極めてくださいね。',
'　この年、[%NAME_SELF%]さんの中で最も高まる魅力は、人の心を惹きつけるチャーミングな笑顔やしぐさですよ。自分で特別に意識していなくても、ごく自然体で振る舞うだけでも、異性のハートをぎゅっと掴みます。初対面の相手も「素敵な人だな」と思うので、どうぞ自信を持ってくださいね。<br><br>　思い切ってイメージチェンジをするのもおすすめです。今の[%NAME_SELF%]さんの魅力を引き出すファッションや髪形に変身。プロのアドバイスを受けて、新しい魅力を引き出すのもいいですね。仕上げは、よい匂いがする香水を選んでみると、より多くの恋を引き寄せられますよ！',
'　これから始まる新しい年には、[%NAME_SELF%]さんの中のまじめで頑張り屋さんのところが、異性を惹きつける魅力になるでしょう。いつも以上に物事に丁寧に取り組むようになるので、どんなに小さなことでも全力投球。その一生懸命な姿が、異性の目には「素敵な人」と映るのです。<br><br>　あなたは、そんな自分を不器用だと感じるかもしれません。ですが、無理をしてまで要領よく立ち回らなくてもいいのです。目の前にあることに、できるだけ時間をかけて向き合う。そして、ある程度でいいので結果が出るまで諦めないようにしましょう。身近な異性はあなたに感化されて、「自分も頑張ろう」と思いますよ。',
'　[%NAME_SELF%]さんの中の自由で奔放、型にはまらないといった魅力が高まるとしたら2021年です。自分はそんなキャラクターじゃないと思っていても、子供の頃を思い出してください。あなたは心の赴くままに素直に発言して、好奇心旺盛だったはずですよ。<br><br>　この年は、童心に戻れるような機会を通じて、忘れかけていた遠い昔の自分を取り戻します。大人になって、いろいろ我慢をしたり無理をしたりしていたことに気づくでしょう。自然体でいるのは、決してワガママではありませんよ。どうぞ肩の力を抜いてありのままの自分でいましょう！',
'　[%NAME_SELF%]さんの包容力が豊かなところが、異性から注目される魅力としてグッと高まりますよ。もともと世話好きで面倒見がいいなら、さらにその傾向が強まるのです。そうでなくても、いつもよりも聞き上手になれるので、「話しやすい」と思われるでしょう。<br><br>　あまり親しくない異性や初対面の異性からも、愚痴をこぼされたり悩みを打ち明けたりしますよ。それを機会に、恋が始まることもあるでしょう。あなたは特に何かをしてあげなくても、親身になって話を聞いてあげるだけで「気持ちが救われた」と思われますよ。',
'　この年の[%NAME_SELF%]さんは、自分だけの特別な個性に磨きがかかりますよ！　他の人とは違うところが、「誰にも似ていなくて素敵」と思われるのです。もしかしたら、あなたが欠点だと感じていたところが、素敵なチャームポイントになるかもしれませんよ。<br><br>　どうか、いつも自然体を心がけてください。あなたが普段通りの自分を見せれば見せるほど、親しみやすさを感じてもらえますし、魅力的だと思われますよ。とりわけ、意思表示をハッキリするといいですね。イエスかノーか意見を聞かれたら、思った通りに発言をするよう意識してください。曖昧な返事はしないほうが好感を与えますよ。',
'　この年、[%NAME_SELF%]さんの中で最も高まる魅力は、人目を惹く圧倒的な存在感です。ごく自然体でいても、なんとなく「大物」といった雰囲気が漂うでしょう。発言にも重みがあって、成功者としての輝きや香りを放ちます。ちょっぴり近寄りがたいムードも感じさせますが、あなたとつり合いがとれる異性が引き寄せられてくるでしょう。<br><br>　身近な異性たちから敬遠されているように思えたら、親しみやすさを心がけるといいですね。どんなに忙しくても笑顔であいさつをしたり、初対面の異性には自分から話しかけたりするようにしてくださいね。',
'　これから始まる一年は、[%NAME_SELF%]さんの中の他人への「理解力」が高まっていくでしょう。世の中にはさまざまな人がいて共感できないタイプの人もいるかもしれませんが、2021年には対立しないでうまくやっていけます。これまで仲良くできなかった人のことも受け入れられるため、全く問題なく親しくできるはずですよ。<br><br>　そんなあなたに包容力を感じて、異性が悩みを打ち明けてくることが多くなりそうです。仕事や対人関係で困っていることがあると、「聞いてほしい」と思うのでしょう。異性から相談されることをきっかけに、恋愛が始まる場合も十分にありえますよ。',
		),
		array( "nv21_007_4", 
'「きっとできるよ！」と、[%NAME_SELF%]さんに「勇気」を与えてくれる異性のことは、絶対に手放してはいけません！',
'二人きりになったとき、ずっと黙っていても気疲れしない。そんな人は絶対、手放さないでくださいね！',
'「この人は親友になれる」と思える異性は、とても貴重な存在ですよ！　恋に発展する可能性もあります。',
'黙っていても、[%NAME_SELF%]さんがいつもと違う様子に気づいてくれる人は、心が通じ合うパートナーになれますよ！',
'二人が離れているときに、[%NAME_SELF%]さんを大切に思ってくれる人がいたら、絶対に手放さないでください！',
'[%NAME_SELF%]さんについて些細なことをちゃんと覚えてくれる人は、めったにいないので手放してはいけませんよ！',
'礼儀正しくて、適度な距離を置いて接してくれる大人の異性。その人こそ、居心地のよい恋人になりますよ！',
'切磋琢磨して一緒に成長できる人は手放さないで！　二人は同じ目標を抱いてともに頑張っていけますよ。',
'人によって態度を変えない異性なら、安心して付き合えますよ。さらに弱い立場の人に優しい人がいいですね。',
		),
		array( "nv21_007_5", 
'　2021年の[%NAME_SELF%]さんが出会う中で、応援者や理解者になってくれる異性は手放してはいけません！　たとえば、「こんなことをしてみたい」、「あれに興味を抱いている」と言ったときに、どんな反応をするのか確認してみるといいですね。「やめておいたほうがいいよ」、「うまくいかないと思う」と否定してくる異性は気にしなくても大丈夫。<br><br>　逆に、「やってみたらいいよ！」、「応援するよ！」と言ってくれる異性は、あなたにとって貴重な存在ですよ。その人と付き合うと、一番の理解者になってくれるでしょう。くじけそうになったときにも、エールを送ってくれるはずです。',
'　この年、[%NAME_SELF%]さんが絶対に手放してはいけないのは、二人きりになったとき「沈黙」になっても気まずく感じない人ですよ。無理をして「何かしゃべらないといけない」と思わなくてもすむ相手なら波長がピッタリ、相性も抜群という証拠。何もしなくても一緒にいるだけで、優しい気持ちになれるでしょう。<br><br>　ですが、その人はあなたと過ごすひとときを、少しでも充実させるための努力は惜しまないはずですよ。黙っているときにも、どうしたらもっと喜んでくれるか考えてくれるでしょう。そんな想いがしっかりと伝わってくるので、安心できるのです。',
'　2021年の[%NAME_SELF%]さんが絶対に手放してはいけないのは、親友になれる異性ですよ！　「この人と友だちになりたいな」と思う相手は、末長い付き合いになります。そこから恋に発展していくことも十分ありえます。その人になら、包み隠さずなんでも話せると思うのが特徴。<br><br>　むしろ、同性の友人に言えないことも、異性だからこそ別の視点でアドバイスがほしいと感じるかもしれません。あなたにとって話しやすくて、ついなんでも打ち明けてしまう。そして、的確な助言が頼りになる異性がいたら、自分から働きかけて連絡を絶やさないようにしてくださいね。',
'　2021年に[%NAME_SELF%]さんが、絶対に手放してはいけないのは、いつもと違う様子に気づいてくれる異性ですよ。黙っていても体調が悪いときに、「どうしたの？」、「大丈夫？」と声をかけてくれる異性がいたら、無理をして「大丈夫です」と言わないようにするといいですね。その人とは心と心が通じ合えるはずですから。<br><br>　あなたとしては、周りに迷惑をかけたくないし心配させたくないので、あえて隠してしまうかもしれません。それなのに、ズバリ指摘されるとつい、素直に認められない場合もあるでしょう。ですが、せっかく気にかけてくれたら、素直に厚意は受け入れるべきですよ！',
'　2021年、絶対に手放してはいけないのは、離れていても[%NAME_SELF%]さんのことを考えてくれる人ですよ！　しばらく会えないときに、「これ好きでしょ？」、「これ知っていた？」と情報を流してくれるのは、決して当たり前のことではありません。あなたをいつも思ってくれているからこそ、ちょっとした配慮を忘れないのでしょう。<br><br>　それから、ひとりで遊びに行ったときにも小さなお土産を買ってきてくれるような人なら、恋人にしたら「愛されている」といつも感じられますよ。二人が離れているときにこそ、相手から大事にされているかどうかわかるのです！',
'　[%NAME_SELF%]さんが2021年に手放してはいけないのは、些細なことを覚えてくれている人ですよ。飲み物や食べ物の好みを一度聞いただけなのに、「コーヒーより、紅茶だったね」とか、「辛い物、けっこう好きだよね」と言ってくれる異性です。それに、あなたの仕事やプライベートのことも気にかけてくれるでしょう。<br><br>　いろいろと気遣ってくれるのが伝わってくるけれど、押しつけがましくない。そんなふうに感じる相手は、実はめったにいないはずですよ。あなたにとって、素晴らしいパートナーになれる人なので、ご縁を大切にしてくださいね。',
'　この時期、[%NAME_SELF%]さんが手放していけないのは、適度な距離感を置いて丁寧に接してくれる人ですよ。親しくなってきても礼儀を守ってくれるマナーのよい人なら信頼できるでしょう。メッセージを送ってくるときにも時間帯への配慮があったり、言葉使いが丁寧だったりする人なら安心ですね。<br><br>　それに、人によって態度を変えないなら、あなたにふさわしい恋人になれますよ。最初は、距離を感じるかもしれませんが、遠慮をしているわけではないのでしょう。時間をかけてコミュニケーションを深めていけば、だんだん心が通い合っていきますよ。',
'　この年に[%NAME_SELF%]さんが絶対に手放してはいけないのは、ライバル心を刺激する人ですよ。いい意味で競争相手だと思える異性こそが、ベストパートナーになれます。「この人がいるから励みになる」、「負けてはいられない」と感じたら、有力な恋人候補です。二人で切磋琢磨して成長していけるでしょう。<br><br>　その人は、すぐ身近な場所にいるかもしれませんよ！　同業者や取引先、ライバル会社などで働いていることも。それに、キャリアアップを目指してセミナーや講座に参加したときに、出会うということもあります。二人は向上心が高いところが似ているでしょう。',
'　[%NAME_SELF%]さんが絶対に手放してはいけないのは、人によって態度を変えない異性ですよ。たとえば、目上の人や上司に対して変にゴマをすったり、反対に部下や後輩に対して横柄な態度をとったりすることがない人です。<br><br>　誰にでも同じ態度をとるのは、簡単にできそうでいて、実は難しいことです。自分に自信があるからこそ、自然体でいられるのでしょう。あなたとの間に年齢や社会的な立場の差があっても、「対等の相手として尊重されている」と感じさせてくれるかどうかを確認してくださいね。さらに、年配者や子供、ペットに優しい人だと、なお信頼できますよね。',
		),
		array( "nv21_007_6", 
'　その異性は、裏表がなくて明るくて朗らか。いつもニコニコしていて世話好きで面倒見がいいので、周りの人たちから好かれているタイプですよ。みんなの中ではリーダー格として、まとめ役をしているでしょう。職場では頼れる上司や先輩、仲間内では幹事役を頑張ってくれる人。<br><br>　外見の特徴は、スポーツが得意そうな感じ。軽やかでしなやかな足取り、すらりとした体形、手足が長いでしょう。顔立ちは色黒、細面、鼻がすらっとしていて、口は大きめ。かなり整った容貌ですが、笑うと子供のようにかわいらしい雰囲気に変わるのが特徴ですよ。',
'　その人は、実際の年齢よりもかなり年下に見えるでしょう！　初めて年齢を聞いたときには、「え、年上？」と思うはずですよ。どちらかというと童顔でつぶらな瞳、ふっくらした頬、丸顔で小さな鼻と口。かなりかわいらしい顔立ちなので、「守ってあげたい」と思わせるかも。<br><br>　表面的にはチャーミングでのんびり屋さんに見えますが、内面はむしろ知的で思慮深いタイプです。意外に計算高いところもあるし、世渡り上手。だけど心を許した人の前では、裏も表も包み隠さず見せてくれます。根は正直で、ピュアな心の持ち主。一途な愛を捧げてくれますよ！',
'　その異性は、いかにも誠実そうなタイプ。外見は、すらっと高い身長と、長い手足。ほっそりとした体形で、運動が得意かもしれませんね。身のこなしがしなやかなので、上品な感じに見えますよ。細面、色白、切れ長の目、すっと通った鼻筋と薄い唇。かなり美形です。<br><br>　その人は、まじめで少し融通がきかないと思えるかもしれません。いつまでも敬語や丁寧語を使うので、なんとなく二人の間に距離を感じることもあるでしょう。ですが、それは[%NAME_SELF%]さんに失礼な人だと思われたくないという、その人の礼儀なんですよ。',
'　[%NAME_SELF%]さんがいつもと違う様子に気づいてくれるのは、実際の年齢よりもかなり落ち着いた雰囲気の持ち主ですよ。初対面のときには、自分よりかなり年上かと思ったら、それほど変わらないと気づいて驚くでしょう。全体的にしっかりとした体形、角ばった顔に優しい眼差し。<br><br>　どちらかというと地味な印象ですが、集団の中にいるとかなり存在感があります。あまり社交的な性格ではないけれど、人間的な器が大きく、発言に重みがあるので、誰からも信頼されているのです。まだそれほど親しくなくても、つい愚痴をこぼしたり甘えたりしたくなりますよ！',
'　[%NAME_SELF%]さんを大切にしてくれるのは、瞳が輝いている魅力的な人物ですよ。ニッコリと笑うと白い歯が素敵で、すっとした鼻筋、形のよい唇、いわゆる美形の部類。ごく平均的な身長と細身の体形だけれど、とても華やいだ雰囲気です。<br><br>　性格は陽気で朗らか。好奇心旺盛なので、いつも新しいことにチャレンジをしています。次々と面白そうなことを試して、みんなに話題を提供しています。ユーモアのセンスがあって、自分の失敗談を楽しげに語って聞かせる、話し上手な人でしょう。メッセージでのやりとりも、気のきいた文章で笑顔にしてくれますよ！',
'　[%NAME_SELF%]さんの些細なことを覚えてくれている人は、爽やかな笑顔で元気よくあいさつをしてくれる人ですよ。どちらかというと背が高く体格がよくて、スポーツ選手のようにしなやかな動き。色白で切れ長の目をしていて、鼻が高く、いわゆる美形です。少し日本人離れした顔立ちかもしれません。<br><br>　決断力と行動力を兼ね備えたリーダータイプ。集団の中では、みんなを引っ張っていきます。お世辞や愛想が言えない不器用なところがありますが、裏表がないところがみんなから信頼されているでしょう。面倒見がいいので、あなたが困っていたら親身になってくれるはずですよ。',
'　その異性は、姿勢がよくてかなり端正な顔立ちですよ。いかにも穏やかで優しい眼差し、鼻が高く口元が引き締まっています。すらっと背が高くて足も長い、スタイルがいい人です。手足の動きがしなやかで、とても上品な印象を受けるでしょう。<br><br>　とても思慮深い性格で、どちらかというと感情を内に秘めるタイプですね。本音を出していないように感じるけれど、基本的には裏表がなく、誰に対しても誠実に接しますよ。子供や小動物に対して、ものすごく優しくて、笑うと無邪気な雰囲気に一変する人でしょう。',
'　この年に出会う[%NAME_SELF%]さんにふさわしい異性は、年下でしっかり者。見た目は年相応ですが、話してみると年齢の差を感じないでしょう。中肉中背ですんなりとした手足、ゆったりとした動作、おっとりした話しかたで、生まれ育ちがいい人という印象を受けるはずですよ。<br><br>　職場では、後輩の中でかなり将来有望なリーダータイプ。新しく知り合った異性の中では、かなり仕事熱心な人ですよ。決して強引な性格ではないのですが、みんなをまとめる役割をしています。特に年下の人たちから慕われているので、いろいろ相談に乗っているでしょう。年上の人からも、何かと頼りにされていますよ。',
'　[%NAME_SELF%]さんが手放してはいけない異性は、とても礼儀正しい人ですよ。言葉使いが丁寧で、いつも敬語を使っているでしょう。服装もかなりきちんとしているので、隙がないタイプに見えるかもしれません。ですが、ユーモアのセンスもあり、意外と天然キャラクターなところがあって親しみを感じます。<br><br>　外見は中肉中背、やや早口でしゃべるため、若々しい印象ですが、性格は老成していて大人っぽいですよ。趣味が豊富で友人が多いのが特徴、SNSでは海外在住の人たちとも、いろいろやりとりをしているでしょう。',
		),
		array( "nv21_007_7", 
'　2021年に始まった恋は、早い展開で結婚まで進むことは十分にありますよ！　[%NAME_SELF%]さんと出会った異性は、第一印象で「素敵な人だな！」と心を奪われてしまうでしょう。その後は、熱心にアプローチをしてくるはずですよ。そこで、あなたが素直に受け入れると、とんとん拍子で恋が始まるんです。<br><br>　お互いに相手の魅力にぞっこん。その気持ちのままに、まじめに将来を考えるようになります。「こんな人と人生をともにしたい」と思うので、結婚を強く意識するのです。正式に交際がスタートすれば、間もなく結婚を前提にした付き合いになるでしょう！',
'　2021年は、期待していて大丈夫です！　結婚に向けての道がハッキリと見えてきますよ。昨年から真剣交際をしてきた[%NAME_SELF%]さん、新年早々にプロポーズ、年内にゴールインということも十分にありえるんです。周りの人たちもみんな賛成してくれて、とんとん拍子で進みますよ。<br><br>　そして、まだ生涯のパートナーが見つかっていない[%NAME_SELF%]さんにも、運命を感じる出会いがあるでしょう！　ごく自然な形で付き合いが始まり、気がつくと将来を意識していたという流れになりそう。これまで好きになったことがないタイプかもしれませんので、先入観を抱かないことですよ。',
'　2021年の[%NAME_SELF%]さんには、結婚に発展しそうないくつかの出会いが訪れます！　といっても、すぐに結婚に結びつかないかもしれませんから、できるだけ長い目で見てくださいね。この年に出会った異性とは、まず友だちとしてグループ交際をして、だんだん親しくなるというケースが多くなりそうです。<br><br>　この年のあなたは、内側からチャーミングな魅力が光り輝くので、初対面の異性から一目ぼれをされることも十分ありえます。いきなり交際を申し込んでくる強引な異性がいるかもしれませんが、その人は結婚相手としてふさわしいかどうか、くれぐれも慎重に判断することですよ。',
'　この年の[%NAME_SELF%]さんには、ハッキリと結婚を意識するような出会いが訪れるでしょう！　まるで、天の助けで結婚に導かれているような気さえするはずです。周りの人たちもみんな、とても協力的な態度であなたが幸せな家庭を持てるように、紹介やお見合いの席を設定してくれるでしょう。<br><br>　すでに結婚している友人や親類から、「いい人がいる」とか、「紹介したい人がいる」という打診をもらったら、迷わないこと。できるだけ早く、「お願いします」と前向きな意思表示をしてくださいね。あなたと価値観や考え方が似ている異性と引き合わせてくれるでしょう！',
'　2021年の[%NAME_SELF%]さんは、スピード婚を実現させることも十分ありえます。情熱的な恋の炎に包まれて、結婚というゴールを目指して一気に駆け抜けるでしょう！　最初から結婚を前提にした恋が始まるこの年は、「これが運命なのかな？」と、後から思うことがありそうです。<br><br>　「この人でいいのだろうか？」と迷ったら、いったん立ち止まってくださいね。あなたが信用できる人に紹介してみると、賛成してもらえるかどうかわかるはず。もし、「やめておいたほうがいい」と忠告された場合には、少し距離を置く冷静さも必要ですが、賛成ならそのまま永遠の愛を誓い合って幸せを掴んでください。',
'　この年の[%NAME_SELF%]さんは、結婚につながる出会いが期待されますよ！　平和で温かい家庭を持ちたいという願いを、叶えるためのパートナーと巡り会えるでしょう。ドラマのような劇的な展開というわけではなさそうですが、とても自然な形で縁が結ばれていくのですよ。<br><br>　その人と一緒にいると、あまり緊張しないのが特徴。恋人と一緒にいるというよりも、家族が側にいてくれるような安心感があります。もしかして、「物足りない」と感じるかもしれませんが、そうではないのですよ。あなたが安心できる相手だからこそ、愛されていることが実感できるでしょう。',
'　これから始まる2021年の[%NAME_SELF%]さんは、結婚については準備期間にするといいですね。その人と出会ってお付き合いすることになったら、二人の将来についてじっくりと語り合うにはふさわしいタイミング。新婚生活をスタートさせる場所、家事の分担など暮らし方だけでなく、老後も視野にいれること。<br><br>　二人が同じ方向を見ているのか、しっかり確認してくださいね。もし、あなたの結婚観がハッキリしていないようでしたら、これを機にちゃんと考えてみるといいですよ。理想の結婚と現実をどれだけ合わせられるか、知恵を絞ってアイデアを出し合いましょう！',
'　これから始まる一年は、[%NAME_SELF%]さんは「まだ結婚は早いかな？」と思うかもしれませんね。独身時代だからこそできることに集中したいと考えるので、あえて結婚は先延ばしする場合もあるでしょう。とはいえ、あなたの心の支えになる恋人の存在が励みになって、目標を叶えていけるはずですよ。<br><br>　お互いに忙しい中でも、「どうしても会いたい」と願う相手が恋人になった場合には、なかなか会えないのがもどかしくなるでしょう。その場合には、結婚を前提にして一緒に暮らし始めることになるかもしれません。同棲することで、安心して毎日を送れるはずですよ。',
'　この年の[%NAME_SELF%]さんは、素敵な交際相手がいても、結婚について前向きに考えられないかもしれません。まず、今、自分が手掛けていることを整理したり、これからのことをまじめに考えたりする時間が必要なのです。転職や退職、引っ越しを検討しているのなら、いよいよどうするのか決めて、具体的な準備に入ります。<br><br>　正直なところ、あなたは自分のことで精いっぱい。恋愛や結婚については後回しになるかもしれません。それでも、結ばれる運命にある相手なら、絶対に離れていきません。ですから、あなたのペースを守っていても大丈夫ですよ！',
		),
		array( "nv21_007_8", 
'[%NAME_SELF%]さんの新しい魅力を引き出すように、プロのアドバイスで大胆なイメージチェンジを！',
'人の話を楽しんで聞くことを心がけてみてくださいね！　積極的に褒めるといいですよ。',
'とにかく楽観的に考えてみましょう！　どんなときも笑顔を絶やさないことが恋を招く秘訣です。',
'言葉使いをできるだけ丁寧に美しく！　[%NAME_SELF%]さんの発する言葉はあなた自身の印象に直結しますよ。',
'子供の頃を思い出して素直な気持ちを大切にしてください！　それが恋を叶えるカギですよ。',
'「ありがとう」という感謝の気持ちを、周りの人にちゃんと表現してみてくださいね！',
'あなたとピッタリの恋人を無理に探そうとしないで、信じて待つべきですよ！',
'ワンランク上の自分を狙って、そのときにふさわしい服装や振る舞いを心がけてみて！',
'気持ちに余裕を持って人の幸せを心から願うことですよ！　それがあなたの幸せに。',
		),
		);
?>