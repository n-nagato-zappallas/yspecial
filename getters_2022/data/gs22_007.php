<?php
/**
 * menu_id : gs22_007
 * ゲッターズ飯田：一人用 健康家庭運
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'gs22_007',
			'contents'			 => 'getters4',
			'img_name'			 => 'getters4',
			'teller_name'		 => 'ゲッターズ飯田',
			'isp_mid'			 => '53x006',
			'nif_menukey'		 => 'unsei_2022_007',
			'price'				 => '500',
			'discount'			 => '475',
			'design_cd'			 => '5',
			'person'			 => '1',
			'category_name'		 => 'home',
			'release_date'		 => '20211220',
			'title'				 => '不安解消！　ゲッターズ飯田【あなたの健康＆家庭運◆2022年度版】',
			'caption'			 => '恋愛運や金運、仕事運など他の運気を上げるために重要なのが「家庭運」や「健康運」です。あなたの2022年を活気ある年にするためにも、家庭運と健康運をチェックしましょう！　芸能人もこぞって頼る人気占い師ゲッターズ飯田が徹底鑑定いたします！',
            'base_1_title_self' => 'あなたの基本タイプ',
            'base_2_title_self' => '2022年のあなたの運勢',
            'base_3_title_self' => 'あなたの12カ月の運勢グラフ',
            '1_min_title'  => 'あなたの健康運1',
            '2_min_title'  => 'あなたの健康運2',
            '3_min_title'  => 'あなたの家庭運1',
            '4_min_title'  => 'あなたの家庭運2',
		);

// 小メニューロジック
$logic = 'a1';

// Next枠
$next = array( "gs22_004", "gs22_005" );

// 一部見せテキスト
$free = array(
		array( "gs22_007_1", 
'<b>下半期は疲れが出やすいので、こまめなケアを</b>　「健康管理の年」と名付けるくらいなので、2022年からは生活習慣の見直しや健康的な生活を意識することが大切です。軽い運動や食事のバランスを年齢に見合うようにして、飲酒や喫煙なども今後を考えて少し控えるようにすると良いでしょう。<br><br>　運気的にもまだまだ登り調子で忙しい時期なので、……',
'<b>しっかり体を休ませて、美意識も高める</b>　2022年は、体調を頻繁に崩す運気ではないですが、「チャレンジの年」の二年目は、予想外に忙しくなる運気でもあります。予定を詰め込み過ぎてしまい、疲れを溜めてしまうことがあるのでマメに休み、しっかり体を休ませる日を作ると良いでしょう。<br><br>　ただ、根が真面目な分、一度休むことになれてしまうと、……',
'<b>美意識を高めるために定期的な運動を</b>　2022年は、最もパワフルに行動できる最高に健康な年。自分でも数年若返ったのではないかと思うほど身が軽くなったり、絶好調を感じる日が多くなるでしょう。「金のインディアン座」は、忙しい方が充実するタイプでもあり、予定がなくボーッとしている方が逆に疲れてしまうので、気になることにはどんどんチャレンジしてみると……',
'<b>まずは続けられそうな運動から始める</b>　「リフレッシュの年」なので、しっかり体を休ませて体調を整える必要のある運気。意識しないで過ごすと仕事も遊びも予定をいっぱいに入れてしまい、疲れをため過ぎて体調を崩す原因になります。2021年あたりから調子の悪い人は、病気が発覚して治療に時間がかかってしまうこともあるので、自分の体の変化に……',
'<b>2022年のダイエットで将来の体型が決まる</b>　問題なく健康で過ごせる1年。スタミナ不足を感じている場合は、2022年から体力作りを始めてみたり、スポーツジムに通い始めてみると良いでしょう。上半期は自分でトレーニングを始めて、下半期からはパーソナルトレーナーを付けて、少しハードな運動を行ってみるのも良いでしょう……',
'<b>不注意からのうっかり怪我に注意</b>　2022年は、楽しい時間も多く、時には無理に遊びの予定を詰め込むことも増える年。睡眠不足などで肌の調子が悪くなってしまったり、疲れを感じたりしそうですが、基本的には健康で楽しく過ごせる年です。注意することがあるとすれば時間を間違えたり、寝坊や遅刻であわてた際に、……',
'<b>体調の異変は肌から。夏の日焼けには注意する</b>　基本的には問題のない年ですが、下半期になると乱気の年の影響が出始めるため9月くらいから体調に異変を感じる場合があるでしょう。特に問題のない人でも、10月か12月に人間ドックを受診しておくと早期発見や病気になる手前で予防が上手くできることがあるので、必ず行くようにしましょう……',
'<b>胃腸が良くなり便秘などの悩みも解消</b>　2022年は、健康的で元気に過ごせる年。予定がいっぱいになっていても、問題なくパワフルに一年を過ごせる運気ですが、問題ないからといって連日連夜遊び過ぎてしまったり、仕事を詰め込みすぎてしまったりしないように。運気の良い2022年から健康的な食事を意識して、体を定期的に動かせるように、スポーツジムや……',
'<b>目に不調を感じたら、すぐに眼科でチェックする</b>　「裏運気の年」は、健康には特に注意が必要。すでに2021年の乱気の年に異変を感じている人や体調を崩している人は要注意です。早めに病院で検査や人間ドックを受診して、しっかり調べてもらうようにしてください。もし医者の説明に疑問を感じたら、セカンドオピニオンを行うのもいいでしょう……',
'<b>目と耳に異変を感じたら早めに病院で受診を</b>　「乱気の年」で最も注意が必要なのが健康でしょう。これまで健康に問題のなかった人ほど、2022年に入ってから急に体調を崩してしまったり、風邪を引いてしまったり、謎の肌荒れや疲れが抜けない感じが続いたりしたときなどは、早めに病院に行って検査を受けましょう……',
'<b>美意識を高めてイメチェンをする</b>　「チャレンジの年」はここ数年で体力の低下を感じたり、体型に問題が出ている人ほど、定期的な運動を始めてみたり、スポーツジムに通い始めたりするなど、生活習慣の見直しをするといいタイミングです。<br><br>　急にハードな運動は継続できない原因になってしまうので、仲間で楽しくできるスポーツやサークル的な……',
'<b>生活リズムを整え睡眠時間を確保する</b>　太陽がさんさんと輝く南の海で泳いでいるイルカと同様に、温かい場所がオススメのタイプですが、裏運気になると深夜の仕事や就業時間の変化、寒い場所での仕事、一人での作業が増えるなど、不向きなことが多くなり体調を崩してしまったり、ストレスを抱えてしまったりするような流れになります。<br><br>　2022年は生活リズムを……',
		),
		);


// 結果テキスト
$text = array(
		array( "gs22_007_1", 
'<b>下半期は疲れが出やすいので、こまめなケアを</b>　「健康管理の年」と名付けるくらいなので、2022年からは生活習慣の見直しや健康的な生活を意識することが大切です。軽い運動や食事のバランスを年齢に見合うようにして、飲酒や喫煙なども今後を考えて少し控えるようにすると良いでしょう。<br><br>　運気的にもまだまだ登り調子で忙しい時期なので、体のことを考えている暇がなく、予定を詰め込み過ぎてしまう場合も多くなります。上半期は全力で走り切っても大丈夫ですが、下半期の特に年末はムリをしないようにして、体調に異変を感じた場合は早めに病院で検査をしたり、秋に人間ドックを受診してみたりすると良いでしょう。<br><br>　下半期は、大きな病気というよりも疲れを感じることが多くなりそうなので、温泉やスパに行ったりマッサージやストレッチを行ったりするのが効果的です。肩こりが酷くなってしまうこともあるので、首や肩を動かしたり回すようにするなど、朝や寝る前に軽いストレッチを行う癖を身につけておきましょう。<br><br>　秋以降は鼻炎や蓄膿症に悩むこともあるので、異変を感じたら早めに耳鼻科に行くこと。胃の調子も悪くなりやすいので、刺激が強いものや辛すぎるものなどはなるべく避けておきましょう。',
'<b>しっかり体を休ませて、美意識も高める</b>　2022年は、体調を頻繁に崩す運気ではないですが、「チャレンジの年」の二年目は、予想外に忙しくなる運気でもあります。予定を詰め込み過ぎてしまい、疲れを溜めてしまうことがあるのでマメに休み、しっかり体を休ませる日を作ると良いでしょう。<br><br>　ただ、根が真面目な分、一度休むことになれてしまうと、今度はサボり癖がついてしまう場合があります。休むとサボるは大きく違うので、時間や日にちをしっかり決めて体をいたわるようにしましょう。2022年は、忙しいからといっても軽い運動や柔軟体操などを行うようにしておきましょう。<br><br>　また、2022年は周囲から誘われたスポーツがあるなら、面倒だと思っても参加してみると良い経験になりそう。苦手だと思っても、参加してみると思った以上に楽しい思い出ができたり、人間関係が面倒だと思っていたのがクリアーできる可能性もあるでしょう。<br><br>　2022年は、美意識を高めるにも良い時期。「銀の羅針盤座」は、品性を忘れると運気が急激に悪くなるタイプでもあるので、マナー教室に通ってみたり、華道や茶道などを習うのも良いでしょう。姿勢や所作がきれいになって魅力も運気もアップできます。<br><br>　2022年は体験教室でも良いので、気になった物があるなら一度挑戦してみましょう。古武道、合気道、弓道など、目にとまったら試しに見学してみたり、日舞や伝統芸能も美意識が高められて良いので、時間が空いたときには調べてみて、思い切って参加してみましょう。',
'<b>美意識を高めるために定期的な運動を</b>　2022年は、最もパワフルに行動できる最高に健康な年。自分でも数年若返ったのではないかと思うほど身が軽くなったり、絶好調を感じる日が多くなるでしょう。「金のインディアン座」は、忙しい方が充実するタイプでもあり、予定がなくボーッとしている方が逆に疲れてしまうので、気になることにはどんどんチャレンジしてみると良いストレス発散にもなって、楽しく元気で過ごせるでしょう。<br><br>　美意識を高めるためにも2022年から定期的な運動を始めてみたり、健康を意識した食事を工夫してみたりすると良いでしょう。「金のインディアン座」は道具を揃えて準備して、サプリや健康食品は購入したけれど、どれも中途半端で終わってしまうことがありがちです。2022年は目標を決めて何事も連続ではなく、1年を通して何となく続けている感じにすると、思った以上に効果がありそうです。<br><br>　新しい美容室に行って、思いきったイメチェンをすると良いでしょう。そもそも楽観的な明るい星を持っているので、明るい感じにすると思った以上に評判が良くなり、異性受けも良くなりそう。妄想癖が「自分は明るくない」と思わせてしまう場合がありますが、よく考えたら何事も前向きに考えられて、都合の悪いことを忘れているタイプだと覚えておきましょう。<br><br>　美意識を高めるにも、ダイエットや筋トレをスタートするにもいい運気。目標を決めて一気に行うよりも、健康方法と同じく、1年を通して何となくダイエットをしている感じで、筋トレも毎日ではなく週に2、3回程度で、1～2週間サボってまた気が向いたら続けるくらいが良いので、諦めたり勝手にやめないことが大切。',
'<b>まずは続けられそうな運動から始める</b>　「リフレッシュの年」なので、しっかり体を休ませて体調を整える必要のある運気。意識しないで過ごすと仕事も遊びも予定をいっぱいに入れてしまい、疲れをため過ぎて体調を崩す原因になります。2021年あたりから調子の悪い人は、病気が発覚して治療に時間がかかってしまうこともあるので、自分の体の変化には敏感になっておくと良いでしょう。<br><br>　特に周囲からの体に対する忠告には、しっかり耳を傾けておくことが大事。「顔色悪くない？」「疲れてない？」「寝てます？」など振り返って思い出しても良いので、心配をされるような話が出たときは、早めに休むか病院に行って精密検査をしてもらうようにしましょう。<br><br>　特に健康面で問題や異変を感じられない人は、美意識を高めるには良い年なので、無理のないダイエットを兼ねた基礎体力作りや、代謝アップのための運動をマメに行っておきましょう。1日数回でもスクワットや腕立て伏せ、腹筋、ランニングやウォーキングをするなど、連日ではなくても「この1年はこれまでよりも体を動かしたと言えるような年」にしてみましょう。<br><br>　「銀のインディアン座」は、とりかかるのは早くても継続しないことが多いので、最初から目標を高くしないことがポイントです。「1日10回のスクワット」など、実際に効果がどのくらいあるのかは考えないで、まずは続けられそうなプランからスタートしてみましょう。通勤も早めに家を出て、わざと遠回りで駅に向かうなど、ちょっとした工夫の積み重ねを楽しんでみると効果があらわれそう。',
'<b>2022年のダイエットで将来の体型が決まる</b>　問題なく健康で過ごせる1年。スタミナ不足を感じている場合は、2022年から体力作りを始めてみたり、スポーツジムに通い始めてみると良いでしょう。上半期は自分でトレーニングを始めて、下半期からはパーソナルトレーナーを付けて、少しハードな運動を行ってみるのも良いでしょう。<br><br>　目標を決めて始めてみると、長距離も走れるくらいの体に作り替えられるようにもなるので、最初はウォーキングからでも始めてみると、2023年にはハーフマラソンやフルマラソンを走れるようにもなれるかも。そこまで頑張らなくても良いですが、2022年から健康的な体作りをスタートするのは良いでしょう。<br><br>　また2020、2021年で体重が増えてしまったと感じる場合は、2022年はしっかり体を絞ったり、ダイエットをしておくと良いでしょう。2022年の体重は将来的に定着することになってしまうので、脂肪が気になると思うなら、1年を掛けて標準体重になるように頑張ってみると良いでしょう。<br><br>　逆に2022年体重が増えてしまうと、来年以降もそのままの体重で推移することになる場合が多いので、食生活を改めるようにして、深夜まで起きてダラダラ飲食をしないように早寝早起きを習慣にするなど、生活リズムを整えることも大切でしょう。',
'<b>不注意からのうっかり怪我に注意</b>　2022年は、楽しい時間も多く、時には無理に遊びの予定を詰め込むことも増える年。睡眠不足などで肌の調子が悪くなってしまったり、疲れを感じたりしそうですが、基本的には健康で楽しく過ごせる年です。注意することがあるとすれば時間を間違えたり、寝坊や遅刻であわてた際に、足の小指を激しくぶつけて痛みが引かないと思ったら骨折していたり、急いで階段をジャンプして捻挫したり、みんなと楽しくお酒を飲んで深酒して些細な段差で転んで大怪我をしたりなど、普段ならなかなかしないような怪我をする可能性があることです。<br><br>　どんなときも落ち着いて行動すれば怪我をすることもないですが、夏は毎年運気が乱れるので、2022年は日焼け対策をしっかりしてください。日傘や日焼け止めを忘れて肌の調子が悪くなってしまったり、プールや海に行って、日焼けをしすぎてシミになったりして後悔することもありそう。うっかりミスにならないように気をつけて過ごしましょう。<br><br>　美意識を高めるなら、楽しみながらのダイエットやスポーツがオススメ。忍耐強いタイプなので過酷なダイエットや筋トレの方が効果的のように思えますが、2022年はダンス、ヨガ、流行のダイエット方法、ボクササイズ、スポーツジムで水泳などを、友人や知人と楽しみながら続けてみると、体が思った以上に引き締まったり、代謝を上手く上げたりすることができそうです。<br><br>　楽しみながら運動するのは良いですが、体を動かした後に美味しくご飯を食べ過ぎたり、お酒を飲み過ぎたりしないように気をつけましょう。また、銀の鳳凰座は、ついつい夜更かしをしてしまうことが多いので、2022年は睡眠時間を少し多く取るように気をつけて、夜更かしする日と絶対にしない日を決めてみると良いでしょう。',
'<b>体調の異変は肌から。夏の日焼けには注意する</b>　基本的には問題のない年ですが、下半期になると乱気の年の影響が出始めるため9月くらいから体調に異変を感じる場合があるでしょう。特に問題のない人でも、10月か12月に人間ドックを受診しておくと早期発見や病気になる手前で予防が上手くできることがあるので、必ず行くようにしましょう。<br><br>　また、1、2月から定期的な運動やスポーツサークル、スポーツジムに通って、ストレス発散を兼ねて体力作りをしておくと良いでしょう。ただ心が庶民的な「金の時計座的」は「もったいない」と思うことも多いので、家でできる筋トレやストレッチ、動画を見ながらのトレーニングやヨガなどもオススメです。<br><br>　スクワットやウォーキングなどは1日の回数や距離を決めて始めてみると良いですが、継続と連続を間違えないでください。必ずしも毎日できなくても良いので、1年を通して何となく続けられるくらいに頑張っておきましょう。<br><br>　体調の異変は肌から出やすいタイプですが、友人と楽しく話をできる時間や音楽をゆっくり聞く時間などを定期的に作るなど、ストレスが溜らないようにする工夫をし、ストレス発散も心がけるようにしましょう。スキンケアに気を使い、ゆっくり入浴する習慣も忘れないようにして、夏は日焼けに注意してください。日焼け止めを忘れずに、日差しの強いときは日傘を持ち歩くようにしましょう。',
'<b>胃腸が良くなり便秘などの悩みも解消</b>　2022年は、健康的で元気に過ごせる年。予定がいっぱいになっていても、問題なくパワフルに1年を過ごせる運気ですが、問題ないからといって連日連夜遊び過ぎてしまったり、仕事を詰め込みすぎてしまったりしないように。運気の良い2022年から健康的な食事を意識して、体を定期的に動かせるように、スポーツジムやスポーツサークルに入っておくと良いでしょう。思った以上に波長の合う仲間や友人もできて楽しい時間を過ごせて、ストレスの発散もできそうです。<br><br>　「銀の時計座」は肌が弱く、肌荒れやニキビに悩むことが多いのですが、2022年は不思議と悩む日が少なくなり、調子の良さを実感できそう。また胃、小腸、大腸の調子が良くなる時期でもあるので、気になる健康法があったら試してみると、便秘などの悩みも解消されるでしょう。<br><br>　1年を通して健康的に過ごせそうですが、不健康な生活をしていたり、体に日々負担を掛けていたりした人は、2022年は運気が良いからこそ体調を崩してしまうこともあります。それは体の発するサインで、そのことがきっかけで生活リズムを整えると未病の処置が事前にできる場合があります。<br><br>　病気が発覚しても早期発見で命が助かる場合もあるので、体調に異変を感じている場合は、早めに病院に行って検査をしてもらうと良いでしょう。異変を感じながらそのままにしていると、乱気の年や裏運気の年で後悔することになるので気をつけましょう。',
'<b>目に不調を感じたら、すぐに眼科でチェックする</b>　「裏運気の年」は、健康には特に注意が必要。すでに2021年の乱気の年に異変を感じている人や体調を崩している人は要注意です。早めに病院で検査や人間ドックを受診して、しっかり調べてもらうようにしてください。もし医者の説明に疑問を感じたら、セカンドオピニオンを行うのもいいでしょう。<br><br>　ただ、あまり神経質になってしまうとストレスの原因になるので、不調の原因が不明な場合は、栄養バランスの良い食事を心掛けて、軽い運動を行うなど、生活習慣をこれまで以上にしっかり整えるようにしましょう。時間があるときは、スマホやＴＶを見るのでもコメディ映画やお笑い番組、お笑い芸人のネタ、落語などの笑える動画など、笑いに繋がるコンテンツを見るようにすると良いでしょう。<br><br>　扁桃腺を腫らしてしまうことも増えるので、うがいと手洗いをこれまで以上に丁寧にするようにしてください。鼻うがいもオススメです。他には腰を痛めやすいので、ぎっくり腰には特に注意が必要です。重たい物を持つときは、膝を曲げてから持ち上げるように意識しておきましょう。<br><br>　「金のカメレオン座」が最も不調が出やすい目にも注意が必要です。突然、老眼が進んだり、白内障や緑内障などの問題も出てきたりする時期なので、目に異変を感じたら早めに眼科で検査をするようにしましょう。視力検査をしたら驚くほど視力が低下していて驚くこともあるでしょう。また、偏頭痛に悩まされる可能性も高いので、その場合は脳ドックを受診する必要が出てくるかもしれません。',
'<b>目と耳に異変を感じたら早めに病院で受診を</b>　「乱気の年」で最も注意が必要なのが健康でしょう。これまで健康に問題のなかった人ほど、2022年に入ってから急に体調を崩してしまったり、風邪を引いてしまったり、謎の肌荒れや疲れが抜けない感じが続いたりしたときなどは、早めに病院に行って検査を受けましょう。診断に疑問に感じた場合は、他の病院でセカンドオピニオンを聞くのも良さそうです。<br><br>　特に目と耳に異変を感じる場合は「自然に治る」と思わないで、早めに病院に行くようにしましょう。すでに2021年の下半期辺りから違和感を感じているなら、そのままにしておくと後悔することになるかもしれません。女性の場合は、乳がん検診や婦人系の病気の検査は、2022年は必ず受けておくようにしましょう。<br><br>　特に体調に問題がない人も多いと思いますが、2022年の生活習慣が後に体調を崩したり、病気になったりする原因になってしまうので、睡眠時間をしっかり確保する、飲酒や喫煙を控えて運動をするなど、健康的な生活習慣を2022年から意識するようにしましょう。運気の流れが良かったときに無理を続けていた人ほど、2022年も問題がないと思って突っ走ってしまわないようにしましょう。<br><br>　仕事でポジションが変化して責任を背負った人ほど、ストレスを一気にため込んでしまう可能性があるので、定期的に運動をするなど気分転換をマメに行うようにすると良いでしょう。言葉がハッキリ出てしまうタイプでもあるので、愚痴や不満をこぼしがちですが、悪い言葉は自分のストレスになるだけなので、良い言葉やポジティブな発言を意識しておくと良いでしょう。',
'<b>美意識を高めてイメチェンをする</b>　「チャレンジの年」はここ数年で体力の低下を感じたり、体型に問題が出ている人ほど、定期的な運動を始めてみたり、スポーツジムに通い始めたりするなど、生活習慣の見直しをするといいタイミングです。<br><br>　急にハードな運動は継続できない原因になってしまうので、仲間で楽しくできるスポーツやサークル的なこと、友人と話しながらウォーキングをするなど、最初は抵抗なく体が動かせる程度の運動から始めましょう。秋以降には少しハードなランニングやマラソンを始めてもいいかもしれません。<br><br>　美意識を高めるにも良い時期なので、毎朝体重計に乗ってマメに体重の変化をメモするようにするとムダに太ったりせず、体重のコントロールができるようになるでしょう。ダイエットは1、2ヶ月で急に痩せようと思わないで、目標を二年後くらいに置いてみることも大切です。<br><br>　また、「チャレンジの年」はイメチェンをするにもいいタイミングなので、これまでとは違う美容室に行って思い切って髪型を変えてみたり、大人っぽく演出してもらったりすると良いでしょう。縮毛矯正やトリートメントなど、髪のメンテナンスをしっかり行い、少し値段が張ってもいいドライヤーを購入して、髪の正しい乾かし方やセットのやり方を美容師さんに教えてもらうといいでしょう。<br><br>　また、メイク道具も変えると良いタイミングです。なかなか一気に買い換えはできないと思うので、少しずつでも年齢に見合う物を選ぶようにしたり、メイク教室に一度でも通ってみたりすると、一気に雰囲気を変えられてメイクをすることが楽しくなるでしょう。オンラインでも行っているので、ネットで気になるところを探してみると良いでしょう。',
'<b>生活リズムを整え睡眠時間を確保する</b>　太陽がさんさんと輝く南の海で泳いでいるイルカと同様に、温かい場所がオススメのタイプですが、裏運気になると深夜の仕事や就業時間の変化、寒い場所での仕事、一人での作業が増えるなど、不向きなことが多くなり体調を崩してしまったり、ストレスを抱えてしまったりするような流れになります。<br><br>　2022年は生活リズムを整えることが大切になるので、不健康と思えることからは離れるようにしましょう。まずは睡眠時間の確保が重要なので、22時には寝られるような生活リズムにすることがオススメです。<br><br>　2022年になってから体の冷えを感じたり、冷え性、末端冷え性の気配があったりする場合は、基礎代謝を上げる運動やしっかり湯船に浸かる習慣を身につけるようにして、お風呂に入る前にストレッチやスクワットなどで、軽く汗を流すくらいの運動を習慣にしましょう。楽しみながらでないと続かない人は、体操やヨガの動画を見ながら体を動かしてみたり、体を動かすゲームを購入してみたりすると続けられるでしょう。<br><br>　また歯の治療を年内にしっかり行った方が良いので、しばらく検査していない場合は評判のいい歯科医を選んで治療するようにしましょう。虫歯をしっかり治すだけでなく、歯並びが気になっている場合は9、10月から歯の矯正を始めると良いでしょう。',
		),
		array( "gs22_007_2", 
'<b>美意識を高めて健康で美しい体に</b>　夜更かしや食事のバランスを悪くする、暴飲暴食、急な体重増加、運動不足など、2022年から悪習慣を始めてしまうことには注意。明らかに不健康な癖が身についてしまうと、後の幸運や開運の年に大きな病気になる可能性があるので気をつけましょう。仕事が楽しくなり始める時期でもあるので、仕事を頑張るのは良いですが、体調を崩すまで頑張り過ぎないようにしましょう。<br><br>　できればこまめに体重を量ってみる、マメに水を飲むようにするなど美意識を高めることが大切です。ダイエットを考えている場合は定期的に筋トレをして代謝を上げることで、2、4年後を目安にゆっくり体重を落とすことを目標にすると良いでしょう。睡眠時間も、これまでよりも1時間でも長く取れるようにするためにスケジュールを調整してみると良いでしょう。<br><br>　お金にゆとりがあればパーソナルトレーナーなどをつけて指導してもらうようにすると、しっかり指示を守る「金の羅針盤座」は良い結果を出すことができます。特に2022年は良い先生に出会える可能性が高いので、周囲の詳しい人から紹介してもらったり、レビューなどで評判のいいジムを探して行ってみると良いでしょう。<br><br>　2022年から前向きに目標体重や理想のスタイルに挑戦してみることで、健康を維持しながら美しい体を作ることもできます。4月から思い切って挑戦してみると、良い結果につながる可能性が高いでしょう。<br><br>　忙しくても今後の健康のことをしっかり考えてください。生活習慣や食事のバランス、運動など、これまであまり気にしてこなかった人は2022年から少しずつ意識するようにしましょう。年に一度は人間ドックを受診することを恒例にしておくのも良いでしょう。漢方薬で未病をケアするにも良い時期なので、自分の体調の異変に少しでも気がついたら放置しないで、周囲からの指摘にしっかり耳を貸すようにしましょう。',
'<b>上品な服を着ることを目標にダイエットする</b>　注意すべきは3月末から4月。油断から風邪を引くなど、体調を崩しやすいので、ゆっくりお風呂に入って早めに寝るなど、健康的な生活リズムを作ることです。面白い動画などを見てたくさん笑うことで免疫を上げるようにするのも良いでしょう。<br><br>　6月は、腰や背中、膝などを痛めやすいので、急に重たい物を持つことや、激しい運動は避けるようにしてください。段差で転んだり、床で滑ったりして怪我をする場合もあるので、滑りやすい場所や歩きにくいと思っている靴は避けておきましょう。<br><br>　「乱気の月」の10月、「裏運気の月」の11月は、毎年どちらかで体調を崩すなど、体の調子を乱しやすいので気をつけるようにしてください。肌荒れや湿疹に悩むこともあるので、スキンケアなどしっかりしたり、季節のフルーツや野菜を多めに摂取するようにすると良いでしょう。<br><br>　2022年は、多少の無理や不健康な生活習慣でも、大きな問題にはなりにくい時期ですが、悪習慣がそのままで良いはずがないので、年齢に見合った健康方法や食事のバランス、体を動かす習慣を身につけるようにしましょう。臆病な性格なので、ネガティブに考えるだけで実際に健康的な生活を送ろうとせず、運動不足な生活を送りやすいタイプでもあります。1日10分でも、少しの距離でも良いので、歩く時間を増やすようにしておきましょう。<br><br>　また、上品な服を先に購入して、それを着ることを目的としたダイエットをしましょう。露出の多めな服を着るようになると、体が自然と引き締まってくるでしょう。恥ずかしがって体型を隠していると、不要なお肉が付きやすくなるだけなので、少し大胆な服や目立つポジションにいくのも良さそう。ストレス発散は、ウォーキングをしながら好きな音楽を聴いたり、カラオケで好きな歌を思い切り歌っておくと良いでしょう。',
'<b>飲み過ぎや怪我に注意。年に一度は人間ドックを</b>　基本的には健康的な1年ですが、2020年下半期、2021年に体調に異変を感じながらも我慢して、気のせいだと自分に言い聞かせて病院に行かないままの人は、2022年は一度しっかり健康診断や人間ドックで検査をしておくことが大切。できれば毎年恒例にすると良いでしょう。<br><br>　ここで問題が発覚する場合は、早期発見や上手く病気の予防ができる可能性が高いので、心当たりのある人は検査を忘れないようにしましょう。<br><br>　また、「解放の年」は人との付き合いも増えるので、お酒を飲む機会が増えてしまいそう。調子に乗って飲み過ぎてしまうことがあるので、連日連夜にならないようにして、二日酔いで苦しまないようにセーブするようにしましょう。お酒が好きというよりも語ることが好きで、結果的に長い時間、お酒を飲み続ける場合があるので気をつけましょう。<br><br>　1、3月は軽率な怪我や指や手の怪我にも注意して、「乱気の月」、「裏運気の月」の7、8月は、ギックリ腰など腰痛や扁桃腺を腫らしてしまうことがあるので、急に重たい物をもたないようにして、うがいはマメにおこなっておきましょう。<br><br>　あなたが思っている以上に注目される1年になるので、2022年は例年よりもマメに髪を切り、頭皮のメンテナンスをしっかり行い、美容エステで肌をきれいにするなど、日頃行っていない部分もしっかりケアしましょう。<br><br>　脱毛や歯の矯正、ホワイトニング、顔などの気になる場所にあるホクロ除去なども思い切って試してみましょう。ただ、お金をかけすぎてローンで苦しまないように、身の丈にあった美容法をいろいろ試してみると良いでしょう。',
'<b>飲酒を控える分、エステやジムに時間とお金を使う</b>　「リフレッシュの年」は、12年の周期で1、2番目に体調を崩しやすい運気でもあり、「乱気の年」の裏側にもあたるので、事故やケガも起きやすいでしょう。「銀のインディアン座」は腰痛やぎっくり腰、扁桃腺を腫らしてしまうことなどがあるので注意が必要。<br><br>　また、お酒の飲み過ぎで二日酔いで苦しむことや酔っぱらって大怪我をする可能性もあるので、2022年は休肝日を定期的につくるなど、お酒をできるだけ飲まない1年を心掛けてみると良いでしょう。お酒を飲まなかったことで浮いたお金は、エステや美容室、スポーツジムなど、これまでとは違うことに時間とお金を使ってみましょう。<br><br>　すでに2021年の下半期あたりから体調に異変を感じている場合は、人間ドックや精密検査を受診して、結果に疑問を感じる場合はセカンドオピニオンを行うようにしてください。できれば自分で病院を探さないで、周囲から評判のいい病院を探して行くことをおススメします。「銀のインディアン座」は医者運の悪い人が多いので、2022年は特に正しい診断ができない医者に当たってしまう可能性があることを覚えておきましょう。<br><br>　また、2022年から悪習慣をスタートしないこと。飲酒や喫煙、寝不足、ストレスが溜まるような生活を2022年から始めてしまうと幸運、開放の年に病気になってしまう種を蒔いてしまうだけです。不健康と思われるようなことは始めないようにして、すでに不健康と思われる生活習慣があるなら、2022年から改めるようにしましょう。',
'<b>一人の世界観で楽しめるスポーツに挑戦する</b>　「幸運の年」といっても積み重ねが出てくる年でもあり、2022年の中でも運気のアップダウンはあり、5、6、11月は体調を崩してしまうことがあるので、無理はしないようにして、暴飲暴食や深酒や遊び過ぎ、予定の詰め込み過ぎには注意をしましょう。1月は段差でつまずいて怪我をすることもあるので、あわてて行動しないようにして、お酒を飲んだときは階段などの段差には特に気をつけましょう。<br><br>　また、三年ほど前から体調に異変を感じているのにそのままにしている人は、2022年は体調を崩したり、病気が発覚したりすることがあります。実は痛いのを我慢している人や体調に違和感がある場合は、早めに病院に行ってしっかり検査を受けておくようにしましょう。「幸運の年」なので、病気があっても早期に見つかって助かることもあるでしょう。<br><br>　基本的には健康で問題のない年ですが、美意識を高めるにも良い年です。家で一人の趣味の時間を楽しむのも良いですが、動画を見ながらストレッチやヨガなどを始めてみたり、サッカーや野球、ゴルフなどに参加してみるのも良いでしょう。サーフィンやスキューバなどのマリンスポーツに挑戦してみるのもいいタイミングなので、周囲から誘われることがあるときは思いきって挑戦してみると予想以上にハマって、人生観が大きく変わることもあるでしょう。<br><br>　暑いのは苦手という人は、スキーやスノボを始めてみると想像以上に楽しい時間を過ごせそう。「金の鳳凰座」は、そもそも一人の時間が好きなタイプ。この辺りのスポーツは黙って自分の世界観で楽しめる物ばかりなので、これまで挑戦していない人も過去にやったことがある人も、2022年は機会を作って挑戦してみると良いでしょう。<br><br>　また美容では、下半期になってから美容室を新しく変えて、これまでとは違う髪型に挑戦してみると良いでしょう。少し微妙だと思っても12月にはいい感じでイメチェンが成功したり、評判のいい髪型にもなれそう。メイク方法なども変えるなら12月が良いので、スクールに行って年齢に見合うメイク術を学んでおくのもいいでしょう。',
'<b>1年かけてストレス発散を楽しむ</b>　美容や健康面で注意が必要なのは、2022年の暴飲暴食や気の緩みが激しくなってしまうことによって、体型の維持ができなくなってしまったり、部屋が散らかったままで身の回りの整理整頓もできなくなってしまうなど、ふしだらな生活や悪習慣が身についてしまう可能性があることでしょう。<br><br>　特に欲望に流されやすくなってしまうので、食べたいと思った物をついつい買いすぎてしまい、夜中に起きて寝る前にお菓子やアイスを食べてから寝るような習慣が身についてしまうことがあるので気をつけましょう。またお酒にもハマりやすくなり、気がついたら連日連夜飲んでいることにもなるので、休肝日をしっかり作り、お酒を部屋に常備しないようにしましょう。<br><br>　しっかり遊ぶことが大切な年でもあるので、1年かけて日頃のストレス発散をするのも良いでしょう。一人の時間をのんびりと自由に使ってみたり、一人旅をして旅館で贅沢な時間を過ごしてみるのも良いでしょう。普段は避けてしまっているようなエステやマッサージなどで、特別な時間を楽しんでみるのもいいでしょう。落語やお笑いのライブに行くとTVやネットとは違う面白さを発見できますし、コメディー映画やお芝居を観に行ってみるのも良いストレス発散になるでしょう。<br><br>　「銀の鳳凰座」は腰が重いタイプですが、2022年は楽しそうなことに挑戦してみると、いい記念や思い出にもなるので、好奇心の赴くままにいろいろなところに足を運んでみると良いでしょう。12月は、遊び過ぎたり予定を詰め込んだりした疲れが出る場合があるので、スケジュールにはゆとりを持たせておくと良いでしょう。',
'<b>ダイエットは1月にスタートがオススメ</b>　ここ1、2年、非常に忙しくてゆっくり休むことができなかった人や、責任を背負い過ぎていたと思う人、疲れがなかなか抜けないと感じる人、飲み会などが連日続いていたり家飲みで飲酒が習慣になってしまったりしている人は、夏辺りから生活習慣を変えて健康を意識した生活を送るようにしましょう。<br><br>　まずは食事のバランスをしっかりとることです。「金の時計座」はいい意味で節約ができますが、ジャンクフードやお菓子にハマってしまうことも多いので、栄養バランスを常に考えておくことが大切です。また、8月からは睡眠時間を少し長くできるような工夫も必要。「夏バテかな」と思ったときは、早めに寝るように心がけると良いでしょう。<br><br>　美意識を高めるのは良いですが、下半期になると普段なら避けているような高級エステや金額の高い美容器具を購入するなど、お金をかけすぎてしまうことがありそうです。ゆとりのない人がエステでローンを組むと後悔することになるので、無理をしないようにしましょう。<br><br>　美意識を高めることは健康を維持することと同じです。ダイエットを考えている場合は1月からスタートすると、1年以内に思った以上の結果を出すことができるので、軽い運動をしてマメに体重計に乗るようにすると良いでしょう。一緒に頑張る友人を作って、互いに話をしながら散歩がてらのウォーキングが長く続けられそうです。朝よりも夕食後や入浴前の30分くらいの時間を運動に使うのが良いので、スマホの動画やTVを見る時間を削って、体を動かす時間の計画を立てておきましょう。',
'<b>気分が上がる音楽でストレス発散</b>　ダイエットや筋トレ、肉体改造をするにも良い年。極端なダイエットはオススメしませんが、1年を通して少し体を絞って標準的な体重を目指すなら、2022年は目標を達成しやすいので1月からスタートさせてみると良いでしょう。ストレッチや軽い運動、スクワットなどを定期的に行うと良いですが、一人では長続きしないタイプなので、友人や知人と励まし合ってトレーニングをしたり、近所の人と話しながらウォーキングや軽いランニングをしたりすると良いでしょう。<br><br>　時計座は振り子時計なため右に左に心がブレてしまい、ストレス発散が下手な人が多く、精神的な落ち込みに悩む人も多いでしょう。2022年はヘコむ機会が少なくなる運気ですが、好きな音楽や気分が上がる曲をゆっくり聴く時間を持つようにしたり、カラオケで好きな歌を思いっきり歌う日を作っておいたりすると良いでしょう。友人や知人を誘うのも良いですが、できれば小人数の方が気持ちは楽になるでしょう。<br><br>　また午前中は、ネガティブなことを考えすぎてしまったり、人のマイナス部分を見過ぎてしまったりする癖もあります。自分の行動パターンや癖をしっかり把握して、なるべく人のプラス面を見て、ポジティブな発言を心掛けるようにすると良いでしょう。<br><br>　健康にお金をかけ過ぎると、逆にストレスが溜ってしまうので、ネット動画を見ながら体操やヨガを楽しんでみたり、お笑いの動画で思い切り笑っておくと、健康的に過ごせるようになるでしょう。<br><br>　また、健康や美容の勉強や資格取得をすると副業や収入アップにも繋がって、一石二鳥になる場合もあるので、気になる健康法や美容法がある場合は調べてみると良いでしょう。ヨガのインストラクターや美容家などを目指してみるのにも良い機会でしょう。',
'<b>美しい体型でいるために美意識を高める</b>　もちろんすべての人が2022年体調を崩したり病気になったりするわけではありません。日頃から自分の健康を意識して、気をつけている人は問題ないでしょう。特に美意識を高めると健康を維持できるので、美容に良さそうなことをいろいろ試してみると良いでしょう。ちょっと金運と絡んできますが、その際は高額な美容器具やサプリなどにお金を使い過ぎないように気をつけましょう。健康に良いからと言われて謎の高額商品を購入して、後にローンで苦しむなど、笑い話のネタにもならないので気をつけましょう。<br><br>　2022年は当たり前で当然な健康方法を、年齢に見合うように行うだけでも十分なので、無理はしないようにしましょう。<br><br>　ただ、計画的に進めようと思っても2022年はサボり癖が出てしまいがちで、ウォーキングやランニング、ストレッチやヨガ、筋トレを始めても、三日坊主になってしまうことがあります。目標は「連続ではなく継続」なので、できれば毎日が良いのはもちろんですが、何となく1年を通して「運動した日が多かったかな～」くらいでいいと思ってください。頑張り過ぎてしまうと怪我の原因になってしまうこともあるので、ホドホドにすることが大切だと思っておきましょう。<br><br>　そもそも美意識が高いタイプですが、健康を維持するためには「美しい体型でいる、美しく生きる」と考えることで、自然と健康的な生活にもなるので、気を緩めないで、美しい自分でいることを楽しむと良いでしょう。マメに体重計に乗り、全身鏡で自分の体型を毎日しっかりチェックするようにして、鏡の前で口角を上げる笑顔の練習をするようにしましょう。',
'<b>こまめに体重を測って体調管理をする</b>　健康維持のためにも美意識を高める必要がありますが、2022年は頑張り過ぎないことが大切です。そもそもグルメで、周囲の人に合わせていると美味しい物を食べ過ぎてしまうことのあるタイプ。特にグルメ仲間ができてしまうと、食べたくなくても食べる習慣ができてしまい、これまでと同じ感覚で食事をしていると、体型が急激に変わってしまいそうです。<br><br>　美味しい物を食べる代わりにしっかり運動をしたり、寝る前の4時間前までに夕食は終えたりするようにするなど、2022年は節制を心がけてください。お酒にも急に弱くなってしまい二日酔いが酷くなったり、記憶をなくして大失態を晒したりすることもあるので、お酒を飲むときは同量の水を飲むなどの工夫をするようにしましょう。<br><br>　毎朝こまめに体重を計るだけでも意識が変わるので、目に付くところに体重計を置いてみたり、全身が映る鏡で全身を確認してみたりすることが大切です。真似る星を持っているので、憧れのスタイルのモデルや有名人の写真を飾って毎日見ることで、体が自然と引き締まることもありそうです。<br><br>　他には、ギックリ腰や扁桃腺を腫らしてしまうことなども起きやすくなるので、重たい物はゆっくりと膝を突いてから持ち上げ、うがいはマメに行うようにしましょう。裏のインディアン座はこの辺りが弱く、特に乱気の年になると、この辺りの体調を崩す可能性があるので注意してください。<br><br>　老いを感じる、スタミナ不足や胃もたれ、老眼や疲れなど乱気の年に入るといろいろガタがきますが、それは自分の体をいたわる時期だというサインだと思って、無理のない生活を送るようにしましょう。',
'<b>ストレス発散は南の島のバカンスがオススメ</b>　2022年からは美脚を意識すると良いので、足をきれいに出せるような服装を選ぶことも大切です。「自分の脚は太いから」と隠してばかりいないで、思い切って見せることで自然と細くなっていくなど、自分の意識が変わってくるようにもなるでしょう。少しだけ露出の多い服を選んでみるのは良いのですが、冷えには弱いので寒さ対策を忘れないようにしましょう。<br><br>　ストレス発散には旅行がオススメです。できれば南の島や沖縄、ハワイやグアムなどに行ってバカンスを楽しむ時間を作ってみると良いでしょう。予算や時間など、いろいろな事情で旅行に行けない人は、海にドライブに出かけてみたり、海の見えるホテルでランチをしてみたりすると、いい気分転換になってストレスも発散できそうです。<br><br>　遊びやノリが大切なタイプですが、チャレンジの年は予想外に忙しくなるので、夜更かしはできるだけ避けて、睡眠時間をしっかり取るようにして、疲れを次の日に残さないように気をつけましょう。<br><br>　健康面は大きな病気は出にくい時期ですが、一、二年前から調子が悪い部分があったり、我慢をしていると感じていたりする場合は早めに病院に行って、精密検査や人間ドックを受診するようにしましょう。<br><br>　また、「チャレンジの」年は積み重ねが始まる年でもあるので、不摂生や不健康なことを始めてしまうと二、三年後に後悔することになりかねないので、未来の自分がガッカリするようなことはしないように心がけましょう。',
'<b>最新のアプリや音楽で楽しくダイエットを</b>　「整理の年」は、ダイエットを行うにも良い運気なので、大体の目標を立ててスタートするのが良いのですが、連日の運動や食事制限は「銀のイルカ座」にはキツいでしょう。「連続よりも継続」と考えて、何となく1、2年かけてダイエットをするくらいの気持ちで継続的なダイエットを心掛けるようにしましょう。<br><br>　夜更かしは、体調を崩したり太ったりする原因になります。上半期は生活リズムを整えられなくても、何が不健康や美意識が下がる原因になるのかを調べる期間にして、下半期から美意識を高めて健康的な生活を心掛けるようにしましょう。<br><br>　また、「乱気の年」、「裏運気の年」から体調に異変を感じている場合は、早めに精密検査や人間ドックを受診するようにしましょう。周囲から体調に異変を指摘されたときはそのままにしないで病院を受診し、納得できなければセカンドオピニオンを求めて他の病院でも検査をした方が良いでしょう。<br><br>　「銀のイルカ座」は、遊びや楽しいことに素直に時間を使ってしまうタイプなので、いつの間にか疲れを溜めてしまって体調を一気に崩してしまうことがあります。休みの予定の中に「一日のんびりする日」を作って体を休ませてみるなど、健康的に過ごす日を作っておくのも良いでしょう。<br><br>　下半期に友人から軽いスポーツやランニング、ウォーキングなどに誘われたときは試しに始めてみると良いでしょう。最新のアプリを駆使してみたり、好きな音楽を聴きながら体を動かしてみたりすると思った以上に続けられたり、楽しく体を動かしたりすることができそうです。思い切ってダンス教室に通ってみると一気に体重を落とせたり、理想のプロポーションに近づけたりすることもできそうです。SNSにアップして、自分にプレッシャーをかけながら楽しんでみるのも効果があるでしょう。',
		),
		array( "gs22_007_3", 
'<b>余裕を持った会話で夫婦関係も良好に</b>　忙しくなるので油断をしていると、家族との距離が空いてしまう1年。自分の生活リズムや考えだけが正しいと思い込んでいると溝ができてしまい、空気が読めない発言が出てしまうこともあるので気をつけましょう。<br><br>　良くも悪くも家族に甘え過ぎてしまっているのに「自分だけこんなに頑張っているのに」と逆に不満を溜めてしまうことにも注意。どんな状況であってもみんなの協力や互いに支え合っていることへの感謝の気持ちを忘れないようにしましょう。<br><br>　夫婦関係は、忙しいながらも良好な時期ですが、相手の言葉を真面目に受けとめすぎてしまうと喧嘩やすれ違いの原因になってしまうこともあります。冗談を含んで言っている場合もあるので上手に聞き流したり、時には突っ込んで笑いに変えるくらいのゆとりを持っておくと良いでしょう。新婚の場合は、2022年の年末に妊娠が発覚することもあるので、夏から秋は夫婦の時間を大事にすると良いでしょう。<br><br>　お子さんとの関係では、2022年はルールができるのは良いのですが、自分の正しさや正義を押しつけてしまうと子供の個性や才能を活かせなくなってしまう場合があります。周囲や先生や他の人からの意見や考え方もしっかり学んでおくことが大切でしょう。親子でも別の人格だということを忘れてしまって、縛りすぎてしまう可能性もあるので気をつけましょう。',
'<b>忙しくなるので家事を手伝ってもらう工夫を</b>　やることが多く忙しい1年ですが、家族関係が大きく乱れるようなことはない運気です。家庭も仕事もキッチリしたいのが銀の羅針盤座。家のこともしっかり行うのはいいですが、予想外に忙しくなる運気でもあるので、少しは手を抜いたり、家族の協力を得るようにすると良いでしょう。<br><br>　また、家族にもルールやキッチリとした生活を望み過ぎてしまい、イライラの原因になってしまうことがあるので、過度に期待をしないようにすること。言い方を変えるなどして、手伝ってもらえるように工夫してみましょう。<br><br>　夫婦関係は、2019年、2020年辺りに、大ゲンカや距離が空いてしまうことがなければ問題のない年。もしもその辺りで溝が深まってしまった感じがあるなら、2022年は修復するために距離の取り方を変えてみることが大切です。<br><br>　特に、銀の羅針盤座は真面目でキッチリしていることをパートナーに求めてしまいがち。「自分だけ頑張っているのに」と思ってしまうところがあるので、家の事は好きでやっていると思って、あなたの気がつかないことを相手はやってくれているということを忘れないように。2022年は新しい出会い運があるので、相手の運気がいい場合はお子さんも望める運気も。前向きな気持ちや明るい家庭を目指してみると良いでしょう。',
'<b>家族の記念日にはしっかりお祝いを</b>　自由に動ける年だけに、気がついたら家族を無視して遊びや仕事で大忙しになってしまいそう。基本的にマイペースなので、家族はあなたのことを理解していると思いますが、仕事に集中できて楽しく過ごせているのは、それを支えてくれる家族がいるからだということを忘れないように。感謝の気持ちをしっかり表わして、記念日や誕生日はしっかりお祝いするようにしましょう。<br><br>　夫婦関係はあなた中心に動くようになったり、ワガママが通用するようになっていますが、マイペースのあなたに合わせている相手の気持ちを忘れないように。時には相手に合わせてみることが大切。<br><br>　お子さんが欲しいと望んでいた夫婦は、2022年は運気がいいので、妊娠もしくは来年に出産する流れになりそう。仕事を頑張るのもいいですが、一区切りつく時期でもあるので、夫婦関係を見直したり、より仲良くなれるように工夫したりすると良いでしょう。<br><br>　夫婦関係で問題があるとすると、「解放の年」は離婚率が高く、特に「乱気の年」、「裏運気の年」からの出会いで結婚をした夫婦は、すでに夫婦関係が終わっているような感じです。夫婦仲が冷めてしまっている感じがある人ほど、縁が切れてしまいそう。<br><br>　安心していても相手の浮気が発覚したり、あなたにも後ろめたいことがある場合は、2022年は相手にバレて、離婚になってしまうこともあるでしょう。縁を切った方が結果的に楽になり2、3年後に再婚や、もっと素敵な出会いもあるので、ガマンの限界と思われる場合は、思い切った決断をすることも良いでしょう。',
'<b>子供の思い出作りを兼ねてリフレッシュ</b>　2022年ほど家族の大切さを知ることはないと思える年。突然体調を崩してしまったときに、家族のお陰で一命を取り留めることも起きるかも。身内からの体調の異変に関する話はしっかり聞き入れておくことが重要になる運気でもあり「息がくさい」「いびきがうるさい」「体調悪いでしょ？」などと言われたら、絶対に病院で検査を行うようにしてください。<br><br>　他にも「お酒控えたら」「たばこやめたら」など、不健康と思える習慣の注意も聞き入れることが大切。身内だからこそハッキリ言えるということを忘れないで、身勝手に自分は大丈夫だと思い込まないようにしてください。<br><br>　忙しい1年になるので、健康的に過ごせているからと思って仕事ばかりになっていると、知らぬ間に夫婦関係に溝ができている場合があるので、意識して夫婦の時間を取るようにしたり、二人でのんびり温泉旅行など出かけたり、お互いがリフレッシュできる場所を探して出かけてみるのも良いでしょう。<br><br>　2023年の「解放の年」に向けて運気が良くなる手前の年なので、お子さんを望んでいる人は年末に妊娠や出産の可能性もあるでしょう。<br><br>　お子さんとの関係は、あわただしくなるため微妙な距離が空いてしまいそうですが、お子さんがいるからこそしっかり休みを取ることができるので、仕事ばかりではなくお子さんの思い出作りのために、自分のリフレッシュも上手くできる場所に行くと良いでしょう。ただ、一緒に遊ぶのは良いですが、張り切り過ぎて怪我をすることがあるので、無理をしないように気をつけましょう。',
'<b>思い出の場所に行ってみると夫婦関係が良くなる</b>　「金の鳳凰座」はそもそも家族との繋がりの強いタイプ。2022年は家族での思い出も増えて楽しい時間が過ごせたり良い関係を作れたりしそうです。家族は大切にするけれど、依存をするタイプではないので、良い距離感を保つことができるでしょう。しばらく家族旅行に行けていない場合は、2022年は事前に計画を立てて早めに予約をしたり、両親や親族を集めた食事会やお祝いをするのにもいいタイミングです。5月の連休やお盆休み、年末の休みでもいいので、2022年はみんなを集められるように頑張ってみると良いでしょう。<br><br>　夫婦関係も、2021年辺りから気持ちにはゆとりができているので良い関係になりつつありますが、互いの友人や知り合いが良いきっかけになってさらに仲良くなれたり、楽しい時間も増えてきたりするでしょう。初めてデートしたお店など、思い出の場所に行ってみると夫婦関係が良くなったり、思い出の写真を見ると二人が盛り上がっていたことを思い出せたりして良いでしょう。<br><br>　お子さんを望むご夫婦は下半期に期待ができそうなので、頑張ってみると良いでしょう。特に12月は運気も良いので、体調を整えておくようにしましょう。また、お子さんをもう一人欲しいと考えているご夫婦も、2022年はいい縁がありそうです。<br><br>　両親との関係も良いですが、2022年は会う機会が自然と増えそうです。良くも悪くも実家に帰る機会が増え、不思議と縁がありそうです。ご両親の誕生日や記念日にはプレゼントを贈っておき、祖父母が健在の場合は、2022年は例年以上に訪ねたり、直接会えないときはオンラインや電話で連絡をしたりすると良いでしょう。',
'<b>家族旅行でリゾート気分を楽しむ</b>　家族と楽しい時間を過ごすには良い年。家族旅行や家族で食事会、誕生日会や思い出作りに温泉や海に出かけてみるのも良いでしょう。離れ小島や水族館、海の見える旅館などに泊まってゆっくりと時間を過ごしてみると、家族との絆も深まりそうです。<br><br>　日頃家族のために頑張り過ぎていると思う人ほど、2022年はそのご褒美だと思って楽しんで、しばらく出かけていない人ほど気になる場所を探してみると良いでしょう。話題の場所でも良いですが、娯楽施設が隣接していたり、リゾート気分が味わえたりするような場所が良さそうです。<br><br>　夫婦関係も例年よりも一緒に遊ぶ時間や話をする機会が増えそうです。イベントやライブ、芝居などを一緒に観に行くなど、気になる場所を調べてみると良いですが、遅刻や予約した日を間違えるなどで気まずい空気にならないように。<br><br>　楽しく会話をするのは良いですが、2022年は失言しやすく、特に身内には言葉が雑になってしまったり、伝わっていると思って甘えていると喧嘩の原因になったりしがちです。ゆっくりでもいいから丁寧に伝えることを心がけて、相手の気持ちを考えて、喜んでもらえるようにしましょう。<br><br>　お子さんとの関係は、勘違いや思い込みで親子で恥をかいてしまうことがありそう。子供が「絶対に違う！」と強く言っているのに「そっちが間違っているから」と押しつけたらそれは別の日の予定で、お子さんに恥ずかしい思いをさせてしまうことなどが続いてしまいそう。自分が正しいと思い込まないで、お子さんの話を最後まで聞いて確認をするようにしましょう。',
'<b>焼肉で家族の絆が深まりそう</b>　夫婦関係や親子関係は良好に進む年。特に問題が発生する可能性は低いので、夫婦は楽しい思い出を作ることを忘れないで、両親も大切にしておくと良いでしょう。ただ、年配の祖父母がいる場合は、ブレーキの年の下半期から別れや病気の発覚など、「乱気の年」に入る理由が分かるような出来事があるかも。もし家族に年配者がいる場合は、健康診断をするなど早めに対応しておくと、大きな病気を避けることもできそうです。<br><br>　2022年は夫婦や家族で旅行に出かける計画を立てておくと、いい思い出ができそうです。贅沢な旅でなくて良いので、みんなでキャンプやBBQをするなどで、5月の連休や夏休みにいい思い出を作ることができそうです。<br><br>　特に上半期は、家族の絆を深めたいときは家で焼肉がオススメです。思った以上に盛り上がり、良い家族関係を作ることができそうです。記念日や誕生日には予約が取りにくい焼肉屋やステーキハウスなどに行ってみるといいかも。<br><br>　両親とも問題はなさそうですが、身内に甘え過ぎてしまうと対応が雑になってしまうところがあるので、礼儀は守って挨拶や日々の感謝はしっかり伝えておきましょう。誕生日プレゼントを贈るなどで、両親を喜ばせる機会を逃さないように。父の日、母の日なども些細な物でも良いので贈ってみると、思った以上に喜ばれることになるでしょう。',
'<b>家族に甘え過ぎないで、計画的に楽しむ年に</b>　「開運の年は家族や親子関係もなったく問題がないでしょう」と言いたいところですが、ちょっと待ってください。基本的に問題が起こる可能性は低いですが、2022年はあなたの魅力や才能が開花する年であり、人脈も広がり予想外に忙しくなってしまい、夢や希望が叶うことで浮かれてしまうこともある運気です。ついつい家族に甘え過ぎてしまったり、家庭のことが二の次になってしまったりして、あなたが楽しんでいる間に、見えない溝ができていることもあります。家族への気遣いを忘れないようにして、雑な扱いはしないようにしましょう。<br><br>　また、逆に運気の良いときだからこそ、家族との連帯感を深めようと頑張り過ぎてしまうと、あなたが良かれと思ってしたことが、家族のみんなに窮屈な思いや束縛を感じさせてしまう場合もあります。常に家族で相談して記念日を楽しんだり、思い出になることをしてみたりするなど、計画を立てて1年を過ごすと良いでしょう。<br><br>　夫婦関係も良好で、二人の良い思い出ができたり、旅行にでかけたりして、精神的にも落ち着く時間が増えそうです。まだお子さんができていない人は、2022年は子宝に恵まれる可能性も高く、特に結婚五、六年以内の夫婦は期待ができそうです。家や土地、マンションの購入、引っ越しなどを考えている場合は、あなたから持ちかけてみると、思った以上に話が上手く進んで、良い場所を見つけられることもあるでしょう。<br><br>　両親との関係も問題が少ない年で、遺産や相続などの話をするにも良いタイミングです。欲深くはないタイプなので、あなたから揉めることはないですが、思い出や親子の情を大切にすることがイザコザの原因になってしまうことがあります。<br><br>　記念の品やいい思い出のある品などは、どうするか話しておくといいかも。両親に感謝の気持ちを表わすことで、より良い関係にもなれるので、誕生日は食事会を開いて、例年よりも素敵なプレゼントを贈っておくと良いでしょう。',
'<b>子供と遊びながら教えてもらう年にする</b>　「裏運気の年」で、特に問題なく過ごせている人でも、自分以外のところで問題が出てくるとすれば家族でしょう。特に年配の両親や祖父母がいる場合は、病気や怪我、介護や他界など問題が一気に出てくる可能性があります。<br><br>　きょうだいがいる場合も、事故や怪我など問題が起きる可能性があるので「2022年は家族で気をつけましょう」とひと言伝えておくだけで、不要な不幸を避けることもできるでしょう。年配の方には、早めに病院に行って検査をしてもらうなど予防できそうなことは、できる限りしておくと良いでしょう。<br><br>　親子関係では、子供から教えてもらう年にすると良いでしょう。親だからといって教えるだけの一方通行だと思わないで、今の流行やネットやアプリやSNSなど、教えてもらえることはいろいろあります。まだ小さな子供からも、独特の観察の目線や子供なりの愛など、学べることがありますよ。一緒に遊べることが見つかり、共通の趣味を楽しめる場合もあるので、気になることや挑戦したいことを話す機会を作ってみると良いでしょう。最初は子供が盛り上がっていたことに、あなたがハマってしまうこともありそうです。<br><br>　また、子供の部活や習い事などに振り回されてしまったり、予想外の親同士の付き合いで疲れてしまったりすることもありますが、面倒な役周りだと思わないで、今しかできないことだと思って前向きに受けとめておきましょう。',
'<b>家族のために遺言を書いてもらうことも必要</b>　「乱気の年」で心配なことは、自分以外のところでの問題が起こること。お金の問題や健康状態に関しては自分である程度気をつけておけば、最小限に抑えることや上手に回避することもできますが、家族の問題は巻き込まれてしまう可能性があるので油断は禁物です。できればこれを読んだ段階で「2022年は家族のみんなも気をつけてね」とひと言伝えるだけでも効果があるでしょう。<br><br>　特に年配者との縁が切れてしまうことや病気の発覚、介護の問題などが起こることがあるかもしれません。更にそれだけでは収まらないで、遺産相続で家族が大揉めになってしまう可能性もあるので、年配の方がいる場合は、良い意味で遺言書を一筆先に書いてもらっておくなど、家族が揉めないように対応しておくと良いでしょう。<br><br>　特に年配者がいないので安心という人でも、事故や怪我など予想外の出来事もあり、入院や通院でお金が必要になる場合も出てくるので、不要なお金はできるだけ使わないで蓄えておくと、いざというときに役立つでしょう。<br><br>　また、不倫や浮気が発覚して大喧嘩やもめ事が起きてしまう場合もあります。相手を攻めるばかりではなく、自分が甘え過ぎていたり、ワガママな発言が多かったりしたことを反省する必要がある場合もあるでしょう。<br><br>　お子さんとの関係にも溝ができてしまいそうです。良い意味では自立するタイミングで少し目を離せることになりますが、あなたの良かれと思ってとった行動が裏目に出てしまったり、お子さんの能力アップの邪魔をすることになったりする場合があるので、自分の考えを押しつけないで、信用をして温かく見守ることも忘れないようにしましょう。<br><br>　話をするときは、自分の考えだけが正しいと思わないで、お子さんの話をしっかり聞いて、どうすることが最善なのか一緒に考えるようにしましょう。また、急に反抗期がきて親との距離を取りたくなることもありますが、そのときは焦らないで自分の子供の頃を思い出して冷静に対応するようにしましょう。',
'<b>一人暮らしで新たな生活リズムを楽しむ</b>　2022年は実家暮らしをしている人は、一人暮らしの計画をしっかり立てて、お金を貯めておくなど準備をしておくようにしましょう。「お金がもったいない」「親が反対する」と言い訳をしていると、人生を棒に振ることになります。<br><br>　「金のイルカ座」は実家にいると本来の能力や運気の流れに乗れないので、親元を離れて暮らすようにしましょう。特に父方との縁が薄いので、仲が良くても離れた場所で暮らすことが大事でしょう。<br><br>　「チャレンジの年」なので、一人暮らしに挑戦をするには最適な時期です。2021年は縁の切れ目だったので、すでに一人暮らしや親族との別れがあった人もいると思いますが、2022年からは何事も前向きに捉えて、新たな生活リズムを楽しむようにしましょう。<br><br>　結婚している人は、家族の新しい生活習慣を作ってみたり、2022年から新たな行事を行ってみたりすると良いでしょう。5月の連休や夏休みの計画は早めに予約をして、遠出ができない場合は近くで思い出になりそうなことを企画してみると良いでしょう。ママ友やパパ友との交流会を開いてみたり、誕生日パーティを催してみたりすると良いでしょう。お金をかけるよりもアイデアで勝負することで、良い思い出もできそうです。',
'<b>喧嘩や離婚、突然の逝去などに注意する</b>　「乱気の年」や「裏運気の年」から家族関係がゴチャゴチャしたり、大小様々な喧嘩が増えてしまったりした人が多いと思いますが、2022年は良くも悪くもそれに区切りが付く「整理の年」になります。良い方向に進んで長年の問題が解決する場合もあれば、問題が更に多くなり、縁が切れてしまうような流れになってしまうこともあるでしょう。<br><br>　浮気や不倫がすでに発覚している場合は離婚や別居に進んでしまったり、離婚届けを突きつけられてしまったりすることや、あなたが離婚届けを相手に渡すような出来事も起こりそうです。<br><br>　また、身内で年配者がいる場合は不意の他界の可能性もあるので、事前に健康診断をしてもらうなど早めに対応しておくと良いでしょう。特に父方や男性の縁が切れてしまう可能性が高いので、上半期中に健康診断を受けてもらっておきましょう。<br><br>　2021年に何も問題が起きなかった家族でも、上半期は些細なことで喧嘩になったり、気まずい空気になったりする場合があります。ここ一、二年辛抱していると思っている人ほど爆発しやすいので、自分の自由な時間や友人とゆっくりできる時間を作った方が良いでしょう。<br><br>　下半期に入ると小さな問題が気にならなくなったり、他にやるべきことが増えてきたりすることで、些細なことは忘れてしまうようになりそうです。',
		),
		array( "gs22_007_4", 
'<b>毎年できる家族の恒例イベントを始める</b>　両親との関係も問題がある時期ではないですが、関係性が悪いと思うなら、2022年から変えてみることが大事。お祝いや記念日を大切にするのは良いのですが、どうしたいか両親の希望をよく聞いてからにしましょう。自分の思いを通しすぎてしまうことで、気まずい関係になっている場合があります。あなたが良かれと思っても相手からは微妙な場合もあるので気をつけましょう。<br><br>　あなたの中にある「家庭とはこうあるべき！」と決めつけていることで良い面もあれば、それに合わせなくてはならない家族の思いもあることを忘れないように。自分だけが正しいと思い込んでいると後の不運や夫婦関係を悪くする原因になってしまいます。「自分は間違っていない。自分が正しい」と思うときほど、立ち止まって「どこか勘違いをしているのでは？」と考えを変えてみたり、相手の立場や状況をもっと想像してみたりすると良いでしょう。<br><br>　家族だからと甘えてしまい、雑になっている部分もあると思いますが、ちょっとした言い方や伝え方を変えるだけで大きく変化します。特に、「金の羅針盤座」のあなたがポジティブ変換できるようになると、明るく楽しい家庭を作ることができるので、些細なことでイライラしたり、やみくもに善悪や白黒をつけようとしたりしないで、中間やグレーゾーンを楽しむようにしましょう。<br><br>　2022年から家族の恒例イベントを始めるのも良いですよ。些細なことでもいいので、毎年できそうなことを始めてみると家族のいい思い出になります。誕生日は外食する、手作りケーキをみんなで作る、夏は海に行くなど、毎年できそうなことを計画して、その日に向かって準備してみましょう。',
'<b>家族で一緒に楽しい挑戦をしてみる</b>　お子さんとの関係は、2021年辺りからリズムや距離感が変わってきたと思いますが、2022年はあなたが忙しくなることで子供との距離が空いてしまい、寂しい思いをさせてしまうことがあるので気をつけて。あなたが良かれと思って伝えた言葉が、相手にはマイナスな印象や否定されているような言い方に聞こえる場合があるので、言葉選びや言い方は常に注意しておくと良いでしょう。<br><br>　両親との関係も、忙しい1年になるので、会う回数や連絡する機会が減ってしまいそうです。誕生日や記念日には些細な物でも良いので、プレゼントやお祝いの連絡をしておきましょう。贈り物は見栄を張らないで、食べ物や飲み物、旬のフルーツなどが喜ばれそうです。また、一緒に旅行に行けるようでしたら、これまで行ったことのない場所が互いにとって楽しい思い出になりそうです。<br><br>　「チャレンジの年」の2年目なので家族と一緒に運動をしたり、ダイエットや資格取得の勉強をするなど、みんなで何か楽しみながら挑戦してみるのも良いでしょう。あなたが間食をガマンするなら、パートナーは禁煙をする、子供はテストで100点を取るなど、家族でこの1年でできそうな目標を掲げて、ゲーム感覚で競ってみると楽しい家族になれそう。<br><br>　みんなで節約をして、夏休みや大型連休で遊ぶお金や旅費を貯めてみるなども良さそうです。そんなとき、あなたが真面目になりすぎてカリカリすることがあるので、あくまでもみんなで楽しみながらやれる目標くらいの気持ちでいましょう。余裕があれば、家族でスポーツやハイキング、ウォーキングなどをするのも、思った以上に頑張れるようになります。',
'<b>お子さんとの約束はメモして絶対に忘れない</b>　お子さんとの関係は、あなたの言葉にお子さんが振り回されてしまうことがありそう。適当な会話を楽しむくらいは良いですが、言ったことや約束したことを忘れてしまうと、思った以上にガッカリされてしまいます。<br><br>　「解放の年」は言葉の力も強くなるので、言葉選びは慎重にして、約束したことはメモして忘れないようにするか、カレンダーに予定を書き込むようにすると良いでしょう。<br><br>　両親との関係も、しばらく縁が薄かった人でも繋がりが強くなったり、良い距離感を保てるようになりそう。独身で実家暮らしの場合は、いつまでも甘えているとあなたの成長にもならないので、節約をしてでも一人暮らしをすることで、両親との関係が更に良くなったり、親に対する本当の感謝の気持ちが理解できるようにもなるでしょう。両親の誕生日プレゼントは、これまでよりもインパクトのある物や豪華な食事をご馳走するなど、大人になったあなたを見せることが何よりも親孝行になりそうです。<br><br>　基本的には問題が起こるような年ではないので、楽しく過ごせると思いますが、そもそも家族に執着をすることが少ないので、ややドライな関係で過保護にならない方が、あなたらしく良い家庭を作れます。<br><br>　家族といっても求めていることは違うので、自分の考え方や生き方ばかりを通さないで、他の家族の生き方も認めておきましょう。仕事をしないで家庭にいつまでもいるとイライラの原因になるので、お子さんの手が離れている場合は、2022年から短時間でもいいので仕事を始めてみると良いでしょう。',
'<b>みんなで散歩やスポーツをするのも良い</b>　両親との関係は、距離が離れている場合は忙しさに会う機会を逃してしまい、連絡やお祝いを忘れてしまうことがあるので注意しましょう。心にゆとりを持って両親への感謝も忘れないようにしましょう。<br><br>　また、親が過去に病気したところは、「銀のインディアン座」は引き継ぐことが多いので、今の自分の年齢くらいで病気や怪我があったのか聞いておくと、上手く避けられることもあるでしょう。<br><br>　家族みんなで散歩やスポーツをするのも良いので、みんなでできる軽い柔軟体操やヨガ、ダンスなどをしたり、ゲーム機を使っての運動なども行ってみたりすると良いので、できるだけ楽しく長く続けられる物を選んでやってみると良いでしょう。事故も起こしやすいので、車に家族の写真を飾っておくと無理な運転をしなくなり、あせったときでも落ち着いて運転ができるようにもなるでしょう。<br><br>　お酒を飲むときには、一杯飲んだら二杯目はウーロン茶にするなど、飲むペースやルールを変えてみると良いでしょう。特に飲み始めると時間を忘れてダラダラ飲んでしまいやすいので、2022年は22時以降は飲まない宣言をしたり、寝る時間から逆算して飲み終える時間を先に決めてみると、周囲も家族も協力してくれそう。<br><br>　家族や友人とダイエットを一緒にするのも効果がありそうなので、一人では飽きて続かないことでも周りを上手く巻き込むことで、健康で元気な1年を過ごせるでしょう。疲れたからといって栄養ドリンクばかりに頼ってしまうと、突然倒れてしまうことなどもあるので、休みことを楽しんでゆっくりのんびり本を読んで音楽を聞ける日を、2022年は例年よりも多く作るようにしましょう。',
'<b>いろいろな形の家族が再生する年になる</b>　お子さんとの関係は、あなたの影響力が強くなる年でもあるので、子供から柔軟な発想や最近の流行を学べることもあるでしょう。あなたが過去の失敗や昔のことをいつまでも言うことで、やる気をなくしてしまう場合もあるので、冗談でも言わないようにして、子供の話は最後までしっかり聞いて何をどう伝えたいのか、理解できるまで話をするようにしましょう。決めつけてしまうと「話しても伝わらない」と思われて、相談できない関係になってしまうことになるので気をつけましょう。<br><br>　しばらく繋がりが弱かった家族でも、これまで問題のなかった家族でもいい1年を過ごせそうですが、しばらく会えなかった親戚や従兄弟などとも久しぶりに会えて、懐かしい話や忘れていた記憶も思い出せるでしょう。<br><br>　また、問題を抱えていた家族も2022年は解決に向けて話が進むようになるでしょう。特にあなたに優位に話が進んだり、あなたの意見が通りやすいですが、言葉で伝えきれないときは手紙やメールで気持ちを伝えてみると、上手く伝わるようになるでしょう。<br><br>　また、不仲になってしまった家族がいる場合は、2022年は仲直りできるきっかけがあるので、過去は許したことにして連絡をしたり、手を差し伸べてみると良いでしょう。面倒なことでもスムーズに話が出できるようになりそうです。相続などで揉めている場合は、年内中に片付けておくと良いでしょう。',
'<b>家族と遊ぶ時間が多かった1年を目指す</b>　両親とは下半期の方が繋がりが強くなるので、秋や年末に会う機会や連絡を取ることが多くなりそうですが、約束をしたら忘れないようにして、「言った、言わない」の揉め事にならないように気をつけましょう。2022年はあなたがミスを起こしやすいので「これは自分が悪いかな」と引くようにすれば、大きな問題にはならないでしょう。両親の話を聞いたり、相撲や歌舞伎など敷居が高いと思われるような場所に一緒に行くと、これまでとは違う発見があり、視野も広げられるでしょう。<br><br>　趣味に没頭するなど、一人の時間をついつい楽しんでしまって、家族のことを忘れて遊び過ぎてしまう場合もあったと思いますが、これまで無事に過ごせて来れたのは家族のお陰だということを忘れないようにして、2022年は家族と遊ぶ時間が多かったと思えるような1年にすると良いでしょう。<br><br>　無理にお金や時間をかけなくても、身内だからこそ手軽で喜んでもらえることをするので良いのです。「銀の鳳凰座」は、昔の思い出が強すぎるので、あなたが思っている事とは家族の好みが変わっている可能性があります。家族が今、興味があることしっかりリサーチして、何をすると喜ぶのか、好きな物は何かを調べておかないと「あ～、これ昔好きだったね～」と懐かしがられるだけで、喜んでもらえないような物をプレゼントしてしまう場合もあるので気をつけましょう。<br><br>　また、家族の誕生日プレゼントやケーキをギリギリになってから予約や準備をすると、間に合わない場合や日付や名前を間違えるようなミスをすることもあるので、お祝い事の準備は早め早めに進めるようにしましょう。',
'<b>実家を出て一人暮らしをする</b>　家族といえども対等に付き合っていきたいのが、「金の時計座」の本音。子供とも友達のように話ができるなど仲良くするのは良いですが、子供にも隠したいことや秘密はあるものなので、何でも聞き出したり、知ろうとしたりしないことが大切。子供を信頼して温かく見守るようにしましょう。下半期になると距離が空いてしまうことがありますが、自立や親離れの時期だと思い、流れに逆らわないで子離れがしっかりできるようにしましょう。<br><br>　まだ独身で一人暮らしをしていない人は、年内に実家が出るようにしましょう。「お金がもったいない」と言い訳していないで、社会人なら親元を離れて暮らすことで親に本気で感謝できるようになり、お金での苦労や工面は人生的にも大きな経験にもなるので、10、12月を目標にして、この1年は引っ越しをするために頑張ってみるのも良いでしょう。<br><br>　人との繋がりを大切にするタイプだからこそ家族も大切にできる人でもありますが、その繋がりも2022年の上半期までです。下半期から流れが徐々に変わってくるので、家族と距離が空いても絆はしっかり繋がっていて、互いに信頼していることを理解できるようにしておきましょう。そのためにいい思い出作りも大事ですが、距離感を保つことや気遣いをすることも忘れないようにしましょう。<br><br>　家族に甘え過ぎていると雑に扱ってしまったり、言葉が荒くなってしまうことがあるので、親子でも別人格だということを忘れないように。「わかってもらえて当然」と思わないで、しっかり言葉を選んで、相手の喜ぶことが何かをもっと考えて行動するようにしましょう。下半期に家族との距離が空く場合もありますが、執着をしないで温かく見送れるような心構えをしておくと良いでしょう。',
'<b>家族がいるから頑張れていることに感謝する</b>　お子さんとの関係も良好ですが、あなたの考え方や言葉が強く伝わりすぎてしまったり、その時の気分で振り回してしまったりすることもあります。丁寧に上品な言葉を心がけて、なるべく機嫌良くするようにして、間違っても不機嫌な状態で余計なことを言わないようにすることが大切でしょう。<br><br>　挨拶やお礼の大切さを伝えてみると、さらに良い関係になれそうです。前向きな言葉やポジティブな発言を意識することで、良い親子関係ができそうです。お子さんからプレゼントをもらったり、頑張ったことをアピールされたときは、いつも以上に喜ぶようにすると、勉強や運動をもっと頑張ってくれるようになるでしょう。<br><br>　良くも悪くもあなたが家族の中心になったり、発言力が強くなる年。仕事や趣味や交友関係で忙しくなるときでも、家族の支えや協力があるから、自分の好きなことができているということを忘れないようにしましょう。運気がいい年だからこそ、感謝の気持ちをしっかり表わすことで、いい1年になるでしょう。<br><br>　あなたの精神的な土台となっている家族を大切にするためには、部屋の掃除が重要です。気がついたところはドンドンきれいにして、みんなの見本になるようにすると、より明るい家庭にもなります。挨拶は明るく元気に交わし、毎日家族を笑顔で迎えるなど、前向きなことをいろいろやっておくと良いでしょう。',
'<b>古風な考えは捨てて家族で協力を</b>　「裏運気の年」は予想外の事件が発覚する可能性もあります。親族を疑った目で見るのは良くないですが、イヤな予感やこれまでとは違う気配がするときは、事前に確認をしておくことで、大きな問題を避けられるかもしれません。<br><br>　ご主人や奥さんの浮気や浮気に繋がる流れ、お子さんの怪我や病気、喧嘩やいじめ問題など「うちの子に限って」と思うような出来事も起きやすいので、注意が必要ですが、監視し過ぎてしまうとかえって逆効果になってしまうので、まずはパートナーや子供を信用することが大切。あなたが不要にイライラしたり家庭内がギスギスしたりすると、周囲にいる人の気持ちが離れてしまうでしょう。<br><br>　夫とは、妻とは、親とは……など古い考えに縛られていることが苦しい原因になってしまうこともあります。古風な考えを捨てて自分の考え方を柔軟にするためにも、父だからこれをやらなくてはならない、母だからこうするべき、などと思い込んでいる場合は、考えを改めましょう。<br><br>　何かと家族に協力してもらうようにして、自分も一人の人間として、時にはサボりたくなるし、ズルい部分も持っているということを伝えて、家族内のルールを少し変えてみましょう。家事は母親がやることになっている場合は、少しずつでも良いので家族に手伝ってもらえるようにすると良いでしょう。<br><br>　また、両親の問題など出てくる運気でもあるので、両親の喧嘩や離婚問題などに巻き込まれてしまうこともあります。裏運気のあなたが良かれと思ってすることが、裏目に出てしまうことがあるので、双方の話をしっかり聞くくらいで止めておくように。余計な心配をしないことが大切なので、考えすぎには注意しましょう。',
'<b>我が家の味を伝えるといい思い出になりそう</b>　「乱気の年」は裏のインディアン座の能力に目覚めるときでもあり、これまで大人としての考え方や生き方が強かった人ほど、中学生のような気持ちやテンションになって、子供と一緒に遊んだり学べたりするようになる年でもあります。連休や長期休みの計画を一緒に作ってみたり、あなたも資格取得の勉強をして共に勉強をするいいライバルになってみたりするのも良いでしょう。<br><br>　ただ、子供っぽくなることで対等に喧嘩をしてしまうこともあるので、2022年に入って言い合いが増えてしまったと感じたら「自分が幼くなっている」と思って冷静に対応するようにしましょう。また、親子で料理を作ってみると良い年なので、母や義母からの料理を学んで、独自の工夫や味付けといった我が家の味を子供たちに伝えてみると、思った以上にいい思い出になる場合もあるでしょう。ただ、指を切ってしまうなどの怪我には注意をして、無理はしないようにしましょう。<br><br>　「乱気の年」は、素直に家族に助けてもらったり、逆に助けなくてはならなくなったりすることが必要な状況になることもあります。家族だから言えることもあると思いますが、思った以上に頼み方が雑になってしまう場合があるので、身内であっても挨拶や礼儀をしっかりわきまえて接するようにしましょう。<br><br>　「言わなくても理解しているだろう」と甘えた気持ちでいると喧嘩になってしまうので、自分の甘えは捨ててしっかり説明などをするようにして、良い家族関係を作るように意識を高めておきましょう。',
'<b>家族を大切に思い一緒に楽しむ</b>　お子さんとの関係も一歩前進できたり、良い意味で距離を置けたりするようになりそうです。ここ一、二年は手がかかっていた子ほど心配事が減ったり、安心できたりするようにもなりそうです。自分と子供は同じ人間ではなくて、考え方や生き方が違うということを忘れないようにしましょう。勉強や運動のコツを教えたり、失敗や負けることからも学べることがあると教えてみたりすると、良い関係を作ることができそうです。<br><br>　「裏運気の年」や「乱気の年」で、家族や家庭関係が崩れてしまったり、不安定になって離婚の危機や大喧嘩もあったりもしたと思いますが、大きな壁を乗り越えて2022年になったので、新たな気持ちで家族を大切に思い、一緒に楽しもうとする気持ちが大切です。<br><br>　あなたのワガママで迷惑をかけてしまった場合は、意地を張っていないで謝ることが大切。いつまでも甘えて相手の責任にしていると、気まずい時間が続くだけだと心得ましょう。我慢しているのはあなただけではなく、家族もグッと飲み込んでいるのだということを忘れないようにしましょう。<br><br>　特に問題のなかった家族は、みんなでスポーツを楽しんだり、旅行やイベントに参加してみたりするなど、楽しい家庭を作るための工夫をしてみると良いでしょう。年に数回は美術館などアートに関する場所に行ってみると良いので、気になる展覧会などを見つけた場合は、みんなで出かけてみると良いでしょう。',
'<b>家族で片付けや大掃除をすると良い年</b>　あなたが「整理の年」だからといって、目の前にある物や不要と思われる物をドンドン処分してしまうと、それが他の家族にとっては必要であったりや大事であったりする可能性もあるので、勝手に捨てたり片付けたりしないようにしましょう。捨てるときは確認してもらってからにしないと、家族で大喧嘩になってしまう場合があるので気をつけましょう。事前に「大掃除する日」を伝えて、それまでに片付けない物を処分するようにすると良いでしょう。<br><br>　お子さんとの関係も気まずい空気が徐々に終わって、良い意味で距離を保てるようになれたり、温かく見守るようになれたりしそうです。自分の考えを押しつけて自立の邪魔をしないように、自分の子供を信頼して勉強や学ぶことの楽しさを伝えてみると良いでしょう。「時にはゲーム感覚で勉強をすると楽しく学べる」ということなどを、上手く教えられるようにもなれそうです。<br><br>　両親との関係は、体調の心配を早めに伝えてもらって問題がなければ良いですが、突然体調を崩したり、倒れて慌てたりすることもあります。特に年齢を重ねている両親や祖父母がいる場合は、2022年は気をつけて過ごしてもらうようにしましょう。注意しておくだけでも余計な事故や怪我を避けられるでしょう。<br><br>　2022年は家族で大掃除や片付けをする機会を増やすと良いでしょう。その際にも一人で何でも頑張るのではなく、掃除や片付けを遊び感覚でできるように工夫してみることで、みんなの協力も得られそうです。普段チェックしないようなクローゼットの奥にしまいっぱなしの物は、一度出して処分する必要もあるでしょう。',
		),
		);
?>