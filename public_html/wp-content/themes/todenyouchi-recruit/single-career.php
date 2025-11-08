<?php get_header(); ?>

<?php
$career_type        = get_field( 'career_type', $post );
$career_personnel   = get_field( 'career_personnel', $post );
$career_contents    = get_field( 'career_contents', $post );

$requirements_group = SCF::get( 'requirements_group' );
?>

        <div id="contents">

            <div class="page-ttl -page-ttl02 animation-contents">
                <div class="inner">
                    <div class="inner-contents">
                        <h1 class="ttl animation -animation01 -l">
                            <span class="sub">Career</span>
                            <span class="main"><?php the_title(); ?></span>
                        </h1>
                        <div class="breadcrumbs -breadcrumbs01">
                            <ol class="breadcrumbs-list">
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-home01.svg" width="20" height="20" alt=""></a></li>
                                <li><a href="<?php echo esc_url( home_url( '/recruitment/' ) ); ?>">採用情報</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/recruitment/career/' ) ); ?>">キャリア採用</a></li>
                                <li><?php the_title(); ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <main>

                <div id="recruitment-page">
                    <div class="inner">
                        <div class="inner-contents">
                            <div class="layout">
                                <div class="block -sub">
                                    <nav class="nav">
                                        <p class="nav-head">INDEX</p>
                                        <ul class="nav-list">
                                            <li class="-current"><a href="#requirements">募集要項</a></li>
                                            <li><a href="#hawto">応募方法</a></li>
                                            <li><a href="#flow">選考フロー</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="block -main">
                                    <div class="section-wrap">

                                        <section id="requirements" class="section">
                                            <h2 class="section-ttl">募集要項</h2>
                                            <div class="section-contents">
                                                <div class="section-tbl">
                                                    <dl class="section-tbl-item">
                                                        <dt>募集職種</dt>
                                                        <dd><?php the_title(); ?></dd>
                                                    </dl>
                                                    <?php if ( $career_type ) : ?>
                                                    <dl class="section-tbl-item">
                                                        <dt>雇用形態</dt>
                                                        <dd><?php echo nl2br( esc_html( $career_type ) ); ?></dd>
                                                    </dl>
                                                    <?php endif; ?>
                                                    <?php if ( $career_personnel ) : ?>
                                                    <dl class="section-tbl-item">
                                                        <dt>募集人員</dt>
                                                        <dd><?php echo nl2br( esc_html( $career_personnel ) ); ?></dd>
                                                    </dl>
                                                    <?php endif; ?>
                                                    <?php if ( $career_contents ) : ?>
                                                    <dl class="section-tbl-item">
                                                        <dt>業務内容</dt>
                                                        <dd><?php echo nl2br( esc_html( $career_contents ) ); ?></dd>
                                                    </dl>
                                                    <?php endif; ?>
                                                    <?php if ( $requirements_group[0]['requirements_group_ttl'] || $requirements_group[0]['requirements_group_txt'] ) : ?>
                                                    <?php
                                                    foreach ( $requirements_group as $fields ) {
                                                        $requirements_group_ttl = $fields['requirements_group_ttl'];
                                                        $requirements_group_txt = $fields['requirements_group_txt'];
                                                    ?>
                                                    <dl class="section-tbl-item">
                                                        <dt><?php if ( $requirements_group_ttl ) : ?><?php echo esc_html( $requirements_group_ttl ); ?><?php endif; ?></dt>
                                                        <dd><?php if ( $requirements_group_txt ) : ?><?php echo nl2br( esc_html( $requirements_group_txt ) ); ?><?php endif; ?></dd>
                                                    </dl>
                                                    <?php } ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </section>

                                        <section id="hawto" class="section">
                                            <h2 class="section-ttl">応募方法</h2>
                                            <div class="section-contents">
                                                <div class="section-tbl">
                                                    <dl class="section-tbl-item">
                                                        <dt>応募方法</dt>
                                                        <dd>募集情報は、以下の就活サイトにてご案内しております。<br>マイナビ</dd>
                                                    </dl>
                                                    <dl class="section-tbl-item">
                                                        <dt>提出書類</dt>
                                                        <dd>履歴書（写真添付）<br>卒業見込証明書<br>成績証明書</dd>
                                                    </dl>
                                                    <dl class="section-tbl-item">
                                                        <dt>お問い合わせ先</dt>
                                                        <dd>〒116－0013<br>東京都荒川区西日暮里2－25－1<br>ステーションガーデンタワー5F<br>東電用地(株)人材開発グループ　採用担当<br><br><br>TEL：03－6371－1108<br>受付時間9：00～17：00（土日祝を除く）<br><script type="text/javascript">
                                                        <!--
                                                        function converter(M){
                                                        var str="", str_as="";
                                                        for(var i=0;i<M.length;i++){
                                                        str_as = M.charCodeAt(i);
                                                        str += String.fromCharCode(str_as + 1);
                                                        }
                                                        return str;
                                                        }
                                                        var ad = converter(String.fromCharCode(114,96,104,120,110,116,63,115,100,111)+String.fromCharCode(98,110,44,120,110,116,98,103,104,45,98,110,45,105,111));
                                                        document.write("<a href=\"mai"+"lto:"+ad+"\">"+ad+"<\/a>");
                                                        //-->
                                                        </script>
                                                        <noscript>（画像などを設置）</noscript>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </section>

                                        <section id="flow" class="section">
                                            <h2 class="section-ttl">選考フロー</h2>
                                            <div class="section-contents">
                                                <div class="section-flow">
                                                    <ol class="section-flow-list">
                                                        <li>マイナビより<br class="dsp-pc">エントリー</li>
                                                        <li>会社説明会<br class="dsp-pc">（対面/WEB）</li>
                                                        <li>一次選考<br class="dsp-pc">面接・適性検査</li>
                                                        <li>二次面接<br class="dsp-pc">（個別）</li>
                                                        <li>最終選考</li>
                                                        <li>内定</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php get_template_part('parts-recruit'); ?>

            </main>

        </div>

<?php get_footer(); ?>
