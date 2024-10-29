<!-- resources/views/pilih-jurusan.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Jurusan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
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

        .jurusan-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-left: 50px;
        }

        .jurusan-container a {
            text-decoration: none;
            color: black;
            font-size: 20px;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 200px;
        }

        .jurusan-container a:hover {
            color: #007bff;
        }

        .jurusan-container a span {
            margin-left: auto;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>JADWAL PROGRAM STUDI</h1>
    </div>

    <div class="main-content">
        <div class="jurusan-container">
            <a href="{{ route('verifikasi_jadwal', ['jurusan' => 'informatika']) }}">
                INFORMATIKA <span>&#9654;</span>
            </a>
            <a href="{{ route('verifikasi_jadwal', ['jurusan' => 'matematika']) }}">
                MATEMATIKA <span>&#9654;</span>
            </a>
            <a href="{{ route('verifikasi_jadwal', ['jurusan' => 'fisika']) }}">
                FISIKA <span>&#9654;</span>
            </a>
            <a href="{{ route('verifikasi_jadwal', ['jurusan' => 'statistika']) }}">
                STATISTIKA <span>&#9654;</span>
            </a>
            <a href="{{ route('verifikasi_jadwal', ['jurusan' => 'kimia']) }}">
                KIMIA <span>&#9654;</span>
            </a>
            <a href="{{ route('verifikasi_jadwal', ['jurusan' => 'biologi']) }}">
                BIOLOGI <span>&#9654;</span>
            </a>
            <a href="{{ route('verifikasi_jadwal', ['jurusan' => 'bioteknologi']) }}">
                BIOTEKNOLOGI <span>&#9654;</span>
            </a>
        </div>
    </div>

</body>
</html>
