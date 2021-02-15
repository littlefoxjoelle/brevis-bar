<?php
session_start();    
ob_start();
include("dbconnect.php");
if ($_POST)
{
    $msqerror = "Заполните все поля!";
    $login = $_POST["input_login"];
    $pass = $_POST["input_pass"];
    $msqerror = "Заполните все поля!";
    if ($login && $pass)
    {
        $result = mysqli_query($link, "SELECT * FROM admin WHERE `Логин` = '$login' AND `Пароль` = '$pass'");
        if (mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_array($result);
            if ($_SESSION['auth_admin'] = 'yes_auth')
                {  
                 ob_end_clean(); 
                 header('Location: manager.php');
                 ob_end_flush();
                }
            }
                else{
                    $msqerror = "Неверный логин и (или) пароль!";
                }

        }
        else{
            $msqerror = "Заполните все поля!";
        }
    
}
?>
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
<title>Вход в панель управления</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form method="post">
                            <div class="form-group">
                                <label class="form-control-label">LOGIN</label>
                                <input type="text" class="form-control" name="input_login" id="input_login">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" class="form-control" i name="input_pass" id="input_pass">
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <?php 
                                    if ($msqerror)
                                    {
                                        echo '<p id="msqerror">'.$msqerror.'</p>';
                                    }
                                ?>
                            
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary" name="submit_enter">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
</div>
</body>
</html>