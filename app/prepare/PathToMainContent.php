<?php
namespace App\Prepare;

class PathToMainContent
{
  private $path;

  public function __construct($urlArray, $urls)
  {

    //main page
    if (empty($urlArray)) {
      $this->path = $_SERVER['DOCUMENT_ROOT'] . '/App/show/pages/nonStatic/mainPage.php';
      //articles page
    } elseif ($urlArray[0] == 'articles') {
      $this->path = $_SERVER['DOCUMENT_ROOT'] . '/App/show/pages/nonStatic/articles.php';

      //static page
    } elseif (!array_intersect($urls, [$urlArray[0]])) {
      $path = $_SERVER['DOCUMENT_ROOT'] . '/App/show/pages/static/' . $urlArray[0] . '.php';
      if (file_exists($path)) {
        $this->path = $path;
      } else {
        echo 'Страница не найдена';
        exit();
      }
    }
  }

  public function getPath()
  {
    return $this->path;
  }
}
