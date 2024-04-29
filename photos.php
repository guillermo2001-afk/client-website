<?php
// Include the PHP file that creates the PDO object
include 'databaseconnect.php';

// SQL statement to retrieve data from the database
$sql = "SELECT * FROM info";

// Run the SQL statement and store the PDOStatement object in a variable
$stmt = $pdo->query($sql);

// Check if the query returned data
if ($stmt->rowCount() > 0) {
    // Fetch all rows of data and store it as an associative array
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display the data on the page
    echo "<h2>Data from Database:</h2>";
    echo "<ul>";
    foreach ($data as $row) {
        echo "<li>Title: " . htmlspecialchars($row['Titles']) . "</li>";
        echo "<li>Date: " . htmlspecialchars($row['Dates']) . "</li>";
        echo "<li>Description: " . htmlspecialchars($row['Descriptions']) . "</li>";
        echo "<li>Sunset Time: " . htmlspecialchars($row['Sunset Time']) . "</li>";
    }
    echo "</ul>";
} else {
    // If no matching data found, display a message
    echo "No data found in the database.";
}
