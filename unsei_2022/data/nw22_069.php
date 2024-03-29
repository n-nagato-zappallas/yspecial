<?php
/**
 * menu_id : nw22_069
 * 星ひとみ：一人用 10月運
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'nw22_069',
			'contents'			 => 'hoshihitomi_zap',
			'img_name'			 => 'zap_hoshihitomi',
			'teller_name'		 => '星ひとみ',
			'isp_mid'			 => '',
			'nif_menukey'		 => '',
			'price'				 => '600',
			'discount'			 => '540',
			'design_cd'			 => '6',
			'person'			 => '1',
			'category_name'		 => 'life',
			'release_date'		 => '20220926',
			'title'				 => '星ひとみが占う2022年10月◆気になるあなたの恋/仕事/お金を徹底鑑定',
			'caption'			 => '暑い盛りが過ぎ、とうとう2022年も秋を迎えます。気になる恋愛、仕事、お金……全部まとめてお任せください！　残り少ない今年をより良く過ごせるよう、メディアで人気の星ひとみが、今月もあなたをお手伝いさせていただきます。',
            'base_1_title_self' => 'あなたの天星',
            'base_2_title_self' => 'あなたの基本性格',
            'base_1_title_other' => 'あの人の天星',
            'base_2_title_other' => 'あの人の基本性格',
            '1_min_title' => '2022年10月～あなたの恋は順調？',
            '2_min_title' => '2022年10月～あなたの仕事の悩みは解決しそう？',
            '3_min_title' => '2022年10月～あなたの金運、収入はどうなる？',
            '4_min_title' => '2022年10月に輝くのは、あなたのこんなところ！',
		);

// 小メニューロジック
$logic = 'c1';

// Next枠
$next = array( "nw22_070", "nw22_071", "nw22_072" );

// 一部見せテキスト
$free = array(
		array( "nw22_069_1", 
'　10月の恋愛運はゆったりモード。新しい出会いがあっても、急いで恋愛関係に進もうとせず、良い友達になるところから進めてみて。<br><br>　今は、新たな交友関係を築くのにいい時期で、楽しみながら交流を深めていくことが大切。ここで土台作りをしっかりしておけば、今後友達から恋人へと自然に変化して……',
'　10月の恋愛運はイケイケモード。恋人募集中であれば、良いパートナーが現れそう。気持ちをまっすぐに伝えてきてくれて、一緒にいて疲れない人です。<br><br>　今恋人がいるなら、相手の結婚願望が強くなり、そろそろ結婚の話が出でくる予感。向こうから「親に会って欲しい」などと言ってきたら、その場ですぐ……',
'　10月の恋愛運は視点の変えどき。これまで[%NAME_SELF%]が、新しい出会いを外へ外へと追いかけてきたのなら、もっと身近にいる存在を恋愛対象として見直してみて。<br><br>　逆に、これまで身近にばかり目が向いていたなら、出会いの場の枠をもっと広くしてみましょう。<br><br>　恋を……',
'　10月の恋愛運は動きがある予感。新しい恋の相手は[%NAME_SELF%]の身近にいるようです。あなたがよく話す人で、あなたのことをとても優しい人だなと思っている人、心当たりがあるのでは。あなたはごく普通に接しているだけでも、その人は[%NAME_SELF%]と話していると胸がときめいて……',
'　10月の恋愛運は好調です。多くの出会いの中で、[%NAME_SELF%]と気が合いそうな人と巡り合えるでしょう。でも気が合ったらすぐにお付き合い、というのではなく、しばらくは友達として様子を見ていって。<br><br>　その人よりもっといい相手と巡り合える可能性も大いにあるので、慌てる必要は……',
'　10月の恋愛運は大きく動く気配。[%NAME_SELF%]には身近に、その人の前だとなぜか素直になれなくて、わざと意地悪なことを言ってしまう、そんな人がいるのでは。<br><br>　あなたはきっとその人が好きなんです。でも、これまで自分の気持ちに気が付かなかったみたい。あなたはその人のことを……',
'　10月の恋愛運は良い方へ向かおうとしています。[%NAME_SELF%]の中に、ずっと恋心を抱いてきた人がいたら、ここが結ばれるチャンス。自分から声をかけてみましょう。<br><br>　二人だけでデートができれば何よりだけど、いきなりそれは難しいなら、連絡先の交換をしてメールのやりとりなどから……',
'　10月の恋愛運は発展していきます。今までは単なる友達だったり、同僚のひとりとしてしか思っていなかった人のことが、急に輝いて見えてきそう。<br><br>　恋人候補は身近なところにいるので、新たな出会いを求めていくよりも、周囲をよく見直してみて。いつも何気なく話している相手も、少し見方を変えてみれば……',
'　10月の恋愛運は大きな変化はなさそう。でも、[%NAME_SELF%]に今好きな人がいるなら、その人との関係は順調に進みそうですよ。急展開ではありませんが、ゆっくり上昇していく感じです。<br><br>　新しい出会いとしては、何となくいいな、と思う人と巡り合えるでしょう。一目ぼれのような……',
'　10月の恋愛運は良いです。恋愛運はこれから着実に上がっていくので、ステキな恋が期待できるでしょう。髪形や服装にこだわったり、音楽や絵画に触れてみたりと、外側も内側も自分磨きをして魅力を輝かせていきましょう。<br><br>　一目ぼれされる可能性も高く、出かけた先で、誰かにいきなり声をかけられる……',
'　10月の恋愛運は情熱的。例えば一目ぼれをした相手に、声をかけたくてしょうがない、そんな衝動にかられそう。<br><br>　好きになった相手には、もう恋人がいる可能性も。でもこの時期の[%NAME_SELF%]には、感情を抑えたり隠したりするのは難しいこと。相手に恋人がいようが好きな人がいようが……',
'　10月の恋愛運は楽しげな雰囲気。多くの出会いの中から、[%NAME_SELF%]に好意を寄せる人が出てきそう。特にSNS上にチャンスがあるので、SNSをやっていないなら、ぜひ始めてみて。<br><br>　ただ、急接近で即恋人同士に、とはならないでしょう。この人いいなと思う人を見つけてから……',
		),
		array( "nw22_069_2", 
'　10月の仕事運は追い風を受けて上向きです。いい上司やリーダーが、[%NAME_SELF%]の良さが生きるぴったりの仕事を任せてくれます。<br><br>　自分の成果に手ごたえを感じると、今度は自分がリーダーになりたいと思うかもしれないけれど、それはもう少し待って。今[%NAME_SELF%]が一番活躍できる場所は……',
'　10月の仕事運は下向き加減。[%NAME_SELF%]ひとりで全てを抱え込まず、困ったときは周りの人の助けを借りて、仕事の負担を自ら軽くしていきましょう。<br><br>　また、あまり大きなことは控えめに。例えば大きな企画の提案や転職などが頭に浮かんでも、考えを温めるにとどめて……',
'　10月の仕事運は大きな変化がありそう。難しいながらもやりがいのある仕事を任せられそうなので、その時に備えて、勉強や情報収集などしっかり準備をしておいて。<br><br>　その仕事は、[%NAME_SELF%]のキャリアをさらに上げていくきっかけにもなる大事なもの。楽しみながら取り組んでいけるので……',
'　10月の仕事運はあまり大きな変化はなさそう。[%NAME_SELF%]の今の仕事はやりがいの感じられるものでしょうから、その仕事を精一杯続けていきましょう。<br><br>　もしそろそろ華やかに転職してみたいと思ったとしても、ちょっと待って。資格やスキルを身につけたり、人間関係を円滑にするための工夫をしてみたり……',
'　10月の仕事運はちょっとした変化の予感。今の職場で、[%NAME_SELF%]の提案した企画やアイデアが採用されて、それが実現に向けて動き出すかもしれません。<br><br>　今までよりも仕事の責任は重くなりますが、その分やりがいを感じられるはず。せっかくのチャンスなので、成功に向けて全力で……',
'　10月の仕事運は好調です。自分にはちょっと難しいかな、と思う仕事にも、敢えて挑戦してみてください。いつもより一段上を目標にしていくことが、[%NAME_SELF%]を大きく成長させてくれるんです。<br><br>　自分で自分の限界を狭めるのはもったいないから、自分はもっとできると信じて……',
'　10月の仕事運はとっても良いです。これまで[%NAME_SELF%]が、やりたい仕事に向けて着実に準備を積み重ねてきた努力が、報われるときが来たんです。望んでいた仕事につけたり、大きな仕事を任されたりする可能性が大きく高まる時期。この運気に乗って、ぜひ大きな成功を手にしてください。……',
'　10月の仕事運は良好です。今[%NAME_SELF%]が携わっている仕事は、良い結果へと向かうでしょう。<br><br>　あなたがもし転職を考えているなら、まずは今の職場でできる事を精一杯やることが先決。やり残したことがないか考えてみて。せっかくの好調期。抜擢や昇格も期待できるので、ここで今の職場を辞めてしまうのは……',
'　10月の仕事運は変化がありそう。事務の仕事が営業に、反対に営業の仕事が内勤に、というような異動を命じられたりするかもしれません。いずれにしても、これまでとは違った分野の仕事を任せられることになりそうです。<br><br>　最初はわからないことが多くて戸惑うことでしょう。でも、それも慣れるまでのこと。……',
'　10月の仕事運は厳しめです。自分には難しいのではと感じる仕事をふられたり、責任の重い立場におかれたりするかもしれません。でも、ひるむことなく挑戦してみてください。<br><br>　今は、厳しいと感じることでも精を出して取り組むほうが良いとき。多少の疲れは覚悟して、仕事の実績を……',
'　10月の仕事運はまずまずです。この時期は、職場の後輩への接し方を見返してみましょう。[%NAME_SELF%]が何の気なしに言ったことで、後輩は傷ついてしまったかも。思い当たることがないか、よく考えてみて。<br><br>　あなたにとっては正論でも、相手の受け止め方はどうだったでしょうか。できた傷を放っておいても……',
'　10月の仕事運はかなり良いです。大きな苦労をすることなく、多くを得られる運気。[%NAME_SELF%]が持っている仕事上の目標は、達成できることでしょう。<br><br>　職場の人間関係も順調で、快適な職場環境となり、毎日仕事に行くのが楽しみになりそう。上司からは信頼、後輩からは尊敬を受けて……',
		),
		);



// 結果テキスト
$text = array(
		array( "nw22_069_1", 
'　10月の恋愛運はゆったりモード。新しい出会いがあっても、急いで恋愛関係に進もうとせず、良い友達になるところから進めてみて。<br><br>　今は、新たな交友関係を築くのにいい時期で、楽しみながら交流を深めていくことが大切。ここで土台作りをしっかりしておけば、今後友達から恋人へと自然に変化していきやすくなります。<br><br>　心地よい関係をはぐくんでいく中で、相手の持ちをうまく理解できるようになることが、恋愛に発展したときに活かされていくんです。恋人作りを焦る必要はないから、どんな恋愛を望んでいるのか、[%NAME_SELF%]自身の心をゆっくり見つめてみて。',
'　10月の恋愛運はイケイケモード。恋人募集中であれば、良いパートナーが現れそう。気持ちをまっすぐに伝えてきてくれて、一緒にいて疲れない人です。<br><br>　今恋人がいるなら、相手の結婚願望が強くなり、そろそろ結婚の話が出でくる予感。向こうから「親に会って欲しい」などと言ってきたら、その場ですぐ日にちを決めてしまいましょう。<br><br>　いずれにしても、相手の行動に合わせていくのが運気に乗るコツ。[%NAME_SELF%]の恋愛運は良い波に乗り、どんどん上り調子に進んでいきますよ。その良い流れをうまくつかんで、大きな愛を手に入れてくださいね。',
'　10月の恋愛運は視点の変えどき。これまで[%NAME_SELF%]が、新しい出会いを外へ外へと追いかけてきたのなら、もっと身近にいる存在を恋愛対象として見直してみて。<br><br>　逆に、これまで身近にばかり目が向いていたなら、出会いの場の枠をもっと広くしてみましょう。<br><br>　恋を求める範囲や方法、恋愛対象などをちょっと変えてみてください。思い切って新たな恋へと飛び込むつもりで行動すれば、良い相手とのご縁が生まれるはず。固定観念とはさよならして、新しい世界に向かう勇気を持てば、今まで思いもしないような人と巡り合うチャンスがきっと訪れますからね。',
'　10月の恋愛運は動きがある予感。新しい恋の相手は[%NAME_SELF%]の身近にいるようです。あなたがよく話す人で、あなたのことをとても優しい人だなと思っている人、心当たりがあるのでは。あなたはごく普通に接しているだけでも、その人は[%NAME_SELF%]と話していると胸がときめいてドキドキしているんです。<br><br>　あなたの身近のそんな人と、恋が始まる可能性が高そう。気が付いたらしょっちゅう目が合う人なども、候補ですね。<br><br>　恋人募集中で早く相手が欲しいなら、新しい出会いに期待するよりも、身近にいる人との関係を発展させるほうがおすすめです。',
'　10月の恋愛運は好調です。多くの出会いの中で、[%NAME_SELF%]と気が合いそうな人と巡り合えるでしょう。でも気が合ったらすぐにお付き合い、というのではなく、しばらくは友達として様子を見ていって。<br><br>　その人よりもっといい相手と巡り合える可能性も大いにあるので、慌てる必要はないんです。玉の輿や逆玉の輿できる運も向いてきているから、裕福な人との出会いも期待できそう。<br><br>　とにかく今は、多くの人と出会い、交友関係を広げて、人を見る目を養っていくといいですよ。友達付き合いが盛んになるにつれて、あなたの魅力も増していきます。',
'　10月の恋愛運は大きく動く気配。[%NAME_SELF%]には身近に、その人の前だとなぜか素直になれなくて、わざと意地悪なことを言ってしまう、そんな人がいるのでは。<br><br>　あなたはきっとその人が好きなんです。でも、これまで自分の気持ちに気が付かなかったみたい。あなたはその人のことを強く意識するようになり、自分から告白をしようと思うでしょう。<br><br>　そう思ったなら、できるだけ早く告白を。気おくれしているうちに、他の人にその人をとられてしまわないように、思い切って気持ちを伝えましょう。自分の気持ちが決まったら即行動、が大切です。',
'　10月の恋愛運は良い方へ向かおうとしています。[%NAME_SELF%]の中に、ずっと恋心を抱いてきた人がいたら、ここが結ばれるチャンス。自分から声をかけてみましょう。<br><br>　二人だけでデートができれば何よりだけど、いきなりそれは難しいなら、連絡先の交換をしてメールのやりとりなどから始めてみて。過度に心配する必要はないので、胸の高鳴りを楽しみながら、恋の行く先を期待しましょう。<br><br>　想いが実りやすい時期なので、この運気の波にうまく乗っていって。恥ずかしがって止まっていてはもったいないから、勇気を出して行動を起こしてくださいね。',
'　10月の恋愛運は発展していきます。今までは単なる友達だったり、同僚のひとりとしてしか思っていなかった人のことが、急に輝いて見えてきそう。<br><br>　恋人候補は身近なところにいるので、新たな出会いを求めていくよりも、周囲をよく見直してみて。いつも何気なく話している相手も、少し見方を変えてみれば、今まで気が付かなかった魅力がたくさん見えてきますよ。<br><br>　それから、[%NAME_SELF%]自身を輝かせることも大切。服装の雰囲気を変えてみたり、明るい笑顔を振りまいたりと、あなたが自ら発信していくことで、その魅力に関心が集まります。',
'　10月の恋愛運は大きな変化はなさそう。でも、[%NAME_SELF%]に今好きな人がいるなら、その人との関係は順調に進みそうですよ。急展開ではありませんが、ゆっくり上昇していく感じです。<br><br>　新しい出会いとしては、何となくいいな、と思う人と巡り合えるでしょう。一目ぼれのような強い印象を持つわけではないけれど、優しい気持ちが芽生えるような恋が、穏やかに進展していきそう。<br><br>　恋愛に疲れて喜びを感じられないようなときは、ほかのことに集中して、一旦恋をお休みしてみて。しばらく恋愛から離れてみたほうが、気持ちが前向きになれますよ。',
'　10月の恋愛運は良いです。恋愛運はこれから着実に上がっていくので、ステキな恋が期待できるでしょう。髪形や服装にこだわったり、音楽や絵画に触れてみたりと、外側も内側も自分磨きをして魅力を輝かせていきましょう。<br><br>　一目ぼれされる可能性も高く、出かけた先で、誰かにいきなり声をかけられるなんてこともありそう。そうなっても警戒しすぎないで。その人が[%NAME_SELF%]の好みなら、なおさらです。せっかくなので連絡先の交換くらいはしておきましょう。<br><br>　また、復縁や再会にも縁がある時期なので、気になる人に連絡してみるのもいいですよ。',
'　10月の恋愛運は情熱的。例えば一目ぼれをした相手に、声をかけたくてしょうがない、そんな衝動にかられそう。<br><br>　好きになった相手には、もう恋人がいる可能性も。でもこの時期の[%NAME_SELF%]には、感情を抑えたり隠したりするのは難しいこと。相手に恋人がいようが好きな人がいようが、簡単には引き下がれないでしょう。<br><br>　抑えきれない気持ちがあふれ出てくるあなたの熱い押しに、相手はあなたの方を選んでくれるかも。熱い気持ちにしたがって、情熱のままに動いていくと、恋の見通しが立ちそう。でも、危険な恋には注意してくださいね。',
'　10月の恋愛運は楽しげな雰囲気。多くの出会いの中から、[%NAME_SELF%]に好意を寄せる人が出てきそう。特にSNS上にチャンスがあるので、SNSをやっていないなら、ぜひ始めてみて。<br><br>　ただ、急接近で即恋人同士に、とはならないでしょう。この人いいなと思う人を見つけてから、親密になるまでには、少し時間が必要です。<br><br>　友達から先に進む速度はゆっくりになりますが、恋人になれる日を心待ちにしながら、仲の良い関係を築いていって。じっくり時間をかけたほうが、相手への理解も信用も増すもの。今後の恋の進展を楽しみにしてください。',
		),
		array( "nw22_069_2", 
'　10月の仕事運は追い風を受けて上向きです。いい上司やリーダーが、[%NAME_SELF%]の良さが生きるぴったりの仕事を任せてくれます。<br><br>　自分の成果に手ごたえを感じると、今度は自分がリーダーになりたいと思うかもしれないけれど、それはもう少し待って。今[%NAME_SELF%]が一番活躍できる場所はそこなのだから、今はしばらく補佐役に徹して、こつこつ努力を重ねましょう。<br><br>　きちんと良い仕事をしていけば、徐々に収入もついてきてくれますよ。この先にある展開を楽しみにしながら、目の前の仕事をひとつひとつ丁寧にこなしていくことが肝心です。',
'　10月の仕事運は下向き加減。[%NAME_SELF%]ひとりで全てを抱え込まず、困ったときは周りの人の助けを借りて、仕事の負担を自ら軽くしていきましょう。<br><br>　また、あまり大きなことは控えめに。例えば大きな企画の提案や転職などが頭に浮かんでも、考えを温めるにとどめて、実行するのは少し先にしましょう。<br><br>　今は自分の目の前にある仕事を堅実にこなして、将来の成功への道筋を作っていく時期なんです。現状維持が肝心な時なので、大きな進展を急ぎたい気持ちが湧いても自分の中に抑えておいて。勉強や資格取得などに力を入れて、今後に備えてくださいね。',
'　10月の仕事運は大きな変化がありそう。難しいながらもやりがいのある仕事を任せられそうなので、その時に備えて、勉強や情報収集などしっかり準備をしておいて。<br><br>　その仕事は、[%NAME_SELF%]のキャリアをさらに上げていくきっかけにもなる大事なもの。楽しみながら取り組んでいけるので、この機会にぜひ挑戦してみましょう。<br><br>　自分の仕事の手が空いたときは、自ら進んで周りの人に声をかけ、仕事を手伝ってあげましょう。人の役に立って感謝されることで、今後[%NAME_SELF%]が難局に立たされた時、次はあなたが助けてもらえることになりますよ。',
'　10月の仕事運はあまり大きな変化はなさそう。[%NAME_SELF%]の今の仕事はやりがいの感じられるものでしょうから、その仕事を精一杯続けていきましょう。<br><br>　もしそろそろ華やかに転職してみたいと思ったとしても、ちょっと待って。資格やスキルを身につけたり、人間関係を円滑にするための工夫をしてみたり、まだまだそこでするべきことがあるはず。今の仕事のことで新たにできることに目を向けてみて。<br><br>　今の職場で与えられた仕事をうまく振り分けたりして着実に処理することが大切です。日々楽しみながら業務をこなしていってくださいね。',
'　10月の仕事運はちょっとした変化の予感。今の職場で、[%NAME_SELF%]の提案した企画やアイデアが採用されて、それが実現に向けて動き出すかもしれません。<br><br>　今までよりも仕事の責任は重くなりますが、その分やりがいを感じられるはず。せっかくのチャンスなので、成功に向けて全力で取り組みましょう。<br><br>　あなたが仕事で迷ったり悩んだりしても、助けてくれる仲間がいるので失敗を恐れず挑戦していって。きっと良い結果が出るでしょう。それがきっかけで、あなたの評価は上がり、さらなる飛躍を目指せる機会がもたらされそう。この経験は今後の宝になります。',
'　10月の仕事運は好調です。自分にはちょっと難しいかな、と思う仕事にも、敢えて挑戦してみてください。いつもより一段上を目標にしていくことが、[%NAME_SELF%]を大きく成長させてくれるんです。<br><br>　自分で自分の限界を狭めるのはもったいないから、自分はもっとできると信じて、臆することなく上を目指していきましょう。それから、自分の天職とは何か、考えてみて。今の仕事が天職だと思うなら、その道をまっすぐに進んでいくことです。<br><br>　今の仕事が今ひとつピンとこないなら、転職も視野に入れて。とにかく、向上心を持つ働き方が、一番大事ですよ。',
'　10月の仕事運はとっても良いです。これまで[%NAME_SELF%]が、やりたい仕事に向けて着実に準備を積み重ねてきた努力が、報われるときが来たんです。望んでいた仕事につけたり、大きな仕事を任されたりする可能性が大きく高まる時期。この運気に乗って、ぜひ大きな成功を手にしてください。<br><br>　[%NAME_SELF%]の能力や才能が高い評価を得て、意外な支援を受け、昇給や昇進につながるかもしれませんよ。<br><br>　やってきたチャンスは、きっちりものにしていきましょう。自分を信じて前に進んでいってください。自信がなくて心配になったら、休みながらで大丈夫です。',
'　10月の仕事運は良好です。今[%NAME_SELF%]が携わっている仕事は、良い結果へと向かうでしょう。<br><br>　あなたがもし転職を考えているなら、まずは今の職場でできる事を精一杯やることが先決。やり残したことがないか考えてみて。せっかくの好調期。抜擢や昇格も期待できるので、ここで今の職場を辞めてしまうのはもったいないです。<br><br>　転職をするとしても、今の職場でやれる事を全てやり切ってからにするほうが、もっと好条件の転職が叶いますよ。今の場所でできるだけ大きな成果を出すことが、将来的により良い仕事へとあなたを導いてくれるんです。',
'　10月の仕事運は変化がありそう。事務の仕事が営業に、反対に営業の仕事が内勤に、というような異動を命じられたりするかもしれません。いずれにしても、これまでとは違った分野の仕事を任せられることになりそうです。<br><br>　最初はわからないことが多くて戸惑うことでしょう。でも、それも慣れるまでのこと。何事も経験です。勝手がわかってしまえば、やりがいを感じ、楽しく働けますよ。<br><br>　この変化は、[%NAME_SELF%]にならこの仕事を安心して任せられる、という上司の信頼と期待の表れなんです。だから、一生懸命取り組んでいってくださいね。',
'　10月の仕事運は厳しめです。自分には難しいのではと感じる仕事をふられたり、責任の重い立場におかれたりするかもしれません。でも、ひるむことなく挑戦してみてください。<br><br>　今は、厳しいと感じることでも精を出して取り組むほうが良いとき。多少の疲れは覚悟して、仕事の実績をしっかり積み上げていって。[%NAME_SELF%]の今後の仕事人生は、この時期頑張れるかどうかで大きく変わるんです。<br><br>　懸命に働くあなたを見ていて、高く評価してくれる人が必ずいます。だから、遊びたいと思うときも、誘惑に負けずに仕事に精を出してください。',
'　10月の仕事運はまずまずです。この時期は、職場の後輩への接し方を見返してみましょう。[%NAME_SELF%]が何の気なしに言ったことで、後輩は傷ついてしまったかも。思い当たることがないか、よく考えてみて。<br><br>　あなたにとっては正論でも、相手の受け止め方はどうだったでしょうか。できた傷を放っておいても、自然と治ることはありません。お互いのためにも、よく話し合ってみることです。<br><br>　また、仕事に多少の嫌なことはつきもの。ちょっとうまくいかなくなったからって会社を辞めるなんて考えないで。今の職場にいるほうが、恩恵を受けられますよ。',
'　10月の仕事運はかなり良いです。大きな苦労をすることなく、多くを得られる運気。[%NAME_SELF%]が持っている仕事上の目標は、達成できることでしょう。<br><br>　職場の人間関係も順調で、快適な職場環境となり、毎日仕事に行くのが楽しみになりそう。上司からは信頼、後輩からは尊敬を受けて、皆に慕われます。<br><br>　でも、そんな運気の良い状況にあぐらをかかないように。人に何かしてもらったら、自分も何かの形できちんとお礼を返すようにしてくださいね。どんな小さなことでも、人にしてもらったことにはしっかりと感謝の意を表するのが大事ですよ。',
		),
		array( "nw22_069_3", 
'　10月の金運はやや厳しめ。[%NAME_SELF%]が気づかないうちに出費がかさんでしまいそうなので、お金の出入りをいつもより意識するよう心がけて。<br><br>　例えば転んでケガをしたり風邪をひいてしったりして、治療費がかさまないように、日頃から健康には気を付けてくださいね。<br><br>　また、外出時の食事はなるべくお弁当を持参して、外食はほどほどに。ほかにも、500円玉貯金をするとか、お給料から決まった金額が天引きされていくようにするといいでしょう。[%NAME_SELF%]なりの節約術を見つけ、いろいろ工夫していくと楽しく節約できますよ。',
'　10月の金運は良好です。でも、お金に余裕が出てきそうなこの時期こそ、お財布の紐を引き締めて。お金があるから大丈夫、と気を緩めてどんどん使ってしまったら、お金はあっという間に無くなってしまいますよ。<br><br>　意識的に無駄遣いを減らし、節約を心がけて堅実に暮らしましょう。<br><br>　金運が良いとは言っても、一攫千金を狙える運勢というわけではないので、ギャンブルや投資でひと山当てようなどということは考えない方が身のためでしょう。結局のところ、地道にコツコツとお金を貯めていくのが、[%NAME_SELF%]の金運を活かす一番の近道となるんです。',
'　10月の金運はまあまあといったところ。地道に節約して貯めたお金が、後で役に立ってくるので、出費を抑えられるようにうまく工夫してくださいね。そうすれば少しずつでもお金は貯まっていくものです。<br><br>　まとまったお金が手に入るようなことはなくても、暮らしに困るようなこともないので、安心を。この時期は現状維持が何よりです。<br><br>　お金を使うなら、飲食や娯楽といった形に残らないものにより、服や靴など後に換金できそうな物のほうが、金運アップを期待できそう。安いものではなく、高くてもお金を出す価値あるものを、少しだけ買うのがおすすめです。',
'　10月の金運はやや不調。出費が多くなりそうで、特に交際費にお金がかかりそうですが、人との交流は今の[%NAME_SELF%]にとってとても大切なこと。だから貯金よりも人付き合いを優先して、交際費は惜しまず使ってください。<br><br>　この時期に培った人脈は、後になって役立ってくるでしょう。この先誰かからまとまったお金が得られるような話がもたらされたりして、一財産を獲得する可能性だってあるんです。<br><br>　お金は自分ひとりで生み出されるものではありません。金欠になったとしても、助けてくれる人は出てきます。そのためにも、人脈は広げておいてくださいね。',
'　10月の金運は良好です。大きな財産を手にできるチャンスが来たら、すぐに乗ってみてください。これだ、と思ったら、自分の直感を信じて動いてみましょう。どうしようかと迷っているうちに、その話はなかったことになりそうなので、決断はお早めに。<br><br>　どうしてもひとりで決めるのをためらってしまう場合は、信頼できる人に相談してみて。金運は自然とついてくるので、しばらくはお金に苦労することはなく、安定した生活をおくることができるでしょう。<br><br>　今まで培ってきた経験や知識を活かして、休みの日に副業で稼ぐのもおすすめですよ。',
'　10月の金運は順調です。一攫千金を狙うのは難しいので、宝くじやギャンブルには向きませんが、[%NAME_SELF%]自身の能力を最大限に活用して大金をつかめる運気。お金を稼ぐために、今の自分に何ができるか、よく考えてみましょう。<br><br>　もし余力があるなら、本業とは別の仕事を持ってみるのもいいですね。空き時間に[%NAME_SELF%]の好きなことでお小遣い稼ぎをやってみて。<br><br>　やり始めの利益は少なくても、徐々に大きく稼げるようになって、やがて本業を上回るくらいの収益が上がる可能性だってありますよ。好きなことをして、楽しくお金を稼いでいってくださいね。',
'　10月の金運はとても良いでしょう。大金を獲得できる可能性も大。かといって、お金が入ってきたそばから湯水のように使っていたら、みるみる底をついてしまいます。家計簿をつけたり使い道の計画を立てるなど、お金の出入りをしっかり管理してくださいね。<br><br>　欲しい物を思い切って買うにしても、将来に備えてある程度貯金をするのを忘れずに。<br><br>　ただ、[%NAME_SELF%]が日頃からお世話になっている人へお礼の気持ちで何かを贈るとか、人のためにお金を使うのには有意義な月。自分に対する出費は、健康管理や精神的癒やしなどに重きを置いてみてください。',
'　10月の金運は順調です。何かに投資をしてみるときは、しっかり勉強をしてから取り組めば、儲けが出そう。とはいえ、投資に伴うリスクは常に頭に入れておいて。あれもこれもと欲を出すのは控えましょう<br><br>　買い物は貴金属のように、価値の変わらないものを買うと、財運が良くなります。手の届く範囲でいいので、検討してみて。<br><br>　誘われるがままに、飲食や遊興費など形に残らないものにお金をかけていたら、あれよあれよという間にお金は消えてしまいます。[%NAME_SELF%]の将来のためにも、先を見据えて、今から計画的な貯蓄を心がけることが大事ですよ。',
'　10月の金運は恵まれます。何かしら大きな財産を手にする可能性も。金銭的に余裕があるなら、投資をしてみるのもいいでしょう。成功すれば、かなりまとまったお金が手に入りそう。ただ、きちんと勉強したり、専門家の意見を聞いて、慎重に。<br><br>　ツキが味方してくれて、懸賞に当たるとか、思わぬお小遣いやボーナスがもらえるとかもありそうです。<br><br>　でも、お金があると気が緩んで、つい衝動買いをしてしまいそう。何か欲しくなっても、すぐに買わずに一晩寝かせましょう。後悔しないよう、[%NAME_SELF%]が本当に必要だと思うものを選んで買うのが賢明です。',
'　10月の金運はとても良いです。ただ、運に任せて一攫千金を狙うようなことは慎みましょう。宝くじを買うくらいならばやってみるのもいいかもしれませんが、ギャンブルにお金を注ぎ込むのはおすすめできません。<br><br>　お金は堅実に働いて稼ぐもの、というのが基本。働かずにお金が入ってくるという考え方はせず、働いてしっかり貯金していくのが結局は一番良い方法です。<br><br>　お金を使うなら、人のために使いましょう。後からいい形で[%NAME_SELF%]に返ってきてくれます。一方、直感的に欲しいと思ったものは、買ってみて。その買い物は当たりとなりそうですよ。',
'　10月の金運は好調です。お金に余裕があるでしょうから、[%NAME_SELF%]の好きなことにお金を使うだけでなく、お世話になった人にはぜひ何かプレゼントをしてくださいね。<br><br>　お金は使って循環させることが重要。貯めこんでいるだけでは、お金の流れは生まれないんです。この時期は、お金の有意義な使い方を考えて、ほどよく出してお金の巡りを良くしていきましょう。<br><br>　募金箱を目にしたらお釣りを入れるとか、良い活動には寄付をするとか、人に感謝されるようなお金の使い方をしていってください。そうした行為が、さらに金運を上げてくれます。',
'　10月の金運はそこそこです。お金の循環は良く、たくさん入ってくるのですが、その分出ていくので、収支は差し引きゼロ程度になりそう。だから、お金を使うのは必要最小限に留めておくのが良いですよ。<br><br>　無駄遣いを抑えるために、家計簿をつけて、お金の出入りを管理するようにしましょう。お給料から決まった額を貯蓄に回すようにしてください。<br><br>　いつも意識して節約を心がけることも大切。外食は控えめにして自炊中心の食生活にするだけでも、だいぶ食費が抑えられます。[%NAME_SELF%]が少し意識を高めれば、お金は徐々に貯まっていくものなんです。',
		),
		array( "nw22_069_4", 
'　2022年10月に輝くのは、あなたの笑顔。気の置けない仲間たちと一緒に、笑って過ごせそう。友達や恋人など、[%NAME_SELF%]をよくわかっている人たちが、いつでもあなたを支えてくれるから、何があっても心配は無用。<br><br>　悩みが生じても、相談できる相手はたくさんいるので、じきに解決します。そうして[%NAME_SELF%]は笑顔を取り戻すことができるんです。<br><br>　ちょっと金欠かなと思ったらごちそうしてくれる人が現れるなど、なにかと人に恵まれそうなので、さほどお金に困ってしまうようなことはないでしょう。その輝く笑顔があなたに幸せを運んできます。',
'　2022年10月に輝くのは、あなたの向上心あふれる凛々しい顔です。この時期の[%NAME_SELF%]は、先輩から教わるべきことが次々出てくる環境におかれそう。そんな中、あなたは明るく目を輝かせ、新しいことをたくさん吸収し学びながら成長していくことができるでしょう<br><br>　苦しいときもありますし、かなり忙しくもなるはずです。でも、その忙しさを楽しんで、新しい世界を発見できたと喜べるあなたなら大丈夫。<br><br>　いろいろなことを覚えて身に着けていくには苦労も少なくないけれど、苦労には全て意味があるんです。その苦労が将来、[%NAME_SELF%]を支える基軸となってくれますよ。',
'　2022年10月に輝くのは、あなたの奉仕の心です。[%NAME_SELF%]は、方々から必要とされ、自分のためよりも人のため動くことが多くなるでしょう。忙しすぎて、どうして自分だけがこんな損な役割を担うことになるのか、などという憤りを感じたりもしそう。<br><br>　でもね、誰かに必要とされるって、生きがいを感じられる素晴らしいことなんです。だから、あなたを頼りにしてくれる人がいることは、幸せなことですよ。<br><br>　[%NAME_SELF%]に助けられた人たちからは、何らかの形でお返しがあるでしょう。今後あなたが困ったときには、真っ先にかけつけてくれますよ。',
'　2022年10月に輝くのは、あなたの助け合いの精神です。[%NAME_SELF%]がこれまで、人に頼ることを避けがちだったなら、助け合いの気持ちを意識して。助け合いとは、持ちつ持たれつ、頼り頼られる関係の中で生きること。<br><br>　これから試練や波乱に遭っても、ひとりでどうにかしようともがくのではなく、素直に人を頼ってくださいね。誰だって人はひとりでは生きていけないのだから。<br><br>　あなたの優しい魅力が、自然と人との出会いを生んでくれます。その出会いを大切に育てるためにも、してほしいことがあったら遠慮せずに言ってみて。人は頼られると嬉しいものですよ。',
'　2022年10月に輝くのは、あなたの明るさです。この時期、[%NAME_SELF%]はとても前向きに、上機嫌で日々をおくることができるでしょう。あなたが明るい気持ちで毎日を過ごすことで、周りの人を明るく照らし、元気を与えてあげられます。<br><br>　幸せを感じ心に余裕があるから、他の人を思いやることもできます。そんなあなたと話をしたいと思う人が絶えず現れ、人の相談に乗ったり、励ましてあげたり。信頼が信頼を生み、人とのつながりが広がります。<br><br>　明るく輝く[%NAME_SELF%]は、これからさらに前進していき、飛躍、そして成功へと導かれていきますよ。',
'　2022年10月に輝くのは、あなたの行動力です。10月は予定が次々と入り、気づいたら休みの日は全部埋まっていたというくらい、忙しい日々になりそう。<br><br>　忙しくなりすぎないように、必要なことと不要なことを整理していって。気乗りしないことはなるべく断って、予定に余裕を持たせましょう。そのほうが、充実した体験ができたり、ステキな仲間と出会えたりしますよ。<br><br>　また、人の先頭に立って引っ張っていく力を発揮する機会が増えそう。なにかと[%NAME_SELF%]がまとめ役となるので、疲れてしまうかも。でも、できる限り引き受けると、運気が上がります。',
'　2022年10月に輝くのは、あなたの行動する姿です。[%NAME_SELF%]がやりたいと思うことは、ためらわずにやってみて。遠慮したり、迷ったりする必要などありません。思い切って攻めの姿勢で進んでいき、成功をその手でつかみとりましょう。<br><br>　運勢は良い方向へと確実に動いていくから、その良い波に乗り遅れないように、素早く行動を。行動することが、あなたに大きな幸せをもたらすんです。<br><br>　[%NAME_SELF%]の歩む道の先には幸せが待っています。自分の夢は自分の手で叶えよう、という明確な意志を持っていれば、きっとその通りになりますよ。',
'　2022年10月に輝くのは、あなたのゆったり安らいでいる姿です。勢いに任せて走り過ぎず、きちんと休憩を入れることを忘れずに。力で物事を押し進めようとして、つまずかないように気を付けて。<br><br>　意識的に深呼吸をし、肩の力を抜いて、急がずのんびりとやっていきましょう。焦らなくても、しばらくすれば落ち着いてきます。今はゆっくりと過ごし、[%NAME_SELF%]が心身共に穏やかにいられることが大切。<br><br>　休むことに後ろめたさを感じなくていいんです。今は英気を養っておく必要があるのだから、周りも理解してくれます。静かな時間を楽しんでくださいね。',
'　2022年10月に輝くのは、あなたの頑張る姿。今までの努力が報われて、公私ともに穏やかな追い風が吹いてくるでしょう。もう無理かな、とあきらめかけていたことも、実現に向かっていきます。ライバルがいたとしても、気にする必要はありません。自分がすることに集中して取り組めば、自ずと道は開かれていきます。<br><br>　10月は思い切って新しい世界に足を踏み入れてみましょう。さまざまな刺激が、[%NAME_SELF%]を成長させてくれますよ。<br><br>　あなたと同じ感覚の仲間と協力し、助け合いながら絆を育てていけば、楽しく頑張っていけるはずです。',
'　2022年10月に輝くのは、あなたの大胆に行動する姿。<br><br>　難しいことにも挑戦したいという、やる気があふれてくるでしょう。でも、さあこれから、と思ったときに邪魔が入る可能性も。人間関係など、何かめんどうな問題が生じたら、放っておかずにまずはその問題を先に解決させて。何か起きたらすぐ対処することで、問題は小難に抑えられるものです。<br><br>　この時期は決断力も行動力も高まるので、ここがチャンスと思ったら、どんどん決断して前進していきましょう。失敗を怖がらずに大胆に行動することで、[%NAME_SELF%]の輝きは増していきます。',
'　2022年10月に輝くのは、あなたの仲間から得る助けです。[%NAME_SELF%]が輝く未来へと向かっていけるのは、いろいろな人たちのおかげ。人に助けられて今のあなたがあるんです。<br><br>　お世話になった人たちには、きちんとお礼をして、感謝の意を表しましょう。お礼には相手の好きな食べ物が喜ばれそうですよ。<br><br>　受けた恩を忘れずに、助けてくれた人にはずっとついていくことが、あなたの幸せにつながります。そして、自分の幸せを人と分かち合い、分け与えていきましょう。優しさと思いやりを周囲に振りまいて、幸せの輪を広げていってくださいね。',
'　2022年10月に輝くのは、あなたが得られる友情です。[%NAME_SELF%]の友人と楽しく過ごせる月になるでしょう。<br><br>　自分ひとりの力で何とかしようとするのではなく、友人に支えてもらうこと。そうしてあなたは夢や目標に向かって頑張ることができるんです。困ったときは友人を頼って切り抜けるようにしてください。<br><br>　[%NAME_SELF%]の輝く未来には、人の助けが必要です。逆に言えば、どんな苦しい状況にぶつかっても、人に助けてもらえれば、困難を乗り越えることができるのです。あなたはひとりではなく、良い仲間がちゃんといる。それをいつも思い出してくださいね。',
		),
		);
?>