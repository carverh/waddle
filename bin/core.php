<?php
  include '../etc/config.php';
  include '../etc/nav.php';
  
  function displayHeader() {
   echo '<h1 id="blog-title">';
   echo $config['title'];
   echo '</h1>'
  }
  
  function displayNav() {
   echo '<ul id="blog-nav">';
   foreach $nav as $item {
     echo '<li><a href="' . l"'
   }
   echo '</h1>'
  }
  
  function displayNav() {
   echo '<ul id="blog-nav">';
   echo $config['title'];
   echo '</h1>'
  }
?>
