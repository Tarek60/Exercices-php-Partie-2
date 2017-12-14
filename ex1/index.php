<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 1</title>
</head>
<body>
  <?php
  $age = 20;
  if($age > 0){
    if ($age > 18){
      echo 'Vous êtes majeur';
    } else {
      echo 'Vous êtes mineur';
    }
  } else {
    echo 'Vous n\'êtes pas né';
  }
  ?>
</body>
</html>
