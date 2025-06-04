<?php get_header(); ?>

<main class="single-article">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
    
      <article <?php post_class(); ?>>
        <div class="focim">
        <h1><?php the_title(); ?></h1>
          <span>Published on <?php echo get_the_date(); ?> by <?php the_author(); ?></span>
          </div>
        <div class="kontent">
        <div class="post-content">
          <?php the_content(); ?>
        </div>
        </div>


      </article>

    <?php endwhile;
  else :
    echo '<p>Sorry, no content found.</p>';
  endif;
  ?>
</main>

<?php get_footer(); ?>
