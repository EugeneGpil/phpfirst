<?php
  require 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    <?php
      echo $config['title'];
    ?>
  </title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="/css/main.css">
</head>
<body>
  <div class="wrapper">
    <?php
      include 'includes/header.php';
    ?>
    <div class="content-wrapper">
      <div class="content">
        <?php
          $articles_q = mysqli_query($connection, "SELECT t1.*, t2.id category_id, t2.title category_title FROM articles t1 LEFT JOIN articles_categories t2 ON t1.categories_id = t2.id  ORDER BY `id` DESC");
          $articles = mysqli_fetch_all($articles_q, MYSQLI_ASSOC);
        ?>
        <section class="main-content">
          <div class="section__header">
            <a href="/articles.php" class="section__headline">новейшее_в_блоге</a>
            <a href="/articles.php" class="main-content__header-button">все записи</a>
          </div>
          <!-- articles previews ----------------------------------------------------------------------------------------------->
          <div class="main-content__articles-container">
            <?php
            $i = 0;
            foreach ($articles as $art){
              if ($i >= 6) break;
              ?>
              <div class="main-content__article-preview-container
                <?php
                  if ($i++ <= 1)
                    echo ' main-content__article-preview-container-first-row';
                ?>
                ">
                <div class="article-preview">
                  <a href="/article.php?id=<?php echo $art['id']; ?>"
                    class="article-preview__image-container" 
                    style="background-image: url('/static/images/<?php echo $art['image']; ?>');">
                  </a>
                  <div class="article-preview__information-container">
                    <a href="/article.php?id=<?php echo $art['id']; ?>"
                      class="article-preview__headline">
                      <?php
                        echo $art['title'];
                      ?>
                    </a>
                    <div class="article-preview__category-container">
                      <span class="article-preview__category">категория:</span>
                      <a href="/articles.php?category=<?php echo $art['category_id'];?>" class="article-preview__category">
                        <?php
                          echo $art['category_title'];
                        ?>
                      </a>
                    </div>
                    <a href="/article.php?id=<?php echo $art['id'];?>"
                      class="article-preview__text">
                      <?php
                        echo strip_tags(mb_substr($art['text'], 0, 100, 'utf-8')). '...';
                      ?>
                    </a>
                  </div>
                </div>
              </div>
              <?php
            }
            ?>
          </div>
        </section>
        <?php
          // //leave only articles with category_title from config file
          // $articles_selected_categories = array_filter($articles, function($var) use ($config){
          //   return in_array($var['category_title'], $config['main_page_categories']);
          // });
          // print_r($articles_selected_categories);
          $articles_sorted_by_category_id = [];
          foreach ($articles as $article){
            if (!in_array($article['category_title'], $config['main_page_categories'])){
              continue;
            }
            if (!is_array($articles_sorted_by_category_id[$article['category_id']]))
              $articles_sorted_by_category_id[$article['category_id']]=[];
            $articles_sorted_by_category_id[$article['category_id']][]=$article;
          }
          foreach ($articles_sorted_by_category_id as $articles_in_this_category){
            ?>
            <section class="main-content">
              <div class="section__header">
                <a 
                  href="/articles.php?category=<?php echo $articles_in_this_category[0]['category_id']?>" 
                  class="section__headline">
                  <?php echo $articles_in_this_category[0]['category_title'];?>
                </a>
                <a 
                  href="/articles.php?category=<?php echo $articles_in_this_category[0]['category_id']?>" 
                  class="main-content__header-button">
                  все записи
                </a>
              </div>
              <!-- articles previews ----------------------------------------------------------------------------------------------->
              <div class="main-content__articles-container">
                <?php
                $i = 0;
                foreach ($articles_in_this_category as $art){
                  if ($i >= 6) break;
                  ?>
                  <div class="main-content__article-preview-container
                    <?php
                      if ($i++ <= 1)
                        echo ' main-content__article-preview-container-first-row';
                    ?>
                    ">
                    <div class="article-preview">
                      <a href="/article.php?id=<?php echo $art['id']; ?>"
                        class="article-preview__image-container" 
                        style="background-image: url('/static/images/<?php echo $art['image']; ?>');">
                      </a>
                      <div class="article-preview__information-container">
                        <a href="/article.php?id=<?php echo $art['id']; ?>"
                          class="article-preview__headline">
                          <?php
                            echo $art['title'];
                          ?>
                        </a>
                        <div class="article-preview__category-container">
                          <span class="article-preview__category">категория:</span>
                          <a href="/articles.php?category=<?php echo $art['category_id'];?>" class="article-preview__category">
                            <?php
                              echo $art['category_title'];
                            ?>
                          </a>
                        </div>
                        <a href="/article.php?id=<?php echo $art['id'];?>"
                          class="article-preview__text">
                          <?php
                            echo strip_tags(mb_substr($art['text'], 0, 100, 'utf-8')). '...';
                          ?>
                        </a>
                      </div>
                    </div>
                  </div>
                  <?php
                }
                ?>
              </div>
            </section>
          <?php
          }
        ?>
      </div>
      <?php
        include 'includes/sidebar.php';
      ?>
    </div>
    <?php
      include 'includes/footer.php';
    ?>
  </div>
</body>
</html>