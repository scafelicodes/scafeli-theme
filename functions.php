<?php 

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



