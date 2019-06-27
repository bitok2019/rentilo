<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8" />

    <title>Accès à la bdd testconsole avec PDO</title>

  </head>

  <body>

    <?php

      try {

        $base = new PDO('mysql:host=localhost; dbname=rentilo', 'rentilo', 'rentilo');

      }

      catch(exception $e) {

        die('Erreur '.$e->getMessage());

      }

      $base->exec("SET CHARACTER SET utf8");

      $retour = $base->query('SELECT * FROM ventilo');

      while ($data = $retour->fetch()){

        echo $data['id'].' '.$data['nom'].' '.$data['prix'].'<br>';

      }

      $base = null;

    ?>

  </body>

</html>
