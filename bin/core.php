<?php
  include '../etc/config.php';
  
  function displayTitle() {
    echo $config['title'];
  }
  
  function displayHeader() {
    echo '<h1 id="title">';
    echo $config['title'];
    echo '</h1>';
  }
  
  function displayNav() {
    $nav = simplexml_load_file('../etc/nav.xml') or die('[FATAL] Nav File Load Error');
    echo '<ul id="nav">';
    foreach ($nav['nav'] as $item) {
      echo '<li class="navitem"><a class="navitem-link" href="' . $item['url'] . '">' . $item['text'] . '</a></li>';
    }
    echo '</ul>';
  }
  
  function displayMain() {
    foreach(scandir('posts') as $post) {
      $file = simplexml_load_file('../posts/' . $post) or die('[FATAL] Post Load Error');
      $file_text = $file['text'];
      $file_title = $file['title'];
      echo '<article>';
      echo '<h1 class="post-title">';
      echo '<a class="post-title-link" href="view.php/' . explode($post, '.xml')[0] . '">' . $file_title . '</a>';
      echo '</h1>';
      if (strlen($file_text) > $config['home_post_length']) {
        ftruncate($file_text, $config['home_post_length']);
        echo $file_text;
        echo "...";
      }
      echo '</article>';
    }
  }
  
  function displayFooter() {
    //TODO: Add Footer
  }
?>
