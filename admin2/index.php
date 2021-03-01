<?php

include('inc/header.php');
?>
<title>Admin Panel</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/data.js"></script>
<?php include('inc/container.php'); ?>
<div class="container contact">
	<h2 class="text-center bienvenu">BIENVENUE !</h2>
	<div class="">
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-2" align="right">
					<button type="button" name="add" id="addEmployee" class="btn bouton btn-md ">Add user</button>
				</div>
			</div>
		</div>
		<table id="employeeList" class="table table-bordered table-striped">
			<thead>
				<tr>

					<th>Nom</th>
					<th>Prenom</th>
					<th>Email</th>
					<th>Role</th>
					<th>Action</th>


				</tr>
			</thead>
			<tbody>
				<?php require_once '../classes/database.class.php';
				$db = new Database('root', '', 'forumSimplon');
				$statement = $db->request('SELECT * FROM users order by firstname ASC');

				while ($data = $statement->fetch(PDO::FETCH_ASSOC)) {

					echo '<tr id="ligne">';

					echo	'<td width=30%>' . $data['lastname'] . '</td>';
					echo	'<td width=20%>' . $data['firstname'] . '</td>';
					echo	'<td width=30%>' . $data['email'] . '</td>';
					echo	'<td width=10%>' . $data['role'] . '</td>';

					echo	'<td width=10%>';
					echo       '<a href="delete.php?id=' . $data['id'] . '"><span  class="btn btn-danger">Supprimer</span></a>';
					echo 	'</td>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
	<div id="employeeModal" class="modal fade">
		<div class="modal-dialog">
			<form action="traitement_inscript.php" method="post" id="employeeForm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Edit User</h4>
					</div>
					<div class="modal-body">
						<div class="form-group" <label for="firstname" class="control-label">Nom</label>
							<input type="text" class="form-control" id="empName" name="firstname" placeholder="Nom" required>
						</div>
						<div class="form-group" <label for="lastname" class="control-label">Prenom</label>
							<input type="text" class="form-control" id="empName" name="lastname" placeholder="Prenomom" required>
						</div>
						<div class="form-group">
							<label for="email" class="control-label">Email</label>
							<input type="email" class="form-control" id="empAge" name="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="role" class="control-label">Role</label>
							<input type="text" class="form-control" id="empSkills" name="role" placeholder="Role" required>
						</div>
						<div class="form-group">
							<label for="password" class="control-label">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
						</div>

					</div>
					<div class="modal-footer">
						<input type="hidden" name="empId" id="empId" />
						<input type="hidden" name="action" id="action" value="" />
						<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
						<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	// $(document).ready(function() {
	// 	$('#employeeList').DataTable({
	// 		"lengthChange": true,
	// 		"order": [],
	// 		"pageLength": 10
	// 	});
		$('#addEmployee').click(function() {
			$('#employeeModal').modal('show');
			$('#employeeForm')[0].reset();
			$('.modal-title').html("<i class='fa fa-plus'></i> AJOUTER DEVELOPPEUR");
			$('#action').val('addEmployee');
			$('#save').val('Add');
		});



	});
</script>