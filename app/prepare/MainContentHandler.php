<?php
namespace App\Prepare;

class MainContentHandler
{
  public static function getMainContentData($connection, $config)
  {

    $urlArray = array_values(array_diff(explode('/', $_SERVER['REQUEST_URI']), ['']));

    //main page
    if (empty($urlArray)) {
      $data = MainPageHandler::getMainPageArray($config, $connection);
      $data['main_content_page'] = $_SERVER['DOCUMENT_ROOT'] . '/App/show/pages/nonStatic/mainPage.php';

      //articles page
    } elseif ($urlArray[0] == 'articles') {
      $data['main_content_page'] = $_SERVER['DOCUMENT_ROOT'] . '/App/show/pages/nonStatic/articles.php';

      //static page
    } elseif (!array_intersect($config['urls'], [$urlArray[0]])) {
      $path = $_SERVER['DOCUMENT_ROOT'] . '/App/show/pages/static/' . $urlArray[0] . '.php';
      if (file_exists($path)) {
        $data['main_content_page'] = $path;
      } else {
        echo 'Страница не найдена';
        exit();
      }
    }

    return $data;
  }
}
