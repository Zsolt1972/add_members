<?php

// connect database
$conn = mysqli_connect('localhost','root','') or die(mysqli_error());
// Select database
$select_db = mysqli_select_db($conn, 'names') or die(mysqli_error());

?>