<?php
  class Regular{
    private $logo;
    private $headerMenu;
    private $categoryMenu;
    private $footerMenu;

    public function __construct($config){
      $this->logo = $config['title'];
    }
    public function getLogo(){
      return $this->logo;
    }
  }
?>

<!-- <?php
  class FooterHandler{
    protected $logo;
    private $menu = [];

    public function __construct($config){
      $this->logo = $config['title'];
    }
    public function getLogo(){
      return $this->logo;
    }
    public function getMenu(){
      return $this->menu;
    }
    public function addMenuItem($title, $url, $newWindow=false, $catchy=false){
      $menuItem['title'] = $title;
      $menuItem['url'] = $url;
      $menuItem['newWindow'] = $newWindow;
      $menuItem['catchy'] = $catchy;
      $this->menu[] = $menuItem;
    }
  }
  class HeaderHandler extends FooterHandler{
    private $categoryMenu = [];

    public function __construct($config, $connection){
      $this->logo = $config['title'];

      $this->categoryMenu = $connection->query("SELECT `title`, `url` FROM `articles_categories`");
      $this->categoryMenu = $this->categoryMenu->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getCategoryMenu(){
      return $this->categoryMenu;
    }
  }
?> -->