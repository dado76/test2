<html>
	<head>
		<title>Webslesson Demo - PHP PDO Ajax CRUD with Data Tables and Bootstrap Modals</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>		
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
			    <link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome-free-5.4.1-web/css/all.min.css">
		<style>
			body
			{
				margin:0;
				pAjoutering:0;
				background-color:#f1f1f1;
			}
			.box
			{
				width:500px;
				pAjoutering:20px;
				background-color:#fff;
				border:1px solid #ccc;
				border-radius:5px;
				margin-top:25px;
			}
		</style>
	</head>
	<body>
		<div class="container box">
		  <header class="w3-container" style="padding-top:22px">

  </header>
 <center>

  <div class="w3-row-padding w3-margin-bottom">


      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-map-marker w3-xxxlarge"></i></div>
        <div class="w3-right">
      
        </div>
        <div class="w3-clear"></div>

      </div>
	</div>




		
			<br />
			<div class="table-responsive">


         </form>
		 
</select>





				</div>
				<br /><br />
				<table id="user_data" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="10%">Modéle</th>
							<th width="10%">Nom</th>
				

							<th width="10%">Modifier</th>
							<th width="10%">Supprimer</th>
						</tr>
					</thead>
				</table>
				
			</div>
		</div>
	</body>
</html>

<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
		
					<h4 class="modal-title">Ajouter une balise</h4>
				</div>
				<div class="modal-body">
					<label>modele</label>
					<input type="text" name="class" id="class" class="form-control" />
					<br />
					<label>nom</label>
					<input type="text" name="nickname" id="nickname" class="form-control" />
		
				<label>RFID</label>
					<input type="text" name="rfid" id="rfid" class="form-control" />
					<br />
					
	
				</div>
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Ajouter" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
	$('#Add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').text("Ajouter Balise");
		$('#action').val("Ajouter");
		$('#operation').val("Ajouter");
		$('#user_uploaded_image').html('');
	});
	
	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"fetch.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10,],
				"orderable":false,
			},
		],

	});
	


	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		var class = $('#class').val();
		var nickname = $('#nickname').val();
		var sim = $('#sim').val();
		var telephone = $('#telephone').val();
		var idport = $('#idport').val();
		var immatriculation = $('#immatriculation').val();
		var statut = $('#statut').val();
		var rfid = $('#rfid').val();
		var extension = $('#user_image').val().split('.').pop().toLowerCase();
	
	
	
	$(document).on('click', '.Modifier', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"fetch_single.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#codification').val(data.class)  ;
				$('#balise').val(data.nickname);
				$('#sim').val(data.sim);
				$('#telephone').val(data.telephone);
				$('#idport').val(data.idport);
				$('#immatriculation').val(data.immatriculation);
				$('#statut').val(data.statut);
				$('#rfid').val(data.rfid);
				$('.modal-title').text("Modifier Carte sims");
				$('#user_id').val(user_id);
				$('#user_uploaded_image').html(data.user_image);
				$('#action').val("Modifier");
				$('#operation').val("Modifier");
			}
		})
	});
	

	
	
});
</script>