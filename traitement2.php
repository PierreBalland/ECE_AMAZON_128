<?PHP
      $Identifiant = $_POST['Identifiant'];
      $MDP=$_POST['MDP'];
      $index = array( "Pierre" => "MDP", "Charles" => "MDP");
      if ($Identifiant == "" || $MDP=="") {
           print ("Il manque une information");
      }
         else {
              print ("Toutes les informations sont rentrées");
       }

foreach ($index as $keyname => $value) {
	if ($keyname==$Identifiant and $value==$MDP) {
	 	print("Connection is okay");
	 	print "Bienvenue $Identifiant";
	 } 
}

/**

      if($Identifiant=="Pierre" || $MDP=="Pierre")
      {
      	print ("Connection is okay");

      }
      else
      	{
      		print_r("Wrong");
      } */
?>
