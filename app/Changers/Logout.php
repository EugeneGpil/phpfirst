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
      $_SESSION['login'] = null;
      $_SESSION['login']['logged_in'] = false;
      return ['logged_in' => false];
    }
  }
}
