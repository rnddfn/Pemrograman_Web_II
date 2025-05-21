<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5 d-flex justify-content-center">
    <div class="col-md-8">
        <div class="card bg-dark text-white shadow-lg">
            <div class="card-header bg-info text-dark">
                <h4 class="mb-0">📖 Tambah Data Buku</h4>
            </div>
            <div class="card-body">
                <form action="/buku/save" method="post">
                    <?= csrf_field(); ?>

                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control <?= (validation_show_error('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" value="<?= old('judul'); ?>" autofocus>
                        <div class="invalid-feedback">
                            <?= validation_show_error('judul') ?>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control <?= (validation_show_error('penulis')) ? 'is-invalid' : ''; ?>" id="penulis" name="penulis" value="<?= old('penulis'); ?>">
                        <div class="invalid-feedback">
                            <?= validation_show_error('penulis') ?>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input type="text" class="form-control <?= (validation_show_error('penerbit')) ? 'is-invalid' : ''; ?>" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
                        <div class="invalid-feedback">
                            <?= validation_show_error('penerbit') ?>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                        <input type="text" class="form-control <?= (validation_show_error('tahun_terbit')) ? 'is-invalid' : ''; ?>" id="tahun_terbit" name="tahun_terbit" value="<?= old('tahun_terbit'); ?>">
                        <div class="invalid-feedback">
                            <?= validation_show_error('tahun_terbit') ?>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="/buku" class="btn btn-outline-light">← Kembali</a>
                        <button type="submit" class="btn btn-primary">💾 Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>