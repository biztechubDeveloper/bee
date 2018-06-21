<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package biztechub
 */

?>
<div class="card mb-4">
 <?php the_post_thumbnail(); ?>
            <div class="card-body">
              <h2 class="card-title"><?php the_title(); ?></h2>
              <p class="card-text"><?php echo wp_trim_words( get_the_content(), 50, ' ' )?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php the_time('d F Y'); ?> by
              <a href="<?php echo site_url(); ?>/author/<?php the_author(); ?>"><?php the_author(); ?></a>
</div>
</div>
