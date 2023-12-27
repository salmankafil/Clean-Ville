@auth
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Public Space Cleaning Scheduler</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">

</head>

<body>
     @include('partials.admin_header')
    <div class="dashboard-container">
        <section class="welcome-message">
            <h2>Welcome, {{ auth()->user()->name }}!</h2>
        </section>
        <section class="calendar-view">
            
        </section>
        <section class="task-assignments">
            <h3>Task Assignments</h3>
            <table>
                <thead>
                    <tr>
                        <th>Event</th>
                        <th>Location</th>
                        <th>Task</th>
                        <th>Date</th>
                        <th>Volunteer</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Clean National Park</td>
                        <td>Ayub Park</td>
                        <td>Collect litter and trash</td>
                        <td>October 20, 2023</td>
                        <td>Sara Ali</td>
                        <td>
                            <select style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                                <option value="completed" selected>Completed</option>
                                <option value="pending">Pending</option>
                                <option value="in_progress">In Progress</option>
                            </select>
                        </td>

                    </tr>

                    <tr>
                        <td>Clean National Park</td>
                        <td>F-9 Park</td>
                        <td>Trim overgrown vegetation.</td>
                        <td>October 20, 2023</td>
                        <td>Rida Kashif</td>
                        <td>
                            <select>
                                <option value="completed" selected>Completed</option>
                                <option value="pending">Pending</option>
                                <option value="in_progress">In Progress</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Clean National Park</td>
                        <td>Aladin Park</td>
                        <td>Collect litter and trash</td>
                        <td>October 20, 2023</td>
                        <td>Saad Khan</td>
                        <td>
                            <select>
                                <option value="completed" selected>Completed</option>
                                <option value="pending">Pending</option>
                                <option value="in_progress">In Progress</option>
                            </select>
                        </td>
                    </tr>
                
                    <tr>
                        <td>Riverbank CleanUp</td>
                        <td>French Beach</td>
                        <td>Inspect and maintain river access points</td>
                        <td>November 5, 2023</td>
                        <td>Sara Ali</td>
                        <td  class ='status'>
                            <select class='status_dropdown'>
                                <option value="completed" selected>Completed</option>
                                <option value="pending">Pending</option>
                                <option value="in_progress">In Progress</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Riverbank CleanUp</td>
                        <td>Hawksbay Beach</td>
                        <td>Remove debris and litter from the riverbank.</td>
                        <td>November 5, 2023</td>
                        <td>Assad Tanveer</td>
                        <td class ='status'>
                            <select class='status_dropdown'>
                                <option value="completed" selected>Completed</option>
                                <option value="pending">Pending</option>
                                <option value="in_progress">In Progress</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Riverbank CleanUp</td>
                        <td>Hawksbay Beach</td>
                        <td>Inspect and maintain river access points</td>
                        <td>November 5, 2023</td>
                        <td>Ayesha Asif</td>
                        <td>
                            <select>
                                <option value="completed" selected>Completed</option>
                                <option value="pending">Pending</option>
                                <option value="in_progress">In Progress</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Riverbank CleanUp</td>
                        <td>Hawksbay Beach</td>
                        <td>Plant native trees and shrubs for conservation.</td>
                        <td>November 5, 2023</td>
                        <td>Salar Ali</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>Community Garden Care</td>
                        <td>Gulberg Garden</td>
                        <td>Weed and maintain garden beds</td>
                        <td>October 30, 2023</td>
                        <td>Laiba Haroon</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>Street Art Removal</td>
                        <td>Saddar Road</td>
                        <td>Graffiti removal</td>
                        <td>December 10, 2023</td>
                        <td>Rida Kashif</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>Street Art Removal</td>
                        <td>Defence Road</td>
                        <td>Graffiti removal</td>
                        <td>December 10, 2023</td>
                        <td>Dua Fatima</td>
                        <td>Pending</td>
                    </tr>
                   
                </tbody>
            </table>
        </section>
        
    </div>
   
</body>
</html>
@endauth