<!DOCTYPE html>
<html lang="en">

<!--
    Rashai Robertson
    Bellevue University
    CSD-440
    September 6, 2026
    Module Assignment 5
-->



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RashaiCustomers</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <h1>Customer Records</h1>

    <?php

    // Create an array containing at least 10 customers.
    $customers = [
        ["first_name" => "James",   "last_name" => "Wilson",   "age" => 28, "phone" => "713-555-1001"],
        ["first_name" => "Maria",   "last_name" => "Garcia",   "age" => 34, "phone" => "717-555-1002"],
        ["first_name" => "David",   "last_name" => "Johnson",  "age" => 42, "phone" => "713-555-1003"],
        ["first_name" => "Ashley",  "last_name" => "Brown",    "age" => 25, "phone" => "610-555-1004"],
        ["first_name" => "Michael", "last_name" => "Davis",    "age" => 37, "phone" => "713-555-1005"],
        ["first_name" => "Sarah",   "last_name" => "Miller",   "age" => 31, "phone" => "813-555-1006"],
        ["first_name" => "Daniel",  "last_name" => "Martinez", "age" => 46, "phone" => "713-555-1007"],
        ["first_name" => "Emily",   "last_name" => "Taylor",   "age" => 29, "phone" => "484-555-1008"],
        ["first_name" => "Robert",  "last_name" => "Anderson", "age" => 55, "phone" => "713-555-1009"],
        ["first_name" => "Jessica", "last_name" => "Thomas",   "age" => 40, "phone" => "903-555-1010"]
    ];

    // Display the complete customer array in a table.
    echo "<h2>All Customers</h2>";
    echo "<table>";
    echo "<tr><th>First Name</th><th>Last Name</th><th>Age</th><th>Phone Number</th></tr>";

    foreach ($customers as $customer) {
        echo "<tr>";
        echo "<td>" . $customer["first_name"] . "</td>";
        echo "<td>" . $customer["last_name"] . "</td>";
        echo "<td>" . $customer["age"] . "</td>";
        echo "<td>" . $customer["phone"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    // Use array_column() and array_search() to find a customer by last name.
    $lastNames = array_column($customers, "last_name");
    $lastNamePosition = array_search("Miller", $lastNames);

    echo "<h2>Search by Last Name</h2>";

    if ($lastNamePosition !== false) {
        $customer = $customers[$lastNamePosition];
        echo "<p>";
        echo $customer["first_name"] . " " . $customer["last_name"] .
             " is " . $customer["age"] . " years old. Phone: " .
             $customer["phone"];
        echo "</p>";
    }

    // Use array_filter() to find customers who are age 40 or older.
    $olderCustomers = array_filter($customers, function ($customer) {
        return $customer["age"] >= 40;
    });

    echo "<h2>Customers Age 40 or Older</h2>";
    echo "<ul>";

    foreach ($olderCustomers as $customer) {
        echo "<li>" .
             $customer["first_name"] . " " .
             $customer["last_name"] . " - Age " .
             $customer["age"] .
             "</li>";
    }

    echo "</ul>";

    // Use array_column() and array_search() to find a customer by phone number.
    $phoneNumbers = array_column($customers, "phone");
    $phonePosition = array_search("610-555-1004", $phoneNumbers);

    echo "<h2>Search by Phone Number</h2>";

    if ($phonePosition !== false) {
        $customer = $customers[$phonePosition];
        echo "<p>Phone 610-555-1004 belongs to " .
             $customer["first_name"] . " " .
             $customer["last_name"] . ".</p>";
    }

    ?>
</body>
</html>
