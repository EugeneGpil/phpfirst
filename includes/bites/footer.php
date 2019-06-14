<footer class="running-title footer">
  <div class="running-title-container">
    <a href="/" class="logo"><?=$config['title']?></a>
    <nav class="running-title-navigation">
      <ul class="running-title-navigation__list">
        <?php
          showMainMenu($header->getFooterNavigation(), true);
        ?>
      </ul>
    </nav>
  </div>
</footer>
<script src="/js/main.js"></script>