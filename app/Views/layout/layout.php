<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLIKASI FILM</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <script src="/assets/js/unpkg.com_sweetalert@2.1.2_dist_sweetalert.min.js"></script> 
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">APLIKASI FILM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/film/all">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/film">Semua Film</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/genre">Kategori Film</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container">
         <?= $this->renderSection('content') ?>
    </div>

    <script src="/assets/js/bootstrap.min.js"></script>

    <?php if (session()->getFlashdata('success')) : ?>
        <script>
            swal({
                title: "Informasi",
                text: "<?= session()->getFlashdata('success') ?>",
                icon: "success",
                button: "OK",
            });
        </script>

    <?php endif; ?>
</body>

</html>