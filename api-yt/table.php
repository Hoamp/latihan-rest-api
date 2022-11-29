<!DOCTYPE html>
<html lang="en">

<head>
    <title>Table</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
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
                            <li><a class="dropdown-item" href="table.php">Table</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item text-muted" href="form.php">Pendaftaran</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- Memulai Table -->
    <div class="container" style="margin-top: 90px">
        <table class="table table-hover" id="tabel">
            <thead>
                <tr>
                    <td>Nama</td>
                    <td>NISN</td>
                    <td>Kelas</td>
                    <td>Jurusan</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Thomas gagal tenar</td>
                    <td>0000</td>
                    <td>XIRC</td>
                    <td>RPL</td>
                </tr>
                <tr>
                    <td>Thomas tok</td>
                    <td>1111</td>
                    <td>XIRC</td>
                    <td>RPL</td>
                </tr>
                <tr>
                    <td>Thomas kecil</td>
                    <td>2222</td>
                    <td>XIRC</td>
                    <td>RPL</td>
                </tr>
                <tr>
                    <td>Thomas su jr</td>
                    <td>3333</td>
                    <td>XIRC</td>
                    <td>RPL</td>
                </tr>
                <tr>
                    <td>Thomas menolak sadar</td>
                    <td>4444</td>
                    <td>XIRC</td>
                    <td>RPL</td>
                </tr>
                <tr>
                    <td>Thomas slebew</td>
                    <td>5555</td>
                    <td>XIRC</td>
                    <td>RPL</td>
                </tr>
                <tr>
                    <td>Thomas setres</td>
                    <td>6666</td>
                    <td>XIRC</td>
                    <td>RPL</td>
                </tr>
                <tr>
                    <td>Thomas sok kul</td>
                    <td>7777</td>
                    <td>XIRC</td>
                    <td>RPL</td>
                </tr>
                <tr>
                    <td>Thomas gangguan mental</td>
                    <td>8888</td>
                    <td>XIRC</td>
                    <td>RPL</td>
                </tr>
                <tr>
                    <td>Thomas shyness</td>
                    <td>9999</td>
                    <td>XIRC</td>
                    <td>RPL</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td>Nama</td>
                    <td>NISN</td>
                    <td>Kelas</td>
                    <td>Jurusan</td>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- Mengakhiri table -->

    <!-- memanggil js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#tabel").DataTable();
        });
    </script>
</body>

</html>