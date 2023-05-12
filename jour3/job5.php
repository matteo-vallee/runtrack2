<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<?php $str = "On n'est pas le meilleur quand on le croit mais quand on le sait" ?>


<?php $dic= ["Consonnes"=>0,"Voyelles"=>0]?>

<?php $listeV = ["O","E","I","A","U","Y","a","e","i","o","u","y"] ?>
<?php $listeC = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n',
                'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z',
                'B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N',
                'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z'
                ];?>
<?php for($i=0;  isset($str[$i]);  $i++):?> 


<?php for($o=0;  isset($listeV[$o]);  $o++):?> 


<?php if($str[$i] == $listeV[$o]):?>

  <?php $dic["Voyelles"]+=1 ?>

<?php elseif($str[$i] == $listeC[$o]): ?>
  <?php $dic["Consonnes"]+=1 ?>

<?php endif;?>
<?php endfor;?>
<?php endfor;?>

<table border="1">
      <tr>
      <th>Voyelles</th>
      <th>Consonnes</th>
      </tr>

      <tr>
      <td><?= $dic["Voyelles"] ?></td>
      <td><?= $dic["Consonnes"] ?></td>
      </tr>
</table>

<br>



</body>
</html>