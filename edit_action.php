<?php

include ('connect.php');

$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

// SQL query to update data
$sql = "UPDATE tb_users SET first_name='$first_name', last_name='$last_name' WHERE id='$id'";
// Execute query
$result = mysqli_query($conn, $sql) or die(myqli_error());
if ($result == true){
    // redirect to home page
    header('location:index.php');
} else {
    echo 'error';
}

?>