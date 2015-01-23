

<?php

  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
  //sélection de la base de données:
  $db  = mysql_select_db( "gestion du parc informatique1" ) ;

if(isset($_POST['Nom']) & isset($_POST['Version']) & isset($_POST['Observation']))
{
  //récupération des valeurs des champs:
  //Nom_appel :
  $Nom=$_POST['Nom'] ;
  //Version_appel:
  $Version=$_POST['Version'] ;
  // Langue :
  $Langue= $_POST['Langue'] ;
  // Observation :
  $Observation= $_POST['Observation'] ;

  //création de la requête SQL:
  $sql = "INSERT INTO logiciel (Nom,Version,Langue,Observation ) VALUES ( '$Nom', '$Version', '$Langue', '$Observation') ";

  //exécution de la requête SQL:
  $requete = mysql_query($sql,$cnx) or die( mysql_error() ) ;


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
  echo ("<a href='Logiciel.htm'><input type='button' name='b1' value='retour'></a>");
  echo("</body></html>");
 }
?>