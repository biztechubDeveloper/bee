<?php get_header(); ?>
<div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
       <?php  while ( have_posts() ) : the_post(); ?>

     <p class="lead"><?php get_template_part( 'template-parts/post/content', get_post_format() ); ?></p>

   <?php   the_post_navigation(); ?>
   <hr>
     <?php // If comments are open or we have at least one comment, load up the comment template.
      

    endwhile;
         comments_template();
 
    ?>
   

        </div>

        <!-- Sidebar Widgets Column -->
       <?php get_sidebar(); ?>
      <!-- /.row -->

    </div>
<?php get_footer(); ?>