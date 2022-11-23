<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="<?= site_url((session()->get('level') == 'user') ? 'dktp' : 'main') ?>">
                <span><i class="bi bi-house"></i> Dashboard</span>
            </a>
        </li>
        <?php
        if (session()->get('level') != 'user') : ?>
            <li class="nav-heading">Pengelolaan</li>
            <?php
            if (session()->get('level') == 'superadmin') : ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= site_url('main/petugas') ?>">
                        <span>
                            <i class="bi bi-people"></i> Petugas
                        </span>
                    </a>
                </li>
            <?php
            elseif (session()->get('level') == 'admin') : ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= site_url('profile') ?>">
                        <span>
                            <i class="bi bi-gear"></i> Instansi
                        </span>
                    </a>
                </li>
            <?php endif;?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= site_url('main/approval') ?>">
                    <span><i class="bi bi-card-list"></i> Approval</span>
                </a>
            </li>
        <?php
        endif;
        if (session()->get('level') == 'user') : ?>
            <li class="nav-heading">Pelayanan</li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#ktp-nav" data-bs-toggle="collapse" href="#">
                    <span><i class="bi bi-postcard"></i> Pembuatan KTP</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="ktp-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <a href="<?= site_url('dktp/buatktp') ?>">
                        <i class="bi bi-circle"></i><span>Pengajuan</span>
                    </a>
                    <a href="<?= site_url('dktp/status')?>">
                        <i class="bi bi-circle"></i><span>Status Pengajuan</span>
                    </a>
                </ul>
            </li>
        <?php endif; ?>
</aside>