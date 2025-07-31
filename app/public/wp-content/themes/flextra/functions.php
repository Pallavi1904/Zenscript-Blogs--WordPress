<?php
/**
 * Flextra functions and definitions
 *
 * @package Flextra
 */

if ( ! function_exists( 'flextra_setup' ) ) :
	function flextra_setup() {
		
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Post thumbnail support should be enabled for pages and posts.
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'flextra' ),
			'menu-2' => esc_html__( 'Footer', 'flextra' ),
		) );

		/*
		 * To produce valid HTML5, change the default core markup for the comments, search form, and search form.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'width'       => 270,
			'height'      => 80,
			'flex-height' => true,
			'flex-width'  => true,
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add custom image size.
		add_image_size( 'flextra-1920-550', 1920, 550, true );
		add_image_size( 'flextra-1370-550', 1370, 550, true );
		add_image_size( 'flextra-590-310', 590, 310, true );
		add_image_size( 'flextra-420-380', 420, 380, true );
		add_image_size( 'flextra-420-300', 420, 300, true );
		add_image_size( 'flextra-420-200', 420, 200, true );
		add_image_size( 'flextra-290-150', 290, 150, true );
		add_image_size( 'flextra-80-60', 80, 60, true );
		
		add_editor_style( array( '/assets/css/editor-style.min.css') );

		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'wp-block-styles' );
	}
endif;
add_action( 'after_setup_theme', 'flextra_setup' );

/**
 * Enqueue scripts and styles.
 */
function flextra_scripts() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );
	if ( is_rtl() ){
		wp_enqueue_style( 'bootstrap-rtl', get_template_directory_uri() . '/assets/bootstrap/css/rtl/bootstrap.min.css' );
	}
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.min.css' );
	wp_enqueue_style( 'flextra-blocks', get_template_directory_uri() . '/assets/css/blocks.min.css' );
	wp_enqueue_style( 'flextra-style', get_stylesheet_uri() );
	wp_enqueue_style( 'flextra-google-font', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800|Poppins:300,400,400i,500,600,700,800,900&display=swap', false );

	$scripts = array(
		array(
			'id'     => 'bootstrap',
			'url'    => get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js',
			'footer' => true
		),
		array(
			'id'     => 'flextra-custom',
			'url'    => get_template_directory_uri() . '/assets/js/custom.js',
			'footer' => true
		)
	);

	flextra_add_scripts( $scripts );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'flextra_scripts' );

/**
* Add script
* 
* @since Flextra 1.0.0
*/
function flextra_add_scripts( $scripts ){
	foreach ( $scripts as $key => $value ) {
		wp_enqueue_script( $value['id'] , $value['url'] , array( 'jquery', 'jquery-masonry' ), 0.8, $value['footer'] );
	}
}

/**
 * Sanitizes Image Upload.
 *
 * @param string $input potentially dangerous data.
 */
function flextra_sanitize_image( $input ) {
	$filetype = wp_check_filetype( $input );
	if ( $filetype['ext'] && wp_ext2type( $filetype['ext'] ) === 'image' ) {
		return esc_url( $input );
	}
	return '';
}

/**
* Flextra: Excerpt
*
* @since Flextra 1.0.0
*/
if( ! class_exists( 'Flextra_Excerpt' ) ):

class Flextra_Excerpt{

    /**
    * Default length (by WordPress)
    *
    * @since Flextra 1.0.0
    * @access public
    * @var int
    */
    public $length = 15;

    /**
    * Read more Text for excerpt
    * @since Flextra 1.0.0
    * @access public
    * @var string
    */
    public $more_text = '';

    /**
    * So you can call: Flextra_Excerpt( 'short' );
    *
    * @since Flextra 1.0.0
    * @access protected
    * @var    array
    */
    protected $types = array(
        'short'   => 15,
        'regular' => 25,
        'long'    => 55
    );

    /**
    * Stores class instance
    * 
    * @since Flextra 1.0.0
    * @access protected
    * @var    object
    */
    protected static $instance = NULL;

    /**
    * Retrives the instance of this class
    * 
    * @since Flextra 1.0.0
    * @access public
    * @return object
    */
    public static function get_instance() {

        if ( ! self::$instance ) {
          self::$instance = new self();
        }

        return self::$instance;
    }

    /**
    * Sets the length for the excerpt,then it adds the WP filter
    * And automatically calls the_excerpt();
    *
    * @since Flextra 1.0.0
    * @param string $new_length 
    * @access public
    * @return void
    */
    public function excerpt( $echo, $more_text, $new_length = 15 ) {

        $this->length    = $new_length;
        $this->more_text = $more_text;
        if(!is_admin()):
            add_filter( 'excerpt_more', array( $this, 'new_excerpt_more' ), 999 );
            add_filter( 'excerpt_length', array( $this, 'new_length' ), 999 );
        endif;

        if( $echo )
          the_excerpt();
        else
          return get_the_excerpt();

    }

    public function new_excerpt_more(){
        return $this->more_text;
    }

    /** 
    * Tells WP the new length
    *
    * @since Flextra 1.0.0
    * @access public
    * @return int
    */
    public function new_length() {

        if( isset( $this->types[ $this->length ] ) )
          return $this->types[ $this->length ];
        else
          return $this->length;
    }
}

endif;

/**
* Call to Flextra_Excerpt
*
* @since  1.0.0
* @uses   Flextra_Excerpt:::get_instance()->excerpt()
* @param  int $length
* @return void
*/
if( ! function_exists( 'Flextra_Excerpt' ) ):

    function Flextra_Excerpt( $length = 15, $echo = true, $more = '' ) {
        $length  = apply_filters( 'post_excerpt_length', $length );
        $excerpt = Flextra_Excerpt::get_instance()->excerpt( false, $more, $length );
        
        the_excerpt();
    }
endif;

/**
* Enqueue editor styles for Gutenberg
* 
* @since Flextra 1.0.0
*/
function flextra_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'flextra-block-editor-style', get_theme_file_uri( '/assets/css/editor-blocks.min.css' ) );
	// Google Font
	wp_enqueue_style( 'flextra-google-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700,700i', false );
}
add_action( 'enqueue_block_editor_assets', 'flextra_block_editor_styles' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Dynamic CSS.
 */
require get_template_directory() . '/inc/customizer/loader.php';