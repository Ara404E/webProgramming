<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
        <!-- bootstrap css styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="loginStyle.css">
    <title>Log in</title>
</head>
<body>
  <?php include("db.php");?>
  
    <div class="container-fluid"> 
         <p>DearZoo</p>
       
            <form action="verify.php" method="POST" class="form-control login-form">
        username:
            <input type="text" name="uname" id="" class="form-control"> <br>
        password:
            <input type="password" name="password" id="" class="form-control"> <br>
            <button type="submit" class="btn btn-outline-dark btn-sm form-control"><b>login</b></button>
              
       </form>
       <p>Don't have an account? <a href="signup.php">Signup.</a></p>
</div>


</body>
</html>