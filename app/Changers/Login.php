<?php

namespace App\Changers;

use PDO;

class Login
{
  public static function login($connection, $config)
  {
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
      $userData['avatar'] = $config['urls']['url_to_avatars'] . '/' . $userData['avatar'];
      $userData['user_url'] = $config['urls']['users'] . '/' . $userData['login'];
      return ['logged_in' => true, 'user' => $userData];
    } else {
      $data['login_error'] = "Нет совпадений логин пароль";
      return $data;
    }
  }
}
