<?php

namespace App\Prepare;

class ConfigHandler
{
  public static function getConfig()
  {
    require $_SERVER['DOCUMENT_ROOT'] . '/config.php';

    $config['urls'] = [
      'articles' => 'http://' . $_SERVER['HTTP_HOST'] . '/articles',
      'users' => 'http://' . $_SERVER['HTTP_HOST'] . '/users',
      'url_to_images' => 'http://' . $_SERVER['HTTP_HOST'] . '/static/images',
      'url_to_avatars' => 'http://' . $_SERVER['HTTP_HOST'] . '/static/avatars'
    ];

    return $config;
  }
}
