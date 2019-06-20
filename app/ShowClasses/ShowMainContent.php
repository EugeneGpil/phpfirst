<?php
namespace App\ShowClasses;

class ShowMainContent
{
  public static function show($data, $config)
  {

    include $data['main_content_page'];
  }
}
