<?php

namespace App\Prepare;

class ConfigHandler
{
  public static function getConfig()
  {
    require $_SERVER['DOCUMENT_ROOT'] . '/config.php';

    $config['urls'] = [
      'articles' => 'https://' . $_SERVER['HTTP_HOST'] . '/articles',
      'users' => 'https://' . $_SERVER['HTTP_HOST'] . '/user',
      'url_to_images' => 'https://' . $_SERVER['HTTP_HOST'] . '/static/images',
      'url_to_avatars' => 'https://' . $_SERVER['HTTP_HOST'] . '/static/avatars'
    ];

    return $config;
  }
}
