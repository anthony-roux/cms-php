<?php

namespace App\model\Manager;

class PostManager
{
  private \PDO $db;

  public function __construct(\PDO $db)
  {
    $this->db = $db;
  }


  /**
   * @return Post[]|bool
   */
  public function getAllPosts()
  {
    $query = "SELECT * FROM `posts`";
    $res = $this->db->query($query);
    return $res->fetchAll(\PDO::FETCH_CLASS, 'App\model\Entity\Post');
  }

  public function getPostById(int $id)
  {
    // des trucs
  }
}
