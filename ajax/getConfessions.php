<?php
/**
 * Created by PhpStorm.
 * User: LucW
 * Date: 29/04/2020
 * Time: 19:37
 */

require_once ("../config.php");

$result = mysqli_query($conn, "SELECT * FROM confessions ORDER BY RAND() LIMIT 12");

$count = 0;
while($row = mysqli_fetch_row($result)){
    $postsarray[] = $row[1];
    $count++;
}
$encodedArray = array_map(utf8_encode, $postsarray);


echo json_encode($postsarray);

mysqli_close($conn);