<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout - Public Space Cleaning Scheduler</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>

.logout-page-container {
    background-color: #f7f7f7;
    padding: 20px;
    text-align: center;
}

.logout-message {
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 20px;
    width: 40%; /* Adjust to your preferred width */
    text-align: center;
    margin: 0 auto;
}

.logout-message h2 {
    font-size: 24px;
    color: #333;
    margin: 10px 0;
}

.logout-message p {
    color: #777;
    margin: 5px 0;
}

a {
    text-decoration: none;
    color: #007BFF;
    transition: color 0.3s;
}

a:hover {
    color: #0056b3;
}
</style>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/Clean ville.png') }}" alt="Cleaning Scheduler Logo">
        </div>
        <nav>
            <ul>
                <li><a href="/homepage">Home</a></li>
                <li><a href="/logout" class="active">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="logout-page-container">
        <section class="logout-message">
            <h2>Logged Out Successfully</h2>
            <p>Thank you for using Clean Ville. You have been successfully logged out from your account.</p>
            <p>If you wish to log in again, <a href="login.html">click here</a>.</p>
        </section>
    </div>
</body>
</html>