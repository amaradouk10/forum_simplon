<?php
require_once '../classes/database.class.php';
$db = new Database('root', '', 'forumSimplon');
$firstname = htmlspecialchars($_POST['firstname']);
$lastname = htmlspecialchars($_POST['lastname']);
$email = htmlspecialchars($_POST['email']);
$role = htmlspecialchars($_POST['role']);
$password = htmlspecialchars($_POST['password']);

$data = array($firstname, $lastname, $email, $role, $password);
$db->request('INSERT INTO users (firstname, lastname, email, role, password) VALUES(?, ?,?,?,?)', $data);
header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <title>Delete</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center mt-5 alert alert-warning">Admin bien enregistré</h3>
        <div class="text-center"><a href="" class="btn btn-warning"></a></div>
    </div>
</body>