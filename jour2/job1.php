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
      <?php if($number == 42): ?>
          <b><u><?=$number++?></u></b>
      <?php endif; ?>

    <p> <?= $number++ ?> </p>
  <?php endwhile; ?>




</body>
</html>