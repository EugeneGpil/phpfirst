<?php

namespace App\Changers;

class Redirect
{
  public static function addHttps()
  {
    $urlToGo = $_SERVER['REQUEST_URI'];

    if ($_SERVER['HTTPS'] != 'on') {

      if (stripos($urlToGo, 'http://') === 0) {
        $urlToGo = substr($urlToGo, 7);
      }

      Header("Location: " . 'https://' . $_SERVER['HTTP_HOST'] . $urlToGo);
      exit();
    }
  }
}
