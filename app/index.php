<?php

use App\controller\FrontController;

require './vendor/autoload.php';



// echo App\Test::test();

// Preflight avec les headers
// j'accèpte les  post, get, put, delete
// j'accèpte les auth basic

// ROUTER GOES HERE
// C'est quoi la méthode ?
// Appeller le bon controller

$controller = new FrontController();
$controller->index();



// require './src/view/header.php';

// require './src/view/container-body.php';


// require './src/view/footer.php';
