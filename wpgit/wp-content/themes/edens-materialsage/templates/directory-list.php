<?php 

global $locations;
global $categories;
global $display_options;
global $filter_options;
global $retailers;
global $all_retailers;

use Roots\Sage\Extras;
?>

<?php /**
	/* DEBUG 
	 print "<pre>";print_r($directory);print "</pre>"; */?>

										<div id="all">
											<table class="highlight units">
												<thead>
													<tr>
														<th class="sort" data-sort="unit" data-field="unit">Unit</th>
														<th class="sort" data-sort="name" data-field="name">Name</th>
														<th class="sort" data-sort="address" data-field="address">Address</th>
													</tr>
												</thead>
												<tbody class="list">
													<?php foreach($all_retailers as $r) { ?>
														<tr>
															<td class="unit">
																<?php if(get_field('unit',$r->ID)){echo get_field('unit',$r->ID); }?>
															</td>
															<td class="name"><a href="<?php if(get_permalink($r->ID))echo get_permalink($r->ID); ?>"><?php if(get_the_title($r->ID))echo get_the_title($r->ID); ?></a></td>
															<td class="address">
																<?php if(get_field('address',$r->ID))echo get_field('address',$r->ID); ?>
															</td>

														</tr>
														<?php } ?>
												</tbody>
											</table>
										</div>

										<?php foreach($retailers as $key => $rs) { ?>
											<div id="<?php echo $key;?>">
												<table class="highlight units">
													<thead>
														<tr>
														<th class="sort" data-sort="unit" data-field="unit">Unit</th>
														<th class="sort" data-sort="name" data-field="name">Name</th>
														<th class="sort" data-sort="address" data-field="address">Address</th>
														</tr>
													</thead>
													<tbody class="list">

														<?php foreach($rs as $r) { ?>
															<tr>
																<td class="unit">
																	<?php if(get_field('unit',$r->ID))echo get_field('unit',$r->ID); ?>
																</td>
																<td class="name"><a href="<?php if(get_permalink($r->ID))echo get_permalink($r->ID); ?>"><?php if(get_the_title($r->ID))echo get_the_title($r->ID); ?></a></td>
																<td class="address">
																	<?php if(get_field('address',$r->ID))echo get_field('address',$r->ID); ?>
																</td>

															</tr>
															<?php } ?>

													</tbody>
												</table>
											</div>
											<?php } ?>
