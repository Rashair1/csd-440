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

$search = trim($_GET['search'] ?? '');
$field = $_GET['field'] ?? 'agency_name';

// Only allow known column names. Column names cannot be parameterized.
$allowedFields = [
    'agency_name' => 'Agency Name',
    'state' => 'State',
    'agency_type' => 'Agency Type',
    'officer_title' => 'Officer Title'
];

if (!array_key_exists($field, $allowedFields)) {
    $field = 'agency_name';
}

$result = null;
$errorMessage = '';

if ($search !== '') {
    $sql = "SELECT agency_id, agency_name, state, agency_type, officer_title, sworn_officers
            FROM RashaiAgencies
            WHERE $field LIKE ?
            ORDER BY agency_name";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $searchValue = "%" . $search . "%";
        $stmt->bind_param("s", $searchValue);
        $stmt->execute();
        $result = $stmt->get_result();
    } else {
        $errorMessage = "Unable to prepare the search query.";
    }
}

function e($value): string {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rashai Query</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <h1>Search Agency Records</h1>

        <nav class="top-nav" aria-label="Main navigation">
            <a href="RashaiIndex.php">Home</a>
            <a href="RashaiForms.php">Add Record</a>
            <a href="RashaiQueryTable.php">View All Records</a>
        </nav>

        <section class="card">
            <form method="get" action="RashaiQuery.php" class="form-layout">
                <div>
                    <label for="field">Search By</label>
                    <select id="field" name="field">
                        <?php foreach ($allowedFields as $column => $label): ?>
                            <option value="<?= e($column) ?>" <?= $field === $column ? 'selected' : '' ?>>
                                <?= e($label) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div>
                    <label for="search">Search Term</label>
                    <input id="search" name="search" type="text" value="<?= e($search) ?>" required maxlength="100" placeholder="Enter search text">
                </div>

                <button type="submit">Search</button>
            </form>
        </section>

        <?php if ($errorMessage !== ''): ?>
            <p class="message error"><?= e($errorMessage) ?></p>
        <?php elseif ($search !== '' && $result !== null): ?>
            <section class="card">
                <h2>Search Results</h2>
                <p>Searching <strong><?= e($allowedFields[$field]) ?></strong> for “<?= e($search) ?>”.</p>

                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>Agency ID</th>
                                <th>Agency Name</th>
                                <th>State</th>
                                <th>Agency Type</th>
                                <th>Officer Title</th>
                                <th>Sworn Officers</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if ($result->num_rows > 0): ?>
                            <?php while ($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?= e($row['agency_id']) ?></td>
                                    <td><?= e($row['agency_name']) ?></td>
                                    <td><?= e($row['state']) ?></td>
                                    <td><?= e($row['agency_type']) ?></td>
                                    <td><?= e($row['officer_title']) ?></td>
                                    <td><?= e(number_format((int)$row['sworn_officers'])) ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6">No matching agency records were found.</td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </section>
        <?php endif; ?>
    </main>
</body>
</html>
<?php
if (isset($stmt) && $stmt instanceof mysqli_stmt) {
    $stmt->close();
}
$conn->close();
?>
