<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $config['title'] ?></title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="/css/main.css">
</head>

<body>
  <div class="wrapper">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <header class="running-title">
      <div class="running-title-container">
        <a href="/" class="logo"><?= $config['title'] ?></a>
        <nav class="running-title-navigation">
          <ul class="running-title-navigation__list">
            <li><a href="/" class="running-title-navigation__button">главная</a></li>
            <li><a href="/about_author" class="running-title-navigation__button">об авторе</a></li>
            <li><a href="<?= $config['vk_url'] ?>" class="running-title-navigation__button running-title-navigation__main-button" target="_blank">я вконтакте</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="main-navigation-wrapper">
      <nav class="main-navigation">
        <div class="main-navigation__list-container">
          <div class="main-navigation__button-container main-navigation__button-container_mobile">
            <a id="main-navigation__mobile-open-button" href="#" class="main-navigation__button">
              категории
              <i id="main-navigation__mobile-down-arrow" class="fas fa-caret-down main-navigation__button_mobile">
              </i>
              <i id="main-navigation__mobile-up-arrow" class="fas fa-caret-up 
                  main-navigation__button_mobile 
                  main-navigation__button_hidden">
              </i>
            </a>
          </div>
          <ul id="main-navigation__list" class="main-navigation__list main-navigation__list_hidden">
            <?php foreach ($regular['category_menu'] as $category) { ?>
              <li class="main-navigation__button-container">
                <a href="<?= $category['url'] ?>" class="main-navigation__button"> <?= $category['title'] ?>
                </a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </nav>
    </div>
    <div class="content-wrapper">
      <div class="content">
        <?php
        include $pathToMainContent;
        ?>
      </div>
      <aside class="sidebar">
        <section class="sidebar-section">
          <div class="section__header sidebar-section__header">
            <a href="#" class="section__headline content__button_grey-theme">мы_знаем</a>
          </div>
          <div class="sidebar-section__revolver-maps-earth">
            <script type="text/javascript" src="//rf.revolvermaps.com/0/0/6.js?i=5pfrmngrb3v&amp;m=7&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
          </div>
        </section>
        <div class="sidebar__double-container">
          <section class="sidebar-section">
            <div class="section__header sidebar-section__header">
              <a href="#" class="section__headline content__button_grey-theme">топ_читаемых</a>
            </div>
            <div class="sidebar-section__articles-preview-container">
              <?php foreach ($regular['popular_articles'] as $article) { ?>
                <div class="article-preview sidebar-section__article-preview">
                  <a href="<?= $article['url'] ?>" class="article-preview__image-container" style="background-image: url('<?= $config['urls']['url_to_images'] . $article['image'] ?>')">
                  </a>
                  <div class="article-preview__information-container">
                    <a href="<?= $article['url'] ?>" class="article-preview__headline article-preview__interactive-button"><?= $article['title'] ?>
                    </a>
                    <div class="article-preview__category article-preview__interactive-button-container">
                      <span class="article-preview__category">категория:</span>
                      <a href="<?= $article['category_url'] ?>" class="article-preview__category article-preview__interactive-button"><?= $article['category_title'] ?></a>
                    </div>
                    <a href="<?= $article['url'] ?>" class="article-preview__text content__button_grey-theme"><?= strip_tags(mb_substr($article['text'], 0, 100, 'utf-8')) . '...' ?></a>
                  </div>
                </div>
              <?php } ?>
            </div>
          </section>
          <section class="sidebar-section">
            <div class="section__header sidebar-section__header">
              <a href="#" class="section__headline content__button_grey-theme">последние_комментарии</a>
            </div>
            <div class="sidebar-section__articles-preview-container">
              <?php foreach ($regular['last_comments'] as $comment) { ?>
                <div class="article-preview sidebar-section__article-preview">
                  <a href="<?= $comment['user_url'] ?>" class="article-preview__image-container" style="background-image: url('<?= $config['urls']['url_to_avatars'] . $comment['avatar'] ?>');">
                  </a>
                  <div class="article-preview__information-container">
                    <a href="<?= $comment['user_url'] ?>" class="article-preview__headline article-preview__interactive-button">
                      <?= $comment['login'] ?>
                    </a>
                    <div class="article-preview__category article-preview__interactive-button-container">
                      <span class="article-preview__category">статья:</span>
                      <a href="<?= $comment['article_url'] ?>" class="article-preview__category article-preview__interactive-button">
                        <?= $comment['title'] ?>
                      </a>
                    </div>
                    <a href="<?= $comment['article_url'] ?>" class="article-preview__text content__button_grey-theme">
                      <?php
                      echo strip_tags(mb_substr($comment['text'], 0, 100, 'utf-8'));
                      if (strlen($comment['text']) > 100)
                        echo '...';
                      ?>
                    </a>
                  </div>
                </div>
              <?php
            }
            ?>
            </div>
          </section>
        </div>
      </aside>
    </div>
    <footer class="running-title footer">
      <div class="running-title-container">
        <a href="/" class="logo"><?= $config['title'] ?></a>
        <nav class="running-title-navigation">
          <ul class="running-title-navigation__list">
            <li><a href="/" class="running-title-navigation__button running-title-navigation__button_footer">главная</a></li>
            <li><a href="/about_author" class="running-title-navigation__button running-title-navigation__button_footer">об авторе</a></li>
            <li><a href="<?= $config['vk_url'] ?>" class="running-title-navigation__button running-title-navigation__main-button running-title-navigation__button_footer" target="_blank">я вконтакте</a></li>
            <li><a href="/for_rightholders" class="running-title-navigation__button running-title-navigation__button_footer">правообладателям</a></li>
          </ul>
        </nav>
      </div>
    </footer>
  </div>
</body>

</html>

<script src="/js/main.js"></script>