<head>
    <title>Ekstrakurikuler - SMKN 4 Tasikmalaya</title>
</head>

<?php include "header.php" ?>

<section> <!-- SECTION EKSKUL -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="my-4 text-center">Ekstrakurikuler</h3>
                <div class="row align-items-center justify-content-evenly">
                    <?php
                    $ekskuls = [
                        [
                            "title" => "English Club",
                            "image" => "image/e1.png",
                        ],
                        [
                            "title" => "Paskibra",
                            "image" => "image/e3.png",
                        ],
                        [
                            "title" => "Perisai Diri",
                            "image" => "image/e4.jpg",
                        ],
                        [
                            "title" => "PKS",
                            "image" => "image/e5.png",
                        ],
                        [
                            "title" => "PLH",
                            "image" => "image/e6.png",
                        ],
                        [
                            "title" => "PMR",
                            "image" => "image/e7.png",
                        ],
                        [
                            "title" => "Pramuka",
                            "image" => "image/e8.png",
                        ],
                        [
                            "title" => "Basket",
                            "image" => "image/e9.png",
                        ],
                        [
                            "title" => "Bulu Tangkis",
                            "image" => "image/e10.png",
                        ],
                        [
                            "title" => "Cinematography",
                            "image" => "image/e11.png",
                        ],
                        [
                            "title" => "Fustal",
                            "image" => "image/e12.png",
                        ],
                        [
                            "title" => "Irma",
                            "image" => "image/e13.png",
                        ]
                    ];
                    ?>
                    <?php foreach ($ekskuls as $ekskul): ?>
                        <div class="col-md-3 mb-4">
                            <div class="card text-center border-0 shadow-lg">
                                <div class="card-header">
                                    <h4 class="mb-0"><?= $ekskul['title']; ?></h4>
                                </div>
                                <div class="card-body">
                                    <img src="<?= $ekskul['image']; ?>" class="w-50 h-25 img-fluid mx-auto d-block my-3">
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section> <!-- TUTUP SECTION EKSKUL -->

<?php include "footer.php" ?>