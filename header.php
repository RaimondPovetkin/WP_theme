<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>


    <title>Document</title>
</head>
    <body>
        <header class="page  <!--page--header--> header__position" 
        style="background-image: url('<?php the_field('title_img'); ?>')">
            <div class="container80 header__container">
                <div class="logo-img">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="number">
                    <span class="font-style number__style"><?php the_field('Phone'); ?></span>
                </div>
            </div>
            <div class="header-content header-content__position">
                <div class="header-content__margin">
                    <h1 class="font-style heading__style">
                        <?php the_field('title'); ?>
                    </h1>
                </div>
                <div>
                    <h2 class="font-style description__style">
                        <?php the_field('subtitle'); ?>
                    </h2>
                </div>
                <div class="buttons-container">
                    <a href="" class="double-border-button">More</a>
                    <a href="<?php the_field('instagram-link'); ?>" class="">
                        <img class="img-mini" src="<?php bloginfo('template_url'); ?>/assets/img/in3.svg" alt="">
                    </a>
                </div>
            </div>
        </header>