<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  




<?php $str = "I'm sorry Dave I'm afraid I can't do that" ?>
<?php $liste = ["A","E","I","O","U","Y","a","e","i","o","u","y"] ?>
<?php for($i=0;  isset($str[$i]);  $i++):?> 
<?php for($o=0;  isset($liste[$o]);  $o++):?> 
  <?php if($str[$i] == $liste[$o]):?>
  <p><?=$str[$i]?></p>
<?php endif;?>
<?php endfor;?>
<?php endfor;?>




</body>
</html>