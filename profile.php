<?php 
	$page_title = "Profile";
	include_once 'includes/header.php';
	include_once 'controllers/ParseProfile.php';
?>
	<body background="K5JXuOD.png">
<div class="container">
	<div>
		<h1>Profil</h1>
		<?php if(!isset($_SESSION['username'])) : ?>

			<p class="lead">
				Vous devez etre connecter pour voir cette page<a href="login.php">Connexion</a> Pas encore membre? <a href="register.php">Enregistrement</a>
			</p>
		<?php else : ?>
			<section class="col-lg-7">
				<table class="table table-dark">
					<tr><th>Nom:</th><td><?php if(isset($username)) echo $username; ?></td></tr>
					<tr><th>Email: </th><td><?php if(isset($email)) echo $email; ?></td></tr>
					<tr><th>Steam UID: </th><td><?php if(isset($steamid)) echo $steamid; ?></td></tr>
					<tr><th>Date d'inscription: </th><td><?php if(isset($date_joined)) echo $date_joined; ?></td></tr>
					<tr><th></th><td><a class="pull-right" "text-danger" href="edit-profile.php?user_identity=<?php if(isset($encode_id)) echo $encode_id; ?>">
					<span class="glyphicon glyphicon-edit text-danger">Modifier</a></td></tr>
				</table>
				
				
				
				<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
Débloquer mon personnage
</button>
<?php
$steam=$steamid;
$sql = 'SELECT * FROM vehicle WHERE account_uid = '.$steam.'';
$req = $db->query($sql);
$req->setFetchMode(PDO::FETCH_ASSOC);

foreach($req as $row)
{
 ?>  
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  
  <div class="modal-body">
  Nom :
<?php

   echo  $row['class'], '<br/>';
     echo  $row['class'], '<br/>';

}
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
				<button type="button" class="btn btn-danger">Garage</button>
				<button type="button" class="btn btn-danger">Compte en banque</button>
			</section>
		<?php endif; ?>
	</div>
</div>


<?php include_once'includes/footer.php'; ?>