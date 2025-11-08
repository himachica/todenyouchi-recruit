<?php get_header(); ?>

        <div id="contents">

            <div class="page-ttl -page-ttl02 animation-contents">
                <div class="inner">
                    <div class="inner-contents">
                        <h1 class="ttl animation -animation01 -l">
                            <span class="sub">Form</span>
                            <span class="main">応募フォーム</span>
                        </h1>
                        <div class="breadcrumbs -breadcrumbs01">
                            <ol class="breadcrumbs-list">
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-home01.svg" width="20" height="20" alt=""></a></li>
                                <li>応募フォーム</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <main>

                <div id="form-page">
                    <div class="inner">
                        <div class="inner-contents">
                            <div class="form -form01">

                                <?php echo do_shortcode('[contact-form-7 id="56f7e05" title="応募フォーム"]'); ?>

                            </div>
                        </div>
                    </div>
                </div>

            </main>

        </div>

<?php get_footer(); ?>
