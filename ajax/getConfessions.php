<?php
/**
 * Created by PhpStorm.
 * User: LucW
 * Date: 29/04/2020
 * Time: 19:37
 */

require_once ("../config.php");

$sql = "SELECT * FROM confessions WHERE isSafe='1' ORDER BY RAND() LIMIT 9";
$result = $conn->query($sql);
$result_array = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($result_array, $row);
    }
}
echo json_encode($result_array);

mysqli_close($conn);