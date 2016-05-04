<?php use Roots\Sage\Titles; ?>
<!-- Check which kind of slider -->
<?php
//Check if it is a retailer - Grab retailer meta
if(is_singular( 'retailer' )) {
	global $meta_retailer;
$r = $meta_retailer;
	$slide_location = 'retailer_locations_'.$r['locations'][0]->term_id;
	slider( get_field( 'image_slider'), $slide_location );
}
elseif(get_field('Slider') == 'image_content_slider') { slider(get_field('content_slider'),""); }
elseif(get_field('Slider') == 'map') { slider(get_field('image'),""); }
elseif(get_field('image_slider')) { slider(get_field('image_slider'),""); }
?>


	<!-- If = image slider or content slider -->
	<?php function slider($s,$r) { ?>

								<?php if (get_field('Slider') != 'image_content_slider') { ?>
													<style>
														.slider .caption {
															opacity:1!important;
														}
				</style>
<?php } ?>
		<!-- Start Slider -->
<div class="grey lighten-2">
<div class="container fwidth-on-small-only">
		<div class="slider">
			<ul class="slides">
				<?php if (is_array($s)){ ?>
					<?php foreach($s as $slide) { ?>
						<?php $slide_caption =''; ?>
				<?php if (!empty($slide["image"])){ $slide_image = $slide["image"]; } else { }?>
								<?php if (get_field('Slider') == 'image_content_slider') { ?>
									<?php if($slide["caption_title"]) $slide_caption .= '<h1>'.$slide["caption_title"].'</h1>'; ?>
										<?php if($slide["caption_info"]) $slide_caption .= '<p>'.$slide["caption_info"].'</p>'; ?>
											<?php switch ($slide["link_type"]) {
		 case "internal":
        $slide["link_id"]["url"];
        break;
    case "external":
         $slide_link = $slide["link"];
        break;
	default:
		$slide_link = "";
}?>
												<?php }else { ?>
													<!-- slide caption -->
													<?php $slide_caption .= '<h1>'.get_the_title().'</h1>';
							if(!empty($time_arr))$slide_caption .= '<p>'.$time_arr.'</p>'; }?>

														<li>
															<!-- Add link -->
															<?php if(!empty($slide_link)){ echo '<a href="'.$slide_link.'">'; } ?>
																<!-- slide image -->
															<?php $slide_image = $slide["image"];?>
																		<?php if(empty($slide["image"])) { $slide_image = get_field('image',$slide_location); } ?>
																<img src="<?php echo $slide_image;?>">
																<!-- slide caption -->
																<?php if(!empty($slide_caption)) echo '<div class="caption ">'.$slide_caption.'</div>';?>
																	<!--close slide link -->
																	<?php if($slide_link){ echo '</a>'; } ?>
														</li>
														<?php unset($slide_caption,$slide_link);?>
															<?php	} ?>
																<?php } else{ ?>
																	<li>
																		<?php $image = wp_get_attachment_image_src($s,'full');?>
																		<?php if(empty($image)) { $image = get_field('image',$slide_location); } ?>
																		<?php $info = pathinfo($image[0]); ?>
																		<?php if ($info["extension"] == "svg") { ?>
		<object id="map" type="image/svg+xml" data="<?php echo $image[0];?>" style="display: inline; width: 100%; height: 100%;" >Your browser does not support SVG</object>
				  <div class="controls">
      <a id="zoom-in" class="btn-floating"><i class="material-icons">add</i></a>
      <a id="zoom-out" class="btn-floating"><i class="material-icons">remove</i></a>
     <!-- <a id="full-screen" class="btn-floating"><i class="material-icons">fullscreen</i></a>-->
      <a id="reset" class="btn">RESET</a>
    </div>
<?php }else { ?>
																			<!-- slide image -->
																			<img src="<?php echo $image[0];?>">
																			<!-- slide caption -->
																			<?php $slide_caption .= '<h1>'.get_the_title().'</h1>';?>
																				<?php if(!empty($slide_caption)) echo '<div class="caption left-align">'.$slide_caption.'</div>';?>
																	</li>
																	<?php unset($slide_caption,$slide_link);?>
																		<?php } ?>
																		<?php } ?>
					</ul>
					</div>
					</div>
</div>
				<?php } ?>