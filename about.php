<?php
    $nav = ['hobby', 'career', 'points', 'vision', 'contact'];
    $title = '私について';
    require('header.php');
?>
    <main id="main">
        <section class="section pb-0">
            <h2 class="section-title-main mb-0">
                私について
                <p class="section-title-main-en"><span>About Me</span></p>
            </h2>
        </section>
        <section id="hobby" class="section pb-0">
            <div class="container">
                <div class="site-width">
                    <h3 class="section-title-sub">
                        <div class="section-title-sub-inner">
                            趣味
                            <p class="section-title-sub-en"><span>Hobby</span></p>
                        </div>
                    </h3>
                    <div class="row justify-content-between">
                        <div class="col-sm-6">
                            <div class="hobby-left">
                                <p class="hobby-text">
                                    高校生から始めたクライミングを現在も趣味として続けています。
                                </p>
                                <p class="hobby-text">
                                    クライミングとは、シューズやロープなど必要最小限の道具と自分の体で人工的に作られた壁や自然の岩を登るスポーツです。
                                </p>
                                <p class="hobby-text">
                                    平日は室内で練習をし、休日になると自然の岩を登りに行くなど、自然と触れ合いながら生活しています。
                                </p>
                                <p class="hobby-text">
                                    クライミングとプログラミングは、全く別のものです。しかし、私は両者とも忍耐力や問題解決能力を必要とする点で共通しており、相互にプラスの影響を与えると考えています。
                                </p>
                                <p class="hobby-text">
                                    この先もずっと続けていきたい大好きな趣味です！
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="hobby-right">
                                <div class="btn btn-prev js-prev-btn"></div>
                                <div class="btn btn-next js-next-btn"></div>
                                <div class="hobby-slider">
                                    <ul class="hobby-slider-list js-slider-container">
                                        <li class="hobby-slider-item js-slider-item"><img  src="./image/hobby1.jpg" alt=""></li>
                                        <li class="hobby-slider-item js-slider-item"><img  src="./image/hobby2.jpg" alt=""></li>
                                        <li class="hobby-slider-item js-slider-item"><img  src="./image/hobby3.jpg" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="career" class="section">
            <div class="container">
                <h3 class="section-title-sub">
                    <div class="section-title-sub-inner">
                        経歴
                        <p class="section-title-sub-en"><span>Career</span></p>
                    </div>
                </h3>
                <div class="career-body js-add-active animation zoom-in">
                    <div class="row career-item">
                        <div class="col-4">
                            <div class="career-left">
                                <p>2017年 3月</p>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="career-right">
                                <p class="career-title">浜松城北工業高等学校 卒業</p>
                                <p class="career-description">
                                    工業高校に入学し、旋盤など機械工学から電子回路など電子工学など幅広く学びました。<br>
                                    高校2年生の頃に進学を決意し、そこからは受験勉強一筋の生活を過ごしてきました。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row career-item">
                        <div class="col-4">
                            <div class="career-left">
                                <p>2017年 4月</p>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="career-right">
                                <p class="career-title">静岡大学 工学部 数理システム工学科 入学</p>
                                <p class="career-description">
                                    第一志望であった静岡大学へ入学しました。<br>
                                    大学では、モデリングやシミュレーションなどの数理科学やプログラミングなどの情報科学を学んでいます。<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row career-item">
                        <div class="col-4">
                            <div class="career-left">
                                <p>2019年 7月</p>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="career-right">
                                <p class="career-title">プログラミングスクール 入会</p>
                                <p class="career-description">
                                    大学では学べないようなWeb開発を学びたいと思い、自主的にプログラミング学習を始めました。<br>
                                    ここから、プライベートの大半の時間をプログラミング学習に費やす生活が始まります。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row career-item">
                        <div class="col-4">
                            <div class="career-left">
                                <p>2020年 3月</p>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="career-right">
                                <p class="career-title">プログラミングスクール 卒業</p>
                                <p class="career-description">
                                    約8ヶ月かけてプログラミングスクールを卒業しました。<br>
                                    HTML/CSS/JavaScript/PHP/MySQLやフレームワークを学び、Web開発に必要なスキルを身に付けることができました。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row career-item">
                        <div class="col-4">
                            <div class="career-left">
                                <p>NOW！</p>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="career-right">
                                <p class="career-title">研究 & 就職活動</p>
                                <p class="career-description">
                                    社会集団の協力行動を進化ゲーム理論を用いて研究しています。<br>
                                    また、予定していた大学院進学を急遽取り消し、就職活動を行っています。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="points" class="section">
            <div class="container">
                <div class="site-width">
                    <h3 class="section-title-sub">
                        <div class="section-title-sub-inner">
                            アピールポイント
                            <p class="section-title-sub-en"><span>Points</span></p>
                        </div>
                    </h3>
                    <div class="row">
                        <div class="col-sm-4 section-panel">
                            <div class="points-item js-add-active animation slide-right" ontouchstart="">
                                <div class="points-icn">
                                    <i class="fas fa-crosshairs"></i>
                                </div>
                                <h4 class="points-title">
                                    集中力
                                </h4>
                                <p class="points-description">
                                    やると決めたことを最後までやり抜くことが得意です。<br>
                                    実際、長期休暇におけるプログラミング学習では、多いときでは1日8時間以上、少ないときでも1日5時間以上学習をしてきました。<br>
                                    集中しすぎるあまり、時間を忘れそうになることもしばしば...。
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 section-panel">
                            <div class="points-item js-add-active animation slide-up" ontouchstart="">
                                <div class="points-icn">
                                    <i class="fas fa-thumbs-up"></i>
                                </div>
                                <h4 class="points-title">
                                    忍耐力
                                </h4>
                                <p class="points-description">
                                    大学受験を通して、強い忍耐力を身につけました。<br>
                                    工業高校ゆえに独学で勉強しないといけない分野が多く、辛い毎日でしたが、目標のために取り組み続けました。<br>
                                    現在もプログラミング学習において壁にぶつかる毎日ですが、目標達成のために挫折せずに踏ん張っています。
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 section-panel">
                            <div class="points-item js-add-active animation slide-left" ontouchstart="">
                                <div class="points-icn">
                                    <i class="fas fa-sync"></i>
                                </div>
                                <h4 class="points-title">
                                    効率化
                                </h4>
                                <p class="points-description">
                                    研究、就職活動、アルバイトとやらなければならないことが多い毎日です。<br>
                                    しかし、タスクの優先順位を明確にすることで、いまやるべきことを見失わないように心がけています。<br>
                                    また、隙間時間を効率的に利用することで、１日2,3時間ほどはプログラミングの学習をする時間を確保できるように意識しています。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="vision" class="section pb-0">
            <div class="container">
                <div class="site-width">
                    <h3 class="section-title-sub">
                        <div class="section-title-sub-inner">
                            これから
                            <p class="section-title-sub-en"><span>Vision</span></p>
                        </div>
                    </h3>
                    <div class="vision-body js-add-active animation fade-in">
                        <h4 class="vision-title">
                            <span class="vision-emphasis">技術</span> <span class="align-text-bottom">×</span> <span class="vision-emphasis">ビジネス</span>でさらに向こうへ
                        </h4>
                        <p class="vision-description">
                            私は技術だけに固執したエンジニアではなく、営業やマーケティングなど、ビジネスへの知見も持ったエンジニアになりたいと考えています。<br>
                            それは、エンジニアの仕事は相手の悩み・要望を聴き、それを解決することであると考えているからです。<br>
                            そのために必要となる技術はあくまで手段にすぎません。<br>
                            私は、技術×ビジネスで多くの人の悩み・要望を解決できる、そんな人財になりたいと考えています。
                        </p>
                        <p class="vision-propaganda">
                            東京で就職活動中です！
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="section">
            <div class="container">
                <div class="site-width">
                    <h2 class="section-title-main">
                        お問い合わせ
                        <p class="section-title-main-en"><span>Contact</span></p>
                    </h2>
                    <div class="row justify-content-center">
                        <a class="btn btn-contact" href="./index.php#contact">
                            お問い合わせはコチラ
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
    require('footer.php');
?>