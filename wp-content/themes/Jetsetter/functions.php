<?php
    function theme_setup() {
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
        add_theme_support(
            'custom-logo',array(
                'height'      => 0,
                'width'       => 0,
                'flex-height' => true,
                'flex-width'  => true,
            )
        );
        $bg_defaults = array(
            'default-image'          => '',
            'default-preset'         => 'default',
            'default-size'           => 'cover',
            'default-repeat'         => 'no-repeat',
            'default-attachment'     => 'scroll',
        );
        add_theme_support( 'custom-background', $bg_defaults );
        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
        $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
        add_theme_support( 'post-formats', $post_formats);
        add_theme_support( 'custom-logo' );
        add_theme_support( 'custom-header' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'menus' );
    }
    add_action( 'after_setup_theme', 'theme_setup' );

    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page([
            'page_title'    => __('Website Settings'),
            'menu_title'    => __('Website Settings'),
            'menu_slug'     => 'website-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ]);
    }
    function custom_theme_widgets() {
        // Add support for widgets
        register_sidebar(array(
            'name'          => 'Sidebar Widget Area',
            'id'            => 'sidebar-widget-area',
            'description'   => 'Add widgets here to appear in the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));
    
        // You can add more widget areas (sidebars) as needed
    }
    add_action('widgets_init', 'custom_theme_widgets');
    
    //remove tags
    add_action('init', function(){
        register_taxonomy('post_tag', []);
    });
    
    //Register Menu
    register_nav_menu('primary', __('Primary'));
    function primary_menu($slug) {
        $menu = [
            'theme_location' => $slug,
            'container' => 'nav',
            'container_class' => $slug
        ];
        wp_nav_menu($menu);
    }


    function add_theme_scripts() {
        wp_enqueue_style( 'carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.1', 'all' );
        wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper.css', array(), '1.1', 'all' );
        wp_enqueue_style( 'carousel', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '1.1', 'all' );
        wp_enqueue_style( 'style', get_stylesheet_uri());
        wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), 1.1, true  );
        wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.js', array( 'jquery' ), 1.1, true  );
        wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', array( 'jquery' ), 1.1, true  );


        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

