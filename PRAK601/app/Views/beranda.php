<!DOCTYPE html>
<html lang="en" style="overflow: hidden;"> <!-- tambahkan style overflow hidden -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Beranda</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="overflow-hidden">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="http://localhost:8081">Website Randy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost:8081">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost:8081/profil">Profil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="vh-100 d-flex flex-column justify-content-center align-items-center text-center bg-dark position-relative" style="background: url('your-image.jpg') no-repeat center center/cover;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-black"></div>
    <div class="position-relative z-1">
      <h1 class="display-1 fw-bold text-light">HI! Perkenalkan, Aku:</h1>
      <p class="lead text-white-50">Nama: <?=$nama?></p>
      <p class="lead text-white-50">NIM: <?=$nim?></p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>