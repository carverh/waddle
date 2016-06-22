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
        <td id="header">
          <?php displayHeader() ?>
        </td>
      </tr>
      <tr>
        <td id="nav">
          <?php displayNav() ?>
        </td>
        <td id="main">
          <?php displayMain() ?>
        </td>
      </tr>
      <tr>
        <td id="footer">
          <?php displayFooter() ?>
        </td> 
      </tr>
    </table>
  </body>
</html>
