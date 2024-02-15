<?php
/**
 * menu_id : nu20_035
 * 島田秀平 3月運：一人用
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'nu20_035',
			'contents'			 => 'spshimada_zap',
			'img_name'			 => 'zap_spshimada',
			'teller_name'		 => '島田秀平',
			'isp_mid'			 => '52v034',
			'nif_menukey'		 => 'unsei_2020_034',
			'price'				 => '600',
			'discount'			 => '540',
			'design_cd'			 => '6',
			'person'			 => '1',
			'release_date'		 => '20200220',
			'title'				 => '島田秀平【2020年3月の運勢鑑定】あなたの総合運/仕事・金運/恋愛運',
			'caption'			 => '各種メディアで大活躍の島田秀平があなたの2020年3月の運勢をズバリ占っちゃいます！　もうすぐ新年度を迎える仕事やお金はどうなる？　恋愛はうまくいく？　この月のあなたの運気を読み解きますよ！',
            'base_1_title_self'	 => 'あなたの運命数',
            'base_2_title_self'	 => 'あなたの基本性格',
            'base_1_title_other' => 'あの人の運命数',
            'base_2_title_other' => 'あの人の基本性格',
            '1_min_title'		 => 'どんなことが起こりそう？◆2020年3月のあなたの総合運',
            '2_min_title'		 => '調子はよさそう？◆2020年3月のあなたの仕事運と金運',
            '3_min_title'		 => 'あなたに春は訪れる？◆2020年3月のあなたの恋愛運',
            '4_min_title'		 => '2020年3月◆島田秀平からあなたへのメッセージ',
		);

// 小メニューロジック
$logic = 'd';

// Next枠
$next = array( "nu20_036", "nu20_037", "nu20_038", "nu20_039", "nu20_040" );

// 一部見せテキスト
$free = array(
		array( "nu20_035_1", 
'　この月は、胸がワクワクするような出来事が起こりますよ！　意欲的に物事に取り組めるときですから「やりたい」と感じることがあったら、考えるよりも行動に移すようにしましょう……',
'　この月は、人と向きあい、関係性を築いていくことがテーマのときですね。パートナーシップが課題となるので、自然に人と接する機会が増えそうです。<br><br>　この期間の[%NAME_SELF%]さんは……',
'　この月、[%NAME_SELF%]さんの運気は良好です。やりたいことを思う存分やれるときなので、楽しく過ごせますよ。また、楽しむことが良運に繋がります。趣味や遊びなど「今」この瞬間を思いっきり……',
'　この月、[%NAME_SELF%]さんの運勢は安定していますよ。静かに落ち着いて過ごせるときですから、じっくりとひとつの物事に取り組むのに最適です！　<br><br>　やりかけていて途中で止まって……',
'　この月の[%NAME_SELF%]さんはアクティブに活動できるでしょう。チャレンジがテーマの月ですから、枠にとらわれず、いろいろな物事に挑戦すると吉。<br><br>　これまで、不自由さや動きづらさ……',
'　この月は、人のために行動するときが多くなるでしょう。身近な人から相談を受けたり、親族のために動いたりするようです。仕事でも人の仕事をサポートするといった機会が増えますね……',
'　この月は、ゆったり静かに過ごすときになりますね。ある意味、小休止の時期であるともいえるでしょう。行動面では休息を取りながら、次の活動に向けて準備を進めるときです。<br><br>　これまでの様子を……',
'　この月、[%NAME_SELF%]さんはパワーに満ちあふれていますよ！　持っている能力を存分に発揮するのはもちろん、積極的に行動し前面に出ていくでしょう。大きな成果を手にするのはもちろんですが、人に……',
'　この月は、目的や目標が実現するときとなります。努力を続けてきたことの結果があらわれるでしょう。願っていた通りになるのか、ちょっと違っているのかは、これまでの努力次第……',
		),
		array( "nu20_035_2", 
'　[%NAME_SELF%]さんの仕事運はなかなかいいですよ！　この月は、新しい仕事が舞い込んで……',
'　仕事に関しては、早く終わらせることより、時間をかけてもいいので丁寧な仕上がりを心掛けると……',
'　この月は「楽しむこと」がテーマとなるときです。楽観的な視点で、好きなことを仕事にするとうまく……',
'　仕事運は安定していますよ。落ち着いて仕事に挑めるときですから、どんどん作業がはかどるでしょう……',
'　この月、[%NAME_SELF%]さんの仕事運は少々波乱含みとなりそうですね。とはいえ……',
'　この月のテーマは「責任」となります。つまり、責任ある仕事を任されるということですね。自分のために……',
'　この月は[%NAME_SELF%]さんの内なる才能や能力に磨きがかかるときです。普段できなかった……',
'　仕事運は絶好調ですよ！　[%NAME_SELF%]さんに注目が集まるときですから、責任ある仕事を……',
'　この月は、これまでの結果が出るときです。成功をつかむために努力を続けてきたとしたら、何らかの成果を……',
		),
		);


// 結果テキスト
$text = array(
		array( "nu20_035_1", 
'　この月は、胸がワクワクするような出来事が起こりますよ！　意欲的に物事に取り組めるときですから「やりたい」と感じることがあったら、考えるよりも行動に移すようにしましょう。<br><br>　[%NAME_SELF%]さんが思ったことを、そのまま実行に移せば大丈夫。いい展開へと流れていくので、心配せずにどんどんチャレンジしてくださいね。新しい方向に向かうことで、何らかの変化が訪れるかもしれません。この時期は「勇気」が必要とされるのですが、変化を受け入れる覚悟も必要です。<br><br>　焦って動く必要はありませんが、考えあぐねていてはチャンスを逃してしまいます。自分の気持ちや直感を信じて、[%NAME_SELF%]さんの思いを実現しましょう。何はともあれ、まずは行動することが大切です！',
'　この月は、人と向きあい、関係性を築いていくことがテーマのときですね。パートナーシップが課題となるので、自然に人と接する機会が増えそうです。<br><br>　この期間の[%NAME_SELF%]さんは、相手の気持ちを読み解く能力が高まっています。顔を見ただけで、何を考えているかわかるはずですよ。人の気持ちをくみとり、寄り添ってあげるといいでしょう。人間関係が円滑に進むのはもちろん、好きな人や家族との関係がより深まりますよ！　<br><br>　一方で、相手にあわせ過ぎてしまい、振り回されるという可能性も。人と人との間に入って仲裁役をすることもあると思いますが、他人のトラブルに巻き込まれやすいときなので注意してくださいね。必要以上に踏み込まないことが大切です。',
'　この月、[%NAME_SELF%]さんの運気は良好です。やりたいことを思う存分やれるときなので、楽しく過ごせますよ。また、楽しむことが良運に繋がります。趣味や遊びなど「今」この瞬間を思いっきり堪能しましょう。<br><br>　そのなかで、仕事に繋がるヒントやアイディアが浮かんで来るはず。気付いたことは、必ずメモをしておくと役立つときが訪れますよ。そして、この時期はあなたの社交的な面が引き出されます！　<br><br>　社交の場に積極的に出かけて、人脈を広げていきましょう。いろいろなタイプの人と交流する中で、情報や知識を教えてもらえますよ。そこでさらに、[%NAME_SELF%]さんの創造性が活性化されていきます。感性が刺激され、アーティストとしての才能を発揮するようになる可能性もありますよ！',
'　この月、[%NAME_SELF%]さんの運勢は安定していますよ。静かに落ち着いて過ごせるときですから、じっくりとひとつの物事に取り組むのに最適です！　<br><br>　やりかけていて途中で止まっていることがあったら今が終わらせてしまうチャンスです。やりかけの仕事を完成させるのにも適したときですよ。また、この時期は、マイルールを設定すると時間やお金が有効に使うことができます。予定を立てる、10分前行動を意識する、家計簿をつけるなど決まりを設けて行動すると運気が上昇します。<br><br>　それから、この月は家庭や結婚に関する運気が高まっています。恋人がいる人は結婚の話が持ち上がり、不動産の購入している人はいい物件に巡り会えたり、喜ばしい出来事が起こりそうですよ！',
'　この月の[%NAME_SELF%]さんはアクティブに活動できるでしょう。チャレンジがテーマの月ですから、枠にとらわれず、いろいろな物事に挑戦すると吉。<br><br>　これまで、不自由さや動きづらさを感じていたとしたら、この月はそれが解消されます！　背中に羽がはえたように、身軽になって活動できますよ。ただし、これまでやってきたことを、手放すという意味ではありません。あなたが培ってきたものや、努力してきたものがベースとなって、そのうえで新しいチャレンジやさらなる拡大を目指すときです。<br><br>　世のなかのルールや常識から逸脱するような行動をしてもいいということではないので気をつけてくださいね。道を外れてしまうと、状況が大きく転じるのでその点も注意です。',
'　この月は、人のために行動するときが多くなるでしょう。身近な人から相談を受けたり、親族のために動いたりするようです。仕事でも人の仕事をサポートするといった機会が増えますね。<br><br>　時間と労力がかかるので、損得でいえば損をするかもしれません。ですが、人との繋がりという、お金では手に入れられない大切なものを得られるでしょう。<br><br>　とはいえ、頼まれてばかりだと、ストレスが溜まってしまいます。何でもかんでもお願いしてくるな！　と不満が爆発しそうになるときも。そういったときは、うまくストレスを解消してください。芸術に触れたり、ガーデニングをしたりすると心が落ち着きますよ。あとは、料理をするのもおすすめ！　親しい人に手料理を振る舞ってみてくださいね。',
'　この月は、ゆったり静かに過ごすときになりますね。ある意味、小休止の時期であるともいえるでしょう。行動面では休息を取りながら、次の活動に向けて準備を進めるときです。<br><br>　これまでの様子を振り返ったり、改善点を修正したりするのにはピッタリ！　外に向かって行動するタイミングではなく、内面を充実させるべき時期です。<br><br>　そのような運気の流れに影響され、[%NAME_SELF%]さんも家で静かに本を読んだり、趣味を堪能したりとインドア派的な生活をするようになります。自分の才能を育てていくときですから、内省的になっても問題ありませんよ。時間を自分のために使ってください。次なるステップに向けて、準備を整えておく月ですからね。知識を増やしましょう！',
'　この月、[%NAME_SELF%]さんはパワーに満ちあふれていますよ！　持っている能力を存分に発揮するのはもちろん、積極的に行動し前面に出ていくでしょう。大きな成果を手にするのはもちろんですが、人にも大きな影響を与えます。<br><br>　みんなをまとめて、状況をコントロールするようになるかもしれません。職場、趣味のサークル、友だちの集まりなど、複数の人がいる場ではあなたが中心となります。<br><br>　注目されて頼りにされるのはもちろんですが、いろいろな意味で視線が集まるので注意が必要ですね。これまで、繋がっていなかった人とも繋がるようになるので、SNSでの発信なども気をつけてください。言葉遣いや態度、文章の書き方なども、ちょっと意識しておくといいですね。',
'　この月は、目的や目標が実現するときとなります。努力を続けてきたことの結果があらわれるでしょう。願っていた通りになるのか、ちょっと違っているのかは、これまでの努力次第。<br><br>　[%NAME_SELF%]さんが行ってきたことが目に見える形になってあらわれるのがこの月です。厳しい言い方になるかもしれませんが、努力が不足しているとしたら、納得できない結果となるかもしれませんね。<br><br>　とはいえ！　めげていてはいけませんよ。その結果を踏まえて、次に進むためのプロセスを考えるときでもあります。ゴールしてすぐ次のスタートを切る準備にとりかかる。忙しい月でもあるのです。とはいえ、できないことを運気は望みません。できることが、目の前にあらわれると思ってくださいね。',
		),
		array( "nu20_035_2", 
'　[%NAME_SELF%]さんの仕事運はなかなかいいですよ！　この月は、新しい仕事が舞い込んで来る流れがあります。これまで手がけたことがない作業だとしても問題ありません。<br><br>　リスクを恐れずにチャレンジすると、大きな道が開けるでしょう。企画を立てて自分を売り込むのにもいいタイミングですからね。どんどん自己主張をして吉です。<br><br>　そして、金運ですが、お財布を新調するとツキが回ってきますよ。そのとき、今のお財布のなかにある不要なものを整理しましょう。しまい込んだままのレシート、期限切れのポイントカードは処分してくださいね。空間ができると、新しい流れがやってくるので、お金が舞い込んできますよ。使っていないクレジットカードも解約を検討しましょう。',
'　仕事に関しては、早く終わらせることより、時間をかけてもいいので丁寧な仕上がりを心掛けるといいでしょう。細部にまでこだわることで、いつもよりも多くの成果をあげることができます。<br><br>　また、この月はひとりで行う仕事より、チームで取り組む仕事に縁があります。単独プレーは避けて、協調性を持つと吉。<br><br>　さらに金運ですが、出ていく方が多くなるときです。とはいえ、[%NAME_SELF%]さんにとってプラスになるお金の使い方をすると金運アップに繋がりますよ！　センスアップや美に関する物事にお金をかけるのは無駄遣いとはなりません。あなたの感性に磨きがかかり、それがのちにお金を生み出す源となります。美術館に行って感性を高めるのもおすすめですよ！',
'　この月は「楽しむこと」がテーマとなるときです。楽観的な視点で、好きなことを仕事にするとうまくいきますよ！　作業をするとき、楽しみながらできるといいですね。<br><br>　また、感性が高まる時期ですから、クリエイティブな仕事を手がける可能性もあります。また、趣味が仕事になる暗示も出ています。副業にチャレンジするのも悪くないですね。<br><br>　一方、金運は少し不安定です。というのも、遊びが楽しいときなので、交際費としての出費が増えるようです。ただし、人からの誘いは断らない方が正解！　人脈を広げるのに最適なタイミングなので、社交の場に積極的に足を運びましょう。交際費は必要経費という意識でOK。将来の自分へ投資していると考えてくださいね。',
'　仕事運は安定していますよ。落ち着いて仕事に挑めるときですから、どんどん作業がはかどるでしょう！　苦手な仕事や、終わっていなかった作業などもスイスイ片付きますよ。<br><br>　また、この月に目標を立てると、いい流れに乗ることができます。仕事で成功をつかむためのプロセスを考えておくのをおすすめします。<br><br>　そして、金運はかなり良好ですよ！　お金が貯まる時期ですから、貯金や投資をスタートするといいでしょう。さらに、出費を見直すのにも最適なタイミングとなりますからね。月々の支出を再確認してみてください。不要な支払いを削ると、以外にも多くのお金が手元に残ることに気付くはず！　家計簿をつけてみると、お金の流れがしっかりつかめますよ。',
'　この月、[%NAME_SELF%]さんの仕事運は少々波乱含みとなりそうですね。とはいえ、心配しないでください。いい意味での変化が起こるということです。<br><br>　これまで、あなたが安定志向でいたとしたら、運気の波が変化をうながしてくるでしょう。逆にチャレンジを続けていたとしたら、結果が出ると同時に次のステップへと進む道が開けます。流動的な状況に最初は戸惑うでしょうが、すぐに慣れてうまくやれるので安心してくださいね。<br><br>　一方の金運ですが、宝くじやギャンブルにツキがありますよ！　大きな金額を賭けるのはおすすめできませんが、少額であればギャンブルを楽しむのにいいときです。ドキドキハラハラする感覚がいい刺激となり、仕事面でいいアイディアが浮かぶでしょう。',
'　この月のテーマは「責任」となります。つまり、責任ある仕事を任されるということですね。自分のために仕事をするのではなく、人のために仕事をしなければいけなくなるようです。<br><br>　誰かのサポートをしたり、ボランティアのような仕事をしたりするでしょう。一見すると損をしているように見えますが、人脈という素晴らしい財産を手にできます！　人からの頼まれごとや悩み相談は引き受けるように。<br><br>　金運も同様ですね。損得勘定で考えると、金運がダウンするときです。お金の面で損をしても、経験や知識を優先して行動するようにしましょう。この月、収入とならなくても、今後に収入アップに繋がりますよ。特にこの月にビジネスで出会った人との縁を大切に。',
'　この月は[%NAME_SELF%]さんの内なる才能や能力に磨きがかかるときです。普段できなかったことや、難しいと思っていた仕事がスイスイこなせて自分でも驚いてしまうかも！　<br><br>　研究や学習に力を注ぐと、さらなる躍進が望めるのでがんばってみてくださいね。行動面ではお休みのときなので、デスクワークを多くするといいでしょう。<br><br>　そして、金運ですが、こちらも悪くありませんよ。外出する機会が減ることもあり、交際費や交通費などが削減できます。とはいえ、探究心が高まっているので、その分書籍資料代が増えるかも！　ただし、蓄積した知識や情報はのちの仕事に繋がります。自己投資のための経費はかかっても問題ありません。ですが、趣味の収集などにお金をかけすぎるのはいけませんよ。',
'　仕事運は絶好調ですよ！　[%NAME_SELF%]さんに注目が集まるときですから、責任ある仕事を任されるようになるでしょう。「責任」と聞くとドキリとするかもしれませんが大丈夫です！　<br><br>　この月のあなたはパワーに満ちあふれていますし、運気の流れも背中を押してくれているので積極的に行動して吉。現実と向き合って前に進むことで、良運を引き寄せることができますよ。<br><br>　そして、金運ですが、ちょっと出費が増えそうですね。というのも、アクティブに動くときだから、交際費や活動費が増えるのです。ですが、それらは必要経費。仕事を得るためであったり、今後に繋がる人脈を作るためであったりするので、結果としてはプラスに転じます。後の収入を増やすための投資と思ってください。',
'　この月は、これまでの結果が出るときです。成功をつかむために努力を続けてきたとしたら、何らかの成果を手にするでしょう。それが、大きいかそうではないかは、これまでの努力に比例しています。<br><br>　思い通りではなかったとしたら、気持ちを切り替えて新しいスタートを切りましょう！　以前のやり方が通用しなくなるタイミングですから、新しい方法を取り入れると吉。<br><br>　一方の金運ですが、自分への投資を行うと将来の収入アップに繋がるときです。この月の収入が思っていたほどではなかったとしても、このときに自己投資をすると、のちの収入に繋がります。狙い目は、海外関係。旅行に行って視野を広げるのもいいですし、語学を学ぶのもおすすめですよ！',
		),
		array( "nu20_035_3", 
'　この月は、自ら行動を起こすことで運気が開けていくときとなります。これは、恋愛においても同じですね。つまり、待っているだけでは恋の展開は訪れないのです。<br><br>　好きな人がいるのなら、[%NAME_SELF%]さんからアプローチしてみましょう。勇気が必要とされるでしょうが、勇気を出せばいい結果がだせますよ！　もし、あなたが出会いを求めているとしたら、異性との出会いが訪れそうな場所に足を運びましょう！　<br><br>　初めての場所に行くことが幸運を引き寄せるときなので、行ったことがない場所やお店に行ってみてください。髪型を変えたり、ファッションの方向性を変えてみるのもおすすめです。変化がツキを呼び込んでくるので、イメージチェンジを活用してくださいね。',
'　この月のテーマは「パートナーシップ」。人との絆が深まるときなので、恋愛運もとてもいいですよ！　好きな人と過ごす時間が増え、コミュニケーションが密にはかれるでしょう。<br><br>　お互いに理解が深まり、親密度もアップします。さらに、意中の人の気持ちが手にとるようにわかるときです。気持ちをくみとって、先回りをして行動すると好感度が大きくアップします！　恋の成就も夢ではありません。<br><br>　もし、[%NAME_SELF%]さんが出会いを求めているとしたら、この月は期待してくださいね。理想のタイプに巡り会える可能性大。チャンスが訪れるのは、奉仕活動の場。手伝いを頼まれたら、引き受けてください。ボランティア活動に参加するのもいいですよ。良運に恵まれるでしょう。',
'　この期間は、異性との出会い運がアップしています。新しい恋を求めている人には素敵な出会いが訪れます！　人から誘われることが多いときなので、飲み会や食事会で会う人とのご縁で結ばれる可能性が高いですね。<br><br>　にぎやかな席では[%NAME_SELF%]さんの話術がアップするので、会話で人を楽しませることができます。一緒にいると楽しい人と思われて、異性からの人気が高まりますよ。<br><br>　ただし、パートナーがいる人は注意が必要です。なぜなら、あなたのモテ度がアップすると、パートナーが嫉妬して機嫌を損ねてしまうのです。不用意にほかの異性と親しくしていると、トラブルに発展する場合もあるので気をつけてください。三角関係や不倫など、秘密の恋にも要注意ですよ！',
'　全体的な運気が安定していることもあり、恋愛運も落ち着いている月ですよ。パートナーがいる人は、二人で静かに語りあうような時間が増えるでしょう。<br><br>　「安定」がテーマとなる時期なので、結婚の話が持ち上がる可能性が高いですよ！　恋人に結婚を決意させたいのなら、結婚や家庭に関する場所でのデートがおすすめです。<br><br>　もし、[%NAME_SELF%]さんが新しい出会いを求めているのなら、お見合いや紹介話でのご縁が期待できます。話が舞い込んで来たら、気乗りしなくても受けるようにしましょう。紹介された人との相性があわないとしても、その人を通じて人脈が広がっていき、理想のタイプに巡り会える場合があります。やってきたご縁は受けるようにしてくださいね。',
'　この月は、運気が[%NAME_SELF%]さんを大胆にします。恋に対して積極的に挑めるときですから、あなたから意中の人にアプローチしてください。運勢の波が背中を押してくれていますから、秘めたる恋がみのる可能性大ですよ！　<br><br>　出会いを求めている人は、マッチングイベントなどに参加してみてください。外交的になると、良縁を引き寄せることができますよ。<br><br>　いつも通りではない方がいいので、ファッションや髪型を変えてみるといいでしょう。大胆なイメチェンもおすすめですよ。恋人がいる人は、ロマンティックな時間にひたると二人の距離が一気に縮まります！　[%NAME_SELF%]さんが恋をリードしていいときですから、行ってみたかった場所にデートで訪れるチャンスですよ。',
'　この月の恋愛運は好調ですよ！　[%NAME_SELF%]さんの優しさや愛情がアップするときですから、自然と恋愛ムードが展開されるでしょう。<br><br>　愛を惜しみなくあらわし、好きな人に与えてあげるといいでしょう。そうすると、あなたの元にも愛情が返ってきますよ。与えた分以上の愛がバックされるはずですからね、期待していてください。また、この月は異性から相談を持ちかけられる機会が多々あります。話を聞いているうち、恋愛感情が芽生える可能性大！　<br><br>　職場の後輩や友だちとして親しく接していた人など。甘えん坊タイプの異性から好意を寄せられるでしょう。この時期、[%NAME_SELF%]さんは「自分が導かねば」という思いが強くなります。その深い愛で、異性を包み込んであげてください。',
'　この月は、[%NAME_SELF%]さんの恋にかける情熱が少しダウンします。恋愛よりもほかの物事に熱中するのです。そのため、異性からのアプローチに気付かなかったり、誘いがあっても気乗りしなかったりするでしょう。<br><br>　もったいない！　と今は感じるかもしれませんが、そのときになるとそれほどと思うようになるはず。ここでのチャンスを逃したとしても、先々次なるチャンスが巡ってくるので心配しないでくださいね。恋が必要ないときだと考えて大丈夫ですよ。<br><br>　ただし、知的で情報をたくさん持っている異性とは交流した方が正解！　恋愛面だけではなく、仕事面や対人面など、様々なシーンでプラスの流れを持ってきてくれます。知性あふれる異性は幸運を運んできてくれる人と思ってくださいね！',
'　この月は、[%NAME_SELF%]さんの人気が急上昇するときです！　様々な場面で、あなたが人前に立つことになるでしょう。当然、異性からの視線も集まります。<br><br>　イキイキと輝いている[%NAME_SELF%]さんを見て、思いを寄せる異性が複数名あらわれるようですよ。期待してくださいね！　ただし、誰に対してもいい返事をしていると、八方美人と噂されてしまいます。気になる人がいたら、早めに恋人候補として絞った方が吉。<br><br>　また、あなたに意中の人がいるとしたら、あなたが多忙すぎることで距離が生まれるかもしれません。会って話ができないとしても、メールや電話でのやりとりはできますよね。仕事で忙しくて疲れていたとしても、返信を滞らせるといったことはしないでくださいね。',
'　この月の[%NAME_SELF%]さんは愛情がとても深まります。他人の気持ちに共感する力がアップしているので、接した人の思いが手にとるようにわかるはず。好きな人の思いを瞬時に察し、気持ちにより添ってあげることができますよ。<br><br>　また、美的センスがかなりアップします。ファッションや髪型を変えてみたくなるのではないでしょうか。それが、うまくいくので異性からの注目もアップします！　<br><br>　ただし、あなたが望んでいるようなタイプの人に出会えないかもしれません。リアル世界より、SNSでの出会いに惹かれてしまうようですね。ネットでも素晴らしい出会いがありそうですから、マッチングに期待してみるのもいいでしょう。とはいえ、NGと思ったら深入りしないように。',
		),
		array( "nu20_035_4", 
'　この月、[%NAME_SELF%]さんにとって一番いい運勢が訪れるのは、ズバリ！　仕事ですね。新しい流れが巡ってくるタイミングですから、新規の案件がどんどん舞い込んで来るでしょう。<br><br>　だたし、この期間はスタート地点。物事が始まるときなので、成果がでるのはもう少し先になります。努力をしても結果があらわれないと、不満を感じるかと思いますが、がまんが必要ですよ。未来に成功を手にするために、いろいろチャレンジする時期と思ってください。<br><br>　大いなる船出のときでもありますから、意気揚々と先に進んで行きましょう。新天地に向かうために必要なものは、自然と[%NAME_SELF%]さんの元にやってきますから。アンテナを張り巡らせて、情報を入手することを意識してくださいね。',
'　この月は、何といっても対人運のよさが際立っています。人間関係がテーマとなるときですから、人と接する機会がいつも以上に増えるでしょう。<br><br>　サポート役を頼まれたり、相談を持ちかけられたりすることが多くなると思います。奉仕活動に参加すると運気が上昇する時期ですから、人からの依頼は損得勘定抜きにして受けた方が吉。人脈という財産を手にできますよ。ただし、この期間は人の影響を受けやすいときでもあります。<br><br>　パワフルな人と一緒にいると、相手に振り回されてしまう可能性も否めません。自分と相手との境界を意識して、譲れない部分はキープするようにしてくださいね。そこだけ注意をすれば、人に恵まれた素晴らしいときを送れますよ。',
'　この月は「楽しむ」ことがキーワードとなります。[%NAME_SELF%]さんが明るい気持ちになれるものに取り組み、楽観的に過ごすことがツキを呼び込みます。<br><br>　先のことを案じたり、きっかり計画を立てて行動したりしなくても大丈夫です。今この瞬間を楽しむ気持ちで過ごしていると、いい流れが生まれます。感性が刺激されて、あなたの芸術性や眠っている才能が高まるときでもあります。クリエイティブな力を仕事で発揮できれば、素晴らしい結果が残せますよ！　<br><br>　趣味を仕事にすることもできますし、そのためのアイディアも浮かんで来るでしょう。[%NAME_SELF%]さんの創造性と空想力を持ってすれば、公私共に様々な場面で活躍できるはず。枠や制限を設けず、自由な思考で活動してくださいね。',
'　この月のテーマとなっているのが「安定」と「実際性」です。落ち着いて物事に挑めば、必ずいい結果が出せますからね。<br><br>　夢や目標を抱いて計画を立てるのにもベストなタイミングですが、現実性と実現性をしっかり確認しましょう。空想にふけるよりも、生産性を重視して行動するといい結果が生まれますからね。これまで、[%NAME_SELF%]さんが多少ハメを外していたとしても、この月は地に足を着けて行動してください。<br><br>　デンと構えていることで、運気の流れが向こうからやってきますから。反対にあくせく動いていると、チャンスを見逃してしまいます。注意点としては、少し頑固になりやすい傾向があるので、素直な心を忘れずにいてくださいね。人のアドバイスには耳を傾けて。',
'　この月のテーマは「チャレンジ」となります。世間の常識やルール、制約やしきたりのなかで不自由さを感じていたとしたら、そこから解放される瞬間が訪れるでしょう！　<br><br>　とはいえ、全てを壊してゼロにするという運気ではないのです。あくまでも、これまで蓄積してきた人間関係や知識、そして身につけた社会性を基盤にしたうえでの新たなるステージへ挑戦するときなのです。いわば、拡大ということですね。新たなる責任も担う流れもありますから、そこはしっかり意識を持って挑みましょう。<br><br>　それから、人との交流が活発化するのですが、飲み過ぎや食べ過ぎには注意してください。ウエイト増加もあり得るので、スポーツジムなどに行って体を動かすことを意識して。',
'　人のために動く月となりますが、損得勘定抜きで活動することで運勢がアップしますよ。相手のためを思っての行動は、多いに感謝されるだけではなく、[%NAME_SELF%]さんの身にプラスとなって転じます。<br><br>　今すぐに良運が巡ってくるわけではないのですが、巡り巡ってラッキーな出来事となって転換されます。他人を思い、他人を守ることで、あなた自身が成長していくともいえますよ。ただし、他人を心配するのはいいのですが、自分のやるべきことを疎かにしないようにしてくださいね。<br><br>　人の面倒を見ていたら、自分の仕事が山積みになっていたなんてことも！　自分の状況と周りの状況、両方を見ることができるといいですね。広い視野を持って、この月は過ごすようにしましょう。',
'　この月は思考力がフル活動するときになります。これまでの状況を内省したり、勉強に励んだりするでしょう。外に出るのではなく、室内で静かに何かに取り組む時間が増えますよ。<br><br>　自分の才能を育てたい、技術を磨きたいという欲求も高まるのでスクールに通うようになるかも。静かな環境が[%NAME_SELF%]さんにパワーを与えてくれますから、図書館や博物館に足を運ぶのもおすすめ。<br><br>　また、行動するときは誰かと一緒ではなく、ひとりで行くといいでしょう。頭のなかで様々な思考が浮かび、それが今後のヒントとなる場合もあります。一休みするような運気の流れですが、休むといってもグウタラ過ごしてはダメ！　じっくり物事を考えて、次のステップに進む準備を整えましょう。',
'　この月は[%NAME_SELF%]さんの持っている力を存分に発揮して、良運を引き寄せるチャンスのときといえます！　団体のなかで活動する流れがあり、人と接する機会がいつもより増えます。<br><br>　あなたが中心となり物事を動かす暗示が出ていますから、手腕をふるってくださいね。自信を持って行動すれば、うまくいきます。一方で、人に影響を与えやすいときでもあります。気付かぬうちに、誰かを傷つけているといったこともあるので、自分の言動に責任を持ちましょう。<br><br>　相手を思いやる気持ちを忘れなければ、大丈夫ですよ。また、趣味に光があたる月です。趣味をいかした活動がしたいと望んでいるのなら、プロととて活躍できる可能性が高いときです。努力してみてくださいね。',
'　この月は、これまでの流れが収束する時期となります。努力していたことの結果が出るタイミングといえるでしょう。何かが完成する一方で、何かを手放す状況も訪れます。<br><br>　納得できない部分があるとしても、執着をしてはいけませんよ！　この月は、新しい流れがやってくる前準備が必要になります。次なるスタートに向けて、古いものを整理することが大切です。新旧が入れ替わるときなので、気持ちが少し落ち着かないかもしれません。<br><br>　人からの影響も受けやすいときですから、自分のなかにある考えや価値観を見つめ直してみるといいですね。多くの知識や情報を得て、それらに共感することで多角的に物事を眺めるときと思ってください。精神性が養われるときですよ。',
		),
		);
?>