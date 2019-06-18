<?php
include 'bites/head.php';

?>

<body>
  <div class="wrapper">
    <?php
    include 'bites/header.php';
    ?>
    <div class="content-wrapper">
      <div class="content">
        <?php
        app\show\showFunctions\showStatic($pathToProject . '/app/show/pages/static/for_rightholders.php')
        ?>
      </div>
      <?php
      include 'bites/sidebar.php';
      ?>
    </div>
    <?php
    include 'bites/footer.php';
    ?>
  </div>
</body>

</html>