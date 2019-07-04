<?php

namespace App\Prepare;

use PDO;

class ArticleHandler
{
  public static function getArticleData($connection, $urlArray, $config)
  {

    $articleRequest = $connection->query(
      "SELECT articles.title, articles.image, articles.text, articles.views,
        comments.author, comments.text as comment_text, comments.pubdate,
        users.avatar
      FROM `articles` articles
      LEFT JOIN `comments` comments ON articles.id = comments.article_id
      LEFT JOIN `users` users ON comments.author = users.login
      WHERE articles.url = '" . $urlArray[1] . "'
      ORDER BY comments.pubdate DESC"
    );
    $articleRequest = $articleRequest->fetchAll(PDO::FETCH_ASSOC);

    $article['title'] = $articleRequest[0]['title'];
    $article['image'] = $config['urls']['url_to_images'] . '/' . $articleRequest[0]['image'];
    $article['text'] = $articleRequest[0]['text'];
    $article['views'] = $articleRequest[0]['views'];

    for ($i = 0; $articleRequest[$i]; $i++) {
      $article['comments'][$i]['author'] = $articleRequest[$i]['author'];
      $article['comments'][$i]['author_url'] = $config['urls']['users'] . '/' . $articleRequest[$i]['author'];
      $article['comments'][$i]['text'] = $articleRequest[$i]['comment_text'];
      $article['comments'][$i]['pubdate'] = $articleRequest[$i]['pubdate'];
      $article['comments'][$i]['avatar'] = $config['urls']['url_to_avatars'] . '/' . $articleRequest[$i]['avatar'];
    }

    return $article;
  }
}
