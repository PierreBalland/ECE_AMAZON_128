<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="form.css">
<link rel="stylesheet" href="page.css">
<link rel="stylesheet" href="vignettes.css">


<title>Projet Web Dynamique</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<H1 align="center">ECE Amazon</H1>
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






 <h1>Choisir action</h1>  <br> <br> 
 <FORM NAME ="adminform" METHOD ="POST" ACTION = "traitement_suppadmin.php">    
 <label>Identifiant Vendeur</label>    
 <input type="text"  name="vendeur" placeholder="The ID..." /> <br>

 <INPUT TYPE = "Submit" Name = "suppvendeur" VALUE = "Supprimer"> <br> <br>

 <label>Identifiant Item</label>    
 <input type="text"  name="vendeur" placeholder="The ID..." />
 <INPUT TYPE = "Submit" Name = "suppitem" VALUE = "Supprimer"> <br> 

 <br> <br> <br> 

 <INPUT TYPE = "Submit" Name = "createvendeur" VALUE = "Ajouter un vendeur"> <br> <br> 
 <INPUT TYPE = "Submit" Name = "screateitem" VALUE = "Ajouter un item"> <br> 

 <br> <br> <br> 

 <INPUT TYPE = "Submit" Name = "voirvendeur" VALUE = "Voir tous les vendeurs"> <br> <br> 
 <INPUT TYPE = "Submit" Name = "voiritem" VALUE = "Voir tous les items"> <br> 


</body>
</html>