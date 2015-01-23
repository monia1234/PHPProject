

<?php

  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;

  //sélection de la base de données:
  $db  = mysql_select_db( "gestion du parc informatique1" ) ;
 
  
if(isset($_POST['Bureau']) & isset($_POST['Département']) & isset($_POST['Utilisateur']) & isset($_POST['Libelé']) & isset($_POST['Référence']) & isset($_POST['Ndesériemat']) & isset($_POST['DatedeLivraison']) & isset($_POST['Garantie']) & isset($_POST['Marque']) & isset($_POST['Fournisseur']))
{ 
  //récupération des valeurs des champs:
  //Bureau :
  $Bureau=$_POST["Bureau"] ;
  //Département_appel:
  $Département=$_POST["Département"] ;
  // Utilisateur :
  $Utilisateur= $_POST["Utilisateur"] ;
  // Libelé:
  $Libelé= $_POST["Libelé"] ;
  //Référence:
  $Référence= $_POST["Référence"] ;
  // N° de série :
  $Ndesériemat = $_POST["Ndesériemat"] ;
  // Date de Livraison :
  $DatedeLivraison= $_POST["DatedeLivraison"] ;
  // Garantie:
  $Garantie= $_POST["Garantie"] ;
  //Marque:
  $Marque= $_POST["Marque"] ;
  //Fournisseur :
  $Fournisseur = $_POST["Fournisseur"] ;


  //création de la requête SQL:
  $sql = "INSERT  INTO nouveau_matériel (Bureau ,Département ,Utilisateur ,Libelé ,Référence ,Ndesériemat ,DatedeLivraison ,Garantie ,Marque ,Fournisseur) VALUES ( '$Bureau', '$Département', '$Utilisateur', '$Libelé', '$Référence', '$Ndesériemat', '$DatedeLivraison', '$Garantie', '$Marque', '$Fournisseur'   ) ";

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
  echo ("<a href='Nouveau materiel.htm'><input type='button' name='b1' value='retour'></a>");
  echo("</body></html>");
 }
?>