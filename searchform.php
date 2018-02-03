<form name="search" action="<?php echo home_url( '/' ) ?>" method="get" class="search-form">
	<input type="text" value="<?php echo get_search_query() ?>" name="s" placeholder="Поиск" id="search-input">
	<button type="submit" class="button">Найти</button>
</form>