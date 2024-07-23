<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Available Rooms</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">
    <?php
    require('inc/header.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];
        $adults = $_POST['adults'];
        $children = $_POST['children'];

        // Query to find available rooms
        $stmt = $con->prepare("
            SELECT r.*
            FROM rooms r
            WHERE r.id NOT IN (
                SELECT b.room_id
                FROM bookings b
                WHERE (b.check_in <= ? AND b.check_out >= ?)
                   OR (b.check_in <= ? AND b.check_out >= ?)
                   OR (b.check_in >= ? AND b.check_out <= ?)
            ) AND r.adult >= ? AND r.children >= ?
        ");
        $stmt->bind_param('ssssssii', $checkout, $checkin, $checkout, $checkin, $checkin, $checkout, $adults, $children);
        $stmt->execute();
        $result = $stmt->get_result();

        $available_rooms = [];
        while ($row = $result->fetch_assoc()) {
            $available_rooms[] = $row;
        }

        $stmt->close();
    }
    ?>

    <div class="container">
        <h2 class="fw-bold h-font text-center">Available Rooms</h2>
        <div class="h-line bg-dark"></div>
        <div class="col-lg-12 col-md-12 px-4">
            <?php foreach ($available_rooms as $room) { ?>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="<?php echo filterationData($room['image']); ?>" class="img-fluid rounded" alt="<?php echo filterationData($room['name']); ?>">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5><?php echo filterationData($room['name']); ?></h5>
                            <div class="features mb-3">
                                <h6 class="mb-3">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                            </div>
                            <div class="features mb-4">
                                <h6 class="mb-2">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Hot water</span>
                            </div>
                            <div class="features mb-4">
                                <h6 class="mb-2">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    <span>Adult <?php echo filterationData($room['adult']); ?></span>
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    <span>Child <?php echo filterationData($room['children']); ?></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-align-center">
                            <h6 class="mb-4">Rs. <?php echo filterationData($room['price']); ?> Per Night</h6>
                            <a href="booking.php?room_id=<?php echo $room['id']; ?>" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>
</body>

</html>