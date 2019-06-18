<?php
namespace App\Prepare;

function checkConnection($connection)
{
  if (!$connection) {
    echo 'Не удалось подключиться к базе данных<br>';
    exit();
  }
}
