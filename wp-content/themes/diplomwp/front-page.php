

<?php get_header(); ?>

    <div class="main-wrapper">
        <div class="header-slider white">
            <div class="table">
                <div class="table-cell">
                    <div class="container">
                        <div class="title"><?php the_field("main_title"); ?></div>
                        <p>
                            <?php the_field("main_text"); ?>
                        </p>
                        <a href="#" class="button min dark-btn">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="partners">
            <div class="push40"></div>
            <div class="container">
                <div class="title-h2"><span class="red">С кем мы</span> работаем</div>
                <div class="push10"></div>
                <div class="partners-carousel">

                <?php $partners = get_field("partners"); ?>

                <?php foreach($partners as $partner): ?>

                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="img-wrapper">
                                    <img src="<?php echo $partner["partners_img"]; ?>" /> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="element-content">
                                    <div class="push30 hidden-md"></div>
                                    <div class="title f24"><?php echo $partner["partners_title"]; ?></div>
                                    <div class="push5"></div>
                                    <div class="text">
                                        <?php echo $partner["partners_text"]; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
                    
                </div>
                <div class="push100"></div>
            </div>
        </div>
        <div class="loan-pay gray-bg">
            <div class="push40"></div>
            <div class="container">
                <div class="title-h2"><span class="red">Оплатить</span> займ</div>
                <p>
                    Вы можете оплатить вашу задолженность онлайн и уточнить о поступлении денежных средств по номеру горячей линии.
                </p>
                <form class="rf">
                    <div class="row">

                    <?php echo do_shortcode('[contact-form-7 id="71" title="Оплатить займ"]'); ?>
                        <!-- <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control required" placeholder="Номер договора" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control required" placeholder="Сумма" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <input type="submit" class="button btn block" value="Оплатить" />
                        </div> -->
                    </div>
                </form>
            </div>
            <div class="push20"></div>
        </div>
        <div class="news">
            <div class="push40"></div>
            <div class="container">
                <div class="title-h2">Новости</div>
                <div class="push5"></div>
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

                    <div class="col-md-4">
                        <div class="element relative">
                            <div class="date">
                                <div><?php the_time('F jS'); ?></div>
                            </div>
                            <div class="text">
                                <a href="<?php the_permalink(); ?>">
                                   <?php the_title(); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <?php 
                        }
                        wp_reset_postdata();
                    ?>
                    
                </div>
            </div>
            <div class="push40"></div>
        </div>
        <div class="footer-push"></div>
    </div>

   <?php get_footer(); ?>