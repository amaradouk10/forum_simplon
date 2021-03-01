<?php
require_once '../classes/database.class.php';
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
}

if (!empty($_POST['id'])) {
    $id = $_POST['id'];
    $db = new Database('root', '', 'forumSimplon');
    $statement = $db->request("DELETE FROM categories WHERE id=$id");
    $statement->execute([$id]);
    header('Location:gestionCat.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <title>Delete</title>
</head>

<body>
    <div class="delete container">
        <h3 class="text-center mt-5">supprimer une catégorie</h3>
        <form class="form" role="form" action="deleteCat.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <p class="alert alert-warning text-center">Etes-vous sur de supprimer?</p>
            <div class="form-actions text-center">
                <button type="submit" class="btn btn-danger">Oui</button>
                <a href="gestionCat.php" class="btn btn-warning">Non</a>
            </div>
        </form>
    </div>
</body>

</html>