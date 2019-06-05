<footer class="running-title footer">
  <div class="running-title-container">
    <a href="/" class="logo">
      <?php
        echo $config['title'];
      ?>
    </a>
    <nav class="running-title-navigation">
      <ul class="running-title-navigation__list">
        <li><a href="/" class="running-title-navigation__button">главная</a></li>
        <li><a 
          href="<?php echo $config['vk_url']; ?>" 
          class="running-title-navigation__button running-title-navigation__main-button"
          target="_blank">мы вконтакте</a></li>
        <li><a href="/pages/about_me.php" class="running-title-navigation__button">об авторе</a></li>
        <li><a href="/pages/copyright.php" class="running-title-navigation__button">правообладателям</a></li>
      </ul>
    </nav>
  </div>
</footer>