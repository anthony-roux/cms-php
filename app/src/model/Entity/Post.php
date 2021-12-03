<?php

namespace App\model\Entity;

use DateTime;

class Post
{
  private int $id;
  private string $title;
  private string $content;
  private $createdAt;

  public function getId()
  {
    return $this->id;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getContent()
  {
    return $this->content;
  }
}
