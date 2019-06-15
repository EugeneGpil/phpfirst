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
?>