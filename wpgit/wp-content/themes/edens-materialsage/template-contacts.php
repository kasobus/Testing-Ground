<?php
/**
 * Template Name: Contact
 */
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<h3>Our Address</h3>
<a href="https://goo.gl/maps/q9zSV8ZusGQ2" target="_blank">2400 Preston Rd Plano, Texas 75093</a>
<h3>Leasing Contact</h3>
Contact <a href="mailto:mhale@edens.com" target="_blank">Michael Hale</a>
214.691.2303
