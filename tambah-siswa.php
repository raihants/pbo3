<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>

    <style>
        /* Reset default browser styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin-top: 80px;
            padding: 15px;
        }

        .card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: white;
            padding: 16px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-body {
            padding: 24px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 8px;
            color: #333;
        }

        .form-group input[type="text"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            color: #333;
        }

        .form-group textarea {
            resize: none;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-success {
            background-color: #28a745;
            color: white;
            margin-right: 10px;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .btn-warning {
            background-color: #ffc107;
            color: white;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        /* Responsive layout */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
                margin-top: 40px;
            }

            .card-body {
                padding: 16px;
            }
        }
    </style>
</head>

<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            TAMBAH SISWA
        </div>
        <div class="card-body">
            <form action="simpan-siswa.php" method="POST">
                
                <div class="form-group">
                    <label>NISN</label>
                    <input type="text" name="nisn" placeholder="Masukkan NISN Siswa" required>
                </div>

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Siswa" required>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" placeholder="Masukkan Alamat Siswa" rows="4" required></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

            </form>
        </div>
    </div>
</div>

</body>
</html>
