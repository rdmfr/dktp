<?php
$this->extend('layouts/app');
$this->section('content');
?>
<div class="container-fluid">
  <?= session()->getFlashdata('msg') ?>
  <div class="card shadow rounded">
    <div class="card-header">
      <h3>Tambah Petugas</h3>
      <hr>
    </div>
    <div class="card-body">
      <form class="row g-3 needs-validation" method="POST" action="" novalidate>
        <?= csrf_field() ?>
        <div class="col-12 row mb-2">
          <label for="nama" class="form-label col-md-2">Nama</label>
          <div class="col-md">
            <input type="text" class="form-control <?= (service('validation')->getError('nama')) ? 'is-invalid' : ''; ?>" id="nama" placeholder="" name="nama" value="<?= set_value('nama') ?>" required>
            <?php
            if (service('validation')->getError('nama')) : ?>
              <div class="invalid-feedback">
                <?= service('validation')->getError('nama') ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-12 row mb-2">
          <label for="email" class="form-label col-md-2">Email</label>
          <div class="col-md">
            <input type="email" class="form-control <?= (service('validation')->getError('email')) ? 'is-invalid' : ''; ?>" id="email" placeholder="" name="email" value="<?= set_value('email') ?>" required>
            <?php
            if (service('validation')->getError('email')) : ?>
              <div class="invalid-feedback">
                <?= service('validation')->getError('email') ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-12 row mb-2">
          <label for="password" class="form-label col-md-2">Password</label>
          <div class="col-md">
            <input type="password" class="form-control <?= (service('validation')->getError('password')) ? 'is-invalid' : ''; ?>" id="password" placeholder="" name="password" value="<?= set_value('password') ?>" required>
            <?php
            if (service('validation')->getError('password')) : ?>
              <div class="invalid-feedback">
                <?= service('validation')->getError('password') ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-12 row mb-2">
          <label for="confirm_pass" class="form-label col-md-2">Confirm Password</label>
          <div class="col-md">
            <input type="password" class="form-control <?= (service('validation')->getError('confirm_pass')) ? 'is-invalid' : ''; ?>" id="confirm_pass" placeholder="" name="confirm_pass" value="<?= set_value('confirm_pass') ?>" required>
            <?php
            if (service('validation')->getError('confirm_pass')) : ?>
              <div class="invalid-feedback">
                <?= service('validation')->getError('confirm_pass') ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <fieldset class="col-12 row mb-2">
          <legend class="col-form-label col-md-2">Level</legend>
          <div class="col-12 col-md row">
            <div class="form-check col-md-6 col-sm-12">
              <input class="form-check-input" type="radio" name="level" id="levelSuperadmin" value="superadmin" required>
              <label class="form-check-label" for="levelSuperadmin"> Superadmin </label>
            </div>
            <div class="form-check col-md-6 col-sm-12">
              <input class="form-check-input" type="radio" name="level" id="levelAdmin" value="admin" checked required>
              <label class="form-check-label" for="levelAdmin"> Admin </label>
            </div>
          </div>
        </fieldset>
        <div class="mb-2">
          <button class="btn btn-primary" type="submit">Tambah</button>
        </div>
      </form>
    </div>
  </div>
  <h1 class="h3 mb-3 mt-4 text-gray-800">Data Petugas</h1>
  <div class="table-responsive">
    <table class="datatable">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Telp</th>
          <th scope="col">Level</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        <?php foreach ($users as $row) : ?>
          <tr>
            <th scope="row"><?= $no++; ?></th>
            <td><?= $row['nama_user']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= ($row['level'] == 'admin')? 'petugas' : $row['level'] ; ?></td>
            <td>
              <?php if ($row['email'] == session()->get('email')) : ?>
                <small>Tidak ada aksi</small>
              <?php else : ?>
                <a href="<?= site_url('main/petugas/edit/' . $row['id_user']) ?>" class="btn btn-info"> <i class="bi bi-pencil"></i> Edit</a>
                <a href="<?= site_url('main/petugas/delete/' . $row['id_user']) ?>" class="btn btn-danger"> <i class="bi bi-trash"></i> Hapus</a>
              <?php endif; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<?php
$this->endSection();
?>