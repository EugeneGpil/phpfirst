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
      $data['login_error'] = "Введите пароль";
      return $data;
    }

    if (!preg_match("/\A([0-9a-zA-Z]+)\z/", $data['login'])) {
      $data['login_error'] = "Логин содержит недопустимые символы";
      return $data;
    }

    $userExist = $connection->prepare(
      "SELECT login FROM users WHERE login = ?"
    );
    $userExist->execute([$data['login']]);
    $userExist = $userExist->fetch(PDO::FETCH_ASSOC);

    if ($userExist) {
      $data['login_error'] = "Логин занят";
      return $data;
    }

    if ($data['email'] == '') {
      $data['email_error'] = "Введите почту";
      return $data;
    }

    if (!preg_match("/\A([a-zA-Z0-9]+)@([a-zA-Z0-9]+).([a-zA-Z0-9]+)\z/", $data['email'])) {
      $data['email_error'] = "Неверный формат почты";
      return $data;
    }

    $userExist = $connection->prepare(
      "SELECT login FROM users WHERE email = ?"
    );
    $userExist->execute([$data['email']]);
    $userExist = $userExist->fetch(PDO::FETCH_ASSOC);

    if ($userExist) {
      $data['email_error'] = "Почта занята";
      return $data;
    }

    if ($data['first_password'] == '') {
      $data['password_error'] = "Введите пароль";
      return $data;
    }

    if (strlen($data['first_password']) < 8) {
      $data['password_error'] = "Пароль должен быть не короче 8 символов";
      return $data;
    }

    if (!preg_match("/\A([0-9a-zA-Z]+)\z/", $data['first_password'])) {
      $data['password_error'] = "Пароль содержит недопустимые символы";
      return $data;
    }

    if (!preg_match("([a-z]+)", $data['first_password'])) {
      $data['password_error'] = "Пароль должен содержать хотя бы одну строчную букву";
      return $data;
    }

    if (!preg_match("([A-Z]+)", $data['first_password'])) {
      $data['password_error'] = "Пароль должен содержать хотя бы одну заглавную букву";
      return $data;
    }

    if (!preg_match("([0-9]+)", $data['first_password'])) {
      $data['password_error'] = "Пароль должен содержать хотя бы одну цифру";
      return $data;
    }

    if ($data['first_password'] != $data['second_password']) {
      $data['password_error'] = "Пароли не совпадают";
      return $data;
    }

    do {
      $confirmationCode = rand(0, 99999);
      $confirmationCode = str_pad($confirmationCode, 5, "0");
    } while ($confirmationCode == '00000');

    $request = $connection->prepare(
      "INSERT INTO users (login, password, email, confirmed)
      VALUES (?, ?, ?, ?)"
    );
    $request->execute([
      $data['login'],
      $data['first_password'],
      $data['email'],
      $confirmationCode
    ]);

    $che = mail(
      $data['email'],
      "Код подтверждения",
      "Ваш код подтверждения:\n" . $confirmationCode
    );

    return ['login' => $data['login'], 'what_form_is' => "confirmation_of_registration"];
  }
}
