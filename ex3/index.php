<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice3</title>
  </head>
  <body>
    <?php
    $age = 2;
    $genre = 'femme';
    if ($age > 0 && ($genre =='femme' || $genre == 'homme')){
      if ($age < 18 && $genre == 'homme') {
        echo 'Vous êtes un homme et vous êtes mineur';
      }elseif ($age < 18 && $genre == 'femme') {
        echo 'Vous êtes une femme et vous êtes mineure';
      }elseif ($age >= 18 && $genre == 'femme') {
        echo 'Vous êtes une femme et vous êtes majeure';
      }else {
        echo 'Vous êtes un homme et vous êtes majeur';
      }
    }else{
      echo 'veuillez saisir un age correct';
    }
   ?>
  </body>
</html>
