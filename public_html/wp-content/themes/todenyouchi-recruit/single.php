<?php get_header(); ?>

<?php
$title = get_the_title();
// 20文字以上なら末尾に「…」を追加
if ( mb_strlen( $title ) > 20 ) {
    $title = mb_substr( $title, 0, 20 ) . '…';
}
?>

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
                                <li><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">お知らせ</a></li>
                                <li><?php echo esc_html( $title ); ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <main>

                <div id="news-single">
                    <div class="inner">
                        <div class="inner-contents">
                            <article class="news-single-article">
                                <p class="article-date"><?php echo esc_html( get_the_date('Y.m.d') ); ?></p>
                                <h2 class="article-ttl"><?php echo esc_html( get_the_title() ); ?></h2>
                                <div class="article -article01">
                                    <?php echo the_content(); ?>
                                </div>
                                <p class="btn -btn03 -l -border"><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">お知らせ一覧をみる</a></p>
                            </article>
                        </div>
                    </div>
                </div>

            </main>

        </div>

<?php get_footer(); ?>
