<!DOCTYPE html> 
<html>
<head>  
<title>Inscription</title>   
</head> 
<?php

?>
<body>
 <h1>Inscription</h1>   
 <FORM NAME ="form1" METHOD ="POST" ACTION = "traitement_inscription.php">    
 <label>Nom :</label>    
 <input type="text" name="Nom"> <br> <br>
 
 <label>Prenom :</label>    
 <input type="text" name="Prenom"> <br> <br>

 <label>Adresse email:</label>    
 <input type="text" name="Adresse" id="Adresse"> <br> <br> 

 <label>Telephone:</label>    
 <input type="text" name="Telephone"> <br> <br>

 <label>Mot DePasse:</label>    
 Pour des raisons de sécurité, un mot de passe aléatoire vous sera attribué :) <br> <br>

 <label>Photo de profil :</label>    
 <input name="PhotoProfil" type="text"> <br> <br>

 <label>Photo de couverture :</label>    
 <input name="PhotoCouverture" type="text"> <br> <br>


<h2>Informations de paiement sécurisées</h2>      
  <label>Type de carte de paiement</label> 
 <select name="Typedecarte">
  <option value="Selectionner votre type de carte">selectionner votre type de carte</option>
  <option value="Visa">Visa</option>
  <option value="MasterCard">MasterCard</option>
  <option value="American Express">AmericanExpress</option>
  <option value="PayPal">PayPal</option>
  </select> <br> <br> 
 <label>Numéro de la carte</label>    
 <input type="number" name="Numerocarte" id="Numerocarte"> <br> <br>    
 <label>Nom affiché dans la carte :</label>    
 <input type="text" name="Nomcarte" id="Nomcarte"> <br> <br> 
 <label>Date d'expiration de la carte :</label>    
 <input type="date" id="start" name="expiration"
       value="2018-07-22"
       min="2018-01-01" max="2018-12-31"> <br> <br> 
 <label>Code de securité:</label>    
 <input name="Code_securite" type="password" id="Code_securite" size="3" /> <br> <br>


 <INPUT TYPE = "Submit" Name = "Submit2" VALUE = "Soumettre"> <br> 
</FORM> 
<div id="errordiv">              
</div>            
</body> 
</html> 