<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
    <!-- NAVBAR START -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow">
        <div class="container">
            <a class="navbar-brand" href="#">Portofolio saya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php#beranda">Beranda</a>
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
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Tugas </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-muted" href="table.php">Table</a></li>
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

    <!-- MEMULAI FORM -->
    <div class="container" style="margin-top: 90px">
        <form>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" />
            </div>
            <div class="mb-3">
                <label for="nisn" class="form-label">NISN : </label>
                <input type="text" class="form-control" id="nisn" aria-describedby="emailHelp" />
            </div>

            <label for="" class="mb-1">Kelas :</label>
            <select class="form-select" aria-label="Default select example">
                <option value="1">XIRA</option>
                <option value="2">XIRB</option>
                <option value="3">XIRC</option>
            </select>

            <label class="mt-3">Jenis Kelamin :</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                <label class="form-check-label" for="flexRadioDefault1"> Laki-Laki </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked />
                <label class="form-check-label" for="flexRadioDefault2"> Perempuan </label>
            </div>

            <label for="" class="mb-1">Agama :</label>
            <select class="form-select" aria-label="Default select example">
                <option value="1">Islam</option>
                <option value="2">Kristen</option>
                <option value="3">Katolik</option>
                <option value="4">Hindu</option>
                <option value="5">Budha</option>
                <option value="6">Kong-hu-chu</option>
            </select>
            <label for="motivasi" class="mt-3">Motivasi :</label>
            <div class="editor" id="motivasi"></div>

            <label for="alamat" class="mt-3">Alamat :</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Alamat anda disini</label>
            </div>

            <button type="submit" class="btn btn-primary my-3">Submit</button>
        </form>
    </div>
    <!-- MENUTUP FORM -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="ckeditor/src/ckeditor.js"></script>
    <script src="ckeditor/build/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector(".editor"), {
            licenseKey: "",
        });
    </script>
</body>

</html>