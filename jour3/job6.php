<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<?php $str = "Les choses que l'on possede finissent par nous posseder" ?>

<?php for($lenght=0;  isset($str[$lenght]);  $lenght++):?> 
 
<?php endfor;?>

<?php for($o=$lenght-1 ; $o>=0 ;$o--):?> 

  <?=$str[$o]?>
<?php endfor;?>

</body>

</html>