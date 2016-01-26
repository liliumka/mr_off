<?php global $u_home, $u_tpl, $b_name, $b_desc;
get_header(); ?>
<!--01 Шапка сайта-->
<div id="top" class="box-header">
    <div class="container">

        <div class="line-logo">
            <?php // post_id = 115 (01-1 Шапка | Контактные данные)
            $id = 115; $field = get_fields($id) ?>

            <div class="logo-city no-mb">
                <span><?=$field['city']?></span>
            </div>

            <div class="logo-img">
                <img class="no-mb" src="<?=$u_tpl?>/images/MM-Logo-Full_210.png" width="210" height="148"  alt="">
                <img class="to-mb" src="<?=$u_tpl?>/images/MM-Logo-Full_130.png" width="130" height="92" alt="">
            </div>

            <div class="logo-phone no-mb">
                <span><?=$field['phone']?></span><br/>
                <span class="callback" data-call="#callback">Перезвоните мне</span>
            </div>


        </div><!--.line-logo-->

        <div class="line-title">
            <?php // post_id = 18 (01-2 Шапка | Заголовок)
            $id = 18;
            if(get_fields($id)) : ?>
                <h1><?php the_field('title',$id) ?></h1>
                <p><?php the_field('subtitle',$id) ?>

                <?php else : ?>
                <h1>Эксклюзивная дизайнерская мебель</h1>
                <p>на заказ по индивидуальным проектам</p>
            <?php endif; ?>
        </div><!--.line-title-->

        <div class="line-icons">
            <div>
                <?php // post_id = 9 (01-3 Шапка | Иконки-лозунги)
                $id = 9;
                if($field = get_fields($id)) : ?>
                    <?php for($i = 0; $i < 4; $i++): ?>
                    <span style="background-image: url('<?=$field["icon[$i]"]["url"]?>');">
                        <?=$field["description[$i]"]?>
                    </span>
                    <?php endfor; ?>

                    <?php else : ?>
                    <span class="i-1">Гарантия<br/>5 лет</span>
                    <span class="i-2">Собственная<br/>фабрика</span>
                    <span class="i-3">Воплощение любых<br/>идей в реальность</span>
                    <span class="i-4">С 2002 года<br/>на рынке</span>
                <?php endif; ?>
            </div>
        </div><!--.line-icons-->

        <div class="btn btn_h callback" data-call="#consultback">
            Консультация с дизайнером
        </div>

    </div><!--.container-->
</div><!--.box-header-->

<!--02 Дизайнеры-->
<div class="box-design">
    <div class="container">
        <div id="design" class="title-left">
            <h2>Над проектами трудятся</h2>
            <h3>дизайнеры с 10-летним опытом</h3>
        </div>

        <?php   $cat_ID = '4'; /* Рубрика: 02 Дизайнеры */
                $posts = get_posts("category=$cat_ID&orderby=date&order=ASC"); ?>

        <?php $i = 1; foreach($posts as $post): $id = $post->ID; ?>
            <?php if($field = get_fields($id)) : ?>

                <?php $class = ($i%2) ? 'нечетное' : 'четное'; ?>

                <div class="design <?=($i%2) ? 'design-left' : 'design-right';?> clearfix">
                    <div class="img">
                        <img src="<?=$field["photo"]["url"]?>" alt="">
                    </div>

                    <div class="info">
                        <p class="name"><?=$field["name_designer"]?></p>
                        <p class="subname"><?=$field["prof"]?></p>
                        <p class="more to-mb"></p>
                        <div class="content"><?=$field["content"]?></div>
                    </div>
                </div><!--.design <?=($i%2) ? 'design-left' : 'design-right';?>-->

            <?php $i++; endif; ?>
        <?php endforeach; ?>

        <div class="btn btn_ callback" data-call="#consultback">
            Бесплатная консультация
        </div>

    </div><!--.container-->
</div><!--.box-design-->

<!--03 Принципы-->
<div class="box-masteroff">
    <div class="container">

        <div id="masteroff" class="title-center">
            <h2>Мебель от</h2>
            <h3>мастерофф это:</h3>
        </div>

        <div class="block i-1 block-right">
            <h4>Мебель идеально впишется в ваш интерьер</h4>

            <p>Перед созданием шедевров, мы создаём индивидуальный дизайн-проект, который учитывает все детали вашего
                интерьера: освещения, колористики и стиля.</p>
        </div>

        <div class="block i-2 block-left">
            <h4>Изделия любой сложности</h4>

            <p>Высокотехнологические процессы производства позволяют нам изготавливать нестандартную мебель. Даже самые
                невероятные идеи с нами реальны!</p>
        </div>

        <div class="block i-3 block-right">
            <h4>Проработка до мельчайших деталей</h4>

            <p>Мы перфекционисты и прорабатываем каждый проект до абсолютного совершенства. При этом мы учитываем все
                пожелания и идеи вашей семьи.</p>
        </div>

        <div class="block i-4 block-left">
            <h4>Доставка и установка</h4>

            <p>Мы доставим и установим нашу мебель и предметы интерьера по всей Республике Беларусь. Наш собственный
                склад позволит Вам не беспокоиться о размещении мебели, если Вы не готовы ее принять на данный
                момент.</p>
        </div>

        <div class="block i-5 block-right">
            <h4>Техническое сопровождение</h4>

            <p>Предоставляем полное техническое сопровождение: даём рекомендации, предоставляем чертежи по электрике,
                плитке, сантехнике, системе вентиляции, ремонту помещения.</p>
        </div>

        <!--кнопка абсолютно спозиционирована относительно основного блока, чтобы сместить достаточно изменить свойство top-->
        <div class="button-abs">
            <div class="btn btn_ callback" data-call="#consultback">
                Бесплатная консультация
            </div>
        </div>
    </div>

</div><!--.box-masteroff-->

<!--04 Управляющий-->
<div class="box-magor">
    <div class="container">
        <div class="bg-top no-mb"></div>

        <?php   $cat_ID = '6'; /* Рубрика: 04 Управляющий */
        $posts = get_posts("category=$cat_ID&orderby=date&limit=1");
        $id = $posts[0]->ID; ?>
        <?php if($field = get_fields($id)) : ?>

            <div id="magor" class="title-left">
                <h3><?=$field["title"]?></h3>
            </div>


            <?php if(!empty($field["top"]) || !empty($field["left"])) {
                // позиционирование картинки
                $style = "style='";
                $style .= (!empty($field["top"]))? "top: {$field['top']}px; " : "";
                $style .= (!empty($field["left"]))? "left: {$field['left']}px; " : "";
                $style .= "'";
            } ?>
            <div class="photo" <?=$style?>>
                <img src="<?=$field["photo"]["url"]?>" width="<?=$field["photo"]["width"]?>" alt="">
            </div>
            <p class="quote"><?=$field["comment"]?></p>
            <p class="name"><?=$field["full_name"]?></p>

        <?php endif; ?>

        <div class="btn btn_ callback" data-call="#majorback">
            <span>Задать вопрос </span><br />управляющему
        </div>
    </div>
</div><!--.box-magor-->

<!--05 Решения-->
<div class="box-resheniya">
    <div class="container">

    <?php   $cat_ID = '7'; /* Рубрика: 05 Решения */
    $posts = get_posts("category=$cat_ID&orderby=date&limit=1");
    $id = $posts[0]->ID; ?>
    <?php if($field = get_fields($id)) : ?>

        <div id="resheniya" class="title-center">
            <h2><?=$field["title-top"]?></h2>
            <h3><?=$field["title-btm"]?></h3>
        </div>

        <div class="row clearfix">

            <?php for($i = 1; $i <= 4; $i++): ?>

                <div class="col <?=($i%2)?"col-left":"col-right"?>">
                    <div class="img">
                        <img src="<?=$field["image-$i"]["url"]?>" alt="">
                    </div>
                    <div class="title">
                        <p><?=$field["title-$i"]?></p>
                    </div>
                </div><!--.<?=($i%2)?"col-left":"col-right"?>-->

            <?php endfor; ?>

        </div><!--.row-->

    <?php endif; ?>

    </div>
</div><!--.box-resheniya-->

<!--06 Портфолио-->
<div class="box-portfolio">
    <div class="container clearfix">

        <div id="portfolio" class="title-center">
            <h2>Посмотрите исполненные</h2>
            <h3>желания наших клиентов</h3>
        </div>

        <?php   $cat_ID = '8'; /* Рубрика: 06 Портфолио */
                $posts = get_posts("category=$cat_ID&orderby=date&order=ASC"); ?>
        <?php $i = 1; foreach($posts as $post) : $id = $post->ID; ?>
            <?php if($field = get_fields($id)) : ?>
            <div class="project <?=($i%2)?"left":"right"?> clearfix">
                <div class="hidden_img">
                    <?php for($i=6;$i<=15;$i++): ?>
                        <?php if($field["img-$i"]): ?>
                            <img src="<?=$field["img-$i"]['sizes']['medium']?>" data-img="<?=$field["img-$i"]['url']?>" alt="">
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
                <div class="col col-lg">
                    <div class="img">
                        <img src="<?=$field['img-lg']['sizes']['medium']?>" data-img="<?=$field['img-lg']['url']?>" alt="">
                    </div>
                </div>
                <div class="col col-sm">
                    <div class="img">
                        <img src="<?=$field['img-sm-1']['sizes']['medium']?>" data-img="<?=$field['img-sm-1']['url']?>" alt="">
                    </div>
                    <div class="img">
                        <img src="<?=$field['img-sm-2']['sizes']['medium']?>" data-img="<?=$field['img-sm-2']['url']?>" alt="">
                    </div>
                </div>
                <div class="col col-sm">
                    <div class="img">
                        <img src="<?=$field['img-sm-3']['sizes']['medium']?>" data-img="<?=$field['img-sm-3']['url']?>" alt="">
                    </div>
                    <div class="img">
                        <img src="<?=$field['img-sm-4']['sizes']['medium']?>" data-img="<?=$field['img-sm-4']['url']?>" alt="">
                    </div>
                </div>

            </div><!--.project.<?=($i%2)?"left":"right"?>-->
            <?php endif; ?>
        <?php $i++; endforeach; ?>

    </div><!--.container-->
</div><!--.box-portfolio-->

<!--07 Видеоотзывы-->
<div class="box-video">
    <div class="container">
        <?php $id = 149; // запись Видеоотзывы
        if($field = get_fields($id)) : ?>
            <div id="video" class="title-center">
                <h3><?=($field["title"])? $field["title"] : "Посмотрите наши видеообзоры" ?></h3>
            </div>
            <div class="row clearfix">
                <?php for($i = 1; $i <= 4; $i++): ?>
                    <div class="col <?=($i%2)?"col-left":"col-right"?>">
                        <div class="video">
                            <iframe src="https://www.youtube.com/embed/<?= array_pop(explode('/', $field["video_$i"])); ?>?feature=oembed&amp;rel=0&amp;autoplay=0&amp;controls=1&amp;showinfo=0&amp;disablekb=0" allowfullscreen="" ></iframe>
                        </div>
                    </div><!--.<?=($i%2)?"col-left":"col-right"?>-->
                <?php endfor; ?>
            </div><!--.row-->
        <?php endif; ?>
    </div>
</div><!--.box-video-->

<!--Как заказать-->
<div class="box-order">
    <div class="container">
        <div id="zakaz" class="title-right">
            <h2>Как заказать</h2>
            <h3>мебель:</h3>
        </div>

        <div class="row-items">
            <!--hr position absolute-->
            <hr class="dashed">

            <div class="item">
                <div class="pic">
                    <div class="outer-round i-1">
                        <div class="inner-round">1</div>
                    </div>
                </div>
                <div class="title">Вы оставляете заявку</div>
            </div><!--.item-->

            <div class="item">
                <div class="pic">
                    <div class="outer-round i-2">
                        <div class="inner-round">2</div>
                    </div>
                </div>
                <div class="title">Мы производим<br /> замер</div>
            </div><!--.item-->

            <div class="item">
                <div class="pic">
                    <div class="outer-round i-3">
                        <div class="inner-round">3</div>
                    </div>
                </div>
                <div class="title">Делаем эскиз</div>
            </div><!--.item-->

            <div class="item">
                <div class="pic">
                    <div class="outer-round i-4">
                        <div class="inner-round">4</div>
                    </div>
                </div>
                <div class="title">Устанавливаем<br /> мебель</div>
            </div><!--.item-->

        </div><!--.row-items-->

        <div class="btn btn_ callback" data-call="#priceback">
            <span>Оставить заявку</span>
            <br />на расчёт стоимости
        </div>
    </div><!--.container-->
</div><!--.box-order-->

<!--Контакты-->
<div class="box-contacts">
    <div class="container">

        <?php   $cat_ID = '10'; /* Рубрика: 08 Контакты */
        $posts = get_posts("category=$cat_ID&orderby=date&limit=1");
        $id = $posts[0]->ID; ?>
        <?php if($field = get_fields($id)) : ?>

            <div id="contact" class="title-center">
                <h2><?=$field["title-top"]?></h2>
                <h3><?=$field["title-btm"]?></h3>
            </div>

            <p class="t-bold"><?=$field["text"]?></p>

            <?php for($i = 1; $i <=3; $i++) : ?>
                <?php if($field["address-$i"]) : ?>
                    <p><?=$field["address-$i"]?></p>
                    <p>
                        <span class="t-bold">Часы работы: </span>
                        <?=$field["time-$i"]?>
                    </p>
                    <br/>
                <?php else : continue; endif; ?>
            <?php endfor; ?>
        <?php endif; ?>

        <p class="t-gray no-mb">Для удобства вы можете воспользоваться картой расположенной ниже.</p>
        <br/>
        <p class="t-md">Остались вопросы? Вы&nbsp;можете задать их менеджеру по телефону:</p>
        <br/>
        <p class="t-lg"><?=get_field('phone','115')?></p>
        <br/>
        <p class="t-sm">или оставьте свой номер телефона и<br/>менеджер сам перезвонит вам</p>

        <!--кнопка абсолютно спозиционирована относительно основного блока, чтобы сместить достаточно изменить свойство top/bottom-->
        <div class="btn btn_ callback" data-call="#callback">
            Оставить номер
        </div>

    </div><!--.container-->
</div><!--.box-contacts-->

<!--Карта-->
<div class="map">
    <div class="bg-top"></div>
    <div id='map'></div>
</div><!--.box-map-->

<?php get_footer(); ?>