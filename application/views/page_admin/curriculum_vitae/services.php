<div class="hero" id="hero">
    <div class="container ">
        <div class="main-hero animate-section">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="section-title-name service-title">I'm ready to <span>Help</span> you</h1>
                    <p class="section-detail service-title">
                        "Visi kami adalah menjadi kekuatan perintis di dunia Media Sosial dan pengembangan, yang dikenal
                        karena komitmen teguh kami terhadap keunggulan, integritas, dan kepuasan pelanggan."
                    </p>
                </div>
            </div>
            <div class="row main-service">
                <?php foreach ($service_data as $data) { ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="box-services">
                        <div class="box-image">
                            <img src="<?= base_url('assets_cv'); ?> /images/services/<?= $data->icon; ?>"
                                alt="box-image">
                        </div>
                        <div class="box-title">
                            <a href="#services-popup-content"><?= $data->service_name; ?></a>
                        </div>
                        <p class="box-desc"><?= $data->description; ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>