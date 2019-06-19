<?php
namespace App\Prepare;

class PathToMainContent
{
  public static function getPath($urlArray, $urls)
  {
    //main page
    if (empty($urlArray)) {
      return $_SERVER['DOCUMENT_ROOT'] . '/App/show/pages/nonStatic/mainPage.php';
      //articles page
    } elseif ($urlArray[0] == 'articles') {
      return $_SERVER['DOCUMENT_ROOT'] . '/App/show/pages/nonStatic/articles.php';

      //static page
    } elseif (!array_intersect($urls, [$urlArray[0]])) {
      $path = $_SERVER['DOCUMENT_ROOT'] . '/App/show/pages/static/' . $urlArray[0] . '.php';
      if (file_exists($path)) {
        return $path;
      } else {
        echo 'Страница не найдена';
        exit();
      }
    }
  }
}
