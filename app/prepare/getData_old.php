<?php
use App\Prepare \ {
  MainPageHandler,
  ArticlesHandler
};

$mainPageData = new MainPageHandler($config, $connection);

$articlesPageData = new ArticlesHandler($connection, 1, $config['articles_per_page'], 1);
