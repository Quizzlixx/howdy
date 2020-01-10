<?php
/**
 * Kerrie Low
 * 1.10.20
 * Full Stack Web Development
 * MVC Practice
 */

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require the autoload file
require_once('vendor/autoload.php');

// create an instance of the Base class
$f3 = Base::instance();

// define a default route
$f3->route('GET /', function() {
    $view = new Template();
    $view->render('views/home.html');
});

// run fatfree
$f3->run();
