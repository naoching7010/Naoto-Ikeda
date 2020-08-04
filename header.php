<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Naoto Ikeda | <?php echo $title ?></title>
    <meta name="description" content="ホームページ制作・システム開発を承っています。ホームページ制作・システム開発でお悩みの方はお気軽にお問い合わせください。" />
    <meta property="og:title" content="Naoto Ikeda | <?php echo $title ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="ホームページ制作・システム開発を承っています。ホームページ制作・システム開発でお悩みの方はお気軽にお問い合わせください。" />
    <meta property="og:url" content="https://portfolio-nao.com/" />
    <meta property="og:image" content="./image/site-img.png" />
    <meta property="og:site_name" content="Naoto Ikeda" />
    <meta property="og:locale" content="ja_JP" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@naooooo7010" />
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./dist/css/fontawesome-free-5.11.2-web/css/all.min.css">
    <link rel="stylesheet" href="./dist/css/app.css">
</head>
<body>
    <header id="header">
        <div class="site-width">
            <div class="row justify-content-between align-items-center m-0">
                <a class="header-" href="./index.php">
                    <h1 class="header-title">
                        Naoto Ikeda<br>
                        <span class="header-sub-title">Student & Web Engineer</span>
                    </h1>
                </a>
                <div class="menu-trigger js-toggle-sp-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav class="nav js-toggle-sp-menu-target">
                    <ul class="nav-menu">
                        <?php for ($i=0; $i < count($nav); $i++): ?>
                            <li class="nav-item"><a class="nav-link js-nav-scroll" href="#<?php echo $nav[$i]; ?>"><?php echo ucfirst($nav[$i]); ?></a></li>
                        <?php endfor; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>