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
            @foreach ($complaints as $complaint)     
            <div class="issue-details">
                <h3>Title: {{$complaint->complaint_type}}</h3>
                <p>Description: {{$complaint->description}}</p>
                <p>Reported by: {{$complaint->user_name}}</p>
                <button>Resolve Issue</button>ar
            </div>
            @endforeach
        </section>

    </div>
</body>
</html>
