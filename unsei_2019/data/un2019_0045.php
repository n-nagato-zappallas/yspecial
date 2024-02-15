<?php
/**
 * menu_id : un2019_0045
 * 細木数子 4月運：一人用
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'un2019_0045',
			'contents'			 => 'hosoki_ccs',
			'img_name'			 => 'ccs_hosoki',
			'teller_name'		 => '細木数子',
			'isp_mid'			 => '52h044',
			'price'				 => '556',
			'discount'			 => '463',
			'design_cd'			 => '5',
			'person'			 => '1',
			'release_date'		 => '20190325',
			'title'				 => '細木数子が占断します【2019年4月の運勢】あなたに起こる出来事は？',
			'caption'			 => '細木数子があなたの運勢を見ていくわよ！　2019年4月、あなたにはどんな出来事が起こる？　人生、仕事、金運、様々な角度からみていくわね。来月も充実して幸せに過ごすことができるよう、あなたへのアドバイスもするわよ。',
            'base_1_title_self'	 => 'あなたの運命星',
            'base_2_title_self'	 => 'あなたの基本性格',
            'base_1_title_other' => 'あの人の運命星',
            'base_2_title_other' => 'あの人の基本性格',
            '1_min_title'		 => '2019年4月、あなたの人生に起こる出来事',
            '2_min_title'		 => '2019年4月、あなたの恋に起こる出来事',
            '3_min_title'		 => '2019年4月、あなたの仕事に起こる出来事',
            '4_min_title'		 => '【細木数子の助言】2019年4月を幸せに過ごすために',
		);

// 小メニューロジック
$logic = 'a1';

// Next枠
$next = array( "un2019_0041", "un2019_0042", "un2019_0043", "un2019_0044", "un2019_0046" );

// 一部見せテキスト
$free = array( "un2019_0045_1", 
'　4月の[%NAME_SELF%]さんは、心も体も疲れてしまうでしょうね。あなたは今、何をしてもうまくいかない苦境の中にいるはずよ。不用意な言動が誤解されて、あなたの説明を誰も聞いてくれないの。相手を……',
'　[%NAME_SELF%]さんはこの4月、いろいろな局面でチャンスと思われる出来事が起こるし、将来の夢も見えてくるはずよ。それまでは何をしても思い通りにならない事ばかりで、早く調子を戻したいと焦って……',
'　4月は[%NAME_SELF%]さんが何をしても今一つで、空回りしがちになるわ。ここのところは何もかも思い通りに進んで、行動範囲や人付き合いも広がり忙しかったでしょうね。でも4月は、そんな目まぐるし……',
'　[%NAME_SELF%]さんはこの4月、新しい事を仕掛けたくて仕方なくなりそうね。初めて会う人も多く、大きく環境の変化する時期よ。それだけに、思い切って飛躍するには絶好の機会なの。以前からやりたか……',
'　4月中に[%NAME_SELF%]さんは大金を稼ぎ出す可能性があるわ。この時期は、あなたが何をしてもうまくいって、願いや目標が達成されやすいの。特に経済的には恵まれて、仕事に限らずあなたの行動がお金……',
'　4月は特にいい事がないけれど、まずまず安定して過ごせるわ。この時期は[%NAME_SELF%]さんの心が疲れていて、精神的なダメージを受けやすいの。何か行動を起こしても、判断力や観察力が鈍っているか……',
'　4月は[%NAME_SELF%]さんが何をしてもうまくいかないし、周りの人との関係も悪化しそうよ。あなたはここのところ、何をしても楽しく順調で、願いや目標が達成される充実感を味わっていたわね。悪い事……',
'　4月は[%NAME_SELF%]さんにとって、いい事のないつらい時期になりそうよ。この時期はあなたの心が疲れていて、精神的なダメージを受けやすいの。何か行動を起こしても、判断力や観察力が鈍っているか……',
'　4月は[%NAME_SELF%]さんが何をしてもうまくいかないし、周りの人との関係も悪化しそうよ。あなたは今、新しい事を始めようと一生懸命でしょうし、将来の目標を見据えて粘り強く取り組んでいるはず……',
'　この4月は、[%NAME_SELF%]さんが思い切って新しい事を始めれば、大きな成功を収められる時期よ。あなたは今年に入って、もう少しで成功しそうなのに、結果を出せず苦しんでいたようね。実際、あなた……',
'　4月は[%NAME_SELF%]さんの周りに、ほとんど変化が見られないわ。目に見えるような発展はないけれど、特に悪い事も起こらないの。魅力的な人との出会いもあるでしょうけど、この時期はあなたがあまり……',
'　この4月は、今後の人生にかかわるような一大事になる可能性があるわ。この時期はあなたの集中力が落ちているし、人を見る目もおかしくなっているの。それなのに、自分は間違っていないと思い込んで、自分の失敗を……',
		);


// 結果テキスト
$text = array(
		array( "un2019_0045_1", 
'　4月の[%NAME_SELF%]さんは、心も体も疲れてしまうでしょうね。あなたは今、何をしてもうまくいかない苦境の中にいるはずよ。不用意な言動が誤解されて、あなたの説明を誰も聞いてくれないの。相手を喜ばせるつもりの言動が、かえってトラブルを招く事も少なくないわ。その上、この時期は体に疲れがたまっているから、さらに身動き取れなくなりそうよ。<br><br>　ただ、心身ともに気力が尽きて、何もする気がなくなるから、うかつな行動で災いを招く恐れが減るかもしれないわ。あなたがどうあがいても、人に迷惑をかけたり自分がけがをしたりするから、よけいな事はしないのが一番よ。この時期はいい事なんてまずないと覚悟して、気を引き締めて慎重に行動してね。',
'　[%NAME_SELF%]さんはこの4月、いろいろな局面でチャンスと思われる出来事が起こるし、将来の夢も見えてくるはずよ。それまでは何をしても思い通りにならない事ばかりで、早く調子を戻したいと焦っていたでしょうね。でも、4月になると少し成果が出てくるし、声をかけられる事も増えてきて、長く続いた悪い事や不調の終わりを感じそうよ。<br><br>　ただ、この時期はあなたの不運がまだまだ続いているし、下手に動くとますます傷口を広げる結果になるの。下心で近づいてくる人がいるし、普通ならすぐ解決する手違いも、大問題に発展するわ。この時期は目標を見据えて、やるべき課題を一つずつ片付けていくべきよ。新しい事を始めるより、懸念を減らすよう心掛けて。',
'　4月は[%NAME_SELF%]さんが何をしても今一つで、空回りしがちになるわ。ここのところは何もかも思い通りに進んで、行動範囲や人付き合いも広がり忙しかったでしょうね。でも4月は、そんな目まぐるしい変化も一段落して、あまり大きな出来事は起こらないわ。それにこの時期は精神的に疲れがたまっていて、正しい判断ができないの。それまでと同じように行動しているのに、思うような結果にならなくて、混乱しがちになるでしょうね。<br><br>　それでも何かしないではいられず、新しい事を始めても、期待する成果を得られないし、かえってお金や信頼を失いかねないの。4月中は重要な判断や決断を避けて、現状維持に努めるべき。そのうちに元気が回復して動き出せるわよ。',
'　[%NAME_SELF%]さんはこの4月、新しい事を仕掛けたくて仕方なくなりそうね。初めて会う人も多く、大きく環境の変化する時期よ。それだけに、思い切って飛躍するには絶好の機会なの。以前からやりたかった事があるなら、この時期に実行するといいわ。あなた本来の実力や魅力を存分に発揮して、できる事が増えていくし、人望も集められるでしょうね。以前に失敗した事も、再挑戦すれば成功するわよ。<br><br>　魅力的な人との出会いも期待できそうね。仕事でも私生活でも、新しい知り合いがあなたにいい影響を与えるの。それに、昔なじみと再会する可能性もあるわ。人付き合いの盛んな時期だから、思いやりや気づかいを大事にすると、ますます発展するわよ。',
'　4月中に[%NAME_SELF%]さんは大金を稼ぎ出す可能性があるわ。この時期は、あなたが何をしてもうまくいって、願いや目標が達成されやすいの。特に経済的には恵まれて、仕事に限らずあなたの行動がお金を生み出すわ。周りに左右されないマイペースな行動と、独特の感性やこだわりも、チャンスを生かす力になるでしょうね。<br><br>　ただ、あまりに忙しくなり過ぎると、身近な人との付き合いがおろそかになりがちよ。もともと社交的ではないようだけど、急用で友だちとの約束をキャンセルする事が増えれば、距離が生じるのも仕方ないわ。お金にならない事を避けるようになって、悪評が立つ恐れもあるわね。忙しくても付き合いを大事にすれば、充実した毎日になるわよ。',
'　4月は特にいい事がないけれど、まずまず安定して過ごせるわ。この時期は[%NAME_SELF%]さんの心が疲れていて、精神的なダメージを受けやすいの。何か行動を起こしても、判断力や観察力が鈍っているから、失敗する可能性が高いわね。何も起こらない事に耐えられなくなって、新しい事を始めれば、無用な災いを招きかねないわ。<br><br>　でも、あなたがこの一ヶ月を静かに過ごすなら、気力を回復できるいい休養期間になるし、気心の知れた人たちと充実した時間を持てるはずよ。この先自分が何をしたいか、何をするべきかも見えてきそう。ただし、どんなに慎重に振る舞っても、予想外の不幸に見舞われる事はあるわ。それに備えるためにも、家族や友だちの存在が必要ね。',
'　4月は[%NAME_SELF%]さんが何をしてもうまくいかないし、周りの人との関係も悪化しそうよ。あなたはここのところ、何をしても楽しく順調で、願いや目標が達成される充実感を味わっていたわね。悪い事が起こると考えず、楽天的な見通しを持って動く事も、行動範囲や人付き合いを広げてチャンスに結びついていたはずよ。<br><br>　だけど、この時期はあなたが判断を誤りがちだし、人を正しく評価できないの。普段ならしない失敗が増えるけど、自分の問題だとは認められなくて、他人の悪意だと思い込むわ。そのせいで人付き合いが苦手になって、孤立しがちになるでしょうね。一人で動けばなおさらダメージが大きくなるから、しっかり他者の意見に耳を傾ける事が大切よ。',
'　4月は[%NAME_SELF%]さんにとって、いい事のないつらい時期になりそうよ。この時期はあなたの心が疲れていて、精神的なダメージを受けやすいの。何か行動を起こしても、判断力や観察力が鈍っているから、失敗する可能性が高いわね。あなたの話に耳を傾け、力になってくれる人も少ないの。息苦しさに耐えられなくなって、新しい事を始めれば、無用な災いを招きかねないわ。<br><br>　でも、あなたがこの一ヶ月を静かに過ごすなら、ダメージがあっても最小限に留められるし、気力を回復できる休養期間になるはずよ。この先自分が何をしたいか、何をするべきかも見えてきそう。ただし、どんなに慎重でも、予想外の不幸に見舞われる事はあるから、心の準備をしておいて。',
'　4月は[%NAME_SELF%]さんが何をしてもうまくいかないし、周りの人との関係も悪化しそうよ。あなたは今、新しい事を始めようと一生懸命でしょうし、将来の目標を見据えて粘り強く取り組んでいるはず。だけど、この時期はあなたが判断を誤りがちだし、物事を正しく評価できないの。<br><br>　普段ならしないようなつまらない失敗が増えるのに加えて、自分のせいではない事まで、あなたが原因だと疑われるの。弁解しても誰も信じてくれなくて、孤立しがちになるでしょうね。あるいは、冷静になれば失敗すると分かるのに、何とかなると思い込んで無謀な試みをする事もあるわ。一人で動けばなおさらダメージが大きくなるから、しっかり他者の意見に耳を傾ける事が大切よ。',
'　この4月は、[%NAME_SELF%]さんが思い切って新しい事を始めれば、大きな成功を収められる時期よ。あなたは今年に入って、もう少しで成功しそうなのに、結果を出せず苦しんでいたようね。実際、あなたが周りをよく見れば、大きな利益を得られるチャンスがあちこちに転がっているわ。それなのに本来の調子が出ず、誰の助けも得られないで、成功から遠ざかっていたの。<br><br>　でも、4月はあなたの大らかさや行動力が力を発揮して、機会を見逃さなくなるの。誤った選択に飛びつく事もあるけれど、何度も挑戦するうちに成功して、大金を手にするわ。環境も大きく変化して、新鮮な気持ちで毎日を送れるでしょうね。行動範囲や人付き合いも広がってお金を生み出すわよ。',
'　4月は[%NAME_SELF%]さんの周りに、ほとんど変化が見られないわ。目に見えるような発展はないけれど、特に悪い事も起こらないの。魅力的な人との出会いもあるでしょうけど、この時期はあなたがあまり積極的になれず、好奇心や意欲が湧いてこないのよ。新しい事にチャレンジするより、慣れ親しんだ場所でいつもの人たちと、静かに過ごしたいでしょうね。<br><br>　それでも、その気になれば成果を得られるような機会は多いから、周囲に促されてつい行動する事もあるはず。その場合、大きな成果は得られないし、ただ疲れて時間とお金を無駄にする事になりそうよ。無理をすればそれなりのダメージを負うから、4月中はのんびり過ごして、問題があれば対処するといいわ。',
'　この4月は、今後の人生にかかわるような一大事になる可能性があるわ。この時期はあなたの集中力が落ちているし、人を見る目もおかしくなっているの。それなのに、自分は間違っていないと思い込んで、自分の失敗を他人のせいだと責めるから、人間関係に悪い影響が出てくるわ。<br><br>　そんなとき、慎重な判断を求められるような出来事が続くの。危険が伴うけど、成功すれば大きな利益や評価を得られて、この先のあなたを支えてくれるようなチャンスもあるでしょうね。でも、あなたが悪い流れを変えようとして取り組めば、かえって災いを招く事になるわ。自力で何とかしたくても、この時期はどうにもならないの。周囲に惑わされず慎重に行動してね。',
		),
		array( "un2019_0045_2", 
'　[%NAME_SELF%]さんがチャンスを生かそうとして行動しても、かえって愛情を失いかねない時期よ。今一人でも出会いは期待しないで。苦し紛れに始めた事で、気になる異性と知り合ったり、恋人や伴侶の意外な一面に気付いたりはしそう。会話が増えるから理解が深まって、親密な時間を過ごしていると感じるかもしれないわね。<br><br>　でも、あなたが浮かれていると、気付かないうちに溝が広がっていくわよ。相手が喜ぶだろうと、一人よがりの善意を押しつけていると、いずれ手ひどいしっぺ返しも食らうでしょうね。別れてしまう可能性も小さくはないわ。この時期は気持ちが通じないから、なるべく自分から動かないようにして。けんかになったらひたすら謝るのが一番よ。',
'　この4月は、愛情面で進展を期待したくなる出来事が多いわね。だけど、その気になって行動してもうまくはいかないわ。この時期は、[%NAME_SELF%]さんの前に気になる異性が現れたり、恋人や伴侶が思わせぶりな態度を取ったりするの。告白やプロポーズも、今ならうまくいくんじゃないかと思うかもしれないわ。<br><br>　ただ、今の時期は大事な人と心が通わなくて、誤解やすれ違いが生じやすくなるの。あなたが相手を信じて行動しても、裏切られて大きな傷を負いかねないわ。この時期は積極的に行動せず、異性と距離を置くと、関係も少しは安定しそう。とはいえ多くは望めないから、しばらくは様子を見守るのよ。関係を前に進めるのはかなり先の事だと思っておいてね。',
'　[%NAME_SELF%]さんが強引に振る舞うと、異性との関係が悪化しやすい時期よ。この4月は、職場やあなたの暮らす場所で、異性との出会いが多くなるわ。気持ちが浮き立って、恋人との関係を次の段階に進めたくなるし、夫婦関係も新鮮さを取り戻したくなるはずよ。<br><br>　だけど、これまで遊びにも仕事にも頑張り続けてきた疲れが、この時期ははっきり体に現れるの。異性と一緒にいても集中力が続かず、会話が途切れたりうわの空になったりしがちよ。相手の話を聞いていないのに、気持ちが先走って行動するから、すれ違いが生じやすくなるの。とはいえ、無理な振る舞いをしなければ大きな問題にはならないわ。デートも静かな場所や自宅で過ごすのがおすすめよ。',
'　恋愛面では、この4月に進展を期待できるわ。この時期の[%NAME_SELF%]さんは望みが叶いやすく、積極的に行動すれば想いの通じる可能性が高いの。以前から気になっている相手がいるなら、思い切ってデートに誘ったり、交際を申し込んだりすれば、受け入れてもらえそうよ。恋人にプロポーズするにも絶好のタイミングだし、夫婦仲もますます円満になるわ。<br><br>　ただ、浮ついた気持ちでいると、不和の種を見逃してしまうかもね。相手の気持ちを確かめずに、喜ぶだろうと決めつけて行動すれば、大げんかを招きかねないわ。特に、それぞれの状況が変化を迎えているときは、コミュニケーションを欠かさないようにね。一緒に楽しむためにお金をつかってもいいわよ。',
'　[%NAME_SELF%]さんが忙しくなり過ぎて、愛情を失う恐れのある時期よ。4月はあなたの感覚や判断力が冴えて成功しやすいし、特にお金に関しては大いに成果を期待できるの。つい仕事や投機に夢中で、大切な人の存在を忘れがちになりそうよ。異性と出会う機会も少なくなるわ。<br><br>　でも、この一年はあなたと異性の関係が、この先どうなっていくか流れの決まる時期なの。あなたがいくら将来のためだと言っても、一緒にいられない時間が長くなれば、心の距離が広がっても無理ないわ。忙しいのは分かるけど、大切な人との暮らしを大切にして。二人で楽しむためなら、お金をつかっても損はないし、あなたも働く張り合いができるわよ。相手もあなたを頼もしく感じるわ。',
'　4月は恋愛面で進展を期待できないわ。この時期は[%NAME_SELF%]さんが恋を求めても、気持ちがついていかないの。異性と出会っても、相手の気持ちに気付かないし、下心を見抜けずに痛い目に会いそうよ。恋人や伴侶との間にも、特別な事は起こらないわ。それなりに安定してはいても、あなたがマンネリに耐えかねて行動すれば、かえって不和の原因になる恐れがあるの。<br><br>　あまり多くを望まず、現状維持で満足すれば、そんなに悪い事はないはずよ。恋人や伴侶との平凡な日々が続くし、片想いの人とも距離は縮まらないけれど、嫌われる事もないわ。もっとも、予期しない出来事で傷つく事はあるかもね。その際は、信頼できる人に相談し、慰めてもらうと立ち直れるわ。',
'　4月に恋愛関係を進めようとしても、成就するどころか破綻しかねないわ。ここしばらくの[%NAME_SELF%]さんは、何をしてもうまくいくし、異性とも楽しく過ごしているようね。自信が高まって、今なら新しい出会いを生かせるし、恋人や伴侶との関係もいい方向に変えられると信じているはずよ。<br><br>　だけど、この時期はチャンスがあっても生かせないの。あなたが相手の話を聞かず、真意を理解しないで行動するようになっているから、心が通じ合わないのも無理ないわ。初対面の異性とはうまく会話できないし、恋人や伴侶には押し付けがましい言動で嫌われてしまいそうよ。4月中はなるべく自分から行動せず、異性と距離を保って付き合うとトラブルを避けられるわ。',
'　4月は恋愛面で進展を期待できないわ。この時期は[%NAME_SELF%]さんが恋を求めても、気持ちがついていかないの。異性と出会っても、相手の気持ちに気付かないし、下心を見抜けずに痛い目に会いそうよ。恋人や伴侶との間にも、特別な事は起こらないわ。それどころか、ささいな事での言い争いが増えて、あなたの言い分を聞いてくれないの。あなたが何とかしようと行動すれば、かえって不和が深刻になる恐れがあるわ。<br><br>　多くを望まず現状維持で満足すれば、悪いなりに安定した状態になるはずよ。恋人や伴侶との雰囲気は悪いし、片想いの人とも距離は縮まらないけれど、これ以上嫌われる事もないわ。もっとも、予期しない災難もありそうだから覚悟しておいてね。',
'　4月に[%NAME_SELF%]さんは、恋愛関係でひどく傷つく恐れがあるわ。自分を信じて気持ちを伝えればうまくいくと、[%NAME_SELF%]さんは今思っているようね。ここのところ、心惹かれる異性と出会ったり、恋人や伴侶とも親密になってきたりしているはずよ。自信がついた分だけ、少し強気になっているかもしれないわね。<br><br>　だけど、4月には落とし穴が待ち受けているの。うまくいきそうだと思い込んで行動すれば、思いがけない結果に終わりそう。あなたが受け入れられると信じて告白や求婚をしても、そんなつもりじゃなかったと断られてしまうわ。相手はその気でも、タイミングや言い方が悪いからこじれるの。4月中は少し様子を見て、5月になってから近づくといいわよ。',
'　4月は、[%NAME_SELF%]さんが忙し過ぎて大切な人を失う恐れがあるわ。この時期は、あなたが何をしてもお金を生み出しやすいから、仕事や投機を最優先にしがちなの。特に、4月は新しい事をたくさん始めるから、時間がどれだけあっても足りないでしょうね。それに、結婚や出産、転居などを考えれば、今一緒に過ごす時間を犠牲にしても稼ごうとするはずよ。<br><br>　でも、あなたが相手の事を思っていても、会えない時間が長くなれば、心の距離がどんどん広がっていくわ。気がつくと取り返しのつかない事になりかねないの。この時期は少しくらい休んだって、十分過ぎる収入があるから、恋人や伴侶と一緒に過ごす時間をつくってあげて。お金がある事の幸せも実感できるわよ。',
'　4月は異性との関係が安定しているけれど、新しい恋を求めるのはあまり期待できないわね。異性との出会いがない事はないし、魅力的な相手もいるはずよ。ただ、この時期は素敵な相手と付き合いたい気持ちがあるものの、自分からアプローチする気になれないの。逆に、相手が積極的に近づいてきても、あなたがその気にならずに成就しない事が多いわ。それでも、仕事や趣味などが充実しているから、欲求不満にはならないの。<br><br>　恋人や夫婦との関係も、波風は立たないでしょうね。多少けんかする事はあっても、仲直りするまでもなく忘れてしまうの。ただ、プロポーズなど思い切った行動をするのには向かないわ。先は長いと思ってじっくりと心を通わせてね。',
'　恋愛面では、4月中に行動を起こすと、何かと問題が多くなるわ。あなたは自信に満ちた言動やスマートな物腰で、異性の人気を集めていそうだし、モテる自信もあるはずよ。でも、この時期のあなたはものの見方が歪みがちで、間違った判断を繰り返しがちなの。それなのに、ずれた価値観を異性に押し付けようとするから、あなたに興味を持っていた人も幻滅して離れていくのよ。<br><br>　ただ、将来の伴侶との出会いや、プロポーズのチャンスや、夫婦関係の節目となる出来事も、この時期にありそうなの。その際にあなたが判断を間違う可能性も小さくないわ。決断を見送っても機会が失われるわけではないから、相手との縁を信じ、現状維持で我慢してね。',
		),
		array( "un2019_0045_3", 
'　4月の[%NAME_SELF%]さんは、仕事の不調から抜け出そうとして、うかつに動けば大きなダメージを受けるわ。職場の人間関係や業務内容のつらさは変わらないけれど、うまくいかない事に慣れて淡々と取り組むようになるの。それでも、有望そうな顧客や大きな案件が巡ってくると、今チャレンジしたらうまくいくかもと思ってしまうわね。<br><br>　でも、この時期のあなたは本来の実力を発揮できないし、運にも恵まれないの。残業や休日出勤、徹夜なども無理が効かずにすぐ疲れてしまうし、ミスが増えるだけでなく体を壊しかねないわ。自分の精神力や体力を過信していると、深刻な痛手を負うでしょうね。この時期は誰も頼りにならないから、じっと我慢するしかないわ。',
'　この時期は仕事でチャンスと思える出来事が続くけど、動いても成果は得られないわ。4月には新しい業務が始まったり、部署の異動があったりして、[%NAME_SELF%]さんの環境が大きく変わる可能性があるの。今なら何かできるんじゃないかと、期待する事もあるでしょうね。<br><br>　ただし、この時期はなるべく受け身で行動する方が無難よ。あなたから仕事を引き受けたり、企画を出したりすれば、失敗して責任を問われる危険が大きいの。金銭的に損失を出し、生活に影響する場合もあるわ。難しい割に見返りの少ない仕事をやらざるを得ない事もあるけれど、辛抱して乗り切って。つらい時期の目立たない頑張りも、時間が経てば評価や信頼を得て、後の飛躍につながるわよ。',
'　この4月は、[%NAME_SELF%]さんの仕事が少し停滞しそうよ。ここしばらくのあなたは将来の目標が見えてきて、一生懸命に働いてきたのでしょうね。おかげで成長が著しかったはずよ。だけど、その疲れが心に影を落として、少し調子がおかしくなってくるころなの。根を詰めて作業していてもすぐに疲れるし、注意力が散漫になって、いつもならしないような失敗をするわ。周囲にも心配されそうね。<br><br>　だけど、全体的には新しい企画や事業がスタートしたり、職場の異動や転職、独立など、環境が変わったりしやすい状況が続いているの。4月に入るとその勢いが弱まってくるけれど、心と身体が休めと言っているのよ。一ヶ月くらいのんびり過ごして英気を養うといいわ。',
'　4月は[%NAME_SELF%]さんが仕事で目覚ましい活躍を見せるわよ。持ち前の直感やセンスが冴えて、あなたの企画が大きな成功を収めるわ。やりたい事に伸び伸び取り組めば自然に発展して、4月中に大きな成果をあげそうよ。あなたの仕事に大きな影響を与える人との出会いも期待できるわ。<br><br>　だけど、足元が固まらないうちに派手な言動をすると、しっぺ返しを食らう恐れもあるの。あなたを支持してくれていた人が手のひらを返したり、経営状態など環境が急変したりして、うまくいかなくなる事もあるわ。いろいろな試みをして可能性を広げるだけでなく、着実に利益を見込める分野や、信頼できる人とのつながりを大切にして。多少の苦労なら成長のきっかけになるわ。',
'　この4月は、[%NAME_SELF%]さんの仕事が大きく発展しそうよ。あなたは将来の目標が見えてきて、一生懸命に働いてきたのでしょうね。おかげで成長が著しかったはずよ。その頑張りがチャンスを呼び込んで、何をしても好調な時期を迎えるわ。大きな利益をあげて評価され、昇給や昇進も期待できるわよ。何気ない思いつきもヒットにつながって、ますます収入が増えていくの。<br><br>　ただし、お金を稼げる仕事ばかりに目を向けていれば、本当にやりたい事を見失う恐れもあるわ。人付き合いの悪さも仕事に響きそうね。それでも、あなたが自分の感性やこだわりに従って行動すれば、天職に出会える可能性があるの。この時期に稼いだお金も、将来のための資金になるわよ。',
'　[%NAME_SELF%]さんが仕事で成果をあげようとしても、4月中は思うようにならないわ。この時期は、人事異動や新規事業など、あなたの周りであわただしい動きがあるでしょうね。そんな変化の波に乗って、新しい仕事で力を見せたり、独立や転職を考えたりしたくなりそうよ。<br><br>　だけど、この時期はあなたが疲れていて、本来の実力を発揮できないの。こんなはずじゃなかったと焦るほど無用なミスが増えて、信頼を失う恐れもあるわよ。それに、あなたは前の月に十分な働きをしているから、4月中は大きな動きを避けて、最小限の仕事を片付けていくのが一番よ。無理な残業や休日出勤は体を壊すだけだから、親しい友だちや恋人、家族と一緒にのんびり過ごしてね。',
'　仕事の面で、この4月は大きな成果や発展を望めないでしょうね。状況にも特に変化がなく、動き出したくてもきっかけをつかめないの。それに、あなたも精神的に疲れがちだから、正しい判断ができず状況を見誤りやすいわ。それでも停滞を打ち破ろうとして、企画を立てて新しい事業を始めても、成果が得られないどころか損失を出しそうよ。転職や独立、起業もこの時期は避ける方がいいわ。<br><br>　そんな時期だから無理をせず、手持ちの仕事を片付けていくだけで十分よ。しばらくはよけいなトラブルを招かないよう、自分から動いたり責任を引き受けたりするのを避けて、これからの計画でも立てておくといいわ。数ヶ月先にはチャンスが待っているはずよ。',
'　この4月は、[%NAME_SELF%]さんがどんなに頑張っても、思うような仕事はできないの。今はあなたの心が疲れていて、正しい判断ができないし、集中も途切れがちで失敗が多くなるわ。それにこの時期は、あなたが何をしてもうまくいかないし、味方も得られないの。身に覚えのない失敗の責任を押し付けられる恐れもあるわ。<br><br>　仕事や職場の人間関係に行き詰まって、転職を考える事もあるでしょうね。だけど、環境が変わってもあなたの調子は回復しないし、同じような問題が起こるでしょうね。この時期は新しい試みや目立つ行動を避けて、おとなしくしているのが無難よ。資格取得のための勉強など、一人でできる事に集中すれば、つらい時間も早く過ぎていくわ。',
'　4月は[%NAME_SELF%]さんの仕事に問題が起きて、新しく始めた事も不調が続くわ。あなたは今、就職や転職、独立など、仕事の環境を大きく変えようとしているわね。あるいはもう実行しているかもしれないけれど、なかなか思うようにはなっていないはず。この時期も、そんなあなたの不運が続いて、思わぬ災いにも見舞われるわ。<br><br>　特に共同作業では、意志がうまく通わなくて、大失敗する恐れがあるの。個人事業の場合でも、発注者や顧客と思惑の違いが生じて、この先の仕事にも支障が出てきそうよ。その原因は、あなたの見通しの甘さや判断ミスにあるわ。信じるべきでない相手を信じたり、見かけだけのチャンスに乗ったりしないよう、慎重な行動が求められる時期よ。',
'　[%NAME_SELF%]さんはこの4月、新しい仕事に取り組んで、大きな利益を得られるわ。この時期は、あなたの行動力や粘り強さが功を奏して、新たな顧客や販路を開拓したり、異なる業種の人と交流したりする事が増えるの。その結果、多くのチャンスを得て、収益も大いに高まるわ。あなたの給料もあがるし、個人営業ならさらに大金が入ってくるわよ。個人的な付き合いが仕事につながる事も多いわ。<br><br>　ただ、自分の判断にこだわり過ぎて、より大きな成果を生む仕事を見逃す恐れもないとは言えないの。それに、お金に汚いと思われて、仕事に響く事もあり得るわ。あなたが楽しいと思える仕事や、人に求められる仕事をすれば、ますますお金が入ってくるはずよ。',
'　4月の[%NAME_SELF%]さんの仕事は、目覚ましい成果こそないけれど、おおむね順調だと言えそうよ。大きな障害になるような事はまず起こらないし、業績もわずかながら伸びるかもしれないわね。ただし、特筆するような事も起こらないから、あなたが評価され出世するような事は期待できないの。<br><br>　とはいえ、あなたが気を配らなくても、周りの人がしっかり動いてくれるから、気楽に過ごせる時期よ。思い切って休みを取っても、これまでの業績が評価されているから、何の問題もないわ。仕事の事を忘れてゆっくり過ごし、遊びや趣味に没頭するうちに、新しいアイデアや意欲も湧いてくるはず。ただしそれを仕事に生かすのは、だいぶ先の事になりそうよ。',
'　[%NAME_SELF%]さんの仕事人生にかかわるような決断は、4月中は避ける方がいいわよ。簡単にできると思っている作業でミスを連発するし、いつもなら受け入れられるはずの意見も否定されがちになるわ。自分でも気付かないうちに、あなたの調子が落ちているのね。それなのに自信たっぷりな振る舞いをするから、周囲の評価も下がるし、あなたは意固地になって孤立するの。<br><br>　そんなときに、起死回生を狙って新企画をゴリ押ししたり、職場を飛び出して転職や独立を企てたりしても、立ち直れないような結果に終わるわよ。この時期は自力で解決しようとせず、人に頭を下げて助けてもらうといいわ。あなたの言い分にも耳を傾けて、役に立つ助言をしてくれそうよ。',
		),
		array( "un2019_0045_4", 
'　この4月を幸せに過ごすには、趣味でも勉強でも自分一人でできる事に集中するといいわ。今の[%NAME_SELF%]さんは、何もかもうまくいかず、味方になってくれる人もいなくて、つらい思いをしているわね。それだけに、周りのちょっとした変化も新鮮に見えて、新しい仕事や遊び、恋に救いを求めたくなるんじゃないかしら。<br><br>　でも、あなたの気付かないところで、不運の種は育っているの。気楽に取り組んだ仕事が失敗して、関係各所に迷惑をかけたり、ささいな行き違いで友情や愛を失ったりする恐れがあるわ。何かと勘違いや誤解を招きやすい時期だから、うまくいっていると思っても油断は禁物。新しい事や人とのかかわりはなるべく避け、自分の時間を充実させてね。',
'　将来の目標をしっかりと立てて、計画的に取り組むと、[%NAME_SELF%]さんはこの4月を幸せに過ごせるわ。この時期はあなたにとって、追い風が吹いているとは言いにくいの。意欲的に取り組んでもうまくいかず、失望が大きくなりやすいし、人を信じても裏切られるわ。あなたが抗議しても、一人合点で先走っただけだと片付けられるでしょうね。<br><br>　この時期は将来の準備のつもりで、地道に取り組むのが一番よ。無理に新しい試みをしようとしないで、今取り組んでいる事をマイペースで続けるの。すぐには成果が出ないけど、いずれ調子が戻ってきたときに、あなたを支える基盤になるはずよ。あまり思いつめないで、一人でゆっくり過ごすといい休養期間になるわ。',
'　この4月を幸せに過ごしたいなら、[%NAME_SELF%]さんの身近な生活を楽しむといいわ。あなたは深く考えず、自由気ままに行動したいし、その方が仕事も恋もうまくいきやすいのね。職場や仕事の内容、付き合う人や趣味なども変化して、何をしても新鮮だったはず。でもこの時期は、そんな勢いも少し落ち着いて、気持ちに体がついていけなくなるの。好奇心や意欲は相変わらず強いのに、すぐに疲れてしまうのね。<br><br>　そんな状態で仕事や遊びをしてもうまくいかないし楽しくもないはずよ。4月中は、新しい事にチャレンジしたり、初めての場所に出かけたりするのを少し控えて。重大な決断は避け、近くのカフェで慣れ親しんだ人と、のんびりおしゃべりでも楽しんでね。',
'　[%NAME_SELF%]さんが幸せに4月を過ごしたいなら、思い通りに行動するだけでなく、周囲との関係を大切に育てるといいわ。あなたは成長を続けていて、好奇心や直感に従って行動してもうまくいきやすいの。それに、この時期は、あなたの周囲が大きく変化して、仕事も恋も新しい事が始まるわ。あなたは夢中になっていろいろな事を試し、可能性を広げるでしょうね。<br><br>　ただ、4月中は思わぬ大失敗で非難を浴びる恐れがあるわ。そんなときは周りをよく見て、どう思われているのか意識してみるの。友だち同士の気楽な場で、これからやりたい事や、今の自分について率直に質問するといいわ。聞かれた人は正直に答えてくれるから、その意見や助言を参考にしてね。',
'　無理をせずマイペースで行動すれば、[%NAME_SELF%]さんは幸せな4月を過ごせるわ。あなたは本来、必要以上に働いたり、無茶な遊びをしたりはしない人ね。でもこの時期は、大儲けできるチャンスに恵まれて、手軽にお金を稼げる仕事や投機にのめり込みやすいのね。その反面、将来のための基礎固めや、人付き合いを後回しにしがちなの。それに、働き詰めでいればさすがに疲れてしまうわよ。<br><br>　この時期は、必要なだけのお金が自然に入ってくるから、あまり無理をする必要はないわ。儲かる仕事よりも、本当にやりたい事を優先して行動すれば、かえって高い評価や収入につながるの。友だちや家族、恋人と過ごす時間も、あなたの生きる力になるはずよ。',
'　この4月は、[%NAME_SELF%]さんが周囲の変化に惑わされなければ、幸せな毎日を送れるわよ。この時期は、職場でもあなたの暮らす場所でも、人の入れ替わりや場所の移動など、目まぐるしく移り変わっていくわ。そんな状況に心を動かされて、思い切った変革を試みたくもなるでしょうね。<br><br>　だけど、この時期はあなたが焦っても、心も体も思い通りにはならないの。初対面の人とうまく話せずに悪印象を与えたり、未経験の仕事や遊びに手を出して失敗したりするわ。4月中は、周りがどんなに変わっても、あなたのペースを保って行動するように心掛けて。時間のかかる仕事や趣味に取り組み、身近な場所で楽しみを見つけると、この一ヶ月を有意義に過ごせるわ。',
'　4月を[%NAME_SELF%]さんが幸せに過ごしたいなら、周りの人を信頼し、悩みを打ち明けるといいわ。あなたはこの数ヶ月、自分のやりたい事が面白いように実現して、仕事も恋愛も好調な日々が続いていたわね。でもこの時期は、そんな好調にも陰りが生じるの。自分でも気付かないうちに、人や物事を見る目が歪んで、間違った判断で行動しがちになるわ。それなのに自分の非を認めないから、人間関係が険悪になるし、大事な人とも距離ができてしまうのよ。<br><br>　この時期に何か悪い事があれば、まずは自分の言動を反省してみるの。冷静になればあなたに問題があったと分かるはず。迷惑をかけた人に謝って、どうすればいいか相談すれば、もっと親密な関係になれるわよ。',
'　[%NAME_SELF%]さんが体をしっかり休めて、一人の時間を楽しめば、この4月は幸せに過ごせるわ。[%NAME_SELF%]さんはこの時期、精神的な疲労が募って、物事を正しく見極められないの。前向きに行動したくても、間違った方向に努力すれば失敗するのは当然よ。周囲に迷惑をかけて孤立し、一人で挽回しようとしては、よけいに傷を深くするの。<br><br>　そんな事態に備えるためにも、あなたは無理をせず、休養して調子を整える方がいいわよ。今はあなたが信頼を失い、友だちや家族、恋人とも疎遠になっているでしょうね。それでも行きつけのお店や自宅でくつろげば、心の安らぎを得られるはず。普段読めない分厚い本と向き合い、趣味や勉強に集中すれば、充実した時期になるわ。',
'　[%NAME_SELF%]さんが謙虚な気持ちで人の話を聞けるなら、この4月は幸せに過ごせるわ。この時期は、現状に満足したくないあなたの気持ちとは裏腹に、前に進めないどころか後退せざるを得ないの。周りにチャンスは少なくないはずなのに、取り組んでみると思うような結果にならないのよね。調子が上向いていると思いたいけれど、実際にはまだまだ不調だし、不運から抜け出せていないのよ。<br><br>　そんな事態を避けるには、自分の状態を客観的に見つめる必要があるわ。うまくいかないのを人のせいにしないで、自分がおかしくなっていると認めれば、これ以上悪くなる事はないはず。あなたが周囲に助言を求めれば、喜んで力になってくれるわ。一人で悩まないようにね。',
'　4月を[%NAME_SELF%]さんが幸せに過ごすには、自分の考え方ややり方にとらわれず、他者に心を開くといいわ。この時期は、あなたの行動が大きな利益を生み出して、夢の実現に近づくの。経験のない事にも思い切って取り組むとお金につながりやすいから、あなたは夢中で働くし、投機にも熱くなるでしょうね。<br><br>　でも、仕事が忙しいからと誘いを断ったり、家族と過ごす時間がなくなったりすれば、あなたの周りからどんどん人がいなくなりそう。それに、うまくいっているからといって他人の意見を拒んでいれば、お金があっても孤独を埋められなくなるわ。忙しいときこそ、大切な人と過ごす時間を大事にして。あなたは心を許せる人たちと笑い合う幸せを味わえるわ。',
'　4月を[%NAME_SELF%]さんが幸せに過ごすには、仕事や勉強よりも遊びや趣味に時間をつかうといいわ。あなたは自立心や向上心が強いから、現状に留まったまま何もしないではいられないでしょうね。何か以前とは違う事を試したいし、成長を目指したいはずよ。でもこの時期は、無理に動いても成果を得られないの。強引に行動すれば、あなたの徒労感ばかりが募るし、落とし穴にはまる恐れもあるわ。<br><br>　あなたはもう十分に働いたし、しばらくはのんびり暮らせるくらいのお金もあるはず。だったら、この4月は少しくらい怠けてもバチは当たらないわよ。趣味やスポーツ、旅行など、興味のある事をするといいわ。ただし、その道を極めようなんて思わないで気軽にね。',
'　[%NAME_SELF%]さんが謙虚になって周囲と親しく付き合えば、この4月を幸せに過ごせるわ。あなたは自分の思うように行動していれば、人が周りに集まってくると思っていそうね。一人でも生きていける自信があるから、人目を気にせず行動するの。でもこの時期は、本来の魅力や実力を発揮しているとは言えないわ。むしろ、あなたの強い信念が裏目に出て、間違った主張をあらためる事ができず、皆と対立しがちなの。<br><br>　この時期のあなたは、一人では何もできないと思った方がいいわ。誰でも間違う事があると認めれば、傲慢な言動がなくなるし、人の失敗にも寛容になれるはず。周囲との付き合いや協力関係も円満になって、今後の人生にいい影響があるはずよ。',
		),
		);
?>