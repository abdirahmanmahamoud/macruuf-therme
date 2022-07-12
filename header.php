<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <div class="header">
        <a href="<?php bloginfo('url');?>" class="logo">
            <?php
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
               
              if ( has_custom_logo() ) {
                  echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
              } else {
                  echo '<h1>' . get_bloginfo('name') . '</h1>';
              }
            ?>
        </a>
        <div class="right">
            <nav>
                <ul id="menuUl" class="menuUl action">
                   <?php
                        wp_nav_menu(array(
                            'theme_location' => 'header',
                            'conainer' => false,
                            'menu_class' => 'menull'
                        ));
                   ?>
                </ul>
            </nav>
                <i class="fa-solid fa-bars menu-icon"></i>
        </div>
    </div>