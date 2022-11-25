<?php
$this->extend('layouts/app');
$this->section('content');
?>
<div class="container-fluid">
    <?= session()->getFlashdata('msg') ?>
    <div class="row">
        <div class="col-sm col-md-3 mb-2">
            <img src="<?= site_url() . 'uploads/' . $approval['foto'] ?>" class="img-thumbnail" alt="">
        </div>
        <div class="col-lg mb-2 card">
            <div class="card-body p-1">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td><b>NIK</b></td>
                            <td><?= $approval['nik'] ?></td>
                        </tr>
                        <tr>
                            <td><b>No KK</b></td>
                            <td><?= $approval['no_kk'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Nama</b></td>
                            <td><?= $approval['nama'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Tempat Lahir</b></td>
                            <td><?= $approval['tempat_lahir'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Tanggal Lahir</b></td>
                            <td><?= $approval['tgl_lahir'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Jenis Kelamin</b></td>
                            <td><?= $approval['jenis_kelamin'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Alamat</b></td>
                            <td><?= $approval['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td><b>RT/RW</b></td>
                            <td><?= $approval['rt_rw'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Kelurahan/Desa</b></td>
                            <td><?= $approval['nama_wilayah'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Kecamatan</b></td>
                            <td><?= $approval['kecamatan'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Agama</b></td>
                            <td><?= $approval['agama'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Golongan Darah</b></td>
                            <td><?= $approval['golongan_darah'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Status Perkawinan</b></td>
                            <td><?= $approval['status_perkawinan'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Pekerjaan</b></td>
                            <td><?= $approval['pekerjaan'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Kewarganegaraan</b></td>
                            <td><?= $approval['kewarganegaraan'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Tanggal Pembuatan</b></td>
                            <td><?= $approval['tgl_pembuatan'] ?></td>
                        </tr>
                        <tr>
                            <td><b>Tanda Tangan</b></td>
                            <td><img src="<?= site_url() . 'uploads/' . $approval['ttd'] ?>" class="img-thumbnail" alt=""></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 card">
            <div class="card-header">
                <h2 class="">Aksi</h2>
            </div>
            <div class="card-body">
                <form action="<?= site_url("main/approval/update/$approval[id_approval]") ?>" method="post">
                    <?php csrf_field(); ?>
                    <div class="form-group">
                        <label for="tanggapan">Tanggapan</label>
                        <input type="text" name="tanggapan_approval" id="tanggapan" class="form-control <?= (service('validation')->getError('nama')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Tanggapan ..." required>
                        <?php
                        if (service('validation')->getError('tanngapan_approval')) : ?>
                            <div class="invalid-feedback">
                                <?= service('validation')->getError('tanngapan_approval') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group mt-2">
                        <?php
                        if ($approval['status_approval'] == 'verifikasi') : ?>
                            <button formaction="<?= site_url("main/approval/update/$approval[id_approval]/proses") ?>" formmethod="POST" class="btn btn-info">Approv</button>
                        <?php else :  ?>
                            <button formaction="<?= site_url("main/approval/update/$approval[id_approval]/selesai") ?>" formmethod="POST" class="btn btn-success">Selesai</button>
                        <?php endif; ?>
                        <button formaction="<?= site_url("main/approval/update/$approval[id_approval]/ditolak") ?>" formmethod="POST" class="btn btn-outline-danger">Tolak</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
$this->endSection();
?>