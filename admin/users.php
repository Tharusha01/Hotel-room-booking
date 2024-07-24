<?php
require('inc/db_config.php');
require('inc/essentials.php');
adminLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['create'])) {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $role = mysqli_real_escape_string($con, $_POST['role']);

        $query = "INSERT INTO users (name, email, password, role, created_at) VALUES ('$name', '$email', '$hashed_password', '$role', NOW())";
        mysqli_query($con, $query);
    }

    if (isset($_POST['update'])) {
        $id = mysqli_real_escape_string($con, $_POST['id']);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $role = mysqli_real_escape_string($con, $_POST['role']);
        $status = mysqli_real_escape_string($con, $_POST['status']);

        $query = "UPDATE users SET name='$name', email='$email', password='$hashed_password', role='$role', status='$status' WHERE id='$id'";
        mysqli_query($con, $query);
    }

    if (isset($_POST['delete'])) {
        $id = mysqli_real_escape_string($con, $_POST['id']);
        $query = "DELETE FROM users WHERE id='$id'";
        mysqli_query($con, $query);
    }
}

// Query to select only users with admin role
$query = "SELECT * FROM users WHERE role='admin'";
$res = mysqli_query($con, $query);
$users = [];
while ($row = mysqli_fetch_assoc($res)) {
    $users[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">
<?php require('inc/header.php'); ?>

<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <h3 class="mb-4">User Management</h3>

            <!-- User Management Card -->
            <div class="card border-0 shadow mb-4">
                <div class="card-body">

                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 mb-3">Users</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#user-modal">
                            <i class="bi bi-plus-square"></i> Add
                        </button>
                    </div>

                    <div class="table-responsive-md" style="height:350px;overflow-y:scroll;">
                        <table class="table table-hover border">
                            <thead>
                            <tr class="bg-dark text-white">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Role</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user) { ?>
                                <tr>
                                    <td><?php echo $user['id']; ?></td>
                                    <td><?php echo $user['name']; ?></td>
                                    <td><?php echo $user['email']; ?></td>
                                    <td><?php echo $user['created_at']; ?></td>
                                    <td><?php echo $user['role']; ?></td>
                                    <td><?php echo $user['status']; ?></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#user-modal" onclick="populateEditForm(<?php echo $user['id']; ?>, '<?php echo $user['name']; ?>', '<?php echo $user['email']; ?>', '<?php echo $user['role']; ?>', '<?php echo $user['status']; ?>')">Edit</button>
                                        <form method="post" style="display:inline;">
                                            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                            <button type="submit" name="delete" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <!-- User Modal -->
            <div class="modal fade" id="user-modal" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <form method="post">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add User</h5>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="id" id="user-id">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Name</label>
                                    <input type="text" name="name" id="user-name" class="form-control shadow-none" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Email</label>
                                    <input type="email" name="email" id="user-email" class="form-control shadow-none" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Password</label>
                                    <input type="password" name="password" id="user-password" class="form-control shadow-none" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Role</label>
                                    <input type="text" name="role" id="user-role" class="form-control shadow-none" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-secondary shadow-none text-white" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" name="create" class="btn btn-success shadow-none text-white">Submit</button>
                                <button type="submit" name="update" class="btn btn-success shadow-none text-white">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <?php require('inc/scripts.php'); ?>
            <script>
                function populateEditForm(id, name, email, role, status) {
                    document.getElementById('user-id').value = id;
                    document.getElementById('user-name').value = name;
                    document.getElementById('user-email').value = email;
                    document.getElementById('user-role').value = role;
                    document.getElementById('user-password').value = '';
                    document.querySelector('.modal-title').textContent = 'Edit User';
                    document.querySelector('button[name="create"]').style.display = 'none';
                    document.querySelector('button[name="update"]').style.display = 'block';
                }

                document.getElementById('user-modal').addEventListener('hidden.bs.modal', function () {
                    document.querySelector('.modal-title').textContent = 'Add User';
                    document.querySelector('button[name="create"]').style.display = 'block';
                    document.querySelector('button[name="update"]').style.display = 'none';
                    document.getElementById('user-form').reset();
                });
            </script>
        </div>
    </div>
</div>
</body>

</html>
