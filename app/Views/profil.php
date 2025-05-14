<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profil Praktikan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-black text-white">

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
          <a class="nav-link" aria-current="page" href="http://localhost:8081">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="http://localhost:8081/profil">Profil</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <!-- Content -->
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card bg-secondary text-white shadow border-0">
          <div class="card-body text-center">
            <h1 class="mb-4">Profil:</h1>
            <img src="/Images/foto_gunung.jpg" class="rounded-3 mb-3 border border-light" alt="Foto Profil" style="width: 200px; height: 200px; object-fit: cover;">
            <h3 class="card-title">Nama: <?= $nama ?></h3>
            <p class="card-text mb-1"><strong>NIM:</strong> <?= $nim ?></p>
            <p class="card-text mb-1"><strong>Prodi:</strong> <?= $prodi ?></p>
            <p class="card-text mb-1"><strong>Hobi:</strong> <?= $hobi ?></p>
            <p class="card-text mb-1"><strong>Skill:</strong> <?= $skill ?></p>

            <?php if (!empty($info)) : ?>
              <hr class="bg-light">
              <p class="card-text"><strong>Info Tambahan:</strong> <?= $info ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
