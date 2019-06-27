<!DOCTYPE html>
<HTML>
<HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <TITLE>Nouveau Client</TITLE>

 </HEAD>
 <BODY>
<DIV>
  <DIV>
    <UL>

      <LI>Aller au formulaire produit ---> <A HREF="formulaire_prt.php">FORMULAIRE PRODUIT</A>


    </UL>

  </DIV>
 </DIV>
 <DIV>

 <H1>Nouveau Client</H1>
 <BR>

 <CENTER>
 <FORM ACTION="verif_clt.php" METHOD="POST">
 NOM: <INPUT TYPE="text" NAME="nom">
 <BR><BR>
 PRENOM : <INPUT TYPE="text" NAME="prenom">
 <BR><BR>
  DATE DE NAISSANCE: <INPUT TYPE="text" NAME="date_naiss">
   <BR><BR>
  E-MAIL : <input type="text" name="email">
     <br><br>
  ADRESSE : <INPUT TYPE="text" NAME="adresse">
     <BR><BR>
  VILLE : <INPUT TYPE="text" NAME="ville">
     <BR><BR>
  CODE POSTAL : <INPUT TYPE="text" NAME="cp">
       <BR><BR>
  GENRE :
  <input type="radio" name="genre" value="femme">Femme
  <input type="radio" name="genre" value="homme">homme
  <input type="radio" name="genre" value="autre">autre
  <br><br>

 <INPUT TYPE="submit" VALUE="Enregistrer">
 </FORM>
 </CENTER>

 <BR><BR><BR>

 </DIV>
 </BODY>
 </HTML>
