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
      include 'includes/functions.php';
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
            <a href="/articles.php?page=1" class="section__headline">новейшее_в_блоге</a>
            <a href="/articles.php?page=1" class="main-content__header-button">все записи</a>
          </div>
          <!-- articles previews ------------------------------------------------------------>
          <?php
            show_articles($articles, 6);
          ?>
        </section>
        <?php
          // //leave only articles with category_title from config file
          // $articles_selected_categories = array_filter($articles, function($var) use ($config){
          //   return in_array($var['category_title'], $config['main_page_categories']);
          // });
          // print_r($articles_selected_categories);
          $articles_sorted_by_category_title = [];
          foreach ($config['main_page_categories'] as $category){
            foreach ($articles as $article){
              if ($article['category_title'] != $category) continue;
              if (!is_array($articles_sorted_by_category_title[$category]))
                $articles_sorted_by_category_title[$category] = [];
              $articles_sorted_by_category_title[$category][] = $article;
            }
            if (!is_array($articles_sorted_by_category_title[$category]))
              echo 'category in config file is not ok<br>';
          }
          foreach ($articles_sorted_by_category_title as $articles_in_this_category){
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
              <?php
                show_articles($articles_in_this_category, 6);
              ?>
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