

<!-- index.php -->
<?php get_header(); ?>

<main id="main">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) :
      the_post();
      echo '<div class="bejegyzes">';
      echo '<h1><a href="' . esc_url( get_permalink() ) . '">';
      the_title();
      echo '</a></h1>';
      the_content();
      echo '</div>';
    endwhile;
  else :
    echo '<p>No content found</p>';
  endif;
  ?>
</main>

<?php get_footer(); ?>