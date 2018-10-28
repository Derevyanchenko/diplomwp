<?php get_header(); ?>


    <div class="main-wrapper">
        <div class="news-detail">
            <div class="push40"></div>
            <div class="container">
                <h1>
                    <?php the_title(); ?>
                </h1>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="img-wrapper">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="news-date red"><?php the_time('m.j.Y'); ?></div>
                    <p>
                        <?php the_post(); the_content(); ?>
                    </p>
                    <iframe width="960" height="450" src="<?php the_field("news_video"); ?>" frameborder="0" allowfullscreen></iframe>
                </div>
                <hr />
                <a href="http://diplomwp/%D0%BE-%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D0%B8/%D0%BD%D0%BE%D0%B2%D0%BE%D1%81%D1%82%D0%B8/" class="decoration">Вернуться к списку новостей</a>
            </div>
            <div class="push40"></div>
        </div>
        <div class="footer-push"></div>
    </div>

    <script>
        $( function()
        {
            $('audio').audioPlayer();
        });
    </script>

<?php get_footer(); ?>

