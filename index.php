<?php
/**
 * Nick Gadomskiy
 * 1/15/20
 * http://ngadomskiy.greenriverdev.com/IT328/chicken/
 * chicken
 */

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require autoload file
require("vendor/autoload.php");

// Instantiate F3
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function() {
    echo "Hello";
});

// Run F3
$f3->run();