<!doctype html>
<html dir="ltr " lang="id" vocab="http://schema.org/">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?=base_url();?>">
    <title>Selamat Ulang Tahun Mama</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="author" content="PT. Kodebiner Teknologi Indonesia">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/joomla-alert.min.css">
    <link rel="stylesheet" href="css/joomla-fontawesome.min.css">
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <script src="js/core.min.js"></script>
    <script src="js/messages.min.js"></script>
    <script src="js/theme.js"></script>
</head>
<body>
    <div class="tm-page">
        <!-- Header -->
        <?php if ($ismobile) { ?>
            <header class="tm-header-mobile tm-header-overlay" uk-header uk-inverse="target: .uk-navbar-container; sel-active: .uk-navbar-transparent">
                <div uk-sticky show-on-up animation="uk-animation-slide-top" cls-active="uk-navbar-sticky" sel-target=".uk-navbar-container" cls-inactive="uk-navbar-transparent" tm-section-start>
                    <div class="uk-navbar-container uk-navbar-transparent uk-dark">
                        <div class="uk-container uk-container-expand">
                            <nav uk-navbar="{'align':'center','container':'.tm-header-mobile > [uk-sticky]','boundary':'.tm-header-mobile .uk-navbar-container','target-x':'.tm-header-mobile .uk-navbar','target-y':'.tm-header-mobile .uk-navbar-container','dropbar':true,'dropbar-anchor':'.tm-header-mobile .uk-navbar-container','dropbar-transparent-mode':'remove'}">
                                <div class="uk-navbar-center">
                                    <a href="<?=base_url();?>" class="uk-logo uk-navbar-item">
                                        <img loading="eager" height="50" src="images/logo.svg" uk-svg />
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
        <?php } else { ?>
            <header class="tm-header tm-header-overlay" uk-header uk-inverse="target: .uk-navbar-container, .tm-headerbar; sel-active: .uk-navbar-transparent, .tm-headerbar">
                <div uk-sticky show-on-up animation="uk-animation-slide-top" cls-active="uk-navbar-sticky" sel-target=".uk-navbar-container" cls-inactive="uk-navbar-transparent" tm-section-start>
                    <div class="uk-navbar-container uk-navbar-transparent uk-dark">
                        <div class="uk-container uk-container-expand">
                            <nav uk-navbar="{'align':'center','container':'.tm-header > [uk-sticky]','boundary':'.tm-header .uk-navbar-container','target-x':'.tm-header .uk-navbar','target-y':'.tm-header .uk-navbar-container','dropbar':true,'dropbar-anchor':'.tm-header .uk-navbar-container','dropbar-transparent-mode':'remove'}">
                                <div class="uk-navbar-left">
                                    <a href="<?=base_url();?>" class="uk-logo uk-navbar-item">
                                        <img loading="eager" height="50" src="images/logo.svg" uk-svg />
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
        <?php } ?>
        <!-- Main -->
        <main id="tm-main">
            <style class="uk-margin-remove-adjacent">
                #page\#0 .el-image{max-width: 48vw;}
                #page\#1 .el-image{max-width: 43vw;}
            </style>
            <!-- Top Section -->
            <section class="uk-section-muted uk-inverse-dark uk-section uk-section-xlarge uk-padding-remove-bottom" uk-scrollspy="target: [uk-scrollspy-class]; cls: uk-animation-fade; delay: false;">
                <div class="uk-container uk-container-xlarge">
                    <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                        <div class="uk-grid-item-match uk-width-1-1@m">
                            <div class="uk-panel uk-width-1-1">
                                <!-- Left Illustration -->
                                <div class="uk-position-absolute uk-width-1-1 uk-text-left" id="page#0" uk-parallax="y: 0,-9vh; easing: 0.5" style="right: 30vw; top: -16vh; z-index: 0; transform: translateY(0vh); will-change: transform;">
                                    <img src="/images/home-hero-left.svg" width="800" height="750" class="el-image" loading="eager" />
                                </div>
                                <!-- Top Content -->
                                 <div class="uk-panel uk-position-relative" uk-scrollspy-class>
                                    <div class="uk-width-1-1 uk-text-center">
                                        <img class="uk-width-1-1 uk-width-1-2@m" src="images/logo.svg" loading="eager" />
                                    </div>
                                 </div>
                                <!-- Right Illustration -->
                                <div class="uk-position-absolute uk-width-1-1 uk-text-right" id="page#1" uk-parallax="y: 4vh,-10vh; easing: 0.5" style="right: -20vw; bottom: -24vh; z-index: 0; transform: translateY(4vh); will-change: transform;">
                                    <img src="/images/home-hero-right.svg" width="650" height="600" class="el-image" loading="eager" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Bottom Section -->
            <section class="uk-section-muted" uk-scrollspy="target: [uk-scrollspy-class]; cls: uk-animation-slide-bottom-small; delay: false;">
                <div data-src="/images/bottom-bg.svg" uk-img class="uk-background-norepeat uk-background-contain uk-background-bottom-left uk-section uk-section-xlarge" uk-parallax="bgx: -120,-120; bgy: 420,120; easing: 0.5" style="will-change: background-position-x, background-position-y; background-image: url(&quot;https://demo.yootheme.com/demo/design-bites/images/bottom-bg.svg&quot;); background-position: calc(-120px) calc(100% + 405.367px);">
                <div class="uk-container uk-container-small">
                    <div class="uk-width-1-1 uk-flex uk-flex-center">
                        <div class="uk-width-1-2@m">                                                    
                            <blockquote class="uk-margin-large">
                                Semoga mama sehat selalu, lancar rejekinya, dimudahkan semua urusan, dan semakin sayang keluarga
                                <footer>Bapak dan Nalla</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>    
                <div class="uk-container uk-container-xlarge">
                        <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-margin-xlarge uk-margin-remove-top">
                            <div class="uk-width-1-1">
                                <div class="uk-child-width-1-2 uk-child-width-1-4@m" uk-grid="masonry: pack"  uk-lightbox="animation: fade">
                                    <?php foreach ($galleries as $gallery) { ?>
                                        <div>
                                            <a href="images/gallery/<?=$gallery?>">
                                                <img src="images/gallery/<?=$gallery?>" />
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <?php
        if ($ismobile) {
            $text = 'uk-text-center';
        } else {
            $text = 'uk-text-right';
        }
        ?>
        <footer class="uk-section uk-section-small">
            <div class="uk-container uk-container-expand">
                <div class="<?=$text?> uk-text-meta">&copy; Copyright 2025. Your Beloved Husband and Daughter</div>
            </div>
        </footer>
    </div>
</body>

</html>