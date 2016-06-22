<?php
  include 'config.php';
  include 'core.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php displayTitle() ?></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
  </head>
  <body>
    <header>
      <?php displayHeader() ?>
    </header>
    
    <nav>
      <?php displayNav() ?>
    </nav>
    
    <main>
      <?php displayMain() ?>
    </main>
    
    <footer>
      <?php displayFooter() ?>
    </footer>
  </body>
</html>
