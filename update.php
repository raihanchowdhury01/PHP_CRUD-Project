<?php
//update details
$con = new mysqli("localhost", "root", "", "test");

// check database connection 
if (!$con) {
    echo mysqli_connect_error();
}

$id = $_GET['i'];
$select_sql = "SELECT * FROM crud WHERE id = '$id'";
$data = $con->query($select_sql);
$row = mysqli_fetch_array($data);
?>
<!-- update form -->
<div>
    <form action="" method="POST">
        <input type="text" name="name" value="<?php echo $row['name'] ?>" placeholder="Enter your name..." autocomplete="off"><br><br>
        <input type="number" name="phone" value="<?php echo $row['phone'] ?>" placeholder="Enter your number..." autocomplete="off"><br><br>
        <input type="submit" name="update_btn" value="Update">&nbsp;&nbsp;<button><a style="text-decoration: none;" href="index.php">Back</a></button>
    </form>
</div>
<?php
if (isset($_POST['update_btn'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $update_sql = "UPDATE crud SET name = '$name' , phone = '$phone' WHERE id = '$id' ";
    $con->query($update_sql);
}
?>