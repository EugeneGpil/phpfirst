<?php
  class UrlHandler{
    private $urlStr;
    private $urlMas = [];

    public function __construct($gottenUrl){
      $this->urlStr = $gottenUrl;
      $this->urlMas = explode('/', $this->urlStr);
      $masForDel = $this->urlMas;
      for ($i=0; $i < count($this->urlMas); $i++)
        while ($masForDel[$i] === '')
          array_splice($masForDel, $i, 1);
      $this->urlMas = $masForDel;
    }
    public function getUrlStr(){
      return $this->urlStr;
    }
    public function geturlMas(){
      return $this->urlMas;
    }
  }
?>