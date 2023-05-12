<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php $number = 0 ?>
  <?php while($number < 1337): ?>
      <?php if($number == 26 or $number == 37 or $number == 88 or $number == 1111): ?>
         <?php $number++ ?>
         
         <?php else: ?>
        <p> <?= $number++ ?> </p>
        <?php endif; ?>
  
  <?php endwhile; ?>





  
</body>
</html>