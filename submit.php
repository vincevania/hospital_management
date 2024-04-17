<?php

    if(isset($_POST['submit'])){
        // echo $_POST['name']."<br>";
        // echo $_POST['email']."<br>";
        // echo $_POST['password']."<br>";
        // echo $_POST['confirmpassword']."<br>";
        
        $conn = new mysqli("localhost", "root", "", "hospital");
        $query = "INSERT INTO user(name, email, password) VALUES('{$_POST['name']}', '{$_POST['email']}', '{$_POST['password']}')";
        $result = $conn->query($query);
        if($result){
            echo "registration successful";
        }else{
            echo "registration failed";
        }

        //     $result = $conn->query($query);
        // if($conn->connect_error){
        //     die("Connection failed: ". $conn->connect_error);
        // }else{
        //     $query = "SELECT * FROM users";
        //     $result = $conn->query($query);
        //     // print_r($result);
        //     // echo "<pre>";
        //     if($result->num_rows > 0){
        //         while($row = $result->fetch_assoc()){

        //             if($_POST['email'] == $row['email'] && $_POST['password'] == $row['password']){
        //                 echo "login success";
        //             }else{
        //                 echo "login failed";
        //             }
        //         }
        //         // echo "</pre>";
        //     }else{
        
        //     }
        // }

    }else{
        echo "not hello";
    }
?>