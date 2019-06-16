<?php
  require_once 'includes/config.php';
  require_once 'includes/php/UrlHandler.php';
  require_once 'includes/php/Regular.php';
  require_once 'includes/php/functions.php';

  $urlStr = $_SERVER['REQUEST_URI'];
  $url = new UrlHandler($urlStr);

  $regular = new Regular($connection);

  $toArticlesUrl = "/articles/";
  $toUsersUrl = "/users/";
  $toStaticPagesPath = "includes/content/static/";

  $showFunction = contentElector($url->getUrlArray(), $toStaticPagesPath);

  include 'includes/bites/page.php';
?>