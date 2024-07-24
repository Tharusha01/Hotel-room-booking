<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Gabary Hotel Booking List</title>
    <?php require('inc/links.php'); ?>

    <style>
        .container {
            max-width: 800px;
            margin-top: 50px;
        }
    </style>
</head>

<body class="bg-light">

<?php
require('inc/header.php');
$user_id = $_SESSION['customerId'];

// Fetch bookings for the logged-in user
$query = $con->prepare("SELECT b.*, r.name AS room_name, r.image AS room_image, r.price AS room_price FROM `bookings` b JOIN `rooms` r ON b.room_id = r.id WHERE b.user_id = ?");
$query->bind_param('i', $user_id);
$query->execute();
$result = $query->get_result();
$bookings = [];
while ($row = $result->fetch_assoc()) {
    $bookings[] = $row;
}
?>

<div class="container bg-white p-4 rounded shadow">
    <h2 class="fw-bold h-font text-center">My Bookings</h2>
    <div class="h-line bg-dark mb-4"></div>

    <?php if (count($bookings) > 0) { ?>
        <div class="list-group">
            <?php foreach ($bookings as $booking) { ?>
                <div class="list-group-item list-group-item-action mb-3 border-0 shadow">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <img src="<?php echo filterationData($booking['room_image']); ?>" class="img-fluid rounded"
                                 alt="<?php echo filterationData($booking['room_name']); ?>">
                        </div>
                        <div class="col-md-6">
                            <h5><?php echo filterationData($booking['room_name']); ?></h5>
                            <p>Check-in: <?php echo filterationData($booking['check_in']); ?></p>
                            <p>Check-out: <?php echo filterationData($booking['check_out']); ?></p>
                            <p>Adults: <?php echo filterationData($booking['adults']); ?></p>
                            <p>Children: <?php echo filterationData($booking['children']); ?></p>
                        </div>
                        <div class="col-md-3 text-center">
                            <p>Price: Rs. <?php echo filterationData($booking['room_price']); ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <p class="text-center">No bookings found.</p>
    <?php } ?>
</div>

<?php require('inc/footer.php'); ?>

</body>

</html>
