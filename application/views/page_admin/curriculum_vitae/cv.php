<div class="main-hero animate-section">
    <div class="row align-items-end justify-content-center very-menu">
        <div class="col-xxl-8 col-lg-8 col-md-6 col-12 very-left">
            <?php foreach ($member as $data) { ?>
            <div class="bag-image">
                <div class="main-padding">
                    <div class="white-round">
                        <img src="<?= base_url('assets_cv'); ?>/images/hero/white-round.png" alt="white-round">
                    </div>
                    <div class="title-section-name">
                        Hey, my name is
                    </div>
                    <h1 class="title-section-word">
                        <?= $data->nama; ?>
                    </h1>
                    <div class="type">
                        <p class="hybrid"><?= $data->spesific_sector; ?><span class="text"></span></p>
                    </div>
                    <div class="disc">
                        <?= $data->about_owner; ?>
                    </div>
                </div>
                <div class="round-shape">
                    <img src="<?= base_url('assets_cv'); ?>/images/hero/round.svg" alt="First-imags">
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-lg-4 col-md-2 col-12 very-right " data-tilt data-tilt-max="25" data-tilt-speed="400">
            <div class="right-bag-image">
                <img src="<?= base_url('assets_cv'); ?>/images/profile_owner/<?= $data->foto_owner; ?>" alt="man-male">
                <div class="second-round">
                    <img src="<?= base_url('assets_cv'); ?>/images/hero/second-round.svg" alt="second-round">
                </div>
                <div class="fecebook">
                    <img src="<?= base_url('assets_cv'); ?>/images/hero/facebook.svg" alt="facebook">
                </div>
                <div class="tik-tok">
                    <img src="<?= base_url('assets_cv'); ?>/images/hero/tik-tok.svg" alt="tik-tok">
                </div>
                <div class="youtube">
                    <img src="<?= base_url('assets_cv'); ?>/images/hero/youtube.svg" alt="youtube">
                </div>
                <div class="instagram">
                    <img src="<?= base_url('assets_cv'); ?>/images/hero/instagram.svg" alt="instagram">
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<!--================ [ Hero section Exit ] ================-->