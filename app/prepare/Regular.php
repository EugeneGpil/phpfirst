<?php
namespace App\Prepare;

use PDO;

class Regular
{
  private $categoryMenu;
  private $popularArticles;
  private $lastComments;

  public function __construct($connection)
  {
    $this->categoryMenu = $connection->query("SELECT title, url FROM articles_categories");
    $this->categoryMenu = $this->categoryMenu->fetchAll(PDO::FETCH_ASSOC);
    $this->popularArticles = $connection->query(
      "SELECT t1.title, t1.url, t1.image, t1.text, t2.title category_title, t2.url category_url
        FROM articles t1 
        LEFT JOIN articles_categories t2 
        ON t1.categories_id = t2.id 
        ORDER BY `views` 
        DESC 
        LIMIT 5"
    );
    $this->popularArticles = $this->popularArticles->fetchAll(PDO::FETCH_ASSOC);
    $this->lastComments = $connection->query(
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
    $this->lastComments = $this->lastComments->fetchAll(PDO::FETCH_ASSOC);
  }
  public function getCategoryMenu()
  {
    return $this->categoryMenu;
  }
  public function getPopularArticles()
  {
    return $this->popularArticles;
  }
  public function getLastComments()
  {
    return $this->lastComments;
  }
}
