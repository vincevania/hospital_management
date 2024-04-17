<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        // Create a database connection
        $conn = new mysqli("localhost", "root", "", "hospital");

        // Check if the connection is successful
        if($conn->connect_error){
            die("Connection failed: ". $conn->connect_error);
        }

        // SQL query to insert data into the 'user' table
        $query = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";

        // Execute the query
        if($conn->query($query) === TRUE){
            echo "Registration successful";
            header("Location: sucess.html");
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "Form not submitted";
    }
?>
