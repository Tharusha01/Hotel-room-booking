<?php
require('inc/db_config.php');
require('inc/essentials.php');
adminLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = filterationData($_POST['name']);
    $area = filterationData($_POST['area']);
    $price = filterationData($_POST['price']);
    $quantity = filterationData($_POST['quantity']);
    $adult = filterationData($_POST['adult']);
    $children = filterationData($_POST['children']);
    $desc = filterationData($_POST['desc']);
    $query = "INSERT INTO `rooms`(`name`, `area`, `price`, `quantity`, `adult`, `children`, `description`) VALUES (?,?,?,?,?,?,?)";
    $values = [$name, $area, $price, $quantity, $adult, $children, $desc];

    if (insert($query, $values, 'siiiiis')) {
        $_SESSION['message'] = 'Room Added Successfully';
        header('Location: rooms.php');
    } else {
        $_SESSION['message'] = 'Server Down';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('inc/links.php'); ?>
    <title>Admin Panel - Add Room</title>
</head>

<body class="bg-light">
    <?php require('inc/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">ADD ROOM</h3>
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control shadow-none" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Area</label>
                        <input type="number" name="area" class="form-control shadow-none" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" name="price" class="form-control shadow-none" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Quantity</label>
                        <input type="number" name="quantity" class="form-control shadow-none" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Adult</label>
                        <input type="number" name="adult" class="form-control shadow-none" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Children</label>
                        <input type="number" name="children" class="form-control shadow-none" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="desc" rows="4" class="form-control shadow-none" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>
</body>

</html>