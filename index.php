<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata - Aziz Arif Rizaldi</title>
    <!-- Bootstrap CSS via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="icon" href="images/kampus-merdeka-logo.png" type="image/x-icon">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }
        .profile-img {
            max-width: 100px;
            border-radius: 50%;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .footer-logos {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .footer-logo {
            max-width: 50px;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <?php
        $fullname   = "Aziz Arif Rizaldi";
        $collage    = "Sekolah Tinggi Teknologi Bandung";
        $activity   = "Full Stack Web Developer";
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Biodata</h3>
                    </div>
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <p class="form-control-static fw-bold"><?=$fullname?></p>
                        </div>
                        <hr/>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Asal Perguruan Tinggi</label>
                            <p class="form-control-static fw-bold"><?=$collage?></p>
                        </div>
                        <hr/>
                        <div class="mb-3">
                            <label for="umur" class="form-label">Activity</label>
                            <p class="form-control-static fw-bold"><?=$activity?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-logos mb-3">
            <img src="images/gits-logo.png" alt="gits-logo" class="footer-logo">
            <img src="images/kampus-merdeka-logo.png" alt="kampus-merdeka-logo" class="footer-logo">
            <img src="images/sttbandung-logo.png" alt="sttbandung-logo" class="footer-logo">
        </div>
        <p>© 2023 Aziz Arif Rizaldi - Latihan Pertama MSIB5. All rights reserved.</p>
    </div>
    <!-- Bootstrap JS via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
