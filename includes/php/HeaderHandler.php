<?php
  class HeaderHandler{
    private $logo;
    private $mainNavigetion = [];
    private $categoryNavigation = [];

    public function __construct($config){
      $this->logo = $config['title'];
    }
    public function getLogo(){
      return $this->logo;
    }
  }
?>