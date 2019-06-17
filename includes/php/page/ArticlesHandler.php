<?php
    namespace page;
    use PDO;
    class ArticlesHandler{
      private $whatToShow;
      private $urlArray;
      private $paths;
      private $articlesCategory;

      public function __construct($urlArray, $paths, $connection){
        $this->urlArray = $urlArray;
        $this->paths = $paths;
        if(file_exists($paths['static_pages']. $urlArray[0]. '.php')){
          $this->whatToShow = 'showStatic';
        }        
      }
      public function showStatic(){
        include $this->paths['static_pages']. $this->urlArray[0]. '.php';
      }
      public function getWhatToShow(){
        return $this->whatToShow;
      }
    }
?>