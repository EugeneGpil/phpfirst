<?php
  require_once 'includes/config.php';
  require_once 'includes/php/UrlHandler.php';
  require_once 'includes/php/HeaderAndFooterHandler.php';

  $urlStr = $_SERVER['REQUEST_URI'];
  $url = new UrlHandler($urlStr);

  $header = new HeaderHandler($config, $connection);
  $header->addMenuItem('главная', '/');
  $header->addMenuItem('об авторе', '/about_author');
  $header->addMenuItem('я вконтакте', $config['vk_url'], true, true);

  $footer = new FooterHandler($config);
  $footer->addMenuItem('главная', '/');
  $footer->addMenuItem('мы вконтакте', $config['vk_url'], true, true);
  $footer->addMenuItem('об авторе', '/about_author');
  $footer->addMenuItem('правообладателям', '/for_righthorlders');

  require_once 'includes/php/functions.php';
  include 'includes/bites/head.php';
  include 'includes/bites/header.php';
  include 'includes/bites/footer.php';
?>