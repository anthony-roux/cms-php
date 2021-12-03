<?php

namespace App\framework;

class PDOFactory
{
  private static $dbname = 'db';
  private static $username = 'root';
  private static $password = 'example';

  public static function getMySQLConnection(): \PDO
  {
    return new \PDO('mysql:host=db;dbname=' . self::$dbname, self::$username, self::$password);
  }
}
