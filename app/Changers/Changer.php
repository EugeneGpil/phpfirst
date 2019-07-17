<?php

namespace App\Changers;

use App\Changers\{
  Comment,
  Login,
  Redirect
};

class Changer
{
  public static function change($connection, $config)
  {
    Redirect::addHttps();

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
