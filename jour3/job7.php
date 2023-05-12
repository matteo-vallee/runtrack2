<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<?php $str = "Certaines choses changent, et d'autres ne changeront jamais." ?>
<?php for($lenght=0;  isset($str[$lenght]);  $lenght++):?> 
 
 <?php endfor;?>

<?php for($n=0;  isset($str[$n]);  $n++):?> 
<?php $i = $n+1?>

<?php if($lenght<=$i):?>

  <?php $i = 0?>
  


<?php endif; ?>
<?=$str[$i]?>
<?php endfor;?>



</body>
</html>
