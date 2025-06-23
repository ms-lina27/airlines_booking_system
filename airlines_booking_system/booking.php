<?php require_once 'includes/config.php'; 
// Flight ID validation and retrieval code would go here
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Complete Booking | SkyWings</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <!-- Same header -->
    </header>

    <main class="container">
        <h1>Complete Your Booking</h1>
        
        <div class="booking-summary">
            <h3>Flight Details</h3>
            <!-- Flight details would be dynamically inserted here -->
        </div>
        
        <form action="process_booking.php" method="POST" class="booking-form">
            <input type="hidden" name="flight_id" value="<?= $_GET['flight_id'] ?>">
            <input type="hidden" name="passengers" value="<?= $_GET['passengers'] ?>">
            
            <h3>Passenger Information</h3>
            
            <?php for ($i = 1; $i <= ($_GET['passengers'] ?? 1); $i++): ?>
                <fieldset class="passenger-form">
                    <legend>Passenger <?= $i ?></legend>
                    
                    <div class="form-group">
                        <label for="first_name_<?= $i ?>">First Name</label>
                        <input type="text" name="passengers[<?= $i ?>][first_name]" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="last_name_<?= $i ?>">Last Name</label>
                        <input type="text" name="passengers[<?= $i ?>][last_name]" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email_<?= $i ?>">Email</label>
                        <input type="email" name="passengers[<?= $i ?>][email]" required>
                    </div>
                </fieldset>
            <?php endfor; ?>
            
            <h3>Payment Information</h3>
            <!-- Payment form fields would go here -->
            
            <button type="submit" class="btn">Confirm Booking</button>
        </form>
    </main>
</body>
</html>