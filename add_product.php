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
    
    if ($_POST["submit_add"])
    {
      $error = array();
        
       if (!$_POST["form_title"])
      {
         $error[] = "Укажите название блюда";
      }

      if (!$_POST["form_weight"])
      {
         $error[] = "Укажите вес блюда";
      }

      if (!$_POST["form_price"])
      {
         $error[] = "Укажите цену блюда";
      }

      if (!$_POST["form_category"])
      {
         $error[] = "Укажите категорию блюда";         
      }else
      {
       	$result = mysqli_query($link, "SELECT * FROM `категории` WHERE `Код категории`='{$_POST["form_category"]}'");
        $row = mysqli_fetch_array($result);
      }

      if (empty($_POST["upload_image"]))
     {        
        include("upload-image.php");
        unset($_POST["upload_image"]);           
     } 
                                       
     if (count($error))
     {           
          $_SESSION['message'] = "<p id='form-error'>".implode('<br />',$error)."</p>";
          
     }else
     {                    
       mysqli_query($link, "INSERT INTO `блюда` (`Код категории`, `Название`, `Вес`, `Цена`, `Описание`)
       VALUES('".$_POST["form_category"]."','".$_POST["form_title"]."','".$_POST["form_weight"]."','".$_POST["form_price"]."','".$_POST["txt1"]."')");
                 
    $_SESSION['message'] = "<p id='form-success'>Блюдо успешно добавлено!</p>";
    $posts = mysqli_query($link, "SELECT max(`Код блюда`) AS max FROM блюда");
    $id = mysqli_fetch_array($posts,MYSQLI_ASSOC);
     
     if (empty($_POST["upload_image"]))
    {        
       include("upload-image.php");
       unset($_POST["upload_image"]);           
    } 
   }
}
   else 
   {
   $msgerror = 'Ошибка при добавлении блюда'; 
   } 
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
<title>Добавление блюда</title>

</head>
<body>
<nav class="navbar navbar-expand-lg"  id="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
  <a class="navbar-brand" href="adminpanel.php">ADMIN PANEL</a>
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
    </div>
    <div class="col-sm-10 text-left info"> 
      <h3>Добавление блюда</h3>

<div class="row">
  <div class="col-sm-10">    
<?php
    $all_count = mysqli_query($link, "SELECT * FROM `блюда`"); //представление
    $all_count_result = mysqli_num_rows($all_count);
?> 

  <?php
    if (isset($_SESSION['message']))
    {
        echo $_SESSION['message'];
        unset ($_SESSION['message']);
    }
?>
<form enctype="multipart/form-data" method="POST">
<div class="form-group">
      <ul class="list-group">
      <li class="name">
      <label>Название блюда</label>
      <input type="text" class="form-control" name="form_title">
      </li>
      
      <li class="name">
      <label>Вес</label>
      <input type="text" class="form-control" name="form_weight">
      </li>
      
      <li class="name">
      <label>Цена</label>
      <input type="text" class="form-control" name="form_price">
      </li>

      <div>
        <label for="sel1">Категория</label>
        <p>
      <select name="form_category" class="form-control" id="sel1">




  <?php

$category = mysqli_query($link, "SELECT * FROM category"); //Представление
    
if (mysqli_num_rows($category) > 0)
{
$result_category = mysqli_fetch_array($category);
do
{
  echo '
  <option '.$type_product.' value="'.$result_category["Код категории"].'">'.$result_category["Наименование"].'</option>
  ';  
}
 while ($result_category = mysqli_fetch_array($category));
}
?> 
</select></p>
</div>
</ul>
</div>

<div class="row">
<div class="col-sm-7"> 
<label class="stylelabel">Фото</label>
<div id="baseimg-upload">
<input type="hidden" name="MAX_FILE_SIZE" value="5000000">
<input type="file" name="upload_image">
<div class="col-sm-5"></div> 
</div>
</div>
</div>

<label for="comment">Описание</label>
<div class="form-group">
<textarea id="comment" name="txt1" cols="90" rows="16"></textarea>
</div>     


<p align="right" ><input type="submit" class="btn btn-dark" id="submit_form" name="submit_add" value="Добавить"></p>     
</form>

</div>
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