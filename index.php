<?php
  require_once 'includes/config.php';
  require_once 'includes/php/UrlHandler.php';
  require_once 'includes/php/HeaderAndFooterHandler.php';
  $urlStr = $_SERVER['REQUEST_URI'];
  $url = new UrlHandler($urlStr);
  $header = new HeaderAndFooterHandler($config, $connection);
  require_once 'includes/php/functions.php';
  include 'includes/bites/head.php';
  include 'includes/bites/header.php';
  include 'includes/bites/footer.php';
?>