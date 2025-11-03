<?php


/** -----------------------------------------------------------
 * 投稿にサムネイルを追加
 * -----------------------------------------------------------*/
//add_theme_support( 'post-thumbnails', array( 'post' ) );


/** -----------------------------------------------------------
 * 固定ページのカスタムテンプレートのファイル命名規則に親属性を加える
 *
 * 例:  page-親__子.php でそのテンプレートを優先して使用する
 * 　   page-親__子__孫.php でも同様
 * -----------------------------------------------------------*/
add_filter('page_template_hierarchy', 'my_page_templates');
function my_page_templates($templates) {
    if ( !is_home() && !is_front_page() ) :
        global $wp_query;
        $template = get_page_template_slug();
        $pagename = $wp_query->query['pagename'];
        if ($pagename && ! $template) {
            $pagename = str_replace('/', '__', $pagename);
            $decoded = urldecode($pagename);
            if ($decoded == $pagename) {
                array_unshift($templates, "page-{$pagename}.php");
            }
        }
    endif;
    return $templates;
}


/** -----------------------------------------------------------
 * プラグインの自動更新を無効に設定
 * -----------------------------------------------------------*/
add_filter( 'auto_update_plugin', '__return_false' );


/** -----------------------------------------------------------
 * 固定ページをクラシックエディターに変更
 * -----------------------------------------------------------*/
add_filter( 'use_block_editor_for_post_type', 'hide_block_editor', 10, 10 );
function hide_block_editor( $use_block_editor, $post_type ) {
  if ( $post_type === 'page' || $post_type === 'interview' ) return false;
  return $use_block_editor;
}


/** -----------------------------------------------------------
 * 固定ページのエディターを非表示
 * -----------------------------------------------------------*/
function post_output_css() {
    $pt = get_post_type();
    if ($pt == 'page') {
        $hide_postdiv_css = '<style type="text/css">#postdiv, #postdivrich { display: none; }</style>';
        echo $hide_postdiv_css;
    }
}
add_action('admin_head', 'post_output_css');


/** -----------------------------------------------------------
 * 特定の固定ページをダッシュボードに表示
 * -----------------------------------------------------------*/
add_action( 'admin_menu', function() {
    //add_menu_page( 'トップページ', 'トップページ', 'read', 'post.php?post=78&action=edit', '', 'dashicons-admin-page', 5 );
} );


/** -----------------------------------------------------------
 * ページの表示回数をカウント
 * -----------------------------------------------------------*/
//記事のアクセス数を表示
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0 View";
    }
    return $count.' Views';
}
//記事のアクセス数を保存
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
    }else{
            $count++;
            update_post_meta($postID, $count_key, $count);
    }
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


/** -----------------------------------------------------------
 * 投稿のアーカイブページを作成
 * -----------------------------------------------------------*/
// function post_has_archive( $args, $post_type ) {
//     if ( 'post' === $post_type ) {
//         $args['rewrite']     = true;
//         $args['has_archive'] = 'news';
//     }
//     return $args;
// }
// add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


// function add_article_post_permalink( $permalink ) {
//     $permalink = '/news' . $permalink;
//     return $permalink;
// }
// add_filter( 'pre_post_link', 'add_article_post_permalink' );


// function add_article_post_rewrite_rules( $post_rewrite ) {
//     $return_rule = array();
//     foreach ( $post_rewrite as $regex => $rewrite ) {
//         $return_rule[ 'news/' . $regex ] = $rewrite;
//     }
//     return $return_rule;
// }
// add_filter( 'post_rewrite_rules', 'add_article_post_rewrite_rules' );


/** -----------------------------------------------------------
 * 記事一覧ページの2ページ目以降を作成
 * -----------------------------------------------------------*/
// function change_pre_get_posts($query){
//   if(!is_admin() && $query->is_main_query()){
//     if( is_post_type_archive( 'post' ) || is_category() || is_post_type_archive( 'project' ) ){
//       $query->set('posts_per_page', 1);
//     }
//   }
// }
// add_action('pre_get_posts', 'change_pre_get_posts');


/** -----------------------------------------------------------
 * @param string $page_title ページのtitle属性値
 * @param string $menu_title 管理画面のメニューに表示するタイトル
 * @param string $capability メニューを操作できる権限（manage_options とか）
 * @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 * -----------------------------------------------------------*/
//SCF::add_options_page( 'ピックアップマガジン', 'ピックアップマガジン', 'manage_options', 'option-pickup-magazine', 'dashicons-pressthis', 5 );


/** -----------------------------------------------------------
 * 親ページを判定するコードを追加
 * -----------------------------------------------------------*/
function is_parent_slug() {
    global $post;
    if ($post->post_parent) {
        $post_data = get_post($post->post_parent);
        return $post_data->post_name;
    }
}


?>
