<?php
require('inc/db_config.php');

require('inc/essentials.php');

session_start();

if ((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)) {
    redirect('dashboard.php');
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
</head>
<?php require('inc/links.php') ?>

<body class="bg-light">
    <style>
        div.login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>

    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <h4 class="bg-dark text-center text-white py-2">Admin Login Panel</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name" />
                </div>
                <div class="mb-4">
                    <input name="admin_pass" required type="password" class="form-control shadow-none text-center " placeholder="Password" />
                </div>
                <button name="admin_login" type="submit" class="btn text-white custom-bg shadow-none text-cente">Login</button>
            </div>
            <a href="register.php">User Signup</a>
        </form>
    </div>

    <?php

    if (isset($_POST['admin_login'])) {
        require('inc/db_config.php'); // Move the require inside the if block if needed
        $frm_data = filteration($_POST);

        $query = "SELECT * FROM `users` WHERE `email` = ? AND `role` = 'admin'";
        $values = [$frm_data['admin_name']];

        $res = select($query, $values, "s");
        if ($res->num_rows == 1) {
            $row = mysqli_fetch_assoc($res);

            // Verify the password
            if (password_verify($frm_data['admin_pass'], $row['password'])) {
                $_SESSION['adminLogin'] = true;
                $_SESSION['adminId'] = $row['sr_no'];
                redirect("dashboard.php");
            } else {
                alert('error', 'Login Failed - Invalid Credentials');
            }
        } else {
            alert('error', 'Login Failed - Invalid Credentials');
        }
    }

    ?>

    <?php require('inc/scripts.php') ?>

</body>

</html>