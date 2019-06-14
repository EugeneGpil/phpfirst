<?php
  require_once 'includes/config.php';
  require_once 'includes/php/UrlHandler.php';
  require_once 'includes/php/HeaderHandler.php';
  $urlStr = $_SERVER['REQUEST_URI'];
  $url = new UrlHandler($urlStr);
  $header = new HeaderHandler($config, $connection);
  include 'includes/bites/head.php';
  include 'includes/bites/header.php';
?>