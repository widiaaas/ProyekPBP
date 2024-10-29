<!-- resources/views/verifikasi_jadwal.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Jadwal {{ ucfirst($jurusan) }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #3c8dbc;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .main-content {
            padding: 30px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
            gap: 20px;
            margin-top: 20px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-setujui {
            background-color: #4CAF50;
            color: white;
        }

        .btn-tolak {
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
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .popup-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .popup .btn {
            width: 45%;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 500;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Verifikasi Jadwal Program Studi {{ ucfirst($jurusan) }}</h1>
    </div>

    <div class="main-content">
        <!-- Tabel Jadwal -->
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
                <!-- Tambahkan lebih banyak data jadwal jika diperlukan -->
            </tbody>
        </table>

        <!-- Tombol Setujui dan Tolak -->
        <div class="button-container">
            <button class="btn btn-tolak" id="tolak-btn">Tolak</button>
            <button class="btn btn-setujui" id="setujui-btn">Setujui</button>
        </div>

        <!-- Popup Konfirmasi -->
        <div class="overlay" id="overlay"></div>
        <div class="popup" id="popup">
            <h3>Konfirmasi</h3>
            <p>Apakah Anda ingin menyetujui jadwal ini?</p>
            <div class="popup-buttons">
                <button class="btn btn-tolak" id="popup-tolak">Tidak</button>
                <button class="btn btn-setujui" id="popup-setujui">Ya</button>
            </div>
        </div>

    </div>

    <script>
        const setujuiBtn = document.getElementById('setujui-btn');
        const popup = document.getElementById('popup');
        const overlay = document.getElementById('overlay');
        const popupSetujui = document.getElementById('popup-setujui');
        const popupTolak = document.getElementById('popup-tolak');

        setujuiBtn.addEventListener('click', () => {
            popup.style.display = 'block';
            overlay.style.display = 'block';
        });

        popupTolak.addEventListener('click', () => {
            popup.style.display = 'none';
            overlay.style.display = 'none';
        });

        popupSetujui.addEventListener('click', () => {
            // Logika untuk menyetujui jadwal
            popup.style.display = 'none';
            overlay.style.display = 'none';
            alert('Jadwal disetujui!');
        });
    </script>

</body>
</html>
