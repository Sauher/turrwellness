

<!-- index.php -->
<?php get_header(); ?>

<main id="main">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) :
      echo '<div class="bejegyzes">';
      the_post();
      the_title( '<h1>', '</h1>' );
      the_content();
      echo'</div>';
    endwhile;
  else :
    echo '<p>No content found</p>';
  endif;
  ?>
</main>

<?php get_footer(); ?>