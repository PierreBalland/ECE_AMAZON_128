<html>
</html>
<?php
require '../configure.php';
$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS );
$Motdepasse=$_POST['Mot_de_passe']; // ici cest l'id desormais
$Adresse=$_POST['Mail']; // le vrai mail en revanche 
$database = "ece_amazon_128";
$db_found = mysqli_select_db( $db_handle, $database );
if ($db_found) {
  $SQL="SELECT nom FROM vendeur Where id_utilisateur='$Motdepasse'"; // on verifie si le nom est vide ou pas pour savoir s'il existe 
  $result = mysqli_query($db_handle, $SQL);
  $db_field = mysqli_fetch_assoc($result);
           if($db_field['nom']=="")
           {
              echo "Compte non reconnu, redirection vers la page d'inscription";
              sleep(2);
              header('Location: inscription.php');
              exit();

           }
           else
           {
             header('Location: Mise_en_vente.php');
             exit();

           }
           
}
else {
     echo "Database not found";
}
?>