<?php
/**
 * menu_id : un2019_0046
 * 木村藤子 4月運：一人用
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'un2019_0046',
			'contents'			 => 'fujiko_ccs',
			'img_name'			 => 'ccs_fujiko',
			'teller_name'		 => '木村藤子',
			'isp_mid'			 => '52h045',
			'price'				 => '556',
			'discount'			 => '463',
			'design_cd'			 => '5',
			'person'			 => '1',
			'release_date'		 => '20190325',
			'title'				 => '木村藤子の的中鑑定【2019年4月あなたの運命】総合/仕事/財/出会い',
			'caption'			 => '2019年4月、あなたの運命に何か変化は起こる？　仕事、お金関係などについて、木村藤子がひとつひとつ紐解いていきます。あなたを幸せへと導く出会いについてもアドバイスをしていきます。',
            'base_1_title_self'	 => 'あなたの暦字',
            'base_2_title_self'	 => 'あなたの基本性格',
            'base_1_title_other' => 'あの人の暦字',
            'base_2_title_other' => 'あの人の基本性格',
            '1_min_title'		 => '2019年4月、あなたの総合運',
            '2_min_title'		 => '2019年4月、あなたの仕事運',
            '3_min_title'		 => '2019年4月、あなたの財運',
            '4_min_title'		 => '【木村藤子からのメッセージ】あなたを幸せへと導く出会い',
		);

// 小メニューロジック
$logic = '1A';

// Next枠
$next = array( "un2019_0041", "un2019_0042", "un2019_0043", "un2019_0044", "un2019_0045" );

// 一部見せテキスト
$free = array( "un2019_0046_1", 
'　2019年4月の[%NAME_SELF%]さんは、わがままな面が出てきて、孤立してしまいそうです。あなたが周囲へ配慮したつもりでも、裏目に出てしまいそうなので注意してください。懸命に取り組んでいた……',
'　2019年4月の[%NAME_SELF%]さんは、気力体力ともに充実して、さまざまな問題を解決できるでしょう。精神的な負担がなくなり、気持ちも晴れていきます。また、新しい取り組みを始め、これまでとは……',
'　2019年4月は、[%NAME_SELF%]さんがその後飛躍するための重要な時期と言えるでしょう。あなたにとって喜ばしい巡り合わせがあり、幸運に恵まれている事を自覚できそうです。しかし、ここでは前に……',
'　2019年4月の[%NAME_SELF%]さんは、この一年間で最も充実した時間を過ごすでしょう。あなたの努力が評価され、これまでの苦労が報われます。それは単なる幸運でもたらされるものではなく、あなた……',
'　2019年4月の[%NAME_SELF%]さんは、一所懸命に取り組んだ事に充実した成果を残せるでしょう。集中力が高まりますから、ここでする努力は結果として表れ、あなたの成長につながっていきます。あな……',
'　2019年4月は[%NAME_SELF%]さんにとって、希望と不安が入り混じる時期になるでしょう。趣味などに取り組んでいるときには充実感を覚えられますが、本来やるべき仕事や学業などで目立った成果が得……',
'　2019年の4月は、[%NAME_SELF%]さんがまじめに取り組んできた物事について変化がありそうです。あなたのやる気をあげてくれるような、刺激的な事が起こるでしょう。それは、新たな出会いが訪れた……',
'　2019年4月は[%NAME_SELF%]さんにとって、これまで撒いた種を刈り取るような時期になるでしょう。時間と労力をかけて育ててきた果実を手に取り、満足感を覚えられるはずです。逆に言えば終わりを……',
'　2019年4月は、[%NAME_SELF%]さんの胸を膨らませる希望が芽生える月となるでしょう。またはこれまで努力してきた成果が出てくるなど、長く続いた暗いトンネルからようやく抜け出せる兆しが見えま……',
		);


// 結果テキスト
$text = array(
		array( "un2019_0046_1", 
'　2019年4月の[%NAME_SELF%]さんは、わがままな面が出てきて、孤立してしまいそうです。あなたが周囲へ配慮したつもりでも、裏目に出てしまいそうなので注意してください。懸命に取り組んでいた事の成果を他人に求めようとすると、反感を買われます。思うような結果が出なかったとしても、あまり態度には出さないようにして、頑張ってきた過程を皆で労い合いましょう。あなたが努力して身につけた能力や自信は今後に必ず役立ちます。<br><br>　また、このころには少し疲れが出てくるでしょう。頑張りたいと思っても、なかなか体が動いてくれません。しっかりと休息を取っておけば、徐々に明るい見通しを立てられるようになります。',
'　2019年4月の[%NAME_SELF%]さんは、気力体力ともに充実して、さまざまな問題を解決できるでしょう。精神的な負担がなくなり、気持ちも晴れていきます。また、新しい取り組みを始め、これまでとは違った分野で進展が見られるはずです。今までやりたいと思ってきた事や、少しずつ努力してきた事が花開き、成功への道筋が見えてきます。4月にあなたが手にする充実感は、小さなものに思えるかもしれません。ですが、その後の成長につながっていくはずです。これまでに積み重ねてきた成果との相乗効果によって、周りのために役立てられるでしょう。<br><br>　また、若干出費の可能性がありますが、その見返りは得られます。積極的に自分に投資してください。',
'　2019年4月は、[%NAME_SELF%]さんがその後飛躍するための重要な時期と言えるでしょう。あなたにとって喜ばしい巡り合わせがあり、幸運に恵まれている事を自覚できそうです。しかし、ここでは前に出過ぎないよう慎重さが必要とされます。あなたが自分の力を過信してしまうと、柔軟さが失われたり、思わぬ出来事に見舞われたり、余計な労力が課せられてしまうのです。幸運に乗じて攻勢に出るのではなく、謙虚さを心掛けてください。この時期を何事もなく乗り越えられれば、その後の成功につながっていきます。<br><br>　また、あなたがこれまで犠牲にしてきた人間関係があれば、この時期影響が出てくるでしょう。周囲の人への感謝を、忘れないよう心掛けましょう。',
'　2019年4月の[%NAME_SELF%]さんは、この一年間で最も充実した時間を過ごすでしょう。あなたの努力が評価され、これまでの苦労が報われます。それは単なる幸運でもたらされるものではなく、あなたの高尚な精神力によるものですから、周囲からも清々しい祝福を受けられるのです。また、新たな人脈を得るなど、今後の可能性も広がっていくでしょう。<br><br>　4月の後半に入ってくると、充実感から生まれる心地よさにより、精神的に落ち着いてきます。そこで油断をしないよう心掛け、次なる目標に向かってください。成功に浸る時間が長くならないよう注意が必要です。自分に酔い、周りが見えなくならないようにだけ、気をつけましょう。',
'　2019年4月の[%NAME_SELF%]さんは、一所懸命に取り組んだ事に充実した成果を残せるでしょう。集中力が高まりますから、ここでする努力は結果として表れ、あなたの成長につながっていきます。あなたが注意しなければならないのは、常に自分の身の回りを意識する事です。集中力が高まるのはよいのですが、人間関係をおろそかにしてはなりません。自分のペースだけを守ろうとするのではなく、周囲と足並みを揃えるつもりでいましょう。<br><br>　あなたの温かい心が周りに伝わり、心を開いてくれるようになります。特に身近にいる人を大切にするよう心掛けてください。これまであなたを陰で支えてくれていた人には、心からの感謝を伝えましょう。',
'　2019年4月は[%NAME_SELF%]さんにとって、希望と不安が入り混じる時期になるでしょう。趣味などに取り組んでいるときには充実感を覚えられますが、本来やるべき仕事や学業などで目立った成果が得られず、不満が残りそうです。とはいえ、自分の目標を実現する環境は、少しずつ整っていきます。<br><br>　また、あなたに興味を抱いて新たな仲間が集まってきそうです。この時期にある出会いは、その後のあなたの立場を有利にするなど、役立つものですから、大切にしてください。ここでの人間関係はお互いを成長させ、知性を磨き合えるでしょう。あなたに精神的な落ち着きをもたらし、徐々に成果へとつなげていけるようになっていきます。',
'　2019年の4月は、[%NAME_SELF%]さんがまじめに取り組んできた物事について変化がありそうです。あなたのやる気をあげてくれるような、刺激的な事が起こるでしょう。それは、新たな出会いが訪れたり自分の中に可能性を発見したり、重要な仕事を任されたりと、この一年の分岐点となるような出来事です。この時期はあなたにとって大きなチャンスと言えますが、あまり先走らないような注意しましょう。信頼できる協力者と共に行動するように心掛けてください。<br><br>　また、趣味や恋愛はあまり進展がなさそうです。何か問題があっても冷静に対応すれば乗り越えられるでしょう。次へつながるよい流れをつくるよう意識してください。',
'　2019年4月は[%NAME_SELF%]さんにとって、これまで撒いた種を刈り取るような時期になるでしょう。時間と労力をかけて育ててきた果実を手に取り、満足感を覚えられるはずです。逆に言えば終わりを告げる時期とも言え、これから新たな目標に向かう不安や達成感からのむなしさを覚えるでしょう。また、今後の自分の向かうべきところが見えてきそうです。<br><br>　恋愛については相手から一区切りをつけられる可能性もありますから、特に注意が必要かもしれません。思い切った仕掛けを試みて、感情を揺り動かすように心掛けてください。全体的には不調に思える場面が多くなりそうですが、特定の部分では進展が見られますから、とんとんというところです。',
'　2019年4月は、[%NAME_SELF%]さんの胸を膨らませる希望が芽生える月となるでしょう。またはこれまで努力してきた成果が出てくるなど、長く続いた暗いトンネルからようやく抜け出せる兆しが見えます。つらい状況を乗り越え、自身の成長も実感できますが、ここで気を抜かないよう注意してください。せっかく現れてきた、あなたの輝きが失われる結果となり、人を引きつける魅力も半減してしまいます。あなたに学ぼうとする人の信頼を失う結果につながりかねません。<br><br>　ここで幸運を焦らず、じっくりと自分を育てる意識を保てば、有意義なひと月が過ごせるでしょう。体中に活力が満ち、何にでも立ち向かっていける勇気も心に湧いてきます。',
		),
		array( "un2019_0046_2", 
'　2019年4月に控える[%NAME_SELF%]さんの仕事運は、我慢やさらなる努力が強いられるものとなりそうです。気力も若干下がり気味になりますし、少なくともよい出来事ばかりが起こるという事はないでしょう。しかし、これらはあなたの成長につながり、この先の成果に期待ができるとも言えるのです。ここでどれだけ頑張れるかで、一年を通しての仕事の出来具合が変わってくるでしょう。<br><br>　また、困難をどれだけ効率よく乗り越えられるかの、知恵が試されるときでもあります。追い込まれたときに出た発想が、あなたに新しい考え方をもたらしてくれるでしょう。難しい状況でも簡単にはあきらめず、工夫する癖をつけてください。',
'　2019年4月[%NAME_SELF%]さんは、成長が期待できる時期に入るでしょう。上司から新しい仕事を任されたり、新しい才能が見つかったり、未来につながっていく出来事があります。また、これまでの苦労が報われ、新たな展開を見せる可能性もあるでしょう。あなたにとってよい事象が続きますので、期待に胸を膨らませられそうです。<br><br>　この時期に思い浮かんだ発想は、今後の仕事に役立てられます。気付いた事をしっかりと記録し、小さな変化も逃さないようにしましょう。人間関係にも期待ができ、これまでの人付き合いを見直す事になりそうです。意外な発見もありますから、選り好みせずいろいろな人に目を向けましょう。',
'　2019年4月に迎える[%NAME_SELF%]さんの仕事運は、これまでの成長を実感できるものになります。周りからも頼られ、あなたは充実感を得られるでしょう。一方で、あなたに仕事が集中し過ぎる傾向があります。多忙を極め、資格の取得や新しい挑戦など、今後につながる活動ができなくなる可能性がありそうです。<br><br>　この時期の行動は新しい部署への配属や、昇進につながっていきますので、上司に余裕のあるところを見せるようにしましょう。切羽詰まった状態でいると、それがあなたの限界に思われてしまいますので、忙しくてもゆとりのある雰囲気を心掛けてください。すべてを一人でやろうとせず、周りの力を借りるのも手です。',
'　2019年4月、[%NAME_SELF%]さんは仕事の取り組み方が評価され、上司から褒められるなど、その後の出世につながっていく出来事があるでしょう。会社でのあなたの存在が見直され、皆からは羨望の目で見られます。また、新しい肩書きを与えられたり、権限を持たせてもらえたり、目に見える成果も出てくるはずです。そこでのあなたの態度が、横柄なものにならなければ、周りからも慕われてさらなる上昇につながるでしょう。<br><br>　また、昇進のみに目を向けるのではなく、常に周りを気にかけ同僚の仕事を助けるようにすると、あなたの地位はさらにあがっていきます。積極的に他の仕事にもかかわるように心掛けてください。',
'　2019年4月の[%NAME_SELF%]さんは、何事にも積極的に取り組めるような、強い精神力に恵まれます。快活に行動できますので、上司からの印象もよくなるでしょう。あなたが頑張っている場面に運よく上司が遭遇し、その努力を認めてくれるのです。その後のあなたの後ろ盾となるきっかけになるでしょう。<br><br>　その好機をつかむためには、成果ばかりを求めずやるべき事をしっかりと行う事が必要になります。たとえば、上司がいるときだけ頑張ろうとすると、悪いうわさを立てられる原因になりますから注意してください。また、仕事には関係ないと思える事でも、興味を引かれるものに出会ったら積極的にかかわるようにしましょう。',
'　2019年4月、[%NAME_SELF%]さんは仕事において、成果を他人に横取りされてしまうなど低調に感じる事が多いでしょう。仕事としての達成度は高まる時期ですが、あなたにとって感情を損ねる出来事があり、充実感が少なくなります。どこか気の晴れない状況が続き、やる気が削がれるでしょう。しかし、その悔しさをばねにしていけば、その後の飛躍につなげられます。これからやってくる幸運に乗れるはずなのです。<br><br>　あなたの実力は確実に向上していますから、次を見据えてしっかりと地固めをしましょう。ライバルたちが浮かれている様子ならば、あなたにとって差をつけるよい機会ととらえ、さらなる努力を重ねてください。',
'　2019年4月に迎える[%NAME_SELF%]さんの仕事運とは、あまり進展が見られないもどかしいものとなるでしょう。新たな成果が表れる一歩手前の時期であり、豊かな実りを実感できるのはもう少し先になりそうです。停滞を感じさせる雰囲気に、やる気は削がれてしまうでしょう。周りの雰囲気も明るさを感じられませんが、ここで皆の意識が高まるよう快活に振る舞えば、上司に与える印象がよくなっていきます。チームのリーダーに抜擢されるなど、その後の昇進につながるでしょう。<br><br>　4月の後半に入ってくると、仕事も盛況になってきます。時間に余裕があるうちに、勉強したり資格取得の準備をしたり、地道な努力を忘れないよう心掛けましょう。',
'　2019年4月の仕事運は、その後の[%NAME_SELF%]さんに成長をもたらしてくれるものになります。若干試練が多くなりますが、ここで得られる経験は、あなたにかけがえのない財産をもたらしてくれるでしょう。たとえば、客先からの要望や上司からの細かい指摘など、わずらわしい出来事が多くありそうです。しかし、真摯に取り組む姿勢を見せれば、その後のあなたの評価や仕事環境を充実させるきっかけになります。<br><br>　忙しさから手を抜きたくなるかもしれませんが、しっかりと手間をかけて乗り切る気持ちが大切です。あなたの努力は周りがちゃんと見ていますから、この時期は油断せず仕事に集中して取り組みましょう。',
'　2019年4月は、仕事で我慢が強いられそうです。[%NAME_SELF%]さん自身の気力は充実していますが、周囲が追いついてきません。本来の力を発揮できる環境にありませんから、結果に結びつきにくく、低調気味に感じてしまうのです。しかし、あなたの努力は周りの先輩、上司がきちんと見ていますから、来月以降の上昇につなげていけます。<br><br>　周りの不調に巻き込まれそうな雰囲気ですが、気にせず前に進みましょう。そのときの振る舞いによって、次に絶好のチャンスが訪れるかどうかが決まります。地味に思える雑用も、しっかりとこなす事であなたの評価は高まるのです。一年を通して省みたときに、4月にどれだけまめに動けたかが鍵になるでしょう。',
		),
		array( "un2019_0046_3", 
'　2019年4月の[%NAME_SELF%]さんは、臨時収入があるなど小銭の回りがよくなりそうです。ただ、気が大きくなり、収入以上のお金をつかってしまう可能性がありますので、得たお金は貯蓄に回すよう配慮してください。ある程度、貯蓄額の目標を定めておくと、それに向かって自然と収入が得られるなど、お金の巡りもよくなりそうです。<br><br>　さらに金運をあげるためには、できるだけ身の回りの整理整頓を心掛けましょう。仕事などの効率があがり、金運も高めてくれます。上司や目上の人から食事などをおごってもらえたり、おこづかいをもらえたりと、具体的な収入につながる事もあるでしょう。身なりをきちんと整えておくのも効果的です。',
'　2019年の4月、[%NAME_SELF%]さんは思った以上に出費がかさみ、大きなお金をつかってしまいそうです。無駄なお金をつかわないように注意が必要ですが、自分を成長させるための投資なら思い切ってもよいでしょう。口のうまい人の話には簡単に乗らないように、慎重に判断をしてください。一時のひらめきや勢いだけで大事な物事を決めないように、目上の人に意見を仰ぐと心配ないでしょう。<br><br>　金運をあげるためには、これまでどのようなところにお金をかけてきたかを一度振り返ってみるとよいかもしれません。中途半端に終わってしまった趣味や、買いためておいて使用していない物に気付くなど、興味深い発見がありそうです。',
'　2019年の4月の[%NAME_SELF%]さんは、望んだときに臨時収入があったり、欲しい物が安く手に入れられたりと、かなりの幸運に恵まれます。また、今後の収入につながる情報や、自分の能力を発揮できる新しい場所を手に入れるなど、将来的にあなたの経済環境を豊かにする出来事がありそうです。今すぐ大きなお金が手に入るわけではありませんが、明るい見通しが出てきます。<br><br>　金運をさらにあげていくには、人との付き合いを大切にしてください。それ程仲のよくない相手でも、食事などに誘われたら話に乗ってみましょう。これまで知らなかった世界に触れて、新しい発想が湧いてきます。今後の仕事や金運に大きくかかわっていくでしょう。',
'　2019年の4月の[%NAME_SELF%]さんが迎える金運は、以前から欲しかった物が安く手に入るなど、かなり好調になりそうです。浮いたお金を別のところに回したり、貯金したりできますから、あなたの生活も潤ってきます。また、目上の人や先輩から、日常的につかうものをもらえたり、買ってもらえたり、間接的に利益を得られそうです。あまりお金をつかう場面がないので、お得に過ごせるひと月になるでしょう。<br><br>　金運をさらにあげるために必要な事として、周りの人を率いるようなリーダー的な役割を演じるよう心掛けてください。先輩や上司の注目を集め、その後の金運につながります。信頼や地位を得て、大きな収入も期待できるようになるでしょう。',
'　2019年の4月の[%NAME_SELF%]さんは、欲しいと思っていた物が安く手に入るなど、間接的に利益を享受できそうです。あまり積極的に自分から買い物をしないようにしていれば、新品を他人からもらえるなど、ほとんどお金をかけずに必要な物が手に入るでしょう。ひと月を通して、無駄なお金をつかいませんので、貯蓄に回せる金額も増えます。<br><br>　さらに金運をあげていくために、目標の貯金額をある程度決めると、それに向かって頑張る意欲も湧いてくるはずです。その後お金が貯まってくると、どんどんやる気が漲ってくるでしょう。自己鍛錬と思い少しずつ貯金していけば、気付いたときにはまとまった額になっています。',
'　2019年4月の[%NAME_SELF%]さんは、地道な仕事の取り組みが評価されて、将来的に幸運を引き寄せるでしょう。ただ、すぐに収入に結びつくわけではありません。まず、上司や目上の人から直接仕事の依頼をされるなど、あなたの今後の評価につながっていきます。周りから注目されるような派手な仕事ではありませんが、正確にこなす事で、堅実な仕事ぶりを伝えられるでしょう。上司もあなたの仕事への取り組み方を見極めようとしていますから、雑用でも一所懸命にやるべきなのです。<br><br>　細かい仕事を丁寧に取り組む事で、さらにあなたの財運があがっていきます。自分の考えに自信を持って行動し、責任ある振る舞いを心掛ける事によってチャンスがもたらされるでしょう。',
'　2019年4月の[%NAME_SELF%]さんは、身の回りの必需品をなくしたり、買い替えを余儀なくされたりして出費がかさみ、財運は今一つです。少しの気の緩みで、物を壊してしまう可能性もありますから、できるだけ慎重になりましょう。壊れやすい物は手に取らない、ぐらいの心構えが必要かもしれません。特に高価な物には近寄らないでください。お買い物の際にも注意しましょう。<br><br>　金運をあげていくために心掛けておくべき事として、自分の得意分野にさらなる向学心を抱くように留意してください。これまで気がつかなかった事や、忘れかけていた事などを確認できて、実力が向上します。その後の金運の向上につながるでしょう。',
'　2019年4月の[%NAME_SELF%]さんは、仲間や同僚との付き合いや交流の機会が増え、出費が多くなるでしょう。今後の人間関係を考えて重点を置きたいところにだけお金をかけるようにして、無駄な出費が増えないよう注意してください。また、不必要な時間の浪費にもなりかねないので、利益につながらない人付き合いも避けるようにしましょう。<br><br>　一方で、目上の人や上司などからの誘いについては、できるだけ受けた方がよさそうです。年齢差による感覚の違いを目の当たりにする場合もありますが、そのご縁は長い目で見たときに役立つでしょう。社会的な地位のある相手ならなお、その後の財運の向上につながっていきます。',
'　2019年4月に[%NAME_SELF%]さんが注意すべきなのは、目先の利益にとらわれない事です。運気が低調な時期には、目の前にある報酬に固執しがちですが、この月はこれから訪れる実りを待ってじっと我慢する姿勢が大切でしょう。たとえば、前から欲しかった品物がお買いどきに思えても、もう少しすればさらにお得に買い物ができます。<br><br>　金運をあげていくためには、適度に休息を入れて、あまり根を詰めないゆとりが必要です。無我夢中で頑張っているときには、気付かないうちに疲労が蓄積し、表情も暗くなってしまうもの。気持ちの低下から体調を崩し、仕事にも影響を与える可能性があります。規則正しい生活を心掛けてください。',
		),
		array( "un2019_0046_4", 
'　これからの[%NAME_SELF%]さんの人生をより豊かにするために、同僚との付き合い方を変えていく必要があります。最も身近にいる同僚の資質によって、あなたの将来全体が大きく変わっていくでしょう。決して選り好みをしろというわけではないのですが、少なくともあなたの足を引っ張る相手とは付き合わない事が大切です。そして、あなたの夢を尊重し、共に励まし、刺激を与え合える相手が求められます。<br><br>　あなたは人からの影響を受けやすい傾向がありますから、付き合う相手はできるだけ向上心が高く、経験の豊かな年上の人がよいでしょう。社会的な地位や職能を確立した人で謙虚な相手とならなお、よい関係を構築できます。',
'　冒険心の強い[%NAME_SELF%]さんですから、同じようにいつも新しいものに関心を抱く人との付き合いを大切にするとよいでしょう。あなたの精神状態が沈んでいるときでも、新しい情報や物珍しい話題などで前向きにさせてくれるはずです。わくわくした雰囲気に包まれ、あなたにも面白い発想が湧いてくるでしょう。<br><br>　また、常にたくさんの人に囲まれているような人と付き合うようにすると、あなたの積極性がさらに増します。そのような人は話題が豊富ですし、新しい挑戦にも尻込みをしないので、学ぶところが多いのです。あなたが先の取り組みに悩むときも、豊かな発想力によってためになる助言をくれるでしょう。',
'　[%NAME_SELF%]さんは誰からも慕われ、周囲には多くの人が集まってくるでしょう。しかし、それらすべてがあなたに利益をもたらす人ではなく、中には無駄な時間を過ごす要因となる存在もいるようです。特に、独善的な考えを持っていて、あなたに自分の思いを押しつけてくる相手との付き合いは、避けた方がよいでしょう。そのような人は、自分の希望をあなたに押しつけているだけなのです。<br><br>　そして、あなたが大切にすべき人物とは、調子がよいときこそ慎重になるよう忠告をしてくれる相手になります。そういう人はあなたの状況を冷静に見つめて、親身になって相談に乗ってくれ、取り組むべき事を示唆してくれるでしょう。',
'　仕事や学業だけでなく、趣味や遊びに精通している人との付き合いが、[%NAME_SELF%]さんをより成長させてくれるでしょう。あなたには元々人を楽しませる朗らかさがありますから、それをさらに助長するような明るさを持つ人であるなら、より大きな刺激を受けられます。そして、広い視野を持ち、斬新な発想と独特の世界観を持つ相手との付き合いが、あなたの人生をより豊かにするでしょう。<br><br>　そのような人物は、群れて生活するのを快く思っていませんので、一人でいる事が多いものです。一見してとっつきにくく、人付き合いを制限しているような人の方が、あなたと理想的な関係を結べる可能性が高いでしょう。',
'　[%NAME_SELF%]さんは、誰でも受け入れられる広い心を持っています。それゆえに、あなたの善意を利用する人も近寄ってくるようです。お世辞を言って取り入ろうとする人もいますが、その多くはあなたの足を引っ張る存在となり得ます。ですから、甘言をしてくる人物はあまり相手にせずに、むしろ厳しく忠告をしてくれるような関係を大切にしましょう。<br><br>　厳しい言葉を聞かされたときはつらいですが、長い目で見ればあなたを成長させてくれるものです。また、あなた自身もそのような言葉を糧にできる強い精神を持っていますから、自ら成功へとつなげていけます。ただ、自尊心を傷つけないようにだけ注意すれば、その人はあなたを高めてくれるでしょう。',
'　[%NAME_SELF%]さんは人知れず努力をして、裏方に徹するような昔気質なところがあります。本来ならばもっと高い評価を得てもよいのですが、要領よく立ち回る人の陰に隠れて、あまり目立っていないというのが実情でしょう。あなたの控えめな振る舞いは、高い知性を表すものです。そのような才能を外に知らしめてくれる人との付き合いは、あなたをさらに成長させてくれるでしょう。<br><br>　まずは人との付き合いをあまり広げずに、組織の中心的な人とのかかわりに重点を置いてみてください。対等の立場を意識しながら、あなたにとって興味深い内容の会話を心掛けてください。その人も自分の成長のために、あなたを必要としてくれるでしょう。',
'　これから[%NAME_SELF%]さんが幸せに過ごすためには、自分に厳しい人との付き合いを深めていくとよいでしょう。あなたには気楽に付き合える親しみやすい雰囲気がありますが、一方で集団行動になると統率力が鈍くなる傾向があります。大きな仕事をするときに、十分にリーダーシップを発揮できない事がありますので、参謀役として厳格な人を置くとよいでしょう。<br><br>　その人は単独で行動する事が多く、自己鍛錬を中心に活動しています。いつも忙しくしていますから、その人の時間を無駄に邪魔しないようにだけ、注意してください。その人と目標を同じくして切磋琢磨できる環境をつくれば、自然とあなたの元にやってきてくれます。',
'　[%NAME_SELF%]さんをより幸せにしてくれるものとは、寛容で優しい人との出会いでしょう。あなたには独特な感性があり、他人から理解してもらえない事があります。独創的な発想が浮かんでも、他人に奪われてしまったり否定されたりした事があるのではないでしょうか？　その個性こそあなたの成長や幸福につながる鍵なのですが、十分に生かせていないようです。<br><br>　あなたにとても優しくしてくれる人がいたら、のんびりと時間を共有するよう努めてみましょう。時間をいとわずとことん付き合っていれば、その人はより親近感を抱きます。どのような状況でもあなたの立場になって共に考え、惜しまず力を貸してくれるでしょう。',
'　[%NAME_SELF%]さんの人生を豊かにするために、大切なお話をします。あなたは誰とでも対等にお付き合いをし、分け隔てない対応ができる人です。多くの人が周りに集まりますから、それだけ自分の時間を犠牲にする事もあるでしょう。あなたは人に多くを与える位置にいるのですが、実は本当にやるべき事をおざなりにしているとも言えるのです。<br><br>　あなたは気付かぬうちに、さまざまな人から足を引っ張られています。ですから、自分の歩調を尊重し、そんなあなたを見守ってくれる人との付き合いを大切にしてください。地味に思える相手でも、内面には前向きで力強い闘志を秘めています。ここぞというときには力を貸してくれるでしょう。',
		),
		);
?>