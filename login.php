<?php
require('admin/inc/db_config.php');
require('admin/inc/essentials.php');
session_start();

// Enable detailed error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS);

    if (!$email || !$password) {
        echo 'Invalid email or password.';
        exit;
    }

    // Query to fetch the user details
    $query = "SELECT * FROM `users` WHERE `email` = ?";
    $values = [$email];

    $res = select($query, $values, "s");

    if ($res && $res->num_rows == 1) {
        $row = mysqli_fetch_assoc($res);

        // Verify the password
        if (password_verify($password, $row['password'])) {
            if ($row['role'] === 'customer') {
                $_SESSION['customerLogin'] = true;
                $_SESSION['customerId'] = $row['id'];
                $_SESSION['customerName'] = $row['name'];
                $_SESSION['customerEmail'] = $row['email'];
                echo 'success';
            } else {
                echo 'Access denied. Not an admin user.';
            }
        } else {
            echo 'Invalid email or password.';
        }
    } else {
        echo 'Invalid email or password.';
    }
}
?>
