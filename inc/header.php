<!DOCTYPE html>
<html lang="jp">

<head>
    <!-- URL取得関数 -->
    <?php 
        require_once($Path."functions.php");
        $current_url = $_SERVER['REQUEST_URI'];
        $page = substr($current_url, 11); 
        $ogptype = $page === "" ? 'website' : 'article';

        switch ($page){
            case 'works/':
                $pagetitle = 'WORKS | NAOYA PORTFOLIO SITE';
                $ogptitle = 'WORKS';
                break;
            case 'about/':
                $pagetitle = 'ABOUT | NAOYA PORTFOLIO SITE';
                $ogptitle = 'ABOUT';
                break;
            default:
                $pagetitle = 'NAOYA PORTFOLIO SITE | TOP';
                $ogptitle = 'TOP';
                break;
        }
        $ogpurl = nowUrl();
    ?>
    <!-- 文字コード -->
    <meta charset="UTF-8">
    <!-- IEバグ回避用 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 説明文 -->
    <meta name="description" content="見習いWEBエンジニアのポートフォリオサイト">
    <!-- タイトル -->
    <title><?= $pagetitle ?></title>
    <!-- ビューポート -->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- OGP -->
    <meta property="og:title" content=<?= $ogptitle ?>>
    <meta property="og:type" content=<?= $ogptype ?>>
    <meta property="og:description" content="見習いWEBエンジニアのポートフォリオサイト">
    <meta property="og:url" content=<?= $ogpurl ?>>
    <meta property="og:site_name" content="Naoya Portfolio Site">
    <meta property="og:image" content="https://f-naoya.com/portfolio/image/ogp.jpg">
    <!-- Twitter OGP -->
    <meta name="twitter:card" content="summary_large_image">
    <!-- ファビコン -->
    <link rel="shortcut icon" href="<?php print $Path; ?>image/favicon.ico">
    <!-- Webフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@2.0.2/destyle.css">
    <link rel="stylesheet" href="<?php print $Path; ?>dist/style.css">
    <link rel="stylesheet" href="https://use.typekit.net/qgw0lcp.css">
</head>

<body>

<!-- HEADER -->
<div class="l-header__fixed" id="top"></div>
<header class="l-header l-wrapper" id="js-height">
    <div class="l-header__icon">
        <a href="<?php print $Path; ?>"><span class="l-text__blue-paler">N</span>AO<span class="l-text__yellow">Y</span><span class="l-text__blue-darker">A</span></a>
    </div>
    <nav class="l-header__nav">
        <ul class="l-header__list js-header l-flex">
            <li class="l-header__link">
                <a href="<?php print $Path; ?>#message">
                <ul class="l-header__item">
                    <li class="l-header__item-english">MESSAGE</li>
                    <li class="l-header__item-japanese js-hide">メッセージ</li>
                </ul>
                </a>
            </li>
            <li class="l-header__link">
                <a href="<?php print $Path; ?>#skill">
                <ul class="l-header__item">
                    <li class="l-header__item-english">SKILL</li>
                    <li class="l-header__item-japanese js-hide">スキル</li>
                </ul>
                </a>
            </li>
            <li class="l-header__link js-works">
                <a href="<?php print $Path; ?>works">
                <ul class="l-header__item">
                    <li class="l-header__item-english">WORKS</li>
                    <li class="l-header__item-japanese js-hide">制作物</li>
                </ul>
                </a>
            </li>
            <li class="l-header__link js-about">
                <a href="<?php print $Path; ?>about">
                <ul class="l-header__item">
                    <li class="l-header__item-english">ABOUT</li>
                    <li class="l-header__item-japanese js-hide">私について</li>
                </ul>
                </a>
            </li>
        </ul>
    </nav>
    <div class="l-header__humberger js-humberger">
        <div class="l-header__humberger-border"></div>
    </div>
</header>