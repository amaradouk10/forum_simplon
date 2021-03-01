<?php
require_once 'classes/database.class.php';
$db=new Database('root','','forumSimplon');
$email=htmlspecialchars($_POST['email']);
$role=htmlspecialchars($_POST['role']);
$password=htmlspecialchars($_POST['password']);


if(isset($_POST['email']) && isset($_POST['password'])){
    $email=htmlspecialchars($_POST['email']);
    $role=htmlspecialchars($_POST['role']);
    $password=htmlspecialchars($_POST['password']);
    $data=array($email,$role,$password);
    $req=$db->request('SELECT email,role,password FROM users WHERE email=? AND role=? AND password=?',$data);
    $row=$req->rowcount();
    $data=$req->fetch();

    if($row>0){
       if($_POST['role']=='admin') Header('Location:admin2/index.php');
       else if($_POST['role']=='dev') Header('Location:accueil.php');
   }else header('Location:index.php');
}else header('Location:index.php');

?>
