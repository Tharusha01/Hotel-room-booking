<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking Confirmation</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">
    <?php
    require('inc/header.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_SESSION['customerId'])) {
            $room_id = $_POST['room_id'];
            $customer_id = $_SESSION['customerId'];
            $checkin = $_POST['checkin'];
            $checkout = $_POST['checkout'];
            $adults = $_POST['adults'];
            $children = $_POST['children'];

            // Insert booking details into the database
            $stmt = $con->prepare("INSERT INTO `bookings` (`room_id`, `user_id`, `check_in`, `check_out`, `adults`, `children`) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param('iissii', $room_id, $customer_id, $checkin, $checkout, $adults, $children);

            if ($stmt->execute()) {
                $booking_success = true;
            } else {
                $booking_error = $stmt->error;
            }
        } else {
            $login_error = "Please login as a customer.";
        }
    }
    ?>

    <div class="container my-5">
        <h2 class="fw-bold h-font text-center">Booking Confirmation</h2>
        <div class="h-line bg-dark"></div>
        <div class="text-center mt-4">
            <?php if (isset($booking_success) && $booking_success) : ?>
                <p class="text-success">Thank you for booking with us! Your booking has been confirmed.</p>
            <?php elseif (isset($booking_error)) : ?>
                <p class="text-danger">Error: <?php echo htmlspecialchars($booking_error); ?></p>
            <?php elseif (isset($login_error)) : ?>
                <p class="text-danger"><?php echo htmlspecialchars($login_error); ?></p>
            <?php endif; ?>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>
</body>

</html>