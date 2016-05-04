<link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
<header>
	<div class="navbar-fixed">
	<nav class="white">
	<div class="nav-wrapper container">
			 <?php $logo = get_field('logo', 'option'); ?>
      <a href="<?= esc_url(home_url('/')); ?>" class="brand-logo"><?php echo wp_get_attachment_image($logo["ID"],'full'); ?></a>
      <a id="trigger-overlay" type="button" class="button-collapse"><i class="material-icons">menu</i></a>
		<!-- Navigation. -->
		<ul class="menu-buttons right hide-on-med-and-down grey-text text-darken-4">
		<?php
    if ( has_nav_menu( 'primary_navigation' ) ) :
      echo wp_nav_menu( array(
        'theme_location' => 'primary_navigation',
				'items_wrap' => '%3$s',
        'container' => false,
        'echo' => false,
        'depth' => 1,
      ) );
    endif;
    ?>
			<li class="button">
			<a>
				<i id="trigger-overlay-search" type="button" class="material-icons">search</i>
				<span>Search</span>
			</a>
			</li>
			
			<li class="button">
			<a href="/units">
					<i class="material-icons">map</i>
				<span>Directory</span>
			</a>
			</li>
		</ul>

	</div>
	</nav>
	</div>
</header>
<!-- Side navigation -->
<div class="fullscreen overlay overlay-hugeinc">
	<a class="overlay-close alignright"><i class="material-icons medium">clear</i></a>
	<div class="row section">
		<div class="col s2 push-s4">
			<a>
				<i id="trigger-overlay-search-menu" type="button" class="material-icons small">search</i>
			</a>
		</div>
		<div class="col s2 push-s4">
			<a href="/units">
					<i class="material-icons small">map</i>
			</a>
		</div>
	</div>
		<div class="row">
	<?php
    if ( has_nav_menu( 'primary_navigation' ) ) :
      echo wp_nav_menu( array(
        'theme_location' => 'primary_navigation',
        'container' => false,
				'menu_class' => 'fwidth flow-text',
        'echo' => false,
        'depth' => 1,
      ) );

    endif;
    ?>
</div>
</div>
<div class="overlay-search overlay-hugeinc valign-wrapper">
	<a class="overlay-close"><i class="medium material-icons">clear</i></a>
  <?php get_search_form(); ?>
</div>