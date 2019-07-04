<?php

namespace App\ShowClasses;

class ShowMainContent
{
  public static function show($data, $inputs)
  {

    include $data['main_content_page'];
  }
}
