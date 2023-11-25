<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">    
    <!-- font awesome -->
   <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
     <!-- bootstrap css styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="resturantStyle.css">
            <!-- bootstrap scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <title>Tche Tche Café</title>
</head>
<body>
<?php 
include("db.php");
session_start();
$uname = $_SESSION['uname'];
$select = "SELECT * FROM users where username='$uname'";
$result = mysqli_query($conn, $select);
while($row = mysqli_fetch_assoc($result)){
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" id="Logo">DeArZoo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" style="text-align: center;">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Pricing</a>
                </li>
            </ul>
        </div>
        <div class="navbar-text" style="color: #ffffff; margin-right: 20px;">
            balance: $<?php echo $row["balance"];?>
        </div>
    </nav>
<?php }?>
<h2 style="text-align: center; margin-top: 5%;">Tche Tche Café </h2>
<img  class="logo" src="images/tche.jpeg" alt="2in1 logo">
<div class="container-fluid" id="first-section">
    <div class="row" >
        <div class="col-lg-4 box1">
            <p style="color:#0B666A"><i class="fa-solid fa-hand-holding-dollar  fa-2xl" style="padding-top:16px"></i></p>
            <p style="font-size: 1.5em;">Delivery Price</p>
            <h6> 1,000 IQD </h6>
        </div>
        <div class="col-lg-4 box1">
            <p style="color:#071952"><i class="fa-solid fa-motorcycle  fa-2xl"  style="padding-top:16px"></i></p>
            <p style="font-size: 1.5em;">Delivery Time</p>
            <h6> 7-12 min </h6>
             </div>
            <div class="col-lg-4 box1">
                <p style="color:#E64848"><i class="fa-solid fa-basket-shopping  fa-2xl"  style="padding-top:16px"></i></p>
                <p style="font-size: 1.5em;">Min. Order</p>
                <h6> 5,000 IQD </h6>
            </div>
            <div class="col-lg-4 box1">
                <p><i class="fa-solid fa-star  fa-2xl" style="padding-top:30px; color:#FFD700" ></i></p>
                <p style="font-size: 1.5em;">Rating</p>
                <h6> 4.5 </h6>
            </div>
        </div>
    </div>
         
    <div class="container-fluid" id="food-section">
        <h2 style="margin-left: 10%;" class="categories-heading">Chicken Sandwiches</h2>
                <div class="food-cards">
                    <a href="" class="link-danger">
                        <img class="img-fluid" id="sides" src="tcheimg/ChickenRoma.jpeg" alt="clickable image">
                        <p style="text-align: center;">Chicken Roma</p>
                        <button style= "margin: -5% 0 20% 10% ;" class="btn btn-outline-light" id="orderBtn">Order</button>
                    </a> 
                </div>
                <div class="food-cards">
                    <a href="" class="link-danger">
                        <img class="img-fluid" src="tcheimg/Shawrma.jpeg" alt="clickable image">
                        <p style="text-align: center;">Chicken Shawerma Sandwiche</p>
                        <button style= "margin: -5% 0 20% 10% ;" class="btn btn-outline-light" id="orderBtn">Order</button>
                    </a>
                </div>
            

                <h2 style="margin-left: 10%;" class="categories-heading">Beef Sandwiches</h2>
                <div class="food-cards">
                    <a href="" class="link-danger">
                        <img class="img-fluid" id="sides" src="tcheimg/Istanbul.jpeg" alt="clickable image">
                        <p style="text-align: center;">Istanbul Beef Sandwich </p>
                        <button style= "margin: -5% 0 20% 10% ;" class="btn btn-outline-light" id="orderBtn">Order</button>
                    </a>    
                </div>
                <div class="food-cards">
                    <a href="" class="link-danger">
                        <img class="img-fluid" src="tcheimg/Shawrma.jpeg" alt="clickable image">
                        <p style="text-align: center;">Beef Shawerma Sandwich</p>
                        <button style= "margin: -5% 0 20% 10% ;" class="btn btn-outline-light" id="orderBtn">Order</button>
                    </a>     
                </div>
                <h2 style="margin-left: 10%;" class="categories-heading">Pasta</h2>
                <div class="food-cards">
                    <a href="" class="link-danger">
                        <img class="img-fluid " id="sides"  src="tcheimg/pasta.jpeg" alt="clickable Img">
                        <p style="text-align: center;">Penne Arabbiata</p>
                        <button style= "margin: -5% 0 20% 10% ;" class="btn btn-outline-light" id="orderBtn">Order</button>
                    </a>
                </div>
                <div class="food-cards">
                    <a href="" class="link-danger">
                        <img class="img-fluid " id="sides" src="tcheimg/pasta1.jpeg" alt="clickable Img">
                        <p style="text-align: center;">Fettuccine Alfredo</p>
                        <button style= "margin: -5% 0 20% 10% ;" class="btn btn-outline-light" id="orderBtn">Order</button>
                    </a>
                    
                </div>
            </div>
        

        <section class="end-section" id="contact"> 
            
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <h2 id="Logo">DeArZoo</h2> <br>
                    <p>The leading Super App in <br>
                      kurdistan & Iraq</p>
                      <p style="padding: 0 5px 0 5px;">
                         <i class="fa-brands fa-instagram fa-xl"></i> 
                          <i class="fa-brands fa-facebook-f fa-xl"> </i>
                          <i class="fa-brands fa-twitter fa-xl"></i>
                      </p>
                </div>
                <div class="col-lg-4">
                  <h2 id="Logo">Get in Touch</h2> <br>
                  <p>Silemani Nwe <br>
                  Slemaniyah, Kurdistan, Iraq
                </p>
                <p>
                  <a href="" class="link-danger">
                    info@DeArZoo.com  
                  </a><br>
                  066 632 7763
                </p>
                </div>
                <div class="col-lg-4">
                <h2 id="Logo">Our Newsletter</h2> <br>
                <p>
                  Subscribe and stay <br>
                  up-to-date with our <br>
                  latest offerings. <br>
                  <br>
                 <input type="text" class="join-email" placeholder="Email Address"/>
                  <button type="submit" class="">Join</button>
                </p>
              </div>
              </div>
            </section>
           
            <p class="made">Made with ❤ by Ara Ali and Dere Rzgar</p>
</body>
</html>