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
  
  <h2 class="login-header">Authentification</h2>

  <form class="login-container" action="connect_traitement.php" method="POST">
    <p><input type="email" name="email" class="1put" placeholder="Email" required="required"></p>
    <p><input type="text" name="role" class="1put" placeholder="Role" required="required"></p>
    <p><input type="password" name="password" class="1put" placeholder="Password" required="required"></p>
    <p><input type="submit" value="Se connecter" required="required"></p>
  </form>
</div>
<script src="styles/jquery-3.5.1.min.js"></script>
<script src="styles/main.js"></script>
</body>
</html>