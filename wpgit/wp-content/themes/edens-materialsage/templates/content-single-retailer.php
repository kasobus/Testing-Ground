<?php //This page contains the main content area only. ?>
<?php global $meta_general;
$g = $meta_general; ?>
<?php if(!empty($g["headline"])){ ?> <h2 class="headline"><?php echo $g["headline"]; ?></h2> <?php } ?>
<?php if(!empty($g["about"])){ ?><?php echo $g["about"]; ?><?php } ?>