<header id="header" class="site-header" role="banner">
	<div class="site-branding">
		<a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
	</div>

	<nav class="site-navigation">
		<?php if (has_nav_menu('primary')) : wp_nav_menu(['theme_location' => 'primary', 'menu_class' => 'nav']); endif; ?>
	</nav>
</header>

<div id="content" class="site-content">