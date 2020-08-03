<?php
    $nav = ['hobby', 'career', 'points', 'vision'];
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
                        <div class="col-sm-5">
                            <div class="hobby-left">
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
                        <div class="col-sm-6">
                            <p>
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </p>
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
                                <p class="career-description">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                            </div>
                        </div>
                    </div>
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
                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
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
                                <p class="career-title">静岡大学 入学</p>
                                <p class="career-description">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
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
                                <p class="career-description">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
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
                                <p class="career-description">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
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
                                <p class="career-title">就職活動中</p>
                                <p class="career-description">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
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
                            <div class="points-item js-add-active animation slide-right">
                                <div class="points-icn">
                                    <i class="fas fa-crosshairs"></i>
                                </div>
                                <h4 class="points-title">
                                    集中力
                                </h4>
                                <p class="points-description">
                                    やると決めたことを最後までやり抜くことが得意です。
                                    集中しすぎるあまり、時間を忘れそうになることもしばしば。
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 section-panel">
                            <div class="points-item js-add-active animation slide-up">
                                <div class="points-icn">
                                    <i class="fas fa-thumbs-up"></i>
                                </div>
                                <h4 class="points-title">
                                    忍耐力
                                </h4>
                                <p class="points-description">
                                    大学受験を通して、強い忍耐力を身につけました。
                                    プログラミング学習において、壁にぶつかる毎日ですが、目標達成のために挫折せずに踏ん張っています。
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 section-panel">
                            <div class="points-item js-add-active animation slide-left">
                                <div class="points-icn">
                                    <i class="fas fa-sync"></i>
                                </div>
                                <h4 class="points-title">
                                    効率化
                                </h4>
                                <p class="points-description">
                                    大学のレポート、アルバイト、就職活動とやらなければならないことが多い毎日です。
                                    しかし、隙間時間を効率的に利用することで、１日2,3時間ほどはプログラミングの学習をする時間を確保するように心がけています。
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
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
                            テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                            テキストテキストテキスキストテキキストテキキストテキトテキストテキストテキストテキストテキスト<br>
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