<?php

namespace App\Prepare;

use PDO;

class Connection
{
  public static function getConnection($config)
  {
    $connection = new PDO(
      "mysql:host=" . $config['db']['server'] .
        ";dbname=" . $config['db']['name'],
      $config['db']['username'],
      $config['db']['password']//,
      // array(
      //   PDO::ATTR_TIMEOUT => 5, // in seconds
      // )
    );
    if (!$connection) {
      echo 'Не удалось подключиться к базе данных<br>';
      exit();
    }

    return $connection;
  }
}
