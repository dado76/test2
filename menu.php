<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css" />
    <title>Hello!</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <?php
    include("auth.php");
  ?>
  <!--    Made by Erik Terwan    -->
  <!--   24th of November 2015   -->

  <nav role="navigation">

    <div id="menuToggle">
      <!--
      A fake / hidden checkbox is used as click reciever,
      so you can use the :checked selector on it.
      -->
      <input type="checkbox" />

      <!--
      Some spans to act as a hamburger.
      They are acting like a real hamburger,
      not that McDonalds stuff.
      -->
      <span></span>
      <span></span>
      <span></span>

      <!--
      Too bad the menu has to be inside of the button
      but hey, it's pure CSS magic.
      -->
      <ul id="menu">
        <a href="index.php"><i class="fa fa-home"></i> Accueil</a>
        <a href="sim.php"><i class="material-icons">place</i> Balise</a>
        <a href="bom.php"><i class="material-icons">local_shipping</i> Bom</a>
        <a href="plan1.php"><i class="material-icons">map</i> Plan</a>
        <a href="profils.php"><i class="material-icons">person</i> Profil</a>
        <a href="logout.php"><i class="material-icons">clear</i> Logout</a>

      </ul>
    </div>

  </nav>
<br><br><br><br><br><br>
<div class="test">
<form>
<P> Nom d'utilisateur : <p>     <?php
echo $_SESSION["username"];
$user=$_SESSION["username"];
try
{
 $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
 $bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);
 // On recupere tout le contenu de la table news
  $reponse = $bdd->query( "SELECT * FROM users WHERE username='$user'" );
// On affiche le resultat
while ($donnees = $reponse->fetch())
{
?>
<p> Email :  <p>
<?php
 //On affiche les données dans le tableau
 echo "<td> $donnees[email] </td>";
 ?>
<p>Date de création <p>
  <?php
  echo "<td> $donnees[trn_date] </td>";
 ?>
<P> Droit : <p>
  <?php
  echo $donnees['rank'];
?>  <br><?php
if ($donnees['rank']=="0")
  echo "utilisateur" ;
else
echo  "vous éte admin";
 ?>
</tr>
<?php
}
$reponse->closeCursor();
}
catch(Exception $e)
{
 die('Erreur : '.$e->getMessage());
}
?>
<br>
<br>
</div>
