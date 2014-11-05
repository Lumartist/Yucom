<?php
/**
* We realy need featured images, so lets add em!
*/
add_theme_support( 'post-thumbnails' );
/* 
 * Wahooo, custom thumb styles incoming
 * Here we have slider images
*/
add_image_size( 'slider-image-big', 680, 232, true );
add_image_size( 'slider-image-nav', 130, 44, true );
/*
 * Some News Images
*/
add_image_size( 'news-image-big', 460, 97, true );
/*
 * Tiny, tiny - Secondary News Images
*/
add_image_size( 'subnews-image-big', 36, 36, true );
/*
 * Spin it around. Carousel Images
*/
add_image_size( 'carousel-image-big', 240, 114, true );
/*
 * Here we have gallery images for the front
*/
add_image_size( 'gallery-image-big', 150, 150, true );
/*
 * Article, article, article...
*/
add_image_size( 'article-image-big', 98, 98, true );
/*
 * Sure, videos need an extra wurst!
*/
add_image_size( 'video-image-big', 72, 36, true );
/*
 * Sure, videos need an extra wurst!
*/
add_image_size( 'content-image-big', 893, 255, true );
?>