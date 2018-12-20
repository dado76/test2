<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"></h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php?id=<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Dates:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="Dates" value="<?php echo $row['Dates']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Commune:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Commune" value="<?php echo $row['Commune']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Adresse:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Adresse" value="<?php echo $row['Adresse']; ?>">
					</div>
				</div>
								<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">OM:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="OM" value="<?php echo $row['OM']; ?>">
					</div>
				</div>
								<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">CS:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="CS" value="<?php echo $row['CS']; ?>">
					</div>
				</div>
								<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">BIO:</label>
					</div>
					<div class="col-sm-10">

						<input type="text" class="form-control" name="BIO" value="<?php echo $row['BIO']; ?>">
					</div>
				</div>
            </div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Annuler</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span>Modifier</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"></h4></center>
            </div>
            <div class="modal-body">
            	<p class="text-center">Etes vous sur de vouloir supprimer l'enregistrement ?</p>
				<h2 class="text-center"><?php echo $row['Dates'].' '.$row['identification']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Annuler</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Valider</a>
            </div>

        </div>
    </div>
</div>
