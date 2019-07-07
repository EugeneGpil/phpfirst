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

<section class="main-content" id="add-comment-section">
  <div class="section__header">
    <div class="section__headline content__button_grey-theme">добавить комментарий</div>
  </div>
  <form action="#add-comment-section" method="POST">
    <!-- add comment -->
    <div class="add-comment__short-inputs-container">
      <div class="add-comment__error-container"><?= $inputs['errors']['name'] ?></div>
      <input type="text" class="add-comment__input add-comment__short-input" name="name" id="nickname" placeholder="Имя" value="<?= $inputs['name'] ?>">
      <!-- <input type="text" class="add-comment__input add-comment__short-input" name="nickname" id="nickname" placeholder="Никнэйм"> -->
    </div>
    <div class="add-comment__error-container"><?= $inputs['errors']['text'] ?></div>
    <textarea class="add-comment__input add-comment__comment-text-input" name="comment-text" id="comment-text" cols="30" rows="10" placeholder="Текст комментария..."><?= $inputs['comment-text'] ?></textarea>
    <input type="submit" class="add-comment__input add-comment__submit" name="submit" id="submit" value="Добавить комментарий">
    <input type="hidden" name="article_id" id="article_id" value="<?= $data['id'] ?> ">
    <input type="hidden" name='url' id='url' value="<?= $_SERVER['REQUEST_URI'] ?>">
  </form>
</section>

<!-- comments -->
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