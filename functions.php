<?php 


add_theme_support('post-thumbnails');
add_image_size( 'singlelist', 600, 450, true ); // default Post Thumbnail dimensions (cropped)
add_image_size( 'singlepost', 760, 450, true );

function custom_excerpt_length( $length ) {
        return 13;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );




function widgets_novos_widgets_init() {

	register_sidebar( array(
		'name' => 'sidebar',
		'id' => 'sidebar_widgets'
	) );



	register_sidebar( array(
		'name' => 'widgetsfooter',
		'id' => 'footer_widgets'
	) );


}
add_action( 'widgets_init', 'widgets_novos_widgets_init' );



