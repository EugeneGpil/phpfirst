<?php

namespace App\Changers;

class AddView
{
  public static function add($connection, $inputs)
  {
    if (empty($inputs) and $_SESSION['is_comment_added'] != true) {
      $connection->query(
        "UPDATE articles
        SET views = views + 1"
      );
    }
    $_SESSION['is_comment_added'] = false;
  }
}
