<?php
$this->extend('layouts/app');
$this->section('content');
?>
<div class="container-fluid">
    <?= session()->getFlashdata('msg') ?>
    <div class="row">
        <div class="col-lg-6">
            <form method="POST" action='<?= site_url("main/petugas/edit/$user[id_user]") ?>'>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control <?= (service('validation')->getError('nama')) ? 'is-invalid' : ''; ?>" id="nama" placeholder="" name="nama" value="<?= $user['nama_user'] ?>">
                    <?php
                    if (service('validation')->getError('nama')) : ?>
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('nama') ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control <?= (service('validation')->getError('email')) ? 'is-invalid' : ''; ?>" id="email" placeholder="" name="email" value="<?= $user['email'] ?>">
                    <?php
                    if (service('validation')->getError('email')) : ?>
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('email') ?>
                        </div>
                    <?php endif; ?>
                </div>
                <label for="">Level</label>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="level" id="admin" value="superadmin" <?= $user['level'] == 'superadmin' ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="admin">Superadmin</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="level" id="petugas" value="admin" <?= $user['level'] == 'admin' ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="admin">Petugas</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php
$this->endSection();
?>