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
      return Login::setError($data, "Введите логин");
    }

    if ($data['password'] == '') {
      return Login::setError($data, "Введите пароль");
    }

    $userData = $connection->prepare(
      "SELECT login, password, avatar, confirmed FROM users WHERE login = ?"
    );
    $userData->execute([$data['login']]);
    $userData = $userData->fetch(PDO::FETCH_ASSOC);

    if (!userData or !password_verify($data['password'], $userData['password'])) {
      return Login::setError($data, "Нет совпадений логин пароль");
    }

    if ($userData['confirmed'] != "0") {
      return Login::setError($data, "Регистрация не подтверждена");
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

  public function setError($data, $error)
  {
    if (isset($data['password'])) $data['password'] = null;
    $data['login_error'] = $error;
    return $data;
  }
}
