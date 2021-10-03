<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-heartbeat"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Healthy Go</div>
        <input type="hidden" name="cek" id="cek" value="<?= $cek; ?>">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>
    <?php if ($this->session->userdata('role') == 1) : ?>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item" id="data_master">
            <a class="nav-link collapsed pb-0" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Master</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= base_url('master/makan'); ?>">Makan</a>
                    <a class="collapse-item" href="<?= base_url('master/jenismakanan'); ?>">Jenis Makanan</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

    <?php endif; ?>

    <?php if ($this->session->userdata('role') == 2) : ?>
        <li class="nav-item" id="masa_tubuh">
            <a class="nav-link pb-0" href="<?= base_url('indexmasatubuh'); ?>">
                <i class="fas fa-fw fa-weight"></i>
                <span>Index masa tubuh</span>
            </a>
        </li>
        <li class="nav-item" id="kebutuhan_zat_gizi">
            <a class="nav-link pb-0" href="<?= base_url('kebutuhanzatgizi'); ?>">
                <i class="fab fa-fw fa-nutritionix"></i>
                <span>Kebutuhan zat gizi</span>
            </a>
        </li>
        <li class="nav-item" id="cek_tubuh_ideal">
            <a class="nav-link pb-0" href="<?= base_url('cektubuhideal'); ?>">
                <i class="fas fa-fw fa-dumbbell"></i>
                <span>Cek tubuh ideal</span>
            </a>
        </li>
        <li class="nav-item" id="detak_jantung">
            <a class="nav-link pb-0" href="<?= base_url('detakjantung'); ?>">
                <i class="fas fa-fw fa-heartbeat"></i>
                <span>Kalkulator detak jangtung</span>
            </a>
        </li>
        <li class="nav-item" id="rekomendasi_makanan">
            <a class="nav-link pb-0" href="<?= base_url('rekomendasimakanan'); ?>">
                <i class="fas fa-fw fa-utensils"></i>
                <span>Rekomendasi makanan</span>
            </a>
        </li>
        <li class="nav-item" id="meningkatkan_imun">
            <a class="nav-link pb-0" href="<?= base_url('imun'); ?>">
                <i class="fas fa-fw fa-utensils"></i>
                <span>Meningkatkan Imun</span>
            </a>
        </li>
        <li class="nav-item" id="profile">
            <a class="nav-link pb-0" href="<?= base_url('user'); ?>">
                <i class="fas fa-fw fa-info-circle"></i>
                <span>Tentang kami</span>
            </a>
        </li>


        <hr class="sidebar-divider">
    <?php endif; ?>
    <li class="nav-item" id="profile">
        <a class="nav-link pb-0" href="<?= base_url('user'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span>
        </a>
    </li>
    <li class="nav-item" id="edit_profile">
        <a class="nav-link pb-0" href="<?= base_url('user/edit'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Edit Profile</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('login/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->