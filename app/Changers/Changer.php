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

    $inputs['comment'] = Comment::add($connection);

    $inputs['login'] = Login::login($connection, $config);

    $inputs['login'] = Logout::logout($inputs['login']);

    AddView::add($connection, $inputs);
    return $inputs;
  }
}
