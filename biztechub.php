<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              #
 * @since             1.0.0
 * @package           Biztechub
 *
 * @wordpress-plugin
 * Plugin Name:       Biztch 
 * Plugin URI:        #
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            biztechub
 * Author URI:        #
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       biztechub
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );
/**
 * Class make short code
 */
Class BztchShort{
		public function __construct(){

			add_action('init', array($this,'biz_ourservices'));

			add_action('init', array($this,'biz_aboutus'));
			add_action('init', array($this, 'biz_partnerpart'));
			
			add_shortcode( 'home-slider', array($this, 'biz_home_slider'));

			add_shortcode('about-us', array($this,'biz_about_video_part'));

			add_shortcode('services', array($this, 'biz_services_section'));

			add_shortcode('test-mo', array($this, 'biz_testi_monial'));

			add_shortcode('our-partner', array($this, 'biz_our_partners'));

		}
		// our services custom post type
		public function biz_ourservices(){
			   // Services part
			   register_post_type('our-services', array(
				'labels'   => array(
					'name'  =>__('Services','biztechub'),
					'add_new' => __('Added new Service', 'biztechub'),
					'add_new_item' => __('Added new Service', 'biztechub'),
		
				),
				'public'  => true,
				'menu_icon'   => 'dashicons-shield',
				'supports' => array('title', 'editor')
		     ));
		}
		/**
		 * About us part
		 */
		public function biz_aboutus(){
			   //Testimonial part
	   
			   register_post_type('about-us', array(
				'labels'   => array(
					'name'  =>__('About us','biztechub'),
					'add_new' => __('Added new About', 'biztechub'),
					'add_new_item' => __('Added new About', 'biztechub'),
		
				),
				'public'  => true,
				'menu_icon'   => 'dashicons-testimonial',
				'supports' => array('title', 'editor')
			   ));
		}
		/**
		 * Partner part
		 */

		 public function biz_partnerpart(){
						// partner part
			register_post_type('partner-part', array(
				'labels'   => array(
					'name'  =>__('Partner','biztechub'),
					'add_new' => __('Added new Partner', 'biztechub'),
					'add_new_item' => __('Added new Partner', 'biztechub'),

				),
				'public'  => true,
				'menu_icon'   => 'dashicons-testimonial',
				'supports' => array('title','thumbnail')
			));
		}


      /**
	   * slider part
	   */
		public function biz_home_slider(){
			ob_start(); ?>
		<section>
		<div class="container-fluid background-image">
			<div class="row">
			<div class="col-md-12"> 
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="center"> 
				<div class="carousel-item active">
				
				<div class="degination"> 
				<h3><?php echo get_theme_mod( 'sliderheadingOne'); ?></h3>
				<i><?php echo get_theme_mod( 'slidersubtitle'); ?></i>
				</div>
				</div>

				<div class="carousel-item">
				
				<div class="degination"> 
				<h3><?php echo get_theme_mod( 'sliderheadingtwo'); ?></h3>
				<i><?php echo get_theme_mod( 'sliderthree'); ?></i>
				</div>
				</div>

				<div class="carousel-item">
				
				<div class="degination"> 
				<h3><?php echo get_theme_mod( 'sliderfour'); ?></h3>
				<i><?php echo get_theme_mod( 'sliderfive'); ?></i>
				</div>
				</div>
			
			

			</div>
			</div>
			</div>  
		
			</div>
		</div>
	</div>
	<hr>
	</section>

	<?php 

	$bizvalue = ob_get_clean();

	return $bizvalue;


	}
/**
 * video short code
 */
	public function biz_about_video_part(){
		ob_start(); ?>
		<section> 
		 <div class="container"> 
		 <?php 
		   $aboutUs = new WP_Query(array(
			 'post_type' => 'about-us',
			 'posts_per_page' => 1
		   ));
		   while($aboutUs -> have_posts()) : $aboutUs->the_post(); ?>
		 <div class="row">
	 
		  <div class="col-md-6"> 
			 <div class="heading-title"> 
			   <h1><?php the_title(); ?></h1>
			   <hr class="line">
			 </div>
			 <p class="aboutpara"><?php the_content(); ?></p>
		  </div>
		  <div class="col-md-6"> 
			 <div class="video"> 
			 <iframe width="100%" height="313" src="<?php echo get_post_meta(get_the_ID(),'video-part',true); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
			 </div>
		  </div>
		  
		 </div>
	   <?php endwhile; ?>
		 </div>
	  <hr>
		</section>
	 <?php
	 $aboutVideo = ob_get_clean();
	 
	 return $aboutVideo;
	}
	/**
	 * services section
	 */
	public function biz_services_section(){

		ob_start(); ?>

		<section> 
			<div class="container"> 
			<div class="heading-title"> 
				<h1>SERVICES US</h1>
				<hr class="line">
				</div>
			<div class="row">
		<?php $services = new WP_Query(array(
			'post_type'  => 'our-services',
			'posts_per_page' =>6


		)); ?>
			<?php while($services -> have_posts() ) : $services -> the_post(); ?>
			<div class="col-md-4"> 
				<div class="font"> 
				<i class="<?php echo get_post_meta(get_the_ID(),'iconclass',true); ?>"></i>
				</div>
				<h6 class="ser-title"><?php the_title(); ?></h6>
				<p class="ser-para"><?php the_content(); ?></p>
			</div>
			<?php endwhile; ?>

			</div>
			</div>
		<hr>
		</section>



		<?php
		$servicesPart = ob_get_clean();

		return $servicesPart;
	}
	/**
	 * tesimonial part make
	 * 
	 */
	public function biz_testi_monial(){

		ob_start(); 
    ?>
   
   <section>
     <div class="container-fluid background-image">
        <div class="row">
        <div class="col-md-12"> 
          <div class="test-title"> 
          <h1>Our client say</h1>
          <hr class="line">
        </div>
  
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="center"> 
            <div class="carousel-item active">
            <img class="d-block w-100 imgcircale" class="img-responsive center-block" src="<?php echo get_theme_mod('image1'); ?>" alt="">
           
              <div class="degination"> 
               <h6><?php echo get_theme_mod( 'test-text'); ?></h6>
               <i><?php echo get_theme_mod( 'test-text2'); ?></i>
              </div>
            </div>

            <div class="carousel-item">
            <img class="d-block w-100 imgcircale" class="img-responsive center-block" src="<?php echo get_theme_mod('image2'); ?>" alt="">
              <div class="degination"> 
              <h6><?php echo get_theme_mod( 'test-text3'); ?></h6>
               <i><?php echo get_theme_mod( 'test-text4'); ?></i>
              </div>
            </div>

            <div class="carousel-item">
            <img class="d-block w-100 imgcircale" class="img-responsive center-block" src="<?php echo get_theme_mod('image3'); ?>" alt="">
              <div class="degination"> 
              <h6><?php echo get_theme_mod( 'test-text5'); ?></h6>
               <i><?php echo get_theme_mod( 'test-text6'); ?></i>
              </div>
            </div>
           
          

          </div>
        </div>
        </div>  
       
         </div>
    </div>
 </div>
 <hr >
   </section>
 <?php  
  $testiMonial = ob_get_clean();
  
  return $testiMonial;
	}
 /**
  * Our partner
  */
  public function biz_our_partners(){
	ob_start(); 
	?>
   
   <section>
   <div class="container-fluid">
		  <div class="row">
		  <div class="col-md-12"> 
			<div class="heading-title"> 
			<h1>our partnet</h1>
			<hr class="line">
		  </div>
  
		   </div>
			 </div>
	  </div>
  
	  <div class="container-fluid">
	   <div class="row"> 
  <?php $ourPartner = new WP_Query(array(
  'post_type' =>'partner-part',
  'posts_per_page' =>4
  ));
  
  while($ourPartner -> have_posts()) : $ourPartner->the_post();
  ?>
	   <div class="col-md-3"> 
		<div class="partner-image"> 
		<a href="<?php echo esc_url(get_post_meta(get_the_ID(),'biztechlink',true)); ?>"><?php the_post_thumbnail('thumbnail', array('class' =>'imgcircales')); ?></a>
		 <div class="part-wr"> 
		  <i><?php the_title(); ?></i>
		</div>
	   </div>
	   </div>
  <?php endwhile; ?>
  
	   </div>
  
  
		 <!-- start -->
	</div>
		 
  
   <hr class="bootam">
	 </section>
  <?php  
  $ourtner = ob_get_clean();
  
  return $ourtner;
  }



}

$bztchShrt = new BztchShort();
