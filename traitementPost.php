<?php
include_once 'config/config.php';
include_once 'config/db.php';
require_once 'classes/posts.php';

$user_id=$_POST['user_id'];
$title=$_POST['title'];
$content=$_POST['content'];
$categogy =$_POST['category_id'];


$data = [$title, $content, $user_id, $categogy];
Posts::Insert_Data($data);

header("Location:accueil.php?id=".$user_id);

?>