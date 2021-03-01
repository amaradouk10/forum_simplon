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
    <h2 class="text-center bienvenu">BIENVENUE ! <br> Vos catégories ici.</h2>
    <div class="">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-10">
                    <h3 class="panel-title"></h3>
                </div>
                <div class="col-md-2" align="right">
                    <button type="button" name="add" id="addEmployee" class="btn bouton btn-md ">Ajouter</button>
                </div>
            </div>
        </div>
        <table id="employeeList" class="table table-bordered table-striped">
            <thead>
                <tr>

                    <th>Nom de la catégorie</th>
                    <th>Action</th>


                </tr>
            </thead>
            <tbody>
                <?php require_once '../classes/database.class.php';
                $db = new Database('root', '', 'forumSimplon');
                $statement = $db->request('SELECT * FROM categories order by id DESC');

                while ($data = $statement->fetch(PDO::FETCH_ASSOC)) {

                    echo '<tr id="ligne">';

                    echo    '<td width=30%>' . $data['name'] . '</td>';
                    echo    '<td width=5%>';
                    echo       '<a href="deleteCat.php?id=' . $data['id'] . '"><span   class="btn btn-danger">Supprimer</span></a>';
                    echo     '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <div id="employeeModal" class="modal fade">
        <div class="modal-dialog">
            <form action="traitementCat.php" method="post" id="employeeForm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-plus"></i> Edit User</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="role" class="control-label">Nom de la nouvelle catégorie</label>
                            <input type="text" class="form-control" id="empSkills" name="name" placeholder="nom" required>
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
    $('.modal-title').html("<i class='fa fa-plus'></i> AJOUTER CATEGORIE");
    $('#action').val('addEmployee');
    $('#save').val('Add');
    });



    });
</script>