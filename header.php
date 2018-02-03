<!DOCTYPE html>
<html>
  <head>
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?><?php } ?> <?php wp_title(); ?></title>
  <script>
	function showHide(id){
		ID = document.getElementById(id);
		if(ID.style.display != "block"){
		ID.style.display = "block";
		}
		else {
			ID.style.display = "none";
		}
	}
	
</script>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS" href="<?php bloginfo('rss2_url'); ?>" />
   <?php wp_enqueue_script("jquery"); wp_head(); ?>
  </head>

  <body>
    <div id="wrap">
      <div id="header"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title"><?php bloginfo('name'); ?></a> | 
      <? $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<span class="site-description"><?php echo $description; ?></span>
					<?php endif;
				?><nav id="mainmenu" class="main-navigation">
					<? wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
				</nav></div>