<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row mx-3 mb-3">
        <div class="col">
            <h1 class="inline"><?= $title; ?> (Profil Anda)</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card p-4">
                <div class="row mb-3">
                    <div class="col">
                        <a class="btn btn-primary" href="<?= base_url('/dokter/edit/' . $dokter['id'] . '?from_profile=1'); ?>">
                            <i data-feather="edit"></i> Edit Profil Saya
                        </a>
                    </div>
                </div>

                <table class="table">
                    <tbody>
                        <tr>
                            <th rowspan="11" scope="row">
                                <img src="/images/avatar/<?= ($dokter['image_profile']) ? $dokter['image_profile'] : 'default.jpg'; ?>" alt="Profile image" class="img-thumbnail" width="200px">
                            </th>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td><?= $dokter['nik']; ?></td>
                        </tr>
                        <tr>
                            <td>NIP</td>
                            <td><?= $dokter['nip']; ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><?= $dokter['nama']; ?></td>
                        </tr>
                        <tr>
                            <td>Izin Praktek</td>
                            <td><?= $dokter['izin_praktek']; ?></td>
                        </tr>
                        <tr>
                            <td>No. HP</td>
                            <td><?= $dokter['no_hp']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $dokter['email']; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><?= ($dokter['jenis_kelamin']) ? 'Laki-laki' : 'Perempuan'; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?= $dokter['alamat']; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Mulai Bekerja</td>
                            <td><?= $dokter['tgl_mulai_bekerja']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>