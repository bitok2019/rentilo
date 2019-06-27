<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8" />

    <title>Accès à la bdd testconsole avec PDO</title>
    <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
      background-color: #4CAF50;
      color: white;
    }
    </style>
  </head>

  <body>
    <h2>Nos produits aux prix imbattables chez RENTILO </h2>


    <table>
      <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>prix(roupies)</th>
      </tr>
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

        //<tr>';
        //<th><?php echo'.$data['id'].</th>;
        //echo '<th>'.$data['nom'].</th>;
        //echo '<th>'.$data['prix'].</th>;
        //</tr>;
        echo '<tr>';
        echo '<th>'.$data['id'].'</th>';
        echo '<th>'.$data['nom'].'</th>';
        echo '<th>'.$data['prix'].'</th>';
        echo '</tr>';
        //echo $data['id'].' '.$data['nom'].' '.$data['prix'].'<br>';

      }

      $base = null;

    ?>
    </table>
  </body>

</html>
