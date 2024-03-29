<?php
/**
 * menu_id : nw22_021
 * シウマ：一人用 総合運
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'nw22_021',
			'contents'			 => 'shiuma2_zap',
			'img_name'			 => 'zap_shiuma2',
			'teller_name'		 => 'シウマ',
			'isp_mid'			 => '53w020',
			'nif_menukey'		 => 'unsei_2022_021',
			'price'				 => '2000',
			'discount'			 => '1800',
			'design_cd'			 => '20',
			'person'			 => '1',
			'category_name'		 => 'life',
			'release_date'		 => '20211201',
			'title'				 => 'シウマが占うあなたの2022年全運命【恋/仕事/財/健康/試練】総合鑑定',
			'caption'			 => '辛いことや我慢も多い世の中……2022年はどんな年になるのか、明るく穏やかな日々を送れるのか、気になる方も多いでしょう。メディアで人気の占い師シウマが、2022年の全運命を徹底鑑定します。あなたの心に寄り添い、暮らしの中のツキを逃さぬようサポートしていきますよ。',
            'base_1_title_self' => 'あなたの数字',
            'base_2_title_self' => 'あなたの基本性格',
            'base_1_title_other' => 'あの人の数字',
            'base_2_title_other' => 'あの人の基本性格',
            '1_min_title'  => '2022年は、あなたにとってこんな年になります',
            '2_min_title'  => '2022年にあなたが感じる、これまでとは違うこんな『変化』',
            '3_min_title'  => '2022年は、こんなことを始めてみるのがおすすめです',
            '4_min_title'  => '2022年、思い切ってやめたほうがよいこと',
            '5_min_title'  => '2022年、あなたに訪れる大切な『出会い』はある？',
            '6_min_title'  => '2022年、あなたはこんな恋をしそうですね',
            '7_min_title'  => '2022年、あなたに訪れる『試練』はこれ！',
            '8_min_title'  => '',
            '9_min_title'  => 'その試練を乗り越えた先にある、あなたの目覚ましい成長',
            '10_min_title' => '2022年を最後まで健康に過ごすために必要な『心がけ』',
            '11_min_title' => '2022年、あなたが仕事で得る『成功と報酬』',
            '12_min_title' => '2022年、あなたのお金の運気の流れ',
            '13_min_title' => '2022年はどうなる？　あなたの周囲の人間関係',
            '14_min_title' => '2022年を終える頃……あなたが手に入れているもの'
		);

// 小メニューロジック
$logic = 'b1';

// Next枠
$next = array( "nw22_022", "nw22_023" );

// 一部見せテキスト
$free = array(
		array( "nw22_021_1", 
'　2022年は、あなたにとってこれまでを見つめ直す最高の年になります。今まで頑張って走り続けてきた[%NAME_SELF%]。ここはいったん立ち止まり、自分と向き合ってみることで、流れを……',
'　2022年は、人のために行動するとそれが自分にも返ってくる、そんな一年になるでしょう。意識しなくとも、誰かのために思わず行動したくなってしまう一年になります。周囲で困っている人がいたら、積極的に……',
'　2022年は、積極的にいろいろなことにチャレンジすると運気が回ってくる年になります。物怖じせずに新しいことや気になっていたことにトライしてみましょう。人からの誘いも多くなるので、遠慮せずに参加して……',
'　2022年は、今まで以上に人と人とのつながりを大切にすると全体的な運気が上昇します。仕事先で初めて会う人や共通の友人を介して出会う人はもちろん、同じ店をよく利用していて話すようになった人など、すべて……',
'　2022年は、今まで積み重ねてきたことの総決算を行う年です。これからも続けていくべきこと、これを機にスパッとやめるべきこと、その判断をここでしっかりと行いましょう。また、将来のビジョンを明確に……',
'　2022年の[%NAME_SELF%]は、大きなチャンスに恵まれやすくなります。頑張っているのになかなか自分に光が当たらず、悔しい思いをしていた自分とはもうお別れです。[%NAME_SELF%]の……',
'　2022年は、今まで思い描いていたことがどんどん実現する年になります。やりたかったけど時間がなくてなかなか挑戦できなかったことや、ずっと憧れていたことには積極的にチャレンジして……',
'　2022年は行動した分だけ変化が訪れる年となります。これまで、何かを変えたいと思いながらも、なかなか行動に移すことができなかったり、チャンスを逃してしまったり……ということもあったので……',
'　エネルギッシュに活動することのできる一年間になります。少しでも気になっていることや興味のあることにはどんどん挑戦していきましょう。初めのうちはなかなか結果が伴わないかもしれませんが、挑戦を……',
		),
		array( "nw22_021_2", 
'　2022年の[%NAME_SELF%]は、自分でもびっくりするくらい冷静に物事を考えることができるようになります。今までの[%NAME_SELF%]ならつい感情的になってしまっていた場面でも……',
'　今まで以上に人当たりが良くなるので、人間関係がとても円滑になります。2022年の[%NAME_SELF%]は、自然と優しさが周囲にあふれ出るようになります。そのため、自分では全く自覚していなくても……',
'　今までにないくらい物事が進みだすようになります。なかなか成果のあがらなかった仕事や、うまくいかなかった人間関係も、あっという間に動き出す年になるでしょう。このチャンスをものにするためにも……',
'　今まで気づくことのなかった[%NAME_SELF%]自身の新たな才能に気づく2022年になるでしょう。その才能には、周囲からの指摘で初めて気づくことになります。普段からいろいろな人と接し、会話の……',
'　自分自身の成長を強く実感できる年になるでしょう。依然と比べ仕事をするスピードが速くなったり、人との付き合い方が上達したりと、目に見える形で成長していることがわかるようになり……',
'　目に見えない不思議な力を感じる一年になります。何となく雨が降りそうだからと傘を持って出かけたら本当に雨が降ったり、何となくいつもと違う帰り道を選んだら旧友とばったり遭遇したり……と普段の何気ない……',
'　仕事や人間関係において、今まで以上に冷静な判断を行うことができるようになるでしょう。この年の[%NAME_SELF%]は客観的に物事を考えることに長け、どんな状況においても冷静な判断を下すことが……',
'　2022年は、人間的に大きく成長する一年となります。物事を広い視野で考えられるようになり、仕事や恋愛などあらゆる場面での困難に対して冷静に対処できるようになります。また、そんな[%NAME_SELF%]を慕って……',
'　今まで以上に直感のさえわたりを実感する一年間になるでしょう。何となく選んだ選択肢や、適当に判断したことが面白いようによいほうへと転がっていきます。あれこれと悩むぐらいなら、直感的にスパッと物事を……',
		),
		);


// 結果テキスト
$text = array(
		array( "nw22_021_1", 
'　2022年は、あなたにとってこれまでを見つめ直す最高の年になります。今まで頑張って走り続けてきた[%NAME_SELF%]。ここはいったん立ち止まり、自分と向き合ってみることで、流れを変えることができます。<br><br>　そうはいっても、なかなか思うようにいかず疲れがたまってしまうこともあるでしょう。そんなときは、温泉に行ったり、おいしものを食べたりするなど、思い切ってゆっくり休んでみることも重要です。周囲の人も必ずあなたの助けになってくれます。今はとにかく身体を大切にして、次のステップへの準備を進めましょう。',
'　2022年は、人のために行動するとそれが自分にも返ってくる、そんな一年になるでしょう。意識しなくとも、誰かのために思わず行動したくなってしまう一年になります。周囲で困っている人がいたら、積極的に手を差し伸べてあげてください。<br><br>　[%NAME_SELF%]の優しさは周囲の人にもどんどん広がっていきます。そのため、人間関係や友達付き合いは、以前と比べると格段に心地よいものになるでしょう。さらに、[%NAME_SELF%]の優しさにグッと心を動かされる人物も現れます。優しさをどんどん振りまいていきましょう。情けは人のためならず、です。',
'　2022年は、積極的にいろいろなことにチャレンジすると運気が回ってくる年になります。物怖じせずに新しいことや気になっていたことにトライしてみましょう。人からの誘いも多くなるので、遠慮せずに参加してみると良いです。楽しみながら多くの経験を積みましょう。<br><br>　自分からガンガン動いていくことで、面白いようにことが進むようになります。新しい習い事やスキルアップのための資格への挑戦、見識を広げるための外出など、どんなことでも構いませんので、初めの一歩を踏み出してみてください。素敵な一年になりますよ。',
'　2022年は、今まで以上に人と人とのつながりを大切にすると全体的な運気が上昇します。仕事先で初めて会う人や共通の友人を介して出会う人はもちろん、同じ店をよく利用していて話すようになった人など、すべての出会いを大切にしてみてください。新しい出会いから[%NAME_SELF%]の新しい道が広がっていきます。<br><br>　また、多くの人と話す機会に恵まれるため、積極的に相手の話を聞いてあげると良いでしょう。聞き上手は周囲からの好印象を誘いやすく、初めて会った人からも信頼を得ることができます。コミュニケーションを楽しむ中で、自分自身の成長を実感しましょう。',
'　2022年は、今まで積み重ねてきたことの総決算を行う年です。これからも続けていくべきこと、これを機にスパッとやめるべきこと、その判断をここでしっかりと行いましょう。また、将来のビジョンを明確に定め、目標を達成するためには何が必要なのかを改めて考えることも重要です。<br><br>　ここで行動するかしないかで、これからの[%NAME_SELF%]の人生は大きく変わります。ですが、過度に心配したり難しく構えたりする必要はありません。主体的に行動することさえできれば、必ず良い結果につながります。この年がまさに自分を変える大きなチャンスです。',
'　2022年の[%NAME_SELF%]は、大きなチャンスに恵まれやすくなります。頑張っているのになかなか自分に光が当たらず、悔しい思いをしていた自分とはもうお別れです。[%NAME_SELF%]の才能を遺憾なく発揮するためにも、この年は、普段からどんなことにも全力で挑戦することを心がけてください。<br><br>　また、毎日の準備を怠らないことも大切です。せっかく大きなチャンスが回ってきたときに何の準備もしていないと、みすみすその機会を逃すことになってしまいます。せっかくのチャンスの波に乗り遅れないように、普段から心構えをしっかりとしておきましょう。',
'　2022年は、今まで思い描いていたことがどんどん実現する年になります。やりたかったけど時間がなくてなかなか挑戦できなかったことや、ずっと憧れていたことには積極的にチャレンジしていきましょう。楽しむ気持ちを忘れないことで、大きな成果を上げることができます。<br><br>　また、準備してきたことや積み重ねてきたことが花開く年にもなるでしょう。努力してきたのになかなか芽が出ない、と半ば諦めムードが漂っているようなことがあればチャンスです。あとほんのひと踏ん張りをすることで、大きな成功が[%NAME_SELF%]にもたらされるでしょう。',
'　2022年は行動した分だけ変化が訪れる年となります。これまで、何かを変えたいと思いながらも、なかなか行動に移すことができなかったり、チャンスを逃してしまったり……ということもあったのではないでしょうか。仕事や恋愛において「変えたい」と感じていることがあるならチャンスです。積極的に行動に移していきましょう。<br><br>　現状から悪くなってしまうことを危惧して、変化を恐れているかもしれませんが、その必要はありません。物事はおおむね[%NAME_SELF%]の望んでいるほうへと転がっていくでしょう。成功だけを信じて、突き進みましょう。',
'　エネルギッシュに活動することのできる一年間になります。少しでも気になっていることや興味のあることにはどんどん挑戦していきましょう。初めのうちはなかなか結果が伴わないかもしれませんが、挑戦を続けることはそれだけで[%NAME_SELF%]の力になります。そして近いうちに大きな成果を上げることができるでしょう。<br><br>　成功を引き寄せるためにも、常に自分自身の成功したビジョンを思い描くことが大切です。イメージが具体的であればあるほど、現状の自分に足りないものがはっきりとわかるようになります。ゴールへと向かっていきやすくなりますよ。',
		),
		array( "nw22_021_2", 
'　2022年の[%NAME_SELF%]は、自分でもびっくりするくらい冷静に物事を考えることができるようになります。今までの[%NAME_SELF%]ならつい感情的になってしまっていた場面でも、落ち着いて冷静な判断を下せるようになるでしょう。<br><br>　職場などでの人間関係とは、必要以上に考え込んでしまうとかえって疲れてしまうものです。余計なストレスをためないようにするためには、少しドライすぎるくらいの思考が大切になります。2022年の[%NAME_SELF%]であれば、常に一歩引いて冷静に事を運ぶことができるので、そういったストレスとは無縁の生活が過ごせるでしょう。',
'　今まで以上に人当たりが良くなるので、人間関係がとても円滑になります。2022年の[%NAME_SELF%]は、自然と優しさが周囲にあふれ出るようになります。そのため、自分では全く自覚していなくても、自然と周囲の人に優しさを振りまくようになります。その結果、[%NAME_SELF%]の周囲にいる人たちは、[%NAME_SELF%]と一緒にいる時間を積極的に望むようになります。<br><br>　仕事や友達関係がうまくいくことで、無用なストレスをためることが少なくなり、日常生活が心地よいものになるんです。生活リズムも改善され、若々しく健康的な一年を送ることができるでしょう。',
'　今までにないくらい物事が進みだすようになります。なかなか成果のあがらなかった仕事や、うまくいかなかった人間関係も、あっという間に動き出す年になるでしょう。このチャンスをものにするためにも、[%NAME_SELF%]自身が能動的に行動することをいつも心がけましょう。<br><br>　特に、多くの人と積極的にコミュニケーションをとるということは、常に頭に入れておいてください。新たなつながりや出会いに恵まれます。人脈を広げることで、仕事場では昇進のチャンスにつながり、恋愛では良い出会いを手繰り寄せることができます。',
'　今まで気づくことのなかった[%NAME_SELF%]自身の新たな才能に気づく2022年になるでしょう。その才能には、周囲からの指摘で初めて気づくことになります。普段からいろいろな人と接し、会話の機会を多めに設けるようにしましょう。そうすることで眠っていた才能に出会う確率が高まります。<br><br>　また、自分の可能性に限界を設けず、さまざまなことにチャレンジすることもおすすめです。「自分にはこれは向いてないから……」とチャンスを狭めることはせず、苦手なことや難しそうなことにこそ挑戦してみてください。思いもよらないような[%NAME_SELF%]の才能が目覚めますよ。',
'　自分自身の成長を強く実感できる年になるでしょう。依然と比べ仕事をするスピードが速くなったり、人との付き合い方が上達したりと、目に見える形で成長していることがわかるようになります。<br><br>　とはいえ、初めのうちはなかなか成長が見えにくいかと思います。頑張っているのになかなか成果があがらなかったり、努力しても結果がついてこなかったりするのはとてもつらいことです。ですが、そこで諦めてはいけません。グッとこらえてもうひと踏ん張りをすることで、[%NAME_SELF%]は人間的に一回りも二回りも成長することになるでしょう。',
'　目に見えない不思議な力を感じる一年になります。何となく雨が降りそうだからと傘を持って出かけたら本当に雨が降ったり、何となくいつもと違う帰り道を選んだら旧友とばったり遭遇したり……と普段の何気ない行動が思いがけない良い結果を生むことになるでしょう。だから、「何となく」の気持ちを大切にしてください。<br><br>　職場においても、直感的な行動が良い結果を生むケースが発生します。「この仕事、楽しいな。うまくいきそうだな」と感じる仕事があったら大チャンスです。その仕事をきちんとこなすことで、大きな成果を得ることができるでしょう。',
'　仕事や人間関係において、今まで以上に冷静な判断を行うことができるようになるでしょう。この年の[%NAME_SELF%]は客観的に物事を考えることに長け、どんな状況においても冷静な判断を下すことができるようになります。周囲の人からの相談を受ける機会も増えるなど、一皮むけた自分を実感する年になるでしょう。<br><br>　問題に直面したとき、人はなかなか冷静な判断を下すことができません。結論を急いだ結果、誤った方向に進んでしまうということも多々あります。しかし、2022年の[%NAME_SELF%]にはそのような心配はありません。自分の決断に自信を持ちましょう。',
'　2022年は、人間的に大きく成長する一年となります。物事を広い視野で考えられるようになり、仕事や恋愛などあらゆる場面での困難に対して冷静に対処できるようになります。また、そんな[%NAME_SELF%]を慕って多くの人が悩みを相談しにくるでしょう。ぜひ相談にのってあげてください。それを契機にあなたの評判はどんどんあがっていきますよ。<br><br>　こうした成長には、自分ではなかなか気づかないかもしれません。今までの自分と比べて何か変わったのかな、と不安になるかもしれませんが大丈夫です。周囲からの評判がすぐ耳に入るようになります。',
'　今まで以上に直感のさえわたりを実感する一年間になるでしょう。何となく選んだ選択肢や、適当に判断したことが面白いようによいほうへと転がっていきます。あれこれと悩むぐらいなら、直感的にスパッと物事を判断してみたほうがうまくいきやすいでしょう。ひらめきを大切にしてください。<br><br>　例えば仕事では、直感的にうまくいきそうだなと感じたプロジェクトにはより力を入れて取り組んでみましょう。それが昇進や給料アップにつながります。反対に、嫌な雰囲気を感じてしまった仕事は、なるべく受けないようにするなどの工夫をしてみましょう。',
		),
		array( "nw22_021_3", 
'　2022年の[%NAME_SELF%]は、今までにないくらいのスピードで知識を身に着けることができるようになります。少し手を出すのをためらっていた資格の勉強や、語学の習得に力を入れると良いでしょう。初めは少し苦戦するかもしれませんが、毎日コツコツと続けることで必ず結果が伴います。<br><br>　テレワークの推進などもあって、今まで以上に家で過ごす時間が増えたかもしれません。この機会を無駄にしないためにも、テレビを見ていた時間やスマホを眺めていた時間を、少しだけ勉強の時間にあててみましょう。知識を吸収するにはうってつけのタイミングですよ。',
'　ボランティアや地域交流といった、人と触れ合い、そして人を助ける活動に積極的に参加すると良いですよ。ちょっと難しそうで、自分には無理そうだから……と少し敬遠していた活動に顔を出してみることで、思いもよらない体験や意外な出会いを得ることができます。気負わなくとも大丈夫です。<br><br>　空いている時間に地域の交流に参加するのも良いですし、思い切って連休を利用して遠方にボランティアに行く、というのもおすすめですよ。誰かのために一生懸命に活動している[%NAME_SELF%]の姿は、周囲の人の目に魅力的に映ること間違いなしです。',
'　新しいことに挑戦する絶好の機会です。仕事で昇進を目指したい、良い出会いが欲しい、何か新しい趣味を始めたい……と動機はどんなことでも構いませんので、まずはいろいろなことにチャレンジしてみましょう。失敗を恐れていては何事も始まりません。<br><br>　特に2022年は対人運が良好であるため、さまざまな人と関われるようなことを始めると良いですよ。語学勉強のためスクールに通う、地域の活動に参加してみる、といったことを始めてみると、[%NAME_SELF%]自身の成長だけにとどまらず、思いもよらない人との出会いを得ることができます。',
'　独創的なアイデアや先鋭的な考えが浮かびやすいため、クリエイティブなことにチャレンジしてみると成功につながります。仕事では、新しい企画を考えるための会議などで積極的に[%NAME_SELF%]の意見を発表してみましょう。思わず周囲が驚くようなアイデアを生み出すことにつながります。<br><br>　また、絵を描いてみる、手芸をしてみる、といった何かを作る活動を始めてみることも、[%NAME_SELF%]の新たな可能性の発掘につながるでしょう。趣味を見つけることで、[%NAME_SELF%]自身の才能を遺憾なく発揮できるとともに、新しい人との出会いも期待できます。',
'　いつもは気が引けたり、遠慮したりしているようなグレードの高い物事に触れ合う機会を作ると良いですよ。例えば、難しそうだから……と敬遠していたオペラや絵画鑑賞、古典音楽と触れ合ってみることで思わぬ発見をすることができます。積極的に一流のものを楽しんでみましょう。<br><br>　一流のものに触れていると、[%NAME_SELF%]に近づいてくる人もいつの間にか格式と教養を備えた人ばかりになってくるでしょう。新しい人脈を広げていくチャンスです。その人たちとの出会いが、[%NAME_SELF%]を仕事においても日常生活においても、さらに上のグレードへと運んでくれるでしょう。',
'　目上の人との交流が運気をアップさせます。上司や先輩との交流を積極的に始めてみましょう。言葉遣いに気をつけ、いつも礼儀正しくふるまうことによって、目上の人からの印象はどんどんと上がっていきます。その結果、その後のさまざまな場所で彼らは[%NAME_SELF%]の力になってくれるでしょう。<br><br>　そうはいっても、なかなか交流しづらいのが目上の人というものです。そんなときは、会話の中から共通の話題を見つけてみましょう。とっつきにくいと思っていた先輩でも、思わぬ共通の話題が見つかると一気に交流を深めることができますよ。',
'　何事も楽しんでみることでうまくいきやすい一年になります。仕事においては、楽しむ気持ちを忘れないことで、どんどん成功を収めるようになるでしょう。また、人間関係や恋愛においてはひとつひとつの出会いの場を楽しめれば、より魅力的な人との出会いに恵まれます。<br><br>　さらに、苦手なことでも楽しむことで思いがけない成果を得られます。ちょっと敬遠していた仕事や苦手なタイプの人との交流でも、楽しもうという気持ちさえもっておけば、良い結果に結びつくでしょう。とにかくどんなことでも楽しむを意識していろいろなことに挑戦しましょう。',
'　自己投資を始めてみるとそれが結果につながります。スキルアップのために資格の勉強を始めるのも良いでしょうし、新たな成長のためにと語学の勉強などを始めてみるのもおすすめです。ジャンルや分野にこだわることなく、いろいろなことへの挑戦がさらなる結果をもたらします。<br><br>　「勉強するぞ」と強く意気込むのもよいですが、それよりもむしろ学びを楽しむことに重きをおくと成功につながりやすいです。早く成長したいから、といきなり上級者用の勉強を始めてしまうと楽しさがわからず挫折してしまいます。段階を踏んだ勉強を行うことで、結果に結びつけられます。',
'　自分磨きをしっかりと行うことで、さらに[%NAME_SELF%]の魅力がアップします。積極的に自分への投資を始めましょう。特に、身だしなみをいつも以上に意識してみることで大きな運を引き寄せることができます。流行のファッションや季節のコーディネート特集には常にアンテナを張り巡らせておきましょう。<br><br>　外見がしっかりとしている人は、それだけで周囲から一目置かれます。今まであまりおしゃれに興味のなかった人ほどチャンスです。雑誌やネットで情報を手に入れておしゃれに取り組むことで、[%NAME_SELF%]を見る周囲の人の目がガラッと変わりますよ。',
		),
		array( "nw22_021_4", 
'　無理をすること、頑張りすぎることをやめる2022年にしましょう。自分なりに頑張っている、努力しているにもかかわらず、結果が付いてこないことがあります。そんなときに無理をしてしまうと、結果が伴わないだけではなく、体調を崩すことにもつながってしまいます。思い切って諦める勇気を持ってみましょう。<br><br>　前に進むためには、妥協や諦めが重要です。区切りをつけることでこそ、新しく見えてくるものがあります。頑張りすぎない、ということは決してサボるという意味ではありません。前を向き、新たな道に進むために必要なステップなのです。',
'　2022年は、嫌な用事を後回しにすることをやめてみましょう。大変な仕事や面倒くさい案件というのは、ついつい後回しにしてしまいがちです。けれども、そういった用事をあえて先に片づけてしまう癖をつけることで、全体的な運気が上昇し、[%NAME_SELF%]自身の大きな成長を望むことができます。<br><br>　まずは、「明日やろうと思っていたことを今日少しだけやる」といったことから始めてみましょう。常に先手を打って行動することを心がけることで次第にそれが癖となり、いつの間にか嫌なことでもすぐに解決できる人間へと成長できます。',
'　2022年は、ついつい遠慮してしまうことをやめましょう。誰かの顔を立てるため、場の空気を悪くしないため……と自分が一歩下がって他の人の意見に流されてしまう、ということは人間関係において頻繁に発生します。ですが、この年は[%NAME_SELF%]の意見をぶつけるときです。物怖じしてはいけません。<br><br>　2022年は人当たりの良い印象を受けやすい年になるため、[%NAME_SELF%]の意見はすんなりと周囲に受け入れられます。我慢のし過ぎは身体にもよくありません。自分の気持ちに正直になることが何よりも大切です。',
'　自分ひとりだけで頑張ることをやめる2022年にしましょう。周囲の人に迷惑をかけられないから……と、ひとりで大変な仕事を抱えてしまったり、つらい悩みを誰にも相談せず自分だけで解決しようとしたりしないようにしましょう。いったん落ち着いて、周囲の人に遠慮なく相談してみましょう。<br><br>　頑張ることは決して悪いことではないのですが、ひとりで頑張る必要はありません。誰かに相談することで、気持ちが楽になるだけでなく、問題の解決もスムーズになるでしょう。また、そこから新たな縁が生まれ、一生の友人や運命の相手と出会うことにもつながります。',
'　2022年は、これまで当たり前にしてきたことを見直す一年となります。お付き合いしてきた人や所属していた場所を思い切って見直してみましょう。腐れ縁や古い慣習を手放すことで、新しいステージに進むことができます。<br><br>　少し合わないなと思っても、長く付き合ってきたから、習慣だから……と手放すことを恐れていませんか？　前に進むためには、思い切った決断をすることも大切です。恐れや不安を手放して、しっかりと自分に自信を持ちましょう。そして、少し高めの目標をもって進んでいくと、自然とレベルアップできるようになります。',
'　2022年の[%NAME_SELF%]は、物事を行うにあたって準備をすればするほど運気が上がります。中途半端な仕事や手抜きの仕事をやめましょう。確実に成功をつかむためにも、時間をかけてしっかりと努力を積み重ねていくことが大切です。<br><br>　やっつけで行った仕事や、納期ぎりぎりで何とか間に合わせた仕事というのは、どこかに必ずミスがあるものです。そのような仕事をしていると、せっかく今まで積み上げてきた信頼や評価が下がってしまいます。しっかりと準備をして仕事に取り組むことで、大きな成果につながるでしょう。備えあれば憂いなしです。',
'　心配のし過ぎをやめてみましょう。このままで大丈夫かな、不安だな……と余計なことまで考えてしまうと、それが悪い流れの発端となって良くない結果に結びついてしまうかもしれません。まずは「何とかなる、大丈夫」と楽観的に構えてみることから始めてみましょう。心配性は肉体的にもよくありません。<br><br>　試験の合格発表時や仕事のプレゼンテーション前などは、失敗したときのことを考えると不安な気持ちになるでしょう。そんなときこそ自分に言い聞かせるように「大丈夫」と語りかけてみてください。ポジティブな思考が、必ず良い結果を招きます。',
'　頑固になりすぎるのをやめる一年間にしましょう。人間はそれぞれ好みや考えていることが違います。自分の思う通りに物事を進めたいからといって意見の押しつけをしてしまうと、相手にとっても自分にとってもよくない結果へと結びついてしまいます。まずはよく話し合い、お互いの意見を理解することから始めるようにするといいですね。<br><br>　他人の意見には、自分にはない意見や考えが存在します。それらを吸収することで、[%NAME_SELF%]自身一回りも二回りも成長することができます。それだけでなく「懐の深い人だな」と相手から一目置かれることにもつながりますよ。',
'　2022年の[%NAME_SELF%]に迷いは禁物です。迷いはせっかくのチャンスをふいにしてしまうことにつながりかねません。この年、あなたは仕事や人間関係において新しいステップへと進むことになるでしょう。その重要な転換期において、自分にとって何が必要で何が必要ないのかを迫られる機会が多くなります。<br><br>　悩んで立ち止まってしまっては、その分だけ後ろに下がってしまうだけでなく、せっかく目の前まで迫っていたチャンスが逃げていってしまいます。なるべく早く答えが出せるように心がけてみましょう。素早い決断が、成功のカギです。',
		),
		array( "nw22_021_5", 
'　2022年は新しい出会いが増加します。職場での出会いや、共通の友人を通した出会い、イベントなどでの偶然の出会い、といろいろなシチュエーションでの出会いに恵まれるでしょう。その中で、[%NAME_SELF%]にとってとても大切な出会いが訪れます。<br><br>　出会いの機会は多くありますが、そのうちの多くは短い関係で終わります。何度も会ううちに「少し違うな」　と感じてしまったり、またお互い仕事で忙しい中で疎遠になってしまったりすることもあります。しかし、その中で、自然と長く続く関係の人が現れます。その人との関係を大事にしてみましょう。',
'　[%NAME_SELF%]が自然に振りまく優しさに惹かれて、多くの人が[%NAME_SELF%]の周りに集まってくる一年になるでしょう。その中で、「もっとこの人に優しくしてあげたい」と思わず考えてしまう、そんな人と巡り会います。その出会いを大切にしてみてください。<br><br>　この出会いを無駄にしないためには、優しさを一方的に押しつけるだけではいけません。時には相手からの優しさに一方的に甘えるなど、相互に優しさを受け渡しできるような関係を目指していくことが大切です。お互いに相手をいたわることができてこそ、長く続く関係は生まれます。',
'　2022年の[%NAME_SELF%]は、とても多くの人と関わりを持つことになります。初対面の人とでも会話が弾むようになり、仕事、プライベートを問わず交友関係の輪がどんどん広がっていき、毎日のように違う人と出会うことになるでしょう。その中で、何度も顔を合わせる関係になる人が現れます。<br><br>　この年は、誰とでも楽しく話せるようになる[%NAME_SELF%]ですが、その人とは初めのうちはなかなか会話が弾みません。もしかして相性が悪いのかなと心配になりますが、何度か会ううちにお互いの本性を知り、その結果、誰よりもその人との会話が楽しくなります。',
'　2022年の[%NAME_SELF%]は、今までよりも出会いの場に恵まれるため、多くの人と関わりをもつようになるでしょう。その中で、直感的に「この人だ」と感じる人と出会います。その人といることで、あなたはこれまで感じなかった幸福をえることになるでしょう。その人と行動することで、最高の結果につながります。<br><br>　出会う相手を冷静に見極め、自分とマッチする人かを判断することももちろん大切です。しかし、自分自身の直感を信じることも同じくらい大事です。この年の[%NAME_SELF%]は非常に直感がさえているため、それを信じて行動することで良い結果がもたらされます。',
'　2022年の[%NAME_SELF%]は、今まであまり触れ合う機会のなかった高いランクの人たちと交流を行うようになります。そうした交流を通して、素敵な出会いと巡り会うことになるでしょう。自分にはもったいない人だから……と遠慮することはありません。積極的に関わっていくことで良い結果につながりますので、どんどん自分をアピールしてください。<br><br>　その中に、初対面とは思えないほど気が合い、楽しくおしゃべりできる人が現れるはずです。二人に共通の趣味があったら、その趣味を通じて一緒に出かけましょう。さらにご縁が深まります。',
'　運命の相手との出会いが期待できる一年になります。普段から自分の理想の人を意識しておくことで、出会いがうまくいきやすくなります。自分の理想の人がどのような人なのかを改めて意識するようにしてみましょう。その先に出会いが待っていますよ。<br><br>　出会いは日常の何気ないポイントにこそ隠されています。丁寧な暮らしを心がけることで、出会いを[%NAME_SELF%]の方向に引き寄せることができるでしょう。毎日を適当に過ごしてしまうのではなく、細かな点にもしっかりと目を光らせてみてください。思わぬところに人と出会えるヒントがあります。',
'　年の離れた人との触れ合いが、運命の相手との出会いのカギになりそうです。特に年が自分より下の人との交流は、新しい感性や最新の流行を知ることにもつながります。遠慮することなく積極的に年下との交流を行っていくようにしましょう。その先に運命の相手との出会いが待っていますよ。<br><br>　その人と出会ったら、積極的にアクションを起こしてみましょう。相手は少々受け身気質なところがあるため、[%NAME_SELF%]のほうが引っ張ってあげるくらいの心づもりでいると、関係がうまくいきやすいでしょう。出会いに感謝しつつ、関係を楽しむことで最高の結果につながります。',
'　2022年の[%NAME_SELF%]は、今まであまり交流のなかった人とも多く関わり合いを持つようになります。初対面の相手であっても面白いように話が進み、交友関係は多岐にわたることになるでしょう。そんな[%NAME_SELF%]の魅力に惹かれるようにして、多くの異性が集まってきます。その中から運命の相手を見定めてください。<br><br>　多くの相手から運命のひとりを選ぶとなると、とても大変そうに思えてしまうかもしれません。しかし、心配する必要はありません。直感的に「この人こそが運命の相手だ」と感じる相手が必ず存在しています。その相手との関係を大切にしてください。',
'　大切な相手とは、共通の友人を通して出会うことになります。[%NAME_SELF%]がたまたま友人と遊びに行ったときに、その相手と偶然出会うところから二人の関係は始まっていきます。直感的に「素敵な人だな」とお互いが感じているため、比較的にスムーズに二人の仲は深まっていくでしょう。<br><br>　その人は、共通の友人から既に[%NAME_SELF%]の話を聞いており、会う前から既に[%NAME_SELF%]に対して好印象を抱いています。そのため、遊びの誘いや出かける誘いを積極的に行ってくるでしょう。そうした誘いにはぜひ参加していきましょう。一気に関係が進展します。',
		),
		array( "nw22_021_6", 
'　2022年は、相手だけに合わせる恋愛から、お互いに歩み寄っていく恋愛に切り替えていきましょう。振り回されすぎの恋愛をしてしまうと、良い運気であるはずの恋愛運がマイナスになってしまいます。<br><br>　一度、[%NAME_SELF%]自身の気持ちについて考えてみるといいですよ。無理をして相手に合わせていないか、本当に好きなことがやれているのか、と自分の心に正直になってみてください。そうすることでこそ、見えてくるものがあります。どちらかの気持ちだけを優先するのではなく、お互いが納得できるような関係を作り上げることで、さらに恋愛運が向いてきます。',
'　良かれと思って相手に尽くしがちになってしまう、そんな恋をすることになりそうです。もちろん、相手のために何かしてあげたいと思う気持ちは大事ですし、恋においてその感情はとても大切です。しかし、何事もやりすぎは良くありません。無理をしない範囲で相手に優しくすることで、素敵な恋愛をすることができます。<br><br>　長く続く関係において大切なのは、良い自分を見せたいからと相手の前で無理をしないことです。張り切りすぎなくとも、[%NAME_SELF%]から自然と溢れる優しさだけで、相手は十分に満足してくれます。',
'　最初から恋愛モード全開で突き進むというよりは、多くの人との出会いを通してその後の恋愛のための準備をする、というスタンスでいると恋愛運が良くなってきます。初めから理想の相手だけを追い求めてしまっても、なかなかうまくいきません。<br><br>　人の縁とは、どのようなところでつながるかわからないものです。人脈を広げておくことで、思いもよらない場所から良縁に巡り会うことができます。仕事先や友人の紹介などで出会った人々との一期一会を大切にしながら、一手二手先を読む恋を心がけてみましょう。',
'　周囲の人の力を借りることで恋愛が非常にうまくいくようになります。恋愛の相談を行うことはもちろんですが、友人を通して良い人を紹介してもらったり、出会いの場を設けてもらったりしましょう。一回二回うまくいかなくても焦らずに、どんどん出会いの場に参加してください。<br><br>　また、ひとつひとつの出会いを楽しむことも大切になります。場を楽しんでいる人というのは、周囲から見てとても魅力的に映るものです。その場を目いっぱい楽しむことで、より[%NAME_SELF%]とマッチした人と出会う可能性が高まるでしょう。楽しむことこそ、恋愛成就の秘訣です。',
'　「押しては引く」恋愛を意識するとうまくいきそうです。気になる人に対して、時には気を引くために少しイジワルな行動をしてみるなど変化を心がけてください。普段の[%NAME_SELF%]とのギャップが相手にはとても魅力的に映ります。恋の駆け引きを楽しみつつ、甘えるところはしっかりと甘えることで最大限の成果をあげることができますよ。<br><br>　また、チャンスだと感じたら、ためらわずに行動することも大切です。迷って行動に移せないでいると、せっかくの機会を逃してしまいます。今しかない、と感じたなら積極的にアタックしてみると良い結果につながります。',
'　周囲の人の力を借りると、恋愛がうまくいきやすくなります。恋の心配事はひとりで抱え込まずに、誰かに相談してみることで、自分だけでは思いつかなかったような解決案を提示してもらえるでしょう。また、素敵な人との出会いの場をセッティングしてもらえるなど、さらに良い展開につながります。<br><br>　恋愛は一筋縄ではいきません。成功をつかむためには、さまざまな視点から恋愛を考え、問題を抱え込まないことが何よりも大切となります。小さな問題だからと放置することなく、普段から相談癖をつけてみてください。その先に良い結果が待っています。',
'　長年の恋がいよいよ実を結ぶときとなります。今がチャンス、と思ったら積極的に行動に移してみましょう。勇気が出ないからとためらっていては、成功するものも成功しなくなってしまいます。ここで勝負を決めるんだ、という強い意志を持つことが何よりも大切になります。恋の成就はもうすぐです。<br><br>　また、恋愛を楽しむことも忘れないようにしましょう。相手に楽しんでもらうためには、まず何よりも[%NAME_SELF%]自身が恋愛を楽しむことが大切です。[%NAME_SELF%]が心から恋愛を楽しんでいる様子は、相手にとってとても魅力的に映ること間違いなしです。',
'　変化を意識しながら恋愛を送ると、それがよい結果に結びつきやすくなります。友達関係が長く続いている相手であれば、そろそろ恋人になることを意識して交流を行っていきましょう。また、恋人関係が長く続いている相手であれば、結婚に向けて大きく動き出すチャンスです。<br><br>　しかし、急いではいけません。早く次のステップに進みたいからといって強引に物事を進めようとしてしまうと、思わぬところで落とし穴に引っかかってしまいます。冷静に状況を判断しながら、「ここだ！」と思ったタイミングで一気に攻めてみましょう。',
'　次の段階へと進む恋ができそうです。今片思いをしている相手がいるなら、近いうちにその相手との関係が進展することになります。また、今付き合っている相手がいるなら、恋人からいよいよ結婚へと話が進んでいくことになるでしょう。いずれにせよ、自分から積極的にアピールしていくことが大切となります。恋愛を楽しみながら、次のステップへと進みましょう。<br><br>　今新たな恋を探しているなら、そう遠くないうちに素敵な出会いが訪れます。友人からの誘いなど出会いの場に積極的に参加していくことで、出会いの機運が高まりますよ。',
		),
		array( "nw22_021_7", 
'焦りが空回りすることになりそうです。チャンスを逃がさないように冷静な行動をとりましょう。',
'人付き合いが多くなる分、人間関係のトラブルも起こってしまいます。まずは話を聞くことに徹しましょう。',
'嫉妬されるということは、それだけあなたに魅力があるということです。気にする必要はありません。',
'昔からの縁を何よりも大切にしましょう。一度切れてしまった関係を元に戻すことはとても大変です。',
'情報に流されすぎないように注意しましょう。積み重ねてきた努力に勝るものはありません。',
'ひとつのことに固執してしまうと他がおろそかになります。バランスのよい生活を心がけましょう。',
'ネガティブな思考は良くない結果へとつながりやすくなります。気楽に考えることが良い結果につながります。',
'変化を恐れ、消極的になってはいけません。せっかく到来した成長のチャンスが逃げていってしまいます。',
'お金のトラブルには要注意。信頼する人からの誘いであってもいったん立ち止まって調べてみることが大切です。',
		),
		array( "nw22_021_8", 
'　結果を求めすぎるあまり、空回りを繰り返しそうです。うまくいかなくても焦ってはいけません。一度大きく深呼吸をして、まずは落ち着いて冷静に周りを見渡してみましょう。ここでグッと我慢できるかが、2022年の[%NAME_SELF%]の運勢を大きく左右します。<br><br>　チャンスとは、思いがけない場所に眠っているものです。焦ってしまうと、[%NAME_SELF%]はせっかくのチャンスを見逃してしまうことになってしまいます。仕事や人間関係に対して少しでも焦りを感じたら、いったん冷静になってみることがとても大切です。結果は後から必ずついてきます。',
'　2022年は今までよりも多くの人と接する年になります。職場だけでなく、取引先の相手や新しい友人と、毎日たくさんの人とコミュニケーションをとるようになるでしょう。ですが、その中でどうしても人間関係のもつれというものが発生してしまいます。あまり気負いすぎないようにして、冷静に解決していきましょう。<br><br>　人間関係においてトラブルになってしまったときは、まず冷静に両者それぞれの主張を聞くことが大切です。自分の意見ばかり押しつけずに相手の考えを理解することで、両者のわだかまりは解消されるでしょう。',
'　次々と仕事で結果を残し、順調に成果を積み重ねていく[%NAME_SELF%]ですが、そのことをあまりよく思わない人から嫉妬されてしまうことがあります。職場で自分に対する心無い陰口をうっかり聞いてしまった……なんてことも起こるかもしれません。<br><br>　けれども、あまり心配することはありません。[%NAME_SELF%]はこの先もどんどん成長し、嫉妬する人が目に入らないような高いステージに行くことになります。嫉妬されるということは、それだけあなたに魅力があり、羨ましがられているということです。気にせずに強気に構えているだけで嫉妬の声は耳に入らなくなります。',
'　2022年の[%NAME_SELF%]は、今まで以上にたくさんの人と接し、関係を持つようになります。それ自体は別に悪いことではありません。しかし、その分人間関係が広く浅くなってしまう傾向が出てきてしまいます。新たな出会いが多いからこそ、昔からの友情や長年の付き合いを大切にしましょう。<br><br>　新しい出会いが楽しいからとそればかりに傾倒してしまうと、一生の友を失うことにつながってしまうかもしれません。一度失ったものは、二度と元には戻りません。人と人との付き合いが希薄になりつつある世の中だからこそ、古くからの付き合いは大切にしましょう。',
'　いろいろなところから情報が入ってくるので、自分の進む道が本当に正しいのか迷うでしょう。今までやってきたことが実は間違っていたのかも……と不安になり、決断に迷うかもしれませんが、常に自分自身を信じることが何よりも大切です。<br><br>　インターネットで手軽に情報が手に入る時代ですが、ネット上のすべての情報が正しいわけではありません。[%NAME_SELF%]の人生で培った経験や体験をまずは信じてみましょう。迷わずに行動することで、良い結果に結びつけることができます。',
'　ひとつのことに集中しすぎてしまうあまり、その他のことに目がいかなくなってしまうようです。仕事がうまくいっているときは恋愛や友人関係がおろそかになってしまったり、反対に恋愛が絶好調のときは仕事が適当になってしまったりするでしょう。どちらか一方がお粗末にならないよう、バランスを考えた生活を送ることが大切です。<br><br>　楽しいこと、うまくいっていることばかりやるのは簡単です。しかし、それだけでは最終的に幸せをつかむことができません。いろいろなことを同時にこなせる人間になれるよう視野を広く持ちましょう。',
'　物事を重く考えすぎてしまうあまり、しなくてもよい余計な心配をしてしまって心が疲れてしまうようです。何事も気楽に、ほどほどを心がけましょう。心配しすぎるということは、それだけそのことに対して本気で頑張ってきたという証拠です。そのことだけは忘れないようにしてください。<br><br>　物事がうまくいかないときほど、悪いほうに思考がどんどん進んでいってしまいます。一度そうなってしまうと、ポジティブに考え直すのはなかなか難しくなってしまうでしょう。そうならないためにも、普段からなるべくネガティブなことは考えないようにしてください。',
'　今までの生活が大きく変わる一年であるため、そのことに対して少し不安感が出てきてしまいそうです。長年続けてきたことをやめたり、新しいことを始めたりするときというのはどうしても不安になってしまうものです。もしかしたら失敗してしまうかもしれない……と気持ちが落ち込むことも増えるでしょう。<br><br>　ですが、それは誰しもが同じように感じていることでもあります。この年のあなたは、そうした不安と戦い、壁を乗り越えることで大きく成長していけます。「自分も絶対にうまくいく」と強い気持ちを持っていれば成功へとつながりますよ。',
'　2022年の[%NAME_SELF%]は、お金に関するトラブルに巻き込まれることが増えるでしょう。怪しいもうけ話であっても、仲の良い友人からの誘いであったり、信頼する上司からの誘いであったりするとなかなか断りづらい場面が多いでしょう。それが結果として大損につながり、友人や同僚との関係悪化にもつながってしまいます。<br><br>　トラブルを回避するためには、どんな相手からのもうけ話であっても一度疑ってしっかりと調べることが大切です。勢いだけで決めてしまってはいけません。危険だなと感じたら、その話は断るとともに、相手にも危険である旨を教えてあげましょう。',
		),
		array( "nw22_021_9", 
'　うまくいかないからと、焦りや不安を抱えながら問題に向かっていってはいけません。必ず一呼吸おいて、冷静に状況を分析することから始めてみましょう。この問題を解決するためには何が必要なのか、そのために[%NAME_SELF%]は何をするべきなのか、が自然とわかるようになります。<br><br>　そうはいっても、初めのうちはそれでも不安になって、結果を急いでしまうかもしれません。けれども、落ち着いていれば大丈夫です。焦りや不安と上手に付き合えるようになった先には、大きな成功が待っています。必ず成功する、と確信をもって問題に取り組みましょう。',
'　人が人である以上、どうしても人間関係のトラブルは避けられません。放置してしまうと、双方にとって不利益になってしまいます。こうしたトラブルを解決するためには、双方の意見を理解することが何よりも大切になります。「全部相手に責任があるんだ」、「全部自分が悪い」と極端に考えてはいけません。<br><br>　うまくトラブルを解決することで、周囲からの[%NAME_SELF%]の評判は一気に上がります。円滑な人付き合いで職場での昇進や給与アップはもちろん、友人との仲は以前にも増して深くなるでしょう。',
'　基本的には、[%NAME_SELF%]に対する嫉妬心など何も気にすることはありません。しかし、それでも気になるという場合には、周囲の人に積極的に相談してみましょう。必ず[%NAME_SELF%]の力になってくれます。[%NAME_SELF%]の周りには、いつでも味方がたくさんいるということを忘れないでください。<br><br>　それを乗り越えた先で[%NAME_SELF%]は、人間的に一回りも二回りも成長し、周囲から一目置かれる存在となるでしょう。仕事は今まで以上にうまくいくようになり、人間関係で悩むこともなくなります。人間としての魅力がグッと増した[%NAME_SELF%]のそばには、多くの人が集まるようになります。',
'　例えば、同じ日に二つの予定が重なってしまった場合には、古くからの縁があるほうを優先してあげてください。2022年の[%NAME_SELF%]は多くの出会いの場に恵まれるため、ひとつや二つ予定がなくなってしまっても何の問題もありません。新たな出会いを楽しみつつ、昔からの関係も大事にしましょう。<br><br>　本当に困ったときに助けてくれるのは、やはり長年の付き合いのある人物です。この先、[%NAME_SELF%]が困難に直面したときに、古くからの縁のある人たちは必ず[%NAME_SELF%]の味方になってくれます。目先の関係にとらわれないことこそが、幸福につながるのです。',
'　情報を仕入れるときは、その情報が本当に正しいものであるか、また[%NAME_SELF%]にとってその情報が有益であるかどうかを必ず確認するようにしましょう。たくさんの情報を手に入れても、そこから取捨選択をするのが大切で、それをすることで不要な迷いを断ち切ることができます。<br><br>　今までやってきたことや積み重ねてきたことに、嘘はありません。必ずその努力は実を結びます。情報に踊らされ、楽をするほうに流されてはいけません。最後まで自分自身を信じて行動できれば、それが最高の結果につながります。',
'　仕事や恋愛や友情など、人生には大切な要素が数多くあります。そのすべてを完璧にこなすことができたら理想ですが、そんなことはなかなかできませんし、無理が生じてしまいます。けれども、少しの妥協をすることで充実した生活を過ごすことができます。あらかじめここだけは譲れない、というポイントを決めておくことで、他の点での妥協がしやすくなります。<br><br>　バランスの良い生活を送ることで、全体的な運勢が上昇し始めます。あなたの周囲の人たちも、[%NAME_SELF%]のそばにいると自然と笑顔が増えるでしょう。ポジティブな一年を過ごすことができます。',
'　ネガティブな思考が続くようになると、それを止めるのはなかなか難しくなります。普段の生活からなるべくポジティブに物事を考える癖をつけるようにしましょう。ささいなことであっても「今日の私はついている」と前向きな要素を見つけていくことで、後ろ向きな考え方をすることが少なくなります。<br><br>　物事を前向きに考える癖ができるようになると、思いがけないところから幸運を引っ張ってくることもできるようになります。あなたが普段から幸せそうにしていると、幸福のほうから近づいていきます。[%NAME_SELF%]自身の思考を変えて、幸せをつかみ取りましょう。',
'　どうしても不安な気持ちが強くなってしまったときは、あえて何も考えず一度頭をカラッポにしてみましょう。好きなものを食べたり、温泉に入ったり、映画を見たりすることで脳をリセットすることができます。そうすることで、余計な心配事が消え、心にもゆとりが生まれます。<br><br>　2022年に起こる変化は、[%NAME_SELF%]を次のステージへと成長させる良い変化です。この年が終わる頃には、きっと見違えるように成長していることでしょう。周囲の人も驚くくらいの変化を遂げたあなたには、もう怖いものなどありません。素敵な未来が待っていますよ。',
'　怪しいもうけ話に乗ってしまわないためにも、常日頃からお金に関する情報を集めておきましょう。お金の勉強は難しいことも多いですが、その分確実に[%NAME_SELF%]の力になります。また「楽なもうけ話などない」という意識を持つことも大切です。あなたが計画的にお金のやりくりすることで、結果的に安定した資産を生み出します。<br><br>　堅実にお金に向き合うことができれば、経済的に困ることのない一年間を送ることができるでしょう。収入も安定し、臨時ボーナスや思わぬ副収入も期待できるため欲しかったものや憧れていたものを購入するのにはいい機会です。',
		),
		array( "nw22_021_10", 
'　疲れがたまりやすい年になります。2022年は、多くの人と出会い、そしてさまざまな体験をすることになります。それらの出来事は[%NAME_SELF%]を大きく成長させてくれますが、一方で、今まで以上に疲れがたまりやすくなってしまいます。毎日必ず休息の時間を取るようにしましょう。<br><br>　好きな音楽を聴いたり、気になっていた本を読んだりすることで、その日一日の疲れが取れ、明日を頑張る英気を養うことができます。また、携帯電話やインターネットを見ない時間を作る、ということも重要な休息方法のひとつです。自分の好きな休息方法を見つけましょう。',
'　2022年を健康に過ごすために、何よりも規則正しい生活を心がけるようにしてください。この年は、職場や友人関係においてさまざまな人と接する機会が以前よりも増えます。人付き合いが多くなるのは良いことですが、その分、自分自身の生活がおざなりになってしまうことには注意してください。<br><br>　「これくらいなら大丈夫」と小さな無理を重ねていってしまうと、いずれ大きなケガや病気につながってしまいます。日々の規則正しい生活にこそ、健康に過ごす秘訣は隠されているのです。まずは[%NAME_SELF%]の身体を一番に大切にしてあげてください。',
'　自分の体力の限界をきちんと把握しておくことが、健康に暮らすために重要となります。2022年の[%NAME_SELF%]はさまざまな経験をすることになります。たくさんの人との出会いや未知の体験は[%NAME_SELF%]を大きく成長させてくれますが、同時に疲労も蓄積させます。自分の限界点を知っておくことで、無理のし過ぎを防ぐことができます。<br><br>　人間の肉体は、「これ以上頑張ると身体を壊してしまう」と判断すると、何かしらのアラートを出します。そのサインを見逃さないようにすることが大切です。休息をしっかりと取りつつ、たくさんの経験を積みましょう。',
'　職場での悩みや恋の悩みなど、生きている以上悩みというものは尽きません。それらを解決することに必死になればなるほど、身体に疲れはたまっていきます。物事をあまり深く考えずに、常に心に余裕をもって行動することが、健康に暮らすためには重要です。<br><br>　そうはいっても、つい余計なことまで考えすぎてしまうのが人間というものです。そこで、一度頭をリセットするために、好きな映画を見たり、美味しい料理を食べたりしてみましょう。とにかく[%NAME_SELF%]の好きなことをすると、心が落ち着き、余計な悩みや心配もなくなります。',
'　大きなケガや病気もなく過ごすことができますが、季節の変わり目には体調を崩してしまうことが多くなりそうです。気温の変化には十分気をつけて、早めの準備を心がけましょう。特に冷えには要注意です。身体を冷やさない格好を意識しておくことが大切です。<br><br>　また、健康に過ごすためにも、三食きちんと食べることを心がけてください。面倒くさいから、時間がないからとついつい抜きがちになってしまう朝食は、健康に過ごすために必要不可欠です。毎日早起きをして、朝食をしっかりと食べることで一日の運気も急上昇します。',
'　大きな仕事を任されたり、目上の人と接する機会が多いため、今まで以上にストレスをため込んでしまったりしやすくなります。健康に過ごすためには、精神の安定が何よりも大切です。つらいことや嫌なことがあったら、ため込んでしまう前にリフレッシュをして発散しましょう。<br><br>　ストレスを発散させるためには、好きなことを目いっぱいすることが何よりも効果的です。温泉に入るもよし、美味しいものを食べるのもよし、気になっていたブランド品を買うもよしです。中途半端ではいけません。思いっきり自分をいたわってあげましょう。',
'　メリハリのついた生活を送ることが健康のために重要となります。仕事を頑張るときは頑張る、休むときは何もせずに休む、と区切りをつけた生活を心がけましょう。どっちも中途半端にしてしまっては、疲れが一向に取れなくなってしまうだけでなく、業務にも影響を及ぼしてしまいます。<br><br>　自宅で仕事をしている人は要注意です。休日にもかかわらず少しだけなら、と仕事をしていませんか？　自宅と仕事場が一緒だからこそ、オンオフの切り替えをしっかりと行いましょう。休む日は仕事のことを一切考えないくらいの強い気持ちでいることが重要です。',
'　変化の強い一年となるからこそ、健康には気をつけましょう。多くの人との出会いや重要な仕事は[%NAME_SELF%]を大きく成長させてくれますが、その分日常生活がおろそかになってしまいがちになります。毎日規則正しい生活を送り、三食きちんと食べることが成長のために何よりも重要です。<br><br>　また、毎日リラックスする時間を必ず作るようにしましょう。どんなに忙しい日であっても30分程度のリラックス時間を作ることで、明日への活力となります。ぬるめの湯船につかって老廃物を落としたり、アロマをたいて癒やされたりしてみるのもいいですよ。',
'　ストレスをいかに発散できるかが健康に暮らすために重要となります。悩みが多くなる前に誰かに相談することを心がけましょう。くれぐれも自分ひとりで解決しようとしてはいけません。早め早めの相談と対策が、ストレスをため込まないためには重要です。<br><br>　リフレッシュの機会を設けるのもおすすめです。好きなことを目いっぱいやることで、大抵の悩み事は解決します。普段は忙しくてなかなかまとまった自由な時間が取りづらい、という人でも心配はありません。毎日少しでも良いのでリフレッシュの機会を設けてみることで、ストレスは軽減されますよ。',
		),
		array( "nw22_021_11", 
'　仕事運は良好です。より責任感のある仕事や、やりがいのある仕事が回ってくるようになります。さらに、仕事の成功が認められた結果、収入も増加するでしょう。<br><br>　けれども、たくさんの仕事が回ってきたからといって、張り切りすぎないように注意してください。気づかないうちに無理を重ねてしまうと、結果としてミスや失敗につながってしまいます。適度に肩の力を抜いて仕事に取り組みましょう。また、周囲の人間の力を借りることも大切です。全部ひとりで仕事をこなそうとせず、職場の仲間と連携することで、より大きな成功を収めることができます。',
'　2022年はコツコツと努力を重ねる準備の期間になります。できることを日々こなしましょう。目先の欲にとらわれて成果を急いでしまうと、思うような結果を残すことができません。将来の大きな成功をつかむためには、それなりの時間と準備が必要であることをしっかりと心得ましょう。<br><br>　成長するためのヒントとは、思いがけないところに隠されているものです。地味でつまらない作業や、面白くない仕事ほど全力を尽くして取り組んでみてください。そういった仕事を地道にこなす中でこそ、意外な発見や新たな見地を得ることができます。',
'　人当たりの良さが周囲に評価され、仕事でも能力を発揮しやすくなります。上司や同僚からの評判が良くなることはもちろん、プレゼンテーションや取引先との打ち合わせが以前にもましてうまくいきやすくなるでしょう。仕事がどんどん楽しくなり、その結果また良い成果を出す、という好循環が生まれます。安心して仕事に取り組みましょう。<br><br>　成功を確実にするために、いろいろな仕事に積極的に参加することを心がけてください。自分には関係ないと思っていた業務や、興味のない分野の仕事にこそ、さらなる成長のヒントが隠されています。',
'　2022年は、今まで積み重ねてきた努力がついに花開くときです。このチャンスをものにするためにも、職場の人との付き合いには積極的に参加するようにしましょう。しっかりと人間関係を構築しておくことで、よりスムーズに出世や昇進が決まるようになります。<br><br>　加えて、同僚との絆を深めることも大切になります。[%NAME_SELF%]の頑張りを誰よりもそばで見てきた同僚の人たちは、[%NAME_SELF%]が困っているときに必ず力になってくれます。大変な仕事もチームでこなすことによって、大きな成果をあげることができるでしょう。それがさらなる昇進へとつながるのです。',
'　[%NAME_SELF%]の能力を最大限発揮できる仕事をすると、それが結果へとつながります。言われた仕事をただこなすのではなく、どうしたらもっと良い商品になるかなどを常に意識しながら仕事に取り組みましょう。自分の能力を信じて、積極的に行動することが重要になります。<br><br>　自分なんかが意見を言ってもいいのかな……と不安になるかもしれません。しかし、周囲はむしろ[%NAME_SELF%]のアイデアを待っています。[%NAME_SELF%]にとっては何の変哲もない考えでも、周囲の人にはとても魅力的に映ることでしょう。遠慮せずにどんどん前に出てください。それが良い結果をもたらします。',
'　[%NAME_SELF%]の能力が最高に発揮される一年であるため、やりたい仕事をやると成果が出やすくなります。気になっていたプロジェクトや、注目していた業務には積極的に参加していきましょう。ここでしっかりとアピールすることで、さらなる昇給や昇進を望むことができます。<br><br>　また、[%NAME_SELF%]のやる気に引っ張られるようにして、同僚や先輩が手助けしてくれることも増えるでしょう。遠慮することなく彼らの力を借りることで、さらに大きな結果を残すことができます。仕事をすればするほど成果が出るため、今までにないくらい仕事を楽しむことができますよ。',
'　今までの頑張りがようやく評価を受け始める年となるため、大きな昇給や昇進を望むことができます。長く続けてきた業務やプロジェクトの最後の仕上げに全力で取り組みましょう。最後の最後でしくじってしまうと、せっかく積み重ねてきたことの評価にも影響を及ぼしてしまうかもしれません。<br><br>　とはいえ、あまり気負う必要はありません。楽しみながら仕事を行っていれば、失敗することはありません。どんなときでも前向きに、成功だけを信じて仕事に取り組みましょう。その姿勢が必ずや[%NAME_SELF%]に成功をもたらしてくれるでしょう。',
'　今までのやり方をここで一度大きく見直してみましょう。何となくで続けていた仕事や、適当にこなしていた仕事を見直してみることで、新たな道へとつながります。何のために働いているのかを改めて考えてみるのもおすすめです。意識を変えるだけでも、仕事運は大きく変化します。<br><br>　嫌々やっている仕事と、楽しんでやっている仕事とでは成果に大きく差が出ます。仕事の楽しさを再発見するために、いつもとは違う場所でやってみると良いでしょう。在宅ワークの場合などは、外で仕事をしてみると思わぬ楽しさと出会えますよ。',
'　スピード感を大事にすると仕事がうまくいきやすくなります。締め切りや納期よりも少しだけ早く仕事を終わらせるようにすると、仕事運が上昇し上司からの評価もどんどんあがっていきます。スピーディーに仕事をこなすためには、しっかりとした計画が必要不可欠です。現実的な計画を立ててその通りにきちんと仕事を行えば、よい結果につながります。<br><br>　そうはいっても、早く仕事を終わらせたいからといって手を抜いたりしてはいけません。スピード感を大事にしつつも、丁寧な仕事を心がけるようにしましょう。その先に成功は待っていますよ。',
		),
		array( "nw22_021_12", 
'　2022年は今までよりも多くのお金が入ってくるようになります。仕事運や出会い運が追い風のため、意識しなくとも収入は増加していくでしょう。余裕のあるお財布事情を送ることができます。<br><br>　しかし、だからこそ気をつけていかないと、入るお金と同じくらい減るお金も増えていってしまいます。特に、新しい人との出会いが増える点は要注意です。楽しいからいいや……とうっかりお金を使いすぎてしまわないように注意しましょう。毎日少しずつでよいのでお金を節約する癖をつけましょう。500円貯金などを始めてみるのも良いです。',
'　2022年は自分へのご褒美だからとお金を使いすぎてしまうことはやめましょう。普段倹約しているのだからたまにはこれくらい……と、バーゲンやセールの度についついお金を使いすぎてしまうことがありそうです。しかし、この年は今まで以上にお金を大切にするよう心がけてください。<br><br>　散財してしまうと運気も逃げていってしまいます。買おうか買わないかで迷ったら、買わないと決めておくぐらいがちょうどいいでしょう。少しケチすぎるかな……と自分で思うくらい無駄遣いしないことを日々意識してください。',
'　人付き合いが増加し、いろいろなことへのチャレンジも多くなった結果、支出が少し増える年になります。ですが、あまりケチケチせずに、好きなことに積極的にお金を使っていきましょう。楽しくお金を使うことで活力も生まれ、巡り巡って入ってくるお金も増えるようになります。<br><br>　また、自分へのご褒美として、ちょっと高級なランチを食べたり、欲しかったブランド品を買ったりするというのも、いい流れにつながるでしょう。もちろん、度を越した散財には注意してください。節度をわきまえ、良識の範囲内で程よくお金を使うように心がけましょう。',
'　金運自体は悪くありません。しかし、ネットや雑誌などの安易なお金もうけの情報に踊らされてしまうと、大きく運気を下げてしまいます。迷ったらまずはいったん落ち着いて、本当にその情報が正しいのか、自分にとって有益なものなのかを判断してみましょう。<br><br>　多くの情報が飛び交う現代社会では、何が正しくて何が間違っているのかを自分自身で判断していかなくてはいけません。楽にもうけられるといった話には、必ず裏があることを理解し、堅実なお金のやりくりを心がけましょう。この機会に、お金について少し勉強してみるのもおすすめです。',
'　好調な仕事運が金運にも影響を及ぼすため、大幅な給料アップが望めます。今までの成果が認められ、ボーナスにも大きな期待ができるでしょう。お金には困らない生活を送ることができます。自分の力でたくさん稼ぐんだ、という意気込みを大切にしましょう。<br><br>　一方で、勝負事のツキはあまり良くないため、競馬や宝くじといったギャンブルに手を出すのは控えましょう。収入が多くなるからこそ、堅実なお金のやりくりを心がけてください。加えて、不要な買い物を避けるためにも、「迷ったら買わない」という心構えを大切にしましょう。',
'　仕事運と連動する形で金運もアップします。収入も安定してくるため、今まで通りのやりくりを続けると少しお金に余裕が出てくるでしょう。そうしたお金をぜひ自分のために使ってみてください。積極的に自己投資を行うことで、さらなる金運アップを望むことができます。有意義にお金を使いましょう。<br><br>　また、お金についての知識をつけることもおすすめです。株や投資についてしっかりと学び、堅実な資産運用をすることで、将来お金の心配をすることがなくなるでしょう。金運に恵まれている2022年だからこそ、資産運用の始め時です。',
'　金運は非常に良好です。収入が安定してきて、生活にも余裕が生まれます。しかし、だからこそ無駄遣いには十分気をつけ、大きな買い物はよく考えてから行うようにしましょう。また、計画をもってお金を運用するとさらなる金運アップが望めるため、この機会に投資や株にチャレンジしてみるのも良いでしょう。<br><br>　さらに、ラッキーなお金にも恵まれる一年となります。家の掃除をしていたら忘れていたへそくりを見つけたり、何気なく買った宝くじが当選したりと思いがけない臨時収入が次々訪れます。一年を通してお金には困らないでしょう。',
'　金運は比較的良い傾向にあります。目先の利益にとらわれることなく、長期的な目標を定めてお金を管理していきましょう。将来のための貯金や、積み立て投資を始めてみると良いです。また、自分への投資もおすすめです。ちょっと値が張るけど自分のためになりそうなものに対しては、出し惜しみせずどんどんお金を使っていきましょう。<br><br>　一方で、欲を出しすぎてしまうとせっかくの運気が逃げていってしまいます。短時間で大きな利益などといった情報にはくれぐれも注意してください。今は堅実なお金のやりくりを心がけましょう。',
'　金運は総じて良好です。安定した収入が望めるため、日々の生活にも余裕が生まれ、お金に困ることのない暮らしを送ることができるでしょう。余ったお金は積極的に自己投資に回してみてください。エステに行ったり資格取得の勉強費用に充てたりするのもおすすめです。そうすることによってさらに金運をアップさせることができます。<br><br>　また、勝負事の運にもツキがありますが、ギャンブルのようなばくち事をするのはおすすめできません。運試し程度で宝くじやジャンボくじを買ってみる程度に収めておくのがよいでしょう。',
		),
		array( "nw22_021_13", 
'　周囲の人間は、積極的に[%NAME_SELF%]に近づいてくるようになります。特に、[%NAME_SELF%]が大変だ、苦しいな、と思ったとき、周囲を見渡してみてください。多くの人が手を差し伸べてくれるようになります。その影響もあって、[%NAME_SELF%]は困難な仕事や問題をすんなり解決できるようになるでしょう。<br><br>　しかし、全員が全員、善意だけで近づいてくるわけではありません。中には打算的に近づいてくる人間もいるでしょう。多くの人が近づいてくるからこそ、自分のことを本当に心配してくれているのは誰なのかを冷静に見極めていくことが大切です。',
'　2022年の[%NAME_SELF%]は多くの人とコミュニケーションをとる機会に恵まれるでしょう。今まで以上に交流関係は広がり、新たな友人や恋人を作るチャンスも格段に多くなります。しかし、だからといって前に出すぎてしまうとせっかくの運気が逃げていってしまいます。<br><br>　円滑なコミュニケーションにおいて大切なことは、聞き上手に回ることです。まずは相手の話を聞いてあげて、それから自分の話につなげることで会話上手な印象が生まれます。常に一歩引いた立場でいることで、周囲からも一目置かれるような存在になることができます。',
'　前にもまして明るくなり、いつも会話の中心にいるようになった[%NAME_SELF%]の周囲には、自然と多くの人が集まるようになります。この機会に、性別、年齢を問わず、いろいろな人とのコミュニケーションを楽しんでみてください。自分とは全く違う経験をしてきた人との交流は、新しい知見の連続です。<br><br>　そういった人との交流を通して、[%NAME_SELF%]は人間的に大きく成長することになるでしょう。人としての深みが増し、仕事や恋愛においても常に余裕をもって行動することができるようになります。そんな[%NAME_SELF%]のそばには、さらに多くの人が集まるようになります。',
'　2022年、[%NAME_SELF%]は今まで眠っていた才能を大きく開花させ、いっそう魅力的になるでしょう。その結果、[%NAME_SELF%]の周りには自然と才能溢れる人や魅力的な人が集まるようになります。年齢や性別に関係なく、ひとりひとりとの出会いを楽しみ、積極的にコミュニケーションをとってみましょう。<br><br>　今まで出会ったことのない人と出会うことで、この年のあなたは成長できます。奥手にならずに自分のほうから行動することで、思いがけない成長を実感することができるでしょう。才能のある人との出会いによって、あなたはさらに大きく進化します。',
'　2022年、少しランクアップした[%NAME_SELF%]の周囲には、今まで付き合っていた人たちと比べてレベルの高い人が集まりやすくなります。その人たちからの影響を受けて、[%NAME_SELF%]自身もさらにレベルアップしていきますよ。一流の人との交流を楽しみつつ、自分自身の成長を目指しましょう。<br><br>　周囲の人からのお誘いがあれば、積極的に参加してみてください。人脈の輪を広げることにつながるのはもちろん、それまで知ることのなかった新しい世界と触れ合うチャンスです。いつの時代も新しいものとの出会いというのは、人を大きく成長させてくれます。',
'　[%NAME_SELF%]の頑張りが周囲の人間を動かしていく一年になります。周囲の人間たちにも良い影響を与え、自然と活気づき、明るい雰囲気が広がるでしょう。それは回り回って自分にも返ってくることになります。良い運気のサイクルが、お互いに影響を与え合って一緒に成長していくんだ、という意識を持つことが重要です。<br><br>　そうした意識を持つことで、[%NAME_SELF%]が少し思い悩んでいるときは、誰かが助けてくれるようになります。普段元気をもらっている分、何か力になりたいと年齢、性別問わず、周囲の人が積極的に手を差し伸べてくれるでしょう。',
'　[%NAME_SELF%]の培ってきた経験や知恵が周囲の人間の助けとなる機会が多く訪れます。周囲の人の相談事には積極的にのってあげると良いでしょう。それが巡り巡って[%NAME_SELF%]自身の幸せともつながります。<br><br>　また、[%NAME_SELF%]の周囲に集まってくる人間が、[%NAME_SELF%]に新しい考え方や知識をもたらしてくれる良い先生となるでしょう。すべての出会いの場が成長のチャンスだと考え、年齢や性別にこだわることなく多様な人との交流を行いましょう。いろいろな感性を学ぶことで人間的な深みが増し、[%NAME_SELF%]は人としてさらに大きく成長することができます。',
'　人付き合いが楽しくなってくる一年ではありますが、相手との付き合い方には十分注意をしましょう。この年の[%NAME_SELF%]は多くの人と接する機会に恵まれますが、その分相手から影響を受けやすくなってしまいます。良い点は積極的に影響を受け、そうでない点は影響を受けすぎないようにしましょう。<br><br>　周囲の人がよかれと思って[%NAME_SELF%]に進めてきたことであっても、それが[%NAME_SELF%]のためになるとは限りません。今の自分には何が必要で何が不要なのかを常に意識しておくことが大切です。自己分析がしっかりできていれば、楽しい人間関係を築くことができます。',
'　仕事などで結果を重ねたことによって、[%NAME_SELF%]と仲良くなりたいという人からのお誘いの声が多くなるでしょう。これまでにお付き合いのなかった方面からもいろいろなお誘いがありそうです。多くの人や機会と接することは、[%NAME_SELF%]自身の成長にも大きくつながりますので、積極的に参加していきましょう。<br><br>　そうはいっても、あまりにもいろいろな誘いに参加しすぎてしまうと心が疲弊してしまいますので注意が必要です。魅力的な誘いや面白い誘いを断ることにならないよう、詰め込みすぎないスケジュール管理を心がけましょう。',
		),
		array( "nw22_021_14", 
'日々の努力が成功の秘訣です。焦らず地道に仕事や恋愛に向かうことで結果を手にできます。',
'人当たりの良さが前面に出る年となります。多くの人との交流を楽しめますよ。',
'たくさんの人との出会いが、あなたを大きく成長させます。ひとつひとつの出会いを大切にしましょう。',
'積極的に行動することで成長を得ます。何事にもまずはチャレンジしてみましょう。',
'ワンランク上の自分を目指しましょう。新しい世界があなたを待っていますよ。',
'ポジティブな思考により成果を得られます。あれこれ悩まないで自分の信じた道を進みましょう。',
'まずは肩の力を抜きましょう。何事も気楽に行うことで良い結果を得られます。',
'自分自身の変化を大いに楽しみましょう。楽しむ心を持つことで、成功が手に入ります。',
'成功するんだという強い意志が大切です。自信をもって物事に取り組むことで結果が得られます。',
		)
		);
?>