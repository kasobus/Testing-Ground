<?php 

global $locations;
global $categories;
global $display_options;
global $filter_options;
global $retailers;
global $all_retailers;

use Roots\Sage\Extras;
?>

				<?php function make_block($r) { ?>
						<?php $image = get_field('logo',$r->ID); ?>
					<?php $terms = get_the_terms($r->ID,'retailer_category'); ?>
						<?php $categories = "" ?>
							<?php foreach ($terms as $term){ $category .= $term->name.", "; }?>
								<?php $categories = rtrim($categories,", ");?>
									
									<div class="col s6 m4 l3<?php echo $categories;?>">
										<details class="hide">
										<span class="unit">
																<?php if(get_field('unit',$r->ID)){echo get_field('unit',$r->ID); }?>
															</span>
										<span class="name"><a href="<?php if(get_permalink($r->ID))echo get_permalink($r->ID); ?>"><?php if(get_the_title($r->ID))echo get_the_title($r->ID); ?></a></span>
										<span class="address">
																<?php if(get_field('address',$r->ID))echo get_field('address',$r->ID); ?>
															</span>
									</details>
										<div class="card edens-blue hoverable <?php echo $categories;?>">
											
            <div class="card-image valign-wrapper">
													
											<!--Page link -->
											<a href="<?php echo get_permalink($r->ID); ?>"></a>
							
											<!-- Background image(logo) -->
												<?php if( empty($image) ){ ?>
													<!-- Page Title if logo does not exist -->
													<span class="valign card-title text-white">
																		<?php echo get_the_title($r->ID); ?>
																	</span>
													<?php } ?>
											</div>
												<div class="media" style="<?php if( !empty($image)) { ?>background-image:url('<?php echo wp_get_attachment_url( $image["ID"], 'full' );?>');<?php } ?>">
											</div>
										</div>
									</div>
									<?php } ?>
	<?php /**
	/* DEBUG 
	 print "<pre>";print_r($directory);print "</pre>"; */?>

		<div id="all">
			<div class="units">

				<div class="list">
					<?php foreach($all_retailers as $r) { ?>
						<?php make_block($r); ?>
							<?php } ?>
				</div>
			</div>
		</div>

		<?php foreach($retailers as $key => $rs) { ?>
			<div id="<?php echo $key;?>">
				<div class="units">
					<div class="list">


											<?php foreach($rs as $r) { ?>
												<?php make_block($r); ?>
													<?php } ?>

					</div>
				</div>
			</div>
			<?php } ?>
