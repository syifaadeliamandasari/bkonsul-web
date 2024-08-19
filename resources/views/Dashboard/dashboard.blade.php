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
        }
        .sidebar {
            width: 250px;
            background-color: #D02F25;
            height: 100vh;
            padding: 20px;
            color: #fff;
            position: fixed;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin-right: 1200px;
        }
        .sidebar .menu-item {
            margin: 20px 0;
            font-size: 16px;
            display: flex;
            align-items: center;
            transition: background 0.3s;
            padding: 10px;
            border-radius: 5px;
        }
        .sidebar .menu-item:hover {
            background-color: #bf251f;
        }
        .sidebar .menu-item i {
            margin-right: 10px;
            font-size: 18px;
        }
        .content {
            margin-left: 270px;
            padding: 40px;
            width: calc(100% - 270px);
            min-height: 100vh;
            box-sizing: border-box;
            background-color: #f5f5f5;
        }
        .dashboard-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #333;
        }
        .card-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
        .card {
            width: 220px;
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
    </style>
</head>
<body>
    <div class="sidebar">
        <div>
            <div class="menu-item"><strong>BKonsul</strong></div>
            <div class="menu-item"><i class="fas fa-home"></i> Dashboard</div>
            <div class="menu-item"><i class="fas fa-ticket-alt"></i> Ticket</div>
            <div class="menu-item"><i class="fas fa-comments"></i> Chats</div>
            <div class="menu-item"><i class="fas fa-book"></i> Jurnal</div>
        </div>
        <div class="menu-item"><i class="fas fa-cog"></i> Setting</div>
    </div>
    <div class="content">
        <div class="dashboard-title">Ticketing Dashboard</div>
        <div class="card-container">
            <div class="card">
                <i class="fas fa-user-graduate"></i>
                <div class="label">SISWA</div>
                <div class="count">{{-- {{ $siswa_count }} --}}</div>
            </div>
            <div class="card">
                <i class="fas fa-exclamation-circle"></i>
                <div class="label">PRIORITY</div>
                <div class="count">{{-- {{ $priority_count }} --}}</div>
            </div>
            <div class="card">
                <i class="fas fa-book-open"></i>
                <div class="label">JURNAL</div>
                <div class="count">{{-- {{ $jurnal_count }} --}}</div>
            </div>
        </div>
    </div>
</body>
</html>
