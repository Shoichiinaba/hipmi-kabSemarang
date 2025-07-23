<div class="hero" id="hero">
    <div class="container ">
        <div class="main-hero animate-section">
            <div class="row text-center">
                <div class="col-12">
                    <?php foreach ($contact_data as $data) { ?>
                    <h1 class="section-title-name service-title blog-title contact-title">Get In Touch</h1>
                    <p class="section-detail service-title">
                        "Saya selalu bersemangat untuk mengerjakan proyek-proyek baru dan berkolaborasi dengan pemikir
                        inovatif. Jika Anda memiliki proyek atau hanya ingin mengobrol tentang desain, jangan ragu untuk
                        menghubungi saya!"
                    </p>
                    <div class="contact-detail-2 row">
                        <div class="col-lg-4 col-md-6 col-12 text-center">
                            <a href="" target="_blank" class="main-box text-center">
                                <div class="box-call">
                                    <img src="<?= base_url('assets_cv'); ?>/images/contact/location.svg" alt="location">
                                </div>
                                <div class="center-main">ADDRESS</div>
                                <p><?= $data->address; ?></p>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 text-center">
                            <a href="mailto:<?= $data->email; ?>" class="main-box text-center">
                                <div class="box-call">
                                    <img src="<?= base_url('assets_cv'); ?>/images/contact/mail.svg" alt="mail">
                                </div>
                                <div class="center-main">Email</div>
                                <p><?= $data->email; ?></p>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 text-center">
                            <a href="tel:+12345679889" class="main-box text-center">
                                <div class="box-call">
                                    <img src="<?= base_url('assets_cv'); ?>/images/contact/phone.svg" alt="location">
                                </div>
                                <div class="center-main">PHONE</div>
                                <p>+<?= $data->no_tlp; ?></p>
                            </a>
                        </div>
                    </div>
                    <div class="second-contact">
                        <h2 class="section-title-name service-title blog-title contact-title ">"Mari Bekerja Sama!"</h2>
                        <div class="contact-info row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="main-in">
                                    <p>name*</p>
                                    <input type="text" name="name" placeholder="Your Name" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="main-in">
                                    <p>EMAIL*</p>
                                    <input type="email" name="Email" placeholder="Your Email" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="main-in">
                                    <p>phone*</p>
                                    <input type="number" name="number" placeholder="Your Phone Number"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="main-in">
                                    <p>SUBJECT</p>
                                    <input type="text" name="name" placeholder="Subject" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="main-in">
                                    <p>Message</p>
                                    <input type="text" name="name" placeholder="Write Here..." autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="menu-port contact-main menu-contact">
                            <a href="javascript:void(0)" class="load-port" id="loadMore-s">
                                <div class="load-main">
                                    <div class="load-down">
                                        <img src="<?= base_url('assets_cv'); ?>/images/blog/submit.svg" alt="download"
                                            class="icon-down">
                                    </div>
                                    <p>Submit Now</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 main-location">
                            <?= $data->map; ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>