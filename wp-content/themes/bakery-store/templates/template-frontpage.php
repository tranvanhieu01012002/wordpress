<?php 
/**
Template Name: Frontpage
*/

get_header();

get_template_part('template-parts/sections/section','slider');
get_template_part('template-parts/sections/section','product-cat');
get_template_part('template-parts/sections/section','banner');
get_template_part('template-parts/sections/section','products');

get_footer(); ?>