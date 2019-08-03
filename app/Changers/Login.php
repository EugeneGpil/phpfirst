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
      "SELECT login, password, avatar, confirmed FROM users WHERE login = ?"
    );
    $userData->execute([$data['login']]);
    $userData = $userData->fetch(PDO::FETCH_ASSOC);

    if (!password_verify($data['password'], $userData['password'])) {
      $data['login_error'] = "Нет совпадений логин пароль";
      return $data;
    }

    if ($userData['confirmed'] != "0") {
      $data['login_error'] = "Регистрация не подтверждена";
      return $data;
    }

    return Login::setUserData($userData, $config);
  }

  public static function setUserData($data, $config)
  {
    $user['login'] = $data['login'];
    if (isset($user['password'])) $user['password'] = null;
    $user['avatar'] = $config['urls']['url_to_avatars'] . '/' . $data['avatar'];
    $user['user_url'] = $config['urls']['users'] . '/' . $data['login'];
    $user['logged_in'] = true;
    $_SESSION['login'] = $user;
    return $user;
  }
}
