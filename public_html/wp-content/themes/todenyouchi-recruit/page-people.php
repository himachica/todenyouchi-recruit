<?php get_header(); ?>

        <div id="contents">

            <div class="page-ttl -page-ttl01 animation-contents">
                <div class="page-ttl-inner">
                    <h1 class="ttl animation -animation01 -l">
                        <span class="sub">People</span>
                        <span class="main">⼈を知る</span>
                    </h1>
                    <div class="breadcrumbs -breadcrumbs01">
                        <ol class="breadcrumbs-list">
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-home01.svg" width="20" height="20" alt=""></a></li>
                            <li>⼈を知る</li>
                        </ol>
                    </div>
                </div>
                <p class="page-ttl-img animation -animation03">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/people/ttl-img01-sp.webp" width="780" height="360" media="(max-width: 768px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people/ttl-img01.webp" width="2880" height="640" alt="">
                    </picture>
                </p>
            </div>

            <main>

                <?php
                $args = array(
                    'post_type'      => 'interview',
                    'posts_per_page' => -1,
                    'order'          => 'DESC'
                );
                $posts = get_posts( $args );
                if ( $posts ) :
                ?>
                <section id="interview-archive">
                    <div class="inner">
                        <div class="inner-contents animation-contents animation -animation01">
                            <h2 class="ttl -ttl01 -yel">
                                <span class="sub">Staff Interview</span>
                                <span class="main">インタビュー</span>
                            </h2>
                            <p class="txt -txt02">先輩たちの仕事内容や、仕事の「やりがい」、働く魅力、1日のスケジュールまで<br>――各地で活躍する先輩社員たちを紹介します！</p>
                            <ul class="list">

                                <?php
                                foreach ( $posts as $post ) : setup_postdata( $post );
                                    $thumb_src = $thumb_width = $thumb_height = '';
                                    $thumb    = get_field( 'interview_thumb', $post );
                                    if ( $thumb ) :
                                        $thumb_src    = $thumb['url'];
                                        $thumb_width  = $thumb['width'];
                                        $thumb_height = $thumb['height'];
                                    endif;
                                    $copy     = get_field( 'interview_copy', $post );
                                    $year     = get_field( 'interview_year', $post );
                                    $position = get_field( 'interview_position', $post );
                                ?>
                                <li>
                                    <article class="article">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="article-head">
                                                <p class="article-img">
                                                    <?php if ( $thumb ) : ?>
                                                    <img src="<?php echo esc_attr( $thumb_src ); ?>" width="<?php echo esc_attr( $thumb_width ); ?>" height="<?php echo esc_attr( $thumb_height ); ?>" alt="">
                                                    <?php else : ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb-logo01.webp" width="800" height="1020" alt="">
                                                    <?php endif; ?>
                                                </p>
                                                <div class="article-contents">
                                                    <?php if ( $copy ) : ?>
                                                    <h3 class="article-copy"><?php echo nl2br( esc_html( $copy ) ); ?></h3>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="article-info">
                                                <?php if ( $year ) : ?>
                                                <p class="article-year"><?php echo esc_html( $year ); ?>年入社</p>
                                                <?php endif; ?>
                                                <p class="article-name"><?php the_title(); ?></p>
                                                <?php if ( $position ) : ?>
                                                <p class="article-position"><?php echo nl2br( esc_html( $position ) ); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </a>
                                    </article>
                                </li>
                                <?php endforeach; ?>

                            </ul>
                        </div>
                    </div>
                </section>
                <?php endif; wp_reset_postdata(); ?>

                <?php get_template_part('parts-another-contents'); ?>

                <?php get_template_part('parts-recruit'); ?>

            </main>

        </div>

<?php get_footer(); ?>
