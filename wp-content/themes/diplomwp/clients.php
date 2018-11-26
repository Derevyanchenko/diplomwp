<?php 
/*
    Template Name: Клиентам    
*/
?>

<?php get_header(); ?> 


    <div class="main-wrapper">
        <div class="clients-wrapper">
            <div class="push35"></div>
            <div class="container">
                <h1>Клиентам</h1>
                <h2><span class="red">Способы</span> оплаты</h2>
                <div class="push5"></div>
            </div>
            <div class="clients-head">
                <div class="section">
                    <div class="container">
                        <div class="mobile-tab-header">Онлайн-оплата</div>
                        <ul class="tabs">
                            <li class="current">Онлайн-оплата</li>
                            <li>Оплата через терминалы</li>
                            <li>Оплата через банк</li>
                            <div class="cleaner"></div>
                        </ul>
                    </div>
                    <div class="push30"></div>
                    <div class="push10 visible-md visible-lg"></div>
                    <div class="box visible">
                        <div class="container">
                            <p>
                                <?php the_field("onlineMethods_text"); ?>
                            </p>
                        </div>
                        <div class="gray-bg">
                            <div class="push40"></div>
                            <div class="container">
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
                    </div>
                    <div class="box terminal-box">
                        <div class="container">
                            <div class="terminal-pay">
                                <div class="steps">
                                    <div class="row">

                                    <?php $methods = get_field("methods"); ?>
                                    <?php foreach($methods as $method): ?>

                                        <div class="col-sm-4">
                                            <div class="element el1 relative">
                                                <img src="<?php echo $method["methods_img"]; ?>" />
                                                <?php echo $method["methods_title"]; ?>
                                            </div>
                                        </div>
                                    
                                    <?php endforeach; ?>                                       

                                    </div>
                                </div>
                            </div>
                            <div class="push20"></div>
                            <div class="terminal-carousel">

                                <?php  

                                    $args = array(
                                        'numberposts' => 3,
                                        'post_type' => 'instruction',
                                        'suppress_filters' => true,
                                    );
                                    $posts = get_posts($args);

                                    foreach($posts as $post) {
                                        setup_postdata($post);
                                    ?>

                                    <div class="item text-center">
                                        <div class="item-inner relative">
                                            <a href="<?php the_permalink(); ?>" class="absolute"></a>
                                            <div class="img-wrapper">
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                            <div class="push20"></div>
                                            <div class="text">
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                    </div>
                
                                    <?php
                                    }
                                    wp_reset_postdata();
                                ?>

                                
                            </div>
                            <div class="push100"></div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="container">
                            <div class="bank-pay">
                                <div class="steps">
                                    <div class="row">

                                        <?php $bankMethods = get_field("bankMethods"); ?>
                                        <?php foreach($bankMethods as $bankMethod): ?>

                                             <div class="col-sm-4">
                                                <div class="element el1 relative">
                                                    <img src="<?php echo $bankMethod["bankMethods_img"]; ?>" style="top: 0;" />
                                                    <?php echo $bankMethod["bankMethods_title"]; ?>
                                                </div>
                                            </div>
                                        
                                        <?php endforeach; ?>    

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gray-bg">
                            <div class="push40"></div>
                            <div class="container">
                                <div class="title-h2"><span class="red">Сообщить о погашении </span> задолженности</div>
                                <div class="push10"></div>
                                <form class="rf">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control required" placeholder="ФИО" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control required" placeholder="Номер договора" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="file-input-box">
                                                            <input type="file" id="fileInput1" />
                                                            <label for="fileInput1">Прикрепить квитанцию</label>
                                                            <div class="file-input-info">
                                                                <div class="file-input-info-inner relative">
                                                                    <div class="attach-name"></div> <span class="attach-delete"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="submit" class="button btn block" value="Отправить" />
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="push20"></div>
                        </div>
                    </div>
                </div>
                <div class="push35"></div>
                <div class="container">
                    <div class="title-h2"><span class="red">Если у вас</span> задолжность</div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/img4.jpg" />
                            <div class="push20"></div>
                        </div>
                        <div class="col-md-6">
                            <p>
                                В случае переуступки прав требования Вы можете быть уверены 
                                в том, что ваш вопрос финансовой задолженности будет решен максимально быстро, без лишних затрат и стресса. 
                                Профессиональная служба взыскания Финколлект занимается решением финансовых вопросов за счет индивидуального подхода 
                                к каждому клиенту.
                            </p>
                            <p>
                                Чем быстрее вы примете решение о сотрудничестве с нами, тем больше вероятность погашения 
                                задолженности без привлечения судебноисполнительных органов.
                            </p>
                        </div>
                    </div>
                    
                    <div class="push10 visible-md visible-lg"></div>
                    <div class="contact-us">
                        <p class="weight600 f18">Свяжитесь с нами!</p>
                        <p>
                            После получения письма, звонка или смс-сообщения Вам необходимо срочно связаться с нашими 
                            специалистами для скорейшего решения вопроса. В случае сотрудничества с нами, Вы получаете выгодные 
                            условия погашения задолженности, индивидуальный подход, возможность подписания и разрешения вопроса на условиях 
                            мирового соглашения. Мы хотим Вам помочь и предложить наиболее комфортные для Вас условия сотрудничества с нами.
                        </p>
                        <p>
                            <a href="#callback" class="fancyboxModal button" style="padding-left: 62px; padding-right: 62px;">перезвоните мне</a>
                        </p>
                    </div>
                </div>
                <div class="push10"></div>
            </div>
            <div class="clients-middle">
                <div class="push35"></div>
                <div class="container">
                    <div class="title-h2"><span class="red">советы</span> и рекомендации</div>
                    <div class="section">
                        <div class="mobile-tab-header">Рекомендации</div>
                        <ul class="tabs">
                            <li class="current">Рекомендации</li>
                            <li>Советы</li>
                        </ul>
                        <div class="cleaner"></div>
                        <div class="push30"></div>
                        <div class="box visible">
                            <div class="recommendations">
                                <div class="element relative">
                                    <img src="images/icon11.png" />
                                    <p>
                                        В первую очередь ни в коем случае не следует отказываться от контактов со специалистами по взысканию 
                                        просроченной задолженности, игнорировать информационную рассылку от Компании, т.к. главной целью нашего 
                                        взаимодействия является поиск оптимального решения Вашего вопроса финансовой задолженности.
                                    </p>
                                </div>
                                <div class="element relative">
                                    <img src="images/icon12.png" />
                                    <p>
                                        Отнеситесь к оплате задолженности ответственно, ведь в случае неоплаты в отношении Вас могут наступить 
                                        неприятные последствия, которые будут отнимать у вас время, деньги и нервы.
                                    </p>
                                </div>
                                <div class="element relative">
                                    <img src="images/icon13.png" />
                                    <p>
                                        Если Вы попали в трудную жизненную ситуацию, и временно не можете оплатить Вашу задолженность, то 
                                        вам необходимо обратиться по телефону горячей линии 8-800-700-46-44 и описать сложившуюся ситуацию. 
                                        Мы обязательно поможем вам решить данную сложность.
                                    </p>
                                    <p>
                                        Компания Финколлект рассмотрит ваше заявление и пойдет вам навстречу, приостановит начисление процентов 
                                        или скорректирует сумму задолженности, особенно в случаях:
                                    </p>
                                    <div class="content">
                                        <ul>
                                            <li>
                                                В случае стойкой утраты трудоспособности по причинам длительного нахождения на стационарном лечении;
                                            </li>
                                            <li>
                                                Вам была присвоена инвалидность 1 или 2 группы;
                                            </li>
                                            <li>
                                                По решению суда Вы были признаны недееспособным или ограниченно дееспособным;
                                            </li>
                                            <li>
                                                Если вы утратили жилое помещение и находящееся в нем имущество (пожар, наводнение и пр.);
                                            </li>
                                            <li>
                                                 Вас призвали в вооруженные силы РФ;
                                            </li>
                                            <li>
                                                Если вы лишены свободы или на основании судебного акта заключены в СИЗО;
                                            </li>
                                            <li>
                                                Вы потеряли работу, и в течение трех месяцев не можете трудоустроиться, и при этом у Вас есть 
                                                несовершеннолетние дети/ неполная семья в соответствии с законодательством РФ;
                                            </li>
                                            <li>
                                                Вы стали единственным кормильцем в семье (утеря кормильца);
                                            </li>
                                            <li>
                                                Смерть заемщика.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            тут советы
                            <div class="push30"></div>
                        </div>
                    </div>
                </div>
                <div class="push10"></div>
            </div>
            <div class="gray-bg">
                <div class="push40"></div>
                <div class="container">
                    <div class="title-h2"><span class="red">последствия</span> неоплаты</div>
                    <div>Возможные последствия в случае неоплаты задолженности.</div>
                    <div class="push10"></div>
                    <div class="accordeon">
                        <div class="element active">
                            <div class="title">
                                1. Увеличение суммы задолженности
                            </div>
                            <div class="element-content">
                                При подписании плательщиком соглашения на передачу сведений в Бюро Кредитных Историй все финансовые компании в силу действующего законодательства РФ обязаны предоставлять в БКИ максимально полную информацию о внесении средств. 
                                Просрочки, неплатежи, судебные споры и исполнительные производства портят Вашу кредитную историю в целом и приводят
                                к нулю шансы на дальнейшее получение кредитов и микрозаймов.
                            </div>
                        </div>
                        <div class="element">
                            <div class="title">
                                2. Влияние на Вашу кредитную историю
                            </div>
                            <div class="element-content">
                                С другой стороны дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие 
                                в формировании систем массового участия. Значимость этих проблем настолько очевидна, что новая модель организационной 
                                деятельности способствует подготовки и реализации модели развития.
                            </div>
                        </div>
                        <div class="element">
                            <div class="title">
                                3. Судебные разбирательства
                            </div>
                            <div class="element-content">
                                С другой стороны дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие 
                                в формировании систем массового участия. Значимость этих проблем настолько очевидна, что новая модель организационной 
                                деятельности способствует подготовки и реализации модели развития.
                            </div>
                        </div>
                        <div class="element">
                            <div class="title">
                                4. Ограничение выезда за пределы РФ
                            </div>
                            <div class="element-content">
                                С другой стороны дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие 
                                в формировании систем массового участия. Значимость этих проблем настолько очевидна, что новая модель организационной 
                                деятельности способствует подготовки и реализации модели развития.
                            </div>
                        </div>
                        <div class="element">
                            <div class="title">
                                5. Арест счетов и опись имущества
                            </div>
                            <div class="element-content">
                                С другой стороны дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие 
                                в формировании систем массового участия. Значимость этих проблем настолько очевидна, что новая модель организационной 
                                деятельности способствует подготовки и реализации модели развития.
                            </div>
                        </div>
                        <div class="element">
                            <div class="title">
                                6. Сложности с трудоустройством
                            </div>
                            <div class="element-content">
                                С другой стороны дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие 
                                в формировании систем массового участия. Значимость этих проблем настолько очевидна, что новая модель организационной 
                                деятельности способствует подготовки и реализации модели развития.
                            </div>
                        </div>
                        <div class="element">
                            <div class="title">
                                7. Уголовная ответственность
                            </div>
                            <div class="element-content">
                                С другой стороны дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие 
                                в формировании систем массового участия. Значимость этих проблем настолько очевидна, что новая модель организационной 
                                деятельности способствует подготовки и реализации модели развития.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="push50"></div>
            </div>
            
            <div class="faq">
                <div class="push40"></div>
                <div class="container">
                    <div class="title-h2"><span class="red">Часто задаваемые</span> вопросы</div>
                    <div class="accordeon invert">
                        <div class="element active">
                            <div class="title">
                                1. Способы оплаты задолженности?
                            </div>
                            <div class="element-content">
                                Ответ: «Оплату задолженности можно произвести в любом банке Вашего города, через терминалы 
                                QIWI и CyberPlat. Денежные средства поступают на счет Компании до 3-х рабочих дней».
                            </div>
                        </div>
                        <div class="element">
                            <div class="title">
                                2. Как я могу быть уверен в полном погашении задолженности?
                            </div>
                            <div class="element-content">
                                С другой стороны дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие 
                                в формировании систем массового участия. Значимость этих проблем настолько очевидна, что новая модель организационной 
                                деятельности способствует подготовки и реализации модели развития.
                            </div>
                        </div>
                        <div class="element">
                            <div class="title">
                                3. Какие начисления у меня теперь будут?
                            </div>
                            <div class="element-content">
                                С другой стороны дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие 
                                в формировании систем массового участия. Значимость этих проблем настолько очевидна, что новая модель организационной 
                                деятельности способствует подготовки и реализации модели развития.
                            </div>
                        </div>
                        <div class="element">
                            <div class="title">
                                4. Вы - коллекторское агентство, у Вас незаконные способы взыскания?
                            </div>
                            <div class="element-content">
                                С другой стороны дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие 
                                в формировании систем массового участия. Значимость этих проблем настолько очевидна, что новая модель организационной 
                                деятельности способствует подготовки и реализации модели развития.
                            </div>
                        </div>
                        <div class="element">
                            <div class="title">
                                5. Как я могу узнать о произведенных платежах / сумму задолженности / любую другую информацию?
                            </div>
                            <div class="element-content">
                                С другой стороны дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие 
                                в формировании систем массового участия. Значимость этих проблем настолько очевидна, что новая модель организационной 
                                деятельности способствует подготовки и реализации модели развития.
                            </div>
                        </div>
                        <div class="element">
                            <div class="title">
                                6. Что делать в случае наступления форс-мажорной ситуации?
                            </div>
                            <div class="element-content">
                                С другой стороны дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие 
                                в формировании систем массового участия. Значимость этих проблем настолько очевидна, что новая модель организационной 
                                деятельности способствует подготовки и реализации модели развития.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="push50"></div>
            </div>
        </div>
        
        <div class="footer-push"></div>
    </div>

<?php get_footer(); ?>