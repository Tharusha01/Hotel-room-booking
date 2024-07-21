<?php
require('inc/db_config.php');
require('inc/essentials.php');

session_start();

if (isset($_SESSION['userLogin']) && $_SESSION['userLogin'] == true) {
    redirect('dashboard.php');
}

if (isset($_POST['user_signup'])) {
    $frm_data = filteration($_POST);
    $query = "INSERT INTO `users` (`name`, `email`, `password`, `created_at`, `role`, `status`) VALUES (?, ?, ?, ?, ?, ?)";
    $values = [
        $frm_data['username'],
        $frm_data['email'],
        password_hash($frm_data['password'], PASSWORD_DEFAULT),
        date('Y-m-d H:i:s'), // current timestamp for created_at
        'admin',  // default role
        true // default status
    ];
    $res = insert($query, $values, "ssssss");

    if ($res) {
        alert('success', 'Registration Successful! Please log in.');
        redirect('index.php');
    } else {
        alert('error', 'Registration Failed! Please try again.');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signup</title>
</head>
<?php require('inc/links.php') ?>

<body class="bg-light">
    <style>
        div.signup-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>

    <div class="signup-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <h4 class="bg-dark text-center text-white py-2">User Signup</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="username" required type="text" class="form-control shadow-none text-center" placeholder="Username" />
                </div>
                <div class="mb-3">
                    <input name="email" required type="email" class="form-control shadow-none text-center" placeholder="Email" />
                </div>
                <div class="mb-4">
                    <input name="password" required type="password" class="form-control shadow-none text-center" placeholder="Password" />
                </div>
                <button name="user_signup" type="submit" class="btn text-white custom-bg shadow-none text-center">Signup</button>
            </div>
        </form>
    </div>

    <?php require('inc/scripts.php') ?>

</body>

</html>