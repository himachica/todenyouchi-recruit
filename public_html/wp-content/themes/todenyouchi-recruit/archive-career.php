<?php get_header(); ?>

        <div id="contents">

            <div class="page-ttl -page-ttl02 animation-contents">
                <div class="inner">
                    <div class="inner-contents">
                        <h1 class="ttl animation -animation01 -l">
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
                            <?php
                            $args = array(
                                'post_type'      => 'career',
                                'posts_per_page' => -1,
                                'order'          => 'DESC'
                            );
                            $posts = get_posts( $args );
                            if ( $posts ) :
                            ?>
                            <nav class="nav">
                                <ul class="nav-list">
                                    <?php
                                    foreach ( $posts as $post ) : setup_postdata( $post );
                                        $career_contents   = get_field( 'career_contents', $post );
                                    ?>
                                    <li>
                                        <section class="nav-section">
                                            <a href="<?php the_permalink(); ?>">
                                                <h3 class="nav-ttl"><?php the_title(); ?></h3>
                                                <p class="nav-txt"><?php echo nl2br( esc_html( $career_contents ) ); ?></p>
                                            </a>
                                        </section>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </nav>
                            <?php endif; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>

            </main>

        </div>

<?php get_footer(); ?>
