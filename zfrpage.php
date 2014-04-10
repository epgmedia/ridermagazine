<?php
// note where other functions reside
//  ./general-template.php:function get_header( $name = null ) {
//  ./query.php:function have_posts() {





//lines below from index.php
define('WP_USE_THEMES', true);
//fr commented out: require('./wp-blog-header.php');

////lines below from wp-blog-header.php
if ( !isset($wp_did_header) ) {
	$wp_did_header = true;
	require_once( dirname(__FILE__) . '/wp-load.php' );




   
    //////lines below from template-loader.php
if ( defined('WP_USE_THEMES') && WP_USE_THEMES )
	do_action('template_redirect');
	$name='header-FRtest.php';
    $templates[] = $name;
	if ('' == locate_template($templates, true))
		echo "<br />$name file not found<br />";
    





    }

//lines below from
//lines below from
//lines below from
//lines below from
//lines below from
//lines below from
//lines below from


?>