<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        /* Header styling */
        .header {
            background-color: #3c8dbc;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }

        .header .logout {
            cursor: pointer;
            background-color: #f44336;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }

        /* Main content styling */
        .main-content {
            padding: 30px;
            text-align: center;
        }

        .profile-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }

        .profile-section img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #ccc;
            margin-bottom: 15px; /* Tambahkan margin untuk spasi antara gambar dan tombol */
        }

        .btn-profile {
            background-color: #d8a354;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            display: inline-block;
            margin-top: 10px; 
            margin-bottom: 15px; /* Tambahkan margin untuk menempatkan tombol di tengah */
        }

        .profile-section h2 {
            margin: 5px 0;
            font-size: 22px;
            font-weight: bold;
        }

        .profile-section p {
            font-size: 18px;
            color: #555;
            margin: 5px 0;
        }

        /* Menu container */
        .menu-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .menu-card {
            background-color: #4a90e2;
            color: white;
            width: 220px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .menu-card:hover {
            background-color: #a9a9a9;
        }

        .menu-card img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <h1>Dashboard</h1>
        <a href="#" class="logout">LogOut</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Profile Section -->
        <div class="profile-section">
            <img src="https://via.placeholder.com/100" alt="Profile Picture">
            <a href="#" class="btn-profile">Lihat Profil</a>
            <h2>Prof. Dr. Susilo Budi, S.Si., M.Si.</h2>
            <p>NIP: 1233535454</p>
        </div>

        <!-- Menu Container -->
        <div class="menu-container">
            <div class="menu-card">
                <img src="https://via.placeholder.com/30" alt="Icon">
                Kuliah Online
            </div>
            <div class="menu-card">
                <img src="https://via.placeholder.com/30" alt="Icon">
                Jadwal Mengajar
            </div>
            <div class="menu-card">
                <img src="https://via.placeholder.com/30" alt="Icon">
                Akses IRS
            </div>
            <div class="menu-card">
                <img src="https://via.placeholder.com/30" alt="Icon">
                Verifikasi IRS
            </div>
            <div class="menu-card">
                <img src="https://via.placeholder.com/30" alt="Icon">
                Berita
            </div>
            <div class="menu-card">
                <img src="https://via.placeholder.com/30" alt="Icon">
                Informasi Perubahan Pertemuan Perkuliahan
            </div>
            <div class="menu-card">
                <img src="https://via.placeholder.com/30" alt="Icon">
                Pengelolaan Ruangan 
            </div>
            <div class="menu-card">
                <img src="https://via.placeholder.com/30" alt="Icon">
                Verifikasi Jadwal Dosen dan Mata Kuliah
            </div>
        </div>
    </div>

</body>
</html>
