<?php get_header(); ?>

        <div id="contents">

            <div class="page-ttl -page-ttl01">
                <div class="page-ttl-inner">
                    <h1 class="ttl">
                        <span class="sub">Work</span>
                        <span class="main">仕事を知る</span>
                    </h1>
                    <div class="breadcrumbs -breadcrumbs01">
                        <ol class="breadcrumbs-list">
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-home01.svg" width="20" height="20" alt=""></a></li>
                            <li>仕事を知る</li>
                        </ol>
                    </div>
                </div>
                <p class="page-ttl-img">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/work/ttl-img01-sp.webp" width="780" height="360" media="(max-width: 768px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/ttl-img01.webp" width="2880" height="640" alt="">
                    </picture>
                </p>
            </div>

            <main>

                <?php
                $args = array(
                    'post_type'      => 'careerstory',
                    'posts_per_page' => -1,
                    'order'          => 'DESC'
                );
                $posts = get_posts( $args );
                if ( $posts ) :
                ?>
                <div id="careerstory-archive">
                    <div class="inner">
                        <div class="inner-contents">
                            <h2 class="ttl -ttl01">
                                <span class="sub">Career Story</span>
                                <span class="main">キャリアストーリー</span>
                            </h2>
                            <ul class="list">
                                <?php
                                foreach ( $posts as $post ) : setup_postdata( $post );
                                    $careerstory_archive_img_src = $careerstory_archive_img_width = $careerstory_archive_img_height = '';
                                    $careerstory_archive_img_sp_src = $careerstory_archive_img_sp_width = $careerstory_archive_img_sp_height = '';
                                    $index                      = get_order_index_in_cpt( get_the_ID() );
                                    $careerstory_archive_img    = get_field( 'careerstory_archive_img', $post );
                                    if ( $careerstory_archive_img ) :
                                        $careerstory_archive_img_src    = $careerstory_archive_img['url'];
                                        $careerstory_archive_img_width  = $careerstory_archive_img['width'];
                                        $careerstory_archive_img_height = $careerstory_archive_img['height'];
                                    endif;
                                    $careerstory_archive_img_sp = get_field( 'careerstory_archive_img_sp', $post );
                                    if ( $careerstory_archive_img_sp ) :
                                        $careerstory_archive_img_sp_src    = $careerstory_archive_img_sp['url'];
                                        $careerstory_archive_img_sp_width  = $careerstory_archive_img_sp['width'];
                                        $careerstory_archive_img_sp_height = $careerstory_archive_img_sp['height'];
                                    endif;
                                    $careerstory_archive_copy   = get_field( 'careerstory_archive_copy', $post );
                                ?>
                                <li>
                                    <article class="article">
                                        <a href="<?php the_permalink(); ?>">
                                            <p class="article-img">
                                                <?php if ( $careerstory_archive_img_src && $careerstory_archive_img_sp_src ) : ?>
                                                <picture>
                                                    <source srcset="<?php echo esc_attr( $careerstory_archive_img_sp_src ); ?>" width="<?php echo esc_attr( $careerstory_archive_img_sp_width ); ?>" height="<?php echo esc_attr( $careerstory_archive_img_sp_height ); ?>" media="(max-width: 768px)">
                                                    <img src="<?php echo esc_attr( $careerstory_archive_img_src ); ?>" width="<?php echo esc_attr( $careerstory_archive_img_width ); ?>" height="<?php echo esc_attr( $careerstory_archive_img_height ); ?>" alt="">
                                                </picture>
                                                <?php elseif ( $careerstory_archive_img_src ) : ?>
                                                <img src="<?php echo esc_attr( $careerstory_archive_img_src ); ?>" width="<?php echo esc_attr( $careerstory_archive_img_width ); ?>" height="<?php echo esc_attr( $careerstory_archive_img_height ); ?>" alt="">
                                                <?php elseif ( $careerstory_archive_img_sp_src ) : ?>
                                                <img src="<?php echo esc_attr( $careerstory_archive_img_sp_src ); ?>" width="<?php echo esc_attr( $careerstory_archive_img_sp_width ); ?>" height="<?php echo esc_attr( $careerstory_archive_img_sp_height ); ?>" alt="">
                                                <?php endif; ?>
                                            </p>
                                            <div class="article-contents">
                                                <p class="article-number">Career Story.<?php printf('%02d', $index); ?></p>
                                                <?php if ( $careerstory_archive_copy ) : ?>
                                                <h3 class="article-ttl"><?php echo nl2br( esc_html( $careerstory_archive_copy ) ); ?></h3>
                                                <?php endif; ?>
                                                <p class="btn -btn03"><span>もっと見る</span></p>
                                            </div>
                                        </a>
                                    </article>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endif; wp_reset_postdata(); ?>

                <?php get_template_part('parts-recruit'); ?>

            </main>

        </div>

<?php get_footer(); ?>
