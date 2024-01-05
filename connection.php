<?php
// define("host", "localhost");
// define("field", "root");
// define("pass", "");
// define("db", "test");
$con = new mysqli("localhost", "root", "", "test");

// check database connection 
if(!$con){
    echo mysqli_connect_error();
}

// create data into database 
if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    if(empty($name)){
        echo "Please enter your name <br>";
    }
    if(empty($phone)){
        echo "Please enter your phone <br>";
    }
    $sql = "INSERT INTO crud(name, phone)VALUES('$name', '$phone')";
    if($res = $con -> query($sql)){
        echo "Data Created!";
    }
}

?>