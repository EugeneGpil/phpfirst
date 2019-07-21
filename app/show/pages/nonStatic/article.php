<article class="main-content">
  <div class="section__header">
    <a href="#" class="section__headline content__button_grey-theme"><?= $data['title'] ?></a>
    <div class="main-content__header-button"><?= $data['views'] ?></div>
  </div>
  <div class="main-content__image-container" style="background-image: url('<?= $data['image'] ?>')">
  </div>
  <div class="main-content__article-text-container">
    <p class="main-content__article-text"><?= $data['text'] ?></p>
  </div>
</article>

<div id="add-comment-section"></div>

<section class="main-content" <?php if ($inputs['login']['logged_in'] == false) echo "style='display: none;'" ?>>
  <div class="section__header">
    <div class="section__headline content__button_grey-theme">добавить комментарий</div>
  </div>
  <form action="#add-comment-section" method="POST">
    <div class="add-comment__error-container"><?= $inputs['comment']['errors']['text'] ?></div>
    <textarea class="add-comment__input add-comment__comment-text-input" name="comment-text" id="comment-text" cols="30" rows="10" placeholder="Текст комментария..."><?= $inputs['comment']['comment-text'] ?></textarea>
    <input type="submit" class="add-comment__input add-comment__submit" name="submit" id="submit" value="Добавить комментарий">
    <input type="hidden" name="article_id" id="article_id" value="<?= $data['id'] ?> ">
    <input type="hidden" name='url' id='url' value="<?= $_SERVER['REQUEST_URI'] ?>">
    <input type="hidden" name="what_form_is" id="what_form_is_add_comment" value="add_comment">
  </form>
</section>

<section class="main-content">
  <div class="section__header">
    <a href="#" class="section__headline content__button_grey-theme" id="section__login-for-comment">Чтобы добавить комментарий, авторизуйтесь</a>
    <a href="#" class="main-content__header-button content__button_grey-theme" id="section__register-for-comment">Регистрация</a>
  </div>
</section>

<section class="main-content">
  <div class="section__header">
    <div class="section__headline content__button_grey-theme">комментарии</div>
    <a href="#add-comment-section" class="main-content__header-button content__button_grey-theme">Добавить свой</a>
  </div>
  <div class="main-content__articles-container main-content__comments-container">
    <?php for ($i = 0; $i < $data['comments']['count']; $i++) { ?>
      <div class="main-content__article-preview-container <?php if ($i == 0) echo "main-content__article-preview-container-first-row "; ?> main-content__comment-big-container">
        <div class="article-preview main-content__comment-small-container">
          <a href="<?= $data['comments'][$i]['author_url'] ?>" class="article-preview__image-container" style="background-image: url('<?= $data['comments'][$i]['avatar'] ?>');">
          </a>
          <div class="article-preview__information-container">
            <a href="<?= $data['comments'][$i]['author_url'] ?>" class="article-preview__headline article-preview__interactive-button"><?= $data['comments'][$i]['author'] ?>
            </a>
            <div class="article-preview__category article-preview__interactive-button-container">
              <span class="article-preview__category"><?= $data['comments'][$i]['pubdate'] ?></span>
            </div>
            <div class="article-preview__text"><?= $data['comments'][$i]['text'] ?></div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</section>