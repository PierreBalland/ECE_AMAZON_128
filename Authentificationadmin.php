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
 <h1>Authentification</h1>   
<FORM NAME ="form9" METHOD ="POST" ACTION = "page_traitement_authentification_admin.php">    
 <label>Mail</label>    
 <input type="text" name="Mail"> <br> <br>    
<label>Mot de passe:</label>    
 <input type="text" name="Mdp"> <br> <br> 
 <INPUT TYPE = "Submit" Name = "Submitform" VALUE = "SeConnecter">
</FORM> 
</body>
</html>
