<?php
  include '../etc/config.php' or die("[FATAL] Config Load Error");
  
  function displayHeader() {
    echo '<h1 id="title">';
    echo $config['title'];
    echo '</h1>'
  }
  
  function displayNav() {
    $nav = simplexml_load_file('../etc/nav.xml') or die("[FATAL] Nav File Load Error");
    echo '<ul id="nav">';
    foreach $nav['nav'] as $item {
      echo '<li class="navitem"><a class="navitem-link" href="' . $item['url'] . '">' . $item['text'] . '</a></li>';
    }
    echo '</ul>'
  }
  
  function displayMain() {
    foreach(scandir('../posts') as $post) {
      $file_text = file_get_contents('../posts/' . $post)
      echo '<article>';
      if (strlen($file_text) > $config['home_post_length']) {
        ftruncate($file_text, $config['home_post_length']);
      }
      echo $config['title'];
      echo '</article>'
    }
  }
?>
