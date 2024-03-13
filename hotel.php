 <?php
$servername="localhost";
$username="root";
$password="";
$dbname="hotelwebsite";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die("connection failed:".$conn->connect_error);
}
else{
	echo "";
}
 $slider = "select * from slider "; 
    $result1 = ($conn->query($slider)); 
    //declare array to store the data of database 
    $row1 = [];  
  
    if ($result1->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row1 = $result1->fetch_all(MYSQLI_ASSOC);   
    }




 $litt = "select * from litt "; 
    $result2 = ($conn->query($litt)); 
    //declare array to store the data of database 
    $row2 = [];  
  
    if ($result2->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row2 = $result2->fetch_all(MYSQLI_ASSOC);   
    }



     $amer = "select * from amer "; 
    $result3 = ($conn->query($amer)); 
    //declare array to store the data of database 
    $row3 = [];  
  
    if ($result3->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row3 = $result3->fetch_all(MYSQLI_ASSOC);   
    }




     $hotel = "select * from hotel "; 
    $result4 = ($conn->query($hotel)); 
    //declare array to store the data of database 
    $row4 = [];  
  
    if ($result4->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row4 = $result4->fetch_all(MYSQLI_ASSOC);   
    }



    $dono = "select * from dono "; 
    $result5 = ($conn->query($dono)); 
    //declare array to store the data of database 
    $row = [];  
  
    if ($result5->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row = $result5->fetch_all(MYSQLI_ASSOC);   
    }



       $explore = "select * from explore "; 
    $result6 = ($conn->query($explore)); 
    //declare array to store the data of database 
    $row5 = [];  
  
    if ($result6->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row5 = $result6->fetch_all(MYSQLI_ASSOC);   
    }


       $explore1 = "select * from explore1 "; 
    $result7 = ($conn->query($explore1)); 
    //declare array to store the data of database 
    $row6 = [];  
  
    if ($result7->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row6 = $result7->fetch_all(MYSQLI_ASSOC);   
    }



        $explore2 = "select * from explore2 "; 
    $result8 = ($conn->query($explore2)); 
    //declare array to store the data of database 
    $row7 = [];  
  
    if ($result8->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row7 = $result8->fetch_all(MYSQLI_ASSOC);   
    }




         $explore3 = "select * from explore3 "; 
    $result9 = ($conn->query($explore3)); 
    //declare array to store the data of database 
    $row8 = [];  
  
    if ($result9->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row8 = $result9->fetch_all(MYSQLI_ASSOC);   
    }


            $hotelmap = "select * from hotelmap "; 
    $result10 = ($conn->query($hotelmap)); 
    //declare array to store the data of database 
    $row9 = [];  
  
    if ($result10->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row9 = $result10->fetch_all(MYSQLI_ASSOC);   
    }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HOTEL</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<style>
.button {
  width: 200px;
  height: 50px;
  padding-top: 10px;
  padding-bottom: 30px;
  text-align: center;
  color: #000;
  text-transform: uppercase;
  font-weight: 600;
  margin-left: 30px;
  margin-bottom: 30px;
  cursor: pointer;
  display: inline-block;
}

.button-1 {
  background-color: transparent;
  border: 3px solid #00d7c3;
  border-radius: 50px;
  -webkit-transition: all .15s ease-in-out;
  transition: all .15s ease-in-out;
  color: #00d7c3;
}
.button-1:hover {
  box-shadow: 0 0 10px 0 #00d7c3 inset, 0 0 20px 2px #00d7c3;
  border: 3px solid #00d7c3;
}





    HTML CSS 

    Result
    Skip Results Iframe

EDIT ON

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

* {
  font-family: Open Sans;
}

section {
  width: 100%;
  display: inline-block;
  background: #333;
  height: 50vh;
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  text-decoration: underline;
}

.footer-distributed{
  background: #666;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
  width: 40%;
}

/* The company logo */

.footer-distributed h3{
  color:  #ffffff;
  font: normal 36px 'Open Sans', cursive;
  margin: 0;
}

.footer-distributed h3 span{
  color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
  color:  #ffffff;
  margin: 20px 0 12px;
  padding: 0;
}

.footer-distributed .footer-links a{
  display:inline-block;
  line-height: 1.8;
  font-weight:400;
  text-decoration: none;
  color:  inherit;
}

.footer-distributed .footer-company-name{
  color:  #222;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
  width: 35%;
}

.footer-distributed .footer-center i{
  background-color:  #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p{
  display: inline-block;
  color: #ffffff;
  font-weight:400;
  vertical-align: middle;
  margin:0;
}

.footer-distributed .footer-center p span{
  display:block;
  font-weight: normal;
  font-size:14px;
  line-height:2;
}

.footer-distributed .footer-center p a{
  color:  lightseagreen;
  text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
  width: 20%;
}

.footer-distributed .footer-company-about{
  line-height: 20px;
  color:  #92999f;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span{
  display: block;
  color:  #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-distributed .footer-icons{
  margin-top: 25px;
}

.footer-distributed .footer-icons a{
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color:  #33383b;
  border-radius: 2px;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

  .footer-distributed{
    font: bold 14px sans-serif;
  }

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right{
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }

  .footer-distributed .footer-center i{
    margin-left: 0;
  }

}

Run Pen



</style>  
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color:azure;">
  <a class="navbar-brand" href="#"><img src="logo1.webp" width="auto" height="60px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><b>HOME</b><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><b>HOTELS</b></a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="#"><b>OFFER & PROGRAM</b></a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="#"><b>OUR BRANDS</b></a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="#"><b>REWARDS PROGRAM</b></a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="#"><b>CONTACT</b></a>
      </li>
  </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



 


	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  		     <?php
  foreach ($row1 as $value1) {
    ?>
    <?php
    if ($value1['id'] == 1) {
    ?>
    <div class="carousel-item active">
      <img src="image/<?php echo $value1['image']; ?>" class="d-block w-100" alt="..." width="100%"  height="auto">
    </div>
         <?php
    }
     else{
    ?>
    <div class="carousel-item">
      <img src="image/<?php echo $value1['image']; ?>" class="d-block w-100" alt="..." width="100%"  height="auto">
    </div>
           <?php
     }
    ?>
 
   <?php
  }
  ?>
  </div>
 <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
<br>


<!-- 
<h1>little america</h1> -->
<center><h1><b>LITTLE AMERICA</b></h1></center><br>
<div class="container">
  <div class="row">
       <?php
    foreach ($row2 as $value2){
       ?>
    <div class="col-md-3">
      <div class="card">
          <img src="image/<?php echo $value2['image']; ?>" class="d-block w-100" alt="..." width="100%" height="300px">
              </div><br>
    </div>
         <?php
}
?>
        </div>
</div><br>




<!-- 
<h1>america memories</h1> -->

<center><h1><b>AMERICA MEMORIES</b></h1></center><br>
<div class="container">
  <div class="row">
       <?php
    foreach ($row3 as $value3){
       ?>
    <div class="col-md-6">
      <div class="card">
          <img src="image/<?php echo $value3['image']; ?>" class="d-block w-100" alt="..." width="100%" height="300px">
              </div><br><br>
    </div>
         <?php
}
?>
        </div>
</div><br>




<!-- <h1>hotel deals in americs</h1> -->
<center><h1><b>HOTEL DEALS IN AMERICA</b></h1></center><br>
<div class="container">
  <div class="row">
       <?php
    foreach ($row4 as $value4){
       ?>
    <div class="col-md-3">
      <div class="card">
          <img src="image/<?php echo $value4['image']; ?>" class="d-block w-100" alt="..." width="100%" height="300px" style="border-radius: 10%;">
              </div><br><br>
    </div>
         <?php
}
?>
        </div>
</div><br>




<!-- <h1>DONO</h1> -->
<center><h1><b>HOTEL BLOG</b></h1></center><br>
<div class="container">
	<div class="row">
          <?php foreach ($row as $value) {
        ?>
		<div class="col-md-4">
			<div class="card">
				  <img src="image/<?php echo $value['image']; ?>" class="d-block w-100" alt="..." width="100%" height="400px">
				   <center><h5 class="card-title"><?php echo $value['title']?></center></h5>
                   <p class="card-text"><?php echo $value['newstext']?></p><br>
                    <button>Click me</button>
			</div><br>
		</div>
        <?php 
}
?>
	</div>
</div><br>





<!-- <h1>explore rooms suites</h1> -->
<center><h1><b>EXPLORE ROOMS SUITES</b></h1></center><br>
<div class="container">
	<div class="row">
      <?php
    foreach ($row5 as $value5){
      ?>
		<div class="col-md-6">
			<div class="card">
				 <img src="image/<?php echo $value5['image']; ?>" class="card-img-top" alt="..." height="390px">
			</div>
		</div>

		<div class="col-md-6">
			<h1><?php echo $value5['title'];  ?></h1><br>
			<p><?php echo $value5['newstext']; ?></p><br><br>

			  <div class="button button-1">LEARN MORE</div>
			</div>
      <?php 
}
      ?>
		</div>
	</div><br><br>





<!-- <h1>explore1</h1> -->
<div class="container">
	<div class="row">
      <?php
    foreach ($row6 as $value6){
      ?>
		<div class="col-md-6">
			<h1><?php echo $value6['title'];  ?></h1><br>
			<p><?php echo $value6['newstext']; ?></p><br><br>
      <div class="button button-1">LEARN MORE</div>
			
		</div>

		<div class="col-md-6">
			 <img src="image/<?php echo $value6['image']; ?>" class="card-img-top" alt="..." height="390px">
		</div>
      <?php 
}
      ?>
		</div>
	</div><br><br>





<!-- <h1>explore 2</h1> -->
<div class="container">
	<div class="row">
      <?php
    foreach ($row7 as $value7){
      ?>
		<div class="col-md-6">
			<div class="card">
				 <img src="image/<?php echo $value7['image']; ?>" class="card-img-top" alt="..." height="390px">
			</div>
		</div>

		<div class="col-md-6">
			<h1><?php echo $value7['title'];  ?></h1><br>
			<p><?php echo $value7['newstext']; ?></p><br><br>

			 <div class="button button-1">LEARN MORE</div>
			</div>
      <?php 
}
      ?>
		</div>
	</div><br><br>





<!-- <h1>explore 3</h1> -->
<div class="container">
	<div class="row">
      <?php
    foreach ($row8 as $value8){
      ?>
		<div class="col-md-6">
			<h1><?php echo $value8['title'];  ?></h1><br>
			<p><?php echo $value8['newstext']; ?></p><br><br>
      <div class="button button-1">LEARN MORE</div>
			
		</div>

		<div class="col-md-6">
			 <img src="image/<?php echo $value8['image']; ?>" class="card-img-top" alt="..." height="390px">
		</div>
      <?php 
}
      ?>
		</div>
	</div><br><br>






<!-- <h1>hotelmap</h1> -->
<center><h1><b>HOTEL PLAISE</b></h1></center><br>
	<div class="container">
  <div class="row">
       <?php
    foreach ($row9 as $value9){
       ?>
    <div class="col-md-12">
      <div class="card">
          <img src="image/<?php echo $value9['image']; ?>" class="d-block w-100" alt="..." width="100%" height="300px">
              </div><br><br>
    </div>
         <?php
}
?>
        </div>
</div><br>






  


<footer class="footer-distributed">

      <div class="footer-left">

        <h3>Company<span>logo</span></h3>
         <img src="logo1.webp" width="auto" height="50px">

        <p class="footer-links">
          <a href="#" class="link-1">Home</a>
          
          <a href="#">HOTELS</a>
        
          <a href="#">OFFER & PROGRAM</a>
        
          <a href="#">OUR BRANDS</a>
          
          <a href="#">REWARDS PROGRAM</a>
          
          <a href="#">CONTACT</a>
        </p>

        <p class="footer-company-name">Company Name © 2015</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+1.555.555.5555</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">support@company.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
          Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>





</body>
</html>