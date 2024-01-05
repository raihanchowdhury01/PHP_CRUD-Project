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
    // database connection
    include("connection.php");
    echo "<br>";
    //make button for go back read file 
    echo "<a href='read.php'>View data</a>";
    $con->close();

    
    ?>
</body>
</html>