<?php
  include 'head.php';
?>
<body>
  <div class="wrapper">
    <?php
      include 'header.php';
    ?>
    <div class="content-wrapper">
      <div class="content">
        <?php
          $showFunction($url->getUrlArray()[0], $toStaticPagesPath);
        ?>
      </div>
      <?php
        include 'sidebar.php';
      ?>
    </div>
    <?php
      include 'footer.php';
    ?>
  </div>
</body>
</html>