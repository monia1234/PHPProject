

<?php

  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
  //sélection de la base de données:
  $db  = mysql_select_db( "gestion du parc informatique1" ) ;
  
if(isset($_POST['Ndesérie']) & isset($_POST['Libellé']) & isset($_POST['Etat']) & isset($_POST['Lieu']))
{ 
  //récupération des valeurs des champs:
  //N° de série_appel :
  $Ndesérie=$_POST["Ndesérie"] ;
  //Libellé_appel:
  $Libellé=$_POST["Libellé"] ;
  // Date :
  $Date= $_POST["Date"] ;
  // Type:
  $Type= $_POST["Type"] ;
  // Etat:
  $Etat= $_POST["Etat"] ;
  // Lieu :
  $Lieu = $_POST["Lieu"] ;


  //création de la requête SQL:
  $sql = "INSERT  INTO equipement (Ndesérie ,Libellé ,Date ,Type ,Etat ,Lieu) VALUES ( '$Ndesérie', '$Libellé', '$Date', '$Type', '$Etat', '$Lieu') ";

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
  echo ("<a href='Equipement.htm'><input type='button' name='b1' value='retour'></a>");
  echo("</body></html>");
 }
?>