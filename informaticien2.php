



<?php

  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
  //sélection de la base de données:
  $db  = mysql_select_db( "gestion du parc informatique1" ) ;
  
if(isset($_POST['Matricule']) & isset($_POST['Nom']) & isset($_POST['Prenom']))
{ 
  //récupération des valeurs des champs:
  //Matricule :
  $Matricule=$_POST["Matricule"] ;
  //Nom :
  $Nom=$_POST["Nom"] ;
  // Prenom :
  $Prenom= $_POST["Prenom"] ;
 

  //création de la requête SQL:
  $sql = "INSERT  INTO informaticien (Matricule ,Nom ,Prenom ) VALUES ( '$Matricule', '$Nom', '$Prenom') ";

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
  echo ("<a href='informaticien.html'><input type='button' name='b1' value='retour'></a>");
  echo("</body></html>");
 }
?>