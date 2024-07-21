<?php
require('admin/inc/db_config.php');
require('admin/inc/essentials.php');

// Enable detailed error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $frm_data = filter_input_array(INPUT_POST, [
        'name' => FILTER_SANITIZE_SPECIAL_CHARS,
        'email' => FILTER_VALIDATE_EMAIL,
        'password' => FILTER_SANITIZE_SPECIAL_CHARS,
        'confirm_password' => FILTER_SANITIZE_SPECIAL_CHARS,
        'phone' => FILTER_SANITIZE_SPECIAL_CHARS,
        'address' => FILTER_SANITIZE_SPECIAL_CHARS,
        'dob' => FILTER_SANITIZE_SPECIAL_CHARS
    ]);

    // Validate required fields
    foreach ($frm_data as $key => $value) {
        if (empty($value)) {
            echo 'All fields are required.';
            exit;
        }
    }

    // Check if passwords match
    if ($frm_data['password'] !== $frm_data['confirm_password']) {
        echo 'Passwords do not match.';
        exit;
    }

     // Check if email already exists
     $query_check_email = "SELECT id FROM `users` WHERE `email` = ?";
     $values_check_email = [$frm_data['email']];
 
     $res = select($query_check_email, $values_check_email, "s");
 
     if ($res->num_rows > 0) {
         echo 'Email already registered.';
         exit;
     }

    // Insert user data into the users table
    $query_user = "INSERT INTO `users` (`name`, `email`, `password`, `created_at`, `role`, `status`) VALUES (?, ?, ?, ?, ?, ?)";
    $values_user = [
        $frm_data['name'],
        $frm_data['email'],
        password_hash($frm_data['password'], PASSWORD_DEFAULT),
        date('Y-m-d H:i:s'), // current timestamp for created_at
        'customer',  // default role
        true // default status
    ];

    $user_id = insert($query_user, $values_user, "ssssss");

    if ($user_id) {
        // Insert customer data into the customers table
        $query_customer = "INSERT INTO `customers` (`user_id`, `phone`, `address`, `dob`) VALUES (?, ?, ?, ?)";
        $values_customer = [
            $user_id,
            $frm_data['phone'],
            $frm_data['address'],
            $frm_data['dob'],
        ];

        $customer_id = insert($query_customer, $values_customer, "ssss");

        if ($customer_id) {
            echo 'success';
        } else {
            echo 'Registration failed. Please try again.';
        }
    } else {
        echo 'Registration failed. Please try again.';
    }
}
