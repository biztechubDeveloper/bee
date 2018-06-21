<h1 class="mt-4"><?php the_title(); ?></h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#"><?php the_author(); ?></a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>

          <hr>

          <!-- Preview Image -->
          <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid rounded')); ?>

          <hr>

          <!-- Post Content -->
          

      <p class="lead"><?php the_content(); ?></p>

          
         

          <hr>

          <!-- Comments Form -->
          