<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'search'); ?>
<?php endwhile; ?>
<?php
global $wp_query;

$big = 999999999; // need an unlikely integer

$paginate = paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'type'	=> 'array',
	'total' => $wp_query->max_num_pages
) );
?>
<?php if(!empty($paginate)) { ?>
  <ul class="pagination">
<?php foreach( $paginate as $p ) { ?>
	<li class="waves-effect"><?php echo $p;?></li>
<?php } ?>
		</ul>
<?php } ?>