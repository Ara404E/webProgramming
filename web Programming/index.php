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
    <link rel="stylesheet" href="style.css">
            <!-- bootstrap scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>DearZoo</title>
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
        <div class="navbar-text" style="color: #ffffff; margin-right: 20px;">
           <button style="margin: -5% 0 20% 10%;" class="btn btn-outline-light" id="orderBtn" data-bs-toggle="modal" data-bs-target="#orderModal">Add 10,000 IQD</button>

<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p style="color:black;">Do you want to add 10,000 IQD?</p>
       
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="add10k.php"><button type="button" class="btn btn-primary">Add</button></a>
      </div>
    </div>
  </div>
</div>

        </div>
    </nav>
<?php }?>
<div class="container-fluid"> 

    <div class="row" id="#home">
        <div class="col-5 laughPeop-img">
            <img class="img-fluid" src="images/laughPeop.jpg" alt="laughing while eating" >  
            
        </div>
        <div class="col-7">
            <h3 >
                We make your life stress-free and we guarantee you will love us
            </h3>
            <p class="paragraph-one">
                At <span id="Logo">DeArZoo</span>, we're on a mission to make your life <span> <b>stress-free</b></span>,
                and your satisfaction is our top priority.
                We're committed to continuous improvement and work every day to refine and enhance our services to ensure you experience nothing but the best. 
                Your feedback drives us forward, shaping the future of a hassle-free, worry-free life with <span id="Logo">DeArZoo</span>.
            </p>
        </div>
        
        
        
    </div>
    <div id="carouselNewAd" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselNewAd" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselNewAd" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
 <section class="container-fluid" id="carousel-section">
   <h2 style="text-align: center;">newly added offers</h2>
  <div class="carousel-inner">
    <div class="carousel-item">
      <img src="images/firstAd.jpg" class="d-block w-100 carousel-img" alt="">
      
    </div>
    <div class="carousel-item active">
      <img src="images/bogo.jpg" class="d-block w-100 carousel-img" alt="">
     
    </div>
  </div>
</section>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselNewAd" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselNewAd" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
    <h2 style="margin-left: 10%;">Restaurants nearby</h2>
    <div class="container-fluid" id="food-section">
      <div class="food-cards">
      <a href="2in1p.php" class="link-danger">
         <img class="img-fluid" src="images/2in1.jpg" alt="clickable image">
        <p style="text-align: center;">2in1 Burger & Pizza</p>
      </a> 
      </div>
      <div class="food-cards">
        <a href="tche.php" class="link-danger">
          <img class="img-fluid" src="images/tche.jpeg" alt="clickable image">
            <p style="text-align: center;">Tche Tche Café</p>
        </a>
      </div>
      <div class="food-cards">
         <a href="burgerKing.php" class="link-danger">
          <img class="img-fluid" src="images/burger.png" alt="clickable image">
           <p style="text-align: center;">Burger King</p>
         </a>    
      </div>
      <div class="food-cards">
         <a href="roma.php" class="link-danger">
          <img class="img-fluid" src="images/roma.jpg" alt="clickable image">
        <p style="text-align: center;">Roma Land Restaurant & Café </p>
         </a>
        
      </div>
      <div class="food-cards">
         <a href="mingle.php" class="link-danger">
          <img class="img-fluid" src="images/minglee.png" alt="">
           <p style="text-align: center;">Mingle</p>
         </a>
      </div>
      <div class="food-cards">
         <a href="ivy.php" class="link-danger">
          <img class="img-fluid" src="images/ivy.jpeg" alt="">
        <p style="text-align: center;">Ivy Dining & Co</p>
         </a>
        
      </div>
    </div>
    


          <h2 class="section-heading"  style="text-align: center; padding-top:100px">Enjoy discounts on <span id="Logo">DeArZoo</span></h2>
           <p style="text-align: center;  padding-bottom:50px">Simple and affordable price plans.</p>
    <div class="row">
    <div id="Pricing" class="pricing-column col-lg-4 col-md-6">   
        <div class="card">
          <div class="card-header">
            <h3>IQD
              <span>5,000</span>
              /mo</h3>
          </div>
          <div class="card-body">
            <h2 class="" id="Logo">DeArZoo Eco</h2>
            <p><i class="fa-sharp fa-solid fa-circle-check fa-beat fa-lg" style="color: #740606;"></i>10 Free Delivers</p>
            <p><i class="fa-sharp fa-solid fa-circle-check fa-beat fa-lg" style="color: #740606;"></i>10% Pick-up Discount</p>
            <p><i class="fa-sharp fa-solid fa-circle-check fa-beat fa-lg" style="color: #740606;"></i>Suprise prizes & curated <br>discounts</p>
            <p><i class="fa-sharp fa-solid fa-circle-check fa-beat fa-lg" style="color: #740606;"></i>Access to the full catalog</p>
            <button type="button" class="btn btn-outline-danger btn-block">Choose Plan</button> 
          </div>
            </div>
    </div>
    <div class="pricing-column col-lg-4 col-md-6">
            <div class="card">
            <div class="card-header">
            <h3>IQD
              <span>10,000</span>
              /mo</h3>
          </div>
          <div class="card-body">
          <h2 class="" id="Logo">DeArZoo Plus</h2>
            <p><i class="fa-sharp fa-solid fa-circle-check fa-beat fa-lg" style="color: #740606;"></i>30 Free Delivers</p>
            <p><i class="fa-sharp fa-solid fa-circle-check fa-beat fa-lg" style="color: #740606;"></i>10% Pick-up Discount</p>
            <p><i class="fa-sharp fa-solid fa-circle-check fa-beat fa-lg" style="color: #740606;"></i>Suprise prizes & Curated <br>Discounts</p>
            <p><i class="fa-sharp fa-solid fa-circle-check fa-beat fa-lg" style="color: #740606;"></i>Access to the full catalog</p>
            <button type="button" class="btn btn-outline-danger btn-block">Choose Plan</button> 
          </div>
              </div>
    </div>
    <div class="pricing-column col-lg-4 col-md-6">
              <div class="card">
                <div class="card-header">
            <h3>IQD
              <span>99,000</span>
              /year</h3>
          </div>
          <div class="card-body">
          <h2 class="" id="Logo">DeArZoo Plus - Annual</h2>
            <p><i class="fa-sharp fa-solid fa-circle-check fa-beat fa-lg" style="color: #740606;"></i>30 Free Delivers </p>
            <p><i class="fa-sharp fa-solid fa-circle-check fa-beat fa-lg" style="color: #740606;"></i>10% Pick - up Discount</p>
            <p><i class="fa-sharp fa-solid fa-circle-check fa-beat fa-lg" style="color: #740606;"></i>Suprise prizes & Curated <br> Discount</p>
            <p><i class="fa-sharp fa-solid fa-circle-check fa-beat fa-lg" style="color: #740606;"></i>Access to the full catalog</p>
            <button type="button" class="btn btn-outline-danger btn-block">Choose Plan</button> 
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
           
            <p class="made">Made with ❤ by Ara Ali</p>
        </div>
              
        </body>
</html>