<?php

require ("../config.php");

$id = $_REQUEST["id"];

$sql = "DELETE FROM confessions WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}