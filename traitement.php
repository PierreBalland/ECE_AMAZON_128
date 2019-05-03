<?PHP
      $username = $_POST['username'];
      $Telephone=$_POST['Telephone'];
      $Age=$_POST['Age'];
      if ($username == "" || $Telephone=="" || $Age=="") {
           print ("Il manque une information");
      }
         else {
              print ("Toutes les informations sont rentrées");
       }
?>
