<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

// NOTE see functions.php `register_sidebar()`
if ( ! is_active_sidebar( 'sidebar-books' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Sidebar for Books', 'historiador' ); ?>">
	<?php dynamic_sidebar( 'sidebar-books' ); ?>
</aside><!-- #secondary -->
