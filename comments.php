<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package biztechub
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
?>
<div class="card my-4">
            <h5 class="card-header"><?php comments_number(); ?></h5>
            </div>
<?php wp_list_comments(array(
  'callback'  => 'biztechub_comment_style'
));
paginate_comments_links();
?>

<?php comment_form(); ?>