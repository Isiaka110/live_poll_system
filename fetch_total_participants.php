<?php
// fetch_total_participants.php

$connect = new PDO('mysql:host=localhost;dbname=testing', 'root', '');

$query = "SELECT COUNT(*) as total_count FROM tbl_poll";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetch();
echo $result["total_count"];
?>
