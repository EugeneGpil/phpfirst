<?php
  function showMainMenu($menuItems, $footer = false){
    foreach ($menuItems as $menuItem){
      ?>
        <li>
          <a href="<?=$menuItem['url']?>" 
            <?php
              if ($menuItem['newWindow'])
                echo 'target="_blank" '
            ?>
            class="running-title-navigation__button
              <?php
                if ($menuItem['catchy'])
                  echo 'running-title-navigation__main-button ';
                if ($footer)
                  echo 'running-title-navigation__button_footer';
              ?>
            ">
            <?=$menuItem['title']?>
          </a>
        </li>
      <?php
    }
  }
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
?>