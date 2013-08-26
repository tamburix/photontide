<?php
	add_post_type_support( 'page', 'excerpt' );
	
	// add post thumnails feature wp 2.9
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 200, 130, true );
add_image_size( 'single-post-thumbnail', 200, 130 ); // Permalink thumbnail size


?>