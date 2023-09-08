<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header>
        <div class="heading">
            <div class="header__logo">
                <h1>
                    <?php echo get_custom_logo();?>
                </h1>
            </div>
            <nav class="site-navigation">
                <?php
                // Define the arguments for the menu
                $menu_args = array(
                    'theme_location' => 'primary', // Replace with your menu location
                    'menu_id'        => 'primary', // Replace with your desired menu ID
                    'container'      => false,          // Remove the menu's outer container
                    'menu_class'     => 'menu',         // CSS class for the menu
                    'depth'          => 2,              // Set the depth of the menu
                );

                // Display the menu using wp_nav_menu
                wp_nav_menu($menu_args);
                ?>
            </nav>
            <div class="menu-search">
                <div class="menu">
                    <svg width="20" height="11" viewBox="0 0 20 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line y1="0.5" x2="20" y2="0.5" stroke="black"/>
                        <line y1="5.5" x2="20" y2="5.5" stroke="black"/>
                        <line y1="10.5" x2="20" y2="10.5" stroke="black"/>
                    </svg>                    
                </div>
                <div class="search">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="6" cy="6" r="5.5" stroke="black"/>
                        <line x1="9.35355" y1="9.64645" x2="14.3536" y2="14.6464" stroke="black"/>
                    </svg>                   
                </div>
            </div>
        </div>
    </header>
    <main id="main">