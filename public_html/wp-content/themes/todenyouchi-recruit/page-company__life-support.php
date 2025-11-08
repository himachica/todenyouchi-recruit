<?php get_header(); ?>

        <div id="contents">

            <div class="page-ttl -page-ttl02 animation-contents">
                <div class="inner">
                    <div class="inner-contents">
                        <h1 class="ttl animation -animation01 -l">
                            <span class="sub">Enterprize</span>
                            <span class="main">暮らしのサポート</span>
                        </h1>
                        <div class="breadcrumbs -breadcrumbs01">
                            <ol class="breadcrumbs-list">
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-home01.svg" width="20" height="20" alt=""></a></li>
                                <li><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">会社を知る</a></li>
                                <li>暮らしのサポート</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <main>

                <div id="service-intro">
                    <div class="inner">
                        <div class="inner-contents">
                            <div class="contents animation-contents">
                                <p class="img animation -animation03">
                                    <picture>
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/company/life-support/intro-img01-sp.webp" width="660" height="366" media="(max-width: 768px)">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/life-support/intro-img01.webp" width="1600" height="820" alt="">
                                    </picture>
                                </p>
                                <div class="copy">
                                    <p class="copy-txt animation -animation01 -l">暮らしに寄り添う、<span>安心と便利</span>をお届け。<span>あなたのライフスタイル</span>を支えます。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="service-point">
                    <div class="inner">
                        <div class="inner-contents">
                            <ol class="list -work">
                                <li class="animation-contents animation -animation01">
                                    <section class="section">
                                        <div class="block -txt">
                                            <p class="section-number"></p>
                                            <h3 class="section-ttl">便利な駐車場</h3>
                                            <div class="section-txt">
                                                <p>高圧電線の下の土地や、変電所のわずかなスペースも活用し、1台から駐車場として利用しています。</p>
                                            </div>
                                        </div>
                                        <div class="block -img">
                                            <p class="section-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/life-support/point-img01.webp" width="1140" height="642" alt=""></p>
                                        </div>
                                    </section>
                                </li>
                                <li class="animation-contents animation -animation01">
                                    <section class="section">
                                        <div class="block -txt">
                                            <p class="section-number"></p>
                                            <h3 class="section-ttl">トランクルーム・バイクガレージ</h3>
                                            <div class="section-txt">
                                                <p>トランクルームやバイクガレージが小さなスペースを安定活用できることがメリットである。電源設備を備えたガレージも普及し、立地によってはすぐ空きがなくなるほどです。</p>
                                            </div>
                                        </div>
                                        <div class="block -img">
                                            <p class="section-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/life-support/point-img02.webp" width="1140" height="642" alt=""></p>
                                        </div>
                                    </section>
                                </li>
                                <li class="animation-contents animation -animation01">
                                    <section class="section">
                                        <div class="block -txt">
                                            <p class="section-number"></p>
                                            <h3 class="section-ttl">相続サポート</h3>
                                            <div class="section-txt">
                                                <p>私たちは半世紀以上、電力設備に必要な土地の管理や取得に携わってきました。多くのお客様から長きにわたり、ご協力をいただいています。そこで育んできた人と人とのつながりの中で、養った経験を相続サポートに活かしていきます。弁護士、税理士、司法書士、行政書士と連携しワンストップサービスをご提供します。</p>
                                            </div>
                                        </div>
                                        <div class="block -img">
                                            <p class="section-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/life-support/point-img03.webp" width="1140" height="642" alt=""></p>
                                        </div>
                                    </section>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <?php get_template_part('parts-recruit'); ?>

            </main>

        </div>

<?php get_footer(); ?>
