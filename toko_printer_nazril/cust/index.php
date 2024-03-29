<?php 

require '../functions.php';

$produk = query("SELECT * FROM produk");

?>
<?php require '../layouts/navbarcust.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer</title>
</head>
<body>
<main class="container mt-3">
            <div class="row d-flex justify-content-center">
                <div class="col-12">
                    <div class="banner">
                        <img src="../assets/images/cust/w.jpg" alt="foto banner" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-12">
                    <h1 class="heading">Categories</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-3">
                <div class="col-lg-2 col-xl-2 col-6 mb-3">
                    <div class="card card-categories py-3">
                        <div class="image-card text-center">
                            <img src="../assets/images/cust/printer.jpg" alt="snack" class="img-fluid">
                        </div>
                        <div class="text-card text-center mt-2">Printer Epson</div>
                    </div>
                </div>
                <div class="col-lg-2 col-xl-2 col-6 mb-3">
                    <div class="card card-categories py-3">
                        <div class="image-card text-center">
                            <img src="../assets/images/cust/images.jpg" alt="snack" class="img-fluid">
                        </div>
                        <div class="text-card text-center mt-2">Printer HP</div>
                    </div>
                </div>
                <div class="col-lg-2 col-xl-2 col-6 mb-3">
                    <div class="card card-categories py-3">
                        <div class="image-card text-center">
                            <img src="../assets/images/o.jpg" alt="snack" class="img-fluid">
                        </div>
                        <div class="text-card text-center mt-2">Printer Canon</div>
                    </div>
                </div>
                <div class="col-lg-2 col-xl-2 col-6 mb-3">
                    <div class="card card-categories py-3">
                        <div class="image-card text-center">
                            <img src="../assets/images/primary.jpg" alt="snack" class="img-fluid">
                        </div>
                        <div class="text-card text-center mt-2">Printer Brother</div>
                    </div>
                </div>
                <div class="col-lg-2 col-xl-2 col-6 mb-3">
                    <div class="card card-categories py-3">
                        <div class="image-card text-center">
                            <img src="../assets/images/spongebob.jpg" alt="snack" class="img-fluid">
                        </div>
                        <div class="text-card text-center mt-2">Printer HP New</div>
                    </div>
                </div>
                <div class="col-lg-2 col-xl-2 col-6 mb-3">
                    <div class="card card-categories py-3">
                        <div class="image-card text-center">
                            <img src="../assets/images/Canon.jpg" alt="snack" class="img-fluid">
                        </div>
                        <div class="text-card text-center mt-2">Printer Lex</div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-12">
                    <h1 class="heading">My Produk</h1>
                </div>
            </div>
            <?php foreach($produk as $data) : ?>
            <div class="row d-flex justify-content-center mt-3">
                <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="../assets/images/<?= $data["foto"]; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><?= $data["nama_produk"]; ?></h5>
                    <p class="card-text"><?= $data["deskripsi"]; ?></p>
                    <a href="#" class="btn btn-primary">Beli</a>
                    <a href="#" class="btn btn-outline-danger">Tambah Kekeranjang</a>
                </div>
                </div>
            </div>
</div>
            <?php endforeach; ?>
        </main>
        <footer class="my-4 text-center bg-dark text-light">
            Copyright 2024 - nazril ariyanto - SMK Jakarta Pusat 1
        </footer>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
</body>
</html>