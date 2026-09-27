<!DOCTYPE html>
<html lang="en">

<!--
    Rashai Robertson
    Bellevue University
    CSD-440
    September 20, 2026
    Module Assignment 8
-->

<head>
    <meta charset="UTF-8">
    <title>Create Agency Table</title>
</head>
<body>

<h1>Create Agency Table</h1>

<?php


$conn = new mysqli("localhost", "student1", "pass", "baseball_01");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<p>Connected to the database successfully.</p>";

$sql = "CREATE TABLE RashaiAgencies (
    agency_id INT NOT NULL AUTO_INCREMENT,
    agency_name VARCHAR(100) NOT NULL,
    state VARCHAR(50) NOT NULL,
    agency_type VARCHAR(50) NOT NULL,
    officer_title VARCHAR(50) NOT NULL,
    sworn_officers INT NOT NULL,
    PRIMARY KEY (agency_id)
)";

if ($conn->query($sql) === TRUE) {
    echo "<p>RashaiAgencies table created successfully.</p>";
} else {
    echo "<p>Error creating table: " . $conn->error . "</p>";
}

$conn->close();
?>

</body>
</html>
