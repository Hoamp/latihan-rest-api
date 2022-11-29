<?php
function getCurl($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($curl);
    curl_close($curl = curl_init());
    return json_decode($result, true);
}
// profil
$result = getCurl('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCvQjx81so-GELbB93QGCWMQ&key=AIzaSyBxV2rGfAHe2ntu1iptL46VlbctPGzeE1s');
$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subsciber = $result['items'][0]['statistics']['subscriberCount'];

// video terbaru
$urlLatestVid = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyBxV2rGfAHe2ntu1iptL46VlbctPGzeE1s&channelId=UCvQjx81so-GELbB93QGCWMQ&maxResults=1&order=date&part=snippet';
$result = getCurl($urlLatestVid);
$latestVidId = $result["items"][0]['id']['videoId'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio | Thomas</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <style>
        section {
            padding-top: 5rem;
        }
    </style>
</head>

<body>
    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Portofolio Thomas-S</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php#beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#tentang-saya">Tentang-Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#galeri">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#kontak-saya">Kontak-Saya</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Tugas </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="table.php">Table</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="form.php">Pendaftaran</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- START CAROUSEL -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false" style="margin-top: 50px">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="gambar/carousel/mvc-crop.png" class="d-block w-100" height="380px" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h5>MVC pada PHP</h5>
                    <p>Mempelajari maksud dari Model View Control (MVC) di PHP</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="gambar/carousel/oop-crop.png" class="d-block w-100" height="380px" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h5>OOP pada PHP</h5>
                    <p>Mempelajari maksud dari Object Oriented Programming (OOP) di PHP</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="gambar/carousel/ci4-crop.png" class="d-block w-100" height="380px" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Framework Code-igniter 4</h5>
                    <p>Mencoba Framework php dengan menggunakan code-igniter 4</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- END CAROUSEL -->

    <!-- START HERO SECTION -->
    <section class="jumbotron text-center pt-4" style="background-color: #e2edff" id="beranda">
        <img src="gambar/personal/foto-paling-ganteng.jpeg" alt="Gambar Saya" width="250px" class="rounded-circle shadow-sm img-thumbnail" style="margin-top: 20px" />

        <!-- Tulisan di bawah gambar -->
        <h1 class="display-4">Thomas Setiawan</h1>
        <p class="lead">Murid Biasa | Manusia Normal | Junior Programmer</p>


    </section>
    <!-- END HERO SECTION -->

    <!-- START TENTANG-SAYA -->
    <section id="tentang-saya">
        <div class="container my-5">
            <div class="row text-center">
                <div class="col mb-4">
                    <h2>Tentang Saya</h2>
                </div>
            </div>

            <!-- CORE TENTANG SAYA -->
            <div class="row justify-content-between">
                <div class="col-md-6 text-center">
                    <img src="gambar/personal/thomas-cilik.jpeg" class="img-thumbnail shadow-sm" alt="Saya kecil" width="350px" />
                </div>
                <div class="col-md-6">
                    <p class="fs-5">
                        Seorang anak laki laki nolep yang masih bocil dan berusia belum genap remaja 17 tahun yang sedang mencari apa itu arti dari kehidupan yang sebenarnya dan berusaha untuk selalu berniat apapun yang terjadi meskipun
                        akan ada ada saja halangan yang terjadi di depan mata dan selalu mencoba menjalaninya dan berpura pura tidak melihatnya seakan berjalan diantara kedua topan dan badai tanpa peralatan dan perlengkapan anti badai
                        tetapi tetap ia terjang seperti tidak melihat angin yang kuat tersebut. Sungguh malangnya beliau ini karena hanya terisi aura negatif yang terlalu melekat pada dirinya.
                    </p>
                    <p class="text-muted">Kisah di atas adalah sebuah rekayasa belaka, namun bila itu adalah kebenaran, hal apakah yang akan dialami oleh sang NPC yang ingin menjadi MC ini?</p>
                </div>
            </div>
            <!-- END CORE -->
        </div>
    </section>
    <!-- END TENTANG-SAYA -->


    <!-- Sosmed -->
    <section class="social" id="social">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-center">Sosial Media</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?= $youtubeProfilePic; ?>" width="200" alt="" class="rounded-circle img-thumbnail">
                        </div>
                        <div class="col-md-8">
                            <h5><?= $channelName; ?></h5>
                            <p><?= $subsciber; ?> subscriber</p>
                            <div class="g-ytsubscribe" data-channelid="UCvQjx81so-GELbB93QGCWMQ" data-layout="full" data-count="default"></div>
                        </div>
                    </div>
                    <div class="row mt-3 mb-3">
                        <div class="col">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/<?= $latestVidId; ?>" title="YouTube video" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Sosmed -->


    <!-- START GALERI -->
    <section id="galeri" style="background-color: #e2edff">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <h2>Galeri</h2>
                </div>
            </div>

            <!-- START GAMBAR -->
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="gambar/pekerjaan/crud-murid.png" class="card-img-top" alt="gambar crud murid" />
                        <div class="card-body">
                            <p class="card-text">Membuat CRUD tentang murid</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="gambar/pekerjaan/form.png" class="card-img-top" alt="gambar crud murid" />
                        <div class="card-body">
                            <p class="card-text">Membuat form pendaftaran</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="gambar/pekerjaan/halaman-home.png" class="card-img-top" alt="gambar crud murid" />
                        <div class="card-body">
                            <p class="card-text">Membuat halaman beranda</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PART 2 -->
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="gambar/pekerjaan/lkkkk.png" class="card-img-top" alt="gambar crud murid" />
                        <div class="card-body">
                            <p class="card-text">Mencoba membuat wiki game</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="gambar/pekerjaan/photoshop.png" class="card-img-top" alt="gambar crud murid" />
                        <div class="card-body">
                            <p class="card-text">Mencoba dasar-dasar photoshop</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="gambar/pekerjaan/visual-paradigm.png" class="card-img-top" alt="gambar crud murid" />
                        <div class="card-body">
                            <p class="card-text">Membuat tugas dengan visual-paradigm</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END GAMBAR -->
        </div>
    </section>
    <!-- END GALERI -->

    <!-- START KONTAK-SAYA -->
    <section>
        <div class="container" id="kontak-saya">
            <div class="row text-center mb-3">
                <div class="col-md">
                    <h2>Kontak Saya</h2>
                </div>
            </div>

            <!-- CORE FORM -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" aria-describedby="nama" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email" />
                        </div>

                        <label for="pesan mb-3">Pesan Anda</label>
                        <div class="editor" id="pesan"></div>
                        <a href="#">
                            <button class="btn btn-primary mt-3" id="ngirim">Kirim</button>
                        </a>
                    </form>
                </div>
            </div>
            <!-- END CORE -->
        </div>
    </section>
    <!-- END KONTAK-SAYA -->

    <!-- START FOOTER -->
    <footer class="py-3 mt-4" style="background-color: #e2edff">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="form.html" class="nav-link px-2 text-muted">Form</a></li>
            <li class="nav-item"><a href="table.html" class="nav-link px-2 text-muted">Table</a></li>
        </ul>
        <p class="text-center text-muted">
            Dibuat dengan <span id="lovu">cinta kasih oleh</span> <a href="https://www.facebook.com/thomas.setiawan.5895" target="_blank" class="text-muted fw-bold text-decoration-none"> ©Thomas Setiawan</a>
        </p>
    </footer>
    <!-- END FOOTER -->

    <!-- FILE YANG DIBUTUHKAN -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="ckeditor/src/ckeditor.js"></script>
    <script src="ckeditor/build/ckeditor.js"></script>
    <script src="js/script.js"></script>
    <script>
        ClassicEditor.create(document.querySelector(".editor"), {
            licenseKey: "",
        });
    </script>
    <script src="https://apis.google.com/js/platform.js"></script>

</body>

</html>