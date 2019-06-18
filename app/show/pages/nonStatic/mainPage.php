<section class="main-content">
  <div class="section__header">
    <a href="<?= $urls['articles'] ?>" class="section__headline content__button_grey-theme">новейшее в блоге</a>
    <a href="<?= $urls['articles'] ?>" class="main-content__header-button content__button_grey-theme">все записи</a>
  </div>
  <div class="main-content__articles-container">
    <?php
    $i = 0;
    $lastArticles = $mainPageData->getLastArticles();
    foreach ($lastArticles as $article) {
      $toArticleUrl = '/' . $urls['articles'] . '/' . $article['url'];
      ?>
      <div class="main-content__article-preview-container
        <?php if ($i++ <= 1)
          echo ' main-content__article-preview-container-first-row';
        ?>
        ">
        <div class="article-preview">
          <a href="<?= $toArticleUrl ?>" class="article-preview__image-container" style="background-image: url('<?= $urlToImages . $article['image'] ?>');">
          </a>
          <div class="article-preview__information-container">
            <a href="<?= $toArticleUrl ?>" class="article-preview__headline article-preview__interactive-button"><?= $article['title'] ?>
            </a>
            <div class="article-preview__category article-preview__interactive-button-container">
              <span class="article-preview__category">категория:</span>
              <a href="<?= '/' . $urls['articles'] . '/' . $article['category_url'] ?>/page1" class="article-preview__category article-preview__interactive-button"><?= $article['category_title'] ?>
              </a>
            </div>
            <a href="<?= $toArticleUrl ?>" class="article-preview__text content__button_grey-theme"><?= strip_tags(mb_substr($article['text'], 0, 100, 'utf-8')) . '...' ?>
            </a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</section>