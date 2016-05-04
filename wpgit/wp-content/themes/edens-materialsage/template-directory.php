<?php
/**
 * Template Name: Units Directory
 */
?>
<?php 
use Roots\Sage\Extras;?>


<?php while (have_posts()) : the_post(); ?>
<!-- Hiding content on content-page -->
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>


<?php //Get Locations
$locations = get_terms( 'retailer_locations', $location_args );
		$location_args= array(
    'hide_empty' => 1
);

//Get all retailer categories
$categories = get_terms( 'retailer_category', $cat_args );
		$cat_args= array(
    'hide_empty' => 1
); ?>

	<?php $display_options = array();?>
		<?php // Grab taxonomy to locations to display.
if(get_field('retailer_loc')) $display_options["locations"] = get_field('retailer_loc'); ?>

			<?php // Grab cateogories taxonomy to display.
if(get_field('retailer_cats')) $display_options["categories"] = get_field('retailer_cats'); ?>

				<?php $filter_options = array();?>
					<?php // Grab cateogories taxonomy to display.
if(get_field('retailer_cats_filter')) $filter_options["categories"] = get_field('retailer_cats_filter'); ?>


						<?php //Get Retailers by location
if(!empty($display_options["locations"])) {
		foreach($display_options["locations"] as $location) {
		$arr_key = get_cat_name( $location );
    $r_args = array( 'post_type' => 'retailer','post_status' => 'publish', 'posts_per_page' => -1,'orderby' => 'title', 'order' => 'ASC',
									'tax_query' => array( array( 
									'taxonomy' => 'retailer_locations',
									'field'    => 'id',
									'terms' => $location
        ), array( 
            'taxonomy' => 'retailer_category',
            'field' => 'id',
            'terms' => $display_options["categories"],
        )));
    $retailers[$arr_key] = get_posts( $r_args );
		}
}
//OR Get all retailers
else {
	 $r_args = array( 'post_type' => 'retailer','post_status' => 'publish', 'posts_per_page' => -1,'orderby' => 'title', 'order' => 'ASC',
									'tax_query' => array(
										array( 
            'taxonomy' => 'retailer_locations',
            'field' => 'id',
            'terms' => $display_options["locations"],
        ),array( 
            'taxonomy' => 'retailer_category',
            'field' => 'id',
            'terms' => $display_options["categories"],
        ))
										);
    $retailers[0] = get_posts( $r_args );
}?>


<?php //Get all retailers
	 $all_r_args = array( 'post_type' => 'retailer','post_status' => 'publish', 'posts_per_page' => -1,'orderby' => 'title', 'order' => 'ASC','tax_query' => array(
										array( 
            'taxonomy' => 'retailer_locations',
            'field' => 'id',
            'terms' => $display_options["locations"],
        ),array( 
            'taxonomy' => 'retailer_category',
            'field' => 'id',
            'terms' => $display_options["categories"],
        )));
    $all_retailers = get_posts( $all_r_args );

global $locations;
global $categories;
global $display_options;
global $filter_options;
global $retailers;
global $all_retailers;
?>

<section id="directory">
<div class="row">
     <form class="search-form col s12">
        <div class="input-field">
          <input id="search" type="text" class="fuzzy-searching" required>
          <label for="search"><i class="material-icons">search</i></label>
					<i class="material-icons">close</i>
        </div>
      </form>
	</div>
									<?php if(!empty($display_options["locations"])) { ?>
	
<div class="row">
									<ul class="tabs locations hide-on-small-only">
										<li class="tab col s1"><a href="#all" class="active">All</a></li>
										<?php foreach($display_options["locations"] as $location) { ?>
											<li class="tab col s1">
												<a href="#<?php echo urlencode(get_cat_name( $location ));?>"><?php echo ucfirst(get_cat_name( $location ));?></a>
											</li>
											<?php } ?>
									</ul>
									<div class="hide-on-med-and-up col s12">
										<select class="locations">
											<option value="all">All</option>
											<?php foreach($display_options["locations"] as $location) { ?>
												<option value="<?php echo urlencode(get_cat_name( $location ));?>"><?php echo ucfirst(get_cat_name( $location ));?></option>
												<?php } ?>
										</select>
									</div>
	</div>
									<?php } ?>
	
<!-- PULL IN RETAILER/UNITS GRID -->
	
<div class="row">
	<?php if(get_field('view')) { $view = get_field('view'); }?>
<?php if($view == 'list') { ?>
  <?php get_template_part('templates/directory', 'list'); ?>
<?php } else { ?>
  <?php get_template_part('templates/directory', 'blocks'); ?>
<?php } ?>
	</div>

	
	
							</section>