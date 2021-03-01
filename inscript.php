

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid text-center">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Inscription</h2>

  <form class="login-container" action="traitement_inscript.php" method="POST">
    <p><input name="email" type="text" class="1put" placeholder="Email" required="required"></p>
    <p><input name="role" type="text" class="1put" placeholder="Role" required="required"></p>
    <p><input name="password" type="password" class="1put" placeholder="Password" required="required"></p>
    <p><input type="submit" value="S'enregistrer" required="required"></p>
  </form>
</div>
<script src="styles/jquery-3.5.1.min.js"></script>
<script src="styles/main.js"></script>
</body>
</html>