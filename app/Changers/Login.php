<?php

namespace App\Changers;

use PDO;

class Login
{
  public static function login($connection, $config)
  {
    if ($_SESSION['login']['logged_in'] == true) {
      return $_SESSION['login'];
    }

    $data = $_POST;

    if (empty($data) or $data['what_form_is'] != 'login') {
      return null;
    }

    if ($data['login'] == '') {
      $data['login_error'] = "Введите логин";
      return $data;
    }

    if ($data['password'] == '') {
      $data['login_error'] = "Введите пароль";
      return $data;
    }

    $userData = $connection->prepare(
      "SELECT login, avatar FROM users WHERE login = ? AND password = ?"
    );
    $userData->execute([$data['login'], $data['password']]);
    $userData = $userData->fetch(PDO::FETCH_ASSOC);

    if (!empty($userData)) {
      $user['login'] = $userData['login'];
      $user['avatar'] = $config['urls']['url_to_avatars'] . '/' . $userData['avatar'];
      $user['user_url'] = $config['urls']['users'] . '/' . $userData['login'];
      $user['logged_in'] = true;
      $_SESSION['login'] = $user;
      return $user;
    } else {
      $data['login_error'] = "Нет совпадений логин пароль";
      return $data;
    }
  }
}
