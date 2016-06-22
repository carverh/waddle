<?php
  
  function displayTitle() {
    $config = include('config.php');
    echo $config['title'];
  }
  
  function displayHeader() {
    echo '<h1 id="title">';
    echo $config['title'];
    echo '</h1>';
  }
  
  function displayNav() {
    $nav = simplexml_load_file('etc/nav.xml') or die('[FATAL] Nav File Load Error');
    echo '<ul id="nav">';
    foreach ($nav as $item) {
      echo '<li class="navitem"><a class="navitem-link" href="' . $item->link . '">' . $item->title . '</a></li>';
    }
    echo '</ul>';
  }
  
  function displayMain() {
    foreach (scandir('posts') as $post) {
      if ($post === '.' or $post === '..') continue;
      $file = simplexml_load_file('posts/' . $post) or die('[FATAL] Post Load Error');
      $file_text = $file->text->asXML();
      $file_title = $file->title;
      echo '<article>';
      echo '<h1 class="post-title">';
      echo '<a class="post-title-link" href="view.php/' . explode($post, '.xml')[0] . '">' . $file_title . '</a>';
      echo '</h1>';
      if (strlen($file_text) > $config['home_post_length']) {
        $file_text = str_split($file_text, $config['home_post_length'])[0];
        echo $file_text;
        echo "...";
      } else echo $file_text;
      echo '</article>';
    }
  }
  
  function displayFooter() {
    //TODO: Add Footer
  }
?>
