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
  <?php while($number < 100): ?>
      <?php if($number <=20): ?>
        <p><i> <?= $number++ ?><br></i></p>
        <?php elseif($number ==42): ?>
        <p><?= "La Plateforme_" ?></p>
        <?php $number++ ?>
        

      <?php elseif($number >= 25 and $number <= 50): ?>
        <p><u><?= $number++ ?><br></u></p>

      
        <?php else: ?>
        <p> <?= $number++ ?> </p>
        <?php endif; ?>
  
  <?php endwhile; ?>


</body>
</html>