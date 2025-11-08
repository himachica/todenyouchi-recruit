<?php get_header(); ?>

        <div id="contents">

            <div class="page-ttl -page-ttl02 animation-contents">
                <div class="inner">
                    <div class="inner-contents">
                        <h1 class="ttl animation -animation01 -l">
                            <span class="sub">Enterprize</span>
                            <span class="main">電⼒⽤地事業</span>
                        </h1>
                        <div class="breadcrumbs -breadcrumbs01">
                            <ol class="breadcrumbs-list">
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-home01.svg" width="20" height="20" alt=""></a></li>
                                <li><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">会社を知る</a></li>
                                <li>電⼒⽤地事業</li>
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
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/company/power-land/intro-img01-sp.webp" width="660" height="366" media="(max-width: 768px)">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/power-land/intro-img01.webp" width="1600" height="820" alt="">
                                    </picture>
                                </p>
                                <div class="copy">
                                    <p class="copy-txt animation -animation01 -l">東京電力パワーグリッドの<br class="dsp-sp">インフラを支える<br class="dsp-pc">電力設備用地の<br class="dsp-sp"><span>取得・管理業務</span>を行なっています。</p>
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
                                            <h3 class="section-ttl">送変電用地管理業務</h3>
                                            <div class="section-txt">
                                                <p>東京電力から受託している送変電用地管理業務は、電力の安定供給のため、鉄塔・変電所敷地や高圧送電線が上空通過する地権者の方に定期的にお支払いするための賃料・補償料の手続き業務の他、官公有地について占用許可を得る業務を行っております。</p>
                                            </div>
                                        </div>
                                        <div class="block -img">
                                            <p class="section-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/power-land/point-img01.webp" width="1140" height="642" alt=""></p>
                                        </div>
                                    </section>
                                </li>
                                <li class="animation-contents animation -animation01">
                                    <section class="section">
                                        <div class="block -txt">
                                            <p class="section-number"></p>
                                            <h3 class="section-ttl">送変電用地取得業務</h3>
                                            <div class="section-txt">
                                                <p>東京電力から受託している送変電用地取得業務は、電力の安定供給のため、高圧送電線設備の増強などのため鉄塔の建替・新設工事が必要となります。工事に伴い各行政・地権者の方へ事業説明を行いご理解をいただいたうえで各種手続きを行い鉄塔建設のための用地確保業務を行っております。</p>
                                            </div>
                                        </div>
                                        <div class="block -img">
                                            <p class="section-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/power-land/point-img02.webp" width="1140" height="642" alt=""></p>
                                        </div>
                                    </section>
                                </li>
                                <li class="animation-contents animation -animation01">
                                    <section class="section">
                                        <div class="block -txt">
                                            <p class="section-number"></p>
                                            <h3 class="section-ttl">配電用地業務</h3>
                                            <div class="section-txt">
                                                <p>東京電力から受託している配電用地業務は、電力の安定供給のため、ご承諾いただいている地権者の方に定期的にお支払いするための電柱敷地料の手続き業務の他、官公有地へ占用許可を得る業務を行っております。また、電柱の建替工事についても各行政・地権者の方へ事業説明を行いご理解を頂いたうえで工事に必要な各種手続きを行っております。</p>
                                            </div>
                                        </div>
                                        <div class="block -img">
                                            <p class="section-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/power-land/point-img03.webp" width="1140" height="642" alt=""></p>
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
