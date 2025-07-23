<div class="main-hero animate-section">
    <div class="row align-items-center justify-content-start justify-content-md-center meny-about">
        <?php foreach ($about as $data) { ?>
        <div class="col-xl-7 col-lg-7 col-md-12 col-12 about-set-1">
            <h1 class="section-title-name"><?= $data->title_about; ?></h1>
            <p class="section-detail">
                <?= $data->description; ?>
            </p>
            <div class="row contact-detail">
                <div class="col-lg-6 col-md-6 p-lg-0 p-xl-0">
                    <ul class="about-ul">
                        <li class="about-li">
                            <div class="about-information">
                                <a href="javascript:void(0)" class="about-anchor">
                                    <div class="contact-iessue main-about">
                                        Name:
                                    </div>
                                    <p><?= $data->nama; ?>., <?= $data->education_degree; ?></p>
                                </a>
                            </div>
                        </li>
                        <li class="about-li">
                            <div class="about-information">
                                <a href="mailto:example@email.com" class="about-anchor">
                                    <div class="contact-iessue main-about">
                                        Email:
                                    </div>
                                    <p><?= $data->email; ?></p>
                                </a>
                            </div>
                        </li>
                        <li class="about-li">
                            <div class="about-information">
                                <a href="tel:+1234567890" class="about-anchor">
                                    <div class="contact-iessue main-about">
                                        Phone:
                                    </div>
                                    <p><?= $data->no_tlp; ?></p>
                                </a>
                            </div>
                        </li>
                        <li class="about-li">
                            <div class="about-information">
                                <a href="skype:live:username?chat" class="about-anchor">
                                    <div class="contact-iessue main-about">
                                        Instagram:
                                    </div>
                                    <p><?= $data->instagram; ?></p>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6">
                    <ul class="about-ul">
                        <li class="about-li">
                            <div class="about-information">
                                <a href="javascript:void(0)" class="about-anchor">
                                    <div class="contact-iessue main-about-2">
                                        Nationality:
                                    </div>
                                    <p><?= $data->nationality; ?></p>
                                </a>
                            </div>
                        </li>
                        <li class="about-li">
                            <div class="about-information">
                                <a href="javascript:void(0)" class="about-anchor">
                                    <div class="contact-iessue main-about-2">
                                        Experience:
                                    </div>
                                    <p><?= $data->experience; ?>+ years</p>
                                </a>
                            </div>
                        </li>
                        <li class="about-li">
                            <div class="about-information">
                                <a href="javascript:void(0)" class="about-anchor">
                                    <div class="contact-iessue main-about-2">
                                        Indonesia :
                                    </div>
                                    <p><?= $data->placement; ?></p>
                                </a>
                            </div>
                        </li>
                        <li class="about-li">
                            <div class="about-information">
                                <a href="javascript:void(0)" class="about-anchor">
                                    <div class="contact-iessue main-about-2">
                                        Language:
                                    </div>
                                    <p><?= $data->language; ?></p>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <a href="javascript:void(0)" class="contact-about">Contact me</a> -->
        </div>
        <div class="col-xl-5 col-lg-5 col-md-6 col-12 about-set">
            <div class="imges">
                <div class="img">
                    <img src="<?= base_url('assets_cv'); ?>/images/about/<?= $data->about_foto; ?>" alt="about-image">
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>