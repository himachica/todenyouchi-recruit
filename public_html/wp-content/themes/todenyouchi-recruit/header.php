<!DOCTYPE html>
<html lang="ja">
<head>
<?php wp_head(); ?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=no">
<meta name="format-detection" content="telephone=no">

<!-- font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<!-- /font -->

<!-- css -->
<!-- swiper -->
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/plugin/swiper-bundle.min.css" rel="stylesheet" type="text/css">
<!-- /swiper -->
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" type="text/css">
<!-- /css -->

</head>

<body>

    <div id="wrapper">

        <header id="header">
            <div class="header-inner">
                <h1 class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logo-recruitsite-sp.webp" width="550" height="88" media="(max-width: 768px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-recruitsite.webp" width="800" height="107" alt="東電用地株式会社 TODEN YOCHI TEPCO LAND MANAGEMENT CORPORATION RECRUIT SITE">
                        </picture>
                    </a>
                </h1>
                <nav class="nav">
                    <div class="nav-contents">
                        <div class="nav-inner">
                            <ul class="nav-list">
                                <li class="dsp-sp">
                                    <p class="nav-head"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></p>
                                </li>
                                <li>
                                    <p class="nav-head -acod">
                                        <a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">会社を知る</a>
                                        <span class="nav-head-acod"></span>
                                    </p>
                                    <ul class="nav-sub-list">
                                        <li><a href="<?php echo esc_url( home_url( '/company/data/' ) ); ?>">３分で知る東電用地</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/company/power-land/' ) ); ?>">電力用地事業</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/company/infrastructure-support/' ) ); ?>">社会インフラサポート</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/company/life-support/' ) ); ?>">暮らしのサポート</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <p class="nav-head -acod">
                                        <a href="<?php echo esc_url( home_url( '/people/' ) ); ?>">人を知る</a>
                                        <span class="nav-head-acod"></span>
                                    </p>
                                    <ul class="nav-sub-list">
                                        <li><a href="<?php echo esc_url( home_url( '/people/crosstalk-secondyear/' ) ); ?>">⼊社2年目の座談会</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/people/crosstalk-team/' ) ); ?>">チーム座談会</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/people/intern-voice/' ) ); ?>">内定者VOICE</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <p class="nav-head">
                                        <a href="<?php echo esc_url( home_url( '/work/' ) ); ?>">仕事を知る</a>
                                    </p>
                                </li>
                                <li>
                                    <p class="nav-head -acod">
                                        <a href="<?php echo esc_url( home_url( '/environment/' ) ); ?>">働く環境を知る</a>
                                        <span class="nav-head-acod"></span>
                                    </p>
                                    <ul class="nav-sub-list">
                                        <li><a href="<?php echo esc_url( home_url( '/environment/educational-system/' ) ); ?>">研修制度 / 教育体制</a></li>
                                        <li><a href="https://tepco-youchi.co.jp/company/#bk40161617" target="_blank">女性活躍促進</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <p class="nav-head -acod">
                                        <a href="<?php echo esc_url( home_url( '/recruitment/' ) ); ?>">採用情報</a>
                                        <span class="nav-head-acod"></span>
                                    </p>
                                    <ul class="nav-sub-list">
                                        <li><a href="<?php echo esc_url( home_url( '/recruitment/newgraduate/' ) ); ?>">新卒採用</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/recruitment/career/' ) ); ?>">キャリア採用</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <p class="nav-head">
                                        <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">お知らせ</a>
                                    </p>
                                </li>
                                <li>
                                    <p class="nav-head">
                                        <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">よくあるご質問</a>
                                    </p>
                                </li>
                            </ul>
                            <p class="entry"><a href="<?php echo esc_url( home_url( '/entry/' ) ); ?>"><span>ENTRY</span></a></p>
                            <div class="sp-entry">
                                <div class="sp-entry-btn-wrap">
                                    <p class="sp-entry-btn"><a href="<?php echo esc_url( home_url( '/recruitment/newgraduate/' ) ); ?>">新卒採用</a></p>
                                    <p class="sp-entry-btn"><a href="<?php echo esc_url( home_url( '/recruitment/career/' ) ); ?>">キャリア採用</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="sp-menu">
                    <div class="sp-menu-contents">
                        <p class="sp-menu-bars">
                            <span class="sp-menu-bar"></span>
                            <span class="sp-menu-bar"></span>
                            <span class="sp-menu-bar"></span>
                        </p>
                    </div>
                </div>
            </div>
        </header>
