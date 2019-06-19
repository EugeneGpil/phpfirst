<?php
use App\Prepare\Regular;
use function App\Prepare\functions\getPathToMainContent;
use App\Prepare\MainPageHandler;
use App\Prepare\ArticlesHandler;

$regular = new Regular($connection);

$urlArray = array_values(array_diff(explode('/', $_SERVER['REQUEST_URI']), ['']));

$pathToProject = $_SERVER['DOCUMENT_ROOT'];
$urlToImages = 'http://' . $_SERVER['HTTP_HOST'] . '/static/images/';
$urlToAvatars = 'http://' . $_SERVER['HTTP_HOST'] . '/static/avatars/';

$urls = [
  'articles' => 'articles',
  'users' => 'users'
];

$pathToMainContent = getPathToMainContent($urlArray, $urls);

$mainPageData = new MainPageHandler($config, $connection);

$articlesPageData = new ArticlesHandler($connection, 1, $config['articles_per_page'], 1);

var_dump($articlesPageData->getArticles());
