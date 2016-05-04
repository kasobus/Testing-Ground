<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
	<!-- Get general meta data -->

		 <?php 
	get_template_part('templates/entry-meta-general'); 
	//Post type meta
	$post_type = get_post_type();
	$meta = "templates/entry-meta-".$post_type;
	
	get_template_part($meta); 
	?>
	<meta name="google-site-verification" content="CwkE_rvOVugnuDAV0pkLZHqf3fiw6WtNEZ74fBOZj7w" />
	<meta name="google-site-verification" content="GBiERZsIochysTxMaX81zHGzLIbwxzAISIgL13eVLXs" />
</head>
