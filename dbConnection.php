<?php 
//update details
$con = new mysqli("localhost", "root", "", "test");

// check database connection 
if (!$con) {
    echo mysqli_connect_error();
}
?>