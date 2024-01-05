<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("form.php");
    // database connection and create data 
    include("connection.php");
    echo "<br>";
    // read data from database 
    echo "<a href='read.php'>View data</a>";
    $con->close();

    
    ?>
</body>
</html>