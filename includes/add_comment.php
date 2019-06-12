<?php
  session_start();
  $users = $connection->query("SELECT `login` FROM `users`");
  $users = $users->fetchAll();
  $logins = array_column($users, 'login');
  $commentToAdd = $_POST;
  $commentToAdd['article_id'] = $_SESSION['article_id'];
  if (!empty($commentToAdd)){
    $errors = [];
    if (!in_array($commentToAdd['name'], $logins))
      $errors['name'] = "Имя не найдено!";
    if (!strlen($commentToAdd['comment-text']))
      $errors['comment-text'] = "Введите текст комментария!";
    if (empty($errors)){
      $connection->query( 
        "INSERT INTO `comments` (`author`,`text`,`article_id`)
        VALUES ('". $commentToAdd['name']. "', '". $commentToAdd['comment-text']. "', '". $commentToAdd['article_id']. "')");
      header("Location: " . $_SERVER['REQUEST_URI']);
    }
  }
?>