<?php
  $uri = $_SERVER['REQUEST_URI'];
  if ($uri == '/')
    include 'content/main.php';
  else if ($uri == '/about_author' or $uri == '/for_rightholders')
    include 'content/info.php';
?>