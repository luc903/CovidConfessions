<?php

require ("../config.php");

$id = $_REQUEST["id"];

$sql = "UPDATE confessions SET isApproved=1 WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}