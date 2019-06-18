<?php
namespace app\prepare;

function checkConnection($connection)
{
  if (!$connection) {
    echo 'Не удалось подключиться к базе данных<br>';
    exit();
  }
}
