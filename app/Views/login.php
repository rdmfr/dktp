<?php
$this->extend('layouts/loginpage');
$this->section('content');
?>
<form action="" method="post">
  <?= csrf_field() ?>
  <img src="<?= base_url() ?>/assets/img/avatar.svg">
  <h2 class="title"><?= $title?></h2>
  <?= session()->getFlashdata('msg') ?>
  <?= service('validation')->listErrors() ?>
  <div class="input-div one">
    <div class="i">
      <i class="fas fa-user"></i>
    </div>
    <div class="div">
      <h5>Email</h5>
      <input type="text" class="input" name="email" id="">
    </div>
  </div>
  <div class="input-div pass">
    <div class="i">
      <i class="fas fa-lock"></i>
    </div>
    <div class="div">
      <h5>Password</h5>
      <input type="password" class="input" name="password" id="">
    </div>
  </div>
  <a href="register-page.html">Register</a>
  <a href="#">Forgot Password?</a>
  <input type="submit" class="btn" value="Login">
</form>
<?= $this->endSection()?>