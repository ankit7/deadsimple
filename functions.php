<?php 
	// Title Tags
	add_theme_support( 'title-tag' );
	// Register Sidebars
	add_action( 'widgets_init', 'my_register_sidebars' );
	function my_register_sidebars() {
    	/* Register the 'primary' sidebar. */
    		register_sidebar(
        				array(
            					'id'            => 'primary',
            					'name'          => __( 'Primary Sidebar' ),
            					'description'   => __( 'Default Sidebar.' ),
            					'before_widget' => '<div id="%1$s" class="sidebar-module">',
            					'after_widget'  => '</div>',
            					'before_title'  => '<h4 class="widget-title">',
            					'after_title'   => '</h4>',
        				)
   		 );
    	/* Repeat register_sidebar() code for additional sidebars. */
	}
?>