<?php
add_action( 'wp_enqueue_scripts', 'storefront_child_theme_enqueue_styles' );

function storefront_child_theme_enqueue_styles() {
    wp_enqueue_style('storefront', get_template_directory_uri() . '/style.css' );
}

# Remove 'designed by WooThemes'
add_action('init', 'custom_remove_footer_credit', 10);

function custom_remove_footer_credit () {
    remove_action('storefront_footer', 'storefront_credit', 20);
    add_action('storefront_footer', 'custom_storefront_credit', 20);
}

function custom_storefront_credit() {
	?>
	<div class="site-info">
		&copy; <?php echo get_bloginfo( 'name' ) . ' ' . get_the_date( 'Y' ); ?>
	</div><!-- .site-info -->
	<?php
}

function header_wrapper_open() {
  ?>
	<div class="header_wrapper">
	<?php
}

function header_wrapper_close() {
  ?>
  </div>
	<?php
}

# Customise header
add_action('init', 'customise_storefront_header');

function customise_storefront_header() {
  remove_action('storefront_header', 'storefront_secondary_navigation', 30);
  remove_action('storefront_header', 'storefront_product_search', 40);

  remove_action('storefront_header', 'storefront_primary_navigation_wrapper', 42);
  remove_action('storefront_header', 'storefront_primary_navigation', 50);
  remove_action('storefront_header', 'storefront_header_cart', 60);
  remove_action('storefront_header', 'storefront_primary_navigation_wrapper_close', 68);

  add_action('storefront_header', 'storefront_primary_navigation_wrapper', 1);
  add_action('storefront_header', 'storefront_primary_navigation', 2);
  add_action('storefront_header', 'storefront_primary_navigation_wrapper_close', 4);

  add_action('storefront_header', 'header_wrapper_open', 9);
  add_action('storefront_header', 'storefront_header_cart', 15);
  add_action('storefront_header', 'header_wrapper_close', 40);
}
?>
