<?php
/**
* Template Name: About Page Template
* Description: Template used for the about page
*/
//* Add Custom Body Class
add_filter( 'body_class', 'childthemeprefix_about_body_class' );
function childthemeprefix_about_body_class( $classes ) {
	$classes[] = 'about-page';
	return $classes;
}
//* Remove Footer Widgets
remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );
//* Add widget area markup
 

	//* Add widgets on front page
		add_action( 'genesis_after_header', 'digital_about_page_widgets' );

//* Add widgets on about page
function digital_about_page_widgets() {

	genesis_widget_area( 'about-page-1', array(
		'before' => '<div id="about-page-1" class="about-page-1"><div class="widget-area fadeup-effect"><div class="wrap">',
		'after'  => '</div></div></div>',
	) );

	genesis_widget_area( 'about-page-2', array(
		'before' => '<div id="about-page-2" class="about-page-2"><div class="widget-area fadeup-effect"><div class="wrap">',
		'after'  => '</div></div></div>',
	) );

	genesis_widget_area( 'about-page-3', array(
		'before' => '<div id="about-page-3" class="about-page-3"><div class="widget-area fadeup-effect"><div class="wrap">',
		'after'  => '</div></div></div>',
	) );

}


genesis();