<?php
$hname = "localhost";
$uname = "root";
$pass = ""; // Leave it empty for no password
$dbname = "hbwebsite";

$con = mysqli_connect($hname, $uname, $pass, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (!function_exists('filteration')) {
    function filteration($data) {
        foreach ($data as $key => $value) {
            $data[$key] = trim($value);
            $data[$key] = stripslashes($value);
            $data[$key] = htmlspecialchars($value);
        }
        return $data;
    }
}


if (!function_exists('select')) {
    function select($sql, $value, $datatypes) {
        $con = $GLOBALS['con'];
        if ($stmt = mysqli_prepare($con, $sql)) {
            mysqli_stmt_bind_param($stmt, $datatypes, ...$value); // PHP splat operator ...
            if (mysqli_stmt_execute($stmt)) {
                $res = mysqli_stmt_get_result($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            } else {
                mysqli_stmt_close($stmt);
                die("Query failed: " . mysqli_error($con));
            }
        } else {
            die("Query preparation failed: " . mysqli_error($con));
        }
    }
}

?>
