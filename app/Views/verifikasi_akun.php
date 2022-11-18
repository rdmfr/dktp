<?php
$this->extend('layouts/loginpage');
$this->section('content');
?>
<form action="" method="post">
	<?= csrf_field() ?>
	<img src="<?= base_url() ?>/assets/img/avatar.svg">
	<h2 class="title"><?= $title ?></h2>
	<?= session()->getFlashdata('msg') ?>
	<?= service('validation')->listErrors() ?>
	<div class="input-div pass">
		<div class="i">
			<i class="fas fa-lock"></i>
		</div>
		<div class="div">
			<h5>Kode OTP</h5>
			<input type="text" maxlength="6" class="input"  name="verify" id="" required>
		</div>
	</div>
	<!-- <p class="form-helper">Tidak Mendapatkan kode?
		<a href="<?= base_url('/') ?>">Kirim ulang</a>
	</p> -->
	<button type="submit" class="btn">Submit</button>
</form>
<?= $this->endSection() ?>