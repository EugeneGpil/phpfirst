<?php
  require_once 'includes/php/autoloader.php';
  require_once 'includes/config.php';

  loadClass(functions);

  $urlStr = $_SERVER['REQUEST_URI'];
  $url = new url\UrlHandler($urlStr);

  $regular = new page\Regular($connection);

  $toArticlesUrl = "/articles/";
  $toUsersUrl = "/users/";
  $toStaticPagesPath = "includes/content/static/";

  $showFunction = contentElector($url->getUrlArray(), $toStaticPagesPath);

  include 'includes/bites/page.php';
?>