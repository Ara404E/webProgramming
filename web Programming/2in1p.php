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
    
    <title>2in1</title>
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
            balance: <?php echo $row["balance"];?> IQD
        </div>
    </nav>
<?php }?>
<h2 style="text-align: center; margin-top: 5%;">2in1 Pizza & Burger </h2>
<img  class="logo" src="images/2in1.jpg" alt="2in1 logo">
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
            <h6> 10-18 min </h6>
             </div>
            <div class="col-lg-4 box1">
                <p style="color:#E64848"><i class="fa-solid fa-basket-shopping  fa-2xl"  style="padding-top:16px"></i></p>
                <p style="font-size: 1.5em;">Min. Order</p>
                <h6> 5,000 IQD </h6>
            </div>
            <div class="col-lg-4 box1">
                <p><i class="fa-solid fa-star  fa-2xl" style="padding-top:30px; color:#FFD700" ></i></p>
                <p style="font-size: 1.5em;">Rating</p>
                <h6> 4.3 </h6>
            </div>
        </div>
    </div>
         
    <div class="container-fluid" id="food-section">
        <h2 style="margin-left: 10%;" class="categories-heading">Pizza</h2>
                <div class="food-cards">
                    
                        <img class="img-fluid" src="2in1img/2in1Pizza.jpg" alt="clickable image">
                        <p style="text-align: center;">Hawaiian Pizza 5,000 IQD</p>
                        <button style="margin: -5% 0 20% 10%;" class="btn btn-outline-light" id="orderBtn" data-bs-toggle="modal" data-bs-target="#orderModal">Order</button>

<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Hawaiian Pizza</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Price: 5,000 IQD</p>
       
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="purchase5k.php"><button type="button" class="btn btn-primary">Place Order</button></a>
      </div>
    </div>
  </div>
</div>
                    
                </div>
                <div class="food-cards">
                    
                        <img class="img-fluid" src="2in1img/2in1pizza2.jpg" alt="clickable image">
                        <p style="text-align: center;">Vegetarian Pizza 5,000 IQD</p>
                        <button style="margin: -5% 0 20% 10%;" class="btn btn-outline-light" id="orderBtn" data-bs-toggle="modal" data-bs-target="#orderModal">Order</button>

<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Hawaiian Pizza</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Price: 5,000 IQD</p>
       
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="purchase5k.php"><button type="button" class="btn btn-primary">Place Order</button></a>
      </div>
    </div>
  </div>
</div>
                </div>
            

                <h2 style="margin-left: 10%;" class="categories-heading">Burger</h2>
                <div class="food-cards">
                    
                        <img class="img-fluid" src="2in1img/2in1Burger.jpg" alt="clickable image">
                        <p style="text-align: center;">2in1 Cheese Burger 5,000 IQD</p>
                        <button style="margin: -5% 0 20% 10%;" class="btn btn-outline-light" id="orderBtn" data-bs-toggle="modal" data-bs-target="#orderModal">Order</button>

<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Hawaiian Pizza</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Price: 5,000 IQD</p>
       
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="purchase5k.php"><button type="button" class="btn btn-primary">Place Order</button></a>
      </div>
    </div>
  </div>
</div> 
                </div>
                <div class="food-cards">
                    
                        <img class="img-fluid" src="2in1img/2in1Burger2.jpg" alt="clickable image">
                        <p style="text-align: center;">Farm Burger 5,000 IQD</p>
                        <button style="margin: -5% 0 20% 10%;" class="btn btn-outline-light" id="orderBtn" data-bs-toggle="modal" data-bs-target="#orderModal">Order</button>

<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Hawaiian Pizza</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Price: 5,000 IQD</p>
       
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="purchase5k.php"><button type="button" class="btn btn-primary">Place Order</button></a>
      </div>
    </div>
  </div>
</div>  
                </div>
                <h2 style="margin-left: 10%;" class="categories-heading">Sides</h2>
                <div class="food-cards">
                   
                        <img class="img-fluid " id="sides"  src="2in1img/2in1wrapper.jpg" alt="">
                        <p style="text-align: center;">Loaded Wrapper 5,000 IQD</p>
                        <button style="margin: -5% 0 20% 10%;" class="btn btn-outline-light" id="orderBtn" data-bs-toggle="modal" data-bs-target="#orderModal">Order</button>

<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Hawaiian Pizza</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Price: 5,000 IQD</p>
       
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="purchase5k.php"><button type="button" class="btn btn-primary">Place Order</button></a>
      </div>
    </div>
  </div>
</div>
                </div>
                <div class="food-cards">
                   
                        <img class="img-fluid " id="sides" src="2in1img/2in1Fries.jpg" alt="">
                        <p style="text-align: center;">Curly Fries 5,000 IQD</p>
                        <button style="margin: -5% 0 20% 10%;" class="btn btn-outline-light" id="orderBtn" data-bs-toggle="modal" data-bs-target="#orderModal">Order</button>

<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Hawaiian Pizza</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Price: 5,000 IQD</p>
       
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="purchase5k.php"><button type="button" class="btn btn-primary">Place Order</button></a>
      </div>
    </div>
  </div>
</div>
                    
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