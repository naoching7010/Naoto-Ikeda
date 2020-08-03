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
                            <!-- <li class="nav-item"><a class="nav-link js-nav-scroll" href="#skills">Skills</a></li>
                            <li class="nav-item"><a class="nav-link js-nav-scroll" href="#works">Works</a></li>
                            <li class="nav-item"><a class="nav-link js-nav-scroll" href="#services">Services</a></li>
                            <li class="nav-item"><a class="nav-link js-nav-scroll" href="#contact">Contact</a></li> -->
                        <?php endfor; ?>
                        <li class="nav-item"><a class="nav-link js-nav-scroll" href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>