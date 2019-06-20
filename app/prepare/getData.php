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

  public static function getData()
  {
    $config = ConfigHandler::getConfig();

    $config['urls'] = [
      'articles' => 'articles',
      'users' => 'users',
      'url_to_images' => 'http://' . $_SERVER['HTTP_HOST'] . '/static/images/',
      'url_to_avatars' => 'http://' . $_SERVER['HTTP_HOST'] . '/static/avatars/'
    ];

    $connection = Connection::getConnection($config);

    //$urlArray = array_values(array_diff(explode('/', $_SERVER['REQUEST_URI']), ['']));

    $data['regular'] = Regular::getRegularArray($connection, $config);
    
    return $data;

    // $this->pathToMainContent = PathToMainContent::getPath($urlArray, $this->urls);

    // $this->mainPageArray = MainPageHandler::getMainPageArray($config, $connection);
  }
}
