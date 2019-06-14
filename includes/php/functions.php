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
?>
  <!-- <li><a href="/" class="running-title-navigation__button">главная</a></li>
  <li><a href="/aboutAuthor" class="running-title-navigation__button">об авторе</a></li>
  <li>
    <a target="_blank" 
      href='<?=$config['vk_url']?>'
      class="running-title-navigation__button 
        running-title-navigation__main-button">
      я вконтакте
    </a>
  </li> -->