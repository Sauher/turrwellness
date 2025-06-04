<?php get_header(); ?>

<main id="main" class="page-content">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
      <article <?php post_class(); ?>>
        <h1><?php the_title(); ?></h1>
        <div class="page-body">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile;
  else :
    echo '<p>No page found</p>';
  endif;
  ?>
</main>

<?php get_footer(); ?>