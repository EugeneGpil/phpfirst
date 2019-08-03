<?php

namespace App\Changers;

use PDO;

class Registration
{
  public static function registration($connection, $config)
  {
    $data = $_POST;

    if (empty($data) or $data['what_form_is'] != 'registration') {
      return null;
    }

    if ($data['login'] == '') {
      return Registration::setError($data, 'login_error', "Введите логин");
    }

    if (!preg_match("/\A([0-9a-zA-Z]+)\z/", $data['login'])) {
      return Registration::setError($data, 'login_error', "Логин содержит недопустимые символы");
    }

    $userExist = $connection->prepare(
      "SELECT login FROM users WHERE login = ?"
    );
    $userExist->execute([$data['login']]);
    $userExist = $userExist->fetch(PDO::FETCH_ASSOC);

    if ($userExist) {
      return Registration::setError($data, 'login_error', "Логин занят");
    }

    if ($data['email'] == '') {
      return Registration::setError($data, 'email_error', "Введите почту");
    }

    if (!preg_match("/\A([a-zA-Z0-9]+)@([a-zA-Z0-9]+).([a-zA-Z0-9]+)\z/", $data['email'])) {
      return Registration::setError($data, 'email_error', "Неверный формат почты");
    }

    $userExist = $connection->prepare(
      "SELECT login FROM users WHERE email = ?"
    );
    $userExist->execute([$data['email']]);
    $userExist = $userExist->fetch(PDO::FETCH_ASSOC);

    if ($userExist) {
      return Registration::setError($data, 'email_error', "Почта занята");
    }

    if ($data['first_password'] == '') {
      return Registration::setError($data, 'password_error', "Введите пароль");
    }

    if (strlen($data['first_password']) < 8) {
      return Registration::setError($data, 'password_error', "Пароль должен быть не короче 8 символов");
    }

    if (!preg_match("/\A([0-9a-zA-Z]+)\z/", $data['first_password'])) {
      return Registration::setError($data, 'password_error', "Пароль содержит недопустимые символы");
    }

    if (!preg_match("([a-z]+)", $data['first_password'])) {
      return Registration::setError($data, 'password_error', "Пароль должен содержать хотя бы одну строчную букву");
    }

    if (!preg_match("([A-Z]+)", $data['first_password'])) {
      return Registration::setError($data, 'password_error', "Пароль должен содержать хотя бы одну заглавную букву");
    }

    if (!preg_match("([0-9]+)", $data['first_password'])) {
      return Registration::setError($data, 'password_error', "Пароль должен содержать хотя бы одну цифру");
    }

    if ($data['first_password'] != $data['second_password']) {
      return Registration::setError($data, 'password_error', "Пароли не совпадают");
    }

    do {
      $confirmationCode = rand(0, 99999);
      $confirmationCode = str_pad($confirmationCode, 5, "0");
    } while ($confirmationCode == '00000');

    $password = password_hash($data['first_password'], PASSWORD_DEFAULT);

    $request = $connection->prepare(
      "INSERT INTO users (login, password, email, confirmed)
      VALUES (?, ?, ?, ?)"
    );
    $request->execute([
      $data['login'],
      $password,
      $data['email'],
      $confirmationCode
    ]);

    mail(
      $data['email'],
      "Код подтверждения",
      "Ваш код подтверждения:\n" . $confirmationCode
    );

    return ['login' => $data['login'], 'what_form_is' => "confirmation_of_registration"];
  }

  public function setError($data, $whatError, $error)
  {
    if (isset($data['first_password'])) $data['first_password'] = null;
    if (isset($data['second_password'])) $data['second_password'] = null;
    $data[$whatError] = $error;
    return $data;
  }
}
