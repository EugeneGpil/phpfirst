<?php

namespace App\Changers;

use App\Changers\{
  Comment,
  Login,
  Redirect,
  ConfirmationOfRegistration
};

class Changer
{
  public static function change($connection, $config)
  {
    Redirect::addHttps();

    $inputs['comment'] = Comment::add($connection);

    $inputs['login'] = Login::login($connection, $config);

    $inputs['login'] = Logout::logout($inputs['login']);

    $inputs['registration'] = Registration::registration($connection, $config);

    if ($inputs['registration']['what_form_is'] == "confirmation_of_registration") {
      $inputs['confirmation_of_registration'] = $inputs['registration'];
      $inputs['registration'] = null;
    } else {
      $inputs['confirmation_of_registration'] = ConfirmationOfRegistration::confirm($connection, $config);

      if ($inputs['confirmation_of_registration']['logged_in']) {
        $inputs['login'] = $inputs['confirmation_of_registration'];
        $inputs['confirmation_of_registration'] = null;
      }
    }

    AddView::add($connection, $inputs);
    return $inputs;
  }
}
