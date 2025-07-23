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
        <?php if ($userdata->role == 'anggota') : ?>
        <li class="menu-item <?php echo ($this->uri->segment(1) == 'Dashboard') ? 'active' : ''; ?>">
            <a href="<?php echo site_url('Dashboard'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item <?php echo ($this->uri->segment(1) == 'Anggota') ? 'active' : ''; ?>">
            <a href="<?php echo site_url('Member'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-account"></i>
                <div data-i18n="Analytics">Anggota</div>
            </a>
        </li>
        <?php
            function base64url_encode($data) {
                return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
            }
        ?>
        <li class="menu-item <?php echo ($this->uri->segment(1) == 'Curriculum_vitae') ? 'active' : ''; ?>">
            <a href="<?= site_url('Curriculum_vitae/cv/' . base64url_encode($userdata->id)) ?>" class="menu-link"
                target="_blank">
                <i class="menu-icon tf-icons bx bx-video-recording"></i>
                <div data-i18n="Analytics">Profile</div>
            </a>
        </li>
        <li class="menu-item <?php echo ($this->uri->segment(1) == 'Dewan_pengurus') ? 'active' : ''; ?>">
            <a href="<?php echo site_url('Dewan_pengurus'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-video-recording"></i>
                <div data-i18n="Analytics">Pengurus</div>
            </a>
        </li>
        <?php endif; ?>

        <?php if ($userdata->role == 'Admin') : ?>
        <li class="menu-item <?php echo ($this->uri->segment(1) == 'Dashboard') ? 'active' : ''; ?>">
            <a href="<?php echo site_url('Dashboard'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item <?php echo ($this->uri->segment(1) == 'Member') ? 'active' : ''; ?>">
            <a href="<?php echo site_url('Member'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-account"></i>
                <div data-i18n="Analytics">Anggota</div>
            </a>
        </li>
        <li class="menu-item <?php echo ($this->uri->segment(1) == 'Category_bussines') ? 'active' : ''; ?>">
            <a href="<?php echo site_url('Category_bussines'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-video-recording"></i>
                <div data-i18n="Analytics">Kategori Bisnis</div>
            </a>
        </li>
        <li class="menu-item <?php echo ($this->uri->segment(1) == 'Dewan_pengurus') ? 'active' : ''; ?>">
            <a href="<?php echo site_url('Dewan_pengurus'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-video-recording"></i>
                <div data-i18n="Analytics">Pengurus</div>
            </a>
        </li>
        <?php endif; ?>
    </ul>

</aside>
<!-- / Menu -->