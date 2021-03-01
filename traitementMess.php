<?php
include_once 'config/config.php';
include_once 'config/db.php';
require_once 'classes/posts.php';
require_once 'classes/Message.php';
require_once 'functions/functions.php';

$email=$_POST['mail'];
$contenu=$_POST['contenu'];
$object_mess=$_POST['objet_mess'];
$user_id=$_POST['user_id'];


$data = [$email,$object_mess, $contenu,$user_id];
debug($_POST);
$postMess=Message::Insert_Data($data);
if ($postMess){
header("Location: accueil.php?id=".$email);
}
?>