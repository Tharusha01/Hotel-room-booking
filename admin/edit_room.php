<?php
require('inc/db_config.php');
require('inc/essentials.php');
adminLogin();

if (!isset($_GET['id'])) {
    header('Location: rooms.php');
    exit();
}

$room_id = filterationData($_GET['id']);
$res = select("SELECT * FROM `rooms` WHERE `id`=?", [$room_id], 'i');

if ($res && $res->num_rows > 0) {
    $room = mysqli_fetch_assoc($res);
} else {
    header('Location: rooms.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = filterationData($_POST['name']);
    $area = filterationData($_POST['area']);
    $price = filterationData($_POST['price']);
    $quantity = filterationData($_POST['quantity']);
    $adult = filterationData($_POST['adult']);
    $children = filterationData($_POST['children']);
    $desc = filterationData($_POST['desc']);
    $image = $_FILES['image'];

    $query = "UPDATE `rooms` SET `name`=?, `area`=?, `price`=?, `quantity`=?, `adult`=?, `children`=?, `description`=? WHERE `id`=?";
    $values = [$name, $area, $price, $quantity, $adult, $children, $desc, $room_id];

    if (update($query, $values, 'siiiiisi')) {
        if (!empty($image['name'])) {
            $img_name = 'uploads/' . basename($image['name']);
            move_uploaded_file($image['tmp_name'], $img_name);

            $query = "UPDATE `rooms` SET `image`=? WHERE `id`=?";
            $values = [$img_name, $room_id];
            update($query, $values, 'si');
        }

        $_SESSION['message'] = 'Room Updated Successfully';
        header('Location: rooms.php');
        exit();
    } else {
        $_SESSION['message'] = 'Server Down';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('inc/links.php'); ?>
    <title>Admin Panel - Edit Room</title>
</head>
<body class="bg-light">
    <?php require('inc/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">EDIT ROOM</h3>
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control shadow-none" value="<?php echo htmlspecialchars($room['name']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Area</label>
                        <input type="number" name="area" class="form-control shadow-none" value="<?php echo htmlspecialchars($room['area']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" name="price" class="form-control shadow-none" value="<?php echo htmlspecialchars($room['price']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Quantity</label>
                        <input type="number" name="quantity" class="form-control shadow-none" value="<?php echo htmlspecialchars($room['quantity']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Adult</label>
                        <input type="number" name="adult" class="form-control shadow-none" value="<?php echo htmlspecialchars($room['adult']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Children</label>
                        <input type="number" name="children" class="form-control shadow-none" value="<?php echo htmlspecialchars($room['children']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="desc" rows="4" class="form-control shadow-none" required><?php echo htmlspecialchars($room['description']); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="image" class="form-control shadow-none">
                        <?php if (!empty($room['image'])) { ?>
                            <img src="<?php echo htmlspecialchars($room['image']); ?>" alt="<?php echo htmlspecialchars($room['name']); ?>" width="50" height="50">
                        <?php } ?>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>
</body>
</html>
