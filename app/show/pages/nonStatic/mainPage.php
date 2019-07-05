<!-- App\ShowClasses\ShowMainContent.php -->

<section class="main-content">
  <div class="section__header">
    <a href="<?= $data['config']['urls']['articles'] ?>" class="section__headline content__button_grey-theme">новейшее в блоге</a>
    <a href="<?= $data['config']['urls']['articles'] ?>" class="main-content__header-button content__button_grey-theme">все записи</a>
  </div>
  <div class="main-content__articles-container">
    <?php for ($i = 0; isset($data['last_articles'][$i]); $i++) { ?>
      <div class="main-content__article-preview-container
              <?php if ($i <= 1) echo ' main-content__article-preview-container-first-row'; ?>
            ">
        <div class="article-preview">
          <a href="<?= $data['last_articles'][$i]['url'] ?>" class="article-preview__image-container" style="background-image: url('<?= $data['last_articles'][$i]['image'] ?>');">
          </a>
          <div class="article-preview__information-container">
            <a href="<?= $data['last_articles'][$i]['url'] ?>" class="article-preview__headline article-preview__interactive-button"><?= $data['last_articles'][$i]['title'] ?>
            </a>
            <div class="article-preview__category article-preview__interactive-button-container">
              <span class="article-preview__category">категория:</span>
              <a href="<?= $data['last_articles'][$i]['category_url'] ?>" class="article-preview__category article-preview__interactive-button"><?= $data['last_articles'][$i]['category_title'] ?>
              </a>
            </div>
            <a href="<?= $data['last_articles'][$i]['url'] ?>" class="article-preview__text content__button_grey-theme"><?= $data['last_articles'][$i]['text'] ?>
            </a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</section>

<?php foreach ($data['articles_by_categories'] as $articlesByCategory) { ?>
  <section class="main-content">
    <div class="section__header">
      <a href="<?= $articlesByCategory[0]['category_url'] ?>" class="section__headline content__button_grey-theme"><?= $articlesByCategory[0]['category_title'] ?></a>
      <a href="<?= $articlesByCategory[0]['category_url'] ?>" class="main-content__header-button content__button_grey-theme">все записи</a>
    </div>
    <div class="main-content__articles-container">
      <?php for ($i = 0; isset($articlesByCategory[$i]); $i++) { ?>
        <div class="main-content__article-preview-container <?php if ($i <= 1) echo ' main-content__article-preview-container-first-row'; ?>">
          <div class="article-preview">
            <a href="<?= $articlesByCategory[$i]['url'] ?>" class="article-preview__image-container" style="background-image: url('<?= $articlesByCategory[$i]['image'] ?>');">
            </a>
            <div class="article-preview__information-container">
              <a href="<?= $articlesByCategory[$i]['url'] ?>" class="article-preview__headline article-preview__interactive-button"><?= $articlesByCategory[$i]['title'] ?>
              </a>
              <div class="article-preview__category article-preview__interactive-button-container">
                <span class="article-preview__category">категория:</span>
                <a href="<?= $articlesByCategory[$i]['category_url'] ?>" class="article-preview__category article-preview__interactive-button"><?= $articlesByCategory[$i]['category_title'] ?>
                </a>
              </div>
              <a href="<?= $articlesByCategory[$i]['url'] ?>" class="article-preview__text content__button_grey-theme"><?= $articlesByCategory[$i]['text'] ?>
              </a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>
<?php } ?>