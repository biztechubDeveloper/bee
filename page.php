<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package biztechub
 */

get_header();
?>

   <!-- end header  -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4"><?php the_title(); ?>
          </h1>

          <!-- Blog Post -->
          
          

          <?php  while( have_posts() ) : the_post(); ?>

           <?php the_content();  ?>

           <?php endwhile;  ?>

        
         

     

          <!-- Pagination -->

        
        

        </div>

        <!-- Sidebar Widgets Column -->
        <?php get_sidebar(); ?>
    <!-- /.container -->

  <?php get_footer(); ?>