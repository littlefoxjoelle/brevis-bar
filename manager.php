<?php
session_start();
ob_start();

if ($_SESSION['auth_admin'] == "yes_auth")
{
    if (isset($_GET["logout"]))
    {
        unset($_SESSION['auth_admin']);
        header("Location: autorizationadmin.php");
        ob_end_flush();
    }
    include("dbconnect.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">
<meta http-equiv="Content-Type" content = "text/html; charset = utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Comfortaa|Kaushan+Script|Montserrat|Neucha&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/adminpanel.css">
<title>Панель управления</title>

</head>
<body>
<nav class="navbar navbar-expand-lg"  id="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
  <a class="navbar-brand" href="#">ADMIN PANEL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-4 navbar-right">
        <li>
          <a class="nav-link" href="?logout">Выход</a>
          </li>
  </div>
</nav>

<div class="container-fluid">
<div class="row">
    <div class="col-sm-2 sidenav">
      <p><a href="orders.php">Заказы</a></p>
      <p><a href="products.php">Меню</a></p>
      <p><a href="clients.php">Клиенты</a></p>
    </div>
    <div class="col-sm-10 text-left"> 
      <h3>Добро пожаловать в панель управления BREVIS BAR!</h3>
      <p>Тут будет текст.</p>
      <hr>
      <h3>Общая статистика</h3>
      <p>И тут будет текст :)</p>
    </div>
</div>
</div>
</body>
</html>
<?php
    }
    else{
        header("Location: autorizationadmin.php");
        ob_end_flush();  
    }
?> 