<?php
  $lifetime=600;
  session_start();
  setcookie(session_name(),session_id(),time()+$lifetime);

if(!$_SESSION['u_username']){
    header('Location: news.php');
}

if($_SESSION['u_username'])

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
            <a class="nav-link js-scroll-trigger" href="news.php"><b>Скидки</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team"><b>О нас</b></a>
            
          </li>
             <?php
if(isset($_SESSION['u_username']))
{
  echo " <li class='nav-item'> <a class='nav-link js-scroll-trigger' href='#'>Hello,".$_SESSION['u_username']."</a></li>";
    echo "
          <li class='nav-item'>
           <a class='nav-link js-scroll-trigger' href='include/logout.php' name='logout' style='font-size:15px;'><b>Выйти</b></a>
           </li>";
}
else
{
echo
"
             
                        <li class='nav-item'><a class='nav-link js-scroll-trigger'  href='Signin.php'><b>Войти</b></a></li>
               
               
                    ";
}
?>
<?php
if(isset($_SESSION['u_username']))
if ($_SESSION['u_username'] == 'Admin') {
echo "<li class='nav-item'><a class='nav-link js-scroll-trigger' href='Adding.php'>Adding</a></li>";
}
?>
          
        </ul>
      </div>
    </div>
  </nav>





<form id="form" action="include/Adding.inc.php" method="post" enctype="multipart/form-data" style="margin-top: 90px;">
<div id="signup" class="adding" style="height:500px;">
	<h1 align="center" style="color: white;">Добавить Товар</h1>
    <hr id="log">
	
		
	<input id="ttitle" name="title" align="center">		
	</input>
	<label for="text"><b style="color: white;">Названия товара</b></label><br>
	<textarea name="text" id="ttext">		
	</textarea>
		<label for="file"><b style="color: white;">Производитель</b></label><br>
	        <input type="file" name="file" id="iimg"  placeholder="Photo" style="color: white;">
	         	<br/>
			<label for="author" ><b style="color: white;">Цена</b></label><br>
				<input id="author" name="author" align="center">	
	
	<div class="clearfix">
		<button type="reset" class="signbtn" style="color: black;">Очистить</button>
	      <button type="submit" name="submit" class="signbtn"  onclick="validation(document.getElementById('form'));">Добавить</button>
    </div>

</div>
</form>

<script>
    function validation(form){
    var error=false;
    var tt=form.title.value;
    var tx=form.ttext.value;
    var img=form.iimg.value;
    var aut=form.author.value;
    
    if(tt == ""){
        error = "The information is incomplete, you forgot something." ;
    }
    else if (tx == "" ){
        error = "The information is incomplete, you forgot something." ;
    }
    else if ( img == ""){
        error = "The information is incomplete, you forgot something." ;
    }
    else if (aut == "" ){
        error = "The information is incomplete, you forgot something." ;
    }
    if(error){
    alert(error); 
    }
    
    else{
    }
    } 
</script>

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
