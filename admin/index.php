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
    <title>Admin Panel</title>
    <?php require('inc/links.php') ?>
    <style>
        .login-form {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>
</head>
<?php require('inc/links.php') ?>

<body class="bg-light">


    <div class="login-form text-center rounded shadow overflow-hidden bg-white">
        <form method="POST">
            <h5 class="text-white bg-dark fs-4 py-3 bt">Admin Login Panel</h5>
            <div class="p-4 bt">
                <div class="mb-3">
                    <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Username">
                </div>

                <div class="mb-4">
                    <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Password">
                </div>

                <button name="login" type="submit" class="btn btn-dark text-white shadow-none ">
                    LOGIN
                </button>
            </div>
            <a href="register.php">User Signup</a>
        </form>
    </div>

    <?php
    if (isset($_POST['login'])) {

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