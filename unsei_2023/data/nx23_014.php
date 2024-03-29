<?php
/**
 * menu_id : nx23_014
 * シウマ：一人用 仕事お金
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'nx23_014',
			'contents'			 => 'shiuma2_zap',
			'img_name'			 => 'zap_shiuma2',
			'teller_name'		 => 'シウマ',
			'isp_mid'			 => '53w021',
			'nif_menukey'		 => 'unsei_2023_022',
			'price'				 => '1000',
			'discount'			 => '900',
			'design_cd'			 => '10',
			'person'			 => '1',
			'category_name'		 => 'work',
			'release_date'		 => '20221201',
			'title'				 => '飛躍の1年に！【シウマ渾身◆2023年仕事鑑定】評価/対人/昇給/転職',
			'caption'			 => '2023年、あなたの仕事環境や状況はどのように変化していくのでしょうか？　テレビ番組でお馴染みの琉球風水志シウマが、あなたの仕事の展開、対人関係、昇給チャンス、転職や独立についてについてお伝えします。ぜひ2023年を飛躍の年にしましょう！',
            'base_1_title_self' => 'あなたの数字',
            'base_2_title_self' => 'あなたの基本性格',
            'base_1_title_other' => 'あの人の数字',
            'base_2_title_other' => 'あの人の基本性格',
            '1_min_title'  => '【2023年】あなたの仕事にはどんな展開が待っている？',
            '2_min_title'  => '【2023年】あなたの中で格段に伸びていく『能力』',
            '3_min_title'  => '【2023年】職場の対人関係、こんなところに要注意です！',
            '4_min_title'  => '【2023年】転職や独立……今年は『チャンスor見送るべき』',
            '5_min_title'  => '',
            '6_min_title'  => '【2023年】今の環境で、確実に評価を得るにはどうしたらいい？',
            '7_min_title'  => '【2023年】この年、昇進や昇給の見込みはありそう？',
            '8_min_title'  => '【2023年】飛躍の年になるよう、あなたに心がけてほしいこと',
		);

// 小メニューロジック
$logic = 'b1';

// Next枠
$next = array( "nx23_013", "nx23_015" );

// 一部見せテキスト
$free = array(
		array( "nx23_014_1", 
'　2023年の[%NAME_SELF%]の仕事は、どちらかというと現状維持を意識したほうが良さそうですね。というのも、この年は次のステップアップに向けて、大事な準備期間に……',
'　2023年は、これまで[%NAME_SELF%]がキャリアを培ってきた中で積み上げてきたスキルが、多くの人たちから必要とされます。身近で困っている人からの声に応えているうちに、新たな発見が……',
'　2023年、[%NAME_SELF%]の仕事には追い風が吹きます。上昇気流に乗って軽やかに羽ばたいていくでしょう。新しいチャレンジに向いているタイミングです。あなたが前々から興味があった分野が……',
'　2023年、仕事で[%NAME_SELF%]のアイデアが冴えます。内側に秘められたクリエイティブな感性が開花して、思う存分に活かせるタイミングです。これまでとは全く違うアプローチで……',
'　2023年、[%NAME_SELF%]は仕事でワンランク上を目指すときです。これまで頑張ってきたことが、着実に形になるのを実感できます。仕事をする上での基礎をしっかり固め、今自分ができることに……',
'　2023年、[%NAME_SELF%]は素晴らしい仕事運に恵まれますよ。スキルアップするためのチャンスが巡るので、大きな成長を遂げるでしょう。これまで地道な努力を積み上げてきたのなら……',
'　2023年、[%NAME_SELF%]の仕事は成功へと向かいます。長い間、頑張ってきたことが、次のステップに進むでしょう。まだプランの段階だったことが、実現に向けて大きな一歩を……',
'　2023年、[%NAME_SELF%]は仕事上での変化がもたらされます。これまでとは違った働き方をすると、ステージアップする可能性が高まるでしょう。あなたが今の職種が長かったら、別の部署への……',
'　2023年、[%NAME_SELF%]の仕事運は絶好調です。心身ともにコンディションが良好で、直感を活かしパワフルに動いて早く結果を出せます。いつも以上に気力や体力が充実するときなので……',
		),
		array( "nx23_014_2", 
'　2023年は、仕事で任せられた作業をコツコツと地道に積み重ねることが苦ではないでしょう。同じことの繰り返しでも、やりがいがあって楽しいと感じられます。やり続ければ必ず自分のためになるし……',
'　2023年、[%NAME_SELF%]の能力の中で格段に伸びていくのは、サポート力です。これまでも、同じ職場の仲間たちと協力して作業を進めることはあったでしょう。でも、この年には、あなたが……',
'　2023年の[%NAME_SELF%]の中で格段に伸びていくのは、プレゼンテーション能力です。いつもの年よりも、自分の意見を人前で述べる機会が増えるでしょう。これまでは気後れしていたかもしれませんが……',
'　この年の[%NAME_SELF%]は、企画力が格段に伸びます。新しいアイデアが湯水のように湧いてくるので、それをまとめる必要があるでしょう。最初のうちは適切な言葉が見つからなかったり……',
'　この年、[%NAME_SELF%]の中で格段に伸びるのは、本業に最も必要な基礎的な能力です。接客業なら接客能力、事務職なら事務能力、営業職ながら営業能力といった要となる能力に自然と磨きが……',
'　この年、[%NAME_SELF%]の中で格段に伸びる能力は、チャレンジ精神ですよ。これまでは、どちらかというと保守的な働きぶりだったとしたら、軽々と新しい分野の仕事を試す勇気が出ます。もっと……',
'　2023年に[%NAME_SELF%]の中で格段に伸びるのは、実行力ですよ。これまでは計画を立てることに力を入れていたかもしれません。いかに効率の良いプランを立てたり、経費や費用対効果などを……',
'　この年、[%NAME_SELF%]の中で格段に伸びるのは、臨機応変に対応する力です。変化の渦に巻き込まれやすい時期なので、その場で柔軟な態度を求められるでしょう。未経験の仕事をすることに……',
'　この年、[%NAME_SELF%]の中で格段に伸びるのは、仕事上での先読みする能力です。いつも以上に勘が冴えて、「このままいったらこうなる」という見込み通りになるケースが多いでしょう。もちろん……',
		),
		);


// 結果テキスト
$text = array(
		array( "nx23_014_1", 
'　2023年の[%NAME_SELF%]の仕事は、どちらかというと現状維持を意識したほうが良さそうですね。というのも、この年は次のステップアップに向けて、大事な準備期間になるのです。がむしゃらに頑張ってもすぐに結果が出にくいタイミング。次の飛躍は目前なので、しっかりと充電するつもりでいてくださいね。この年は、新しいことに挑戦するよりも、今手掛けていることをできるだけ丁寧に取り組みましょう。<br><br>　もうひとつポイントがあります。職場の人たちを上手に頼ることがテーマです。いつも一生懸命なあなたをサポートしたいと思っている同僚や後輩が、すぐ身近な場所にいますよ。素直に仲間を頼るようにしてください。',
'　2023年は、これまで[%NAME_SELF%]がキャリアを培ってきた中で積み上げてきたスキルが、多くの人たちから必要とされます。身近で困っている人からの声に応えているうちに、新たな発見があるのです。自分だけでは見つけられなかった改善点が浮かび上がり、さらに技術や技能が磨かれるでしょう。<br><br>　「もっとこうすればいい」というアイデアが浮かぶので、次々と新しいことを試したくなりますよ。あなたの手掛けていた業務の内容は変わらなくても、やり方を見直したり、抜群に効率が良くなったりするはずです。この経験が次のステップに進むために必要な過程になりますよ。',
'　2023年、[%NAME_SELF%]の仕事には追い風が吹きます。上昇気流に乗って軽やかに羽ばたいていくでしょう。新しいチャレンジに向いているタイミングです。あなたが前々から興味があった分野があれば、思い切って試してみると、あっという間にうまくいきますよ。職場内で新規募集の業務があったら立候補を。<br><br>　これまで人と接する職種でなかった場合でも、接客をしたいと思ったら、ぜひチャレンジしてみてくださいね。多くの人と関わるのは、慣れないうちはストレスもありますが、あなたが考えているよりもずっと楽しくてやりがいを感じるはずですよ。',
'　2023年、仕事で[%NAME_SELF%]のアイデアが冴えます。内側に秘められたクリエイティブな感性が開花して、思う存分に活かせるタイミングです。これまでとは全く違うアプローチで、作業を効率よく進めていけるようになるでしょう。あなたは、より楽しみながら仕事に取り組めるのですよ。<br><br>　これまで同じことの繰り返しで、マンネリ化を感じていたかもしれません。でも、この年には自分が手掛けている仕事を全般的に見直すことができそうです。もっと世の中の人の役に立てないか、顧客を喜ばせることができないかということがテーマになりますよ。',
'　2023年、[%NAME_SELF%]は仕事でワンランク上を目指すときです。これまで頑張ってきたことが、着実に形になるのを実感できます。仕事をする上での基礎をしっかり固め、今自分ができることに懸命に取り組むことが大事です。将来のためにいつかやろうと思っていたことを、すぐにでもやりましょう。<br><br>　一方で、いつもの仕事を慣れているからといって手抜きをすると、すぐに見抜かれてしまいます。もしも、苦手な業務があるのなら克服する努力をしてみてください。すぐにできるようにならないかもしれませんが、前向きな姿勢が道を開いていきますよ。',
'　2023年、[%NAME_SELF%]は素晴らしい仕事運に恵まれますよ。スキルアップするためのチャンスが巡るので、大きな成長を遂げるでしょう。これまで地道な努力を積み上げてきたのなら、形になるタイミング。時間をかけて頑張ったかいがあると思えるのです。<br><br>　あなたがこれまでやりたいと願っていた業務があるのなら、意思表示をしてみてください。未経験でも、背中を押されるようにして挑戦する機会が訪れそうです。あなたが前々から希望していた大きな仕事を任されることも。責任は重くなりますが、その分やりがいがありますよ。',
'　2023年、[%NAME_SELF%]の仕事は成功へと向かいます。長い間、頑張ってきたことが、次のステップに進むでしょう。まだプランの段階だったことが、実現に向けて大きな一歩を踏み出すのです。プロジェクトの成果が出たり、予想以上に大きな反響があったりするでしょう。<br><br>　あなたは、ようやく形になってくるので、気持ちの上でも一段落しますよ。そして、いつも以上にリラックスして仕事に取り組めるのです。この年は、時間や締め切りに追われないで済むようなスケジュールで進行していきます。あなたは本来の実力を発揮して、次々と結果を出していくのです。',
'　2023年、[%NAME_SELF%]は仕事上での変化がもたらされます。これまでとは違った働き方をすると、ステージアップする可能性が高まるでしょう。あなたが今の職種が長かったら、別の部署への異動を打診されるかもしれません。意外な人事なので、最初は驚くことになりそうですね。<br><br>　でも、あなたが前向きに取り組めたら、面白さがわかるはずです。仕事の幅が広がったように感じますよ。自分にはできないという思い込みから解放されるのです。この先のキャリアで目指す方向性が、大きく変わる可能性もあります。あなたの前には様々なチャンスが広がりますよ。',
'　2023年、[%NAME_SELF%]の仕事運は絶好調です。心身ともにコンディションが良好で、直感を活かしパワフルに動いて早く結果を出せます。いつも以上に気力や体力が充実するときなので素早く段取りができ、ここぞというチャンスを逃さないでしょう。<br><br>　これまで手掛けていたよりも規模が大きい仕事に携わることもありそうです。それに、一度に複数の仕事に取り組んだほうが、創意工夫しながら、どの仕事も頑張れますよ。簡単過ぎる仕事ばかりだと、力が余ってしまうかもしれません。自分でハードルを上げて、限界の突破に挑んでみてくださいね。',
		),
		array( "nx23_014_2", 
'　2023年は、仕事で任せられた作業をコツコツと地道に積み重ねることが苦ではないでしょう。同じことの繰り返しでも、やりがいがあって楽しいと感じられます。やり続ければ必ず自分のためになるし、形になっていくと思えるのです。<br><br>　すぐに結果が出なくても、[%NAME_SELF%]がやろうと思ったことには、習慣のように取り組んでみてください。「やめない」と決めて取り組んでいるうちに、自然に粘り強さが身につきますよ。気がつくと継続力や持続力、さらに忍耐力が格段に伸びていることがわかるはずです。',
'　2023年、[%NAME_SELF%]の能力の中で格段に伸びていくのは、サポート力です。これまでも、同じ職場の仲間たちと協力して作業を進めることはあったでしょう。でも、この年には、あなたがサポートに回る場面が多く訪れます。<br><br>　その時々で、相手の求めていることが違ってくるはず。相手が必要としていることを的確に察知して、過不足なく知識や情報、作業の手を差し出せるのです。あなたは、かゆい所に手が届くような配慮ができる人として、高い評価を得られますよ。かなり上の立場の人だけでなく他部署や社外の人からも、「一緒に仕事をしたい」と引く手あまたになるのです。',
'　2023年の[%NAME_SELF%]の中で格段に伸びていくのは、プレゼンテーション能力です。いつもの年よりも、自分の意見を人前で述べる機会が増えるでしょう。これまでは気後れしていたかもしれませんが、回数を重ねるうちに、堂々と言うべきことを言えるようになっていきますよ。<br><br>　それから、相手の立場を考えながら、あなたが伝えたいことをしっかり伝えられます。相手から求められている情報や技能について素早く察知して、それ以上のものを提供することができるでしょう。みんなに喜んでもらいながら、あなた自身もやりがいを感じられるのですね。',
'　この年の[%NAME_SELF%]は、企画力が格段に伸びます。新しいアイデアが湯水のように湧いてくるので、それをまとめる必要があるでしょう。最初のうちは適切な言葉が見つからなかったり、企画書を作るのに苦手意識を抱いたりするかもしれませんね。でも、だんだん言いたいことがまとまり、手際よく伝えられるようになります。<br><br>　あなたは今よりも自分の考えていることを、臆せずに人前で話せるようになります。そのことで、仕事がやりやすくなったり、対外的にも堂々と交渉したりできるでしょう。あなたの斬新な意見をぶつけてみると、一目置かれるはずですよ。',
'　この年、[%NAME_SELF%]の中で格段に伸びるのは、本業に最も必要な基礎的な能力です。接客業なら接客能力、事務職なら事務能力、営業職ながら営業能力といった要となる能力に自然と磨きがかかるでしょう。あなたが仕事に本気を出しているうちに、これまで培ってきた技能がレベルアップするのです。<br><br>　周りの人が先に気づいて褒めてくれるはずです。「最近、素晴らしいね」と言ってもらえるかもしれません。もしも、あなたが職場の人たちから注目されたら、変に謙遜しなくていいですよ。褒められるほど、さらに長所が伸びます。',
'　この年、[%NAME_SELF%]の中で格段に伸びる能力は、チャレンジ精神ですよ。これまでは、どちらかというと保守的な働きぶりだったとしたら、軽々と新しい分野の仕事を試す勇気が出ます。もっと気軽に、失敗を恐れずに畑違いのことにも取り組んでいけるでしょう。　<br><br>　初めてのことを手掛けると、うまくいかないのは当然のこと。そう思えるので、失敗を楽しみ、次のステップに進むためのヒントにできるのです。それに、うまくいかないことからのほうが、学べることが多いとわかります。あなたは、果敢にチャレンジすることで結果を得られるようになるのです。',
'　2023年に[%NAME_SELF%]の中で格段に伸びるのは、実行力ですよ。これまでは計画を立てることに力を入れていたかもしれません。いかに効率の良いプランを立てたり、経費や費用対効果などを試算したりしてきたことが、この年にはいよいよ実行に移すチャンスが巡ってきます。<br><br>　完璧に準備ができていないとしても、とにかくやってみるという勢いがつきます。あなたは、見切り発車だと感じることもありそうですが、状況に合わせて柔軟に態度を変えながら、強力に推進していけるのです。あなたは、やればできると思えるので、様々なことを手掛けられますよ。',
'　この年、[%NAME_SELF%]の中で格段に伸びるのは、臨機応変に対応する力です。変化の渦に巻き込まれやすい時期なので、その場で柔軟な態度を求められるでしょう。未経験の仕事をすることになるため、これまでの常識が通用しないかもしれませんね。でも、あなたは楽しみながら、自分を変えていけるはずです。<br><br>　あれがダメならこれというように、いろいろな方法を試せます。もちろん、うまくいかないこともありますが、それは次に成功するために必要なことだと思えるのです。あなたの仕事の幅がどんどん広がって、様々な分野でも自信をもって取り組めるようになります。',
'　この年、[%NAME_SELF%]の中で格段に伸びるのは、仕事上での先読みする能力です。いつも以上に勘が冴えて、「このままいったらこうなる」という見込み通りになるケースが多いでしょう。もちろん、あなたの直感だけではなく、これまでの経験や洞察力も駆使して予想が立つのです。<br><br>　先々の展開を正確に把握できるので、事前に準備や対策がしっかりできます。それに、先のことを想像するだけでなく、その結果どうしたらいいのかを的確に判断することができますよ。あなたの先読みの能力が磨かれ、自然と決断力や行動力も養われるのです。',
		),
		array( "nx23_014_3", 
'　この2023年は、職場の対人関係では、感情に流されないようにするのが注意点です。ひとりの社会人としてお互いの立場を尊重しながら、有益な対人関係を築いていきましょう。いくら日頃お世話になっているからといって、理不尽な頼みは断り、あくまで対等の立場で接していくべきです。<br><br>　新しく縁が結ばれた仕事関連の人とは、適度な距離を置いて大人の配慮を心掛けた友好的な交流をしていきましょう。相手の出方を見る余裕も出てきます。これまで仲良くしていたグループのメンバーとの付き合いが負担に感じたら、無理せずに一旦距離を置くことも考えてくださいね。',
'　2023年の[%NAME_SELF%]が対人関係で注意したいのは、サポートに回るあまり、自分の業務が疎かになることです。困っている人に頼まれると断れないと感じるかもしれませんね。でも、あなたの仕事を後回しにするのは本末転倒。仕事はチーム全体で進めるものなので、まずは自分の役割をしっかり果たすべきです。<br><br>　その上で余力がある場合に、みんなの役に立つようにしましょう。対人関係では、断り上手を目指すことですよ。頼まれても受けられない場合には、曖昧な返事をしないでください。相手に「手伝ってくれるかも」期待させたのに、それが叶わないとトラブルにつながりかねません。',
'　2023年、[%NAME_SELF%]の職場での対人関係は良好です。これまで苦手意識を抱いていた人とも、仲良く会話を楽しめるようになるでしょう。だからこそ、仕事中の私語には注意してくださいね。たとえ相手から話しかけられても、仕事に関係ない内容なら、さらっと受け流すことですよ。<br><br>　おしゃべりに花が咲くのは休憩時間やランチの時間に限りましょう。もちろん、全く世間話をしないのも不自然ですが、どのくらいなら許されるのかを意識したほうがいいですね。あなたのコミュニケーション能力も高まるタイミングなので、つい話し過ぎないように気をつけるべきです。',
'　この2023年に、[%NAME_SELF%]が対人関係で気をつけたいのは、いつも同じメンバーとばかり付き合わないことです。職場で困ったときに、これまでなら相談しなかった人に、話を聞いてもらうのもいいでしょう。あなたが素直に頼ってみると、思いがけないくらいに親身になってくれるはずですよ。<br><br>　あなたが苦手意識を抱いている人にも、自分から話しかけてみてください。笑顔を絶やさずに、ちょっとした世間話をしてみると、意外に盛り上がるかもしれません。相手の反応が悪くても、最初から本音を出してみれば、お互いに心地よくコミュニケーションをとれます。',
'　2023年に[%NAME_SELF%]が職場の対人関係で注意したいのは、少し緊張感がある間柄を意識することです。自分よりも経験が豊かな人たちとの交流を意識してください。話しかけにくいと思えるような相手でも、あなたから積極的に交流を試みるようにしましょう。<br><br>　あなたにとっては、いつものメンバーと行動をともにするほうが楽だと感じるかもしれません。でも、それだと刺激を受けづらく、なかなか成長する機会を得られないようです。できれば、あなたのためを思って耳の痛いことも言ってくれる人との関係を大切にするといいでしょう。',
'　2023年に[%NAME_SELF%]が職場の対人関係で注意をしたいのは、できるだけ礼儀正しい態度を心掛けることです。目上の人には敬語や丁寧語をきちんと使うようにしましょう。いくら知り合ってから月日が過ぎて親しい仲でも、礼儀を大事にすることで失敗を避けられます。<br><br>　それに、あなたのほうが立場が強い場合や後輩に対しても、感謝の気持ちを忘れないようにしましょう。「いつもありがとうございます」という言葉を日常的に口にすることが大切です。あなたが仕事でお世話になっている人との関係を大事にしていることを態度で示しましょう。',
'　2023年の[%NAME_SELF%]が職場の対人関係で気をつけたいのは、年代が違う人との交流を避けないことです。特に、年下の人とは「話が合わない」と感じていたとしても、お互いに情報交換をするつもりでいると、思いも寄らない新しい発見があるでしょう。<br><br>　あなたが話をする前に、相手の話したいことを聞く姿勢でいることが大事。黙って耳を傾けているうちに、だんだん理解が深まるでしょう。考え方や価値観が違っても、わかり合えるはずですよ。あなたとは仕事の進め方が違うとわかったら、教えてもらうような気持ちでいるといいですよ。',
'　2023年の[%NAME_SELF%]が職場の対人関係で気をつけたいのは、言葉に注意することです。自分の考えをちゃんと理解してもらうためには、「言わなくてもわかってもらえる」とは思わずに、言葉を尽くして意思を伝えるようにしてください。相手の性格や立場に合わせて、言い方や伝え方を変えることも大切です。<br><br>　あなたが黙っていると、誤解されてしまう可能性があります。意思の疎通がうまくいっていないと感じたら、できるだけ早く話をする機会を作ってくださいね。そのままにしておくと、すれ違いが生じて、仕事に影響することにもなりかねません。',
'　2023年に[%NAME_SELF%]が職場の対人関係で注意したいのは、相手の反応をしっかり見てコミュニケーションをとることです。勢いがある時期なので、つい自分の意見を聞いてもらいたいと思い、力説してしまうかもしれません。でも、あなたが前のめりになり過ぎると、うまく伝わらない可能性があります。<br><br>　あなたがどうしても聞いてほしいことがあるのなら、むしろ抑え気味の態度を心掛けてみてくださいね。先に相手の言い分を聞く姿勢を大切です。それから話し合うときは、お互いに時間があるときを選ぶべき。急いでいると話が中途半端になるので、タイミングを見計らいましょう。',
		),
		array( "nx23_014_4", 
'仕事では足元を固めるべき時期。準備ができている場合には、様子見をしながら行動を起こしても大丈夫です。',
'自分の強みや弱みをハッキリさせるべき。得意分野を活かせるのなら転職も可能。独立開業は、無理は禁物です。',
'転職や起業に適したタイミング。対人関係からの恩恵を受けられるので、みんなの助けを借りてみてくださいね。',
'自力だけで頑張り過ぎないこと。優秀なエージェントや信頼のおける同業者の力を上手に借りてみてくださいね。',
'これまでのキャリアを活かせるなら転職は好感触。独立開業は、本業と両立して小規模で始めてみてください。',
'転職や独立の好機到来です。異業種でも意欲次第で大丈夫。独立前には幅広く顧客にあいさつをしましょう。',
'転職や独立のチャンス。考え過ぎないで気軽に進めたほうがうまくいきます。独立は小規模から始めましょう。',
'異業種への転職はとんとん拍子でうまくいきますよ。独立開業は流れに乗ってスムーズに進みそうです。',
'将来有望で条件がいい同業他社への転職の好機到来。独立開業すると軌道に乗る可能性が高まりますよ。',
		),
		array( "nx23_014_5", 
'　2023年は、[%NAME_SELF%]にとって転職や独立開業は、しっかりと準備を進める時期です。これから飛躍をするために基盤を固めるタイミングなので、チャンスが簡単につかめるというわけではありません。でも、すでに転職に向けて十分なリサーチをしている場合には、今のあなたにマッチした再就職先が見つかるはずですよ。<br><br>　独立する場合には、まずは小規模で始めるのがおすすめ。いきなり本業を辞めてスタートしないで、週末起業をしましょう。新規顧客を獲得するために努力をするよりも、すでに見込み客になっている先からオファーを受けるようにしてくださいね。',
'　この2023年は、[%NAME_SELF%]にとっては次のキャリアアップのための準備期間になります。現状よりも条件のいい職場を探そうとしても、すぐには見つからないかもしれませんね。あなたがこれまで築いてきたキャリアを確認して、自分の強みと弱みをハッキリさせておきましょう。<br><br>　すぐにでも転職をしたい場合には、強みを活かせるかどうかで判断してくださいね。その職場で働くあなたを想像して、生き生きとした表情で笑顔になれそうなら心配は無用。自信をもって転職して大丈夫です。独立に関しては、無理はしないこと。見切り発車的に行動を起こしても長続きしません。',
'　この2023年の[%NAME_SELF%]は、転職や開業にも適した時期です。対人関係に恵まれるので、すでに転職を成功させている人から紹介の話が舞い込みそうです。引き抜きという形で、もっと条件のいい職場にスムーズに再就職できる可能性が高まります。今の職場を辞めるときには、できるだけ丁寧に引き継ぎをしてくださいね。<br><br>　独立開業についても、あなたの働きぶりのファンからオファーが期待されます。いきなり本業を辞めてしまうのはおすすめできませんが、様子を見ながら徐々に本格的に独立を考えてみてくださいね。しっかり準備を進めておけば、短期間で軌道に乗りますよ。',
'　2023年、[%NAME_SELF%]が転職や独立開業を考えているのなら、自力で頑張るのはおすすめできません。この年は、周りの人たちに助けてもらいながら、自分の納得できる方向性を探ってみてくださいね。転職ではあなたの実力を評価してくれるエージェントを探してみましょう。<br><br>　独立をするなら、ひとりでいきなり始めるよりも、信頼する人たちと一緒にグループでの起業がおすすめです。しっかりと準備ができていたとしても、同業者と力を合わせたほうがうまくいきますよ。少し長い目で見て、本業も続けながら副業としてスタートさせてみると良さそうです。',
'　2023年、[%NAME_SELF%]はこれまでのキャリアを活かした形の転職はうまくいく可能性が高いでしょう。今の職場の待遇に不満があるのなら、思い切って同業他社で求人があるかどうかを探してみるといいですね。エージェントに仲介してもらうと、自分の実力がどのくらいなのかわかるでしょう。<br><br>　独立についても、今までしっかりと準備をしてきたのなら、無理のない範囲でスタートできます。いきなり事務所を借りたり、多額の設備投資をしたりするのはおすすめできません。あなたがひとりで無理なくできる範囲を把握して、最初は二足のわらじといった形で副業的に始めてみてくださいね。',
'　2023年の[%NAME_SELF%]は抜群の仕事運に恵まれて、転職や独立にも強力な追い風が吹きますよ。未経験の業務でも意欲を評価されて、面接で高評価を得られる可能性が高まります。異業種でもあなたがどうしても就職したいのなら、積極的に行動を起こしてみてくださいね。<br><br>　独立開業を目指して準備をしてきたのなら、小さく起業してみましょう。副業が可能な職場なら、本業に差し障りがないように気をつけてスタートしましょう。あなたに仕事を直接頼みたいという顧客は後を絶たないはずです。しっかりと事前に、広く開業の案内をするのもいいですよ。',
'　この年は、[%NAME_SELF%]に転職や独立のチャンスがやってきます。思い立ったときにすぐに行動を起こしてみると、理想的な転職先が見つかりそうです。じっくり時間をかけて探すよりも、直感に従って気楽に転職サイトに登録しておくといいでしょう。予想外に早く理想的な職場が見つかりますよ。<br><br>　独立にも適した時期です。最初のうちは、副業として無理のない小規模で始めてみてくださいね。定期的に仕事を受注できるようになったら、本業とのバランスを変えるというやり方のほうが無理がありません。先を急がずに、着実に足元を固めるようにすることです。',
'　2023年、[%NAME_SELF%]は転職や独立に適した時期ですよ。これまで未経験の分野でも、思い切って飛び込んでみれば、すぐに慣れて成果を上げられます。あなたが前々からやってみたい仕事があったら、ぜひ転職活動をしてみてくださいね。とんとん拍子で転職先が決まりそうです。<br><br>　独立に向けて準備をしている場合には、自然にチャンスが巡ります。あなたに直接仕事を頼みたい人たちから連絡が相次いだら、流れが来ていると思ってください。受注が安定するまでは、本業と両立しながら副業として始めるほうが無理がありませんよ。',
'　2023年、[%NAME_SELF%]は転職や独立については適した年ですよ。同業他社の中でも将来が有望で条件がいい企業への転職が決まる可能性が高いですね。あなたが選んだ転職先では、周囲の期待以上の働きをして、評価がぐんと上がるでしょう。前から転職を考えているのなら、ぜひ行動を起こしてみてください。<br><br>　独立開業についても、勢いに乗って軌道に乗って業績を上げていけるでしょう。いきなり本業を辞めないで、まずは小規模で独立をしてみること。定期的に顧客から十分な注文を得られるまでは、副業として仕事をしながら一本に絞る時期を決めるべきですよ。',
		),
		array( "nx23_014_6", 
'　[%NAME_SELF%]が過去に積み上げてきた実績について再確認してみてくださいね。思っているよりも、多くのことを成し遂げてきたとわかるはずです。これまでの職歴の中で身につけてきたことをベースにして、あなたの強みを明確にしましょう。<br><br>　「これが得意」と意識するのとしないのでは、仕事のクオリティーに差が出るはずです。あなただけの強みを活かせる業務に積極的に取り組んでみると、周りからも評価が上がります。もしも、自分の強みがわからない場合には、身近な人に聞いてみると教えてくれるはずですよ。',
'　2023年に[%NAME_SELF%]の評価を確実にアップさせるためには、職場ではできるだけ聞き役を心掛けてください。上司や先輩だけでなく、同僚や後輩の意見にじっくりと耳を傾けましょう。自分も言いたいことがあるかもしれませんが、まず人の話を聞くことです。あなたの謙虚で誠実な態度が、有能だという評価につながります。<br><br>　対外的にも良い評判を得られるので、外部の人から褒められることも増えるでしょう。少し時間がかかるかもしれませんが、巡り巡ってあなたの職場での評価が高まりますよ。一緒に働きたい相手だと思われるはずです。',
'　その場の空気を読んで[%NAME_SELF%]にどんなことが求められているかを察してくださいね。可能な限りリクエストに応えるようにすると、みんなの役に立てるポジションを獲得できますよ。あなたが頑張れば頑張っただけの結果が出て、さらに感謝の気持ちも返ってくるのです。<br><br>　もちろん、自分の仕事を疎かにしてまで、人のために動く必要はありません。でも、一度にいくつもの業務を同時進行することも可能なタイミングです。忙しいほうが能率を上げるための工夫ができるので、周りを助けるつもりでいてくださいね。',
'　2023年、[%NAME_SELF%]が今の職場で評価されるためには、協調性を発揮してくださいね。アイデアが冴える時期ですが、ひとりだけ突っ走ってしまわないように注意しましょう。あなたの意見に賛成してくれる人を探しておくべきです。周りの人たちのサポートなしでは、どんなに画期的なプランでもうまく活かせない可能性があります。<br><br>　それに、あなた自身も職場の人たちの助けるようにしてください。自分のアイデアを通すためには、みんなの役に立つポジションを意識することです。良い意味でのギブ＆テイクの関係になるようにすると、あなたの評価はぐんぐん上がりますよ。',
'　今の職場で[%NAME_SELF%]が確実に評価されるには、自分の強みをアピールすることですよ。これまでの仕事で自信がある分野で活躍できるように、段取りを整えてください。いくら職場で求められている役割でも、苦手なことの場合はなかなか評価は得られないでしょう。　<br><br>　あなたが最も楽に、しかも高いクオリティーの仕事ができる部分を見極めてくださいね。もし、どうしても成果が上がらなくて、やる気も出ないのなら、配置換えや職種替えを申し出るのもひとつの方法です。あなたが、のびのびを働ける場を作ることが、満足のできる評価への近道ですよ。',
'　この2023年に、[%NAME_SELF%]が今の環境で評価を得るためには、できるだけ難しいと思う仕事を手掛けてみてくださいね。簡単にできる業務ばかりをしていると、本来の実力が発揮されにくくなってしまいます。あなたにとって少しハードルが高いと感じることをやってみると、それに合わせてスキルも自然と磨かれるのです。<br><br>　夢中で取り組んでいるうちに、いつの間にか満足のできる結果を出せるでしょう。そうすると、さらに上を目指して頑張っていくようになります。気がつくと、あなたは他を寄せつけない存在になっているはずですよ。',
'　[%NAME_SELF%]が今の環境で確実に評価されるには、少し先のキャリアを考えて、自己投資をすることですよ。資格試験の勉強を始めたり、役に立つセミナーを受講したりしてみてくださいね。その成果を職場で活かせるように、自分なりに工夫をしましょう。<br><br>　あなたが努力をしているのを、周りにもしっかりアピールすることが求められます。「こんなことを頑張っています」と聞いてもらうだけでなく、きちんと成果を出していることを知ってもらうようにしましょう。あなたが、前向きな取り組みをしているとわかれば、周りからも尊重されるはずですよ。',
'　[%NAME_SELF%]が今の環境で確実に評価されるためには、これまでのやり方を変えてみることですよ。毎日、決まってしないといけない仕事の手順を見直してみると良さそうです。当たり前のようにしていたことが、実はやらなくてもいいことかもしれません。それに作業の順番を変えてみると、効率が上がるということもありえるでしょう。<br><br>　あなたがチームで進めている仕事があるのなら、ミーティングでは自分の意見をしっかりと伝えることですよ。「もっとこうしたほうがいい」と提案をしてみると、その前向きな姿勢が職場の人たちから評価されます。',
'　[%NAME_SELF%]が今の環境で確実に評価されるには、有言実行を心掛けてくださいね。やると言ったら、先延ばししないで、素早く行動を起こすようにしましょう。口だけの人だと思われないように、できるだけ結果を出すことですよ。やるべきことを後回しにせずに、苦手意識のあることから先に始めてみてください。<br><br>　もちろん、うまくいかないこともあるでしょう。その場合は、職場の人に対して言い訳せずに、できなかったと素直に打ち明けるのもひとつの選択です。あなたが信頼できる人だという印象を抱いてもらえるように、常に誠実な態度をとることを意識してくださいね。',
		),
		array( "nx23_014_7", 
'　2023年の[%NAME_SELF%]は順当に昇給や昇進をしていきます。予想外の大抜擢という派手で目立った人事は期待できないかもしれません。でも、誰もが納得する適切な評価を受けることになるでしょう。あなたの働きぶりはこの年、ちゃんと認められるので心配は無用です。<br><br>　もしも、職場での待遇に不満があるのなら、そのままにしておいてはいけません。できれば、すぐにでも直属の上司に伝えるべきでしょう。ただし、決して感情的にならないように気をつけてください。あなたに正当な理由があって、昇進や昇給を望んでいるのなら、聞き入れてもらえる可能性は高いですよ。',
'　2023年の[%NAME_SELF%]は、昇給や昇進に関しては順調な流れに乗ります。前々から条件の改善を要求していたのなら、予想の範囲で叶うはずです。あなたの評価は決して悪くはありませんので、言うべきことをしっかり言えば、それが受け入れられるでしょう。職場での待遇が不満なら、その理由を伝えるとわかってもらえますよ。<br><br>　あなたが昇進を望めば、責任あるポジションにつくことも夢ではありません。ただし、最初のうちは様子見で、劇的な昇給は期待できないかもしれません。働きぶりによって、段階的に収入がアップしていくはずです。',
'　2023年、[%NAME_SELF%]には昇進や昇給の見込みが十分にありますよ。これまでの働きぶりが認められて、希望の職種に配置換えすることも可能です。それに、予想外に責任あるポジションを打診されるかもしれませんね。引き受けるかどうか少し迷っても、この年は思い切ってチャレンジしてみましょう。<br><br>　その結果、周囲の期待に応えることができるため、臨時ボーナスという形で報われるはずです。あなたは収入面や経済的に満たされるので、やりたいことの幅が広がるようになるのです。',
'　2023年の[%NAME_SELF%]は、一緒に働く人たちから評価が高まり、昇進や昇給が期待されます。予想外の大抜擢という人事はないかもしれませんが、自分が思っているよりもずっと良い待遇を受けられるはずですよ。財運に恵まれ、臨時収入や特別報奨金を得られる可能性があります。<br><br>　ただし、急に手にしたお金をパッと使わないように気をつけてくださいね。仕事に役立つ講座を受けたり、資格試験に合格するための資金にしたりしましょう。あなたが前向きに努力している姿勢は、職場の人の目に留まります。それは、みんなの士気を高める効果もあるのです。',
'　2023年の[%NAME_SELF%]は、仕事での能力を存分に発揮することで、昇給や昇進の可能性が高まります。得意な分野で頑張ってみると、ぐんぐん業績を上げられるでしょう。あなたの働きぶりは、周りの人たちにも良い刺激になります。グループのトップに抜擢されることもありますよ。<br><br>　自信がないと思っても、どうぞ引き受けてみてください。勢いに乗ったあなたなら、問題なくリーダーとしての役割を果たせるでしょう。チームの一員のみんなから慕われて、指導者としての資質が開花していくはずですよ。今まで積み上げてきた努力や頑張りを信じて、前だけを見て道を進んでいってくださいね。',
'　2023年の[%NAME_SELF%]は、昇給や昇進の可能性がありますよ。予想よりも昇給率が高く、驚くかもしれません。あなたが地道に頑張ってきたことは、決して無駄ではないと思うでしょう。職場でのまじめな働きぶりについて、高く評価してくれる人が多くいます。<br><br>　自分よりも役職が高い人から、自分の後任として抜擢を受けることにもなりそうです。急に責任が重い立場になるので、最初は戸惑ってしまうかもしれませんが、信頼できる人に相談してみると、的確なアドバイスをしてもらえますよ。ですから、思い切って引き受けてみてくださいね。',
'　2023年に[%NAME_SELF%]は、昇進や昇給の可能性が高まります。後から考えてみても、「運が良かったな」と思えるような幸運に恵まれて、目覚ましい活躍をするでしょう。職場の人たちは、あなたが華やいだ立場でみんなの注目を集めることを期待するのですよ。<br><br>　職場では目立つポジションに配置されたり、人前で話をする役割を担ったりするかもしれません。あなたの人気は、内外に広がり、外部の人からも引き合いがきますよ。自然と対外的な交渉をする責任範囲が広い仕事を手掛け、あなたの采配で仕事を進めていくことになるのです。',
'　この年、[%NAME_SELF%]は昇進や昇給について、予想外の人事がありそうです。急に辞める人がいたり新しい部署ができたりして、そのポストに抜擢されるかもしれません。責任が重い立場なので、そのオファーを受けるかどうか少し迷うこともありそうですが、自信をもって引き受けてくださいね。<br><br>　この年のあなたなら、周りの人たちも巻き込んで、勢いよく軌道に乗せていきますよ。それに、楽しみながら仕事に取り組めるので、短時間で成果が上がるでしょう。あなたの働きぶりが評価されて、異例の昇給や臨時ボーナスという形で報われますよ。',
'　2023年に[%NAME_SELF%]は、思いがけないくらい昇進したり、昇給したりする可能性が高まりますよ。これまで頑張ってきたことの結果が出るタイミングでもあるのです。コツコツと地道な努力を積み上げてきたことが、一定の形になりますよ。あなたの思い通りにいかなくても、すぐさま次の目標を目指して頑張れるはずです。<br><br>　あなたの切り替えの早さや意欲的な態度が高く評価されます。上司や先輩が、もっと重要な仕事をしてほしいと思うのです。そこで、新しいグループのトップやリーダー的な役割を打診してきそうですよ。自信をもって引き受けてくださいね。',
		),
		array( "nx23_014_8", 
'2023年は体調管理が開運のポイントですよ。あなたの心と体を健やかに整えてくださいね。',
'他人の成功を自分のことのように受け止めること。次は、あなたが成功する番ですよ。',
'職場では笑顔を輝かせるのが開運の秘訣です。仕事を思う存分に楽しむようにしてくださいね。',
'人との出会いが気づかなかった才能を開花させます。多くの人と関わるのが開運の秘訣ですよ。',
'将来について迷いやすくても、それだけ選択肢があるということ。答えはちゃんと出ますよ。',
'あなたが仕事で頑張れるのは、周りのみんなのおかげです。感謝の気持ちを忘れないでくださいね。',
'仕事を楽しみましょう。苦しみながら必死に頑張るよりも、リラックスすることが大切です。',
'変化を楽しんでくださいね。変わりたくないと思うよりも、変化を受け入れるようにしましょう。',
'勢いもパワーもありますから多少の無理はきくとき。全力で仕事に取り組んでくださいね。',
		),
		);
?>