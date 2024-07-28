<?php
require('inc/essentials.php');

adminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">
    <?php
    require('inc/header.php');
    require('inc/db_config.php');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $totalBookingsQuery = "SELECT COUNT(*) as count, SUM(amount) as total FROM bookings";
    $totalBookingsResult = $con->query($totalBookingsQuery);

    if ($totalBookingsResult) {
        $totalBookings = $totalBookingsResult->fetch_assoc();
    } else {
        $totalBookings = ['count' => 0, 'total' => 0];
    }

    $usersQuery = "SELECT COUNT(*) as total FROM users";
    $usersResult = $con->query($usersQuery);

    if ($usersResult) {
        $users = $usersResult->fetch_assoc();
    } else {
        $users = ['total' => 0];
    }
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">DASHBOARD</h3>

                <!-- Display total bookings and amount -->
                <h5 class="mb-4">BOOKINGS</h5>
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="card text-center p-3">
                            <h6>Total Bookings</h6>
                            <h1 class="mt-2 mb-0"><?php echo $totalBookings['count']; ?></h1>
                            <h4 class="mt-2 mb-0"><?php echo "$" . $totalBookings['total']; ?></h4>
                        </div>
                    </div>
                </div>

                <h5 class="mb-4">USERS</h5>
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="card text-center p-3">
                            <h6>Total Users</h6>
                            <h1 class="mt-2 mb-0"><?php echo $users['total']; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>
</body>

</html>
