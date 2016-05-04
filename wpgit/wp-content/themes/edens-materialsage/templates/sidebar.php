<?php
if( is_page()){ ?>
	<?php get_template_part('templates/sidebar',$post->post_name);
	//GET POST TYPE SIDEBAR
	
} elseif( get_template_part('templates/sidebar',get_post_type()) ){
	//GET POST TYPE SIDEBAR
	
}?>
