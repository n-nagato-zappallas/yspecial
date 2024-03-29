<?php
/**
 * menu_id : sh2019_0032
 * 飯塚唯：一人用
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'sh2019_0032',
			'contents'			 => 'gal_zap',
			'img_name'			 => 'zap_gal',
			'teller_name'		 => '飯塚唯',
			'isp_mid'			 => '52p031',
			'nif_menukey'		 => 'shimohanki_2019_032',
			'price'				 => '556',
			'discount'			 => '463',
			'design_cd'			 => '5',
			'person'			 => '1',
			'category_name'		 => 'life',
			'release_date'		 => '20191024',
			'title'				 => '【三代目ギャル霊媒師◆飯塚唯】2019年11月あなたの恋愛/仕事/お金',
			'caption'			 => '曾祖母も祖母も霊媒師という家系の三代目ギャル霊媒師こと飯塚唯があなたの2019年11月の運勢を鑑定します！　この月のあなたの運勢がどうなるのか、恋も仕事もお金のことも、これを見れば一目瞭然。すべてをお伝えしますのでしっかりチェックしてください。',
            'base_1_title_self' => 'あなたの下半期の運気',
            '1_min_title'  => '2019年11月～あなたの恋愛はどうなる？',
            '2_min_title'  => '2019年11月～あなたの仕事の悩みは解決する？',
            '3_min_title'  => '2019年11月～あなたの金運、収入は好調？',
            '4_min_title'  => '2019年11月に輝くのはあなたのこんなところ！',
		);

// 小メニューロジック
$logic = 'a1';

// Next枠
$next = array( "sh2019_0028", "sh2019_0029", "sh2019_0030", "sh2019_0031" );

// 一部見せテキスト
$free = array( "sh2019_0032_1", 
'　この11月は、電撃的な展開はないんですけど、じわじわと毎日、幸せをかみしめるような恋愛運気になりそう。ちょっと気になっていた異性と、話ができる機会が得られるかも。それが日常になって、顔を合わせる……',
'　この11月は、ちょっとわくわくするような、新しい風が吹いてきそうな予感。小さなハプニングが素敵な出会いを運んできたり、恋人との仲を深めてくれるんです。道に迷ってしまったり、車が故障してしまったり……',
'　気持ちが前向きになっているおかげで、運気も上昇しているのが視えますね。この11月は、楽しみながら素敵な恋愛を見つけられそう。ちょっと出かけると理想的な異性と知り合えるんです。でも、もちろん……',
'　好きだからこそ、わかり合いたいって思う気持ちは強くなるものです。でもこの11月は、[%NAME_SELF%]さんが「私をわかって」っていう気持ちが大きくなってしまいそう。それが押し付けになって……',
'　この11月は、パタリと風が止まってしまったような、そんな恋愛運気ですね。好きな相手や恋人との意思疎通が、うまくいかなくなりそうなんです。いつもなら通じていたことが、チグハグに感じられるかも。良かれと……',
'　なかなか思い通りに行かず、ジレンマを抱えてしまいそうなこの11月。するとますます焦って、逆目に触れてしまいそうな気がするんです。ちょっとした一言で株を下げてしまい、ライバルが有利になるなんて……',
'　明るい兆しが見えてくるこの11月は、モヤモヤがスッキリ晴れてくれるはず。きっと、言いたくても言えなかったことを、言える環境が整うんだと思います。だから恋人と少し、深い話をしてみるのも……',
'　この11月は、全体的な運気は堅実な流れなんですね。でも、恋愛に限ってはまるでジェットコースターのように、勢いとアップダウンがあるかも。「どうしようかな」なんて迷っている間に、ライバルに恋人の……',
'　期待が高まる時期みたいですね。この11月は、ドラマのような展開はないんですけど、お互いに一歩、歩み寄るという感覚があるはず。[%NAME_SELF%]さんだけではなく、相手からも踏み込んでくれるのは……',
'　焦りは禁物って感じの時期ですね。でも、ゆっくりと自分を見つめながら恋愛をしたり、相手との関係性を探ったりするのも、楽しいんじゃないかなって思います。この11月は、結果を求めるんじゃなくて、経過を……',
'　この11月は、ドキドキするような展開があったり、恋を手放すような状況が訪れたり。何かと変化が表れやすい時期みたい。でもこういうのって、タイミングなんですよね。美味しい果物にも食べごろがあって、それが……',
'　この11月は、素敵なパートナーを見つけたいって、期待してしまいそうです。だけど、トントン拍子に進む時期ではないみたい。もし仲良くなりたい相手がいるとか、もっと恋人と深い関係になりたいと思っているなら……',
		);


// 結果テキスト
$text = array(
		array( "sh2019_0032_1", 
'　この11月は、電撃的な展開はないんですけど、じわじわと毎日、幸せをかみしめるような恋愛運気になりそう。ちょっと気になっていた異性と、話ができる機会が得られるかも。それが日常になって、顔を合わせるだけでハッピーな気分になるんですね。そこから親密な関係になる可能性も高いし、そんな距離感をフィーリングで感じますよ。<br><br>　恋人がいるなら、ゆっくりと結婚の話が持ち上がるかもしれません。相手が結婚に前向きなのを感じるから、[%NAME_SELF%]さんも安心するんじゃないですか？　<br><br>　この月は静かだけど、確実に上昇している運気なのが視えます。だから手ごたえがないと思っても、それはほんのわずかな動きだから。実はしっかりと一歩ずつ進んでいるので、そのまま前向きに行くといいですよ。',
'　この11月は、ちょっとわくわくするような、新しい風が吹いてきそうな予感。小さなハプニングが素敵な出会いを運んできたり、恋人との仲を深めてくれるんです。道に迷ってしまったり、車が故障してしまったり。一瞬、嫌なトラブルに感じるんですよね。でも実は、それが素敵なハプニングだったんです。恋愛とは全然関係のない場所で、いくつも出会いが転がっているみたい。<br><br>　このおかげで、相手からの愛情に不安を感じていたのなら、愛されているって改めて感じられますよ。こんなときは、[%NAME_SELF%]さんもしっかりと愛情を返してあげてくださいね。<br><br>　特別に何かをするのではなく、普通に過ごしているだけでハッピーな気分になれる月。だから、なるべく一緒に過ごすといいですよ。',
'　気持ちが前向きになっているおかげで、運気も上昇しているのが視えますね。この11月は、楽しみながら素敵な恋愛を見つけられそう。ちょっと出かけると理想的な異性と知り合えるんです。でも、もちろん[%NAME_SELF%]さんが外に出かけるっていう行動がまず大事なんですけれど。<br><br>　だから、もしお休みができたら少しでもお出かけしてくださいね。例えばお昼のランチだって、いつもとは違うお店で食べるとか。お弁当の回数を減らしてみてほしいんです。工夫すれば、そんなにお金もかからないはずですよ。<br><br>　ずっと想っている人がいるなら、この時期にアプローチするのがおススメ。ちょっと気になるくらいの相手だとしても、まずは話しかけてみることですよ。親しくなれそうです。',
'　好きだからこそ、わかり合いたいって思う気持ちは強くなるものです。でもこの11月は、[%NAME_SELF%]さんが「私をわかって」っていう気持ちが大きくなってしまいそう。それが押し付けになって、相手に負担をかけてしまうみたいです。わかってほしいと思うなら、まずはわかってあげるようにしてみてくださいね。<br><br>　相手が何を考えていて、どうしてほしいのか、です。するといつの間にか、相手もあなたを思いやってくれるようになりますよ。行動も、自分ではなく相手を主軸にして動いてみてくださいね。すると、相手も足並みをそろえてくれるから。<br><br>　恋愛運気は少し停滞しそうな流れなんです。そこで少しでも流れやすくするために、自分を抑えるのがポイント。大きなトラブルも防げますよ。',
'　この11月は、パタリと風が止まってしまったような、そんな恋愛運気ですね。好きな相手や恋人との意思疎通が、うまくいかなくなりそうなんです。いつもなら通じていたことが、チグハグに感じられるかも。良かれと思ってやったことが、裏目にでるとかですね。少し困惑してしまいそうな流れですから、ここは静かに時が過ぎるのを待ってください。<br><br>　相手から嬉しいメッセージが届くとか、また心地よい風が吹き始めたら、きっとそれは肌で感じるはずです。そこで動き出せばいいんですよ。<br><br>　この月は、こうなるだろうという予測は立てず、あるがままを受け止めてほしいんです。電話がかかってくるはず、なんて思ってかかってこないとガッカリしますからね。淡々と過ごすんですよ。',
'　なかなか思い通りに行かず、ジレンマを抱えてしまいそうなこの11月。するとますます焦って、逆目に触れてしまいそうな気がするんです。ちょっとした一言で株を下げてしまい、ライバルが有利になるなんてことも。<br><br>　ここは下手に行動を起こさないようにして、何かしようと思っても一旦深呼吸してください。メッセージを送る場合も、一時間置いてからもう一度見直してみてください。「送らなくてよかった～」なんて、ことになっているかも。<br><br>　それから、[%NAME_SELF%]さんがけんかを吹っかけてしまうのも視えます。せっかく順調に進んでいたものでも、亀裂が入ってしまうと、修復は難しくなりますよ。そんなときは美味しいものを食べて、ハッピーな気分に浸るとか、うまく気持ちを上げてくださいね。',
'　明るい兆しが見えてくるこの11月は、モヤモヤがスッキリ晴れてくれるはず。きっと、言いたくても言えなかったことを、言える環境が整うんだと思います。だから恋人と少し、深い話をしてみるのもいいかも。<br><br>　もちろん片思い中なら、気持ちを思い切って言葉にしてみてもいいんじゃないですか？　道が開けてくる感覚は、[%NAME_SELF%]さんに勇気と自信を与えてくれますから。<br><br>　モヤモヤの解決っていう意味では、どうしても納得できなかった過去の恋人との別れについて、納得のいく説明が聞けそう。なんで離れてしまったのかわかると、これからの恋愛にもいい影響を与えますよ。今度こそ素敵な恋をしてみせる、って活力にもなると思うんです。この月は、気持ちよくスタートが切れるときですね。',
'　この11月は、全体的な運気は堅実な流れなんですね。でも、恋愛に限ってはまるでジェットコースターのように、勢いとアップダウンがあるかも。「どうしようかな」なんて迷っている間に、ライバルに恋人の座を奪われる可能性もあるみたいです。だから、あんまり落ち着いていられないはず。今だと思ったら飛び出して、先手必勝が一番ですね。<br><br>　合コンでも片思い中の場合でも、同じですよ。あなたから話しかけて、周りが入り込む余地を、なくしちゃってくださいね。すると思いがけない幸運が舞い込んで、一番人気の相手をゲットできるかも。<br><br>　恋人がいる場合は、ご両親に紹介しちゃうとか、友達に会わせるとかすると、一歩進んだ関係に発展するみたいです。この月はパワフルに行動してくださいね。',
'　期待が高まる時期みたいですね。この11月は、ドラマのような展開はないんですけど、お互いに一歩、歩み寄るという感覚があるはず。[%NAME_SELF%]さんだけではなく、相手からも踏み込んでくれるのは幸せですよね。一方的な思いじゃないってことだから。<br><br>　恋人同士の二人だとしても、こんな距離が縮まる感覚を味わえて、関係がリフレッシュしそうです。「こうしてほしい」と思っていることがあるなら、この機会に伝えてみてください。あなたの気持ちを汲んで、そのお願いを叶えてくれると思いますよ。<br><br>　恋愛運気そのものはとても安定していますから、少々摩擦が起きても深く考えないで。すぐに解決するはずです。出会いを求めているなら、友達に好きなタイプを伝えておくと探してくれそう。',
'　焦りは禁物って感じの時期ですね。でも、ゆっくりと自分を見つめながら恋愛をしたり、相手との関係性を探ったりするのも、楽しいんじゃないかなって思います。この11月は、結果を求めるんじゃなくて、経過を楽しむ感じなんですね。だから、メッセージのやり取りが活発になってきたっていうだけでも、ハッピーだと思ってみて。<br><br>　片思い中の人も、想いが届かないことを嘆くより、恋をしている自分がキラキラしてるってことに気が付いてほしいです。それに、きっと努力もしているはず。それは大きな実力や魅力になっているんですから。<br><br>　この月は、相手の様子を観察すればするほど、幸せになるヒントが見えてくるみたい。何が好きなのかな、口癖は？　なんて、探ってみてください。',
'　この11月は、ドキドキするような展開があったり、恋を手放すような状況が訪れたり。何かと変化が表れやすい時期みたい。でもこういうのって、タイミングなんですよね。美味しい果物にも食べごろがあって、それが過ぎたら、処分するしかないじゃないですか。もったいないけど、捨てる気持ちも生まれているはず。だから、流れには逆らわないのが、穏やかな幸せをキープするコツなんです。<br><br>　ただドキドキする展開っていうのは、部下や恋愛対象外だと思っていた相手が恋愛対象に見えてくるんですね。向こうからのアプローチも期待できそう。<br><br>　職場仲間だから無理とか、最初に決めてしまわないで、まずは友人から始めてみてください。アウトドアのデートだと、お互いの魅力を知ってもらえるみたい。',
'　この11月は、素敵なパートナーを見つけたいって、期待してしまいそうです。だけど、トントン拍子に進む時期ではないみたい。もし仲良くなりたい相手がいるとか、もっと恋人と深い関係になりたいと思っているなら、今の距離をキープして。一歩近寄ると、相手が一歩あとずさりする様子が視えます。<br><br>　今の状態を続けていれば、次の月に展開が変わってきますからね。この月は、あまり慌てずに、毎日をいつものように過ごしてください。<br><br>　出会いを求めているなら、自分のウリはどこなのか、ゆっくり考えてみるといいかも。自分で思っているチャームポイントと、周りが思うのは違うみたい。周りに尋ねてみてくださいね。',
		),
		array( "sh2019_0032_2", 
'　この月は、仕事場でお祝いしてもらえることが多いかも。祝福は素直に受け取っておいて大丈夫です。裏をかこうなんて思う人は、今はいないですからね。この月は意外と時間がとれるので、いつもより余裕を持って仕事に取り組めると思います。無理にスケジュールを埋め尽くそうなんて思わずに、せっかくなので職場の人たちと交流を持つのも悪くないかも。いつもなら断る飲み会に参加するとか、逆に懇親会を企画してみるのもおススメですね。<br><br>　仕事自体も、プレッシャーのかかるものが少ないみたい。こういうときこそ、簡単なミスをしないよう、再度確認を。<br><br>　仕事の調子も良いですし、抱えている悩みもスルスルと解決するのが視えます。時間が解決してくれるんですよ。',
'　やっと大きく動き出す時期に突入しました。ずっと頑張ってきたのになかなか結果が出なかった仕事を、評価してもらえそう。[%NAME_SELF%]さんの努力を買ってもらえるみたいです。次の段階へとステップアップする時期でもあるんですね。ひとつの仕事に区切りがついたけど、そこで一休みするよりも、勢いで、次へと進んだほうがいいかも。新しいアイデアがあれば、思い切って提案してみてくださいね。<br><br>　それと転職とか独立とか、大きな決断もしていい時期みたい。お声がかかったら、考えてみて。ずっと悩んでいたなら、動き出してもいいんじゃないかな、と思います。<br><br>　ピンチもチャンスに変わりますから、一瞬落ち込むことがあっても、そこから大きくジャンプできると信じて。',
'　仕事に行き詰まりを感じたり、スランプに陥ってしまいそう。そういうときは無理に進もうとしないで、休憩をとってくださいね。しっかりと体力をつけるのが大事。そのために美味しいものを食べて、自分を元気づけてあげるといいですよ。小さなミスが多くなりそうだから、確認する癖をつけてくださいね。<br><br>　仕事の速さよりも、質を重視。丁寧に文字を書く、というだけでも十分、周囲から評価されるんですよね。<br><br>　それとデスク周りを、きれいに片づけておくのも習慣にしてみてください。いつもどこに何があるか把握していれば、いざというときに困りません。周りからも好感を持たれて、一石二鳥ってことです。なるべくリラックスして、仕事に向かってくださいね。',
'　今、ここで頑張っておけば必ず道が開けそう。この月は仕事の結果や評価よりも、[%NAME_SELF%]さんができる限りの努力をしてみてくださいね。結果はついてきますから。<br><br>　英会話ができたら有利だと思えば、早速英会話を習いに行くんです。パソコンの勉強とか対人関係のスキルとか、学べるものがあればどんどん詰め込んじゃって。面白いように身について、苦手意識があったものは克服できるみたい。<br><br>　それと社内で面倒な派閥争いとかが、起きそうな予感。どちらに味方するか決めるより、中立を守るのが賢いやり方だと思います。その結果、孤立しても大丈夫。必ず後でその判断が、周りから評価されるんですね。一気に株が上がるチャンスでもありますから、自分を貫いて。',
'　なんかこう、力を入れるとかえって壊しちゃうものってあるじゃないですか。この月の仕事運気は、全般的にそんな感じなんです。だから、肩の力を抜いてくださいね。部下が思い通りに動かないとしても、そこでお説教をするとかえってすねて何もしなくなりそう。<br><br>　その人がやらないなら、その仕事を誰かに振ってあげるのがいいですよ。余裕のある人を見つけて、頼むんです。その人は実績が積めるし、[%NAME_SELF%]さんは采配を振るえて高評価。やる気のない人にも、少し考える時間をあげられますよ。<br><br>　この月はあまり大きな目標を立てず、その日にやることをその日のうちに終わらせる、くらいの感覚でOKだと思います。とにかく頑張り過ぎないってこと。なるようになるんですから。',
'　今の状態をキープするのが、この月のポイントですね。新しい業務を任されたとしても、「これをこなせば出世の道が開けるかも」なんて、期待はしないほうがいいです。先のことは考えないで、まずは淡々と確実にこなすこと。<br><br>　というよりも、できるだけ新しい作業は引き受けないほうがいいみたい。お断りできるようなら、お断りしてくださいね。<br><br>　この時期、大きな動きをすると足元をすくわれそうな暗示があるんです。だから、できる限りいつもと変わらない仕事をするのがおススメ。次の月になったら引き受ければいいんです。もちろん、転職とか独立もこの月は保留にして。下調べをするくらいなら大丈夫だから、その程度に留めてください。感情的になりやすいのでそこも注意してください。',
'　大きな期待が持てる運気ですね。これから先のビジョンが見えてくるみたい。これをこのまま進めると、この時期にこれくらいの結果が出る、とかですね。それがどう出世につながっていくのか、収入にも影響するのがわかるはず。そうなると、がぜんやる気が出てきちゃいますよね。<br><br>　手堅く成功の道を歩むには、スケジュール管理が大切。一日の流れを把握して、それを一週間、一カ月って拡大させていくんです。大きな流れが見えてくると、節目やポイントも見えてくるはず。そうすると、どの作業が重要になってくるのかわかるでしょ。<br><br>　それと、キーパーソンも見えてくるから、成功への足掛かりも作れるはず。この月はわくわくしながら仕事ができるので、あっという間ですよ。',
'　[%NAME_SELF%]さんに周囲からの注目が集まってくる時期みたいです。良いところを見せようと思って、大成功を狙うよりも、コツコツ小さな成功を積み重ねたほうが良いと思いますよ。頼まれごとは積極的に引き受けて、好感度アップにつなげて。割の合わない仕事だと思っても、引き受ける心意気が大事なんです。また仕事仲間の相談にも、積極的にのってあげてくださいね。これが全部、あなたの評価につながるから。<br><br>　この月の運気自体は、落ち着いています。だから、良くも悪くも周りは冷静にあなたを見つめているんですよね。誠実な仕事をしていれば、正当な結果が得られるのは確かですよ。そして、適度な休息をとることで、リフレッシュにもつながるはず。根をつめないでくださいね。',
'　ずーっと先に、ゴールが見えてきています。まだまだそこまでの道のりは遠いですが、それでも見えてきただけ安心ですよね。そこまで走り寄るんじゃなくて、着実に一歩ずつ進んで行ってください。基本的に落とし穴はないみたい。でも油断せずに、いてくださいね。<br><br>　ここで重要なのは、確かな情報を集めることかなって思います。物事は常に流れて動いていますから、最新の情報を手に入れると助かるはず。というのも、たまにストレスがたまって、仕事を投げ出したくなってしまいそうだから。霞がかかってゴールが見えなくなってしまうと、不安にも襲われると思うんです。<br><br>　でもそこで頼りになるのが情報なんですね。そこは右、ここは左と灯台のように道を照らしてくれますよ。',
'　頑張ろうっていう気持ちはあっても、なんだか空回りしてしまいそうなこの月。でも、そんなときは頑張らなくていいかなって思うんです。無理に仕事を片づけてミスをしてしまったり、体を壊してしまったりしては、元も子もないですからね。それなら、できる分だけの仕事をすれば良いですよ。<br><br>　誰だっていつでもパワフルにはいられません。それに成功の陰にはたくさんの失敗や失望もあるはずなんです。そこでどう乗り切るか、がこれからに影響すると思いますよ。<br><br>　この月は休みが取れるならできるだけ休んで、普段も定時に退社。健康グッズやお気に入りのドリンクを持ち込んで、職場を快適に過ごす工夫をしてみてくださいね。急ぎの仕事はほかの方に頼んじゃうことです。',
'　自分の仕事の方針と、目の前にある事柄をしっかり見つめてくださいね。というのも、この月は正しい決断力が求められる時期なんです。誰にどんな業務を任せるのか、どこと取引をするのか、とかですね。判断を間違えないためには、大きな目標をザックリと頭に描いておくと良さそう。<br><br>　それとか、収入を重視するのか、やりがいを重視するのか、みたいな部分も判断材料になってくると思います。今までの業務よりも、プレッシャーはありますが、やる気が起きてくる場面が多いはず。この月の行動が来月に生きてきますから、慎重さと大胆さを駆使してくださいね。<br><br>　転職や独立といった決断にも適したときかな、って思いますよ。改めて検討してみるのもよさそうです。',
'　のんびりとした時間が流れ、仕事がしやすくなる時期みたいです。バリバリ働きたいって思っているなら、少し物足りないかも。でも、こういうときこそ、仕事の仕方を見直したり、新しい仕事グッズをそろえたりするのにちょうど良いですよ。<br><br>　特に新しいパソコンや携帯を買ったなら、使い方をマスターするのに時間がかかるはず。そういう時間がたくさん取れるんですから、これを機に買い替えも良いかも。<br><br>　実は、仕事運全般にあまり勢いがないときなんですね。でも「追い立てられてする仕事より、じっくり向き合える仕事を選んで」っていうサインだと思います。そして、ゆとりのあるスケジュールを組んで、その合間にスキルアップするなどがおススメですよ。',
		),
		array( "sh2019_0032_3", 
'　大きな波はないんだけど、ダラダラとお金を使ってしまいそうな予感。歩けばいい場所なのに、タクシーを使ったり。買いたいものがあってもちゃんと調べれば、もっと安く買えるのに、面倒で高いまま買ってしまったり。せっかく時間に余裕があるときだから、お料理を習うとか英会話を勉強するとか、生きたお金の使い方をしてみてくださいね。<br><br>　可もなく不可もなくっていう金運なんです。だからこそ、良い方向へと転がすために、わくわくするようなお金の使い方をしてほしいんですよ。<br><br>　高額のクジや賭け事はやめておいた方がいいですね。でも、町内の福引とか懸賞とかにはツキがありそう。こまめに情報をチェックして、スタンプなどをためるとか、福引を引いてみてくださいね。',
'　新しい展開が待っている時期ですから、出費は仕方ないかも。初デートをするとか、新しい部署に転属になるとか、そんなときは洋服を新調したくなると思います。それに効率よく作業を進めるために、高性能のマシンが欲しくなることもありそう。これらは、出し惜しみせずしっかりいいものを選んで、購入してくださいね。後で使ったお金は、しっかり取り返せるみたいです。<br><br>　金運としては流れが良く、たまたまポイントがたまっていたから、安く買えたとか、そういう発見もありそうですよ。一度、ポイントやマイル、電子マネーなど残高を確認してみてくださいね。<br><br>　それと、この月から新しい電子マネーを始めると、経済観念が磨かれて賢くなれそう。試してみるといいですよ。',
'　好調な金運と言える時期ですね。棚からぼたもちという感じではなく、[%NAME_SELF%]さんが動くことでお金が舞い込んでくるんです。例えば久しぶりに実家へ帰ったらお小遣いがもらえるとか、懸賞に応募したら当たったとか。何かアクションを起こすと、そこにラッキーがついてくるみたい。ですから、できるだけお金をかけずに、やれることを探してやってみてくださいね。<br><br>　それと、貯金の目標額を決めて貯金を始めるのも、都合が良い時期かも。目的が旅行などでもいいんですよ。〇〇円貯めて海外旅行に行こうって感じです。すると、毎日の貯金が楽しみになって、張り合いも出てくるはず。<br><br>　ちょっと贅沢してもお金が貯まりやすい時期ですから、生活が潤いますよ。',
'　儲け話が持ち込まれたり、サイドビジネスに興味がわきそうな時期です。でも、この月は話の半分が危険なものみたい。残り半分は確かに悪い話じゃないって感じなんですね。ですから[%NAME_SELF%]さんの見極めに、かかってくると思いますよ。うまく正しいほうを見分けられれば、これから先定期的な臨時収入が見込めそう。迷ったなら、誰かに相談するよりは、こっそりインターネットなどで調べてくださいね。他言は無用です。<br><br>　金運自体は波がある状態ですから、派手に使わなければ、大きな痛手はないみたいです。お小遣い程度のラッキーも。<br><br>　それとひとりの時間にツキがありそう。好きな音楽を聴くとか、好きな映画を見るとか、そのための出費は心を磨いてくれるので惜しまずに。',
'　誰かに贈り物をしたけれど感謝されないとか、空しくなりそうな時期かも。この月はお金を使っても、それに見合ったものが得られないかなって思います。それなら使わないほうが賢明ですよね。誰かのためにお金を使うなら、自分のために使うのが良いですよ。それに入ってくると思って期待したお金も、来月に持ち越しされそう。<br><br>　金運の流れ自体、とても静かなんですね。ですからあまりお金を動かさないほうが、良さそうです。<br><br>　とりあえず、いらないものを処分して、お小遣いを確保してください。と言ってもこの月に売るのではなく、来月。この月は不用品の整理や搬出だけしておいて、運気が上がってから売るのが賢いかなって思います。部屋の片づけも運気上昇のきっかけに。',
'　節約に徹すると良い時期ですね。欲しいものがあっても我慢して、それを貯金へ回すんです。食べたいもの、やりたいこと、たくさんあると思います。でもそれを我慢してみてください。すると、今あるもので生活するっていう、知恵と工夫が生まれるんですね。それが新しい成功を運んだり、大金を手にするきっかけになりますよ。しかも、いつの間にかお金がたくさん貯まっていますから、ちょっと嬉しくなる修行みたいなもの。<br><br>　この月は感情の浮き沈みが激しいみたいです。だからこそあえて自分を追い込んで、精神力を鍛えてくださいね。<br><br>　せっかくですから、貯蓄について勉強してみて。銀行にただ預けるだけでなく、もっと賢く増やせる方法があるはずですよ。',
'　堅調な時期ですから、手堅く賢くお金を動かせそうですよ。この月の[%NAME_SELF%]さんは、金銭に関する行動力と情報力が高まっているみたい。鼻が利くっていうのでしょうか。お得なバーゲンセールが開かれるという情報を耳にしたら、即座に買い物へ出かけるんですね。安く仕入れて高く売る、っていう商売の基本ができているみたい。<br><br>　そのおかげでサイドビジネス並みの収入を得られますよ。これから値が上がりそうな商品を見つけたり、流行しそうなものをいち早く確保しちゃえます。先見の明があるんですね。<br><br>　それと、お小遣いサイトを駆使して、どんどんクーポンをゲットしたり、キャンペーンで臨時収入もありそう。「これ才能じゃない？」と思うくらい、お金が浮きますよ。',
'　金運の流れとしては、よどみなく流れているって感じなんですね。ですからその流れを止めないように、慎重にお金を扱ってください。というのも、最初の時点で判断してしまうと、後悔するのが視えるから。例えば素敵な洋服を見つけて思い切って買ったら、別のお店でもっと安く売っていたのを発見するとか。冠婚葬祭が続いて、最初は大盤振る舞いしていたけど、最終的にカツカツになってしまったとか。買いこの月は何事も、最初のひとつ目で判断せず、一旦待ってみてください。しばらくすると、お得な話がやってきますからね。スーパーも二軒ほど比較してから、どちらで買うか決めるんです。<br><br>　臨時収入は少ないですけど、お金を浮かせることができる時期ですよ。',
'　金運は、大きな収入を得られなくても、ホクホクするようなお小遣いが見込めそう。この時期はお金を動かしやすいんですよね。ですから、誰かに何かをもらったら、そのお返しをするんです。するとさらに良いものがもらえて、まるでわらしべ長者のよう。最終的には、かなり高級品を手に入れているかもしれませんよ。<br><br>　なるべく停滞させず動かすことがツキを呼び込む秘訣。なので節約や貯蓄よりも、お金をうまく回して言ってください。<br><br>　プレゼントや手料理、休憩にコーヒーをご馳走してあげるなど、誰かの心を温かくするためにお金を使ってみて。すると、すぐにいい流れがやってきて、くじや懸賞も当たりやすくなるみたい。タンスの奥からお金が出てくることも。',
'　金運は収入よりも、支出が上回ってしまいそう。何となく気分がすぐれなくて、ぼんやりしていたら、お財布を落としてしまったとかですね。体調そのものがあまりよくないので、病院へ行ったり、仕事を休んだりして、ますますお金の入ってくる道が断たれてしまうみたいです。<br><br>　自分を元気にするためにお金を使うなら、進んでやってみてください。エステでも旅行でも食事でも。ただ、お金を落とすとか、せっかく買ったチケットを落とすとか、そういうケアレスミスには注意したほうが良いですよ。本当にもったいないですから。<br>しばらくすると金運も体調と共に回復してきます。それまではあんまり出歩かないほうが、賢明かも。良い休憩だと思って休んでくださいね。',
'　おおむね良好というか、入ったり出たりすることが多い時期ですね。入っても出ていくから手元に残らないように思えますけど、違うんです。それはしっかりと未来への種まきになっているんですよ。そして必ず大きな実をつけて収穫できますから、しばらくこの出入りを止めないでくださいね。ちょっと厳しいと思っても、大枚をはたく度胸が必要。<br><br>　またギャンブルにもツキがあるみたいですから、競馬やパチンコなどに少しお金を使ってみても良いかもしれません。スクラッチなどのクジも良いですし、ロト6みたいなクジを買ってみるのもおススメです。<br><br>　仕事面が大きく変化していく時期ですから、それに伴ってお金もかかります。でも必要経費ですから惜しまずに使ってくださいね。',
'　少しお金にはゆとりが持てる時期ですけど、節約しながら使わないと、最後にはなくなってしまいそうです。それほど、収入があまり見込めません。冠婚葬祭や飲み会、お見舞い、お土産代など、何かと物入りが続きそう。こういうのって、重なるじゃないですか。でもケチってしまうと、相手からの印象も悪くしてしまいますからね。<br><br>　この月は、こういう経費は一律いくらまで、と上限を決めておけば気持ちも楽ですよ。人によって差をつけると心苦しいですし、「そう決めたのだから」と思えば[%NAME_SELF%]さんも実行しやすいはず。<br><br>　またあなた自身も疲れているようです。温泉などに入ってゆっくりしてください。そのためのお金もうまく節約すれば、安く行けるはず。自分を癒やすと良いですよ。',
		),
		array( "sh2019_0032_4", 
'　一番好調な面は、プライベートじゃないかな。仕事も恋愛も悪くないんですけど、際立ってスゴイっていうのもないんですね。<br><br>　でも、そこからつながっていく私生活がとても充実しているはず。仕事仲間と飲みに行ったら、気の合うことがわかって仲良しになりそうです。気になっていた異性と距離が近くなって、それも家に帰ってからのメッセージ交換が楽しく感じると思いますよ。<br><br>　スーパーでの買い物もウキウキするし、新しいお店ができてお気に入りに登録したり。ほんの少し毎日に彩りが添えられて、ほら、まるでちょっとした花束をもらったような温かい気持ちってあるじゃないですか。そんな感じになるんです。財布のヒモだけしっかり締めて、有意義な時間を過ごしてください。',
'　[%NAME_SELF%]さんが輝くのはまさに仕事の面ですね。やる気に満ちていてエネルギッシュなのがわかるし、周りにもそのパワーが影響を与えるんですよ。あなたを中心に職場が活気だって行く様子が視えます。素晴らしい決断力、堂々した姿勢は、未来のリーダーになることを感じさせるはず。ここは思い切って、物事を推し進めていってくださいね。<br><br>　新しい物事ほど、あなたの意欲を掻き立てるものはないんじゃないですか？　古いものと新しいもの、二択を求められたら、迷わず新しいものを選ぶと良いですよ。<br><br>　また、改革というテーマで動くのも悪くないかも。古い体制をぶち壊しちゃって、あなたがルールを作るとか。そうなれば、後世に語り継がれるスゴイ人になれそうです。',
'　恋愛面でキラキラ輝いているのが視えます。この月の[%NAME_SELF%]さんは、無意識にチャーミングな仕草や行動を、とっているんですよね。ですから、街を歩いていても通り過ぎるたびに、異性が振り向く、なんて場面を体験できるはず。これが癖になって、街を歩かずにはいられない、なんてウキウキした毎日になりそうです。<br><br>　すれ違うだけでこれなんだから、合コンや飲み会でもかなりの確率で、お気に入りの異性と親しくなれるはず。それ以外の異性からもアプローチがあって、引っ張りだこですね。うらやましい。<br><br>　ここで鼻高々にならず、あえて謙虚に振る舞うと異性の敵も減らせそう。せっかくモテ期なんですから、無用なトラブルは避けたいところです。ハッピー気分を楽しんで。',
'　派手な運気ではないんですけど、あなたの仕事で頑張っている姿が何より輝いているみたい。この月はあなたが、あまり誰かと一緒にいたくないんだと思います。それがかえってクールな孤高の人っていう印象を与えるんですね。<br><br>　誰にも頼らない、甘えたことも言わない、ただ黙々と自分のやるべきことをやっているだけ。なんかこう、渋いじゃないですか。その姿にあこがれを抱く人も、ちらほら出てくるみたいですよ。その調子で、自分の世界を持ち続けていてくださいね。<br><br>　あなたがマイペースなので、それが気に入らず邪魔をしてくる人もいるみたいです。でも相手にしていたら、同じレベルだと思われてしまいますからね。相手にしないのが一番。ますます高評価です。',
'　なかなか思うようにいかない時期なんですね。ですから、仕事にしても恋愛にしても、なかなか輝けないかも。その中で何とか好調なのは、自分の生活を充実させている部分ですよ。ほかの分野が停滞気味だと、自然にそうなってしまうのかもしれません。<br><br>　仕事を終えてからのあなたの表情は明るく、穏やかな雰囲気を醸し出しているんですね。休憩中のあなたも、飲み会でのあなたもなんだか楽しそう。部屋にひとりでいるときも、くつろいでいるんじゃないですか。それが穏やかで楽しそうな表情を作るんだと思います。<br><br>　単純に、仕事が終わって解放されたっていう、解放感なのかも。せっかくなので何か予定を入れてみたらいいかな、と思います。仕事以外ならなんでも楽しくなりそう。',
'　節約の鬼、と化しそうなこの月。実はお金に関してあれこれ行動しているときが、一番輝いているんですね。節約というのはうまくやらなければ、周りからケチと言われて、印象を悪くしてしまいます。<br><br>　けれども、この月のあなたはそんな印象を与えず、むしろマネーのセンスが光っているように感じるんですよ。だから周りもつい見習いたくなってしまいそう。ギスギスした感じにならず、なのに着々とお金を貯めているみたいだから。<br><br>　あなたが楽しんでお金について勉強しているからだ、と思うんですね。楽しいとどんな難しいことも、挑戦したくなるじゃないですか。あなたは自分でも気が付かないうちに、かなり金銭感覚が鋭くなっていってるはずです。これは武器になりそう。',
'　この月、[%NAME_SELF%]さんが輝くのは仕事の分野かなって思います。恋愛もなかなかの輝きを放っているんですけれど、それに気づくのは恋人や知り合いなど、近しい人がほとんど。でも仕事の場合、初めて会った人たちからも、称賛してもらえるみたいなんです。<br><br>　ほら、何かつきものが落ちたっていうか、スランプから脱出したというような、スッキリした雰囲気が漂っているんですね。爽やかで人間的な清潔感を与えるような。そんな雰囲気で仕事を進めていくもんだから、周りは手が止まってしまうかも。<br><br>　この時期は抱えていた問題が解決したおかげで、仕事がやりやすくなるんですよね。だから、面白いように物語が進むし、人気や評価も絶大。勝って兜の緒を締めるのを忘れないでくださいね。',
'　全体的な流れは慎重なんですけど、なぜか恋愛に限っては、大胆に行動できそうな時期。一番輝くのは、まさに恋愛面じゃないかなって思います。普通ならば躊躇してしまうことでも、「やってみなくちゃわからない」と挑戦するような前向きさがあるんですよね。<br><br>　しかもこの時期、運気の後押しがありません。それなのに、まるで何かに背中を押されているかのように、勇気や度胸が垣間見えるんですから。キラキラ輝いて、まぶしいくらいですよ。<br><br>　無鉄砲なくらいに行動しても、良いと思います。一度フラれた相手にだって、再告白で成就なんていう、ハッピーもありそう。難しい恋愛も動き出す可能性があるので、復縁や略奪愛も悪くないです。欲しいものは手に入れてくださいね。',
'　恋愛の分野で、[%NAME_SELF%]さんが輝けそうなこの月。運気としては安定期なので、悪くないんですよね。でも仕事はあまりやりがいが感じられないとか、ちょっとゴールが遠くて気持ちが折れそう。ところが恋愛はその仕事運をカバーするくらい、ほっこりするような時間が送れるはずですよ。<br><br>　初対面の相手から好感を持ってもらえるのは、幸せですよね。そんな出会いがまずたくさん味わえます。ただ何といっても、好きな相手から想ってもらえるという時間が、たまらなく充実するんです。ずっと片思いだったなら、恋の成就で一気に人生が開花するんじゃないかなって思いますよ。<br><br>　あなたがあんまりガツガツしてない部分も、良いんだと思う。その調子で恋愛にさりげなく重点を置いてみて。',
'　全体的にトーンダウン気味の時期ですから、輝くとしたら、恋愛をしているときかなって思います。恋愛自体はなかなか前に進まないかも。それに思った結果と違う場合もあるんですね。それでも、やっぱり恋をしている人というのは、どこか輝いているものじゃないですか。好きな人に思いが届かず涙したとしても、その姿が素敵なんですよね。<br><br>　ですから、運気が低迷しているからと言って落ち込むのではなく、輝いている自分を信じていてくださいね。それを必ず誰かは見ているから。<br><br>　落ち込んで何もする気が起きないとか、オシャレする意欲も失うとか、そういう方向に進まないようにしてくださいね。もったいないですよ。毎日鏡を見て、自分を褒めてあげると良いです。',
'　仕事面がかなり調子の良い時期なんじゃないかなって思います。ちょっと責任のある役回りを任されるかも。でもそれって、[%NAME_SELF%]さんを見込んでいるわけですから。あなたじゃないとできないと思って頼んでいるので、二つ返事で引き受けてくださいね。<br><br>　その早急な対応も、あなたの輝きのひとつなんですよ。この時期はいろいろな決断を求められます。じっくりと検討したいところですが、中にはスピードを求められるものもあるみたい。<br><br>　そこで一瞬でも迷ってチャンスを逃したら、もったいないですよね。だから優先順位をつけて、急ぎのものからテキパキ片づけていくはず。その仕事裁きっていうか、働きぶりが何よりも魅力的ですよ。カッコいいという評判が待っていそう。',
'　仕事の合間にスキルアップしている[%NAME_SELF%]さんが、何よりも輝いているみたい。この時期はゆっくりとした時間が流れていますから、あなたも「何かやりたい」と思うのかも。そのために計画を立てている姿も楽しそうですよ。買い仕事でエネルギッシュに活躍するのも良いですが、のんびりとした雰囲気を醸し出すあなたも悪くないですね。それが周りにも、癒やしになっているんだと思います。<br><br>　この時期は、特に急いでやるべきことがないみたい。だからゆっくりじっくり、スキルアップに取り組んでみてくださいね。集中して取り組めば、身につくのも速いはずです。忙しくなってきたら、あなたのスキルが引っ張りだこになるかも。楽しくできることを探すと良いですよ。',
		)
		);
?>