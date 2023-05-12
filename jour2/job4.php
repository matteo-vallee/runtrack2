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
      <?php if($number % 3==0 and $number%5==0 ): ?>
        <p><?= "FizzBuzz"?></p>
        <?php $number++ ?>
        <?php elseif($number%3==0): ?>
        <p><?= "Fizz" ?></p>
        <?php $number++ ?>
        

      <?php elseif($number%5==0): ?>
        <p><?= "Buzz" ?></p>
        <?php $number++ ?>

      
        <?php else: ?>
        <p> <?= $number++ ?> </p>
        <?php endif; ?>
  
  <?php endwhile; ?>



</body>
</html>