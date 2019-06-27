<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8" />

  <title>Enregistrement du produit</title>

 </head>
 <body>
 <?php
 echo '<p>enregistrement du produit</p>';

 if (isset($_POST['nom'])) {
   $nom = $_POST['nom'];
 } else {
   $nom = '?';
 }
 if (isset($_POST['prix'])) {
   $prix = $_POST['prix'];
 } else {
   $prix = '?';
 }

 echo "Voici le recapitulatif votre saisie !\n";

 echo "<BR><BR><BR>\n";

 echo "Vous avez saisi les valeurs suivantes :<BR>\n";
 echo "<UL>\n";
 echo "<LI> nom :    <EM>$nom</EM>\n";
 echo "<LI> le prix du ventilo   :<EM>$prix</EM>.\n";
 echo "</UL>\n";

 echo "<BR>\n";


 echo "DITES KAMPY<BR><BR>\n";
 $servername = "localhost";
 $username = "rentilo";
 $password = "rentilo";
 $dbname = "rentilo";

 try {
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     // set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO ventilo VALUES ('NULL','$nom', '$prix')";
     // use exec() because no results are returned
     $conn->exec($sql);
     echo "Nouvel enregistrement reussi";
     }
 catch(PDOException $e)
     {
     echo $sql . "<br>" . $e->getMessage();
     }

 $conn = null;
 ?>

 </body>
</html>
