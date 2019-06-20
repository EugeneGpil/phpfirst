<?php

namespace App\Prepare;

use App\Prepare \ {
  ConfigHandler,
  Connection,
  Regular,
  MainContentHandler
};

class GetData
{

  public static function getData()
  {
    $config = ConfigHandler::getConfig();

    $config['urls'] = [
      'articles' => 'http://' . $_SERVER['HTTP_HOST'] . '/articles',
      'users' => 'http://' . $_SERVER['HTTP_HOST'] . '/users',
      'url_to_images' => 'http://' . $_SERVER['HTTP_HOST'] . '/static/images',
      'url_to_avatars' => 'http://' . $_SERVER['HTTP_HOST'] . '/static/avatars'
    ];

    $data['config'] = $config;

    $connection = Connection::getConnection($config);

    $data['regular'] = Regular::getRegularArray($connection, $config);

    $data['main_content'] = MainContentHandler::getMainContentData($connection, $config);

    return $data;

    // $this->pathToMainContent = PathToMainContent::getPath($urlArray, $this->urls);

    // $this->mainPageArray = MainPageHandler::getMainPageArray($config, $connection);
  }
}
