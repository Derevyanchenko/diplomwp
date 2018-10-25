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
                        <div class="col-sm-4">
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
                        </div>
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
                    <div class="col-md-4">
                        <div class="element relative">
                            <div class="date">
                                <div>04</div>
                                <small>апреля</small>
                            </div>
                            <div class="text">
                                <a href="#">
                                    Запустила продажу сертификатов
                                    на оказание юридических услуг
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="element relative">
                            <div class="date">
                                <div>04</div>
                                <small>апреля</small>
                            </div>
                            <div class="text">
                                <a href="#">
                                    Запустила продажу сертификатов
                                    на оказание юридических услуг
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="element relative">
                            <div class="date">
                                <div>04</div>
                                <small>апреля</small>
                            </div>
                            <div class="text">
                                <a href="#">
                                    Запустила продажу сертификатов
                                    на оказание юридических услуг
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="push40"></div>
        </div>
        <div class="footer-push"></div>
    </div>

   <?php get_footer(); ?>