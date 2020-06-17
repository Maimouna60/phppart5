<?php
    $department = array (
    '02' =>'Aisne',
    '59' =>'Nord',
    '60' =>'Oise',
    '62' =>'Pas de Calais',
    '80' =>'Somme');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Partie 5 exo 1O</title>
</head>
    <body>
      <p>
        <?php
        foreach($department as $clé =>$element){?>
          <?='Le departement ' .$element.' ' .'à le numero'.' '.$clé ;?></p>
        <?php }?>
      </p>
    </body>
</html>