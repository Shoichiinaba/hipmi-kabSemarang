<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <?php if ((string)$userdata->status === '1') : ?>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Congratulations <?= $userdata->nama; ?> 🎉</h5>
                            <p class="mb-4">
                                User Anda Sudah Berhasil Terdaftar
                                <span class="fw-bold text-danger"><br>
                                    Agar bisa menggunakan fitur-fitur kami, mohon lengkapi profile dengan cara klik menu
                                    <strong>Biodata</strong>, kemudian isi semua form.
                                </span>
                            </p>
                        </div>

                        <?php elseif ((string)$userdata->status === '2') : ?>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Congratulations <?= $userdata->nama; ?> 🎉</h5>
                            <p class="mb-4">
                            <h5 class="card-title text-success">Data anda Sudah lengkap</h5>
                            </p>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="<?= base_url('assets_adm'); ?>/img/illustrations/man-with-laptop-light.png"
                                height="140" alt="View Badge User"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>