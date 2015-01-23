<?php

  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
  //sélection de la base de données:
  $db  = mysql_select_db( "gestion du parc informatique1" ) ;
  
if(isset($_POST['Nom']) & isset($_POST['Prénom']) & isset($_POST['Adresse']) & isset($_POST['Téléphone']))
{ 
  //récupération des valeurs des champs:

  $Nom=$_POST["Nom"] ;
  
  $Prénom=$_POST["Prénom"] ;
  
  $Adresse= $_POST["Adresse"] ;
  
  $Téléphone= $_POST["Téléphone"] ;
  


  //création de la requête SQL:
  $sql = "INSERT  INTO fournisseur (Nom ,Prénom ,Adresse ,Téléphone) VALUES ( '$Nom', '$Prénom', '$Adresse', '$Téléphone') ";

  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;


 //affichage des résultats, pour savoir si l'insertion a marchée:
  echo("<html><head></head><body>");
  if($requete)
  {
    echo("<h4>L'insertion a été correctement effectuée</h4>") ;
  }
  else
  {
    echo("L'insertion a échouée") ;
  }
  echo ("<a href='fournisseur.htm'><input type='button' name='b1' value='retour'></a>");
  echo("</body></html>");
 }
?>