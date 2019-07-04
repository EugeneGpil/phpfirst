<?php

namespace App\Prepare;

use App\Prepare\{
  ConfigHandler,
  Connection,
  Regular,
  MainContentHandler
};

class GetData
{

  public static function getData($connection, $config)
  {
    $data['config'] = $config;

    $data['regular'] = Regular::getRegularArray($connection, $config);

    $data['main_content'] = MainContentHandler::getMainContentData($connection, $config);

    return $data;

    // $this->pathToMainContent = PathToMainContent::getPath($urlArray, $this->urls);

    // $this->mainPageArray = MainPageHandler::getMainPageArray($config, $connection);
  }
}
