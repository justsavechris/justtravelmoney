<?php
/**
 * Template Name: Contact Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content-page', 'contact'); ?>
<?php endwhile; ?>
