<?php 
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    register_sidebar(array(             
        'id' => 'sidebar',                 
        'name' => 'Sidebar',                
        'description' => 'MrSidebar', 
        'before_widget' => '<div>', // 
        'after_widget' => '</div>', // 
        'before_title' => '<h3 class="side-title">',                     
        ));
/*--- New Widget --- */
    register_sidebar( array(
        'name' => 'Footer Widget',
        'id' => 'footer-widget-one',
        'description' => 'Footer widget', 
        'before_widget' => '<div class="widget-footer">', 
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'                        
        ));
    /*--- Second New Widget --- */
    register_sidebar( array(
        'name' => ('Main Page Left Widget'),
        'id' => 'main-page-left-widget',
        'description' => 'left widget on the homepage', 
        'before_widget' => '<div class="table1">', 
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'                        
        ));
    /*--- Third New Widget --- */
    register_sidebar( array(
        'name' => ('Main Page Center Widget'),
        'id' => 'main-page-center-widget',
        'description' => 'center widget on the homepage', 
        'before_widget' => '<div class="table2">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'                        
        ));
     /*--- Fourth New Widget --- */
    register_sidebar( array(
        'name' => ('Main Page Right Widget'),
        'id' => 'main-page-right-widget',
        'description' => 'right side widget on the homepage', 
        'before_widget' => '<div class="table1">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'                        
        ));

}
add_action('widgets_init', 'blank_widgets_init');
/*-------------- Enable Menu --------------- */

add_theme_support('menus');
/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' ); 
?>