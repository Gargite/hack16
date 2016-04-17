<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/jquery.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <a href="logout.php"><button class="btn btn-danger">Отпиши се</button></a>
  </head>
  <body>
<div class= "container col-md-12 col-sm-12 col-xs-12">
    <form class="form-horizontal" method="post" action="log.php">
    <div class="row">
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-10 col-xs-offset-1">
    <div class="form-group">
      <label for="username">Потребителско Име</label>
      <input type="text" class="form-control" id="username" placeholder="Потребителско Име">
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-10 col-xs-offset-1">
    <div class="form-group">
      <label for="password">Парола</label>
      <input type="password" class="form-control" id="password" placeholder="Парола">
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-2 col-md-offset-4 col-sm-6 col-xs-10 col-xs-offset-1" style="padding-left: 0;">
    <input type="submit" value="Влез" class="btn btn-info btn-lg"></input>
    </div>
    </div>
  </form>
</div>
  </body>
</html>

<?php
} else {
    echo "Моля впишете се, за да видите тази страница <br/>";
}
?>
