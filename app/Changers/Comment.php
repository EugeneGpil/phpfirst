<?php

namespace App\Changers;

use PDO;

class Comment
{
  public static function add($connection)
  {
    $data = $_POST;

    if (empty($data) or $data["what_form_is"] != "add_comment") {
      return null;
    }

    $users = $connection->query(
      "SELECT login FROM users"
    );
    $users = $users->fetchAll(PDO::FETCH_COLUMN);

    if (!in_array($data['name'], $users)) {
      $data['errors']['name'] = 'Пользователь не найден';
    }

    if ($data['comment-text'] == '') {
      $data['errors']['text'] = 'Введите текст';
    }

    if ($data['errors'] == null) {
      $request = $connection->prepare(
        "INSERT INTO comments (author, `text`, article_id)
        VALUES (?, ?, ?)"
      );
      $request->execute([$data['name'], $data['comment-text'], $data['article_id']]);

      $_SESSION['is_comment_added'] = true;

      Header("Location: " . $data['url']);
      exit();
    }

    return $data;
  }
}
