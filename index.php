<?php
  include 'config.php';
  include 'core.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php displayTitle() ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
  </head>
  <body>
    <table border="1">
      <tr>
        <td id="header" colspan="2">
          <?php displayHeader() ?>
        </td>
      </tr>
      <tr>
        <td id="main" width="90%">
          <?php displayMain() ?>
        </td>
        <td id="nav" width="10%">
          <?php displayNav() ?>
        </td>
      </tr>
      <tr>
        <td id="footer" colspan="2">
          <?php displayFooter() ?>
        </td> 
      </tr>
    </table>
  </body>
</html>
