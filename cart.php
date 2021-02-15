<?php 
session_start();
ob_start();
include("dbconnect.php");
$id = $_GET["id"];
$action = $_GET["action"];
    switch ($action)
    {
        case 'delete':
             $delete = mysqli_query($link,"DELETE FROM `корзина` WHERE `Код корзины`= '$id' AND `cart_ip`= '{$_SERVER['REMOTE_ADDR']}'");
        break;
    }

    if (isset($_POST["submitdata"]))
    {
        $_SESSION["order_delivery"] = $_POST["order_delivery"];
        $_SESSION["order_f"] = $_POST["order_f"];
        $_SESSION["order_i"] = $_POST["order_i"];
        $_SESSION["order_o"] = $_POST["order_o"];
        $_SESSION["order_email"] = $_POST["order_email"];
        $_SESSION["order_phone"] = $_POST["order_phone"];
        $_SESSION["order_adress"] = $_POST["order_adress"];
        $_SESSION["order_note"] = $_POST["order_note"];

        header("Location: cart.php?action=completion");
        ob_end_flush();
    }
    $result = mysqli_query($link,"SELECT * FROM `корзина`,`блюда` WHERE `корзина`.`cart_ip`= '{$_SERVER['REMOTE_ADDR']}' AND `блюда`.`Код блюда` = `корзина`.`Код товара`");
    if (mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_array($result);
        do
        {
            $int = $int + ($row["Общая стоимость"] * $row["Количество"]);          
        }
        while ($row = mysqli_fetch_array($result));
        $itogpricecart = $int;
    }
    

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">
    <title>Brevis Bar</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
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
          <li class="nav-item"><a href="shop.php" class="nav-link">Заказать</a></li>
				  <li class="nav-item"><a href="about.html" class="nav-link">О нас</a></li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="contact.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Контакты</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="contact.html">Контакты</a>
          <a class="dropdown-item" href="ecoglade_ferma.html">ECO GLADE. Гидропоника</a>
          <a class="dropdown-item" href="fc_brevis.html">ФК "Бревис"</a>
        </div>
      </li>
        </li>
				  <li class="nav-item cart"><a href="cart.php" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a></li>
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
            	<h1 class="mb-3 mt-5 bread">Корзина</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Главная</a></span> <span>Корзина</span></p>
            </div>
          </div>
        </div>
  </div>
</section>

<section class="ftco-section ftco-cart">
<div class="container">
<div class="row">
<div class="col-md-12 ftco-animate">
<?php
$action = $_GET["action"];
switch ($action){
    case 'oneclick':

        echo '
        <div class="container">
        <div class="row col-sm-12 text-center">
        <div class="col-sm">
        <a href="cart.php?action=oneclick" class="b">1. Корзина</a>
        </div>

        <div class="col-sm">
        <a href="cart.php?action=confirm" class="b">2. Контактная информация</a>
        </div>

        <div class="col-sm">
        <a href="cart.php?action=completion" class="b">3. Завершение</a>
        </div>
        </div>
        </div>
        ';

        $result = mysqli_query($link,"SELECT * FROM `корзина`,`блюда` WHERE `корзина`.`cart_ip`= '{$_SERVER['REMOTE_ADDR']}' AND `блюда`.`Код блюда` = `корзина`.`Код товара`");
        if (mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_array($result);
            
                echo '<div class="container">
				        <div class="row">
    			            <div class="col-md-12 ftco-animate">
    				            <div class="table-responsive">
	    				            <table class="table table-bordered">
						                <thead class="thead-primary">
                                         <tr class="text-center">
                                         <div class="col-sm-4">
                                         <th>Блюдо</th>
                                         </div>
                                         <div class="col-sm-2">
                                         <th>Название</th>
                                         </div>
                                         <div class="col-sm-2">
                                         <th>Цена</th>
                                         </div>
                                         <div class="col-sm-3">
                                         <th>Количество</th>
                                         </div>
                                         <div class="col-sm-1">
                                         <th>&nbsp;</th>
                                         </div>
						                </tr>
                           </thead>
                           <tbody>
                            ';
            do
            {
                $int = $row["Общая стоимость"] * $row["Количество"];
                $all_price = $all_price + $int;

                if(strlen($row["Фото"]) > 0 && file_exists("images/".$row["Фото"]))
                {
                    $img_path = 'images/'.$row["Фото"];
                    $max_width = 250;
                    $max_height = 325;
                    list($width, $height) = getimagesize($img_path);
                    $ratioh = $max_height/$height;
                    $ratiow = $max_width/$width;
                    $ratio = min($ratioh, $ratiow);

                    $width = intval($ratio*$width);
                    $height = intval($ratio*$height);
                }
                else
                {
                    $img_path="images/no-image.jpg";
                    $max_width = 250;
                    $max_height = 325;
                }
                echo '
                
                <div class="container">
				          <div class="row">
                    <div class="col-md-12 ftco-animate">
                    <tr class="text-center">
                        <div class="col-sm-4"> 
                            <td class="image-prod">
                              <img class="img-thumbnail" src="'.$img_path.'" width="'.$width.'" height="'.$height.'"/>
                           </td>
                        </div>
                        <div class="col-sm-2">	
                            <td class="price">'.$row["Название"].'</td>
                        </div>
                        <div class="col-sm-2"> 
                            <td class="price">'.$row["Цена"].' руб.</td>
                        </div>
                         <div class="col-sm-3"> 
                            
                            <td class="price">
                            <p align="center" iid="'.$row["Код корзины"].'" class="count-plus">+</p>
                            <p align="center"><input id="input-id'.$row["Код корзины"].'" iid="'.$row["Код корзины"].'" class="form-control count-input" maxlength="3" type="text" value="'.$row["Количество"].'" /></p>
                            <p align="center" iid="'.$row["Код корзины"].'" class="count-minus">-</p>
                            </td>
                            
                           
                         </div>
                        <div class="col-sm-1">
                            <td class="product-remove"><a href="cart.php?id='.$row["Код корзины"].'&action=delete"><span class="icon-close"></span></a></td> 
                        </div>
                    </tr>
                  </div>
                    
                
                
            ';
            
            }
            while ($row = mysqli_fetch_array($result));
            echo '
            </div>
            </div>
            </tbody>
            </table>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </section>
            <div class="container">
				          <div class="row">
                    <div class="col-md-12">
            <p><h2 class="itog-price" align="right">Итого: <strong>'.$all_price.' руб</strong></h2></p>
            <p align="right"><a class="btn btn-primary btn-outline-primary" href="cart.php?action=confirm">Далее</a></p>
                    </div>
                 </div>
            </div>
            ';
        }
        else
        {
            echo '<div class="container">
                    <div class="row">
                        <div class="col-md-12 ftco-animate">
                            <h3 align="center">Корзина пуста</h3>
                        </div>
                    </div>
                </div>';
        }
        
        
    break;

    case 'confirm':

        echo '
        <div class="container">
        <div class="row col-sm-12 text-center">
        <div class="col-sm">
        <a href="cart.php?action=oneclick" class="b">1. Корзина</a>
        </div>

        <div class="col-sm">
        <a href="cart.php?action=confirm" class="b">2. Контактная информация</a>
        </div>

        <div class="col-sm">
        <a href="cart.php?action=completion" class="b">3. Завершение</a>
        </div>
        </div>
        </div>
        
        ';

        $chck = "";
        if ($_SESSION['order_delivery'] == "Курьером") $chck2 = "checked";
        if ($_SESSION['order_delivery'] == "Самовывоз") $chck3 = "checked";

        echo '
        <div class="block-list-confirm">
        <h3 class="title-h3">Способы доставки:</h3>
        <form method="post">
        <ul id="info-radio">

        <li><input type="radio" name="order_delivery" class="order_delivery" id="order_delivery2" value="Курьером" '.$chck2.'>
        <label class="label_delivery" for="order_delivery2">Курьером</label></li>

        <li><input type="radio" name="order_delivery" class="order_delivery" id="order_delivery3" value="Самовывоз" '.$chck3.'>
        <label class="label_delivery" for="order_delivery3">Самовывоз</label></li>

        </ul>

        <h3 class="title-h3">Информация для доставки: </h3>
        <ul id="info-order">';
        if (!$_SESSION['user'])
        {
            echo '
            <li><label for="order_f"><span class="star2">*</span>Фамилия</label><input type="text" name="order_f" id="order_f" value="'.$_SESSION["order_f"].'"></li>
            <li><label for="order_i"><span class="star2">*</span>Имя</label><input type="text" name="order_i" id="order_i" value="'.$_SESSION["order_i"].'"></li>
            <li><label for="order_o"><span class="star2">*</span>Отчество</label><input type="text" name="order_o" id="order_o" value="'.$_SESSION["order_o"].'"></li>
            <li><label for="order_email"><span class="star2">*</span>Email</label><input type="text" name="order_email" id="order_email" value="'.$_SESSION["order_email"].'"></li>
            <li><label for="order_phone"><span class="star2">*</span>Телефон</label><input type="text" name="order_phone" id="order_phone" value="'.$_SESSION["order_phone"].'"><script>
            $(function(){
                $("#order_phone").mask("+375(99) 999-99-99");
            });
            </script></li>
            <li><label class="order_label_style" for="order_adress"><span class="star2">*</span>Адрес</label><input type="text" name="order_adress" id="order_adress" value="'.$_SESSION["order_adress"].'"></li>
            ';
        }

        echo'
        <li><label class="order_label_style" for="order_note">Пожелания к заказу</label><textarea name="order_note">'.$_SESSION["order_note"].'</textarea></li>
        </ul>
        <p align="right"><input type="submit" name="submitdata" class="btn btn-primary btn-outline-primary" id="confirm-button-next" value="Далее"></p>
        </form>
        </div>
        </div>
        ';
        

    break;

    case 'completion':

        echo '
        <div class="container">
        <div class="row col-sm-12 text-center">
        <div class="col-sm">
        <a href="cart.php?action=oneclick" class="b">1. Корзина</a>
        </div>

        <div class="col-sm">
        <a href="cart.php?action=confirm" class="b">2. Контактная информация</a>
        </div>

        <div class="col-sm">
        <a href="cart.php?action=completion" class="b">3. Завершение</a>
        </div>
        </div>
        </div>
        <p class="button-complete" onClick="print()"><a href="#">Печать</a></p>
        ';

        if ($_SESSION['user'])
        {
            echo '
            <div class="block-list-completion">
            <ul id="list-info">
            <li><strong>Способ доставки:</strong>'.$_SESSION['order_delivery'].'</li>
            <li><strong>Email:</strong>'.$_SESSION['reg_email'].'</li>
            <li><strong>Фамилия:</strong>'.$_SESSION['order_f'].'</li>
            <li><strong>Имя:</strong>'.$_SESSION['order_i'].'</li>
            <li><strong>Отчество:</strong>'.$_SESSION['order_o'].'</li>
            <li><strong>Адрес доставки:</strong>'.$_SESSION['order_adress'].'</li>
            <li><strong>Телефон:</strong>'.$_SESSION['order_phone'].'</li>
            <li><strong>Примечание:</strong>'.$_SESSION['order_note'].'</li>

            </ul>
            <p><h2 class="itog-price" align="right">Итого: <strong>'.$itogpricecart.' руб</strong></h2></p>
            <p class="button-complete"><a href="#">Оплатить</a></p>
            </div>
            ';

        }
        else{
            echo '
            <div class="block-list-completion">
            <ul id="list-info">
            <li><strong>Способ доставки:</strong>'.$_SESSION['order_delivery'].'</li>
            <li><strong>Email:</strong>'.$_SESSION['order_email'].'</li>
            <li><strong>Фамилия:</strong>'.$_SESSION['order_f'].'</li>
            <li><strong>Имя:</strong>'.$_SESSION['order_i'].'</li>
            <li><strong>Отчество:</strong>'.$_SESSION['order_o'].'</li>
            <li><strong>Адрес доставки:</strong>'.$_SESSION['order_adress'].'</li>
            <li><strong>Телефон:</strong>'.$_SESSION['order_phone'].'</li>
            <li><strong>Примечание:</strong>'.$_SESSION['order_note'].'</li>
            </ul>
            <p><h2 class="itog-price" align="right">Итого: <strong>'.$itogpricecart.' руб</strong></h2></p>
            <p class="button-complete"><a href="#">Оплатить</a></p>
            </div>
            </div>
            ';
        }

    break;

    default:
    
    echo '
    <div class="container">
    <div class="row col-sm-12 text-center">
    <div class="col-sm">
    <a href="cart.php?action=oneclick" class="b">1. Корзина</a>
    </div>

    <div class="col-sm">
    <a href="cart.php?action=confirm" class="b">2. Контактная информация</a>
    </div>

    <div class="col-sm">
    <a href="cart.php?action=completion" class="b">3. Завершение</a>
    </div>
    </div>
    </div>
    ';

    $result = mysqli_query($link,"SELECT * FROM `корзина`,`блюда` WHERE `корзина`.`cart_ip`= '{$_SERVER['REMOTE_ADDR']}' AND `блюда`.`Код блюда` = `корзина`.`Код товара`");
    if (mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_array($result);
        
            echo '<div class="container">
            <div class="row">
                  <div class="col-md-12 ftco-animate">
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead class="thead-primary">
                                     <tr class="text-center">
                                     <div class="col-sm-4">
                                     <th>Блюдо</th>
                                     </div>
                                     <div class="col-sm-2">
                                     <th>Название</th>
                                     </div>
                                     <div class="col-sm-2">
                                     <th>Цена</th>
                                     </div>
                                     <div class="col-sm-3">
                                     <th>Количество</th>
                                     </div>
                                     <div class="col-sm-1">
                                     <th>&nbsp;</th>
                                     </div>
                        </tr>
                       </thead>
                       <tbody>
                        ';
        do
        {
            $int = $row["Общая стоимость"] * $row["Количество"];
            $all_price = $all_price + $int;

            if(strlen($row["Фото"]) > 0 && file_exists("images/".$row["Фото"]))
            {
                $img_path = 'images/'.$row["Фото"];
                $max_width = 250;
                $max_height = 325;
                list($width, $height) = getimagesize($img_path);
                $ratioh = $max_height/$height;
                $ratiow = $max_width/$width;
                $ratio = min($ratioh, $ratiow);
                $width = intval($ratio*$width);
                $height = intval($ratio*$height);
            }
            else
            {
                $img_path="images/no-image.jpg";
                $max_width = 250;
                $max_height = 325;
            }
            echo '
            <div class="container">
            <div class="row">
              <div class="col-md-12 ftco-animate">
              <tr class="text-center">
                  <div class="col-sm-4"> 
                      <td class="image-prod">
                        <img class="img-thumbnail" src="'.$img_path.'" width="'.$width.'" height="'.$height.'"/>
                     </td>
                  </div>
                  <div class="col-sm-2">	
                      <td class="price">'.$row["Название"].'</td>
                  </div>
                  <div class="col-sm-2"> 
                      <td class="price">'.$row["Цена"].' руб.</td>
                  </div>
                   <div class="col-sm-3"> 
                      
                      <td class="price">
                      <p align="center" iid="'.$row["Код корзины"].'" class="count-plus">+</p>
                      <p align="center"><input id="input-id'.$row["Код корзины"].'" iid="'.$row["Код корзины"].'" class="form-control count-input" maxlength="3" type="text" value="'.$row["Количество"].'" /></p>
                      <p align="center" iid="'.$row["Код корзины"].'" class="count-minus">-</p>
                      </td>
                      
                     
                   </div>
                  <div class="col-sm-1">
                      <td class="product-remove"><a href="cart.php?id='.$row["Код корзины"].'&action=delete"><span class="icon-close"></span></a></td> 
                  </div>
              </tr>
            </div>
              
          
          
      ';
      
      }
      while ($row = mysqli_fetch_array($result));
      echo '
      </div>
      </div>
      </tbody>
      </table>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </section>
      <div class="container">
            <div class="row">
              <div class="col-md-12">
      <p><h2 class="itog-price" align="right">Итого: <strong>'.$all_price.' руб</strong></h2></p>
      <p align="right"><a class="btn btn-primary btn-outline-primary" href="cart.php?action=confirm">Далее</a></p>
              </div>
           </div>
      </div>
      ';
  }
  else
  {
      echo '<div class="container">
              <div class="row">
                  <div class="col-md-12 ftco-animate">
                      <h3 align="center">Корзина пуста</h3>
                  </div>
              </div>
          </div>';
  }
  
  
break;
}
?>
  
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
  
</body>
</html>