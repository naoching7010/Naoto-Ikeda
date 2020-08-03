<?php
    require('function.php');

    session_start();
    $token = bin2hex(openssl_random_pseudo_bytes(16));
    $_SESSION['token'] = $token;

    if(!empty($_POST)) {
        if($_POST['token'] !== $_SESSION['token']) {

        }

        $name = $_POST['name'];
        $email = $_POST['email'];
        $content = $_POST['content'];

        validRequired($name, 'name');
        validRequired($email, 'email');
        if(empty($err_msg['email'])) {
            validEmail($email, 'email');
        }
        validRequired($content, 'content');

        if(empty($err_msg)) {
            mb_language("Japanese");
            mb_internal_encoding("UTF-8");
            $result = array();

            $client = array();
            $client['to'] = $email;
            $client['from'] = 'test@gmail.com';
            $client['subject'] = 'お問い合わせを受け付けました';
            $client['content'] = <<<EOT
お問い合わせを受け付けました。
EOT;
            $result['client'] = mb_send_mail($client['to'], $client['subject'], $client['content']);


            $host = array();
            $host['to'] = $email;
            // $host['from'] = 'ike@gmail.com';
            $host['subject'] = 'お問い合わせを受け付けました';
            $host['content'] = <<<EOT
お問い合わせを受け付けました。
EOT;
            $result['host'] = mb_send_mail($host['to'], $host['subject'], $host['content']);
            if($result['client'] && $result['host']) {
                // echo "成功";
            }else {
                // echo "失敗";
            }
        }
       
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naoto Ikeda</title>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./dist/css/fontawesome-free-5.11.2-web/css/all.min.css">
    <link rel="stylesheet" href="./dist/css/app.css">

</head>
<body>
    <header id="header">
        <div class="site-width">
            <div class="flex flex-between flex-middle">
                <a class="header-" href="./index.html">
                    <h1 class="header-title">
                        Naoto Ikeda<br>
                        <span class="header-sub-title">Student & Web Engineer</span>
                    </h1>
                </a>
                <div class="menu-trigger js-toggle-sp-menu" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav class="nav js-toggle-sp-menu-target">
                    <ul class="nav-menu">
                        <li class="nav-item"><a class="nav-link js-nav-scroll" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-nav-scroll" href="#skills">Skills</a></li>
                        <li class="nav-item"><a class="nav-link js-nav-scroll" href="#works">Works</a></li>
                        <li class="nav-item"><a class="nav-link js-nav-scroll" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-nav-scroll" href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main id="main">
        <section id="top-img">
            <div class="container top-container">
                <div class="site-width top-inner">
                    <div class="top-content">
                        <h2 class="top-title">Welcome to my page!</h2>
                        <p class="top-text">
                            Naoto Ikeda<br>
                            <span class="fontsize-xl">Student & Web Engineer<span>
                        </p>
                        <a class="btn btn-contact js-nav-scroll" href="#contact">
                            お問い合わせはコチラ
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="section">
            <div class="container">
                <div class="site-width">
                    <h2 class="section-title-main">
                        私について
                        <p class="section-title-main-en"><span>About Me</span></p>
                    </h2>
                    <div class="row justify-content-between about-body">
                        <div class="col-sm-4 about-img">
                            <div class="img-circle">
                                <img src="./image/profile.JPG" alt="">
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <p class="about-name">池田 直人（いけだ なおと）</p>
                            <p class="about-status">大学生 & Webエンジニア</p>
                            <p class="mb-3">
                                プログラミングを学習する地方大学生。 <br>
                                大学では情報系の学科に通うものの、プログラミングのスキルが一向につかないことに焦りを感じ、プログラミングスクールに入会し、プログラミングを1から学ぶ。<br>
                                8ヶ月ほどの学習を経てプログラミングスクールを卒業した後は、とあるWeb制作会社にて新規プロジェクトの開発を行っている<br>
                                
                            </p>
                            <p class="mb-3">
                                また、大学では生物の群集行動などの進化ゲームを用いて群衆の協力行動を研究する学生エンジニア。
                            </p>
                            <div class="row justify-content-between align-items-center" style="margin: 0;">
                                <a href="https://twitter.com/naooooo7010" class="btn btn-twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <div class="btn-group">
                                    <a class="btn btn-more btn-slidein btn-block" href="./about.html">
                                        more
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="skills" class="section">
            <div class="container">
                <div class="site-width">
                    <h2 class="section-title-main">
                        スキル
                        <p class="section-title-main-en"><span>Skills</span></p>
                    </h2>
                    <p class="section-description">
                        私がよく開発に使用している言語やフレームワーク一覧です。（この他にも習得しているスキルはあります）<br>
                        外枠のバーはスキル毎のレベルを表しています。<br>
                        現在も新たなスキルの習得のために自己研鑽しています。
                    </p>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="skills-item">
                                <div class="skills-circle js-show-html">
                                    <div class="skills-language">
                                        <img src="./svg/html.svg" alt="">
                                    </div>
                                </div>
                                <p>
                                    ホームページやWebサービスの画面モック作りに使用しています。<br>
                                    どんな画面でもデザイン通りに作り上げるだけでなく、保守性が高くなるように設計することができます。
                                    また、SEO対策を意識したHTML構造になるように心がけています。
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="skills-item">
                                <div class="skills-circle js-show-css">
                                    <div class="skills-language">
                                        <img src="./svg/css.svg" alt="">
                                    </div>
                                </div>
                                <p>
                                    ホームページやWebサービスの画面モック作りに使用しています。<br>
                                    静的なページをデザインするだけでなく、アニメーションをCSSを使って再現することも可能なので、ページ読み込み速度を必要以上に低下させずに済みます<br>
                                    また、Sass（Scss）を使ってCSSコーディングを効率的に行うこともできます。
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="skills-item">
                                <div class="skills-circle js-show-js">
                                    <div class="skills-language">
                                        <img src="./svg/javascript.svg" alt="">
                                    </div>
                                </div>
                                <p>
                                    画像スライダー（別ページにデモあり）などWebサイトに動きをつけることができます。<br>
                                    Ajaxなどの非同期通信への知見もあり、WebサイトのUXを考慮して開発することができます。<br>
                                    jQueryなどのライブラリーを併用して開発を行います。
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="skills-item">
                                <div class="skills-circle js-show-php">
                                    <div class="skills-language">
                                        <img src="./svg/php.svg" alt="">
                                    </div>
                                </div>
                                <p>
                                    できる限りサーバーへの負荷が小さくなるような開発を心がけています。<br>
                                    また、バリデーションやセキュリティー対策もバッチリです<br>
                                    WordPressのカスタマイズなども可能です。
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="skills-item">
                                <div class="skills-circle js-show-vue">
                                    <div class="skills-language">
                                        <img src="./svg/vue.svg" alt="">
                                    </div>
                                </div>
                                <p>
                                    個人開発から大規模開発まで様々な環境での開発経験があります。<br>
                                    メンテナンスしやすいコンポーネント設計を意識して開発しています。<br>
                                    最近ではVue Routerを使ったSPA開発についての学習をしています。
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="skills-item">
                                <div class="skills-circle js-show-laravel">
                                    <div class="skills-language">
                                        <img src="./svg/laravel.svg" alt="">
                                    </div>
                                </div>
                                <p>
                                    個人開発から大規模開発まで様々な環境での開発経験があります。<br>
                                    自由に開発できる反面、一歩間違えると煩雑なコードになってしまうことがあるため、他者への気配りを忘れない開発を行っています。<br>
                                    また、Laravelのメリットでもあるスピード感を意識して開発を行っています。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="works" class="section">
            <div class="container">
                <div class="site-width">
                    <h2 class="section-title-main">
                        実績
                        <p class="section-title-main-en"><span>Works</span></p>
                    </h2>
                    <p class="section-description">
                        私がプログラミング学習初期から今まで制作してきたポートフォリオです。<br>
                        学習の要所毎にアウトプットを目的としてポートフォリオを制作してきました。<br>
                        全てのポートフォリオにおいて、常に自分の持っている技術 + αの内容を加えた成果物を制作するよう意識しました。
                    </p>
                    <div class="row">
                        <div class="col-sm-4 section-panel">
                            <div class="work-item js-add-active animation slide-up">
                                <a class="work-link" href="https://todolist-manage.com/">
                                    <h3 class="work-title">Webサービス「To Do List！」</h3>
                                    <p class="work-description">
                                        プログラミング学習を初めて1ヶ月の時に制作しました。いわゆる「CRUD」機能を盛り込んだ基本的なWebサービスです。
                                    </p>
                                    <img src="./image/todolist.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4 section-panel">
                            <div class="work-item js-add-active animation slide-up">
                                <a class="work-link" href="https://freeclimbing-market.com/">
                                    <h3 class="work-title">Webサービス「FREECLIMBING」</h3>
                                    <p class="work-description">
                                        クライミング用品のフリマサービスです。<br>
                                        プログラミング学習を初めて2ヶ月の時に制作しました。<brs>
                                        フレームワークを一切使わないフルスクラッチで開発を行いました。
                                    </p>
                                    <img src="./image/freeclimbing.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4 section-panel">
                            <div class="work-item js-add-active animation slide-up">
                                <a class="work-link" href="https://step-share.com/">
                                    <h3 class="work-title">Webサービス「STEP」</h3>
                                    <p class="work-description">
                                        「あなたの人生のSTEPを共有しよう」をキャッチコピーに開発を行った学習支援サービスです。<br>
                                        人それぞれの「この順番で学ぶとよかった」という「STEP」を投稿し、他の人はその「STEP」を見ながら学習を進めていくことができます。
                                    </p>
                                    <img src="./image/step.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="section">
            <div class="container">
                <div class="site-width">
                    <h2 class="section-title-main">
                        サービス
                        <p class="section-title-main-en"><span>Services</span></p>
                    </h2>
                    <p class="section-description">
                        コーディングからWebシステム開発まで様々な案件を承っております。<br>
                        「ホームページがほしいがどうすればよいかわからない」といったお悩みをお持ちの方もご安心ください。<br>
                        まずは現状の悩みや要望を伺い、それに対する最適な解決策をご提案させていただきます。
                    </p>
                    <div class="row">
                        <div class="col-sm-4 section-panel">
                            <div class="service-item js-add-active animation zoom-in">
                                <div class="service-icn">
                                    <i class="fas fa-code"></i>
                                </div>
                                <h3 class="service-title">コーディング</h3>
                                <p class="service-price">
                                    <span class="fontsize-xl font-weight-bold">1</span>万円~
                                </p>
                                <p>
                                    いただいたデザインを元にHTML/CSS/JavaScriptなどを使ってコーディングいたします。SEOや保守性にこだわり、メンテナンスのしやすいコードを書くことを心がけています。<br>
                                    レスポンシブ対応など、些細な案件も承ります。
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 section-panel">
                            <div class="service-item js-add-active animation zoom-in">
                                <div class="service-icn">
                                    <i class="fas fa-desktop"></i>
                                </div>
                                <h3 class="service-title">ホームページ制作</h3>
                                <p class="service-price">
                                    <span class="fontsize-xl font-weight-bold">5</span>万円~
                                </p>
                                <p>
                                    ホームページ制作のための情報をピックアップするために、お客様の現状の悩みや要望を聴かせていただきます。<br>
                                    そのうえでこちらからデザイン案をご提出し、了承が得られ次第ホームページ制作に取り掛かります。<br><br>
                                    ※デザインに合わせた原稿はご自身でご用意ください。
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 section-panel">
                            <div class="service-item js-add-active animation zoom-in">
                                <div class="service-icn">
                                    <i class="fas fa-wrench"></i>
                                </div>
                                <h3 class="service-title">Webシステム開発</h3>
                                <p class="service-price">
                                    <span class="fontsize-xl font-weight-bold">15</span>万円~
                                </p>
                                <p>
                                    新規サービスの開発, 新規機能の追加, 既存機能の修正等どのような案件でも承ります。<br>
                                    まずは、お客様の「こんな機能を追加したい！こんな機能があったらきっと便利だ！」といった声をお聞かせください。<br><br>
                                    ※お値段は案件規模により変動します。
                                </p>
                            </div>
                        </div>
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
                    <p class="section-description">
                        メールまたは下記フォームよりお問い合わせください
                    </p>
                    <p class="contact-mail">
                        E-mail<span><i class="fas fa-envelope "></i></span><br>
                        ikeda.naoto.98@gmail.com
                    </p>
                    <form action="" method="post" class="contact-form">
                        <input type="hidden" name="token" value="<?php echo h($token); ?>">
                        <div class="contact-form-group">
                            <input type="text" name="name" class="contact-form-input <?php if(!empty($err_msg['name'])) echo 'contact-form-input-err' ?>" placeholder="お名前">
                            <span class="contact-form-err"><?php if(!empty($err_msg['name'])) echo $err_msg['name'] ?></span>
                        </div>
                        <div class="contact-form-group">
                            <input type="text" name="email" class="contact-form-input <?php if(!empty($err_msg['email'])) echo 'contact-form-input-err' ?>" placeholder="メールアドレス">
                            <span class="contact-form-err"><?php if(!empty($err_msg['email'])) echo $err_msg['email'] ?></span>
                        </div>
                        <div class="contact-form-group">
                            <textarea name="content" class="contact-form-textarea <?php if(!empty($err_msg['content'])) echo 'contact-form-textarea-err' ?>" placeholder="内容"></textarea>
                            <span class="contact-form-err"><?php if(!empty($err_msg['content'])) echo $err_msg['content'] ?></span>
                        </div>
                        <div class="btn-group btn-group-center">
                            <button type="submit" class="btn btn-submit btn-slidein btn-block">
                                送信
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer">
        <small>Copyright © Naoto Ikeda All Rights Reserved</small>
    </footer>
    <script src="./dist/js/bundle.js"></script>
</body>
</html>