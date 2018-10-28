<?php

/*
Template Name: About
*/

?>

<?php get_header(); ?>

    <div class="main-wrapper">
        <div class="header-slider white about-slide">
            <div class="table">
                <div class="table-cell">
                    <div class="container">
                        <div class="title"><?php the_field("about_title"); ?></div>
                        <p>
                           <?php the_field("about_text"); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="push40"></div>
            <div class="container">
                <p>
                <?php
                    the_post();  
                    the_content();
                ?>
                </p>
                <div class="push15"></div>
                <div class="title-h2"><span class="red">наши</span> достижения</div>
                <div class="push10"></div>
                <div class="icons-list achievements">
                    <div class="element relative">
                        <img src="<?php the_field("progress_img_1"); ?>" />
                        <p><?php the_field("progress_text_1"); ?></p>
                    </div>
                    <div class="element relative">
                        <img src="<?php the_field("progress_img_2"); ?>" />
                        <p><?php the_field("progress_text_2"); ?></p>
                    </div>
                    <div class="element relative">
                        <img src="<?php the_field("progress_img_3"); ?>" />
                        <p><?php the_field("progress_text_3"); ?></p>
                    </div>
                </div>
            </div>
            <div class="push25"></div>
        </div>
        <div class="worth gray-bg">
            <div class="push40"></div>
            <div class="container">
                <div class="title-h2"><span class="red">наши</span> ценности</div>
                <div class="push10"></div>
                <div class="flex row">
                    <div class="col-sm-4">
                        <div class="element">
                            <div class="img-wrapper">
                                <img src="<?php the_field("values_img_1"); ?>" />
                            </div>
                            <div class="element-content">
                                <div class="title weight600 f18"><?php the_field("values_title_1"); ?></div>
                                <div class="push5"></div>
                                <div class="text">
                                    <?php the_field("values_text_1"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="element">
                            <div class="img-wrapper">
                                <img src="<?php the_field("values_img_2"); ?>" />
                            </div>
                            <div class="element-content">
                                <div class="title weight600 f18"><?php the_field("values_title_2"); ?></div>
                                <div class="push5"></div>
                                <div class="text">
                                    <?php the_field("values_text_2"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="element">
                            <div class="img-wrapper">
                                <img src="<?php the_field("values_img_3"); ?>" />
                            </div>
                            <div class="element-content">
                                <div class="title weight600 f18"><?php the_field("values_title_3"); ?></div>
                                <div class="push5"></div>
                                <div class="text">
                                    <?php the_field("values_text_3"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="push20"></div>
        </div>
        <div class="docs">
            <div class="push40"></div>
            <div class="container">
                <div class="title-h2">Документы</div>
                <div class="push15"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="element relative">
                            <a href="<?php the_field("document_href_1"); ?>" class="absolute"></a>
                            <div class="icon">
                                <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/pdf.png" /></div>
                            </div>
                            <div class="text">
                                <a href="<?php the_field("document_href_1"); ?>">
                                    <?php the_field("document_title_1"); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="element relative">
                            <a href="<?php the_field("document_href_2"); ?>" class="absolute"></a>
                            <div class="icon">
                            <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/pdf.png" /></div>
                            </div>
                            <div class="text">
                                <a href="<?php the_field("document_href_2"); ?>">
                                <?php the_field("document_title_2"); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="element relative">
                            <a href="<?php the_field("document_href_3"); ?>" class="absolute"></a>
                            <div class="icon">
                            <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/pdf.png" /></div>
                            </div>
                            <div class="text">
                                <a href="<?php the_field("document_href_3"); ?>">
                                <?php the_field("document_title_3"); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="push30"></div>
        </div>
        
        <div class="association gray-bg">
            <div class="push45"></div>
            <div class="container">
                <div class="title-h2"><span class="red">Участие</span> в ассоциациях</div>
                <div class="push10"></div>
                <div class="partners-carousel">
                    <?php 
                
                $args = array(
                    "numberposts" => 3,
                    "post_type" => "partners",
                    "suppress_filters" => true,
                );
                $posts = get_posts($args);
                foreach($posts as $post) : ?>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="img-wrapper">
                                    <!-- <img src="<?php the_field("partners_img");?>" /> -->
                                    <?php the_post_thumbnail("partners_thumb"); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="element-content">
                                    <div class="push30 hidden-md"></div>
                                    <div class="title f24"><?php the_title(); ?></div>
                                    <div class="push5"></div>
                                    <div class="text">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                </div>
                <div class="push100"></div>
                <div class="push10"></div>
            </div>
        </div>
        <div class="footer-push"></div>
    </div>

  <?php get_footer(); ?>