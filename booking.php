<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gabary Hotel Room Booking</title>
  <?php require('inc/links.php'); ?>

  <style>
    .pop:hover {
      border-top-color: var(--teal) !important;
      transform: scale(1.05);
      transition: all 0.5s;
    }
  </style>
</head>

<body class="bg-light">

  <?php
  require('inc/header.php');

  // Fetch room details from the database
  if (isset($_GET['room_id'])) {
    $room_id = $_GET['room_id'];
    $query = $con->prepare("SELECT * FROM `rooms` WHERE `id` = ?");
    $query->bind_param('i', $room_id);
    $query->execute();
    $result = $query->get_result();
    $room = $result->fetch_assoc();
  } else {
    echo "Room ID is not set.";
    exit;
  }
  ?>

  <div class="container my-5">
    <div class="row">
      <div class="col-lg-6 col-md-12 mb-4">
        <img src="<?php echo filterationData($room['image']); ?>" class="img-fluid rounded" alt="<?php echo filterationData($room['name']); ?>">
      </div>
      <div class="col-lg-6 col-md-12">
        <h3><?php echo filterationData($room['name']); ?></h3>
        <p>Price: Rs. <?php echo filterationData($room['price']); ?> Per Night</p>
        <form method="post" action="confirm_booking.php">
          <div class="mb-3">
            <label for="checkin" class="form-label">Check-in Date</label>
            <input type="date" class="form-control shadow-none" id="checkin" name="checkin" required>
          </div>
          <div class="mb-3">
            <label for="checkout" class="form-label">Check-out Date</label>
            <input type="date" class="form-control shadow-none" id="checkout" name="checkout" required>
          </div>
          <div class="mb-3">
            <label for="adults" class="form-label">Number of Adults</label>
            <input type="number" class="form-control shadow-none" id="adults" name="adults" min="1" max="<?php echo filterationData($room['adult']); ?>" required>
          </div>
          <div class="mb-3">
            <label for="children" class="form-label">Number of Children</label>
            <input type="number" class="form-control shadow-none" id="children" name="children" min="0" max="<?php echo filterationData($room['children']); ?>">
          </div>
          <input type="hidden" name="room_id" value="<?php echo $room['id']; ?>">
          <button type="submit" class="btn btn-primary">Confirm Booking</button>
        </form>
      </div>
    </div>
  </div>

  <?php require('inc/footer.php'); ?>

</body>

</html>
