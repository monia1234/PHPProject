

<?php

  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
  //s�lection de la base de donn�es:
  $db  = mysql_select_db( "gestion du parc informatique1" ) ;
  
if(isset($_POST['Ndes�rie']) & isset($_POST['Libell�']) & isset($_POST['Etat']) & isset($_POST['Lieu']))
{ 
  //r�cup�ration des valeurs des champs:
  //N� de s�rie_appel :
  $Ndes�rie=$_POST["Ndes�rie"] ;
  //Libell�_appel:
  $Libell�=$_POST["Libell�"] ;
  // Date :
  $Date= $_POST["Date"] ;
  // Type:
  $Type= $_POST["Type"] ;
  // Etat:
  $Etat= $_POST["Etat"] ;
  // Lieu :
  $Lieu = $_POST["Lieu"] ;


  //cr�ation de la requ�te SQL:
  $sql = "INSERT  INTO equipement (Ndes�rie ,Libell� ,Date ,Type ,Etat ,Lieu) VALUES ( '$Ndes�rie', '$Libell�', '$Date', '$Type', '$Etat', '$Lieu') ";

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
  echo ("<a href='Equipement.htm'><input type='button' name='b1' value='retour'></a>");
  echo("</body></html>");
 }
?>