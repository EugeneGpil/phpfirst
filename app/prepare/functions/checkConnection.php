<?php
namespace App\Prepare\functions;

function checkConnection($connection)
{
  if (!$connection) {
    echo 'Не удалось подключиться к базе данных<br>';
    exit();
  }
}
