<?php
  function showMainNavigationMenu($menuItems){
    foreach ($menuItems as $menuItem){
      ?>
        <li>
          <a href="<?=$menuItem['url']?>" 
            class="running-title-navigation__button
              <?php
                if ($menuItem['catchy'])
                  echo 'running-title-navigation__main-button';
              ?>
            ">
            <?=$menuItem['title']?>
          </a>
        </li>
      <?php
    }
  }
  function showCategoryNavigationMenu($menuItems){
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
  // foreach ($categories as $cat)
  // echo '<li class="main-navigation__button-container"><a href="/articles/category'.
  //   $cat['id'].
  //   '/page1" 
  //   class="main-navigation__button">'.
  //   $cat['title'].
  //   '</a></li>';
?>