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
        <section id="start-of-articles-previews" class="main-content">
          <div class="section__header">
            <a href="/articles.php" class="section__headline">новейшее_в_блоге</a>
            <a href="/articles.php" class="main-content__header-button">все записи</a>
          </div>
          <!-- articles previews ----------------------------------------------------------------------------------------------->
          <?php
            $page = $_GET['page'];
            $articles_per_page = $config['articles_per_page'];
            $first_shown_article = ($page - 1) * $articles_per_page;
            show_articles($articles, $articles_per_page, $first_shown_article);
          ?>
          <div class="main-content__change-page-container">
            <a href="articles.php?page=<?php echo $page - 1?>#start-of-articles-previews"
              class="main-content__previous-page-button 
                main-content__page-change-element
                <?php
                  if ($page == 1)
                    echo "main-content__page-change-element_hidden";
                ?>
                ">
              <--
            </a>
            <div class="main-content__corrent-page main-content__page-change-element"><?php echo $page?></div>
            <a href="articles.php?page=<?php echo $page + 1?>#start-of-articles-previews"
              class="main-content__next-page-button
              main-content__page-change-element
                <?php
                  if ($page == ceil(count($articles) / $articles_per_page))
                    echo "main-content__page-change-element_hidden";
                ?>
              ">
              -->
            </a>
          </div>
        </section>
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