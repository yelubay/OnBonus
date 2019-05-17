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
          </ul>
      </div>
    </div>
  </nav>


<?php
	if (!isset($_GET['Registration'])) {
	} else {
		$signUpCheck = $_GET['Registration'];

		if($signUpCheck == "empty"){
			 ?>
	  <script>
	  alert("empty");
	  </script>
	  <?php
		}
		elseif($signUpCheck == "invalidEmail"){
			 ?>
	  <script>
	  alert("invalid Email");
	  </script>
	  <?php
		}
		elseif($signUpCheck == "usernameAlreadyTaken"){
		 ?>
	  <script>
	  alert("usernameAlreadyTaken");
	  </script>
	  <?php
		}
		elseif($signUpCheck == "passwordError"){
			 ?>
	  <script>
	  alert("Incorrect login or password");
	  </script>
	  <?php
		}
		elseif($signUpCheck == "success"){
			echo "<p class = success> successfully!</p><br><br>";
		}
	}
?><div class="container"> </div>
<div class="container" style="margin-top: 80px; margin-bottom: 50px;">
<div id="signup" class="regg" style="height:450px;">
<form  id="form" action="include/SignUp.inc.php" method="POST">	
	<label style="color: white;"for="email" ><b>Email</b></label><br>
    <input type="text" placeholder="Введите Email" name="email" id="email" required>
	<br>
	<label style="color: white;"for="username"><b>Имя аккаунта</b></label><br>
    <input type="text" placeholder="Введите имя" name="username" id="username" required>
	<br>
    <label style="color: white;"for="psw"><b>Пароль</b></label><br>
    <input type="password" placeholder="Введите Пароль" name="psw" id="psw" required>
	<br>
    <label style="color: white;"for="pswrepeat"><b>Подтвердите Пароль</b></label><br>
    <input type="password" placeholder="Подтвердите Пароль" name="pswrepeat" id="pswrepeat" required>

	
	<div class="clearfix">
      <button type="reset" class="cancelbtn">Очистить</button>
      <button type="submit" name="submit" class="signbtn" onclick="validation(document.getElementById('form'));">Регистрация</button>
    </div>
	</form>

</div>
</div>

<script>
	function validation(form){
	var error=false;
	var name=form.fname.value;
	var sur=form.lname.value;
	var mail=form.email.value;
	var usname=form.username.value;
	var pass=form.psw.value;
	var rep=form.pswrepeat.value;
	
	if(name == ""){
		error = "Fill all text fields" ;
	}
	else if (sur == "" ){
		error = "Fill all text fields" ;
	}
	else if ( pass == ""){
		error = "Fill all text fields" ;
	}
	else if (mail == "" ){
		error = "Fill all text fields" ;
	}
	else if (usname == "" ){
		error = "Fill all text fields" ;
	}
	else if (rep == ""){
		error = "Fill all text fields" ;
	}
	if(error){
	alert(error); 
	}
	
	else{
		window.location="Registration.php"  
	}
	} 
</script>

</main>



</div>
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
}body{
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
</style>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
 <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span style="color: white;"class="copyright">Copyright &copy; OnBonus 2019</span>
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
