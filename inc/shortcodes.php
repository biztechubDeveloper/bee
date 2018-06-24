<?php
/**
 * Template part for displaying slider and home page content by using shortcode
 *
 * @link https://codex.wordpress.org/Shortcode_API/
 *
 * @package biztechub
 */

?>
<?php 

add_shortcode( 'home-slider', 'biz_home_slider' );

/**
 * functions for home slider
 */

 function biz_home_slider($attr, $content){
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
  * About us and video part shortcode
  */

  add_shortcode( 'about-us', 'about_video_part');

  /**
   * About and Video part shortcode
   */
function about_video_part($attr, $content){
 ob_start(); ?>
   <section> 
    <div class="container"> 
    <div class="row">

     <div class="col-md-6"> 
        <div class="heading-title"> 
          <h1>hi</h1>
          <hr class="line">
        </div>
        <p class="aboutpara">hello</p>
     </div>
     <div class="col-md-6"> 
        <div class="video"> 
            <iframe width="100%" height="313" src="<?php $veCo = get_option('biz-home-slider'); 
               echo $veCo['video-content']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
        </div>
     </div>
     
    </div>
    </div>
 <hr>
   </section>
<?php
$aboutVideo = ob_get_clean();

return $aboutVideo;

}


/**
 * Sevices us 
 */

 add_shortcode('services', 'services_section');

 // services function

 function services_section(){
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
  * Our testminial part
  */

  add_shortcode( 'test-mo', 'testi_monial');

  // testi monial part

  function testi_monial(){
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
 * our partner pa
 */

add_shortcode( 'our-partner', 'our_partners');

// testi monial part

function our_partners(){
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
