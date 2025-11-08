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
                                <li><a href="<?php echo esc_url( home_url( '/entry/' ) ); ?>">応募フォーム</a></li>
                                <li>応募完了</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <main>

                <div id="thanks-page">
                    <div class="inner">
                        <div class="inner-contents">
                            <h2 class="ttl">
                                <span class="sub">Thank you</span>
                                <span class="main">応募完了しました</span>
                            </h2>
                            <p class="txt">このたびはご応募いただき、<br class="dsp-sp">誠にありがとうございます。<br>ご入力いただいた内容を確認のうえ、<br class="dsp-sp">担当者より改めてご連絡いたします。<br>内容によってはお返事までに数日いただく場合がございますので、あらかじめご了承ください。</p>
                            <p class="btn -btn04"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップに戻る</a></p>
                        </div>
                    </div>
                </div>

            </main>

        </div>

<?php get_footer(); ?>
