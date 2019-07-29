<!-- App\ShowClasses\ShowMainContent.php -->

<section id="start-of-articles-previews" class="main-content">
  <div class="section__header">
    <a href="<?= $data['category_url'] ?>" class="section__headline content__button_grey-theme"><?= $data['category_title'] ?></a>
    <a href="<?= $data['category_url'] ?>" class="main-content__header-button content__button_grey-theme">все записи</a>
  </div>
  <div class="main-content__articles-container">
    <?php for ($i = 0; $i < $data['articles']['count']; $i++) { ?>
      <div class="main-content__article-preview-container <?php if ($i <= 1) echo ' main-content__article-preview-container-first-row'; ?> ">
        <div class="article-preview">
          <a href="<?= $data['articles'][$i]['url'] ?>" class="article-preview__image-container" style="background-image: url('<?= $data['articles'][$i]['image'] ?>');">
          </a>
          <div class="article-preview__information-container">
            <a href="<?= $data['articles'][$i]['url'] ?>" class="article-preview__headline article-preview__interactive-button">
              <?= $data['articles'][$i]['title'] ?>
            </a>
            <div class="article-preview__category article-preview__interactive-button-container">
              <span class="article-preview__category">категория:</span>
              <a href="<?= $data['articles'][$i]['category_url'] ?>" class="article-preview__category article-preview__interactive-button">
                <?= $data['articles'][$i]['category_title'] ?>
              </a>
            </div>
            <a href="<?= $data['articles'][$i]['url'] ?>" class="article-preview__text content__button_grey-theme">
              <?= $data['articles'][$i]['text'] ?>
            </a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
  <div class="main-content__change-page-container">
    <a href="<?= $data['prev_page_url'] ?>#start-of-articles-previews" class="main-content__page-change-button main-content__page-change-element <?php if ($data['page'] == 1) echo "main-content__page-change-element_hidden"; ?>">
      <-- </a> <div class="main-content__corrent-page main-content__page-change-element"><?= $data['page'] ?></div>
  <a href="<?= $data['next_page_url'] ?>#start-of-articles-previews" class="main-content__page-change-button main-content__page-change-element <?php if (!$data['show_next_page_arrow']) echo "main-content__page-change-element_hidden"; ?>">
    -->
  </a>
  </div>
</section>