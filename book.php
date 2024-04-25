<?php

if (isset($_POST['submit'])) {

    // Establish connection to the database
    $conn = new mysqli("localhost", "root", "", "hospital");

    // Check connection
    if($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
    } else {
        echo "Connection successful" ."<br>";

        // Retrieve values from the form
        $name = $_POST['name'];
        $reg_no = $_POST['reg_no'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $issue = $_POST['issue'];
        $doctorname = $_POST['doctorname'];

        // SQL query to insert data into the 'appointment' table
        $query = "INSERT INTO appointment (name, reg_no, age, email, phone_number, date, time, issue, doctorname)
                  VALUES ('$name', '$reg_no', '$age', '$email', '$phone_number', '$date', '$time', '$issue', '$doctorname')";

        // Execute query
        if($conn->query($query) === TRUE){
            echo "Registration successful";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }
}
?>
