<?php
$this->extend('layouts/app');
$this->section('content');
?>
<section class="section <?= strtolower($title) ?>">
    <div class="row">
        <!-- Left side columns -->
        <div class="row">
            <?php
            if(session()->get('level') != 'user'):
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
            <?php endif; ?>
        </div>
    </div>
</section>
<?php
$this->endSection();
?>