<?php
  require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <?php
    require_once 'includes/head.php'
  ?>
</head>
<body>
  <div class="wrapper">
    <?php
      require_once 'includes/functions.php';
      include 'includes/header.php';
    ?>
    <div class="content-wrapper">
      <div class="content">
        <?php
          include 'includes/content.php';
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