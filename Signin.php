<?php
  $lifetime=600;
  session_start();
  setcookie(session_name(),session_id(),time()+$lifetime);

if(isset($_SESSION['u_username']))
header('Location: index.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>OnBonus</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">OnBonus</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php"><b>Главная</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#"><b>Скидки</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php"><b>О нас</b></a>
            
          </li>
               <?php
if(isset($_SESSION['u_username']))
{
  
    echo "
            <li class='nav-item'>
           <a class='nav-link js-scroll-trigger' href='include/logout.php' name='logout' style='font-size:15px;'><b>Выйти</b></a>
          </li> ";
}
else
{
echo
"
             
                      <li class='nav-item'>  <a class='nav-link js-scroll-trigger' href='Signin.php'><b>Войти</b></a></li>
               
               
                    ";
}
?>
      </ul>
      </div>
    </div>
  </nav>         
    <?php
  if (!isset($_GET['login'])) {
  } else {
    $signUpCheck = $_GET['login'];

    if($signUpCheck == "empty"){
      echo "<p class='error'>Fill in all fields!</p>";
    }
    elseif($signUpCheck == "error"){
      ?>
    <script>
    alert("Incorrect login or password");
    </script>
    <?php
    }
  }
?>
<div class="container" style="margin-top: 90px; margin-bottom: 90px;">
      <div class="col-md-6">
         <div class="login-page">
          <h3 class="title" style="color: white;"><b>Первый раз у нас ?</b></h3>
          <p style="color: white;"> Тебе повезло, это лучший   сайт Казахстана 
          по продаже купонов.</p>
          <div class="button1">
             <a href="Registration.php" style="font-size: 25px; text-decoration: none;">Создать аккаунт</a>
           </div>
           <div class="clear"></div>
          </div>
        </div>
<div class="col-md-6" id='signup' >
  <div class="login-title">
    <div id="loginbox" class="loginbox">
<form action="include/SignIn.inc.php" method="POST" id='form'> 
 <fieldset class="input">
  <label style="color: white;"for=username><b>Имя аккаунта</b></label><br>
    <input type='text' placeholder='Введите Имя аккаунта' name='username'  id='email' required>
  <br>
    <label style="color: white;" for='psw'><b>Пароль</b></label><br>
    <input type='password' placeholder='Введите Пароль' name='psw' id='psw' required>
  
  
  <div class='clearfix'>
      <button type="reset" class='cancelbtn' >Отмена</button>
      <button type='submit' class='signbtn' name='submit'  onclick='validation(document.getElementById('form'));'>Войти</button>
    </div>
  </fieldset>
    </form>
  </div>
</div>
</div></div>


   <style type="text/css">
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
body{
  background-image:url("mac3.jpg");
}
input[type=text]:focus {
  border: 3px solid #555;
}
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=password]:focus {
  border: 3px solid #555;
}
  .cancelbtn{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 2px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.cancelbtn {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.cancelbtn:hover {
  background-color: #555555;
  color: white;
}
  .signbtn{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 2px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.signbtn {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.signbtn:hover {
  background-color: #555555;
  color: white;
}
</style>>
    <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright" style="color: white;">Copyright &copy; OnBonus 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Azamat Yelubay</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Madina Bokan</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
