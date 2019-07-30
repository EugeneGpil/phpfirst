<?php

namespace App\Changers;

use PDO,
  App\Changers\Login;

class ConfirmationOfRegistration
{
  public static function confirm($connection, $config)
  {
    $data = $_POST;

    if (empty($data) or $data['what_form_is'] != "confirmation_of_registration") {
      return null;
    }

    if ($data['confirmation_code'] == '') {
      $data['error'] = "Введите код подтверждения";
      return $data;
    }

    $confirmed = $connection->prepare(
      "SELECT login, avatar
      FROM users
      WHERE login=? AND confirmed=?"
    );
    $confirmed->execute([$data['login'], $data['confirmation_code']]);
    $confirmed = $confirmed->fetch(PDO::FETCH_ASSOC);

    if (!$confirmed) {
      $data['error'] = "Код подтверждения введен неверно";
      return $data;
    } else {
      $confrimation = $connection->prepare(
        "UPDATE users
        SET confirmed = 0
        WHERE login = ?"
      );
      $confrimation->execute([$data['login']]);

      return Login::setUserData($confirmed, $config);
    }
  }
}
