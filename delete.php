<?php 

// connect database and delete command for delete data from database start from here
include("dbConnection.php");
$id = $_GET['id'];
$delete_sql = "DELETE FROM crud WHERE id = '$id'";
if($con->query($delete_sql)){
    echo "Deleted Item!";
}
// connect database and delete command for delete data from database end from here
?>
<br><br>
<a style='text-decoration:none; color: black; text-transform:capitalize;' href='read.php'><button>Back to list page</button></a>