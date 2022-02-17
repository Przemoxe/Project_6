<?php
require_once get_template_directory() . '/include/customizer.php';


class Theme {
  public function __construct() {
    add_action('wp_enqueue_scripts', array($this, 'add_scripts'));
    add_action('acf/init', array($this, 'acf_blocks_register'));
    add_theme_support( 'menus' );
    add_filter('upload_mimes', array($this, 'cc_mime_types'));
  }

  function add_scripts() {

    wp_enqueue_style('botstrapCSS', get_theme_file_uri('/include/bootstrap-5.1.1-dist/css/bootstrap.min.css'));
    wp_enqueue_style('style_main', get_theme_file_uri('/assets/all.min.css'));
    wp_enqueue_script('bootstrapJS', get_theme_file_uri('/include/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('js', get_theme_file_uri('/assets/all.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/include/OwlCarousel/dist/owl.carousel.min.js', array( 'jquery' ), false);
    wp_enqueue_script('owlcarousel-startJS', get_theme_file_uri('/js/owl-carousel.js'),array('jquery'), 1.0, true);    
    wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyDKv_54hHxOq9jqnMALiCZd5f_FN7Banm4&callback', array( 'jquery' ), 1.0, true);   
    wp_enqueue_style('owl-css', get_bloginfo('template_url') . '/include/OwlCarousel/dist/assets/owl.carousel.css', array(), '1.0');

  }
  function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
   }

  function acf_blocks_register()
  {
      acf_register_block_type(array(
          'name' => 'video',
          'title' => __('Video Section'),
          'description' => __('Section with video in background'),
          'category' => 'formatting',
          'icon' => 'admin-comments',
          'keywords' => array('video'),
          'supports' => array(
              'align' => true,
              'mode' => true,
              '__experimental_jsx' => true,
          ),
          'render_template'   =>  'templates/blocks/video.php',
      ));

      acf_register_block_type(array(
        'name' => 'text',
        'title' => __('Custom texts'),
        'description' => __('Section with custom texts'),
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => array('text'),
        'supports' => array(
            'align' => true,
            'mode' => true,
            '__experimental_jsx' => true,
        ),
        'render_template'   =>  'templates/blocks/texts.php',
    ));

    acf_register_block_type(array(
      'name' => 'separator',
      'title' => __('Custom separator'),
      'description' => __('Section with custom separator'),
      'category' => 'formatting',
      'icon' => 'admin-comments',
      'keywords' => array('separator'),
      'supports' => array(
          'align' => true,
          'mode' => true,
          '__experimental_jsx' => true,
      ),
      'render_template'   =>  'templates/blocks/separator.php',
  ));

  
  acf_register_block_type(array(
    'name' => 'title',
    'title' => __('Custom title'),
    'description' => __('Section with custom title'),
    'category' => 'formatting',
    'icon' => 'admin-comments',
    'keywords' => array('title'),
    'supports' => array(
        'align' => true,
        'mode' => true,
        '__experimental_jsx' => true,
    ),
    'render_template'   =>  'templates/blocks/title.php',
));

acf_register_block_type(array(
  'name' => 'image',
  'title' => __('Custom image'),
  'description' => __('Section with custom image'),
  'category' => 'formatting',
  'icon' => 'admin-comments',
  'keywords' => array('image'),
  'supports' => array(
      'align' => true,
      'mode' => true,
      '__experimental_jsx' => true,
  ),
  'render_template'   =>  'templates/blocks/image.php',
));


acf_register_block_type(array(
  'name' => 'twoimages',
  'title' => __('Custom two images'),
  'description' => __('Section with custom two images'),
  'category' => 'formatting',
  'icon' => 'admin-comments',
  'keywords' => array('twoimages'),
  'supports' => array(
      'align' => true,
      'mode' => true,
      '__experimental_jsx' => true,
  ),
  'render_template'   =>  'templates/blocks/twoimages.php',
));

acf_register_block_type(array(
  'name' => 'about',
  'title' => __('About section'),
  'description' => __('Section for about section'),
  'category' => 'formatting',
  'icon' => 'admin-comments',
  'keywords' => array('about'),
  'supports' => array(
      'align' => true,
      'mode' => true,
      '__experimental_jsx' => true,
  ),
  'render_template'   =>  'templates/blocks/about.php',
));
acf_register_block_type(array(
  'name' => 'google-maps',
  'title' => __('Google-maps section'),
  'description' => __('Section for google-maps section'),
  'category' => 'formatting',
  'icon' => 'admin-comments',
  'keywords' => array('google-maps'),
  'supports' => array(
      'align' => true,
      'mode' => true,
      '__experimental_jsx' => true,
  ),
  'render_template'   =>  'templates/blocks/googleMaps.php',
));
}
}
$theme = new Theme();

function my_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyDKv_54hHxOq9jqnMALiCZd5f_FN7Banm4';
	return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');