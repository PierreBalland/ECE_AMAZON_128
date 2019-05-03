<html>
</html>
<?php
require '../configure.php';
$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS );
$Motdepasse=$_POST['Mot_de_passe'];
$Adresse=$_POST['Mail'];
$database = "ece_amazon_128";
$db_found = mysqli_select_db( $db_handle, $database );
if ($db_found) {
  $SQL="SELECT * FROM utilisateur Where id_utilisateur='$Motdepasse' AND mail='$Adresse'";
  $result = mysqli_query($db_handle, $SQL);
      while ($db_field = mysqli_fetch_assoc($result) ) {
             echo $db_field['id_utilisateur'] . "<br>";
             echo $db_field['mdp'] . "<br>";
             echo $db_field['nom'] . "<br>";
             echo $db_field['prenom'] . "<br>";
             echo $db_field['mail'] . "<br>";

     echo "Database found";
}
}
else {
     echo "Database not found";
}
?>
