<?php
$regular = new app\prepare\regular\Regular($connection);

$urlArray = array_values(array_diff(explode('/', $_SERVER['REQUEST_URI']), ['']));

$pathToProject = $_SERVER['DOCUMENT_ROOT'];
$urlToImages = 'http://' . $_SERVER['HTTP_HOST'] . '/static/images/';
$urlToAvatars = 'http://' . $_SERVER['HTTP_HOST'] . '/static/avatars/';

$urls = [
  'articles' => '/articles/',
  'users' => '/users/'
];
