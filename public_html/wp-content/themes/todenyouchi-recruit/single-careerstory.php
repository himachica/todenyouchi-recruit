<?php get_header(); ?>

<?php
$index                    = get_order_index_in_cpt( get_the_ID() );

$careerstory_img          = get_field( 'careerstory_img' );
if ( $careerstory_img ) :
    $careerstory_img_src    = $careerstory_img['url'];
    $careerstory_img_width  = $careerstory_img['width'];
    $careerstory_img_height = $careerstory_img['height'];
endif;
$careerstory_img_sp       = get_field( 'careerstory_img_sp' );
if ( $careerstory_img_sp ) :
    $careerstory_img_sp_src    = $careerstory_img_sp['url'];
    $careerstory_img_sp_width  = $careerstory_img_sp['width'];
    $careerstory_img_sp_height = $careerstory_img_sp['height'];
endif;
$careerstory_year         = get_field( 'careerstory_year' );
$careerstory_position     = get_field( 'careerstory_position' );
$careerstory_copy         = get_field( 'careerstory_copy' );

$careerstory_group        = SCF::get( 'careerstory_group' );

$careerstory_message_copy = get_field( 'careerstory_message_copy' );
$careerstory_message_txt  = get_field( 'careerstory_message_txt' );
?>

        <div id="contents">

            <div class="page-ttl -page-ttl02">
                <div class="inner">
                    <div class="inner-contents">
                        <h1 class="ttl">
                            <span class="sub">Career Story</span>
                            <span class="main">キャリアストーリー</span>
                        </h1>
                        <div class="breadcrumbs -breadcrumbs01">
                            <ol class="breadcrumbs-list">
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-home01.svg" width="20" height="20" alt=""></a></li>
                                <li><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>">仕事を知る</a></li>
                                <li>キャリアストーリー <?php printf('%02d', $index); ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <main>

                <article id="careerstory-single">

                    <div id="careerstory-single-head">
                        <div class="inner">
                            <div class="inner-contents">
                                <div class="head">
                                    <p class="head-img">
                                        <?php if ( $careerstory_img_src && $careerstory_img_sp_src ) : ?>
                                        <picture>
                                            <source srcset="<?php echo esc_attr( $careerstory_img_sp_src ); ?>" width="<?php echo esc_attr( $careerstory_img_sp_width ); ?>" height="<?php echo esc_attr( $careerstory_img_sp_height ); ?>" media="(max-width: 768px)">
                                            <img src="<?php echo esc_attr( $careerstory_img_src ); ?>" width="<?php echo esc_attr( $careerstory_img_width ); ?>" height="<?php echo esc_attr( $careerstory_img_height ); ?>" alt="">
                                        </picture>
                                        <?php elseif ( $careerstory_img_src ) : ?>
                                        <img src="<?php echo esc_attr( $careerstory_img_src ); ?>" width="<?php echo esc_attr( $careerstory_img_width ); ?>" height="<?php echo esc_attr( $careerstory_img_height ); ?>" alt="">
                                        <?php elseif ( $careerstory_img_sp_src ) : ?>
                                        <img src="<?php echo esc_attr( $careerstory_img_sp_src ); ?>" width="<?php echo esc_attr( $careerstory_img_sp_width ); ?>" height="<?php echo esc_attr( $careerstory_img_sp_height ); ?>" alt="">
                                        <?php endif; ?>
                                    </p>
                                    <div class="head-info">
                                        <?php if ( $careerstory_year ) : ?>
                                        <p class="head-year"><?php echo esc_html( $careerstory_year ); ?>年入社</p>
                                        <?php endif; ?>
                                        <p class="head-name"><?php the_title(); ?></p>
                                        <?php if ( $careerstory_position ) : ?>
                                        <p class="head-position"><?php echo nl2br( esc_html( $careerstory_position ) ); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="contents">
                                    <p class="contents-tag"><span>Career Story.<?php printf('%02d', $index); ?></span></p>
                                    <?php if ( $careerstory_copy ) : ?>
                                    <h2 class="contents-ttl"><?php echo nl2br( esc_html( $careerstory_copy ) ); ?></h2>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if ( $careerstory_group[0]['careerstory_group_year'] || $careerstory_group[0]['careerstory_group_copy'] || $careerstory_group[0]['careerstory_group_txt'] || $careerstory_group[0]['careerstory_group_img'] ) : ?>
                    <div id="careerstory-single-career">
                        <div class="inner">
                            <div class="inner-contents">
                                <ol class="list">
                                    <?php
                                    foreach ( $careerstory_group as $fields ) {
                                        $careerstory_group_img = $careerstory_group_img_src = $careerstory_group_img_width = $careerstory_group_img_height = '';
                                        $careerstory_group_year = $fields['careerstory_group_year'];
                                        $careerstory_group_copy = $fields['careerstory_group_copy'];
                                        $careerstory_group_txt  = $fields['careerstory_group_txt'];
                                        $careerstory_group_img  = $fields['careerstory_group_img'];
                                        if ( $careerstory_group_img ) :
                                            $careerstory_group_img = wp_get_attachment_image_src( $careerstory_group_img, 'large' );
                                            $careerstory_group_img_src    = $careerstory_group_img[0];
                                            $careerstory_group_img_width  = $careerstory_group_img[1];
                                            $careerstory_group_img_height = $careerstory_group_img[2];
                                        endif;
                                    ?>
                                    <li>
                                        <section class="list-section">
                                            <div class="list-section-block -contents">
                                                <?php if ( $careerstory_group_year ) : ?>
                                                <h3 class="list-ttl"><span><?php echo esc_html( $careerstory_group_year ); ?>年目</span></h3>
                                                <?php endif; ?>
                                                <?php if ( $careerstory_group_copy ) : ?>
                                                <p class="list-copy"><?php echo nl2br( esc_html( $careerstory_group_copy ) ); ?></p>
                                                <?php endif; ?>
                                                <?php if ( $careerstory_group_txt ) : ?>
                                                <p class="list-txt"><?php echo nl2br( esc_html( $careerstory_group_txt ) ); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="list-section-block -img">
                                                <?php if ( $careerstory_group_img_src ) : ?>
                                                <p class="list-img"><img src="<?php echo esc_attr( $careerstory_group_img_src ); ?>" width="<?php echo esc_attr( $careerstory_group_img_width ); ?>" height="<?php echo esc_attr( $careerstory_group_img_height ); ?>" alt=""></p>
                                                <?php endif; ?>
                                            </div>
                                        </section>
                                    </li>
                                    <?php } ?>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if ( $careerstory_message_copy || $careerstory_message_txt ) : ?>
                    <section id="careerstory-single-message">
                        <div class="inner">
                            <div class="inner-contents">
                                <div class="box">
                                    <h3 class="box-ttl">
                                        <span class="sub">Message</span>
                                        <span class="main">学生の皆さんへ</span>
                                    </h3>
                                    <div class="box-contents">
                                        <?php if ( $careerstory_message_copy ) : ?>
                                        <p class="box-copy"><?php echo nl2br( esc_html( $careerstory_message_copy ) ); ?></p>
                                        <?php endif; ?>
                                        <?php if ( $careerstory_message_txt ) : ?>
                                        <p class="box-txt"><?php echo nl2br( esc_html( $careerstory_message_txt ) ); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php endif; ?>

                </article>

                <?php get_template_part('parts-another-contents'); ?>

                <?php get_template_part('parts-recruit'); ?>

            </main>

        </div>

<?php get_footer(); ?>
