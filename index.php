<?php
  $lifetime=600;
  session_start();
  setcookie(session_name(),session_id(),time()+$lifetime);

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
            <a class="nav-link js-scroll-trigger" href="#"><b>Главная</b></a>
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

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in"></div>
        <div class="intro-heading text-uppercase"></div>
        
      </div>
    </div>
  </header>

  <!-- Services -->
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Как работает</h2>
          <h3 class="section-subheading text-muted">Этапы получение скидок на нашем сайте.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          
            <img class="mx-auto rounded-circle" src="img/reg1.png" alt="" style="width:150px;height: 150px;">
          
          <h4 class="service-heading">Регистрация</h4>
          <p class="text-muted">С начало вы должны создать аккаунт и полуить доступ к покупке товаров.</p>
        </div>
        <div class="col-md-4">
          
            <img class="mx-auto rounded-circle" src="img/mail.png" alt=""style="width:150px;height: 150px;">
          
          <h4 class="service-heading">Выбрать товары</h4>
          <p class="text-muted">Выберите товары которые вам нравиться и добавляйте их в вашу корзину.Купоны придут на ваш email.</p>
        </div>
        <div class="col-md-4">
          <img class="mx-auto rounded-circle" src="img/cup1.jpg" alt="" style="width:150px;height: 150px;">
          <h4 class="service-heading">Получение товара</h4>
          <p class="text-muted">После того как вы получили купон на вашу почту распечатайте его и купите товар по указонной скидке.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  

  <!-- Team -->
  <section class="bg-light" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Наша Команда</h2>
          <h3 class="section-subheading text-muted">Автор идеи и Разработчики сайта</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/Mad.jpg" alt="">
            <h4>Мадина Бокан</h4>
            <p class="text-muted">Дизайнер</p>
            
          </div>
        </div>
        <div class="col-sm-6">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/Aza.jpg" alt="">
            <h4>Елубай Азамат</h4>
            <p class="text-muted">Разработчик</p>
            
          </div>
        </div>
      
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">Нашу команду представляют  молодые и перспективные разработчики  </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/pert/nike1.png" alt=""style="width:150px;height: 150px;">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/pert/new1.jpg" alt=""style="width:150px;height: 150px;">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/pert/adidas.jpg" alt=""style="width:150px;height: 150px;">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/pert/sport.png" alt=""style="width:150px;height: 150px;">
          </a>
        </div>
      </div>
    </div>
  </section>

 

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
