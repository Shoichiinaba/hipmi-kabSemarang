<style>
.portfolios-group-main {
    display: block;
}

.meta,
.meta-ander,
.image-container {
    width: 100%;
    display: block;
}

.image-container {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    height: 250px;
}

.image-container>img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
    border-radius: 15px;
}

.image-container:hover>img {
    transform: scale(1.03);
}

/* Overlay gelap saat hover */
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4);
    /* efek gelap */
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
    border-radius: 15px;
}

.image-container:hover .overlay {
    opacity: 1;
}

/* ✅ Perbaikan ukuran ikon agar tidak terlalu besar */
.vimeo-icon {
    width: 60px;
    height: 60px;
    object-fit: contain;
    z-index: 2;
    pointer-events: none;
    transform: none !important;
    transition: none !important;
}
</style>


<div class="hero" id="hero">
    <div class="container">
        <div class="main-hero animate-section">
            <?php foreach ($porto_data as $data): ?>
            <div class="row">
                <div class="col-12">
                    <h1 class="section-title-name service-title setting-port text-center">Explore <span>My
                            Latest Work</span>
                        and Discover the Craftsmanship Behind Each Design</h1>
                    <p class="section-detail service-title text-center"><?= $data->description; ?></p>
                </div>
            </div>
            <div class="portfolio-main">
                <div class="row">
                    <?php foreach ($data->images as $img): ?>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="image-container popup-btn zoom_in">
                                <img src="<?= base_url('assets_cv/images/portfolio/') . $img->image; ?>"
                                    class="img-fluid rounded" alt="Gambar Portofolio">
                                <div class="overlay">
                                    <img src="<?= base_url('assets_cv/images/portfolio/content-svg.svg'); ?>" alt="icon"
                                        class="vimeo-icon" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>