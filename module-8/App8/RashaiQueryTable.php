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
    <title>Agency Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Law Enforcement Agencies</h1>

<?php

$conn = new mysqli("localhost", "student1", "pass", "baseball_01");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM RashaiAgencies";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error retrieving records: " . mysqli_error($conn));
}
?>

<table>
    <tr>
        <th>Agency ID</th>
        <th>Agency Name</th>
        <th>State</th>
        <th>Agency Type</th>
        <th>Officer Title</th>
        <th>Sworn Officers</th>
    </tr>

<?php
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
        <td><?php echo $row["agency_id"]; ?></td>
        <td><?php echo $row["agency_name"]; ?></td>
        <td><?php echo $row["state"]; ?></td>
        <td><?php echo $row["agency_type"]; ?></td>
        <td><?php echo $row["officer_title"]; ?></td>
        <td><?php echo $row["sworn_officers"]; ?></td>
    </tr>
<?php
    }
} else {
    echo "<tr><td colspan='6'>No records found.</td></tr>";
}

$conn->close();
?>
</table>

</body>
</html>
