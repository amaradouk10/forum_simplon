<?php
require_once '../classes/database.class.php';
$db = new Database('root', '', 'forumSimplon');
$name = htmlspecialchars($_POST['name']);

$data = array($name);
$db->request('INSERT INTO categories (name) VALUES(?)', $data);
header("Location: gestionCat.php");
?>
