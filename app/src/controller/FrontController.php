<?php

namespace App\controller;

use App\framework\PDOFactory;
use App\model\Manager\PostManager;

class FrontController
{
  public function index()
  {
    $manager = new PostManager(PDOFactory::getMySQLConnection());
    $posts = $manager->getAllPosts();
    // echo '<pre>';
    // var_dump($posts);
    // die();
    require './src/view/header.php';
    require './src/view/container-body.php';
    require './src/view/footer.php';
  }

  public function show()
  {
    $manager = new PostManager(PDOFactory::getMySQLConnection());
    $post = $manager->getPostById($_GET['id']);
  }
}
