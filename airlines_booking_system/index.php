<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyWings - Book Your Flight</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <span>✈️</span>
                <h1>SkyWings</h1>
            </div>
            <nav>
                <a href="register.php">Register</a>
                <a href="login.php">Login</a>
            </nav>
        </div>
    </header>

    <main class="hero">
        <div class="container">
            <div class="search-card">
                <h2>Find Your Perfect Flight</h2>
                <form action="search.php" method="GET" id="searchForm">
                    <div class="form-group">
                        <label for="origin">From</label>
                        <select name="origin" id="origin" required>
                            <option value="">Select Airport</option>
                            <option value="JFK">New York (JFK)</option>
                            <option value="LAX">Los Angeles (LAX)</option>
                            <option value="ORD">Chicago (ORD)</option>
                        </select>
                    </div>

                    <div class="swap-button">
                        <button type="button" id="swapCities">⇄</button>
                    </div>

                    <div class="form-group">
                        <label for="destination">To</label>
                        <select name="destination" id="destination" required>
                            <option value="">Select Airport</option>
                            <option value="JFK">New York (JFK)</option>
                            <option value="LAX">Los Angeles (LAX)</option>
                            <option value="ORD">Chicago (ORD)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="departure_date">Departure</label>
                        <input type="date" name="departure_date" id="departure_date" required>
                    </div>

                    <div class="form-group">
                        <label for="passengers">Passengers</label>
                        <select name="passengers" id="passengers">
                            <option value="1">1 Adult</option>
                            <option value="2">2 Adults</option>
                            <option value="3">3 Adults</option>
                        </select>
                    </div>

                    <button type="submit" class="search-btn">Search Flights</button>
                </form>
            </div>
        </div>
    </main>

    <script src="js/script.js"></script>
</body>
</html>