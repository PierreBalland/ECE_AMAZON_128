<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="form.css">
<link rel="stylesheet" href="page.css">
<link rel="stylesheet" href="vignettes.css">

<title>ECE AMAZON</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<h1 class="display-1">ECE AMAZON</h1>


<div class="container">
  <div class="row">
    <div class="col-sm">
      Categories
    </div>
    <div class="col-sm">
      Ventes Flash
    </div>
    <div class="col-sm">
      Vendre
    </div>
    <div class="col-sm">
      Admin
    </div>
  </div>
</div>
<nav class="navbar navbar-expand-md">
 <a class="navbar-brand" href="#">Logo</a>
 <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="main-navigation">
 <ul class="navbar-nav">
 <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
 <li class="nav-item"><a class="nav-link" href="#">A propos</a></li>
 <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
 </ul>
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
  $SQL="SELECT * FROM livre Where type= '$Variable' ";
  $result = mysqli_query($db_handle, $SQL);
      while ($db_field = mysqli_fetch_assoc($result) ) {
        ?>
<div class="vignette">
        

        <?php echo '<img src="'.$db_field['image'].'" alt="" />'; ?>

        <div class="description">

           
        <?php
             echo $db_field['id_item'] . "<br>";
        ?>
        <label> nom : </label>
        <?php
             echo $db_field['nom'] . "<br>";
        ?>
        <label> prix : </label>
        <?php
             echo $db_field['prix'] . "<br>";
        ?>
        <label>L'auteur :</label>
        <?php
             echo $db_field['description'] . "<br>";
        ?>
          <label>Auteur :</label>
            <?php
             echo $db_field['auteur'] . "<br>";
             
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