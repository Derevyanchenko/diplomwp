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

                <?php $progress_items = get_field("progress"); ?>

                <?php foreach($progress_items as $progress): ?>

                    <div class="element relative">
                        <img src="<?php echo $progress["progress_img"]; ?>" />
                        <p><?php echo $progress["progress_text"]; ?></p>
                    </div>

                <?php endforeach; ?>

                    
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

                    <?php $values = get_field("values"); ?>

                    <?php foreach($values as $value): ?>

                    <div class="col-sm-4">
                        <div class="element">
                            <div class="img-wrapper">
                                <img src="<?php echo $value["values_img"]; ?>" />
                            </div>
                            <div class="element-content">
                                <div class="title weight600 f18"><?php echo $value["values_title"]; ?></div>
                                <div class="push5"></div>
                                <div class="text">
                                    <?php echo $value["values_text"]; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

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

                    <?php $documents = get_field('documents', 'theme-general-settings'); ?>

                    <?php foreach ($documents as $document): ?>
                        
                    <div class="col-md-4">
                        <div class="element relative">
                            <a href="<?php echo $document["documents_link"]; ?>" class="absolute"></a>
                            <div class="icon">
                                <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/pdf.png" /></div>
                            </div>
                            <div class="text">
                                <a href="<?php echo $document["documents_link"]; ?>">
                                    <?php echo $document["documents_text"]; ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
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