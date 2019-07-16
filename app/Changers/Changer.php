<?php

namespace App\Changers;

use App\Changers\{
  Comment,
  Login
};

class Changer
{
  public static function change($connection, $config)
  {

    $inputs = Comment::add($connection);
    if (!empty($inputs)) {
      return $inputs;
    }

    $inputs = Login::login($connection, $config);
    if (!empty($inputs)) {
      return $inputs;
    }

    AddView::add($connection, $inputs);
    return $inputs;
  }
}
