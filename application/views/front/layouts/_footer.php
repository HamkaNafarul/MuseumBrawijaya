<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Anda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-Ds7whlZwCt0qWZJGivLrTvWGe61H77Cy9zdL2fGmSdP0fJsd3WLaK6y3zRLsFmd3" crossorigin="anonymous">
</head>
<body>

<div class="jumbotron footer m-0 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
                <img style="width: 300px; height:90px" src="<?= base_url('img/identitas/man.png') ?>" alt="">
                <p class="mt-3">Jl. Besar Ijen No.25A, Gading Kasri, Kec. Klojen, Kota Malang, Jawa Timur 65115</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h5>Tentang Kami</h5>
                <ul>
                    <a href="<?= base_url('profil/sejarah') ?>"><li>Sejarah</li></a>
                    <a href="<?= base_url('profil/visimisi') ?>"><li>Visi & Misi</li></a>
                    <a href="<?= base_url('profil/struktur') ?>"><li>Struktur Organisasi</li></a>
                    <a href="<?= base_url('profil/fasilitas') ?>"><li>Fasilitas</li></a>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h5>Kontak Kami</h5>
                <button class="btn btn-warning mb-2">Email: museumbrawijaya@gmail.com</button>
                <br>
                <button class="btn btn-warning">
                    <a href="https://www.facebook.com/museumbrawijaya/" target="_blank" class="text-white">
                        <i class="fab fa-facebook"></i> Facebook
                    </a>
                </button>
                <button class="btn btn-warning">
                    <a href="https://www.instagram.com/museum_brawijaya" target="_blank" class="text-white">
                        <i class="fab fa-instagram"></i> Instagram
                    </a>
                </button>
            </div>
        </div>
        <hr>
        <p class="text-center p-0">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
        </p>
    </div>
</div>

</body>
</html>



 