<?php
require('admin/inc/db_config.php');
require('admin/inc/essentials.php');// Make sure this file contains the database connection code

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $query = "INSERT INTO contact_us (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if (mysqli_query($con, $query)) {
        echo "<div class='alert alert-success'>Message sent successfully.</div>";
    } else {
        echo "<div class='alert alert-danger'>Failed to send message.</div>";
    }
}
?>
