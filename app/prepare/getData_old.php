<?php
use App\Prepare \ {
  ArticlesHandler
};

$articlesPageData = new ArticlesHandler($connection, 1, $config['articles_per_page'], 1);
