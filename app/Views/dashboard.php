<?php
$this->extend('layouts/app');
$this->section('content');
?>
<section class="section <?= strtolower($title) ?>">
    <div class="row">
        <!-- Left side columns -->
        <div class="row">
            <?php
            if (session()->get('level') != 'user') :
            ?>
                <div class="col-xxl-3 col-md-4">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Petugas</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-person"></i></div>
                                <div class="ps-2">
                                    <h6><?= number_format($petugas) ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-4">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Penduduk Terdaftar</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-people"></i></div>
                                <div class="ps-2">
                                    <h6><?= number_format($penduduk) ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-4">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Semua Approval</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-card-text"></i></div>
                                <div class="ps-2">
                                    <h6><?= number_format($approval) ?></h6> <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-4">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Approval Diproses</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-card-text"></i></div>
                                <div class="ps-2">
                                    <h6><?= number_format($approval_proses) ?></h6> <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-4">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Approval Selesai</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-card-text"></i></div>
                                <div class="ps-2">
                                    <h6><?= number_format($approval_selesai) ?></h6> <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php elseif (session()->get('level') == 'user') :
            ?>
                <div class="mt-4 p-5 bg-primary text-white rounded">
                    <h2><b> Status Pembuatan KTP <?= $badge ?></b></h2>
                    <table class="table table-responsive table-borderless text-white">
                        <thead>
                            <tr class="border-bottom border-white">
                                <th>
                                    <h4><b>Formulir</b></h4>
                                </th>
                                <th class="text-center">
                                    <h4><b>Kelengkapan</b></h4>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Data Diri</td>
                                <td class="text-center">
                                    <?= $biodata ? '<i class="bi bi-check-circle" style="color:#38c172"></i>' : '<i class="bi bi-x-circle" style="color:#fff"></i>' ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Foto</td>
                                <td class="text-center">
                                    <?= $foto ? '<i class="bi bi-check-circle" style="color:#38c172"></i>' : '<i class="bi bi-x-circle" style="color:#fff"></i>' ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Sidik Jari</td>
                                <td class="text-center">
                                    <?= $sidikjari ? '<i class="bi bi-check-circle" style="color:#38c172"></i>' : '<i class="bi bi-x-circle" style="color:#fff"></i>' ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </tr>
                    <div class="border-bottom border-white">
                        <h4><b>Langkah Pembuatan KTP :</b></h4>
                    </div>
                    <li>Sebelum melakukan proses pembuatan KTP, dimohon untuk menambahkan fingerprint terlebih dahulu di Perangkat anda.</li>
                    <li>Data fingerprint yang dibutuhkan :</li>
                    <ol>- Tangan Kanan & Tangan Kiri
                        <ul>
                            <li>Jempol</li>
                            <li>Telunjuk</li>
                            <li>Jari Tengah</li>
                            <li>Jari Manis</li>
                            <li>Kelingking</li>
                        </ul>
                    </ol>
                    <li>Cara menambah fingerprint di handphone andorid :</li>
                    <ol>- Masuk ke setting/setelan -> Sandi & keamanan -> Buka kunci dengan sidik jari -> Tambah sidik jari.</ol>
                    <li>Pengisian data diri dimohon untuk melakukannya pada jam kerja, pukul 08:00 s/d 16:00 WIB</li>
                    <li>Isi data diri sesuai dengan yang tercantum dalam KK anda.</li>
                    <li>Foto wajah sampai dada dengan latar biru.</li>
                    <li>Jika semua sudah terisi dengan baik dan benar,mohon tunggu proses verifikasi yang dilakukan oleh
                        admin.</li>
                    <li>Jika selama waktu 7x24 Jam admin belum memverifikasi pembuatan KTP, bisa hubungi di
                        <b><a class="text-white" href="https://wa.me/+628988285622">CS. Digital KTP.</a></b>
                    </li>
                    <li>Jika dalam waktu 2 minggu KTP belum diproses,hubungi admin DKTP atau datang ke kantor kecamatan daerah anda.</li>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php
$this->endSection();
?>