<?php

include ("connect.php");

//echo 'Add action.'
// Get value from UI
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

// SQL Query to insert data in our table
$sql = "INSERT INTO tb_users SET first_name='$first_name', last_name='$last_name'";
// Execute query
$result = mysqli_query($conn, $sql) or die(mysqli_error());
if ($result == true) {
    // query success
    // echo 'Success';
    // redirect to home page
    header('location: index.php');
} else {
    echo 'Failed';
}
?>