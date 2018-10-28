<?php get_header(); ?>


    <div class="main-wrapper">
        <div class="news-list">
            <div class="push40"></div>
            <div class="container">
                <h1>Новости</h1>
                <div class="row">
                    
                <?php   
                    $args = array(
                        'numberposts' => 3,
                        'post_type' => 'post',
                        'supprress_filters' => true,
                    );
                    $posts = get_posts($args);
                    foreach($posts as $post) {
                        setup_postdata($post);
                    ?>

                     <div class="col-sm-6 col-md-4">
                        <div class="element relative">
                            <a href="<?php the_permalink(); ?>" class="absolute"></a>
                            <div class="img-wrapper">
                            <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="push15"></div>
                            <a href="<?php the_permalink(); ?>" class="decoration black">
                                <?php the_title(); ?>
                            </a>
                            <div class="push5"></div>
                            <div class="news-date red"><?php the_time('m.j.Y'); ?></div>
                            <div class="push30"></div>
                        </div>
                    </div>
                    <hr class="clear-hr" />
                    
                    <?php 
                        }
                        wp_reset_postdata();
                    ?>

                </div>
                <hr />
                <!-- <div class="pagination text-center">
                    <ul>
                        <li class="prev"><a href="#"><span class="hidden-xs">Предыдущая</span></a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li>...</li>
                        <li><a href="#">13</a></li>
                        <li class="next"><a href="#"><span class="hidden-xs">Следующая</span></a></li>
                    </ul>
                </div> -->
            </div>
            <div class="push40"></div>
        </div>
        <div class="footer-push"></div>
    </div>

<?php get_footer(); ?>