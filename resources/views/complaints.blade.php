<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Issues - Clean Ville</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>

.view-issues-page-container {
    background-color: #f7f7f7;
    padding: 20px;
    text-align: left;
}

.issue {
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 20px;
    margin: 20px 0;
    transition: transform 0.3s, background-color 0.3s;
}

.issue:hover {
    background-color: #f5f5f5; 
    transform: scale(1.02); 
}

.issue h2 {
    font-size: 24px;
    color: #333;
    margin: 10px 0;
}

.issue-details h3 {
    font-size: 18px;
    color: #333;
    margin: 10px 0;
}

.issue-details p {
    color: #777;
    margin: 5px 0;
}

button {
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s;
    margin-top: 10px;
}

button:hover {
    background-color: #0056b3;
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
                <li><a href="/dashboardm">Dashboard</a></li>
                <li><a href="/create_event">Create Event</a></li>
                <li><a href="/viewissue">Complaints</a></li>
                <li><a href="/view_resources">View Resources</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="view-issues-page-container">
        <section class="issue">
            <h2>Reported Issues</h2>
            <div class="issue-details">
                <h3>Issue: Pothole on Main Street</h3>
                <p>Description: A large pothole on Main Street near the park entrance is causing damage to vehicles.</p>
                <p>Reported by: Sara Ali</p>
                <button>Resolve Issue</button>
            </div>
        </section>
        <section class="issue">
            <div class="issue-details">
                <h3>Issue: Graffiti on Community Center</h3>
                <p>Description: Graffiti on the walls of the community center needs immediate cleanup.</p>
                <p>Reported by: Rida Kashif</p>
                <button>Resolve Issue</button>
            </div>
        </section>
        <section class="issue">
            <div class="issue-details">
                <h3>Issue: Litter Accumulation at the Beach</h3>
                <p>Description: The beach area has excessive litter and trash that requires cleaning.</p>
                <p>Reported by: Ahmad Khan</p>
                <button>Resolve Issue</button>
            </div>
        </section>
    </div>
</body>
</html>
