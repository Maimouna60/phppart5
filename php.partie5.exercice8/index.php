<?php
  $months = array ('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Decembre');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Partie 5 exo 1</title>
</head>
    <body> 
      <ol>
        <!--boucle--> 
        <?php foreach ($months as $month) { ?>
          <li><?= $month ?> </li>
        <?php } ?>
      </ol>
    </body>
</html>
