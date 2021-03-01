<?php
require_once 'class/database.class.php';
$db=new Database('root','','forum');
$email=htmlspecialchars($_POST['email']);
$role=htmlspecialchars($_POST['role']);
$password=htmlspecialchars($_POST['password']);

$data=array($email,$role,$password);
$db->request('INSERT INTO utilisateur(email,role,password) VALUES(?, ?, ?)',$data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css ">
    <link rel="stylesheet" href="styles/style.css">
    <title>Delete</title>
</head>
<body>
    <div class="container">
        <h3 class="text-center mt-5 alert alert-warning">Développeur bien enregistré</h3>
        <div class="text-center"><a href="admin/admin.php" class="btn btn-warning">Retour</a></div>
    </div>
</body>
