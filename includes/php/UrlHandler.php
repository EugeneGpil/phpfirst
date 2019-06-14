<?php
  class UrlHandler{
    private $urlStr;
    private $urlArray = [];

    public function __construct($gottenUrl){
      $this->urlStr = $gottenUrl;
      $this->urlArray = explode('/', $this->urlStr);
      $masForDel = $this->urlArray;
      for ($i=0; $i < count($this->urlArray); $i++)
        while ($masForDel[$i] === '')
          unset($masForDel[$i]);
      $this->urlArray = $masForDel;
    }
    public function getUrlStr(){
      return $this->urlStr;
    }
    public function geturlArray(){
      return $this->urlArray;
    }
  }
?>