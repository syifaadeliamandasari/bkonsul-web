<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketing Dashboard</title>
    <!-- Include Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
        display: flex;
        min-height: 100vh;
    }
    .sidebar {
        width: 250px;
        background-color: #D02F25; /* Sidebar background color */
        height: 100vh;
        padding: 20px;
        color: #fff; /* White text color */
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 2px 0 5px rgba(0,0,0,0.2);
    }
    .sidebar .menu-item {
        margin: 10px 0;
        font-size: 16px;
        display: flex;
        align-items: center;
        transition: background 0.3s;
        padding: 10px;
        border-radius: 5px;
        color: #fff; /* White text color */
        text-decoration: none; /* Remove underline from links */
    }
    .sidebar .menu-item:hover {
        background-color: #bf251f; /* Slightly darker red for hover effect */
    }
    .sidebar .menu-item i {
        margin-right: 10px;
        font-size: 18px;
        color: #fff; /* White icon color */
    }
    .content {
        margin-left: 250px;
        padding: 40px;
        width: calc(100% - 250px);
        min-height: 100vh;
        box-sizing: border-box;
        background-color: #f5f5f5;
    }
    .dashboard-title {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 30px;
        color: #333;
        margin-left: 20px; /* Adjust this value to move the title to the right */
    }
    .card-container {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        justify-content: flex-end; /* Align cards to the right */
    }
    .card {
        width: 270px;
        height: 150px;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0,0,0,0.15);
    }
    .card i {
        font-size: 40px;
        margin-bottom: 15px;
        color: #D02F25;
    }
    .card .count {
        font-size: 32px;
        font-weight: bold;
        color: #D02F25;
    }
    .card .label {
        font-size: 18px;
        color: #666;
        margin-top: 5px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .sidebar {
            width: 200px;
            padding: 15px;
        }
        .content {
            margin-left: 200px;
            width: calc(100% - 200px);
        }
        .card {
            width: 180px;
            height: 130px;
        }
        .dashboard-title {
            font-size: 24px;
            margin-bottom: 20px;
            margin-left: 15px; /* Adjust for responsiveness */
        }
    }

    @media (max-width: 480px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
            box-shadow: none;
        }
        .content {
            margin-left: 0;
            width: 100%;
            padding: 20px;
        }
        .card {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .dashboard-title {
            font-size: 20px;
            margin-bottom: 15px;
            margin-left: 10px; /* Adjust for small screens */
        }
    }

    .sidebar .settings-item {
        margin-top: auto; /* Push the settings item to the bottom */
        margin-bottom: 20px; /* Space above the settings item */
    }
    </style>
</head>
<body>
    <div class="sidebar">
        <div>
            <div class="menu-item"><strong>BKonsul</strong></div>
            <a href="{{ route('dashboard') }}" class="menu-item"><i class="fas fa-home"></i> Dashboard</a>
            <a href="#" class="menu-item"><i class="fas fa-ticket-alt"></i> Ticket</a>
            <a href="#" class="menu-item"><i class="fas fa-comments"></i> Chats</a>
            <a href="#" class="menu-item"><i class="fas fa-book"></i> Jurnal</a>
        </div>
        <div>
            <a href="#" class="menu-item settings-item"><i class="fas fa-cog"></i> Setting</a>
            <a href="#" class="menu-item"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </div>

    <div class="content">
        <div class="dashboard-title">Ticketing Dashboard</div>
        <div class="card-container">
            <div class="card">
                <i class="fas fa-user-graduate"></i>
                <div class="label">SISWA</div>
                <div class="count">{{ $siswa_count }}</div>
            </div>
            <div class="card">
                <i class="fas fa-exclamation-circle"></i>
                <div class="label">PRIORITY</div>
                <div class="count">{{ $priority_count }}</div>
            </div>
            <div class="card">
                <i class="fas fa-book-open"></i>
                <div class="label">JURNAL</div>
                <div class="count">{{ $jurnal_count }}</div>
            </div>
        </div>
    </div>
</body>
</html>
