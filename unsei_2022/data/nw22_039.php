<?php
/**
 * menu_id : nw22_039
 * シウマ：一人用 3月運
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'nw22_039',
			'contents'			 => 'shiuma2_zap',
			'img_name'			 => 'zap_shiuma2',
			'teller_name'		 => 'シウマ',
			'isp_mid'			 => '53w038',
			'nif_menukey'		 => 'unsei_2022_039',
			'price'				 => '600',
			'discount'			 => '540',
			'design_cd'			 => '6',
			'person'			 => '1',
			'category_name'		 => 'life',
			'release_date'		 => '20220224',
			'title'				 => '成功叶える【2022年3月あなたの仕事/金/対人運】シウマの細密鑑定',
			'caption'			 => 'シウマがあなたの2022年3月の運勢を細密鑑定！　今月のお金の使い方から仕事で掴めるチャンス、味方につけるべき人物まで、あなたの2022年3月をまるごと鑑定いたします！',
            'base_1_title_self' => 'あなたの数字',
            'base_2_title_self' => 'あなたの基本性格',
            'base_1_title_other' => 'あの人の数字',
            'base_2_title_other' => 'あの人の基本性格',
            '1_min_title' => '2022年3月――今月はどんなことにお金をかけるべき？　注意点は？',
            '2_min_title' => '2022年3月――あなたが仕事で掴むチャンス',
            '3_min_title' => '2022年3月――あなたが味方につけるべき重要人物',
            '4_min_title' => '2022年3月――幸運を引き寄せるために心がけること',
		);

// 小メニューロジック
$logic = 'c1';

// Next枠
$next = array( "nw22_035", "nw22_036", "nw22_037", "nw22_038", "nw22_040" );

// 一部見せテキスト
$free = array(
		array( "nw22_039_1", 
'　この月は金銭的に少しゆとりがありそうです。ただうっかり無駄遣いをしないように注意をしましょう。同じものをいくつも買うことになってしまったり、格安だからと不必要なものまでそろえてしまったりすることがありそうです。<br><br>　この月、お金をかけるべきは健康面です。食事をつい簡単なもので済ませて……',
'　この3月は人とのコミュニケーションにお金をかけると良いでしょう。たまにはちょっとした差し入れを持って、親しい人と楽しく過ごすのもいいですね。そうすることであなたの心が豊かになりそうです。だからといって相手からそれ以上のお返しを期待しないように、気をつけましょう。時には都合が合わなかったり、せっかく……',
'　この3月は、人付き合いにお金を使うことが多くなりそうです。送別会行事などの行事が増えたり、久々に友人と会うことになったりしますよ。でも人とのご縁はお金では買えません。大切な人と楽しいひと時を過ごすために、この月は少々支出が増えたとしても、自分を許してあげましょう。お誘いがあったら、快く参加してみて……',
'　この月は身につけるものに、お金をかけてみてください。服装はもちろんのこと、ヘアスタイルにも凝ってみるのもいいでしょう。いつもと違う雰囲気の[%NAME_SELF%]を見て、好感を持つ人たちが大勢現れますよ。そうしてあなたの人望がぐんと高まることでしょう。<br><br>　注意すべき点は……',
'　この3月は、自分磨きにお金をかけるといいでしょう。向上心がぐんとが高まりそうなときなので、そのために必要なスキルを身に付けていくことです。自分の能力を最大限に生かすために、お金を惜しまないことが大切でよ。もしどうしても支出面で不安が出てきそうなら、先輩や友人の意見を取り入れるように……',
'　この3月、金運は安定しますよ。節約に懸命になるよりも、本当に必要なものや欲しいと思うものにお金をかけるようにしてください。小旅行などを計画してみるのに良い時期ですよ。たまにはちょっとした贅沢気分を味わうのもいいでしょう。また毎日使っているものが古くなっていると感じたら、思い切ってこの月買い替えて……',
'　この月の金運は、人との付き合い次第で良くなっていきますよ。自分がいいなと思える人との交際は大切にしてください。日頃お世話になっている人、ここ最近会っていない人がいたら、[%NAME_SELF%]からお茶に誘ってみるのもいいですね。「自分から誘うなんて何だか面倒」なんて思ってしまうと、金運は……',
'　この月はなるべく欲を出し過ぎないように心がけてください。「流行だから」、「皆が持っているから」と、安易に何かを購入するのは控えたほうがいいですね。それは一時的な不安を解消するだけなのかもしれません。その不安がある限り、物欲がなかなか消えてくれないでしょう。<br><br>　ですのでこの3月は……',
'　この3月は、ふってわいたようなチャンスに恵まれそうです。欲しいと思っていたものが格安で店頭に並んでいたり、割引価格で関心のあるセミナーや習いごとに入会できたりすることがあります。ただかなり飽きっぽくなる時期でもあるため、後先考えずに飛びつかないように注意しましょう。その場の勢いで契約したり……',
		),
		array( "nw22_039_2", 
'　この月は想定外のことが起こりそうです。取引が打ち切りになったり、方針ががらりと変わったりして、戸惑うことになるかもしれません。この3月は新しいことにチャレンジするよりも、今しかできないことに意識を向けるようにしてください。時間的にゆとりがあれば、資格取得の勉強をしたり、スキルアップに励んだり……',
'　この月、あえて裏方に徹したり、補佐役になったりしてみてください。そうすることで仕事の奥深さを改めて知るでしょう。また自分が前に出るばかりが、決して成功ではないということにも気づきます。<br><br>　またこの月は従来の方法や方針を貫いてみることも大切ですよ。そうするには攻めるばかりでなく……',
'　オンラインのセミナーや講習会などに進んで参加すると、[%NAME_SELF%]が飛躍するチャンスがめぐってくることでしょう。多くの人とアイデアを出し合ったり、意見を交換したりして、あなたらしさを存分に発揮することができますよ。そうしてこれまでになかった考え方を得ることができて、これからの仕事に……',
'　この月、自分で取り入れた知識や情報が、[%NAME_SELF%]の人生を方向付けてくれますよ。そして仕事上にも有利に働くことでしょう。オンラインの異業種交流会やシンポジウムなどに、積極的に参加してみてください。そこに集まる人たちは、あなたとは違う価値観や考えを持っていることでしょう。その人たちと……',
'　志が高く、やる気に満ちあふれた3月となりそうです。この月は、大きな飛躍のチャンスが到来しますので、ひるまず進んでいきましょう。思い切って、今よりもワンランク上の自分を目指してみてください。そのためにはまず、実現可能な目標をいくつか立てることです。そしてそれを確実に成功させていけば、自分に自信が……',
'　この3月は、チャレンジ精神を発揮してビッグチャンスをつかみましょう。もしかしたら大きな仕事を任されることもありますよ。最初その話が来たとき、思わず驚いてしまいそうになりますが、これは何かのチャンスだと思って快く引き受けてみましょう。もし今の仕事があまりにつまらないと感じるなら、思い切って転職して……',
'　この月は充実感がみなぎり、仕事に楽しさを見出せるときです。仕事で顔を合わせる人には、笑顔の対応を心がけましょう。たまには励ましやねぎらいの一言を掛けるようにするのもいいですね。[%NAME_SELF%]の人柄の良さが、たくさんの仕事のチャンスを運んできてくれますよ。「あなたにお願いしたい」……',
'　この3月は、今までのやり方を変えるのに良い時期ですよ。これまでやってきた方針や方法に、何となく行き詰まりを感じるようになるでしょう。ですがここで黙っていては、何も変わりません。自分なりのアイデアや意見があれば、思い切って提案してみるといいでしょう。それがきっかけとなって、これまで以上に仕事に……',
'　この3月は、活躍のチャンスを得るときです。「これならやれそうだ」と思えるものにはどんどんチャレンジしてみてください。これまで温め続けてきたアイデアがあれば、この月に発案してみるといいですね。独創性あるセンスで、周囲の注目を集めることができるでしょう。3月は勢いに乗って次から次へとやりたいことが出て……',
		),
		);



// 結果テキスト
$text = array(
		array( "nw22_039_1", 
'　この月は金銭的に少しゆとりがありそうです。ただうっかり無駄遣いをしないように注意をしましょう。同じものをいくつも買うことになってしまったり、格安だからと不必要なものまでそろえてしまったりすることがありそうです。<br><br>　この月、お金をかけるべきは健康面です。食事をつい簡単なもので済ませてしまうと、風邪をひきやすくなったり、体調を崩したりするかもしれません。そうして治療代にお金をかける羽目になってしまいかねません。この月は健康には特に注意してください。体に良さそうなサプリメントやお茶などを購入してみるといいですね。',
'　この3月は人とのコミュニケーションにお金をかけると良いでしょう。たまにはちょっとした差し入れを持って、親しい人と楽しく過ごすのもいいですね。そうすることであなたの心が豊かになりそうです。だからといって相手からそれ以上のお返しを期待しないように、気をつけましょう。時には都合が合わなかったり、せっかくのあなたのお誘いを断ったりすることもあるのですよ。<br><br>　あなたがゆとりのあるときに、お茶をごちそうしたり、お土産を渡したりして、楽しく交流をはかってみてください。そのための費用はなるべく惜しまないようにしましょう。',
'　この3月は、人付き合いにお金を使うことが多くなりそうです。送別会行事などの行事が増えたり、久々に友人と会うことになったりしますよ。でも人とのご縁はお金では買えません。大切な人と楽しいひと時を過ごすために、この月は少々支出が増えたとしても、自分を許してあげましょう。お誘いがあったら、快く参加してみてください。そうすればこの月は、心豊かに過ごせますよ。そこでさらに良いご縁が広がっていくことでしょう。<br><br>　あなたの可能性を見い出してくれる人との出会いも期待できそうなので、連絡先を書いたメモを持ち歩いているといいでしょう。',
'　この月は身につけるものに、お金をかけてみてください。服装はもちろんのこと、ヘアスタイルにも凝ってみるのもいいでしょう。いつもと違う雰囲気の[%NAME_SELF%]を見て、好感を持つ人たちが大勢現れますよ。そうしてあなたの人望がぐんと高まることでしょう。<br><br>　注意すべき点は、違う自分になろうとしないことです。今の自分を否定するばかりに、等身大以上の自分を目指すと、足元をすくわれかねません。そうして本来できないことまで「できる」といって自分を苦しめることになるのです。今の自分を十分に受け入れながら、新しいスタイルを取り入れてみてくださいね。',
'　この3月は、自分磨きにお金をかけるといいでしょう。向上心がぐんとが高まりそうなときなので、そのために必要なスキルを身に付けていくことです。自分の能力を最大限に生かすために、お金を惜しまないことが大切でよ。もしどうしても支出面で不安が出てきそうなら、先輩や友人の意見を取り入れるようにしてみてください。格安ながらも内容が充実している教室を紹介してもらえたり、その道に詳しい人を紹介してもらえたりすることがあります。<br><br>　この月は自分の本心とよく向き合いながら、自分の価値を少しずつ高めていきましょう。',
'　この3月、金運は安定しますよ。節約に懸命になるよりも、本当に必要なものや欲しいと思うものにお金をかけるようにしてください。小旅行などを計画してみるのに良い時期ですよ。たまにはちょっとした贅沢気分を味わうのもいいでしょう。また毎日使っているものが古くなっていると感じたら、思い切ってこの月買い替えてみるのもいいですね。なるべく質の良いものを選ぶようにすると、さらに金運がアップしますよ。気に入ったものがあれば少々高くても購入してみましょう。<br><br>　そのようにして3月は心豊かに過ごしてください。お金のストレスからいつの間にか解放されていることでしょう。',
'　この月の金運は、人との付き合い次第で良くなっていきますよ。自分がいいなと思える人との交際は大切にしてください。日頃お世話になっている人、ここ最近会っていない人がいたら、[%NAME_SELF%]からお茶に誘ってみるのもいいですね。「自分から誘うなんて何だか面倒」なんて思ってしまうと、金運は停滞してしまいかねません。久々に会った友人が、あなたにまたとないチャンスをもたらしてくれます。またあなたに感謝された人が、あなたに良い人を紹介してくれることもありますよ。<br><br>　この月は人との交際に惜しみなく、お金を使ってみてくださいね。',
'　この月はなるべく欲を出し過ぎないように心がけてください。「流行だから」、「皆が持っているから」と、安易に何かを購入するのは控えたほうがいいですね。それは一時的な不安を解消するだけなのかもしれません。その不安がある限り、物欲がなかなか消えてくれないでしょう。<br><br>　ですのでこの3月は確固たる意志を持つことが大切になりますよ。そうすることでつまらないセールスや押し売りに対して毅然とお断りすることもできるでしょう。そして自分が本当に欲しいものにお金をかけるようにしてください。そうすれば自分のセンスも磨かれていきますよ。',
'　この3月は、ふってわいたようなチャンスに恵まれそうです。欲しいと思っていたものが格安で店頭に並んでいたり、割引価格で関心のあるセミナーや習いごとに入会できたりすることがあります。ただかなり飽きっぽくなる時期でもあるため、後先考えずに飛びつかないように注意しましょう。その場の勢いで契約したり、口車に乗せられて仕方なく購入したりするのは結局後悔する羽目になります。<br><br>　この月は長続きできるかどうか、まず自分の心に問いかけましょう。1か月先、半年先の自分を想像しながら、これはと思う趣味や勉強にお金を使ってみてください。',
		),
		array( "nw22_039_2", 
'　この月は想定外のことが起こりそうです。取引が打ち切りになったり、方針ががらりと変わったりして、戸惑うことになるかもしれません。この3月は新しいことにチャレンジするよりも、今しかできないことに意識を向けるようにしてください。時間的にゆとりがあれば、資格取得の勉強をしたり、スキルアップに励んだりするのもいいでしょう。それはゆくゆく仕事の面で役立ちそうですよ。<br><br>　そうしてあなたは一回りも二回りも成長できます。現実面での不安を一つ一つ受け入れながら、自分の価値を高めるようにしていってください。',
'　この月、あえて裏方に徹したり、補佐役になったりしてみてください。そうすることで仕事の奥深さを改めて知るでしょう。また自分が前に出るばかりが、決して成功ではないということにも気づきます。<br><br>　またこの月は従来の方法や方針を貫いてみることも大切ですよ。そうするには攻めるばかりでなく、守るという姿勢に重きを置いてみてください。そうすることで周りとうまくコミュニケーションをとりながら、円滑に仕事を進めることができるでしょう。あなたの穏やかで冷静な態度が、さらなるチャンスをもたらすことになりますよ。',
'　オンラインのセミナーや講習会などに進んで参加すると、[%NAME_SELF%]が飛躍するチャンスがめぐってくることでしょう。多くの人とアイデアを出し合ったり、意見を交換したりして、あなたらしさを存分に発揮することができますよ。そうしてこれまでになかった考え方を得ることができて、これからの仕事に大いに役立つでしょう。<br><br>　なので自分を試すチャンスがあれば積極的にものにしていくことです。これまでのあなたなら断っていたような集まりに、なるべく参加するようにしてみてください。そこから何かが確実に変わっていくことでしょう。',
'　この月、自分で取り入れた知識や情報が、[%NAME_SELF%]の人生を方向付けてくれますよ。そして仕事上にも有利に働くことでしょう。オンラインの異業種交流会やシンポジウムなどに、積極的に参加してみてください。そこに集まる人たちは、あなたとは違う価値観や考えを持っていることでしょう。その人たちとどんどん意見交換していくことで、あなたの才能を開花させるチャンスが広がっていきます。<br><br>　そのようにしてこの月は、自分にないセンスを持っている人たちと積極的に関わることで、あなたの才能がどんどん引き出されていきます。',
'　志が高く、やる気に満ちあふれた3月となりそうです。この月は、大きな飛躍のチャンスが到来しますので、ひるまず進んでいきましょう。思い切って、今よりもワンランク上の自分を目指してみてください。そのためにはまず、実現可能な目標をいくつか立てることです。そしてそれを確実に成功させていけば、自分に自信がついていきます。そうしていつの間にか大きな目標にも着手していることでしょう。<br><br>　[%NAME_SELF%]の地道な努力を、上司や先輩は見てくれています。そうして今まで取り組んだことのない大きなプロジェクトを、引き受けることになるでしょう。',
'　この3月は、チャレンジ精神を発揮してビッグチャンスをつかみましょう。もしかしたら大きな仕事を任されることもありますよ。最初その話が来たとき、思わず驚いてしまいそうになりますが、これは何かのチャンスだと思って快く引き受けてみましょう。もし今の仕事があまりにつまらないと感じるなら、思い切って転職してみてください。<br><br>　3月は[%NAME_SELF%]にとって入れ替えの時期でもあります。同じことを繰り返してばかりだと運気もそのまま停滞してしまいかねません。自分の本心に正直になって、物事を決断していきましょう。',
'　この月は充実感がみなぎり、仕事に楽しさを見出せるときです。仕事で顔を合わせる人には、笑顔の対応を心がけましょう。たまには励ましやねぎらいの一言を掛けるようにするのもいいですね。[%NAME_SELF%]の人柄の良さが、たくさんの仕事のチャンスを運んできてくれますよ。「あなたにお願いしたい」、「あなたなら安心して任せられる」といった依頼が、この月はどんどん増えていくことでしょう。<br><br>　またこの3月は交渉ごとにも運がめぐってきます。取引先の相手やお客さんに、真摯で丁寧な口調でアプローチしてみてくださいね。',
'　この3月は、今までのやり方を変えるのに良い時期ですよ。これまでやってきた方針や方法に、何となく行き詰まりを感じるようになるでしょう。ですがここで黙っていては、何も変わりません。自分なりのアイデアや意見があれば、思い切って提案してみるといいでしょう。それがきっかけとなって、これまで以上に仕事に熱が入りますよ。それがきっかけとなって企画担当を任されたり、新しいプロジェクトを求められたりすることもあるでしょう。<br><br>　この月はあなたなりの改善策を発案するのに適しています。勇気を出して行動に移してみてください。',
'　この3月は、活躍のチャンスを得るときです。「これならやれそうだ」と思えるものにはどんどんチャレンジしてみてください。これまで温め続けてきたアイデアがあれば、この月に発案してみるといいですね。独創性あるセンスで、周囲の注目を集めることができるでしょう。3月は勢いに乗って次から次へとやりたいことが出てきますが、あれもこれもと引き受け過ぎないように気をつけましょう。<br><br>　そうしていったん引き受けたことは、最後までやり遂げるようにしてください。それらが実績となって、これからのあなたに自信をつけてくれますよ。',
		),
		array( "nw22_039_3", 
'　この3月は、きちんと行動に移している人が[%NAME_SELF%]の味方になりますよ。あなたがこの先仕事でどういう成功をしたいか、まずイメージしてみてください。そして実際成功している人に話を聞いてみたり、相談してみたりすることです。あなたに的確なアドバイスをくれる人を、これからも大切にしていきましょう。その人は必ず行動に移して、成功をつかんでいるはずですから。<br><br>　その人になり切ったつもりで、あなたの行動にその人のアイデアや考えを少しずつ取り入れていってください。そうすれば、自分の目指している目標が、ゴールとなって見えてくるでしょう。',
'　誠実な雰囲気を持っている人に、仕事の相談をしてみるといいでしょう。誰にでも愛想がよく、単に人当たりの良い人だと、のちのちトラブルになってしまいかねません。この月はつい気を許したばかりに、うわさ話を立てられたり、秘密を暴露されたりしないように気をつけましょう。なので地味な存在だったとしても、いつも真摯な態度で仕事に取り組んでいる人に、あなたの悩みを打ち明けてみてください。<br><br>　その人は親身になってあなたに的確なアドバイスをしてくれるでしょう。そしてあなたを叱咤激励しながら、背中を強く押してくれますよ。',
'　冷静に自分を諭してくれるような人が、3月の[%NAME_SELF%]には必要です。この月のあなたは、自分に自信が持てるものの、どこか感情的になりやすいところがあります。そうしてせっかく解決しそうな問題でも、ますます困難にしてしまうことがあるかもしれません。<br><br>　そんなとき、いつもあなたのことを気に掛けてくれて、的確な助言をしてくれる人が、あなたを冷静な気持ちにさせてくれます。そしてその人の前では片意地を張らずにいることができそうですよ。そうしてその人と信頼関係ができたとき、あなたの人生を支えてくれることでしょう。',
'　しっかりとした決断力のある人が、[%NAME_SELF%]の心強い味方になってくれそうです。この月の[%NAME_SELF%]は、誰とでも社交的に振る舞える反面、少々優柔不断になってしまいがちですね。人当たりがいい分、無理な頼みごとをされたり、強引に誘われたりして、困ってしまうことがありそうですよ。そんなあなたを見て、温かくフォローしてくれる人、適切なアドバイスをくれる人が現れます。その人に窮地を救われて、思わずほっとすることでしょう。<br><br>　その人の毅然とした態度や言動を真似してみると、いざとなって自分をうまく守ることができますよ。',
'　この3月、なるべく目上の人と円満に過ごすようにしましょう。上司や先輩はもちろんのこと、役職の付いた人ともきちんとあいさつを交わすようにしてみてください。[%NAME_SELF%]の礼儀正しい態度が評価されて、この先自分の昇進に大きく影響することになるでしょう。ですが自分に直接関係ないからといって、特定の人以外にあいさつも会話もしないという態度は慎むべきです。そういう態度を目上の人たちは見ているはずですから。<br><br>　あなたの分け隔てない態度こそが、この先の人生には大切です。そのためにはまず目上の人との関係を良好にしてください。',
'　[%NAME_SELF%]がこの月味方につけるべき人とは、リーダー役を任されている人です。もしその人が窮地に立たされているなら、あなたが率先して手を差し伸べてください。その人の仕事を手伝うのもいいでしょう。そうすることであなたへの信頼度がかなり高まりますよ。<br><br>　またこの時期は目上の人との関係を大切にしてください。職場の上司や先輩はもちろん、家族や親せきともできる限りコミュニケーションをとるようにするといいですね。もし悩みや迷いがあれば思い切って相談してみてください。その人たちの助言によって、あなたは前向きな気持ちを取り戻せますよ。',
'　包容力のある異性が[%NAME_SELF%]の味方になってくれそうです。誰に対しても同じ態度でいる人、分け隔てない判断のできる人こそが、あなたの窮地を救ってくれるのですよ。その人を自分の味方につけることで、今までの自分の在り方を見直すことができるでしょう。これまで偏ったものの見方をしていたり、思い込みが強かったりして、あなたの人間関係に何らかの影響を及ぼしていたかもしれません。<br><br>　ですのでその異性の存在が、この先のあなたを良い方向へと導いていってくれるでしょう。そして一生尊敬する人としてあなたの心に残るのです。',
'　この3月は、どちらかというと補佐役の人を味方につけるといいですね。トップの地位の人に直談判をするよりも、その手助けをしている人に悩んでいることや改善してほしいことを相談してみてください。その人が良い仲介役となって、あなたの希望をすんなりと受け入れてくれますよ。ただその人に何でもかんでも要求を押し付けないように気をつけましょう。<br><br>　そうしてあなたもその人の味方になってあげてください。その人なりの苦労や努力を知ることで、あなたのこれからの人生に役立つことでしょう。その人はあなたに多くの学びをもたらしてくれますよ。',
'　この3月は何かと気持ちが移ろいやすく、少々落ち込みがちになります。そんな[%NAME_SELF%]の味方になり、支えとなってくれる人とは、どっしりと落ち着いた雰囲気を持つ人です。「何とかなるよ」、「大丈夫だよ」とあなたを励まし、背中を押してくれることでしょう。困ったとき、つらいときはその人に助言を求めるようにすると、良いヒントをもらえそうです。ですがその人に頼り過ぎないように、メンタルを強くすることもそれ以上に大切ですよ。<br><br>　その人はあなたにとって、まるで太陽のような存在です。その人の優しさを見習いながら、これからの自分を元気づけていってくださいね。',
		),
		array( "nw22_039_4", 
'　現実がなかなか自分の思い通りにならないからといって、あきらめてしまうのは時期尚早ですよ。この3月は失敗することで学びを得たり、少々つらい思いをすることで他人の痛みを理解したりできそうです。この月はあなたが大きく成長するチャンスがたくさん訪れますので、真正面から物事に向き合って取り組んでください。そこでの試練はあなたにいろんなことを教えてくれます。<br><br>　「自分なら乗り越えていける」という強い信念をもって、目の前の困難に向き合っていきましょう。そうすることで幸運の方があなたをめがけてやってきてくれますよ。',
'　この3月は、なるべく控えめな態度でいるように心がけてください。自分が主張したい、目立ちたいという欲が高まると、それ以上に力のある人と衝突してしまいかねません。そうなるとなかなか関係の修復ができず、さらに面倒なことになりそうです。<br><br>　なのでこの月は、もう少し自分の地盤を固めるように努めてみてください。「それだけでは物足りない」と感じたとしても、確実に力がついていきます。そうしてこの3月をあなたなりに過ごせたら、この先仕事で大きなチャンスがめぐってきます。「あなたにお願いしたい」という依頼があちこちからやってきますよ。',
'　この3月の[%NAME_SELF%]は、とてもエネルギッシュに行動できます。ただその分、後先考えずに行動したり、その場であっさりと返事をしたりすることはなるべく控えるようにしましょう。せっかく大きな仕事を引き受けたのに、それまでの約束ごとや決まりごとをすっかり忘れていたり、時間的に無理だとわかったりすることがあるかもしれません。そうしてから断ってしまうと、後味の悪さがいつまでも残りそうです。<br><br>　なのでまずは自分の力量をよく知っておくことが大切です。そしていったん約束した契約ごとは、きちんと覚えておいて、必ず守ることですよ。',
'　この3月はなるべく従順な態度でいるようにすると、トラブルを避けられそうです。相手が強気だったり、高圧的だったりした場合、自分を通すよりもその場の雰囲気を和らげるように努めましょう。だからといって皆にいい顔ばかりしていると、いざとなって自分の意見を言えなかったり、八方美人だととられてしまったりするかもしれません。<br><br>　この月、少しでも幸運を引き寄せるためには、自分の信念をしっかりと持つことが大切です。どんな困難が自分に降りかかっても、決してぶれないという強さを持つことで、思い通りの状況に変えていくことができますよ。',
'　この3月は、なるべく冷静な態度と判断を心掛けることで、幸運をぐっと引き寄せられますよ。衝動買いや早急な契約はなるべく控えるようにしましょう。心動かされること、欲しいものが目の前に現れても、いったん気持ちを落ち着かせることです。その場で手に入れられなくてもチャンスは必ずめぐってきます。[%NAME_SELF%]の冷静な判断力が、本来求めていた幸せを引き寄せることでしょう。そのためにはいったん物事を保留にする勇気を持つことですよ。<br><br>　そのようにして、この月は自分の気持ちをコントロールさせるようにしましょう。',
'　この3月は、[%NAME_SELF%]にとって良い知らせが届いたり、思いがけないチャンスが舞い込んだりすることが多くなります。もしあなたがその気であれば、迷わず受け取ってください。あれこれネガティブなことを考えると、時間ばかりが過ぎて、せっかくの幸運を逃してしまいかねません。もし失敗したとしても、そのときどうするかゆっくり考えたらいいのです。<br><br>　この月は、自分のセンスや才能をできるだけ生かすようにしていきましょう。たとえ誰かに反対されたとしても、決めるのはあなたなのですよ。あなたはこれからも自由な気持ちで羽ばたいていけるのです。',
'　この3月は、周りの人たちを喜ばせることができそうですよ。[%NAME_SELF%]がいいなと思うことは、家族や友人、職場の人たちにシェアするように心がけてみてください。ちょっとしたおすそ分けをしたり、楽しそうな話題や情報を教えたりすると、これからの運も豊かになってくることでしょう。「この前のお礼に」とその人たちがあなたを喜ばせてくれるような何かをシェアしてくれることもありますよ。それは物ばかりとは限りません。<br><br>　この月は、あなたにゆとりがある範囲で、周りの人と温かくコミュニケーションをとるようにしましょう。',
'　この3月は、きちんと目標を立てて、それに向かってひたすら進んでいってください。中途半端に物事を決めても、結局時間ばかりが過ぎていってしまいかねません。この月はメリハリをつけて行動していくことです。毎日時間を決めて、コツコツと努力をすることが夢実現への最先端です。そして良い情報は同じ志を持つ人たちにシェアするようにしましょう。そして同僚や友人の成功は、自分のことのように喜んでくださいね。<br><br>　そのような行動の積み重ねで、あなたはいつの間にかなりたい自分になっていることでしょう。それが何よりの幸運なのですよ。',
'　この3月の[%NAME_SELF%]は、行動力にあふれています。何事も恐れず取り組むことができるでしょう。ただこの時期はちょっとしたことでも感情的になりがちです。たわいない会話でもつい言い過ぎてしまわないように、細心の注意を払ってください。行動力が前に出ると、動作の遅い人にイライラしてしまうことがありますが、なるべく穏やかな気持ちで見守るようにするといいですね。そうするにはつい感情的になってしまう自分を、許してあげることなのです。<br><br>　そうすることであなたはこの月、幸運を手にすることができます。あなたの行動力と寛容さが、周りの人たちを惹きつけることでしょう。',
		),
		);
?>