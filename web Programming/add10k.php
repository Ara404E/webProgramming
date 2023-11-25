<?php

include("db.php");
session_start();
$uname = $_SESSION['uname'];

// Step 1: Retrieve the Current Value from the Database
$selectQuery = "SELECT * FROM users WHERE username='$uname'";
$result = $conn->query($selectQuery);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $currentValue = $row["balance"];

    // Step 2: Perform the Subtraction
    $newValue = $currentValue + 10000;

    // Step 3: Update the Database with the New Value
    $updateQuery = "UPDATE users SET balance='$newValue' WHERE username='$uname'";

    if ($conn->query($updateQuery) === TRUE) {
        echo "<script>alert('You added 10,000 IQD!'); window.location.href='index.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    echo "No records found.";
}

?>
