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
        <section class="main-content">
          <div class="section__header">
            <a href="/articles.php" class="section__headline">новейшее_в_блоге</a>
            <a href="/articles.php" class="main-content__header-button">все записи</a>
          </div>
          <!-- articles previews ----------------------------------------------------------------------------------------------->
          <?php
          $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 6");
          ?>
          <div class="main-content__articles-container">
            <?php
            $i = 0;
            while ($art = mysqli_fetch_assoc($articles)){
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
                      <?php
                        foreach ($categories as $cat)
                          if ($cat['id'] == $art['categories_id'])
                            break;
                      ?>
                      <a href="/articles.php?category=<?php echo $cat['id'];?>" class="article-preview__category">
                        <?php
                          echo $cat['title'];
                        ?>
                      </a>
                    </div>
                    <a href="/article.php?id=<?php echo $cat['id'];?>"
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
        <section class="main-content">
          <div class="section__header">
            <a href="/articles.php" class="section__headline">новейшее_в_блоге</a>
            <a href="/articles.php" class="main-content__header-button">все записи</a>
          </div>
          <!-- articles previews ----------------------------------------------------------------------------------------------->
          <?php
          $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 6");
          ?>
          <div class="main-content__articles-container">
            <?php
            $i = 0;
            while ($art = mysqli_fetch_assoc($articles)){
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
                      <?php
                        foreach ($categories as $cat)
                          if ($cat['id'] == $art['categories_id'])
                            break;
                      ?>
                      <a href="/articles.php?category=<?php echo $cat['id'];?>" class="article-preview__category">
                        <?php
                          echo $cat['title'];
                        ?>
                      </a>
                    </div>
                    <a href="/article.php?id=<?php echo $cat['id'];?>"
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
        <!-- <section class="main-content">
          <div class="section__header">
            <a href="#"  class="section__headline">новейшее_в_блоге</a>
            <a href="#" class="main-content__header-button">все записи</a>
          </div>
          <div class="main-content__articles-container">
            <div class="main-content__article-preview-container main-content__article-preview-container-first-row">
              <a href="#" class="article-preview">
                <div class="article-preview__image-container">
                  <img src="" alt="">
                </div>
                <div class="article-preview__information-container">
                  <div class="article-preview__headline">разработка на Node.js</div>
                  <div class="article-preview__category-container">
                    <span class="article-preview__category">категория:</span>
                    <span class="article-preview__category">программирование</span>
                  </div>
                  <div class="article-preview__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia debitis, ab asperiores in doloremque odio. Libero, est inventore...</div>
                </div>
              </a>
            </div>
            <div class="main-content__article-preview-container main-content__article-preview-container-first-row">
              <a href="#" class="article-preview">
                <div class="article-preview__image-container">
                  <img src="" alt="">
                </div>
                <div class="article-preview__information-container">
                  <div class="article-preview__headline">разработка на Node.js</div>
                  <div class="article-preview__category-container">
                    <span class="article-preview__category">категория:</span>
                    <span class="article-preview__category">программирование</span>
                  </div>
                  <div class="article-preview__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia debitis, ab asperiores in doloremque odio. Libero, est inventore...</div>
                </div>
              </a>
            </div>
            <div class="main-content__article-preview-container">
              <a href="#" class="article-preview">
                <div class="article-preview__image-container">
                  <img src="" alt="">
                </div>
                <div class="article-preview__information-container">
                  <div class="article-preview__headline">разработка на Node.js</div>
                  <div class="article-preview__category-container">
                    <span class="article-preview__category">категория:</span>
                    <span class="article-preview__category">программирование</span>
                  </div>
                  <div class="article-preview__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia debitis, ab asperiores in doloremque odio. Libero, est inventore...</div>
                </div>
              </a>
            </div>
            <div class="main-content__article-preview-container">
              <a href="#" class="article-preview">
                <div class="article-preview__image-container">
                  <img src="" alt="">
                </div>
                <div class="article-preview__information-container">
                  <div class="article-preview__headline">разработка на Node.js</div>
                  <div class="article-preview__category-container">
                    <span class="article-preview__category">категория:</span>
                    <span class="article-preview__category">программирование</span>
                  </div>
                  <div class="article-preview__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia debitis, ab asperiores in doloremque odio. Libero, est inventore...</div>
                </div>
              </a>
            </div>
            <div class="main-content__article-preview-container">
              <a href="#" class="article-preview">
                <div class="article-preview__image-container">
                  <img src="" alt="">
                </div>
                <div class="article-preview__information-container">
                  <div class="article-preview__headline">разработка на Node.js</div>
                  <div class="article-preview__category-container">
                    <span class="article-preview__category">категория:</span>
                    <span class="article-preview__category">программирование</span>
                  </div>
                  <div class="article-preview__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia debitis, ab asperiores in doloremque odio. Libero, est inventore...</div>
                </div>
              </a>
            </div>
            <div class="main-content__article-preview-container">
              <a href="#" class="article-preview">
                <div class="article-preview__image-container">
                  <img src="" alt="">
                </div>
                <div class="article-preview__information-container">
                  <div class="article-preview__headline">разработка на Node.js</div>
                  <div class="article-preview__category-container">
                    <span class="article-preview__category">категория:</span>
                    <span class="article-preview__category">программирование</span>
                  </div>
                  <div class="article-preview__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia debitis, ab asperiores in doloremque odio. Libero, est inventore...</div>
                </div>
              </a>
            </div>
            <div class="main-content__article-preview-container">
              <a href="#" class="article-preview">
                <div class="article-preview__image-container">
                  <img src="" alt="">
                </div>
                <div class="article-preview__information-container">
                  <div class="article-preview__headline">разработка на Node.js</div>
                  <div class="article-preview__category-container">
                    <span class="article-preview__category">категория:</span>
                    <span class="article-preview__category">программирование</span>
                  </div>
                  <div class="article-preview__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia debitis, ab asperiores in doloremque odio. Libero, est inventore...</div>
                </div>
              </a>
            </div>
            <div class="main-content__article-preview-container">
              <a href="#" class="article-preview">
                <div class="article-preview__image-container">
                  <img src="" alt="">
                </div>
                <div class="article-preview__information-container">
                  <div class="article-preview__headline">разработка на Node.js</div>
                  <div class="article-preview__category-container">
                    <span class="article-preview__category">категория:</span>
                    <span class="article-preview__category">программирование</span>
                  </div>
                  <div class="article-preview__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia debitis, ab asperiores in doloremque odio. Libero, est inventore...</div>
                </div>
              </a>
            </div>                                       
          </div>
        </section>
        <section class="main-content">
          <div class="section__header">
            <a href="#"  class="section__headline">новейшее_в_блоге</a>
            <a href="#" class="main-content__header-button">все записи</a>
          </div>
          <div class="main-content__articles-container">
            <div class="main-content__article-preview-container main-content__article-preview-container-first-row">
              <a href="#" class="article-preview">
                <div class="article-preview__image-container">
                  <img src="" alt="">
                </div>
                <div class="article-preview__information-container">
                  <div class="article-preview__headline">разработка на Node.js</div>
                  <div class="article-preview__category-container">
                    <span class="article-preview__category">категория:</span>
                    <span class="article-preview__category">программирование</span>
                  </div>
                  <div class="article-preview__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia debitis, ab asperiores in doloremque odio. Libero, est inventore...</div>
                </div>
              </a>
            </div>
            <div class="main-content__article-preview-container main-content__article-preview-container-first-row">
              <a href="#" class="article-preview">
                <div class="article-preview__image-container">
                  <img src="" alt="">
                </div>
                <div class="article-preview__information-container">
                  <div class="article-preview__headline">разработка на Node.js</div>
                  <div class="article-preview__category-container">
                    <span class="article-preview__category">категория:</span>
                    <span class="article-preview__category">программирование</span>
                  </div>
                  <div class="article-preview__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia debitis, ab asperiores in doloremque odio. Libero, est inventore...</div>
                </div>
              </a>
            </div>
            <div class="main-content__article-preview-container">
              <a href="#" class="article-preview">
                <div class="article-preview__image-container">
                  <img src="" alt="">
                </div>
                <div class="article-preview__information-container">
                  <div class="article-preview__headline">разработка на Node.js</div>
                  <div class="article-preview__category-container">
                    <span class="article-preview__category">категория:</span>
                    <span class="article-preview__category">программирование</span>
                  </div>
                  <div class="article-preview__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia debitis, ab asperiores in doloremque odio. Libero, est inventore...</div>
                </div>
              </a>
            </div>
            <div class="main-content__article-preview-container">
              <a href="#" class="article-preview">
                <div class="article-preview__image-container">
                  <img src="" alt="">
                </div>
                <div class="article-preview__information-container">
                  <div class="article-preview__headline">разработка на Node.js</div>
                  <div class="article-preview__category-container">
                    <span class="article-preview__category">категория:</span>
                    <span class="article-preview__category">программирование</span>
                  </div>
                  <div class="article-preview__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia debitis, ab asperiores in doloremque odio. Libero, est inventore...</div>
                </div>
              </a>
            </div>
            <div class="main-content__article-preview-container">
              <a href="#" class="article-preview">
                <div class="article-preview__image-container">
                  <img src="" alt="">
                </div>
                <div class="article-preview__information-container">
                  <div class="article-preview__headline">разработка на Node.js</div>
                  <div class="article-preview__category-container">
                    <span class="article-preview__category">категория:</span>
                    <span class="article-preview__category">программирование</span>
                  </div>
                  <div class="article-preview__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia debitis, ab asperiores in doloremque odio. Libero, est inventore...</div>
                </div>
              </a>
            </div>
            <div class="main-content__article-preview-container">
              <a href="#" class="article-preview">
                <div class="article-preview__image-container">
                  <img src="" alt="">
                </div>
                <div class="article-preview__information-container">
                  <div class="article-preview__headline">разработка на Node.js</div>
                  <div class="article-preview__category-container">
                    <span class="article-preview__category">категория:</span>
                    <span class="article-preview__category">программирование</span>
                  </div>
                  <div class="article-preview__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia debitis, ab asperiores in doloremque odio. Libero, est inventore...</div>
                </div>
              </a>
            </div>
            <div class="main-content__article-preview-container">
              <a href="#" class="article-preview">
                <div class="article-preview__image-container">
                  <img src="" alt="">
                </div>
                <div class="article-preview__information-container">
                  <div class="article-preview__headline">разработка на Node.js</div>
                  <div class="article-preview__category-container">
                    <span class="article-preview__category">категория:</span>
                    <span class="article-preview__category">программирование</span>
                  </div>
                  <div class="article-preview__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia debitis, ab asperiores in doloremque odio. Libero, est inventore...</div>
                </div>
              </a>
            </div>
            <div class="main-content__article-preview-container">
              <a href="#" class="article-preview">
                <div class="article-preview__image-container">
                  <img src="" alt="">
                </div>
                <div class="article-preview__information-container">
                  <div class="article-preview__headline">разработка на Node.js</div>
                  <div class="article-preview__category-container">
                    <span class="article-preview__category">категория:</span>
                    <span class="article-preview__category">программирование</span>
                  </div>
                  <div class="article-preview__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia debitis, ab asperiores in doloremque odio. Libero, est inventore...</div>
                </div>
              </a>
            </div>                                       
          </div>
        </section>         -->
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