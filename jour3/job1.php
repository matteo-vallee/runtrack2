<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<?php $tableau1 = [200,204,173,98,171,404,459]?> 

<?php for($i=0;  isset($tableau1[$i]);  $i++):?> 
  <?php if($tableau1[$i]%2 == 0):?> 
  <p><?="le nombre ".$tableau1[$i]." est pair" ?></p>
  <?php else: ?>
   <p><?="le nombre ".$tableau1[$i]." est impair" ?></p>
   <?php endif; ?>
   <?php endfor; ?>



</body>
</html>