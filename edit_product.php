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
    $id = $_GET["id"];
    $action = $_GET["action"];
    if (isset($action))
    {
       switch ($action)
       {
          case 'delete':
            if (file_exists("images/".$_GET["img"]))
            {
               unlink("images/".$_GET["img"]);
            }
         break;
       }
    }
    if ($_POST["submit_save"])
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
           $_SESSION['message'] = "<p id='form-error'>".implode('<br/>',$error)."</p>";
           
      }else
      {      
         $querynew = "`Код категории`='{$_POST["form_category"]}',`Название`='{$_POST["form_title"]}',`Вес`='{$_POST["form_weight"]}',`Цена`='{$_POST["form_price"]}',`Описание`='{$_POST["txt1"]}'"; 
         $update = mysqli_query($link, "UPDATE `блюда` SET $querynew WHERE `Код блюда` = '$id'");           
         $_SESSION['message'] = "<p id='form-success'>Блюдо успешно отредактировано!</p>";      
      }
}
    else 
    {
    $msgerror = 'Ошибка при редактировании блюда'; 
    } 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">
<meta http-equiv="Content-Type" content = "text/html; charset = utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Comfortaa|Kaushan+Script|Montserrat|Neucha&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/adminpanel.css">
<title>Редактирование блюда</title>

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
      <h3>Редактирование блюда</h3>

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
  <?php
$result = mysqli_query($link, "SELECT * FROM `блюда` WHERE `Код блюда`='$id'");
if (mysqli_num_rows($result) > 0)
{
   $row = mysqli_fetch_array($result);
   do
   {
      echo '
      <form enctype="multipart/form-data" method="POST">
      <div class="form-group">
      <ul class="list-group">
      <li class="name">
      <label>Название блюда</label>
      <input type="text" class="form-control" name="form_title" value="'.$row["Название"].'">
      </li>
      
      <li class="name">
      <label>Вес</label>
      <input type="text" class="form-control" name="form_weight" value="'.$row["Вес"].'">
      </li>
      
      <li class="name">
      <label>Цена</label>
      <input type="text" class="form-control" name="form_price" value="'.$row["Цена"].'">
      </li>
      
      ';
  
$category = mysqli_query($link, "SELECT * FROM category"); //Представление
    
if (mysqli_num_rows($category) > 0)
{
$result_category = mysqli_fetch_array($category);


echo '
<div>
<label for="sel1">Категория</label>
<p>
<select name="form_category" class="form-control" id="sel1">
';

do
{
  // if ($result_category["Код категории"] == 1) {$type_product = "selected";}
  // elseif ($result_category["Код категории"] == 2) {$type_product = "selected";}
  // elseif ($result_category["Код категории"] == 3) {$type_product = "selected";}
  // elseif ($result_category["Код категории"] == 5) {$type_product = "selected";}
  // elseif ($result_category["Код категории"] == 6) {$type_product = "selected";}
  // elseif ($result_category["Код категории"] == 7) {$type_product = "selected";}
  // elseif ($result_category["Код категории"] == 8) {$type_product = "selected";}
  // elseif ($result_category["Код категории"] == 9) {$type_product = "selected";}
  // elseif ($result_category["Код категории"] == 10) {$type_product = "selected";}
  // elseif ($result_category["Код категории"] == 11) {$type_product = "selected";}
  // else {$type_product = "selected";}

  echo '
  <option '.$type_product.' value="'.$result_category["Код категории"].'">'.$result_category["Наименование"].'</option>
  ';  
}
 while ($result_category = mysqli_fetch_array($category));
}
echo '
</select></p>
</div>
</ul></div>
';

if  (strlen($row["Фото"]) > 0 && file_exists("images/".$row["Фото"]))
{
$img_path = 'images/'.$row["Фото"];
$max_width = 400; 
$max_height = 265; 
list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<div class="row">
<div class="col-sm-6.5"> 
<label class="stylelabel">Фото</label>
<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="edit_product.php?id='.$row["Код блюда"].'&img='.$row["Фото"].'&action=delete"></a>
</div></div>
<div class="col-sm-5.5"></div> </div>
';
}else
{ 
echo '<label class="stylelabel">Фото</label>

<div id="baseimg-upload">
<input type="hidden" name="MAX_FILE_SIZE" value="5000000">
<input type="file" name="upload_image">
</div>
';
}
echo'
</br>

<label for="comment">Описание</label>
<div class="form-group">
<textarea id="comment" name="txt1" cols="90" rows="16">'.$row["Описание"].'</textarea>
</div>     

';

echo' 
<p align="right" ><input type="submit" class="btn btn-dark" id="submit_form" name="submit_save" value="Сохранить"></p>     
</form>
';
}
while ($row = mysqli_fetch_array($result));
}
?> 
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