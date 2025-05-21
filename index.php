/*
Theme Name: Turr Wellness
Theme URI: http://example.com/
Author: Törr Wellness Team
Author URI: http://example.com/
Description: A basic custom WordPress theme starter.
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: custom-theme
*/

<!-- index.php -->
<?php get_header(); ?>

<main id="main">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      the_title( '<h1>', '</h1>' );
      the_content();
    endwhile;
  else :
    echo '<p>No content found</p>';
  endif;
  ?>
</main>

<?php get_footer(); ?>