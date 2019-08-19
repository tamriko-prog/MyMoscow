<html>
    <head>
        <title>MyMoscow - агенство интересных маршрутов</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://ironlinks.ru/nordic/tamara/project1/css/style.css"/>
        <link rel="stylesheet" href="https://ironlinks.ru/nordic/tamara/project1/css/slider.css"/>
        <script src="https://ironlinks.ru/nordic/tamara/project1/js/jquery.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVf_L_22vFQte6UXS1fPduAl4DJDLP97U&callback=initMap"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    </head>
    <body>

    <?
    require_once($_SERVER['DOCUMENT_ROOT'].'/nordic/tamara/project1/global_pass.php');
    require_once(PROJECT_ROOT.'/system/classes/autoload.php'); 
    ?>  
    
    <?
    $link = mysqli_connect('localhost', 'nordic_tamara', '7D1w1V1t', 'nordic_tamara_1');
    mysqli_set_charset($link , "utf8");
    ?>