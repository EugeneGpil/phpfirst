<!-- App/ShowClasses/ShowMainPage.php -->

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $data['regular']['title'] ?></title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
  <div class="wrapper">
    <div class="full-screen-form-container <?php if ($inputs['registration']['what_form_is'] != "registration") echo "full-screen-form-container_hidden"; ?>" id="registration-form-container">
      <form class="full-screen-form full-screen-form_registration" method="POST">
        <div class="full-screen-form__element-plus-error-container">
          <div class="full-screen-form__error full-screen-form__error_small"><?= $inputs['registration']['login_error'] ?></div>
          <input type="text" class="full-screen-form__element full-screen-form__element_with-error" name="login" placeholder="Логин" value="<?= $inputs['registration']['login'] ?>">
        </div>
        <div class="full-screen-form__element-plus-error-container">
          <div class="full-screen-form__error full-screen-form__error_small"><?= $inputs['registration']['email_error'] ?></div>
          <input type="text" class="full-screen-form__element full-screen-form__element_with-error" name="email" placeholder="Почта" value="<?= $inputs['registration']['email'] ?>">
        </div>
        <div class="full-screen-form__element-plus-error-container">
          <div class="full-screen-form__error full-screen-form__error_small"><?= $inputs['registration']['password_error'] ?></div>
          <input type="password" class="full-screen-form__element full-screen-form__element_with-error" name="first_password" placeholder="Пароль">
        </div>
        <input type="password" class="full-screen-form__element" name="second_password" placeholder="Повторите пароль">
        <input type="submit" class="full-screen-form__element full-screen-form__button" name="register" value="Зарегистрироваться">
        <input type="button" class="full-screen-form__element full-screen-form__button" id="registration-form__close-button" value="Назад">
        <input type="hidden" name="what_form_is" value="registration">
      </form>
    </div>
    <div class="full-screen-form-container <?php if ($inputs['login']['what_form_is'] != 'login') echo "full-screen-form-container_hidden"; ?>" id="login-form-container">
      <form class="full-screen-form full-screen-form_login" method="POST">
        <div class="full-screen-form__error"><?= $inputs['login']['login_error'] ?></div>
        <input type="text" class="full-screen-form__element" name="login" placeholder="Логин" value="<?= $inputs['login']['login'] ?>">
        <input type="password" class="full-screen-form__element" name="password" placeholder="Пароль" value="<?= $inputs['login']['password'] ?>">
        <input type="submit" class="full-screen-form__element full-screen-form__button" name="enter" value="Войти">
        <input type="button" class="full-screen-form__element full-screen-form__button" id="login-form__close-button" value="Назад">
        <input type="hidden" name="what_form_is" value="login">
      </form>
    </div>
    <header class="running-title">
      <div class="running-title-container">
        <a href="/" class="logo"><?= $data['regular']['title'] ?></a>
        <nav class="running-title-navigation">
          <ul class="running-title-navigation__list">
            <li><a href="/" class="running-title-navigation__button">главная</a></li>
            <li><a href="/about_author" class="running-title-navigation__button">об авторе</a></li>
            <li><a href="<?= $data['regular']['vk_url'] ?>" class="running-title-navigation__button running-title-navigation__main-button" target="_blank">я вконтакте</a></li>
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
            <?php foreach ($data['regular']['category_menu'] as $category) { ?>
              <li class="main-navigation__button-container">
                <a href="<?= $category['url'] ?>" class="main-navigation__button"> <?= $category['title'] ?>
                </a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </nav>
    </div>
    <div class="header-user-info user-info" <?php if (!$inputs['login']['logged_in']) echo 'style="display: none"'; ?>>
      <a href="<?= $inputs['login']['user_url'] ?>" class="user-info__item user-info__login-text"><?= $inputs['login']['login'] ?></a>
      <a href="<?= $inputs['login']['user_url'] ?>" class="user-info__item user-info__icon" style="background-image: url('<?= $inputs['login']['avatar'] ?>')">
        <div class="user-info__icon-gradient"></div>
      </a>
      <a href="<?= $inputs['login']['user_url'] ?>" class="user-info__item user-info__messages user-info__icon">
        <div class="user-info__icon-gradient">
          <div class="user-info__count-of-messages-container">
            <div class="user-info__count-of-messages-text">3</div>
          </div>
        </div>
      </a>
      <form method="POST">
        <input type="submit" name="logout" id="header-logout" class="header-user-info__logout user-info__logout user-info__icon user-info__item" value="">
        <input type="hidden" name="what-form-is" value="logout">
      </form>
    </div>
    <div class="header-login" <?php if ($inputs['login']['logged_in']) echo "style='display: none;'"; ?>>
      <div class="header-login__text header-login__element">не авторизован</div>
      <a href="#" class="header-login__button header-login__element" id="header-login__registration-button">
        <div class="header-login__button-text">регистрация</div>
      </a>
      <a href="#" class="header-login__button header-login__element" id="header-login__login-button">
        <div class="header-login__button-text">войти</div>
      </a>
    </div>
    <div class="content-wrapper">
      <div class="content">
        <?php App\ShowClasses\ShowMainContent::show($data['main_content'], $inputs) ?>
      </div>
      <aside class="sidebar">
        <section class="sidebar-section sidebar-user-info user-info" <?php if (!$inputs['login']['logged_in']) echo 'style="display: none"'; ?>>
          <a href="<?= $inputs['login']['user_url'] ?>" class="user-info__item user-info__login-text"><?= $inputs['login']['login'] ?></a>
          <a href="<?= $inputs['login']['user_url'] ?>" class="user-info__item user-info__icon" style="background-image: url('<?= $inputs['login']['avatar'] ?>')">
            <div class="user-info__icon-gradient"></div>
          </a>
          <a href="<?= $inputs['login']['user_url'] ?>" class="user-info__item user-info__messages user-info__icon">
            <div class="user-info__icon-gradient">
              <div class="user-info__count-of-messages-container">
                <div class="user-info__count-of-messages-text">3</div>
              </div>
            </div>
          </a>
          <form method="POST">
            <input type="submit" name="logout" id="logout" class="user-info__logout user-info__icon user-info__item" value="">
            <input type="hidden" name="what-form-is" value="logout">
          </form>
        </section>
        <section class="sidebar-section sidebar-login" <?php if ($inputs['login']['logged_in']) echo 'style="display: none"'; ?>>
          <a href="#" class="sidebar-login__button sidebar-login__registration-button" id="sidebar-login__registartion-button">
            <div class="sidebar-login__button-text">регистрация</div>
          </a>
          <a href="#" class="sidebar-login__button" id="sidebar-login__login-button">
            <div class="sidebar-login__button-text">войти</div>
          </a>
        </section>
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
              <?php for ($i = 0; $i < $data['regular']['popular_articles']['count']; $i++) { ?>
                <div class="article-preview sidebar-section__article-preview">
                  <a href="<?= $data['regular']['popular_articles'][$i]['url'] ?>" class="article-preview__image-container" style="background-image: url('<?= $data['regular']['popular_articles'][$i]['image'] ?>')">
                  </a>
                  <div class="article-preview__information-container">
                    <a href="<?= $data['regular']['popular_articles'][$i]['url'] ?>" class="article-preview__headline article-preview__interactive-button"><?= $data['regular']['popular_articles'][$i]['title'] ?>
                    </a>
                    <div class="article-preview__category article-preview__interactive-button-container">
                      <span class="article-preview__category">категория:</span>
                      <a href="<?= $data['regular']['popular_articles'][$i]['category_url'] ?>" class="article-preview__category article-preview__interactive-button"><?= $data['regular']['popular_articles'][$i]['category_title'] ?></a>
                    </div>
                    <a href="<?= $data['regular']['popular_articles'][$i]['url'] ?>" class="article-preview__text content__button_grey-theme"><?= $data['regular']['popular_articles'][$i]['text'] ?></a>
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
              <?php foreach ($data['regular']['last_comments'] as $comment) { ?>
                <div class="article-preview sidebar-section__article-preview">
                  <a href="<?= $comment['user_url'] ?>" class="article-preview__image-container" style="background-image: url('<?= $comment['avatar'] ?>');">
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
        <a href="/" class="logo"><?= $data['regular']['title'] ?></a>
        <nav class="running-title-navigation">
          <ul class="running-title-navigation__list">
            <li><a href="/" class="running-title-navigation__button running-title-navigation__button_footer">главная</a></li>
            <li><a href="/about_author" class="running-title-navigation__button running-title-navigation__button_footer">об авторе</a></li>
            <li><a href="<?= $data['regular']['vk_url'] ?>" class="running-title-navigation__button running-title-navigation__main-button running-title-navigation__button_footer" target="_blank">я вконтакте</a></li>
            <li><a href="/for_rightholders" class="running-title-navigation__button running-title-navigation__button_footer">правообладателям</a></li>
          </ul>
        </nav>
      </div>
    </footer>
  </div>
</body>

</html>

<script src="/js/main.js"></script>