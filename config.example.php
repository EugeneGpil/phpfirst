<?php
  $config = array(
    'title' => 'Blog name',
    'vk_url' => 'https://vk.com/yourid',
    'count_of_new_articles_main_page' => 6,
    'count_of_articles_by_category_main_page' => 6,
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