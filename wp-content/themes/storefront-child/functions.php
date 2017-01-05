<?php

# Add custom styles
add_action('wp_enqueue_scripts', 'storefront_child_theme_enqueue_styles');

function storefront_child_theme_enqueue_styles() {
    wp_enqueue_style('storefront', get_template_directory_uri() . '/style.css' );
}

# Add custom Javascript
add_action('wp_enqueue_scripts', 'load_storefront_child_javascript_files');

function load_storefront_child_javascript_files() {
	wp_register_script('storefront_child_script', get_stylesheet_directory_uri() . '/storefront_child.js', array('jquery'), true );
	wp_enqueue_script('storefront_child_script');
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

# Customise header
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

function primary_menu_button() {
  ?>
  <button id="primary-menu-toggle"><span>Menu</span></button>
  <?php
}

if ( ! function_exists( 'storefront_primary_navigation' ) ) {
	/**
	 * Display Primary Navigation
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_primary_navigation() {
		?>
		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_html_e( 'Primary Navigation', 'storefront' ); ?>">
			<button class="menu-toggle" aria-controls="primary-navigation" aria-expanded="true"><span><?php echo esc_attr( apply_filters( 'storefront_menu_toggle_text', __( 'Menu', 'storefront' ) ) ); ?></span></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location'	=> 'primary',
					'container_class'	=> 'primary-navigation',
					)
			);
			?>
		</nav><!-- #site-navigation -->
		<?php
	}
}

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
  add_action('storefront_header', 'primary_menu_button', 3);
  add_action('storefront_header', 'storefront_primary_navigation_wrapper_close', 4);

  add_action('storefront_header', 'header_wrapper_open', 9);
  add_action('storefront_header', 'storefront_header_cart', 15);
  add_action('storefront_header', 'header_wrapper_close', 40);
}
?>
