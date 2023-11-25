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
    <link rel="stylesheet" href="signupStyle.css">
            <!-- bootstrap scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <title>Sign Up</title>
</head>
<body>
    <div class="container-fluid">

        <form action="insert.php" class="form-control form-box" method="POST">
            <div>
                <label for="" class="form-label">Username</label><br>
                <input type="text" name= "username" class="form-control form-input">
            </div>
                <div>
                    <label for="inputEmail4" class="form-label">Email</label> <br>
                    <input type="email" name= "email" class="form-control form-input">
                </div>
            <div>
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" name= "password" class="form-control form-input"> <br>
  </div>
 
    <div class="">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" required>
            <label class="form-check-label" for="gridCheck" required>
                Agree to terms of service.
            </label>
        </div>
    </div>
    
        <button type="submit" class="btn btn-outline-primary form-control">Sign up</button>
</form>
</div>
</body>
</html>