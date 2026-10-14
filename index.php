
<?php
require_once 'data_produk.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Data Produk</title>
</head>
<body>

<h2>Sistem Data Produk</h2>

<?php
$daftarProduk = [$produk1, $produk2, $produk3];

foreach ($daftarProduk as $produk) {
    echo "<hr>";
    echo "Kode: " . $produk->kode . "<br>";
    echo "Nama: " . $produk->nama . "<br>";
    echo "Harga: Rp" .
        number_format($produk->harga, 0, ',', '.') . "<br>";
    echo "Diskon: " . $produk->diskon . "%<br>";

    echo "Harga Setelah Diskon: Rp" .
        number_format($produk->hargaDiskon(), 0, ',', '.') . "<br>";

    echo "Stok: " . $produk->stok . " unit<br>";

    echo "Nilai Total Stok: Rp" .
        number_format($produk->nilaiStok(), 0, ',', '.') . "<br>";
}
?>

</body>
</html>
