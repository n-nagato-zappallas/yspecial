<?php
/**
 * menu_id : nx23_035
 * 星ひとみ：一人用 3月運
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'nx23_035',
			'contents'			 => 'hoshihitomi_zap',
			'img_name'			 => 'zap_hoshihitomi',
			'teller_name'		 => '星ひとみ',
			'isp_mid'			 => '53w028',
			'nif_menukey'		 => 'unsei_2023_029',
			'price'				 => '600',
			'discount'			 => '540',
			'design_cd'			 => '6',
			'person'			 => '1',
			'category_name'		 => 'life',
			'release_date'		 => '20230224',
            'base_1_title_self'  => 'あなたの天星',
            'base_2_title_self'  => 'あなたの基本性格',
            'base_1_title_other' => 'あの人の天星',
            'base_2_title_other' => 'あの人の基本性格',
			'title'				 => '当たりすぎて、恋も仕事も思い通り！　星ひとみが占う2023年3月運勢',
			'caption'			 => '2023年3月は、あなたにとってどんな月になるのでしょうか？　あなたの恋愛はどうなるのか？　気になる出会い運は？　それに仕事のこともどうなっていくのか知りたいですよね。また、具体的にあなたの生活がどう変化するのか、そして運気を上げるコツもお伝えしましょう。',
            '1_min_title'		 => '2023年3月◆あなたの恋愛と出会いについて',
            '2_min_title'		 => '2023年3月◆あなたの仕事はどうなる？　チャンスはある？',
            '3_min_title'		 => '2023年3月◆あなたの生活はこんなふうに変化します',
            '4_min_title'		 => '2023年3月◆〇〇に気をつけることで運気が良くなります',
		);

// 小メニューロジック
$logic = 'c1';

// Next枠
$next = array( "nx23_036", "nx23_037", "nx23_038", "nx23_039", "nx23_040" );

// 一部見せテキスト
$free = array(
		array( "nx23_035_1", 
'　この月は、[%NAME_SELF%]が自己投資をするのに最適な月です。外見を磨く、資格の勉強を始めるなど、自分を高めるよい機会です。恋人や好きな人からの反応は、あまり期待できません。でもね、後々その頑張りはきっと報われます。この時期は余計な一言を言ってしまいがちなので、気持ちが高ぶったら……',
'　この月は、恋人や好きな人へ何かするよりも、自分のために動くほうがいい時期です。[%NAME_SELF%]も、どちらかといえば、ひとりでいたい気分でいることが多いかもしれません。でも、それでいいんです。お金や時間を自分に使うと、あなたの魅力が増して自信がつきます。自分のために動くほうがいいのはもちろんなんですけど……',
'　この月は、[%NAME_SELF%]の周りが整えられていきます。それは今後の運勢が上昇していくためなんです。対人関係でも転機が訪れるでしょう。恋人や好きな人との関係に、何らかの変化が起こるかもしれません。それは、あなたが素敵な人生を歩めるように起こるものなんです。気持ちの浮き沈みが起こったら、……',
'　この月は、新しいことにチャレンジする姿勢が大切です。恋人や好きな人がいるのなら、新しい魅力を相手に見せられるかもしれません。お相手と一緒に、新しい趣味や資格の勉強に挑戦してみるのもいいですね。新しい関係性に発展するかもしれませんよ。<br><br>　フリーであれば、交友関係を広げてみることを……',
'　この月は、[%NAME_SELF%]が今まで努力したり、自己投資したりしてきたことが実を結び始めます。もちろん、その努力はこれからも継続していく必要があります。でもね、ここで出た結果があなたの魅力となって、恋人や好きな人を惹きつけるんです。食べ物にツキがありますから、一緒においしいものを食べて……',
'　この月は、[%NAME_SELF%]の行動力と決断力が、運気を上昇させる鍵になります。特に、決断をすることで開運するんです。恋人がいる場合は、もしかしたら結婚の決断をするかもしれません。片想いの相手がいる場合でも、それに近いようなことが起きるかも。いずれにせよ、積極的に動いて決めることが……',
'　3月は、休むことを大事にしてください。これまで積極的に動いていた[%NAME_SELF%]に、少し疲れが出てしまう時期なんです。恋人がいる場合は、一緒にリラックスできることをするといいでしょう。片想いの場合も、相手へのアピールは一旦休憩して、自分を一番にかわいがってくださいね。<br><br>　フリーの場合……',
'　[%NAME_SELF%]はこの月、やることなすことがうまくいくという、最高の運気を手にできますよ。恋人と結婚したい、好きな相手と恋人になりたいと努力して、自分を磨いてきたあなた。そのまま努力を怠らず、謙虚さを忘れないで。お相手のほうからアクションがありそうですよ。<br><br>　好きな相手が……',
'　この月、[%NAME_SELF%]には楽しいことがたくさんやってきます。でも心の迷いもちょっと出てきそうなんです。恋人や好きな人がいるのであれば、おしゃれ運がアップする時期。より目を引く[%NAME_SELF%]に、言い寄ってくる人が現れるかもしれません。自分をしっかり保って……',
'　この月は、[%NAME_SELF%]の今までの頑張りが報われる月です。今までの経験を存分に活かせるでしょう。恋人がいる場合は、もし相手への打診を断られた経験があれば、もう一度言ってみるとうまくいく可能性があります。片想いの相手がいて、特に今ひとたびの愛を望んでいる場合にはチャンスが……',
'　この月は、金運と結婚運がとても良くなる時期なんです。恋人がいる場合は、もしかしたら結婚の話が出てくるかも。それは住宅とか車とか、大きな額のものを買う話から派生してきそうです。好きな人がいるなら、普段使いのものを1ランクアップさせてみると、[%NAME_SELF%]の印象をより……',
'　すべてが満たされ、満足感でいっぱいの3月。[%NAME_SELF%]の今までの努力がすべて報われます。恋人がいて、もしも結婚も考えているなら、すぐに行動を起こして。きっと素晴らしい成果が手に入りますよ。片想い中の場合でも、これ以上ないほどのハッピーな出来事が起こります。でもね、それは決して、……',
		),
		array( "nx23_035_2", 
'　この時期の[%NAME_SELF%]の仕事運としては、自己投資にツキがあります。外よりも自分の内側へ目を向けてみてください。必要な知識を蓄えたり技術を磨いたりすることが、よい結果を招くはずです。ちょっとしたハプニングに見舞われやすいときですが、必要以上に動こうとしないで、事態が好転するのを……',
'　この時期の[%NAME_SELF%]の仕事運は、アイデアをストックしたり、自己投資したりするのに向いています。よい考えが思いついたら、まだ外に出すのは控えて。3月は、できるだけ焦らないようにしましょう。勝負に打って出るよりは、自分の力を磨いて自信をつけるときなんです。<br><br>　この時期は自分から……',
'　この時期の[%NAME_SELF%]の仕事運は、悪くはないもののよくもないですね。いつもの作業も、なかなかはかどらなかったり、気分が乗らなかったり。でもね、焦って動かなくても大丈夫。むしろ身辺整理をするほうが大切です。少しでも不要だと思ったデスク上のものは、思い切って手放しましょう。その分、……',
'　この月の[%NAME_SELF%]の仕事運は、吉凶混合。失敗やトラブルもありますが、長い目で見ればあなたの糧になります。まずは、何事にも恐れずチャレンジしてみることが、開運のためのアクションなんです。とはいっても、無理は禁物。とりあえず何でも養分にして成長しようという姿勢でいるくらいが、……',
'　少しずつ理想に近づいていると実感できる。この月はそんな仕事運です。温めていたアイデアがあるなら、それを形にできるように動くこともできます。味方にも恵まれやすいので、目標とする事柄があるなら、それに近づくための後押しも期待できます。<br><br>　この時期は、自己実現のために必要な情報を……',
'　3月は、[%NAME_SELF%]が行動と決断をすることで仕事運が開けます。チャレンジ精神を持って過ごしましょう。これまで自信がなくて尻込みしていた業務でも、思い切ってやると決めたならきっとやり遂げられるはずです。<br><br>　また、この月は転職のチャンスに恵まれています。もしも転職を……',
'　今までスムーズだった勢いの流れが、少しゆっくりめになります。この時期は、大きくジャンプする前に一旦しゃがむような、飛躍する前の仕事運となります。これまで努力して頑張ってきた[%NAME_SELF%]、思い切って休みましょう。集中力や余裕がなくなってしまいがちなので、休むことで回復させて……',
'　最高の運気を味方にして、パワフルに仕事をこなせるのがこの月。直感や判断力も冴えて、最良の選択ができます。今まで努力してきたことが報われて、とてもハッピーな気分で過ごせるんです。もしも努力を怠っていたのであれば、今からでも遅くありませんので、地道に仕事に励んでくださいね。きっと幸運の波に……',
'　この月の仕事は、冷静な状況判断を心がけるとうまくいきます。仕事運がよいので、そのまま進みたくなるかもしれません。でもね、好調なときほど一旦立ち止まるようにして。調子に乗って油断をしてしまうと、思わぬ落とし穴に落ちるかもしれないんです。周りへの感謝を忘れずに過ごせば、回避できますよ。<br><br>　この時期は……',
'　この月は、再びチャレンジするということにツキがあります。以前落ちた資格の取得に再挑戦したり、再就職を決断したりするのにも追い風が吹きますよ。3月は、今までの経験が大いに役に立つ時期なんです。過去の振り返りをすると、仕事で使えるアイデアが湧くこともあるでしょう。<br><br>　もし、かつて……',
'　この月は、[%NAME_SELF%]が今まで頑張ってきたことが、豊かさとなって返ってきます。昇給や臨時ボーナス、評価アップが見込めるんです。もちろん、仕事自体も好調にいきますので、この時期にたくさんの結果を残しておきましょう。それが今後の金運をより豊かにします。<br><br>　報酬を……',
'　この月は、仕事がとてもはかどるときです。今までの努力が想像以上に報われて、何倍にもなって返ってくるでしょう。とても満ち足りた気持ちで仕事ができますよ。組織の中で働いているなら、ベストポジションを獲得できるときでもあります。でもね、そこまで頑張れたのは、周りの人の支えがあってこそ。その気持ちを……',
		),
		);



// 結果テキスト
$text = array(
		array( "nx23_035_1", 
'　この月は、[%NAME_SELF%]が自己投資をするのに最適な月です。外見を磨く、資格の勉強を始めるなど、自分を高めるよい機会です。恋人や好きな人からの反応は、あまり期待できません。でもね、後々その頑張りはきっと報われます。この時期は余計な一言を言ってしまいがちなので、気持ちが高ぶったら深呼吸して落ち着きましょう。<br><br>　今好きな人がいない場合、出会いがあるというよりは、悪縁が切れるときです。波長が合わない人と離れたら、次は合う人との出会いがあります。少し時間がかかりますが、それまでは趣味や勉強に集中するとよいですよ。',
'　この月は、恋人や好きな人へ何かするよりも、自分のために動くほうがいい時期です。[%NAME_SELF%]も、どちらかといえば、ひとりでいたい気分でいることが多いかもしれません。でも、それでいいんです。お金や時間を自分に使うと、あなたの魅力が増して自信がつきます。自分のために動くほうがいいのはもちろんなんですけど、周りから助力を求められたら快く応じてくださいね。<br><br>　恋のお相手がいないあなた。今は出会いに向けて動くよりも、自分磨きをするのがおすすめです。もう少し経てばチャンスがやってきます。楽しみに待っていてくださいね。',
'　この月は、[%NAME_SELF%]の周りが整えられていきます。それは今後の運勢が上昇していくためなんです。対人関係でも転機が訪れるでしょう。恋人や好きな人との関係に、何らかの変化が起こるかもしれません。それは、あなたが素敵な人生を歩めるように起こるものなんです。気持ちの浮き沈みが起こったら、リフレッシュを心がけてくださいね。<br><br>　恋のお相手がいないのであれば、そろそろ新しい可能性を感じられます。その前にぜひ、いらないものを断捨離して。すっきりとした気持ちと場所で、あなたにとっての良縁を呼び込んでいきましょうね。',
'　この月は、新しいことにチャレンジする姿勢が大切です。恋人や好きな人がいるのなら、新しい魅力を相手に見せられるかもしれません。お相手と一緒に、新しい趣味や資格の勉強に挑戦してみるのもいいですね。新しい関係性に発展するかもしれませんよ。<br><br>　フリーであれば、交友関係を広げてみることを意識してみて。新しい友達の中から恋人候補が現れるかもしれないし、知人から素敵な人を紹介される可能性も。人との出会いだけではなく、[%NAME_SELF%]自身を成長させてくれる何かとの出会いも期待できます。やりたいことには遠慮なくチャレンジしてください。',
'　この月は、[%NAME_SELF%]が今まで努力したり、自己投資したりしてきたことが実を結び始めます。もちろん、その努力はこれからも継続していく必要があります。でもね、ここで出た結果があなたの魅力となって、恋人や好きな人を惹きつけるんです。食べ物にツキがありますから、一緒においしいものを食べて、さらに仲を深められたらいいですね。<br><br>　気になる人がいないなら、いろいろなことに興味を持ってトライしてみるのがおすすめ。出会った人とは、自分から話すばかりではなくて相手の話にも耳を傾けて。その姿勢が、あなたに素敵なご縁を運んできてくれるはずですよ。',
'　この月は、[%NAME_SELF%]の行動力と決断力が、運気を上昇させる鍵になります。特に、決断をすることで開運するんです。恋人がいる場合は、もしかしたら結婚の決断をするかもしれません。片想いの相手がいる場合でも、それに近いようなことが起きるかも。いずれにせよ、積極的に動いて決めることが大切です。きちんと考えてからする決断には、追い風が吹きますよ。<br><br>　フリーであれば、運命の相手になり得る人との、新しい可能性が訪れそうです。最近知り合った、またはこれから知り合う人たちに注目してみて。そこからご縁が紡がれていくはずですよ。',
'　3月は、休むことを大事にしてください。これまで積極的に動いていた[%NAME_SELF%]に、少し疲れが出てしまう時期なんです。恋人がいる場合は、一緒にリラックスできることをするといいでしょう。片想いの場合も、相手へのアピールは一旦休憩して、自分を一番にかわいがってくださいね。<br><br>　フリーの場合、さまざまな人との交流で余裕がなくなっていませんか？　ちょっとゆっくりしましょう。カラオケに行ったり、おいしいご飯を食べたりして思いっきりリフレッシュすると、気持ちが上向きになってきます。体も十分に労わってくださいね。',
'　[%NAME_SELF%]はこの月、やることなすことがうまくいくという、最高の運気を手にできますよ。恋人と結婚したい、好きな相手と恋人になりたいと努力して、自分を磨いてきたあなた。そのまま努力を怠らず、謙虚さを忘れないで。お相手のほうからアクションがありそうですよ。<br><br>　好きな相手がいない場合でも、これからモテ期が訪れます。人を見る目も冴えるときなので、素晴らしい相手を選べるはず。この時期を楽しんでくださいね。何もしなくてもモテますが、周りの人への感謝を忘れずに過ごせば、さらによいご縁を引き寄せられますよ。',
'　この月、[%NAME_SELF%]には楽しいことがたくさんやってきます。でも心の迷いもちょっと出てきそうなんです。恋人や好きな人がいるのであれば、おしゃれ運がアップする時期。より目を引く[%NAME_SELF%]に、言い寄ってくる人が現れるかもしれません。自分をしっかり保って過ごしてくださいね。<br><br>　フリーの場合であっても、モテ期が来ています。でもね、隙ができやすいときでもあるんです。あまり自分を過信せず、謙虚さを忘れないことが開運の鍵となります。常に冷静でいるように努めれば、思わぬ落とし穴を遠ざけることもできますよ。',
'　この月は、[%NAME_SELF%]の今までの頑張りが報われる月です。今までの経験を存分に活かせるでしょう。恋人がいる場合は、もし相手への打診を断られた経験があれば、もう一度言ってみるとうまくいく可能性があります。片想いの相手がいて、特に今ひとたびの愛を望んでいる場合にはチャンスが訪れそうです。そのときが来たら、思い切って行動してみてくださいね。<br><br>　フリーなのであれば、久しぶりに連絡を取った友人や知人から、新しい出会いのチャンスが来ます。リモートの飲み会など、お誘いがあったら参加するのをおすすめします。',
'　この月は、金運と結婚運がとても良くなる時期なんです。恋人がいる場合は、もしかしたら結婚の話が出てくるかも。それは住宅とか車とか、大きな額のものを買う話から派生してきそうです。好きな人がいるなら、普段使いのものを1ランクアップさせてみると、[%NAME_SELF%]の印象をより上品にしてくれますよ。<br><br>　フリーなのであれば、誰かからプレゼントをもらったり、食事をごちそうしてもらったりする機会に恵まれます。あなたから友人や知人にプレゼントをするのもいいですね。そういったやりとりから、ご縁が結ばれていきますよ。',
'　すべてが満たされ、満足感でいっぱいの3月。[%NAME_SELF%]の今までの努力がすべて報われます。恋人がいて、もしも結婚も考えているなら、すぐに行動を起こして。きっと素晴らしい成果が手に入りますよ。片想い中の場合でも、これ以上ないほどのハッピーな出来事が起こります。でもね、それは決して、[%NAME_SELF%]ひとりの力で手に入れられたわけではないんです。そう心に刻んで、その上で幸せを味わいましょう。<br><br>　フリーなのであれば、今までの頑張りが実って、とても楽しい出会いが訪れそうです。支えてくれた人たちへの感謝も忘れずにいてくださいね。',
		),
		array( "nx23_035_2", 
'　この時期の[%NAME_SELF%]の仕事運としては、自己投資にツキがあります。外よりも自分の内側へ目を向けてみてください。必要な知識を蓄えたり技術を磨いたりすることが、よい結果を招くはずです。ちょっとしたハプニングに見舞われやすいときですが、必要以上に動こうとしないで、事態が好転するのを待ってください。<br><br>　何事も停滞気味で、チャンスがなかなか巡ってこないかもしれません。でもね、無理に行動をするより、むしろ待ちの姿勢を徹底してください。いつもより少しだけストレスが溜まりやすいので、リラックスタイムを充実させるとよいですよ。',
'　この時期の[%NAME_SELF%]の仕事運は、アイデアをストックしたり、自己投資したりするのに向いています。よい考えが思いついたら、まだ外に出すのは控えて。3月は、できるだけ焦らないようにしましょう。勝負に打って出るよりは、自分の力を磨いて自信をつけるときなんです。<br><br>　この時期は自分から動くと、チャンスが遠のいてしまいます。謙虚に努力を続けましょう。人からの頼まれ事は、快く承諾してください。あなたが思っていたようなチャンスではないかもしれませんが、ラッキーなことが起こるはず。無理をせず、気分転換を大事にしてくださいね。',
'　この時期の[%NAME_SELF%]の仕事運は、悪くはないもののよくもないですね。いつもの作業も、なかなかはかどらなかったり、気分が乗らなかったり。でもね、焦って動かなくても大丈夫。むしろ身辺整理をするほうが大切です。少しでも不要だと思ったデスク上のものは、思い切って手放しましょう。その分、必要なものが入ってくるスペースが作られます。<br><br>　だんだん運気が上昇してきて、新しいことに携われるチャンスも巡ってくるでしょう。それまでは、情報を集めて、計画を立てておくことに専念してください。備えを万全にしておけば、チャンスが来たときにすぐに動けますよ。',
'　この月の[%NAME_SELF%]の仕事運は、吉凶混合。失敗やトラブルもありますが、長い目で見ればあなたの糧になります。まずは、何事にも恐れずチャレンジしてみることが、開運のためのアクションなんです。とはいっても、無理は禁物。とりあえず何でも養分にして成長しようという姿勢でいるくらいが、ちょうどよいでしょう。<br><br>　この時期は、顔を広げるチャンスに恵まれています。いろいろな人と接してみると、思わぬ人脈と繋がったり、新しい視点を授かったりというチャンスがあるかもしれません。あなたの将来に、多くの素晴らしい選択肢が用意されますよ。',
'　少しずつ理想に近づいていると実感できる。この月はそんな仕事運です。温めていたアイデアがあるなら、それを形にできるように動くこともできます。味方にも恵まれやすいので、目標とする事柄があるなら、それに近づくための後押しも期待できます。<br><br>　この時期は、自己実現のために必要な情報を手に入れるチャンスに恵まれています。同僚や取引先など、いたるところに常にアンテナを張って人の話をよく聞くようにすると、情報どころか信用も得られるかもしれません。いろいろなことを経験して、それを強さに変えていこうという気持ちが大事ですよ。',
'　3月は、[%NAME_SELF%]が行動と決断をすることで仕事運が開けます。チャレンジ精神を持って過ごしましょう。これまで自信がなくて尻込みしていた業務でも、思い切ってやると決めたならきっとやり遂げられるはずです。<br><br>　また、この月は転職のチャンスに恵まれています。もしも転職を考えているなら、ここでもう一度しっかり考えましょう。決断することが開運に繋がりますから、転職をするにしろしないにしろ、[%NAME_SELF%]が決めたことであれば後の幸運に繋がるはずです。出会い運もよいので、今より条件のよい職場が見つかるかもしれませんよ。',
'　今までスムーズだった勢いの流れが、少しゆっくりめになります。この時期は、大きくジャンプする前に一旦しゃがむような、飛躍する前の仕事運となります。これまで努力して頑張ってきた[%NAME_SELF%]、思い切って休みましょう。集中力や余裕がなくなってしまいがちなので、休むことで回復させてください。<br><br>　今までやってきたことを振り返るには、絶好の時期でもあります。今後のためになるような、素晴らしい気づきを得られるチャンスかも。やがて、再び目標達成のために忙しくなる日々が訪れますから、きちんと体調を整えておいてくださいね。',
'　最高の運気を味方にして、パワフルに仕事をこなせるのがこの月。直感や判断力も冴えて、最良の選択ができます。今まで努力してきたことが報われて、とてもハッピーな気分で過ごせるんです。もしも努力を怠っていたのであれば、今からでも遅くありませんので、地道に仕事に励んでくださいね。きっと幸運の波に乗れるはずですよ。<br><br>　よい意味で人から注目されやすいとき。大きな仕事を任されたり、[%NAME_SELF%]の提案が通りやすかったりといったチャンスに恵まれそうです。積極的に動いて、素敵なチャンスを掴み取ってくださいね。',
'　この月の仕事は、冷静な状況判断を心がけるとうまくいきます。仕事運がよいので、そのまま進みたくなるかもしれません。でもね、好調なときほど一旦立ち止まるようにして。調子に乗って油断をしてしまうと、思わぬ落とし穴に落ちるかもしれないんです。周りへの感謝を忘れずに過ごせば、回避できますよ。<br><br>　この時期は、新しいチャンスを探すよりも、今まで手掛けていたことに心力を注ぐようにしましょう。うまい話があっても、きちんと吟味して。注意力が散漫になりがちなので、静かで落ち着けるところで、時折息抜きをしてくださいね。',
'　この月は、再びチャレンジするということにツキがあります。以前落ちた資格の取得に再挑戦したり、再就職を決断したりするのにも追い風が吹きますよ。3月は、今までの経験が大いに役に立つ時期なんです。過去の振り返りをすると、仕事で使えるアイデアが湧くこともあるでしょう。<br><br>　もし、かつてふいにしてしまったチャンスがあるのなら、再び巡ってきそうです。今まで努力して頑張ってきた[%NAME_SELF%]なら、きっとその機会をものにできますよ。友人や上司と以前交わした会話の中から、仕事のヒントになる言葉や助言が見つかりそうです。',
'　この月は、[%NAME_SELF%]が今まで頑張ってきたことが、豊かさとなって返ってきます。昇給や臨時ボーナス、評価アップが見込めるんです。もちろん、仕事自体も好調にいきますので、この時期にたくさんの結果を残しておきましょう。それが今後の金運をより豊かにします。<br><br>　報酬をもらえるチャンスと同時に、大きな金額をうまく使えるチャンスもあるこの時期。起業したり、資格取得のためにお金を有意義に使う決断ができたりします。もしも長く不調に感じていることがあれば、それを整えることにお金を使うのも、よい自己投資になりますよ。',
'　この月は、仕事がとてもはかどるときです。今までの努力が想像以上に報われて、何倍にもなって返ってくるでしょう。とても満ち足りた気持ちで仕事ができますよ。組織の中で働いているなら、ベストポジションを獲得できるときでもあります。でもね、そこまで頑張れたのは、周りの人の支えがあってこそ。その気持ちを忘れなければ、この充実した日々は長続きするでしょう。<br><br>　また、これまでの努力が報われるようなチャンスにも恵まれます。決して欲張らずに、目の前の業務に集中すれば、3月はたくさんの収穫が期待できますよ。',
		),
		array( "nx23_035_3", 
'　この月の[%NAME_SELF%]の運勢はゆったりモード。活動的になるよりは、ゆっくり休んだり、自分自身を見つめたりする時間を作るのがよい時期なんです。たとえば、勉強やダイエットなどがいつも以上にはかどりますよ。人間関係が変化するような出来事も起こりそう。自ら積極的に行動してしまうと、裏目に出てしまうこともあるでしょう。そんなときは受け身で過ごしたほうがよいですよ。<br><br>　欲求を抑えられないことも増えそうですが、そんなときは深呼吸して落ち着いてくださいね。自分磨きを楽しみながら、リラックスして、来る幸運期を待ちましょう。',
'　この月は、粛々と自分の武器を磨いて、チャンスを待つような運勢です。積極的に動くよりは、周りをよく見て流れに身を任せるほうが、うまくいきますよ。ゆったりとした運気なので、時には焦ることもあるかもしれません。でもね、ものは考えようです。今こそじっくりと自分を見つめて、足りないところを伸ばしたり、さらに長所に磨きをかけたりするのに適した時期なんです。[%NAME_SELF%]のよいところを増やせる好機です。<br><br>　もしも周りの人から協力を頼まれたら、快く引き受けて。その姿勢と思いやりが、[%NAME_SELF%]の運を上昇させますよ。',
'　この月は、[%NAME_SELF%]の頭の中も身辺も、すっきり整う運勢です。悪縁や悪習慣、どうしても思い浮かんでしまうネガティブな思考などを断ち切るのに向いているんです。なかなか捨てられずに場所を取っていたものの片付けも、驚くほどはかどりますよ。そうして空けたスペースに、[%NAME_SELF%]に必要なものや、素敵なご縁が舞い込んでくるんです。<br><br>　まずは不必要なものを見極めて捨てて、必要なものはきちんと整頓することを心がけてください。そうやって少しずつ身の回りを整えていけば、縁や思考なども不必要なものは離れていきますよ。',
'　この時期は、新しいことへのチャレンジが[%NAME_SELF%]に幸運をもたらします。どんどんいろいろなことに挑戦するのがおすすめです。多少の失敗も、この運勢なら十分にカバーできます。むしろ、素晴らしい経験や思い出を与えてくれるはずです。<br><br>　また、新しいご縁の可能性に恵まれて、交友関係が広がりやすいときです。いろいろな人の話を聞いて、たくさんの刺激を受けることが、[%NAME_SELF%]にとっての開運になります。開拓精神を原動力にして、新しい経験をたくさんしてください。そうすれば、人間的な魅力もさらに増していきますよ。',
'　この月は、運気の上昇に伴って、理想に手が届くのを感じるでしょう。その理想はまだ遠いところにあるままかもしれませんが、今までよりは、確かな手ごたえを感じられるはずです。[%NAME_SELF%]に活躍の場が用意されるチャンスが来るので、この機会を逃さないで。対人関係が広がり、味方も増えるとき。もしかしたら、目標達成のために必要な情報が人づてに手に入るかもしれません。いろいろな人の話に耳を傾けてみてくださいね。<br><br>　理想のための投資には、追い風が吹きます。疲れたなと感じたら、栄養の豊富な食べ物を食べて元気をチャージしましょう。',
'　この月は、何か大きな決断をするのにとてもよい運勢です。もしも家や高額な商品の購入、または結婚などを考えているなら、最高の決めどきとなるでしょう。とはいっても、焦って準備不足のまま決めるのは悪手ですよ。冷静に考えて、下調べなどの準備をした上での決断なら、その選択が最良となるということなんです。<br><br>　この月は、重要な新しい可能性が芽生えるときでもあります。生涯の親友や、運命の相手と呼べるような人と知り合う場合もあるでしょう。リモートで開催されるイベントなど、出会いには積極的になって行動するといいですよ。',
'　この時期は、今まで頑張ってきた分の疲れが出がちです。身体的にも精神的にも、いっぱいいっぱいになってしまうかもしれません。無理をせずしっかりと休息を取って自分自身を思う存分に労わることが、何よりも大切なときなんです。運勢はよいので、ここでお休みをとっても大丈夫。しっかり休んでおけば、これから来る飛躍のときには積極的に動けますよ。<br><br>　体と心を休めながらも、ちょっと振り返りの時間を取るのが開運の秘訣。このままで大丈夫だと思ったなら、体調を万全に整えて、まっすぐ幸運期へと臨んでくださいね。',
'　この時期に自己アピールをすればするほど、いずれ豊かな実りとなって返ってくるでしょう。思いやりを持って人に接していれば、人気が出て、いろいろな人から慕われたり声をかけられたりするようになります。努力してきたことは、高評価を与えられて、最高の形で報われるでしょう。<br><br>　この時期は、パワフルに動くと開運の波に乗れます。もちろん、周りへの感謝は忘れないでください。今までしてきた努力も、このまま継続してくださいね。そのような誠実な姿勢が、さらにあなたの魅力をアップさせて、幸運を呼び寄せてくれます。',
'　この月は、好調な運勢ですよ。冷静な判断と謙虚さが、[%NAME_SELF%]を開運へと導きます。というのも、この月は少々羽目を外したり、努力を怠ったりしてしまいがちになるからなんです。好調な日々が続くと、気の緩みがどうしても出てきてしまうもの。でもね、初めからそれがわかっていれば、対策はできます。しっかりと自分を保って、楽しいときも決して浮かれすぎないように。<br><br>　謙虚さをいつも心がけて過ごせば、もし失敗をしたとしても、周りから救いの手が差し伸べられるはず。感謝の気持ちを示して、再度気を引き締めてくださいね。',
'　この月は再会、そして再開によい運勢なんです。もしも別れた人を忘れられないなら、その人との愛が復活するチャンス。再婚や再就職などにもよい時期です。ほかにも、以前に失敗したことにもう一度チャレンジするのもおすすめです。協力者が現れたり、有益な情報を掴めたり、段取りがうまくなったりするなど、追い風が吹くでしょう。<br><br>　しばらく会っていない友人や知人がいるなら、思い切って連絡をしてみるのもいいですね。実際に連絡を取ることがあったら、ぜひいろいろな話をしてみてくださいね。そこから助言や素敵な縁を得られる可能性がありますよ。',
'　金運が最高によい時期です。この月は、[%NAME_SELF%]の今までの頑張りが、主に金銭といった形で報われるときなんです。目に見える物質的なものだけではなく、評価や信用といった無形のものでも素晴らしいリターンがあるでしょう。くじ運やプレゼント運もよいので、ちょっとリッチな気分を味わえるかも。<br><br>　お金を使うこと、特に大金を使うことも開運アクションです。思い切った決断が、最良の結果を呼ぶでしょう。たとえ使うときは清水の舞台から飛び降りる気分になったとしても、最終的にはよい判断だったと心から満足できますよ。',
'　この時期は、とにかく楽しむことがツキを呼びます。公私共に楽しい時間を過ごせて、うれしくて幸せで、もしかしたらこわいくらいかもしれませんね。欲張らなくても、頑張ってきた分、素敵なご褒美があなたに用意されています。3月はそれをめいっぱい享受してくださいね。<br><br>　[%NAME_SELF%]がそんなふうに喜びに満ちていられるのは、自身の努力と、周りの人からの協力や助言があったからでもあるんです。できたら、周りの人たちへの感謝の気持ちを形にしてみてください。その姿勢が、さらなる幸運を運んできてくれるでしょう。',
		),
		array( "nx23_035_4", 
'　この月は、待つ姿勢が運気をよくします。[%NAME_SELF%]は今、新しくチャレンジしたいことがあるかもしれません。でもね、この時期は、外へ向かって動いてもあまり得になることはないんです。それよりは、自分へと目を向けて、湧き上がるパワーを自身のために使うのがおすすめ。攻めのチャンスは後で来ます。この時期は静かに自分を磨いて待ちましょう。<br><br>　周りの人を当てにせず、自分でするべきことはして、いつも謙虚な姿勢でいてください。そんな[%NAME_SELF%]にもし何か困ったことがあれば、きっと誰かから救いの手が差し伸べられるでしょう。',
'　この月は、流れに身を任せることが幸運を呼びます。自分から動いたり、目立ったりするようなことは、控えるのが得策。ちょっと気持ちが沈んで悲観的になってしまいがちなので、自己投資へと意識を向けてみてくださいね。そうすれば、余計なことは頭から出ていきますし、[%NAME_SELF%]自身の力をレベルアップさせることもできます。そうして過ごしていれば、動くべきときにフットワークを軽くして走り出せるんです。つまり、チャンスをものにする瞬発力や自信が手に入ります。<br><br>　周りの人からの頼みを快く引き受けるようにすると、運が開けてきますよ。',
'　3月は、やがて来る最高の未来のために、準備をするのにとてもよいタイミングです。そのため、身の回りの整理に適しているんです。不要なものの片付けもそうですが、手放したい思考ややめたい習慣があったら、縁が切れるように努力してみてくださいね。きっと離れられますよ。<br><br>　中には、自分では意識しなくても、いつの間にか失われているものもあるかもしれません。でもそれは、[%NAME_SELF%]には必要がないものだから。とても自然な流れで起こることなんですよ。そうやって準備が整ったところに、素晴らしい幸運がやってくるんです。',
'　[%NAME_SELF%]は新しい可能性に大いに恵まれています。この時期は、いろいろなことにチャレンジしてみて。新しいお店や人脈の開拓にもツキがあります。とにかく新しい物事、新しい知人が幸運の鍵なんです。交友関係を広げたり、新しいことに挑戦したりするのには、勇気がいるかもしれません。でもね、それだけの価値はあります。失敗したとしても、それは素晴らしい経験になります。後々、あれは必要なことだったと思い返すことがあるかもしれません。<br><br>　何かをスタートさせるのにも追い風が吹きます。運動や勉強などを始めてみるとよいですよ。',
'　この時期は、目標へと向かって努力をする[%NAME_SELF%]に追い風が吹きます。もしもぼんやりと叶えたい夢や目標があるのなら、この月のうちにしっかりと具体的な設計図を描きましょう。そのために必要な情報が入ってきやすくなるんです。人脈が広がるときなので、新しく知り合った人から協力してもらったり、ためになる話を聞けたりすることもありそうですよ。<br><br>　いろいろなことに興味を持って挑戦することで、運が開けます。そこで知り合う人たちとの縁も大事にしてくださいね。きっと、[%NAME_SELF%]が夢に近づくための後押しをしてくれますよ。',
'　この時期は、とにかく行動しましょう。動くことで開運できるんです。今まであまりツイていなかったなと思うのであれば、ここで思い切って行動と決断をすることで、よいほうへと転換できます。何をするか、何にお金や時間を費やすかをしっかりと考えて、決めてください。運勢は上々なので、今まで努力を怠っていたり、投げやりな判断さえしたりしなければ大丈夫ですよ。<br><br>　ワクワクしながら、でも頭の中は冷静さを忘れないようにしてくださいね。今後の人生を左右するような、大きな決断をしなくてはならない段階にいたら、この時期にするといいですよ。',
'　今まで好調の波に乗って、[%NAME_SELF%]は頑張って行動してきたと思います。その疲れが出やすいのがこの時期なんです。そのまま動き続けていると、注意力や集中力が散漫になり、失敗してしまう可能性があります。でも大丈夫。この月は一度立ち止まって休むときなんです。体も心も休養を欲しているはず。心行くまで休んでください。<br><br>　休みながら、今までの行動を思い返してみると、より良いほうへ軌道修正するヒントを得られるかもしれません。この後またぐんと活動的になる運気が来ます。その前に心身共に、ベストな状態に整えておきましょうね。',
'　3月は全般的にとてもよい運気です。何をやってもうまくいき、人気者になり、楽しくも忙しい日々を過ごせるでしょう。体調管理をしっかりしながら、精力的に動き回ることが吉となります。周りの人の協力があってこその今だと、きっと[%NAME_SELF%]はわかっているはず。謙虚さを忘れず、努力を怠らず。それさえ肝に銘じておけば、たくさんのラッキーやハッピーを掴めるでしょう。<br><br>　行動力や判断力が冴えわたるときです。運勢の後押しもあり、結婚や家の購入など、思い切ったこともうまくいくはずです。[%NAME_SELF%]自身の力と幸運を信じて動いてくださいね。',
'　運勢がよいにはよいのですが、ちょこっと心が浮ついてしまう時期。公私共に余裕が出てくる点については問題ないんですが、やはり油断してしまうかもしれません。うまい話が転がり込んできたり、過剰に褒められおだてられたりといったことがあったら、むしろ裏はないかと慎重に考えるようにしましょう。<br><br>　楽しい日々は続きますが、それを理由にして努力を怠ったり、周りの人たちへの感謝を忘れたりすると、[%NAME_SELF%]の土台が揺らいでしまうかもしれません。しっかりと足元を固めて、隙を見せないようにすれば、うまくいきますよ。',
'　[%NAME_SELF%]がもし、以前に失敗したり、挑戦し損ねたりしたことがあったら、この月がチャンス。再チャレンジすると、大きく運が開けます。前はどうしていけなかったのか、振り返ってみて。その反省点や経験が大いに活かされるときです。再トライして、ぜひ運気の波に乗ってください。<br><br>　中途半端なままのものを再開することも、幸運を引き寄せるアクションです。筋トレや日記など、もし途中で止めてしまったけど習慣にしたいことがあったら、再び始めてみてください。この時期だけでもいいんです。きっと[%NAME_SELF%]のためになりますし、続けるのが楽しくなってきますよ。',
'　[%NAME_SELF%]の今までの頑張りに対する、大きな成果を得られるときです。金とくに運が上がっているので、金銭面での報酬はかなり期待できるでしょう。今まで努力してきたことが報われたと、大きく実感できるはず。懸賞やスクラッチに当たったり、思わぬプレゼントをもらったりといった幸運にも恵まれます。<br><br>　入ってきたお金は、貯めるのもいいですが、使うのにもラッキーな時期です。特に大きなお金を扱うことについては、思い切った決断をしても大丈夫。もし使い道が思いつかなければ、投資などお金の増やし方の勉強を始めるのもいいですよ。',
'　何事も順調にいき、楽しく過ごせるとき。この月の[%NAME_SELF%]は、とても心を満たされるでしょう。今までの努力が報われて、よい結果ばかりが手に入るんです。遠慮せずに、積極的に、報酬を手にしていきましょう。でもね、最高の運気ですが、注意点もあります。もしも周りへの感謝を忘れたり、偉そうな態度を取ったりすると、人が離れていってしまうかもしれないんです。お世話になった人にはきちんとお礼をすると、きっとまた力になってくれますよ。<br><br>　また、結婚や転居など、大事なことはこの時期に済ませておくのがおすすめです。',
		),
		);
?>