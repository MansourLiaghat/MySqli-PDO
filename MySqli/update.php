<?php

include_once "./connect.php";

/*$sql = "UPDATE users SET sex='f' WHERE fullName LIKE 'a%'  ";
$conn->query($sql);*/

$ageUser = 500 ;
$sql = "UPDATE users SET age = age + ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i' , $ageUser);
$stmt->execute();
echo "$stmt->affected_rows";
