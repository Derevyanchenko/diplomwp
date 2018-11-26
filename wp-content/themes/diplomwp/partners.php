<?php 
    /*
        Template Name: Partners page
    */
        global $fpid;
?>

<?php get_header(); ?>

     <div class="main-wrapper">
        <div class="services-wrapper">
            <div class="push35"></div>
            <div class="container">
                <h1>Партнерам</h1>
                <h2><span class="red">наши</span> услуги</h2>
                <div class="push5"></div>
            </div>
            <div class="our-services">
                <div class="container">
                    <div class="row">
                        
                        <?php $services = get_field("services"); ?>

                        <?php foreach($services as $service): ?>
                        

                            <div class="col-sm-6">
                                <div class="element relative">
                                    <img src="<?php echo $service['services_img']; ?>" />
                                    <div class="title weight600 f18">
                                        <?php echo $service['services_title']; ?>
                                    </div>
                                    <div class="push8"></div>
                                    <div class="content">
                                       <?php echo $service['services_content']; ?>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>
                       

                    </div>
                    
                    <div class="push15"></div>
                    <p>Если у вас есть предложения и вопросы, вы можете связаться с нами по телефонам или 
                    отправить нам письмо: <a href="mailto:partner@fincollect.ru" class="decoration">partner@fincollect.ru</a></p>
                </div>
                <div class="push10"></div>
                <hr />
            </div>
        </div>
        
        <div class="partners">
            <div class="push25"></div>
            <div class="container">
                <div class="title-h2"><span class="red">Наши</span> партнеры</div>
                <div class="push5"></div>
                <div class="partners-carousel">
                    
                <?php $partners = get_field("partners", $fpid); ?>

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
            <hr />
        </div>
        
        
        <div class="tenders">
            <div class="push25"></div>
            <div class="container">
                <div class="title-h2"><span class="red">Наши</span> тендеры</div>
                <div class="push5"></div>
                <div class="tenders-carousel">

                    <?php $tenders = get_field("tenders"); ?>

                    <?php foreach($tenders as $tender): ?>
                        
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="img-wrapper">
                                    <img src="<?php echo $tender["tenders_img"]; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="element-content">
                                    <div class="push10 hidden-md"></div>
                                    <div class="title f24"><?php echo $tender["tenders_title"]; ?></div>
                                    <div class="push5"></div>
                                    <div class="text">
                                        <?php echo $tender["tenders_text"]; ?>
                                    </div>
                                    <div class="push20"></div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <a href="#" class="button block">Участвовать</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php endforeach; ?>

                </div>
                <div class="push100"></div>
            </div>
            <hr />
        </div>
        <div class="docs">
            <div class="push20"></div>
            <div class="container">
                <div class="title-h2"><span class="red">Рекомендательные</span> письма</div>
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
        
        <div class="footer-push"></div>
    </div>

<?php get_footer(); ?>