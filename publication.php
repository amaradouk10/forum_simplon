<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css ">
    <link rel="stylesheet" href="styles/style.css">
</body>
    <form action="traitement_pub.php" method="post">
        <div class="container">
            <div class="mt-5 row">
                <label  class="col-sm-2 col-form-label">Intitule</label>
                <div class="col-sm-7">
                <input type="text" class="form-control">
            </div>
            </div>

            <div class="mt-5 row">
                <label  class="col-sm-2 col-form-label">Categories</label>
                <div class="col-sm-7">
                <select class="form-select" id="inputGroupSelect01">
                    <option selected>Choisissez une categorie</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            </div>

            <div class="mt-5 row">
                <label  class="col-sm-2 col-form-label">Article</label>
                <div class="col-sm-7">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            </div>

            <div class="mt-5 row">
                <label  class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-7">
                <input type="text" class="form-control">
            </div>
            </div>

            <div class="mt-5 row">
                <label  class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-7">
                <input type="email" class="form-control">
            </div>
            </div>
            <div class="text-center">
            <button type="submit" class="mt-4 btn btn-primary">Publier</button>
            </div>
        </div>
    </form>
<script src="styles/jquery-3.5.1.min.js"></script>
<script src="styles/main.js"></script>   
</body>
</html>