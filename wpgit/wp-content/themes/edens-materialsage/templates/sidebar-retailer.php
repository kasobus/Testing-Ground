<?php global $meta_general;
$g = $meta_general; 

global $meta_retailer;
$r = $meta_retailer;
?>
 <div class="section">
  <ul class="collection">
   <?php if(!empty($r['address'])) { ?>

    <li class="collection-item avatar retailer-address">
     <i class="material-icons mdl-list__item-icon">place</i>
     <span class="title"><?php echo $r['address']; ?></span>
    </li>
    <?php } ?>

     <?php if(!empty($r['phone'])) { ?>
      <li class="collection-item avatar retailer-phone">
       <i class="material-icons">phone</i>
       <p>
        <?php echo $r['phone']; ?>
         <p>
      </li>
      <?php } ?>

       <?php if(!empty($r['website'])) { ?>
        <?php if (!empty($r['website_short'])) {
				$website_short = $r['website_short'];
} else { $website_short=$r['website']; }?>
         <?php if (preg_match("#https?://#", $r['website']) === 1) {
    $website_short = preg_replace('#^https?://#', '', $website_short);
} ?>
          <?php if (preg_match("#https?://#", $r['website']) === 0) {
    $r['website'] = 'http://'.$r['website'];
} ?>
           <li class="collection-item avatar retailer-website">
            <i class="material-icons">link</i>
            <span class="title">
										<a href="<?php echo $r['website'];?>" target="_blank">
										<?php echo ($website_short);?>
										</a>
									</span>
           </li>
           <?php } ?>

            <?php if(!empty($g['hours_arr'])) { ?>
             <li class="collection-item avatar retailer-hours">
              <i class="material-icons mdl-list__item-icon">query_builder</i>
              <ul class="collapsible" data-collapsible="accordion">

               <?php foreach($g['hours_arr'] as $hours_arr) { ?>
                <?php $all_hours = array();?>
                 <?php $i = 1;?>
               <?php if(!empty($hours_arr["hours"])){ ?>
                  <?php foreach($hours_arr["hours"] as $hours) { ?>
                   <?php
									$days = $hours["hours_days"];
									$open = $hours["hours_open"];
	//If no close time specified, label as "Until Close"
									if(!empty($hours["hours_close"])){ $close = $hours["hours_close"]; } else { $close="Until close"; }
									
									//Check if open 24 hours or create open and close text
									if ($open==$close){
										$time = "Open 24 Hours";
									} else {
										$time = $open.'-'.$close;
									}
	foreach($days as $day) {
		$day = $day-1;
									$all_hours[$day] = '<tr><td>'.jddayofweek($day,2).': </td><td> '.$time.'</td></tr>';
										$i++;
									}?>

                    <?php } ?>
                   <?php } ?>
                    <?php ksort($all_hours); //Sort hours by array key (set to day number?>

                     <?php if(!empty($hours_arr["hours"])) { ?>
                      <li>
                       <div class="collapsible-header">
                        <?php if(!empty($hours_arr["hours_type"])) {?><span><?php echo $hours_arr["hours_type"];?>: </span>
                         <?php } else {echo 'Today:';} ?>
                         <?php $todays_hours = $all_hours[date("N")-1]; ?>
                          <?php echo preg_replace('/^.*?:/',"",$todays_hours);?>
                       </div>
                       <div class="collapsible-body">
                        <table>
                         <tbody>
                          <?php foreach($all_hours as $h) { ?>
                           <?php echo $h; ?>
                            <?php		} ?>
                             <?php	if(!empty($hours_arr["hours_extra"])){
				$extra_hours = $hours_arr["hours_extra"];
				echo '<tr><td colspan="2" style="padding-top:10px">'.$extra_hours.'</td></tr>';
													} ?>
                         </tbody>
                        </table>
                       </div>
                      </li>
                      <?php } ?>
                       <?php } ?>
              </ul>
             </li>
             <?php } ?>
  </ul>
 </div>