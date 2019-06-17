<?php
  require_once 'autoloader.php';
  require_once 'includes/config.php';

  require_once 'includes/php/functions.php';

  $urlStr = $_SERVER['REQUEST_URI'];
  $url = new app\Url\UrlHandler($urlStr);

  $regular = new app\Page\Regular($connection);

  $toArticlesUrl = "/articles/";
  $toUsersUrl = "/users/";
  $paths = [
    "static_pages" => "includes/content/static/",
    "content" => "includes/content"
  ];

  $articlesHandler = new app\Articles\ArticlesHandler($url->getUrlArray(), $paths, $config, $connection);
  $whatToShow = $articlesHandler->getWhatToShow();

  include 'includes/bites/page.php';
?>