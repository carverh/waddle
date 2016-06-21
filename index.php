<?php
  include 'etc/config.php';
  include 'bin/core.php';
?>

<html>
  <head>
    <title><?php echo displayTitle() ?></title>
  </head>
  <body>
    <header>
      <?php echo displayHeader() ?>
    </header>
    
    <nav>
      <ul>
        <?php echo displayNav() ?>
      </ul>
    </nav>
    
    <main>
      <?php echo displayMain() ?>
    </main>
    
    <footer>
      <?php echo displayFooter() ?>
    </footer>
  </body>
</html>
