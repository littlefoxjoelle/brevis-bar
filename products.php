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

    $action = $_GET["action"];
    if (isset($action))
    {
        $id = (int)$_GET["id"];
        switch ($action)
        {
            case 'delete':
                $delete = mysqli_query($link, "CALL `deleleProduct`('$id')"); //Хранимая процедура
            break;
        }
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
<title>Меню</title>

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
      <h3>Меню</h3>
<?php
    $all_count = mysqli_query($link, "SELECT * FROM `блюда`"); //представление
    $all_count_result = mysqli_num_rows($all_count);
?> 
<div class="row">
  <div class="col-sm-5">Всего блюд в меню - <strong><?php echo $all_count_result; ?></strong></div>
  <div class="col-sm-5"><a href="add_product.php">Добавить блюдо</a></div>
</div>

<ul class="list-group">
<div class="row">
<?php
if (isset($_GET['page']))
{
    $page = $_GET['page'];
}
else
{
    $page = 1;
}
$limit = 9;
$number = ($page * $limit) - $limit;
$res_count = mysqli_query($link, "SELECT `countProductFunction`() AS `countProductFunction`"); //Хранимая функция
$row = mysqli_fetch_row($res_count);
$total = $row[0];
$str_page = ceil($total / $limit);
$result = mysqli_query($link, "SELECT * FROM `блюда` ORDER BY `Код блюда` DESC LIMIT $number, $limit");
$myrow = mysqli_fetch_array($result);
do
{
    if ($myrow["Фото"] !="" && file_exists ("images/".$myrow["Фото"]))
    {
        $img_path='images/'.$myrow["Фото"];
        $max_width = 400;
        $max_height = 265;
        list($width, $height) = getimagesize($img_path);
        $ratioh = $max_height/$height;
        $ratiow = $max_width/$width;
        $ratio = min($ratioh, $ratiow);
        $width = intval($ratio*$width);
        $height = intval($ratio*$height);
    }
    else{
        $img_path="images/Бургеры/no-image.jpg";
        $max_width = 400;
        $max_height = 265;
    }

    echo '<div class="col">
        <li class="list-group infoProduct">
        <center>
        <p>'.$myrow["Название"].'</p>
        <img src="'.$img_path.'" width="'.$width.'" height="'.$height.'""/>
        </center> 
        <p align="center" class="link-action">
        <a href="edit_product.php?id='.$myrow["Код блюда"].'">Редактировать</a> | <a href="products.php?'.$url.'id='.$myrow["Код блюда"].'&action=delete" class="delete">Удалить</a>
        </p>
        </li></div>
        ';

}
while($myrow=mysqli_fetch_array($result));
echo '</div></ul>';
?>
<div class="row">
<div class="col-sm-10">
<ul class="pagination pagination-sm justify-content-center">
<?php
for ($i = 1; $i <= $str_page; $i++)
{
    echo '
    <li class="page-item">
    <a class="page-link" href = products.php?page='.$i.'>'.$i.'</a>
    </li>';
}
?>
</ul>
</div>
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