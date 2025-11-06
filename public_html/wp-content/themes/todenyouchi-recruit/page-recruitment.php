<?php get_header(); ?>

        <div id="contents">

            <div class="page-ttl -page-ttl01">
                <div class="page-ttl-inner">
                    <h1 class="ttl">
                        <span class="sub">Recruitment</span>
                        <span class="main">採用情報</span>
                    </h1>
                    <div class="breadcrumbs -breadcrumbs01">
                        <ol class="breadcrumbs-list">
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-home01.svg" width="20" height="20" alt=""></a></li>
                            <li>採用情報</li>
                        </ol>
                    </div>
                </div>
                <p class="page-ttl-img">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/recruitment/ttl-img01-sp.webp" width="780" height="360" media="(max-width: 768px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruitment/ttl-img01.webp" width="2880" height="640" alt="">
                    </picture>
                </p>
            </div>

            <main>

                <div id="recruitment-nav">
                    <div class="inner">
                        <div class="inner-contents">
                            <nav class="nav">
                                <ul class="nav-list">
                                    <li>
                                        <section class="nav-section">
                                            <a href="<?php echo esc_url( home_url( '/recruitment/newgraduate/' ) ); ?>">
                                                <p class="nav-img">
                                                    <picture>
                                                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/recruitment/nav-img01-sp.webp" width="720" height="720" media="(max-width: 768px)">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruitment/nav-img01.webp" width="2280" height="820" alt="">
                                                    </picture>
                                                </p>
                                                <div class="nav-contents">
                                                    <h2 class="nav-ttl">
                                                        <span class="sub">New graduate</span>
                                                        <span class="main">新卒採用</span>
                                                    </h2>
                                                    <p class="btn -btn03"><span>もっと見る</span></p>
                                                </div>
                                            </a>
                                        </section>
                                    </li>
                                    <li>
                                        <section class="nav-section">
                                            <a href="<?php echo esc_url( home_url( '/recruitment/career/' ) ); ?>">
                                                <p class="nav-img">
                                                    <picture>
                                                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/recruitment/nav-img02-sp.webp" width="720" height="720" media="(max-width: 768px)">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruitment/nav-img02.webp" width="2280" height="820" alt="">
                                                    </picture>
                                                </p>
                                                <div class="nav-contents">
                                                    <h2 class="nav-ttl">
                                                        <span class="sub">Mid-career</span>
                                                        <span class="main">キャリア採用</span>
                                                    </h2>
                                                    <p class="btn -btn03"><span>もっと見る</span></p>
                                                </div>
                                            </a>
                                        </section>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <?php get_template_part('parts-recruit'); ?>

            </main>

        </div>

<?php get_footer(); ?>
