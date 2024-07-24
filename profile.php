<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <?php require('inc/links.php'); ?>

    <style>
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
    </style>
</head>

<body class="bg-light">
<?php
require('inc/header.php');

$user_id = $_SESSION['customerId'];

// Fetch user and customer details from the database
$query = mysqli_query($con, "SELECT u.*, c.phone, c.dob, c.address FROM users u JOIN customers c ON u.id = c.user_id WHERE u.id = '$user_id'");
$user = mysqli_fetch_assoc($query);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    // Update the user details in the database
    $update_user_query = "UPDATE users SET name = '$name', email = '$email'";
    if (!empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $update_user_query .= ", password = '$hashed_password'";
    }
    $update_user_query .= " WHERE id = '$user_id'";

    $update_customer_query = "UPDATE customers SET phone = '$phone', dob = '$dob', address = '$address' WHERE user_id = '$user_id'";

    $user_update_success = mysqli_query($con, $update_user_query);
    $customer_update_success = mysqli_query($con, $update_customer_query);

    if ($user_update_success && $customer_update_success) {
        echo "<div class='alert alert-success'>Profile updated successfully.</div>";
    } else {
        echo "<div class='alert alert-danger'>Failed to update profile.</div>";
    }
}
?>

<div class="container bg-white p-4 rounded shadow">
    <h2 class="fw-bold h-font text-center">Edit Profile</h2>
    <div class="h-line bg-dark mb-4"></div>

    <form method="POST" action="">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control shadow-none" id="name" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control shadow-none" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password (leave blank if not changing)</label>
            <input type="password" class="form-control shadow-none" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control shadow-none" id="phone" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control shadow-none" id="dob" name="dob" value="<?php echo htmlspecialchars($user['dob']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control shadow-none" id="address" name="address" required><?php echo htmlspecialchars($user['address']); ?></textarea>
        </div>
        <button type="submit" class="btn text-white custom-bg mt-3 shadow-none">Update Profile</button>
    </form>
</div>

<?php require('inc/footer.php'); ?>
</body>

</html>
