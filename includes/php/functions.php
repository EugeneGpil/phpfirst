<?php

  function showCategoryMenu($menuItems){
    foreach ($menuItems as $menuItem){
      ?>
        <li class="main-navigation__button-container">
          <a href="/articles/<?=$menuItem['url']?>"
            class="main-navigation__button">
            <?=$menuItem['title']?>
          </a>
        </li>
      <?php
    }
  }

  
  function contentElector($urlArray, $toStaticPagesPath){
    if(file_exists($toStaticPagesPath. $urlArray[0]. '.php')){
      return 'showStatic';
    }
  }

  function showStatic($fileName, $toStaticPagesPath){
    include $toStaticPagesPath. $fileName. '.php';
  }
?>