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
    <title>Drop Agency Table</title>
</head>
<body>

<h1>Drop Agency Table</h1>

<?php


$conn = new mysqli("localhost", "student1", "pass", "baseball_01");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<p>Connected to the database successfully.</p>";

$sql = "DROP TABLE RashaiAgencies";

if ($conn->query($sql) === TRUE) {
    echo "<p>RashaiAgencies table dropped successfully.</p>";
} else {
    echo "<p>Error dropping table: " . $conn->error . "</p>";
}

$conn->close();
?>

</body>
</html>
