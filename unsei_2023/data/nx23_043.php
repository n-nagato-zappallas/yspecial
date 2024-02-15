<?php
/**
 * menu_id : nx23_043
 * シウマ：一人用 4月運
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'nx23_043',
			'contents'			 => 'shiuma2_zap',
			'img_name'			 => 'zap_shiuma2',
			'teller_name'		 => 'シウマ',
			'isp_mid'			 => '53w030',
			'nif_menukey'		 => 'unsei_2023_031',
			'price'				 => '600',
			'discount'			 => '540',
			'design_cd'			 => '6',
			'person'			 => '1',
			'category_name'		 => 'life',
			'release_date'		 => '20230328',
            'base_1_title_self'  => 'あなたの数字',
            'base_2_title_self'  => 'あなたの基本性格',
            'base_1_title_other' => 'あの人の数字',
            'base_2_title_other' => 'あの人の基本性格',
			'title'				 => '【シウマが占う◆2023年4月のあなたの運勢】総合/仕事/恋愛/起きる事',
			'caption'			 => '新年度が始まるこの時期。新たな気持ちでスタートを切ることもありますよね。そんな大事な月のあなたの運勢をシウマがお伝えします。全体的な運はどうなのか？　仕事運、対人運、恋愛運と出会い運は？　そして4月にどんなことが起きるのかもお話ししましょう。',
            '1_min_title'		 => '2023年4月の総合運、全体的な運勢',
            '2_min_title'		 => '2023年4月の仕事運と対人運',
            '3_min_title'		 => '2023年4月の恋愛運と出会い運',
            '4_min_title'		 => '2023年4月はどんなことが起きる？',
		);

// 小メニューロジック
$logic = 'c1';

// Next枠
$next = array( "nx23_041", "nx23_042", "nx23_044", "nx23_045", "nx23_046" );

// 一部見せテキスト
$free = array(
		array( "nx23_043_1", 
'　4月の[%NAME_SELF%]は、気を抜いていると体調を崩しやすくなるかもしれません。予定をたくさん詰め込みすぎてしまうと、疲れやすくなるので注意したほうがいいでしょう。特に仕事や趣味に集中していると、ストレスが溜まっているのに気づかないまま体を酷使しがちになるので、気をつけてくださいね。<br><br>　この月は……',
'　4月の[%NAME_SELF%]は、誰かのために行動することで、運気がアップしていくでしょう。自分のことばかり考えるのではなく、ほかの人から頼まれたことを優先させるように心がければ、周囲から感謝されて物事がいい方向に進みますよ。<br><br>　無理に困った人を探さなくても自然とそういった……',
'　4月の[%NAME_SELF%]は、前向きな気分で楽しく過ごせますよ。友人との話に花を咲かせたり、新しい習い事を始めたりするといいでしょう。自分でも信じられないくらいに物事がうまく進むので、以前から挑戦したかったことがあれば、本格的に取り組むといいかもしれません。<br><br>　自分の中に……',
'　4月の[%NAME_SELF%]は、たくさんの人たちと縁がつながり、人脈が大きく広がっていくでしょう。これまで知り合った人だけでなく、まったく別の世界の知り合いが増えるので、忙しく動き回ることになるようです。そういった中で、人生に必要な相手との関係がより深くなっていき、あまりよくない関係は……',
'　4月の[%NAME_SELF%]は、自分の気持ちをはっきりと示すことが運気アップのポイントになります。さまざまな選択肢が目の前に広がっていますが、迷ってしまうと進めなくなるかもしれません。自分にとって必要なものは何か、いらないものは何か、少しずつ見極めていくといいでしょう。<br><br>　自分の……',
'　4月の[%NAME_SELF%]は、大きく成長するチャンスです。先祖を敬い感謝すれば、焦らず落ち着いて行動できるようになりますよ。資格を取ったり、昇進のために役立つ知識を取り入れたりすると、あなたの努力が認められる可能性が高まります。<br><br>　周囲に感謝の気持ちを忘れずに、できるだけ……',
'　4月の[%NAME_SELF%]は、これまでの努力が実って、楽しい気分になれるでしょう。前からやりたかったことにチャレンジすると、思いのほかいい結果になるはずです。周囲からも必要とされ、話し相手にも困らないほどの人気者になれそうです。<br><br>　楽しいことばかりで逆に不安になるかもしれませんが……',
'　4月の[%NAME_SELF%]は、変化を迎えるときです。何をどう変えるか、直感で変えたいと感じたことを実行に移すといいですよ。もし今の環境が気に入っていて、変えたくないと思っても、外部からの影響で変わらざるを得ない状況になるはずです。<br><br>　変化することを恐れずに、前向きに……',
'　4月の[%NAME_SELF%]は、パワフルでやる気に満ちています。勘が鋭くなって、いい判断ができるようになるでしょう。これからどうするべきか、進んでいく方向がなんとなくわかるので、直感に従って必要な情報を仕入れておくといいですよ。<br><br>　これまでの努力の結果が形となって見えるように……',
		),
		array( "nx23_043_2", 
'　この月の仕事運からすると、[%NAME_SELF%]はかなり多忙になりそうです。自分ができる範囲以上の仕事を引き受けてしまったら、無理をしないで周囲の人たちに相談したり、素直に助けを求めたりするといいですよ。今は自分の限界を知り、作業のスピードや処理能力をしっかり把握するときです。<br><br>　また……',
'　この月の仕事運は、[%NAME_SELF%]にとって成長するための準備期間になるでしょう。ほかの人の仕事を手伝ったり、一緒に問題を解決したりしてあげることで、今まで気づかなかったいいアイデアが浮かんでくるはずです。次のステップに向けて、考え方を変えていくきっかけがつかめるので、積極的に……',
'　この月の仕事運は、かなりよいですよ。チャンスがやってきやすいので、積極的に自分の存在をアピールして、上司や同僚に声をかけるといいでしょう。職場の人間関係が円滑になるように、挨拶は欠かさずに。自然に笑顔が多くなって、仕事が楽しいと感じるようになります。<br><br>　また対人運はよく、話題が豊富で……',
'　この月の仕事運はとても良好で、[%NAME_SELF%]にとって充実した楽しいものになるでしょう。感性が鋭くなって、次々とよい案が浮かびますよ。得意分野で活躍できるので、やりがいを感じながら働くことができるはずです。<br><br>　また、対人運もよく、相手を立てるように振る舞うと……',
'　この月の仕事運は、比較的順調でしょう。[%NAME_SELF%]にとって成長のきっかけになるようなことが起きるので、逃げたりごまかしたりせず、正面から向き合いましょう。真剣に対処しているうちに、必要な情報や知識を身につけて、大きく成長できますよ。<br><br>　また、対人運は良好です。少し……',
'　この月の仕事運は、とてもよいですよ。[%NAME_SELF%]にとって、またとないチャンスがやってきます。以前から希望していた仕事ができるようになったり、責任ある立場を任されたりするでしょう。しっかりと準備してきた場合は、満足できる結果が出せますよ。<br><br>　また対人運は好調で、上司や……',
'　この月の仕事運は、とてもいいですよ。[%NAME_SELF%]が思う以上の結果が出せるので、周囲からの評価もぐんと高くなるでしょう。ただ、根を詰めて頑張るのではなく、楽しみながらリラックスして取り組んだほうがいいようです。あまりイライラせずに、落ち着いて行動してください。<br><br>　また……',
'　この月の仕事運は、気分を変えると上昇します。仕事の手順を変えてみたり、新しい方法を取り入れてみたりしながら、[%NAME_SELF%]にとって一番いい方法を探しましょう。これまでの業界とは違う道に足を踏み入れると、世界が大きく広がりますよ。<br><br>　また対人運は、頑固になると……',
'　この月の仕事運は、これまでにないほど最高潮です。[%NAME_SELF%]の実力が発揮され、何をやってもうまくいくので、仕事が面白くて仕方がない状態になるはずです。全力を尽くして働けるのでいい成績を出し、上司からも素晴らしい評価を受けるでしょう。<br><br>　また対人運は、少し注意が……',
		),
		);



// 結果テキスト
$text = array(
		array( "nx23_043_1", 
'　4月の[%NAME_SELF%]は、気を抜いていると体調を崩しやすくなるかもしれません。予定をたくさん詰め込みすぎてしまうと、疲れやすくなるので注意したほうがいいでしょう。特に仕事や趣味に集中していると、ストレスが溜まっているのに気づかないまま体を酷使しがちになるので、気をつけてくださいね。<br><br>　この月は、静かに本を読んだり、資格の勉強をしたりすることに時間を割くといいでしょう。集中力がアップしているので、いつもよりたくさんのことが頭に入って効率よく進めることができます。思いどおりにいかないときは、素直に休憩するのが一番です。',
'　4月の[%NAME_SELF%]は、誰かのために行動することで、運気がアップしていくでしょう。自分のことばかり考えるのではなく、ほかの人から頼まれたことを優先させるように心がければ、周囲から感謝されて物事がいい方向に進みますよ。<br><br>　無理に困った人を探さなくても自然とそういった問題に関わることになるので、友人や家族から相談されたら、親身になって話を聞いてあげるといいですよ。気負わずに、ちょっとした親切のつもりで手を貸してあげるといいでしょう。誰かをサポートすることで、あなたの存在感は大きくなり、人との縁も広がるでしょう。',
'　4月の[%NAME_SELF%]は、前向きな気分で楽しく過ごせますよ。友人との話に花を咲かせたり、新しい習い事を始めたりするといいでしょう。自分でも信じられないくらいに物事がうまく進むので、以前から挑戦したかったことがあれば、本格的に取り組むといいかもしれません。<br><br>　自分の中にあるパワーを、できるだけ外に向けて発散するようにして、たくさんの人と話をしましょう。あなたと話したがっている人は多いため、心を開けば楽しい経験ができますよ。いつもなら聞けないような話も耳に入ってくるので、できるだけ時間を作って人に会いましょう。',
'　4月の[%NAME_SELF%]は、たくさんの人たちと縁がつながり、人脈が大きく広がっていくでしょう。これまで知り合った人だけでなく、まったく別の世界の知り合いが増えるので、忙しく動き回ることになるようです。そういった中で、人生に必要な相手との関係がより深くなっていき、あまりよくない関係は自然と遠のいていくでしょう。<br><br>　人間関係がどんどん変化していくときですから、来る者拒まず去るもの追わずといった感じで無理に深追いしないようにしたほうがよさそうです。縁がつながっている人とは、離れたとしてもまた会えるでしょう。',
'　4月の[%NAME_SELF%]は、自分の気持ちをはっきりと示すことが運気アップのポイントになります。さまざまな選択肢が目の前に広がっていますが、迷ってしまうと進めなくなるかもしれません。自分にとって必要なものは何か、いらないものは何か、少しずつ見極めていくといいでしょう。<br><br>　自分の中の価値観を意識して、これからすべきことや人生の目標を決めれば、おのずと選ぶべきものが見えてくるはずです。目的を持って行動するようになると、次の段階に進む道が開けますよ。足りない部分がわかれば、あとはしっかりと学ぶだけです。',
'　4月の[%NAME_SELF%]は、大きく成長するチャンスです。先祖を敬い感謝すれば、焦らず落ち着いて行動できるようになりますよ。資格を取ったり、昇進のために役立つ知識を取り入れたりすると、あなたの努力が認められる可能性が高まります。<br><br>　周囲に感謝の気持ちを忘れずに、できるだけ堅実な道を進みましょう。気持ちが焦っていると、信号が待てなかったり横断歩道以外の場所を渡りたくなったりするかもしれませんが、小さな決まりでもしっかり守ってくださいね。「頑張っているからちょっとくらいいいだろう」という油断をしないようにしましょう。',
'　4月の[%NAME_SELF%]は、これまでの努力が実って、楽しい気分になれるでしょう。前からやりたかったことにチャレンジすると、思いのほかいい結果になるはずです。周囲からも必要とされ、話し相手にも困らないほどの人気者になれそうです。<br><br>　楽しいことばかりで逆に不安になるかもしれませんが、素直に明るく過ごすのが一番です。気楽に流れに乗りましょう。この月は運気が上り調子なので、楽しいことが続きます。みんなの雰囲気を壊さないように、気分を盛り上げて満喫するといいですよ。いつも前向きでいれば、福を呼び込めるでしょう。',
'　4月の[%NAME_SELF%]は、変化を迎えるときです。何をどう変えるか、直感で変えたいと感じたことを実行に移すといいですよ。もし今の環境が気に入っていて、変えたくないと思っても、外部からの影響で変わらざるを得ない状況になるはずです。<br><br>　変化することを恐れずに、前向きに突き進んでいくことが運気アップの道です。家族と話し合う時間をしっかり取って、自分の変化を伝えたり、みんなの変化を把握したりすると一体感が生まれます。いつもと違う行動に出るのもいいですし、イメージチェンジをしたり好みを変えたりしてみるといいでしょう。',
'　4月の[%NAME_SELF%]は、パワフルでやる気に満ちています。勘が鋭くなって、いい判断ができるようになるでしょう。これからどうするべきか、進んでいく方向がなんとなくわかるので、直感に従って必要な情報を仕入れておくといいですよ。<br><br>　これまでの努力の結果が形となって見えるようになるので、満足できる結果にならなかった場合はしっかり反省しましょう。今までに手に入れたものの中で離れていくものが出てきますが、それは手放したほうがいい流れなので、無理に抵抗せず見送ってください。代わりに新しくて前よりいいものが手に入りますよ。',
		),
		array( "nx23_043_2", 
'　この月の仕事運からすると、[%NAME_SELF%]はかなり多忙になりそうです。自分ができる範囲以上の仕事を引き受けてしまったら、無理をしないで周囲の人たちに相談したり、素直に助けを求めたりするといいですよ。今は自分の限界を知り、作業のスピードや処理能力をしっかり把握するときです。<br><br>　また対人運は可も不可もなく、相手との距離感をうまく調整できるので、落ち着いて考えて行動しましょう。嫌な人とは無理に付き合わなくていいですよ。あまり普段と違うことに足を踏み入れず、いつものように振る舞っていれば問題ないので、リラックスして楽しんでくださいね。',
'　この月の仕事運は、[%NAME_SELF%]にとって成長するための準備期間になるでしょう。ほかの人の仕事を手伝ったり、一緒に問題を解決したりしてあげることで、今まで気づかなかったいいアイデアが浮かんでくるはずです。次のステップに向けて、考え方を変えていくきっかけがつかめるので、積極的に困っている人を助けてあげるといいですよ。<br><br>　また対人面では、誰にでも好印象を与えることができる運です。前向きにたくさんの人と話をすると、役に立つ情報を聞けるでしょう。できるだけ聞き役に徹し、相手に気持ちよく話をさせるようにするといいですよ。',
'　この月の仕事運は、かなりよいですよ。チャンスがやってきやすいので、積極的に自分の存在をアピールして、上司や同僚に声をかけるといいでしょう。職場の人間関係が円滑になるように、挨拶は欠かさずに。自然に笑顔が多くなって、仕事が楽しいと感じるようになります。<br><br>　また対人運はよく、話題が豊富で人気者になれる可能性が高いようです。周囲から面白い人といわれるようになり、噂が噂を呼んで、[%NAME_SELF%]と話をしたいという人がたくさんやってきます。ただし、口が滑ってトラブルになる場合があるので、冷静に状況を判断しましょう。',
'　この月の仕事運はとても良好で、[%NAME_SELF%]にとって充実した楽しいものになるでしょう。感性が鋭くなって、次々とよい案が浮かびますよ。得意分野で活躍できるので、やりがいを感じながら働くことができるはずです。<br><br>　また、対人運もよく、相手を立てるように振る舞うといい結果につながります。協調性を意識して、周囲の意見をよく聞くようにすれば、スムーズにいい関係を築くことができるでしょう。誠実なやりとりを意識すれば、あなたが必要としている情報を教えてくれる人が現れるはずですよ。何気ない世間話にヒントがあります。',
'　この月の仕事運は、比較的順調でしょう。[%NAME_SELF%]にとって成長のきっかけになるようなことが起きるので、逃げたりごまかしたりせず、正面から向き合いましょう。真剣に対処しているうちに、必要な情報や知識を身につけて、大きく成長できますよ。<br><br>　また、対人運は良好です。少し背伸びして目上の人と交流すると、自然にあなたの立ち居振る舞いが洗練されるでしょう。向上心を持つことで行動にも気持ちが反映されるようになるので、偽物で満足せず本物に触れることを意識するといいですよ。金額ではなく、独自性を尊重しましょう。',
'　この月の仕事運は、とてもよいですよ。[%NAME_SELF%]にとって、またとないチャンスがやってきます。以前から希望していた仕事ができるようになったり、責任ある立場を任されたりするでしょう。しっかりと準備してきた場合は、満足できる結果が出せますよ。<br><br>　また対人運は好調で、上司や先輩との話が盛り上がって、新しい世界を教えてもらえそうです。礼儀やマナーをきちんと押さえれば、好感度が上がって信用されるようになりますよ。言葉遣いの丁寧さやちょっとした気遣いが人生を変える鍵になるので、学んでおいて損はないはずです。',
'　この月の仕事運は、とてもいいですよ。[%NAME_SELF%]が思う以上の結果が出せるので、周囲からの評価もぐんと高くなるでしょう。ただ、根を詰めて頑張るのではなく、楽しみながらリラックスして取り組んだほうがいいようです。あまりイライラせずに、落ち着いて行動してください。<br><br>　また対人運もよく、まったく考え方が違う相手との会話から、思わぬ発見をするかもしれません。人と関わることでひらめきを感じるようになるので、できるだけ人との会話を大切にしてくださいね。いつも話さない異性や年下と言葉を交わすと、ピンとくるものがあるでしょう。',
'　この月の仕事運は、気分を変えると上昇します。仕事の手順を変えてみたり、新しい方法を取り入れてみたりしながら、[%NAME_SELF%]にとって一番いい方法を探しましょう。これまでの業界とは違う道に足を踏み入れると、世界が大きく広がりますよ。<br><br>　また対人運は、頑固になるとよくありません。自分の考え方は変えなくていいのですが、人と話すときはその場の雰囲気に合わせたほうがいいでしょう。外見で誤解されることが多くなるので、たくさん話をしてイメージを変える努力をする必要がありそうです。笑顔を忘れずに明るい雰囲気で話すといいですよ。',
'　この月の仕事運は、これまでにないほど最高潮です。[%NAME_SELF%]の実力が発揮され、何をやってもうまくいくので、仕事が面白くて仕方がない状態になるはずです。全力を尽くして働けるのでいい成績を出し、上司からも素晴らしい評価を受けるでしょう。<br><br>　また対人運は、少し注意が必要ですね。仕事に熱中するのはいいですが、あなたの押しの強さに相手はたじたじになるかもしれません。周囲の様子をしっかり観察しながら、相手に合わせた話の仕方を選ぶといいですよ。口調を柔らかくすれば、話しやすい雰囲気になるので、意見が採用されやすくなります。',
		),
		array( "nx23_043_3", 
'　この月、[%NAME_SELF%]の恋愛運は少し低めで、トラブルになりやすいようです。突発的な状況に流されず、慎重に考えて判断してくださいね。感情的にならず、理性的に考えるように心がければ、運気はよい方向に流れていくでしょう。<br><br>　出会い運は好調で、新しい出会いがありそうです。ちょっとした外出でも身なりを整えて、急な出会いに準備しておくべし。自分の直感を信じて行動すれば、誰と会っても正しい判断ができるはずです。あまりよくない印象を受けた相手とは、無理に付き合わずに素直に距離を取っておくと、後からよい方向にいくでしょう。',
'　この月、[%NAME_SELF%]の恋愛運はとても好調です。あなたの中にある優しさが、相手に伝わりやすくなっているので、普通に行動するだけで魅力が満開に。ただ、やりすぎるとおせっかいに思われてしまうかもしれないので、控えめなくらいがちょうどいいかもしれません。<br><br>　また、出会い運はかなりよいようです。付き合いでお金が出ていくことが多くなるので、あまり無駄遣いをしないように、よく考えて節約する必要があります。そうはいっても、お金に困るということはありません。あなたの優しさが導くままに振る舞えば、いい結果につながるでしょう。',
'　この月、[%NAME_SELF%]の恋愛運は順調です。誘われたらできるだけ優先して時間を作りましょう。どんなことでも積極的に楽しめば、相手にいい印象を与えられます。甘い雰囲気になるかもしれませんが、それよりも会話を重ねることに集中するとよさそうです。<br><br>　また出会い運は好調で、たくさんの人と楽しく会話できるでしょう。交際費がかさんでしまいますが、いい出会いが見つかりやすいときなので、渋らずに必要経費だと思って出しましょう。新しい人脈が増えれば、理想の出会いに辿り着く可能性が高まります。面倒くさがらず、連絡には早めに返信するといいですよ。',
'　この月、[%NAME_SELF%]の恋愛運はとても華やかなものになるでしょう。前向きに行動すれば、一歩前に踏み出せるはずです。生活が一変するような展開になる場合もあるので、素直に楽しみながら進んでいくといいですよ。<br><br>　また、出会い運はかなり充実しています。いろいろな人と出会ったり親密になったりすれば、自分に合った相手を見つけることができます。一途にひとりの相手を想うより、たくさんの人と話をして自分の気持ちがどう変化するのか、実際に感じてみるといいでしょう。いつもより細かいところに注目すれば、思わぬ発見があります。',
'　この月、[%NAME_SELF%]の恋愛運はかなりよいようですね。ただ、少しあまのじゃくな一面が顔を出します。気になる相手の注意を引こうとしてすねてみたり、ちょっかいをかけたりすることが多くなりますが、その変化が大きな魅力になることもあるでしょう。<br><br>　また、出会い運はとてもよいですよ。一流の美や芸能に触れるために出かけた先で、気になる相手に会う可能性が高いようです。よりよいものを求めて行動することで、同じようなセンスの友人が増え、親しくなるうちに恋が芽生えるでしょう。趣味の話をすれば、楽しく過ごせますよ。',
'　この月、[%NAME_SELF%]の恋愛運はかなり上々ですね。好きな相手にも節度を持って接すると、雰囲気がよくなりますよ。ただ、忙しくてゆっくり話す時間が取れなくなってしまうので、SNSなどを活用してこまめに連絡を取るとよいでしょう。<br><br>　また、出会い運も良好です。運命の相手と出会う可能性が高まっているので、理想を具体的に思い浮かべておくといいですよ。周囲に理想のタイプを伝えておくと、紹介してもらえる可能性が高くなります。積極的に外出したり連絡をチェックしたりして、急な誘いにも対応できるようにしましょう。',
'　この月、[%NAME_SELF%]の恋愛運は絶好調です。楽しみながら関係を深めていけるので、チャンスだと感じたら迷わずに進んでみましょう。自然に気持ちが高まっていくので、思い切って大胆な行動をしても大丈夫ですよ。努力が実を結ぶときなので、好奇心のままにいくといい結果になります。<br><br>　また、出会い運はとてもよいですよ。新鮮な気持ちになれる相手と話せるので、知らない人とも積極的に会話するように意識してみましょう。あなたの魅力で人気が急上昇しますので、たくさんの人と言葉を交わしているうちに、自然と気になる相手が見つかります。',
'　この月、[%NAME_SELF%]の恋愛運はかなりよいですね。友人から恋人へ、または恋人から人生のパートナーへと進化のときを迎えるようです。まだこのままの関係でいいと思っているのなら、デートコースを変えるなど、いつもと違う行動を意識するといいですよ。<br><br>　また、出会い運は少し問題ありです。初対面の人に強く自己主張をしたり、機嫌の悪い様子を見せたりすると、第一印象が悪くなってしまうかもしれません。後で誤解を解くのが難しくなるので、誰かと会うときはできるだけ笑顔を意識して、とにかく相手に楽しい印象を与える工夫をしましょう。',
'　この月、[%NAME_SELF%]の恋愛運は波乱万丈のようです。思わぬ出来事が起こって運命の恋に落ちたり、あまり関わったことのない人から突然の告白を受けたりと、思わずびっくりするような展開が待っているでしょう。ただし、心に余裕がなくなると楽しめなくなってしまうので、適度な休養を取っておいてください。<br><br>　また、出会い運はさほど思わしくなく、あまり積極的にいかないほうが吉。あなたの魅力が増しているので、サインを見逃さなければ向こうからやってきます。気になる相手を見つけたらあまり暴走しないで、相手に合わせた返事をしていればうまく話せますよ。',
		),
		array( "nx23_043_4", 
'　2023年4月、[%NAME_SELF%]には新しい友人ができるでしょう。付き合いが多くなって、お金が出ていくことも増えるかもしれませんね。入ってくるお金のほうが多くなるので、必要な出費なら問題ありませんが、ついでに無駄遣いしやすくなっているので注意が必要です。<br><br>　定期預金を始めたり、余裕があるときは貯金にお金を回すように意識したりすると、運気がアップするでしょう。ただし、この月は冒険にはあまり向いていないので、株や投資には要注意です。一か八かの大勝負に賭けるよりは、地道にしっかりお金を貯めるほうが、いい結果につながりますよ。',
'　2023年4月、[%NAME_SELF%]の元にはたくさんの相談が寄せられるでしょう。困った人を助けるのは、あなた自身を成長させるためにも役に立つことなので、積極的に引き受けるといいですよ。それが周囲との関係を円滑にするきっかけとなります。<br><br>　余裕を持って行動できるように、貯金は多めに残しておくといいでしょう。お金について意識を高めれば、金銭関係の相談にも具体的なアドバイスができるようになるはずです。誰かのために行動することで、自然と知識が身についていき、知らない間に大きく成長することができるので損にはならないはずです。',
'　2023年4月、[%NAME_SELF%]には新しい世界が開けます。よい出会いに恵まれ、気の合う友人と楽しい時間を過ごせるでしょう。少しくらいミスをしても大きな失敗にはならないので、思い切ってどんどん前向きに動き回るといい結果につながります。<br><br>　疲れ知らずで元気に動けますし、あなたを邪魔するようなものも何もないはずです。好奇心の赴くままに、人と話してやりたいことにチャレンジしましょう。人前で注目を集めるようなことに挑戦すると、満足できる結果を手にできますよ。周囲に気を配って、場を盛り上げると楽しく過ごせます。',
'　2023年4月、[%NAME_SELF%]にはさまざまな情報が集まってきます。その中には大きなチャンスも含まれているので、タイミングを逃さないようにしましょう。大切なのは、自分の直感を信じることですよ。判断に迷っているとどんどん時間だけがすぎていってしまいます。<br><br>　周囲との関係を優先して、困ったときは助けを求めながら絆を深めていくといいですよ。仕事もプライベートも両方忙しくなるので、全力で楽しめるよう体調管理に気をつけましょう。人との出会いが元になって世界が広がっていくので、殻にこもったりせず、前向きに進んでいきましょう。',
'　2023年4月、[%NAME_SELF%]には大きなチャンスが訪れるでしょう。あなた自身の才能や能力で、大成功を収める可能性があります。地味に努力すれば、最大限のパワーを発揮できますよ。おいしい話に乗るのではなく、少し難しい案件にチャレンジすることで道が開けるでしょう。<br><br>　細部にしっかり注意を向け、満足のいく仕事をしていれば、周囲から高く評価されるようになります。誠心誠意、丁寧に対応すれば、望みのものが手に入るはずです。ただ、上ばかりを見ていると、今まで付き合いのあった人たちを疎かにしてしまうので注意してくださいね。',
'　2023年4月、[%NAME_SELF%]には目まぐるしいほどの変化が降り注ぎます。すべてをうまくやろうとすると、どれも中途半端になってしまう可能性があるので、自分ができる範囲をしっかりと決めて取り組むといいでしょう。もったいないと思ってしまうかもしれませんが、細部まできちんとするには目標を絞ったほうがいいですよ。<br><br>　仕事やプライベートが忙しくて気が回らなくなりそうですが、家計簿をつけたり予算を決めたり、お金の管理はしっかりとしておきましょう。必要な部分には、多少お金がかかっても、思い切って出すのが金運アップへの道です。',
'　2023年4月、[%NAME_SELF%]にはさまざまなチャンスが訪れます。これまでの行動が結果となって返ってきますので、準備は万端のはずですよ。もしまだ不安があるようなら、今からでも遅くはないので、必要な知識を身につけたり足りないものを揃えたりしてください。<br><br>　臨時収入があるかもしれませんが、無駄使いせずに自己投資や貯金に回して、来るべき日に備えておきましょう。仕事だけでなく、プライベートも充実しているので、毎日楽しく過ごせそうです。ただし、夢中で徹夜などをすると体調を崩してしまうので、生活リズムは守るようにしましょう。',
'　2023年4月、[%NAME_SELF%]にはさまざまな変化が訪れます。引っ越しをしたり職場が変わったりすることもあれば、人間関係が変化することもあるでしょう。ただの友達だと思っていた人から、急に気持ちを打ち明けられることもあるかもしれませんので、心の準備はしておいたほうがいいですよ。<br><br>　自分から変化を受け入れていけば、次に何をしたらいいかわかるようになるので、積極的に前を見て進んでいくようにしましょう。ほんの小さな変化でも、大きく人生が変わる場合があります。あなたが感じるままに、好きな道を選んで歩いてみるといいですよ。',
'　2023年4月、[%NAME_SELF%]には大いなるひらめきが降ってきます。この先どうすればいいか、どの道を選べばいいかということが直感でわかるので、自分を信じてどんどん進んでみるといいですよ。宝くじを買ってみたり、ピンと来た店に入ってみたりすると、あまり前もって調べなくてもいい結果になるでしょう。<br><br>　また自分磨きに力を入れると、新しい道が開けて運気がアップします。ほかの人の情報よりも自分の勘に従って、本当にやりたいことを実行に移していくといいですよ。ただし、睡眠時間を削るのはいけません。健康管理に注意してくださいね。',
		),
		);
?>