<?php session_start(); 
error_reporting(0);?>

<!DOCTYPE html>
<html>
<head>
<title>Паркинги и гаражи</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="css/jquery.dataTables.min.css">
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class= "container col-md-12 col-sm-12 col-xs-12">
      <form class="form-horizontal" id="form" method="post" action="login.php">
      <div style="text-align: center; color: red">
      <?php $reasons = array("password" => "Грешно Потребителско име и/или парола", "blank" => "Оставили сте едно или повече полета празни"); if ($_GET["loginFailed"]) echo $reasons[$_GET["reason"]]; ?>
      </div>
      <div class="row">
      <div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-10 col-xs-offset-1">
      <div class="form-group">
        <label for="username">Потребителско Име</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Потребителско Име" required>
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-10 col-xs-offset-1">
      <div class="form-group">
        <label for="password">Парола</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Парола" required>
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-2 col-md-offset-4 col-sm-6 col-xs-10 col-xs-offset-1" style="padding-left: 0;">
      <input type="submit" name="submit" value="Влез" class="btn btn-info btn-lg"></input>
      </div>

      </div>

    </form>

  </div>
</body>
</html>
