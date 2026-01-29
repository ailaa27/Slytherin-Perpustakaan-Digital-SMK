<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan Digital</title>

    <!-- Font & Icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #f1f5f9;
        }

        .wrapper {
            display: flex;
            height: 100vh;
        }

        /* SIDEBAR */
        .sidebar {
            width: 230px;
            background: #1e40af;
            color: white;
            padding: 20px;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 12px;
            margin-bottom: 10px;
            text-decoration: none;
            border-radius: 8px;
        }

        .sidebar a:hover {
            background: #3b82f6;
        }

        /* MAIN */
        .main {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* HEADER */
        .header {
            background: white;
            padding: 15px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,.1);
        }

        .user {
            font-weight: bold;
            color: #1e40af;
        }

        /* CONTENT */
        .content {
            padding: 25px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px,1fr));
            gap: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0,0,0,.08);
        }

        .card i {
            font-size: 30px;
            color: #2563eb;
        }

        .card h3 {
            margin: 10px 0 5px;
        }
    </style>
</head>

<body>

<div class="wrapper">

    <!-- SIDEBAR -->
 <div class="sidebar">
    <h2>📚 Library</h2>
    <a href="/dashboard"><i class="fas fa-chart-line"></i> Dashboard</a>
    <a href="/rak-buku"><i class="fas fa-layer-group"></i> Rak Buku</a>
    <a href="/books"><i class="fas fa-book"></i> Daftar Buku</a>
    <a href="/loans"><i class="fas fa-repeat"></i> Peminjaman</a>
    <a href="/services"><i class="fas fa-concierge-bell"></i> Layanan</a>
    <a href="/settings"><i class="fas fa-gear"></i> Pengaturan</a>
</div>
    <!-- MAIN -->
    <div class="main">
        <div class="header">
            <h3>Dashboard Perpustakaan</h3>
            <span class="user">
                👤 {{ session('user') ?? 'Admin' }}
            </span>
        </div>

        <div class="content">
            @yield('content')
        </div>
    </div>

</div>

</body>
</html>
