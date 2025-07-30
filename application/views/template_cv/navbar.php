<style>
.download-mobile {
    display: none;
}

@media (max-width: 768px) {
    .download-desktop {
        display: none;
    }

    .download-mobile {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 78%;
        padding: 0px;
    }

    .download:hover {
        background-color: #ff5e03;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .icon-down {
        width: 19px;
        transition: transform 0.3s ease;
    }

    .download:hover .icon-down {
        transform: scale(1.1) rotate(-10deg);
    }

}
</style>

<div id="cursor" class="cursor">
    <div class="ring">
        <div></div>
    </div>
    <div class="ring">
        <div></div>
    </div>
</div>
<!--================ [ Loader Start ] ================-->
<div class="loader-mask">
    <div class="loader"></div>
</div>
<!--================ [ Loader Exit ] ================-->
<!--================ [ Header section Start ] ================-->
<div id="header-main" data-header class="pb-2 pt-0">
    <div class="container">
        <header class="header" id="header" data-header>
            <a href="index.html" class="logo">
                <img src="<?= base_url('assets_cv'); ?>/images/logo/tricore_logo.png" alt="logo" style="height: 60px;">
            </a>
            <div class="menu-icon">
                <a href="javascript:void(0)"><i class="ri-menu-3-line menu-option"></i></a>
                <a href="javascript:void(0)"><i class="ri-close-line close-menu"></i></a>
            </div>
            <?php $encoded_id = $this->uri->segment(3); ?>
            <a href="<?= site_url('Curriculum_vitae/export_pdf/' . $encoded_id) ?>" target="_blank" class="download">
                <div class="down-ander">
                    <div class="images-down">
                        <img src="<?= base_url('assets_cv'); ?>/images/header/download.svg" alt="download"
                            class="icon-down">
                    </div>
                    <p>Download CV</p>
                </div>
            </a>
        </header>
    </div>
</div>

<nav class="main-header-menu">
    <a href="<?php echo site_url('Curriculum_vitae/cv'); ?>" class="logo"><img
            src="<?= base_url('assets_cv'); ?>/images/logo/tricore_logo.png" alt="logo" style="height: 50px;"></a>
    <div class="container">
        <?php $encoded_id = $this->uri->segment(3); ?>

        <a href="<?= site_url('Curriculum_vitae/export_pdf/' . $encoded_id) ?>" target="_blank"
            class="download download-mobile">
            <div class="down-ander">
                <div class="images-down">
                    <img src="<?= base_url('assets_cv'); ?>/images/header/download.svg" alt="download" class="icon-down"
                        style="width: 30px;">
                </div>
                <p>Download CV</p>
            </div>
        </a>

        <ul class="tabs-ul-menu">
            <li class="tabs-li">
                <a href="<?= site_url('Curriculum_vitae/about/' . $encoded_id); ?>" class=" list-link">
                    <div class="imag-list">
                        <img src="<?= base_url('assets_cv'); ?>/images/hero/about.svg" alt="about" class="list-img">
                    </div>
                    <p class="name-tab">About</p>
                </a>
            </li>
            <li class="tabs-li">
                <a href="<?= site_url('Curriculum_vitae/resume/' . $encoded_id); ?>" class="list-link">
                    <div class="imag-list">
                        <img src="<?= base_url('assets_cv'); ?>/images/hero/resume.svg" alt="about" class="list-img">
                    </div>
                    <p class="name-tab">Resume</p>
                </a>
            </li>
            <li class="tabs-li">
                <a href="<?= site_url('Curriculum_vitae/service/' . $encoded_id); ?>" class="list-link">
                    <div class="imag-list">
                        <img src="<?= base_url('assets_cv'); ?>/images/hero/services.svg" alt="about" class="list-img">
                    </div>
                    <p class="name-tab">Services</p>
                </a>
            </li>
            <li class="tabs-li">
                <a href="<?= site_url('Curriculum_vitae/portofolio/' . $encoded_id); ?>" class="list-link">
                    <div class="imag-list">
                        <img src="<?= base_url('assets_cv'); ?>/images/hero/portfolio.svg" alt="about" class="list-img">
                    </div>
                    <p class="name-tab">Portfolio</p>
                </a>
            </li>
            <li class="tabs-li">
                <a href=" <?= site_url('Curriculum_vitae/contact/' . $encoded_id); ?>" class="list-link">
                    <div class="imag-list">
                        <img src="<?= base_url('assets_cv'); ?>/images/hero/contact.svg" alt="about" class="list-img">
                    </div>
                    <p class="name-tab">Contact</p>
                </a>
            </li>
        </ul>

        <div class="social-icon-main">
            <a href="https://medium.com/" class="social-design-main">
                <img src="<?= base_url('assets_cv'); ?>/images/footer/medium-m.svg" alt="medium">
            </a>
            <a href="https://www.instagram.com/" class="social-design-main">
                <img src="<?= base_url('assets_cv'); ?>/images/footer/insta-m.svg" alt="insta">
            </a>
            <a href="https://x.com/?lang=en" class="social-design-main">
                <img src="<?= base_url('assets_cv'); ?>/images/footer/twitte-m.svg" alt="twitte">
            </a>
            <a href="mailto:support@davidoutwear.com" class="social-design-main">
                <img src="<?= base_url('assets_cv'); ?>/images/footer/mail-m.svg" alt="mail">
            </a>
            <a href="https://dribbble.com/" class="social-design-main">
                <img src="<?= base_url('assets_cv'); ?>/images/footer/drrible-m.svg" alt="drrible">
            </a>
            <a href="https://www.behance.net/" class="social-design-main">
                <img src="<?= base_url('assets_cv'); ?>/images/footer/behance-m.svg" alt="behance">
            </a>
            <a href="https://www.youtube.com/" class="social-design-main">
                <img src="<?= base_url('assets_cv'); ?>/images/footer/youtube-m.svg" alt="youtube">
            </a>
        </div>
    </div>
</nav>
<!--================ [ Header section Exit ] ================-->

<!-- navbar untuk desktop -->
<!--================ [ Hero section Start ] ================-->
<div class="hero" id="hero">
    <div class="container ">
        <?php $encoded_id = $this->uri->segment(3); ?>

        <nav class="main-menu">
            <div class="container">
                <ul class="tabs-ul animate-section-very">
                    <li class="tabs-li" data-tab="About">
                        <a href="<?= site_url('Curriculum_vitae/about/' . $encoded_id); ?>" class="list-link">
                            <div class="imag-list">
                                <img src="<?= base_url('assets_cv'); ?>/images/hero/about.svg" alt="about"
                                    class="list-img">
                            </div>
                            <p class="name-tab">About</p>
                        </a>
                    </li>
                    <li class="tabs-li" data-tab="Resume">
                        <a href="<?= site_url('Curriculum_vitae/resume/' . $encoded_id); ?>" class="list-link">
                            <div class="imag-list">
                                <img src="<?= base_url('assets_cv'); ?>/images/hero/resume.svg" alt="resume"
                                    class="list-img">
                            </div>
                            <p class="name-tab">Resume</p>
                        </a>
                    </li>
                    <li class="tabs-li" data-tab="Services">
                        <a href="<?= site_url('Curriculum_vitae/service/' . $encoded_id); ?>" class="list-link">
                            <div class="imag-list">
                                <img src="<?= base_url('assets_cv'); ?>/images/hero/services.svg" alt="services"
                                    class="list-img">
                            </div>
                            <p class="name-tab">Services</p>
                        </a>
                    </li>
                    <li class="tabs-li" data-tab="Portfolio">
                        <a href="<?= site_url('Curriculum_vitae/portofolio/' . $encoded_id); ?>" class="list-link">
                            <div class="imag-list">
                                <img src="<?= base_url('assets_cv'); ?>/images/hero/portfolio.svg" alt="portfolio"
                                    class="list-img">
                            </div>
                            <p class="name-tab">Portfolio</p>
                        </a>
                    </li>
                    <li class="tabs-li" data-tab="Contact">
                        <a href="<?= site_url('Curriculum_vitae/contact/' . $encoded_id); ?>" class="list-link">
                            <div class="imag-list">
                                <img src="<?= base_url('assets_cv'); ?>/images/hero/contact.svg" alt="contact"
                                    class="list-img">
                            </div>
                            <p class="name-tab">Contact</p>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>