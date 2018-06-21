<?php
/**
 * Setting api use
 * @link https://codex.wordpress.org/Settings_API
 *
 * @package biztechub
 */
?>
<?php 

add_action('admin_init','theme_options_setting');

function theme_options_setting(){
     register_setting('settings-slider-id','biz-home-slider');

    add_settings_section('slider-section', 'Slider Heading text', 'section_home_slider','home-slider');

    add_settings_field( 'slider-text', 'Heading text', 'biz_home_sliders','home-slider','slider-section');


    add_settings_field( 'slider-head', 'Heading content', 'biz_home_text','home-slider','slider-section');

 /**
 * add about us and video 
 */

 add_settings_section( 'about-us', 'About Us Heading', 'about_us_heading', 'home-slider' );

 add_settings_field( 'about-heading', 'About title', 'about_title_heading', 'home-slider', 'about-us');

 add_settings_field( 'about-content', 'About content', 'about_content', 'home-slider', 'about-us');

 add_settings_field( 'video-content', 'Video content', 'video_content', 'home-slider', 'about-us');



}



function section_home_slider(){

 echo "<p>Home slider</p>";
}

function biz_home_sliders(){
    $homSliders = get_option('biz-home-slider');
    $sliderCon = isset( $homSliders['slider-text']) ? $homSliders['slider-text'] : '';
    ?>
    <input type="text" class="regular-text" value="<?php echo $sliderCon; ?>" name="biz-home-slider[slider-text]">
    <?php
}


function biz_home_text(){
    $homSliders = get_option('biz-home-slider');
    $sliderCon = isset($homSliders['slider-head']) ? $homSliders['slider-head'] : '';
    ?>
    <input type="text" value="<?php echo $sliderCon; ?>" class="regular-text" name="biz-home-slider[slider-head]">
    <?php
}

/**
 * about us section callback function
 */
function about_us_heading(){
echo "<p>About us heading</p>";
}
// About us Heading function

function about_title_heading(){
    $aboutUsHeading = get_option('biz-home-slider');
    $aboutUsH= isset($aboutUsHeading['about-heading']) ? $aboutUsHeading['about-heading'] : '';
 ?>
 <input type="text" class="regular-text" name="biz-home-slider[about-heading]" value="<?php echo $aboutUsH; ?>" >
 <?php
}

// About content part

function about_content(){
    $aboutConte = get_option('biz-home-slider');
    $about= isset($aboutConte['about-content']) ? $aboutConte['about-content'] : '';
    ?>
    <textarea name="biz-home-slider[about-content]" cols="60" rows="10"><?php echo $about; ?></textarea>
    <?php
}

// Video content 

function video_content(){
    $videoConte = get_option('biz-home-slider');
    $video = isset( $videoConte['video-content']) ?  $videoConte['video-content'] : '';
    ?>
    <input type="text" class="regular-text" name="biz-home-slider[video-content]" value="<?php echo $video; ?>">

    <?php
}



add_action( 'admin_menu', 'options_api_page');


function options_api_page(){

    add_theme_page( 'Theme Options', 'Themes options', 'manage_options', 'home-slider', 'home_slider_output' );
}

function home_slider_output(){
    ?>
   <div class="wrap"> 
     <h1>Theme Options</h1>
     <?php settings_errors(); ?>
   <form method="POST" action="options.php"> 
   <?php

   settings_fields('settings-slider-id');

   do_settings_sections('home-slider');

    submit_button(); 

    ?>
   </form>
   </div>

<?php }
