

<?php

  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;

  //s�lection de la base de donn�es:
  $db  = mysql_select_db( "gestion du parc informatique1" ) ;
 
  
if(isset($_POST['Bureau']) & isset($_POST['D�partement']) & isset($_POST['Utilisateur']) & isset($_POST['Libel�']) & isset($_POST['R�f�rence']) & isset($_POST['Ndes�riemat']) & isset($_POST['DatedeLivraison']) & isset($_POST['Garantie']) & isset($_POST['Marque']) & isset($_POST['Fournisseur']))
{ 
  //r�cup�ration des valeurs des champs:
  //Bureau :
  $Bureau=$_POST["Bureau"] ;
  //D�partement_appel:
  $D�partement=$_POST["D�partement"] ;
  // Utilisateur :
  $Utilisateur= $_POST["Utilisateur"] ;
  // Libel�:
  $Libel�= $_POST["Libel�"] ;
  //R�f�rence:
  $R�f�rence= $_POST["R�f�rence"] ;
  // N� de s�rie :
  $Ndes�riemat = $_POST["Ndes�riemat"] ;
  // Date de Livraison :
  $DatedeLivraison= $_POST["DatedeLivraison"] ;
  // Garantie:
  $Garantie= $_POST["Garantie"] ;
  //Marque:
  $Marque= $_POST["Marque"] ;
  //Fournisseur :
  $Fournisseur = $_POST["Fournisseur"] ;


  //cr�ation de la requ�te SQL:
  $sql = "INSERT  INTO nouveau_mat�riel (Bureau ,D�partement ,Utilisateur ,Libel� ,R�f�rence ,Ndes�riemat ,DatedeLivraison ,Garantie ,Marque ,Fournisseur) VALUES ( '$Bureau', '$D�partement', '$Utilisateur', '$Libel�', '$R�f�rence', '$Ndes�riemat', '$DatedeLivraison', '$Garantie', '$Marque', '$Fournisseur'   ) ";

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
  echo ("<a href='Nouveau materiel.htm'><input type='button' name='b1' value='retour'></a>");
  echo("</body></html>");
 }
?>