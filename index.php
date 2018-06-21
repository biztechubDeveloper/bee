<?php get_header(); ?>
   <!-- end header  -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
          </h1>

          <!-- Blog Post -->
          
            <?php if( have_posts() ) : ?>

          <?php  while( have_posts() ) : the_post(); ?>

           <?php get_template_part('template-parts/content', get_post_format()); ?>

           <?php endwhile;  ?>

            <?php else: ?>

            <h1>No Post found</h1>
            
             <?php endif; ?>
         

     

          <!-- Pagination -->

          <?php the_posts_pagination( array(
         'mid_size' => 1,
         'prev_text' =>'New',
         'next_text' =>'old',
         'screen_reader_text' => ' ',
         
          ) ); ?>
        

        </div>

        <!-- Sidebar Widgets Column -->
        <?php get_sidebar(); ?>
    <!-- /.container -->

  <?php get_footer(); ?>