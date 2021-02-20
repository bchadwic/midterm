<?php

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

$f3->route('GET /', function() {
    $view = new Template();
    echo $view->render('views/survey.html');
});

$f3->route('GET|POST /survey', function() {
    $view = new Template();
    echo $view->render('views/survey-start.html');
});

$f3->route('POST /summary', function() {
    $view = new Template();
    echo $view->render('views/summary.html');
});

//Run fat free
$f3->run();

