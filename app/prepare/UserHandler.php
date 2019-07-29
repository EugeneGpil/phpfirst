<?php

namespace App\Prepare;

use PDO;

class UserHandler
{
  public static function getUserData($connection, $urlArray, $config)
  {

    if (!isset($urlArray[1])) {
      return null;
    }

    $user = $connection->prepare(
      "SELECT login, email, avatar, registration_data
      FROM users
      WHERE login = ?"
    );
    $user->execute([$urlArray[1]]);
    $user = $user->fetch(PDO::FETCH_ASSOC);

    $user['avatar'] = $config['urls']['url_to_avatars'] . '/' . $user['avatar'];

    $countOfMessages = $connection->prepare(
      "SELECT COUNT(*)
      FROM comments
      WHERE author = ?"
    );
    $countOfMessages->execute([$urlArray[1]]);
    $countOfMessages = $countOfMessages->fetch(PDO::FETCH_ASSOC);
    $user['count_of_messages'] = $countOfMessages['COUNT(*)'];

    return $user;
  }
}
