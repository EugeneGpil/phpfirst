<?php

namespace App\Prepare;

use App\Prepare \ {
  ConfigHandler,
  Connection,
  Regular,
  PathToMainContent,
  MainPageHandler
};

class GetData
{
  private $config;
  private $connection;
  private $urlArray;
  private $urlToImages;
  private $urlToAvatars;
  private $urls;
  private $regular;
  private $pathToMainContent;
  private $mainPageArray;

  public function __construct()
  {
    $this->config = ConfigHandler::getConfig();
    $this->connection = Connection::getConnection($this->config);
    $this->urlArray = array_values(array_diff(explode('/', $_SERVER['REQUEST_URI']), ['']));

    $this->urls = [
      'articles' => 'articles',
      'users' => 'users'
    ];

    $this->urlToImages = 'http://' . $_SERVER['HTTP_HOST'] . '/static/images/';
    $this->urlToAvatars = 'http://' . $_SERVER['HTTP_HOST'] . '/static/avatars/';

    $this->regular = new Regular($this->connection);

    $this->pathToMainContent = PathToMainContent::getPath($this->urlArray, $this->urls);

    $this->mainPageArray = MainPageHandler::getMainPageArray($this->config, $this->connection);
  }
  public function getConfig()
  {
    return $this->config;
  }
  public function getConnection()
  {
    return $this->connection;
  }
  public function getUrlArray()
  {
    return $this->urlArray;
  }
  public function getUrlToImages()
  {
    return $this->urlToImages;
  }
  public function getUrlToAvatars()
  {
    return $this->urlToAvatars;
  }
  public function getUrls()
  {
    return $this->urls;
  }
  public function getRegular()
  {
    return $this->regular;
  }
  public function getPathToMainConten()
  {
    return $this->pathToMainContent;
  }
  public function getMainPageArray()
  {
    return $this->mainPageArray;
  }
}
