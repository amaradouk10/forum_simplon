<?php
include_once 'config/config.php';
include_once 'config/db.php';
require_once 'classes/comments.php';

$user_id=$_POST['user_id'];
$post_id=$_POST['post_id'];
$content=$_POST['content'];
$comment_id='';
// print_r($_POST);
$datta = [$content, $user_id, $post_id];
$postComment= Comments::Insert_Data($datta);
if ($postComment){
header("Location: commentaires.php?id=".$post_id);
}
?>