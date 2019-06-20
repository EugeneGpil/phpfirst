<?php
namespace App\Prepare;

use PDO;

class Regular
{
  public static function getRegularArray($connection, $config)
  {
    $categoryMenu = $connection->query("SELECT title, url FROM articles_categories");
    $categoryMenu = $categoryMenu->fetchAll(PDO::FETCH_ASSOC);
    $categoryMenu = Regular::setUrlsForCategories($categoryMenu, $config);

    $popularArticles = $connection->query(
      "SELECT t1.title, t1.url, t1.image, t1.text, t2.title category_title, t2.url category_url
        FROM articles t1 
        LEFT JOIN articles_categories t2 
        ON t1.categories_id = t2.id 
        ORDER BY `views` 
        DESC 
        LIMIT 5"
    );
    $popularArticles = $popularArticles->fetchAll(PDO::FETCH_ASSOC);
    $popularArticles = Regular::setUrlsForArticles($popularArticles, $config);

    $lastComments = $connection->query(
      "SELECT comments.text `text`, comments.pubdate `pubdate`,
        users.login `login`, users.avatar `avatar`,
        articles.title `title`, articles.url `article_url`,
        articles_categories.url `category_url`
        FROM `comments` comments
        LEFT JOIN `users` users
        ON comments.author = users.login
        LEFT JOIN `articles` articles
        ON comments.article_id = articles.id
        LEFT JOIN `articles_categories` articles_categories
        ON articles.id = articles_categories.id
        ORDER BY `pubdate` 
        DESC 
        LIMIT 5"
    );
    $lastComments = $lastComments->fetchAll(PDO::FETCH_ASSOC);
    $lastComments = Regular::setUrlsForComments($lastComments, $config);

    $regularArray['title'] = $config['title'];
    $regularArray['vk_url'] = $config['vk_url'];

    $regularArray['category_menu'] = $categoryMenu;
    $regularArray['popular_articles'] = $popularArticles;
    $regularArray['last_comments'] = $lastComments;

    return $regularArray;
  }
  public static function setUrlsForArticles($articles, $config)
  {
    for ($i = 0; $articles[$i] != null; $i++) {
      $articles[$i]['url'] = $config['urls']['articles'] . '/' . $articles[$i]['url'];
      $articles[$i]['category_url'] = $config['urls']['articles'] . '/' . $articles[$i]['category_url'];
      $articles[$i]['image'] = $config['urls']['url_to_images'] . '/' . $articles[$i]['image'];
    }
    return $articles;
  }
  public static function setUrlsForCategories($categories, $config)
  {
    for ($i = 0; $categories[$i] != null; $i++) {
      $categories[$i]['url'] = $config['urls']['articles'] . '/' . $categories[$i]['url'];
    }
    return $categories;
  }
  public static function setUrlsForComments($comments, $config)
  {
    for ($i = 0; $comments[$i] != null; $i++) {
      $comments[$i]['article_url'] = $config['urls']['articles'] . '/' . $comments[$i]['article_url'];
      $comments[$i]['category_url'] = $config['urls']['articles'] . '/' . $comments[$i]['category_url'];
      $comments[$i]['user_url'] =  $config['urls']['users'] . '/' . $comments[$i]['login'];
      $comments[$i]['avatar'] = $config['urls']['url_to_avatars'] . '/' . $comments[$i]['avatar'];
    }
    return $comments;
  }
}
