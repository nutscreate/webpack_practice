<?php
add_action('init', function() {
add_theme_support('post-thumbnails');

//外観にメニュー追加
register_nav_menus([
  'global_nav' => 'グローバルナビゲーション',
  'kv_nav' => 'キービジュアルナビゲーション',
  'footer_nav' => 'フッターナビゲーション',
  'footer_nav-fixed' => '固定フッターナビゲーション',
  'gallery-cat_nav' => 'ギャラリーカテゴリーメニュー',
  'hamburger_nav' => 'ハンバーガーメニュー'
]);
});



//　①　liの「CSS class (オプション)」と余計なコードの削除するコード
add_filter( 'nav_menu_css_class', 'remove_to_currentClass', 10, 2 );
function remove_to_currentClass( $classes, $item ) {
$classes = array();
$classes[] = 'p-nav__item';
if( $item -> current == true ) {
$classes[] = 'p-nav__current';
}
if( !empty( $custom_class ) ){
$classes[] = $custom_class;
}
return $classes;
}

//　②　前述したaタグに「CSS class (オプション)」を反映するコード
add_filter('walker_nav_menu_start_el', 'add_class_on_link', 10, 4);
function add_class_on_link($item_output, $item){
//var_dump($item->classes[0]);
$css_class = esc_attr($item->classes[0]);
if ($css_class) {
return preg_replace('/(<a.*?)/', '$1' . " class='" . $css_class . "'", $item_output);
}else{
return $item_output;
}
}
// ナビゲーションに自動で入るIDを削除
add_filter('nav_menu_item_id', 'removeId', 10);
function removeId( $id ){
return $id = array();
}




//子ページに条件分岐させる
function is_parent_slug() {
  global $post;
  if ($post->post_parent) {
      $post_data = get_post($post->post_parent);
      return $post_data->post_name;
  }
}

//メディアライブラリからwebpをアップ
function add_file_types_to_uploads( $mimes ) {
  $mimes['webp'] = 'image/webp';
  return $mimes;
}
add_filter( 'upload_mimes', 'add_file_types_to_uploads' );


// スライドショー追加
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
  'page_title' 	=> 'スライドショー',
  'menu_title'	=> 'スライドショー',
  'menu_slug' 	=> 'theme-options',
  'capability'	=> 'edit_posts',
  'parent_slug'	=> '',
  'position'	=> false,
  'redirect'	=> false,
  ));

  }





  function add_my_files() {
    //WordPress 本体の jQuery を登録解除
    wp_deregister_script( 'jquery');
    //jQuery を CDN から読み込む
    wp_enqueue_script( 'jquery',
      '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
      array(),
      '3.5.1',
      true
    );
    wp_enqueue_script( 'lightbox2',
    '//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js',
    array(),
    '2.11.3',
    true
     );

     wp_enqueue_script(
      'main-script',
      get_theme_file_uri( '/dist/js/main.js' ),
      array( 'jquery' ),
      filemtime( get_theme_file_path( '/dist/js/main.js' ) ),
      true
    );
    //スタイルシートの読み込み
     wp_enqueue_style(
      'main-style',
      get_theme_file_uri( '/dist/css/main.css' ),
      array(),
      filemtime( get_theme_file_path( '/dist/css/main.css' ) )
    );
  }
  add_action('wp_enqueue_scripts', 'add_my_files');


//固定ページの抜粋を表示
add_post_type_support( 'page', 'excerpt' );

//画像に自動設定されるsrcset属性を無効化
add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );



?>
