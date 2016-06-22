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
    <table>
      <tr>
        <td>
          <header>
            <?php displayHeader() ?>
          </header>
        </td>
      </tr>
      <tr>
        <td>
          <nav>
            <?php displayNav() ?>
          </nav>
        </td>
        <td>
          <main>
            <?php displayMain() ?>
          </main>
        </td>
      </tr>
      <tr>
        <td>
          <footer>
            <?php displayFooter() ?>
          </footer>
        </td> 
      </tr>
    </table>
  </body>
</html>
