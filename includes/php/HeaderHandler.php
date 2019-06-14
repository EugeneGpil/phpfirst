<?php
  class HeaderHandler{
    private $logo;
    private $mainNavigation = [];
    private $categoryNavigation = [];

    public function __construct($config, $connection){
      $this->logo = $config['title'];
      $this->addMainNavigationMenuItem('главная', '/');
      $this->addMainNavigationMenuItem('об авторе', '/about_author');
      $this->addMainNavigationMenuItem('я вконтакте', $config['vk_url']);
      $this->categoryNavigation = $connection->query(
        "SELECT `title`, `url`
        FROM `articles_categories`"
      );
      $this->categoryNavigation = $this->categoryNavigation->fetchAll(PDO::FETCH_ASSOC);
    }
    private function addMainNavigationMenuItem($title, $url){
      $menuItem['title'] = $title;
      $menuItem['url'] = $url;
      $this->mainNavigation[] = $menuItem;
    }
    public function getLogo(){
      return $this->logo;
    }
    public function getMainNavigation(){
      return $this->mainNavigation;
    }
    public function getCategoryNavigation(){
      return $this->categoryNavigation;
    }
  }
?>