<?php 
$con = new mysqli("localhost", "root", "", "test");

// check database connection 
if (!$con) {
    echo mysqli_connect_error();
}
$id = $_GET['id'];
$delete_sql = "DELETE FROM crud WHERE id = '$id'";
if($con->query($delete_sql)){
    echo "Deleted Item!";
}
?>