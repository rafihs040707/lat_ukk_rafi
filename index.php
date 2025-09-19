<head>
    <title>SMKN 4 Tasikmalaya</title>
</head>

<?php include "header.php" ?>

<div class="container-fluid">
    <div id="carouselExampleCaptions" class="carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <video class="d-block w-100" autoplay muted loop>
                    <source src="image/c1.mp4" type="video/mp4">
                </video>
                <div class="text-white d-none d-md-block custom-caption blurk2 text-center align-content-center">
                    <h4>SMK Negeri 4 Tasikmalya</h4>
                    <p>Sekolah Pusat Keunggulan</p>
                    <!-- Tombol Pemicu untuk memunculkan Pop Up -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tonton Video
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Memunculkan Pop Up Video -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="container my-4">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/iBtaSZEneMQ?si=w41PUHv9wJ5Jo16a?autoplay=1" title="YouTube video"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-lg-12 my-5">
            <h3 class="d-inline-flex">Sambutan</h3>
            <h3 class="text-primary d-inline-flex ms-1">Kepala Sekolah</h3>
            <div class="row">
                <div class="col-lg-4 text-center">
                    <img src="image/kepsek.png" class="rounded img-fluid img-shadow">
                </div>
                <div class="col-lg-8 mt-3">
                    <h1>Kurniawan S.Pd, M.Pd</h1>
                    <p>Assalamualaikum Warahmatullahi Wabarakatuh</p>
                    <p>Segala puji dan syukur kita panjatkan kehadirat Allah SWT, semoga kita semua ada dalam lindungan-Nya. Dan atas perkenan-Nya pula kami dapat menghadirkan website SMK Negeri 4 Tasikmalaya ini. Kami berharap dengan adanya website di SMK Negeri 4 Tasikmalaya ini para pengunjung dapat mengenal lebih jauh tentang sekolah kami sehingga dapat mempererat tali silaturrahmi antara sekolah dengan masyarakat demi kemajuan kita bersama. Tiada gading yang tak retak, website kami ini masih dalam proses pengembangan, masih banyak kekurangan yang harus kami perbaiki. Kritik dan sarannya yang membangun sangat kami harapkan untuk pengembangan ke depan.</p>
                    <p>Akhirnya, saya mengucapkan terimakasih yang sebesar-besarnya kepada semua pihak yang tidak dapat disebutkan satu segala bantuan dan persatu atas fasilitasnya yang telah diberikan semoga semua yang kita lakukan bermanfaat bagi masyarakat.</p>
                    <p>Wassalamu'alaikum Warahmatullahi Wabarakatuh.</p>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container-fluid">
    <section> <!-- SECTION BERITA -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="my-4 text-center">Berita</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card shadow">
                            <div class="card-header">
                                <img src="image/b3.png" alt="" class="w-100 h-50">
                            </div>
                            <div class="card-body">
                                <h6 class="text-end">Kamis, 2 Jan 2025</h6>
                                <h3 class="text-center">SMKN 4 Tasikmalaya menerapkan aturan ketat terhadap kendaraan bermotor</h3>
                                <?php
                                $kondisi = true; // ubah jadi false untuk lihat hasil else
                                if ($kondisi) {
                                    // Kalau kondisi benar, link ke radartasik.com
                                    echo '<a href="https://radartasik.id/2025/01/02/smkn-4-tasikmalaya-terapkan-aturan-ketat-terhadap-kendaraan-bermotor/" target="_blank" class="btn btn-primary shadow link-dark text-white">Baca Selengkapnya</a>';
                                } else {
                                    // Kalau kondisi salah, bisa tampilkan link lain / disable
                                    echo '<a href="#" class="btn btn-secondary disabled">Link Tidak Tersedia</a>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow">
                            <div class="card-header">
                                <img src="image/b4.png" alt="" class="w-100 h-50">
                            </div>
                            <div class="card-body">
                                <h6 class="text-end">Senin, 7 Okt 2024</h6>
                                <h3 class="text-center">Tujuh Siswa SMKN 4 Tasikmalaya Raih Beasiswa Dari Yayasan Astra Honda Motor</h3>
                                <?php
                                $kondisi = true; // ubah jadi false untuk lihat hasil else
                                if ($kondisi) {
                                    // Kalau kondisi benar, link ke radartasik.com
                                    echo '<a href="https://radartasik.id/2024/10/07/tujuh-siswa-smkn-4-tasikmalaya-raih-beasiswa-dari-yayasan-astra-honda-motor/" target="_blank" class="btn btn-primary shadow link-dark text-white">Baca Selengkapnya</a>';
                                } else {
                                    // Kalau kondisi salah, bisa tampilkan link lain / disable
                                    echo '<a href="#" class="btn btn-secondary disabled">Link Tidak Tersedia</a>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- TUTUP SECTION BERITA -->

    <section> <!-- SECTION GALERI -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="my-4 text-center">Galeri</h3>
                    <?php
                    $galeri = [
                        "image/2.JPG",
                        "image/3.JPG",
                        "image/4.JPG",
                        "image/5.JPG",
                    ];
                    ?>
                    <div class="row">
                        <?php foreach ($galeri as $img): ?>
                            <div class="col-lg-3 mb-4">
                                <div class="card border-0">
                                    <div class="card-body shadow-lg p-2">
                                        <img src="<?= $img; ?>" class="w-100 h-50" style="object-fit:cover;">
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="text-center my-2">
                        <a href="galeri.php" class="btn btn-primary shadow link-dark text-white">Intip Lainnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- TUTUP SECTION GALERI -->

    <section> <!-- SECTION STATISTIK -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center my-5">Statistik</h3>
                <div class="row">
                    <div class="col-lg-3 my-2">
                        <div class="card text-center border-0 bg-primary text-white shadow">
                            <div class="card-body">
                                <!-- khusus peserta didik -->
                                <h3 id="pesertaDidik" data-target="1500">0</h3>
                                Peserta Didik
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 my-2">
                        <div class="card text-center border-0 bg-primary text-white shadow">
                            <div class="card-body">
                                <h3 class="count-up" data-target="100">0</h3>
                                Guru
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 my-2">
                        <div class="card text-center border-0 bg-primary text-white shadow">
                            <div class="card-body">
                                <h3 class="count-up" data-target="45">0</h3>
                                Rombel
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 my-2">
                        <div class="card text-center border-0 bg-primary text-white shadow">
                            <div class="card-body">
                                <h3 class="count-up" data-target="5">0</h3>
                                Program Keahlian
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- TUTUP SECTION STATISTIK -->

    <section> <!-- SECTION PROGRAM KEAHLIAN -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center my-5">Program Keahlian</h3>
                    <div class="row align-items-center justify-content-evenly">
                        <div class="col-lg-4 py-3">
                            <div class="card align-items-center text-center shadow">
                                <div class="card-header">
                                    <h4>PPLG</h4>
                                    <img src="image/pplg.png" class="w-75 h-50 img-fluid mx-auto d-block my-3">
                                </div>
                                <div class="card-body">
                                    <h5>Pengembangan Perangkat Lunak dan Gim</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 py-3">
                            <div class="card align-items-center text-center shadow">
                                <div class="card-header">
                                    <h4>TJKT</h4>
                                    <img src="image/tkj.png" class="w-75 h-50 img-fluid mx-auto d-block my-3">
                                </div>
                                <div class="card-body">
                                    <h5>Teknik Jaringan Komputer dan Telekomunikasi</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 py-3">
                            <div class="card align-items-center text-center shadow">
                                <div class="card-header">
                                    <h4>DKV</h4>
                                    <img src="image/dkv.png" class="w-100 h-100 img-fluid mx-auto d-block my-3">
                                </div>
                                <div class="card-body">
                                    <h5>Desain Komunikasi Visual</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 py-3">
                            <div class="card align-items-center text-center shadow">
                                <div class="card-header">
                                    <h4>TOI</h4>
                                    <img src="image/toi.png" class="w-75 h-50 img-fluid mx-auto d-block my-3">
                                </div>
                                <div class="card-body">
                                    <h5>Teknik Otomasi Industri</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 py-3">
                            <div class="card align-items-center text-center shadow">
                                <div class="card-header">
                                    <h4>TBSM</h4>
                                    <img src="image/tbsm.png" class="w-50 h-25 img-fluid mx-auto d-block my-3">
                                </div>
                                <div class="card-body">
                                    <h5>Teknik Bisnis dan Sepeda Motor</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- TUTUP SECTION PROGRAM KEAHLIAN -->
</div>

<script src="vendor/js/countup.js"></script>
<?php include "footer.php" ?>