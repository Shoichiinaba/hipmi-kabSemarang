<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?= base_url('assets_cv'); ?>/images/logo/favicon1.png" type="image/x-icon">
    <title>Curriculum Vitae</title>
    <style>
    body {
        font-family: DejaVu Sans, sans-serif;
        font-size: 12px;
        margin: 0;
        padding: 0;
    }

    .container {
        display: table;
        width: 100%;
        table-layout: fixed;
    }

    .sidebar {
        display: table-cell;
        width: 45%;
        background-color: #111827;
        color: white;
        padding: 20px;
        vertical-align: top;
        box-sizing: border-box;
        padding: 30px 25px;
    }

    .main {
        display: table-cell;
        width: 60%;
        background-color: white;
        padding: 30px 25px;
        vertical-align: top;
        box-sizing: border-box;
    }


    /* Panel Foto + Nama */
    .profile-header {
        background-color: #111827;
        border-radius: 20px;
        text-align: center;
        padding: 20px;
        margin-bottom: 30px;
    }

    .profile-photo {
        background-color: #f97316;
        padding: 10px;
        display: inline-block;
        border-radius: 12px;
        margin-bottom: 15px;
    }

    .profile-photo img {
        width: 120px;
        height: 140px;
        object-fit: cover;
        border-radius: 8px;
    }

    .profile-name {
        font-size: 20px;
        font-weight: bold;
        color: white;
        margin: 0;
        letter-spacing: 1px;
    }

    .profile-role {
        font-size: 14px;
        color: #f97316;
        margin-top: 5px;
        letter-spacing: 0.5px;
    }

    .section {
        margin-bottom: 25px;
    }

    .section h3 {
        font-size: 14px;
        text-transform: uppercase;
        border-bottom: 2px solid #f97316;
        padding-bottom: 5px;
        margin-bottom: 10px;
        color: #ffffff;
    }

    .main h3 {
        font-size: 16px;
        text-transform: uppercase;
        color: #111827;
        border-bottom: 2px solid #f97316;
        display: inline-block;
        margin-bottom: 15px;
    }

    .main p {
        margin-bottom: 12px;
    }

    .main strong {
        color: #111827;
    }

    .main small {
        color: #777;
        display: block;
        margin-top: 5px;
    }

    ul {
        padding-left: 18px;
        margin: 0;
    }

    .reference {
        margin-top: 30px;
    }

    .ref-item {
        margin-bottom: 10px;
    }

    .profile-role {
        font-size: 14px;
        color: white;
        font-style: italic;
        margin-top: 5px;
        letter-spacing: 0.5px;
    }
    </style>


</head>

<body>

    <div class="container">
        <?php foreach ($userdata as $user): ?>
        <div class="sidebar">
            <!-- FOTO SAJA -->
            <div class="profile-photo" style="text-align: center;">
                <img src="<?= base_url('assets_cv'); ?>/images/about/<?= $user->about_foto; ?>" alt="Foto">
            </div>

            <!-- CONTACT -->
            <div class="section">
                <h3>Contact</h3>
                <p><?= $user->no_tlp ?></p>
                <p><?= $user->email ?></p>
                <p><?= $user->address ?></p>
            </div>

            <!-- EDUCATION -->
            <div class="section">
                <h3>Education</h3>
                <?php foreach ($pendidikan as $edu): ?>
                <p><strong><?= $edu->title ?></strong><br><?= $edu->description ?></p>
                <?php endforeach; ?>
            </div>

            <!-- EXPERTISE -->
            <div class="section">
                <h3>Expertise</h3>
                <ul>
                    <?php foreach ($keahlian as $skill): ?>
                    <li><?= $skill->title_skill ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- LANGUAGES -->
            <div class="section">
                <h3>Languages</h3>
                <p><?= $user->language ?></p>
            </div>
        </div>

        <div class="main">
            <!-- NAMA & JABATAN DI ATAS -->
            <div class="profile-header">
                <div class="profile-name"><?= strtoupper($user->nama) ?></div>
                <div class="profile-role"><?= $user->spesific_sector ?> Spesialis</div>
            </div>

            <!-- EXPERIENCE -->
            <div class="experience">
                <h3>Experience</h3>
                <?php foreach ($pengalaman as $exp): ?>
                <p>
                    <strong><?= $exp->periode ?></strong><br>
                    <?= $exp->title_experience ?>
                    <small><?= $exp->description_experience ?></small>
                </p>
                <?php endforeach; ?>
            </div>

            <!-- SERVICES -->
            <div class="reference">
                <h3>Services</h3>
                <ul>
                    <?php foreach ($service as $ref): ?>
                    <li><strong><?= $ref->service_name ?></strong></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <?php endforeach; ?>
    </div>


</body>

</html>