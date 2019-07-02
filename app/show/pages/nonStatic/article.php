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