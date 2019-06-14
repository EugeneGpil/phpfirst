<?php
  class UrlHandler{
    private $urlStr;
    private $urlMass = [];

    public function __construct($gottenUrl){
      $this->urlStr = $gottenUrl;
      while ($gottenUrl != ''){
        $slashPos = strripos($gottenUrl, '/');
        if ($slashPos === false){
          $this->urlMass[] = $gottenUrl;
          break;
        }
        if ($slashPos === 0){
          $gottenUrl = subStr($gottenUrl, 1);
          continue;
        }
        $gottenUrl = $this->urlMass = subStr($gottenUrl, $slashPos);
      }
    }
    public function getUrlStr(){
      return $this->urlStr;
    }
    public function getUrlMass(){
      return $this->urlMass;
    }
  }
?>