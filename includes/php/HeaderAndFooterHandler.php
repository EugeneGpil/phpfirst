<?php
  class HeaderAndFooterHandler{
    private $logo;
    private $mainNavigation = [];
    private $categoryNavigation = [];
    private $footerNavigation = [];

    public function __construct($config, $connection){
      $this->logo = $config['title'];

      $this->mainNavigation[] = $this->addMainNavigationMenuItem('главная', '/', false);
      $this->mainNavigation[] = $this->addMainNavigationMenuItem('об авторе', '/about_author', false);
      $this->mainNavigation[] = $this->addMainNavigationMenuItem('я вконтакте', $config['vk_url'], true, true);
      
      $this->categoryNavigation = $connection->query("SELECT `title`, `url` FROM `articles_categories`");
      $this->categoryNavigation = $this->categoryNavigation->fetchAll(PDO::FETCH_ASSOC);

      $this->footerNavigation[] = $this->addMainNavigationMenuItem('главная', '/', false);
      $this->footerNavigation[] = $this->addMainNavigationMenuItem('мы вконтакте', $config['vk_url'], true, true);
      $this->footerNavigation[] = $this->addMainNavigationMenuItem('об авторе', '/about_author', false);
      $this->footerNavigation[] = $this->addMainNavigationMenuItem('правообладателям', '/for_righthorlders', false);
    }
    private function addMainNavigationMenuItem($title, $url, $newWindow, $catchy=false){
      $menuItem['title'] = $title;
      $menuItem['url'] = $url;
      $menuItem['newWindow'] = $newWindow;
      $menuItem['catchy'] = $catchy;
      return $menuItem;
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
    public function getFooterNavigation(){
      return $this->footerNavigation;
    }
  }
?>