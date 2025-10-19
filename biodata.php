<head>
    <title>Biodata</title>
</head>

<?php include 'header.php'; ?>

<?php
function getInformasiSingkat()
{
    return [
        "nama" => "Rafi Haykal Suryaman",
        "lahir" => "Tasikmalaya, 04 Juli 2007",
        "pentak" => "SMKN 4 Tasikmalaya, Jurusan Pengembangan Perangkat Lunak dan Gim",
        "alamat" => "Jl. Bebedahan, 01/10, Kel. Sukanagara, Kec. Purbaratu, Kota Tasikmalaya, Jawa Barat",
        "whatsapp" => "+62 812-2048-1865",
        "email" => "triana.alfarizi150403@gmail.com",
        "gambar" => "image/rafi.png",
    ];
}

$data = getInformasiSingkat();
?>

<div class="text-center mt-4">
    <img src="<?= $data['gambar'] ?>" class="img-fluid rounded-circle img-shadow shadow">
</div>

<div class="container my-5">
    <div class="card shadow-lg border-primary">
        <div class="card-header bg-primary text-white text-center">
            <h4>Informasi Singkat</h4>
        </div>
        <div class="card-body p-4">
            <table class="table table-borderless align-middle">
                <tbody>
                    <tr>
                        <th>Nama</th>
                        <td>:</td>
                        <td><?= $data['nama'] ?></td>
                    </tr>
                    <tr>
                        <th>Tempat, Tanggal Lahir</th>
                        <td>:</td>
                        <td><?= $data['lahir'] ?></td>
                    </tr>
                    <tr>
                        <th>Pendidikan Terakhir</th>
                        <td>:</td>
                        <td><?= $data['pentak'] ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>:</td>
                        <td><?= $data['alamat'] ?></td>
                    </tr>
                    <tr>
                        <th>Nomor Whatsapp</th>
                        <td>:</td>
                        <td><?= $data['whatsapp'] ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>:</td>
                        <td><?= $data['email'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
