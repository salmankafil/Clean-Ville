@auth
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Clean Ville</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
    @include('partials.user_header')
    <div class="dashboard-container">
        <section class="welcome-message">
            <h2>Welcome, {{auth()->user()->name}}!</h2>
        
        </section>
        <section class="calendar-view">
           
        </section>
        <section class="task-assignments">
            <h3>Upcoming Tasks </h3>
            <table>
                <thead>
                    <tr>
                        <th>Event</th>
                        <th>Location</th>
                        <th>Task</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Park Cleaning</td>
                        <td>Ayub Park</td>
                        <td>Collect litter and trash</td>
                        <td>October 20, 2023</td>
                        <td>Completed</td>
                    </tr>
                
                    <tr>
                        <td>Riverbank CleanUp</td>
                        <td>Hawksbay Beach</td>
                        <td>Inspect and maintain river access points</td>
                        <td>November 5, 2023</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>Community Garden Care</td> 
                        <td>F-9 Garden Park</td>
                        <td>Weed and maintain garden beds</td>
                        <td>October 30, 2023</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>Street Art Removal</td>
                        <td>Gulberg Road</td>
                        <td>Graffiti removal</td>
                        <td>December 10, 2023</td>
                        <td>Pending</td>
                    </tr>
                   
                </tbody>
            </table>
        </section>
        
    </div>
    
</body>
</html>
@endauth