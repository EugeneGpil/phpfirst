<?php
namespace App\Prepare\functions;

function getPathToMainContent($urlArray, $urls)
{
  if (!array_intersect($urls, [$urlArray[0]])) {
    $path = $_SERVER['DOCUMENT_ROOT'] . '/App/show/pages/static/' . $urlArray[0] . '.php';
    if (file_exists($path)) {
      return $path;
    } else {
      echo 'Страница не найдена';
    }
  }
}
