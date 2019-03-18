<?php
add_theme_support('post-thumbnails');
add_image_size('thumb-custom', 200, 200, true);

add_theme_support( 'custom-header', array(
    'video' => true
) );


if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Sidebar footer',
    'before_widget' => '<div class = "box">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

?>
