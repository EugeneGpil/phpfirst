<?php
namespace app\prepare\urlHandler;

class UrlHandler
{
  private $urlStr;
  private $urlArray = [];

  public function __construct($gottenUrl)
  {
    $this->urlStr = $gottenUrl;
    $this->urlArray = explode('/', $this->urlStr);
    $arrayForDel = $this->urlArray;
    for ($i = 0; $i < count($this->urlArray); $i++)
      while ($arrayForDel[$i] === '')
        array_splice($arrayForDel, $i, 1);
    $this->urlArray = $arrayForDel;
  }
  public function getUrlStr()
  {
    return $this->urlStr;
  }
  public function getUrlArray()
  {
    return $this->urlArray;
  }
}
