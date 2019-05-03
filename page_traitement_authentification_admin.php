<html>
</html>
<?php
require '../configure.php';
$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS );
$Mail=$_POST['Mail']; // le vrai mail en revanche 
$Motdepasse=$_POST['Mdp']; // ici cest l'id desormais

$database = "ece_amazon_128";
$db_found = mysqli_select_db( $db_handle, $database );
if ($db_found) {
  $SQL="SELECT id_utilisateur FROM administrateur"; // on verifie si le nom est vide ou pas pour savoir s'il existe 
  $result = mysqli_query($db_handle, $SQL);
  $db_field = mysqli_fetch_assoc($result);
          if ($Motdepasse==$db_field['id_utilisateur'])
          {

          	header('Location: adminpage.php');
          	
          }
           
}
else {
     echo "Database not found";
}
?>