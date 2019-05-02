<?php
require '../configure.php';

if ( !empty($_POST['Nom']) && !empty($_POST['Prenom']) && !empty($_POST['mot_de_passe']) && !empty($_POST['Adresse']) && !empty($_POST['Typedecarte']) && !empty($_POST['Numerocarte']) && !empty($_POST['Nomcarte']) && !empty($_POST['expiration']) && !empty($_POST['Code_securite']) && !empty($_POST['Telephone']))
{
$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS );
      $id_utilisateur=rand(0,150000);
      $Nom = $_POST['Nom'];
      $Prenom=$_POST['Prenom'];
      $Motdepasse=$_POST['mot_de_passe'];
      $Adresse=$_POST['Adresse'];
      $Typedecarte=$_POST['Typedecarte'];
      $Numerocarte=$_POST['Numerocarte'];
      $Nomcarte=$_POST['Nomcarte'];
      $Expiration=$_POST['expiration'];
      $Code_securite=$_POST['Code_securite'];
      $Telephone=$_POST['Telephone'];

$database = "ece_amazon_128";
$db_found = mysqli_select_db( $db_handle, $database );
if ($db_found) {
	$SQL="INSERT INTO utilisateur(id_utilisateur,mdp,nom,prenom,mail) VALUES('$id_utilisateur','$Motdepasse','$Nom','$Prenom','$Adresse')";
	$SQL2="INSERT INTO acheteur(id_utilisateur,mdp,nom,prenom,mail,numero_telephone,Nom_carte,Date_expiration,numero_carte,code_de_securite,type_de_carte) VALUES('$id_utilisateur','$Motdepasse','$Nom','$Prenom','$Adresse','$Telephone','$Nomcarte','$Expiration','$Numerocarte','$Code_securite','$Typedecarte')";
	$result = mysqli_query($db_handle, $SQL);
	$result2 = mysqli_query($db_handle, $SQL2);
    mysqli_close($db_handle);
    echo "Records added to the database";
}
else {
    echo "Database NOT Found ";
}
}
else { 
echo "Il manque une information veuillez recommencer";
echo " (No records added to the database)";
}

?>