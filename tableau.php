<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tableau.css" />
    <title>Hello!</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>

<center>

   <?php include("selection_sim.php")?>


  <form method="POST" action="simadd.php">
    <button type="submit">
        <i class="fa fa-plus"></i><br>
    </button>
  </form>


<?php
  $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);
try{
$sql1 = "SELECT DISTINCT Codification FROM carte_sims";
$prepare = $bdd->prepare($sql1);
$prepare->execute();
//on stocke le résultat de la requête dans un array
$arrListe = $prepare->fetchall();
} catch (Exception $e){
die('Erreur : ' . $e->getMessage());
}
?>
<?php
Error_reporting(0);
// pour faire un menu déroulant présenter les différentes rubriques
foreach($arrListe as $L) {
   $rbp = $L['Codification'];
}
$Codification= $_POST['Codification'];
?>

</input>



</center>
<?php
if(!isset($Codification)){
?>

  <center><table>

  <table id="customers">
<tr>
<th>Codification </th>
<th>Sim</th>
<th>Balise</th>
<th>Téléphone</th>
<th>ID et Port</th>
<th>immatriculation</th>
<th>statut</th>
<th>probleme</th>
<th>navigation</th>
<th>Léve conteneur</th>
<th>Pesée embarquée</th>
<th>Modifier</th>
 <th>Supprimer</th>
  <th>Voir</th>
 </tr>

<?php
try
{
   $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
   $bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);
   // On recupere tout le contenu de la table news
$reponse = $bdd->query("SELECT * FROM carte_sims ORDER BY Codification");
// On affiche le resultat
while ($donnees = $reponse->fetch())
{
?>


<tr class="newspaper-b">
<?php
   //On affiche les données dans le tableau
   echo "<td> $donnees[Codification] </td>";
   echo "<td> $donnees[sim] </td>";
 echo "<td> $donnees[balise] </td>";
 echo "<td> $donnees[telephone] </td>";
 echo "<td> $donnees[IDPORT] </td>";
 echo "<td> $donnees[immatriculation] </td>";
 echo "<td> $donnees[statut] </td>";
 echo "<td> $donnees[probleme] </td>";
 echo "<td> $donnees[navigation] </td>";
 echo "<td> $donnees[LC] </td>";
 echo "<td> $donnees[pesee] </td>";
 ?>
<td align="center"><a href="simedit.php?id=<?php echo $donnees["Codification"]; ?>">
<i class="fa fa-eyedropper" style="color:#2E64FE;></i><img src"logo.jpg" border="0" text-color="white"></a></td>


<td align="center"><a href="simdel.php?id=<?php echo $donnees["Codification"]; ?>">
<i class="fa fa-trash" style="color:#2E64FE;></i><img src"logo.jpg" border="0" text-color="white"></a></td>


   <td align="center"><a href="simview.php?id=<?php echo $donnees["Codification"]; ?>">
   <i class="fa fa-eye" style="color:#2E64FE;></i><img src"logo.jpg" border="0" text-color="white"></a></td>

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

</table>

</class>
<?php
}
elseif  ($Codification=="TOUS") {
  ?>

       <center><table>

       <table id="customers">
     <tr>
     <th>Codification </th>
     <th>Sim</th>
     <th>Balise</th>
     <th>Téléphone</th>
     <th>ID et Port</th>
     <th>immatriculation</th>
     <th>statut</th>
     <th>probleme</th>
     <th>navigation</th>
     <th>Léve conteneur</th>
     <th>Pesée embarquée</th>
     <th>Modifier</th>
      <th>Supprimer</th>
       <th>Voir</th>
      </tr>
    </tr>

   <?php
  try
  {
      $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
      $bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);
      // On recupere tout le contenu de la table news
  $reponse = $bdd->query('SELECT * FROM carte_sims ORDER BY Codification');
  // On affiche le resultat
  while ($donnees = $reponse->fetch())
  {
  ?>
    <?php
      //On affiche les données dans le tableau
    echo "<td> $donnees[Codification] </td>";
      echo "<td> $donnees[sim] </td>";
    echo "<td> $donnees[balise] </td>";
    echo "<td> $donnees[telephone] </td>";
    echo "<td> $donnees[IDPORT] </td>";
    echo "<td> $donnees[immatriculation] </td>";
    echo "<td> $donnees[statut] </td>";
    echo "<td> $donnees[probleme] </td>";
    echo "<td> $donnees[navigation] </td>";
    echo "<td> $donnees[LC] </td>";
    echo "<td> $donnees[pesee] </td>";
    ?>
<td align="center"><a href="simedit.php?id=<?php echo $donnees["Codification"]; ?>">
<i class="fa fa-eyedropper" style="color:#2E64FE;></i><img src"logo.jpg" border="0" text-color="white"></a></td>


<td align="center"><a href="simdel.php?id=<?php echo $donnees["Codification"]; ?>">
<i class="fa fa-trash" style="color:#2E64FE;></i><img src"logo.jpg" border="0" text-color="white"></a></td>


   <td align="center"><a href="simview.php?id=<?php echo $donnees["Codification"]; ?>">
   <i class="fa fa-eye" style="color:#2E64FE;></i><img src"logo.jpg" border="0" text-color="white"></a></td>

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
    </table>

<?php
}
else
{
  ?>

 <center><table>

 <table id="customers">
 <tr>
 <th>Codification </th>
 <th>Sim</th>
 <th>Balise</th>
 <th>Téléphone</th>
 <th>ID et Port</th>
 <th>immatriculation</th>
 <th>statut</th>
 <th>probleme</th>
 <th>navigation</th>
 <th>Léve conteneur</th>
 <th>Pesée embarquée</th>
 <th>Modifier</th>
  <th>Supprimer</th>
   <th>Voir</th>
  </tr>
</tr>

<?php
try
{
  $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
  $bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);
  // On recupere tout le contenu de la table news
$reponse = $bdd->query( "SELECT * FROM carte_sims WHERE Codification='$Codification'" );
// On affiche le resultat
while ($donnees = $reponse->fetch())
{
?>
<?php
  //On affiche les données dans le tableau
  echo "<td> $donnees[Codification] </td>";
  echo "<td> $donnees[sim] </td>";
echo "<td> $donnees[balise] </td>";
echo "<td> $donnees[telephone] </td>";
echo "<td> $donnees[IDPORT] </td>";
echo "<td> $donnees[immatriculation] </td>";
echo "<td> $donnees[statut] </td>";
echo "<td> $donnees[probleme] </td>";
echo "<td> $donnees[navigation] </td>";
echo "<td> $donnees[LC] </td>";
echo "<td> $donnees[pesee] </td>";
?>
<td align="center"><a href="simedit.php?id=<?php echo $donnees["Codification"]; ?>">
<i class="fa fa-eyedropper" style="color:#2E64FE;></i><img src"logo.jpg" border="0" text-color="white"></a></td>


<td align="center"><a href="simdel.php?id=<?php echo $donnees["Codification"]; ?>">
<i class="fa fa-trash" style="color:#2E64FE;></i><img src"logo.jpg" border="0" text-color="white"></a></td>


   <td align="center"><a href="simview.php?id=<?php echo $donnees["Codification"]; ?>">
   <i class="fa fa-eye" style="color:#2E64FE;></i><img src"logo.jpg" border="0" text-color="white"></a></td>

</tr>



  <?php
}
$reponse->closeCursor();
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}
  }
?>
</table>
