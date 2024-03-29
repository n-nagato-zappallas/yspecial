<?php
/**
 * menu_id : lj21_026
 * 岡井浄幸：一人用 9月運
 */

// メニュー情報
$menuData = array(
			'menu_id'			 => 'lj21_026',
			'contents'			 => 'okai_zap',
			'img_name'			 => 'zap_okai',
			'teller_name'		 => '岡井浄幸',
			'isp_mid'			 => '53p025',
			'nif_menukey'		 => 'shimohanki_2021_026',
			'price'				 => '600',
			'discount'			 => '540',
			'design_cd'			 => '6',
			'person'			 => '1',
			'category_name'		 => 'life',
			'release_date'		 => '20210826',
			'title'				 => '岡井浄幸が運勢を読み解く！「2021年9月あなたに○○が起こります」',
			'caption'			 => '2021年9月はどんな月になるのかを事前に知っておけば、幸運をつかんだり、ピンチを避けられたりするはずです。あなたの仕事運、対人運、恋愛運を岡井浄幸がズバリ当てましょう！　どんなことが起きて、あなたはどうなるかもきちんとお伝えしますよ。',
            'base_1_title_self' => '',
            'base_2_title_self' => '',
            '1_min_title'  => 'まずは、2021年9月の全体的な運勢についてお話ししましょう',
            '2_min_title'  => '2021年9月の仕事運はどうなる？',
            '3_min_title'  => '2021年9月の対人運は？　人間関係はうまくいく？',
            '4_min_title'  => '2021年9月の恋愛・出会い運はどうなる？',
            '5_min_title'  => 'この1カ月にどんなことが起きて、あなたはどうなる？',
		);

// 小メニューロジック
$logic = 'b1';

// Next枠
$next = array( "lj21_021", "lj21_022", "lj21_023", "lj21_024", "lj21_025"  );

// 一部見せテキスト
$free = array( 
		array( "lj21_026_1", 
'　2021年9月、[%NAME_SELF%]にとって一番大切なことは、粘り強い精神で、自分の足場を固めていくことです。この時期は思わぬアクシデントやトラブルが発生しやすいかもしれません。そのために……',
'　2021年9月、[%NAME_SELF%]にとって一番大切なことは、焦らず地道に努力していくことですよ。そうすれば次第に自分のリズムが整ってきて、精神が落ち着くことでしょう。それまではどうしても……',
'　2021年9月、[%NAME_SELF%]にとって一番大切なことは、勇気を出して、前に踏み出すことなのです。これまで今ひとつ実現に踏み切れなかったこと、途中で断念してしまったことがあれば……',
'　2021年9月、[%NAME_SELF%]にとって一番大切なことは、優柔不断にならないことです。これまでやり残していること、やろうと思っていながら実行に移せていないことがあれば、この時期から……',
'　2021年9月、[%NAME_SELF%]にとって一番大切なことはありのままの自分でいることです。この時期は、周りからの注目度が上がっていきますよ。だからといって、つい等身大以上の自分を……',
'　2021年9月、[%NAME_SELF%]にとって一番大切なことは自分の欲を極力抑えるようにすることです。この時期から思ったように行動しづらいと感じることが多くなるかもしれません。無理に前進する……',
'　2021年9月、[%NAME_SELF%]にとって一番大切なことは、目の前の課題をきちんとこなすことです。目先のことをいつまでも気にしていたり、ちょっとしたことで意欲が失われたりして、生活までが……',
'　2021年9月、[%NAME_SELF%]にとって一番大切なことは気持ちにゆとりを持つことです。これからの運気に変化の波がやってきそうですが、予想外のことが起こったりして、気持ちが落ち着かない……',
'　2021年9月、[%NAME_SELF%]にとって一番大切なことは感情を抑制することです。この時期、あなたの努力や成果が認められるものの、隠していることがばれたり、過去に受けた傷を思い出したり……',
			),
		array( "lj21_026_2", 
'　この月の[%NAME_SELF%]の仕事運は、新しいものに関心が高まりそうです。今手掛けている仕事をしながら、副業やアルバイトをしてみたいという意欲がわいてきますよ。それがあなたにとってちょっと……',
'　この月の[%NAME_SELF%]の仕事運は、誠実な気持ちで取り組むことが大切です。<br><br>　周りとの衝突やトラブルもそれほどなく、環境的に満足することでしょう。でもその現状につい甘んじ……',
'　この月の[%NAME_SELF%]の仕事運は、かなり活発になりそうです。<br><br>　こだわりを持ち過ぎたり、過去の栄光にすがったりしてはいけないという信念が高まってきますよ。そうして目標を……',
'　この月の[%NAME_SELF%]の仕事運は信頼と自信に満ちあふれることでしょう。<br><br>　これまでの努力が実り、周囲から頼りにされるようになります。新しい役割をお願いされたり、これまで……',
'　この月の[%NAME_SELF%]の仕事運は、思い通りに進んでいきそうです。<br><br>　あなたが組織の中心的存在になったり、リーダー的役割を引き受けたりして、積極的に仕事を進めることが……',
'　この月の[%NAME_SELF%]の仕事運は、かなり積極的になれますよ。「もっと飛躍していきたい」という衝動に駆られそうです。<br><br>　「この企画は自分にしかできない」、「この役割を……',
'　この月の[%NAME_SELF%]の仕事運は、周りの雰囲気についつい流されてしまいがちです。<br><br>　今までの疲れやストレスがどっと重なってきて、真面目にしていることが嫌になってしまった……',
'　この月の[%NAME_SELF%]の仕事運は人生を大きく左右することになりそうですね。<br><br>　今までやってきたことに対して疑問に感じること、これから取り組もうとしていることが、自分に……',
'　この月の[%NAME_SELF%]の仕事運は少々波乱含みです。<br><br>　表面的にはうまくいくことが多いですが、職場の実態に疑問を抱いたり、信頼していた人に裏切られたりして、必要以上に心を……',
			),
);


// 結果テキスト
$text = array(
		array( "lj21_026_1", 
'　2021年9月、[%NAME_SELF%]にとって一番大切なことは、粘り強い精神で、自分の足場を固めていくことです。この時期は思わぬアクシデントやトラブルが発生しやすいかもしれません。そのために「今までの自分って何だったのだろう」と悩まされたり、深く考えさせられたりすることでしょう。<br><br>　ですが、そこで向き合って学んだことは、これからの人生を変えていくはずです。それでは2021年9月の運勢をさらに詳しく見ていきましょう。',
'　2021年9月、[%NAME_SELF%]にとって一番大切なことは、焦らず地道に努力していくことですよ。そうすれば次第に自分のリズムが整ってきて、精神が落ち着くことでしょう。それまではどうしても成果が出てこない気がして、くじけそうになるかもしれませんが、前向きな気持ちでいてください。<br><br>　その後「あなたに協力したい」、「お手伝いさせてほしい」という人が現れそうです。それでは2021年9月の運勢をさらに詳しく見ていきましょう。',
'　2021年9月、[%NAME_SELF%]にとって一番大切なことは、勇気を出して、前に踏み出すことなのです。これまで今ひとつ実現に踏み切れなかったこと、途中で断念してしまったことがあれば、この時期から思い切って行動に移しましょう。今のあなたなら、うまくいきそうですよ。<br><br>　今あなたの運気は上昇中です。この勢いに乗って、なりたい自分を目指していくことです。それでは2021年9月の運勢をさらに詳しく見ていきましょう。',
'　2021年9月、[%NAME_SELF%]にとって一番大切なことは、優柔不断にならないことです。これまでやり残していること、やろうと思っていながら実行に移せていないことがあれば、この時期から本格的に取り組んでいきましょう。「時間がないから」と先延ばしにしてしまうと、せっかくのチャンスをつかめないままになってしまいます。<br><br>　この時期はなるべく早め早めの決断をしていくといいですね。それでは2021年9月の運勢をさらに詳しく見ていきましょう。',
'　2021年9月、[%NAME_SELF%]にとって一番大切なことはありのままの自分でいることです。この時期は、周りからの注目度が上がっていきますよ。だからといって、つい等身大以上の自分をアピールしようとすると、裏目に出てしまいそうです。そうしてちょっとした一言や態度が、波紋を広げることになるかもしれません。なので常に裏表のない態度でいるように心がけてくださいね。<br><br>　それでは2021年9月の運勢をさらに詳しく見ていきましょう。',
'　2021年9月、[%NAME_SELF%]にとって一番大切なことは自分の欲を極力抑えるようにすることです。この時期から思ったように行動しづらいと感じることが多くなるかもしれません。無理に前進するよりも、これまでの成果を安定させることで、周囲との信頼関係を築いていけそうです。<br><br>　そこで意見を主張したくなっても、この時期はなるべく控えめにすることが賢明です。それでは2021年9月の運勢をさらに詳しく見ていきましょう。',
'　2021年9月、[%NAME_SELF%]にとって一番大切なことは、目の前の課題をきちんとこなすことです。目先のことをいつまでも気にしていたり、ちょっとしたことで意欲が失われたりして、生活までがついだらけそうになりますね。そうなると信用を失うだけでなく、今までの努力まで不意にしてしまいかねません。時にはリフレッシュすることも大切ですが、なるべく気を引き締めることですよ。<br><br>　それでは2021年9月の運勢をさらに詳しく見ていきましょう。',
'　2021年9月、[%NAME_SELF%]にとって一番大切なことは気持ちにゆとりを持つことです。これからの運気に変化の波がやってきそうですが、予想外のことが起こったりして、気持ちが落ち着かないことがありますよ。「今ここで決めなければならない」、「今しかチャンスはないかもしれない」と自分を追い込み過ぎないように、冷静に物事を決めるようにしてください。<br><br>　それでは2021年9月の運勢をさらに詳しく見ていきましょう。',
'　2021年9月、[%NAME_SELF%]にとって一番大切なことは感情を抑制することです。この時期、あなたの努力や成果が認められるものの、隠していることがばれたり、過去に受けた傷を思い出したりすることがあるかもしれません。だからといって誰にも相談できず、一人で思い悩んでしまいがちです。なるべくメンタル面を整えて、自分を客観視していくことで乗り越えていけますよ。<br><br>　それでは2021年9月の運勢をさらに詳しく見ていきましょう。',
			),
		array( "lj21_026_2", 
'　この月の[%NAME_SELF%]の仕事運は、新しいものに関心が高まりそうです。今手掛けている仕事をしながら、副業やアルバイトをしてみたいという意欲がわいてきますよ。それがあなたにとってちょっとした気晴らしになるのであれば、進めてみてもいいでしょう。<br><br>　また友人の仕事を手伝ったり、相談に乗ったりすると、あなたにも何らかの発見や学びがありそうです。<br><br>　またこの時期は何か他の仕事をしてみることで、今の本業を客観視することができますよ。そして自分がこれからどうしていきたいか、目標が定まってくることでしょう。',
'　この月の[%NAME_SELF%]の仕事運は、誠実な気持ちで取り組むことが大切です。<br><br>　周りとの衝突やトラブルもそれほどなく、環境的に満足することでしょう。でもその現状につい甘んじてしまって、せっかくチャンスが舞い込んできてもどうしていいか分からず、不意にしてしまうことがあるかもしれません。なので自分でこの先の計画を立ててみるなりして、今の立ち位置をその都度確認するようにしてみてください。そうすることで常に良い緊張感を持って行動できるでしょう。<br><br>　そのようなあなたの堅実的な姿勢を、上司や先輩が好意的に見ているはずです。',
'　この月の[%NAME_SELF%]の仕事運は、かなり活発になりそうです。<br><br>　こだわりを持ち過ぎたり、過去の栄光にすがったりしてはいけないという信念が高まってきますよ。そうして目標を立てて積極的に行動に移し始めることでしょう。リーダー的役割を引き受けたり、新しい企画を立ててみたりして、周りから信頼されるようになりますよ。<br><br>　あなたの生き生きとした姿は、部下や後輩にも良い影響をもたらすことでしょう。そのようにしてこれまでのやり方を見直してみることで、未来へ羽ばたくヒントを得ることができます。良いと思ったことはどんどん実行してみてくださいね。',
'　この月の[%NAME_SELF%]の仕事運は信頼と自信に満ちあふれることでしょう。<br><br>　これまでの努力が実り、周囲から頼りにされるようになります。新しい役割をお願いされたり、これまで取り組んだことのない企画を任されたりして、何かと忙しくなることでしょう。なので準備不足にならないように、これまでやり残していることや途中やめしているものがあれば、優先的に整理しておくことです。また「できないことはできない」とはっきり意思表示することも時には大切です。<br><br>　そうすることで新たなチャンスがたくさんめぐってきますよ。',
'　この月の[%NAME_SELF%]の仕事運は、思い通りに進んでいきそうです。<br><br>　あなたが組織の中心的存在になったり、リーダー的役割を引き受けたりして、積極的に仕事を進めることができるでしょう。そうしていくうちに、今いる場所から飛び出してみたいという気持ちがわいてきそうです。このままの人生でいいかどうか、もっと自分にはできることがあるのではないかと、何かと自問自答することが多くなりそうですね。<br><br>　たった一度きりの人生なのですから、決めるのも実行するのもあなた次第です。常に自分がどうしたいかを念頭に置きながら、この時期自由な気持ちで仕事に取り組んでいってくださいね。',
'　この月の[%NAME_SELF%]の仕事運は、かなり積極的になれますよ。「もっと飛躍していきたい」という衝動に駆られそうです。<br><br>　「この企画は自分にしかできない」、「この役割を自分が引き受けてみたい」という意欲でいっぱいになるでしょう。なのでこの時期やってみたいと感じたことは、どんどん実行してください。たとえ周りが動かなくても、あなただけは前向きに活動していけますよ。そうすればいつの間にか周囲からの信頼を得ていることでしょう。<br><br>　この月大切なのは、あなたの度胸なのです。そこにはどんな困難も乗り越える力が備わっていることでしょう。',
'　この月の[%NAME_SELF%]の仕事運は、周りの雰囲気についつい流されてしまいがちです。<br><br>　今までの疲れやストレスがどっと重なってきて、真面目にしていることが嫌になってしまったり、つい怠けたくなってしまったりするかもしれません。もちろん一時期のリフレッシュや休息は大切ですが、仕事への意欲までが損なわれてしまうと、この先に影響が出てしまいそうです。<br><br>　なのでこの月は、なるべく気持ちを引き締めるようにすることが大切ですよ。どうしてもストレスに感じることは、この際誰かに相談して改善してみるといいですね。',
'　この月の[%NAME_SELF%]の仕事運は人生を大きく左右することになりそうですね。<br><br>　今までやってきたことに対して疑問に感じること、これから取り組もうとしていることが、自分にどう影響していくことになるか真剣に考えるようになります。そうなると今のまま落ち着いていいものかどうか、いろいろと自問自答することになるでしょう。だからといってそう簡単に転職したり、思い切って現状をくつがえしたりするなんて難しいかもしれません。<br><br>　なのでやりたいこと、やりたくないことを、この月整理しておくと良さそうです。そうすることで今の自分に何が必要かはっきりすることでしょう。',
'　この月の[%NAME_SELF%]の仕事運は少々波乱含みです。<br><br>　表面的にはうまくいくことが多いですが、職場の実態に疑問を抱いたり、信頼していた人に裏切られたりして、必要以上に心を痛めてしまうことがあるかもしれません。だからといってそう簡単に誰にも打ち明けられず、ストレスになりそうです。でもなるべく割り切るようにして、目の前の仕事に取り組むようにしてください。<br><br>　そうして必要な人が残り、そうでない人が去っていくという状況に変わっていくことでしょう。どんなに環境が変わっても、あなたは自分の信念を大切にしていってくださいね。',
		),
		array( "lj21_026_3", 
'　この月の[%NAME_SELF%]の対人運は活発化していきます。<br><br>　これまで距離があると感じる人と親しくなったり、いいなと思う人から連絡がきたりして、楽しく過ごせることでしょう。この月に出会った人、縁があると感じた人との関係は大切にしてください。そうすればあなたが窮地に陥ったとき、助けてくれたり、前向きに生きるヒントをもたらしてくれることでしょう。またあなたのこれからの活躍に、一役買ってくれたりします。<br><br>　ですがその人の好意に甘えるだけでなく、あなたもできる限りその人に協力するようといいでしょう。そうすることでさらなる縁が広がっていきますよ。',
'　この月の[%NAME_SELF%]の対人運は、後半になるほど好調になってきますよ。<br><br>　前半は周りとのすれ違いやちょっとしたトラブルがあったりするかもしれませんが、焦らずに対応することです。相手とギクシャクしてきたなと感じたときは、まずこちらから歩み寄ることが大切ですよ。あなたの誠実な態度が、それ以上角を立てずに済むことでしょう。<br><br>　後半に入ると何かと周りから必要とされることが多くなります。またあなたのピンチを救ってくれたり、相談に乗ったりしてくれて、心から感謝し合える関係が期待できますよ。そうしてこの先も大切に付き合っていってくださいね。',
'　この月の[%NAME_SELF%]の対人運は行動範囲が広がる分、良い出会いが期待できそうです。<br><br>　オンラインの集まりや飲み会のお誘いがあれば、なるべく受けるようにするといいでしょう。これまで出会ったことのないタイプの人と知り合うことができそうです。ただそこでついなれなれしくしすぎたり、気を許し過ぎたりすると、信頼関係を築けなくなるかもしれません。たとえ親しくなれそうだとしても、最低限のマナーを大切にするように心がけてください。<br><br>　この月はあなたの誠実な態度が、良い人間関係をもたらしてくれることでしょう。',
'　この月の[%NAME_SELF%]の対人運は、何かと相手に合わせようとしがちです。<br><br>　状況がなかなか思い通りにならないせいか、どうしても孤独を感じてしまうかもしれません。そんなとき、どんなに相手とうまく交流をはかったとしても、あなたの中の寂しさや人恋しさはなかなか消えてくれないようです。そんなときだからこそ、本来の自分を見失わないようにすることが大切ですよ。相手の期待に応えることが、友情とは限らないのですから。<br><br>　この月はしばらく会っていない友人や、昔の仲間に久々に連絡を取ってみるといいですね。そうすればあなたの心が満たされることでしょう。',
'　この月の[%NAME_SELF%]の対人運は絶好調です。<br><br>　あなたが率先して何かを企画したりして、親しい人たちと協力し合う機会に恵まれそうです。この月は、積極的に人と関わることで毎日が充実するでしょう。そうするには一緒に楽しめそうなことを、あなたからどんどん提案してみると良さそうですね。趣味でもボランティアでも、やってみたいことがあれば、親しい人にまず相談してみることです。そうすればお互いの考えや意見を共有することができて、ますます絆が深まることでしょう。<br><br>　そしてこの先どんなことがあっても、その人たちとのご縁があなたを守ってくれますよ。',
'　この月の[%NAME_SELF%]の対人運は好調の波に乗れそうです。<br><br>　この時期始めてみた趣味の集まりなどで、新しいご縁が広がることでしょう。また思い切って何かに取り組んでみることで、誰かの協力を得ることもできそうです。この月新しく知り合った人とは、この先も長くつきあうことになるようです。このとき等身大以上の自分を見せようと無理をしてしまうと、結局苦しくなってしまいかねません。<br><br>　なので自分のコンプレックスや欠点は、あえて隠さないようにすることで、相手に安心してもらえることでしょう。そうして気の置けないお付き合いが始まっていきますよ。',
'　この月の[%NAME_SELF%]の対人運は盛んになりそうですね。<br><br>　新しく趣味を持ったり、勉強を始めたりして、同じ志を持つ人と知り合うことができます。そこから楽しい関係が広がっていくことでしょう。いいなと思った人とはあなたから積極的に連絡してみるといいですね。ただ交際費にお金がかかり過ぎないようにだけ気を付けてくださいね。相手に協力してあげたいからと、安請け合いしないことが大切です。<br><br>　そうしてお互いの自由を尊重し合えるような付き合いを楽しんでいってください。この月に関係が深まった人とは、これからも長く付き合えることでしょう。',
'　この月の[%NAME_SELF%]の対人運は、良い付き合いのできる人、そうでない人を整理することが大切です。<br><br>　あなたに過度な期待ばかりする人、頼みごとばかりしてくる人とは思い切って距離を置くようにしてください。またあなたの期待に応えてくれない人とも、この際関係をはっきりさせることも大切です。そうしていつもあなたを助けてくれる人、気さくに話してくれる人には感謝の気持ちを持つようにしてください。たまにはあなたからお茶に誘ってみるのもいいですね。<br><br>　この月は人間関係の入れ替えが多少なりともありますが、良い縁を大切にするようにしてくださいね。',
'　この月の[%NAME_SELF%]の対人運は、相手に依存しすぎないことが大切です。<br><br>　ちょっとしたトラブルがきっかけとなって、悶々と悩んだりすることがありそうです。そんなとき、気持ちが落ち着かないからといって、親しい友人に何でも頼り過ぎないようにしてください。時には自分の力で乗り越えていく必要もあることでしょう。良い友人はいつでもあなたを遠くから、見守ってくれているはずです。あなたが強く困難を乗り切る人だと信じているでしょう。<br><br>　あなたが自分の力で頑張ろうとすれば、本当に親しい人があなたのそばでそっと支えてくれているのですよ。',
		),
		array( "lj21_026_4", 
'　この月の[%NAME_SELF%]の恋愛運、出会い運は活発に動き出しそうですね。<br><br>　この時期はなるべく積極的になって、異性と関わるようにしてみてください。仕事などで協力し合うと、絆が深まっていきそうです。一人で物事を進めていく前に、まず周りの異性に相談するようにしてみてください。そうすれば親身になって対応してくれる人が現れることでしょう。ただ、「いいな」と思う相手が既婚者だったり、特定の相手がいたりする場合もあるので、気を付けるようにしましょう。<br><br>　この時期、常識的で誠実な出会いが、あなたに幸せをもたらしてくれることでしょう。',
'　この月の[%NAME_SELF%]の恋愛運、出会い運は身近なところにご縁がありそうですよ。<br><br>　親しい友人があなたに見合った異性を紹介してくれたり、習い事で知り合った異性と連絡を取り合うことになったりします。そうして少しずつ信頼関係を深めていくことでしょう。その人の長所はもちろん、欠点に至るまで心から愛せる気がして、楽しくお付き合いできそうです。なのでドラマチックな出会いを期待するよりも、ごく身近にいる異性に注目するようにしてみてください。<br><br>　もしかしたらあなたの近くで、あなたに好意を寄せている異性の存在に気づくこともありそうですよ。',
'　この月の[%NAME_SELF%]の恋愛運、出会い運は多くのチャンスに恵まれることでしょう。<br><br>　自分から積極的に人と関わるようにすれば、好みの異性と知り合うこともできますよ。ここ最近連絡を取っていない異性がいれば、電話やメールをしてみるといいでしょう。久々に会話が盛り上がって、そこから交流が広がっていきますよ。ただ調子に乗ってしまうと、軽い人だと誤解されてしまって、特定の人を見つけられなくなるかもしれません。なのでどんな人と付き合いたいか、友人のままでいたいか、はっきりさせておくことです。<br><br>　あなたの感じの良さに惹かれる人が現れることでしょう。',
'　この月の[%NAME_SELF%]の恋愛運、出会い運は絶好調です。<br><br>　この月出会った異性が、あなたの人生に大きく関わることになるでしょう。なので特定の相手を見つけたいのであれば、自分からどんどん行動していくことです。オンラインの飲み会や、合コンなどのお誘いがあれば参加してみましょう。またしばらく会っていない同級生に連絡を取ってみるのもよさそうです。そこで同じように出会いを探している人と、偶然親しくなることもあるでしょう。<br><br>　あなたの魅力を表に出していくことで、異性と出会うチャンスを引き寄せそうですよ。なのでこの月を大いに活用してみてくださいね。',
'　この月の[%NAME_SELF%]の恋愛運、出会い運は、注目度が上がりそうですね。<br><br>　あなたの魅力が一段と深まり、たくさんのチャンスを引き寄せることでしょう。ただ自分に関心を持ってくれるからといって、誰とつきあっても良いというわけではないかもしれません。もう既に特定の相手がいる人が、あなたを誘惑しようとしていることもあるのです。なので近づいてくる相手となるべく慎重に接していくことが大切ですよ。<br><br>　あなたの誠実な態度が、同じように誠実な人との出会いをもたらしてくれます。そうして素晴らしいご縁を結び付けてくれるのですよ。',
'　この月の[%NAME_SELF%]の恋愛運、出会い運は少々波乱含みですね。<br><br>　まだ特定の相手がいない人は、これという出会いが期待できないかもしれません。ですが異性の友人ができそうなので、気楽な気持ちで話をするようにしてみてください。お付き合いしている相手がいる人は、お互いの良いところを分かり合おうとするでしょう。周りも二人の関係を祝福してくれそうです。その勢いに押されて、結婚という運びになることも期待できそうですよ。<br><br>　この月は、なるべくわがままにならないようにしてくださいね。穏やかな気持ちで過ごすようにすると運気も安定しそうです。',
'　この月の[%NAME_SELF%]の恋愛運、出会い運は異性に惹かれやすくなることでしょう。<br><br>　あなたの気さくな態度に魅力を感じて、近づいてきてくれる異性も大勢いるようです。ただどういう人かよくわからないのに、相手の押しに負けてお付き合いを始めるのは避けた方がいいかもしれません。なのでお見合いとか、親しい友人の紹介であれば、安心して交際に至ってもいいですね。お互いの安心感が関係を深めていくことでしょう。<br><br>　ですので今から自分磨きに専念してみてください。そうすることで異性を見る目もどんどん確かなものとなりますよ。',
'　この月の[%NAME_SELF%]の恋愛運、出会い運は前向きになればなるほど、急展開が期待できそうです。<br><br>　出会いがないと感じる人はこの月がチャンスですね。お見合い話や縁談があれば、積極的に応じてみてください。あなたの好みのタイプの異性を紹介してもらえそうですよ。また順調に愛を育んできた人は、相手から突然プロポーズされそうですね。<br><br>　もし不毛な恋愛をしていると感じているのであれば、思い切ってこの月に清算することも大切です。あなたの毅然とした行動こそが幸せな人生を引き寄せるのですから。なので勇気を出してみてください。',
'　この月の[%NAME_SELF%]の恋愛運、出会い運はあなたの魅力がますます注目されそうです。<br><br>　好みのタイプの人はもちろん、出会ったことのないタイプの異性からもちやほやされて、つい舞い上がってしまうことでしょう。ただあなたが本気で特定の人とお付き合いしたいのであれば、なるべく自制心を持つように心がけてください。甘いムードについ流されてしまうと、その分だけ傷ついてしまうこともあるのです。またせっかく交際したのに、相手の本性を知ってがっかりしてしまうこともあるかもしれません。<br><br>　この月は、あなたの慎重な気持ちこそが、良い縁を招いてくれることでしょう。',
		),
		array( "lj21_026_5", 
'　2021年9月、[%NAME_SELF%]はいろいろと考え込むことが多くなりそうですね。<br><br>　今いる場所にいつまでも留まるということに疑問を感じ始めます。これまで安定ばかり選んでいたけど、思い切って新しい世界に足を踏み入れようとしますよ。もう自分で決断するしか他に方法はないということを、自分なりに悟るでしょう。オンラインを利用して新しい交流を持ったり、資格取得の勉強を始めてみたりして、何かと生活に変化が出てきそうですよ。<br><br>　この月に始めたことは、あなたの一生を左右するくらいの良い影響をもたらしてくれるでしょう。',
'　2021年9月、[%NAME_SELF%]は何事にも意欲的になるでしょう。<br><br>　現状に満足してしまっては、充実感が持てないということを感じ始めるようです。なので自分が今持っている能力やスキルで果たして何ができるか、じっくり考え始めますよ。そうして思い切って自分で独立してみようと、周囲に相談をするようになります。あなたの意欲に感心した人たちが、何かと協力してくれそうですね。<br><br>　この月はあなたの夢の準備期として大いに計画を立ててみてください。「もしかしたら自分にできそう」と強く感じたとき、思い切って実現に移していくといいでしょう。',
'　2021年9月、[%NAME_SELF%]は新しいことを始めてみようとします。<br><br>　それは久々に会った友人との会話の中に、あなたの心を強く動かしてくれるような情報や言葉があるようですね。そうして今までのキャリアや経験と照らし合わせてみて、合致するものに気づきそうです。「今の自分ならできそう」というひらめきがあなたを行動的にしてくれます。そうして少しずつ飛躍を遂げていくことでしょう。<br><br>　この月は人との会話に、何かあなたの人生を変えていくヒントが隠されているようです。心動かされる一言があれば、メモに残して、大切にしてください。',
'　2021年9月、[%NAME_SELF%]はもっと交流を広げたくなってきます。<br><br>　これからの人生、限られた枠の中で生きるのは息がつまりそうだなと感じるようです。学生時代の友人は今どうしているか、あなたなりに連絡をとってみたくなることでしょう。また以前仕事で一緒だった同僚やサークルの仲間から連絡が来たりすることもありますよ。そこで楽しく話したことは、たとえたわいのないことであってもあなたの心に深く刻み込まれることでしょう。<br><br>　そうして人との交流っていいなと、改めて感じることができそうですよ。そして人間関係を充実させていくでしょう。',
'　2021年9月、[%NAME_SELF%]は環境を変えたくなりそうです。<br><br>　仕事などでリーダー役を任されたりして、自信を持てるようになったとき、あなたの中で「もっとやれることがある」というチャレンジ精神が盛んに芽生えてきそうなのです。転職や引っ越しなども積極的に検討してみることでしょう。周りはあなたを引き留めようとするかもしれませんが、あなたの意志は強そうです。<br><br>　なのでこの月はあなたの意欲で、何事も思い通りに進めていくことでしょう。もしこのまま後悔したくないのであれば、思い切った決断と行動力で、実現に移すようにしてみてくださいね。',
'　2021年9月、[%NAME_SELF%]は健康に人一倍気遣うようになりそうですね。<br><br>　ここ最近運動不足だなとやたら思うことが多くなるかもしれません。職場と家との往復だけだったり、テレワークが増えたりすることで、このまま自分の健康面がどうなるか不安に感じ始めることでしょう。そうして動画や本などでリフレッシュする方法を見つけたとき、あなたは積極的に自分の生活に取り入れていきます。そして今まであまり興味のなかったスポーツに取り組んでみようと意欲的になりますよ。<br><br>　そのようにして、この9月は、健康な体を手に入れられそうです。',
'　2021年9月、[%NAME_SELF%]は臨時収入を得たり、昇給したりして、お金の面で好調になりそうですね。<br><br>　たまには散財してみよう、リフレッシュしてみようと、おいしいものを食べたり、前から欲しかったものを思い切って購入したりして、気持ちが潤うことでしょう。そうすることでこれからますます自分を向上させてみたくなりそうですね。今の自分に何ができるか、真剣に考えることでしょう。<br><br>　そのようにして自分をもっと高めたい、価値の持てる人材でありたいという気持ちが、これからの人生に希望をもたらします。そして意欲的になってお金を稼いでいくことでしょう。',
'　2021年9月、[%NAME_SELF%]は何かと周りを整理したくなります。<br><br>　環境を整えることはもちろん、人間関係においても自分にとって必要なもの、そうでないものとを分けていきます。そうすることで、自分の意志がいよいよはっきりしそうです。これまで自分の本心を隠しながら、相手のペースに合わせていたことに気づくことでしょう。これからは自分をもっと大切にしていこう、自己肯定感を高めていこうとします。<br><br>　この9月に、自分にとって必要でないものをどれだけ切り捨てられるかで、これからの未来に良い影響をもたらすことができるでしょう。',
'　2021年9月、[%NAME_SELF%]は精神的な充実をはかろうとします。<br><br>　教養を深めたり芸術に触れたりして、本質的なものを見極めたくなるでしょう。これまで自分が親しんできたものが果たして本物だったかどうか、確かめたくなります。ただ単に自分の不満を紛らせていた習慣や、人に勧められて断れずに定期購入していた商品などが、あなたを思いのほかに縛り付けていたかもしれません。それらをこの9月に整理したり手放したりすることで、あなたの心がリフレッシュすることでしょう。<br><br>　そして自分にとって本当に大切なものだけが残っていくのです。',
		)
);
?>