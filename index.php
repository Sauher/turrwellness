

<!-- index.php -->
<?php get_header(); ?>

<main id="main">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      the_title( '<h1>', '</h1>' );
      the_content();
      wp_get_attachment_image( $attachment_id, $size, $icon );
    endwhile;
  else :
    echo '<p>No content found</p>';
  endif;
  ?>
</main>

<?php get_footer(); ?>