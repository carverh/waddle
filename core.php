<?php
  $config = include('config.php');
  
  function displayTitle() {
    global $config;
    echo $config['title'];
  }
  
  function displayHeader() {
    global $config;
    echo '<h1 id="title">';
    echo $config['title'];
    echo '</h1>';
  }
  
  function displayNav() {
    global $config;
    $nav = simplexml_load_file('etc/nav.xml') or die('[FATAL] Nav File Load Error');
    echo '<table>';
    foreach ($nav as $item) {
      echo '<tr class="ni-tr"><td class="ni-td"><a class="navitem-link" href="' . $item->link . '">' . $item->title . '</a></td class="ni-td"></tr>';
    }
    echo '</table>';
  }
  
  function displayMain() {
    global $config;
    foreach (scandir('posts') as $post) {
      if ($post === '.' or $post === '..') continue;
      $file = simplexml_load_file('posts/' . $post) or die('[FATAL] Post Load Error');
      $file_text = $file->text->asXML();
      $file_title = $file->title;
      echo '<article>';
      echo '<h1 class="post-title">';
      echo '<a class="post-title-link" href="view.php?p=' . $post . '">' . $file_title . '</a>';
      echo '</h1>';
      if (strlen($file_text) > $config['home_post_length']) {
        $file_text = str_split($file_text, $config['home_post_length'])[0];
        echo $file_text;
        echo "...";
      } else echo $file_text;
      echo '</article>';
    }
  }
  
  function displayPost($postid) {
    global $config;
    $file = simplexml_load_file('posts/' . $postid) or die('[FATAL] Post Load Error');
    $file_text = $file->text->asXML();
    $file_title = $file->title;
    echo '<h1 class="post-title">';
    echo $file_title;
    echo '</h1>';
    echo $file_text;
  }
  
  function displayFooter() {
    global $config;
    echo "Copyright " . $config['author'];
  }
?>
