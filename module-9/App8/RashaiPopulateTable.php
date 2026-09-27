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
    <title>Populate Agency Table</title>
</head>
<body>

<h1>Populate Agency Table</h1>

<?php


$conn = new mysqli("localhost", "student1", "pass", "baseball_01");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<p>Connected to the database successfully.</p>";

$lineBreak = "<br>";

// Insert Pennsylvania State Police
mysqli_query($conn, "INSERT INTO RashaiAgencies
    (agency_name, state, agency_type, officer_title, sworn_officers)
    VALUES
    ('Pennsylvania State Police', 'Pennsylvania', 'State', 'Trooper', 4200)");

echo 'Pennsylvania State Police' . $lineBreak;


// Insert Philadelphia Police Department
mysqli_query($conn, "INSERT INTO RashaiAgencies
    (agency_name, state, agency_type, officer_title, sworn_officers)
    VALUES
    ('Philadelphia Police Department', 'Pennsylvania', 'Municipal', 'Police Officer', 5500)");

echo 'Philadelphia Police Department' . $lineBreak;


// Insert Texas Department of Public Safety
mysqli_query($conn, "INSERT INTO RashaiAgencies
    (agency_name, state, agency_type, officer_title, sworn_officers)
    VALUES
    ('Texas Department of Public Safety', 'Texas', 'State', 'Trooper', 2800)");

echo 'Texas Department of Public Safety' . $lineBreak;


// Insert Houston Police Department
mysqli_query($conn, "INSERT INTO RashaiAgencies
    (agency_name, state, agency_type, officer_title, sworn_officers)
    VALUES
    ('Houston Police Department', 'Texas', 'Municipal', 'Police Officer', 5100)");

echo 'Houston Police Department' . $lineBreak;


// Insert United States Park Police
mysqli_query($conn, "INSERT INTO RashaiAgencies
    (agency_name, state, agency_type, officer_title, sworn_officers)
    VALUES
    ('United States Park Police', 'District of Columbia', 'Federal', 'Police Officer', 500)");

echo 'United States Park Police' . $lineBreak;

echo "<p>Agency records added successfully.</p>";

$conn->close();
?>

</body>
</html>
