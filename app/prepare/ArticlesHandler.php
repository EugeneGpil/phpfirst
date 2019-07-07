<?php

namespace App\Prepare;

use PDO;

class ArticlesHandler
{

  public static function getArticlesData($connection, $urlArray, $config)
  {
    return ArticlesHandler::getArticlesPreviewsPageData($connection, $urlArray, $config);
  }

  private function getArticlesPreviewsPageData($connection, $urlArray, $config)
  {

    if ($urlArray[1] == null or (strripos(end($urlArray), 'page') === false)) {
      $page = 1;
    } else {
      $page = substr(end($urlArray), strripos(end($urlArray), 'page') + 4);
    }

    [$category_url, $category_title] = ArticlesHandler::getCategoryUrlAndTitle($connection, $urlArray);

    [$articlesArray['articles'], $articlesArray['show_next_page_arrow']] = ArticlesHandler::getArticlesArray($connection, $page, $config['articles_per_page'], $category_url);
    $articlesArray['articles'] = Regular::setUrlsForArticles($articlesArray['articles'], $config);
    $articlesArray['page'] = $page;
    $articlesArray['category_url'] = $config['urls']['articles'];

    if ($category_url != '') {
      $articlesArray['category_url'] = $articlesArray['category_url'] . '/' . $category_url;
    }
    $articlesArray['prev_page_url'] = $articlesArray['category_url'] . '/page' . ($page - 1);
    $articlesArray['next_page_url'] = $articlesArray['category_url'] . '/page' . ($page + 1);
    $articlesArray['category_title'] = $category_title;
    return $articlesArray;
  }

  private function getArticlesArray($connection, $page, $articlesPerPage, $category_url = '')
  {
    $requestToDataBase =
      "FROM articles t1
      LEFT JOIN articles_categories t2 ON t1.categories_id = t2.id ";

    if ($category_url != '') {
      $requestToDataBase = $requestToDataBase . "WHERE t2.url = '" . $category_url . "' ";
    }

    $countRequest = "SELECT COUNT(*) " . $requestToDataBase;

    $countOfArticles = $connection->query($countRequest);
    $countOfArticles = $countOfArticles->fetch(PDO::FETCH_ASSOC);
    $countOfArticles = $countOfArticles['COUNT(*)'];
    if ($countOfArticles <= $page * $articlesPerPage) {
      $showNextPageArrow = false;
    } else {
      $showNextPageArrow = true;
    }

    $requestToDataBase = "SELECT t1.id, t1.title, t1.url, t1.image, t1.text, t2.title category_title, t2.url category_url " .
      $requestToDataBase;

    $requestToDataBase = $requestToDataBase . " ORDER BY `id` DESC LIMIT "
      . $articlesPerPage . " OFFSET " . $articlesPerPage * ($page - 1);

    $articles = $connection->query($requestToDataBase);
    $articles = $articles->fetchAll(PDO::FETCH_ASSOC);

    return [$articles, $showNextPageArrow];
  }

  private function getCategoryUrlAndTitle($connection, $urlArray)
  {

    $category_url = '';
    $category_title = 'Последине статьи';

    $thisCategory = $connection->query(
      "SELECT title, url FROM articles_categories WHERE url = '" . $urlArray[1] . "'"
    );
    $thisCategory = $thisCategory->fetch(PDO::FETCH_ASSOC);
    if (!empty($thisCategory)) {
      $category_url = $thisCategory['url'];
      $category_title = $thisCategory['title'];
    }

    return [$category_url, $category_title];
  }
}
