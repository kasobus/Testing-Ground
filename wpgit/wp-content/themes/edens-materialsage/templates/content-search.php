<article class="section" <?php post_class(); ?>>
  <header>
    <h4 style="text-transform:uppercase"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <?php if (get_post_type() === 'retailer') { get_template_part('templates/entry-meta-general'); } ?>
  </header>
	<?php if(get_the_terms($post,'retailer_locations')) { ?>
	<span class="location"><?php echo get_the_terms($post,'retailer_locations')[0]->name;?></span>
	<?php } ?>
	<?php echo get_field('about'); ?>
</article>
