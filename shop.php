<?php 
    include("dbconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Brevis Bar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Brevis<small>Bar</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Меню
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="index.html" class="nav-link">Главная</a></li>
        <li class="nav-item"><a href="menu.php" class="nav-link">Меню</a></li>
        <li class="nav-item active"><a href="shop.php" class="nav-link">Заказать</a></li>
				<li class="nav-item"><a href="about.html" class="nav-link">О нас</a></li>
				<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="contact.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Контакты</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="contact.html">Контакты</a>
          <a class="dropdown-item" href="ecoglade_ferma.html">ECO GLADE. Гидропоника</a>
          <a class="dropdown-item" href="fc_brevis.html">ФК "Бревис"</a>
        </div>
      </li>
				<li class="nav-item cart"><a href="cart.php?action=oneclick" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a></li>
			  </ul>
	      </div>
		  </div>
	  </nav>
    

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Заказать онлайн</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Главная</a></span> <span>Заказать</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>


<section class="ftco-menu mb-5 pb-5">
  <div class="container">
    <div class="row d-md-flex">
	    <div class="col-lg-12 ftco-animate p-md-5">
		    <div class="row">
		      <div class="col-md-12 nav-link-wrap mb-5">
		        <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		          <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Бургеры</a>
              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Сеты</a>
              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Закуски</a>
              <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Овощи</a>
              <a class="nav-link" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Салаты</a>
              <a class="nav-link" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">Супы</a>
              <a class="nav-link" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="false">Паста</a>
              <a class="nav-link" id="v-pills-8-tab" data-toggle="pill" href="#v-pills-8" role="tab" aria-controls="v-pills-8" aria-selected="false">Мясо</a>
              <a class="nav-link" id="v-pills-10-tab" data-toggle="pill" href="#v-pills-10" role="tab" aria-controls="v-pills-10" aria-selected="false">Роллы</a>
              <a class="nav-link" id="v-pills-9-tab" data-toggle="pill" href="#v-pills-9" role="tab" aria-controls="v-pills-9" aria-selected="false">Десерты</a>
		        </div>
		      </div>
				</div>
<div class="col-md-12 d-flex align-items-center">
<div class="tab-content ftco-animate" id="v-pills-tabContent">
<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
<div class="row">
<?php
// Запрос и вывод записей
$result = mysqli_query($link,"SELECT * FROM `блюда` INNER JOIN `Категории`ON `блюда`.`Код категории` = `категории`.`Код категории` WHERE `блюда`.`Код категории` = 1");
$myrow = mysqli_fetch_array($result);
do
{
    if ($myrow["Фото"] !="" && file_exists ("images/".$myrow["Фото"]))
    {
        $img_path='images/'.$myrow["Фото"];
        $max_width = 350;
        $max_height = 215;
        list($width, $height) = getimagesize($img_path);
        $ratioh = $max_height/$height;
        $ratiow = $max_width/$width;
        $ratio = min($ratioh, $ratiow);
        $width = intval($ratio*$width);
        $height = intval($ratio*$height);
    }
    else{
        $img_path="images/Бургеры/no-image.jpg";
        $width = 350;
        $height = 215;
    }

    echo '
    <div class="col-md-4 text-center">
    <div class="menu-wrap">
    <div class="text text-center pt-4">
    <div class="block_images_grid">
	<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'""/>
	</br></br>
    <h3>'.$myrow["Название"].'</h3>
    <p>'.$myrow["Описание"].'</p>
    <p>Вес: '.$myrow["Вес"].'</p>
    <p class="price"><span>'.$myrow["Цена"].' руб</span></p>
    <p><a class="btn btn-primary btn-outline-primary" tid="'.$myrow["Код блюда"].'">Добавить в корзину</a></p>
</div>
</div>
';
echo '
</div>
</div>';
}
while($myrow=mysqli_fetch_array($result));
?>
</div>
</div>
<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
<div class="row">
<?php
// Запрос и вывод записей
$result = mysqli_query($link,"SELECT * FROM `блюда` INNER JOIN `Категории`ON `блюда`.`Код категории` = `категории`.`Код категории` WHERE `блюда`.`Код категории` = 2");
$myrow = mysqli_fetch_array($result);
do
{
    if ($myrow["Фото"] !="" && file_exists ("images/".$myrow["Фото"]))
    {
        $img_path='images/'.$myrow["Фото"];
        $max_width = 350;
        $max_height = 215;
        list($width, $height) = getimagesize($img_path);
        $ratioh = $max_height/$height;
        $ratiow = $max_width/$width;
        $ratio = min($ratioh, $ratiow);
        $width = intval($ratio*$width);
        $height = intval($ratio*$height);
    }
    else{
        $img_path="images/Сеты/no-image.jpg";
        $width = 350;
        $height = 215;
    }

    echo '
    <div class="col-md-4 text-center">
    <div class="menu-wrap">
    <div class="text text-center pt-4">
    <div class="block_images_grid">
	<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'""/>
	</br></br>
    <h3>'.$myrow["Название"].'</h3>
    <p>'.$myrow["Описание"].'</p>
    <p>Вес: '.$myrow["Вес"].'</p>
    <p class="price"><span>'.$myrow["Цена"].' руб</span></p>
    <p><a class="btn btn-primary btn-outline-primary" tid="'.$myrow["Код блюда"].'">Добавить в корзину</a></p>
</div>
</div>
';
echo '
</div>
</div>';
}
while($myrow=mysqli_fetch_array($result));
?>
</div>
</div>
<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
<div class="row">
<?php
// Запрос и вывод записей
$result = mysqli_query($link,"SELECT * FROM `блюда` INNER JOIN `Категории`ON `блюда`.`Код категории` = `категории`.`Код категории` WHERE `блюда`.`Код категории` = 3");
$myrow = mysqli_fetch_array($result);
do
{
    if ($myrow["Фото"] !="" && file_exists ("images/".$myrow["Фото"]))
    {
        $img_path='images/'.$myrow["Фото"];
        $max_width = 350;
        $max_height = 215;
        list($width, $height) = getimagesize($img_path);
        $ratioh = $max_height/$height;
        $ratiow = $max_width/$width;
        $ratio = min($ratioh, $ratiow);
        $width = intval($ratio*$width);
        $height = intval($ratio*$height);
    }
    else{
        $img_path="images/Закуски/no-image.jpg";
        $width = 350;
        $height = 215;
    }

    echo '
    <div class="col-md-4 text-center">
    <div class="menu-wrap">
    <div class="text text-center pt-4">
    <div class="block_images_grid">
	<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'""/>
	</br></br>
    <h3>'.$myrow["Название"].'</h3>
    <p>'.$myrow["Описание"].'</p>
    <p>Вес: '.$myrow["Вес"].'</p>
    <p class="price"><span>'.$myrow["Цена"].' руб</span></p>
    <p><a class="btn btn-primary btn-outline-primary" tid="'.$myrow["Код блюда"].'">Добавить в корзину</a></p>
</div>
</div>
';
echo '
</div>
</div>';
}
while($myrow=mysqli_fetch_array($result));
?>
</div>
</div>
<div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
<div class="row">
<?php
// Запрос и вывод записей
$result = mysqli_query($link,"SELECT * FROM `блюда` INNER JOIN `Категории`ON `блюда`.`Код категории` = `категории`.`Код категории` WHERE `блюда`.`Код категории` = 5");
$myrow = mysqli_fetch_array($result);
do
{
    if ($myrow["Фото"] !="" && file_exists ("images/".$myrow["Фото"]))
    {
        $img_path='images/'.$myrow["Фото"];
        $max_width = 350;
        $max_height = 215;
        list($width, $height) = getimagesize($img_path);
        $ratioh = $max_height/$height;
        $ratiow = $max_width/$width;
        $ratio = min($ratioh, $ratiow);
        $width = intval($ratio*$width);
        $height = intval($ratio*$height);
    }
    else{
        $img_path="images/Овощи/no-image.jpg";
        $width = 350;
        $height = 215;
    }

    echo '
    <div class="col-md-4 text-center">
    <div class="menu-wrap">
    <div class="text text-center pt-4">
    <div class="block_images_grid">
    <img src="'.$img_path.'" width="'.$width.'" height="'.$height.'""/>
    </br></br>
    <h3>'.$myrow["Название"].'</h3>
    <p>'.$myrow["Описание"].'</p>
    <p>Вес: '.$myrow["Вес"].'</p>
    <p class="price"><span>'.$myrow["Цена"].' руб</span></p>
    <p><a class="btn btn-primary btn-outline-primary" tid="'.$myrow["Код блюда"].'">Добавить в корзину</a></p>
</div>
</div>
';
echo '
</div>
</div>';
}
while($myrow=mysqli_fetch_array($result));
?>
</div>
</div>
<div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
<div class="row">
<?php
// Запрос и вывод записей
$result = mysqli_query($link,"SELECT * FROM `блюда` INNER JOIN `Категории`ON `блюда`.`Код категории` = `категории`.`Код категории` WHERE `блюда`.`Код категории` = 6");
$myrow = mysqli_fetch_array($result);
do
{
    if ($myrow["Фото"] !="" && file_exists ("images/".$myrow["Фото"]))
    {
        $img_path='images/'.$myrow["Фото"];
        $max_width = 350;
        $max_height = 215;
        list($width, $height) = getimagesize($img_path);
        $ratioh = $max_height/$height;
        $ratiow = $max_width/$width;
        $ratio = min($ratioh, $ratiow);
        $width = intval($ratio*$width);
        $height = intval($ratio*$height);
    }
    else{
        $img_path="images/Салаты/no-image.jpg";
        $width = 350;
        $height = 215;
    }

    echo '
    <div class="col-md-4 text-center">
    <div class="menu-wrap">
    <div class="text text-center pt-4">
    <div class="block_images_grid">
	<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'""/>
	</br></br>
    <h3>'.$myrow["Название"].'</h3>
    <p>'.$myrow["Описание"].'</p>
    <p>Вес: '.$myrow["Вес"].'</p>
    <p class="price"><span>'.$myrow["Цена"].' руб</span></p>
    <p><a class="btn btn-primary btn-outline-primary" tid="'.$myrow["Код блюда"].'">Добавить в корзину</a></p>
</div>
</div>
';
echo '
</div>
</div>';
}
while($myrow=mysqli_fetch_array($result));
?>
</div>
</div>
<div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
<div class="row">
<?php
// Запрос и вывод записей
$result = mysqli_query($link,"SELECT * FROM `блюда` INNER JOIN `Категории`ON `блюда`.`Код категории` = `категории`.`Код категории` WHERE `блюда`.`Код категории` = 7");
$myrow = mysqli_fetch_array($result);
do
{
    if ($myrow["Фото"] !="" && file_exists ("images/".$myrow["Фото"]))
    {
        $img_path='images/'.$myrow["Фото"];
        $max_width = 350;
        $max_height = 215;
        list($width, $height) = getimagesize($img_path);
        $ratioh = $max_height/$height;
        $ratiow = $max_width/$width;
        $ratio = min($ratioh, $ratiow);
        $width = intval($ratio*$width);
        $height = intval($ratio*$height);
    }
    else{
        $img_path="images/Супы/no-image.jpg";
        $width = 350;
        $height = 215;
    }

    echo '
    <div class="col-md-4 text-center">
    <div class="menu-wrap">
    <div class="text text-center pt-4">
    <div class="block_images_grid">
	<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'""/>
	</br></br>
    <h3>'.$myrow["Название"].'</h3>
    <p>'.$myrow["Описание"].'</p>
    <p>Вес: '.$myrow["Вес"].'</p>
    <p class="price"><span>'.$myrow["Цена"].' руб</span></p>
    <p><a class="btn btn-primary btn-outline-primary" tid="'.$myrow["Код блюда"].'">Добавить в корзину</a></p>
</div>
</div>
';
echo '
</div>
</div>';
}
while($myrow=mysqli_fetch_array($result));
?>
</div>
</div>
<div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">
<div class="row">
<?php
// Запрос и вывод записей
$result = mysqli_query($link,"SELECT * FROM `блюда` INNER JOIN `Категории`ON `блюда`.`Код категории` = `категории`.`Код категории` WHERE `блюда`.`Код категории` = 8");
$myrow = mysqli_fetch_array($result);
do
{
    if ($myrow["Фото"] !="" && file_exists ("images/".$myrow["Фото"]))
    {
        $img_path='images/'.$myrow["Фото"];
        $max_width = 350;
        $max_height = 215;
        list($width, $height) = getimagesize($img_path);
        $ratioh = $max_height/$height;
        $ratiow = $max_width/$width;
        $ratio = min($ratioh, $ratiow);
        $width = intval($ratio*$width);
        $height = intval($ratio*$height);
    }
    else{
        $img_path="images/Паста/no-image.jpg";
        $width = 350;
        $height = 215;
    }

    echo '
    <div class="col-md-4 text-center">
    <div class="menu-wrap">
    <div class="text text-center pt-4">
    <div class="block_images_grid">
	<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'""/>
	</br></br>
    <h3>'.$myrow["Название"].'</h3>
    <p>'.$myrow["Описание"].'</p>
    <p>Вес: '.$myrow["Вес"].'</p>
    <p class="price"><span>'.$myrow["Цена"].' руб</span></p>
    <p><a class="btn btn-primary btn-outline-primary" tid="'.$myrow["Код блюда"].'">Добавить в корзину</a></p>
</div>
</div>
';
echo '
</div>
</div>';
}
while($myrow=mysqli_fetch_array($result));
?>
</div>
</div>
<div class="tab-pane fade" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-8-tab">
<div class="row">
<?php
// Запрос и вывод записей
$result = mysqli_query($link,"SELECT * FROM `блюда` INNER JOIN `Категории`ON `блюда`.`Код категории` = `категории`.`Код категории` WHERE `блюда`.`Код категории` = 9");
$myrow = mysqli_fetch_array($result);
do
{
    if ($myrow["Фото"] !="" && file_exists ("images/".$myrow["Фото"]))
    {
        $img_path='images/'.$myrow["Фото"];
        $max_width = 350;
        $max_height = 215;
        list($width, $height) = getimagesize($img_path);
        $ratioh = $max_height/$height;
        $ratiow = $max_width/$width;
        $ratio = min($ratioh, $ratiow);
        $width = intval($ratio*$width);
        $height = intval($ratio*$height);
    }
    else{
        $img_path="images/Мясо/no-image.jpg";
        $width = 320;
        $height = 215;
    }

    echo '
    <div class="col-md-4 text-center">
    <div class="menu-wrap">
    <div class="text text-center pt-4">
    <div class="block_images_grid">
	<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'""/>
	</br></br>
    <h3>'.$myrow["Название"].'</h3>
    <p>'.$myrow["Описание"].'</p>
    <p>Вес: '.$myrow["Вес"].'</p>
    <p class="price"><span>'.$myrow["Цена"].' руб</span></p>
    <p><a class="btn btn-primary btn-outline-primary" tid="'.$myrow["Код блюда"].'">Добавить в корзину</a></p>
</div>
</div>
';
echo '
</div>
</div>';
}
while($myrow=mysqli_fetch_array($result));
?>
</div>
</div>
<div class="tab-pane fade" id="v-pills-9" role="tabpanel" aria-labelledby="v-pills-9-tab">
<div class="row">
<?php
// Запрос и вывод записей
$result = mysqli_query($link,"SELECT * FROM `блюда` INNER JOIN `Категории`ON `блюда`.`Код категории` = `категории`.`Код категории` WHERE `блюда`.`Код категории` = 11");
$myrow = mysqli_fetch_array($result);
do
{
    if ($myrow["Фото"] !="" && file_exists ("images/".$myrow["Фото"]))
    {
        $img_path='images/'.$myrow["Фото"];
        $max_width = 350;
        $max_height = 215;
        list($width, $height) = getimagesize($img_path);
        $ratioh = $max_height/$height;
        $ratiow = $max_width/$width;
        $ratio = min($ratioh, $ratiow);
        $width = intval($ratio*$width);
        $height = intval($ratio*$height);
    }
    else{
        $img_path="images/Десерты/no-image.jpg";
        $width = 320;
        $height = 215;
    }

    echo '
    <div class="col-md-4 text-center">
    <div class="menu-wrap">
    <div class="text text-center pt-4">
    <div class="block_images_grid">
	<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'""/>
	</br></br>
    <h3>'.$myrow["Название"].'</h3>
    <p>'.$myrow["Описание"].'</p>
    <p>Вес: '.$myrow["Вес"].'</p>
    <p class="price"><span>'.$myrow["Цена"].' руб</span></p>
    <p><a class="btn btn-primary btn-outline-primary" tid="'.$myrow["Код блюда"].'">Добавить в корзину</a></p>
</div>
</div>
';
echo '
</div>
</div>';
}
while($myrow=mysqli_fetch_array($result));
?>
</div>
</div>
<div class="tab-pane fade" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10-tab">
<div class="row">
<?php
// Запрос и вывод записей
$result = mysqli_query($link,"SELECT * FROM `блюда` INNER JOIN `Категории`ON `блюда`.`Код категории` = `категории`.`Код категории` WHERE `блюда`.`Код категории` = 12");
$myrow = mysqli_fetch_array($result);
do
{
    if ($myrow["Фото"] !="" && file_exists ("images/".$myrow["Фото"]))
    {
        $img_path='images/'.$myrow["Фото"];
        $max_width = 350;
        $max_height = 215;
        list($width, $height) = getimagesize($img_path);
        $ratioh = $max_height/$height;
        $ratiow = $max_width/$width;
        $ratio = min($ratioh, $ratiow);
        $width = intval($ratio*$width);
        $height = intval($ratio*$height);
    }
    else{
        $img_path="images/Роллы/no-image.jpg";
        $width = 320;
        $height = 215;
    }

    echo '
    <div class="col-md-4 text-center">
    <div class="menu-wrap">
    <div class="text text-center pt-4">
    <div class="block_images_grid">
	<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'""/>
	</br></br>
	<h3>'.$myrow["Название"].'</h3>
    <p>'.$myrow["Описание"].'</p>
    <p>Вес: '.$myrow["Вес"].'</p>
    <p class="price"><span>'.$myrow["Цена"].' руб</span></p>
    <p><a class="btn btn-primary btn-outline-primary" tid="'.$myrow["Код блюда"].'">Добавить в корзину</a></p>
</div>
</div>
';
echo '
</div>
</div>';
}
while($myrow=mysqli_fetch_array($result));
?>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>	      
</section>


    <footer class="ftco-footer ftco-section img">
		<div class="overlay"></div>
		<div class="container">
		  <div class="row mb-5">
			<div class="col-lg-3 col-md-6 mb-5 mb-md-5">
			  <div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2">О нас</h2>
				<p>BREVIS — то место, где каждый гость сможет найти свой источник наслаждения.</p>
				<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
				  <li class="ftco-animate"><a href="https://vk.com/brevisbar"><span class="icon-vk"></span></a></li>
				  <li class="ftco-animate"><a href="https://www.youtube.com/user/ValeryVegas/featured?view_as=subscriber"><span class="icon-youtube"></span></a></li>
				  <li class="ftco-animate"><a href="https://www.instagram.com/brevis_bar_vitebsk/"><span class="icon-instagram"></span></a></li>
				</ul>
			  </div>
			</div>
			<div class="col-lg-4 col-md-6 mb-5 mb-md-5">
			 
			</div>
			<div class="col-lg-2 col-md-6 mb-5 mb-md-5">
			   <div class="ftco-footer-widget mb-4 ml-md-4">
				<h2 class="ftco-heading-2">Наши услуги</h2>
				<ul class="list-unstyled">
				  <li><a href="#" class="py-2 d-block">Авторская кухня</a></li>
				  <li><a href="#" class="py-2 d-block">Доставка</a></li>
				  <li><a href="#" class="py-2 d-block">Свежая выпечка</a></li>
				  <li><a href="#" class="py-2 d-block">Банкетный зал</a></li>
				</ul>
			  </div>
			</div>
			<div class="col-lg-3 col-md-6 mb-5 mb-md-5">
			  <div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2">Есть вопросы?</h2>
				<div class="block-23 mb-3">
				  <ul>
					<li><span class="icon icon-map-marker"></span><span class="text">Республика Беларусь, г. Витебск, Проезд Гоголя 11</span></li>
					<li><a href="#"><span class="icon icon-phone"></span><span class="text">8-0212-64-81-81</span></a></li>
					<li><a href="#"><span class="icon icon-envelope"></span><span class="text">brevisBar@gmail.com</span></a></li>
				  </ul>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-md-12 text-center">
	
			  <p> Все права защищены | Brevis Bar <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">littlefoxjoelle &copy; <script>document.write(new Date().getFullYear());</script></a></p>
			</div>
		  </div>
		</div>
	  </footer>
	  
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
	
	
	
	  <script src="js/jquery.min.js"></script>
	  <script src="js/jquery-migrate-3.0.1.min.js"></script>
	  <script src="js/popper.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/jquery.easing.1.3.js"></script>
	  <script src="js/jquery.waypoints.min.js"></script>
	  <script src="js/jquery.stellar.min.js"></script>
	  <script src="js/owl.carousel.min.js"></script>
	  <script src="js/jquery.magnific-popup.min.js"></script>
	  <script src="js/aos.js"></script>
	  <script src="js/jquery.animateNumber.min.js"></script>
	  <script src="js/bootstrap-datepicker.js"></script>
	  <script src="js/jquery.timepicker.min.js"></script>
	  <script src="js/scrollax.min.js"></script>
	  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	  <script src="js/google-map.js"></script>
	  <script src="js/main.js"></script>
    <script src="js/shop-script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
	</body>
	</html>