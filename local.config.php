<?php
/**
 * Created by PhpStorm.
 * User: LucW
 * Date: 29/04/2020
 * Time: 19:34
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covidconfessions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}