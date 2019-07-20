<?php

namespace App\Changers;

class Logout
{
  public static function logout($login)
  {
    if (empty($_POST) or $_POST['what-form-is'] != 'logout') {
      return $login;
    }

    if ($_POST['what-form-is'] == 'logout') {
      return ['logged_in' => false];
    }
  }
}
