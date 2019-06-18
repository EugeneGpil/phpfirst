<?php
$regular = new app\prepare\regular\Regular($connection);
$url = new app\prepare\urlHandler\UrlHandler($_SERVER['REQUEST_URI']);

$urls = [
  'articles' => '/articles/',
  'users' => '/users/'
];