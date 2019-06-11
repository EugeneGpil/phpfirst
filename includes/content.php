<?php
  $uri = $_SERVER['REQUEST_URI'];
  if ($uri == '/')
    include 'content/main.php';
  else if ($uri == '/about_author' or $uri == '/for_rightholders')
    include 'content/info.php';
  else{
    $toArticlesUrl = "/articles";
    if (strrpos($uri, $toArticlesUrl) === 0){
      $uri = substr($uri, strlen($toArticlesUrl));
      if (strrpos($uri, "/page") === 0){
        $uri = substr($uri, 5);
        include 'content/articles.php';
      } else if (strrpos($uri, "/category") === 0){
        $categoryId = substr($uri, 9);
        if (strrpos($categoryId, "/page") === false){
          
        }
      }
    }
  }
?>