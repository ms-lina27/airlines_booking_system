<?php
require_once 'includes/config.php';

$origin = $_GET['origin'] ?? '';
$destination = $_GET['destination'] ?? '';
$departure_date = $_GET['departure_date'] ?? '';

// Secure query with prepared statement
$stmt = $conn->prepare("SELECT * FROM flights WHERE origin = ? AND destination = ? AND departure_date = ?");
$stmt->bind_param("sss", $origin, $destination, $departure_date);
$stmt->execute();
$result = $stmt->get_result();
$flights = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Flight Search Results</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Available Flights</h1>
        <?php if (empty($flights)): ?>
            <p>No flights found. Try another search.</p>
        <?php else: ?>
            <div class="flight-list">
                <?php foreach ($flights as $flight): ?>
                    <div class="flight-card">
                        <h3><?= htmlspecialchars($flight['airline']) ?> (<?= $flight['flight_number'] ?>)</h3>
                        <p>From: <?= htmlspecialchars($flight['origin']) ?></p>
                        <p>To: <?= htmlspecialchars($flight['destination']) ?></p>
                        <p>Price: $<?= number_format($flight['price'], 2) ?></p>
                        <a href="booking.php?flight_id=<?= $flight['id'] ?>" class="book-btn">Book Now</a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>