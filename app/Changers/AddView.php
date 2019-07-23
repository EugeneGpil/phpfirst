<?php

namespace App\Changers;

class AddView
{
  public static function add($connection, $inputs)
  {
    if ($_SESSION['is_comment_added'] == false and empty($_POST)) {
      $connection->query(
        "UPDATE articles
        SET views = views + 1"
      );
    }
    $_SESSION['is_comment_added'] = false;
  }
}
