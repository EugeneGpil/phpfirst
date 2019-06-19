<?php
namespace App\Prepare;

use PDO;

class ArticlesHandler
{
  private $articles;

  public function __construct($connection, $page, $articlesPerPage, $category_id = '')
  {
    $requestToDataBase =
      "SELECT t1.id, t1.title, t1.url, t1.image, t1.text, t2.title category_title, t2.url category_url
      FROM articles t1
      LEFT JOIN articles_categories t2 ON t1.categories_id = t2.id ";

    if ($category_id != '') {
      $requestToDataBase = $requestToDataBase . "WHERE t1.categories_id = '" . $category_id . "' ";
    }
    $requestToDataBase = $requestToDataBase . " ORDER BY `id` DESC LIMIT "
      . $articlesPerPage . " OFFSET " . $articlesPerPage * ($page - 1);

    $articles = $connection->query($requestToDataBase);
    $this->articles = $articles->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getArticles()
  {
    return $this->articles;
  }
}
