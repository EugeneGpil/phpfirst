<?php
namespace App\Prepare;

use PDO;

class Connection
{
  private $connection;

  public function __construct($config)
  {
    $this->connection = new PDO(
      "mysql:host=" . $config['db']['server'] .
        ";dbname=" . $config['db']['name'],
      $config['db']['username'],
      $config['db']['password']
    );
    if (!$this->connection) {
      echo 'Не удалось подключиться к базе данных<br>';
      exit();
    }
  }
  public function getConnection()
  {
    return $this->connection;
  }
}
