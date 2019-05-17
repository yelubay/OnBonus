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
          
        </ul>
      </div>
    </div>
  </nav>

    <div class="container">

  <h2 style="margin-top: 50px; font-size: 40px; "><b style="color: white;">Nike Hypervenom </b></h2>  
  <h2 style=" font-size: 40px;"><b style="color: white;">Phantom $2900</b></h2>
           
  <img src="images/merc.jpg" class="img-thumbnail" alt="Cinque Terre" width="800" height="700"> 
  <p style="font-size: 20px;margin-top: 20px; margin-bottom: 25px; color: white;">The Nike Hypervenom Phantom introduced several new features from other football boots at the time. It was made to replace the previous line, Nike Total 90 (T90), a line from Nike that has been around since 2000. This decision was met with mixed feelings, in which some say it is a good decision to replace the older line, and the others saying it was not a beneficial idea, as there were not many 'power' boots on the market.[5] The Hypervenom was launched in May 2013, with the Barcelona player, at the time, Neymar, the main poster boy for this new line. The launch colourway was black/bright citrus. All boots were made in Soft Ground (SG), Firm Ground (FG) varieties, with the SG version using removable studs. The upper of the first boot has a newly developed material of NikeSkin</p>
				        
										
</div>
<style type="text/css">
  body{
    background-color: black;
    color: white;
  }
</style>


       
    </div>  
</div>

<?php
include 'include/dbconnect.php';
include 'include/Comment.inc.php';

if(isset($_SESSION['u_username'])) {
    echo "<form method='POST' action='".setComments($conn)."'>
        <input type='hidden' name='usname' value='".$_SESSION['u_username']."'>
     
        <input type='hidden' name='time' value='".date('Y-m-d H:i:s')."'>
        <textarea name='message' id='comtext'></textarea><br>
        <button type='submit' name='commentSubmit' id='combutton'>Comment</button>
    </form>";
} else {
    echo "Please loged in<br><br>";
}


getComments($conn);

?>
<!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; OnBonus 2019</span>
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
