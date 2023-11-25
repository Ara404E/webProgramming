<?php
   include("db.php");
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Your info was inserted'); window.location.href='login.php';</script>";
    } else {
        echo "Failed to insert new data.";
    }
    exit;
?>
