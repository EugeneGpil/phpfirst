<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<header class="running-title">
  <div class="running-title-container">
    <a href="/" class="logo"><?=$header->getLogo()?></a>
    <nav class="running-title-navigation">
      <ul class="running-title-navigation__list">
        <?php
          showMainNavigationMenu($header->getMainNavigation());
        ?>
      </ul>
    </nav>
  </div>
</header>
<?php
  $categories = $connection->query("SELECT * FROM `articles_categories`");
?>
<div class="main-navigation-wrapper">
  <nav class="main-navigation">
    <div class="main-navigation__list-container">
      <div class="main-navigation__button-container main-navigation__button-container_mobile">
        <a 
          id="main-navigation__mobile-open-button"
          href="#" 
          class="main-navigation__button">
            категории 
            <i 
              id="main-navigation__mobile-down-arrow"
              class="fas fa-caret-down main-navigation__button_mobile">
            </i>
            <i 
              id="main-navigation__mobile-up-arrow"
              class="fas fa-caret-up 
              main-navigation__button_mobile 
              main-navigation__button_hidden">
            </i>
        </a>
      </div>
      <ul id="main-navigation__list"
        class="main-navigation__list main-navigation__list_hidden">
      <?php
        foreach ($categories as $cat)
          echo '<li class="main-navigation__button-container"><a href="/articles/category'.
            $cat['id'].
            '/page1" 
            class="main-navigation__button">'.
            $cat['title'].
            '</a></li>';
        ?>
      </ul>
    </div>
  </nav>
</div>