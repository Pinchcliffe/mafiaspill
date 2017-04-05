<?php
/**
 * Created by PhpStorm.
 * User: Haakon
 * Date: 05.04.2017
 * Time: 18.00
 */

    // Database Connection
    $dbserver       =   "localhost";
    $dbusername     =   "root";
    $dbpassword     =   "";
    $db             =   "mafia";

    // Create Connection
    $conn = new mysqli($dbserver, $dbusername, $dbpassword, $db);

    // Check Connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        // IF CONNECTION IS GOOD, GET DATA FROM DATABASE
        $query = "SELECT `name`, `separator`, `description`, `maintenance` FROM `configuration`";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);

        // General Settings
        $name = $row['name'];
        $separator = $row['separator'];
        $description = $row['description'];

        // Technical Settings
        $maintenance = $row['maintenance'];
    }


