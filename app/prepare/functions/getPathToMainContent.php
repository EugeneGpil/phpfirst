<?php
namespace App\Prepare\functions;

function getPathToMainContent($urlArray, $urls)
{

  //main page
  if (empty($urlArray)) {
    $path = $_SERVER['DOCUMENT_ROOT'] . '/App/show/pages/nonStatic/mainPage.php';
    return $path;
    //articles page
  } elseif ($urlArray[0] == 'articles') {
    $path = $_SERVER['DOCUMENT_ROOT'] . '/App/show/pages/nonStatic/articles.php';
    return $path;

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
