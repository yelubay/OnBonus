<?php
  $lifetime=600;
  session_start();
  setcookie(session_name(),session_id(),time()+$lifetime);

date_default_timezone_set('Asia/Almaty'); 
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
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: gray;">
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
<div class="container" style="margin-top: 130px; margin-bottom: 90px;">
      <div class="row">
<?php
    include_once 'include/dbconnect.php';
    if($_REQUEST['submit']){
      $name = $_POST['name'];
      if(empty($name)){
  $make = '<h4>You must type a word to search!</h4>';
}else{
  $sql = "SELECT Title, Text, Image,Author FROM News WHERE Title LIKE '%$name%'";
    $result = mysqli_query($conn, $sql);
  
      while($row = mysqli_fetch_assoc($result)){
      echo '
 
        <div class="col-md-3 col-sm-6">
                    <a href="news1.php?q='.$row["Title"] .'" name="itemlink">
                    <img src="addimg/'.$row["Image"].'" class="img-fluid d-block mx-auto" name="newsimg" alt=""style="width: 250px;height: 250px;">
                          
                            <h4>'.$row["Title"].'</h4> </a> 
                            <h4>'.$row["Author"].'</h4>
                            
                              
                       </div>
                      

            ';
          }
        }
    
  }
?>
</div>
    
<footer style="margin-top: 130px; margin-bottom: 90px;">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright" style="font-size: 17px;">Copyright &copy; OnBonus 2019</span>
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
              <a href="#">87014568951</a>
            </li>
            <li class="list-inline-item">
              <a href="#"> Abaya 13</a>
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

