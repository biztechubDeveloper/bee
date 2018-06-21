<?php
/**
 * biztechub functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package biztechub
 */

if ( ! function_exists( 'biztechub_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function biztechub_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on biztechub, use a find and replace
		 * to change 'biztechub' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'biztechub', get_template_directory() . '/languages' );

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
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'biztechub' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Enable support for post formate
		 * See https://developer.wordpress.org/themes/functionality/post-formats/
		 */
		add_theme_support( 'post-formats', array(
			'gallery',
			
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'biztechub_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
        
	   // Services part
	   register_post_type('our-services', array(
        'labels'   => array(
			'name'  =>_x('Services','biztechub'),
			'add_new' => __('Added new Service', 'biztechub'),
			'add_new_item' => __('Added new Service', 'biztechub'),

		),
		'public'  => true,
		'menu_icon'   => 'dashicons-shield',
		'supports' => array('title', 'editor')
	   ));

	   //Testimonial part
	   
	   register_post_type('testi-monial', array(
        'labels'   => array(
			'name'  =>_x('Testimonial','biztechub'),
			'add_new' => __('Added new Testimonial', 'biztechub'),
			'add_new_item' => __('Added new Testimonial', 'biztechub'),

		),
		'public'  => true,
		'menu_icon'   => 'dashicons-testimonial',
		'supports' => array('title', 'editor','thumbnail')
	   ));
	// partner part
	register_post_type('partner-part', array(
        'labels'   => array(
			'name'  =>_x('Partner','biztechub'),
			'add_new' => __('Added new Partner', 'biztechub'),
			'add_new_item' => __('Added new Partner', 'biztechub'),

		),
		'public'  => true,
		'menu_icon'   => 'dashicons-testimonial',
		'supports' => array('title', 'editor','thumbnail')
	   ));
	}

endif;
add_action( 'after_setup_theme', 'biztechub_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function biztechub_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'biztechub_content_width', 640 );
}
add_action( 'after_setup_theme', 'biztechub_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function biztechub_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'biztechub' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'biztechub' ),
		'before_widget' => '<div class="input-group">',
		'after_widget'  => '</div>',
		'before_title'  => '</div><h5 class="card-header">',
		'after_title'   => '</h5><div class="card-body">',
	) );

	register_sidebar(array(
	'name'  => esc_html('Footer 1', 'biztechub'),
	'id'   => 'footer-1',
	'description' => esc_html__('Add widget here','biztechub'),
	'before_widget' => '<div class="widget-content">',
	'after_widget'  => '</div>',
	'before_title'  =>'<div class="widget-titles"><h5>',
	'after_title'   =>'</h5></div>'
	));

	register_sidebar(array(
		'name'  => esc_html('Footer 2', 'biztechub'),
		'id'   => 'footer-2',
		'description' => esc_html__('Add widget here','biztechub'),
		'before_widget' => '<div class="widget-content">',
		'after_widget'  => '</div>',
		'before_title'  =>'<div class="widget-titles"><h5>',
		'after_title'   =>'</h5></div>'
	));

	register_sidebar(array(
		'name'  => esc_html('Footer 3', 'biztechub'),
		'id'   => 'footer-3',
		'description' => esc_html__('Add widget here','biztechub'),
		'before_widget' => '<div class="widget-content">',
		'after_widget'  => '</div>',
		'before_title'  =>'<div class="widget-titles"><h5>',
		'after_title'   =>'</h5></div>'
	));
}
add_action( 'widgets_init', 'biztechub_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function biztechub_scripts() {
	wp_enqueue_style( 'biztechub-bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'biztechub-bootstrap-grid', get_template_directory_uri() . '/bootstrap/css/bootstrap-grid.min.css' );
	wp_enqueue_style( 'fontawsome', get_template_directory_uri() . '/fontawsome/css/fontawesome-all.min.css' );
	wp_enqueue_style( 'biztechub-style-css', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'biztechub-style', get_stylesheet_uri() );

	wp_enqueue_script( 'biztechub-bootstrapmin', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'biztechub-propet', get_template_directory_uri() . '/bootstrap/js/propet.min.js', array('jquery'), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'biztechub_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
require get_template_directory() . '/inc/customizer.php';

/**
* Implement the shortcodes
*/

require get_template_directory() . '/inc/shortcodes.php';

/**
 * Setting api Implement 
 */
 require get_template_directory() . '/inc/settingapi.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * comments file change
 */
add_filter('comment_form_default_fields', 'comet_comment_form');

function comet_comment_form( $default ){
	
	$default['author'] = '<div class="form-double">
                  <div class="form-group">
                    <input name="author" type="text" placeholder="Name" class="form-control">
                  </div>';

    $default['email'] = '<div class="form-group last">
                    <input name="email" type="text" placeholder="Email" class="form-control">
                  </div>
                </div>';

    $default['sujan'] = '<div class="form-group">
                  <textarea placeholder="Comment" class="form-control" name="comment"></textarea>
                </div>';

    $default['url'] = '';
    $default['cookies'] = '';


    

	return $default;

}


add_filter('comment_form_defaults', 'comet_default_comment_form');

function comet_default_comment_form( $default_info ){


	if( !is_user_logged_in() ){
		$default_info['comment_field'] = '';
	}else {
		$default_info['comment_field'] = '<div class="form-group">
                  <textarea placeholder="Comment" class="form-control" name="comment"></textarea>
                </div>';
	}
	

	$default_info['submit_button'] = '<button type="submit" class="btn btn-color-out">Post Comment</button>';

	$default_info['submit_field'] = '<div class="form-submit text-right">%1$s %2$s</div>';

	$default_info['comment_notes_before'] = '';

	$default_info['title_reply'] = 'leave a comment';

	$default_info['title_reply_before'] = '<h5 class="upper">';
	$default_info['title_reply_after'] = '</h5>';

	return $default_info;
}

/**
 * comment reply callback function
 */

 function biztechub_comment_style( $comment, $arg, $depth ){
	 $GLOBALS['comment'] = $comment;
	 ?>

     <div class="media mt-4">
                <?php echo get_avatar( $comment, 80, '','', array(
					'class' => 'd-flex mr-3 rounded-circle'
				)); ?>
                <div class="media-body">
                  <h5 class="mt-0"><?php echo get_comment_author( ); ?></h5>
				  <h6>post on <?php comment_date('d F'); ?>at <?php comment_time('g:i a'); ?></h6>
                  <p><?php comment_text(); ?></p>
				  <?php echo comment_reply_link(
                  array_merge($arg, array(
				   'depth'  => $depth,
				   'max_depth' => $arg['max_depth']
				  ))


				  ); ?>
                </div>
              </div>
			  
 <?php }
 /**
  * customizer api use for top header
  */
  function biztechub_custom_header($wp_customize){

	$wp_customize ->add_section('header_section', array(
		'title' =>__('Top Header Map','biztechub'),
		'priority' =>10
	));


	$wp_customize ->add_setting('header_map', array( //Map address
		'default'  => '<i class="fa fa-map-marker"></i> 9876 Canada THK, Greenlade, CA',
		'transport' =>'postMessage'
	));
	$wp_customize ->add_control('header_map',array(
		'section' => 'header_section',
		'label' =>__('writte your address','biztechub'),
		'type' => 'text'
	));

	$wp_customize ->add_setting('header_phon', array( //phone number
		'default'  => '<i class="fa fa-phone"></i> 123 456 7890',
		'transport' =>'postMessage'
	));
	$wp_customize ->add_control('header_phon',array(
		'section' => 'header_section',
		'label' =>__('writte your number','biztechub'),
		'type' => 'text'
	));

	$wp_customize ->add_setting('header_time', array( //open time
		'default'  => '<i class="fa fa-clock-o"></i> Mo-Fr 11:00-00:00, Sa-Sa 15:00-00:00',
		'transport' =>'postMessage'
	));
	$wp_customize ->add_control('header_time',array(
		'section' => 'header_section',
		'label' =>__('writte your open hour','biztechub'),
		'type' => 'text'
	));

	$wp_customize ->add_setting('header_fa', array( //facebook
		'default'  => '<a href="#"><i class="fab fa-facebook-f"></i></a>',
		'transport' =>'postMessage'
	));
	$wp_customize ->add_control('header_fa',array(
		'section' => 'header_section',
		'label' =>__('facebook link','biztechub'),
		'type' => 'text'
	));

	$wp_customize ->add_setting('header_tw', array( //twitter
		'default'  => '<a href="#"><i class="fab fa-twitter"></i></a>',
		'transport' =>'postMessage'
	));
	$wp_customize ->add_control('header_tw',array(
		'section' => 'header_section',
		'label' =>__('twitter link','biztechub'),
		'type' => 'text'
	));

	$wp_customize ->add_setting('header_linkedin', array( //linkedin
		'default'  => '<a href="#"><i class="fab fa-linkedin-in"></i></a>',
		'transport' =>'postMessage'
	));
	$wp_customize ->add_control('header_linkedin',array(
		'section' => 'header_section',
		'label' =>__('linkedin link','biztechub'),
		'type' => 'text'
	));

	$wp_customize ->add_setting('header_rss', array( //rss
		'default'  => '<a href="#"><i class="fas fa-rss"></i></a>',
		'transport' =>'postMessage'
	));
	$wp_customize ->add_control('header_rss',array(
		'section' => 'header_section',
		'label' =>__('rss link','biztechub'),
		'type' => 'text'
	));

	$wp_customize ->add_setting('header_pinterest', array( //pinterest
		'default'  => '<a href="#"><i class="fab fa-pinterest-p"></i></a>',
		'transport' =>'postMessage'
	));
	$wp_customize ->add_control('header_pinterest',array(
		'section' => 'header_section',
		'label' =>__('pinterest link','biztechub'),
		'type' => 'text'
	));

  }
add_action('customize_register','biztechub_custom_header');