<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5 text-white bg-dark p-4 rounded shadow">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-info">Data Buku</h1>
        <a href="/logout" class="btn btn-outline-danger">Logout</a>
    </div>

    <?php if (session()->getFlashdata('pesan')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-dark table-hover table-bordered align-middle">
            <thead class="table-info text-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($buku as $b): ?>
                    <tr>
                        <th scope="row"><?= esc($b['id']) ?></th>
                        <td><?= esc($b['judul']) ?></td>
                        <td><?= esc($b['penulis']) ?></td>
                        <td><?= esc($b['penerbit']) ?></td>
                        <td><?= esc($b['tahun_terbit']) ?></td>
                        <td>
                            <a href="/buku/edit/<?= $b['id']; ?>" class="btn btn-sm btn-success mb-1">Edit</a>
                            <form action="/buku/<?= $b['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-sm btn-danger mb-1" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="mt-4 d-flex gap-2">
        <a href="/buku/create" class="btn btn-primary">Tambah Buku</a>
    </div>
</div>

<?= $this->endSection(); ?>