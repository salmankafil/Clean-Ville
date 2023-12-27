<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Clean Ville</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
    
.faq-page-container {
    background-color: #f7f7f7;
    padding: 20px;
    text-align: center;
}

h1 {
    font-size: 32px;
    color: #333;
    margin: 20px 0;
}

.faq {
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 20px;
    margin: 20px 0;
    text-align: left;
    transition: transform 0.3s, background-color 0.3s;
}

.faq:hover {
    transform: scale(1.05);
    background-color: #f5f5f5;
}

.faq h2 {
    font-size: 24px;
    color: #333;
    margin: 10px 0;
}

.faq p {
    color: #777;
    margin: 5px 0;
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
                <li><a href="/reportissue">Report Issue</a></li>
                <li><a href="/faqs" class="active">FAQs</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="faq-page-container">
        <h1>Frequently Asked Questions</h1>
        <section class="faq">
            <h2>Q: How can I report an issue in my neighborhood?</h2>
            <p>A: You can report an issue by visiting the 'Report Issue' page and filling out the issue type and description.</p>
        </section>
        <section class="faq">
            <h2>Q: Can I volunteer for multiple events?</h2>
            <p>A: Yes, you can volunteer for as many events as you'd like. Visit the 'Dashboard' to sign up for events.</p>
        </section>
        <section class="faq">
            <h2>Q: Are there any age restrictions for volunteering with CleanVille events?</h2>
            <p>A: CleanVille encourages volunteers of all ages to participate. However, some events may have age restrictions or special requirements for safety reasons, so please check event details for specific information.</p>
        </section>
         <section class="faq">
            <h2>Q: Are there any age restrictions for volunteering with CleanVille events?</h2>
            <p>A: CleanVille encourages volunteers of all ages to participate. However, some events may have age restrictions or special requirements for safety reasons, so please check event details for specific information.</p>
        </section>
        
    </div>
</body>
</html>
