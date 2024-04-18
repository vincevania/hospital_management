<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $reg_no = $_POST['reg_no'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $issue = $_POST['issue'];
    $doctorname = $_POST['doctorname'];
        
    // Create a database connection
    $conn = new mysqli("localhost", "root", "", "hospital");

    // Check if the connection is successful
    if($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
    }

    // SQL query to insert data into the 'appointment' table
    $query = "INSERT INTO appointment 
    (name , reg_no, age, email, phone_number, date, time, issue, doctorname)
    VALUES 
    ('$name', '$reg_no', '$age', '$email', '$phone_number', '$date', '$time', '$issue', '$doctorname')";

    // Execute the query
    if($conn->query($query) === TRUE){
        echo "Registration successful";
        header("Location: index.html");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Form not submitted";
}
?>
