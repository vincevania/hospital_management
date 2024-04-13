<?php

$conn = new mysqli("localhost", "root", "", "hospital");

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}else{
    echo "Connection successful" ."<br>";
    $query = "SELECT * FROM users";
    $result = $conn->query($query);
    // print_r($result);
    // echo "<pre>";
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            // print_r($row);
            // var_dump($row['name']);
            echo "Name : " . $row['name'] . "<br>";
            echo "Email : " . $row['email'].'<br>';
            echo "Password : " . $row['password'];
        }
        // echo "</pre>";
    }else{

    }
}

?>