
<div>
<!-- create button for back to main page -->
<a style='text-decoration:none; color: black; text-transform:capitalize;' href='index.php'><button>Back to main page</button></a>
</div>

<?php
// database connection and make select command and othe section for view to data from database with table start from here
include("connection.php");
$sql = "SELECT * FROM crud";
$res = $con->query($sql);
$data = mysqli_num_rows($res);
if ($data) {
    echo "<table border='1px' cellpadding = '5px' cellspacing = '0'>";
    echo "<tr><th>SL NO.</th><th>Name</th><th>Phone Number</th><th>Edit</th><th>Delete</th></tr>";
    while ($row = mysqli_fetch_array($res)) {
        $id = $row['id'];
        $name  = $row['name'];
        $phone = $row['phone'];
        echo "<tr><td>$id</td><td>$name</td> <td>$phone</td><td><a href='update.php?i=$id'><button>Edit</button></a></td><td><a href='delete.php?id=$id'><button>Delete</button></a></td></tr>";
    }
    echo "</table>";
} else {
    echo "<tr><td>No record found</td></tr>";
}
// database connection and make select command and othe section for view to data from database with table end from here
?>