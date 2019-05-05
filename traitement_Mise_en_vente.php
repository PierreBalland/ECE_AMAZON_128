<?php
require '../configure.php';

//if ( !empty($_POST['Nom']) && !empty($_POST['Prenom']) && !empty($_POST['Adresse']) && !empty($_POST['Typedecarte']) && !empty($_POST['Numerocarte']) && !empty($_POST['Nomcarte']) && !empty($_POST['expiration']) && !empty($_POST['Code_securite']) && !empty($_POST['Telephone']))
{
$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS );
      $id_item=rand(0,150000);
      $Prix = $_POST['Prix'];
      echo "$Prix";
      $Description=$_POST['Description'];
      echo "$Description";
      $Photo=$_POST['Photo'];
      echo "$Photo";
      $Sous_categorie=$_POST['souscategorie'];
      echo "$Sous_categorie";
      $Video=$_POST['Video'];
      echo "$Video";
      $Auteur=$_POST['Auteur'];
      echo "$Auteur";
      $Nom = $_POST['Nom'];
      echo "$Nom";

$database = "ece_amazon_128";
$db_found = mysqli_select_db( $db_handle, $database );
if ($db_found) {
	$SQL="INSERT INTO item(id_item,image,prix,nom,video,description) VALUES('$id_item','$Photo','$Prix','$Nom','$Video','$Description')";
	$SQL2="INSERT INTO livre(id_item,image,prix,nom,video,description,type,auteur) VALUES('$id_item','$Photo','$Prix','$Nom','$Video','$Description','$Sous_categorie','$Auteur')";
	$result = mysqli_query($db_handle, $SQL);
	$result2 = mysqli_query($db_handle, $SQL2);
    mysqli_close($db_handle);
    echo "Records added to the database";
}
else {
    echo "Database NOT Found ";
}

}
//else { 
//echo "Il manque une information veuillez recommencer";
//echo " (No records added to the database)";
//}


?>