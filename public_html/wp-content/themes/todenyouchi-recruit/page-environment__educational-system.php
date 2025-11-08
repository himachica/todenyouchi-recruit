<?php get_header(); ?>

        <div id="contents">

            <div class="page-ttl -page-ttl02">
                <div class="inner">
                    <div class="inner-contents">
                        <h1 class="ttl">
                            <span class="sub">Educational System</span>
                            <span class="main">研修制度 / 教育体制</span>
                        </h1>
                        <div class="breadcrumbs -breadcrumbs01">
                            <ol class="breadcrumbs-list">
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-home01.svg" width="20" height="20" alt=""></a></li>
                                <li><a href="<?php echo esc_url( home_url( '/environment/' ) ); ?>">働く環境を知る</a></li>
                                <li>研修制度 / 教育体制</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <main>

                <div id="educational-system">
                    <div class="inner">
                        <div class="inner-contents">
                            <div class="section-wrap">

                                <section class="section">
                                    <div class="section-block -img">
                                        <p class="section-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/environment/educational-system/img01.webp" width="1140" height="642" alt=""></p>
                                    </div>
                                    <div class="section-block -contents">
                                        <h2 class="section-ttl">内定者研修</h2>
                                        <p class="section-txt">内定者のチームビルディングを高めるため、入社まで数回集まり研修を行います。内定者の趣味等を当てあうクイズ形式の自己紹介や、各種ワークで同期の絆を深めます。<br>また、冬期には東京電力の柏崎刈羽原子力発電所の見学も行います。</p>
                                    </div>
                                </section>

                                <section class="section">
                                    <div class="section-block -img">
                                        <p class="section-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/environment/educational-system/img02.webp" width="1140" height="642" alt=""></p>
                                    </div>
                                    <div class="section-block -contents">
                                        <h2 class="section-ttl">新入社員研修</h2>
                                        <p class="section-txt">入社後、約2週間はビジネスマナーや電話対応等、社会人としての基礎を学ぶとともに、秋季にはフォローアップ研修を行います。この研修では自分の趣味等をテーマにしたプレゼン大会も行われ毎回盛り上がりを見せています。<br>また、冬季には東京電力の福島第一原子力発電所の見学も行います。</p>
                                    </div>
                                </section>

                                <section class="section">
                                    <div class="section-block -img">
                                        <p class="section-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/environment/educational-system/img03.webp" width="1140" height="642" alt=""></p>
                                    </div>
                                    <div class="section-block -contents">
                                        <h2 class="section-ttl">階層別研修</h2>
                                        <p class="section-txt">若手社員、中堅社員、リーダー、管理職等、役職や等級、勤続年数に分け、各階層に求められる役割を果たすために必要なスキルや知識を習得する研修を行っています。</p>
                                    </div>
                                </section>

                            </div>
                        </div>
                    </div>
                </div>

                <?php get_template_part('parts-recruit'); ?>

            </main>

        </div>

<?php get_footer(); ?>
