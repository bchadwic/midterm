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
    echo $view->render('views/home.html');
});


$f3->route('GET /personal', function() {

    $view = new Template();
    echo $view->render('views/personal.html');
});

$f3->route('POST /profile', function() {
    if(isset($_POST['first'])){
        $_SESSION['first'] = $_POST['first'];
    }

    if(isset($_POST['last'])){
        $_SESSION['last'] = $_POST['last'];
    }

    if(isset($_POST['age'])){
        $_SESSION['age'] = $_POST['age'];
    }

    if(isset($_POST['phone'])){
        $_SESSION['phone'] = $_POST['phone'];
    }

    if(isset($_POST['gender'])){
        $_SESSION['gender'] = $_POST['gender'];
    }

    $view = new Template();
    echo $view->render('views/profile.html');
});

$f3->route('POST /interests', function() {

    if(isset($_POST['email'])){
        $_SESSION['email'] = $_POST['email'];
    }

    if(isset($_POST['state'])){
        $_SESSION['state'] = $_POST['state'];
    }

    if(isset($_POST['bio'])){
        $_SESSION['bio'] = $_POST['bio'];
    }

    if(isset($_POST['gender'])){
        $_SESSION['seeking'] = $_POST['gender'];
    }

    $view = new Template();
    echo $view->render('views/interests.html');

});

$f3->route('POST /summary', function() {

    if(isset($_POST['interest'])){
        $_SESSION['interest'] = $_POST['interest'];
    }

    $view = new Template();
    echo $view->render('views/summary.html');

});
//Run fat free
$f3->run();

