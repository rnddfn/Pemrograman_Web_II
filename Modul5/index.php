<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Perpustakaan</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .dashboard-card {
            background-color: #9ec5fe;
            color: #fff;
            border-radius: 12px;
            padding: 30px 20px;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .dashboard-icon {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .btn-light {
            background-color: #fff;
            color: #000;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Dashboard Perpustakaan</h2>
        <div class="row g-4">
            <div class="col-md-4 col-12">
                <div class="dashboard-card text-center">
                    <div class="dashboard-icon"><i class="bi bi-people-fill"></i></div>
                    <h4>Tabel Member</h4>
                    <a href="member.php" class="btn btn-light mt-2">Go</a>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="dashboard-card text-center">
                    <div class="dashboard-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                    <h4>Tabel Peminjaman</h4>
                    <a href="peminjaman.php" class="btn btn-light mt-2">Go</a>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="dashboard-card text-center">
                    <div class="dashboard-icon"><i class="bi bi-book-half"></i></div>
                    <h4>Tabel Buku</h4>
                    <a href="buku.php" class="btn btn-light mt-2">Go</a>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>