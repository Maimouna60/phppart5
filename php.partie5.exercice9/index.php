<?php
  $departments=array(
  '02' => 'Aisne',
  '59' =>'Nord',
  '60' => 'Oise',
  '62' =>'Pas de Calais',
  '80' => 'Somme'
  );
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Partie 5 exo 9</title>
</head>
    <body>
      <?php
      //passe en revue les lignes du tableau
        foreach ($departments as $allDepartments){?>
        <!--affiche le tableau-->
          <p><?= $allDepartments?></p><?php
        } ?>    
    </body>
</html>

<?php
// Un tableau associatif permet de donner un nom à chaque case ou ligne du tableau
    $departments = array (
        '02' => 'Aisne',
        '59' => 'Nord',
        '60' => 'Oise',
        '62' => 'Pas-de-calais',
        '80' => 'Somme');
// La boucle foreach passe en revue chaque ligne du tableau        
    foreach($departments as $departmentsNumber => $allDepartments){ ?>
<!-- On affiche le tableau -->    
        <p><?= $departmentsNumber . ' ' . $allDepartments ?></p><?php
    } ?>   





