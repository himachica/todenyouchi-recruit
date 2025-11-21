        <footer id="footer">
            <div class="inner">
                <div class="inner-contents">
                    <div class="layout">
                        <div class="block -head">
                            <p class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.webp" width="631" height="125" alt="東電用地株式会社 TODEN YOCHI TEPCO LAND MANAGEMENT CORPORATION"></a></p>
                            <div class="btn-wrap">
                                <p class="btn -btn02"><a href="https://tepco-youchi.co.jp/" target="_blank">東電用地会社ホームページ</a></p>
                                <p class="btn"><a href="https://intetour.jp/media/recruit-know-how/36131/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/intetour_bnr.webp" width="240px" height="64px" alt="インタツアー 仕事内容を伝えています。"></a></p>
                            </div>
                        </div>
                        <div class="block -contents">
                            <nav class="nav">
                                <ul class="nav-list">
                                    <li>
                                        <p class="nav-head"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a></p>
                                    </li>
                                    <li>
                                        <p class="nav-head"><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">会社を知る</a></p>
                                        <ul class="nav-sub-list">
                                            <li><a href="<?php echo esc_url( home_url( '/company/data/' ) ); ?>">３分で知る東電⽤地</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/company/power-land/' ) ); ?>">電力用地事業</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/company/infrastructure-support/' ) ); ?>">社会インフラサポート</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/company/life-support/' ) ); ?>">暮らしのサポート</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="nav-head"><a href="<?php echo esc_url( home_url( '/people/' ) ); ?>">⼈を知る</a></p>
                                        <ul class="nav-sub-list">
                                            <li><a href="<?php echo esc_url( home_url( '/people/crosstalk-secondyear/' ) ); ?>">⼊社2年⽬の座談会</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/people/crosstalk-team/' ) ); ?>">チーム座談会</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/people/intern-voice/' ) ); ?>">内定者VOICE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="nav-head"><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>">仕事を知る</a></p>
                                    </li>
                                    <li>
                                        <p class="nav-head"><a href="<?php echo esc_url( home_url( '/environment/' ) ); ?>">働く環境を知る</a></p>
                                        <ul class="nav-sub-list">
                                            <li><a href="<?php echo esc_url( home_url( '/environment/educational-system/' ) ); ?>">研修制度 / 教育体制</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="nav-head"><a href="<?php echo esc_url( home_url( '/recruitment/' ) ); ?>">採用情報</a></p>
                                        <ul class="nav-sub-list">
                                            <li><a href="<?php echo esc_url( home_url( '/recruitment/newgraduate/' ) ); ?>">新卒採⽤</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/recruitment/career/' ) ); ?>">キャリア採⽤</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">よくあるご質問</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="nav-head"><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">お知らせ</a></p>
                                    </li>
                                    <li>
                                        <p class="nav-link"><a href="https://tepco-youchi.co.jp/privacy.html" target="_blank">個人情報保護方針</a></p>
                                    </li>
                                    <li>
                                        <p class="nav-link"><a href="https://www.onecareer.jp/companies/5941" target="_blank">ワンキャリア</a></p>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="bottom">
                        <p class="copyright">Copyright ©︎ 2025 Tepco Land Management Corporation All Rights Reserved.</p>
                        <p id="pagetop">
                            <span class="pagetop-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pagetop.svg" width="45" height="45" alt=""></span>
                            <span class="pagetop-txt">PageTop</span>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

    </div>

<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.easing.1.3.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugin/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugin/embla-carousel.umd.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugin/embla-carousel-autoplay.umd.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugin/desvg.js"></script>
<?php if ( is_page( 'entry' ) ) : ?>
<script>
    document.addEventListener('wpcf7mailsent', function (event) {
      window.location.href = "<?php echo esc_url( home_url( '/entry/thanks' ) ); ?>";
    }, false);
</script>
<?php endif; ?>

</body>

</html>
