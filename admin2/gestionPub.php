<?php
require_once '../classes/database.class.php';
include('inc/header.php');
include('inc/container.php');
include_once 'functions/format.php'

?>

<title>Admin Panel</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/data.js"></script>
<div class="container contact">
    <h2 class="text-center bienvenu">BIENVENUE !<BR> Les publications ici.</h2>
    <div class="">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-10">
                    <h3 class="panel-title"></h3>
                </div>
                <div class="col-md-2" align="right">
                    <button type="button" name="add" id="addEmployee" class="btn bouton btn-md ">Publiez</button>
                </div>
            </div>
        </div>
        <table id="employeeList" class="table table-bordered table-striped">
            <thead>
                <tr>

                    <th>Titre</th>
                    <th>contenu</th>
                    <th>Date</th>
                    <th>Acion</th>


                </tr>
            </thead>
            <tbody>
                <?php 
                $db = new Database('root', '', 'forumSimplon');
                $statement = $db->request('SELECT * FROM posts order by id DESC');

                while ($data = $statement->fetch(PDO::FETCH_ASSOC)) {

                    echo '<tr id="ligne">';
                    echo    '<td width=20%>' . $data['title'] . '</td>';
                    echo    '<td width=40%>' . format::textshorten ($data['content']) . '</td>';
                    echo    '<td width=20%>' . format::formatdate($data['date']) . '</td>';
                    echo    '<td width=20%>';
                    echo        '<a href="../post.php?id=' .$data['id'] . '" target="blank"><span class="btn btn-primary">Voir détails</span></a>';
                    echo       '<a href="deletePost.php?id=' . $data['id'] . '"><span  class="btn btn-danger">Supprimer</span></a>';
                    echo     '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <div id="employeeModal" class="modal fade">
        <div class="modal-dialog">
            <form action="../traitementPost.php " method="post" id="employeeForm" target="blank">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-plus"></i> Edit User</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group ">
                            <label class="control-label">Veuillez choisir une catégorie :</label>
                            <select class="form-select " name="category_id">
                                <option selected>Choisir une catégorie</option>
                                <?php
                                include_once '../config/config.php';
                                include_once '../config/db.php';
                                include_once '../classes/categories.php';

                                $allCategories = Categories::getAllCategories();
                                foreach ($allCategories as $indexe => $cat) : ?>
                                    <option value="<?= $cat['id']; ?> "><?php echo $cat['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="role" class="control-label">Titre</label>
                            <input type="text" class="form-control" id="empSkills" name="title" placeholder="Titre de la publication" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Votre publication ici</label>
                            <textarea name="content" class="form-control border" placeholder="Entrez votre publication." rows=11 required data-error="SVP, laissez une publication."></textarea>
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
    $('.modal-title').html("<i class='fa fa-plus'></i> AJOUTER UNE PUBLICATION");
    $('#action').val('addEmployee');
    $('#save').val('Add');
    });



    });
</script>