<?php

  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
  //s�lection de la base de donn�es:
  $db  = mysql_select_db( "gestion du parc informatique1" ) ;
  
if(isset($_POST['Nom']) & isset($_POST['Pr�nom']) & isset($_POST['Adresse']) & isset($_POST['T�l�phone']))
{ 
  //r�cup�ration des valeurs des champs:

  $Nom=$_POST["Nom"] ;
  
  $Pr�nom=$_POST["Pr�nom"] ;
  
  $Adresse= $_POST["Adresse"] ;
  
  $T�l�phone= $_POST["T�l�phone"] ;
  


  //cr�ation de la requ�te SQL:
  $sql = "INSERT  INTO fournisseur (Nom ,Pr�nom ,Adresse ,T�l�phone) VALUES ( '$Nom', '$Pr�nom', '$Adresse', '$T�l�phone') ";

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
  echo ("<a href='fournisseur.htm'><input type='button' name='b1' value='retour'></a>");
  echo("</body></html>");
 }
?>