<?php
  $config = array(
    'title' => 'Blog name',
    'vk_url' => 'https://vk.com/yourid',
    'articles_per_page' => 4,
    'main_page_categories' => array(
      'автомобили',
      'спорт',
      'природа'
    ),
    'db' => array(
      'server' => 'localhost',
      'username' => '',
      'password' => '',
      'name' => ''
    )
  );

  require_once 'db.php';
?>