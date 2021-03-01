<?php
include('inc/header.php');
include('inc/container.php');
include 'functions/format.php'
?>
<title>Admin Panel</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/data.js"></script>
<div class="container contact">
    <h2 class="text-center bienvenu"> BIENVENUE !<BR></BR> Vos messages ici.</h2>
    <div class="">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-10">
                    <h3 class="panel-title"></h3>
                </div>
            </div>
        </div>
        <table id="employeeList" class="table table-bordered table-striped ">
            <thead>
                <tr>

                    <th>Email</th>
                    <th>Objet</th>
                    <th>Contenu du message</th>
                    <th>Date d'envoi</th>
                    <th>Action</th>


                </tr>
            </thead>
            <tbody>
                <?php require_once '../classes/database.class.php';
                $db = new Database('root', '', 'forumSimplon');
                $statement = $db->request('SELECT * FROM messages order by id DESC');


                while ($data = $statement->fetch(PDO::FETCH_ASSOC)) {

                    echo '<tr id="ligne">';

                    echo    '<td width=15%>' . $data['mail'] . '</td>';
                    echo    '<td width=15%>' . $data['objet_mess'] . '</td>';
                    echo    '<td width=25%>' .  format::textshorten($data['contenu']) . '</td>';
                    echo    '<td width=15%>' . format::formatdate($data['message_date']) . '</td>';

                    echo    '<td width=20%>';
                    echo        '<a href=#employeeModal' . $data['id'] . '"><span  name="add" class="btn btn-primary btn-md addEmployee">Details</span></a>';
                    echo       '<a href="deleteMess.php?id=' . $data['id'] . '"><span  class="btn btn-danger">Supprimer</span></a>';
                    echo     '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <div id="employeeModal" class="modal fade">
        <div class="modal-dialog">
            <form action="traitement_inscript.php" method="post" id="employeeForm">

                <table id="employeeList" class="table table-bordered table-striped">
                    <thead>
                        <?php require_once '../classes/database.class.php';
                        $db = new Database('root', '', 'forumSimplon');
                        $statement = $db->request('SELECT * FROM messages LIMIT 1');
                       

                            echo '<tr>';
                            echo '<td>' . 'Email : ' . $data['mail'] . '</td>';
                            echo '</tr>';
                            echo '<td>' . 'Objet du message : ' . $data['objet_mess'] . '</td>';
                            echo '</tr>';
                            echo '<td>' . 'Contenu du message : ' . $data['contenu'] . '</td>';
                            echo '</tr>';
                            echo '<td>' . "Date d'envoi : " . format::formatdate($data['message_date']) . '</td>';
                            echo '</tr>';
                      
                        ?>
                </table>
                <div class="modal-footer">
                    <input type="hidden" name="empId" id="empId" />
                    <input type="hidden" name="action" id="action" value="" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
<script>
    // $(document).ready(function() {
    //     $('#employeeList').DataTable({
    //         "lengthChange": true,
    //         "order": [],
    //         "pageLength": 10
    //     });
    $('.addEmployee').click(function() {
        $('#employeeModal').modal('show');
        $('#employeeForm')[0].reset();
        $('.modal-title').html("<i class='fa fa-plus'></i> DETAILS DU MESSAGE");
        $('#action').val('addEmployee');
        $('#save').val('Add');
    });



    // });
</script>