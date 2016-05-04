<div class="row container valign">
	<form role="search" method="get" class="search-form" action="<?= esc_url(home_url('/')); ?>">
    <input type="search" value="<?= get_search_query(); ?>" name="s" class="search-field form-control col s12 m9 grey-text text-darken-4" required>
      <button type="submit" class="search-submit btn btn-default col s6 push-s3 m3 flow-text"><?php _e('Search', 'sage'); ?></button>
</form>
</div>