<?php $this->load->view('template_cv/header'); ?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php $this->load->view('template_cv/sidebar'); ?>
            <div class="layout-page">
                <?php $this->load->view('template_cv/navbar'); ?>
                <div class="content-wrapper">
                    <?php $this->load->view($content); ?>
                    <?php $this->load->view('template_cv/footer'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('template_cv/javascript'); ?>
    <?php $this->load->view($script); ?>
</body>

</html>