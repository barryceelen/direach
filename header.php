<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Direach
 */

?>

<?php
get_template_part('inc/direach', 'heading');
//check that we're not displaying a single post or page, or if we're on the front page...
if( (!is_page() && !is_single()) || is_front_page() )
{
	//show masthead (goes on bottom for single pieces of content)
	get_template_part('inc/direach', 'masthead');
}

?>

	<div id="content" class="site-content">
