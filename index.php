<?php
  require_once 'includes/config.php';
  require_once 'includes/php/UrlHandler.php';
  require_once 'includes/php/Regular.php';

  $urlStr = $_SERVER['REQUEST_URI'];
  $url = new UrlHandler($urlStr);

  $regular = new Regular($connection);
  var_dump($regular->getLastComments());

  require_once 'includes/php/functions.php';
  include 'includes/bites/head.php';
  include 'includes/bites/header.php';
  include 'includes/bites/footer.php';
?>