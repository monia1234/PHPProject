



<?php

  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
  //s�lection de la base de donn�es:
  $db  = mysql_select_db( "gestion du parc informatique1" ) ;
  
if(isset($_POST['Matricule']) & isset($_POST['Nom']) & isset($_POST['Prenom']))
{ 
  //r�cup�ration des valeurs des champs:
  //Matricule :
  $Matricule=$_POST["Matricule"] ;
  //Nom :
  $Nom=$_POST["Nom"] ;
  // Prenom :
  $Prenom= $_POST["Prenom"] ;
 

  //cr�ation de la requ�te SQL:
  $sql = "INSERT  INTO informaticien (Matricule ,Nom ,Prenom ) VALUES ( '$Matricule', '$Nom', '$Prenom') ";

  //ex�cution de la requ�te SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;


 //affichage des r�sultats, pour savoir si l'insertion a march�e:
  echo("<html><head></head><body>");
  if($requete)
  {
    echo("<h4>L'insertion a �t� correctement effectu�e</h4>") ;
  }
  else
  {
    echo("L'insertion a �chou�e") ;
  }
  echo ("<a href='informaticien.html'><input type='button' name='b1' value='retour'></a>");
  echo("</body></html>");
 }
?>