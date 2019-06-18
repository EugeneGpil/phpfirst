<?php
namespace app\show\showFunctions;

function showCategoryMenu($menuItems, $urlToCategory)
{
  foreach ($menuItems as $menuItem) {
    ?>
    <li class="main-navigation__button-container">
      <a href="<?=$urlToCategory. $menuItem['url'] ?>" class="main-navigation__button">
        <?= $menuItem['title'] ?>
      </a>
    </li>
  <?php
}
}
