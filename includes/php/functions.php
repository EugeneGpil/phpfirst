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

  function contentElector($urlArray, $paths){
    if(file_exists($paths['static_pages']. $urlArray[0]. '.php')){
      return 'showStatic';
    }
  }

  function showStatic($urlArray, $paths){
    include $paths['static_pages']. $urlArray[0]. '.php';
  }