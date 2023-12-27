<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Issue - Clean Ville</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
    .issue-page-container {
    background-color: #f7f7f7;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh;
}

.issue-form {
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 20px;
    width: 40%; /* Adjust to your preferred width */
    text-align: center;
    padding-right: 40px;
}

.issue-form h2 {
    font-size: 24px;
    color: #333;
    margin: 10px 0;
}

label {
    display: block;
    margin: 10px 0;
    text-align: left;
    color: #333;
}

select, textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
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
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="/viewevent">View Events</a></li>
                <li><a href="/reportissue" class="active">Report Issue</a></li>
                <li><a href="/faqs">FAQs</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="issue-page-container">
        <section class="issue-form">
            <h2>Report an Issue</h2>
            <form>
                <label for="issue-type">Issue Type:</label>
                <select id="issue-type" name="issue-type">
                    <option value="garbage">Garbage Collection</option>
                    <option value="graffiti">Graffiti/Street Art</option>
                    <option value="park">Park Maintenance</option>
                    <option value="dumping">Illegal Dumping</option>
                    <option value="leakage">Water Leakage</option>
                    <option value="litter">Litter Accumuation</option>
                    <option value="trees">Tree Maintenance</option>
                </select>
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" cols="50" placeholder="Describe the issue..."></textarea>
                <button type="submit">Submit</button>
            </form>
        </section>
    </div>
</body>
</html>