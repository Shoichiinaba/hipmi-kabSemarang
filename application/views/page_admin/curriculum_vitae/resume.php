<style>
.skill-title {
    font-weight: 500;
    margin-bottom: 5px;
}

.progress-container {
    position: relative;
    height: 8px;
    background: #e0e0e0;
    border-radius: 4px;
    overflow: hidden;
}

.progress-bar {
    position: relative;
    height: 8px;
    background-color: orange;
    border-radius: 4px;
    transition: width 0.5s ease;
}

.progress-label {
    position: absolute;
    top: -25px;
    right: 0;
    background: #000;
    color: #fff;
    font-size: 11px;
    padding: 2px 5px;
    border-radius: 3px;
    white-space: nowrap;
}
</style>

<div class="hero" id="hero">
    <div class="container ">
        <div class="main-hero animate-section">
            <div class="education-resume">
                <h1 class="section-title-name subtitle">Education</h1>
                <div class="boxes">
                    <div class="row vertical-line">
                        <?php foreach ($edukasi as $data) { ?>
                        <div class="col-md-6">
                            <div class="timeline-box">
                                <div class="time-line-header">
                                    <p class="bachelor"><?= $data->title; ?></p>
                                    <p class="cursus university"><?= $data->description; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="col-md-6">
                            <div class="timeline-box">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="timeline-box">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="education-resume mt-3">
                <h1 class="section-title-name subtitle">Experience</h1>
                <div class="boxes">
                    <div class="row vertical-line">
                        <?php foreach ($experience as $data) { ?>
                        <div class="col-md-6">
                            <div class="timeline-box">
                                <div class="time-line-header">
                                    <p class="bachelor"><?= $data->periode; ?></p>
                                    <p class="cursus university"><?= $data->title_experience; ?></p>
                                </div>
                                <div class="timeline-content">
                                    <p class="desc-resume"><?= $data->description_experience; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="col-md-6">
                            <div class="timeline-box">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="timeline-box">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="education-resume mt-3">
                <h1 class="section-title-name subtitle">Key Skill</h1>
                <div class="row mt-2">
                    <?php foreach ($keyskill as $data) { ?>
                    <div class="col-lg-6">
                        <div class="skill-bars">
                            <div class="bar">
                                <div class="info">
                                    <?= $data->title_skill; ?> (<?= $data->nilai; ?>%)
                                </div>
                                <div class="progress-container">
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: <?= $data->nilai; ?>%;">
                                            <span class="progress-label"><?= $data->nilai; ?>%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>