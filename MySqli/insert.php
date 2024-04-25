<?php

include_once "./connect.php";


$sex_array = ['m', 'f'];
$userData = array(
    'fullName' => 'mansour' . rand(1, 99),
    'age' => rand(25, 50),
    'sex' => $sex_array[rand(0, 1)],
    'isSingle' => rand(0, 1)
);

#$sql = "INSERT INTO users (fullName,age,sex,isSingle) VALUES ('{$userData['fullName']}','{$userData['age']}',
#'{$userData['sex']}','{$userData['isSingle']}')";



function addUser($userData)
{
    global $conn;
    $sql = "INSERT INTO users (fullName,age,sex,isSingle) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sisi', $userData['fullName'], $userData['age'], $userData['sex'], $userData['isSingle']);
    $stmt->execute();
#    $stmt->close();
}

$user_id = addUser(['fullName'=>'aren' , 'age'=>2 , 'sex'=>'m', 'isSingle'=>0]);
echo "$user_id";


/*if ($conn->query($sql)) {
    echo "Add User Into Table";
} else {
    echo "Cannot Add User Into Table - ($conn->error)";
}*/