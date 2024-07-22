<?php
require('inc/db_config.php');
require('inc/essentials.php');
adminLogin();

$res = selectAll('rooms');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('inc/links.php'); ?>
    <title>Admin Panel - Rooms</title>
</head>

<body class="bg-light">
    <?php require('inc/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">ROOMS</h3>
                <a href="add_room.php" class="btn btn-primary">Add Room</a>
                <div class="table-responsive mt-4">
                    <table class="table table-hover border">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Area</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Adult</th>
                                <th>Children</th>
                                <th>Image</th>
                                <th>Actions</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['area']; ?></td>
                                    <td><?php echo $row['price']; ?></td>
                                    <td><?php echo $row['quantity']; ?></td>
                                    <td><?php echo $row['adult']; ?></td>
                                    <td><?php echo $row['children']; ?></td>
                                    <td>
                                        <?php if (!empty($row['image'])) { ?>
                                            <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" width="50" height="50">
                                        <?php } else { ?>
                                            <p>No image</p>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="edit_room.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                                        <a href="delete_room.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this room?');">Delete</a>
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