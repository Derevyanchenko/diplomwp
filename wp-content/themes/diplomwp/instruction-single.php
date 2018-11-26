<?php 

/*
    Template Name: Страница с инструкцией
    Template Post Type: instruction
*/

?>

<?php get_header(); ?>

    <div class="main-wrapper">
        <div class="qiwi">
            <div class="push40"></div>
            <div class="container">
                <h1></h1>

                    <?php $instructions = get_field("instruction"); ?>

                    <?php foreach($instructions as $instruction): ?>
                    <div class="table">
                        <div class="table-row">
                            <div class="table-cell img-td">
                                <img src="<?php echo $instruction["instruction_img"]; ?>" />                    
                            </div>
                            <div class="table-cell text">
                                <p>
                                   <?php echo $instruction["instruction_text"]; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>

        <div class="docs">
            <div class="push20 hidden-xs"></div>
            <div class="container">
                <div class="title-h2"><span class="red">скачать</span> инструкцию</div>
                <div class="push15"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="element relative">
                            <a href="<?php the_field("download"); ?>" class="absolute"></a>
                            <div class="icon">
                                <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/pdf.png" /></div>
                                <small>8 kb</small>
                            </div>
                            <div class="text">
                                <a href="<?php the_field("download"); ?>">
                                    <?php the_field("download_text"); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="push30"></div>
        </div>
        <div class="footer-push"></div>
    </div>

    <?php get_footer(); ?>