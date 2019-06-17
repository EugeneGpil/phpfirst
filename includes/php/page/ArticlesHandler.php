<?php
  namespace page;
  use PDO;
  class ArticlesHandler{
    private $whatToShow;
    private $urlArray;
    private $paths;
    private $newArticles;
    private $articlesByCategories;
    private $countOfNewArticlesMainPage;
    private $countOfArticlesByCategoryMainPage;

    public function __construct($urlArray, $paths, $config, $connection){
      $this->countOfNewArticlesMainPage = $config['count_of_new_articles_main_page'];
      $this->countOfArticlesByCategoryMainPage = $config['count_of_articles_by_category_main_page'];
      $this->urlArray = $urlArray;
      $this->paths = $paths;
      if(file_exists($paths['static_pages']. $urlArray[0]. '.php')){
        $this->whatToShow = 'showStatic';
      }
      if($urlArray[0] === null){
        $this->whatToShow = 'showMainPage';
        $this->newArticles = $connection->query(
          "SELECT t1.id, t1.title, t1.url, t1.image, t1.text, t2.title category_title, t2.url category_url
          FROM articles t1 
          LEFT JOIN articles_categories t2 ON t1.categories_id = t2.id  
          ORDER BY `id` DESC
          LIMIT ". $config['count_of_new_articles_main_page']
        );
        $this->newArticles = $this->newArticles->fetchAll(PDO::FETCH_ASSOC);
        foreach ($config['main_page_categories'] as $category){
          $this->articlesByCategories[] = $this->articlesByCategory($category, $connection, $config['count_of_articles_by_category_main_page']);
        }
      }
    }
    public function showStatic(){
      include $this->paths['static_pages']. $this->urlArray[0]. '.php';
    }
    public function getWhatToShow(){
      return $this->whatToShow;
    }
    public function showMainPage(){
      include $this->paths['content']. '/main.php';
    }
    private function articlesByCategory($category, $connection, $count){
      $articlesByCategory = $connection->query(
        "SELECT t1.id, t1.title, t1.url, t1.image, t1.text, t2.title category_title, t2.url category_url
        FROM articles t1
        LEFT JOIN articles_categories t2 ON t1.categories_id = t2.id 
        WHERE t2.title = '". $category. 
        "' ORDER BY `id` DESC
        LIMIT ". $count
      );
      return $articlesByCategory->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getArticlesByCategories(){
      var_dump($this->articlesByCategories);
      return $this->articlesByCategories;
    }
  }
?>