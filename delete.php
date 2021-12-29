<?php

include ('connect.php');

$id = $_GET['id'];
//echo "Hello";
$sql = "DELETE FROM tb_users WHERE id=".$id;

$result = mysqli_query($conn, $sql) or die(mysqli_error());
if ($result == true){
    header('location: index.php');
} else {
    echo "error";
}
?>