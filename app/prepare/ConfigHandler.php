<?php
namespace App\Prepare;

class ConfigHandler
{
  private $config;

  public function __construct()
  {
    require $_SERVER['DOCUMENT_ROOT'] . '/config.php';
    $this->config = $config;
  }

  public function getConfig()
  {
    return $this->config;
  }
}
