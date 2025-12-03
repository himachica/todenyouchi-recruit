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
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-home01.svg" width="20" height="20" alt=""></a></li>
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
                            <p class="txt -txt01">東電用地で働く社員の“生の声”を集めた3分間の紹介動画です。<br>先輩ってどんな人？どんな働き方？どんな人がこの仕事に向いている？<br>実際に働く社員が求める人物像もお見逃しなく！</p>
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
                            <p class="txt -txt01">東電用地は、東京電力グループの一員として、電気を安定して送り届けるために必要な“土地”を扱う会社です。高圧送電線や鉄塔、電柱などの電力設備を建てるため、土地をお持ちの皆さまのご理解を得るとともに、引き続き受け入れていただくための管理も行っています。<br>そして、そこで培ったノウハウを活かし、公共事業、再生可能エネルギー、通信ネットワークなど、社会インフラ設備に欠かせない土地の取得・管理も行っています。<br>みなさんの生活の “土台” を支えているのが私たち東電用地です。</p>
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
                                    <a href="<?php echo esc_url(home_url('/company/power-land/')); ?>">
                                        <p class="nav-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-nav-img01.webp" width="706" height="420" alt=""></p>
                                        <p class="nav-name">電力用地事業</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/company/infrastructure-support/')); ?>">
                                        <p class="nav-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-nav-img02.webp" width="706" height="420" alt=""></p>
                                        <p class="nav-name">社会インフラサポート</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/company/life-support/')); ?>">
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
                                <span class="main">社長メッセージ</span>
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
                            <p>当社は、2028年に設立20周年を迎えますが、前身会社（東電不動産株式会社ならびに尾瀬林業株式会社の一部事業を分割統合し2008年当社設立）の時代から、電気を安定して送り届けるために不可欠な送電線や配電線などの電力設備用地の取得や管理等を主な業務とし、首都圏を中心とする地域への電力安定供給に貢献してきました。</p>
                            <p>近年では、これまで培ってきた豊富な経験と技術を活かし、再生可能エネルギー事業、鉄道事業、公共事業の用地取得業務のサポートなど、新たな事業領域にも全国規模で取り組んでいます。</p>
                            <p>「土地」は、目には見えない多くの人の想いや歴史がつまっています。<br class="dsp-pc">「土地」は、すべての事業活動の基盤であり、人々の生活を支える大切な資産です。<br class="dsp-pc">私たちの使命は、社会インフラにおける用地取得・管理を通じて 「土地」という社会の土台を支えること。</p>
                            <p>IT化が進み、社会の仕組みが変わりつつある今も、私たちが変わらず大切にしているのは「人と人とのつながり」です。<br class="dsp-pc">地域・地権者の皆さまと誠実に向き合い、ひとつひとつの土地に込められた想いを大切にしています。</p>
                            <p>人と接することが好きで、人や社会の役に立つ仕事がしたい―――<br class="dsp-pc">そんな気持ちを大切にできる方と一緒に働きたいと思っています。</p>
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