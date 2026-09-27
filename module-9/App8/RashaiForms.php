<?php
/*
    Rashai Robertson
    Bellevue University
    CSD-440
    September 27, 2026
    Module Assignment 9

*/

$conn = new mysqli("localhost", "student1", "pass", "baseball_01");

if ($conn->connect_error) {
    die("Connection failed: " . htmlspecialchars($conn->connect_error));
}

function e($value): string {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

$agencyName = '';
$state = '';
$agencyType = '';
$officerTitle = '';
$swornOfficers = '';
$message = '';
$messageClass = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $agencyName = trim($_POST['agency_name'] ?? '');
    $state = trim($_POST['state'] ?? '');
    $agencyType = trim($_POST['agency_type'] ?? '');
    $officerTitle = trim($_POST['officer_title'] ?? '');
    $swornOfficers = trim($_POST['sworn_officers'] ?? '');

    if ($agencyName === '' || $state === '' || $agencyType === '' || $officerTitle === '' || $swornOfficers === '') {
        $message = 'Please complete every field.';
        $messageClass = 'error';
    } elseif (filter_var($swornOfficers, FILTER_VALIDATE_INT) === false || (int)$swornOfficers < 0) {
        $message = 'Sworn Officers must be a whole number of zero or greater.';
        $messageClass = 'error';
    } else {
        $sql = "INSERT INTO RashaiAgencies
                (agency_name, state, agency_type, officer_title, sworn_officers)
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $officerCount = (int)$swornOfficers;
            $stmt->bind_param("ssssi", $agencyName, $state, $agencyType, $officerTitle, $officerCount);

            if ($stmt->execute()) {
                $message = 'Agency record added successfully. New Agency ID: ' . $stmt->insert_id;
                $messageClass = 'success';
                $agencyName = $state = $agencyType = $officerTitle = $swornOfficers = '';
            } else {
                $message = 'Error adding record: ' . $stmt->error;
                $messageClass = 'error';
            }

            $stmt->close();
        } else {
            $message = 'Unable to prepare the insert statement.';
            $messageClass = 'error';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rashai Forms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <h1>Add an Agency Record</h1>

        <nav class="top-nav" aria-label="Main navigation">
            <a href="RashaiIndex.php">Home</a>
            <a href="RashaiQuery.php">Search Records</a>
            <a href="RashaiQueryTable.php">View All Records</a>
        </nav>

        <?php if ($message !== ''): ?>
            <p class="message <?= e($messageClass) ?>"><?= e($message) ?></p>
        <?php endif; ?>

        <section class="card form-card">
            <form method="post" action="RashaiForms.php" class="form-layout">
                <div>
                    <label for="agency_name">Agency Name</label>
                    <input id="agency_name" name="agency_name" type="text" maxlength="100" required value="<?= e($agencyName) ?>">
                </div>

                <div>
                    <label for="state">State</label>
                    <input id="state" name="state" type="text" maxlength="50" required value="<?= e($state) ?>">
                </div>

                <div>
                    <label for="agency_type">Agency Type</label>
                    <input id="agency_type" name="agency_type" type="text" maxlength="50" required value="<?= e($agencyType) ?>" placeholder="Example: State, Municipal, Federal">
                </div>

                <div>
                    <label for="officer_title">Officer Title</label>
                    <input id="officer_title" name="officer_title" type="text" maxlength="50" required value="<?= e($officerTitle) ?>" placeholder="Example: Trooper or Police Officer">
                </div>

                <div>
                    <label for="sworn_officers">Sworn Officers</label>
                    <input id="sworn_officers" name="sworn_officers" type="number" min="0" step="1" required value="<?= e($swornOfficers) ?>">
                </div>

                <button type="submit">Add Record</button>
            </form>
        </section>
    </main>
</body>
</html>
<?php $conn->close(); ?>
