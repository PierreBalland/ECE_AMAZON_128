<!DOCTYPE html>
<html>
<head>
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
     <a href="inscription.php"><i class="fa fa-address-card"></i>&nbsp; Votre compte   </a>
    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="col-sm">
      <a href="#"> <span class="fa fa-shopping-cart"></span>&nbsp;Panier </a> 
    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="col-sm">
      <a href="#"> <span class="fa fa-user"></span>&nbsp;Admin </a>
    </div>
  </div>
</div>
</nav>

<header class="page-header header container-fluid">
	<div class="overlay"></div>
	<div class="description">
 <h1>Bienvenue sur la page de ECE Amazon</h1>
 <p>
BLABLA
</p>
</div>
<figure class="figure">
  <img src="livres.jpg" class=img-responsive style=width:30%>
  <figcaption class="figure-caption text right">On en a jamais assez!!</figcaption>
</figure>

</header>
<div class="container features">
<h1> ECE Amazon est à votre service. </h1>
 <div class="row">
 <div class="col-lg-4 col-md-4 col-sm-12">
 <h3 class="feature-title">Blabla</h3>
 <img src="column1.jpg" class="img-fluid">
 <p>
BLABLA
 </p>
 </div>
 <div class="col-lg-4 col-md-4 col-sm-12">
 <h3 class="feature-title">Blabla</h3>
 <img src="column2.jpg" class="img-fluid">
 <p>
 Blabla
 </p>
 </div>
 <div class="col-lg-4 col-md-4 col-sm-12">
 	<h3 class="feature-title">Besoin d'aide?</h3>
 	<img src="contacteznous.jpg" class="img-fluid">
 	<div class="form-group">
 <input type="text" class="form-control" placeholder="Votre nom:" name="">
</div>
<div class="form-group">
 <input type="email" class="form-control" placeholder="Courriel:" name="email">
</div>
<div class="form-group">
 <textarea class="form-control" rows="4">Vos commentaires</textarea>
</div>
<input type="submit" class="btn btn-secondary btn-block" value="Envoyer" name="">
 </div>
</div>
</div>




<script type="text/javascript">
 $(document).ready(function(){
 $('.header').height($(window).height());
 });
</script>
</body>
</html>