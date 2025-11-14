<?php get_header(); ?>

        <div id="contents">

            <div class="page-ttl -page-ttl01 animation-contents">
                <div class="page-ttl-inner">
                    <h1 class="ttl animation -animation01 -l">
                        <span class="sub">Company</span>
                        <span class="main">会社を知る</span>
                    </h1>
                    <div class="breadcrumbs -breadcrumbs01">
                        <ol class="breadcrumbs-list">
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-home01.svg" width="20" height="20" alt=""></a></li>
                            <li>会社を知る</li>
                        </ol>
                    </div>
                </div>
                <p class="page-ttl-img animation -animation03">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/company/ttl-img01-sp.webp" width="780" height="360" media="(max-width: 768px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/ttl-img01.webp" width="2880" height="640" alt="">
                    </picture>
                </p>
            </div>

            <main>

                <section id="movie">
                    <div class="inner">
                        <div class="inner-contents">
                            <div class="layout -layout02 animation-contents animation -animation01">
                                <div class="block -head">
                                    <h2 class="ttl -ttl01">
                                        <span class="sub">Movie</span>
                                        <span class="main">動画で知る東電⽤地</span>
                                    </h2>
                                    <p class="txt -txt01">動画についての説明が入ります。<br>動画についての説明が入ります。動画についての説明が入ります。動画についての説明が入ります。動画についての説明が入ります。</p>
                                </div>
                                <div class="block -contents">
                                    <div class="movie-wrap">
                                        <p class="movie">
                                            <video src="<?php echo get_template_directory_uri(); ?>/assets/movie/company/data-movie01.mp4" poster="<?php echo get_template_directory_uri(); ?>/assets/img/company/data-movie01-poster.webp" controls playsinline></video>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <?php get_template_part('parts-3min'); ?>

                        </div>
                    </div>
                </section>

                <section id="about-company">
                    <div class="inner">
                        <div class="inner-contents">
                            <div class="layout -layout02 animation-contents animation -animation01">
                                <div class="block -head">
                                    <h2 class="ttl -ttl01">
                                        <span class="sub">Company</span>
                                        <span class="main">東電⽤地とは</span>
                                    </h2>
                                    <p class="txt -txt01">東電⽤地についての説明が入ります。<br>東電⽤地についての説明が入ります。東電⽤地についての説明が入ります。東電⽤地についての説明が入ります。東電⽤地についての説明が入ります。</p>
                                </div>
                                <div class="block -contents">
                                    <p class="img">
                                        <picture>
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/company/company-img01-sp.webp" width="720" height="480" media="(max-width: 768px)">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/company-img01.webp" width="1600" height="820" alt="">
                                        </picture>
                                    </p>
                                </div>
                            </div>
                            <section class="service animation-contents animation -animation01">
                                <h3 class="service-ttl">事業内容</h3>
                                <nav class="nav -nav01">
                                    <ul class="nav-list">
                                        <li>
                                            <a href="<?php echo esc_url( home_url( '/company/power-land/' ) ); ?>">
                                                <p class="nav-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-nav-img01.webp" width="706" height="420" alt=""></p>
                                                <p class="nav-name">電力用地事業</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url( home_url( '/company/infrastructure-support/' ) ); ?>">
                                                <p class="nav-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-nav-img02.webp" width="706" height="420" alt=""></p>
                                                <p class="nav-name">社会インフラサポート</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url( home_url( '/company/life-support/' ) ); ?>">
                                                <p class="nav-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-nav-img03.webp" width="706" height="420" alt=""></p>
                                                <p class="nav-name">暮らしのサポート</p>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </section>
                        </div>
                    </div>
                </section>

                <section id="about-message">
                    <div class="inner">
                        <div class="inner-contents">
                            <div class="head animation-contents">
                                <div class="head-contents">
                                    <h2 class="ttl -ttl01">
                                        <span class="sub">Message</span>
                                        <span class="main">代表メッセージ</span>
                                    </h2>
                                    <p class="head-img animation -animation03">
                                        <picture>
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/company/message-img01-sp.webp" width="720" height="480" media="(max-width: 768px)">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/message-img01.webp" width="2400" height="1230" alt="">
                                        </picture>
                                    </p>
                                    <div class="head-txt animation -animation01 -l">
                                        <p class="marker">土地を扱うということは、<br>その地域に暮らす、<br class="dsp-sp">すべての人々と接すること。<br><span>人と誠実に向き合うこと</span>が、<br class="dsp-sp">当社の原点です。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="contents animation-contents animation -animation01">
                                <div class="contents-message">
                                    <p>東電用地は2008年に設立され、現在16年目を迎えました。<br class="dsp-pc">そう聞くと、比較的若い会社かと思われるかもしれませんが、実は前身の会社も含めると、60年以上にわたって「土地」を扱ってきた用地取得・管理のプロフェッショナル企業です。</p>
                                    <p>当社は東京電カグループとして長年、電力の安定供給を支えてきました。近年ではそのノウハウを活かし、再生可能エネルギー、通信や公共事業など、さまざまな土地を必要とする社会インフラの整備にも取り組んでいます。</p>
                                    <p>土地というのは、すべての事業を行う上で基盤となる大切な資産。<br class="dsp-pc">そして、事業だけでなく、人々の生活を支える基盤でもあります。<br>当社の使命は、社会インフラにおける用地取得・管理を通じて人々の暮らしに貢献し続けることです。</p>
                                    <p>最近ではIT化が加速し、人と人との接点が希薄になりつつあります。<br class="dsp-pc">また、AI技術の活用により多くの分野で仕事の進め方も大きく変わることが予想されますが、私たちの、地域・地権者の皆さまと向き合う姿勢は変わりません。</p>
                                    <p>当社が扱うのは土地や資産ですが、その先にいる人と向き合うことをずっと大切にしていきたいと考えています。<br>人と接するのが好きで、人や社会の役に立つ仕事がしたいと思う方は、ぜひとも私たちの仲間に加わってください。<br>きっと、やりがいのある仕事に巡り会えると思います。</p>
                                </div>
                                <p class="contents-img">
                                    <picture>
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/company/message-img02-sp.webp" width="720" height="210" media="(max-width: 768px)">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/message-img02.webp" width="2000" height="600" alt="">
                                    </picture>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <?php get_template_part('parts-recruit'); ?>

            </main>

        </div>

<?php get_footer(); ?>
