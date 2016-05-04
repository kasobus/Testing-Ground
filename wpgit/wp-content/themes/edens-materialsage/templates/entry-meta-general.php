<?php 
//Other meta is post_type specific.
global $meta_general;
$meta_general = array();
if(get_field('headline'))$meta_general['headline'] = get_field('headline');
if(get_field('about')) $meta_general['about'] = get_field('about');
if(get_field('social_arr')) $meta_general['social_arr'] = get_field('social_arr');
if(get_field('hours_arr')) $meta_general['hours_arr'] = get_field('hours_arr');
?>
