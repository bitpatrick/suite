<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div class="header">
        
        <nav>
            <?php
            wp_nav_menu(array(
              'theme_location' => 'header', 
              'container' => false,
              'items_wrap' => '<ul>%3$s</ul>'
            ));
            ?>
        </nav>


    </div>

    <div class="hero">

            <?php if(is_home()) { ?>
        
                <h1><?php bloginfo('title'); ?></h1>

            <?php } ?>

            <?php if(is_page()) { ?>

                <h1><?php the_title(); ?></h1>

            <?php } ?>

    </div>
