<?php


$hostname = "localhost";
$username = "root";
$password = "";
$db = "booking_db";

$con = mysqli_connect($hostname, $username, $password, $db);

if (!$con) {
    die("cannot connect to the database" . mysqli_connect_error());
}

if (!function_exists('filteration')) {
    function filteration($data)
    {
        foreach ($data as $key => $value) {
            $data[$key] = trim($value);
            $data[$key] = stripslashes($value);
            $data[$key] = htmlspecialchars($value);
        }
        return $data;
    }
}

function filterationData($data)
{
    return htmlspecialchars(strip_tags(trim($data)));
}

function selectAll($table)
{
    $con = $GLOBALS['con'];
    $res = mysqli_query($con, "SELECT * FROM $table");
    return $res;
}

// function select($sql, $values, $datatypes)
// {
//     $con = $GLOBALS["con"];
//     if ($stmt = mysqli_prepare($con, $sql)) {
//         mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
//         if (mysqli_stmt_execute($stmt)) {
//             $res = mysqli_stmt_get_result($stmt);
//             mysqli_stmt_close($stmt);
//             return $res;
//         } else {
//             mysqli_stmt_close($stmt);
//             die("Query cannot be executed -SELECT");
//         }
//     } else {
//         die("Query cannot be prepared -SELECT");
//     }
// }

if (!function_exists('update')) {
    function update($query, $values, $types)
    {
        $con = $GLOBALS['con'];
        $stmt = $con->prepare($query);
        $stmt->bind_param($types, ...$values);
        return $stmt->execute();
    }
}


if (!function_exists('select')) {
    function select($sql, $value, $datatypes)
    {
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
            mysqli_stmt_close($stmt);
            die("Query cannot be executed -INSERT");
        }
    }
}

if (!function_exists('insert')) {
    function insert($sql, $values, $datatypes)
    {
        $con = $GLOBALS['con'];
        if ($stmt = mysqli_prepare($con, $sql)) {
            mysqli_stmt_bind_param($stmt, $datatypes, ...$values); // PHP splat operator ...
            if (mysqli_stmt_execute($stmt)) {
                $insert_id = mysqli_stmt_insert_id($stmt); // Get the last inserted ID
                mysqli_stmt_close($stmt);
                return $insert_id; // Return the insert ID on success
            } else {
                mysqli_stmt_close($stmt);
                die("Insert query failed: " . mysqli_error($con));
            }
        } else {
            die("Query preparation failed: " . mysqli_error($con));
        }
    }
}

if (!function_exists('delete')) {
    function delete($query, $values, $types)
    {
        $con = $GLOBALS['con'];
        $stmt = $con->prepare($query);
        $stmt->bind_param($types, ...$values);
        return $stmt->execute();
    }
}
