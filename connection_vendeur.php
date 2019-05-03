<!DOCTYPE html>
<html>
<head>
  <title>Page d'authentification vendeur</title>
</head>
<body>
<h2>Connectez avant de pouvoir vendre</h2>
<FORM NAME ="formvendeur" METHOD ="POST" ACTION = "verification_connection_vendeur.php">    
 <label>Mail :</label>    
 <input type="text" name="Mail"> <br> <br>
 <label>Mot de passe</label>   
 <input name="Mot_de_passe" type="password" id="Code_securite" size="10" /> <br> <br>
 <INPUT TYPE = "Submit" Name = "Submit2" VALUE = "Se connecter"> <br> 
</FORM> 
 <a href="inscription.php"> Vous n'avez pas de compte ? </a> 
</body>
</html>