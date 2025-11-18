<?php get_header(); ?>

        <div id="contents">

            <div class="page-ttl -page-ttl02 animation-contents">
                <div class="inner">
                    <div class="inner-contents">
                        <h1 class="ttl animation -animation01 -l">
                            <span class="sub">News</span>
                            <span class="main">お知らせ</span>
                        </h1>
                        <div class="breadcrumbs -breadcrumbs01">
                            <ol class="breadcrumbs-list">
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-home01.svg" width="20" height="20" alt=""></a></li>
                                <li>お知らせ</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <main>

                <div id="news-archive">
                    <div class="inner">
                        <div class="inner-contents">

                            <?php $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; ?>
                            <?php
                            $query = new WP_Query(
                                array(
                                    'post_type'      => 'news',
                                    'posts_per_page' => 10,
                                    'orderby'        => 'date',
                                    'order'          => 'DESC',
                                    'paged'          => $paged
                                )
                            );
                            ?>
                            <?php if ( $query->have_posts() ) : ?>
                            <ul class="list">
                                <?php
                                while ( $query->have_posts() ) :
                                $query->the_post();
                                ?>
                                <li>
                                    <article class="article">
                                        <a href="<?php the_permalink(); ?>">
                                            <p class="article-date"><?php echo get_the_date('Y.m.d'); ?></p>
                                            <h3 class="article-ttl"><?php echo esc_html( get_the_title() ); ?></h3>
                                        </a>
                                    </article>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                            <div class="pagination -pagination01">
                                <div class="pagination-contents">
                                    <?php //ページリスト表示処理
                                    global $wp_rewrite;
                                    $paginate_base = get_pagenum_link(1);
                                    if( strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks() ) {
                                        $paginate_format = '';
                                        $paginate_base = add_query_arg('paged','%#%');
                                    } else {
                                        $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
                                        user_trailingslashit('page/%#%/','paged');
                                        $paginate_base .= '%_%';
                                    }
                                    echo paginate_links(array(
                                        'base' => $paginate_base,
                                        'format' => $paginate_format,
                                        'total' => $query->max_num_pages, //変数に合わせる
                                        'mid_size' => 1,
                                        'current' => ($paged ? $paged : 1),
                                        'prev_text' => '&lt;',
                                        'next_text' => '&gt;',
                                    )); ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </main>

        </div>

<?php get_footer(); ?>
