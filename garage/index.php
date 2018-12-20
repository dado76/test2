

	<div class="row">
	





	<?php
$steam=$steamid;

echo $steam;


 $sql = 'SELECT * FROM vehicle WHERE  account_uid = '.$steam.'  AND deleted_at IS NULL ';





	?><script src="jquery.min.js"></script>
			<table class="table table-bordered table-striped" style="margin-top:20px;">
				<thead>
				<th>ID</th>
					<th>Modéle</th>
					<th>Code pin</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php
						//include our connection
						include_once('connection.php');

						$database = new Connection();
    					$db = $database->open();
						try{

						    foreach ($db->query($sql) as $row) {
						    	?>
						    	<tr>
						    		<td><?php echo $row['id']; ?></td>
						    		<td><?php echo $row['class']; ?></td>
						    		<td><?php echo $row['pin_code']; ?></td>
						  
						    		<td>
						    			<a href="#edit_<?php echo $row['id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span>Modifier</a>
						    			<a href="#delete_<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span>Supprimer</a>
						    		</td>
						    		<?php include('edit_delete_modal.php'); ?>
						    	</tr>
						    	<?php
						    }
						}
						catch(PDOException $e){
							echo "Probléme de connection: " . $e->getMessage();
						}

						//close connection
						$database->close();

					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
