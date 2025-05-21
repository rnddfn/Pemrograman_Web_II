<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>

<div class="min-vh-100 d-flex justify-content-center align-items-center"
  style="background-image: url('<?= base_url('images/library.jpg') ?>'); background-size: cover; background-position: center;">

  <div class="bg-dark bg-opacity-75 text-white p-5 rounded-4 shadow-lg backdrop-blur"
    style="max-width: 450px; width: 100%; backdrop-filter: blur(8px);">

    <h2 class="mb-4 text-center fw-bold">Login</h2>

    <?php if (session()->getFlashdata('error')) : ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('error') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <form action="/auth/login" method="post" novalidate>
      <?= csrf_field() ?>
      
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control bg-transparent text-white border-light rounded-3" id="email" name="email"
          placeholder="Masukkan email kamu" required>
      </div>

      <div class="mb-4">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control bg-transparent text-white border-light rounded-3" id="password"
          name="password" placeholder="••••••••" required>
      </div>

      <button type="submit" class="btn btn-light w-100 fw-semibold shadow-sm transition" style="transition: all 0.3s;">
        Masuk
      </button>
    </form>
</div>

<?= $this->endSection(); ?>