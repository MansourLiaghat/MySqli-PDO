<?php
include_once "./connect.php";


/*$sql = "SELECT * FROM users ";
$result = $conn->query($sql);*/


/*while ($row=$result->fetch_object()){
    echo "<pre>";
    foreach ($row as $key => $value)
        echo $value .' ' ;
    echo "</pre>";
}*/



/*echo "<pre>";
print_r($result->fetch_all());
echo "</pre>";*/

/*$sql = "select AVG(age) as average_age FROM users";
$result = $conn->prepare($sql);
$result->execute();
$result->bind_result($average_age);
$result->fetch();
echo "Age Average is : $average_age";*/



$sql = "select * FROM users";
$result = $conn->prepare($sql);
$result->execute();
$result->bind_result($id , $fullName , $age , $sex , $isSingle);

while ($result->fetch()){
    echo '<br>' ."$fullName" .' ' . ($isSingle ? "single" : "married") . '<br>';
}




/*$sql = "select * FROM users";
$result = $conn->prepare($sql);
$result->execute();
$result->store_result();
echo"$result->affected_rows";*/