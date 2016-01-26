<?php
//phpinfo();
// задаем глобальные переменные, куда запишем данные WP
global $u_home, $u_tpl, $b_name, $b_desc;
$u_home = home_url( '/' );
$u_tpl = get_bloginfo('template_directory');

$b_name = get_bloginfo('name');
$b_desc = get_bloginfo('description');

?>

<!doctype html>
<html lang="ru">
<head>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--Подключаем Media Queries Javascript-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lte IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=320, initial-scale=1" />

    <title><?=$b_name?></title>
    <meta name="description" content="<?=$b_desc?>">
    <meta name="keywords" content="">
<!--    <link rel="icon" href="--><?//=$u_tpl?><!--/images/favicon_32x32.png" sizes="32x32" />-->
    <link rel="icon" href="<?=$u_tpl?>/images/favicon_16x16.png" sizes="16x16" />
    <style>
        .to-mb{display:none!important}html{width:100%;background:#E4EDED;font-size:18px;margin:auto;cursor:default}body{min-width:320px;width:100%;max-width:2000px;background:#fff;margin:auto;font:1rem/1.2 lato,Tahoma,Arial,sans-serif;color:#333;font-weight:400}h1{text-align:center;text-transform:uppercase;font-size:2.6666666666667rem;font-weight:400}.fixed-menu{display:none}.box-header{background:rgba(51,51,51,0.8);/*min-height:810px*/;text-align:center;color:#fff}.box-header .container{padding-top:32px;padding-bottom: 110px;}.box-header .line-logo{display:table;border-collapse:collapse;width:100%;max-width:1100px;min-height:148px;margin:0 auto}.box-header .line-logo .logo-city,.box-header .line-logo .logo-img,.box-header .line-logo .logo-phone{display:table-cell;width:33.333333333333%;vertical-align:middle}.box-header .line-logo .logo-city{text-align:left}.box-header .line-logo .logo-img{text-align:center}.box-header .line-logo .logo-phone{text-align:right}.box-header .line-logo .logo-phone > span:first-child{font-size:1.3333333333333rem}.box-header .line-logo .logo-phone > span:last-child{font-size:.88888888888889rem;font-weight:300;border-bottom:1px dashed #fff;padding-bottom:3px;cursor:pointer}.box-header .line-title{min-height:86px;margin:57px auto 72px}.box-header .line-title p{font-size:1.3333333333333rem}.box-header .line-icons{width:100%;max-width:1010px;margin:0 auto 85px;height:130px}.box-header .line-icons span{display:inline-block;width:25%;padding-top:88px;margin:0 -4px;background-repeat:no-repeat;background-position:center top;background-size:56px 56px}.btn.btn_h{width:510px;margin:auto;min-height:28px;padding:45px 10px;font-size:1.3333333333333rem;color:#fff;font-weight:900;text-transform:uppercase;box-shadow:inset 0 0 0 3px #be8f3f}
    </style>
    <script>var url = '<?=$u_tpl?>';</script>
</head>
<body>
<!--Фиксированное меню-->
<div class="fixed-menu">
    <div class="fx_wrap">
        <div class="container">
            <div class="top-menu clearfix">
                <div class="btns to-mb">
                    <span class="menu" title="Показать меню"></span>
                    <span class="back" title="Скрыть меню"></span>
                    <span class="call callback" data-call="#callback" title="Заказать звонок"></span>
                </div>

                <a href="#top" class="logo no-mb">
                    <img src="<?=$u_tpl?>/images/MM-Logo-mini.png" alt="" width="176" height="19">
                </a>
                <div class="toggle">
                    <div class="call-btm to-mb callback" title="Заказать звонок" data-call="#callback"><span class="ico"></span><span>+375 29 3595911</span></div>

                    <ul>
                        <li><a href="#design">Дизайнеры</a></li>
                        <li><a href="#masteroff">Принципы</a></li>
                        <li><a href="#magor">Управляющий</a></li>
                        <li><a href="#resheniya">Решения</a></li>
                        <li><a href="#portfolio">Портфолио</a></li>
                        <li><a href="#video">Видео</a></li>
                        <li><a href="#zakaz">Заказать</a></li>
                        <li><a href="#contact">Контакты</a></li>
                    </ul>
                </div>

            </div><!--.top-menu-->
        </div><!--.container-->
    </div><!--.fx_wrap-->
</div><!--.fixed-menu-->