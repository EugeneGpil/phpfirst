<header class="running-title">
  <div class="running-title-container">
    <a href="/" class="logo">
      <?php
        echo $config['title'];
      ?>
    </a>
    <nav class="running-title-navigation">
      <ul class="running-title-navigation__list">
        <li><a href="#" class="running-title-navigation__button">главная</a></li>
        <li><a href="pages/about_me.php" class="running-title-navigation__button">об авторе</a></li>
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
<div class="main-navigation-wrapper">
  <nav class="main-navigation">
    <ul class="main-navigation__list">
      <li class="main-navigation__button-container"><a href="#" class="main-navigation__button">безопасность</a></li>
      <li class="main-navigation__button-container"><a href="#" class="main-navigation__button">программирование</a></li>
      <li class="main-navigation__button-container"><a href="#" class="main-navigation__button">lifestyle</a></li>
      <li class="main-navigation__button-container"><a href="#" class="main-navigation__button">музыка</a></li>
      <li class="main-navigation__button-container"><a href="#" class="main-navigation__button">саморазвитие</a></li>
      <li class="main-navigation__button-container"><a href="#" class="main-navigation__button">гайды</a></li>
      <li class="main-navigation__button-container"><a href="#" class="main-navigation__button">обзоры</a></li>
    </ul>
  </nav>
</div>