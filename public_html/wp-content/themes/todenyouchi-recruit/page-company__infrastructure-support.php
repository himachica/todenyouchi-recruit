<?php get_header(); ?>

        <div id="contents">

            <div class="page-ttl -page-ttl02 animation-contents">
                <div class="inner">
                    <div class="inner-contents">
                        <h1 class="ttl animation -animation01 -l">
                            <span class="sub">Enterprize</span>
                            <span class="main">社会インフラサポート</span>
                        </h1>
                        <div class="breadcrumbs -breadcrumbs01">
                            <ol class="breadcrumbs-list">
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-home01.svg" width="20" height="20" alt=""></a></li>
                                <li><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">会社を知る</a></li>
                                <li>社会インフラサポート</li>
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
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/company/infrastructure-support/intro-img01-sp.webp" width="660" height="366" media="(max-width: 768px)">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/infrastructure-support/intro-img01.webp" width="1600" height="820" alt="">
                                    </picture>
                                </p>
                                <div class="copy">
                                    <p class="copy-txt animation -animation01 -l">電力設備の⽤地取得で培ってきたノウハウ。<br>全国をカバーする機動力とマンパワーで<span>多様な⽤地業務</span>をサポート。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="service-point">
                    <div class="inner">
                        <div class="inner-contents">
                            <ol class="list">
                                <li class="animation-contents animation -animation01">
                                    <section class="section">
                                        <div class="block -txt">
                                            <p class="section-number"></p>
                                            <h3 class="section-ttl">ノウハウをつなげる<br class="dsp-sp">土地の専門家</h3>
                                            <div class="section-txt">
                                                <p>社会インフラと呼ばれる道路・河川等の公共用地や、通信・電力設備用地の調査から取得また管理・運用まで、事業者・地域・地権者の皆様との信頼関係を構築しながら全国規模で対応を行っています。</p>
                                            </div>
                                        </div>
                                        <div class="block -img">
                                            <p class="section-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/infrastructure-support/point-img01.webp" width="1140" height="642" alt=""></p>
                                        </div>
                                    </section>
                                </li>
                                <li class="animation-contents animation -animation01">
                                    <section class="section">
                                        <div class="block -txt">
                                            <p class="section-number"></p>
                                            <h3 class="section-ttl">電力用地事業取得事業で<br class="dsp-sp">培った<br class="dsp-pc">3つの強み</h3>
                                            <div class="section-txt">
                                                <dl class="section-txt-item">
                                                    <dt>経験</dt>
                                                    <dd>長きにわたり送電線の建設用地<br>および設備用地管理に携わった経験</dd>
                                                </dl>
                                                <dl class="section-txt-item">
                                                    <dt>信頼</dt>
                                                    <dd>インフラ設備を通して培った地域の皆さまからの信頼</dd>
                                                </dl>
                                                <dl class="section-txt-item">
                                                    <dt>ネットワーク</dt>
                                                    <dd>送電設備・配電設備を管理する中で培った<br>各地域での幅広いネットワーク</dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="block -img">
                                            <p class="section-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/infrastructure-support/point-img02.webp" width="1140" height="642" alt=""></p>
                                        </div>
                                    </section>
                                </li>
                                <li class="animation-contents animation -animation01">
                                    <section class="section">
                                        <div class="block -txt">
                                            <p class="section-number"></p>
                                            <h3 class="section-ttl">公共事業に必須の<br class="dsp-sp">用地業務を<br>トータルサポート</h3>
                                            <div class="section-txt">
                                                <p>電力用地の取得経営を通じて培った総合力と交渉スキルで、自治体さまの用地業務をサポート。公共用地取得、空き家の対策、森林所有者意向調査などの業務にワンストップ対応します。</p>
                                            </div>
                                        </div>
                                        <div class="block -img">
                                            <p class="section-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/infrastructure-support/point-img03.webp" width="1140" height="642" alt=""></p>
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
