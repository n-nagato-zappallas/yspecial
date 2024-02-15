<?php
/**
 * menu_id : nu20_001
 *     無料：一人用
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'nu20_001',
			'contents'			 => 'free',
			'img_name'			 => 'zap_spshimada',
			'teller_name'		 => '島田秀平',
			'isp_mid'			 => '52v000',
			'price'				 => '0',
			'discount'			 => '0',
			'design_cd'			 => '99',
			'person'			 => '1',
			'release_date'		 => '20191203',
			'title'				 => '1年全部占います！【人気占い師6人集合】2020年あなたの運勢',
			'caption'			 => 'nu20_001:caption',
			'1_min_title' => array( "島田秀平", 
				'2020年の総合運を一言で言うと',
				'2020年の恋愛運を一言で言うと',
				'2020年の仕事運を一言で言うと',
				'2020年の金運を一言で言うと',
				'2020年の対人運を一言で言うと',
				'2020年の結婚運を一言で言うと',),
			'2_min_title' => array( "水晶玉子", 
				'2020年の総合運を一言で言うと',
				'2020年の恋愛運を一言で言うと',
				'2020年の仕事運を一言で言うと',
				'2020年の金運を一言で言うと',
				'2020年の対人運を一言で言うと',
				'2020年の結婚運を一言で言うと',),
			'3_min_title' => array( "木村藤子", 
				'2020年の総合運を一言で言うと',
				'2020年の恋愛運を一言で言うと',
				'2020年の仕事運を一言で言うと',
				'2020年の金運を一言で言うと',
				'2020年の対人運を一言で言うと',
				'2020年の結婚運を一言で言うと',),
			'4_min_title' => array( "イヴルルド遙華", 
				'2020年の総合運を一言で言うと',
				'2020年の恋愛運を一言で言うと',
				'2020年の仕事運を一言で言うと',
				'2020年の金運を一言で言うと',
				'2020年の対人運を一言で言うと',
				'2020年の結婚運を一言で言うと',),
			'5_min_title' => array( "波羅門", 
				'2020年の総合運を一言で言うと',
				'2020年の恋愛運を一言で言うと',
				'2020年の仕事運を一言で言うと',
				'2020年の金運を一言で言うと',
				'2020年の対人運を一言で言うと',
				'2020年の結婚運を一言で言うと',),
			'6_min_title' => array( "上地一美", 
				'2020年の総合運を一言で言うと',
				'2020年の恋愛運を一言で言うと',
				'2020年の仕事運を一言で言うと',
				'2020年の金運を一言で言うと',
				'2020年の対人運を一言で言うと',
				'2020年の結婚運を一言で言うと',),
		);

// 小メニューロジック
$logic = array(
			'd',
			'a1',
			'1A',
			'a1',
			'a1',
			'a1',
		);

// Next枠
$next = array( "nu20_005", "nu20_009", "nu20_013", "nu20_017", "nu20_021", "nu20_025" );


// 結果テキスト
$text = array(
		array( "島田秀平", 
			array(  "カテゴリー1", 
'総合運は、勢いがあります。新しいことを始めてください！',
'総合運は好調です。特に対人関係が円満な1年になるでしょう。',
'総合運は、楽しいことがたくさん起きる1年になるでしょう。',
'総合運は、安定した状態にあります。着々と計画を進められるでしょう。',
'総合運は、活気があります。冒険するなら絶好のタイミングです！',
'総合運は、家族が鍵となる運気です。家庭的なものを大切にしましょう。',
'総合運は、静かで落ち着いています。勉強によいときです。',
'総合運は、上昇気流に乗っています。成功できるでしょう。',
'総合運は、まずまずです。身辺整理をするようにしてください。',
			),
			array(  "カテゴリー2", 
'恋愛運は好調です！　積極的にアプローチするといいですよ！',
'恋愛運は穏やかです。友情から恋が始まることもあるでしょう。',
'恋愛運が盛り上がります。複数の恋をするかもしれません！',
'恋愛運はまじめな恋を求める運気にあります。結婚も視野に入れて。',
'恋愛運は危ない恋に引かれる気配があります。火遊びはほどほどに。',
'恋愛運は本物を愛を知るときです。将来を意識するかもしれません！',
'恋愛運はまずまずです。恋より勉強を選びがちな年に。',
'恋愛運は停滞気味に。仕事が優先になるでしょう。',
'恋愛運は波があります。別れの後に出会いが待っているでしょう。',
			),
			array(  "カテゴリー3", 
'仕事運はアイデアが勝負！　企画を売り込みましょう！',
'仕事運は仲間との協調性が鍵。円満な人間関係を築きましょう。',
'仕事運は、楽しく働くことで上昇するでしょう。好きを仕事に。',
'仕事運は、基礎を固めるべき運気に。欠点を強化しましょう。',
'仕事運は、挑む姿勢がよいとき。リスクのある仕事にチャレンジを。',
'仕事運は、責任感が必要です。ミスのない仕事を心がけましょう。',
'仕事運は、スキルアップによいときです。勉強しましょう。',
'仕事運は、成功の運気です。エネルギッシュに働きましょう。',
'仕事運は、転機の運気です。新たな方向に目を向けましょう。',
			),
			array(  "カテゴリー4", 
'金運は先行投資に吉！　金銭計画を立てましょう。',
'金運はまずまずです。人助けのためにお金を使うとよいでしょう。',
'金運は上昇しています。楽しんでいると金銭が舞い込むでしょう。',
'金運は落ち着いています。貯金を始めるのによいタイミングです。',
'金運は、揺れ動いています。一攫千金を狙うのによいタイミング。',
'金運は、堅実な運気に。金銭問題は家族に相談しましょう。',
'金運は、教育費がかかる気配があります。ケチケチしないで。',
'金運は、絶好調です！　大きな買い物をしましょう。',
'金運は、変化しています。無駄を省くようにしてください！',
			),
			array(  "カテゴリー5", 
'対人運は、新たな出会いにツキがあります。行動範囲を広げましょう。',
'対人運は、最高の状態にあります。パートナーが見つかるでしょう。',
'対人運は、絶好調です！　人つき合いを楽しめるでしょう。',
'対人運は、穏やかです。身近な人との関係を深めましょう。',
'対人運は、人脈が広がる運気です。違うタイプとつき合ってみましょう。',
'対人運は、悩みを聞く機会が増えそう。思いやりを持ちましょう。',
'対人運は、ひとりが落ち着くとき。義理のつき合いは最小限にして。',
'対人運は、人の上に立つことで上昇する運気でしょう。積極的に。',
'対人運は、腐れ縁を断ち切るタイミングです。相手を見極めて。',
			),
			array(  "カテゴリー6", 
'結婚運は上昇します！　理屈ではなく勢いが大切なときですよ！',
'結婚運は最高です！　異性と一緒にいる時間をふやしましょう。',
'結婚運はチャンスはありますが、まだ自由でいたいかもしれません。',
'結婚運は好調です！　気になる人からプロポーズされるかも。',
'結婚運は躍動しています。出会ってすぐにゴールインもありそうです！',
'結婚運は絶好調です！　機会があれば飛び込んでみてください。',
'結婚運は可もなく不可もなく。運命の出会いをすることも。',
'結婚運は、キャリアと結婚で悩みそうな運気です！',
'結婚運は、準備の段階に。実現に向けて、計画を練りましょう。',
			),
		),
		array( "水晶玉子", 
			array(  "カテゴリー1", 
'総合運は、現状維持を意識すると安心できるとき。何事も丁寧に。',
'総合運は幸運に恵まれるとき。直感を信じて堂々と進みましょう。',
'総合運は、着実に過ごせる年。自分のペースを守れるでしょう。',
'総合運は、じっくり考えて慎重に行動するほど安定するときです。',
'総合運は堅実です。計画通り、着々と進むことができるでしょう。',
'総合運は好調。自信を持って動き続ければ努力が実りそうです。',
'総合運は、一歩ずつ丁寧に進むことで生活も心も安定する年です。',
'総合運は楽しく過ごせそうな1年です。新しい刺激を求めてみて。',
'総合運は平穏に過ごせる1年。良い習慣をつけるチャンスです。',
'総合運は絶好調。公私ともにチャンスが舞い込み飛躍できそう。',
'総合運は平和なとき。1人で過ごす時間を心から楽しめそうです。',
'総合運は好調な1年。新しいことを楽しむと自信が深まります。',
			),
			array(  "カテゴリー2", 
'恋愛運は素直に甘えると幸せを実感できる年。駆け引きしないで。',
'恋愛運は人気最高潮。さまざまな異性から注目されそうです。',
'恋愛運は、愛が芽生え深まるときです。甘い自分を演出して。',
'恋愛運は、相手の短所を裏返して長所として見ると愛されるとき。',
'恋愛運は、受け身になり可愛げを見せるほど、愛されるときです。',
'恋愛運はチャンスの年。感情に正直になるほど人気も上がります。',
'恋愛運は、のんびり構えて待ったほうが幸せが大きくなります。',
'恋愛運は幸せに恵まれる年。褒められる部分は特に自信を持って。',
'恋愛運は、まずは冷静に相手を観察すると幸せが生まれる年です。',
'恋愛運は大チャンスの年。不安は忘れて幸せな想像を信じて。',
'恋愛運は趣味や遊びを通じて幸せが舞い込む年。行動範囲を広く。',
'恋愛運は魅力も人気も増す年です。まっすぐな視線で笑いかけて。',
			),
			array(  "カテゴリー3", 
'仕事運はじわじわと実力UPする年。目標を一点に定めて。',
'仕事運は一歩前進。提案したアイデアが採用されそうです。',
'仕事運は周りから尊敬される1年。意見は明確に伝えて正解です。',
'仕事運は、1人で取り組む作業がはかどる年。相談は短時間で。',
'仕事運は、本来の有能さが評価されるとき。地道な努力が鍵です。',
'仕事運は実力と努力が認められる年。ひらめきと斬新さが武器に。',
'仕事運は、人の言葉の中に発展へのヒントが隠されていそうです。',
'仕事運は積極的に動くほど好調に。アイデアは照れずに公表して。',
'仕事運は無理せず実力を出せる年。まずは周りに協力しましょう。',
'仕事運は発展と目標達成の暗示。結果を出したい仕事を優先して。',
'仕事運は平穏。同僚との雑談が、信頼と協力を強くするでしょう。',
'仕事運は順調。意見は率直に伝えるほど評価が上がりそうです。',
			),
			array(  "カテゴリー4", 
'金運は自己投資が吉。得た知識がやがてお金を生む種になります。',
'金運は、人付き合いにお金を使うとすばらしい人脈に恵まれそう。',
'金運は、黒字を守っていけそう。定期的に予算を組む習慣を。',
'金運は、持ち歩く現金を少なくすると正しく判断できるでしょう。',
'金運は平和。節約を意識するとお金の使い方が上手になります。',
'金運は、投資や懸賞などで思いがけない幸運もありそうな年です。',
'金運は、経済面の知識や情報を増やすとお金の実力が高まります。',
'金運は安定しています。楽しいことに笑顔でお金を使いましょう。',
'金運は、過去の使い方を振り返ると節約のヒントを発見できそう。',
'金運はお金に好かれる運気。投資や運用にも積極的に取り組んで。',
'金運は使い方が上手になる年です。贅沢するポイントを絞って。',
'金運は好調で高め。人付き合いに使うことでさらに高まります。',
			),
			array(  "カテゴリー5", 
'対人運は、聞き役に回ると魅力が増します。適度に1人の時間も。',
'対人運は、注目を集める年。自分のカラーを出しましょう。',
'対人運は堂々と接するほどに好調に。目上にも自信を持ってOK。',
'対人運は素直さが鍵。感謝は笑顔で、謝罪はすぐに伝えましょう。',
'対人運は人脈が広がるとき。知っていることは惜しみなく教えて。',
'対人運は個性が輝いて人が集まる年。適度が距離が幸運の鍵です。',
'対人運は、丁寧な説明を心がけると人間関係が円滑になります。',
'対人運は人脈が広がる年。誘われた場所には迷わず出掛けてみて。',
'対人運は、相手に合わせるほど自分もリラックスできるときです。',
'対人運は人気と説得力がUP。有益な人間関係も広がりそうです。',
'対人運は、人を楽しませようとするほど充実感が深まるでしょう。',
'対人運は、新しいタイプの人と知り合い、幸運が舞い込む年です。',
			),
			array(  "カテゴリー6", 
'結婚運は、身近な人の中からパートナーが見つかりそうな年です。',
'結婚運は好調。さり気なく将来をほのめかすと、話が進みそう。',
'結婚運は希望が見えるとき。自然の中で語らうとよさそう。',
'結婚運は、相手の理想をかなえる努力をすると幸せに近づけます。',
'結婚運は、共通の体験が鍵になるとき。一緒に料理やスポーツを。',
'結婚運は期待大。大胆に動いてチャンスを生み出しましょう。',
'結婚運は妥協できるポイントを見つけると一歩前進しそうです。',
'結婚運は、自信を持って向き合えば話が具体的に進みそうです。',
'結婚運は、楽しく遊んでいるときに将来の話が出そうなときです。',
'結婚運はゴールインの暗示も。交際期間が短くても自信を持って。',
'結婚運は、過去の人間関係にも目を向けると進展がありそうです。',
'結婚運は一気に話が進むこともありそう。勢いに任せて正解です。',
			),
		),
		array( "木村藤子", 
			array(  "カテゴリー1", 
'総合運は悪くありません。バランスのとれた一年になりそうです。',
'総合運はよい方です。成長を意識するとさらに上向くでしょう。',
'総合運はよいですが変動的です。刺激的な年になるでしょう。',
'総合運は悪くありませんが、試練の多い年になりそうです。',
'総合運はよくありませんが、挑戦する姿勢を忘れずいきましょう。',
'総合運はよいですが、慎重に行動することが大切です。',
'総合運はよいでしょう。よい意味で忙しい一年になりそうです。',
'総合運はあなたに次第です。計画性をもって行動しましょう。',
'総合運はよくありませんが、積極的に動くべき年です。',
			),
			array(  "カテゴリー2", 
'恋愛運はよいでしょう。素敵な異性からアプローチがありそうです。',
'恋愛運はよい方です。出会いの機会を多くもちましょう。',
'恋愛運はよくも悪くもありませんが、恋は刺激的なものになりそうです。',
'恋愛運はよいでしょう。価値観を変える出会いがありそうです。',
'恋愛運はよくも悪くもありませんが、望みは高くもちましょう。',
'恋愛運はよくありませんが、気配りを忘れなければ上向きます。',
'恋愛運は非常によいでしょう。一生に一度の恋ができそうです。',
'恋愛運はよくありませんので、無理なアプローチは禁物です。',
'恋愛運はかなりよいでしょう。楽しい恋ができそうです。',
			),
			array(  "カテゴリー3", 
'仕事運はとてもよく、助け合う心を意識すればさらに上向きます。',
'仕事運はよくありませんが、前向きに行動しましょう。',
'仕事運は悪くもありません。情熱が成功を呼ぶでしょう。',
'仕事運はよいといえます。壁を破る年になりそうです。',
'仕事運はよくありませんが、転機は何度も訪れそうです。',
'仕事運はよいですが、浮き沈みが激しそうです。',
'仕事運はよくありませんが、大きなトラブルはなさそうです。',
'仕事運は非常によいですが、試練も訪れそうです。',
'仕事運は悪くありません。何事もうまく進んでいくでしょう。',
			),
			array(  "カテゴリー4", 
'金運は芳しくありませんが、こつこつ貯めましょう。',
'金運は悪くありません。たまになら贅沢もできそうです。',
'金運はよいといえるでしょう。思わぬ臨時収入がありそうです。',
'金運はよくありませんが、まとまった額を手にする機会があるかもしれません。',
'金運はよいとはいえません。無駄づかいに気をつけましょう。',
'金運はよいでしょう。それなりの財を築けそうです。',
'金運はよくありません。節約を心がけましょう。',
'金運は可もなく不可もなく。お金の貸し借りには注意しましょう。',
'金運はよい方です。気前よくいきましょう。',
			),
			array(  "カテゴリー5", 
'対人運はよくありません。周囲の反感を買わないよう注意しましょう。',
'対人運はよいとはいえません。感情表現はきちんとしましょう。',
'対人運は良好ですが、謙虚さを忘れずにいきましょう。',
'対人運はよいでしょう。周囲と信頼関係を築くことができそうです。',
'対人運はよいといえます。熱意をもって人と接しましょう。',
'対人運はよくありません。自己主張は控えた方がよいでしょう。',
'対人運はよいといえます。友人が増えそうです。',
'対人運は比較的よいでしょう。誠実さを心がけてください。',
'対人運はあまりよくありません。衝突の多い年になりそうです。',
			),
			array(  "カテゴリー6", 
'結婚運は非常によいでしょう。異性と素晴らしい関係を築けそうです。',
'結婚運はよいといえます。尊敬できる相手と出会えるでしょう。',
'結婚運はよいとはいえません。わがままは控えましょう。',
'結婚運はよくありませんが、焦らずじっくりいきましょう。',
'結婚運は悪くないので、積極的にいきましょう。',
'結婚運はとてもよいでしょう。出会いから入籍まで順調に進みそうです。',
'結婚運は悪くありません。出会いの機会が数多くありそうです。',
'結婚運は比較的よいといえます。異性に優しくしましょう。',
'結婚運はあまりよくありませんが、刺激的な出会いがありそうです。',
			),
		),
		
		array( "イヴルルド遙華", 
			array(  "カテゴリー1", 
'総合運は、変化が幸運をもたらすとき。失敗を恐れずに行動を。',
'総合運は、感性で勝負するとき。直感を信じて行動して吉。',
'総合運は、夢が実現する素晴らしいとき。継続がツキを呼びます。',
'総合運は、あなたに注目が集まるとき。自信を持って人前に出て。',
'総合運は、チャレンジに良運が。新しい物事に挑みましょう。',
'総合運は、人間関係が吉。人のために行動するとさらに良運が。',
'総合運は、恋が幸運を運んできます。自信を持って異性と接して。',
'総合運は、目標を達成できるとき。諦めずに努力を続けましょう。',
'総合運は、人との対話が鍵を握るとき。聞き上手を心掛けて。',
			),
			array(  "カテゴリー2", 
'恋愛運は、モテ期到来。パートナー恋人選びは直感を信じて吉。',
'恋愛運は、気になる人が複数あらわれます。あせらず見極めて。',
'恋愛運は、あなたが追われる展開に。人気者との恋の予感もあり。',
'恋愛運は、ドラマティックな展開に。一目惚れで恋が始まります。',
'恋愛運は、華やかです。複数の異性から思いを寄せられそう。',
'恋愛運は、変化があるとき。仕事や趣味を優先して恋が後回しに。',
'恋愛運は、出会いに恵まれるとき。恋人候補が複数あらわれそう。',
'恋愛運は、穏やかな恋ができるとき。真実の愛をつかむでしょう。',
'恋愛運は、異性との交流が活発になるとき。人間関係を広げて吉。',
			),
			array(  "カテゴリー3", 
'仕事運は、困難に立ち向かうと吉。難しい仕事は自ら買って出て。',
'仕事運は、感性がいかされるとき。アイディアを形にすると吉。',
'仕事運は、ツキが巡ってくるとき。自信を持って仕事に挑んで。',
'仕事運は、積極的に行動して吉。向上心を持って仕事を行って。',
'仕事運は、好奇心がツキを呼ぶとき。興味を持ったことに挑戦を。',
'仕事運は、人間関係が大切なとき。サポート側に回ると吉。',
'仕事運は、交渉や接待で活躍するとき。職場環境を整えると吉。',
'仕事運は、成功をつかむチャンス到来。諦めず努力を続けて。',
'仕事運は、完璧を求めるとき。交渉役として活躍する暗示も。',
			),
			array(  "カテゴリー4", 
'金運は、仕事に力を注ぐと吉。成功がお金を運んでくるでしょう。',
'金運は、ギャンブルやくじ運が好調。楽しんでやるのがポイント。',
'金運は、投資投機にツキあり。専門家の指導を受けて行うと吉。',
'金運は、株や投資など資産運用が吉。知識を習得してから実施を。',
'金運は、収入アップが期待できるとき。買物は良品を選んで吉。',
'金運は、貯蓄にツキがあるとき。浪費を抑えて倹約を心掛けて。',
'金運は、お金の管理がポイントに。貯金が運気をあげる秘訣。',
'金運は、幸運がついてまわるとき。投資や投機にもツキあり。',
'金運は、仕事での収入がアップするとき。節約を意識すると吉。',
			),
			array(  "カテゴリー5", 
'対人運は、趣味や好きなことにツキあり。活動範囲を広げると吉。',
'対人運は、センスが同じ人との交流が活発に。芸術家とのご縁も。',
'対人運は、同性との絆が深まるとき。年配者との交流は大切に。',
'対人運は、人との交流が活発に。積極的に人との交流を深めて吉。',
'対人運は、人気者になれるとき。自分らしさを前面に出すと吉。',
'対人運は、人との絆が深まるとき。相手のことを考えて行動を。',
'対人運は、異性とのご縁が強くなるとき。ノロケ話はホドホドに。',
'対人運は、親友との絆が深まるとき。不要なご縁は精算すると吉。',
'対人運は、仲裁役をまかされるとき。人の話に耳を傾けると吉。',
			),
			array(  "カテゴリー6", 
'結婚運は、電撃結婚する流れあり。インスピレーションを大切に。',
'結婚運は、チャンス到来の年。年内に結婚を決意する流れもあり。',
'結婚運は、流動的なとき。結婚に意欲を燃やせば良縁が訪れます。',
'結婚運は、良縁をつかむチャンス到来。華やかな席にご縁あり。',
'結婚運は、気持ちに左右されます。結婚に情熱を注げるかが鍵に。',
'結婚運は、仕事とのバランスを大切に。婚活にも力を注ぐと吉。',
'結婚運は、結婚より恋愛重視のとき。あせらずに準備を整えて。',
'結婚運は、良縁に恵まれるとき。年内に入籍する可能性もあり。',
'結婚運は、チャンス到来。モテ期到来で相手選びに苦労しそう。',
			),
		),
		array( "波羅門", 
			array(  "カテゴリー1", 
'総合運は穏やか。情熱を内に秘め、陰ながら努力することに。',
'総合運はのんびりムード。控えめにしているのがよいでしょう。',
'総合運は躍動しています。楽しいことがたくさん起きるでしょう。',
'総合運は上昇。情報に敏感になるようにしましょう。',
'総合運は強気に。目標を立てエネルギッシュに行動しましょう。',
'総合運は上昇中。向上心を持って過ごしましょう。',
'総合運は楽しい運気に。華やかなムードに包まれるでしょう',
'総合運はひとりでいるのが吉。自分の世界を大切にしましょう。',
'総合運は躍動しています。願望がかなえられるでしょう。',
			),
			array(  "カテゴリー2", 
'恋愛運は最高。好きな人に想いが伝わりそう。',
'恋愛運は誘惑に弱いとき。展開の早い恋模様になりそう。',
'恋愛運はマイペースに。あっさりした恋模様になるでしょう。',
'恋愛運は取り越し苦労が多いとき。おおらかに構えるとよいでしょう。',
'恋愛運はこだわりが強まる運気に。粘り強く愛を貫くでしょう。',
'恋愛運は束縛が苦手に。自立した関係を好むでしょう。',
'恋愛運は恋愛体質に。複数の恋を経験することもありそう。',
'恋愛運は悩み多き運気。運命の相手と出会えば一途になるでしょう。',
'恋愛運は移り気な運気に。ひとりに絞れないこともありそう。',
			),
			array(  "カテゴリー3", 
'仕事運は縁の下の力持ちになるのが鍵。人を助けましょう。',
'仕事運は引き立て運あり。目上の人からチャンスが巡ってくるでしょう。',
'仕事運は集中が鍵。ダラダラせずに短期で終わらせましょう。',
'仕事運は人に助けられて成功。人脈を持ちましょう。',
'仕事運は好調。駆け引きで有利な展開に持っていけるでしょう。',
'仕事運は揺れ動く運気に。天職をみつけるのが課題です。',
'仕事運は揺れ動くとき。成功しても油断しないようにしましょう。',
'仕事運は積み重ねが運気上昇に。根気強く働きましょう。',
'仕事運は人望が得られる兆し。遠方に仕事のチャンスがありそう。',
			),
			array(  "カテゴリー4", 
'金運は上々。無駄遣いには気をつけて。',
'金運は堅実傾向に。貯金が成功しやすいときです。',
'金運は注意が必要。散財しないように気をつけましょう。',
'金運は揺れ動く運気に。欲を出さないようにしましょう。',
'金運は上昇。粘り強く努力して金銭を引き寄せられるでしょう。',
'金運は絶好調。家族のためにお金を使いたくなりそう。',
'金運は貯められないとき。無駄遣いが多いので気をつけましょう。',
'金運は堅実な傾向に。長く保持できるものにお金を使いましょう。',
'金運は支出が増えそう。先行投資だと考えるとよいでしょう。',
			),
			array(  "カテゴリー5", 
'対人運が好調。ストレスのない人間関係を築けます。',
'対人運は人づき合いがうまい運気。特に年上にかわいがられます。',
'対人運は空気が読める運気に。うっかり発言には気をつけましょう。',
'対人運は好調。社交的で人に好かれるでしょう。',
'対人運は人に頼られる運気に。寛大に愛情を注ぐように接して。',
'対人運は正義感が強くなりそう。誤解されないように注意。',
'対人運はおしゃべり上手に。人づき合いを楽しめるでしょう。',
'対人運はストレスを感じそう。無理のない人づき合いを心がけて。',
'対人運はおだてに弱いとき。冷静に考えることが大切です。',
			),
			array(  "カテゴリー6", 
'結婚運は本気度が鍵。積極的にアプローチしましょう。',
'結婚運は相手を尊敬するのが吉。甘い新婚生活を送れそう。',
'結婚運はまずまず。安定よりも刺激を求める傾向にあるでしょう。',
'結婚運はコミュニケーションがポイント。本音で接しましょう。',
'結婚運は家族からご縁がもたらされるかも。相談してみて。',
'結婚運は細かい部分まで確認を。本音を伝えるのが重要です。',
'結婚運は上昇。嫉妬がきっかけでゴールインするかもしれません。',
'結婚運は最高に。所帯を持つと運気がますます上昇するでしょう。',
'結婚運は強気が吉。自ら結婚話をまとめましょう。',
			),
		),
		array( "上地一美", 
			array(  "カテゴリー1", 
'総合運は、好奇心旺盛になるのが吉。新たな可能性を探りましょう。',
'総合運は、安定期に。黙々と計画を進めて。',
'総合運は、人とのつながりが幸せを招くでしょう。',
'総合運は、明るく元気いっぱいに過ごせそう。エネルギッシュに。',
'総合運は、能力を発揮する機会に恵まれそう。自信を持って。',
'総合運は、リスクを恐れないのが◎。受け身ではなく自ら行動して。',
'総合運は、平和な運気に。予定通りに過ごせるでしょう。',
'総合運は、お気楽に過ごせそう。必死にならないのが◎。',
'総合運は、変化によいタイミング。新しいことを始めましょう。',
			),
			array(  "カテゴリー2", 
'恋愛運は、新しいタイプの異性に目を向けるのが◎。',
'恋愛運は、本音を打ち明けるのが絆が深まる鍵に。',
'恋愛運は、親切にするのが◎。思いやりある言動を心がけましょう。',
'恋愛運は、友情から恋が始まるかも。身近な異性に目を向けてみて。',
'恋愛運は、上司や部下、先輩後輩などの関係に恋の予感。',
'恋愛運は、積極的にアプローチするのが吉。行動力を発揮して。',
'恋愛運は、刺激よりも癒やしが◎。穏やかなつき合いをしましょう。',
'恋愛運は、流れに身を任せるのが◎。自然体でいましょう。',
'恋愛運は、あえて異性を意識しないのがうまくいく鍵。',
			),
			array(  "カテゴリー3", 
'仕事運は、転職によいタイミング。将来性を意識しましょう。',
'仕事運は、仲間と協力し合うようにしましょう。',
'仕事運は、助け合いの精神で。困っている人に手を貸しましょう。',
'仕事運は、チャンス到来。長年の夢がかなうかも。',
'仕事運は、責任ある役割を引き受けて。新たな挑戦が◎。',
'仕事運は、新たな挑戦に最適。転職や独立によいタイミングです。',
'仕事運は、スキルアップが吉。知識や技術を磨きましょう。',
'仕事運は、のんびりと働くのが◎。公私のバランスを考えて。',
'仕事運は、いろいろな職種を試してみるのがいいとき。',
			),
			array(  "カテゴリー4", 
'金運は、先行投資を考えて。数年先の計画を。',
'金運は、順調。貯金を始めるのによいタイミング。',
'金運は、交友費がかさむかも。ケチケチしないで支出するのが◎。',
'金運は、徐々に上昇。長期的な金銭計画を立てて。',
'金運は、直感がさえるとき。ピンとくるものにお金を使いましょう。',
'金運は、思い切った行動が◎。一獲千金を狙いましょう。',
'金運は、堅実に。節約を考えるのによいタイミングです。',
'金運は、お金に困らない時期。安心して過ごせるでしょう。',
'金運は、家計の見直しが◎。無駄を省きましょう。',
			),
			array(  "カテゴリー5", 
'対人運は、好調。積極的に人脈を広げましょう。',
'対人運は、コミュニケーションをマメに。誤解をなくしましょう。',
'対人運は、順調。積極的に人と関わりましょう。',
'対人運は、絶好調。生涯のパートナーが見つかるかも。',
'対人運は、世話好きに。みんなの面倒を見るとよいでしょう。',
'対人運は、周囲への影響力が高まるときでしょう。',
'対人運は、適度は距離感がポイント。義理のつき合いは控えめに。',
'対人運は、情が厚くなるとき。人との絆が深まるでしょう。',
'対人運は、広く浅くが◎。人脈を広げましょう。',
			),
			array(  "カテゴリー6", 
'結婚運は、上昇しています。運命の出会いをするかも。',
'結婚運は、話し合いが大事。共感できる相手を探して。',
'結婚運は、ご縁が巡ってくるとき。運命の出会いに注目。',
'結婚運は、自信を持って行動するのが吉。異性をリードしましょう。',
'結婚運は、頼りないタイプの異性が◎。すぐに話がまとまるかも。',
'結婚運は、スピード婚もあり得るとき。直感に従って。',
'結婚運は、自分の心に素直になれば運命を引き寄せられるでしょう。',
'結婚運は、お気楽に構えるのが◎。真剣になり過ぎないで。',
'結婚運は、新たな出会いに注目。初対面で運命を感じるかも。',
			),
		),
		);
?>