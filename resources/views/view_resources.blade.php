<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Resources - Public Space Cleaning Scheduler</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
    /* Your existing CSS styles remain unchanged */

    .view-resources-page-container {
        background-color: #f7f7f7;
        padding: 20px;
        text-align: center;
    }

    .resource-list {
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 20px;
        width: 70%; 
        text-align: center;
        margin: 0 auto;
    }

    .resource-list h2 {
        font-size: 24px;
        color: #333;
        margin: 10px 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    table th, table td {
        border: 1px solid #ddd;
        padding: 10px;
    }

    table th {
        background-color: #007BFF;
        color: #fff;
    }

    table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    table tbody tr:hover {
        background-color: #ddd;
    }

    .add-remove-buttons {
        margin-top: 20px;
        display: flex;
        justify-content: center;
    }

    button {
        background-color: #007BFF;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        padding: 8px 16px;
        margin: 0 10px;
        cursor: pointer;
        transition: background-color 0.3s;
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
                <li><a href="/viewissues">Complaints</a></li>
                <li><a href="/view_resources" class="active">View Resources</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="view-resources-page-container">
        <section class="resource-list">
            <h2>Available Resources</h2>
            <table id="resourceTable">
                <thead>
                    <tr>
                        <th>Resource</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Trash Bags</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td>Gloves</td>
                        <td>500</td>
                    </tr>
                    <tr>
                        <td>Brooms</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>Shovels</td>
                        <td>150</td>
                    </tr>
                    <tr>
                        <td>Safety Vests</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <td>Cleaning Chemicals</td>
                        <td>500</td>
                    </tr>
                    <tr>
                        <td>Planting Tools</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Wheelbarrows</td>
                        <td>50</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <div class="add-remove-buttons">
            <button onclick="addResource()">Add Resource</button>
            <button onclick="removeResource()">Remove Resource</button>
        </div>
    </div>

    <script>
        function addResource() {
            var table = document.getElementById("resourceTable").getElementsByTagName('tbody')[0];
            var newRow = table.insertRow(table.rows.length);
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            cell1.innerHTML = "New Resource";
            cell2.innerHTML = "1";
        }

        function removeResource() {
            var table = document.getElementById("resourceTable").getElementsByTagName('tbody')[0];
            if (table.rows.length > 0) {
                table.deleteRow(table.rows.length - 1);
            }
        }
    </script>
</body>
</html>
