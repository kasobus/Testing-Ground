<?php 
//ALREADY INCLUDED: headline, about, social array, time array(General Meta)
global $meta_retailer;
$meta_retailer = array();
//All retailer specific fields
$fields = array("address","website","phone","hours");

//Get all of the fields and place into object.
foreach($fields as $field) {
if(get_field($field))$meta_retailer[$field] = get_field($field);
}
$meta_retailer["locations"] = get_the_terms(get_the_ID(),'retailer_locations');
$meta_retailer["categories"] = get_the_terms(get_the_ID(),'retailer_categories');
?>
