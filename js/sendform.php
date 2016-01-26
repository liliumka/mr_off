<?php
if(!isset($_POST['id']))
    header("Location: /");


// отправитель (email сайта)
$from = 'xo7788@mail.ru';
$from = 'noreply@masteroff.tvivanovatv.ru';

// получатели
$to = "blue-eyesgirl@yandex.ru";
//$to = "xo7788@mail.ru";
$to2 = "m2lead@yandex.ru";



$id = htmlspecialchars($_POST['id']);
$form_name = htmlspecialchars($_POST['form_name']);
$call_name = htmlspecialchars(trim($_POST['mname']));
$call_phone = htmlspecialchars(trim($_POST['mphone']));

$site_name = "MASTEROFF"; /*?*/
$subj = "[$site_name заявка] $form_name";  // Тема письма
$now_dateTime = date("d.m.Y H:i:s",time()); // Дата
// html-сообщение
$text=<<<heredoc
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>$subj</title>
</head>

<body>
<p class="title" style="font: 18px/40px Arial, sans-serif;
        color: #cbcbcb;
        text-transform: uppercase;
        text-shadow: 0px 1px #000;
        box-sizing: border-box;
        height: 40px;
        background: #333 url('http://s8.hostingkartinok.com/uploads/images/2016/01/5be59622e086664d1ef3742231bb6452.png') 10px center no-repeat;
        background-size: 160px 20px;
        padding-left: 210px;">Заказ звонка с сайта</p>

<p style="font: 16px/1.5 Arial, sans-serif;
        margin-top: 10px;">Запрос на звонок от посетителя web-сайта <span style="color: #c99350;">$site_name</span>.</p>

<h2 style="font-size: 17px;
        font-weight: bold;
        color: #666;
        text-align: left;
        margin-top: 20px;
        margin-bottom: 15px;
        text-transform: none;">Форма: <span style="color: #c99350;
        text-transform: uppercase;">"$form_name"</span></h2>

<table style="width:70%;
        border-collapse: collapse;
        border-color: #c9c9c9;">
    <tr>
        <td style="width:100px;padding: 5px;
        border-color: #c9c9c9;">Дата заявки:</td>
        <td style="padding: 5px;
        border-color: #c9c9c9;">$now_dateTime</td>
    </tr>
    <tr>
        <td style="padding: 5px;
        border-color: #c9c9c9;">Имя:</td>
        <td style="padding: 5px;
        border-color: #c9c9c9;"><b>$call_name</b></td>
    </tr>
    <tr>
        <td style="padding: 5px;
        border-color: #c9c9c9;">Телефон:</td>
        <td style="padding: 5px;
        border-color: #c9c9c9;"><b>$call_phone</b></td>
    </tr>
</table>
</body>
</html>
heredoc;

// отправка письма
send_as_html($from, $to, $subj, $text);
if($to2) {
    send_as_html($from, $to2, $subj, $text);
}

echo "OK";

/*------------------------*/
function send_as_html ($from, $to, $subj, $text) {
    $from = "=?utf-8?b?" . base64_encode("MASTEROFF") . "?= <" .$from. ">";
    $subj = "=?utf-8?b?" . base64_encode($subj) . "?=";

    $type_mail =
        "Content-type:text/html; Charset=utf-8\r\n"
        ."From: $from\r\n"
        ."X-Mailer: PHP/".phpversion();

    return @mail($to, $subj, $text, $type_mail);
}

?>
