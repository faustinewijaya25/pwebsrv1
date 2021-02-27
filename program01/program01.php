<?php
  $guestName = $_GET['g'];
  $today = date('l');
  $todayDate = date('l, F jS Y ');
  $color=$_GET['w'];
  $backgroundColor = $_GET['color'];
  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Belajar PHP</title>
    </head>
    <body bgcolor=<?= $color ?> >
    <body>
      <h1>Program 01</h1>
      <hr>

      <h2>Hello, <?php echo $guestName ?></h2>
      <h1>Happy <?php echo $today ?></h1>
      
    </body>
  </html>
