<?php

namespace App\ShowClasses;

class ShowPage
{
  public static function show($inputs, $data)
  {
    include $_SERVER['DOCUMENT_ROOT'] . "/App/show/page.php";
  }
}
