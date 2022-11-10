<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="">
                <span><i class="bi bi-house"></i> Dashboard</span>
            </a>
        </li>
        <?php
        if(session()->get('level') != 'user'): ?>
        <li class="nav-heading">Admin</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="users">
                <span>
                    <i class="bi bi-people"></i> Users
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="approval">
                <span><i class="bi bi-card-list"></i> Approval</span>
            </a>
        </li>
        <?php endif; ?>
        <?php
        if(session()->get('level') == 'admin'): ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="profile">
                <span>
                    <i class="bi bi-gear"></i> Instansi
                </span>
            </a>
        </li>
        <?php endif; ?>
        <?php
        if(session()->get('level') == 'user'): ?>
        <li class="nav-heading">Pelayanan</li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#ktp-nav" data-bs-toggle="collapse" href="#">
                <span><i class="bi bi-postcard"></i> Pembuatan KTP</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="ktp-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <a href="buatktp">
                    <i class="bi bi-circle"></i><span>Pengajuan</span>
                </a>
                <a href="status">
                    <i class="bi bi-circle"></i><span>Status Pengajuan</span>
                </a>
            </ul>
        </li>
    <?php endif; ?>
</aside>