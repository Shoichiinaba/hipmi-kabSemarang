<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="<?php echo site_url('Dashboard'); ?>" class="app-brand-link">
            <span class="app-brand-logo demo">
                <span class="hipmi-text mb-0">HIPMI</span>
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item <?php echo ($this->uri->segment(1) == 'Dashboard') ? 'active' : ''; ?>">
            <a href="<?php echo site_url('Dashboard'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item <?php echo ($this->uri->segment(1) == 'Anggota') ? 'active' : ''; ?>">
            <a href="<?php echo site_url('Properti'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-map-alt"></i>
                <div data-i18n="Analytics">Anggota</div>
            </a>
        </li>
        <li class="menu-item <?php echo ($this->uri->segment(1) == 'Profil') ? 'active' : ''; ?>">
            <a href="<?php echo site_url('Profil'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-video-recording"></i>
                <div data-i18n="Analytics">Profile</div>
            </a>
        </li>
    </ul>

</aside>
<!-- / Menu -->