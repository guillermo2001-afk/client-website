<?php
// Include the PHP file that creates the PDO object
include 'databaseconnect.php';

// Get the value from the query string
if (isset($_GET['data'])) {
    $dataType = $_GET['data'];

    // Check if the value from the query string is invalid
    if ($dataType !== 'info' && $dataType !== 'comments') {
        echo "Invalid data type specified.";
        exit; // Stop script execution
    }

    // Write the SQL query with a placeholder for the data type
    $sql = "SELECT * FROM $dataType";

    // Use the pdo() function to execute the SQL query
    $stmt = pdo($pdo, $sql, []);

    // Write out the data to the page
    echo "<h2>Data from Database:</h2>";
    echo "<ul>";
    while ($row = $stmt->fetch()) {
        echo "<li>" . htmlspecialchars($row['Column1']) . "</li>";
        echo "<li>" . htmlspecialchars($row['Column2']) . "</li>";
        // Add more columns as needed
    }
    echo "</ul>";
} else {
    echo "Data type not specified.";
}
