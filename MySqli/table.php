<?php

include_once "./connect.php";
global $conn;

$table= "
CREATE TABLE users (
    id INT PRIMARY KEY AUTO INCREMENT,
    fullName VARCHAR(256),
    age INT UNSIGNED ,
    sex ENUM ('f','m'),
    isSingle BOOLEAN 
    
);";

if($conn->query($table)){
    echo "Table Created Successfully";
}else{
    echo "Table Is Not Created";
}
