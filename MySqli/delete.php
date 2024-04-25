<?php

include_once "./connect.php";

global $conn;
/*
$user_id = 5 ;
$sql = "DELETE FROM users WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param('i' , $user_id);
$stmt->execute();
print_r($stmt);
$stmt->close();
*/



/*
$sql = "DELETE FROM users WHERE sex='f'";
$stmt = $conn->prepare($sql);
$stmt->execute();
print_r($stmt);
*/

$sql = "DELETE FROM users WHERE id=41";
if($conn->query($sql)){
    echo 'Delete Users';
}else{
    echo 'Cannot Delete Users';
}