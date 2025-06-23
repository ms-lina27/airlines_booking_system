<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "airline_booking";

// Connect to database
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
} else {
    echo "✅ Connected successfully to the database.<br>";
}

// Sample query to check if table has data
$sql = "SELECT * FROM flights"; // Replace with your table name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "📋 Data from the table:<br><ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row['id']) . "</li>"; // Replace 'column_name'
    }
    echo "</ul>";
} else {
    echo "⚠️ No data found in the table.";
}

$conn->close();
?>
