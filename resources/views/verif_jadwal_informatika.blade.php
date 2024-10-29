<!-- resources/views/jadwal.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Program Studi Informatika</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #3c8dbc;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
        }

        .main-content {
            padding: 30px;
        }

        .main-content h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .table-container {
            margin-top: 20px;
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #f2f2f2;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .buttons-container {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-confirm {
            background-color: #4CAF50;
            color: white;
        }

        .btn-decline {
            background-color: #f44336;
            color: white;
        }

        /* Popup styling */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            z-index: 100;
            width: 300px;
        }

        .popup h3 {
            margin-top: 0;
        }

        .popup-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .popup .btn {
            width: 45%;
        }

        /* Overlay */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 50;
        }

    </style>
</head>
<body>

    <div class="header">
        <h1>JADWAL PROGRAM STUDI INFORMATIKA</h1>
    </div>

    <div class="main-content">
        <h2>Semester 1</h2>
        
        <!-- Tabel Jadwal -->
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode MK</th>
                        <th>Mata Kuliah</th>
                        <th>Ruang Kelas</th>
                        <th>Waktu</th>
                        <th>SKS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PAIK 9987</td>
                        <td>Dasar Pemrograman</td>
                        <td>E101</td>
                        <td>SENIN, 07:00-09:30</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>PAIK 9987</td>
                        <td>Dasar Pemrograman</td>
                        <td>E101</td>
                        <td>SENIN, 13:00-15:30</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>PAIK 9987</td>
                        <td>Dasar Pemrograman</td>
                        <td>E103</td>
                        <td>SELASA, 07:00-09:30</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>PAIK 4567</td>
                        <td>Logika Informatika</td>
                        <td>E104</td>
                        <td>RABU, 07:00-09:30</td>
                        <td>3</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Tombol Aksi -->
        <div class="buttons-container">
            <button class="btn btn-decline" id="decline-btn">Tolak</button>
            <button class="btn btn-confirm" id="confirm-btn">Setujui</button>
        </div>
    </div>

    <!-- Popup Konfirmasi -->
    <div class="overlay" id="overlay"></div>

    <div class="popup" id="popup">
        <h3>Konfirmasi</h3>
        <p>Apakah menyetujui Usulan Jadwal Kuliah ini?</p>
        <div class="popup-buttons">
            <button class="btn btn-decline" id="no-btn">Tidak</button>
            <button class="btn btn-confirm" id="yes-btn">Ya</button>
        </div>
    </div>

    <script>
        // Handle Popup
        const confirmBtn = document.getElementById('confirm-btn');
        const declineBtn = document.getElementById('decline-btn');
        const popup = document.getElementById('popup');
        const overlay = document.getElementById('overlay');
        const noBtn = document.getElementById('no-btn');
        const yesBtn = document.getElementById('yes-btn');

        confirmBtn.addEventListener('click', () => {
            popup.style.display = 'block';
            overlay.style.display = 'block';
        });

        declineBtn.addEventListener('click', () => {
            popup.style.display = 'block';
            overlay.style.display = 'block';
        });

        noBtn.addEventListener('click', () => {
            popup.style.display = 'none';
            overlay.style.display = 'none';
        });

        yesBtn.addEventListener('click', () => {
            popup.style.display = 'none';
            overlay.style.display = 'none';
            // Add further confirmation logic here
        });
    </script>

</body>
</html>
