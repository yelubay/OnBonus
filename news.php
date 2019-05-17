<?php
  $lifetime=600;
  session_start();
  setcookie(session_name(),session_id(),time()+$lifetime);

date_default_timezone_set('Asia/Almaty'); 
?>
<?php     
 $connect = mysqli_connect("localhost", "root", "", "azamat");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="news.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }




   
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="news.php"</script>';  
                }  
           }  
      }  
 }  
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
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: black;">
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

<script>
function getComment(){
  var title = document.getElementById("titlename").value;
if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();
}
xmlhttp.onreadystatechange=function(){
if(this.readyState==4 && this.status==200){
document.getElementById("comment-table").innerHTML=this.responseText;
}
}
xmlhttp.open("GET","include/getcomments.php?title="+title,true);
xmlhttp.send();
}

function postComment(){
var comment = document.getElementById("comtext").value;
var title = document.getElementById("titlename").value;
var user = document.getElementById("usname").value;
if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();
}
xmlhttp.onreadystatechange=function(){
if(this.readyState==4 && this.status==200){
}
}
xmlhttp.open("POST","include/postcomment.php?title="+title+"&comment="+comment+"&user="+user,true);
xmlhttp.send();
getComment();
}

window.onload = function(){
getComment();
}
</script>



<!-- Search -->
<div class="container">
<form action="search.php" class="form-inline mr-auto" method="POST" style="margin-top: 130px; margin-bottom: 20px;">
<tr>

  <td><input type="text" class="form-control mr-sm-2" name="name"  placeholder="Search"></td>
  <td><input type="submit" class="form-control" name="submit" value='Искать'></td>
</tr>
</form>
</div>


<!-- Фильтр -->
<div class="container">
<div class="row">
  <div class="col-md-3" >
     <h6>Цена</h6>
    <form action="money.php" method="POST" class="form-inline mr-auto">
     <select name="filter" class="form-control form-control-sm">
      
       <option value="All" >Все</option>
       <option value="N">0 - 1000</option>
       <option value="A">1000 - 2000</option>
       <option value="R">2000 и больше</option>

     </select>
<input type="submit" name="action" class="form-control mr-sm-2"/ value='Искать'>
    </form>
    </div>
<div class="col-md-3 " >
    
    <h6>Производитель</h6>
    <form action="app.php" method="POST" class="form-inline mr-auto">
     <select name="filter" class="form-control form-control-sm">
        
       <option value="All" >Все</option>
       <option value="N">Nike</option>
       <option value="A">Adidas</option>
       <option value="R">Reebok</option>

     </select>
    
     <input type="submit" name="action" class="form-control mr-sm-2"/ value='Искать'>
    </form>
  </div>
</div>
</div>
<!-- Продукты -->
<div class="container" style="margin-top: 100px; ">
       <div class="row">
       
<?php
  include_once 'include/dbconnect.php';
  $sql = "SELECT * FROM News ORDER BY News_ID DESC";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
   $v1 = 0;
 
  $v1 =$row["Author"]- $row["Author"]/10;
    
                          
                           
                          
    echo '
    

       
 <div class="col-md-3"style=" " >
<div class="hover01 column">

            <a href="news1.php?q='.$row["Title"] .'" name="itemlink">
            <figure>
          <img src="addimg/'.$row["Image"].'" alt="thumbnail" class="img-thumbnail" style="width: 180px;height: 180px;"/>

                          </div></figure>
                            <div class="text-block">
     <img src="img/sales.png"  style="width: 75px;height: 35px;"/>
  </div>
                          
                            <h4 style="color:black;font-size:20px;text-decoration:none;">'.$row["Title"].'</h4>
                            
                            </a>

                            
                  <h4 style="font-size:18px;"><span style="color:black;font-size:15px;opacity: 0.65; text-decoration:none;">Мужская обувь</span><span style="margin-left:12px;text-decoration:line-through; color:grey;opacity: 0.6;">$'.$row["Author"].'</span><span style="color:green;"> $'.$v1.' </span><span style="font-size:15px;"> </span></h4>
                                 <fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
                                 </div>

<style>
 @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label { margin: 0; padding: 0; }
body{ margin: 20px; }
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
 .text-block {
  position: absolute;
  top: 2px;
  left: 12px;

  padding-left: 2px;
  padding-right: 2px;
}
 
.hover01 figure img {
  -webkit-transform: scale(1);
  transform: scale(1);
  -webkit-transition: .3s ease-in-out;
  transition: .3s ease-in-out;
}
.hover01 figure:hover img {
  -webkit-transform: scale(1.3);
  transform: scale(1.3);
}</style>
                                 '
  
?>  

                              <form method="post" style="width: 90px;" action="news.php?action=add&id=<?php echo $row["News_ID"]; ?>" >
                              <input type="text" name="quantity" class="form-control" value="1" />  
                              <input type="hidden" name="hidden_name" value="<?php echo $row["Title"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["Author"]; ?>" /> 
                               <input type="submit" name="add_to_cart" style="margin-top:5px;width: 100px;" class="btn btn-success" value="Добавить" />  
                           

                         </form>



  <?php 
   ;
 }  ?>
   
</div>
    </div>
 <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  

                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>$ <?php echo $values["item_price"];  ?></td>  
                               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"]); ?></td>  
                               <td><a href="news.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td><input type="submit" name="azamat" style="margin-top:5px;width: 100px;" class="btn btn-success" value="Оплатить" /></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  

 
<footer>
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

