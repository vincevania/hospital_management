<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "hospital");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch registration details from the user table
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>

<!-- HTML structure -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../project/css/admin.css">
    <title>User Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/solid.min.css" integrity="sha512-Hp+WwK4QdKZk9/W0ViDvLunYjFrGJmNDt6sCflZNkjgvNq9mY+0tMbd6tWMiAlcf1OQyqL4gn2rYp7UsfssZPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<div class="side-menu">
        <div class="brand-name">
            <img class="logo" src="../project/images/logo-removebg-preview.png" alt="">
        </div>
        <ul>
           <a href="admin.html">
            <li><i class="fa-solid fa-bars"></i>&nbsp; <span >Dashboard</span> </li>
           </a>
            <a href="registration.html">
                <li><i class="fa-solid fa-file-pen"></i>&nbsp;<span>Appointments</span> </li>
            </a>
            <a href="addPatient.html">
                <li><i class="fa-solid fa-user-plus"></i>&nbsp;<span>Add Patient</span> </li>
            </a>
            <a href="history.html">
                <li><i class="fa-solid fa-notes-medical"></i>&nbsp;<span>History</span> </li>
            </a>
            <a href="user.php">
                <li><i class="fa-solid fa-notes-medical"></i>&nbsp;<span>Users</span> </li>
            </a>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit" class="add-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="user">
                    <a href="#">
                        <button class="add-new-btn">Add New</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="content-2">
            <div class="recent-payments">
                <div class="title">
                    <h2>Users</h2>
                    <a href="#">
                        <button class="add-btn">View All</button>
                    </a>
                </div>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>More Details</th>
                    </tr>
                    <?php
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td><button class='detail-btn'>View</button></td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
