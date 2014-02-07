<?php 

	register_nav_menu('primary', 'Primary Menu for Navigation' );

 ?>

<?php
	if ( function_exists('register_sidebar') ) {
	    register_sidebar(array(
	    'name' => 'sidebar',
	    'id' => 'sidebar',
	    'description' => 'The default Sidebar',
	    'before_widget' => '<div class="sidebar-box">',
	    'after_widget' => '</div>',
	    'before_title' => '<span class="sidebar-title">',
	    'after_title' => '</span><div class="dots"></div>',
	));
	}
?>



