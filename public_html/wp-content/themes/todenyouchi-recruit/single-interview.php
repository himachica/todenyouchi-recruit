<?php get_header(); ?>

<?php
$current_id             = get_queried_object_id();
$index                  = get_order_index_in_cpt( get_the_ID() );

$interview_img01        = get_field( 'interview_img01' );
if ( $interview_img01 ) :
    $interview_img01_src    = $interview_img01['url'];
    $interview_img01_width  = $interview_img01['width'];
    $interview_img01_height = $interview_img01['height'];
endif;
$interview_img01_sp     = get_field( 'interview_img01_sp' );
if ( $interview_img01_sp ) :
    $interview_img01_sp_src    = $interview_img01_sp['url'];
    $interview_img01_sp_width  = $interview_img01_sp['width'];
    $interview_img01_sp_height = $interview_img01_sp['height'];
endif;
$interview_copy         = get_field( 'interview_copy' );
$interview_year         = get_field( 'interview_year' );
$interview_name         = get_field( 'interview_name' );
$interview_position     = get_field( 'interview_position' );

$interview_myjob_img    = get_field( 'interview_myjob_img' );
if ( $interview_myjob_img ) :
    $interview_myjob_img_src    = $interview_myjob_img['url'];
    $interview_myjob_img_width  = $interview_myjob_img['width'];
    $interview_myjob_img_height = $interview_myjob_img['height'];
endif;
$interview_myjob_txt    = get_field( 'interview_myjob_txt' );

$interview_q01_img      = get_field( 'interview_q01_img' );
if ( $interview_q01_img ) :
    $interview_q01_img_src    = $interview_q01_img['url'];
    $interview_q01_img_width  = $interview_q01_img['width'];
    $interview_q01_img_height = $interview_q01_img['height'];
endif;
$interview_q01_copy     = get_field( 'interview_q01_copy' );
$interview_q01_question = get_field( 'interview_q01_question' );
$interview_q01_txt      = get_field( 'interview_q01_txt' );

$interview_q02_img      = get_field( 'interview_q02_img' );
if ( $interview_q02_img ) :
    $interview_q02_img_src    = $interview_q02_img['url'];
    $interview_q02_img_width  = $interview_q02_img['width'];
    $interview_q02_img_height = $interview_q02_img['height'];
endif;
$interview_q02_copy     = get_field( 'interview_q02_copy' );
$interview_q02_question = get_field( 'interview_q02_question' );
$interview_q02_txt      = get_field( 'interview_q02_txt' );

$interview_q03_copy     = get_field( 'interview_q03_copy' );
$interview_q03_question = get_field( 'interview_q03_question' );
$interview_q03_txt      = get_field( 'interview_q03_txt' );

$interview_q04_img      = get_field( 'interview_q04_img' );
if ( $interview_q04_img ) :
    $interview_q04_img_src    = $interview_q04_img['url'];
    $interview_q04_img_width  = $interview_q04_img['width'];
    $interview_q04_img_height = $interview_q04_img['height'];
endif;
$interview_q04_copy     = get_field( 'interview_q04_copy' );
$interview_q04_question = get_field( 'interview_q04_question' );
$interview_q04_txt      = get_field( 'interview_q04_txt' );

$interview_last_img     = get_field( 'interview_last_img' );
if ( $interview_last_img ) :
    $interview_last_img_src    = $interview_last_img['url'];
    $interview_last_img_width  = $interview_last_img['width'];
    $interview_last_img_height = $interview_last_img['height'];
endif;

$interview_message_img  = get_field( 'interview_message_img' );
if ( $interview_message_img ) :
    $interview_message_img_src    = $interview_message_img['url'];
    $interview_message_img_width  = $interview_message_img['width'];
    $interview_message_img_height = $interview_message_img['height'];
endif;
$interview_message_copy = get_field( 'interview_message_copy' );
$interview_message_txt  = get_field( 'interview_message_txt' );
?>

        <div id="contents">

            <div class="page-ttl -page-ttl02 animation-contents">
                <div class="inner">
                    <div class="inner-contents">
                        <h1 class="ttl animation -animation01 -l">
                            <span class="sub">Interview</span>
                            <span class="main">社員インタビュー</span>
                        </h1>
                        <div class="breadcrumbs -breadcrumbs01">
                            <ol class="breadcrumbs-list">
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-home01.svg" width="20" height="20" alt=""></a></li>
                                <li><a href="<?php echo esc_url( home_url( '/people/' ) ); ?>">人を知る</a></li>
                                <?php if ( $index ) : ?>
                                <li>社員インタビュー <?php printf('%02d', $index); ?></li>
                                <?php else : ?>
                                <li>社員インタビュー</li>
                                <?php endif; ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <main>

                <article id="interview-single">

                    <div id="interview-single-head">
                        <div class="inner">
                            <div class="inner-contents animation-contents">
                                <?php if ( $interview_img01 || $interview_img01_sp ) : ?>
                                <p class="img animation -animation03">
                                    <?php if ( $interview_img01 && $interview_img01_sp ) : ?>
                                    <picture>
                                        <source srcset="<?php echo esc_attr( $interview_img01_sp_src ); ?>" width="<?php echo esc_attr( $interview_img01_sp_width ); ?>" height="<?php echo esc_attr( $interview_img01_sp_height ); ?>" media="(max-width: 768px)">
                                        <img src="<?php echo esc_attr( $interview_img01_src ); ?>" width="<?php echo esc_attr( $interview_img01_width ); ?>" height="<?php echo esc_attr( $interview_img01_height ); ?>" alt="">
                                    </picture>
                                    <?php elseif ( $interview_img01 ) : ?>
                                    <img src="<?php echo esc_attr( $interview_img01_src ); ?>" width="<?php echo esc_attr( $interview_img01_width ); ?>" height="<?php echo esc_attr( $interview_img01_height ); ?>" alt="">
                                    <?php else : ?>
                                    <img src="<?php echo esc_attr( $interview_img01_sp_src ); ?>" width="<?php echo esc_attr( $interview_img01_sp_width ); ?>" height="<?php echo esc_attr( $interview_img01_sp_height ); ?>" alt="">
                                    <?php endif; ?>
                                </p>
                                <?php endif; ?>
                                <div class="contents animation -animation01 -l">
                                    <?php if ( $index ) : ?>
                                    <p class="number"><span>Interview.<?php printf('%02d', $index); ?></span></p>
                                    <?php else : ?>
                                    <p class="number"><span>Interview</span></p>
                                    <?php endif; ?>
                                    <?php if ( $interview_copy ) : ?>
                                    <h2 class="copy"><span><?php echo nl2br( esc_html( $interview_copy ) ); ?></span></h2>
                                    <?php endif; ?>
                                    <?php if ( $interview_year ) : ?>
                                    <p class="year"><?php echo esc_html( $interview_year ); ?>年入社</p>
                                    <?php endif; ?>
                                    <?php if ( $interview_name ) : ?>
                                    <p class="name"><?php echo esc_html( $interview_name ); ?></p>
                                    <?php endif; ?>
                                    <?php if ( $interview_position ) : ?>
                                    <p class="position"><?php echo nl2br( esc_html( $interview_position ) ); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if ( $interview_myjob_img || $interview_myjob_txt ) : ?>
                    <section id="interview-single-job">
                        <div class="inner">
                            <div class="inner-contents">
                                <div class="contents animation-contents animation -animation01">
                                    <div class="block -img">
                                        <?php if ( $interview_myjob_img ) : ?>
                                        <p class="img"><img src="<?php echo esc_attr( $interview_myjob_img_src ); ?>" width="<?php echo esc_attr( $interview_myjob_img_width ); ?>" height="<?php echo esc_attr( $interview_myjob_img_height ); ?>" alt=""></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="block -contents">
                                        <h3 class="ttl">
                                            <span class="sub">My job</span>
                                            <span class="main">これが私の仕事です</span>
                                        </h3>
                                        <?php if ( $interview_myjob_txt ) : ?>
                                        <p class="txt -txt02"><?php echo nl2br( esc_html( $interview_myjob_txt ) ); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php endif; ?>

                    <div id="interview-single-article">
                        <div class="inner">
                            <div class="inner-contents">
                                <div class="section-wrapper">

                                    <?php if ( $interview_q01_img || $interview_q01_copy || $interview_q01_question || $interview_q01_txt ) : ?>
                                    <section class="section animation-contents animation -animation01">
                                        <div class="section-block -head">
                                            <?php if ( $interview_q01_img ) : ?>
                                            <p class="section-img"><img src="<?php echo esc_attr( $interview_q01_img_src ); ?>" width="<?php echo esc_attr( $interview_q01_img_width ); ?>" height="<?php echo esc_attr( $interview_q01_img_height ); ?>" alt=""></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="section-block -contents">
                                            <?php if ( $interview_q01_copy ) : ?>
                                            <h3 class="section-copy"><?php echo nl2br( esc_html( $interview_q01_copy ) ); ?></h3>
                                            <?php endif; ?>
                                            <?php if ( $interview_q01_question ) : ?>
                                            <p class="section-q"><?php echo nl2br( esc_html( $interview_q01_question ) ); ?></p>
                                            <?php endif; ?>
                                            <?php if ( $interview_q01_txt ) : ?>
                                            <p class="section-txt"><?php echo nl2br( esc_html( $interview_q01_txt ) ); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </section>
                                    <?php endif; ?>

                                    <?php if ( $interview_q02_img || $interview_q02_copy || $interview_q02_question || $interview_q02_txt ) : ?>
                                    <section class="section animation-contents animation -animation01">
                                        <div class="section-block -head">
                                            <?php if ( $interview_q02_img ) : ?>
                                            <p class="section-img"><img src="<?php echo esc_attr( $interview_q02_img_src ); ?>" width="<?php echo esc_attr( $interview_q02_img_width ); ?>" height="<?php echo esc_attr( $interview_q02_img_height ); ?>" alt=""></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="section-block -contents">
                                            <?php if ( $interview_q02_copy ) : ?>
                                            <h3 class="section-copy"><?php echo nl2br( esc_html( $interview_q02_copy ) ); ?></h3>
                                            <?php endif; ?>
                                            <?php if ( $interview_q02_question ) : ?>
                                            <p class="section-q"><?php echo nl2br( esc_html( $interview_q02_question ) ); ?></p>
                                            <?php endif; ?>
                                            <?php if ( $interview_q02_txt ) : ?>
                                            <p class="section-txt"><?php echo nl2br( esc_html( $interview_q02_txt ) ); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </section>
                                    <?php endif; ?>

                                    <?php if ( $interview_q03_copy || $interview_q03_question || $interview_q03_txt ) : ?>
                                    <section class="section animation-contents animation -animation01">
                                        <div class="section-block -head">
                                            <?php if ( $interview_q03_copy ) : ?>
                                            <h3 class="section-copy"><?php echo nl2br( esc_html( $interview_q03_copy ) ); ?></h3>
                                            <?php endif; ?>
                                        </div>
                                        <div class="section-block -contents">
                                            <?php if ( $interview_q03_question ) : ?>
                                            <p class="section-q"><?php echo nl2br( esc_html( $interview_q03_question ) ); ?></p>
                                            <?php endif; ?>
                                            <?php if ( $interview_q03_txt ) : ?>
                                            <p class="section-txt"><?php echo nl2br( esc_html( $interview_q03_txt ) ); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </section>
                                    <?php endif; ?>

                                    <?php if ( $interview_q04_img || $interview_q04_copy || $interview_q04_question || $interview_q04_txt ) : ?>
                                    <section class="section animation-contents animation -animation01">
                                        <div class="section-block -head">
                                            <?php if ( $interview_q04_img ) : ?>
                                            <p class="section-img"><img src="<?php echo esc_attr( $interview_q04_img_src ); ?>" width="<?php echo esc_attr( $interview_q04_img_width ); ?>" height="<?php echo esc_attr( $interview_q04_img_height ); ?>" alt=""></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="section-block -contents">
                                            <?php if ( $interview_q04_copy ) : ?>
                                            <h3 class="section-copy"><?php echo nl2br( esc_html( $interview_q04_copy ) ); ?></h3>
                                            <?php endif; ?>
                                            <?php if ( $interview_q04_question ) : ?>
                                            <p class="section-q"><?php echo nl2br( esc_html( $interview_q04_question ) ); ?></p>
                                            <?php endif; ?>
                                            <?php if ( $interview_q04_txt ) : ?>
                                            <p class="section-txt"><?php echo nl2br( esc_html( $interview_q04_txt ) ); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </section>
                                    <?php endif; ?>

                                </div>

                                <?php if ( $interview_last_img ) : ?>
                                <p class="bottom-img animation-contents animation -animation01"><img src="<?php echo esc_attr( $interview_last_img_src ); ?>" width="<?php echo esc_attr( $interview_last_img_src ); ?>" height="<?php echo esc_attr( $interview_last_img_src ); ?>" alt=""></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <?php if ( $interview_message_img || $interview_message_copy || $interview_message_txt ) : ?>
                    <section id="interview-single-message">
                        <div class="inner">
                            <div class="inner-contents">
                                <div class="box animation-contents animation -animation01">
                                    <h3 class="box-ttl">
                                        <span class="sub">Message</span>
                                        <span class="main">学生の皆さんへ</span>
                                    </h3>
                                    <div class="box-contents">
                                        <?php if ( $interview_message_img ) : ?>
                                        <div class="box-block -img">
                                            <p class="box-img"><img src="<?php echo esc_attr( $interview_message_img_src ); ?>" width="<?php echo esc_attr( $interview_message_img_width ); ?>" height="<?php echo esc_attr( $interview_message_img_height ); ?>" alt=""></p>
                                        </div>
                                        <?php endif; ?>
                                        <div class="box-block -contents">
                                            <?php if ( $interview_message_copy ) : ?>
                                            <p class="box-copy"><?php echo nl2br( esc_html( $interview_message_copy ) ); ?></p>
                                            <?php endif; ?>
                                            <?php if ( $interview_message_txt ) : ?>
                                            <p class="box-txt"><?php echo nl2br( esc_html( $interview_message_txt ) ); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php endif; ?>

                </article>

                <?php
                $args = array(
                    'post_type'           => 'interview',
                    'posts_per_page'      => -1,
                    'order'               => 'DESC',
                    'post__not_in'        => array( $current_id ), // ← 今いるページを除外
                    'ignore_sticky_posts' => true,
                );
                $posts = get_posts( $args );
                if ( $posts ) :
                ?>
                <section id="other-interview" class="animation-contents animation -animation01">
                    <div class="inner">
                        <div class="inner-contents">
                            <h2 class="ttl -ttl01 -yel">
                                <span class="sub">Other interview</span>
                                <span class="main">他の社員を見る</span>
                            </h2>
                        </div>
                    </div>

                    <!-- people embla-->
                    <div class="people-embla-wrap">
                        <div class="people-embla">
                            <div class="embla__container">

                                <?php
                                foreach ( $posts as $post ) : setup_postdata( $post );
                                    $thumb_src = $thumb_width = $thumb_height = '';
                                    $thumb = get_field( 'interview_thumb', $post );
                                    if ( $thumb ) :
                                        $thumb_src    = $thumb['url'];
                                        $thumb_width  = $thumb['width'];
                                        $thumb_height = $thumb['height'];
                                    endif;
                                    $copy  = get_field( 'interview_copy', $post );
                                ?>
                                <div class="people-embla-slide">
                                    <a href="<?php the_permalink(); ?>">
                                        <p class="slide-img">
                                            <?php if ( $thumb ) : ?>
                                            <img src="<?php echo esc_attr( $thumb_src ); ?>" width="<?php echo esc_attr( $thumb_width ); ?>" height="<?php echo esc_attr( $thumb_height ); ?>" alt="">
                                            <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb-logo01.webp" width="800" height="1020" alt="">
                                            <?php endif; ?>
                                        </p>
                                        <div class="slide-contents">
                                            <?php if ( $copy ) : ?>
                                            <p class="slide-copy"><?php echo nl2br( esc_html( $copy ) ); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                </div>
                                <?php endforeach; ?>

                            </div>
                        </div>
                        <div class="people-embla-dots"></div>
                    </div>
                    <!-- /people embla-->

                </section>
                <?php endif; wp_reset_postdata(); ?>

                <?php get_template_part('parts-another-contents'); ?>

                <?php get_template_part('parts-recruit'); ?>

            </main>

        </div>

<?php get_footer(); ?>
