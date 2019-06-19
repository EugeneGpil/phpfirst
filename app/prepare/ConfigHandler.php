<?php
namespace App\Prepare;

class ConfigHandler
{
  public static function getConfig()
  {
    require $_SERVER['DOCUMENT_ROOT'] . '/config.php';
    return $config;
  }
}
