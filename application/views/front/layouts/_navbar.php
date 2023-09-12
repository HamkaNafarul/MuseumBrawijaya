<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Navbar dengan Teks Bergerak</title>
    <style>
        @keyframes slide {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        .welcome-message {
            animation: slide 10s linear infinite alternate;
        }
    </style>
</head>
<body>
    <marquee behavior="scroll" direction="left" scrollamount="4">
        Selamat Datang di Museum Brawijaya Malang Jl. Besar Ijen No.25A, Gading Kasri, Kec. Klojen, Kota Malang, Jawa Timur 65115
    </marquee>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img style="max-width:250px;" src="<?= base_url('img/identitas/mannew.png') ?>">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php if($title == 'Beranda') echo "active"; ?>">
                        <a class="nav-link" href="<?= base_url() ?>">Beranda</a>
                    </li>
                    <li class="nav-item dropdown <?php if($title == 'Sejarah' || $title == 'Visi & Misi' || $title == 'Struktur' || $title == 'Fasilitas') echo "active"; ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profil
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url('profil/sejarah') ?>">Sejarah</a>
                            <a class="dropdown-item" href="<?= base_url('profil/visimisi') ?>">Visi & Misi</a>
                            <a class="dropdown-item" href="<?= base_url('profil/struktur') ?>">Struktur Organisasi</a>
                            <a class="dropdown-item" href="<?= base_url('profil/fasilitas') ?>">Fasilitas</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown <?php if($title == 'Administrasi Perkantoran' || $title == 'Akutansi' || $title == 'Pemasaran') echo "active"; ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Museum
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url('Museum/ap') ?>">Lobby</a>
                            <a class="dropdown-item" href="<?= base_url('Museum/ak') ?>">Ruang 1 dan 2</a>
                            <a class="dropdown-item" href="<?= base_url('Museum/pm') ?>">Ruang Tengah</a>
                        </div>
                    </li>
                    <li class="nav-item <?php if($title == 'Jadwal') echo "active"; ?>">
                        <a class="nav-link" href="<?= base_url('lokasi') ?>">Lokasi</a>
                    </li>
                    <li class="nav-item <?php if($title == 'Agenda') echo "active"; ?>">
                        <a class="nav-link" href="<?= base_url('agenda') ?>">Agenda</a>
                    </li>
                    <li class="nav-item <?php if($title == 'Berita') echo "active"; ?>">
                        <a class="nav-link" href="<?= base_url('blog') ?>">Berita</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const welcomeMessage = document.querySelector('.welcome-message');
            let animationDuration = 10; // Sesuaikan dengan durasi animasi (detik)

            function resetAnimation() {
                welcomeMessage.style.animation = 'none';
                void welcomeMessage.offsetWidth; // Trigger reflow
                welcomeMessage.style.animation = `slide ${animationDuration}s linear infinite alternate`;
            }

            setInterval(resetAnimation, animationDuration * 1000);
        });
    </script>
</body>
</html>


