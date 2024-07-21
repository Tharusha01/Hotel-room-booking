<?php
require('inc/db_config.php');
require('inc/essentials.php');
adminLogin();

if (!isset($_GET['id'])) {
    header('Location: rooms.php');
    exit();
}

$room_id = filterationData($_GET['id']);
$query = "DELETE FROM `rooms` WHERE `id`=?";
$values = [$room_id];

if (delete($query, $values, 'i')) {
    $_SESSION['message'] = 'Room Deleted Successfully';
} else {
    $_SESSION['message'] = 'Server Down';
}

header('Location: rooms.php');
