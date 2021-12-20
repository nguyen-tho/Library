<?php
session_start();
function createDBConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cnpm";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
function closeDb($conn)
{
    $conn->close();
}


