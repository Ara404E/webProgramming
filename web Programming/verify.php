<?php
session_start();
include("db.php");
$uname = $_POST['uname'];
$_SESSION['uname'] = $uname;
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$uname' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Invalid username or password'); window.location.href='login.php';</script>";
    }
}

$conn->close();
?>