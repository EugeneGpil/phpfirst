<aside class="sidebar">
  <section class="sidebar-section">
    <div class="section__header sidebar-section__header">
      <a href="#" class="section__headline">мы_знаем</a>
    </div>
    <div class="sidebar-section__revolver-maps-earth">
      <script type="text/javascript" src="//rf.revolvermaps.com/0/0/6.js?i=5pfrmngrb3v&amp;m=7&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
    </div>
  </section>
  <?php
    $articlesMostViewedQ = mysqli_query($connection, 
      'SELECT t1.*, t2.id category_id, t2.title category_title 
      FROM articles t1 
      LEFT JOIN articles_categories t2 
      ON t1.categories_id = t2.id 
      ORDER BY `views` 
      DESC 
      LIMIT 5'
    );
    $articlesMostViewed = mysqli_fetch_all($articlesMostViewedQ, MYSQLI_ASSOC);
  ?>
  <section class="sidebar-section">
    <div class="section__header sidebar-section__header">
      <a href="#" class="section__headline">топ_читаемых</a>
    </div>
    <div class="sidebar-section__articles-preview-container">
      <?php
        foreach ($articlesMostViewed as $article){
          ?>
          <div class="article-preview sidebar-section__article-preview">
            <a href="/pages/article.php?id=<?=$article['id']?>"
              class="article-preview__image-container"
              style="background-image: url('../static/images/<?=$article['image']?>')">
            </a>
            <div class="article-preview__information-container">
              <a href="/pages/article.php?id=<?=$article['id']?>" 
                class="article-preview__headline"><?=$article['title']?>
              </a>
              <div class="article-preview__category-container">
                <span class="article-preview__category">категория:</span>
                <a href="articles.php?id=<?=$article['category_id']?>" 
                  class="article-preview__category"><?=$article['category_title']?></a>
              </div>
              <a href="/pages/article.php?id=<?=$article['id']?>" 
                class="article-preview__text"><?=strip_tags(mb_substr($article['text'], 0, 100, 'utf-8')). '...'?></a>
            </div>
          </div>
          <?php
        }
      ?>
    </div>
  </section>
  <?php
    $lastCommentsQ = mysqli_query($connection,
      'SELECT comments.*, 
        users.login `login`, users.avatar `avatar`, users.email `email`,
        articles.id `article_id_articles_table`, articles.title `title`
      FROM `comments` comments
      LEFT JOIN `users` users
      ON comments.author = users.login
      LEFT JOIN `articles` articles
      ON comments.article_id = articles.id
      ORDER BY `pubdate` 
      DESC 
      LIMIT 5'
    );
    $lastComments = mysqli_fetch_all($lastCommentsQ, MYSQLI_ASSOC);
  ?>
  <section class="sidebar-section">
    <div class="section__header sidebar-section__header">
      <a href="#" class="section__headline">последние_комментарии</a>
    </div>
    <div class="sidebar-section__articles-preview-container">
      <?php
        foreach ($lastComments as $comment){
          ?>
          <div class="article-preview sidebar-section__article-preview">
            <a href="/pages/user.php?login=<?=$comment['author']?>"
              class="article-preview__image-container"
              style="background-image: url('../static/avatars/<?=$comment['avatar']?>');">
            </a>
            <!-- only for avatars from gravatar -->
            <!-- <a href="/pages/user.php?login=<?=$comment['author']?>"
              class="article-preview__image-container"
              style="background-image: url('https://www.gravatar.com/avatar/<?=md5($comment['email'])?>');">
            </a> -->
            <div class="article-preview__information-container">
              <a href="/pages/user.php?login=<?=$comment['author']?>"
                class="article-preview__headline">
                <?=$comment['author']?>
              </a>
              <div class="article-preview__category-container">
                <span class="article-preview__category">статья:</span>
                <a href="/pages/article.php?id=<?=$comment['article_id']?>"
                  class="article-preview__category">
                  <?=$comment['title']?>
                </a>
              </div>
              <a href="/pages/article.php?id=<?=$comment['article_id']?>"
                class="article-preview__text">
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
</aside>