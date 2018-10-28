<!DOCTYPE html>
<html>
<head>
    <!-- <title>Финколлект</title> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="apple-touch-icon-precomposed" href="apple-touch-favicon.png"/>
    -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:600,400,300,400italic,600,700,700italic,800&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<!--     <link href="css/jquery.fancybox.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> -->
    <?php wp_head(); ?>
</head>
<body>

            <div class="header-wrapper">
            <div class="container">
                <div class="header relative">
                    <div class="logo">
                        <a href="<?php the_permalink() ?>">
                            <?php the_custom_logo(); ?>
                        </a>
                    </div>
                    <a href="#callback" class="button invert min callback-btn fancyboxModal hidden-xs hidden-sm">Обратный звонок</a>
                    <div class="header-tel hidden-xs hidden-sm">
                        <div><?php echo get_field('header_number', 'theme-general-settings'); ?></div>
                        <small>Звонок по РФ бесплатный </small>
                    </div>
                    <div class="mob-menu-btn visible-xs visible-sm">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="dropdown text-center">
                        <div class="dropdown-head">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dropdown-tel">
                                        <div></div>
                                        <small>Звонок по РФ бесплатный </small>
                                        
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="dropdown-callback">
                                        <a href="#callback" class="button invert min callback-btn fancyboxModal">Обратный звонок</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-lk">
                            <a href="#" class="lk-btn"><span></span> Личный кабинет</a>
                        </div>
                        <div class="mobile-menu">
                            <?php
                              wp_nav_menu(array(
                                "theme_location" => "top",
                                "container" => ""
                             )); 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="top-menu-wrapper hidden-xs hidden-sm">
            <div class="container">
                <div class="relative">
                    <div class="top-menu">
                         <?php
                              wp_nav_menu(array(
                                "theme_location" => "top",
                                "container" => ""
                             )); 
                            ?>
                        <div class="cleaner"></div>
                    </div>
                    <a href="#" class="lk-btn">Личный кабинет</a>
                </div>
            </div>
        </div>

       