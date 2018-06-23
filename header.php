<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package biztechub
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="top">
    <div class="container">
      <div class="row">
            <div class="col-md-9 col-sm-6">
            <ul class="list-inline top-link link">
                <li><?php echo get_theme_mod( 'header_map'); ?></li>
                <li><?php echo get_theme_mod( 'header_phon'); ?></li>
                <li><?php echo get_theme_mod( 'header_time'); ?></li>
            </ul>
            </div>
            <div class="col-md-3 col-sm-6">
            <ul class="list-inline top-social">
                <li><?php echo get_theme_mod( 'header_fa'); ?></li>
                <li><?php echo get_theme_mod( 'header_tw'); ?></li>
                <li><?php echo get_theme_mod( 'header_linkedin'); ?></li>
                <li><?php echo get_theme_mod( 'header_rss'); ?></li>
                <li><?php echo get_theme_mod( 'header_pinterest'); ?></li>
            </ul>
            </div>
      </div>
    </div>
  </div>
  <!-- top information -->
  <!-- header menu -->

   <div class="container-fluid header-menu"> 
        <div class="row"> 
             <div class="col-md-5"> 
                <div class="logo-image"> 
                   <a href="<?php home_url(); ?>"><img src="<?php echo get_theme_mod('logo_image'); ?>" alt=""></a>
                </div>
                    
            </div>
            <div class="col-md-7"> 
              <div class="main-menu"> 
              <?php
			      wp_nav_menu( array(
				  'theme_location' => 'menu-1',
			) );
			?> 
              </div>
            </div>

        </div>

   </div>