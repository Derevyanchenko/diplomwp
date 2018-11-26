<?php 
/*
    Template Name: Карьера    
*/
?>

<?php get_header(); ?> 

    <div class="main-wrapper">
        <div class="job-wrapper">
            <div class="push35"></div>
            <div class="container">
                <h1><?php the_title(); ?></h1>
                <h2><span class="red">Почему стоит</span> работать в «Финколлект»</h2>
                <div class="push5"></div>
            </div>
            <div class="job-why">
                <div class="container">
                    <div class="row">

                    <?php $reasons = get_field("reasons"); ?>

                    <?php foreach($reasons as $reason): ?>

                        <div class="col-sm-6">
                            <div class="element relative">
                                <img src="<?php echo $reason["reasons_img"]; ?>" />
                                <div class="title weight600 f18">
                                   <?php echo $reason["reasons_title"]; ?>
                                </div>
                                <div class="push8"></div>
                                <div class="text">
                                    <?php echo $reason["reasons_text"]; ?>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>

                    </div>  
                </div>
                <div class="push10"></div>
                <hr />
            </div>

            <div class="vacancy">
                <div class="push25"></div>
                <div class="container">
                    <div class="title-h2">Вакансии</div>
                    <div class="push5"></div>
                    <div class="accordeon invert">

                        <?php $vacancy = get_field("vacancy"); ?>

                        <?php foreach($vacancy as $vac): ?>

                        <div class="element">
                            <div class="title">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <?php echo $vac["vacancy_title"]; ?>
                                    </div>
                                    <div class="col-sm-6 text-right-sm">
                                        <?php echo $vac["vacancy_sallary"]; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="element-content">
                                <div class="push10"></div>
                                <div class="row content">
                                    <div class="col-sm-6">
                                        <?php echo $vac["vacancy_text_left"]; ?>
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <a href="#resume" class="button fancyboxModal block">отправить резюме</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="push5"></div>
                                        <?php echo $vac["vacancy_text_right"]; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endforeach; ?>

                    </div>
                    <div class="push45"></div>
                    <div class="manager">
                        <div class="title-h2"><?php the_field("careerContacts_title"); ?></div>
                        <p><?php the_field("careerContacts_text"); ?></p>
                        <div class="row">

                            <?php $career_contacts = get_field("careerContacts_block"); ?>

                            <?php foreach($career_contacts as $career_contact): ?>

                            <div class="col-sm-6">
                                <?php echo $career_contact['careerContacts_block-content']; ?>
                            </div>
                            
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
                <div class="push50"></div>
            </div>
        </div>
        
        <div class="footer-push"></div>
    </div>
<?php get_footer(); ?>