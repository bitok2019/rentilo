<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8" />

  <title>Enregistrement du client</title>

 </head>
 <body>
 <?php
 echo '<p>enregistrement du Client</p>';


 if (isset($_POST['nom'])) {
   $nom = $_POST['nom'];
 } else {
   $nom = '?';
 }
 if (isset($_POST['prenom'])) {
   $prenom = $_POST['prenom'];
 } else {
   $prenom = '?';
 }
 if (isset($_POST['date_naiss'])) {
   $date_naiss = $_POST['date_naiss'];
 } else {
   $date_naiss = '?';
 }
 if (isset($_POST['email'])) {
   $email = $_POST['email'];
 } else {
   $email = '?';
 }
 if (isset($_POST['adresse'])) {
   $adresse = $_POST['adresse'];
 } else {
   $adresse = '?';
 }
 if (isset($_POST['ville'])) {
   $ville= $_POST['ville'];
 } else {
   $ville = '?';
 }
 if (isset($_POST['cp'])) {
   $cp= $_POST['cp'];
 } else {
   $cp= '?';
 }
 if (isset($_POST['genre'])) {
   $genre= $_POST['genre'];
 } else {
   $genre = '?';
 }


 echo "Voici le recapitulatif votre saisie !\n";

 echo "<BR><BR><BR>\n";

 echo "Vous avez saisi les valeurs suivantes :<BR>\n";

 echo "<UL>\n";

 echo "<LI> nom :    <EM>$nom</EM>\n";
 echo "<LI> prenom   :<EM>$prenom</EM>.\n";
 echo "<LI> Date de naissance  :<EM>$date_naiss</EM>.\n";
 echo "<LI> E-mail  :<EM>$email</EM>.\n";
 echo "<LI> Adresse   :<EM>$adresse</EM>.\n";
 echo "<LI> Ville   :<EM>$ville</EM>.\n";
 echo "<LI> Code postal  :<EM>$cp</EM>.\n";
 echo "<LI> Genre   :<EM>$genre</EM>.\n";
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
     $sql = "INSERT INTO client VALUES ('NULL','$nom', '$prenom', '$date_naiss', '$email', '$adresse', '$ville', '$cp', '$genre')";
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
