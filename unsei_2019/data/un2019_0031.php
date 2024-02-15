<?php
/**
 * menu_id : un2019_0031
 * 御射山令元 2月運：一人用
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'un2019_0031',
			'contents'			 => 'zerogaku_zap',
			'img_name'			 => 'zap_zerogaku',
			'teller_name'		 => '御射山令元',
			'isp_mid'			 => '52h030',
			'price'				 => '556',
			'discount'			 => '463',
			'design_cd'			 => '5',
			'person'			 => '1',
			'release_date'		 => '20190128',
			'title' => '0学占い御射山令元が徹底鑑定【2019年2月の運命】総合/仕事/恋愛',
			'caption'			 => '0学会会長御射山令元があなたの2019年2月の運勢を占います！　恋愛運や仕事運はどうなるのか？　総合的な運勢も0学占いで詳細にお伝えします！',
            'base_1_title_self'	 => 'あなたの支配星',
            'base_2_title_self'	 => 'あなたの基本性格',
            'base_1_title_other' => 'あの人の支配星',
            'base_2_title_other' => 'あの人の基本性格',
			'1_min_title' => '2019年2月～あなたの総合運',
			'2_min_title' => '2019年2月～あなたの仕事運',
			'3_min_title' => '2019年2月～あなたの恋愛運',
			'4_min_title' => '2019年2月～0学占い御射山令元からあなたへのメッセージ',
		);

// 小メニューロジック
$logic = 'b1';

// Next枠
$next = array( "un2019_0029", "un2019_0030", "un2019_0032", "un2019_0033", "un2019_0034" );

// 一部見せテキスト
$free = array( "un2019_0031_1", 
'　この月は、運気が停滞しているので大きな動きは起こさない方が賢明です。季節に例えると、冬の時期であり、全ての動きが止まります。<br><br>　こういったときは、新しい物事をスタートさせたり、変化を……',
'　運気が上向きに転じる月です。新しい物事に取りかかるための準備を始めるのに適しています。とはいえ、実際に行動を起こすにはエネルギーが不足している状態です。<br><br>　どのように動いたら一番いい……',
'　良好な運気の月です。流れに勢いがあるので、やりたいことに挑戦するといいでしょう。失敗もひとつの経験だと割り切って、積極的に行動してください。<br><br>　万が一、間違っていたとしても、やり直しが……',
'　今年初めからやりはじめたことがあるとしたら、そこに力を注ぐことで良運が巡ってきます。新しいことにチャレンジするのではなく、これまでに手がけていること、見つけたチャンスを伸ばしていく月となります。……',
'　この月の運気は良好です。悩みを抱えているとしたら、この月中に問題は解決するでしょう。周りからのサポートで変化が起きるのではなく、[%NAME_SELF%]さん自身の気持ちや行動が変わることでよい流れが……',
'　この月は、少し注意が必要な月となります。これまで好調に進んでいた物事が突然停滞し、ストップがかかるといった流れもあります。<br><br>　全体的な流れから見ると、運気は上昇中なのですが、運気に疲れ……',
'　この月、[%NAME_SELF%]さんの運気は良好です。全ての物事が順調で、思い通りに進んでいくといっても過言ではありません。悩みの種となっていたことが消え去り、問題は解決に向かいます。……',
'　気持ちが浮き立ち、地に足がつかない月となります。気持ちの面で余裕が持てるのはいいことなのですが、調子に乗ってしまうと注意力が散漫になりがちです。<br><br>　気を引き締めて、物事に対して真摯に……',
'　この月は、再スタートを切るのに最適な時期となります。過去にやっていたけれど、途中で断念して止めてしまったこと。停滞したまま手を付けずにいることなど、気にかかっていることに再度取り組んでみてください。……',
'　この月は、これまで努力してきた人には嬉しい知らせが届くときです。特に仕事や金銭に関する運気が良好で、頑張ったぶんの成果と評価が得られるでしょう。<br><br>　やればやっただけ、手に入れることが……',
'　この月は、[%NAME_SELF%]さんの努力が認められ、周囲から称賛されるときとなります。仕事、人間関係、趣味など、力を注いできた物事の結果が出ます。<br><br>　あなたがどれほど頑張ってきたかに……',
'　この月は運気の流れが下降するため、物事が思い通りにいかなくなるでしょう。季節に例えると、冬の時期となる運勢です。<br><br>　順調だった仕事が突然ストップしたり、信じていた人に裏切られたり……',
		);



// 結果テキスト
$text = array(
		array( "un2019_0031_1", 
'　この月は、運気が停滞しているので大きな動きは起こさない方が賢明です。季節に例えると、冬の時期であり、全ての動きが止まります。<br><br>　こういったときは、新しい物事をスタートさせたり、変化を起こそうとしたりすると、うまくいかないばかりか、問題を抱えてしまいます。春の訪れを待つ植物をみならって、静かにじっと耐えてください。冬の次は春が来ます。芽吹きの時期に向けて、力を温存するといいでしょう。<br><br>　自らが発信するのではなく、外部の流れに合わせ、協力することに意識を向けてください。つまり、川の流れに身を委ねるような感じです。状況がよくないと感じたときは、何とかしようとするのではなく、流れが変わるまで静かに待つことが大切です。',
'　運気が上向きに転じる月です。新しい物事に取りかかるための準備を始めるのに適しています。とはいえ、実際に行動を起こすにはエネルギーが不足している状態です。<br><br>　どのように動いたら一番いいのか、情報を収集して計画を練るように。一歩前進したとしても、不具合が見つかり一歩後退する。なかなか前に進まず、イライラするときもあると思いますが、着実性が求められていると思ってください。ダメなものをダメだと理解して、断ち切ることが大切です。<br><br>　その理解を深めるための時間が与えられているのですから、有効活用しましょう。[%NAME_SELF%]さんが前に進むために必要なものだけを手元に残し、不要な物は捨ててください。思考、人間関係にも同様のことが言えます。',
'　良好な運気の月です。流れに勢いがあるので、やりたいことに挑戦するといいでしょう。失敗もひとつの経験だと割り切って、積極的に行動してください。<br><br>　万が一、間違っていたとしても、やり直しがきくときですから、心配いりません。自信を持って挑みましょう。また、この時期は新しい視点での取り組みがツキを呼びます。これまでのこだわりや、古いやり方を捨ててて、異なる方法にチャレンジしてみてください。可能性を模索し、いろいろ試してみることで、あなたの選択肢も広がっていきます。<br><br>　また、人との交流が活発になるときでもあります。公私問わず、多くの人から飲み会や食事に誘われるでしょう。選り好みをせず、誰とでも気さくに付き合うことで運が開けます。',
'　今年初めからやりはじめたことがあるとしたら、そこに力を注ぐことで良運が巡ってきます。新しいことにチャレンジするのではなく、これまでに手がけていること、見つけたチャンスを伸ばしていく月となります。<br><br>　続けても意味がない、成功する気がしないと思っていることも、この月いっぱい努力を続けてみましょう。それにより、[%NAME_SELF%]さんの能力や才能に磨きがかかり、活躍する場面が訪れます。もし、途中でくじけそうになったら、年配者にアドバイスを求めてください。<br><br>　人の話に耳を傾けることで、多くのヒントを得ることができると同時に、不安も薄れていきます。成功談の背景には失敗や苦労した流れが潜んでいるもの。話を聞くと、勇気が持てるでしょう。',
'　この月の運気は良好です。悩みを抱えているとしたら、この月中に問題は解決するでしょう。周りからのサポートで変化が起きるのではなく、[%NAME_SELF%]さん自身の気持ちや行動が変わることでよい流れが生まれます。<br><br>　ダメなものはダメ、いいものはいいとはっきり言葉にすることで、良運が巡ってきます。反対に、ふらふらと気持ちが揺れ動き、態度や発言を変えているとよい結果を残せません。信頼も失ってしまうので、毅然とした態度を取りましょう。<br><br>　もし、あなたがやりたいと思っている物事があるのなら、この時期に一歩を踏み出すことをおすすめします。運気が背中を押してくれるので、いいタイミングでいい流れに乗ることができます。ステップアップに最適なときです。',
'　この月は、少し注意が必要な月となります。これまで好調に進んでいた物事が突然停滞し、ストップがかかるといった流れもあります。<br><br>　全体的な流れから見ると、運気は上昇中なのですが、運気に疲れが出て一時的に流れが止まってしまうのです。無理に動こうとすると、雨に足を取られて転んでしまいます。健康を害したり、不慮の事故にあったりしややすいタイミングでもあるので、ゆったりと過ごした方がいいでしょう。<br><br>　こういったときは、これまでの様子を振り返り、正すところは正し、軌道修正を行うのに適しています。仕事、人間関係、プラベートの趣味や恋愛。[%NAME_SELF%]さんの進むべき方向を再確認してみてください。そして、次のステップに向かう準備を整えましょう。',
'　この月、[%NAME_SELF%]さんの運気は良好です。全ての物事が順調で、思い通りに進んでいくといっても過言ではありません。悩みの種となっていたことが消え去り、問題は解決に向かいます。<br><br>　その背景には、周囲の人たちの協力があります。力を貸してくれる人たちへの感謝を忘れないでください。あなた自身の判断力もさえているので、自分にとって最善の方法を選ぶことができます。迷ったときは、自分の直感を信じて正解。さらに、この月は積極的に行動することで多くの幸運をつかめます。<br><br>　とはいえ、良運が訪れていることに気をよくして努力を怠ってはいけません。慢心は身の破滅を招きます。運気に勢いがあるので、下方に転じると一気に流れが変わるので注意してください。',
'　気持ちが浮き立ち、地に足がつかない月となります。気持ちの面で余裕が持てるのはいいことなのですが、調子に乗ってしまうと注意力が散漫になりがちです。<br><br>　気を引き締めて、物事に対して真摯に挑むようにしてください。また、この月は普段慎重な[%NAME_SELF%]さんなのに、怪しい儲け話にのっかったり、うまい話にころっと騙されたり、お金と時間を無駄にするようなことをしてしまいます。新しく出会った人だけではなく、以前からの知り合いが話を持ちかけてくる可能性があるので油断しないでください。<br><br>　最初から人を疑ってかかる必要はありませんが、お金が関係する話をされたら慎重になりましょう。別の人に話をして、アドバイスを求めるといいでしょう。',
'　この月は、再スタートを切るのに最適な時期となります。過去にやっていたけれど、途中で断念して止めてしまったこと。停滞したまま手を付けずにいることなど、気にかかっていることに再度取り組んでみてください。<br><br>　以前とは状況が変わっているので、順調に進みよい流れに乗れるでしょう。また、復縁や再婚、再就職など、人生のやり直しの決断をするのにも適している月です。迷っているとしたら、勇気を出して一歩を踏み出してください。運気の流れが後押ししてくれるので、良縁がつかめます。<br><br>　また、仕事やプライベートで行き詰まりを感じているとしたら、打開策が見つかります。恩師や上司など、年配の方が[%NAME_SELF%]さんを応援して、支えてくれるでしょう。',
'　この月は、これまで努力してきた人には嬉しい知らせが届くときです。特に仕事や金銭に関する運気が良好で、頑張ったぶんの成果と評価が得られるでしょう。<br><br>　やればやっただけ、手に入れることができるので、仕事に時間をかけたいもの。できれば、プライベートより仕事を優先してください。この月は、実りを手にするときであるので、種まきをするタイミングではありません。ということは、新しい計画をスタートさせるには向いていないということ。<br><br>　継続してきた物事をきちんとまとめて、結果を出すことに専念してください。活力と体力がみなぎる月なので、多少無理をしても大丈夫ですが、持病がある人はしっかり治療を行うべき。この月中に治療をスタートするか、終了するといいでしょう。',
'　この月は、[%NAME_SELF%]さんの努力が認められ、周囲から称賛されるときとなります。仕事、人間関係、趣味など、力を注いできた物事の結果が出ます。<br><br>　あなたがどれほど頑張ってきたかによって、成果の度合いは違いますが、どのような形であれ良好な結果がでるのは間違いありません。収穫の月ですから、しっかりと実りを手に入れましょう。お金の面でも余裕が出てくる月ですが、投資や投機には向いていないので気をつけてください。結婚、引っ越し、転職など変化を起こすのにも適しています。<br><br>　ただし、次月にもちこさないように。今が最高潮であるということは、今後は山を下っていかなければいけません。よい方向への結実は、この月中に済ませておくようにしましょう。',
'　この月は運気の流れが下降するため、物事が思い通りにいかなくなるでしょう。季節に例えると、冬の時期となる運勢です。<br><br>　順調だった仕事が突然ストップしたり、信じていた人に裏切られたり、気が重くなるような出来事が起こります。この月に生じたトラブルは、解決するために奔走するとさらに大きな問題に発展する可能性があります。深追いせず、運を天に任せて状況を静観しましょう。そうすることで、損失や遅れを最小限に食い止めることができます。<br><br>　金銭面でのトラブルも置きやすいので、親しい間柄でもお金の貸し借りは厳禁です。休息が大切な月となるので、何が起こったとしても気に病まずにやりすごしましょう。水が流れるように、不調も流れていきますから。',
		),
		array( "un2019_0031_2", 
'　順調に進んでいた仕事に陰りが見えるようです。思いもよらない出来事が起こり、作業内容が大きく変更になるという可能性もあります。<br><br>　しっかりと計画を立てて、実行するばかりという段階でNGを出されるといった流れもあります。仕事が停滞する原因は、[%NAME_SELF%]さんにあるわけではないので自分を責めないでください。運気が滞っていることが仕事に影を落としているのです。何とかしようと思っても、この月はなかなかうまくいかないでしょう。<br><br>　このような時期は、状況が変わるまで静観していることが大切です。動けば動くほど、深みにはまっていきますから、静かにしていたほうが正解。同じ状態にずっと留まるわけではありません。船出の風が吹くときを待ちましょう。',
'　素晴らしいアイデアや企画が浮かびますが、それを受け入れてもらえません。[%NAME_SELF%]さんがどんなに時間をかけて説明しても、上司や上役は理解してくれないでしょう。<br><br>　あなたの発案がうまくないというわけではなく、動かすべきタイミングではないということです。また、先を急ぎすぎている感があると、周りの人たちは実行するのを嫌がります。少し時間を置いて、再度挑戦してみることをおすすめします。この月の仕事に関しては、忍耐の一言に尽きます。<br><br>　今、ダメだったからといって、今後も受け入れてもらえないというわけではないので、その点を理解してください。物事を成すためには、時期が大切なのです。まずは、冷静に状況を見つめるようにしましょう。',
'　この月、[%NAME_SELF%]さんの仕事運には勢いがあります。失敗を恐れず、何事にも挑戦し、経験を積んでいくといいでしょう。視野を広げ、知識や技術を吸収するのに最適な月ですから、積極的に行動することがツキを呼び込みます。<br><br>　仕事で注意してほしいのは、これまでのやり方や古い風習・習慣にこだわること。「こうあらねば」という気持ちが強すぎると、新しい波に乗れなくなってしまいます。やり方を変えるとうまくいかないかもしれない、という不安はあると思います。<br><br>　けれど、同じ位置に留まっているだけでは成長できません。ミスを取り返せる時期なので、いろいろなことにチャレンジしましょう。結果を出すのは、経験や実績を積んでからでも遅くありませんから。',
'　この月は努力を続ける時期となります。成功や成果が現れるのはもう少し先なので、少し不安を感じるかもしれません。<br><br>　今のやり方であっているのか、間違った方向に進んでいるのではないかという思いが頭をよぎることでしょう。目には見えませんが、着実に前進しているので心配せずとも大丈夫です。結果を急がす、努力を続けることが大切です。認めてくれる人は、[%NAME_SELF%]さんの頑張りを認めてくれていますから。<br><br>　また、現在の仕事に関係する知識や情報を仕入れてください。それが、次なるステップへと繋がっていきます。あなたの琴線に触れるものがあったら、探求するといいでしょう。すぐに役立たなくても、近い将来、知り得た情報を活用するときが訪れます。',
'　契約を決めたり、新規案件をスタートさせたりするのに最適な月です。やるかやらないか迷っているとしたら、やる方向で進むべき。この月の仕事運は良好ですから、大きな流れに乗って勢いをつけましょう。<br><br>　ただし、ダメとわかっている仕事は進めてはいけません。運気に勢いがあるということは、選択を誤ると悪い方向へ勢いよく進んでしまうということ。決断する勇気は必要ですが、やみくもに決めるのはよくありません。吟味し、検討してから決断をくだしましょう。<br><br>　職場では頼りにされることが多く、[%NAME_SELF%]さんに採決を任せるという風潮になります。責任重大ではありますが、不安を表に出さないように。自信を持って仕事に挑むことで、結果がついてきます。',
'　全体運が低迷しているあおりを受けて、仕事運も停滞します。計画が頓挫する、企画がストップするなど、不測の事態が発生します。<br><br>　ただし、動かそうとすることで、余計に状況が悪化する危険性があるので、この月は様子を見守っていましょう。うまくいかないときというのは、何とかしようとあくせくするものです。そこをグッと堪えて、静かに何もせずにいるのです。流れに身を任せることで、状況が変わってきます。<br><br>　また、職場での人間関係において、これまでうまくいっていた人との間に亀裂が生じる可能性があります。怒りを爆発させてしまうと後々の関係に響きます。相手に非があっても我慢しましょう。こちらも、静観することで状況が変わってきます。',
'　この月、仕事運は良好です。予想していなかった幸運が訪れ、[%NAME_SELF%]さんが大活躍する場面が訪れます。ほかの人の代わりとして、人前で発表やスピーチをしたり、プロジェクトの指揮を執ったりするようです。<br><br>　突然のことで戸惑うかもしれませんが、迷う時間がないので覚悟を決めて仕事に挑めます。まさに、清水の舞台から飛び降りるような気持ちでしょうが、そのぶん勢いがつきます。協力してくれる人も現れるので、良好な結果が出せます。代役を難なくこなすことで、あなたへの評価も高まり称賛を集めるでしょう。<br><br>　とはいえ、調子に乗ってはいけません。足元をすくわれないようにするためにも、目の前のことをしっかりこなすように。仕事でも誠実さを忘れないことが大切です。',
'　注意力散漫となり、集中力にも欠ける月です。「いつもと同じ」「普段通りに」という思いが、慢心に繋がりミスを引き寄せます。慣れた仕事も手を抜かず、しっかり取り組むようにしましょう。<br><br>　この月は、隣の芝生が青く見えるときなので、あれこれと目移りして、仕事が手に付かなくなる運気となります。最後まで終わっていないのに、新しい仕事に取り組み、仕上がりが中途半端になってしまう。順序を間違えて、大切な仕事が抜け落ちていたなど、[%NAME_SELF%]さんらしくない行動をしてしまうようです。<br><br>　責任問題にも発展しますし、信頼を失う場合もあります。ミスを引き起こす要因がおしゃべりなので、雑談はほどほどにしましょう。集中するという意識を持っていれば大丈夫です。',
'　仕事に遅れが出ているとしたら、この月は取り戻すチャンスです。物事が順調に動き出す時期ですから、このタイミングで勢いをつけると一気に巻き返せます。<br><br>　この月は、以前失敗に終わっている仕事や、ボツにされた企画などに光が当たります。自分でいいと思っていたのに、NGを出されていた案があるとしたら、再度提案してみましょう。高確率でOKがもらえるはず。どうせまだダメだ、受け入れてもらえないと弱腰にならず、もう一度チャレンジしてください。<br><br>　また、この時期、仕事で良運を引き寄せる鍵となるのが、古い資料や昔のやり方です。時代遅れだと言われているものほど、一回りして今の時代にマッチします。掘り起こしてブラッシュアップしましょう。',
'　この月の仕事運は少しアップダウンがあります。良好かと思っていたら、ミスが生じて一時的に仕事がストップするということもあるでしょう。<br><br>　手戻りや突き返しなど、想定外の出来事が起こるようですが、それを上回る成果や収穫を生み出すことができる月です。多少、経費がかかったとしても、売り上げアップが見込めるなら、投資をしたほうがいいでしょう。すぐにとはいかないものの、のちに利益が上向きに転じます。危険を回避しようとするあまり、冒険心を失うのはよくありません。<br><br>　マイナスとなるとしても、会社や[%NAME_SELF%]さんのPRをしたほうが得策です。とはいえ、無駄になる経費は削るように。何にでも投資すればいいというわけではなく、見極める目は必要となります。',
'　この月の仕事運は良好です。とにかく、この月の仕事運は絶好調で、[%NAME_SELF%]さんが活躍する場面が次々と訪れます。責任ある仕事を任されたり、前面に立ってみんなを指揮したり、職場でのあなたの存在がクローズアップされます。<br><br>　能力や才能を発揮するチャンスでもあるので、仕事の依頼を受けたら迷わず引き受けてください。自信がないからといって弱気な発言をすると、チャンスを棒に振ってしまうようなもの。不安を抱いたとしても、言葉や態度に表さないように。運気の流れが後押ししてくれるので、心配せずとも大丈夫です。<br><br>　とはいえ、ひとりで全てを抱え込むと壁にぶつかります。協力者をみつけて、力添えをしてもらうといいでしょう。年配者が力を貸してくれるはずです。',
'　この月は、仕事での対人関係に注意が必要となります。余計なことを言ってしまったり、相手の逆鱗に触れる発言をしたり、うっかりでは済まされない事態に発展する場合もあるので気をつけましょう。<br><br>　また、職場の環境が変わる、人事異動があるなど、周辺に変化が起こります。これにより、いつも通りの流れが変化するため、調子を発揮できなくなる可能性があります。イライラすると、さらに失敗が続くので気にしないようにしましょう。また、この月はパソコンの不調に気をつけてください。<br><br>　データの消失や流出、メールの送信不具合などが起こる暗示が出ています。忙しくて時間がないときほど、念には念を入れてチェックを行うように意識するといいでしょう。',
		),
		array( "un2019_0031_3", 
'　[%NAME_SELF%]さんの恋愛観に変化が生じる月となります。愛する人と幸せになりたいと思う一方で、刺激的な恋愛を楽しんでみたいと望んだりします。<br><br>　いつものあなたなら好きにはならないタイプの異性に惹かれ、相手に猛アタックをするようなこともあるでしょう。自分でもどうしたのだろうかと思うかもしれません。これは、全体運が停滞しているため、恋愛に刺激を求めてしまうのが原因です。不安定な状況は一時的なものではありますが、暴走しないように注意が必要です。<br><br>　不倫の恋や三角関係、略奪愛などにも気持ちが傾きやすいので、そういった流れに乗らないように気を引き締めてください。トラブルを抱えてしまうと、この期間を抜けたときに大変な思いをすることになります。',
'　腐れ縁的にお付き合いをしている人との関係が清算される月です。何となくズルズルと交際をしている人、相性が悪いとわかっていながらも一緒にいる人と距離を置いた方がいいでしょう。<br><br>　ここで関係を断ち切らないと、恋愛運が停滞する一方です。[%NAME_SELF%]さんの運気を停滞させている原因となっている人物がいるはずです。その人との未来が思い描けないのなら、思い切って別れの決断をするべきです。パートナーとの仲が良好である場合は、今の関係から一歩進んだ関係になります。<br><br>　つまり、結婚の意志を固めるタイミングと言えます。すぐに結婚すると決めなくても、将来についてしっかり話し合った方がいいでしょう。この月に決断したことは、いい流れとなりますから。',
'　この月は、よきにせよ悪しきにせよ、恋愛面で大きな動きがあるでしょう。[%NAME_SELF%]さんが恋の悩みを抱えているとしたら、その問題が解決に向かいます。<br><br>　どのような決着がつくのか、途中経過はさておき、あなたの心が安定するのは間違いありません。この月、一区切りがつき、恋の流れが変わるということを覚えておいてください。一方、恋人募集中の人は、これまで出会った人との間に恋愛感情が生まれやすい時期です。新しい出会いに期待が薄いときですが、そのぶん、旧知の人との絆が深まります。<br><br>　ずっと[%NAME_SELF%]さんに思いを寄せている人がいるようですから、食事やデートに誘われるかもしれません。突然、メールや電話で連絡をしてくる異性がいたら、その人が該当者です。',
'　シングルの人に朗報な月です。出会いのチャンスに恵まれ、多くの異性と知り合えるでしょう。まだ、本格的な恋愛へとは発展しないでしょうが、交流を深めるのには最適です。<br><br>　本命を絞らず、友だちとしてお付き合いを重ね、お相手との相性を見極めていくのがおすすめ。一方、パートナーがいる人は、[%NAME_SELF%]さんの気持ちが恋愛から離れていくようです。仕事や趣味に没頭するあまり、恋人と一緒に過ごす時間が減ってしまうのです。会えないことで、お相手の方が不満をもらすかもしれません。<br><br>　それにより、恋人への思いが少し冷めてしまう可能性も。また、他の異性からの声がけもあるので、心が揺らぐ暗示も出ています。そういったときは、トラブル回避の意味でも、仕事に専念したほうが吉。',
'　出会いのチャンスが複数訪れます。[%NAME_SELF%]さんに夢中になる異性も現れ、出会ってすぐに結婚を申し込まれるという流れもあります。この時期、関係を深めた人とは生涯を通じてのお付き合いとなる可能性があります。<br><br>　ですから、安易に肉体関係を結んでしまうと、トラブルを生み出す場合もあるのです。その気はなかったのに、結婚を迫られて困惑するといったこともあるので気をつけてください。一方、パートナーがいる人は、浮気心が頭をもたげるので、こちらも気をつけましょう。<br><br>　不測の事態が起こり、友だちや家族を巻き込んで、大問題になるなんてことも。誠実なお付き合いを心掛けることで、恋人との絆が深まり、幸せに包まれた日々を過ごすことができます。',
'　この月の恋愛運は不安定です。パートナーがいる人は、ちょっとした誤解からケンカをしそうな暗示が出ています。口論をし続けた結果、お相手との相性を疑ってしまうかもしれません。<br><br>　これは、運気停滞の影響を受け、恋愛にも疲れが生まれているのが原因です。毎日コンタクトを取り合うのではなく、この月は自分のことや仕事を優先して気分転換を図ることをおすすめします。恋人募集中の人も、恋愛に関して意欲的に取り組めなくなってしまいます。<br><br>　周囲に流され、合コンや飲み会に足を運んでみたものの、気疲れしてしまう可能性が。お金だけ使って、実りが得られないので、無理をしてまで誘いにのることはありません。心身を休めて、よい流れがくるのを待ちましょう。',
'　お付き合いをしている人は、結婚の話が持ち上がるでしょう。恋愛運に勢いがあり、よい方向へと流れが加速していく月です。恋人からプロポーズをされたり、家族を紹介されたりする可能性があります。<br><br>　前置きなく、突然に言われるので驚いてしまうでしょう。とはいえ、迷いがあるのなら、急いで結論を出す必要はありません。自分の気持ちを固めてから申し出を受けるように。一方、シングルの人は複数の人からアプローチされるようです。<br><br>　中には結婚を前提としたお付き合いを申し込んでくる人もいます。慌てて返事をするとトラブルを引き起こします。まずは、相手との距離を縮めるように。この月はお互いを理解し、信頼関係を深めることを優先してください。',
'　パートナーがいる人は、遊びの恋に走ってしまう傾向が高まります。恋人とは別の人に思いを寄せて、肉体関係を持ってしまったり、不倫の恋に走ったり、秘密の恋に夢中になる暗示が出ています。<br><br>　好奇心が高まっていることも要因ですが、刺激を求める傾向が強くなることも関係しています。[%NAME_SELF%]さんが大切にすべき人が誰なのか、見失うと幸せを逃してしまうので気をつけましょう。一方、恋人募集中の人は複数の異性から声をかけられるようです。どなたとお付き合いをしたらいいのか、本命を決めるのに迷ってしまうことでしょう。<br><br>　ただし、いつまでも悩み続けていると、相手にその気がないと思われてしまいます。意中の人には早めに思いを伝えた方が吉です。',
'　この月の恋愛運は良好です。出会いを求めている人は、いろいろな場所に足を運ぶことでチャンスが到来します。声をかけられることも多いのですが、気になる異性を見つけたら、[%NAME_SELF%]さんから話しかけてみましょう。<br><br>　運気の流れがサポートしてくれるので、うまくいくはずです。また、一度ダメだった相手とやり直しができる月です。昔の恋人や好きだった人にコンタクトを取ってみてください。食事やデートに誘ってみると、よい返事をもらえます。たとえ断られたとしても、この月中に再度連絡をするといいでしょう。<br><br>　この期間であれば、何度かトライすると受け入れてもらえます。恋愛中の人は、恋人との関係を深めていくことができます。あなたの思いを言葉にして伝えてください。',
'　この月は、仕事を通じての出会いに期待が持てます。恋人募集中の人は、取引先や職場での恋愛が展開される可能性が高まります。<br><br>　業務を通じて知り合い、食事に行ったり飲みに行ったりしているうちにお互いに恋心を抱くようになるでしょう。仕事で契約を交わす間柄であれば、仕事と恋とどちらでも駆け引きが展開されます。緊張しつつも、刺激的な恋が楽しめます。一方、恋人がいる人は、二人の関係をはっきりさせる時期となります。そのため、将来、結婚するかどうか迫られます。<br><br>　この月に結婚の約束をすると、信頼関係が深まり、これまで以上に深い関係になるでしょう。今は結婚する気がないカップルも、お互いの将来について真剣に考えるようになります。',
'　[%NAME_SELF%]さんの思いが相手に届きやすい月です。片思いをしている人は、お相手の方を食事やデートに誘ってみるといいでしょう。色よい返事をもらえるはず。恋人がいる人は、結婚話が持ち上がるでしょう。<br><br>　まだ、結婚は早いと思うこともあるでしょうが、将来についてパートナーと話をしておいたほうが吉。恋人との間で不協和音が出ている人も、この月は明るい兆しが見えます。意志の疎通がはかれるようになりますから、お互いの気持ちが理解できるようになるでしょう。恋人募集中の人は、自ら積極的に行動しないほうが吉。<br><br>　この時期は、運が巡ってくるので、ご縁がやってくるのを待っていてください。自分が動いてしまうと、チャンスとすれ違ってしまいます。',
'　愛する人の裏切りや心変わりが起こりそうな暗示が出ています。普段と同じように接しているものの、心の中では別れについて考えているという可能性もあります。<br><br>　これは、相手だけではなく、[%NAME_SELF%]さんにも言えること。お互いへの不信感がつのっている恋人同士は、しっかりと話をしたほうがいいでしょう。運命はあなたが幸せをつかむための後押しをしてくれます。決別が不運に繋がるわけではなく、次なる恋愛に進むための通過点と考えてください。恋人募集中の人は、複数の異性から声をかけられる暗示が出ています。<br><br>　ただし、中には[%NAME_SELF%]さんを利用しようと考えている人もいるので注意しましょう。甘い言葉やうまい話ばかりをする異性には、裏があると思って正解。',
		),
		array( "un2019_0031_4", 
'　物事がうまくいかず苛立ちを抱える月となります。気の流れが停滞しているので仕方ないのです。どうにかしようとすると、状況はますます複雑になっていきます。<br><br>　気負わず「なるようにしかならない」と考え、ゆったり過ごしましょう。不思議なもので、自然に変わるのを待とうと考えると、状況が改善していきます。力が入りすぎると失敗してしまうことがよくあります。ですから、気楽な姿勢で、物事の成り行きを静かに見守り、運気の流れが改善するのを待ちましょう。<br><br>　この月を乗り切れば、後の運気は上向きに転じます。良運が巡ってきたとき、軽快にスタートが切れるように、準備を整えておくことが大切です。無駄なエネルギーを使わず、力を温存しておいてください。',
'　新しい運気の流れが巡ってくる月です。ワクワクするような気持ちになり、新しいことを始めたいと思うでしょう。物事を動かすには多くのエネルギーが必要とされます。<br><br>　この月はその力がまだ十分ではないので、実際に動くには時期尚早です。基盤を作り、足元を固めるときですから、急がず焦らず準備を整えることに専念しましょう。情報収集や知識の取得に適しているときですが、人との癒着が問題になるタイミングでもあるので注意してください。<br><br>　必要以上にひとりの人と親しくしすぎないように。あらぬ噂を立てられて、信用を失ってしまうこともあります。疑いをかけられたときは、相手にせず知らぬ顔をしているのが正解。静観していれば、自然と状況が変わります。',
'　運気の流れに勢いがある月です。仕事でもプライベートでも、新しい物事をスタートするという話が聞こえてきます。もちろん、[%NAME_SELF%]さんにも声がかかります。<br><br>　このとき、迷わずにトライすることが開運の扉を開きます。先のことまで悩み考えていると、一歩が踏み出せなくなってしまいます。そうこうしている間に、チャンスが流れて行ってしまう可能性もあるのです。失敗してもやり直しができるときですし、痛手を負うようなことはありません。チャレンジするのに最適な月ですから、積極的に行動してください。<br><br>　ただし、文句や不平不満、無駄口ばかりを叩いていると運気が低下します。口をつぐみ、静かに黙々と挑むことが大切。それが、あなたの評価にも繋がります。',
'　この月は、取り組んでいることがあるのなら、それを続ける意志を固めるときになります。フラフラと気持ちが揺れ動いている状態だと、これから先の成功や成果をつかめなくなってしまいます。<br><br>　腹をくくり、努力を続けるようにしてください。そして、目標を達成するために必要なものは何かを探すことにツキが訪れます。多くの人と会い、話を聞くのもいいでしょう。対人関係も広がりを見せる月ですから、外にでることをおすすめします。<br><br>　また、学習に励んでいると、目上の人から引き立てを受けます。セミナーや資格取得、勉強会などに積極的に参加してください。「これくらいでいいか」という打算は運気低下を招くので、向上心を抱き、高みを目指しましょう。',
'　やるべきことが見えてきて、希望に胸が膨らむ月となります。目標を定めたら、そこに向かって邁進していくといいでしょう。決断すると運が味方につき、よい流れを引き寄せてくれます。<br><br>　ですから、迷いを絶ち、決定しましょう。決めなければ動き出しませんし、状況は変わりません。潔さが大切ですが、損得勘定で結論を出さないように。利益優先の思考でいると、先々、停滞していきます。<br><br>　仕事でもプライベートでも、自分中心の考えではなく、人のため世のためを思って行動し、結論を導くといいでしょう。運気に勢いがあるときというのは、自分のことしか考えられなくなる傾向が強くなるので、周囲の人に目を向けることを忘れないようにしてください。',
'　この月は一時的に運気が停滞するため、物事が順調に進まなくなります。仕事の流れが変わったり、人間関係で問題が発生したりするかもしれません。<br><br>　とはいえ、一時的な陰りであり、全体的な運気は上昇中ですから、あまり気に病まないように。悩みすぎると、健康面で悪影響が出ます。心身を安定させ、状況を俯瞰するといいでしょう。改善すべき点が見えてくるはず。一方、後の収入アップにつながる出来事が起こりますから、そちらを楽しみにしていてください。<br><br>　何か増収に結びつくかわからないときなので、どんなことにも不満を言わず取り組んでください。収益が出ないと思っていたことが、高収入に繋がるといったこともあります。運を天に任せて吉です。',
'　この月の運気は好調で、[%NAME_SELF%]さんの思い通りに物事が進んでいきます。願っていると、それが自然とかなうという、素晴らしい運勢であると言えます。人に遠慮することなく、自分のやりたいことを優先するといいでしょう。<br><br>　とはいえ、目先のことばかり願っていると、未来への基盤が築けなくなります。その結果、時間の経過と共に、状況が下降していきます。夢や目標は、将来設計を考えて思い描くといいでしょう。そして、順調に進んでいるときほど、感謝の気持ちを忘れずにいてください。<br><br>　お世話になった人や、サポートをしてくれた人に対して、お礼の言葉を伝えるように。自分一人でやり遂げたような意識でいると、周囲からの信用を失ってしまうので気をつけましょう。',
'　運気の流れは好調なのですが、好調すぎるゆえ気持ちに油断が出やすい月です。調子がいいから大丈夫と思っていると、思わぬところで足をすくわれてしまいます。<br><br>　仕事でもプライベートでも、浮き足立って失敗をしやすい月なので、気を引き締めましょう。この月は特に「嘘」に注意が必要です。[%NAME_SELF%]さんが相手から嘘をつかれることもありますが、あなたが保身のために嘘をつくことも言えます。嘘を隠すために嘘をつき、雪だるまのようにどんどん嘘が膨らんでいくという可能性もあります。<br><br>　誰に対しても誠実であることが大切です。人の信頼というのは、失ってしまうと取り戻すまでに時間がかかります。娯楽や誘惑に負けることなく、誠実であることを心掛けてください。',
'　この月は、再チャレンジが開運の鍵となります。諦めていたことや、ダメになったことなど、もう一度挑戦するといいでしょう。運気の流れが力を貸してくれるので、いい方向に進んでいきます。<br><br>　過去や昔がキーワードとなりますから、悩んだときは昔を思い出してみるといいでしょう。過去の文献や歴史書などにもヒントがかくされています。仕事でもプライベートでも、面倒は勝手でもしたほうが吉となります。面倒くさいといって放棄してしまうのは、良運を手放すようなもの。<br><br>　これまでの経験が役立つシーンが巡ってきますから、そのときは自ら進んで手をあげて、引き受けるようにしましょう。後ろに引いてしまうと、ほかの人に手柄を横取りされてしまいます。',
'　この月は、[%NAME_SELF%]さんの努力が実を結ぶときです。頑張ってきたことが形になり、多くの人から称賛されるという可能性があります。やればやっただけ、収入や成果に繋がります。<br><br>　けれど、やらなければ何も起こりません。棚から牡丹餅的に利益を得ることはないので、努力を続けてください。全体的には新しい物事に着手しない方が吉ですが、仕事運は良好なので利益を生むための冒険は問題ありません。相手との駆け引きをするときは、冷静に大人の対応、大人の関係を保ちましょう。<br><br>　一方、プライベートでの散財は運気を下げるので気をつけてください。実りを手にしたら、全てを消費せず備蓄をするように。そうすれば、どのような展開になっても対応することができます。',
'　この月、[%NAME_SELF%]さんの運気は良好で、よい流れが巡ってきます。ほかの人からの称賛や賛美の声は、素直に受け止めてください。相手の真意を疑うと、表情や態度に疑念の気持ちが表れます。<br><br>　そうすると、相手も不快な気分になりますから、あなたへの印象が変わってきます。素直でかつ謙虚な態度で人と接すると、さらなる称賛と信頼を得られるでしょう。この月は全ての物事が結実し、実りを手にする時期となります。仕事が認められたり、収入がアップしたりいいことつくしです。<br><br>　ただし、良運に気をよくして、強気な態度に出ると、思わぬ人から思わぬ反撃をくらうので気をつけてください。相手を立てることを忘れず、お世話になった人には感謝の意を示すことが大切です。',
'　この月は、他人とのトラブルに注意が必要となります。信じていた人の裏切りにショックを受けるかもしれません。というか、これまで抱いていたイメージが間違っていたということに気づくようです。<br><br>　真面目だと思っていたのに、いい加減なことばかりをする。口先だけで、実行していなかったなど。相手を責めるのではなく、なぜ、相手を信じてしまったかを考えてください。自分が気をつけなければいけない部分が見えてくるはず。<br><br>　問題や不具合が起きやすい月ではありますが、その中に多くのヒントが潜んでいます。トラブルをマイナスととらえるか、プラス思考で見るかにより、今後の流れが変わってきます。プラスに考えて、自分の成長につなげましょう。',
		),
		);
?>