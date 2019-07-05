<?php

namespace App\Changers;

use App\Changers\Comment;

class Changer
{
  public static function change($connection)
  {
    $inputs = Comment::add($connection);

    AddView::add($connection, $inputs);

    return $inputs;
  }
}
