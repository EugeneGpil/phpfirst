<?php

namespace App\Changers;

class AddView
{
  public static function add($connection, $inputs)
  {
    if (empty($inputs)) {
      $connection->query(
        "UPDATE articles
        SET views = views + 1"
      );
    }
  }
}
