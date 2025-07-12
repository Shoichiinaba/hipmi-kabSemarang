<?php $this->load->view('template_adm/header'); ?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php $this->load->view('template_adm/sidebar'); ?>
            <div class="layout-page">
                <?php $this->load->view('template_adm/navbar'); ?>
                <div class="content-wrapper">
                    <?php $this->load->view($content); ?>
                    <?php $this->load->view('template_adm/footer'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('template_adm/javascript'); ?>
    <?php $this->load->view($script); ?>
</body>

</html>