<?php
namespace App\ShowClasses;

class ShowMainPage{
  public static function show($config, $regular, $pathToMainContent, $mainContentArray = null){
    include $_SERVER['DOCUMENT_ROOT'] . "/App/show/page.php";
  }
}