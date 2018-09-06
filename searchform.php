<div class="search-layer">
	<form class="searchform" role="search" method="get" action="<?php echo home_url('/'); ?>">
		<div class="searchform-inner">
			<input type="search" class="form-control" placeholder="Поиск" value="<?php echo get_search_query(); ?>" name="s" title="Search" autocomplete="off" autocapitalize="off" autocorrect="off" spellcheck="false">
		</div>
	</form>
</div>