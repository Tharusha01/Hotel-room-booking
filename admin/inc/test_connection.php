<?php
$con = mysqli_connect("localhost", "root", "", "hbwebsite");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($con);
?>
