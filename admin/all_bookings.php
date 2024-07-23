<?php
require('inc/db_config.php');
require('inc/essentials.php');
adminLogin();

$res = $con->query("
    SELECT b.*, r.name as room_name, u.name as user_name
    FROM bookings b
    JOIN rooms r ON b.room_id = r.id
    JOIN users u ON b.user_id = u.id
");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('inc/links.php'); ?>
    <title>Admin Panel - Bookings</title>
</head>

<body class="bg-light">
    <?php require('inc/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">BOOKINGS</h3>
                <div class="table-responsive mt-4">
                    <table class="table table-hover border">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th>ID</th>
                                <th>Room Name</th>
                                <th>User Name</th>
                                <th>Check In</th>
                                <th>Check Out</th>
                                <th>Adults</th>
                                <th>Children</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $res->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['room_name']; ?></td>
                                    <td><?php echo $row['user_name']; ?></td>
                                    <td><?php echo $row['check_in']; ?></td>
                                    <td><?php echo $row['check_out']; ?></td>
                                    <td><?php echo $row['adults']; ?></td>
                                    <td><?php echo $row['children']; ?></td>
                                    <td>
                                        <a href="edit_booking.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                                        <a href="delete_booking.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this booking?');">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>
</body>

</html>
