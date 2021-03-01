<?php
require_once '../classes/database.class.php';
$db = new Database('root', '', 'forumSimplon');
$titre = htmlspecialchars($_POST['title']);
$contenu = htmlspecialchars($_POST['content']);
$user_id = htmlspecialchars($_POST['user_id']);
$category = htmlspecialchars($_POST['category_id']);


$data = array($titre, $contenu, $user_id, $category);
$db->request('INSERT INTO posts (title, content, user_id, category_id) VALUES(?, ?,?,?)', $data);
header("Location: gestionPub.php");
?>
