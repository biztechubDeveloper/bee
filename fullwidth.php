<?php
/**
 * Template Name: Full Width Page
 *
 * @package biztechub
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 * 
 */
               get_header();
?>

<section>
          <?php  while( have_posts() ) : the_post(); ?>

           <?php the_content();  ?>

           <?php endwhile;  ?>

          <!-- Pagination -->

 </section>

<?php get_footer(); ?>