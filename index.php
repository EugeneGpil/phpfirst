<?php
  require_once 'includes/php/autoloader.php';
  require_once 'includes/config.php';

  loadClass(functions);

  $urlStr = $_SERVER['REQUEST_URI'];
  $url = new url\UrlHandler($urlStr);

  $regular = new page\Regular($connection);

  $toArticlesUrl = "/articles/";
  $toUsersUrl = "/users/";
  $paths = [
    "static_pages" => "includes/content/static/",
    "articles" => "includes/content"
  ];

  $show = new page\ArticlesHandler($url->getUrlArray(), $paths, $connection);
  $whatToShow = $show->getWhatToShow();

  include 'includes/bites/page.php';
?>