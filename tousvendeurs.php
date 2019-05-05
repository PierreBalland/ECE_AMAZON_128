<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" href="pierre.css">

<title>Projet Web Dynamique</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
.dropdown-submenu {

  position: relative;
}

.dropdown-submenu .dropdown-menu {

  top: 0;

  left: 100%;

  margin-top: -1px;

}

</style>


</head>
<body>

<H1 align="center"><img src="Images/ECEAmazonLogoTrans.png" class=img-responsive style=width:30%></H1>
<nav class="navbar navbar-expand-md">

<div class="container">
  <div class="row">
<div class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i>&nbsp;Catégories</a>
    <ul class="dropdown-menu">
      <li class="dropdown-submenu ">
        <a class="test" tabindex="-1" href="#">&nbsp;&nbsp;<i class="fa fa-book"></i>&nbsp;Livres <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Héroïque Fantaisie</a></li>
          <li><a tabindex="-1" href="#">Bande dessinée</a></li>
          <li><a tabindex="-1" href="#">Manga</a></li>
          <li><a tabindex="-1" href="#">Science fiction</a></li>
          <li><a tabindex="-1" href="#">Thriller</a></li>
          <li><a tabindex="-1" href="#">Divers</a></li>
         </ul>
       </li>
         <li class="dropdown-submenu ">
        <a class="test" tabindex="-1" href="#">&nbsp;&nbsp;<i class="fa fa-music"></i>&nbsp;Musique <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">CD</a></li>
          <li><a tabindex="-1" href="#">Instruments acoustiques</a></li>
          <li><a tabindex="-1" href="#">Instruments éléctriques</a></li>
          <li><a tabindex="-1" href="#">Matériel</a></li>
         </ul>
       </li>
        <li class="dropdown-submenu ">
        <a class="test" tabindex="-1" href="#">&nbsp;&nbsp;<i class="fa fa-black-tie"></i>&nbsp;Vêtements <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Manteaux</a></li>
          <li><a tabindex="-1" href="#">Chaussures</a></li>
          <li><a tabindex="-1" href="#">Accesoires</a></li>
          <li><a tabindex="-1" href="#">Pulls</a></li>
          <li><a tabindex="-1" href="#">Boots</a></li>
          <li><a tabindex="-1" href="#">Ensembles</a></li>
          <li><a tabindex="-1" href="#">Sports</a></li>
         </ul>
       </li>
        <li class="dropdown-submenu ">
        <a class="test" tabindex="-1" href="#">&nbsp;&nbsp;<i class="fa fa-smile-o"></i>&nbsp;Sports et Loisir <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Tennis</a></li>
          <li><a tabindex="-1" href="#">Football</a></li>
          <li><a tabindex="-1" href="#">Course</a></li>
          <li><a tabindex="-1" href="#">Natation</a></li>
          <li><a tabindex="-1" href="#">Combat</a></li>
          <li><a tabindex="-1" href="#">Autres</a></li>
         </ul>
       </li>
     </ul>
</div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <div class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bullhorn"></i>&nbsp;Ventes Flash</a>
    <ul class="dropdown-menu">
      <li class="dropdown-submenu ">
        <a class="test" tabindex="-1" href="#">&nbsp;&nbsp;<i class="fa fa-book"></i>&nbsp;Livres <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Héroïque Fantaisie</a></li>
          <li><a tabindex="-1" href="#">Bande dessinée</a></li>
          <li><a tabindex="-1" href="#">Manga</a></li>
          <li><a tabindex="-1" href="#">Science fiction</a></li>
          <li><a tabindex="-1" href="#">Thriller</a></li>
          <li><a tabindex="-1" href="#">Divers</a></li>
         </ul>
       </li>
         <li class="dropdown-submenu ">
        <a class="test" tabindex="-1" href="#">&nbsp;&nbsp;<i class="fa fa-music"></i>&nbsp;Musique <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">CD</a></li>
          <li><a tabindex="-1" href="#">Instruments acoustiques</a></li>
          <li><a tabindex="-1" href="#">Instruments éléctriques</a></li>
          <li><a tabindex="-1" href="#">Matériel</a></li>
         </ul>
       </li>
        <li class="dropdown-submenu ">
        <a class="test" tabindex="-1" href="#">&nbsp;&nbsp;<i class="fa fa-black-tie"></i>&nbsp;Vêtements <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Manteaux</a></li>
          <li><a tabindex="-1" href="#">Chaussures</a></li>
          <li><a tabindex="-1" href="#">Accesoires</a></li>
          <li><a tabindex="-1" href="#">Pulls</a></li>
          <li><a tabindex="-1" href="#">Boots</a></li>
          <li><a tabindex="-1" href="#">Ensembles</a></li>
          <li><a tabindex="-1" href="#">Sports</a></li>
         </ul>
       </li>
        <li class="dropdown-submenu ">
        <a class="test" tabindex="-1" href="#">&nbsp;&nbsp;<i class="fa fa-smile-o"></i>&nbsp;Sports et Loisir <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Tennis</a></li>
          <li><a tabindex="-1" href="#">Football</a></li>
          <li><a tabindex="-1" href="#">Course</a></li>
          <li><a tabindex="-1" href="#">Natation</a></li>
          <li><a tabindex="-1" href="#">Combat</a></li>
          <li><a tabindex="-1" href="#">Autres</a></li>
         </ul>
       </li>
     </ul>
   
</div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <div class="col-sm">
      <a href="connection_vendeur.php"><i class="fa fa-money"></i> &nbsp;Vendre </a>
    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="col-sm">
     <a href="Authentification_utilisateur.php"><i class="fa fa-address-card"></i>&nbsp; Votre compte   </a>
    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="col-sm">
      <a href=""> <span class="fa fa-shopping-cart"></span>&nbsp;Panier </a> 
    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="col-sm">
      <a href="Authentificationadmin.php"> <span class="fa fa-user"></span>&nbsp;Admin </a>
    </div>
  </div>
</div>
</nav>

<div> 
  <h1> Romans </h1>

</div>

<div class="vignetteListe">

<?php
require '../configure.php';
$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS );
$Variable = "Roman";
$database = "ece_amazon_128";
$db_found = mysqli_select_db( $db_handle, $database );
if ($db_found) {
  $SQL="SELECT * FROM vendeur ";
  $result = mysqli_query($db_handle, $SQL);
      while ($db_field = mysqli_fetch_assoc($result) ) {
        ?> 
<div class="vignette">
        

        <?php echo '<img src="'.$db_field['photo'].'" alt="" style="width: 200px;" />'; ?>

        <div class="description1">

        <label> id : </label>
        <?php
             echo $db_field['id_utilisateur'] . "<br>";
        ?>
        <label> nom : </label>
        <?php
             echo $db_field['nom'] . "<br>";
        ?>
        <label>prénom : </label>
        <?php
             echo $db_field['prenom'] . "<br>";
        ?>
        <label>email :</label>
        <?php
             echo $db_field['mail'] . "<br>";
        ?>

        <label>Image préférée :</label>
        <?php
             echo $db_field['img_preferee'] . "<br>";
        ?>

        <label>Photo :</label>
        <?php
             echo $db_field['photo'] . "<br>";
        ?>
          

            

        </div>

</div>
        <?php
}
}
else {
     echo "Database not found";
}
        ?>

       
</body> 
</html> 