<?php
if(isset($_POST['submit'])){
    $conn = new mysqli("localhost", "root", "", "hospital");
    if($conn->connect_error){
            die("Connection failed: ". $conn->connect_error);
    }
    else{
        $query = ("SELECT * FROM admin WHERE email = '{$_POST['email']}' AND password = '{$_POST['password']}'");

        $result = $conn->query($query);
        if($result->num_rows > 0){
            echo "login success";
            header("Location: admin/html/admin.html");
            exit();
        }else{
            echo "user not found";
        }
    }
}
?>