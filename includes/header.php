<header class="running-title">
  <div class="running-title-container">
    <a href="/" class="logo">
      <?php
        echo $config['title'];
      ?>
    </a>
    <nav class="running-title-navigation">
      <ul class="running-title-navigation__list">
        <li><a href="/" class="running-title-navigation__button">главная</a></li>
        <li><a href="/pages/about_me.php" class="running-title-navigation__button">об авторе</a></li>
        <li>
          <a target="_blank" 
            href='
              <?php
                echo $config['vk_url'];
              ?>'
            class="running-title-navigation__button 
              running-title-navigation__main-button">
            я вконтакте
          </a>
        </li>
      </ul>
    </nav>
  </div>
</header>
<?php
  $categories_q = mysqli_query($connection, "SELECT * FROM `articles_categories`");
  $categories = array();
  while ($cat = mysqli_fetch_assoc($categories_q))
    $categories[] = $cat;
?>
<div class="main-navigation-wrapper">
  <nav class="main-navigation">
    <ul class="main-navigation__list">
      <?php
        foreach ($categories as $cat)
          echo '<li class="main-navigation__button-container"><a href="/articles.php?category='.
            $cat['id'].
            '" class="main-navigation__button">'.
            $cat['title'].
            '</a></li>';
      ?>
    </ul>
  </nav>
</div>