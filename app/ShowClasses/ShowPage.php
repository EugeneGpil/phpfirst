<?php

namespace App\ShowClasses;

class ShowPage
{
  public static function show($data, $inputs)
  {
    include $_SERVER['DOCUMENT_ROOT'] . "/App/show/page.php";
  }
}
