<?php
  class HeaderHandler{
    private $logo;
    private $mainNavigation = [];
    private $categoryNavigation = [];

    public function __construct($config){
      $this->logo = $config['title'];
      $this->addMainNavigationMenuItem('главная', '/');
      $this->addMainNavigationMenuItem('об авторе', '/about_author');
      $this->addMainNavigationMenuItem('я вконтакте', $config['vk_url']);
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
  }
?>