<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
	
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() .'/assets/styles/materialize.min.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() .'/menuoverlay.css';?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/assets/styles/tablesort/style.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() .'/style.css';?>">
	
	<script src="<?php echo get_template_directory_uri() .'/assets/scripts/vendor/list.js'; ?>"></script>
	<script src="<?php echo get_template_directory_uri() .'/assets/scripts/vendor/list.fuzzysearch.min.js'; ?>"></script>
		
	
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
			
        <?php
          do_action('get_header');
          get_template_part('templates/header');
        ?>
        <?php
		if(!is_search()) {
          do_action('get_slider');
          get_template_part('templates/slider');
		}
        ?>
		<main>
									<div class="container row">
            <?php
						if (Config\display_sidebar()) :
										$col = 'col s12 m8 pull-m4';
           else :
              $col = 'col s12';
           endif;
            ?>			
										
            <?php if (Config\display_sidebar()) : ?>
              <aside class="col s12 m4 push-m8">
                <?php include Wrapper\sidebar_path(); ?>
              </aside><!-- sidebar -->
            <?php endif; ?>
										
            <div class="<?php echo $col; ?>">
              <?php include Wrapper\template_path(); ?>
            </div>
          </div>
          
					
					
										
				<!-- Social -->		
<?php global $meta_general; ?>
<?php $g = $meta_general; ?>
					<?php if(!empty($g["social_arr"])) { ?>
	<blockquote class="container row valign-wrapper">
	<h2>Stay Connected</h2>
		
<?php foreach($g["social_arr"] as $social) { ?>
	<a href="http://<?php echo $social["social_link"];?>" target="_blank">
		<i class="col s6 m2 fa fa-<?php echo $social["social_type"];?> fa-fw fa-2x "></i>
	</a>
<?php } ?>
		
	</blockquote>
		
		 <?php }	?>
					
					
							<!-- SMA -->						
					<?php if(get_field('sma_feed')) { ?>
<div class="container row">
	<?php if(is_front_page()){ ?>
	<div class="col s12"><h2>The Latest From Our Retailers</h2></div><?php } ?>
	
<div class="col s12" style="padding:0px!important;">
<?php echo do_shortcode('[get_sma]'); ?>
</div>
					</div>
		 <?php }	?>
		<div class="divider row"></div>
		</main>		
			<?php
            do_action('get_footer');
            get_template_part('templates/footer');
          ?>
		<!-- Wordpress Admin Bar -->
				<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.6/hammer.min.js"></script>
<script src="<?php echo get_template_directory_uri() .'/dist/scripts/jquery.fullscreen-min.js';?>"></script>
<script src="<?php echo get_template_directory_uri() .'/assets/svg-pan-zoom-master/dist/svg-pan-zoom.min.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri() .'/assets/scripts/vendor/materialize.min.js';?>"></script>
		<script src="<?php echo get_template_directory_uri() .'/classie.js'; ?>"></script>
		
<script src="<?php echo get_template_directory_uri() .'/staticjs.js'; ?>"></script>
  </body>
</html>
