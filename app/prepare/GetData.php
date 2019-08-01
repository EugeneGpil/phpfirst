<?php

namespace App\Prepare;

use App\Prepare\{
  Regular,
  MainContentHandler
};

class GetData
{

  public static function getData($connection, $config, $inputs)
  {
    $data['regular'] = Regular::getRegularArray($connection, $config);

    $data['main_content'] = MainContentHandler::getMainContentData($connection, $config, $inputs);

    return $data;
  }
}
