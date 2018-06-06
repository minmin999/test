<?php
/**
 * The home page template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Business Shop
 */

get_header();
get_template_part('store','slider');
get_template_part('store','services');
get_template_part('store','products');
get_template_part('store','collection');
get_template_part('store','widget1');
get_template_part('store','category1');
get_template_part('store','category2');
get_template_part('store','blog');
get_template_part('store','widget2');
get_footer();
?>