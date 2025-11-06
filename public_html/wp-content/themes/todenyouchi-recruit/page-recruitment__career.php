<?php get_header(); ?>

        <div id="contents">

            <div class="page-ttl -page-ttl02">
                <div class="inner">
                    <div class="inner-contents">
                        <h1 class="ttl">
                            <span class="sub">Career</span>
                            <span class="main">キャリア採用</span>
                        </h1>
                        <div class="breadcrumbs -breadcrumbs01">
                            <ol class="breadcrumbs-list">
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-home01.svg" width="20" height="20" alt=""></a></li>
                                <li><a href="<?php echo esc_url( home_url( '/recruitment/' ) ); ?>">採用情報</a></li>
                                <li>キャリア採用</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <main>

                <div id="recruitment-list">
                    <div class="inner">
                        <div class="inner-contents">
                            <h2 class="ttl -ttl01">
                                <span class="sub">Requirements List</span>
                                <span class="main">キャリア採用 募集要項一覧</span>
                            </h2>
                            <nav class="nav">
                                <ul class="nav-list">
                                    <li>
                                        <section class="nav-section">
                                            <a href="<?php echo esc_url( home_url( '/recruitment/career/01/' ) ); ?>">
                                                <h3 class="nav-ttl">総合職</h3>
                                                <p class="nav-txt">・発電所から電気をご家庭等に届けるまでの送電鉄塔や電柱等の設備用地の取得・管理を行うための、地域・地権者の皆さまとの面談によるご説明やご承諾のお願い等の対応...</p>
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
