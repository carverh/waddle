<?php
  include 'config.php';
  include 'core.php';
?>

<html>
  <head>
    <title><?php displayTitle() ?></title>
  </head>
  <body>
    <header>
      <?php displayHeader() ?>
    </header>
    
    <nav>
      <ul>
        <?php displayNav() ?>
      </ul>
    </nav>
    
    <main>
      <?php displayMain() ?>
    </main>
    
    <footer>
      <?php displayFooter() ?>
    </footer>
  </body>
</html>
