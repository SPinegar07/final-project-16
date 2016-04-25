<?php 
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    register_sidebar( array(
        'name' => ('sidebar'),
        'id' => 'sidebar',
        'description' => 'Widget for our sidebar on pages', 
        'before_widget' => '<div>', 
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'                        
        ));
    register_sidebar( array(
        'name' => ('Footer-Widget'),
        'id' => 'footer-widget-one',
        'description' => 'footer widget', 
        'before_widget' => '<div class="widget-footer">', 
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'                        
        ));
    register_sidebar( array(
        'name' => ('Main-Page-Left-Widget'),
        'id' => 'main-page-left-widget',
        'description' => 'left widget on the homepage', 
        'before_widget' => '<div class="table1">', 
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'                        
        ));
    register_sidebar( array(
        'name' => ('Main-Page-Center-Widget'),
        'id' => 'main-page-center-widget',
        'description' => 'center widget on the homepage', 
        'before_widget' => '<div class="table2">', 
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'                        
        ));
        register_sidebar( array(
        'name' => ('Main-Page-Right-Widget'),
        'id' => 'main-page-right-widget',
        'description' => 'right widget on the homepage', 
        'before_widget' => '<div class="table1">', 
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'                        
        ));
        register_sidebar( array(
        'name' => ('Main Button Left'),
        'id' => 'main-button-left',
        'description' => 'left button on the homepage', 
        'before_widget' => '<div class="button">', 
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'                        
        ));
        register_sidebar( array(
        'name' => ('Main Button Right'),
        'id' => 'main-button-right',
        'description' => 'right button on the homepage', 
        'before_widget' => '<div class="button">', 
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'                        
        ));
    }
    function register_my_menus() {
  register_nav_menus(
    array(
      'footer-menu' => __( 'Footer Menu' ),
      'header-menu' => __( 'Header Menu' ),
      'an-extra-menu' => __( 'An Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/*-------------- Enable Menu --------------- */

add_theme_support('menus');

add_action('widgets_init', 'blank_widgets_init');
?>