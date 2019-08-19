<?php
	/*ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	
	
	require_once($_SERVER['DOCUMENT_ROOT'].'/nordic/tamara/project1/global_pass.php');
	require_once(PROJECT_ROOT.'/system/classes/autoload.php');  

    var_dump($_GET);
    echo $_GET['name']; 
    echo $_SERVER['DOCUMENT_ROOT'];

	$arr_fields =[];
	$arr_values =[];
	
	
	
	
	foreach($_GET as $key=>$value){
		$arr_fields[] = $key;
		$arr_values[] = $value;
	}
	

	$post = new Lead(0);
	if ($post->createLine($arr_fields,$arr_values)){
        header('Location: http://ironlinks.ru/nordic/tamara/project1/index.php');
    } else {
        echo 'ошибка';
    }  
	*/
	
	
	
	
	
	$name = $_GET['name'];
    $email = $_GET['email'];
    $tel = $_GET['tel'];
    $text = $_GET['text'];
	
	
    $link = mysqli_connect('localhost', 'nordic_tamara', '7D1w1V1t', 'nordic_tamara_1');
    mysqli_set_charset($link , "utf8");
    $qr = "INSERT INTO `leads` (`name`, `email`, `tel`, `text`) VALUES('$name', '$email', '$tel', '$text')";
    $result = mysqli_query ($link, $qr);
    if ($result){
        header('Location: http://ironlinks.ru/nordic/tamara/project1/index.php');
    } else {
        echo 'ошибка';
    }