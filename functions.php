<?php

function __custom_independent_publisher_full_width_featured_image_size() {
    return "full";
}

add_filter( 'independent_publisher_full_width_featured_image_size', '__custom_independent_publisher_full_width_featured_image_size' );

/*
 * You can add your own functions here. You can also override functions that are
 * called from within the parent theme. For a complete list of function you can
 * override here, please see the docs:
 *
 * https://github.com/raamdev/independent-publisher#functions-you-can-override-in-a-child-theme
 *
 */

function independent_publisher_site_info() {
	?>
	<?php if ( get_header_image() ) : ?>
		<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<img class="no-grav" src="<?php echo esc_url( get_header_image() ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
		</a>
	<?php endif; ?>
	<h1 class="site-title">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Africa <span class="orangeHighlight">Rizing</span></a>
	</h1>
	<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
	<?php get_template_part( 'menu', 'social' ); ?>
<?php
}

/*
 * Uncomment the following to add a favicon to your site. You need to add favicon
 * image to the images folder of Independent Publisher Child Theme for this to work.
 */
/*
function blog_favicon() {
  echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('stylesheet_directory').'/images/favicon.ico" />' . "\n";
}
add_action('wp_head', 'blog_favicon');
*/

/*
 * Add version number to main style.css file with version number that matches the
 * last modified time of the file. This helps when making frequent changes to the
 * CSS file as the browser will always load the newest version.
 */
/*
function independent_publisher_stylesheet() {
	wp_enqueue_style( 'independent-publisher-style', get_stylesheet_uri(), '', filemtime( get_stylesheet_directory() . '/style.css') );
}
*/

/*
 * Modifies the default theme footer.
 * This also applies the changes to JetPack's Infinite Scroll footer, if you're using that module.
 */
function independent_publisher_footer_credits() {
	$my_custom_footer = 'Project Rize is a new digital media startup developed by <a href="http://bbg.gov/" target="_blank">US International Media</a> in partnership with <a href="http://voanews.com/" target="_blank">VOA News</a> to promote open discourse, democratic ideals and sustainable, civil societies throughout the world.';
	return $my_custom_footer;
}

add_image_size( 'mugshot', 200, 200 ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode
add_filter( 'image_size_names_choose', 'my_custom_sizes' );

function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'mugshot' =>'Mugshot',
    ) );
}

