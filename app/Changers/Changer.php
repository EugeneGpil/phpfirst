<?php

namespace App\Changers;

use App\Changers\Comment;

class Changer
{
  public static function change($connection)
  {
    return Comment::add($connection);
  }
}
