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
        <?php
        foreach ($regular->getPopularArticles() as $article) {
          $toThisArticleUrl = $toArticlesUrl . $article['url'];
          ?>
          <div class="article-preview sidebar-section__article-preview">
            <a href="<?= $toThisArticleUrl ?>" class="article-preview__image-container" style="background-image: url('../../static/images/<?= $article['image'] ?>')">
            </a>
            <div class="article-preview__information-container">
              <a href="<?= $toThisArticleUrl ?>" class="article-preview__headline article-preview__interactive-button"><?= $article['title'] ?>
              </a>
              <div class="article-preview__category article-preview__interactive-button-container">
                <span class="article-preview__category">категория:</span>
                <a href="<?= $toArticlesUrl ?><?= $article['category_url'] ?>" class="article-preview__category article-preview__interactive-button"><?= $article['category_title'] ?></a>
              </div>
              <a href="<?= $toThisArticleUrl ?>" class="article-preview__text content__button_grey-theme"><?= strip_tags(mb_substr($article['text'], 0, 100, 'utf-8')) . '...' ?></a>
            </div>
          </div>
        <?php
      }
      ?>
      </div>
    </section>
    <section class="sidebar-section">
      <div class="section__header sidebar-section__header">
        <a href="#" class="section__headline content__button_grey-theme">последние_комментарии</a>
      </div>
      <div class="sidebar-section__articles-preview-container">
        <?php
        foreach ($regular->getLastComments() as $comment) {
          $toThisUserUrl = $toUsersUrl . $comment['login'];
          $toThisArticleUrl = $toArticlesUrl . $comment['article_url'];
          ?>
          <div class="article-preview sidebar-section__article-preview">
            <a href="<?= $toThisUserUrl ?>" class="article-preview__image-container" style="background-image: url('../../static/avatars/<?= $comment['avatar'] ?>');">
            </a>
            <div class="article-preview__information-container">
              <a href="<?= $toThisUserUrl ?>" class="article-preview__headline article-preview__interactive-button">
                <?= $comment['login'] ?>
              </a>
              <div class="article-preview__category article-preview__interactive-button-container">
                <span class="article-preview__category">статья:</span>
                <a href="<?= $toThisArticleUrl ?>" class="article-preview__category article-preview__interactive-button">
                  <?= $comment['title'] ?>
                </a>
              </div>
              <a href="<?= $toThisArticleUrl ?>" class="article-preview__text content__button_grey-theme">
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