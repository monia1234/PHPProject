

<?php

  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
  //s�lection de la base de donn�es:
  $db  = mysql_select_db( "gestion du parc informatique1" ) ;

if(isset($_POST['Nom']) & isset($_POST['Version']) & isset($_POST['Observation']))
{
  //r�cup�ration des valeurs des champs:
  //Nom_appel :
  $Nom=$_POST['Nom'] ;
  //Version_appel:
  $Version=$_POST['Version'] ;
  // Langue :
  $Langue= $_POST['Langue'] ;
  // Observation :
  $Observation= $_POST['Observation'] ;

  //cr�ation de la requ�te SQL:
  $sql = "INSERT INTO logiciel (Nom,Version,Langue,Observation ) VALUES ( '$Nom', '$Version', '$Langue', '$Observation') ";

  //ex�cution de la requ�te SQL:
  $requete = mysql_query($sql,$cnx) or die( mysql_error() ) ;


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
  echo ("<a href='Logiciel.htm'><input type='button' name='b1' value='retour'></a>");
  echo("</body></html>");
 }
?>