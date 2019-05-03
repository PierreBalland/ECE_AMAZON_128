<!DOCTYPE html> 
<html>
<head>  
<title>Vente</title>   
</head> 
<link rel="stylesheet" href="form.css">
<link rel="stylesheet" href="page.css">
<link rel="stylesheet" href="vignettes.css">
<?php
// on peut faire du require pour choper les variables de la page precedente de connection hmm ? 
?>
<body>
 <h1>Mettre en vente un produit</h1> 
 <h2>Remplissez les informations relatives au produit</h2>  
 <FORM NAME ="form2" METHOD ="POST" ACTION = "traitement_vente.php">    
 <label>Nom :</label>    
 <input type="text" name="Nom"> <br> <br>
 
 <label>Prix (à l'unité) :</label>    
 <input type="number" name="Prix"> <br> <br>

 <label>Description:</label>    
 <input type="text" name="Adresse" id="Adresse"> <br> <br> 

 <label>Photo (renseignez le chemin):</label>    
 <input type="text" name="Photo"> <br> <br>

 <label>Video (optionnelle) :</label>    
 <input name="Video" type="text"> <br> <br>

 <label>Photo de couverture :</label>    
 <input name="PhotoCouverture" type="text"> <br> <br>
 
 <label>Photo de couverture :</label>    
 <input name="PhotoCouverture" type="text"> <br> <br>

<h2>Rentrez la catégorie du produit</h2>      
  <label>Catégories : </label> 
 <select name="categorie" id="categorie">
  <option value="Selectionner la categorie" selected>Selectionner la categorie :</option>
  <option value="Livres">Livres</option>
  <option value="Musique">Musique</option>
  <option value="Sports/Loisirs">Sports et Loisirs</option>
  <option value="Vetement">Vetement</option>
  </select> <br> <br> 

  <SCRIPT LANGUAGE="Javascript">
<!--
	function test()
	{
		//var pierrre=document.getElementById("categorie").value;
		
		var pierre=document.getElementById('categorie').value;
		alert(pierre);
	if(pierre=='Livres')
	{

document.write("<h1> PIERRE </h1>");
alert("OOOOOOOOOOOOOOOOOOO");
}
else
{

	alert("else");
}
}
//-->
</SCRIPT>
 
 <INPUT TYPE = "Submit" Name = "Submit2" VALUE = "Soumettre"> <br> 

</FORM> 
 
<div id="errordiv">              
</div>            
</body> 
</html> 