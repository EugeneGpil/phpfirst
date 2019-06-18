<?php
namespace App\Prepare;

use PDO;

$connection = new PDO(
  "mysql:host=" . $config['db']['server'] .
    ";dbname=" . $config['db']['name'],
  $config['db']['username'],
  $config['db']['password']
);
checkConnection($connection);
