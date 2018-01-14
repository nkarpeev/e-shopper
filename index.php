<?php
    session_start();
    //print_r($_SERVER['DOCUMENT_ROOT']);
    ini_set('display_errors', 1);
    error_reporting(E_ALL ^ E_NOTICE);
    error_reporting(E_ALL);

    //Создаем именованную константу и присваиваем ей значение (путь)
    define('ROOT', dirname(__FILE__));
    //print_r(ROOT);

    include_once(ROOT . '/components/Autoload.php');
    //include_once(ROOT . '/view/layouts/header.php');
    //Получае запрос, который ввел пользователь
    $rout1 = new Router;
    $rout1->run();






	 
	
        
	 
         
	