<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="form.css">
<link rel="stylesheet" href="page.css">
<link rel="stylesheet" href="vignettes.css">
</head>
<body>

<H1 align="center"><img src="Images/ECEAmazonLogoTrans.png" class=img-responsive style=width:30%></H1>
<nav class="navbar navbar-expand-md">

<div class="container">
  <div class="row">
<div class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i>&nbsp;Categories</a>
    <div class="dropdown-menu">
       
    <a class="dropdown-item" href="#"><i class="fa fa-book"></i>&nbsp;Livres</a>

    <a class="dropdown-item" href="#"><i class="fa fa-music"></i>&nbsp;Musique</a>
    <a class="dropdown-item" href="#"><i class="fa fa-black-tie"></i>&nbsp;Vêtements</a>
    <a class="dropdown-item" href="#"><i class="fa fa-smile-o"></i>&nbsp;Sports et Loisir</a>
    </div>
</div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <div class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bullhorn"></i>&nbsp;Ventes Flash</a>
    <div class="dropdown-menu">
       
   <a class="dropdown-item" href="#"><i class="fa fa-book"></i>&nbsp;Livres</a>
    <a class="dropdown-item" href="#"><i class="fa fa-music"></i>&nbsp;Musique</a>
    <a class="dropdown-item" href="#"><i class="fa fa-black-tie"></i>&nbsp;Vêtements</a>
    <a class="dropdown-item" href="#"><i class="fa fa-smile-o"></i>&nbsp;Sports et Loisir</a>
    </div>
</div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <div class="col-sm">
      <a href="#"><i class="fa fa-money"></i> &nbsp;Vendre </a>
    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="col-sm">
     <a href="Authentification_utilisateur.php"><i class="fa fa-address-card"></i>&nbsp; Votre compte   </a>
    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="col-sm">
      <a href="#"> <span class="fa fa-shopping-cart"></span>&nbsp;Panier </a> 
    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="col-sm">
      <a href="Authentificationadmin.php"> <span class="fa fa-user"></span>&nbsp;Admin </a>
    </div>
  </div>
</div>
</nav>
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