<?php
  require_once 'includes/php/UrlHandler.php';
  $urlStr = $_SERVER['REQUEST_URI'];
  $url = new UrlHandler($urlStr);
  print_r($url->getUrlMass());
?>