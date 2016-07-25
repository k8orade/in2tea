<?php
add_action( 'wp_enqueue_scripts', 'storefront_child_theme_enqueue_styles' );

function storefront_child_theme_enqueue_styles() {
    wp_enqueue_style('storefront', get_template_directory_uri() . '/style.css' );
}

# Remove 'designed by WooThemes'
add_action( 'init', 'custom_remove_footer_credit', 10 );

function custom_remove_footer_credit () {
    remove_action( 'storefront_footer', 'storefront_credit', 20 );
    add_action( 'storefront_footer', 'custom_storefront_credit', 20 );
}

function custom_storefront_credit() {
	?>
	<div class="site-info">
		&copy; <?php echo get_bloginfo( 'name' ) . ' ' . get_the_date( 'Y' ); ?>
	</div><!-- .site-info -->
	<?php
}

?>
