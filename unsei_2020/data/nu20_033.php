<?php
/**
 * menu_id : nu20_033
 * 波羅門 2月運：一人用
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'nu20_033',
			'contents'			 => 'baramon2_zap',
			'img_name'			 => 'zap_baramon2',
			'teller_name'		 => '波羅門',
			'isp_mid'			 => '52v032',
			'nif_menukey'		 => 'unsei_2020_032',
			'price'				 => '600',
			'discount'			 => '540',
			'design_cd'			 => '6',
			'person'			 => '1',
			'release_date'		 => '20200123',
			'title' => '波羅門がズバリ鑑定【2020年2月の運勢】あなたのお金/恋愛/仕事',
			'caption'			 => '波羅門があなたの2020年2月の運勢をズバリ占います！　お金回りはよさそう？　新たな出会いや、恋の行方はどうなる？　仕事は無理なく順調に進む？　この2月があなたにとってどうなっていくのかしっかりとお伝えします！',
            'base_1_title_self'	 => 'あなたのオーラ',
            'base_2_title_self'	 => 'あなたの基本性格',
            'base_1_title_other' => 'あの人のオーラ',
            'base_2_title_other' => 'あの人の基本性格',
			'1_min_title' => '2020年2月の金運◆お金回りはよさそう？',
			'2_min_title' => '2020年2月の恋愛運◆あなたに訪れる出会いと恋',
			'3_min_title' => '2020年2月の仕事運◆ストレスはない？　うまくいく？',
			'4_min_title' => '2020年2月◆波羅門からあなたへのメッセージ',
		);

// 小メニューロジック
$logic = 'a1';

// Next枠
$next = array( "nu20_029", "nu20_030", "nu20_031", "nu20_032", "nu20_034" );

// 一部見せテキスト
$free = array(
		array( "nu20_033_1", 
'　基本的には、お金に苦労することがない月になるようだね。思わぬ臨時収入が期待できるというわけではないけど、お金に関して大きな不安が訪れるということもなさそうだよ。もしかしたら、周りの人からも……',
'　この月は、お金に関して堅実に歩んだほうが良いね。節約することが鍵を握るから、無駄遣いをするのは禁物。気がついたら出費がかさんでいた……なんてことがないように、財布の紐をしっかりと締めるのが肝心……',
'　お金の動きが激しい月になるね。いつも以上にお金が入り、いつも以上にお金が出ていくようだよ。思いがけない臨時収入もあるかもしれない。最終的にはしっかりとお金を手元に残すことができるから、金運は良い月と……',
'　この月は金運の波があるね。もしかしたら、ちょっと厳しいタイミングもあるかもしれない。でも、多少の散財や小さな失敗だったら、すぐに挽回できるから安心していいよ。常にお金は手元に残り続けるから、限界まで……',
'　この月の金運はかなり良いようだ。普段通りにしているだけで、自然にお金が入ってくるような運勢だね。今まで積み重ねてきた努力が、お金となって手元にやってくる流れがある。嬉しい臨時収入も期待できそうだよ……',
'　この月、[%NAME_SELF%]さんの金運は相当良いみたいだ。臨時収入もあるだろうし、かなりのお金が入ってくる月になる。チャンスがあれば、迷わず乗っかったほうが良い月だとも言えるね……',
'　普段より散財が目立つ月になるかもしれないから要注意だね。気づけば出費が膨大になっているようなことがあるから、気をつけたほうがいい。この月は、堅実に乗り切ったほうが良さそうだ。<br><br>　特に……',
'　正しいことにお金を使えば、確かな幸運を招き入れることができる月だよ。大事な人達のために使ったり、募金や寄付をしたりするのもいい。無駄な使い方をするくらいなら、世のため人のためにお金を使ったほうが……',
'　ちょっとお金を使い過ぎる月になってしまいそうだね。この月は普段より大人しくして、使うよりも貯めることを考えたほうが良いよ。派手な散財はしないように。後悔してしまう可能性が高いから、大きな買い物は少し……',
		),
		array( "nu20_033_2", 
'　2月の恋愛運はかなり好調だと思っていいよ。どうやら、思わぬ出会いや進展があるようだね。多くのチャンスが……',
'　[%NAME_SELF%]さんにとって、穏やかな恋愛ができる月になるね。良いご縁に恵まれる気運も……',
'　この月の恋愛運は好調だね。[%NAME_SELF%]さん自身の魅力が高まるから、複数の異性から誘い……',
'　この月の[%NAME_SELF%]さんには、ちょっとしたすれ違いが起きやすいかもしれないね……',
'　2月の恋愛運は上がり下がりが激しいね。新しい出会いを求めたり、気になる相手と近づいたりするためには……',
'　2月には恋愛面で良い運気が舞い込んでくるよ。出会いにも恵まれるし、意中の相手がいるのであれば……',
'　恋愛面では激しい動きがありそうだね。良い展開も悪い展開も次々と起こるから、自分を見失わないように……',
'　この月の恋愛で鍵になるのは誠実さだ。目移りせずにまっすぐな想いを抱いていれば、良い運気を呼び込め……',
'　2月の恋愛運はちょっと良くないかもしれないね。[%NAME_SELF%]さん自身が目移りしてしまい……',
		),
		);



// 結果テキスト
$text = array(
		array( "nu20_033_1", 
'　基本的には、お金に苦労することがない月になるようだね。思わぬ臨時収入が期待できるというわけではないけど、お金に関して大きな不安が訪れるということもなさそうだよ。もしかしたら、周りの人からもちょっとした助けがあるかもしれない。<br><br>　ただ、調子に乗ってしまうと痛い目を見るから、油断は禁物だよ。一番危ないのは、普段はやらないような必要のない贅沢をしてしまうこと。この月の大きな出費が後になってから響いてしまう危険もあるから、そこだけは注意しなよ。<br><br>　大事なのは、無理せず流れに沿ってお金を使うこと。それだけ意識していれば、神経質に節約をしなくても大丈夫な月になるよ。',
'　この月は、お金に関して堅実に歩んだほうが良いね。節約することが鍵を握るから、無駄遣いをするのは禁物。気がついたら出費がかさんでいた……なんてことがないように、財布の紐をしっかりと締めるのが肝心。<br><br>　だけど、しっかりと倹約することができれば、困ることがない月だとも言える。さらに、自分のお金をしっかりと自分で守ることができれば、ちょっとした幸運もやってくるかもしれないね。いずれにせよ、慎重に歩むことで金運を上昇させられる月になるんだ。<br><br>　注意すべきなのは、食に関する出費だね。高い店での食事の誘いに乗りすぎないこと。どうやら飲食にまつわる誘惑が増えるようだから、いつも以上に気をつけたほうがいいよ。',
'　お金の動きが激しい月になるね。いつも以上にお金が入り、いつも以上にお金が出ていくようだよ。思いがけない臨時収入もあるかもしれない。最終的にはしっかりとお金を手元に残すことができるから、金運は良い月と考えていいだろう。<br><br>　[%NAME_SELF%]さんにとって、いつも以上に金銭感覚がゆるくなるようだが、多少の贅沢は大丈夫。でも、物欲が高まり過ぎる気配もあるから注意が必要だよ。何が何でも手に入れたい……という気持ちが湧いてしまうかもしれないが、使っていいお金とそうじゃないお金はちゃんと区別すること。<br><br>　節度さえ保てば、楽しくお金が使える月になるよ。出費が厳しいと感じることもないだろう。ずっと欲しかったものが手に入るかもしれないね。',
'　この月は金運の波があるね。もしかしたら、ちょっと厳しいタイミングもあるかもしれない。でも、多少の散財や小さな失敗だったら、すぐに挽回できるから安心していいよ。常にお金は手元に残り続けるから、限界まで追い詰められることはないのさ。<br><br>　人付き合いでの出費が多いかもしれないね。ただ、金は天下の回りもの。周りの人から助けられることもあるようだから、交際費を節約し過ぎると幸運を逃すかもね。だから、細かい出費にはあまり神経質にならなくても大丈夫だよ。<br><br>　ただし、欲張るとお金がなくなる運勢でもあるから気をつけること。そういう意味では、自分のためにお金を使うよりも他人のために使うことを意識したほうが良いね。',
'　この月の金運はかなり良いようだ。普段通りにしているだけで、自然にお金が入ってくるような運勢だね。今まで積み重ねてきた努力が、お金となって手元にやってくる流れがある。嬉しい臨時収入も期待できそうだよ。<br><br>　この月にやってくるお金は遠慮せず受け取ったほうがいい。さらに、そのお金を使うことでさらに強い運気が舞い込むよ。今まで我慢していたことや、心から楽しいと思えることに使ってみてごらん。<br><br>　金銭面で苦しい状況になることはないから、こういう月には大盤振る舞いになるのが幸福になるためのコツなんだよ。普段しないような贅沢をすることもおすすめできる。後先をあまり考えず、気楽にお金を使って大丈夫だよ。',
'　この月、[%NAME_SELF%]さんの金運は相当良いみたいだ。臨時収入もあるだろうし、かなりのお金が入ってくる月になる。チャンスがあれば、迷わず乗っかったほうが良い月だとも言えるね。<br><br>　助言者やパートナーの存在で、財産が増えていく傾向が強い。だからこそ、この月は特に出会いを大事にするんだよ。また、入ってきたお金は無駄遣いしないほうがいい。堅実に貯金していくことで、さらなる福を呼び込むことができるんだよ。<br><br>　ひとつだけ気を付けておきたいのは、親戚や友達のために散財してしまう可能性があるね。もちろん、必要なお金は使うべきだけど、自分が苦しくならないように注意すること。そこだけ覚えておけば、豊かで楽しい時間が送れるだろうね。',
'　普段より散財が目立つ月になるかもしれないから要注意だね。気づけば出費が膨大になっているようなことがあるから、気をつけたほうがいい。この月は、堅実に乗り切ったほうが良さそうだ。<br><br>　特に、お金の貸し借りに気を付けること。借りることもそうだが、親しい仲の相手でもお金を貸すことには慎重になるべきだね。このタイミングでむやみにお金を逃がさないために、お金の動き自体を減らすのが得策だよ。<br><br>　全体的には辛抱の月になるかもしれないが、良い予感もある。[%NAME_SELF%]さんの身内がお金を呼び込む機会を与えてくれる流れがあるようだよ。近い身内の人はもちろん、普段はあまり連絡を取らないような身内からも思わぬ幸運を授けられるかもしれないね。',
'　正しいことにお金を使えば、確かな幸運を招き入れることができる月だよ。大事な人達のために使ったり、募金や寄付をしたりするのもいい。無駄な使い方をするくらいなら、世のため人のためにお金を使ったほうがうまくいくんだ。<br><br>　行き過ぎた節約が運気を悪くする流れもあるから、財布の紐を締めすぎてストレスを溜めるより、いっそ使ってしまったほうがいいね。現金を他の資産に変えるのも良いだろう。もし投資を考えているのであれば、思い切ったほうがうまくいくようだよ。<br><br>　とにかく、あまり出し惜しみしないほうがいい。特に誰かが喜ぶことや、幸せになれることにはお金を使ってごらん。それが結果的に、[%NAME_SELF%]さんにも幸福をもたらすんだよ。',
'　ちょっとお金を使い過ぎる月になってしまいそうだね。この月は普段より大人しくして、使うよりも貯めることを考えたほうが良いよ。派手な散財はしないように。後悔してしまう可能性が高いから、大きな買い物は少し待ったほうがいい。<br><br>　お金を使うのであれば、自分を磨くことに使ったほうがいいね。勉強や美容など、自分の価値を高めるために使うお金は無駄にはならないし、良い気運を呼び込めるよ。<br><br>　ひとつ付け加えるならば、財布にあまり大金を入れないほうがいい。どうしてもお金が出ていく運勢があるから、無駄遣いを防ぐためにも必要以上の金額を持ち歩くべきじゃないんだよ。',
		),
		array( "nu20_033_2", 
'　2月の恋愛運はかなり好調だと思っていいよ。どうやら、思わぬ出会いや進展があるようだね。多くのチャンスが巡ってくるから、それを逃さないようにするのが大切なんだ。受け身になるより、積極的な姿勢でいたようが良いご縁を掴めるからさ。<br><br>　好きな相手がいるなら、さりげなくでもいいから想いを伝えるべきだね。そしたら、一気に関係が進み始めるよ。好きな相手がいなくても、自分とぴったりな相性の相手と出会える月になるようだ。<br><br>　でも、あくまで自分からチャンスを掴みに行くということを忘れちゃいけないよ。せっかくの良い流れを最大限に生かすための努力はすべきなんだ。[%NAME_SELF%]さんの行動が鍵になって、恋愛にまつわる物事が良い方向に動いていくからね。',
'　[%NAME_SELF%]さんにとって、穏やかな恋愛ができる月になるね。良いご縁に恵まれる気運もある。恋愛をうまく進めるためには、自分の感覚を信じるのがコツだよ。いつもより直感に頼ることで、幸福に近づくことができるんだ。<br><br>　意中の相手とちょっとしたいざこざがあっても、しっかりと解決に向かえば大丈夫。むしろ、二人の絆を深めるきっかけになるよ。この月は、時間を置くよりも早めに行動することが大事になるから、それを覚えておくんだね。<br><br>　ひとつだけ注意が必要なのは、甘い誘惑に気を付けること。直感が鈍っているタイミングで下手な誘いに乗ると、悪い運気を呼び込んでしまうかもしれない。目の前にあるのが、自分が幸せになれる恋愛なのかを見極めることが大切なんだ。',
'　この月の恋愛運は好調だね。[%NAME_SELF%]さん自身の魅力が高まるから、複数の異性から誘いを受けるようなこともあるかもしれない。良い相手に恵まれる可能性も大きいから、全体的にチャンスの月だと言える。今気になる相手がいるなら、距離を近づけることもできそうだよ。<br><br>　2月の恋愛は、相手に合わせ過ぎずに自分のやりたいように動くことが結果的に幸運を招くようだよ。異性に気を遣って疲れてしまうくらいなら、自由に振る舞うのが良いだろうね。<br><br>　ひとつ意識すべきなのは、異性の悪い面より良い面に目を向けること。悪い部分を気にし過ぎてしまうと、うまくいくものもうまくいかなくなる。良い関係を築くためには、相手の長所に注目してごらん。',
'　この月の[%NAME_SELF%]さんには、ちょっとしたすれ違いが起きやすいかもしれないね……異性にうまく気持ちが伝わらず、ぎくしゃくしてしまうこともあるようだ。良いご縁があったとしても、関係をうまく進めることができずに悩んでしまうタイミングだね。<br><br>　だからといって、暗い気持ちで優柔不断な態度を取っちゃいけないよ。この状況に運気を呼び込むためには、どっしりと構えて堂々とするべきなんだ。先延ばしせずに問題に向き合っていけば、実は取り越し苦労だった、なんてことも出てくるからさ。<br><br>　安定した心を保てば、良い出会いや、気になる人との進展も起こすことができる。そうすれば恋愛運も上昇して、望んでいる運命も手繰り寄せられるんだよ。',
'　2月の恋愛運は上がり下がりが激しいね。新しい出会いを求めたり、気になる相手と近づいたりするためには、運気の波を見極めることが大事になるよ。調子が悪いと感じたときは、無理な行動を取らないほうがいいだろうね。<br><br>　恋愛関係では、自分の価値観にこだわり過ぎると悪い流れを呼び込んでしまいそうだ。相手の言葉に耳を傾けるのが重要だから、心を開いて異性と接する姿勢を忘れずにね。誤解が生まれたときに、しっかりと話し合いをすることで、より関係を深めることができるようだよ。<br><br>　恋愛運を高めるためには、芸術に触れるといいだろう。デートなら、美術館や映画に足を運ぶのが吉だよ。チャンスがあれば、ぜひ出かけてごらん。',
'　2月には恋愛面で良い運気が舞い込んでくるよ。出会いにも恵まれるし、意中の相手がいるのであれば、期待していた動きがあるかもね。恋に溺れることなく、落ち着いて幸福な恋愛ができる流れも来ているようだから、異性と関係を深めるのには絶好のタイミングだよ。<br><br>　さらに運気を上昇させるためには、自分から愛情を捧げるという意識を持つことが大切だ。相手が何かしてくれることを待つのではなく、[%NAME_SELF%]さんが献身的な姿勢であること。その心がけが、色んな出来事を良い方向へ導いてくれるんだね。<br><br>　自分から与える、というのがこの月のテーマになる。自分から行動に移す勇気を持つんだよ。そうすれば、望んでいた運命に近づくことができるからね。',
'　恋愛面では激しい動きがありそうだね。良い展開も悪い展開も次々と起こるから、自分を見失わないようにするのが重要だ。色んな異性に目移りしてしまうようなこともあるかもしれないが、最終的には一途な想いを持っていないと悪い運気を招いてしまうよ。<br><br>　人間関係で小さなトラブルも起こりやすいから、行動するときには慎重にね。いつでも人と丁寧に接することを心がけていれば、悪い状況も避けることができるよ。<br><br>　悪い流れをくぐり抜ければ、良い流れも必ずやってくるのが2月の恋愛。電撃的な出会いや、好きな人との急接近がある可能性も高い。嫌なことがあっても落ち込まず、明るく振る舞っていればチャンスが勝手にやってくるよ。',
'　この月の恋愛で鍵になるのは誠実さだ。目移りせずにまっすぐな想いを抱いていれば、良い運気を呼び込めそうだよ。これから新しい相手と出会うというより、すでに知っている相手との恋愛が発展しそうな気配もあるね。<br><br>　2月は自分から行動を起こすよりも、待っていたほうが恋愛運は高まるようだよ。良い知らせがやってくるから、焦らずにじっとしているほうがかえってうまくいくんだね。<br><br>　さらに運気を上げるためには、外見を磨くことを怠らないこと。流行に合わせるというよりも、自分の好みのものを身に着けるほうがいいね。そうすることで、外見だけでなく内面も輝き始める。今まで以上に異性の注目を集めることができそうだよ。',
'　2月の恋愛運はちょっと良くないかもしれないね。[%NAME_SELF%]さん自身が目移りしてしまい、恋愛をうまく進展させることから遠ざかってしまうようだ。出会いもあるかもしれないが、幸せを感じられるのは先のことになるだろう。<br><br>　思った通りにいかず焦ることもあるかもしれない。でも、このタイミングだからこそ余裕を持つのが重要だよ。落ち着いて考えれば、自分が起こすべき正しい行動が見えてくる。少し慎重になり過ぎだと思うくらいがちょうどいいかもね。<br><br>　この月は、心を落ち着けて自分自身を見直す時間をしっかり取るための月だと考えてもいい。過去の恋愛を振り返るとかね。ゆっくり自分と向き合えば、見えてくるものがあるはずだよ。',
		),
		array( "nu20_033_3", 
'　大きなストレスが降りかかることはないだろうけど、倦怠感や停滞感を少し感じてしまうようだね。目の前の仕事は手際よくこなせるが、はっきりした手ごたえや達成感は得られないかもしれないな。<br><br>　そんな状況を打ち破るためには、[%NAME_SELF%]さんが自分で変化を起こそうと決意することが重要。ここぞというタイミングでは、自分の意見や意志を曲げちゃだめだ。いつもは空気を読んで仕事をしてしまう部分があるんじゃないか？　この月では、自分の芯をしっかりと持って進んでいく力が幸運を引き寄せるよ。<br><br>　ただし、自分が間違っていると思ったときには素直に反省すること。周りの人のことを軽んじてはいけないよ。自分も周りも大事にすることを忘れず、仕事に取り組んでごらん。',
'　2月の仕事運は良い傾向にあるようだよ。目上の人からの助けでうまくいくこともあるから、上司や先輩の意見にはできるだけ耳を傾けたほうが良いね。上との関係をうまく築くチャンスだから、それを意識すればストレスなく仕事に取り組むことができそうだ。<br><br>　何かを作ったり、企画を立てたり、アイデアを出したりすることに積極的になれば、さらに運気が上昇するよ。決断力と行動力が求められるから、はっきりした態度で物事に挑むべきだね。<br><br>　今までの[%NAME_SELF%]さんの経験や、自分自身の長所を仕事に生かす機会にも恵まれる。能力を発揮する絶好の機会だから、引っ込み思案にならないようにね。うまくいけば、一生の仕事を左右するための土台を築き上げることができる時期になるよ。',
'　良い仕事運が流れ込む月になるからこそ、少し慌ただしいかもしれないね。突然のチャンスがやってくることもあるようだ。この月では、じっくりと仕事に取り組むというよりもスピード感が重要になる。ひとつのことに集中して一気に取り組んだようが、良い結果を生み出すことができるよ。<br><br>　誰かの仕事を助けることで、[%NAME_SELF%]さんにとって良い導きが訪れることもあるようだね。自分の仕事だけでなく、周りに気を配りながら手助けすることで、仕事の上で大事な人間関係を自然に築くことができるよ。<br><br>　忙しい月になるけど、自分の体は大事にね。休むことも仕事だということを忘れずに。心身共に健康であれば、日々のストレスも乗り越えられるよ。',
'　2月は仕事でちょっと空回りすることがあるかもしれないね。迅速な決断を求められているとき、必要以上に迷ってしまい回りに迷惑をかけてしまうようなことがあるだろう。苦しいときだからこそ、周りの助けを借りるべきだね。<br><br>　うっかりすると色んなことを溜め込んでしまい、慌てることもあるだろう。そういうとき、ひとりで抱え込まずに、信頼できる相手に相談することが大切だ。仕事上の悩みを打ち明けるのもいいかもしれないね。誰かに話すことで、思ったよりもずっとストレスが和らいでいくようだよ。<br><br>　運気が良いとは言えないが、努力はちゃんと報われる流れはある。くじけずに仕事に取り組めば、その分だけ周りは評価してくれるからね。',
'　2月は、人望に恵まれる月になるよ。仕事上の人間関係が今まで以上にうまくいって、尊敬や信頼を勝ち取ることも大いにあるだろう。自分の能力が存分に発揮できるから、楽しく仕事ができるようだね。<br><br>　[%NAME_SELF%]さんの運気が良いからこそ、気を付けなきゃいけないことがある。たとえば、周りの仕事の粗が目に付いてしまい、それがストレスになる……なんてことがありそうだよ。自分の調子が良いときだからこそ、周囲には寛大な心で接することが大事だから、覚えておきな。<br><br>　2月は自分自身で物事の舵取りをしたほうが良いね。他人に決断を任せるのではなく、自分でできる選択は自分ですること。その心がけで、さらに良い流れに乗ることができるよ。',
'　仕事上の対立が出てくるかもしれないね。それは小さなものかも、大きなものかもしれないけど、この月は人間関係でストレスを抱え込んでしまうようだ。上の立場の相手とうまくやることを心がけることが、悪い事態を少しでも避けるのに有効だよ。<br><br>　下の立場の相手には、いつも以上に目をかけてあげると良いね。運気も上昇するし、思わぬ信頼関係が築くことができて、[%NAME_SELF%]さん自身の仕事もやりやすくなるだろう。<br><br>　2月はちょっと辛い月になるかもしれないが、粘り強く頑張ること。何事も投げ出さずに取り組めば、上向きの流れはやってくるよ。一度の失敗にへこたれずにいることで、新しい道筋が見えてくることもあるんだからさ。',
'　今まで夢に見てたようなことが叶う予感があるね。あきらめかけていたことを掴むチャンスがやってくるならこの月だよ。これを必ずつかめるように、心の準備をしておくことが大事だね。<br><br>　変化を起こすことで幸運を呼び込めるのが2月だから、やりたいことがあるなら飛び込んでみたほうが良いね。新しいことに挑戦するというのは、何かを捨てること。怖いかもしれないが、勇気を出してみればきっとうまくいくよ。<br><br>　さらに運気を引き寄せるためには、周りを助けることを惜しまないこと。見返りを期待せずに手を差し伸べることで、善意は巡り巡って[%NAME_SELF%]さんのところにやってくる。それが、仕事上のストレスも減らしてくれるんだよ。',
'　仕事面では地道な努力が必要な月になるね。一気に前進しようとするとつまずきやすいから、慎重に歩むのが大切だよ。積極的に仕事を頑張るというよりも、ちょっと気楽に取り組んだほうが、かえってうまくいくようだね。<br><br>　周りの環境が変わっていく月にもなるから、それに振り回されてストレスを感じるかもしれない。大事なのは自分の芯をしっかりと持つこと。[%NAME_SELF%]さん自身のこだわりや誇りを忘れずにいることで、不安は解消されるよ。<br><br>　今は目立ってしまうと周りから嫉妬を受けやすい時期でもある。仕事に取り組むときは、縁の下の力持ちのように陰で支えるくらいのつもりがいいね。そうすることで、穏やかな気持ちで毎日を送ることができるんだ。',
'　2月の仕事運は、基本的には良好だと考えていいね。考えるより行動に移すほうがうまくいくことが多いから、とりあえずは手を付けること。それだけで、想像以上に色んな仕事が順調に進んでいくのを感じられるよ。<br><br>　この月は仕事に夢中になってのめり込むよりも、冷静に客観視するような視点を持つべきだ。そうすることで、今までの非効率なやり方や、うまくいかなかったことの原因に気づくことができる。素直に反省することで成長できるタイミングだね。<br><br>　余計なストレスは感じずに仕事に取り組めるようだから、視野を広げる良い機会になるね。きっと、今までない発見や進歩があるから、心をいつも開いているのが大事になるんだ。',
		),
		array( "nu20_033_4", 
'　全体的には、良い運勢の月だと言えるね。これまでの苦労や努力に見返りがあり、周りの人達との関係もうまくいくだろう。心がさっぱりする月になるから、新たなスタートを切るのも良い。興味があることは何でも始めてみるべきだよ。<br><br>　目に見える幸運が舞い込むというよりは、見えない良好な流れに気づけば乗れているような月だね。だからこそ、素直な気持ちで暮らすのが大事。人脈が新しい幸せを引き寄せることも大いにあるから、他人に対して意地を張り過ぎないように気をつけること。<br><br>　周りの意見にも耳をしっかり傾けながら日々を送ることで、思わぬ幸運を手にすることもできるようだ。[%NAME_SELF%]さんらしい気楽さと笑顔を忘れずにいることが大切だよ。',
'　2月は良い運気に満ちているから、[%NAME_SELF%]さん自身の大きな成長が見込めるよ。穏やかな心で日々を過ごすことで、自分を見つめ直すことができる。それによって、今までの迷いを断ち切って前に進めるようなこともあるだろうね。<br><br>　そのために大事なのは、周りの人のために自分をないがしろにしないこと。自分自身を大切に扱うことで、他人にも本当に優しくできるということを忘れずにね。そうすることで、大事な人間関係もより深めることができるんだよ。<br><br>　他人に流されず、自分の選択を尊重する意志をしっかりと持てば、この月で飛躍することができる。今後の人生をさらに豊かにするための重要な一か月になるよ。',
'　2月は絶好調の月になると言って良さそうだね。直感を信じて思い付きで行動するだけで、高い運気が自然に運ばれてくることもあるだろう。思わぬ幸運が舞い込んでくる予感もある。<br><br>　好きなことを好きなように楽しめる月になるから、やってみたいことには挑戦するのが吉だね。新しい刺激を求め続けるくらいのつもりで目いっぱい動き回れば、色んなことがとんとん拍子に進んでいくようだよ。<br><br>　幸運が味方してくれる月だから、夢があるなら思い切って一歩踏み出してみるべきだね。きっと、今までなかったような手ごたえを感じられるだろう。一生を左右する転機が訪れるかもしれないから、後悔しないように色々と手を出してみるのが大事なのさ。',
'　もやもやした感覚が続く月になりそうだね。達成したかった目標にたどり着けなかったり、やり遂げたかったことを終えることができなかったり……不完全燃焼な物事がいくつかあるかもしれない。でもね、目に見える結果は出せなくても、しっかりと成長はできる月にはなるんだよ。<br><br>　努力をしっかりと続けることで、[%NAME_SELF%]さんの能力や魅力は磨かれているから、踏ん張りどころの2月になる。この成長の運気をより生かすためには、色んな人達と交流を持つべきだね。<br><br>　人との繋がりを大事にすることで得られるものがとても大きい時期になるから、仕事でも恋愛でも出会いを大切にしなきゃね。意外なところから助けがあるかもしれないから、常に人に対して優しい自分でいることを心がけるんだよ。',
'　2月は喜びに満ちた月になるようだね。周囲の人から尊敬を集めたり、もしかしたら深い愛情を手に入れたりできるような幸運がやってくるかもしれないよ。人生の成功に向かって確実に進むことのできる月になるから、運気を逃がさないようにすべきだね。<br><br>　この幸運を離さないためには、何事も自分がやりたいようにするのが肝心。自分が幸せになることを第一に考えることで、結果的に前向きな流れに乗り続けることができるんだよ。<br><br>　情熱と行動力が、[%NAME_SELF%]さんの持つ能力を一気に引き上げてくれるんだ。かなり上昇志向がある運気だね。この2月をきっかけに、今まで停滞していた物事が突然進み始めるようなこともあるようだよ。',
'　2月は、色んな壁に突き当たってしまう運気だと言えるね。嫌な仕事をやる羽目になったり、苦手な人と一緒にいなければならなかったりするようなことがあるかもしれない。肝心なのは、こんな時期だからこそ粘り強くいることだよ。<br><br>　何事にも根気強く取り組むことができれば、運気を引き寄せることができるから、すぐにあきらめてはいけないよ。また、自分に正直でいることにこだわるよりも、時には建前も使えるくらい柔軟であるほうが、物事はうまく運ぶようだね。<br><br>　とにかく、困難が訪れたときでも心を向き合うことが大事だ。この月を上手に乗り越えれば、今まで持っていなかった忍耐の力を手に入れることができるんだからさ。',
'　残念ながら、2月は不安が続く月になりそうだね。自信を失ってしまうような出来事や、人間関係での気がかりなことで、心が揺れっぱなしになるかもしれないよ。<br><br>　この時期を乗り切るために大事なのは、いらないプライドを捨てること。見栄を張って痩せ我慢をするよりも、自分の弱い部分を受け入れて、周囲にも見せてしまうくらいのほうがうまくいくようだね。<br><br>　理想とは違う自分に気がついて落ち込むこともあるかもしれないが、時には自分自身を甘やかすことも大切なんだ。辛くなったら、無理せず休むんだよ。自分が正しいと信じられる道をしっかり歩むことができれば、幸運を掴むチャンスもある。その前に潰れたらいけないよ。',
'　2020年で一番強い幸運が舞い込むのが2月になる。素晴らしい運気だと言えるね。大きなチャンスが必ずやってくるから、逃しちゃいけないよ。今求められるのは慎重さというよりも大胆さなんだ。思い切って飛び込む勇気を持つべきだね。<br><br>　自分自身が人生の主人公であると信じるくらいの豪快な態度でいることができれば、やることなすことうまくいくようだよ。どんな状況でも決断が鍵を握るけど、自分の感性に従った選択だったら、すべてが幸運に繋がるだろうさ。<br><br>　大きな変化が起こる予感があるけど、怯えちゃいけないよ。必要なのは前向きな意志だ。どんなことでも喜んで受け止められるような器の広さで、この月を最大限に楽しむべきだよ。',
'　新しいものに触れることで、どんどん運気が上昇していく月になるね。興味をそそられるものがあれば、手にとってごらん。ずっと行ってみたいと思っていた場所があれば、出かけてみると良い巡りあわせがあるかもしれないよ。<br><br>　人間関係では、褒められる機会が増えるだろう。だが、おだてられて調子に乗り過ぎたらいけないよ。良い流れがあるときは、人の妬みも集めやすいことを忘れずにね。あくまで謙虚にいることが幸運を掴む秘訣だ。<br><br>　特に感情面の豊かさが発揮できるから、できるだけ芸術に触れるのもいいかもしれないね。周りの人に愛情を注ぐのも大事だよ。そうすることできっと、心の底から穏やかな幸福感を味わうことができるからさ。',
		),
		);
?>