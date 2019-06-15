<?php
  class Regular{
    private $categoryMenu;
    private $popularArticles;

    public function __construct($connection){
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
    }
    public function getCategoryMenu(){
      return $this->categoryMenu;
    }
    public function getPopularArticles(){
      return $this->popularArticles;
    }
  }
?>