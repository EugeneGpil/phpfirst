<?php
  $uri = $_SERVER['REQUEST_URI'];
  if ($uri == '/')
    include 'content/main.php';
  else if ($uri == '/about_author' or $uri == '/for_rightholders')
    include 'content/info.php';
  else{
    $toArticlesUrl = "/articles";
    // if uri begins with '/articles' 
    if (strrpos($uri, $toArticlesUrl) === 0){
      //================================================================
      //================================================================
      //for working with 'content/articles.php need to recognize
      //$category and $page
      //-------------------------------------------------------
      // if uri '/articles' or '/articles/' or 'articles/page',
      // go to 'contetnt/articles.php' with $category='' and $page=1
      $category = '';
      $page = 1;
      $thisUrlforArticlesPage = true;
      //----------------------------------------------------
      // if uri '/articles/page%something%', $page = %something% and go to 'content/articles.php'
      $uri = substr($uri, strlen($toArticlesUrl));
      if (findPage($uri))
        $page = findPage(($uri));
      else{
        //--------------------------------------------------
        //need to find $someUrl for compare this with articles_categories url
        //'articles/  %$someUrl%  /someElseUrl'
        $someUrl = $uri;
        if (substr($someUrl, 0, 1) == '/'){
          $someUrl = substr($someUrl, 1);
        }
        $someUrlLenght = strrpos($someUrl, '/');
        $someUrl = '/'. $someUrl;
        if ($someUrlLenght !== false){
          $someUrl = substr($someUrl, 0, $someUrlLenght + 1);
        }
        //----------------------------------------------
        //if $someUrl is some category, $category = $someUrl
        //and need to find $page
        $categoryIsExist = $connection->query(
          "SELECT `url` 
          FROM `articles_categories`
          WHERE `url` = '$someUrl'");
        $categoryIsExist = $categoryIsExist->fetchAll();
        if (!empty($categoryIsExist)){
          $category = $someUrl;
          //-----------------------------------
          //now have 'articles/$category/something
          //need to make $page = something and go 'content/articles.php'
          $uri = substr($uri, strlen($category));
          if (findPage($uri))
            $page = findPage($uri);
          //---------------------------------------------------
        }
        else $thisUrlforArticlesPage = false;
      }
      if ($thisUrlforArticlesPage) include 'content/articles.php';
      else include 'content/article.php';
      //================================================================
      //================================================================
    }
  }
?>